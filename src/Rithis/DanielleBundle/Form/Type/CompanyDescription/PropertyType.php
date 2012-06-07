<?php

namespace Rithis\DanielleBundle\Form\Type\CompanyDescription;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('value')
        ;
    }

    public function getName()
    {
        return 'property';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rithis\\DanielleBundle\\Entity\\CompanyDescription\\Property',
        ));
    }
}
