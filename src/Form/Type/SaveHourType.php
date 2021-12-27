<?php

namespace App\Form\Type;

use App\Entity\Empleados;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class SaveHourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('area', TextType::class, [])
            ->add('state', TextType::class, [])
            ->add('city', TextType::class, [])
            ->add('address', TextType::class, [])
            ->add('phone', TextType::class, [])
            ->add('email', EmailType::class, [])
            ->add('status', CheckboxType::class, array( 
                'required' => true,
                'attr' => array('checked' => 'checked'),
            ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Empleados::class,
        ]);
    }
}