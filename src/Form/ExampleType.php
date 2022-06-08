<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExampleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Choices', ChoiceType::class, [
                'expanded' => true,
                'label_attr' => [
                    'class' => 'radio-inline',
                ],
                'choices' => [
                    'Choice 1' => 'choice1',
                    'Choice 2' => 'choice2',
                    'Choice 3' => 'choice3',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
