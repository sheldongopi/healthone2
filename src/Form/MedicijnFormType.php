<?php

namespace App\Form;

use App\Entity\Medicijnen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicijnFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('naam')
            ->add('werking')
            ->add('bijwerking')
            ->add('prijs')
            ->add('verzekerd', CheckboxType::class, ['required'=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Medicijnen::class,
        ]);
    }
}
