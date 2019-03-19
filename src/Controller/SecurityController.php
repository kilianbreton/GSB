<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController{

    public function login(AuthenticationUtils $authenticationUtils){
        $last = $authenticationUtils->getLastUsername();
        $err = $authenticationUtils->getLastAuthenticationError();
        return $this->render('security/login.html.twig',[
            'current_menu'  => 'login',
            'last_username' => $last,
            'error'         => $err
        ]);
    }

}