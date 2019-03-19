<?php

namespace App\Form;

use App\Entity\Secteur;
use App\Entity\Visiteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Entity\Labo;

class VisiteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Login',TextType::class,[
                'label' => 'Login'])
            ->add('Nom',TextType::class,[
                'label' => 'Nom'])
            ->add('Prenom',TextType::class,[
                'label' => 'Prénom'])
            ->add('Adresse',TextType::class,[
                'label' => 'Adresse'])
            ->add('Cp',TextType::class,[
                'label' => 'CP'])
            ->add('Ville',TextType::class,[
                'label' => 'Ville'])
            ->add('visDateEmbauche',DateTimeType::class,[
                'label' => 'Date Embauche'])
            ->add('Password',TextType::class,[
                'label' => 'MDP'])
            ->add('Salt',TextType::class,[
                'label' => 'SALT'])
            ->add('SecCode',EntityType::class,[
                'class' =>  Secteur::class,
                'choice_label' => 'secLibelle',
                'label'      =>  'Secteur'])
            ->add('LabCode',EntityType::class,[
                'class' =>  Labo::class,
                'choice_label' => 'LabNom',
                'label'      =>  'Labo']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Visiteur::class,
        ]);
    }
}
