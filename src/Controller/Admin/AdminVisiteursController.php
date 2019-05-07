<?php
//src/Controller/LuckyController.php
namespace App\Controller\Admin;

use App\Entity\Visiteur;
use App\Form\VisiteurType;
use App\Repository\VisiteurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminVisiteursController extends AbstractController
{
   
    
    private $repository;
    
    public function __construct(VisiteurRepository $repository){
            $this->repository = $repository;
    }



    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Visiteur::class);

        $visiteurs = $repo->findAll();
        dump($visiteurs);
        return $this->render('admin/visiteurs/visiteurs.html.twig',[
            "visiteurs" => $visiteurs  
        ]);
    }


    public function new(Request $request)
    {
        $visiteur = new Visiteur();
        
        $form = $this->createForm(VisiteurType::class,$visiteur);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($visiteur);
            $em->flush();
            $this->addFlash("success","Le visiteur a bien été créé");
            return $this->redirectToRoute("admin.visiteurs");
        }

        return $this->render('admin/visiteurs/new.html.twig', [
            'current_menu' => 'visiteur',
            'visiteur'      => $visiteur,
            'form'         => $form->createView()
        ]);
    }


    public function edit($id, Request $request){
        $visiteur = $this->repository->find($id);
        $form = $this->createForm(VisiteurType::class,$visiteur);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash("success","Le visiteur a bien été modifé");
            return $this->redirectToRoute("admin.visiteurs");
        }


        return $this->render('admin/visiteurs/edit.html.twig', [
            'current_menu' => 'visiteur',
            'visiteur'      => $visiteur,
            'form'         => $form->createView()
        ]);

    }

 
    public function delete($id,Request $request){
        $visiteur = $this->repository->find($id);
 
        if($visiteur != null && $this->isCsrfTokenValid('delete_vis'.$visiteur->getVisMatricule(),$request->get('_TOKEN'))){
            dump("supp");
            $em = $this->getDoctrine()->getManager();
            $em->remove($visiteur);
            $em->flush();
            $this->addFlash("success","Le visiteur a bien été supprimé");
        }

        return $this->redirectToRoute('admin.visiteurs');
    }
    

    //Profile
    public function editMe(Request $request){
       // $visiteur = $this->repository->find($id);
       $visiteur = $this->getUser(); 
       $form = $this->createForm(VisiteurType::class,$visiteur);
         
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash("success","Le visiteur a bien été modifé");
            return $this->redirectToRoute("admin.visiteurs");
        }

       
        return $this->render('edit.html.twig', [
            'current_menu' => 'visiteur',
            'visiteur'      => $visiteur,
             'form'         => $form->createView()
        ]);
        

    } 

}