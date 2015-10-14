<?php

namespace AppBundle\Form\Admins;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class AdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                'text',
                [
                    'constraints' => [
                        new NotBlank()
                    ]
                ]
            )
            ->add(
                'email',
                'email',
                [
                    'constraints' => [
                        new NotBlank(),
                        new Email()
                    ]
                ]
            )
            ->add('status');
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Staff',
        ));
    }
}