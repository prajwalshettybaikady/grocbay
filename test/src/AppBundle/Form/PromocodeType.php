<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PromocodeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('promoCode')
                ->add('startDate',TextType::class)
                ->add('endDate',TextType::class)
                ->add('discountType',ChoiceType::class,array(
                    'choices'=>array('Fixed Amount Discount'=>'amount','Percentage Discount'=>'perc')
                ))
                ->add('discountValue')
                ->add('isActive')
                // ->add('quantity')
                ->add('usageType',ChoiceType::class,array(
                    'choices'=>array('Unlimited'=>'unlimited','Limited'=>'limited')
                ))
                ->add('usageLimit')
                ->add('minOrderAmountValidation',ChoiceType::class,array(
                    'choices'=>array('Yes'=>true,'No'=>false)
                ))
                ->add('maxDiscount')
                ->add('maxDiscountAmount')
                  ->add('type',ChoiceType::class,array(
                    'choices'=>array('Flat Discount'=>true,'Cashback'=>false),
                    'expanded'=>true
                ))         
                ->add('newUsersOnly',ChoiceType::class,array(
                    'choices'=>array('Yes'=>true,'No'=>false),
                    'expanded'=>true
                ))
                ->add('promocodeFor',ChoiceType::class,array(
                    'choices'=>array('Specific Product'=>'0','Category'=>'1','All Products'=>'2')
                ))
                ->add('minOrderAmount');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Promocode'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_promocode';
    }


}
