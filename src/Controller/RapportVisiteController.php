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
    
   
 
    public function index(Request $request)
    {
        $listmedic = $request->query->get('listemedic');
        $ret = '';
        
        $meds = $this->getDoctrine()->getRepository(Medicament::class)->findAll();
        $rapport = new RapportVisite();
        $form = $this->createForm(RapportVisiteType::class,$rapport);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            dump($rapport);
            return new Response('test');
            // return $this->redirectToRoute("admin.visiteurs");
        }

        $ret = $this->render('rapportvisite.html.twig',['form'=>$form->createView(),'meds'=>$meds]);
        
        
   
        return $ret;
    }
}
