<?php

namespace App\Form;

use App\Entity\PersonalEven;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PersonalEvenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description',TextType::class,[
                'attr'=> [
                    'class'=> 'title-area cassetoi',
                    'placeholder'=>'prout'
                ]
            ])
            ->add('isPrivatee')
            ->add('legend')
            ->add('date',DateType::class,[
                'widget' => 'single_text'
            ])
            // on ajoute img
            ->add('images',FileType::class,[
                'label' => 'form.order.submit_to_company',
                'multiple'=> true,
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'class'=> 'card-text',
                ],

            ])

            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PersonalEven::class,
        ]);
    }
}
