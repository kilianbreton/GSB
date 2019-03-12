<?php

namespace App\Form;

use App\Entity\Visiteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VisiteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('getLogin')
            ->add('getNom')
            ->add('getPrenom')
            ->add('getAdresse')
            ->add('getCp')
            ->add('getVille')
            ->add('getDateembauche')
            ->add('getPassword')
            ->add('getSalt')
            ->add('getSecCode')
            ->add('getLabCode')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Visiteur::class,
        ]);
    }
}
