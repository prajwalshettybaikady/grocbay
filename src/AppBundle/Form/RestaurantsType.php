<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;




class RestaurantsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('restaurantName')->add('restaurantAddress',TextareaType::class, ['attr' => ['rows' => '4']])->add('restaurantLocation')->add('primaryMobile')->add('secondaryMobile')->add('primaryEmail')->add('secondaryEmail')->add('iconFile');
        $builder->add('gst')
                ->add('restaurantLat')
                ->add('serviceFee')
                ->add('restaurantLong')
                ->add('allowOutOfStock')
                ->add('countryCode')
                ->add('currencyFormat',ChoiceType::class,array(
                    'choices'=>array('INR'=>'₹','AED'=>'AED')))                
                ->add('slot',ChoiceType::class,array(
                    'choices'=>array('Default'=>'0','5 Min'=>'5','15 Min'=>'15','30 Min'=>'30','1 Hour'=>'60','2 Hour'=>'120','3 Hour'=>'180','6 Hour'=>'360','12 Hour'=>'720','12 Hour'=>'720','1 Day'=>'1440')))
                 
                    ->add('minimumOrderAmount');
        // $builder->add('orderType',ChoiceType::class,array(
        //             'choices'=>array('Cash on delivery'=>'cod','Card on delivery'=>'card','Online payment'=>'online'),
        //             'multiple'=>true,
        //         ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Restaurants'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_restaurants';
    }


}
