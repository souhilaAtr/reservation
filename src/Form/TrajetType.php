<?php

namespace App\Form;

use App\Entity\Trajet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrajetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('gareDepart')
            ->add('gareArrivee')
            ->add('departLe', null, [
                'widget' => 'single_text',
            ])
            ->add('arrivÃeeLe', null, [
                'widget' => 'single_text',
            ])
            ->add('prix')
            ->add('placesTotales')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trajet::class,
        ]);
    }
}
