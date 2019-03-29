<?php

namespace App\Form;

use App\Entity\Labo;
use App\Entity\Secteur;
use App\Entity\Visiteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class VisiteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('visLogin',TextType::class,[
                'label' => 'Login'])
            ->add('visNom',TextType::class,[
                'label' => 'Nom'])
            ->add('visPrenom',TextType::class,[
                'label' => 'Prénom'])
            ->add('visAdresse',TextType::class,[
                'label' => 'Adresse'])
            ->add('visCp',TextType::class,[
                'label' => 'CP'])
            ->add('visVille',TextType::class,[
                'label' => 'Ville'])
            ->add('visDateEmbauche',DateTimeType::class,[
                'label' => 'Date Embauche'])
            ->add('visPassword',RepeatedType::class,[
                'label' => 'MDP',
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'repetez le mot de passe']
                ])
   //         ->add('visSalt',TextType::class,[
     //           'label' => 'SALT'])
            ->add('SecCode',EntityType::class,[
                'class' =>  Secteur::class,
                'choice_label' => 'secLibelle',
                'label'      =>  'Secteur'])
            ->add('LabCode',EntityType::class,[
                'class' =>  Labo::class,
                'choice_label' => 'LabNom',
                'label'      =>  'Labo',]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Visiteur::class,
        ]);
    }
}
