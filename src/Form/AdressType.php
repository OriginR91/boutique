<?php

namespace App\Form;

use App\Entity\Adress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Adresse :',
                'attr' => [
                    'placeholder' => 'Votre adresse...'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom :',
                'attr' => [
                    'placeholder' => 'Votre prénom...'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom :',
                'attr' => [
                    'placeholder' => 'Votre nom...'
                ]
            ])
            ->add('company', TextType::class, [
                'label' => 'Entreprise :',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre entreprise...'
                ]
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse :',
                'attr' => [
                    'placeholder' => 'Votre adresse...'
                ]
            ])
            ->add('postal', TextType::class, [
                'label' => 'Code postal :',
                'attr' => [
                    'placeholder' => 'Votre code postal...'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville :',
                'attr' => [
                    'placeholder' => 'Votre ville...'
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays :',
                'attr' => [
                    'placeholder' => 'Votre pays...'
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'N° de téléphone :',
                'attr' => [
                    'placeholder' => 'Votre numéro de téléphone...'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'btn  btn-block btn-info'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}
