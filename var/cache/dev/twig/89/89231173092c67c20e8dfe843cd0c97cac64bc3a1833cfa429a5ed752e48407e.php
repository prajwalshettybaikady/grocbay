<?php

/* AppBundle:Admin:Orders/orderForm.html.twig */
class __TwigTemplate_570d59696839dc491cba814998b8e3145b7a08bdc0ba757ff9e3db15e9c454d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("@AppBundle/" . ($context["myExtend"] ?? $this->getContext($context, "myExtend"))) . "/base.html.twig"), "AppBundle:Admin:Orders/orderForm.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_407186709e7f7fb1152aa1832579ff783f2f3fa8f4862f25d1202e1642325e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407186709e7f7fb1152aa1832579ff783f2f3fa8f4862f25d1202e1642325e42->enter($__internal_407186709e7f7fb1152aa1832579ff783f2f3fa8f4862f25d1202e1642325e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/orderForm.html.twig"));

        $__internal_c8ee69491eedd0cdaae822c055b81638d84e21aef7c298d197070d1ba97d0fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ee69491eedd0cdaae822c055b81638d84e21aef7c298d197070d1ba97d0fe9->enter($__internal_c8ee69491eedd0cdaae822c055b81638d84e21aef7c298d197070d1ba97d0fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/orderForm.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_407186709e7f7fb1152aa1832579ff783f2f3fa8f4862f25d1202e1642325e42->leave($__internal_407186709e7f7fb1152aa1832579ff783f2f3fa8f4862f25d1202e1642325e42_prof);

        
        $__internal_c8ee69491eedd0cdaae822c055b81638d84e21aef7c298d197070d1ba97d0fe9->leave($__internal_c8ee69491eedd0cdaae822c055b81638d84e21aef7c298d197070d1ba97d0fe9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9cf9794419ad398694a0fc53740f054393e4ba8e792652a701c4d765e2039ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9cf9794419ad398694a0fc53740f054393e4ba8e792652a701c4d765e2039ef->enter($__internal_b9cf9794419ad398694a0fc53740f054393e4ba8e792652a701c4d765e2039ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61f06770162b36d363e4ac61036bb7c3eef8708983f299f9d910cd8f97d7eaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f06770162b36d363e4ac61036bb7c3eef8708983f299f9d910cd8f97d7eaad->enter($__internal_61f06770162b36d363e4ac61036bb7c3eef8708983f299f9d910cd8f97d7eaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<style type=\"text/css\">
thead.ban td {
    padding: 5px !important;
    font-size: 11px;
    font-weight: 600;
    text-transform: capitalize;
}

.pr
   {
    font-size: 10px;
    text-transform: uppercase;
   }
   @media print{
   .noprint{
   display:none;
   }

 
      .print-area
   {
    display: block !important;
    background: #fff !important;
   }
   }
      .print-area
   {
    display: none;
   }
   .edit-order
   {
   float: right;
   font-weight: bolder;
   text-transform: uppercase;
   font-size: 11px;
   }
   .borderless tr {
    border: none;
}
 @media print
      {
         @page {
           margin-top: 0;
           margin-bottom: 0;
         }
         body  {
           padding-top: 72px;
           padding-bottom: 72px ;
         }
         *
         {
          background: #fff !important;
         }
      } 

.x td, .x th {
    border-color: #f3f1f1;
    padding: 0px;
    font-weight: 500;
    font-size: 11px;
}
.xx td, .xx th {
    border-color: #f3f1f1;
    padding: 0px;
    font-weight: 500;
    font-size: 13px;
}

      .ss
      {
        background: #fff0;
    color: #000 !important;
    border: none;
    box-shadow: none;
    }
    .select1{
       padding: 7px 16px;
    }
    .card-header{
        background-color: #fff;
        border-color: #fff;
    }
    .card-header section > div.collapsed {
        color: #000;
       }

     select.info {

  /* styling */
  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box; 
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}
 
 .form-control.form-control-sm {
    padding: 6px 16px;
 }
      
select.classic {
  background-image:
    linear-gradient(45deg, transparent 50%, #000 50%),
    linear-gradient(135deg, #000 50%, transparent 50%),
    linear-gradient(to right, #c7c7c7, #c7c7c7);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
}

select.classic:focus {
  background-image:
    linear-gradient(45deg, #000 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, #000 50%),
    linear-gradient(to right, #c7c7c7, #c7c7c7);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
  border-color: grey;
  outline: 0;
}
.right-sidebar-option {
      background: #f1f2f3;
}

.card-header section > div:not(.collapsed) {
    color: #000;
}
.right-sidebar-card {
  margin-bottom:0;
  border-radius:0;
}

.select2-container .select2-selection--single{
  height: 100% !important;
}

select.form-control.form-control-sm.fa.fa-angle-down {
    background: #E2A03F;
    color: #fff !important;
}

input.submit-btn.submit-btn.btn-block {
    background: #2F4ACA;
    border: none;
    height: 33px;
    color: #ffff;
    font-size: 15px;
    font-weight: 700;
}

.otype {
   font-weight:700;
}
.importantRule{
   color:#fff !important;
}
</style>
<div class=\"noprint\">
<!-- new invoice start -->


  ";
        // line 188
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 189
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@AppBundle/Themes/widget.html.twig"));
        echo "  
<div class=\"layout-px-spacing\">
    <div class=\"row layout-top-spacing\">
    <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"p-2\">
                <h4 class=\"\"><span class=\"badge badge-primary\">#";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo "</span> 
                 ";
        // line 196
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "dispatched")) {
            // line 197
            echo "                    <span class=\"badge\" style=\"background: #ff5722;text-transform: capitalize !important;color: #fff;\">Assigned To Delivey Boy</span>
                      ";
        } elseif (($this->getAttribute(        // line 198
($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "onway")) {
            // line 199
            echo "                    <span class=\"badge\" style=\"background: #ff5722;text-transform: capitalize !important;color: #fff;\">Out For Delivery</span>
                        ";
        } elseif (($this->getAttribute(        // line 200
($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "ready")) {
            echo " 
                    <span class=\"badge\" style=\"background: #4caf50;text-transform: capitalize !important;color: #fff;\">Order Ready</span>
                   ";
        } elseif (($this->getAttribute(        // line 202
($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "received")) {
            echo " 
                    <span class=\"badge\" style=\"background: #3f51b5;text-transform: capitalize !important;color: #fff;\">Received</span>
                     ";
        } elseif (($this->getAttribute(        // line 204
($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "processing")) {
            echo " 
                    <span class=\"badge\" style=\"background: #009688;text-transform: capitalize !important;color: #fff;\">Processing</span>
                     ";
        } elseif (($this->getAttribute(        // line 206
($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "processing")) {
            echo " 
                    <span class=\"badge\" style=\"background: #009688;text-transform: capitalize !important;color: #fff;\">Processing</span>
                     ";
        } elseif (($this->getAttribute(        // line 208
($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "delivered")) {
            echo " 
                    <span class=\"badge\" style=\"background: #4caf50;text-transform: capitalize !important;color: #fff;\">delivered</span>
                     ";
        } elseif (($this->getAttribute(        // line 210
($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "delivered")) {
            echo " 
                    <span class=\"badge\" style=\"background: #4caf50;text-transform: capitalize !important;color: #fff;\">delivered</span>
                   ";
        } else {
            // line 213
            echo "                 <span class=\"badge\" style=\"background: #4caf50;text-transform: capitalize !important;color: #fff;\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()), "html", null, true);
            echo " </span>
               ";
        }
        // line 215
        echo "               ";
        if ((($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderType", array()) == "Delivery") || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderType", array()) == "delivery"))) {
            echo "<span class=\"badge badge-success\">Home Delivery </span>";
        } elseif (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderType", array()) == "pickup")) {
            echo " <span class=\"badge badge-warning\">Pickup From Store</span> ";
        } else {
            echo " <span class=\"badge badge-danger\">Express Delivery</span> ";
        }
        // line 216
        echo "               ";
        if ((($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "membership", array()) == "0") || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "membership", array()) == "2"))) {
            echo "<span class=\"badge badge-default\">Normal Order</span>";
        } else {
            echo "<span class=\"badge badge-danger\">Membership Applied</span>
               ";
        }
        // line 218
        echo "               ";
        if ((($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "isMerged", array()) == "0") && ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "ref", array()) == 0))) {
        } else {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "ref", array()))), "html", null, true);
            echo "\" title=\"Edit\"> <span class=\"badge badge-warning\">Merged Order (";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "ref", array()), "html", null, true);
            echo ")</span> </a>";
        }
        echo " 
               <span class=\"badge badge-danger\" style=\"text-transform:capitalize;\">";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentStatus", array()), "html", null, true);
        echo "</span>
                <span style=\"float:right;\">
                 <a href=\"#kot\" onclick=\"frames['prints'].print()\" value=\"printletter\" style=\"width:100%\"  data-placement=\"bottom\" title=\"KOT Print\">
                  <img src=\"/assets/images/KOT.png\" style=\"width:24px;\"></a>
                  ";
        // line 223
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "ref", array()) == 0)) {
            // line 224
            echo "                  <a href=\"#download\" onclick=\"window.print()\" style=\"width:100%;margin-top:5px;\"   data-placement=\"bottom\" title=\"A4 Print\">
                      <img src=\"/assets/images/A4.png\" style=\"width:24px;\"></a>
";
        }
        // line 226
        echo "                
     <a href=\"#thermal\"  onclick=\"frames['frame'].print()\" value=\"printletter\"  style=\"width:100%;margin-top:5px;\"   data-placement=\"bottom\" title=\"Thermal Print\">
                      <img src=\"/assets/images/thermal.png\" style=\"width:24px;\"></a>
                    </span>
                     </h4>
         </div>
      </div>
    </div>
      <!--col-md-9-->
      <div class=\"col-md-9\">
        <div class=\"row\">
          <div class=\"col-md-6 mb-4\">
            <div class=\"card h-100\">
              <div class=\"row form-row\">
                <div class=\"col-md-12 form-group\">
                 <div class=\"card-header\">
                         <!--a href=\"#\" style=\"background: #3F51B5;color:#fff;font-size: 12px;padding: 6px;\">";
        // line 242
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderType", array())), "html", null, true);
        echo "</a-->
          </h4>
        </div>
                  <div id=\"user\">
                     <div class=\"col-md-12 form-group\">
                  <div class=\"card-body\">
                    <!--address-->
                    <h5 class=\"mb-4\">Customer Details</h5>
                    <div class=\"\">
                        <p> ";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customerName", array()), "html", null, true);
        echo "</p>
                        <p>";
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customer", array()), "email", array()), "html", null, true);
        echo "</p>
                     </div>
                     <hr>
                     <div class=\"\">
                      <p><b>Delivery Area </b>: ";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "area", array()), "html", null, true);
        echo "</p>
                          <p> ";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "address", array()), "html", null, true);
        echo "</p>
                          <p> ";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "landmark", array()), "html", null, true);
        echo "</p>
                          <p> Gst No : ";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customer", array()), "gst", array()), "html", null, true);
        echo "</p>
                          <p> Mobile : ";
        // line 260
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customer", array()), "mobileNumber", array()), "html", null, true);
        echo "</p>
                        
                     </div>
                  </div>

                  <!--end-->
                </div>
                  
                     </div>
                  </div>
                 

               
              </div>
            </div>
          </div>

          <div class=\"col-md-6 mb-4\">
            <div class=\"card h-100\">
                <div class=\"form-group col-md-12\">
 <div class=\"card-body\">
                    <!--address-->
                    <h5 class=\"mb-4\">Payment Details</h5>
                    <div class=\"row form-row\">
                        <div class=\"col-md-12 form-group\">
                           <input  type=\"text\" name=\"txt\" class=\"form-control form-control-sm\" required=\"\" value=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentType", array()), "html", null, true);
        echo "\" readonly>
                        </div>
                          <div class=\"col-md-12 form-group\">
                           <input  type=\"text\" name=\"txt\" class=\"form-control form-control-sm\" required=\"\" value=\"";
        // line 288
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderType", array()) == "Delivery")) {
            echo " Home Delivery ";
        } elseif (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderType", array()) == "pickup")) {
            echo " Pickup From Store ";
        } else {
            echo " Express Delivery ";
        }
        echo " \" readonly>
                        </div>
                         <div class=\"col-md-12 form-group\">
                           <input  type=\"text\" name=\"txt\" class=\"form-control form-control-sm\" required=\"\" value=\"";
        // line 291
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderDate", array()), "date", array()), "d-m-Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderDate", array()), "date", array()), "h-i A"), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-12 form-group\">
                           <input  type=\"text\" name=\"txt\" class=\"form-control form-control-sm\" required=\"\" value=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "fixDate", array()), "html", null, true);
        echo " around ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "fixtime", array()), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    
             
            </div>
          </div>
          </div>
        </div>
        <div class=\"col-md-12 mb-4\">        
          <div class=\"card\">
           <div class=\"card-body\">
             <h5 class=\"mb-4\">Order Items</h5>

                   <!--div class=\"col-md-12 text-right\">
                      <a href=\"#\" class=\"btn btn-primary btn-sm mb-4\"  data-toggle=\"modal\" data-target=\"#uploadCSV\">Add Items</a> 
                    </div-->
              
                    <div class=\"col-md-12\">
                      <div class=\"table-responsive m-t-10 row table-show\" style=\"display:block;\">
                       <table class=\"table table-hovered\">
                              <thead class=\"bg-primary text-white\" style=\"color:#fff;\">
                                 <tr>
                                    <th style=\"color:#fff;\">Item name</th>
                                    <th style=\"color:#fff;\">price variation</th>
                                    <th style=\"color:#fff;\">Barcode</th>
                                    <th style=\"color:#fff;\">price</th>
                                    <th style=\"color:#fff;\">quantity</th>
                                  <th style=\"color:#fff;\">Discount</th>

                                    ";
        // line 324
        if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
            // line 325
            echo "                                   <th style=\"color:#fff;\">VAT</th>
                                    ";
        } else {
            // line 327
            echo "                                    <th style=\"color:#fff;\">Tax</th>
                                    ";
        }
        // line 328
        echo "     

                               <th style=\"color:#fff;\">Sub total</th>
                                 </tr>
                              </thead>
                              <tbody>
                                ";
        // line 334
        $context["tax"] = 0;
        echo " 
                                 ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customerOrderItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 336
            echo "                                 <tr style=\"font-size:10px;\">
                                    <td>";
            // line 337
            if ((($this->getAttribute($context["item"], "isTray", array()) == "0") || ($this->getAttribute($context["item"], "isTray", array()) == ""))) {
                echo " <span style=\"color:#2196f3;font-weight:400;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                echo "</span> ";
            }
            // line 338
            echo "                                   
    ";
            // line 339
            if (($this->getAttribute($context["item"], "isTray", array()) == "3")) {
                echo " <span style=\"color:#e91e63;font-weight:400;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                echo "</span> ";
            }
            // line 340
            echo "                                       ";
            if (($this->getAttribute($context["item"], "isTray", array()) == "1")) {
                echo " <span style=\"color:#F44337;font-weight:400;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                echo "</span> ";
            }
            // line 341
            echo "                                       ";
            if (($this->getAttribute($context["item"], "isTray", array()) == "2")) {
                echo " <span style=\"color:#014c0a;font-weight:400;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                echo "</span> ";
            }
            echo "<br>
                                         ";
            // line 342
            if (($this->getAttribute($context["item"], "edited", array()) == 1)) {
                echo " Edited | Reason : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "reason", array()), "html", null, true);
            }
            // line 343
            echo "                                    </td>
                                    <td>";
            // line 344
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 345
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "barcode", array()), "html", null, true);
            echo "</td>
                                    <td>

                                      ";
            // line 348
            if (($this->getAttribute($context["item"], "discount", array()) != 0)) {
                // line 349
                $context["discount"] = $this->getAttribute($context["item"], "discount", array());
                // line 350
                $context["quantity"] = $this->getAttribute($context["item"], "quantity", array());
                // line 351
                $context["priceO"] = (($context["discount"] ?? $this->getContext($context, "discount")) / ($context["quantity"] ?? $this->getContext($context, "quantity")));
                // line 352
                $context["price"] = ($this->getAttribute($context["item"], "price", array()) + ($context["priceO"] ?? $this->getContext($context, "priceO")));
                // line 353
                echo "                                      ";
            } else {
                // line 354
                echo "                                      ";
                $context["price"] = $this->getAttribute($context["item"], "price", array());
                // line 355
                echo "                                      ";
            }
            // line 356
            echo "                                      ";
            $context["x"] = (100 + $this->getAttribute($context["item"], "tax", array()));
            // line 357
            echo "
                                     ";
            // line 358
            $context["pr"] = ((($context["price"] ?? $this->getContext($context, "price")) * 100) / ($context["x"] ?? $this->getContext($context, "x")));
            echo " 
                                     ";
            // line 360
            echo "
                                     ";
            // line 361
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                // line 362
                echo "                                       ";
                echo twig_escape_filter($this->env, twig_round(($context["pr"] ?? $this->getContext($context, "pr")), 2, "floor"), "html", null, true);
                echo "
                                     ";
            } elseif ((            // line 363
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                // line 364
                echo "                                       ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["pr"] ?? $this->getContext($context, "pr")), 2, ".", ""), "html", null, true);
                echo "
                                     ";
            }
            // line 366
            echo "
                                   </td>
                                    <td>";
            // line 368
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
            echo "  ";
            if (($this->getAttribute($context["item"], "isTray", array()) == "1")) {
                echo " <span style=\"color:#F44337;font-weight:400;\">(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trayQty", array()), "html", null, true);
                echo ")</span> ";
            }
            echo " ";
            if (($this->getAttribute($context["item"], "trayQty", array()) > $this->getAttribute($context["item"], "quantity", array()))) {
                echo " <span style=\"color:green;font-weight:400;\">(";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "trayQty", array()) - $this->getAttribute($context["item"], "quantity", array())), "html", null, true);
                echo ")</span> ";
            }
            echo "</td>
                                    ";
            // line 369
            $context["st"] = ((($this->getAttribute($context["item"], "price", array()) * $this->getAttribute($context["item"], "tax", array())) / 100) * $this->getAttribute($context["item"], "quantity", array()));
            // line 370
            echo "                                      <td class=\"\"> 
