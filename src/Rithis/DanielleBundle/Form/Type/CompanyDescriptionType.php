<?php

namespace Rithis\DanielleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompanyDescriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('groups', 'collection', array(
                'type' => new CompanyDescription\GroupType(),
                'allow_add' => true,
                'allow_delete' => true,
            ))
        ;
    }

    public function getName()
    {
        return 'rithis_danielle_company_description';
    }
}
