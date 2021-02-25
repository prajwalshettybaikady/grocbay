<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BillingController extends Controller
{
    
    public function deliveryBoyAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Admin:Billing/deliveryBoy.html.twig');
    }
    
    public function restaurantAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Admin:Billing/restaurant.html.twig');
    }
    
    public function appFoodraAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Admin:Billing/appFoodra.html.twig');
    }
}
