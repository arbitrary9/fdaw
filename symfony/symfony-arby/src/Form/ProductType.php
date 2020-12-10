<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array( 
                'attr'   =>  array(
                    'class'   => 'form-control')
                ))
            ->add('price', null, array( 
                'attr'   =>  array(
                    'class'   => 'form-control')
                ))
            ->add('description', null, array( 
                'attr'   =>  array(
                    'class'   => 'form-control')
                ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}