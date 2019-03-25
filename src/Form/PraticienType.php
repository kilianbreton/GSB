<?php

namespace App\Form;

use App\Entity\Praticien;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\TypePraticien;

class PraticienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('praNom',TextType::class,['label'             =>  'Nom'])
            ->add('praPrenom',TextType::class,['label'          =>  'Prenom'])
            ->add('praAdresse',TextType::class,['label'         =>  'Adresse'])
            ->add('praCp',TextType::class,['label'              =>  'Code postal'])
            ->add('praVille',TextType::class,['label'           =>  'Ville'])
            ->add('praCoefnotoriete',TextType::class,['label'   =>  'Coef'])
            ->add('typCode',EntityType::class,['label'          =>  'Type',
                                               'class'          =>  TypePraticien::class ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Praticien::class,
        ]);
    }
}
