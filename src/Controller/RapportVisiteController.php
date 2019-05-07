<?php
//src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Form\RapportVisiteType;
use App\Entity\RapportVisite;
use App\Entity\Offrir;
use App\Entity\Medicament;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class RapportVisiteController extends AbstractController
{
    
   



    public function list(Request $request){
        $visiteur = $this->getUser(); 
        $rapports = $this->getDoctrine()->getRepository(RapportVisite::class)->findByVisMatricule($visiteur->getVisMatricule());
        dump($rapports);
        return $this->render('rapports.html.twig',[
            "rapports" => $rapports 
        ]);
    }


    public function show(Request $request, $id){
        $visiteur = $this->getUser();
        $rapport = $this->getDoctrine()->getRepository(RapportVisite::class)->findByRapNum([$visiteur->getVisMatricule(),$id]);
        $offrir = $this->getDoctrine()->getRepository(Offrir::class)->findByRapNum([$visiteur->getVisMatricule(),$id]);
        $medicRepo = $this->getDoctrine()->getRepository(Medicament::class);
        
        dump($offrir);
        $medics = array(array());
        $i = 0;
        foreach($offrir as $of){
            $medics[$i][0] = $medicRepo->findByMedDepotlegal($of->getMedDepotlegal());
            $medics[$i][1] = $of->getOffQte();
            $i++;
        }

        dump($medics);


        return $this->render('rapport.show.html.twig',[
            "rapport" => $rapport[0],
            "medics" => $medics
        ]);

    }
 
    public function index(Request $request)
    {   
        $meds = $this->getDoctrine()->getRepository(Medicament::class)->findAll();
        $visiteur = $this->getUser(); 
        $rapports = $this->getDoctrine()->getRepository(RapportVisite::class)->findByVisMatricule($visiteur->getVisMatricule());
        $rapport = new RapportVisite();
        $form = $this->createForm(RapportVisiteType::class,$rapport);
        $form->handleRequest($request);
        dump($rapport);

        if($form->isSubmitted() && $form->isValid()){
           

            //Set composite PrimaryKey-----------------------------------------------------------------------------
            $rapport->setRapNum($rapports[count($rapports) - 1]->getRapNum() + 1);
            $rapport->setVisMatricule($visiteur);
        
            //Manage Offrir----------------------------------------------------------------------------------------
            $data = $this->Parse($rapport->getData(), $meds, $rapport);
            dump($data);
           
            //Persist----------------------------------------------------------------------------------------------
            $em = $this->getDoctrine()->getManager();
            foreach($data as $off){
                $em->persist($off);
            }
                
            $em->persist($rapport);
            $em->flush();
            
          

            // return $this->redirectToRoute("admin.visiteurs");
        }

        return $this->render('rapportvisite.html.twig',['form'=>$form->createView(),'meds'=>$meds]);
        
        
   
    }

    
    private function Parse($f, $meds, $rapport){
        $tab1 = explode(";", $f);
        $tab = array();
        for($i=0; $i<count($tab1)-1; $i++){
            $tinfo = explode(",", $tab1[$i]);
           // $tab[$i][0] = $tinfo[0];
            $tab[$i] = new Offrir();
            $tab[$i]->setVisMatricule($rapport->getVisMatricule());
            $tab[$i]->setRapNum($rapport->getRapNum());
            $tab[$i]->setMedDepotLegal($meds[$tinfo[0]]->getMedDepotLegal());
            $tab[$i]->setOffQte($tinfo[1]);
        }
        return $tab;
    }

}
