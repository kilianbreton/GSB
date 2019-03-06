<?php
//src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Visiteur;

class VisiteursController extends AbstractController
{
   
    /**
     * @Route("", name ="index")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Visiteur::class);

        $visiteurs = $repo->findAll();
        dump($visiteurs);
        return $this->render('visiteurs.html.twig',[
            "visiteurs" => $visiteurs  
        ]);
    }
}