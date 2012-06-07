<?php

namespace Rithis\DanielleBundle\Form\Type\CompanyDescription;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('properties', 'collection', array(
                'type' => new PropertyType(),
                'allow_add' => true,
                'allow_delete' => true,
            ))
        ;
    }

    public function getName()
    {
        return 'group';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rithis\\DanielleBundle\\Entity\\CompanyDescription\\Group',
        ));
    }
}
