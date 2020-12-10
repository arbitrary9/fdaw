<?php

namespace App\Form;

use App\Entity\Component;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComponentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array( 
                'attr'   =>  array(
                    'class'   => 'form-control')
                )
            )
            ->add('price', null, array( 
                'attr'   =>  array(
                    'class'   => 'form-control')
                ))
            ->add('description', null, array( 
                'attr'   =>  array(
                    'class'   => 'form-control')
                ))
            ->add('product', null, array( 
                'attr'   =>  array(
                    'class'   => 'form-control')
                ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Component::class,
        ]);
    }
}