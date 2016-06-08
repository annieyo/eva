<?php

namespace CoreBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PoolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('question', EntityType::class, array(
            'class' => 'CoreBundle:Question',
            'choice_label' => 'Text',
             'multiple' => true,
             'expanded' => true,
        ))
        ->add('questionnaire', EntityType::class, array(
            'class' => 'CoreBundle:Questionnaire',
            'choice_label' => 'title',
            'multiple' => false,
            'expanded' => false,
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoreBundle\Entity\Questionnaire',
        ));
    }
}