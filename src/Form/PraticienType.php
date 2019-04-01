<?php

namespace App\Form;

use App\Entity\Praticien;
use App\Entity\TypePraticien;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PraticienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('praNom',TextType::class,             ['label'        =>  'Nom'])
            ->add('praPrenom',TextType::class,          ['label'        =>  'Prenom'])
            ->add('praAdresse',TextType::class,         ['label'        =>  'Adresse'])
            ->add('praCp',TextType::class,              ['label'        =>  'Code postal'])
            ->add('praVille',TextType::class,           ['label'        =>  'Ville'])
            ->add('praCoefnotoriete',TextType::class,   ['label'        =>  'Coef'])
            ->add('typCode',EntityType::class,          ['label'        =>  'Type',
                                                        'class'         =>  TypePraticien::class,
                                                        'choice_label'  => 'typLibelle'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Praticien::class,
        ]);
    }
}
