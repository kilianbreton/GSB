<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class IndexController extends AbstractController{

    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }


    public function index()
    {
        $user = $this->getUser();
   
        if($user == null){
            return $this->redirectToRoute('login');
        }
        else{
            if($user->getRoles() == ['ROLE_USER']){
                return $this->redirectToRoute('profile');
              
            }
            else{
                return $this->redirectToRoute('admin');
            }
        }
        dump($user->getRoles());
        return $this->render('base.html.twig');   
    }



}