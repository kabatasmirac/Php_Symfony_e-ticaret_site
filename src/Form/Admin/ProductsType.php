<?php

namespace App\Form\Admin;

use App\Entity\Admin\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isim')
            ->add('image')
            ->add('code')
            ->add('fiyat')
            ->add('beden')
            ->add('ozellik')
            ->add('renk')
            ->add('adet')
            ->add('category_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Products::class,

            'csrf_protection' => false,
        ]);
    }
}
