<?php

namespace App\Controller\Admin;

use App\Entity\Offrir;
use App\Entity\Visiteur;
use App\Form\VisiteurType;
use App\Entity\RapportVisite;
use App\Repository\VisiteurRepository;
use App\Repository\RapportVisiteRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\OffrirRepository;

class AdminRapportController extends AbstractController
{
    private $repository;
    
    public function __construct(RapportVisiteRepository $repository){
            $this->repository = $repository;
    }



    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(RapportVisite::class);
        $repo2 = $this->getDoctrine()->getRepository(Offrir::class);

        $rapports = $repo->findAll();
        dump($rapports);
       
        foreach($rapports as &$rap){
            dump($rap->getMeds($repo2));
        } 
        return $this->render('admin/rapports/rapports.html.twig',[
            "rapports" => $rapports  
        ]);
    }


    public function new(Request $request)
    {
        $rapport = new RapportVisite();
        
        $form = $this->createForm(RapportVisiteType::class,$rapport);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($rapport);
            $em->flush();
            $this->addFlash("success","Le RapportVisite a bien été créé");
            return $this->redirectToRoute("admin.RapportVisites");
        }

        return $this->render('admin/RapportVisites/new.html.twig', [
            'current_menu' => 'RapportVisite',
            'RapportVisite'      => $rapport,
            'form'         => $form->createView()
        ]);
    }


    public function edit($id, Request $request){
        $RapportVisite = $this->repository->find($id);
        $form = $this->createForm(RapportVisiteType::class,$RapportVisite);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash("success","Le RapportVisite a bien été modifé");
            return $this->redirectToRoute("admin.RapportVisites");
        }


        return $this->render('admin/RapportVisites/edit.html.twig', [
            'current_menu'      => 'RapportVisite',
            'RapportVisite'     => $RapportVisite,
            'form'              => $form->createView()
        ]);

    }


    public function delete($id,Request $request){
        $RapportVisite = $this->repository->find($id);
 
        if($RapportVisite != null && $this->isCsrfTokenValid('delete_vis'.$RapportVisite->getMat(),$request->get('_TOKEN'))){
            dump("supp");
            $em = $this->getDoctrine()->getManager();
            $em->remove($RapportVisite);
            $em->flush();
            $this->addFlash("success","Le RapportVisite a bien été supprimé");
        }

        return $this->redirectToRoute('admin.RapportVisites');
    }
    

    //Profile
    public function editMe(Request $request){
       // $RapportVisite = $this->repository->find($id);
       $RapportVisite = $this->getUser(); 
       $form = $this->createForm(RapportVisiteType::class,$RapportVisite);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash("success","Le RapportVisite a bien été modifé");
            return $this->redirectToRoute("admin.RapportVisites");
        }


        return $this->render('admin/RapportVisites/edit.html.twig', [
            'current_menu' => 'RapportVisite',
            'RapportVisite'      => $RapportVisite,
            'form'         => $form->createView()
        ]);

    } 

}