";
            // line 371
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array()), "html", null, true);
            echo "</td>
   
                                       <td class=\"text-right\">
";
            // line 374
            if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
                // line 375
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    // line 376
                    echo " ";
                    $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - twig_round(($context["pr"] ?? $this->getContext($context, "pr")), 2, "floor"));
                    echo " ";
                    $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                    echo " 

";
                } elseif ((                // line 378
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    // line 379
                    $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - twig_number_format_filter($this->env, ($context["pr"] ?? $this->getContext($context, "pr")), 2, ".", ""));
                    echo " 
";
                }
                // line 381
                $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                echo " 

 ";
                // line 384
                echo "      ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    // line 385
                    echo "         ";
                    echo twig_escape_filter($this->env, twig_round(($context["ft"] ?? $this->getContext($context, "ft")), 2, "floor"), "html", null, true);
                    echo "
      ";
                } elseif ((                // line 386
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    // line 387
                    echo "         ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["ft"] ?? $this->getContext($context, "ft")), 2, ".", ""), "html", null, true);
                    echo "
      ";
                }
                // line 389
                echo " ";
            } else {
                // line 390
                echo "<div class=\"tax\" style=\"display:flex;\">
  <div class=\"\"style=\"border-right: 1px solid;padding: 3px;font-size: 7px;\">CGST <br> ";
                // line 391
                echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "tax", array()) / 2), "html", null, true);
                echo "%  ";
                $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - ($context["pr"] ?? $this->getContext($context, "pr")));
                echo " <br> (";
                $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                echo " 
  ";
                // line 392
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, (twig_round(($context["ft"] ?? $this->getContext($context, "ft")), 2, "floor") / 2), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($context["ft"] ?? $this->getContext($context, "ft")), 2, ".", "") / 2), "html", null, true);
                }
                echo ")

  </div>
    <div style=\"padding: 3px;font-size: 7px;\">SGST <br>";
                // line 395
                echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "tax", array()) / 2), "html", null, true);
                echo "% <br> (";
                $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, (twig_round(($context["ft"] ?? $this->getContext($context, "ft")), 2, "floor") / 2), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($context["ft"] ?? $this->getContext($context, "ft")), 2, ".", "") / 2), "html", null, true);
                }
                echo ")</div>
</div>

 ";
            }
            // line 399
            echo "
                                       </td>

                                                                      <td class=\"text-right\"> 
                                      ";
            // line 403
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                // line 404
                echo "                                      ";
                $context["subTotals"] = (twig_round(($context["pr"] ?? $this->getContext($context, "pr")), 2, "floor") * $this->getAttribute($context["item"], "quantity", array()));
                echo " 
                                       ";
            } elseif ((            // line 405
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                // line 406
                echo "                                      ";
                $context["subTotals"] = (twig_number_format_filter($this->env, ($context["pr"] ?? $this->getContext($context, "pr")), 2, ".", "") * $this->getAttribute($context["item"], "quantity", array()));
                echo " 
                                    ";
            }
            // line 408
            echo "                                    ";
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                // line 409
                echo "                                       ";
                echo twig_escape_filter($this->env, (($context["subTotals"] ?? $this->getContext($context, "subTotals")) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor")), "html", null, true);
                echo "
                                    ";
            } elseif ((            // line 410
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                // line 411
                echo "                                       ";
                echo twig_escape_filter($this->env, (($context["subTotals"] ?? $this->getContext($context, "subTotals")) - twig_number_format_filter($this->env, $this->getAttribute($context["item"], "discount", array()), 2, ".", "")), "html", null, true);
                echo "
                                    ";
            }
            // line 413
            echo "                                    </td>
                                    ";
            // line 414
            $context["tax"] = (($context["tax"] ?? $this->getContext($context, "tax")) + ($context["ft"] ?? $this->getContext($context, "ft")));
            // line 415
            echo "                                 </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        echo "                                
                              </tbody>
                                  <tfoot>
                                    <tr>
                                <th class=\"text-left\">Online/Cash : ";
        // line 421
        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
            echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderAmount", array()), 2, "floor"), "html", null, true);
        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderAmount", array()), 2, ".", ""), "html", null, true);
        }
        echo "</span></th>
                              <th colspan=\"6\" class=\"text-right\">Total</th>
                              <th> <span class=\"sums\">
                                 ";
        // line 425
        echo "                                    ";
        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
            // line 426
            echo "                                       ";
            echo twig_escape_filter($this->env, (twig_round($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "actualAmount", array()), 2, "floor") - twig_round(($context["tax"] ?? $this->getContext($context, "tax")), 2, "floor")), "html", null, true);
            echo "
                                    ";
        } elseif ((        // line 427
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            // line 428
            echo "                                       ";
            echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "actualAmount", array()), 2, ".", "") - twig_number_format_filter($this->env, ($context["tax"] ?? $this->getContext($context, "tax")), 2, ".", "")), "html", null, true);
            echo "
                                    ";
        }
        // line 430
        echo "                                    </span></th>
                            </tr>

                            <tr>
                               <th class=\"text-left\">Loyalty :  ";
        // line 434
        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "loyalty", array()), 2, "floor"), "html", null, true);
        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "loyalty", array()), 2, ".", ""), "html", null, true);
        }
        echo "</span></th>
                              <th colspan=\"6\" class=\"text-right\">";
        // line 435
        if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
            // line 436
            echo "                              Vat
                              ";
        } else {
            // line 438
            echo "                              Tax
                             ";
        }
        // line 439
        echo "  </th>
                              <th>";
        // line 440
        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
            echo twig_escape_filter($this->env, twig_round(($context["tax"] ?? $this->getContext($context, "tax")), 2, "floor"), "html", null, true);
        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["tax"] ?? $this->getContext($context, "tax")), 2, ".", ""), "html", null, true);
        }
        echo "</th>
                            </tr>
                            <tr>
                               <th class=\"text-left\">Wallet : ";
        // line 443
        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
            echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "wallet", array()), 2, "floor"), "html", null, true);
        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "wallet", array()), 2, ".", ""), "html", null, true);
        }
        echo "</span></th>
                              <th colspan=\"6\" class=\"text-right\">Discount</th>
                              <th>";
        // line 445
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "totalDiscount", array()), "html", null, true);
        echo "</th>
                            </tr>
                            <tr>
                               <th class=\"text-left\">Total : ";
        // line 448
        $context["totals"] = (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "wallet", array()) + $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "loyalty", array())) + $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderAmount", array()));
        echo " ";
        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
            echo twig_escape_filter($this->env, twig_round(($context["totals"] ?? $this->getContext($context, "totals")), 2, "floor"), "html", null, true);
        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totals"] ?? $this->getContext($context, "totals")), 2, ".", ""), "html", null, true);
        }
        echo "</span></th>
                              <th colspan=\"6\" class=\"text-right\">Delivery Charge</th>
                              <th> <span class=\"delivery\">";
        // line 450
        echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "deliveryCharge", array()), 2, "floor"), "html", null, true);
        echo "</span></th>
                            </tr>
                           
                            <tr>
                              <th colspan=\"7\" class=\"text-right\">Grand Total</th>
                              <th> <span class=\"sums\"> ";
        // line 455
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentType", array()) == "wallet")) {
            echo " ";
            $context["total"] = (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "actualAmount", array()) + $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "deliveryCharge", array())) - $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "totalDiscount", array()));
            echo " ";
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total"))), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
            }
            echo " ";
        } else {
            $context["total"] = $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderAmount", array());
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total"))), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
            }
        }
        echo "</span></th>
                            </tr>
                          </tfoot>
                           </table>
  ";
        // line 459
        if ((((($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "received") || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "processing")) || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "ready")) || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "pick"))) {
            echo " 
                           <a href=\"#\" class=\"noprint edit-order\" data-toggle=\"modal\" data-target=\"#edit-order\">edit order</a>
";
        }
        // line 462
        echo "
                      </div>
                    </div>
          ";
        // line 465
        $context["allsum"] = ($context["total"] ?? $this->getContext($context, "total"));
        // line 466
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["merged_main_order"] ?? $this->getContext($context, "merged_main_order")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 467
            echo "
<center>Merged Order</center>


             <div class=\"col-md-12\">
                      <div class=\"table-responsive m-t-10 row table-show\" style=\"display:block;\">
                       <table class=\"table table-hovered\">
                              <thead class=\"bg-primary text-white\" style=\"color:#fff;\">
                                 <tr>
                                    <th style=\"color:#fff;\">Item name</th>
                                    <th style=\"color:#fff;\">price variation</th>
                                    <th style=\"color:#fff;\">Barcode</th>
                                    <th style=\"color:#fff;\">price</th>
                                    <th style=\"color:#fff;\">quantity</th>
                                  <th style=\"color:#fff;\">Discount</th>

                                    ";
            // line 483
            if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
                // line 484
                echo "                                   <th style=\"color:#fff;\">VAT</th>
                                    ";
            } else {
                // line 486
                echo "                                    <th style=\"color:#fff;\">Tax</th>
                                    ";
            }
            // line 487
            echo "     

                               <th style=\"color:#fff;\">Sub total</th>
                                 </tr>
                              </thead>
                              <tbody>
                                ";
            // line 493
            $context["taxs"] = 0;
            echo " 
                                 ";
            // line 494
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["merged_order"] ?? $this->getContext($context, "merged_order")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 495
                echo "                                 <tr style=\"font-size:10px;\">
                                    <td>";
                // line 496
                if ((($this->getAttribute($context["item"], "isTray", array()) == "0") || ($this->getAttribute($context["item"], "isTray", array()) == ""))) {
                    echo " <span style=\"color:#2196f3;font-weight:400;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                    echo "</span> ";
                }
                // line 497
                echo "                                   
    ";
                // line 498
                if (($this->getAttribute($context["item"], "isTray", array()) == "3")) {
                    echo " <span style=\"color:#e91e63;font-weight:400;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                    echo "</span> ";
                }
                // line 499
                echo "                                       ";
                if (($this->getAttribute($context["item"], "isTray", array()) == "1")) {
                    echo " <span style=\"color:#F44337;font-weight:400;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                    echo "</span> ";
                }
                // line 500
                echo "                                       ";
                if (($this->getAttribute($context["item"], "isTray", array()) == "2")) {
                    echo " <span style=\"color:#014c0a;font-weight:400;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                    echo "</span> ";
                }
                echo "<br>
                                         ";
                // line 501
                if (($this->getAttribute($context["item"], "edited", array()) == 1)) {
                    echo " Edited | Reason : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "reason", array()), "html", null, true);
                }
                // line 502
                echo "                                    </td>
                                    <td>";
                // line 503
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 504
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "barcode", array()), "html", null, true);
                echo "</td>
                                    <td>

                                      ";
                // line 507
                if (($this->getAttribute($context["item"], "discount", array()) != 0)) {
                    // line 508
                    $context["discount"] = $this->getAttribute($context["item"], "discount", array());
                    // line 509
                    $context["quantity"] = $this->getAttribute($context["item"], "quantity", array());
                    // line 510
                    $context["priceO"] = (($context["discount"] ?? $this->getContext($context, "discount")) / ($context["quantity"] ?? $this->getContext($context, "quantity")));
                    // line 511
                    $context["price"] = ($this->getAttribute($context["item"], "price", array()) + ($context["priceO"] ?? $this->getContext($context, "priceO")));
                    // line 512
                    echo "                                      ";
                } else {
                    // line 513
                    echo "                                      ";
                    $context["price"] = $this->getAttribute($context["item"], "price", array());
                    // line 514
                    echo "                                      ";
                }
                // line 515
                echo "                                      ";
                $context["x"] = (100 + $this->getAttribute($context["item"], "tax", array()));
                // line 516
                echo "
                                     ";
                // line 517
                $context["pr"] = ((($context["price"] ?? $this->getContext($context, "price")) * 100) / ($context["x"] ?? $this->getContext($context, "x")));
                echo " 
                                     ";
                // line 519
                echo "
                                     ";
                // line 520
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    // line 521
                    echo "                                       ";
                    echo twig_escape_filter($this->env, twig_round(($context["pr"] ?? $this->getContext($context, "pr")), 2, "floor"), "html", null, true);
                    echo "
                                     ";
                } elseif ((                // line 522
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    // line 523
                    echo "                                       ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["pr"] ?? $this->getContext($context, "pr")), 2, ".", ""), "html", null, true);
                    echo "
                                     ";
                }
                // line 525
                echo "
                                   </td>
                                    <td>";
                // line 527
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "  ";
                if (($this->getAttribute($context["item"], "isTray", array()) == "1")) {
                    echo " <span style=\"color:#F44337;font-weight:400;\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trayQty", array()), "html", null, true);
                    echo ")</span> ";
                }
                echo " ";
                if (($this->getAttribute($context["item"], "trayQty", array()) > $this->getAttribute($context["item"], "quantity", array()))) {
                    echo " <span style=\"color:green;font-weight:400;\">(";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "trayQty", array()) - $this->getAttribute($context["item"], "quantity", array())), "html", null, true);
                    echo ")</span> ";
                }
                echo "</td>
                                    ";
                // line 528
                $context["st"] = ((($this->getAttribute($context["item"], "price", array()) * $this->getAttribute($context["item"], "tax", array())) / 100) * $this->getAttribute($context["item"], "quantity", array()));
                // line 529
                echo "                                      <td class=\"\"> 
";
                // line 530
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array()), "html", null, true);
                echo "</td>
   
                                       <td class=\"text-right\">
";
                // line 533
                if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
                    // line 534
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        // line 535
                        echo " ";
                        $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - twig_round(($context["pr"] ?? $this->getContext($context, "pr")), 2, "floor"));
                        echo " ";
                        $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                        echo " 

";
                    } elseif ((                    // line 537
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        // line 538
                        $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - twig_number_format_filter($this->env, ($context["pr"] ?? $this->getContext($context, "pr")), 2, ".", ""));
                        echo " 
";
                    }
                    // line 540
                    $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                    echo " 

 ";
                    // line 543
                    echo "      ";
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        // line 544
                        echo "         ";
                        echo twig_escape_filter($this->env, twig_round(($context["ft"] ?? $this->getContext($context, "ft")), 2, "floor"), "html", null, true);
                        echo "
      ";
                    } elseif ((                    // line 545
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        // line 546
                        echo "         ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["ft"] ?? $this->getContext($context, "ft")), 2, ".", ""), "html", null, true);
                        echo "
      ";
                    }
                    // line 548
                    echo " ";
                } else {
                    // line 549
                    echo "<div class=\"tax\" style=\"display:flex;\">
  <div class=\"\"style=\"border-right: 1px solid;padding: 3px;font-size: 7px;\">CGST <br> ";
                    // line 550
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "tax", array()) / 2), "html", null, true);
                    echo "%  ";
                    $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - ($context["pr"] ?? $this->getContext($context, "pr")));
                    echo " <br> (";
                    $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                    echo " 
  ";
                    // line 551
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, (twig_round(($context["ft"] ?? $this->getContext($context, "ft")), 2, "floor") / 2), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($context["ft"] ?? $this->getContext($context, "ft")), 2, ".", "") / 2), "html", null, true);
                    }
                    echo ")

  </div>
    <div style=\"padding: 3px;font-size: 7px;\">SGST <br>";
                    // line 554
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "tax", array()) / 2), "html", null, true);
                    echo "% <br> (";
                    $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                    echo " ";
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, (twig_round(($context["ft"] ?? $this->getContext($context, "ft")), 2, "floor") / 2), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($context["ft"] ?? $this->getContext($context, "ft")), 2, ".", "") / 2), "html", null, true);
                    }
                    echo ")</div>
