<?php
//src/Controller/LuckyController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Praticien;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PraticienRepository;


class triePraticienController extends AbstractController
{  
    private $repository;
    
    public function __construct(PraticienRepository $repository){
        $this->repository = $repository;
    }
    public function triePrat(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Praticien::class);
        /*$praticiens = $repo->findByTypCode($request->request->get('triePrat'));*/
        $praticiens = $repo->findAll();
        dump($praticiens);
        dump($request);
        return $this->render('triePraticien.html.twig',[
            'praticiens' => $praticiens,
            'prati' => $praticiens
        ]);
        
    }

}