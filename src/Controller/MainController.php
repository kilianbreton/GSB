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
    
    //vue praticien
    public function addAction (Request $request) {
        $praticien = new Praticien();

        
        $formPrat = $this->createForm(PraticienType::class,$praticien);

        $formPrat->handleRequest($request);

        if ($formPrat->isSubmitted() && 'rechercher' === $formPrat->getClickedButton()->getName()) {
            $praticien = $formPrat->getData()->getTypCode();
         }

        
        return $this->render('praticien.html.twig',[
            'selectprat'=>$formPrat->createView(),
            'prat' => $praticien
        ]);          
    }
    
    
    
    
    
    //vue médicament
    public function addAction2 (Request $request) {
        $medicament = new Medicament();
        
        
        $formMedoc = $this->createForm(MedicamentType::class,$medicament);
        
        $formMedoc->handleRequest($request);
        
        
        
        if ($formMedoc->isSubmitted()) {
            $medicament = $formMedoc->getData()->getMedDepotlegal();
        }
        
        
        return $this->render('medicament.html.twig',[
            'selectmed'=>$formMedoc->createView(),
            'medoc' => $medicament
        ]);
    }
}