</div>

 ";
                }
                // line 558
                echo "
                                       </td>

                                                                      <td class=\"text-right\"> 
                                      ";
                // line 562
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    // line 563
                    echo "                                      ";
                    $context["subTotals"] = (twig_round(($context["pr"] ?? $this->getContext($context, "pr")), 2, "floor") * $this->getAttribute($context["item"], "quantity", array()));
                    echo " 
                                       ";
                } elseif ((                // line 564
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    // line 565
                    echo "                                      ";
                    $context["subTotals"] = (twig_number_format_filter($this->env, ($context["pr"] ?? $this->getContext($context, "pr")), 2, ".", "") * $this->getAttribute($context["item"], "quantity", array()));
                    echo " 
                                    ";
                }
                // line 567
                echo "                                    ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    // line 568
                    echo "                                       ";
                    echo twig_escape_filter($this->env, (($context["subTotals"] ?? $this->getContext($context, "subTotals")) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor")), "html", null, true);
                    echo "
                                    ";
                } elseif ((                // line 569
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    // line 570
                    echo "                                       ";
                    echo twig_escape_filter($this->env, (($context["subTotals"] ?? $this->getContext($context, "subTotals")) - twig_number_format_filter($this->env, $this->getAttribute($context["item"], "discount", array()), 2, ".", "")), "html", null, true);
                    echo "
                                    ";
                }
                // line 572
                echo "                                    </td>
                                    ";
                // line 573
                $context["taxs"] = (($context["taxs"] ?? $this->getContext($context, "taxs")) + ($context["ft"] ?? $this->getContext($context, "ft")));
                // line 574
                echo "                                 </tr>
                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 576
            echo "                                
                              </tbody>
                                  <tfoot>
                                    <tr>
                                <th class=\"text-left\">Online/Cash : ";
            // line 580
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "orderAmount", array()), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), 2, ".", ""), "html", null, true);
            }
            echo "</span></th>
                              <th colspan=\"6\" class=\"text-right\">Total</th>
                              <th> <span class=\"sums\">
                                 ";
            // line 584
            echo "                                    ";
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                // line 585
                echo "                                       ";
                echo twig_escape_filter($this->env, (twig_round($this->getAttribute($context["order"], "actualAmount", array()), 2, "floor") - twig_round(($context["taxs"] ?? $this->getContext($context, "taxs")), 2, "floor")), "html", null, true);
                echo "
                                    ";
            } elseif ((            // line 586
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                // line 587
                echo "                                       ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, $this->getAttribute($context["order"], "actualAmount", array()), 2, ".", "") - twig_number_format_filter($this->env, ($context["tax"] ?? $this->getContext($context, "tax")), 2, ".", "")), "html", null, true);
                echo "
                                    ";
            }
            // line 589
            echo "                                    </span></th>
                            </tr>

                            <tr>
                               <th class=\"text-left\">Loyalty :  ";
            // line 593
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "loyalty", array()), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "loyalty", array()), 2, ".", ""), "html", null, true);
            }
            echo "</span></th>
                              <th colspan=\"6\" class=\"text-right\">";
            // line 594
            if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
                // line 595
                echo "                              Vat
                              ";
            } else {
                // line 597
                echo "                              Tax
                             ";
            }
            // line 598
            echo "  </th>
                              <th>";
            // line 599
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["taxs"] ?? $this->getContext($context, "taxs")), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["taxs"] ?? $this->getContext($context, "taxs")), 2, ".", ""), "html", null, true);
            }
            echo "</th>
                            </tr>
                            <tr>
                               <th class=\"text-left\">Wallet : ";
            // line 602
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "wallet", array()), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "wallet", array()), 2, ".", ""), "html", null, true);
            }
            echo "</span></th>
                              <th colspan=\"6\" class=\"text-right\">Discount</th>
                              <th>";
            // line 604
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalDiscount", array()), "html", null, true);
            echo "</th>
                            </tr>
                            <tr>
                               <th class=\"text-left\">Total : ";
            // line 607
            $context["totals"] = (($this->getAttribute($context["order"], "wallet", array()) + $this->getAttribute($context["order"], "loyalty", array())) + $this->getAttribute($context["order"], "orderAmount", array()));
            echo " ";
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["totals"] ?? $this->getContext($context, "totals")), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totals"] ?? $this->getContext($context, "totals")), 2, ".", ""), "html", null, true);
            }
            echo "</span></th>
                              <th colspan=\"6\" class=\"text-right\">Delivery Charge</th>
                              <th> <span class=\"delivery\">";
            // line 609
            echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "deliveryCharge", array()), 2, "floor"), "html", null, true);
            echo "</span></th>
                            </tr>
                           
                            <tr>
                              <th colspan=\"7\" class=\"text-right\">Grand Total</th>
                              <th> <span class=\"sums\"> ";
            // line 614
            if (($this->getAttribute($context["order"], "paymentType", array()) == "wallet")) {
                echo " ";
                $context["total"] = (($this->getAttribute($context["order"], "actualAmount", array()) + $this->getAttribute($context["order"], "deliveryCharge", array())) - $this->getAttribute($context["order"], "totalDiscount", array()));
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total"))), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                }
                echo " ";
            } else {
                $context["total"] = $this->getAttribute($context["order"], "orderAmount", array());
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total"))), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                }
            }
            echo "</span></th>
                            </tr>
                          </tfoot>
                           </table>
  ";
            // line 618
            if ((((($this->getAttribute($context["order"], "orderStatus", array()) == "received") || ($this->getAttribute($context["order"], "orderStatus", array()) == "processing")) || ($this->getAttribute($context["order"], "orderStatus", array()) == "ready")) || ($this->getAttribute($context["order"], "orderStatus", array()) == "pick"))) {
                echo " 
";
            }
            // line 620
            echo "
                      </div>
                    </div>
          ";
            // line 623
            $context["allsum"] = (($context["allsum"] ?? $this->getContext($context, "allsum")) + ($context["total"] ?? $this->getContext($context, "total")));
            // line 624
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 626
        echo "




";
        // line 631
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "ref", array()) != 0)) {
            // line 632
            echo " <b> <center>-------------------------------------------------------
    <br>
Total Amount :  ";
            // line 634
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["allsum"] ?? $this->getContext($context, "allsum")), 2, ".", ""), "html", null, true);
            echo " 
  </center></b>
 
";
        }
        // line 638
        echo "






                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 mb-4\">
           <div class=\"h-100\">
            <div id=\"toggleAccordion\">
              
              <div class=\"card right-sidebar-card\">
                <div class=\"card-header\" id=\"headingOne1\">
                  <section class=\"mb-0 mt-0\">

                    <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionOne\" aria-expanded=\"true\" aria-controls=\"defaultAccordionOne\">
                      Order Info <div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                    </div>
                  </section>
                </div>
                <div id=\"defaultAccordionOne\" class=\"collapse show\" aria-labelledby=\"headingOne1\" data-parent=\"#toggleAccordion\">
                  <div class=\"card-body right-sidebar-option\">
                    <div class=\"\">
                      <p style=\"\"><b>Ordered on</b></p>
                      <p>";
        // line 667
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderDate", array()), "date", array()), "d-m-Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderDate", array()), "date", array()), "h-i A"), "html", null, true);
        echo "</p>
                    </div>
                    <div>
                     <p style=\"\"><b>Device</b></p>
                     <p>";
        // line 671
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "channel", array()), "html", null, true);
        echo "</p>
                   </div>
                
                    ";
        // line 674
        if ((($context["dname"] ?? $this->getContext($context, "dname")) == "")) {
            // line 675
            echo "                    ";
        } else {
            // line 676
            echo "                   <div>
                     <p style=\"\"><b>Delivery Boy</b></p>
                     <p>";
            // line 678
            echo twig_escape_filter($this->env, ($context["dname"] ?? $this->getContext($context, "dname")), "html", null, true);
            echo "-(";
            echo twig_escape_filter($this->env, ($context["dmobile"] ?? $this->getContext($context, "dmobile")), "html", null, true);
            echo ")</p>
                   </div>
                   ";
        }
        // line 681
        echo "                   ";
        if ((($context["pname"] ?? $this->getContext($context, "pname")) == "")) {
            // line 682
            echo "                           ";
        } else {
            // line 683
            echo "                      <div>
                     <p style=\"\"><b>Picker Name</b></p>
                     <p>";
            // line 685
            echo twig_escape_filter($this->env, ($context["pname"] ?? $this->getContext($context, "pname")), "html", null, true);
            echo "-(";
            echo twig_escape_filter($this->env, ($context["pmobile"] ?? $this->getContext($context, "pmobile")), "html", null, true);
            echo ")</p>
                   </div>
                                              ";
        }
        // line 687
        echo "          
                   ";
        // line 688
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "note", array()) == "")) {
            // line 689
            echo "                   ";
        } else {
            echo "                    <div>
                     <p style=\"\"><b>Note</b></p>
                     <p>";
            // line 691
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "note", array()), "html", null, true);
            echo "</p>
                   </div>
                   ";
        }
        // line 694
        echo "                   <div>
                     <p style=\"\"><b>Tray Number</b></p>
                     <p>";
        // line 696
        if (((($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tray", array()) == "") || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tray", array()) == "0")) || (null === $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tray", array())))) {
            echo " <i style=\"color:red;\">not created </i>";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tray", array()), "html", null, true);
        }
        echo "  

                      (<a href=\"#ssss\"  data-toggle=\"modal\" data-target=\"#myModal\">edit</a>)</p>
                   </div>

                      <div>
                     <p style=\"\"><b>Tray Status</b></p>
                     <p> ";
        // line 703
        if (((($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tray", array()) == "") || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tray", array()) == "0")) || (null === $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tray", array())))) {
            echo " <i style=\"color:red;\">Tray number not assigned</i>";
        } else {
            echo " in Tray ";
        }
        echo "   (<a href=\"#ssss\"  data-toggle=\"modal\" data-target=\"#trayStatus\">edit</a>)</p>
                   </div>
                    ";
        // line 705
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "deliveryTime", array()) == "")) {
            // line 706
            echo "                   ";
        } else {
            echo "                    <div>
                     <p style=\"\"><b>Delivery Time</b></p>
                     <p>";
            // line 708
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "deliveryTime", array()), "date", array()), "d-m-Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "deliveryTime", array()), "date", array()), "h-i A"), "html", null, true);
            echo "</p>
                   </div>
                   ";
        }
        // line 711
        echo "                   ";
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "slotReason", array()) == "")) {
            // line 712
            echo "                   ";
        } else {
            // line 713
            echo "                   <div>
                     <p style=\"\"><b>Reason For Reschedule</b></p>
                     <p>";
            // line 715
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "slotReason", array()), "html", null, true);
            echo "</p>
                   </div>
                   ";
        }
        // line 718
        echo "
                    ";
        // line 719
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "promocode", array()) == "")) {
            // line 720
            echo "                   ";
        } else {
            echo "                    <div>
                     <p style=\"\"><b>Promocode</b></p>
                     <p>";
            // line 722
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "promocode", array()), "html", null, true);
            echo "</p>
                   </div>
                   ";
        }
        // line 725
        echo "
                         <div>
                          ";
        // line 727
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentStatus", array()) == "paid")) {
            // line 728
            echo "                  <div class=\"form-group\">
                     <p style=\"cursor:pointer;\"><b>Payment Status</b></p>
                     <div class=\"form-group \" >
                     <span  class=\"badge badge-success\">Paid</span>
                      
                    </div>
                  </div>
                  ";
        }
        // line 736
        echo "                  ";
        if ((((($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentStatus", array()) == "pending") || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentStatus", array()) == "")) || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentStatus", array()) == "cancelled")) || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentStatus", array()) == "failed"))) {
            // line 737
            echo "                  <div class=\"form-group\">
                     <p style=\"cursor:pointer;\"><b>Payment Status</b></p>
                     <div class=\"form-group \" >
                      <span id=\"payment_status\"  data-toggle=\"modal\" data-target=\"#edit-payment-status\" class=\"badge badge-danger\">Mark As Paid </span>
                      
                    </div>
                  </div>
                  ";
        }
        // line 745
        echo "

</div>
<p style=\"\"><b>Version</b></p>
<p>";
        // line 749
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "version", array()), "html", null, true);
        echo "</p>
";
        // line 750
        if ((($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "transactionId", array()) == "") || ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "transactionId", array()) == " "))) {
        } else {
            // line 752
            echo "<p style=\"\"><b>Transction Id</b></p>
<p>";
            // line 753
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "transactionId", array()), "html", null, true);
            echo "</p>
";
        }
        // line 755
        echo "
                              </div>
                            </div>


                          </div>
                          <div class=\"card right-sidebar-card\">
                            <div class=\"card-header\" id=\"headingTwo1\">
                              <section class=\"mb-0 mt-0\">
                                <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionTwo\" aria-expanded=\"true\" aria-controls=\"defaultAccordionTwo\">
                                  Order Status<div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                                </div>
                              </section>
                            </div>
                            <div id=\"defaultAccordionTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo1\" data-parent=\"#toggleAccordion\">
                              <div class=\"card-body right-sidebar-option\">
                                  ";
        // line 771
        if ((($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) != "completed") && ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) != "cancelled"))) {
            echo " 
               <div class=\"form-group\">
                     ";
            // line 773
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "orderStatus", array()), 'row', array("attr" => array("class" => "form-control otype")));
            echo "
                  </div>
                  <div id=\"dboy\">
                  </div>
<input type=\"hidden\" name=\"fixtime\" id=\"fixtime\">
<input type=\"hidden\" name=\"fixdate\" id=\"fixdate\">

";
            // line 780
            if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderStatus", array()) == "reschedule")) {
                // line 781
                echo "<div class=\"slot-time\">
  ";
            } else {
                // line 783
                echo "<div class=\"slot-time\" style=\"display:none;\">
  ";
            }
            // line 785
            echo "                   <div class=\"row form-row\">
                    <div class=\"col-md-12 form-group\">
                     <select class=\"form-control form-control-sm classic info\" name=\"area\" id=\"locationName\">
                      <option value=\"\">Select Area</option>
                      ";
            // line 789
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["location"] ?? $this->getContext($context, "location")));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 790
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loc"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loc"], "title", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loc"], "title", array()), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 792
            echo "                    </select>
                  </div>
                </div>
                  <div class=\"row form-row\">
                  <div class=\"col-md-12 form-group\">
                    <select class=\"form-control form-control-sm classic info\" name=\"slot\" id=\"locationSlot\">
                      <option value=\"\">Slots</option>
                      
                    </select>
                  </div>
                </div>
</div>
                   <div class=\"form-group\">
                     <button type=\"submit\" class=\"btn btn-primary pr\" style=\"width:100% !important;margin-bottom:5px;\">Update order</button>
                            
                          </div>
           
                      </div>
                    </div>
                  </div>

                      
                           ";
        } else {
            // line 814
            echo " 
                      
               ";
        }
        // line 817
        echo "                </div>
                
              </div>




<!-- new invoice end -->





















   <div class=\"col-12\">
     
              
            </div>
            ";
        // line 850
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 851
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
         </div>

 </div>
 </div>
</div>
</div>
<iframe src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("thermal_print", array("id" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()))), "html", null, true);
        echo "\" style=\"display:none;\" name=\"frame\"></iframe>
<iframe src=\"";
        // line 859
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("normal_print", array("id" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()))), "html", null, true);
        echo "\" style=\"display:none;\" name=\"prints\"></iframe>
</div>
<!-- starty of  card -->
<div class=\"print-area\" style=\"display:none\">
  <div class=\"container\">
<div class=\"row\">
  <div class=\"col-12\">
<center><span>O  R  I  G  I  N  A  L     T  A  X     I  N  V  O  I  C  E</span></center>
</div>
</div>
<div class=\"row\">
  <div class=\"col-6\">
      <p>Bill to/Ship to:<br>
                           <small>
                           ";
        // line 873
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customerName", array()), "html", null, true);
        echo "<br>
                           ";
        // line 874
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "address", array()), "html", null, true);
        echo "<br>
                           ";
        // line 875
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "landmark", array()), "html", null, true);
        echo "
                           Mobile : ";
        // line 876
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customer", array()), "mobileNumber", array()), "html", null, true);
        echo "<br>
                           Email : ";
        // line 877
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customer", array()), "email", array()), "html", null, true);
        echo "<br>
                           Gst No: ";
        // line 878
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customer", array()), "gst", array()), "html", null, true);
        echo "

                           </small>
                        </p>
                         <table class=\"table xx table-bordered\">
                                 <tr>
                                  <td>Order Id</td>
                                   <td>";
        // line 885
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo "</td> 
                                 </tr>
                                 <tr>
                                  <td>Order Date</td>
                                   <td>";
        // line 889
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderDate", array()), "date", array()), "d-m-Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderDate", array()), "date", array()), "h-i A"), "html", null, true);
        echo "</td> 
                                 </tr>
                                  <tr>
                                  <td>Slot</td>
                                   <td>";
        // line 893
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "fixtime", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "fixDate", array()), "html", null, true);
        echo "</td> 
                                 </tr>
                                 
                                  <tr>
                                  <td>Order Type</td>
                                   <td>";
        // line 898
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentType", array())), "html", null, true);
        echo "</td> 
                                 </tr>
                                 <tr>
                                  <td>Delivery Area</td>
                                   <td>";
        // line 902
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "area", array())), "html", null, true);
        echo "</td> 
                                 </tr>
                            </table>
</div>
  <div class=\"col-6\">
    ";
        // line 907
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 908
            echo "          <p style=\"float:right\"><img src=\"/uploads/restaurant/icons/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "iconImage", array()), "html", null, true);
            echo "\" style=\"height:50px;\"><br>
                           <small>
                           ";
            // line 910
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantName", array()), "html", null, true);
            echo "<br>
                           ";
            // line 911
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantAddress", array()), "html", null, true);
            echo "<br>
                           ";
            // line 912
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantLocation", array()), "html", null, true);
            echo "<br>
                            Gst No:";
            // line 913
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "gst", array()), "html", null, true);
            echo "<br>

                           Mobile : ";
            // line 915
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "primaryMobile", array()), "html", null, true);
            echo "<br>
                           Email : ";
            // line 916
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "primaryEmail", array()), "html", null, true);
            echo " 
                           </small>

                        </p>
                                   
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 922
        echo "                    
</div>
</div>

