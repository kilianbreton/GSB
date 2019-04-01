<?php

namespace App\Form;

use App\Entity\Praticien;
use App\Entity\TypePraticien;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class PraticienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder        
              ->add('typCode',EntityType::class, array(
                  'class'=>Praticien::class,
                  'choice_label'=>'praNom',
                  'label'=>' '
              ))

              ->add('rechercher', SubmitType::class, ['label' => 'rechercher'])
         

              ->getForm();
              
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Praticien::class,
        ]);
    }
}