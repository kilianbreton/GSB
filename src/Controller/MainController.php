<?php
//src/Controller/LuckyController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Medicament;
use App\Form\MedicamentType;
use App\Form\PraticienType;
use App\Entity\Praticien;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PraticienRepository;




class MainController extends AbstractController
{        

    public function main()
    {
        return $this->render('accueil.html.twig'); 
    }
}