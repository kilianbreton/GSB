<?php

//src/Controller/LuckyController.php
namespace App\Controller\Admin;


use App\Entity\Praticien;
use App\Form\PraticienType;
use App\Repository\VisiteurRepository;
use App\Repository\PraticienRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AdminPraticienController extends AbstractController
{
   
    
    private $repository;
    
    public function __construct(PraticienRepository $repository){
            $this->repository = $repository;
    }

    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Praticien::class);

        $praticiens = $repo->findAll();
        return $this->render('admin/praticiens/praticien.html.twig',[
            "praticiens" => $praticiens  
        ]);
    }


    public function new(Request $request)
    {
        $praticien = new Praticien();
        
        $form = $this->createForm(PraticienType::class,$praticien);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($praticien);
            $em->flush();
            $this->addFlash("success","Le praticien a bien été créé");
            return $this->redirectToRoute("admin.praticiens");
        }

        return $this->render('admin/praticiens/new.html.twig', [
            'current_menu' => 'praticien',
            'praticien'      => $praticien,
            'form'         => $form->createView()
        ]);
    }


    public function edit($id, Request $request){
        $praticien = $this->repository->find($id);
        $form = $this->createForm(PraticienType::class,$praticien);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash("success","Le praticien a bien été modifé");
            return $this->redirectToRoute("admin.praticiens");
        }


        return $this->render('admin/praticiens/edit.html.twig', [
            'current_menu'      => 'praticien',
            'praticien'         => $praticien,
            'form'              => $form->createView()
        ]);

    }


    public function delete($id,Request $request){
        $praticien = $this->repository->find($id);
 
        if($praticien != null && $this->isCsrfTokenValid('delete_prat'.$praticien->getPraNom(),$request->get('_TOKEN'))){
            dump("supp");
            $em = $this->getDoctrine()->getManager();
            $em->remove($praticien);
            $em->flush();
            $this->addFlash("success","Le praticien a bien été supprimé");
        }

        return $this->redirectToRoute('admin.praticiens');
    }
    

    //Profile
    public function editMe(Request $request){
       // $praticien = $this->repository->find($id);
       $praticien = $this->getUser(); 
       $form = $this->createForm(praticienType::class,$praticien);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash("success","Le praticien a bien été modifé");
            return $this->redirectToRoute("admin.praticiens");
        }


        return $this->render('admin/praticiens/edit.html.twig', [
            'current_menu' => 'praticien',
            'praticien'      => $praticien,
            'form'         => $form->createView()
        ]);

    } 

}