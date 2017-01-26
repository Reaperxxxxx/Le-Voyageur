<?php

namespace LeVoyageur\ClientBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


            ->add('Nom')
            ->add('Prenom')
            ->add('num_tel')
            ->add('num_tel_secour')
            ->add('type_rand', ChoiceType::class, array(
                'choices'  => array(

                    'Amateur' => 'Amateur',
                    'Expert' => 'Expert',
                ),
            ))
            ->add('datenaissance',DateType::class, array(
            'widget' => 'choice',))
        ;

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}