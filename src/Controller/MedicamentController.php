<?php
//src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\Medicament;
use App\Repository\MedicamentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MedicamentController extends AbstractController
{
   
    
    private $repository;
    
    public function __construct(MedicamentRepository $repository){
            $this->repository = $repository;
    }



    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Medicament::class);

        $medicaments = $repo->findAll();
        return $this->render('medicament.html.twig',[
            "medicaments" => $medicaments  
        ]);
    }


   

}