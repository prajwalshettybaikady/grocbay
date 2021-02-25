<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class MenuItemType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('itemName')
                ->add('itemPriority')
                ->add('itemShortDescription')
                ->add('itemDescription')
                ->add('itemFeaturedImageFile')
                ->add('isActive')
                ->add('category')
                ->add('salesTax')
                ->add('brand')
                ->add('alert');
  $builder->add('type',ChoiceType::class,array(
                    'choices'=>array('Variable Stock [Ex Biscuits packs]'=>'0','Single Stock [Ex Vegetable, Fruits & Meat ]'=>'1')));
  $builder->add('delivery',ChoiceType::class,array(
                    'choices'=>array('Slot Based Delivery'=>'slot','1 - 2 Days'=>'1-2','2 - 3 days'=>'2-3','3 - 4 days'=>'3-4'))); 
                     $builder->add('vegType',ChoiceType::class,array(
                    'choices'=>array('None'=>'none','Veg'=>'veg','Non-Veg'=>'non','Meat/Fish'=>'fish')));
    $builder->add('duration',ChoiceType::class,array(
                    'choices'=>array('No Return'=>'0','3 Hours'=>'3','6 Hours'=>'6','12 Hours'=>'12','1 day'=>'24','2 Day'=>'48','3 Day'=>'144','4 Day'=>'192','5 Day'=>'240','6 Day'=>'288','1 Week'=>'336')));
        $builder->add('priceVariation', CollectionType::class, array(
                    'entry_type'   => PriceVariationType::class,
                     'allow_add'    => true,
               'allow_delete' => true,
               'prototype'    => true,
               'required'     => false,

                ));
        
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MenuItem'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_menuitem';
    }


}
