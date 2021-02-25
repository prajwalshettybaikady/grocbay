<?php

namespace AppBundle\Form;

use AppBundle\Form\PackageExtrasType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ExtraPackageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('packageName')
                ->add('pricingType',ChoiceType::class,array(
                    'choices'=>array(
                        'Single'=>'single',
                        'Multiple'=>'multiple',
                    )
                ))
                ->add('packageExtras', CollectionType::class, array(
                    'entry_type'   => PackageExtrasType::class,
                    'allow_add'    => true,
                    'allow_delete' => true,
                    'required'   => true,
                    'by_reference' =>false,
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ExtraPackage'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_extrapackage';
    }


}
