<?php

namespace App\Form\Type;

use App\Entity\ParteDiario;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SaveHourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {                     
        $id = $options['info']['id'];
        $builder
            ->add('empleado', EntityType::class, [
                'class' => 'App:Empleados',  
                'query_builder' => function (EntityRepository $er) use ($id) {                               
                    return $er->createQueryBuilder('e')
                        ->andWhere('e.id = :id')
                        ->setParameter('id', $id);
                },              
                'choice_label' => 'name',            
            ])
            ->add('area', EntityType::class, [ 
                'class'         => 'App:Areas',
                'required'      => true, 
                'label'         => 'Area',                               
                'choice_label'  => 'name',    
                'placeholder'   => 'Seleccione un Area', 
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('a')->orderBy('a.name');
                },
                'attr'          => ['class' => 'js-select2'],    
                'empty_data' => null,      
            ])
            ->add('fecha', DateType::class, [
                'widget' => 'single_text',
                'required'=>true,
                'empty_data' => null
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