<div class=\"table-responsive\">
                           <table class=\"table x table-bordered\">
                              <thead class=\"ban\">
                                 <tr>
                                  <td>#</th>
                                    <td>Item name</td>
                                  ";
        // line 932
        if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
            // line 933
            echo "                                  ";
        } else {
            // line 934
            echo "                                      <td>Hsn</td>
                                      ";
        }
        // line 936
        echo "
                                    <td>Price</td>
                                     <td>Quantity</td>
                                         <td>Discount</td>
                                  ";
        // line 940
        if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
            // line 941
            echo "                                   <th style=\"color:#fff;\">VAT</th>
                                    ";
        } else {
            // line 943
            echo "                                    <th style=\"color:#fff;\">Tax</th>
                                    ";
        }
        // line 944
        echo "                                     <td> Total Value</td>
                                 </tr>
                              </thead>
                              <tbody>
                                ";
        // line 948
        $context["count"] = 1;
        // line 949
        echo "                                 ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customerOrderItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 950
            echo "                                 <tr>
                                  <td>";
            // line 951
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "</td>
                                           

                                    <td>";
            // line 954
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
            echo "
                                   
                                    </td>
                                    ";
            // line 957
            if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
                // line 958
                echo "                                    ";
            } else {
                // line 959
                echo "                                  <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "hsn", array()), "html", null, true);
                echo "</td>
                                  ";
            }
            // line 961
            echo "                                    <td>";
            $context["x"] = (100 + $this->getAttribute($context["item"], "tax", array()));
            // line 962
            echo "                                     ";
            $context["pr"] = (($this->getAttribute($context["item"], "price", array()) * 100) / ($context["x"] ?? $this->getContext($context, "x")));
            echo " 
                                       ";
            // line 963
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                // line 964
                echo "                                          ";
                echo twig_escape_filter($this->env, twig_round(($context["pr"] ?? $this->getContext($context, "pr")), 2, "floor"), "html", null, true);
                echo "
                                       ";
            } elseif ((            // line 965
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                // line 966
                echo "                                          ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["pr"] ?? $this->getContext($context, "pr")), 2, ".", ""), "html", null, true);
                echo "
                                       ";
            }
            // line 968
            echo "                                    </td>
                                    <td>";
            // line 969
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
            echo "</td>
                                     <td>";
            // line 970
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array()), "html", null, true);
            echo "</td>
                                    <td>

                                      ";
            // line 973
            if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
                // line 974
                echo " ";
                $context["f"] = ($this->getAttribute($context["item"], "price", array()) - ($context["pr"] ?? $this->getContext($context, "pr")));
                echo " ";
                $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["ft"] ?? $this->getContext($context, "ft")), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["ft"] ?? $this->getContext($context, "ft")), 2, ".", ""), "html", null, true);
                }
                // line 975
                echo " ";
            } else {
                // line 976
                echo "<div class=\"tax\" style=\"display:flex;\">
  <div class=\"\"style=\"border-right: 1px solid;padding: 3px;font-size: 7px;\">CGST <br> ";
                // line 977
                echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "tax", array()) / 2), "html", null, true);
                echo "%  ";
                $context["f"] = ($this->getAttribute($context["item"], "price", array()) - ($context["pr"] ?? $this->getContext($context, "pr")));
                echo " <br> (";
                $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, (twig_round(($context["ft"] ?? $this->getContext($context, "ft")), 2, "floor") / 2), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($context["ft"] ?? $this->getContext($context, "ft")), 2, ".", "") / 2), "html", null, true);
                }
                echo " )</div>
    <div style=\"padding: 3px;font-size: 7px;\">SGST <br>";
                // line 978
                echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "tax", array()) / 2), "html", null, true);
                echo "% <br> (";
                $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, (twig_round(($context["ft"] ?? $this->getContext($context, "ft")), 2, "floor") / 2), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($context["ft"] ?? $this->getContext($context, "ft")), 2, ".", "") / 2), "html", null, true);
                }
                echo ")</div>
</div>

 ";
            }
            // line 982
            echo "

</td>
                                    <td class=\"text-right\">";
            // line 985
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["item"], "subTotal", array()), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "subTotal", array()), 2, ".", ""), "html", null, true);
            }
            echo "</td>
                                 </tr>
                                                                 ";
            // line 987
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
            // line 988
            echo "
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 990
        echo "

                                   <tr>
                                  <th colspan=\"6\"></th>
                               

                                    <th>Total</th>
                                  <th>";
        // line 997
        $context["m"] = ($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "actualAmount", array()) - ($context["tax"] ?? $this->getContext($context, "tax")));
        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            echo twig_escape_filter($this->env, twig_round(($context["m"] ?? $this->getContext($context, "m")), 2, "floor"), "html", null, true);
        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["m"] ?? $this->getContext($context, "m")), 2, ".", ""), "html", null, true);
        }
        echo "</th>
                                 </tr>
                                  <tr>
                                       <th colspan=\"6\"></th>                                         
                                    <th>  ";
        // line 1001
        if ((($context["currency"] ?? $this->getContext($context, "currency")) == "AED")) {
            // line 1002
            echo "                       Vat
                        ";
        } else {
            // line 1004
            echo "                          Tax
                        ";
        }
        // line 1005
        echo "    </th>
                                  <th>";
        // line 1006
        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
            echo twig_escape_filter($this->env, twig_round(($context["tax"] ?? $this->getContext($context, "tax")), 2, "floor"), "html", null, true);
        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["tax"] ?? $this->getContext($context, "tax")), 2, ".", ""), "html", null, true);
        }
        echo "</th>
                                 </tr>
                                  <tr>
                                   <tr>
                                       <th colspan=\"6\"></th>                                         
                                    <th>Delivery Charge</th>
                                  <th>";
        // line 1012
        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
            echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "deliveryCharge", array()), 2, "floor"), "html", null, true);
        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "deliveryCharge", array()), 2, ".", ""), "html", null, true);
        }
        echo "</th>
                                 </tr>
                                  <tr>
                                   <th colspan=\"6\"></th>                               
                                    <th>Discount</th>
                                  <th>";
        // line 1017
        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
            echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "totalDiscount", array()), 2, "floor"), "html", null, true);
        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "totalDiscount", array()), 2, ".", ""), "html", null, true);
        }
        echo "</th>
                                 </tr>
                                 <tr>
                                    <th colspan=\"6\"></th>                              
                                    <th>Grand Total</th>
                                  <th>";
        // line 1022
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentType", array()) == "wallet")) {
            echo " ";
            $context["total"] = (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "actualAmount", array()) + $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "deliveryCharge", array())) - $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "totalDiscount", array()));
            echo " ";
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total")), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
            }
            echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total")), 2, "floor"), "html", null, true);
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "orderAmount", array()), "html", null, true);
        }
        echo "</th>
                                 </tr>
                              </tbody>
                           </table>
</div>


</div>
</div>
<!-- end of card -->

<!-- Modal
for payment approval -->
<div id=\"edit-payment-status\" class=\"modal\" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Payment Status | ";
        // line 1040
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentStatus", array())), "html", null, true);
        echo "</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row\">
               <div class=\"col-12\">
                  <form method=\"post\" action=\"";
        // line 1045
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_payment");
        echo "\">
                     <div class=\"form-group\" >
                  <label class=\"label\" style=\"color:#000;margin-left: -9px;\">Payment Mode</label>
                  <select class=\"form-control\" name=\"mode\" id=\"payment_statuss\">
                  <option value=\"Online\">Online Payment</option>
                       <option value=\"cash\">Cash</option>
                     </select>
                   </div>
                   <div class=\"ons\">
                 <div class=\"form-group\">
                  <label class=\"label\" style=\"color:#000;margin-left: -9px;\">Transaction Id</label>
                  <input type=\"tex\" name=\"transactionId\" class=\"form-control\" value=\" ";
        // line 1056
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "transactionId", array()), "html", null, true);
        echo "\">
                 </div>
                  </div>
  <input type=\"hidden\" name=\"orderid\" class=\"form-control\" required=\"\" value=\"";
        // line 1059
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo "\">
                 <div class=\"form-group\">
                  <label class=\"label\" style=\"color:#000;margin-left: -9px;\">Date / Payment Through / Note</label>
                  <textarea class=\"form-control\" rows=\"3\"  name=\"note\">
                     ";
        // line 1063
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "note", array()), "html", null, true);
        echo "
                  </textarea>
               </div>
                     <button class=\"btn btn-success\" type=\"submit\">Mark as Paid</button>
                     <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- end of modal -->

<!-- Modal 
incase of payment caancelling and all-->
<div id=\"payment_status_remain\" class=\"modal\" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Payment Status  | ";
        // line 1085
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "paymentStatus", array())), "html", null, true);
        echo "</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row\">
               <div class=\"col-12\">
                  <form method=\"post\" action=\"";
        // line 1090
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_payment_pending");
        echo "\">
                   
                 
  <input type=\"hidden\" name=\"orderid\" class=\"form-control\" required=\"\" value=\"";
        // line 1093
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo "\">
                 <div class=\"form-group\">
                  <label class=\"label\" style=\"color:#000;\">Reason for changing payment status</label>
                  <textarea class=\"form-control\" rows=\"3\"  name=\"note\">
                    ";
        // line 1097
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "note", array()), "html", null, true);
        echo "
                  </textarea>
               </div>
                     <button class=\"btn btn-success\" type=\"submit\">Mark As Pending</button>
                     <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div> 
</div>
</div>
<!-- end of modal -->
<!-- Modal -->
<div id=\"edit-order\" class=\"modal \" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Edit Orders</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row\">
               <div class=\"col-12\">
                  <form method=\"post\" action=\"";
        // line 1122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_order");
        echo "\">
                     <div class=\"table-responsive\">
                        <table class=\"table table-hovered\">
                           <thead class=\"bg-primary text-white\">
                              <tr>
                                 <th style=\"color:#fff;\">Item</th>
                                 <th style=\"color:#fff;\">Qty</th>
                              </tr>
                           </thead>
                           <input type=\"hidden\" value=\"";
        // line 1131
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo "\" name=\"order\">
                           ";
        // line 1132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customerOrderItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1133
            echo "                           <tr>
                              <td><input type=\"hidden\" value=\"";
            // line 1134
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "\" name=\"price[]\">
<input type=\"hidden\" value=\"";
            // line 1135
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
            echo "\" name=\"oqty[]\">
<input type=\"hidden\" value=\"";
            // line 1136
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "loyalty", array()), "html", null, true);
            echo "\" name=\"loyalty[]\">
<input type=\"hidden\" value=\"";
            // line 1137
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" name=\"id[]\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
            echo "</td>
                              <td>
                                <select class=\"form-control\" name=\"qty[]\">
";
            // line 1140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["item"], "quantity", array()), 0));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 1141
                echo "    <option>";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1143
            echo "                                </select>
<textarea name=\"reason[]\" class=\"form-control\" style=\"display:block;width:100%\">";
            // line 1144
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "reason", array()), "html", null, true);
            echo "</textarea>
                              </td>
                           </tr>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1147
        echo " 
                            ";
        // line 1148
        if (($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "promocode", array()) != "")) {
            echo " 
                           <tr id=\"promo-a\">
                            <td>
                              <br>
                           <b>Promocode : ";
            // line 1152
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "promocode", array()), "html", null, true);
            echo " <br>
                           Discount : ";
            // line 1153
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "totalDiscount", array()), "html", null, true);
            echo "</b></td>
                            <td> <label for=\"promos\" id=\"trashs\"> <input type=\"checkbox\" name=\"promocheck\" id=\"promos\" class=\"form-control\" style=\"display:none;\"> <i class=\"fa fa-trash\" style=\"cursor:pointer;\" id=\"trash\"> </i> </label></td>                              
                            </tr> 
                             ";
        }
        // line 1156
        echo " 
                        </table>
                       
                     
                      
                       
                     </div>
                     <button class=\"btn btn-success\" type=\"submit\">Save</button>
                     <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- end of modal -->
<script type=\"text/javascript\">
\$('#trash').click(function(){
\$('#promo-a').hide();
// \$('#promos').prop('checked', true);

});
\$('#trashs').click(function(){
\$('#promo-a').hide();

});
</script>
<!-- Modal -->
<div id=\"myModal\" class=\"modal \" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Confirm Tray Items</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row m-t-20\">
               <form method=\"post\" action=\"";
        // line 1195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_tray_number");
        echo "\">


                  <div class=\"col-md-12\">
                     <div class=\"form-group\">
                        <label>Update Tray Number</label> 
                        <input type=\"text\" name=\"traynumber\" class=\"form-control\" required=\"\" value=\"";
        // line 1201
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "tray", array()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"orderid\" class=\"form-control\" required=\"\" value=\"";
        // line 1202
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo "\">
                     </div>
                     <button class=\"btn btn-primary\" type=\"submit\">update Tray Number</button>
                  </div>
               </form>
            </div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- end of modal -->
<!-- tray status -->
<div id=\"trayStatus\" class=\"modal \" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Confirm Tray Items</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row m-t-20\">
               <form method=\"post\" action=\"";
        // line 1226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_tray_quantity");
        echo "\" class=\"col-12\">
                  <div class=\"col-md-12\">
                     <div class=\"form-group\">
                        <label>Item Id</label> 
                        <input type=\"text\" id=\"barcode\" class=\"form-control\" placeholder=\"scan barcode here\">
                     </div>
                     <div class=\"form-group\">
                        <label>Select Item</label> 
                        <select name=\"traynumber\" class=\"form-control\" id=\"sels\">
                           ";
        // line 1235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customerOrderItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1236
            echo "                           <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
            echo "  - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
            echo "\" data-qty=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
            echo "  - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
            echo "</option>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1238
        echo "                        </select>
                        <input type=\"hidden\" name=\"orderid\" class=\"form-control\" required=\"\" value=\"";
        // line 1239
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo "\">
                     </div>
                     <div class=\"form-group\">
                        <label>Enter Quantity</label> 
                        <input type=\"number\" id=\"quantity\" class=\"form-control\" >
                     </div>
                     <button class=\"btn btn-primary btn-sm\" type=\"button\" id=\"sel\">Add</button>
                  </div>
                  <br>
                  <div class=\"table-responsive\">
                     <table class=\"table table-hovered\" id=\"myTable\">
                        <thead class=\"bg-primary text-white\">
                           <tr>
                              <th>Item</th>
                              <th>Qty</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        ";
        // line 1257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customerOrderItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1258
            echo "                        ";
            if ((($this->getAttribute($context["item"], "isTray", array()) == "0") || ($this->getAttribute($context["item"], "isTray", array()) == ""))) {
                echo " 
                        ";
            } else {
                // line 1260
                echo "                        <tr>
                           <td><input type=\"hidden\" value=\"";
                // line 1261
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "\" name=\"oqty[]\"><input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" name=\"id[]\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                echo "</td>
                           <td><input type=\"hidden\" value=\"";
                // line 1262
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trayQty", array()), "html", null, true);
                echo "\" name=\"qty[]\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trayQty", array()), "html", null, true);
                echo "</td>
                           <td><button class=\"btn btn-danger\" type=\"button\" class=\"remove\" onclick=\"removeVariant(this)\"><i class=\"fa fa-trash\"></i></button></td>
                        </tr>
                        ";
            }
            // line 1266
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1267
        echo "                     </table>
                  </div>
                  <div class=\"form-group\">
                     <button class=\"btn btn-success\" type=\"submit\">Save</button>
                     <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>









