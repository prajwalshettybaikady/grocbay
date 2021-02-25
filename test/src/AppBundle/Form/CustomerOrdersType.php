<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CustomerOrderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $order=$builder->getData();
        $orderStatus=[];

        if($order->getOrderStatus()=="received"){
            $orderStatus["Received"]="received";
            $orderStatus["Assign To Picker"]="pick";
            $orderStatus["Processing"]="processing";
            $orderStatus["Order ready"]="ready";
            $orderStatus["Cancelled"]="cancelled";
            $orderStatus["Completed"]="completed";
        }elseif($order->getOrderStatus()=="processing"){
            $orderStatus["Assign To Picker"]="pick";
            $orderStatus["Processing"]="processing";
            $orderStatus["Order ready"]="ready";
            // $orderStatus["Order on the way"]="onway";
            $orderStatus["Cancelled"]="cancelled";
            $orderStatus["Completed"]="completed";
        }elseif($order->getOrderStatus()=="ready"){
            $orderStatus["Order ready"]="ready";
            $orderStatus["Order on the way"]="onway";
            $orderStatus["Cancelled"]="cancelled";
            $orderStatus["Completed"]="completed";
        }
        elseif($order->getOrderStatus()=="pick"){
            $orderStatus["Order ready"]="ready";
            $orderStatus["Order on the way"]="onway";
            $orderStatus["Cancelled"]="cancelled";
            $orderStatus["Completed"]="completed";
        }elseif($order->getOrderStatus()=="dispatched"){
            $orderStatus["Cancelled"]="cancelled";
            $orderStatus["Completed"]="completed";
        }elseif($order->getOrderStatus()=="onway"){
            // $orderStatus["Order on the way"]="onway";
            $orderStatus["Cancelled"]="cancelled";
            $orderStatus["Completed"]="completed";
        }elseif($order->getOrderStatus()=="delivered"){
            $orderStatus["Completed"]="completed";
        }

        
        if($order->getOrderStatus()!="delivered"){
            $builder->add('paymentStatus',ChoiceType::class,array(
                                    'choices'=>array('Pending'=>'pending',
                                        'Failed'=>'failed',
                                        'Paid'=>'paid', 
                                    )
                            ));
        }
        $builder->add('orderStatus',ChoiceType::class,array(
                    'choices'=>$orderStatus
                ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CustomerOrder'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_customerorder';
    }


}
