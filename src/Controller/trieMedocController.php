<?php
//src/Controller/LuckyController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\MedicamentRepository;
use App\Entity\Medicament;


class trieMedocController extends AbstractController
{
    private $repository;
    
    public function __construct(MedicamentRepository $repository){
        $this->repository = $repository;
    }
    public function trieMedoc(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Medicament::class);
        /*$praticiens = $repo->findByTypCode($request->request->get('triePrat'));*/
        $medoc = $repo->findAll();
        return $this->render('medicament.html.twig',[
            'medoc' => $medoc,
            'medi' => $medoc
        ]);
        
    }
}