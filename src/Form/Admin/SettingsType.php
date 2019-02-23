<?php

namespace App\Form\Admin;

use App\Entity\Admin\Settings;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('aciklama')
            ->add('keyword')
            ->add('firmname')
            ->add('adres')
            ->add('fax')
            ->add('tel')
            ->add('email')
            ->add('smtpserver')
            ->add('smtpmail')
            ->add('smtppass')
            ->add('smtpport')
            ->add('about_us')
            ->add('contact')
            ->add('referans')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Settings::class,
        ]);
    }
}
