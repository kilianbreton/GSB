<?php namespace App\Form;


use App\Entity\Praticien;
use App\Entity\RapportVisite;
use App\Entity\Medicament;
use App\Entity\Offrir;
use App\Entity\Visiteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\Types\StringType;

class RapportVisiteType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
      /*  ->add('visMatricule', EntityType::class, [
          'class'=> Visiteur::class,
           'choice_label'=> 'visMatricule'
        ])*/
         ->add('praNum', EntityType::class, [
            'class'=> Praticien::class,
            'choice_label'=> 'praNom',
         ])
         ->add('rapDate', DateType::class, [
            'data' => new \DateTime()
         ])
         ->add('rapBilan', TextareaType::class, [
             
         ])
         ->add('rapMotif', TextareaType::class, [
             
         ])
         ->add('data',HiddenType::class,[
         ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RapportVisite::class,
        ]);
    }
}
