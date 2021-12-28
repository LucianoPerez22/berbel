<?php

namespace App\Form\Type;

use App\Entity\Areas;
use App\Entity\Empleados;
use App\Entity\ParteDiario;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class SaveHourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {                     
        $id = $options['info']['id'];
        $builder
            ->add('empleado', EntityType::class, [
                'class' => Empleados::class,  
                'query_builder' => function (EntityRepository $er) use ($id) {                               
                    return $er->createQueryBuilder('e')
                        ->andWhere('e.id = :id')
                        ->setParameter('id', $id);
                },              
                'choice_label' => 'name',            
            ])
            ->add('area', EntityType::class, [
                'class' => Areas::class,                                   
                'choice_label' => 'name',    
                'placeholder' => 'Seleccione una opcion',               
            ])
            ->add('fecha', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('numero', TextType::class, []);
           
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ParteDiario::class,           
            'info'       => null
        ]);     
    }
}