<!-- end of tray status -->
<script type=\"text/javascript\">
\$( document ).ready(function() {
changeBackgroundColor();
});
   function changeBackgroundColor() {

      var select = \$('.otype');
      var selectedVal = \$('.otype').val();

      if(selectedVal == 'processing') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#009688');
         \$('.otype option').css('color', '#ffffff');

      } else if(selectedVal == 'ready') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#4caf50');
         \$('.otype option').css('color', '#ffffff');

      } else if(selectedVal == 'dispatched') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#ff5722');
         \$('.otype option').css('color', '#ffffff');

      } else if(selectedVal == 'delivered') {
         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#4caf50');
         \$('.otype option').css('color', '#ffffff');
         
      } else if(selectedVal == 'cancelled') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#e2a03f');
         \$('.otype option').css('color', '#ffffff');
         
      } else if(selectedVal == 'completed') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#8dbf42');
         \$('.otype option').css('color', '#ffffff');

      } else if(selectedVal == 'received') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#3f51b5');
         \$('.otype option').css('color', '#ffffff');
         
      }
   }
   \$('.otype').change(function(){
  
   changeBackgroundColor();

   var value=this.value;
   var val=\$('.otype').find('option:selected').text();

   // alert(val);
   if(val=='Assign To Delivery Boy' || val=='Reassign Order')
   {
    \$('.slot-time').hide();
    \$('#dboy').show();
       \$('#dboy').html('<div class=\"form-group\"><label for=\"appbundle_customerorder_orderBoy\" class=\"required\">Assign Task To</label><select class=\"form-control db\" name=\"delivery_boy\"></select></div>');
       getDelivery();
   }
   else if(val=='Reassign Picker' || val=='Assign To Picker')
   {
    \$('.slot-time').hide();
    \$('#dboy').show();
       \$('#dboy').html('<div class=\"form-group\"><label for=\"appbundle_customerorder_orderBoy\" class=\"required\">Assign Task To</label><select class=\"form-control db\" name=\"picker\"></select></div>');
       getPicker();
   }
      else if(val=='Reschedule Order')
   {
    // alert('delivery boy names come here!');
      \$('#dboy').hide();   
  \$('.slot-time').show();
   }

   else
   {
    \$('.slot-time').hide();
    \$('#dboy').hide();   
   }
   });
   
      function getPicker()
   {
   var out ={'branch':";
        // line 1379
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "branch", array()), "html", null, true);
        echo "};                      // alert(x);
   \$.ajax({
       type: \"POST\",
       url: \"/restaurant-manager/get-picker\",
       data: out,
       success: function (res, dataType) {
    // console.log('";
        // line 1385
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_get_cat");
        echo "');
   send(res);
             
   // console.log(datas);
   
       },
       error: function (XMLHttpRequest, textStatus, errorThrown) {
           alert('Error : ' + errorThrown);
       }
   });
}
   function getDelivery()
   {
   var out ={'branch':";
        // line 1398
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "branch", array()), "html", null, true);
        echo "};                      // alert(x);
   \$.ajax({
       type: \"POST\",
       url: \"/restaurant-manager/get-del\",
       data: out,
       success: function (res, dataType) {
    // console.log('";
        // line 1404
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_get_cat");
        echo "');
   send(res);
             
   // console.log(datas);
   
       },
       error: function (XMLHttpRequest, textStatus, errorThrown) {
           alert('Error : ' + errorThrown);
       }
   });
}
   function send(myObjects)
   {
   \$('.subcat').html('');
   \$.each(myObjects, function () {
       \$('.db').append('<option value=\"'+this.id+'\">'+this.value+'</option>');
         
       });            
      }
       function removeVariant(obj){
   // \$(this).attr(\"data-usr\" , '');
   
           \$(obj).parent().parent().remove();
   
       }
    \$('#sel').click(function () {
    var id=\$('#sels').val();
    var name = \$('#sels option:selected').attr('data-name');
    var qty=\$('#quantity').val();
    var barcode=\$('#barcode').val();
    if(barcode=='' || barcode == '0')
    {
    var oqty= \$('#sels option:selected').attr('data-qty');
    // alert(oqty);
   if(qty > oqty)
   {
       qty=qty;
   }
   // alert(qty);
    var output = \$('input[name=\"qty[]\"]').val();
   // if(typeof(output)=='undefined')
   // {
   // \$('#myTable').append('<tr><td><input type=\"hidden\" value=\"'+id+'\" name=\"id[]\">'+name+'</td><td><input type=\"hidden\" value=\"'+qty+'\" name=\"qty[]\">'+qty+'</td><td><button class=\"btn btn-danger\" type=\"button\" class=\"remove\" onclick=\"removeVariant(this)\"><i class=\"fa fa-trash\"></i></button></td></tr>'); 
   // }   
     \$('#myTable').append('<tr><td><input type=\"hidden\" value=\"'+oqty+'\" name=\"oqty[]\"><input type=\"hidden\" value=\"'+id+'\" name=\"id[]\">'+name+'</td><td><input type=\"hidden\" value=\"'+qty+'\" name=\"qty[]\">'+qty+'</td><td><button class=\"btn btn-danger\" type=\"button\" class=\"remove\" onclick=\"removeVariant(this)\"><i class=\"fa fa-trash\"></i></button></td></tr>'); 
        \$('#quantity').val(0);
//      \$('input[name=\"id[]\"]').each(function() {
//       var comp= \$(this).val(); 
//       console.log(comp);
//    if(id == comp)
//    {
//    // alert('item already in tray!');
//    \$(this).parent().parent().remove();


// } else
//   {

  

//  }
//  });
          
   }
   else
   {
   
   }
   
   // }
     // });
     
   
   
    });
    \$('#barcode').on('input propertychange paste', function() {
    var id=\$('#barcode').val();
     var inputlength = \$('#barcode').val().length;
       if (inputlength>4) {
   var out ={'order':";
        // line 1483
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo ",'barcode':id};                      // alert(x);
   
   \$.ajax({
       type: \"POST\",
       url: \"";
        // line 1487
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_get_item_by_barcode");
        echo "\",
       data: out,
       success: function (res, dataType) {
    // console.log('";
        // line 1490
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_get_cat");
        echo "');
   // send(res);
   addbar(res);
             
   // console.log(datas);
   
       },
       error: function (XMLHttpRequest, textStatus, errorThrown) {
           alert('Error : ' + errorThrown);
       }
   });
   
             return false;
       }
     
   
   });
 
    function addbar(x)
    {
     var txt;
     if(x.status=='0')
     {
       \$('#barcode').val(0);
   alert('barcode is invalid!!');
     }
     else
     {
        var person = prompt(\"Please enter Quantity:\", x.quantity);
     if (person == null || person == \"\") {
       txt = \"User cancelled the prompt.\";
     } else {
       if(person > x.quantity)
   {
       person=x.quantity;
   }
             \$('#myTable').append('<tr><td><input type=\"hidden\" value=\"'+x.quantity+'\" name=\"oqty[]\"><input type=\"hidden\" value=\"'+x.id+'\" name=\"id[]\">'+x.name+'('+x.variation+')</td><td><input type=\"hidden\" value=\"'+person+'\" name=\"qty[]\">'+person+'</td><td><button class=\"btn btn-danger\" type=\"button\" class=\"remove\" onclick=\"removeVariant(this)\"><i class=\"fa fa-trash\"></i></button></td></tr>'); 
        \$('#quantity').val(0);
     } 
     }
   
   }
   

                  \$('#payment_statuss').change(function(){
                    var status=\$('#payment_statuss').val();
                    // alert(status);
                    if(status=='cash')
                    {
                      \$('.ons').hide();
                    }
                    else
                    {
                       \$('.ons').show();
                    }

                  });
\$('#locationSlot').change(function(){
      var id=\$('#locationSlot').val();
    var date=\$('#locationSlot option:selected').attr('data-date');
    var time=\$('#locationSlot option:selected').attr('data-time');
        \$('#fixdate').val(date);
        \$('#fixtime').val(time);

});
  \$('#locationName').change(function(){
    var id=\$('#locationName').val();
        var area=\$('#locationName option:selected').attr('data-name');
        \$('#area').val(area);

    // alert(id);
var out ={'id':id};                      // alert(x);
\$.ajax({
  type: \"POST\",
  url: \"";
        // line 1564
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_slot_by_id");
        echo "\",
  data: out,
  success: function (res, dataType) {
  \$('#locationSlot').html('<option>Select Slot</option>');
              \$.each(res,function () {
                \$('#locationSlot').append('<option value=\"'+this.time+'\"  data-time=\"'+this.time+'\"  data-date=\"'+this.date+'\" >'+this.time+' on '+this.date+'</option>');   
                }); 
},
error: function (XMLHttpRequest, textStatus, errorThrown) {
  alert('Error : ' + errorThrown);
}
});
});

                  </script>
";
        
        $__internal_61f06770162b36d363e4ac61036bb7c3eef8708983f299f9d910cd8f97d7eaad->leave($__internal_61f06770162b36d363e4ac61036bb7c3eef8708983f299f9d910cd8f97d7eaad_prof);

        
        $__internal_b9cf9794419ad398694a0fc53740f054393e4ba8e792652a701c4d765e2039ef->leave($__internal_b9cf9794419ad398694a0fc53740f054393e4ba8e792652a701c4d765e2039ef_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Orders/orderForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2878 => 1564,  2801 => 1490,  2795 => 1487,  2788 => 1483,  2706 => 1404,  2697 => 1398,  2681 => 1385,  2672 => 1379,  2558 => 1267,  2552 => 1266,  2543 => 1262,  2533 => 1261,  2530 => 1260,  2524 => 1258,  2520 => 1257,  2499 => 1239,  2496 => 1238,  2477 => 1236,  2473 => 1235,  2461 => 1226,  2434 => 1202,  2430 => 1201,  2421 => 1195,  2380 => 1156,  2373 => 1153,  2369 => 1152,  2362 => 1148,  2359 => 1147,  2349 => 1144,  2346 => 1143,  2337 => 1141,  2333 => 1140,  2323 => 1137,  2319 => 1136,  2315 => 1135,  2311 => 1134,  2308 => 1133,  2304 => 1132,  2300 => 1131,  2288 => 1122,  2260 => 1097,  2253 => 1093,  2247 => 1090,  2239 => 1085,  2214 => 1063,  2207 => 1059,  2201 => 1056,  2187 => 1045,  2179 => 1040,  2146 => 1022,  2134 => 1017,  2122 => 1012,  2109 => 1006,  2106 => 1005,  2102 => 1004,  2098 => 1002,  2096 => 1001,  2084 => 997,  2075 => 990,  2068 => 988,  2066 => 987,  2057 => 985,  2052 => 982,  2037 => 978,  2023 => 977,  2020 => 976,  2017 => 975,  2006 => 974,  2004 => 973,  1998 => 970,  1994 => 969,  1991 => 968,  1985 => 966,  1983 => 965,  1978 => 964,  1976 => 963,  1971 => 962,  1968 => 961,  1962 => 959,  1959 => 958,  1957 => 957,  1949 => 954,  1943 => 951,  1940 => 950,  1935 => 949,  1933 => 948,  1927 => 944,  1923 => 943,  1919 => 941,  1917 => 940,  1911 => 936,  1907 => 934,  1904 => 933,  1902 => 932,  1890 => 922,  1878 => 916,  1874 => 915,  1869 => 913,  1865 => 912,  1861 => 911,  1857 => 910,  1851 => 908,  1847 => 907,  1839 => 902,  1832 => 898,  1822 => 893,  1813 => 889,  1806 => 885,  1796 => 878,  1792 => 877,  1788 => 876,  1784 => 875,  1780 => 874,  1776 => 873,  1759 => 859,  1755 => 858,  1745 => 851,  1741 => 850,  1706 => 817,  1701 => 814,  1676 => 792,  1663 => 790,  1659 => 789,  1653 => 785,  1649 => 783,  1645 => 781,  1643 => 780,  1633 => 773,  1628 => 771,  1610 => 755,  1605 => 753,  1602 => 752,  1599 => 750,  1595 => 749,  1589 => 745,  1579 => 737,  1576 => 736,  1566 => 728,  1564 => 727,  1560 => 725,  1554 => 722,  1548 => 720,  1546 => 719,  1543 => 718,  1537 => 715,  1533 => 713,  1530 => 712,  1527 => 711,  1519 => 708,  1513 => 706,  1511 => 705,  1502 => 703,  1487 => 696,  1483 => 694,  1477 => 691,  1471 => 689,  1469 => 688,  1466 => 687,  1458 => 685,  1454 => 683,  1451 => 682,  1448 => 681,  1440 => 678,  1436 => 676,  1433 => 675,  1431 => 674,  1425 => 671,  1416 => 667,  1385 => 638,  1378 => 634,  1374 => 632,  1372 => 631,  1365 => 626,  1358 => 624,  1356 => 623,  1351 => 620,  1346 => 618,  1322 => 614,  1314 => 609,  1303 => 607,  1297 => 604,  1288 => 602,  1278 => 599,  1275 => 598,  1271 => 597,  1267 => 595,  1265 => 594,  1257 => 593,  1251 => 589,  1245 => 587,  1243 => 586,  1238 => 585,  1235 => 584,  1225 => 580,  1219 => 576,  1212 => 574,  1210 => 573,  1207 => 572,  1201 => 570,  1199 => 569,  1194 => 568,  1191 => 567,  1185 => 565,  1183 => 564,  1178 => 563,  1176 => 562,  1170 => 558,  1155 => 554,  1145 => 551,  1137 => 550,  1134 => 549,  1131 => 548,  1125 => 546,  1123 => 545,  1118 => 544,  1115 => 543,  1110 => 540,  1105 => 538,  1103 => 537,  1095 => 535,  1093 => 534,  1091 => 533,  1085 => 530,  1082 => 529,  1080 => 528,  1064 => 527,  1060 => 525,  1054 => 523,  1052 => 522,  1047 => 521,  1045 => 520,  1042 => 519,  1038 => 517,  1035 => 516,  1032 => 515,  1029 => 514,  1026 => 513,  1023 => 512,  1021 => 511,  1019 => 510,  1017 => 509,  1015 => 508,  1013 => 507,  1007 => 504,  1003 => 503,  1000 => 502,  995 => 501,  986 => 500,  979 => 499,  973 => 498,  970 => 497,  964 => 496,  961 => 495,  957 => 494,  953 => 493,  945 => 487,  941 => 486,  937 => 484,  935 => 483,  917 => 467,  912 => 466,  910 => 465,  905 => 462,  899 => 459,  875 => 455,  867 => 450,  856 => 448,  850 => 445,  841 => 443,  831 => 440,  828 => 439,  824 => 438,  820 => 436,  818 => 435,  810 => 434,  804 => 430,  798 => 428,  796 => 427,  791 => 426,  788 => 425,  778 => 421,  772 => 417,  765 => 415,  763 => 414,  760 => 413,  754 => 411,  752 => 410,  747 => 409,  744 => 408,  738 => 406,  736 => 405,  731 => 404,  729 => 403,  723 => 399,  708 => 395,  698 => 392,  690 => 391,  687 => 390,  684 => 389,  678 => 387,  676 => 386,  671 => 385,  668 => 384,  663 => 381,  658 => 379,  656 => 378,  648 => 376,  646 => 375,  644 => 374,  638 => 371,  635 => 370,  633 => 369,  617 => 368,  613 => 366,  607 => 364,  605 => 363,  600 => 362,  598 => 361,  595 => 360,  591 => 358,  588 => 357,  585 => 356,  582 => 355,  579 => 354,  576 => 353,  574 => 352,  572 => 351,  570 => 350,  568 => 349,  566 => 348,  560 => 345,  556 => 344,  553 => 343,  548 => 342,  539 => 341,  532 => 340,  526 => 339,  523 => 338,  517 => 337,  514 => 336,  510 => 335,  506 => 334,  498 => 328,  494 => 327,  490 => 325,  488 => 324,  453 => 294,  445 => 291,  433 => 288,  427 => 285,  399 => 260,  395 => 259,  391 => 258,  387 => 257,  383 => 256,  376 => 252,  372 => 251,  360 => 242,  342 => 226,  337 => 224,  335 => 223,  328 => 219,  316 => 218,  308 => 216,  299 => 215,  293 => 213,  287 => 210,  282 => 208,  277 => 206,  272 => 204,  267 => 202,  262 => 200,  259 => 199,  257 => 198,  254 => 197,  252 => 196,  248 => 195,  239 => 189,  235 => 188,  48 => 3,  39 => 2,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@AppBundle/'~ myExtend ~'/base.html.twig' %}
{% block body %}
<style type=\"text/css\">
thead.ban td {
    padding: 5px !important;
    font-size: 11px;
    font-weight: 600;
    text-transform: capitalize;
}

.pr
   {
    font-size: 10px;
    text-transform: uppercase;
   }
   @media print{
   .noprint{
   display:none;
   }

 
      .print-area
   {
    display: block !important;
    background: #fff !important;
   }
   }
      .print-area
   {
    display: none;
   }
   .edit-order
   {
   float: right;
   font-weight: bolder;
   text-transform: uppercase;
   font-size: 11px;
   }
   .borderless tr {
    border: none;
}
 @media print
      {
         @page {
           margin-top: 0;
           margin-bottom: 0;
         }
         body  {
           padding-top: 72px;
           padding-bottom: 72px ;
         }
         *
         {
          background: #fff !important;
         }
      } 

.x td, .x th {
    border-color: #f3f1f1;
    padding: 0px;
    font-weight: 500;
    font-size: 11px;
}
.xx td, .xx th {
    border-color: #f3f1f1;
    padding: 0px;
    font-weight: 500;
    font-size: 13px;
}

      .ss
      {
        background: #fff0;
    color: #000 !important;
    border: none;
    box-shadow: none;
    }
    .select1{
       padding: 7px 16px;
    }
    .card-header{
        background-color: #fff;
        border-color: #fff;
    }
    .card-header section > div.collapsed {
        color: #000;
       }

     select.info {

  /* styling */
  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box; 
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}
 
 .form-control.form-control-sm {
    padding: 6px 16px;
 }
      
select.classic {
  background-image:
    linear-gradient(45deg, transparent 50%, #000 50%),
    linear-gradient(135deg, #000 50%, transparent 50%),
    linear-gradient(to right, #c7c7c7, #c7c7c7);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
}

select.classic:focus {
  background-image:
    linear-gradient(45deg, #000 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, #000 50%),
    linear-gradient(to right, #c7c7c7, #c7c7c7);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
  border-color: grey;
  outline: 0;
}
.right-sidebar-option {
      background: #f1f2f3;
}

.card-header section > div:not(.collapsed) {
    color: #000;
}
.right-sidebar-card {
  margin-bottom:0;
  border-radius:0;
}

.select2-container .select2-selection--single{
  height: 100% !important;
}

select.form-control.form-control-sm.fa.fa-angle-down {
    background: #E2A03F;
    color: #fff !important;
}

input.submit-btn.submit-btn.btn-block {
    background: #2F4ACA;
    border: none;
    height: 33px;
    color: #ffff;
    font-size: 15px;
    font-weight: 700;
}

.otype {
   font-weight:700;
}
.importantRule{
   color:#fff !important;
}
</style>
<div class=\"noprint\">
<!-- new invoice start -->


  {{ form_start(form) }}
            {% form_theme form '@AppBundle/Themes/widget.html.twig' %}  
<div class=\"layout-px-spacing\">
    <div class=\"row layout-top-spacing\">
    <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"p-2\">
                <h4 class=\"\"><span class=\"badge badge-primary\">#{{ order.id }}</span> 
                 {% if order.orderStatus == 'dispatched' %}
                    <span class=\"badge\" style=\"background: #ff5722;text-transform: capitalize !important;color: #fff;\">Assigned To Delivey Boy</span>
                      {% elseif order.orderStatus == 'onway' %}
                    <span class=\"badge\" style=\"background: #ff5722;text-transform: capitalize !important;color: #fff;\">Out For Delivery</span>
                        {% elseif order.orderStatus == 'ready' %} 
                    <span class=\"badge\" style=\"background: #4caf50;text-transform: capitalize !important;color: #fff;\">Order Ready</span>
                   {% elseif order.orderStatus == 'received' %} 
                    <span class=\"badge\" style=\"background: #3f51b5;text-transform: capitalize !important;color: #fff;\">Received</span>
                     {% elseif order.orderStatus == 'processing' %} 
                    <span class=\"badge\" style=\"background: #009688;text-transform: capitalize !important;color: #fff;\">Processing</span>
                     {% elseif order.orderStatus == 'processing' %} 
                    <span class=\"badge\" style=\"background: #009688;text-transform: capitalize !important;color: #fff;\">Processing</span>
                     {% elseif order.orderStatus == 'delivered' %} 
                    <span class=\"badge\" style=\"background: #4caf50;text-transform: capitalize !important;color: #fff;\">delivered</span>
                     {% elseif order.orderStatus == 'delivered' %} 
                    <span class=\"badge\" style=\"background: #4caf50;text-transform: capitalize !important;color: #fff;\">delivered</span>
                   {% else %}
                 <span class=\"badge\" style=\"background: #4caf50;text-transform: capitalize !important;color: #fff;\">{{ order.orderStatus }} </span>
               {% endif %}
               {% if order.orderType == 'Delivery' or order.orderType == 'delivery' %}<span class=\"badge badge-success\">Home Delivery </span>{% elseif order.orderType == 'pickup' %} <span class=\"badge badge-warning\">Pickup From Store</span> {% else %} <span class=\"badge badge-danger\">Express Delivery</span> {% endif %}
               {% if order.membership == '0' or order.membership == '2'  %}<span class=\"badge badge-default\">Normal Order</span>{% else %}<span class=\"badge badge-danger\">Membership Applied</span>
               {% endif %}
               {% if order.isMerged == '0' and order.ref == 0 %}{% else %} <a href=\"{{ path('restaurant_orders_panel_update',{'id':order.ref}) }}\" title=\"Edit\"> <span class=\"badge badge-warning\">Merged Order ({{ order.ref }})</span> </a>{% endif %} 
               <span class=\"badge badge-danger\" style=\"text-transform:capitalize;\">{{ order.paymentStatus }}</span>
                <span style=\"float:right;\">
                 <a href=\"#kot\" onclick=\"frames['prints'].print()\" value=\"printletter\" style=\"width:100%\"  data-placement=\"bottom\" title=\"KOT Print\">
                  <img src=\"/assets/images/KOT.png\" style=\"width:24px;\"></a>
                  {% if order.ref == 0 %}
                  <a href=\"#download\" onclick=\"window.print()\" style=\"width:100%;margin-top:5px;\"   data-placement=\"bottom\" title=\"A4 Print\">
                      <img src=\"/assets/images/A4.png\" style=\"width:24px;\"></a>
{% endif %}                
     <a href=\"#thermal\"  onclick=\"frames['frame'].print()\" value=\"printletter\"  style=\"width:100%;margin-top:5px;\"   data-placement=\"bottom\" title=\"Thermal Print\">
                      <img src=\"/assets/images/thermal.png\" style=\"width:24px;\"></a>
                    </span>
                     </h4>
         </div>
      </div>
    </div>
      <!--col-md-9-->
      <div class=\"col-md-9\">
        <div class=\"row\">
          <div class=\"col-md-6 mb-4\">
            <div class=\"card h-100\">
              <div class=\"row form-row\">
                <div class=\"col-md-12 form-group\">
                 <div class=\"card-header\">
                         <!--a href=\"#\" style=\"background: #3F51B5;color:#fff;font-size: 12px;padding: 6px;\">{{ order.orderType|upper }}</a-->
          </h4>
        </div>
                  <div id=\"user\">
                     <div class=\"col-md-12 form-group\">
                  <div class=\"card-body\">
                    <!--address-->
                    <h5 class=\"mb-4\">Customer Details</h5>
                    <div class=\"\">
                        <p> {{ order.customerName }}</p>
                        <p>{{ order.customer.email }}</p>
                     </div>
                     <hr>
                     <div class=\"\">
                      <p><b>Delivery Area </b>: {{  order.area }}</p>
                          <p> {{ order.address }}</p>
                          <p> {{ order.landmark }}</p>
                          <p> Gst No : {{ order.customer.gst }}</p>
                          <p> Mobile : {{ order.customer.mobileNumber }}</p>
                        
                     </div>
                  </div>

                  <!--end-->
                </div>
                  
                     </div>
                  </div>
                 

               
              </div>
            </div>
          </div>

          <div class=\"col-md-6 mb-4\">
            <div class=\"card h-100\">
                <div class=\"form-group col-md-12\">
 <div class=\"card-body\">
                    <!--address-->
                    <h5 class=\"mb-4\">Payment Details</h5>
                    <div class=\"row form-row\">
                        <div class=\"col-md-12 form-group\">
                           <input  type=\"text\" name=\"txt\" class=\"form-control form-control-sm\" required=\"\" value=\"{{ order.paymentType }}\" readonly>
                        </div>
                          <div class=\"col-md-12 form-group\">
                           <input  type=\"text\" name=\"txt\" class=\"form-control form-control-sm\" required=\"\" value=\"{% if order.orderType == 'Delivery' %} Home Delivery {% elseif order.orderType == 'pickup' %} Pickup From Store {% else %} Express Delivery {% endif %} \" readonly>
                        </div>
                         <div class=\"col-md-12 form-group\">
                           <input  type=\"text\" name=\"txt\" class=\"form-control form-control-sm\" required=\"\" value=\"{{  order.orderDate.date|date(\"d-m-Y\") }} at {{  order.orderDate.date|date(\"h-i A\") }}\" readonly>
                        </div>
                        <div class=\"col-md-12 form-group\">
                           <input  type=\"text\" name=\"txt\" class=\"form-control form-control-sm\" required=\"\" value=\"{{ order.fixDate }} around {{ order.fixtime }}\" readonly>
                        </div>
                    </div>
                    
             
            </div>
          </div>
          </div>
        </div>
        <div class=\"col-md-12 mb-4\">        
          <div class=\"card\">
           <div class=\"card-body\">
             <h5 class=\"mb-4\">Order Items</h5>

                   <!--div class=\"col-md-12 text-right\">
                      <a href=\"#\" class=\"btn btn-primary btn-sm mb-4\"  data-toggle=\"modal\" data-target=\"#uploadCSV\">Add Items</a> 
                    </div-->
              
                    <div class=\"col-md-12\">
                      <div class=\"table-responsive m-t-10 row table-show\" style=\"display:block;\">
                       <table class=\"table table-hovered\">
                              <thead class=\"bg-primary text-white\" style=\"color:#fff;\">
                                 <tr>
                                    <th style=\"color:#fff;\">Item name</th>
                                    <th style=\"color:#fff;\">price variation</th>
                                    <th style=\"color:#fff;\">Barcode</th>
                                    <th style=\"color:#fff;\">price</th>
                                    <th style=\"color:#fff;\">quantity</th>
                                  <th style=\"color:#fff;\">Discount</th>

                                    {% if currency == 'AED' %}
                                   <th style=\"color:#fff;\">VAT</th>
                                    {% else %}
                                    <th style=\"color:#fff;\">Tax</th>
                                    {% endif %}     

                               <th style=\"color:#fff;\">Sub total</th>
                                 </tr>
                              </thead>
                              <tbody>
                                {% set tax= 0 %} 
                                 {% for item in order.customerOrderItems %}
                                 <tr style=\"font-size:10px;\">
                                    <td>{% if item.isTray == '0' or item.isTray == '' %} <span style=\"color:#2196f3;font-weight:400;\">{{ item.itemName }}</span> {% endif %}
                                   
    {% if item.isTray == '3'%} <span style=\"color:#e91e63;font-weight:400;\">{{ item.itemName }}</span> {% endif %}
                                       {% if item.isTray == '1' %} <span style=\"color:#F44337;font-weight:400;\">{{ item.itemName }}</span> {% endif %}
                                       {% if item.isTray == '2' %} <span style=\"color:#014c0a;font-weight:400;\">{{ item.itemName }}</span> {% endif %}<br>
                                         {% if item.edited == 1 %} Edited | Reason : {{ item.reason }}{% endif %}
                                    </td>
                                    <td>{{ item.priceVariavtion }}</td>
                                    <td>{{ item.barcode }}</td>
                                    <td>

                                      {% if item.discount != 0 %}
{% set discount = item.discount %}
{% set quantity = item.quantity %}
{% set priceO = discount/quantity %}
{% set price = item.price + priceO %}
                                      {% else %}
                                      {% set price = item.price %}
                                      {% endif %}
                                      {% set x= 100+item.tax %}

                                     {% set pr=price*100/x %} 
                                     {# {{ pr|round(2, 'floor') }} #}

                                     {% if numberFormat == 1 %}
                                       {{ pr|round(2, 'floor') }}
                                     {% elseif numberFormat == 0 %}
                                       {{ pr|number_format(2, '.', '') }}
                                     {% endif %}

                                   </td>
                                    <td>{{ item.quantity }}  {% if item.isTray == '1' %} <span style=\"color:#F44337;font-weight:400;\">({{ item.trayQty }})</span> {% endif %} {% if item.trayQty > item.quantity %} <span style=\"color:green;font-weight:400;\">({{ item.trayQty-item.quantity }})</span> {% endif %}</td>
                                    {% set st = item.price*item.tax/100 * item.quantity %}
                                      <td class=\"\"> 
{{ item.discount }}</td>
   
                                       <td class=\"text-right\">
{% if currency == 'AED' %}
{% if numberFormat == 1 %}
 {% set f=price-pr|round(2, 'floor') %} {% set ft=f*item.quantity %} 

{% elseif numberFormat == 0 %}
{% set f=price-pr|number_format(2, '.', '') %} 
{% endif %}
{% set ft=f*item.quantity %} 

 {# {{ ft|round(2, 'floor') }} #}
      {% if numberFormat == 1 %}
         {{ ft|round(2, 'floor') }}
      {% elseif numberFormat == 0 %}
         {{ ft|number_format(2, '.', '') }}
      {% endif %}
 {% else %}
<div class=\"tax\" style=\"display:flex;\">
  <div class=\"\"style=\"border-right: 1px solid;padding: 3px;font-size: 7px;\">CGST <br> {{ item.tax/2 }}%  {% set f=price-pr %} <br> ({% set ft=f*item.quantity%} 
  {% if numberFormat == 1 %}{{ ft|round(2, 'floor')/2 }}{% elseif numberFormat == 0 %}{{ ft|number_format(2, '.', '')/2 }}{% endif %})

  </div>
    <div style=\"padding: 3px;font-size: 7px;\">SGST <br>{{ item.tax/2 }}% <br> ({% set ft=f*item.quantity%} {% if numberFormat == 1 %}{{ ft|round(2, 'floor')/2 }}{% elseif numberFormat == 0 %}{{ ft|number_format(2, '.', '')/2 }}{% endif %})</div>
</div>

 {% endif %}

                                       </td>

                                                                      <td class=\"text-right\"> 
                                      {% if numberFormat == 1 %}
                                      {% set subTotals = pr|round(2, 'floor') * item.quantity %} 
                                       {% elseif numberFormat == 0 %}
                                      {% set subTotals = pr|number_format(2, '.', '') * item.quantity %} 
                                    {% endif %}
                                    {% if numberFormat == 1 %}
                                       {{ subTotals - item.discount|round(2, 'floor') }}
                                    {% elseif numberFormat == 0 %}
                                       {{ subTotals - item.discount|number_format(2, '.', '') }}
                                    {% endif %}
                                    </td>
                                    {% set tax = tax+ft %}
                                 </tr>
                                 {% endfor %}
                                
                              </tbody>
                                  <tfoot>
                                    <tr>
                                <th class=\"text-left\">Online/Cash : {% if numberFormat == 1 %}{{ order.orderAmount|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ order.orderAmount|number_format(2, '.', '') }}{% endif %}</span></th>
                              <th colspan=\"6\" class=\"text-right\">Total</th>
                              <th> <span class=\"sums\">
                                 {# {{ order.actualAmount|round(2, 'floor')-tax|round(2, 'floor') }} #}
                                    {% if numberFormat == 1 %}
                                       {{ order.actualAmount|round(2, 'floor')-tax|round(2, 'floor') }}
                                    {% elseif numberFormat == 0 %}
                                       {{ order.actualAmount|number_format(2, '.', '')-tax|number_format(2, '.', '') }}
                                    {% endif %}
                                    </span></th>
                            </tr>

                            <tr>
                               <th class=\"text-left\">Loyalty :  {% if numberFormat == 0 %}{{ order.loyalty|round(2, 'floor') }}{% elseif numberFormat == 1 %}{{ order.loyalty|number_format(2, '.', '') }}{% endif %}</span></th>
                              <th colspan=\"6\" class=\"text-right\">{% if currency == 'AED' %}
                              Vat
                              {% else %}
                              Tax
                             {% endif %}  </th>
                              <th>{% if numberFormat == 1 %}{{ tax|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ tax|number_format(2, '.', '') }}{% endif %}</th>
                            </tr>
                            <tr>
                               <th class=\"text-left\">Wallet : {% if numberFormat == 1 %}{{ order.wallet|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ order.wallet|number_format(2, '.', '') }}{% endif %}</span></th>
                              <th colspan=\"6\" class=\"text-right\">Discount</th>
                              <th>{{ order.totalDiscount }}</th>
                            </tr>
                            <tr>
                               <th class=\"text-left\">Total : {% set totals = order.wallet + order.loyalty + order.orderAmount  %} {% if numberFormat == 1 %}{{ totals|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ totals|number_format(2, '.', '') }}{% endif %}</span></th>
                              <th colspan=\"6\" class=\"text-right\">Delivery Charge</th>
                              <th> <span class=\"delivery\">{{ order.deliveryCharge|round(2, 'floor') }}</span></th>
                            </tr>
                           
                            <tr>
                              <th colspan=\"7\" class=\"text-right\">Grand Total</th>
                              <th> <span class=\"sums\"> {% if order.paymentType == 'wallet' %} {% set total = order.actualAmount + order.deliveryCharge - order.totalDiscount %} {% if numberFormat == 1 %}{{ total|round }}{% elseif numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% endif %} {% else %}{% set total = order.orderAmount  %}{% if numberFormat == 1 %}{{ total|round }}{% elseif numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% endif %}{% endif %}</span></th>
                            </tr>
                          </tfoot>
                           </table>
  {% if order.orderStatus == \"received\" or order.orderStatus == \"processing\" or order.orderStatus == \"ready\" or order.orderStatus == \"pick\" %} 
                           <a href=\"#\" class=\"noprint edit-order\" data-toggle=\"modal\" data-target=\"#edit-order\">edit order</a>
{% endif %}

                      </div>
                    </div>
          {% set allsum = total %}
 {% for order in merged_main_order %}

<center>Merged Order</center>


             <div class=\"col-md-12\">
                      <div class=\"table-responsive m-t-10 row table-show\" style=\"display:block;\">
                       <table class=\"table table-hovered\">
                              <thead class=\"bg-primary text-white\" style=\"color:#fff;\">
                                 <tr>
                                    <th style=\"color:#fff;\">Item name</th>
                                    <th style=\"color:#fff;\">price variation</th>
                                    <th style=\"color:#fff;\">Barcode</th>
                                    <th style=\"color:#fff;\">price</th>
                                    <th style=\"color:#fff;\">quantity</th>
                                  <th style=\"color:#fff;\">Discount</th>

                                    {% if currency == 'AED' %}
                                   <th style=\"color:#fff;\">VAT</th>
                                    {% else %}
                                    <th style=\"color:#fff;\">Tax</th>
                                    {% endif %}     

                               <th style=\"color:#fff;\">Sub total</th>
                                 </tr>
                              </thead>
                              <tbody>
                                {% set taxs= 0 %} 
                                 {% for item in merged_order %}
                                 <tr style=\"font-size:10px;\">
                                    <td>{% if item.isTray == '0' or item.isTray == '' %} <span style=\"color:#2196f3;font-weight:400;\">{{ item.itemName }}</span> {% endif %}
                                   
    {% if item.isTray == '3'%} <span style=\"color:#e91e63;font-weight:400;\">{{ item.itemName }}</span> {% endif %}
                                       {% if item.isTray == '1' %} <span style=\"color:#F44337;font-weight:400;\">{{ item.itemName }}</span> {% endif %}
                                       {% if item.isTray == '2' %} <span style=\"color:#014c0a;font-weight:400;\">{{ item.itemName }}</span> {% endif %}<br>
                                         {% if item.edited == 1 %} Edited | Reason : {{ item.reason }}{% endif %}
                                    </td>
                                    <td>{{ item.priceVariavtion }}</td>
                                    <td>{{ item.barcode }}</td>
                                    <td>

                                      {% if item.discount != 0 %}
{% set discount = item.discount %}
{% set quantity = item.quantity %}
{% set priceO = discount/quantity %}
{% set price = item.price + priceO %}
                                      {% else %}
                                      {% set price = item.price %}
                                      {% endif %}
                                      {% set x= 100+item.tax %}

                                     {% set pr=price*100/x %} 
                                     {# {{ pr|round(2, 'floor') }} #}

                                     {% if numberFormat == 1 %}
                                       {{ pr|round(2, 'floor') }}
                                     {% elseif numberFormat == 0 %}
                                       {{ pr|number_format(2, '.', '') }}
                                     {% endif %}

                                   </td>
                                    <td>{{ item.quantity }}  {% if item.isTray == '1' %} <span style=\"color:#F44337;font-weight:400;\">({{ item.trayQty }})</span> {% endif %} {% if item.trayQty > item.quantity %} <span style=\"color:green;font-weight:400;\">({{ item.trayQty-item.quantity }})</span> {% endif %}</td>
                                    {% set st = item.price*item.tax/100 * item.quantity %}
                                      <td class=\"\"> 
{{ item.discount }}</td>
   
                                       <td class=\"text-right\">
{% if currency == 'AED' %}
{% if numberFormat == 1 %}
 {% set f=price-pr|round(2, 'floor') %} {% set ft=f*item.quantity %} 

{% elseif numberFormat == 0 %}
{% set f=price-pr|number_format(2, '.', '') %} 
{% endif %}
{% set ft=f*item.quantity %} 

 {# {{ ft|round(2, 'floor') }} #}
      {% if numberFormat == 1 %}
         {{ ft|round(2, 'floor') }}
      {% elseif numberFormat == 0 %}
         {{ ft|number_format(2, '.', '') }}
      {% endif %}
 {% else %}
<div class=\"tax\" style=\"display:flex;\">
  <div class=\"\"style=\"border-right: 1px solid;padding: 3px;font-size: 7px;\">CGST <br> {{ item.tax/2 }}%  {% set f=price-pr %} <br> ({% set ft=f*item.quantity%} 
  {% if numberFormat == 1 %}{{ ft|round(2, 'floor')/2 }}{% elseif numberFormat == 0 %}{{ ft|number_format(2, '.', '')/2 }}{% endif %})

  </div>
    <div style=\"padding: 3px;font-size: 7px;\">SGST <br>{{ item.tax/2 }}% <br> ({% set ft=f*item.quantity%} {% if numberFormat == 1 %}{{ ft|round(2, 'floor')/2 }}{% elseif numberFormat == 0 %}{{ ft|number_format(2, '.', '')/2 }}{% endif %})</div>
</div>

 {% endif %}

                                       </td>

                                                                      <td class=\"text-right\"> 
                                      {% if numberFormat == 1 %}
                                      {% set subTotals = pr|round(2, 'floor') * item.quantity %} 
                                       {% elseif numberFormat == 0 %}
                                      {% set subTotals = pr|number_format(2, '.', '') * item.quantity %} 
                                    {% endif %}
                                    {% if numberFormat == 1 %}
                                       {{ subTotals - item.discount|round(2, 'floor') }}
                                    {% elseif numberFormat == 0 %}
                                       {{ subTotals - item.discount|number_format(2, '.', '') }}
                                    {% endif %}
                                    </td>
                                    {% set taxs = taxs+ft %}
                                 </tr>
                                 {% endfor %}
                                
                              </tbody>
                                  <tfoot>
                                    <tr>
                                <th class=\"text-left\">Online/Cash : {% if numberFormat == 1 %}{{ order.orderAmount|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ order.orderAmount|number_format(2, '.', '') }}{% endif %}</span></th>
                              <th colspan=\"6\" class=\"text-right\">Total</th>
                              <th> <span class=\"sums\">
                                 {# {{ order.actualAmount|round(2, 'floor')-tax|round(2, 'floor') }} #}
                                    {% if numberFormat == 1 %}
                                       {{ order.actualAmount|round(2, 'floor')-taxs|round(2, 'floor') }}
                                    {% elseif numberFormat == 0 %}
                                       {{ order.actualAmount|number_format(2, '.', '')-tax|number_format(2, '.', '') }}
                                    {% endif %}
                                    </span></th>
                            </tr>

                            <tr>
                               <th class=\"text-left\">Loyalty :  {% if numberFormat == 0 %}{{ order.loyalty|round(2, 'floor') }}{% elseif numberFormat == 1 %}{{ order.loyalty|number_format(2, '.', '') }}{% endif %}</span></th>
                              <th colspan=\"6\" class=\"text-right\">{% if currency == 'AED' %}
                              Vat
                              {% else %}
                              Tax
                             {% endif %}  </th>
                              <th>{% if numberFormat == 1 %}{{ taxs|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ taxs|number_format(2, '.', '') }}{% endif %}</th>
                            </tr>
                            <tr>
                               <th class=\"text-left\">Wallet : {% if numberFormat == 1 %}{{ order.wallet|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ order.wallet|number_format(2, '.', '') }}{% endif %}</span></th>
                              <th colspan=\"6\" class=\"text-right\">Discount</th>
                              <th>{{ order.totalDiscount }}</th>
                            </tr>
                            <tr>
                               <th class=\"text-left\">Total : {% set totals = order.wallet + order.loyalty + order.orderAmount  %} {% if numberFormat == 1 %}{{ totals|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ totals|number_format(2, '.', '') }}{% endif %}</span></th>
                              <th colspan=\"6\" class=\"text-right\">Delivery Charge</th>
                              <th> <span class=\"delivery\">{{ order.deliveryCharge|round(2, 'floor') }}</span></th>
                            </tr>
                           
                            <tr>
                              <th colspan=\"7\" class=\"text-right\">Grand Total</th>
                              <th> <span class=\"sums\"> {% if order.paymentType == 'wallet' %} {% set total = order.actualAmount + order.deliveryCharge - order.totalDiscount %} {% if numberFormat == 1 %}{{ total|round }}{% elseif numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% endif %} {% else %}{% set total = order.orderAmount  %}{% if numberFormat == 1 %}{{ total|round }}{% elseif numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% endif %}{% endif %}</span></th>
                            </tr>
                          </tfoot>
                           </table>
  {% if order.orderStatus == \"received\" or order.orderStatus == \"processing\" or order.orderStatus == \"ready\" or order.orderStatus == \"pick\" %} 
{% endif %}

                      </div>
                    </div>
          {% set allsum = allsum + total %}

{% endfor %}





{% if order.ref != 0 %}
 <b> <center>-------------------------------------------------------
    <br>
Total Amount :  {{ allsum|number_format(2, '.', '') }} 
  </center></b>
 
{% endif %}







                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 mb-4\">
           <div class=\"h-100\">
            <div id=\"toggleAccordion\">
              
              <div class=\"card right-sidebar-card\">
                <div class=\"card-header\" id=\"headingOne1\">
                  <section class=\"mb-0 mt-0\">

                    <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionOne\" aria-expanded=\"true\" aria-controls=\"defaultAccordionOne\">
                      Order Info <div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                    </div>
                  </section>
                </div>
                <div id=\"defaultAccordionOne\" class=\"collapse show\" aria-labelledby=\"headingOne1\" data-parent=\"#toggleAccordion\">
                  <div class=\"card-body right-sidebar-option\">
                    <div class=\"\">
                      <p style=\"\"><b>Ordered on</b></p>
                      <p>{{  order.orderDate.date|date(\"d-m-Y\") }} at {{  order.orderDate.date|date(\"h-i A\") }}</p>
                    </div>
                    <div>
                     <p style=\"\"><b>Device</b></p>
                     <p>{{  order.channel }}</p>
                   </div>
                
                    {% if dname == '' %}
                    {% else %}
                   <div>
                     <p style=\"\"><b>Delivery Boy</b></p>
                     <p>{{ dname }}-({{ dmobile }})</p>
                   </div>
                   {% endif %}
                   {% if pname == '' %}
                           {% else %}
                      <div>
                     <p style=\"\"><b>Picker Name</b></p>
                     <p>{{ pname }}-({{ pmobile }})</p>
                   </div>
                                              {% endif %}          
                   {% if order.note == ''%}
                   {% else %}                    <div>
                     <p style=\"\"><b>Note</b></p>
                     <p>{{ order.note }}</p>
                   </div>
                   {% endif %}
                   <div>
                     <p style=\"\"><b>Tray Number</b></p>
                     <p>{% if order.tray == ''  or order.tray == '0' or order.tray is null %} <i style=\"color:red;\">not created </i>{% else %} {{ order.tray }}{% endif %}  

                      (<a href=\"#ssss\"  data-toggle=\"modal\" data-target=\"#myModal\">edit</a>)</p>
                   </div>

                      <div>
                     <p style=\"\"><b>Tray Status</b></p>
                     <p> {% if order.tray == ''  or order.tray == '0'  or order.tray is null %} <i style=\"color:red;\">Tray number not assigned</i>{% else %} in Tray {% endif %}   (<a href=\"#ssss\"  data-toggle=\"modal\" data-target=\"#trayStatus\">edit</a>)</p>
                   </div>
                    {% if order.deliveryTime == ''%}
                   {% else %}                    <div>
                     <p style=\"\"><b>Delivery Time</b></p>
                     <p>{{  order.deliveryTime.date|date(\"d-m-Y\") }} at {{  order.deliveryTime.date|date(\"h-i A\") }}</p>
                   </div>
                   {% endif %}
                   {% if order.slotReason == ''%}
                   {% else %}
                   <div>
                     <p style=\"\"><b>Reason For Reschedule</b></p>
                     <p>{{ order.slotReason }}</p>
                   </div>
                   {% endif %}

                    {% if order.promocode == ''%}
                   {% else %}                    <div>
                     <p style=\"\"><b>Promocode</b></p>
                     <p>{{  order.promocode }}</p>
                   </div>
                   {% endif %}

                         <div>
                          {% if order.paymentStatus == 'paid' %}
                  <div class=\"form-group\">
                     <p style=\"cursor:pointer;\"><b>Payment Status</b></p>
                     <div class=\"form-group \" >
                     <span  class=\"badge badge-success\">Paid</span>
                      
                    </div>
                  </div>
                  {% endif %}
                  {% if order.paymentStatus == 'pending'  or order.paymentStatus == '' or order.paymentStatus == 'cancelled' or order.paymentStatus == 'failed' %}
                  <div class=\"form-group\">
                     <p style=\"cursor:pointer;\"><b>Payment Status</b></p>
                     <div class=\"form-group \" >
                      <span id=\"payment_status\"  data-toggle=\"modal\" data-target=\"#edit-payment-status\" class=\"badge badge-danger\">Mark As Paid </span>
                      
                    </div>
                  </div>
                  {% endif %}


</div>
<p style=\"\"><b>Version</b></p>
<p>{{  order.version }}</p>
{% if order.transactionId == '' or  order.transactionId == ' '  %}
{% else %}
<p style=\"\"><b>Transction Id</b></p>
<p>{{  order.transactionId }}</p>
{% endif %}

                              </div>
                            </div>


                          </div>
                          <div class=\"card right-sidebar-card\">
                            <div class=\"card-header\" id=\"headingTwo1\">
                              <section class=\"mb-0 mt-0\">
                                <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionTwo\" aria-expanded=\"true\" aria-controls=\"defaultAccordionTwo\">
                                  Order Status<div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                                </div>
                              </section>
                            </div>
                            <div id=\"defaultAccordionTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo1\" data-parent=\"#toggleAccordion\">
                              <div class=\"card-body right-sidebar-option\">
                                  {% if order.orderStatus != \"completed\" and order.orderStatus != \"cancelled\" %} 
               <div class=\"form-group\">
                     {{ form_row(form.orderStatus,{'attr':{'class':'form-control otype'}}) }}
                  </div>
                  <div id=\"dboy\">
                  </div>
<input type=\"hidden\" name=\"fixtime\" id=\"fixtime\">
<input type=\"hidden\" name=\"fixdate\" id=\"fixdate\">

{% if order.orderStatus == 'reschedule' %}
<div class=\"slot-time\">
  {% else %}
<div class=\"slot-time\" style=\"display:none;\">
  {% endif %}
                   <div class=\"row form-row\">
                    <div class=\"col-md-12 form-group\">
                     <select class=\"form-control form-control-sm classic info\" name=\"area\" id=\"locationName\">
                      <option value=\"\">Select Area</option>
                      {% for loc in location %}
                      <option value=\"{{ loc.id }}\" data-name=\"{{ loc.title }}\">{{ loc.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                  <div class=\"row form-row\">
                  <div class=\"col-md-12 form-group\">
                    <select class=\"form-control form-control-sm classic info\" name=\"slot\" id=\"locationSlot\">
                      <option value=\"\">Slots</option>
                      
                    </select>
                  </div>
                </div>
</div>
                   <div class=\"form-group\">
                     <button type=\"submit\" class=\"btn btn-primary pr\" style=\"width:100% !important;margin-bottom:5px;\">Update order</button>
                            
                          </div>
           
                      </div>
                    </div>
                  </div>

                      
                           {% else %} 
                      
               {% endif %}
                </div>
                
              </div>




<!-- new invoice end -->





















   <div class=\"col-12\">
     
              
            </div>
            {{ form_widget(form._token) }}
            {{ form_end(form,{'render_rest':false}) }}
         </div>

 </div>
 </div>
</div>
</div>
<iframe src=\"{{ path('thermal_print',{'id':order.id}) }}\" style=\"display:none;\" name=\"frame\"></iframe>
<iframe src=\"{{ path('normal_print',{'id':order.id}) }}\" style=\"display:none;\" name=\"prints\"></iframe>
</div>
<!-- starty of  card -->
<div class=\"print-area\" style=\"display:none\">
  <div class=\"container\">
<div class=\"row\">
  <div class=\"col-12\">
<center><span>O  R  I  G  I  N  A  L     T  A  X     I  N  V  O  I  C  E</span></center>
</div>
</div>
<div class=\"row\">
  <div class=\"col-6\">
      <p>Bill to/Ship to:<br>
                           <small>
                           {{ order.customerName }}<br>
                           {{ order.address }}<br>
                           {{ order.landmark }}
                           Mobile : {{ order.customer.mobileNumber }}<br>
                           Email : {{ order.customer.email }}<br>
                           Gst No: {{ order.customer.gst }}

                           </small>
                        </p>
                         <table class=\"table xx table-bordered\">
                                 <tr>
                                  <td>Order Id</td>
                                   <td>{{ order.id }}</td> 
                                 </tr>
                                 <tr>
                                  <td>Order Date</td>
                                   <td>{{  order.orderDate.date|date(\"d-m-Y\") }} at {{  order.orderDate.date|date(\"h-i A\") }}</td> 
                                 </tr>
                                  <tr>
                                  <td>Slot</td>
                                   <td>{{ order.fixtime }} - {{ order.fixDate}}</td> 
                                 </tr>
                                 
                                  <tr>
                                  <td>Order Type</td>
                                   <td>{{ order.paymentType|upper }}</td> 
                                 </tr>
                                 <tr>
                                  <td>Delivery Area</td>
                                   <td>{{ order.area|upper }}</td> 
                                 </tr>
                            </table>
</div>
  <div class=\"col-6\">
    {% for res in restaurant %}
          <p style=\"float:right\"><img src=\"/uploads/restaurant/icons/{{ res.iconImage }}\" style=\"height:50px;\"><br>
                           <small>
                           {{ res.restaurantName }}<br>
                           {{ res.restaurantAddress }}<br>
                           {{ res.restaurantLocation }}<br>
                            Gst No:{{ res.gst }}<br>

                           Mobile : {{ res.primaryMobile }}<br>
                           Email : {{ res.primaryEmail }} 
                           </small>

                        </p>
                                   
                        {% endfor %}
                    
</div>
</div>

<div class=\"table-responsive\">
                           <table class=\"table x table-bordered\">
                              <thead class=\"ban\">
                                 <tr>
                                  <td>#</th>
                                    <td>Item name</td>
                                  {% if currency == 'AED' %}
                                  {% else %}
                                      <td>Hsn</td>
                                      {% endif %}

                                    <td>Price</td>
                                     <td>Quantity</td>
                                         <td>Discount</td>
                                  {% if currency == 'AED' %}
                                   <th style=\"color:#fff;\">VAT</th>
                                    {% else %}
                                    <th style=\"color:#fff;\">Tax</th>
                                    {% endif %}                                     <td> Total Value</td>
                                 </tr>
                              </thead>
                              <tbody>
                                {% set count= 1 %}
                                 {% for item in order.customerOrderItems %}
                                 <tr>
                                  <td>{{ count }}</td>
                                           

                                    <td>{{ item.itemName }} - {{ item.priceVariavtion }}
                                   
                                    </td>
                                    {% if currency == 'AED' %}
                                    {% else %}
                                  <td>{{ item.hsn }}</td>
                                  {% endif %}
                                    <td>{% set x= 100+item.tax %}
                                     {% set pr=item.price*100/x %} 
                                       {% if numberFormat == 1 %}
                                          {{ pr|round(2, 'floor') }}
                                       {% elseif numberFormat == 0 %}
                                          {{ pr|number_format(2, '.', '') }}
                                       {% endif %}
                                    </td>
                                    <td>{{ item.quantity }}</td>
                                     <td>{{ item.discount }}</td>
                                    <td>

                                      {% if currency == 'AED' %}
 {% set f=item.price-pr %} {% set ft=f*item.quantity %} {% if numberFormat == 1 %}{{ ft|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ ft|number_format(2, '.', '') }}{% endif %}
 {% else %}
<div class=\"tax\" style=\"display:flex;\">
  <div class=\"\"style=\"border-right: 1px solid;padding: 3px;font-size: 7px;\">CGST <br> {{ item.tax/2 }}%  {% set f=item.price-pr %} <br> ({% set ft=f*item.quantity%} {% if numberFormat == 1 %}{{ ft|round(2, 'floor')/2 }}{% elseif numberFormat == 0 %}{{ ft|number_format(2, '.', '')/2 }}{% endif %} )</div>
    <div style=\"padding: 3px;font-size: 7px;\">SGST <br>{{ item.tax/2 }}% <br> ({% set ft=f*item.quantity%} {% if numberFormat == 1 %}{{ ft|round(2, 'floor')/2 }}{% elseif numberFormat == 0 %}{{ ft|number_format(2, '.', '')/2 }}{% endif %})</div>
</div>

 {% endif %}


</td>
                                    <td class=\"text-right\">{% if numberFormat == 1 %}{{ item.subTotal|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ item.subTotal|number_format(2, '.', '') }}{% endif %}</td>
                                 </tr>
                                                                 {% set count= count+1 %}

                                 {% endfor %}


                                   <tr>
                                  <th colspan=\"6\"></th>
                               

                                    <th>Total</th>
                                  <th>{% set m=order.actualAmount-tax %}{% if numberFormat == 0 %}{{ m|round(2, 'floor') }}{% elseif numberFormat == 1 %}{{ m|number_format(2, '.', '') }}{% endif %}</th>
                                 </tr>
                                  <tr>
                                       <th colspan=\"6\"></th>                                         
                                    <th>  {% if currency == 'AED' %}
                       Vat
                        {% else %}
                          Tax
                        {% endif %}    </th>
                                  <th>{% if numberFormat == 1 %}{{ tax|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ tax|number_format(2, '.', '') }}{% endif %}</th>
                                 </tr>
                                  <tr>
                                   <tr>
                                       <th colspan=\"6\"></th>                                         
                                    <th>Delivery Charge</th>
                                  <th>{% if numberFormat == 1 %}{{ order.deliveryCharge|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ order.deliveryCharge|number_format(2, '.', '') }}{% endif %}</th>
                                 </tr>
                                  <tr>
                                   <th colspan=\"6\"></th>                               
                                    <th>Discount</th>
                                  <th>{% if numberFormat == 1 %}{{ order.totalDiscount|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ order.totalDiscount|number_format(2, '.', '') }}{% endif %}</th>
                                 </tr>
                                 <tr>
                                    <th colspan=\"6\"></th>                              
                                    <th>Grand Total</th>
                                  <th>{% if order.paymentType == 'wallet' %} {% set total = order.actualAmount + order.deliveryCharge - order.totalDiscount %} {% if numberFormat == 1 %}{{ total|round(2, 'floor') }}{% elseif numberFormat == 0 %}{% endif %}{{ total|round(2, 'floor') }} {% else %}{{ order.orderAmount }}{% endif %}</th>
                                 </tr>
                              </tbody>
                           </table>
</div>


</div>
</div>
<!-- end of card -->

<!-- Modal
for payment approval -->
<div id=\"edit-payment-status\" class=\"modal\" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Payment Status | {{ order.paymentStatus|upper }}</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row\">
               <div class=\"col-12\">
                  <form method=\"post\" action=\"{{ path('update_payment') }}\">
                     <div class=\"form-group\" >
                  <label class=\"label\" style=\"color:#000;margin-left: -9px;\">Payment Mode</label>
                  <select class=\"form-control\" name=\"mode\" id=\"payment_statuss\">
                  <option value=\"Online\">Online Payment</option>
                       <option value=\"cash\">Cash</option>
                     </select>
                   </div>
                   <div class=\"ons\">
                 <div class=\"form-group\">
                  <label class=\"label\" style=\"color:#000;margin-left: -9px;\">Transaction Id</label>
                  <input type=\"tex\" name=\"transactionId\" class=\"form-control\" value=\" {{ order.transactionId}}\">
                 </div>
                  </div>
  <input type=\"hidden\" name=\"orderid\" class=\"form-control\" required=\"\" value=\"{{ order.id }}\">
                 <div class=\"form-group\">
                  <label class=\"label\" style=\"color:#000;margin-left: -9px;\">Date / Payment Through / Note</label>
                  <textarea class=\"form-control\" rows=\"3\"  name=\"note\">
                     {{ order.note}}
                  </textarea>
               </div>
                     <button class=\"btn btn-success\" type=\"submit\">Mark as Paid</button>
                     <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- end of modal -->

<!-- Modal 
incase of payment caancelling and all-->
<div id=\"payment_status_remain\" class=\"modal\" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Payment Status  | {{ order.paymentStatus|upper }}</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row\">
               <div class=\"col-12\">
                  <form method=\"post\" action=\"{{ path('update_payment_pending') }}\">
                   
                 
  <input type=\"hidden\" name=\"orderid\" class=\"form-control\" required=\"\" value=\"{{ order.id }}\">
                 <div class=\"form-group\">
                  <label class=\"label\" style=\"color:#000;\">Reason for changing payment status</label>
                  <textarea class=\"form-control\" rows=\"3\"  name=\"note\">
                    {{ order.note}}
                  </textarea>
               </div>
                     <button class=\"btn btn-success\" type=\"submit\">Mark As Pending</button>
                     <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div> 
</div>
</div>
<!-- end of modal -->
<!-- Modal -->
<div id=\"edit-order\" class=\"modal \" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Edit Orders</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row\">
               <div class=\"col-12\">
                  <form method=\"post\" action=\"{{ path('update_order') }}\">
                     <div class=\"table-responsive\">
                        <table class=\"table table-hovered\">
                           <thead class=\"bg-primary text-white\">
                              <tr>
                                 <th style=\"color:#fff;\">Item</th>
                                 <th style=\"color:#fff;\">Qty</th>
                              </tr>
                           </thead>
                           <input type=\"hidden\" value=\"{{ order.id }}\" name=\"order\">
                           {% for item in order.customerOrderItems %}
                           <tr>
                              <td><input type=\"hidden\" value=\"{{ item.price }}\" name=\"price[]\">
<input type=\"hidden\" value=\"{{ item.quantity }}\" name=\"oqty[]\">
<input type=\"hidden\" value=\"{{ item.loyalty }}\" name=\"loyalty[]\">
<input type=\"hidden\" value=\"{{ item.id }}\" name=\"id[]\">{{ item.itemName }} - {{ item.priceVariavtion }}</td>
                              <td>
                                <select class=\"form-control\" name=\"qty[]\">
{% for i in item.quantity..0 %}
    <option>{{ i }}</option>
{% endfor %}
                                </select>
<textarea name=\"reason[]\" class=\"form-control\" style=\"display:block;width:100%\">{{ item.reason }}</textarea>
                              </td>
                           </tr>
                           {% endfor %} 
                            {% if order.promocode != '' %} 
                           <tr id=\"promo-a\">
                            <td>
                              <br>
                           <b>Promocode : {{ order.promocode }} <br>
                           Discount : {{ order.totalDiscount }}</b></td>
                            <td> <label for=\"promos\" id=\"trashs\"> <input type=\"checkbox\" name=\"promocheck\" id=\"promos\" class=\"form-control\" style=\"display:none;\"> <i class=\"fa fa-trash\" style=\"cursor:pointer;\" id=\"trash\"> </i> </label></td>                              
                            </tr> 
                             {% endif %} 
                        </table>
                       
                     
                      
                       
                     </div>
                     <button class=\"btn btn-success\" type=\"submit\">Save</button>
                     <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- end of modal -->
<script type=\"text/javascript\">
\$('#trash').click(function(){
\$('#promo-a').hide();
// \$('#promos').prop('checked', true);

});
\$('#trashs').click(function(){
\$('#promo-a').hide();

});
</script>
<!-- Modal -->
<div id=\"myModal\" class=\"modal \" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Confirm Tray Items</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row m-t-20\">
               <form method=\"post\" action=\"{{ path('create_tray_number') }}\">


                  <div class=\"col-md-12\">
                     <div class=\"form-group\">
                        <label>Update Tray Number</label> 
                        <input type=\"text\" name=\"traynumber\" class=\"form-control\" required=\"\" value=\"{{ order.tray }}\">
                        <input type=\"hidden\" name=\"orderid\" class=\"form-control\" required=\"\" value=\"{{ order.id }}\">
                     </div>
                     <button class=\"btn btn-primary\" type=\"submit\">update Tray Number</button>
                  </div>
               </form>
            </div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- end of modal -->
<!-- tray status -->
<div id=\"trayStatus\" class=\"modal \" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Confirm Tray Items</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row m-t-20\">
               <form method=\"post\" action=\"{{ path('update_tray_quantity') }}\" class=\"col-12\">
                  <div class=\"col-md-12\">
                     <div class=\"form-group\">
                        <label>Item Id</label> 
                        <input type=\"text\" id=\"barcode\" class=\"form-control\" placeholder=\"scan barcode here\">
                     </div>
                     <div class=\"form-group\">
                        <label>Select Item</label> 
                        <select name=\"traynumber\" class=\"form-control\" id=\"sels\">
                           {% for item in order.customerOrderItems %}
                           <option value=\"{{ item.id }}\" data-name=\"{{ item.itemName }}  - {{ item.priceVariavtion }}\" data-qty=\"{{ item.quantity }}\">{{ item.itemName }}  - {{ item.priceVariavtion }}</option>
                           {% endfor %}
                        </select>
                        <input type=\"hidden\" name=\"orderid\" class=\"form-control\" required=\"\" value=\"{{ order.id }}\">
                     </div>
                     <div class=\"form-group\">
                        <label>Enter Quantity</label> 
                        <input type=\"number\" id=\"quantity\" class=\"form-control\" >
                     </div>
                     <button class=\"btn btn-primary btn-sm\" type=\"button\" id=\"sel\">Add</button>
                  </div>
                  <br>
                  <div class=\"table-responsive\">
                     <table class=\"table table-hovered\" id=\"myTable\">
                        <thead class=\"bg-primary text-white\">
                           <tr>
                              <th>Item</th>
                              <th>Qty</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        {% for item in order.customerOrderItems %}
                        {% if item.isTray == '0' or item.isTray == ''  %} 
                        {% else %}
                        <tr>
                           <td><input type=\"hidden\" value=\"{{ item.quantity }}\" name=\"oqty[]\"><input type=\"hidden\" value=\"{{ item.id }}\" name=\"id[]\">{{ item.itemName }} - {{ item.priceVariavtion }}</td>
                           <td><input type=\"hidden\" value=\"{{ item.trayQty }}\" name=\"qty[]\">{{ item.trayQty }}</td>
                           <td><button class=\"btn btn-danger\" type=\"button\" class=\"remove\" onclick=\"removeVariant(this)\"><i class=\"fa fa-trash\"></i></button></td>
                        </tr>
                        {% endif %}
                        {% endfor %}
                     </table>
                  </div>
                  <div class=\"form-group\">
                     <button class=\"btn btn-success\" type=\"submit\">Save</button>
                     <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>









<!-- end of tray status -->
<script type=\"text/javascript\">
\$( document ).ready(function() {
changeBackgroundColor();
});
   function changeBackgroundColor() {

      var select = \$('.otype');
      var selectedVal = \$('.otype').val();

      if(selectedVal == 'processing') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#009688');
         \$('.otype option').css('color', '#ffffff');

      } else if(selectedVal == 'ready') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#4caf50');
         \$('.otype option').css('color', '#ffffff');

      } else if(selectedVal == 'dispatched') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#ff5722');
         \$('.otype option').css('color', '#ffffff');

      } else if(selectedVal == 'delivered') {
         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#4caf50');
         \$('.otype option').css('color', '#ffffff');
         
      } else if(selectedVal == 'cancelled') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#e2a03f');
         \$('.otype option').css('color', '#ffffff');
         
      } else if(selectedVal == 'completed') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#8dbf42');
         \$('.otype option').css('color', '#ffffff');

      } else if(selectedVal == 'received') {

         \$('.otype').addClass('importantRule');
         \$('.otype').css('background-color', '#3f51b5');
         \$('.otype option').css('color', '#ffffff');
         
      }
   }
   \$('.otype').change(function(){
  
   changeBackgroundColor();

   var value=this.value;
   var val=\$('.otype').find('option:selected').text();

   // alert(val);
   if(val=='Assign To Delivery Boy' || val=='Reassign Order')
   {
    \$('.slot-time').hide();
    \$('#dboy').show();
       \$('#dboy').html('<div class=\"form-group\"><label for=\"appbundle_customerorder_orderBoy\" class=\"required\">Assign Task To</label><select class=\"form-control db\" name=\"delivery_boy\"></select></div>');
       getDelivery();
   }
   else if(val=='Reassign Picker' || val=='Assign To Picker')
   {
    \$('.slot-time').hide();
    \$('#dboy').show();
       \$('#dboy').html('<div class=\"form-group\"><label for=\"appbundle_customerorder_orderBoy\" class=\"required\">Assign Task To</label><select class=\"form-control db\" name=\"picker\"></select></div>');
       getPicker();
   }
      else if(val=='Reschedule Order')
   {
    // alert('delivery boy names come here!');
      \$('#dboy').hide();   
  \$('.slot-time').show();
   }

   else
   {
    \$('.slot-time').hide();
    \$('#dboy').hide();   
   }
   });
   
      function getPicker()
   {
   var out ={'branch':{{ app.user.branch }}};                      // alert(x);
   \$.ajax({
       type: \"POST\",
       url: \"/restaurant-manager/get-picker\",
       data: out,
       success: function (res, dataType) {
    // console.log('{{ path('manage_restaurant_get_cat') }}');
   send(res);
             
   // console.log(datas);
   
       },
       error: function (XMLHttpRequest, textStatus, errorThrown) {
           alert('Error : ' + errorThrown);
       }
   });
}
   function getDelivery()
   {
   var out ={'branch':{{ app.user.branch }}};                      // alert(x);
   \$.ajax({
       type: \"POST\",
       url: \"/restaurant-manager/get-del\",
       data: out,
       success: function (res, dataType) {
    // console.log('{{ path('manage_restaurant_get_cat') }}');
   send(res);
             
   // console.log(datas);
   
       },
       error: function (XMLHttpRequest, textStatus, errorThrown) {
           alert('Error : ' + errorThrown);
       }
   });
}
   function send(myObjects)
   {
   \$('.subcat').html('');
   \$.each(myObjects, function () {
       \$('.db').append('<option value=\"'+this.id+'\">'+this.value+'</option>');
         
       });            
      }
       function removeVariant(obj){
   // \$(this).attr(\"data-usr\" , '');
   
           \$(obj).parent().parent().remove();
   
       }
    \$('#sel').click(function () {
    var id=\$('#sels').val();
    var name = \$('#sels option:selected').attr('data-name');
    var qty=\$('#quantity').val();
    var barcode=\$('#barcode').val();
    if(barcode=='' || barcode == '0')
    {
    var oqty= \$('#sels option:selected').attr('data-qty');
    // alert(oqty);
   if(qty > oqty)
   {
       qty=qty;
   }
   // alert(qty);
    var output = \$('input[name=\"qty[]\"]').val();
   // if(typeof(output)=='undefined')
   // {
   // \$('#myTable').append('<tr><td><input type=\"hidden\" value=\"'+id+'\" name=\"id[]\">'+name+'</td><td><input type=\"hidden\" value=\"'+qty+'\" name=\"qty[]\">'+qty+'</td><td><button class=\"btn btn-danger\" type=\"button\" class=\"remove\" onclick=\"removeVariant(this)\"><i class=\"fa fa-trash\"></i></button></td></tr>'); 
   // }   
     \$('#myTable').append('<tr><td><input type=\"hidden\" value=\"'+oqty+'\" name=\"oqty[]\"><input type=\"hidden\" value=\"'+id+'\" name=\"id[]\">'+name+'</td><td><input type=\"hidden\" value=\"'+qty+'\" name=\"qty[]\">'+qty+'</td><td><button class=\"btn btn-danger\" type=\"button\" class=\"remove\" onclick=\"removeVariant(this)\"><i class=\"fa fa-trash\"></i></button></td></tr>'); 
        \$('#quantity').val(0);
//      \$('input[name=\"id[]\"]').each(function() {
//       var comp= \$(this).val(); 
//       console.log(comp);
//    if(id == comp)
//    {
//    // alert('item already in tray!');
//    \$(this).parent().parent().remove();


// } else
//   {

  

//  }
//  });
          
   }
   else
   {
   
   }
   
   // }
     // });
     
   
   
    });
    \$('#barcode').on('input propertychange paste', function() {
    var id=\$('#barcode').val();
     var inputlength = \$('#barcode').val().length;
       if (inputlength>4) {
   var out ={'order':{{ order.id }},'barcode':id};                      // alert(x);
   
   \$.ajax({
       type: \"POST\",
       url: \"{{ path('api_get_item_by_barcode')}}\",
       data: out,
       success: function (res, dataType) {
    // console.log('{{ path('manage_restaurant_get_cat') }}');
   // send(res);
   addbar(res);
             
   // console.log(datas);
   
       },
       error: function (XMLHttpRequest, textStatus, errorThrown) {
           alert('Error : ' + errorThrown);
       }
   });
   
             return false;
       }
     
   
   });
 
    function addbar(x)
    {
     var txt;
     if(x.status=='0')
     {
       \$('#barcode').val(0);
   alert('barcode is invalid!!');
     }
     else
     {
        var person = prompt(\"Please enter Quantity:\", x.quantity);
     if (person == null || person == \"\") {
       txt = \"User cancelled the prompt.\";
     } else {
       if(person > x.quantity)
   {
       person=x.quantity;
   }
             \$('#myTable').append('<tr><td><input type=\"hidden\" value=\"'+x.quantity+'\" name=\"oqty[]\"><input type=\"hidden\" value=\"'+x.id+'\" name=\"id[]\">'+x.name+'('+x.variation+')</td><td><input type=\"hidden\" value=\"'+person+'\" name=\"qty[]\">'+person+'</td><td><button class=\"btn btn-danger\" type=\"button\" class=\"remove\" onclick=\"removeVariant(this)\"><i class=\"fa fa-trash\"></i></button></td></tr>'); 
        \$('#quantity').val(0);
     } 
     }
   
   }
   

                  \$('#payment_statuss').change(function(){
                    var status=\$('#payment_statuss').val();
                    // alert(status);
                    if(status=='cash')
                    {
                      \$('.ons').hide();
                    }
                    else
                    {
                       \$('.ons').show();
                    }

                  });
\$('#locationSlot').change(function(){
      var id=\$('#locationSlot').val();
    var date=\$('#locationSlot option:selected').attr('data-date');
    var time=\$('#locationSlot option:selected').attr('data-time');
        \$('#fixdate').val(date);
        \$('#fixtime').val(time);

});
  \$('#locationName').change(function(){
    var id=\$('#locationName').val();
        var area=\$('#locationName option:selected').attr('data-name');
        \$('#area').val(area);

    // alert(id);
var out ={'id':id};                      // alert(x);
\$.ajax({
  type: \"POST\",
  url: \"{{ path('get_slot_by_id') }}\",
  data: out,
  success: function (res, dataType) {
  \$('#locationSlot').html('<option>Select Slot</option>');
              \$.each(res,function () {
                \$('#locationSlot').append('<option value=\"'+this.time+'\"  data-time=\"'+this.time+'\"  data-date=\"'+this.date+'\" >'+this.time+' on '+this.date+'</option>');   
                }); 
},
error: function (XMLHttpRequest, textStatus, errorThrown) {
  alert('Error : ' + errorThrown);
}
});
});

                  </script>
{% endblock %}", "AppBundle:Admin:Orders/orderForm.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Orders/orderForm.html.twig");
    }
}
