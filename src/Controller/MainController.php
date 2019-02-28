<?php
//src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\Visiteur;
use Symfony\Component\HttpFoundation\Response;

class MainController
{
   

    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $vis = new Visiteur();
        $vis->setVisMatricule('z0z0z');
        $vis->setVisLogin('z0z0z');
        $vis->setVisNom('z0z0z');
        $vis->setVisPrenom('z0z0z');
        $vis->setVisAdresse('z0z0z');
        $vis->setVisCp('z0z0z');
        $vis->setVisVille('z0z0z');
 //       $vis->setVisDateembauche(new DateTimeImmutable());
        $vis->setVisPassword('z0z0z');
        $vis->setVisSalt('z0z0z');
        $vis->setSecCode('z');
        $vis->setLabCode('z');
        $entityManager->persist($product);

        return new Response('<html><body><h1>hello world !</h1></body></html>'
        );
    }
}