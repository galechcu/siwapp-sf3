<?php

namespace Siwapp\EstimateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EstimateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('draft')
            ->add('number')
            ->add('sent_by_email')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'Siwapp\EstimateBundle\Entity\Estimate',
        ]);
    }
}
