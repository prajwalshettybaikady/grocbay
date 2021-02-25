<?php

/* AppBundle:Restaurant:Menu/addNew.html.twig */
class __TwigTemplate_cc73e2c9f6238552f1179e3266f850732b14e434e9545a901c3284a159ea21ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("@AppBundle/" . ($context["myExtend"] ?? $this->getContext($context, "myExtend"))) . "/base.html.twig"), "AppBundle:Restaurant:Menu/addNew.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f25f7339a3781db0ba120a31c6b5d55194b492a86f046600501a1dc9fa0a796a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25f7339a3781db0ba120a31c6b5d55194b492a86f046600501a1dc9fa0a796a->enter($__internal_f25f7339a3781db0ba120a31c6b5d55194b492a86f046600501a1dc9fa0a796a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Restaurant:Menu/addNew.html.twig"));

        $__internal_28ed7cb1e5c8b11d0c938cdc7015bf728571f9da9f7d91ddc64d3b00deebfad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ed7cb1e5c8b11d0c938cdc7015bf728571f9da9f7d91ddc64d3b00deebfad0->enter($__internal_28ed7cb1e5c8b11d0c938cdc7015bf728571f9da9f7d91ddc64d3b00deebfad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Restaurant:Menu/addNew.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25f7339a3781db0ba120a31c6b5d55194b492a86f046600501a1dc9fa0a796a->leave($__internal_f25f7339a3781db0ba120a31c6b5d55194b492a86f046600501a1dc9fa0a796a_prof);

        
        $__internal_28ed7cb1e5c8b11d0c938cdc7015bf728571f9da9f7d91ddc64d3b00deebfad0->leave($__internal_28ed7cb1e5c8b11d0c938cdc7015bf728571f9da9f7d91ddc64d3b00deebfad0_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_d00613dcfc9abc1fb8c32b4968fdadd8207d3dcd635f75a38d3bb7fd5cb10777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00613dcfc9abc1fb8c32b4968fdadd8207d3dcd635f75a38d3bb7fd5cb10777->enter($__internal_d00613dcfc9abc1fb8c32b4968fdadd8207d3dcd635f75a38d3bb7fd5cb10777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_b55c5b3f72f8fd34799828cbffeb0d2326ce6e49dfaee2bd5f5624c566b25222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55c5b3f72f8fd34799828cbffeb0d2326ce6e49dfaee2bd5f5624c566b25222->enter($__internal_b55c5b3f72f8fd34799828cbffeb0d2326ce6e49dfaee2bd5f5624c566b25222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "

<style type=\"text/css\">
table#priceVar th {
  font-size:10px;
  text-transform:uppercase;
  font-weight:bold;
}
  [type=checkbox]:checked, [type=checkbox]:not(:checked){


  }
   .fstElement { font-size: 9px; }
          .fstToggleBtn { min-width: 16.5em; }

          .submitBtn { display: none; }

          .fstMultipleMode { display: block; }
          .fstMultipleMode .fstControls { width: 100%; }
          .right-sidebar-option {
      background: #F1F2F3;
}
.margin-bottom{
  margin-bottom: 0px !important;
}
.cat-name{
  font-size: 14px !important;
  font-weight: 800;
}

.img-close{
    position: absolute;
    top: -10px;
    background: #fb1e1e;
    padding: 5px;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 1;
    right: 61px;
    color: #fff;
  }

  .savefont{
    font-size: 16px;
    font-weight: 700;
  }

</style>
";
        
        $__internal_b55c5b3f72f8fd34799828cbffeb0d2326ce6e49dfaee2bd5f5624c566b25222->leave($__internal_b55c5b3f72f8fd34799828cbffeb0d2326ce6e49dfaee2bd5f5624c566b25222_prof);

        
        $__internal_d00613dcfc9abc1fb8c32b4968fdadd8207d3dcd635f75a38d3bb7fd5cb10777->leave($__internal_d00613dcfc9abc1fb8c32b4968fdadd8207d3dcd635f75a38d3bb7fd5cb10777_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_c83219e1c529605b2f537b3d8ade02fd6d0c590e9e398f3d16ebc378c5847d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83219e1c529605b2f537b3d8ade02fd6d0c590e9e398f3d16ebc378c5847d76->enter($__internal_c83219e1c529605b2f537b3d8ade02fd6d0c590e9e398f3d16ebc378c5847d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_897530d1911bce29d6b8f38a397fd412a34649943e555deb42e9ef00ec2f6803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897530d1911bce29d6b8f38a397fd412a34649943e555deb42e9ef00ec2f6803->enter($__internal_897530d1911bce29d6b8f38a397fd412a34649943e555deb42e9ef00ec2f6803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <!-- Row -->
";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"\">
<div class=\"layout-px-spacing\">
  <div class=\"row layout-top-spacing\">
      <div class=\"col-md-9\">
        <div class=\"row\"><div class=\"col-md-12\">
        <div class=\"card card-outline-info\">
          <div class=\"card-header\">
            <div class=\"row mt-4 mb-4\">
              <div class=\"col-md-6\">
                <h4 class=\"pl-4\">Item Update Panel </h4>
              </div>
              <div class=\"col-md-6 pr-4\">
              </div>
            </div>
          </div>
        
        <div class=\"card-body\">
          ";
        // line 80
        echo "            <div class=\"form-body\">
              <div class=\"row p-t-20\">
                <!--START-->
                ";
        // line 83
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@AppBundle/Themes/widget.html.twig"));
        // line 84
        echo "                <div class=\"col-md-12\">
                  <div class=\"row\">
                    <div class=\"col-md-12\">
                      <div class=\"form-group\">
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "itemName", array()), 'label', array("label" => "Item Name"));
        echo "
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "itemName", array()), 'row', array("attr" => array("class" => "form-control form-control-sm", "placeholder" => "Item Name")));
        echo "
                      </div>
                    </div>
                  </div>
                  ";
        // line 93
        $context["arr"] = twig_split_filter($this->env, $this->getAttribute(($context["menuItem"] ?? $this->getContext($context, "menuItem")), "category", array()), ",");
        echo "  
                  <div class=\"row\">
                <div class=\"col-md-4\">
                  <div class=\"form-group\">
                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label', array("label" => "Stock Type"));
        echo "
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row', array("attr" => array("class" => "form-control form-control-sm")));
        echo "
                  </div>  
                </div>
                <div class=\"col-md-4\">
                  <div class=\"form-group\">
                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delivery", array()), 'label', array("label" => "Delivery Duration"));
        echo "
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delivery", array()), 'row', array("attr" => array("class" => "form-control form-control-sm")));
        echo "
                  </div>
                </div>
                  <div class=\"col-md-4\">
                    <div class=\"form-group\">
                      ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vegType", array()), 'label', array("label" => "Type"));
        echo "
                      ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vegType", array()), 'row', array("attr" => array("class" => "form-control form-control-sm")));
        echo "
                    </div>  
                  </div>
                </div>
                <div class=\"row\">
                  
                  <div class=\"col-md-3\">
                    <div class=\"form-group\">
                      ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "alert", array()), 'label', array("label" => "Stock Notify"));
        echo "
                      ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "alert", array()), 'row', array("attr" => array("class" => "form-control form-control-sm", "placeholder" => "Stock Notify", "value" => "10")));
        echo "
                    </div>
                  </div>
                  <div class=\"col-md-3\">
                    <div class=\"form-group\">
                      ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duration", array()), 'label', array("label" => "Return Duration"));
        echo "
                      ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duration", array()), 'row', array("attr" => array("class" => "form-control form-control-sm")));
        echo "
                    </div>
                  </div>
                  <div class=\"col-md-3\">
                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salesTax", array()), 'label', array("label" => "Gst"));
        echo "
                    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salesTax", array()), 'row', array("attr" => array("class" => "form-control form-control-sm", "placeholder" => "Tax")));
        echo "
                  </div>
             <div class=\"col-md-3\">
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "productType", array()), 'label', array("label" => "Product Type"));
        echo "
                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "productType", array()), 'row', array("attr" => array("class" => "form-control form-control-sm", "placeholder" => "")));
        echo "
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "itemDescription", array()), 'label', array("label" => "Item description"));
        echo "
                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "itemDescription", array()), 'row', array("attr" => array("class" => "form-control form-control-sm", "placeholder" => "Doe")));
        echo "
                  </div>
                  <div class=\"col-md-6\">
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "itemShortDescription", array()), 'label', array("label" => "Manufacturer description"));
        echo "
                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "itemShortDescription", array()), 'row', array("attr" => array("class" => "form-control form-control-sm", "placeholder" => "Doe")));
        echo "
                  </div>
                  
                </div>  
                    <div class=\"row\">

                      <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "itemPriority", array()), 'label', array("label" => "Item Priority"));
        echo "
                        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "itemPriority", array()), 'row', array("attr" => array("class" => "form-control form-control-sm")));
        echo "
                    </div>
                  </div>

                    <div class=\"col-md-4\">
                        <label class=\"d-block\">Item Active Status</label>
                        <label class=\"switch s-success mr-2 mt-2\"> 
                            <input type=\"checkbox\" ";
        // line 160
        if ((($context["isActive"] ?? $this->getContext($context, "isActive")) == 1)) {
            echo "checked ";
        }
        echo " class=\"form-control form-control-sm\" name=\"isActive\"  value=\"";
        echo twig_escape_filter($this->env, ($context["isActive"] ?? $this->getContext($context, "isActive")), "html", null, true);
        echo "\">
                            <span class=\"slider round\"></span>
                        </label>
                    </div>

                      ";
        // line 165
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), "vars", array()), "value", array()) == "1")) {
            // line 166
            echo "                      <div class=\"col-md-4 fishprice\" style=\"display:block\">
                        ";
        } else {
            // line 168
            echo "                        <div class=\"col-md-4 fishprice\" style=\"display:none\">
                          ";
        }
        // line 170
        echo "                          <label for=\"pricess\">Price - 1 KG</label>
                          <div  class=\"form-group \"><input type=\"text\" id=\"pricess\" name=\"fishprice\" class=\"form-control form-control-sm\" placeholder=\"Price\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute(($context["menuItem"] ?? $this->getContext($context, "menuItem")), "salePrice", array()), "html", null, true);
        echo "\">
                          </div>
                        </div>

                      </div>

                    </div>
                       <!--end-->
                  </div>
                </div>
              </div>
            </div>
            <!--end col-md-9 card-->
          </div>
           <div class=\"col-lg-12\">
      <div class=\"card card-outline-info\">
        <div class=\"card-header\">
          <div class=\"row mt-4 mb-4\">
           
          </div>
        </div>
        <div class=\"card-body\">
          ";
        // line 194
        echo "            <div class=\"form-body\">           

                
                <div class=\"\">
                  <h3 class=\"card-title\">Price variation
                    <span class=\"pull-right\">
                      <a href=\"javascript:;\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#variation\">Add new variant</a>
                    </span>
                  </h3>
                  <hr>
                  <div class=\"table-responsive\">
                    <table class=\"table table-hovered \"  id=\"priceVar\">
                      <thead>
                        <tr>
                          <th>Upload Image</th>
                          <th>Variation Name </th>
                          ";
        // line 211
        echo "                          <th>Barcode</th>
                          <th>MRP</th>
                          <th>Dis. Price</th>
                          <th>Membership. Price</th>
                          <th>Priority</th>
                          <th>Status</th> 
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id=\"priceVariationTable\">
                        ";
        // line 221
        $context["count"] = 1;
        // line 222
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["variation"] ?? $this->getContext($context, "variation")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 223
            echo "                        <tr>
                           <td>
                              <input type=\"file\" name=\"image";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "[]\" multiple></td>
                         </td>
                          <td>
                            <input type=\"hidden\" name=\"id[]\" value=\"";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "\" class=\"0";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                               <input type=\"hidden\" name=\"unit[]\" value=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "subscription", array()), "html", null, true);
            echo "\" class=\"unit";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"variation[]\" value=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "variationName", array()), "html", null, true);
            echo "\" class=\"1";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                            <span class=\"var";
            // line 231
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "variationName", array()), "html", null, true);
            echo "</span> 
                          </td>
                          ";
            // line 236
            echo "                          <td>
                            <input type=\"hidden\" name=\"sku[]\" value=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "sku", array()), "html", null, true);
            echo "\" class=\"2";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"weight[]\" value=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "weight", array()), "html", null, true);
            echo "\"  class=\"w";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"barcode[]\" value=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "barcode", array()), "html", null, true);
            echo "\"  class=\"3";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"><span class=\"barcode";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "barcode", array()), "html", null, true);
            echo "</span>
                          </td>
                          <td> 
                            <input type=\"hidden\" name=\"mrp[]\" value=\"";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "mrp", array()), "html", null, true);
            echo "\"  class=\"4";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                            <span class=\"mrp";
            // line 243
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), "vars", array()), "value", array()) == "1")) {
                echo " ";
                $context["x"] = (($this->getAttribute($context["res"], "mrp", array()) * $this->getAttribute(($context["menuItem"] ?? $this->getContext($context, "menuItem")), "salePrice", array())) / 100);
                echo " ";
                $context["xx"] = (($context["x"] ?? $this->getContext($context, "x")) + $this->getAttribute(($context["menuItem"] ?? $this->getContext($context, "menuItem")), "salePrice", array()));
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["xx"] ?? $this->getContext($context, "xx")), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["xx"] ?? $this->getContext($context, "xx")), 2, ".", ""), "html", null, true);
                }
                echo " ";
            } else {
                echo " ";
                $context["xx"] = $this->getAttribute($context["res"], "mrp", array());
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["xx"] ?? $this->getContext($context, "xx")), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["xx"] ?? $this->getContext($context, "xx")), 2, ".", ""), "html", null, true);
                }
                echo " ";
            }
            // line 244
            echo "                            </span>
                          </td>
                          <td>
                            <input type=\"hidden\" name=\"price[]\" value=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "price", array()), "html", null, true);
            echo "\"  class=\"5";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                            <span class=\"price";
            // line 248
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                              ";
            // line 249
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), "vars", array()), "value", array()) == "1")) {
                echo " ";
                $context["resp"] = (($this->getAttribute($context["res"], "price", array()) * ($context["xx"] ?? $this->getContext($context, "xx"))) / 100);
                echo " ";
                $context["xs"] = (($this->getAttribute($context["res"], "price", array()) * ($context["resp"] ?? $this->getContext($context, "resp"))) / 100);
                echo " ";
                $context["r"] =  -(($context["resp"] ?? $this->getContext($context, "resp")) - ($context["xx"] ?? $this->getContext($context, "xx")));
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["r"] ?? $this->getContext($context, "r")), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["r"] ?? $this->getContext($context, "r")), 2, ".", ""), "html", null, true);
                }
                echo " ";
            } else {
                $context["r"] = $this->getAttribute($context["res"], "price", array());
                echo "  ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["r"] ?? $this->getContext($context, "r")), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["r"] ?? $this->getContext($context, "r")), 2, ".", ""), "html", null, true);
                }
                echo " ";
            }
            // line 250
            echo "                            </span>
                          </td>
                          <td>
                            <input type=\"hidden\" name=\"membership[]\" value=\"";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "membership_price", array()), "html", null, true);
            echo "\"  class=\"6";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"><span class=\"membership";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">  ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), "vars", array()), "value", array()) == "1")) {
                echo " ";
                $context["resp"] = (($this->getAttribute($context["res"], "membership_price", array()) * ($context["xx"] ?? $this->getContext($context, "xx"))) / 100);
                echo " ";
                $context["xs"] = (($this->getAttribute($context["res"], "membership_price", array()) * ($context["resp"] ?? $this->getContext($context, "resp"))) / 100);
                echo " ";
                $context["member"] =  -(($context["resp"] ?? $this->getContext($context, "resp")) - ($context["xx"] ?? $this->getContext($context, "xx")));
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["member"] ?? $this->getContext($context, "member")), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["member"] ?? $this->getContext($context, "member")), 2, ".", ""), "html", null, true);
                }
            } else {
                $context["member"] = $this->getAttribute($context["res"], "membership_price", array());
                echo "  ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["member"] ?? $this->getContext($context, "member")), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["member"] ?? $this->getContext($context, "member")), 2, ".", ""), "html", null, true);
                }
                echo " ";
            }
            echo "</span>
                          </td>
                          <td>
                            <input type=\"hidden\" name=\"priority[]\" value=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "priority", array()), "html", null, true);
            echo "\"  class=\"7";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"><span class=\"priority";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "priority", array()), "html", null, true);
            echo "</span><input type=\"hidden\" name=\"min[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "minItem", array()), "html", null, true);
            echo "\"  class=\"8";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"><input type=\"hidden\" name=\"max[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "maxItem", array()), "html", null, true);
            echo "\"  class=\"9";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"><input type=\"hidden\" name=\"hsn[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "hsn", array()), "html", null, true);
            echo "\"  class=\"10";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"><input type=\"hidden\" name=\"loyalty[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "loyalty", array()), "html", null, true);
            echo "\"  class=\"l";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"cost[]\" value=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "cost", array()), "html", null, true);
            echo "\"  class=\"cost";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                               <input type=\"hidden\" name=\"net_weight[]\" value=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "net_weight", array()), "html", null, true);
            echo "\"  class=\"net";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                          </td>
                          <td> 
                            <span class=\"stn";
            // line 261
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"> ";
            if (($this->getAttribute($context["res"], "status", array()) == "0")) {
                echo " Active ";
            } else {
                echo " Inactive ";
            }
            echo "</span><input type=\"hidden\" name=\"status[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "status", array()), "html", null, true);
            echo "\"  class=\"11";
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
                          </td>
                          <td>
                            <button type=\"button\"  class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#edit";
            // line 264
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i></button>&nbsp;<button type=\"button\" onclick=\"removeVariant(this)\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\"></i></button>
                          </td>
                          <div id=\"edit";
            // line 266
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" class=\"modal\" role=\"dialog\">
                            <div class=\"modal-dialog modal-lg\">
                              <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                </div>
                                <div class=\"modal-body\">
                                  ";
            // line 274
            echo "                                      <div class=\"form-row\">

  <div class=\"form-group col-8\">
       <label for=\"variation_name\">Variation Name *</label>
  <input type=\"text\" class=\"form-control\" id=\"variation_names";
            // line 278
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"1 Kg\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "variationName", array()), "html", null, true);
            echo "\"> 
</div>
  <div class=\"form-group col-4\">
       <label for=\"variation_name\">Unit</label>
  <input type=\"text\" class=\"form-control\" id=\"unit";
            // line 282
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"1 Kg\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "subscription", array()), "html", null, true);
            echo "\"> 
</div>
</div>

  <div class=\"\"><br>
  <div class=\"form-row\">

  <div class=\"form-group col-4\">
    <label for=\"priority\">Priority</label>
    <input type=\"text\" class=\"form-control\" id=\"priority";
            // line 291
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"priority\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "priority", array()), "html", null, true);
            echo "\">
  </div>
      <div class=\"form-group col-4\">
    <label for=\"priority\">SKU </label>
    <input type=\"text\" class=\"form-control\" id=\"sku";
            // line 295
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"SKU\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "sku", array()), "html", null, true);
            echo "\">
  </div>
    <div class=\"form-group col-4\">
    <label for=\"priority\">HSN </label>
    <input type=\"text\" class=\"form-control\" id=\"hsn";
            // line 299
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"HSN\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "hsn", array()), "html", null, true);
            echo "\">
  </div>
  </div>
</div>
  <div class=\"form-row\">
  <div class=\"form-group col-md-3\">
    <label for=\"barcode\">barcode </label>
    <input type=\"text\" class=\"form-control\" id=\"barcode";
            // line 306
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"barcode\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "barcode", array()), "html", null, true);
            echo "\">
  </div>
     <div class=\"form-group col-md-3\">
    <label for=\"loyalty\">Loyalty </label>
    <input type=\"text\" class=\"form-control\" id=\"loyalty";
            // line 310
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"Loyalty Points\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "loyalty", array()), "html", null, true);
            echo "\">
  </div>
   <div class=\"form-group col-md-3\">
    <label for=\"barcode\">Gross Weight (in Kg) </label>
    <input type=\"text\" class=\"form-control\" id=\"weight";
            // line 314
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"weight\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "weight", array()), "html", null, true);
            echo "\">
  </div>
   <div class=\"form-group col-md-3\">
    <label for=\"barcode\">Net Weight (in Kg) </label>
    <input type=\"text\" class=\"form-control\" id=\"net_weight";
            // line 318
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"net weight\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "net_weight", array()), "html", null, true);
            echo "\">
  </div>
    
</div>
  <div class=\"form-row\">
     
  <div class=\"form-group col-md-4\">
    <label for=\"min\">Minimum Order Quantity </label>
    <input type=\"text\" class=\"form-control\" id=\"min";
            // line 326
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"minimum order Quantity\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "minItem", array()), "html", null, true);
            echo "\">
  </div>
  <div class=\"form-group col-md-4\">
    <label for=\"priority\">Maximum Order Quantity</label>
    <input type=\"text\" class=\"form-control\" id=\"max";
            // line 330
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"Maximum Order Quantity\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "maxItem", array()), "html", null, true);
            echo "\">
  </div>
   <div class=\"form-group col-md-4\">
    <label for=\"priority\">status</label>
    <select class=\"form-control\" id=\"status";
            // line 334
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">
      <option value='0' ";
            // line 335
            if (($this->getAttribute($context["res"], "status", array()) == "0")) {
                echo "selected ";
            }
            echo ">Active</option>
      <option value=\"2\" ";
            // line 336
            if (($this->getAttribute($context["res"], "status", array()) == "2")) {
                echo "selected ";
            }
            echo ">Inactive</option>
    </select>
  </div>
</div>
";
            // line 340
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), "vars", array()), "value", array()) == "1")) {
                // line 341
                echo "
  <div class=\"form-row\" style=\"display:none;\">
    ";
            } else {
                // line 344
                echo "      <div class=\"form-row sa\">
";
            }
            // line 345
            echo "  <div class=\"form-group col-md-4\">
    <label for=\"mrp\">Actual Price *</label>
    <input type=\"text\" class=\"form-control\" id=\"mrp";
            // line 347
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"mrp\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "mrp", array()), "html", null, true);
            echo "\">
  </div>
  <div class=\"form-group col-md-4\">
    <label for=\"price\">Discounted Price *</label>
    <input type=\"text\" class=\"form-control\" id=\"price";
            // line 351
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"price\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "price", array()), "html", null, true);
            echo "\">
  </div>
    <div class=\"form-group col-md-4\">
    <label for=\"price\">Cost Per Item</label>
    <input type=\"text\" class=\"form-control\" id=\"costprice";
            // line 355
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"Cost Per Price\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "cost", array()), "html", null, true);
            echo "\">
    ";
            // line 356
            if ((($context["r"] ?? $this->getContext($context, "r")) != 0)) {
                // line 357
                echo "          <small class=\"text\"><b>Margin : <span class=\"margin";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">";
                $context["margin"] = (((($context["r"] ?? $this->getContext($context, "r")) - $this->getAttribute($context["res"], "cost", array())) / ($context["r"] ?? $this->getContext($context, "r"))) * 100);
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["margin"] ?? $this->getContext($context, "margin")), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["margin"] ?? $this->getContext($context, "margin")), 2, ".", ""), "html", null, true);
                }
                echo " </span>% | Profit : <span class=\"profit";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">";
                $context["profit"] = (($context["r"] ?? $this->getContext($context, "r")) - $this->getAttribute($context["res"], "cost", array()));
                echo " ";
                echo twig_escape_filter($this->env, twig_round(($context["profit"] ?? $this->getContext($context, "profit")), 2, "floor"), "html", null, true);
                echo "</span></b></small>
    ";
            } else {
                // line 359
                echo "          <small class=\"text\"><b>Margin : <span class=\"margin";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">0</span>% | Profit : <span class=\"profit";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">0</span></b></small>
    ";
            }
            // line 361
            echo "         
  </div>
  <div class=\"form-row\">
  <div class=\"form-group col-md-12\">
    <label for=\"price\">Membership Price *</label>
    <input type=\"text\" class=\"form-control\" id=\"membership";
            // line 366
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"price\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "membership_price", array()), "html", null, true);
            echo "\">
  </div>

</div>
      </div>

";
            // line 372
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), "vars", array()), "value", array()) == "1")) {
                // line 373
                echo "
   <div class=\"form-row fishprice\">
    ";
            } else {
                // line 376
                echo "   <div class=\"form-row fishprice\" style=\"display:none;\">

    ";
            }
            // line 378
            echo "  
      <div class=\"form-group col-md-6\">
    <label for=\"price\">MRP in Percentage (eg 40%) *</label>
    <input type=\"text\" class=\"form-control\" id=\"mrps";
            // line 381
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"price\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "mrp", array()), "html", null, true);
            echo "\">
  </div>
   <div class=\"form-group col-md-6\">
    <label for=\"price\">MRP </label>
    <input type=\"text\" class=\"form-control\" id=\"prs";
            // line 385
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"price\"  value=\"";
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["xx"] ?? $this->getContext($context, "xx")), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["xx"] ?? $this->getContext($context, "xx")), 2, ".", ""), "html", null, true);
            }
            echo "\">
  </div>

       <div class=\"form-group col-md-6\">
    <label for=\"price\">Discounted Price in Percentage (eg 40%) *</label>
    <input type=\"text\" class=\"form-control\" id=\"dprice";
            // line 390
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"price\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "price", array()), "html", null, true);
            echo "\">
  </div>
   <div class=\"form-group col-md-6\">
    <label for=\"price\">Discounted Price</label>
    <input type=\"text\" class=\"form-control\" id=\"dpr";
            // line 394
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"price\"  value=\"";
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["r"] ?? $this->getContext($context, "r")), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["r"] ?? $this->getContext($context, "r")), 2, ".", ""), "html", null, true);
            }
            echo "\">
  </div>
   <div class=\"form-group col-md-12\">
    <label for=\"price\">Cost Per Item</label>
    <input type=\"text\" class=\"form-control\" id=\"costpriceO";
            // line 398
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"Cost Per Price\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "cost", array()), "html", null, true);
            echo "\">
         ";
            // line 399
            if ((($context["r"] ?? $this->getContext($context, "r")) != 0)) {
                // line 400
                echo "          <small class=\"text\"><b>Margin : <span class=\"margin";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">";
                $context["margin"] = (((($context["r"] ?? $this->getContext($context, "r")) - $this->getAttribute($context["res"], "cost", array())) / ($context["r"] ?? $this->getContext($context, "r"))) * 100);
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["margin"] ?? $this->getContext($context, "margin")), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["margin"] ?? $this->getContext($context, "margin")), 2, ".", ""), "html", null, true);
                }
                echo "</span>% | Profit : <span class=\"profit";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">";
                $context["profit"] = (($context["r"] ?? $this->getContext($context, "r")) - $this->getAttribute($context["res"], "cost", array()));
                echo " ";
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round(($context["profit"] ?? $this->getContext($context, "profit")), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["profit"] ?? $this->getContext($context, "profit")), 2, ".", ""), "html", null, true);
                }
                echo "</span></b></small>
    ";
            } else {
                // line 402
                echo "          <small class=\"text\"><b>Margin : <span class=\"margin";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">0</span>% | Profit : <span class=\"profit";
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "\">0</span></b></small>
    ";
            }
            // line 404
            echo "  </div>
         <div class=\"form-group col-md-6\">
    <label for=\"price\">Membership Price in Percentage (eg 40%) *</label>
    <input type=\"text\" class=\"form-control\" id=\"dmprice";
            // line 407
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"Membership Price\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "membership_price", array()), "html", null, true);
            echo "\">
  </div>
   <div class=\"form-group col-md-6\">
    <label for=\"price\">Membership Price</label>
    <input type=\"text\" class=\"form-control\" id=\"dmpr";
            // line 411
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\" placeholder=\"Membership Price\"  value=\"";
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["member"] ?? $this->getContext($context, "member")), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["member"] ?? $this->getContext($context, "member")), 2, ".", ""), "html", null, true);
            }
            echo "\">
  </div>
</div>

<div class=\"form-group\">
    <label for=\"vimg\">Variation Images </label>
    ";
            // line 418
            echo "  </div>
  
              ";
            // line 420
            if (twig_test_empty(($context["variation_images"] ?? $this->getContext($context, "variation_images")))) {
                // line 421
                echo "                  ";
            } else {
                // line 422
                echo "                  <div class=\"row\">

                  ";
                // line 424
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["variation_images"] ?? $this->getContext($context, "variation_images")));
                foreach ($context['_seq'] as $context["_key"] => $context["varimg"]) {
                    // line 425
                    echo "
                  ";
                    // line 426
                    if (twig_test_empty($context["varimg"])) {
                        // line 427
                        echo "                  ";
                    } else {
                        // line 428
                        echo "
                    ";
                        // line 429
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["varimg"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                            // line 430
                            echo "
                     ";
                            // line 431
                            if (twig_test_empty($context["img"])) {
                                // line 432
                                echo "                      ";
                            } else {
                                // line 433
                                echo "                  
                      ";
                                // line 434
                                if (($this->getAttribute($context["res"], "id", array()) == $this->getAttribute($context["img"], "ref", array()))) {
                                    // line 435
                                    echo "                        <div class=\"col-md-3 mb-2\" id=\"imgsec";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "id", array()), "html", null, true);
                                    echo "\">
                          <img src=\"";
                                    // line 436
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "image", array()), "html", null, true);
                                    echo "\" class=\"img-responsive\" width=\"100\" height=\"100\">
                          <span class=\"img-close\" onclick=\"deleteimg(";
                                    // line 437
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "id", array()), "html", null, true);
                                    echo ")\"><i class=\"fa fa-close\"></i></span>
                        </div>
                      ";
                                }
                                // line 440
                                echo "
                      ";
                            }
                            // line 442
                            echo "
                     ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 444
                        echo "
                    ";
                    }
                    // line 446
                    echo "                    
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['varimg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 448
                echo "
                  ";
                // line 459
                echo "                  </div>
                ";
            }
            // line 461
            echo "


<button type=\"button\" class=\"btn btn-primary\" id=\"addvar";
            // line 464
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "\">Save</button>
";
            // line 466
            echo "    </div>
    <div class=\"modal-footer\">
      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
    </div>
  </div>

</div>
</div>
<script type=\"text/javascript\">


\$('#costprice";
            // line 477
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').keyup(function(){
var price =\$('#costprice";
            // line 478
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var mrp =\$('#mrp";
            // line 479
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var discount =\$('#price";
            // line 480
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin";
            // line 484
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(Math.round(margin,2));
\$('.profit";
            // line 485
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(Math.round(profit,2));
});
\$('#price";
            // line 487
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').keyup(function(){
var price =\$('#costprice";
            // line 488
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var mrp =\$('#mrp";
            // line 489
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var discount =\$('#price";
            // line 490
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin";
            // line 494
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(Math.round(margin,2));
\$('.profit";
            // line 495
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(Math.round(profit,2));
});
\$('#costpriceO";
            // line 497
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').keyup(function(){
var price =\$('#costpriceO";
            // line 498
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var mrp =\$('#mrp";
            // line 499
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var discount =\$('#dpr";
            // line 500
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin";
            // line 504
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(Math.round(margin,2));
\$('.profit";
            // line 505
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(Math.round(profit,2));
});
\$('#mrps";
            // line 507
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').keyup(function(){
var x=\$('#pricess').val();
var price=\$('#mrps";
            // line 509
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) + eval(res);
\$('#prs";
            // line 513
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(fin);

});
\$('#dprice";
            // line 516
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').keyup(function(){
var x=\$('#prs";
            // line 517
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var price=\$('#dprice";
            // line 518
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) - eval(res);
\$('#dpr";
            // line 522
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(fin);
//start cost per price code
var prices =\$('#costpriceO";
            // line 524
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var mrp =\$('#mrp";
            // line 525
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var discount =\$('#dpr";
            // line 526
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var margin=(discount-prices)/discount*100;
// var margin =marg
var profit=discount-prices;
\$('.margin";
            // line 530
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(Math.round(margin,2));
\$('.profit";
            // line 531
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(Math.round(profit,2));
});
\$('#dmprice";
            // line 533
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').keyup(function(){
var x=\$('#prs";
            // line 534
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var price=\$('#dmprice";
            // line 535
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) - eval(res);
\$('#dmpr";
            // line 539
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(fin);
});
\$('#dpr";
            // line 541
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').keyup(function(){
var x=\$('#prs";
            // line 542
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var price=\$('#dpr";
            // line 543
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var res=eval(x) - eval(price);
var fin = res/eval(x)*100;
\$('#dprice";
            // line 546
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(fin);


//start cost per price code
var prices =\$('#costpriceO";
            // line 550
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var mrp =\$('#mrp";
            // line 551
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var discount =\$('#dpr";
            // line 552
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var margin=(discount-prices)/discount*100;
// var margin =marg
var profit=discount-prices;
\$('.margin";
            // line 556
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(Math.round(margin,2));
\$('.profit";
            // line 557
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(Math.round(profit,2));
});
\$('#dmpr";
            // line 559
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').keyup(function(){
var x=\$('#prs";
            // line 560
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var price=\$('#dmpr";
            // line 561
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var res=eval(x) - eval(price);
var fin = res/eval(x)*100;
// alert(fin);
\$('#dmprice";
            // line 565
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(fin);
});
\$('#prs";
            // line 567
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').keyup(function(){
var x=\$('#pricess').val();
var price=\$('#prs";
            // line 569
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var res=-(eval(x) - eval(price));
var fin = res/eval(x)*100;
\$('#mrps";
            // line 572
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(fin);
});
\$('#addvar";
            // line 574
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').click(function(){
var image=\$('#image');
var x=\$('#appbundle_menuitem_type').val();

if(x=='1')
{
var variation=\$('#variation_names";
            // line 580
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var mrp=\$('#mrps";
            // line 581
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var price=\$('#dprice";
            // line 582
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var membership=\$('#dmprice";
            // line 583
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
  var mrp1=\$('#prs";
            // line 584
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var price1=\$('#dpr";
            // line 585
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var membership1=\$('#dmpr";
            // line 586
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var cost=\$('#costpriceO";
            // line 587
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
}
else
{
  var variation=\$('#variation_names";
            // line 591
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
  var mrp=\$('#mrp";
            // line 592
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var price=\$('#price";
            // line 593
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var membership=\$('#membership";
            // line 594
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var membership1=\$('#membership";
            // line 595
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();

  var mrp1=\$('#mrp";
            // line 597
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var price1=\$('#price";
            // line 598
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var cost=\$('#costprice";
            // line 599
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();

}
var priority=\$('#priority";
            // line 602
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var barcode=\$('#barcode";
            // line 603
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var net=\$('#net_weight";
            // line 604
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var min=\$('#min";
            // line 605
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var max=\$('#max";
            // line 606
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var sku=\$('#sku";
            // line 607
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var hsn=\$('#hsn";
            // line 608
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var weight=\$('#weight";
            // line 609
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var status=\$('#status";
            // line 610
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var loyalty=\$('#loyalty";
            // line 611
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();
var unit=\$('#unit";
            // line 612
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val();

if(variation=='' || mrp == '' || cost == '')
{
  alert('please enter variation name or valid price!');
  return false;
}
var x=\$('#pricess').val();
if(status=='0')
{
  var statusd='Active';

}
else
{
    var statusd='Inactive';

}
// alert(membership);
\$('.var";
            // line 631
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(variation);
\$('.priority";
            // line 632
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(priority);
\$('.barcode";
            // line 633
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(barcode);
\$('.min";
            // line 634
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(min);
\$('.max";
            // line 635
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(max);
\$('.mrp";
            // line 636
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(mrp1);
\$('.price";
            // line 637
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(price1);
\$('.membership";
            // line 638
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(membership1);
\$('.sku";
            // line 639
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(sku);
\$('.hsn";
            // line 640
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(hsn);
\$('.stn";
            // line 641
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').html(statusd);

\$('.1";
            // line 643
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(variation);
\$('.cost";
            // line 644
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(cost);
\$('.net";
            // line 645
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(net);
\$('.2";
            // line 646
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(sku);
\$('.3";
            // line 647
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(barcode);
\$('.4";
            // line 648
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(mrp);
\$('.5";
            // line 649
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(price);
\$('.6";
            // line 650
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(membership);
\$('.7";
            // line 651
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(priority);
\$('.8";
            // line 652
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(min);
\$('.9";
            // line 653
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(max);
\$('.10";
            // line 654
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(hsn);
\$('.11";
            // line 655
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(status);
\$('.w";
            // line 656
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(weight);
\$('.l";
            // line 657
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(loyalty);
\$('.unit";
            // line 658
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').val(unit);

\$('#edit";
            // line 660
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "').fadeOut();

\$('.modal-backdrop').fadeOut();

\$('.modal-open').css({'overflow': 'visible'});
});
</script>
                                          ";
            // line 667
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
            // line 668
            echo "                                      </tr>
                                      ";
            // line 670
            echo "                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 671
        echo "                                      </tbody>
                                  </table>
                              
                          </div>

</div>




                          ";
        // line 687
        echo "                  </div>
              </div>
          </div>
      </div>
      <!-- Row -->
      <!-- Modal -->
<div id=\"variation\" class=\"modal fade\" role=\"dialog\">
<div class=\"modal-dialog modal-lg\">

  <!-- Modal content-->
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
    </div>
    <div class=\"modal-body\">
     ";
        // line 703
        echo "
  <div class=\"form-row\">

   <div class=\"form-group col-8\" >

     <label for=\"variation_name \">Variation Name *</label>
    
   <input type=\"text\" class=\"form-control\" id=\"variation_names\" placeholder=\"1 Kg\"> 
</div>
   <div class=\"form-group col-4\" >

     <label for=\"variation_name \">Unit*</label>
    
   <input type=\"text\" class=\"form-control\" id=\"unit\" placeholder=\"1 Kg\"> 
</div>
    
</div>
  <div class=\"\"><br>
  <div class=\"form-row\">

  <div class=\"form-group col-4\">
    <label for=\"priority\">Priority</label>
    <input type=\"text\" class=\"form-control\" id=\"priority\" placeholder=\"priority\" value=\"0\">
  </div>
      <div class=\"form-group col-4\">
    <label for=\"priority\">SKU </label>
    <input type=\"text\" class=\"form-control\" id=\"sku\" placeholder=\"SKU\">
  </div>
     <div class=\"form-group col-4\">
    <label for=\"priority\">HSN </label>
    <input type=\"text\" class=\"form-control\" id=\"hsn\" placeholder=\"HSN\"  value=\"0\">
  </div>
  </div>
</div>

  <div class=\"form-row\">
  <div class=\"form-group col-md-3\">
    <label for=\"barcode\">barcode </label>
    <input type=\"text\" class=\"form-control\" id=\"barcode\" placeholder=\"barcode\"  value=\"0\">
  </div>
   <div class=\"form-group col-md-3\">
    <label for=\"weight\">Loyalty Points</label>
    <input type=\"text\" class=\"form-control\" id=\"loyalty\" placeholder=\"Loyalty Points\"  value=\"0\">
  </div>
   <div class=\"form-group col-md-3\">
    <label for=\"weight\">Gross Weight (in Kg) </label>
    <input type=\"text\" class=\"form-control\" id=\"weight\" placeholder=\"Gross weight\"  value=\"0\">
  </div>
   <div class=\"form-group col-md-3\">
    <label for=\"weight\">Net Weight (in Kg) </label>
    <input type=\"text\" class=\"form-control\" id=\"net_weight\" placeholder=\"net weight\"  value=\"0\">
  </div>
</div>
  <div class=\"form-row\">
  <div class=\"form-group col-md-4\">
    <label for=\"min\">Minimum Order Quantity </label>
    <input type=\"text\" class=\"form-control\" id=\"min\" placeholder=\"minimum order Quantity\" value=\"1\">
  </div>
  <div class=\"form-group col-md-4\">
    <label for=\"priority\">Maximum Order Quantity *</label>
    <input type=\"text\" class=\"form-control\" id=\"max\" placeholder=\"Maximum Order Quantity\" value=\"10\">
  </div>
  <div class=\"form-group col-md-4\">
    <label for=\"priority\">status</label>
    <select class=\"form-control\" id=\"status\">
      <option value='0'>Active</option>
      <option value=\"2\">Inactive</option>
    </select>
  </div>
</div>
";
        // line 773
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), "vars", array()), "value", array()) == "1")) {
            // line 774
            echo "
  <div class=\"form-row\" style=\"display:none;\">
    ";
        } else {
            // line 777
            echo "      <div class=\"form-row sa\">
";
        }
        // line 779
        echo "  <div class=\"form-group col-md-4\">
    <label for=\"mrp\">Actual Price *</label>
    <input type=\"text\" class=\"form-control \" id=\"mrp\" placeholder=\"Actual Price\" value=\"0\">
  </div>
  <div class=\"form-group col-md-4\">
    <label for=\"price\">Discounted Price *</label>
    <input type=\"text\" class=\"form-control \" id=\"price\" placeholder=\"price\" value=\"0\">
  </div>
         <div class=\"form-group col-md-4\">
    <label for=\"price\">Cost Per Item</label>
    <input type=\"text\" class=\"form-control\" id=\"costprice\" placeholder=\"Cost Per Price\"  value=\"0\">
          <small class=\"text\"><b>Margin : <span class=\"margin\"></span>% | Profit : <span class=\"profit\">10</span></b></small>
  </div>
      <div class=\"row\"> 
  <div class=\"form-group col-md-12\">
    <label for=\"price\">Membership Price *</label>
    <input type=\"text\" class=\"form-control \" id=\"membership\" placeholder=\"price\" value=\"0\"> 
  </div>
</div>

</div>

";
        // line 801
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), "vars", array()), "value", array()) == "1")) {
            // line 802
            echo "
   <div class=\"form-row fishprice\">
    ";
        } else {
            // line 805
            echo "   <div class=\"form-row fishprice\" style=\"display:none;\">

    ";
        }
        // line 808
        echo "  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Actual Price in Percentage (eg : 40%)</label>
    <input type=\"text\" class=\"form-control\" id=\"mrps\" placeholder=\"\">
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Actual Price  </label>
    <input type=\"text\" class=\"form-control\" id=\"prs\" placeholder=\"\">
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Discounted Price in Percentage (eg : 40%)</label>
    <input type=\"text\" class=\"form-control\" id=\"dprice\" placeholder=\"\">
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Discounted Price  </label>
    <input type=\"text\" class=\"form-control\" id=\"dpr\" placeholder=\"\">
  </div>
     <div class=\"form-group col-md-12\">
    <label for=\"price\">Cost Per Item</label>
    <input type=\"text\" class=\"form-control\" id=\"costpriceO\" placeholder=\"Cost Per Price\"  value=\"0\">
          <small class=\"text\"><b>Margin : <span class=\"margin\"></span>% | Profit : <span class=\"profit\">10</span></b></small>
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Membership Price in Percentage (eg : 40%)</label>
    <input type=\"text\" class=\"form-control\" id=\"dmprice\" placeholder=\"Membership price in %\">
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Membership Price  </label>
    <input type=\"text\" class=\"form-control\" id=\"dmpr\" placeholder=\"membership price\">
  </div>
</div>
";
        // line 842
        echo "<button type=\"button\" class=\"btn btn-primary\" id=\"addvar\">Add</button>
";
        // line 844
        echo "    </div>
    <div class=\"modal-footer\">
      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
    </div>
  </div>

</div>
</div>
</div>


<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Upload (Allow Multiple)</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            <div class=\"modal-body\">
            <div class=\"custom-file-container\" data-upload-id=\"mySecondImage\">
    <label class=\"custom-file-container__image-clear\" > </label>
    <label class=\"custom-file-container__custom-file\" >
        <input type=\"file\" class=\"custom-file-container__custom-file__custom-file-input\" multiple>
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"10485760\" />
        <span class=\"custom-file-container__custom-file__custom-file-control\"></span>
    </label>
    <div class=\"custom-file-container__image-preview\"></div>
</div> </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\"><i class=\"flaticon-cancel-12\"></i> Discard</button>
                <button type=\"button\" class=\"btn btn-primary\">Save</button>
            </div>
        </div>
    </div>
</div>

        </div>
        <!--col-md-12 end-->

            <div class=\"col-md-3 mb-4\">
           <div class=\"h-100\">
                <div id=\"toggleAccordion\">
                     
                    
                  <div class=\"card right-sidebar-card\">
                      <div class=\"card-header\" id=\"headingOne1\">
                          <section class=\"mb-0 mt-0\">
                              <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionOne\" aria-expanded=\"true\" aria-controls=\"defaultAccordionOne\">
                                  Category <div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                              </div>
                          </section>
                      </div>
                      <div id=\"defaultAccordionOne\" class=\"collapse show\" aria-labelledby=\"headingOne1\" data-parent=\"#toggleAccordion\">
                          <div class=\"card-body right-sidebar-option\">
                            <div class=\"form-group\">
                        
                        <div id=\"toggleAccordion\">
                          <div style=\"Height:250px;overflow-x:auto\">
                            <div id=\"accordion\">
                              <div class=\" card-width\">
                              ";
        // line 905
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? $this->getContext($context, "category")));
        foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
            // line 906
            echo "                              
                                <div class=\"card-header\">
                                  <section class=\"mb-0 mt-0\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#a";
            // line 909
            echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "id", array()), "html", null, true);
            echo "\"> <p class=\"mb-2 cat-name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "category_name", array()), "html", null, true);
            echo "</p></a>
                                  </section>
                                </div>
                                <div id=\"a";
            // line 912
            echo twig_escape_filter($this->env, $this->getAttribute($context["ca"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse show\">
                                  <div class=\"\">
                                    ";
            // line 914
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ca"], "SubCategory", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 915
                echo "                                    ";
                if (($this->getAttribute($context["sub"], "nested", array()) != 0)) {
                    // line 916
                    echo "                                    <div>
                                      <b style=\"background: whitesmoke;padding:2px;width: 100% !important;color: #000;\"> ";
                    // line 917
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "categoryName", array()), "html", null, true);
                    echo "</b>
                                    </div>
                                    ";
                    // line 919
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub"], "nested", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 920
                        echo "                                    <div >
                                      <label class=\"checkbox\"><input type=\"checkbox\" value=\"";
                        // line 921
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
                        echo "\" name=\"category[]\" ";
                        if (twig_in_filter($this->getAttribute($context["sub"], "id", array()), ($context["arr"] ?? $this->getContext($context, "arr")))) {
                            echo " checked ";
                        }
                        // line 922
                        echo "                                        /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "categoryName", array()), "html", null, true);
                        echo "
                                      </label>
                                    </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 926
                    echo "                                    ";
                } else {
                    // line 927
                    echo "                                    <div >
                                      <label class=\"checkbox\"><input type=\"checkbox\" value=\"";
                    // line 928
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
                    echo "\" name=\"category[]\" ";
                    if (twig_in_filter($this->getAttribute($context["sub"], "id", array()), ($context["arr"] ?? $this->getContext($context, "arr")))) {
                        echo " checked ";
                    }
                    // line 929
                    echo "                                        /> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "categoryName", array()), "html", null, true);
                    echo "
                                      </label>
                                    </div>
                                    ";
                }
                // line 933
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 934
            echo "                                  </div>
                                </div>
                              
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 938
        echo "                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                              <!-- <select class=\"form-control form-control-sm\" name=\"payment\">
                                  <option value=\"cod\">Cash On Delivery</option>
                                  <option value=\"sod\">Swipe On Delivery</option>
                                  <option value=\"online\">online Payment</option>
                              </select> -->
                          </div>
                      </div>
                  </div>
                  <div class=\"card right-sidebar-card\">
                      <div class=\"card-header\" id=\"headingTwo1\">
                          <section class=\"mb-0 mt-0\">
                              <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionTwo\" aria-expanded=\"true\" aria-controls=\"defaultAccordionTwo\">
                                  Featued Image<div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                              </div>
                          </section>
                      </div>
                      <div id=\"defaultAccordionTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo1\" data-parent=\"#toggleAccordion\">
                          <div class=\"card-body right-sidebar-option\">
                                  <div class=\"row\">
                    ";
        // line 962
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@AppBundle/Themes/file.html.twig"));
        // line 963
        echo "                    <div class=\"form-group margin-bottom\">
                      <!-- ";
        // line 964
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "itemFeaturedImageFile", array()), 'label', array("label_attr" => array("class" => "m-l-20"), "label" => "Featured image"));
        echo " -->
                      ";
        // line 965
        $context["menuItemPic"] = "";
        // line 966
        echo "                      ";
        if (($this->getAttribute(($context["menuItem"] ?? $this->getContext($context, "menuItem")), "itemFeaturedImage", array()) != null)) {
            // line 967
            echo "                      ";
            $context["menuItemPic"] = ("/uploads/items/images/" . $this->getAttribute(($context["menuItem"] ?? $this->getContext($context, "menuItem")), "itemFeaturedImage", array()));
            // line 968
            echo "                      ";
        }
        // line 969
        echo "                      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "itemFeaturedImageFile", array()), 'row', array("attr" => array("data-default-file" => ($context["menuItemPic"] ?? $this->getContext($context, "menuItemPic")))));
        echo "
                    </div>
                  </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"card right-sidebar-card\">
                      <div class=\"card-header\" id=\"headingThree1\">
                          <section class=\"mb-0 mt-0\">
                          <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionThree\" aria-expanded=\"false\" aria-controls=\"defaultAccordionThree\">
                              Select Brand<div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                          </div>
                          </section>
                      </div>

                     
                      <div id=\"defaultAccordionThree\" class=\"collapse show\" aria-labelledby=\"headingThree1\" data-parent=\"#toggleAccordion\">
                          <div class=\"card-body right-sidebar-option\">
                             <div class=\"row form-row\">
                      <div class=\"col-md-12 form-group margin-bottom\">
                          <div class=\"form-group\">
                      
                      <select class=\"form-control form-control-sm select\" id=\"appbundle_menuitem_brand\" name=\"appbundle_menuitem[brand]\">
                        ";
        // line 992
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["brands"] ?? $this->getContext($context, "brands")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 993
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["res"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "brand", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "categoryName", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 995
        echo "                      </select>
                    </div>
                      </div>
                    </div>
                          </div>
                      </div>
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary btn-sm btn-block mb-2 savefont\"> <i class=\"fa fa-check\"></i> Save</button>
                  
                </div>
            </div>
        </div>
          
                  </div>
      </div>
    </div>
                  ";
        // line 1025
        echo "
                       ";
        // line 1026
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                      ";
        // line 1027
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
            

    
   ";
        
        $__internal_897530d1911bce29d6b8f38a397fd412a34649943e555deb42e9ef00ec2f6803->leave($__internal_897530d1911bce29d6b8f38a397fd412a34649943e555deb42e9ef00ec2f6803_prof);

        
        $__internal_c83219e1c529605b2f537b3d8ade02fd6d0c590e9e398f3d16ebc378c5847d76->leave($__internal_c83219e1c529605b2f537b3d8ade02fd6d0c590e9e398f3d16ebc378c5847d76_prof);

    }

    // line 1034
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4efdda81770dba52ef623170f1ca20392e20db1b731043af064daac7e927d8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efdda81770dba52ef623170f1ca20392e20db1b731043af064daac7e927d8fc->enter($__internal_4efdda81770dba52ef623170f1ca20392e20db1b731043af064daac7e927d8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_85c47643365efd47f18643cee8a0f1c8929381e8b45dc198ece665226425cf3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c47643365efd47f18643cee8a0f1c8929381e8b45dc198ece665226425cf3f->enter($__internal_85c47643365efd47f18643cee8a0f1c8929381e8b45dc198ece665226425cf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 1035
        echo "
<script src=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.js\"></script>
<script src=\"/assets/plugins/moment/moment.js\"></script>
<script src=\"/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js\"></script>
<script src=\"/assets/js/colorpicker.js\"></script>

<script>
\$('#appbundle_menuitem_type').change(function(){
var x=\$('#appbundle_menuitem_type').val();
if(x=='1')
{
  \$('.hides').hide().prop('required',false);
    \$('.fishprice').show();
\$('.sa').hide().prop('required',false);
}
else
{
    \$('.hides').show();
    \$('.fishprice').hide().prop('required',false);
\$('.sa').show();

}
});

\$('#costpriceO').keyup(function(){
var price =\$('#costpriceO').val();
var mrp =\$('#mrp').val();
var discount =\$('#dpr').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin').html(Math.round(margin,2));
\$('.profit').html(Math.round(profit,2));
});
\$('#costprice').keyup(function(){
var price =\$('#costprice').val();
var mrp =\$('#mrp').val();
var discount =\$('#price').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin').html(Math.round(margin,2));
\$('.profit').html(Math.round(profit,2));
});
\$('#price').keyup(function(){
var price =\$('#costprice').val();
var mrp =\$('#mrp').val();
var discount =\$('#price').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin').html(Math.round(margin,2));
\$('.profit').html(Math.round(profit,2));
});
\$('#mrps').keyup(function(){
var x=\$('#pricess').val();
var price=\$('#mrps').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) + eval(res);
\$('#prs').val(fin);
});
\$('#prs').keyup(function(){
var x=\$('#pricess').val();
var price=\$('#prs').val();
var res=-(eval(x) - eval(price));
var fin = res/eval(x)*100;

\$('#mrps').val(fin);
});
\$('#dprice').keyup(function(){
var x=\$('#prs').val();
var price=\$('#dprice').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) - eval(res);

\$('#dpr').val(fin);

//start cost per price code
var prices =\$('#costpriceO').val();
var mrp =\$('#mrp').val();
var discount =\$('#dpr').val();
var margin=(discount-prices)/discount*100;
// var margin =marg
var profit=discount-prices;
\$('.margin').html(Math.round(margin,2));
\$('.profit').html(Math.round(profit,2));

});
\$('#dpr').keyup(function(){
var x=\$('#prs').val();
var price=\$('#dpr').val();
var res=eval(x) - eval(price);
var fin = res/eval(x)*100;

\$('#dprice').val(fin);

//start cost per price code
var prices =\$('#costpriceO').val();
var mrp =\$('#mrp').val();
var discount =\$('#dpr').val();
var margin=(discount-prices)/discount*100;
// var margin =marg
var profit=discount-prices;
\$('.margin').html(Math.round(margin,2));
\$('.profit').html(Math.round(profit,2));
});
\$('#dmprice').keyup(function(){
var x=\$('#prs').val();
var price=\$('#dmprice').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) - eval(res);

\$('#dmpr').val(fin);

});
\$('#dmpr').keyup(function(){
var x=\$('#prs').val();
var price=\$('#dmpr').val();
var res=eval(x) - eval(price);
var fin = res/eval(x)*100;

\$('#dmprice').val(fin);
});
\$('#addvar').click(function(){

var image=\$('#image');
var x=\$('#appbundle_menuitem_type').val();
if(x=='1')
{
var variation=\$('#variation_names').val();
var mrp=\$('#mrps').val();
var price=\$('#dprice').val();
var membership=\$('#dmprice').val();
  var mrp1=\$('#prs').val();
var price1=\$('#dpr').val();
var cost =\$('#costpriceO').val();

}
else
{
  var variation=\$('#variation_names').val();
  var mrp=\$('#mrp').val();
var price=\$('#price').val();
  var mrp1=\$('#prs').val();
var price1=\$('#dpr').val();
var membership=\$('#membership').val();
var cost =\$('#costprice').val();

}
var priority=\$('#priority').val();
var barcode=\$('#barcode').val();
var weight=\$('#weight').val();
var net=\$('#net_weight').val();
var min=\$('#min').val();
var max=\$('#max').val();

var sku=\$('#sku').val();
var hsn=\$('#hsn').val();
var unit=\$('#unit').val();
var status=\$('#status').val();
var loyalty=\$('#loyalty').val();

if(status=='0')
{
  var statusd='Active';

}
else
{
    var statusd='Inactive';

}
if(variation=='' || mrp == '' || cost == '')
{
  alert('please enter variation name or valid price!');
  return false;
}
// var x = \$(\"#image\");
//      y = x.clone();
//  x.attr(\"id\", \"fileOld\");
//  y.insertAfter(\".n\");
// priceVariationTable
var x=\$('#pricess').val();
// var price=\$('#mrps').val();
// var res=eval(price) * eval(x) / 100;

// var fin=eval(x) + eval(res);
\$('#priceVariationTable').append('<tr><td></td><td><input type=\"hidden\" name=\"variation[]\" value=\"'+variation+'\"><input type=\"hidden\" name=\"unit[]\" value=\"'+unit+'\">'+variation+'</td><td><input type=\"hidden\" name=\"hsn[]\" value=\"'+hsn+'\"><input type=\"hidden\" name=\"sku[]\" value=\"'+sku+'\"><input type=\"hidden\" name=\"barcode[]\" value=\"'+barcode+'\"><input type=\"hidden\" name=\"weight[]\" value=\"'+weight+'\">'+barcode+'</td><td><input type=\"hidden\" name=\"mrp[]\" value=\"'+mrp+'\">'+mrp1+'</td><td><input type=\"hidden\" name=\"price[]\" value=\"'+price+'\">'+price1+'</td><td><input type=\"hidden\" name=\"membership[]\" value=\"'+membership+'\">'+membership+'</td><td><input type=\"hidden\" name=\"priority[]\" value=\"'+priority+'\">'+priority+'<input type=\"hidden\" name=\"min[]\" value=\"'+min+'\"><input type=\"hidden\" name=\"max[]\" value=\"'+max+'\"></td><td><input type=\"hidden\" name=\"loyalty[]\" value=\"'+loyalty+'\"><input type=\"hidden\" name=\"cost[]\" value=\"'+cost+'\"><input type=\"hidden\" name=\"net_weight[]\" value=\"'+net+'\"><input type=\"hidden\" name=\"status[]\" value=\"'+status+'\">'+statusd+'</td><td><button type=\"button\" onclick=\"removeVariant(this)\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\"></i></button></td></tr>');
var variation=\$('#variation_name').val('');
var priority=\$('#priority').val('0');
var barcode=\$('#barcode').val('');

var mrp=\$('#mrp').val(0);
var price=\$('#price').val(0);
var membership=\$('#membership').val(0);
var sku=\$('#sku').val('');
});
      \$indexMesure=1;
      \$(document).ready(function() {



          \$collectionHolder = \$('#priceVariationTable');
  
          // count the current form inputs we have (e.g. 2), use that as the new
          // index when inserting a new item (e.g. 2)
          \$indexMesure = \$collectionHolder.find(':input').length;
          // Basic
          \$('.dropify').dropify();
          // Translated
          \$('.dropify-fr').dropify({
              messages: {
                  default: 'Glissez-déposez un fichier ici ou cliquez',
                  replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                  remove: 'Supprimer',
                  error: 'Désolé, le fichier trop volumineux'
              }
          });
  
          // Used events
          var drEvent = \$('#input-file-events').dropify();
  
          drEvent.on('dropify.beforeClear', function(event, element) {
              return confirm(\"Do you really want to delete \\\"\" + element.file.name + \"\\\" ?\");
          });
  
          drEvent.on('dropify.afterClear', function(event, element) {
              alert('File deleted');
          });
  
          drEvent.on('dropify.errors', function(event, element) {
              console.log('Has Errors');
          });
  
          var drDestroy = \$('#input-file-to-destroy').dropify();
          drDestroy = drDestroy.data('dropify')
          \$('#toggleDropify').on('click', function(e) {
              e.preventDefault();
              if (drDestroy.isDropified()) {
                  drDestroy.destroy();
              } else {
                  drDestroy.init();
              }
          })
      });

  function addNewPriceVeriation(){
      \$('#priceVar').attr('style','');
          // Get the ul that holds the collection of tags
      \$collectionHolder = \$('#priceVariationTable');

      var \$newFormLi=\"\";
      var \$holder=\$('div.prototype');
      // Get the data-prototype explained earlier
      var prototype = \$holder.data('prototype');

      // get the new index
      var index = \$indexMesure;
      \$indexMesure= \$indexMesure + 1;

      // Replace '__name__' in the prototype's HTML to
      // instead be a number based on how many items we have
      var newForm = prototype.replace(/__name__/g, index);

      // increase the index with one for the next item
      \$collectionHolder.data('index', index + 1);
      
      // Display the form in the page in an li, before the \"Add a tag\" link li
      \$newFormLi = \$('#priceVariationTable').prepend(newForm);

  }

  function removeVariant(obj){
      \$(obj).parent().parent().remove();
  }

    function deleteimg(id){
    var out ={'id':id}; 

    var r = confirm(\"Do you really want to delete this image?\");
    if (r == true) {

      \$.ajax({
          type: \"POST\",
          url: \"/api/app-manager/get-functionality/delete-variation-images/\"+id,
          data: out,
          success: function (res, dataType) {
            \$('#imgsec'+id).hide().prop('required',false);
          },
          error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert('Error : ' + errorThrown);
          }
      });
     
    } else {
      
    }

  }
</script>

<script>
  
      \$(document).ready(function() {
\$('.multipleSelect').fastselect();
});
      </script>
";
        
        $__internal_85c47643365efd47f18643cee8a0f1c8929381e8b45dc198ece665226425cf3f->leave($__internal_85c47643365efd47f18643cee8a0f1c8929381e8b45dc198ece665226425cf3f_prof);

        
        $__internal_4efdda81770dba52ef623170f1ca20392e20db1b731043af064daac7e927d8fc->leave($__internal_4efdda81770dba52ef623170f1ca20392e20db1b731043af064daac7e927d8fc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Restaurant:Menu/addNew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2098 => 1035,  2089 => 1034,  2074 => 1027,  2070 => 1026,  2067 => 1025,  2049 => 995,  2034 => 993,  2030 => 992,  2003 => 969,  2000 => 968,  1997 => 967,  1994 => 966,  1992 => 965,  1988 => 964,  1985 => 963,  1983 => 962,  1957 => 938,  1948 => 934,  1942 => 933,  1934 => 929,  1928 => 928,  1925 => 927,  1922 => 926,  1911 => 922,  1905 => 921,  1902 => 920,  1898 => 919,  1893 => 917,  1890 => 916,  1887 => 915,  1883 => 914,  1878 => 912,  1870 => 909,  1865 => 906,  1861 => 905,  1798 => 844,  1795 => 842,  1763 => 808,  1758 => 805,  1753 => 802,  1751 => 801,  1727 => 779,  1723 => 777,  1718 => 774,  1716 => 773,  1644 => 703,  1627 => 687,  1615 => 671,  1609 => 670,  1606 => 668,  1604 => 667,  1594 => 660,  1589 => 658,  1585 => 657,  1581 => 656,  1577 => 655,  1573 => 654,  1569 => 653,  1565 => 652,  1561 => 651,  1557 => 650,  1553 => 649,  1549 => 648,  1545 => 647,  1541 => 646,  1537 => 645,  1533 => 644,  1529 => 643,  1524 => 641,  1520 => 640,  1516 => 639,  1512 => 638,  1508 => 637,  1504 => 636,  1500 => 635,  1496 => 634,  1492 => 633,  1488 => 632,  1484 => 631,  1462 => 612,  1458 => 611,  1454 => 610,  1450 => 609,  1446 => 608,  1442 => 607,  1438 => 606,  1434 => 605,  1430 => 604,  1426 => 603,  1422 => 602,  1416 => 599,  1412 => 598,  1408 => 597,  1403 => 595,  1399 => 594,  1395 => 593,  1391 => 592,  1387 => 591,  1380 => 587,  1376 => 586,  1372 => 585,  1368 => 584,  1364 => 583,  1360 => 582,  1356 => 581,  1352 => 580,  1343 => 574,  1338 => 572,  1332 => 569,  1327 => 567,  1322 => 565,  1315 => 561,  1311 => 560,  1307 => 559,  1302 => 557,  1298 => 556,  1291 => 552,  1287 => 551,  1283 => 550,  1276 => 546,  1270 => 543,  1266 => 542,  1262 => 541,  1257 => 539,  1250 => 535,  1246 => 534,  1242 => 533,  1237 => 531,  1233 => 530,  1226 => 526,  1222 => 525,  1218 => 524,  1213 => 522,  1206 => 518,  1202 => 517,  1198 => 516,  1192 => 513,  1185 => 509,  1180 => 507,  1175 => 505,  1171 => 504,  1164 => 500,  1160 => 499,  1156 => 498,  1152 => 497,  1147 => 495,  1143 => 494,  1136 => 490,  1132 => 489,  1128 => 488,  1124 => 487,  1119 => 485,  1115 => 484,  1108 => 480,  1104 => 479,  1100 => 478,  1096 => 477,  1083 => 466,  1079 => 464,  1074 => 461,  1070 => 459,  1067 => 448,  1060 => 446,  1056 => 444,  1049 => 442,  1045 => 440,  1039 => 437,  1035 => 436,  1030 => 435,  1028 => 434,  1025 => 433,  1022 => 432,  1020 => 431,  1017 => 430,  1013 => 429,  1010 => 428,  1007 => 427,  1005 => 426,  1002 => 425,  998 => 424,  994 => 422,  991 => 421,  989 => 420,  985 => 418,  970 => 411,  961 => 407,  956 => 404,  948 => 402,  924 => 400,  922 => 399,  916 => 398,  903 => 394,  894 => 390,  880 => 385,  871 => 381,  866 => 378,  861 => 376,  856 => 373,  854 => 372,  843 => 366,  836 => 361,  828 => 359,  808 => 357,  806 => 356,  800 => 355,  791 => 351,  782 => 347,  778 => 345,  774 => 344,  769 => 341,  767 => 340,  758 => 336,  752 => 335,  748 => 334,  739 => 330,  730 => 326,  717 => 318,  708 => 314,  699 => 310,  690 => 306,  678 => 299,  669 => 295,  660 => 291,  646 => 282,  637 => 278,  631 => 274,  621 => 266,  616 => 264,  600 => 261,  592 => 258,  586 => 257,  560 => 256,  526 => 253,  521 => 250,  496 => 249,  492 => 248,  486 => 247,  481 => 244,  455 => 243,  449 => 242,  437 => 239,  431 => 238,  425 => 237,  422 => 236,  415 => 231,  409 => 230,  403 => 229,  397 => 228,  391 => 225,  387 => 223,  382 => 222,  380 => 221,  368 => 211,  350 => 194,  325 => 171,  322 => 170,  318 => 168,  314 => 166,  312 => 165,  300 => 160,  290 => 153,  286 => 152,  275 => 144,  271 => 143,  265 => 140,  261 => 139,  253 => 134,  249 => 133,  243 => 130,  239 => 129,  232 => 125,  228 => 124,  220 => 119,  216 => 118,  205 => 110,  201 => 109,  193 => 104,  189 => 103,  181 => 98,  177 => 97,  170 => 93,  163 => 89,  159 => 88,  153 => 84,  151 => 83,  146 => 80,  125 => 61,  119 => 57,  110 => 56,  50 => 4,  41 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@AppBundle/\"~ myExtend ~\"/base.html.twig\" %}

{% block styles %}


<style type=\"text/css\">
table#priceVar th {
  font-size:10px;
  text-transform:uppercase;
  font-weight:bold;
}
  [type=checkbox]:checked, [type=checkbox]:not(:checked){


  }
   .fstElement { font-size: 9px; }
          .fstToggleBtn { min-width: 16.5em; }

          .submitBtn { display: none; }

          .fstMultipleMode { display: block; }
          .fstMultipleMode .fstControls { width: 100%; }
          .right-sidebar-option {
      background: #F1F2F3;
}
.margin-bottom{
  margin-bottom: 0px !important;
}
.cat-name{
  font-size: 14px !important;
  font-weight: 800;
}

.img-close{
    position: absolute;
    top: -10px;
    background: #fb1e1e;
    padding: 5px;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 1;
    right: 61px;
    color: #fff;
  }

  .savefont{
    font-size: 16px;
    font-weight: 700;
  }

</style>
{% endblock %}

{% block body %}
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <!-- Row -->
{{ form_start(form) }}
<div class=\"\">
<div class=\"layout-px-spacing\">
  <div class=\"row layout-top-spacing\">
      <div class=\"col-md-9\">
        <div class=\"row\"><div class=\"col-md-12\">
        <div class=\"card card-outline-info\">
          <div class=\"card-header\">
            <div class=\"row mt-4 mb-4\">
              <div class=\"col-md-6\">
                <h4 class=\"pl-4\">Item Update Panel </h4>
              </div>
              <div class=\"col-md-6 pr-4\">
              </div>
            </div>
          </div>
        
        <div class=\"card-body\">
          {# {{ form_start(form) }} #}
            <div class=\"form-body\">
              <div class=\"row p-t-20\">
                <!--START-->
                {% form_theme form '@AppBundle/Themes/widget.html.twig' %}
                <div class=\"col-md-12\">
                  <div class=\"row\">
                    <div class=\"col-md-12\">
                      <div class=\"form-group\">
                        {{ form_label(form.itemName, \"Item Name\") }}
                        {{ form_row(form.itemName,{'attr':{'class':'form-control form-control-sm','placeholder':'Item Name'}}) }}
                      </div>
                    </div>
                  </div>
                  {% set arr= menuItem.category|split(',') %}  
                  <div class=\"row\">
                <div class=\"col-md-4\">
                  <div class=\"form-group\">
                    {{ form_label(form.type, \"Stock Type\") }}
                    {{ form_row(form.type,{'attr':{'class':'form-control form-control-sm'}}) }}
                  </div>  
                </div>
                <div class=\"col-md-4\">
                  <div class=\"form-group\">
                    {{ form_label(form.delivery, \"Delivery Duration\") }}
                    {{ form_row(form.delivery,{'attr':{'class':'form-control form-control-sm'}}) }}
                  </div>
                </div>
                  <div class=\"col-md-4\">
                    <div class=\"form-group\">
                      {{ form_label(form.vegType, \"Type\") }}
                      {{ form_row(form.vegType,{'attr':{'class':'form-control form-control-sm'}}) }}
                    </div>  
                  </div>
                </div>
                <div class=\"row\">
                  
                  <div class=\"col-md-3\">
                    <div class=\"form-group\">
                      {{ form_label(form.alert, \"Stock Notify\") }}
                      {{ form_row(form.alert,{'attr':{'class':'form-control form-control-sm','placeholder':'Stock Notify','value':'10',}}) }}
                    </div>
                  </div>
                  <div class=\"col-md-3\">
                    <div class=\"form-group\">
                      {{ form_label(form.duration, \"Return Duration\") }}
                      {{ form_row(form.duration,{'attr':{'class':'form-control form-control-sm'}}) }}
                    </div>
                  </div>
                  <div class=\"col-md-3\">
                    {{ form_label(form.salesTax, \"Gst\") }}
                    {{ form_row(form.salesTax,{'attr':{'class':'form-control form-control-sm','placeholder':'Tax'}}) }}
                  </div>
             <div class=\"col-md-3\">
                    {{ form_label(form.productType, \"Product Type\") }}
                    {{ form_row(form.productType,{'attr':{'class':'form-control form-control-sm','placeholder':''}}) }}
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    {{ form_label(form.itemDescription, \"Item description\") }}
                    {{ form_row(form.itemDescription,{'attr':{'class':'form-control form-control-sm','placeholder':'Doe'}}) }}
                  </div>
                  <div class=\"col-md-6\">
                    {{ form_label(form.itemShortDescription, \"Manufacturer description\") }}
                    {{ form_row(form.itemShortDescription,{'attr':{'class':'form-control form-control-sm','placeholder':'Doe'}}) }}
                  </div>
                  
                </div>  
                    <div class=\"row\">

                      <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        {{ form_label(form.itemPriority, \"Item Priority\") }}
                        {{ form_row(form.itemPriority,{'attr':{'class':'form-control form-control-sm'}}) }}
                    </div>
                  </div>

                    <div class=\"col-md-4\">
                        <label class=\"d-block\">Item Active Status</label>
                        <label class=\"switch s-success mr-2 mt-2\"> 
                            <input type=\"checkbox\" {% if isActive == 1 %}checked {% endif %} class=\"form-control form-control-sm\" name=\"isActive\"  value=\"{{ isActive }}\">
                            <span class=\"slider round\"></span>
                        </label>
                    </div>

                      {% if form.type.vars.value == '1' %}
                      <div class=\"col-md-4 fishprice\" style=\"display:block\">
                        {% else %}
                        <div class=\"col-md-4 fishprice\" style=\"display:none\">
                          {% endif %}
                          <label for=\"pricess\">Price - 1 KG</label>
                          <div  class=\"form-group \"><input type=\"text\" id=\"pricess\" name=\"fishprice\" class=\"form-control form-control-sm\" placeholder=\"Price\" value=\"{{ menuItem.salePrice }}\">
                          </div>
                        </div>

                      </div>

                    </div>
                       <!--end-->
                  </div>
                </div>
              </div>
            </div>
            <!--end col-md-9 card-->
          </div>
           <div class=\"col-lg-12\">
      <div class=\"card card-outline-info\">
        <div class=\"card-header\">
          <div class=\"row mt-4 mb-4\">
           
          </div>
        </div>
        <div class=\"card-body\">
          {# {{ form_start(form) }} #}
            <div class=\"form-body\">           

                
                <div class=\"\">
                  <h3 class=\"card-title\">Price variation
                    <span class=\"pull-right\">
                      <a href=\"javascript:;\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#variation\">Add new variant</a>
                    </span>
                  </h3>
                  <hr>
                  <div class=\"table-responsive\">
                    <table class=\"table table-hovered \"  id=\"priceVar\">
                      <thead>
                        <tr>
                          <th>Upload Image</th>
                          <th>Variation Name </th>
                          {# <th>SKU</th> #}
                          <th>Barcode</th>
                          <th>MRP</th>
                          <th>Dis. Price</th>
                          <th>Membership. Price</th>
                          <th>Priority</th>
                          <th>Status</th> 
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id=\"priceVariationTable\">
                        {% set count = 1 %}
                        {% for res in variation %}
                        <tr>
                           <td>
                              <input type=\"file\" name=\"image{{ res.id }}[]\" multiple></td>
                         </td>
                          <td>
                            <input type=\"hidden\" name=\"id[]\" value=\"{{ res.id }}\" class=\"0{{count}}\">
                               <input type=\"hidden\" name=\"unit[]\" value=\"{{ res.subscription }}\" class=\"unit{{count}}\">
                            <input type=\"hidden\" name=\"variation[]\" value=\"{{ res.variationName }}\" class=\"1{{count}}\">
                            <span class=\"var{{count}}\">{{ res.variationName }}</span> 
                          </td>
                          {# <td>
                            <input type=\"hidden\" name=\"sku[]\" value=\"{{ res.sku }}\" class=\"2{{count}}\"><span class=\"sku{{count}}\">{{ res.sku }}</span>
                          </td> #}
                          <td>
                            <input type=\"hidden\" name=\"sku[]\" value=\"{{ res.sku }}\" class=\"2{{count}}\">
                            <input type=\"hidden\" name=\"weight[]\" value=\"{{ res.weight }}\"  class=\"w{{count}}\">
                            <input type=\"hidden\" name=\"barcode[]\" value=\"{{ res.barcode }}\"  class=\"3{{count}}\"><span class=\"barcode{{count}}\">{{ res.barcode }}</span>
                          </td>
                          <td> 
                            <input type=\"hidden\" name=\"mrp[]\" value=\"{{ res.mrp }}\"  class=\"4{{count}}\">
                            <span class=\"mrp{{count}}\">{% if form.type.vars.value == '1' %} {% set x= res.mrp * menuItem.salePrice / 100 %} {% set xx = x + menuItem.salePrice %} {% if numberFormat == 1 %}{{ xx|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ xx|number_format(2, '.', '') }}{% endif %} {% else %} {% set xx = res.mrp %} {% if numberFormat == 1 %}{{ xx|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ xx|number_format(2, '.', '') }}{% endif %} {% endif %}
                            </span>
                          </td>
                          <td>
                            <input type=\"hidden\" name=\"price[]\" value=\"{{ res.price }}\"  class=\"5{{count}}\">
                            <span class=\"price{{count}}\">
                              {% if form.type.vars.value == '1' %} {% set resp= res.price * xx / 100 %} {% set xs= res.price * resp / 100 %} {% set r = -(resp - xx) %} {% if numberFormat == 1 %}{{ r|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ r|number_format(2, '.', '') }}{% endif %} {% else %}{% set r = res.price %}  {% if numberFormat == 1 %}{{ r|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ r|number_format(2, '.', '') }}{% endif %} {% endif %}
                            </span>
                          </td>
                          <td>
                            <input type=\"hidden\" name=\"membership[]\" value=\"{{ res.membership_price }}\"  class=\"6{{count}}\"><span class=\"membership{{count}}\">  {% if form.type.vars.value == '1' %} {% set resp= res.membership_price * xx / 100 %} {% set xs= res.membership_price * resp / 100 %} {% set member = -(resp - xx) %} {% if numberFormat == 1 %}{{ member|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ member|number_format(2, '.', '') }}{% endif %}{% else %}{% set member = res.membership_price %}  {% if numberFormat == 1 %}{{ member|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ member|number_format(2, '.', '') }}{% endif %} {% endif %}</span>
                          </td>
                          <td>
                            <input type=\"hidden\" name=\"priority[]\" value=\"{{ res.priority }}\"  class=\"7{{count}}\"><span class=\"priority{{count}}\">{{ res.priority }}</span><input type=\"hidden\" name=\"min[]\" value=\"{{ res.minItem }}\"  class=\"8{{count}}\"><input type=\"hidden\" name=\"max[]\" value=\"{{ res.maxItem }}\"  class=\"9{{count}}\"><input type=\"hidden\" name=\"hsn[]\" value=\"{{ res.hsn }}\"  class=\"10{{count}}\"><input type=\"hidden\" name=\"loyalty[]\" value=\"{{ res.loyalty }}\"  class=\"l{{count}}\">
                            <input type=\"hidden\" name=\"cost[]\" value=\"{{ res.cost }}\"  class=\"cost{{count}}\">
                               <input type=\"hidden\" name=\"net_weight[]\" value=\"{{ res.net_weight }}\"  class=\"net{{count}}\">
                          </td>
                          <td> 
                            <span class=\"stn{{ count }}\"> {% if res.status == '0' %} Active {% else %} Inactive {% endif %}</span><input type=\"hidden\" name=\"status[]\" value=\"{{ res.status }}\"  class=\"11{{count}}\">
                          </td>
                          <td>
                            <button type=\"button\"  class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#edit{{count}}\"><i class=\"fa fa-edit\"></i></button>&nbsp;<button type=\"button\" onclick=\"removeVariant(this)\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\"></i></button>
                          </td>
                          <div id=\"edit{{count}}\" class=\"modal\" role=\"dialog\">
                            <div class=\"modal-dialog modal-lg\">
                              <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                </div>
                                <div class=\"modal-body\">
                                  {# <form> #}
                                      <div class=\"form-row\">

  <div class=\"form-group col-8\">
       <label for=\"variation_name\">Variation Name *</label>
  <input type=\"text\" class=\"form-control\" id=\"variation_names{{ count}}\" placeholder=\"1 Kg\" value=\"{{ res.variationName }}\"> 
</div>
  <div class=\"form-group col-4\">
       <label for=\"variation_name\">Unit</label>
  <input type=\"text\" class=\"form-control\" id=\"unit{{ count}}\" placeholder=\"1 Kg\" value=\"{{ res.subscription }}\"> 
</div>
</div>

  <div class=\"\"><br>
  <div class=\"form-row\">

  <div class=\"form-group col-4\">
    <label for=\"priority\">Priority</label>
    <input type=\"text\" class=\"form-control\" id=\"priority{{ count}}\" placeholder=\"priority\"  value=\"{{ res.priority }}\">
  </div>
      <div class=\"form-group col-4\">
    <label for=\"priority\">SKU </label>
    <input type=\"text\" class=\"form-control\" id=\"sku{{ count}}\" placeholder=\"SKU\"  value=\"{{ res.sku }}\">
  </div>
    <div class=\"form-group col-4\">
    <label for=\"priority\">HSN </label>
    <input type=\"text\" class=\"form-control\" id=\"hsn{{ count}}\" placeholder=\"HSN\"  value=\"{{ res.hsn }}\">
  </div>
  </div>
</div>
  <div class=\"form-row\">
  <div class=\"form-group col-md-3\">
    <label for=\"barcode\">barcode </label>
    <input type=\"text\" class=\"form-control\" id=\"barcode{{ count}}\" placeholder=\"barcode\"  value=\"{{ res.barcode }}\">
  </div>
     <div class=\"form-group col-md-3\">
    <label for=\"loyalty\">Loyalty </label>
    <input type=\"text\" class=\"form-control\" id=\"loyalty{{ count}}\" placeholder=\"Loyalty Points\"  value=\"{{ res.loyalty }}\">
  </div>
   <div class=\"form-group col-md-3\">
    <label for=\"barcode\">Gross Weight (in Kg) </label>
    <input type=\"text\" class=\"form-control\" id=\"weight{{ count}}\" placeholder=\"weight\"  value=\"{{ res.weight }}\">
  </div>
   <div class=\"form-group col-md-3\">
    <label for=\"barcode\">Net Weight (in Kg) </label>
    <input type=\"text\" class=\"form-control\" id=\"net_weight{{ count}}\" placeholder=\"net weight\"  value=\"{{ res.net_weight }}\">
  </div>
    
</div>
  <div class=\"form-row\">
     
  <div class=\"form-group col-md-4\">
    <label for=\"min\">Minimum Order Quantity </label>
    <input type=\"text\" class=\"form-control\" id=\"min{{ count}}\" placeholder=\"minimum order Quantity\" value=\"{{res.minItem}}\">
  </div>
  <div class=\"form-group col-md-4\">
    <label for=\"priority\">Maximum Order Quantity</label>
    <input type=\"text\" class=\"form-control\" id=\"max{{ count}}\" placeholder=\"Maximum Order Quantity\" value=\"{{res.maxItem}}\">
  </div>
   <div class=\"form-group col-md-4\">
    <label for=\"priority\">status</label>
    <select class=\"form-control\" id=\"status{{ count}}\">
      <option value='0' {% if res.status == '0' %}selected {% endif %}>Active</option>
      <option value=\"2\" {% if res.status == '2' %}selected {% endif %}>Inactive</option>
    </select>
  </div>
</div>
{% if form.type.vars.value == '1' %}

  <div class=\"form-row\" style=\"display:none;\">
    {% else %}
      <div class=\"form-row sa\">
{% endif %}  <div class=\"form-group col-md-4\">
    <label for=\"mrp\">Actual Price *</label>
    <input type=\"text\" class=\"form-control\" id=\"mrp{{ count}}\" placeholder=\"mrp\"  value=\"{{ res.mrp }}\">
  </div>
  <div class=\"form-group col-md-4\">
    <label for=\"price\">Discounted Price *</label>
    <input type=\"text\" class=\"form-control\" id=\"price{{ count}}\" placeholder=\"price\"  value=\"{{ res.price }}\">
  </div>
    <div class=\"form-group col-md-4\">
    <label for=\"price\">Cost Per Item</label>
    <input type=\"text\" class=\"form-control\" id=\"costprice{{ count}}\" placeholder=\"Cost Per Price\"  value=\"{{ res.cost }}\">
    {% if r != 0 %}
          <small class=\"text\"><b>Margin : <span class=\"margin{{ count }}\">{% set margin=(r-res.cost)/r*100 %} {% if numberFormat == 1 %}{{ margin|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ margin|number_format(2, '.', '') }}{% endif %} </span>% | Profit : <span class=\"profit{{ count }}\">{% set profit=r-res.cost %} {{ profit|round(2, 'floor') }}</span></b></small>
    {% else %}
          <small class=\"text\"><b>Margin : <span class=\"margin{{ count }}\">0</span>% | Profit : <span class=\"profit{{ count }}\">0</span></b></small>
    {% endif %}
         
  </div>
  <div class=\"form-row\">
  <div class=\"form-group col-md-12\">
    <label for=\"price\">Membership Price *</label>
    <input type=\"text\" class=\"form-control\" id=\"membership{{ count}}\" placeholder=\"price\"  value=\"{{ res.membership_price }}\">
  </div>

</div>
      </div>

{% if form.type.vars.value == '1' %}

   <div class=\"form-row fishprice\">
    {% else %}
   <div class=\"form-row fishprice\" style=\"display:none;\">

    {% endif %}  
      <div class=\"form-group col-md-6\">
    <label for=\"price\">MRP in Percentage (eg 40%) *</label>
    <input type=\"text\" class=\"form-control\" id=\"mrps{{ count}}\" placeholder=\"price\"  value=\"{{ res.mrp }}\">
  </div>
   <div class=\"form-group col-md-6\">
    <label for=\"price\">MRP </label>
    <input type=\"text\" class=\"form-control\" id=\"prs{{ count}}\" placeholder=\"price\"  value=\"{% if numberFormat == 1 %}{{ xx|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ xx|number_format(2, '.', '') }}{% endif %}\">
  </div>

       <div class=\"form-group col-md-6\">
    <label for=\"price\">Discounted Price in Percentage (eg 40%) *</label>
    <input type=\"text\" class=\"form-control\" id=\"dprice{{ count}}\" placeholder=\"price\"  value=\"{{ res.price }}\">
  </div>
   <div class=\"form-group col-md-6\">
    <label for=\"price\">Discounted Price</label>
    <input type=\"text\" class=\"form-control\" id=\"dpr{{ count}}\" placeholder=\"price\"  value=\"{% if numberFormat == 1 %}{{ r|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ r|number_format(2, '.', '') }}{% endif %}\">
  </div>
   <div class=\"form-group col-md-12\">
    <label for=\"price\">Cost Per Item</label>
    <input type=\"text\" class=\"form-control\" id=\"costpriceO{{ count}}\" placeholder=\"Cost Per Price\"  value=\"{{ res.cost }}\">
         {% if r != 0 %}
          <small class=\"text\"><b>Margin : <span class=\"margin{{ count }}\">{% set margin=(r-res.cost)/r*100 %} {% if numberFormat == 1 %}{{ margin|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ margin|number_format(2, '.', '') }}{% endif %}</span>% | Profit : <span class=\"profit{{ count }}\">{% set profit=r-res.cost %} {% if numberFormat == 1 %}{{ profit|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ profit|number_format(2, '.', '') }}{% endif %}</span></b></small>
    {% else %}
          <small class=\"text\"><b>Margin : <span class=\"margin{{ count }}\">0</span>% | Profit : <span class=\"profit{{ count }}\">0</span></b></small>
    {% endif %}
  </div>
         <div class=\"form-group col-md-6\">
    <label for=\"price\">Membership Price in Percentage (eg 40%) *</label>
    <input type=\"text\" class=\"form-control\" id=\"dmprice{{ count}}\" placeholder=\"Membership Price\"  value=\"{{ res.membership_price }}\">
  </div>
   <div class=\"form-group col-md-6\">
    <label for=\"price\">Membership Price</label>
    <input type=\"text\" class=\"form-control\" id=\"dmpr{{ count}}\" placeholder=\"Membership Price\"  value=\"{% if numberFormat == 1 %}{{ member|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ member|number_format(2, '.', '') }}{% endif %}\">
  </div>
</div>

<div class=\"form-group\">
    <label for=\"vimg\">Variation Images </label>
    {# <input type=\"file\" class=\"dropify\" name=\"image[]\" multiple> #}
  </div>
  
              {% if variation_images is empty %}
                  {% else %}
                  <div class=\"row\">

                  {% for varimg in variation_images %}

                  {% if varimg is empty %}
                  {% else %}

                    {% for img in varimg %}

                     {% if img is empty %}
                      {% else %}
                  
                      {% if res.id == img.ref %}
                        <div class=\"col-md-3 mb-2\" id=\"imgsec{{img.id}}\">
                          <img src=\"{{img.image}}\" class=\"img-responsive\" width=\"100\" height=\"100\">
                          <span class=\"img-close\" onclick=\"deleteimg({{img.id}})\"><i class=\"fa fa-close\"></i></span>
                        </div>
                      {% endif %}

                      {% endif %}

                     {% endfor %}

                    {% endif %}
                    
                  {% endfor %}

                  {# {% for varimg in variation_images %}
                     {% if varimg.image is defined %} 
                       {% if res.id == varimg.ref %}
                      <div class=\"col-md-3 mb-2\" id=\"imgsec{{varimg.id}}\">
                        <img src=\"{{varimg.image}}\" class=\"img-responsive\" width=\"100\" height=\"100\">
                        <span class=\"img-close\" onclick=\"deleteimg({{varimg.id}})\"><i class=\"fa fa-close\"></i></span>
                      </div>
                      {% endif %}
                    {% endif %}
                  {% endfor %} #}
                  </div>
                {% endif %}



<button type=\"button\" class=\"btn btn-primary\" id=\"addvar{{ count}}\">Save</button>
{# </form>  #}
    </div>
    <div class=\"modal-footer\">
      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
    </div>
  </div>

</div>
</div>
<script type=\"text/javascript\">


\$('#costprice{{count}}').keyup(function(){
var price =\$('#costprice{{count}}').val();
var mrp =\$('#mrp{{count}}').val();
var discount =\$('#price{{count}}').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin{{count}}').html(Math.round(margin,2));
\$('.profit{{count}}').html(Math.round(profit,2));
});
\$('#price{{count}}').keyup(function(){
var price =\$('#costprice{{count}}').val();
var mrp =\$('#mrp{{count}}').val();
var discount =\$('#price{{count}}').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin{{count}}').html(Math.round(margin,2));
\$('.profit{{count}}').html(Math.round(profit,2));
});
\$('#costpriceO{{count}}').keyup(function(){
var price =\$('#costpriceO{{count}}').val();
var mrp =\$('#mrp{{count}}').val();
var discount =\$('#dpr{{count}}').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin{{count}}').html(Math.round(margin,2));
\$('.profit{{count}}').html(Math.round(profit,2));
});
\$('#mrps{{ count }}').keyup(function(){
var x=\$('#pricess').val();
var price=\$('#mrps{{ count }}').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) + eval(res);
\$('#prs{{ count }}').val(fin);

});
\$('#dprice{{ count }}').keyup(function(){
var x=\$('#prs{{ count }}').val();
var price=\$('#dprice{{ count }}').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) - eval(res);
\$('#dpr{{ count }}').val(fin);
//start cost per price code
var prices =\$('#costpriceO{{count}}').val();
var mrp =\$('#mrp{{count}}').val();
var discount =\$('#dpr{{count}}').val();
var margin=(discount-prices)/discount*100;
// var margin =marg
var profit=discount-prices;
\$('.margin{{count}}').html(Math.round(margin,2));
\$('.profit{{count}}').html(Math.round(profit,2));
});
\$('#dmprice{{ count }}').keyup(function(){
var x=\$('#prs{{ count }}').val();
var price=\$('#dmprice{{ count }}').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) - eval(res);
\$('#dmpr{{ count }}').val(fin);
});
\$('#dpr{{ count }}').keyup(function(){
var x=\$('#prs{{ count }}').val();
var price=\$('#dpr{{ count }}').val();
var res=eval(x) - eval(price);
var fin = res/eval(x)*100;
\$('#dprice{{ count }}').val(fin);


//start cost per price code
var prices =\$('#costpriceO{{count}}').val();
var mrp =\$('#mrp{{count}}').val();
var discount =\$('#dpr{{count}}').val();
var margin=(discount-prices)/discount*100;
// var margin =marg
var profit=discount-prices;
\$('.margin{{count}}').html(Math.round(margin,2));
\$('.profit{{count}}').html(Math.round(profit,2));
});
\$('#dmpr{{ count }}').keyup(function(){
var x=\$('#prs{{ count }}').val();
var price=\$('#dmpr{{ count }}').val();
var res=eval(x) - eval(price);
var fin = res/eval(x)*100;
// alert(fin);
\$('#dmprice{{ count }}').val(fin);
});
\$('#prs{{ count }}').keyup(function(){
var x=\$('#pricess').val();
var price=\$('#prs{{ count }}').val();
var res=-(eval(x) - eval(price));
var fin = res/eval(x)*100;
\$('#mrps{{ count }}').val(fin);
});
\$('#addvar{{ count}}').click(function(){
var image=\$('#image');
var x=\$('#appbundle_menuitem_type').val();

if(x=='1')
{
var variation=\$('#variation_names{{ count}}').val();
var mrp=\$('#mrps{{ count}}').val();
var price=\$('#dprice{{ count}}').val();
var membership=\$('#dmprice{{ count}}').val();
  var mrp1=\$('#prs{{ count}}').val();
var price1=\$('#dpr{{ count}}').val();
var membership1=\$('#dmpr{{ count}}').val();
var cost=\$('#costpriceO{{ count}}').val();
}
else
{
  var variation=\$('#variation_names{{ count}}').val();
  var mrp=\$('#mrp{{ count}}').val();
var price=\$('#price{{ count}}').val();
var membership=\$('#membership{{ count}}').val();
var membership1=\$('#membership{{ count}}').val();

  var mrp1=\$('#mrp{{ count}}').val();
var price1=\$('#price{{ count}}').val();
var cost=\$('#costprice{{ count}}').val();

}
var priority=\$('#priority{{ count}}').val();
var barcode=\$('#barcode{{ count}}').val();
var net=\$('#net_weight{{ count}}').val();
var min=\$('#min{{ count}}').val();
var max=\$('#max{{ count}}').val();
var sku=\$('#sku{{ count}}').val();
var hsn=\$('#hsn{{ count}}').val();
var weight=\$('#weight{{ count}}').val();
var status=\$('#status{{ count}}').val();
var loyalty=\$('#loyalty{{ count}}').val();
var unit=\$('#unit{{ count}}').val();

if(variation=='' || mrp == '' || cost == '')
{
  alert('please enter variation name or valid price!');
  return false;
}
var x=\$('#pricess').val();
if(status=='0')
{
  var statusd='Active';

}
else
{
    var statusd='Inactive';

}
// alert(membership);
\$('.var{{count}}').html(variation);
\$('.priority{{count}}').html(priority);
\$('.barcode{{count}}').html(barcode);
\$('.min{{count}}').html(min);
\$('.max{{count}}').html(max);
\$('.mrp{{count}}').html(mrp1);
\$('.price{{count}}').html(price1);
\$('.membership{{count}}').html(membership1);
\$('.sku{{count}}').html(sku);
\$('.hsn{{count}}').html(hsn);
\$('.stn{{count}}').html(statusd);

\$('.1{{count}}').val(variation);
\$('.cost{{count}}').val(cost);
\$('.net{{count}}').val(net);
\$('.2{{count}}').val(sku);
\$('.3{{count}}').val(barcode);
\$('.4{{count}}').val(mrp);
\$('.5{{count}}').val(price);
\$('.6{{count}}').val(membership);
\$('.7{{count}}').val(priority);
\$('.8{{count}}').val(min);
\$('.9{{count}}').val(max);
\$('.10{{count}}').val(hsn);
\$('.11{{count}}').val(status);
\$('.w{{count}}').val(weight);
\$('.l{{count}}').val(loyalty);
\$('.unit{{count}}').val(unit);

\$('#edit{{count}}').fadeOut();

\$('.modal-backdrop').fadeOut();

\$('.modal-open').css({'overflow': 'visible'});
});
</script>
                                          {% set count = count +1 %}
                                      </tr>
                                      {# </form> #}
                                       {% endfor %}
                                      </tbody>
                                  </table>
                              
                          </div>

</div>




                          {# <div class=\"form-actions\">
                              <button type=\"submit\" class=\"btn btn-success\"> <i class=\"fa fa-check\"></i> Save</button>
                              <button type=\"button\" class=\"btn btn-inverse\">Cancel</button>
                          </div>
                      {{ form_widget(form._token) }}
                      {{ form_end(form,{'render_rest':false}) }} #}
                  </div>
              </div>
          </div>
      </div>
      <!-- Row -->
      <!-- Modal -->
<div id=\"variation\" class=\"modal fade\" role=\"dialog\">
<div class=\"modal-dialog modal-lg\">

  <!-- Modal content-->
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
    </div>
    <div class=\"modal-body\">
     {# <form> #}

  <div class=\"form-row\">

   <div class=\"form-group col-8\" >

     <label for=\"variation_name \">Variation Name *</label>
    
   <input type=\"text\" class=\"form-control\" id=\"variation_names\" placeholder=\"1 Kg\"> 
</div>
   <div class=\"form-group col-4\" >

     <label for=\"variation_name \">Unit*</label>
    
   <input type=\"text\" class=\"form-control\" id=\"unit\" placeholder=\"1 Kg\"> 
</div>
    
</div>
  <div class=\"\"><br>
  <div class=\"form-row\">

  <div class=\"form-group col-4\">
    <label for=\"priority\">Priority</label>
    <input type=\"text\" class=\"form-control\" id=\"priority\" placeholder=\"priority\" value=\"0\">
  </div>
      <div class=\"form-group col-4\">
    <label for=\"priority\">SKU </label>
    <input type=\"text\" class=\"form-control\" id=\"sku\" placeholder=\"SKU\">
  </div>
     <div class=\"form-group col-4\">
    <label for=\"priority\">HSN </label>
    <input type=\"text\" class=\"form-control\" id=\"hsn\" placeholder=\"HSN\"  value=\"0\">
  </div>
  </div>
</div>

  <div class=\"form-row\">
  <div class=\"form-group col-md-3\">
    <label for=\"barcode\">barcode </label>
    <input type=\"text\" class=\"form-control\" id=\"barcode\" placeholder=\"barcode\"  value=\"0\">
  </div>
   <div class=\"form-group col-md-3\">
    <label for=\"weight\">Loyalty Points</label>
    <input type=\"text\" class=\"form-control\" id=\"loyalty\" placeholder=\"Loyalty Points\"  value=\"0\">
  </div>
   <div class=\"form-group col-md-3\">
    <label for=\"weight\">Gross Weight (in Kg) </label>
    <input type=\"text\" class=\"form-control\" id=\"weight\" placeholder=\"Gross weight\"  value=\"0\">
  </div>
   <div class=\"form-group col-md-3\">
    <label for=\"weight\">Net Weight (in Kg) </label>
    <input type=\"text\" class=\"form-control\" id=\"net_weight\" placeholder=\"net weight\"  value=\"0\">
  </div>
</div>
  <div class=\"form-row\">
  <div class=\"form-group col-md-4\">
    <label for=\"min\">Minimum Order Quantity </label>
    <input type=\"text\" class=\"form-control\" id=\"min\" placeholder=\"minimum order Quantity\" value=\"1\">
  </div>
  <div class=\"form-group col-md-4\">
    <label for=\"priority\">Maximum Order Quantity *</label>
    <input type=\"text\" class=\"form-control\" id=\"max\" placeholder=\"Maximum Order Quantity\" value=\"10\">
  </div>
  <div class=\"form-group col-md-4\">
    <label for=\"priority\">status</label>
    <select class=\"form-control\" id=\"status\">
      <option value='0'>Active</option>
      <option value=\"2\">Inactive</option>
    </select>
  </div>
</div>
{% if form.type.vars.value == '1' %}

  <div class=\"form-row\" style=\"display:none;\">
    {% else %}
      <div class=\"form-row sa\">
{% endif %}
  <div class=\"form-group col-md-4\">
    <label for=\"mrp\">Actual Price *</label>
    <input type=\"text\" class=\"form-control \" id=\"mrp\" placeholder=\"Actual Price\" value=\"0\">
  </div>
  <div class=\"form-group col-md-4\">
    <label for=\"price\">Discounted Price *</label>
    <input type=\"text\" class=\"form-control \" id=\"price\" placeholder=\"price\" value=\"0\">
  </div>
         <div class=\"form-group col-md-4\">
    <label for=\"price\">Cost Per Item</label>
    <input type=\"text\" class=\"form-control\" id=\"costprice\" placeholder=\"Cost Per Price\"  value=\"0\">
          <small class=\"text\"><b>Margin : <span class=\"margin\"></span>% | Profit : <span class=\"profit\">10</span></b></small>
  </div>
      <div class=\"row\"> 
  <div class=\"form-group col-md-12\">
    <label for=\"price\">Membership Price *</label>
    <input type=\"text\" class=\"form-control \" id=\"membership\" placeholder=\"price\" value=\"0\"> 
  </div>
</div>

</div>

{% if form.type.vars.value == '1' %}

   <div class=\"form-row fishprice\">
    {% else %}
   <div class=\"form-row fishprice\" style=\"display:none;\">

    {% endif %}
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Actual Price in Percentage (eg : 40%)</label>
    <input type=\"text\" class=\"form-control\" id=\"mrps\" placeholder=\"\">
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Actual Price  </label>
    <input type=\"text\" class=\"form-control\" id=\"prs\" placeholder=\"\">
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Discounted Price in Percentage (eg : 40%)</label>
    <input type=\"text\" class=\"form-control\" id=\"dprice\" placeholder=\"\">
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Discounted Price  </label>
    <input type=\"text\" class=\"form-control\" id=\"dpr\" placeholder=\"\">
  </div>
     <div class=\"form-group col-md-12\">
    <label for=\"price\">Cost Per Item</label>
    <input type=\"text\" class=\"form-control\" id=\"costpriceO\" placeholder=\"Cost Per Price\"  value=\"0\">
          <small class=\"text\"><b>Margin : <span class=\"margin\"></span>% | Profit : <span class=\"profit\">10</span></b></small>
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Membership Price in Percentage (eg : 40%)</label>
    <input type=\"text\" class=\"form-control\" id=\"dmprice\" placeholder=\"Membership price in %\">
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"mrp\">Membership Price  </label>
    <input type=\"text\" class=\"form-control\" id=\"dmpr\" placeholder=\"membership price\">
  </div>
</div>
{# <div class=\"form-group\">
    <label for=\"vimg\">Variation Image </label>
    <input type=\"file\" class=\"dropify\" name=\"image[]\" multiple>
  </div> #}
<button type=\"button\" class=\"btn btn-primary\" id=\"addvar\">Add</button>
{# </form>  #}
    </div>
    <div class=\"modal-footer\">
      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
    </div>
  </div>

</div>
</div>
</div>


<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Upload (Allow Multiple)</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            <div class=\"modal-body\">
            <div class=\"custom-file-container\" data-upload-id=\"mySecondImage\">
    <label class=\"custom-file-container__image-clear\" > </label>
    <label class=\"custom-file-container__custom-file\" >
        <input type=\"file\" class=\"custom-file-container__custom-file__custom-file-input\" multiple>
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"10485760\" />
        <span class=\"custom-file-container__custom-file__custom-file-control\"></span>
    </label>
    <div class=\"custom-file-container__image-preview\"></div>
</div> </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\"><i class=\"flaticon-cancel-12\"></i> Discard</button>
                <button type=\"button\" class=\"btn btn-primary\">Save</button>
            </div>
        </div>
    </div>
</div>

        </div>
        <!--col-md-12 end-->

            <div class=\"col-md-3 mb-4\">
           <div class=\"h-100\">
                <div id=\"toggleAccordion\">
                     
                    
                  <div class=\"card right-sidebar-card\">
                      <div class=\"card-header\" id=\"headingOne1\">
                          <section class=\"mb-0 mt-0\">
                              <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionOne\" aria-expanded=\"true\" aria-controls=\"defaultAccordionOne\">
                                  Category <div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                              </div>
                          </section>
                      </div>
                      <div id=\"defaultAccordionOne\" class=\"collapse show\" aria-labelledby=\"headingOne1\" data-parent=\"#toggleAccordion\">
                          <div class=\"card-body right-sidebar-option\">
                            <div class=\"form-group\">
                        
                        <div id=\"toggleAccordion\">
                          <div style=\"Height:250px;overflow-x:auto\">
                            <div id=\"accordion\">
                              <div class=\" card-width\">
                              {% for ca in category %}
                              
                                <div class=\"card-header\">
                                  <section class=\"mb-0 mt-0\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#a{{ ca.id }}\"> <p class=\"mb-2 cat-name\">{{ ca.category_name }}</p></a>
                                  </section>
                                </div>
                                <div id=\"a{{ ca.id }}\" class=\"panel-collapse show\">
                                  <div class=\"\">
                                    {% for sub in ca.SubCategory %}
                                    {% if sub.nested != 0 %}
                                    <div>
                                      <b style=\"background: whitesmoke;padding:2px;width: 100% !important;color: #000;\"> {{ sub.categoryName }}</b>
                                    </div>
                                    {% for sub in sub.nested %}
                                    <div >
                                      <label class=\"checkbox\"><input type=\"checkbox\" value=\"{{ sub.id }}\" name=\"category[]\" {% if sub.id in arr %} checked {% endif %}
                                        /> {{ sub.categoryName }}
                                      </label>
                                    </div>
                                    {% endfor %}
                                    {% else %}
                                    <div >
                                      <label class=\"checkbox\"><input type=\"checkbox\" value=\"{{ sub.id }}\" name=\"category[]\" {% if sub.id in arr %} checked {% endif %}
                                        /> {{ sub.categoryName }}
                                      </label>
                                    </div>
                                    {% endif %}
                                    {% endfor %}
                                  </div>
                                </div>
                              
                              {% endfor %}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                              <!-- <select class=\"form-control form-control-sm\" name=\"payment\">
                                  <option value=\"cod\">Cash On Delivery</option>
                                  <option value=\"sod\">Swipe On Delivery</option>
                                  <option value=\"online\">online Payment</option>
                              </select> -->
                          </div>
                      </div>
                  </div>
                  <div class=\"card right-sidebar-card\">
                      <div class=\"card-header\" id=\"headingTwo1\">
                          <section class=\"mb-0 mt-0\">
                              <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionTwo\" aria-expanded=\"true\" aria-controls=\"defaultAccordionTwo\">
                                  Featued Image<div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                              </div>
                          </section>
                      </div>
                      <div id=\"defaultAccordionTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo1\" data-parent=\"#toggleAccordion\">
                          <div class=\"card-body right-sidebar-option\">
                                  <div class=\"row\">
                    {% form_theme form '@AppBundle/Themes/file.html.twig' %}
                    <div class=\"form-group margin-bottom\">
                      <!-- {{ form_label(form.itemFeaturedImageFile, \"Featured image\",{'label_attr':{'class':'m-l-20'}}) }} -->
                      {% set menuItemPic = \"\" %}
                      {% if menuItem.itemFeaturedImage != null %}
                      {% set menuItemPic = '/uploads/items/images/'~ menuItem.itemFeaturedImage %}
                      {% endif %}
                      {{ form_row(form.itemFeaturedImageFile,{'attr':{'data-default-file':menuItemPic}}) }}
                    </div>
                  </div>
                          </div>
                      </div>
                  </div>
                  <div class=\"card right-sidebar-card\">
                      <div class=\"card-header\" id=\"headingThree1\">
                          <section class=\"mb-0 mt-0\">
                          <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionThree\" aria-expanded=\"false\" aria-controls=\"defaultAccordionThree\">
                              Select Brand<div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                          </div>
                          </section>
                      </div>

                     
                      <div id=\"defaultAccordionThree\" class=\"collapse show\" aria-labelledby=\"headingThree1\" data-parent=\"#toggleAccordion\">
                          <div class=\"card-body right-sidebar-option\">
                             <div class=\"row form-row\">
                      <div class=\"col-md-12 form-group margin-bottom\">
                          <div class=\"form-group\">
                      
                      <select class=\"form-control form-control-sm select\" id=\"appbundle_menuitem_brand\" name=\"appbundle_menuitem[brand]\">
                        {% for res in brands  %}
                        <option value=\"{{ res.id }}\" {% if res.id == form.vars.value.brand  %} selected {% endif %}>{{ res.categoryName }}</option>
                        {% endfor %}
                      </select>
                    </div>
                      </div>
                    </div>
                          </div>
                      </div>
                  </div>
                  <button type=\"submit\" class=\"btn btn-primary btn-sm btn-block mb-2 savefont\"> <i class=\"fa fa-check\"></i> Save</button>
                  
                </div>
            </div>
        </div>
          
                  </div>
      </div>
    </div>
                  {# <div class=\"layout-px-spacing\">
                  <div class=\"col-md-12\">
                    <div class=\"card card-outline-info\">
                      <div class=\"card-body\">
                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-success\"> <i class=\"fa fa-check\"></i> Save</button>
                            <button type=\"button\" onclick=\"window.history.back();\" class=\"btn btn-inverse\">Back</button>
                        </div>
                      </div>
                    </div>
                    </div>
                    </div>
                      {{ form_widget(form._token) }}
                      {{ form_end(form,{'render_rest':false}) }} #}

                       {{ form_widget(form._token) }}
                      {{ form_end(form,{'render_rest':false}) }}
            

    
   {% endblock %}


{% block scripts %}

<script src=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.js\"></script>
<script src=\"/assets/plugins/moment/moment.js\"></script>
<script src=\"/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js\"></script>
<script src=\"/assets/js/colorpicker.js\"></script>

<script>
\$('#appbundle_menuitem_type').change(function(){
var x=\$('#appbundle_menuitem_type').val();
if(x=='1')
{
  \$('.hides').hide().prop('required',false);
    \$('.fishprice').show();
\$('.sa').hide().prop('required',false);
}
else
{
    \$('.hides').show();
    \$('.fishprice').hide().prop('required',false);
\$('.sa').show();

}
});

\$('#costpriceO').keyup(function(){
var price =\$('#costpriceO').val();
var mrp =\$('#mrp').val();
var discount =\$('#dpr').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin').html(Math.round(margin,2));
\$('.profit').html(Math.round(profit,2));
});
\$('#costprice').keyup(function(){
var price =\$('#costprice').val();
var mrp =\$('#mrp').val();
var discount =\$('#price').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin').html(Math.round(margin,2));
\$('.profit').html(Math.round(profit,2));
});
\$('#price').keyup(function(){
var price =\$('#costprice').val();
var mrp =\$('#mrp').val();
var discount =\$('#price').val();
var margin=(discount-price)/discount*100;
// var margin =marg
var profit=discount-price;
\$('.margin').html(Math.round(margin,2));
\$('.profit').html(Math.round(profit,2));
});
\$('#mrps').keyup(function(){
var x=\$('#pricess').val();
var price=\$('#mrps').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) + eval(res);
\$('#prs').val(fin);
});
\$('#prs').keyup(function(){
var x=\$('#pricess').val();
var price=\$('#prs').val();
var res=-(eval(x) - eval(price));
var fin = res/eval(x)*100;

\$('#mrps').val(fin);
});
\$('#dprice').keyup(function(){
var x=\$('#prs').val();
var price=\$('#dprice').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) - eval(res);

\$('#dpr').val(fin);

//start cost per price code
var prices =\$('#costpriceO').val();
var mrp =\$('#mrp').val();
var discount =\$('#dpr').val();
var margin=(discount-prices)/discount*100;
// var margin =marg
var profit=discount-prices;
\$('.margin').html(Math.round(margin,2));
\$('.profit').html(Math.round(profit,2));

});
\$('#dpr').keyup(function(){
var x=\$('#prs').val();
var price=\$('#dpr').val();
var res=eval(x) - eval(price);
var fin = res/eval(x)*100;

\$('#dprice').val(fin);

//start cost per price code
var prices =\$('#costpriceO').val();
var mrp =\$('#mrp').val();
var discount =\$('#dpr').val();
var margin=(discount-prices)/discount*100;
// var margin =marg
var profit=discount-prices;
\$('.margin').html(Math.round(margin,2));
\$('.profit').html(Math.round(profit,2));
});
\$('#dmprice').keyup(function(){
var x=\$('#prs').val();
var price=\$('#dmprice').val();
var res=eval(price) * eval(x) / 100;

var fin=eval(x) - eval(res);

\$('#dmpr').val(fin);

});
\$('#dmpr').keyup(function(){
var x=\$('#prs').val();
var price=\$('#dmpr').val();
var res=eval(x) - eval(price);
var fin = res/eval(x)*100;

\$('#dmprice').val(fin);
});
\$('#addvar').click(function(){

var image=\$('#image');
var x=\$('#appbundle_menuitem_type').val();
if(x=='1')
{
var variation=\$('#variation_names').val();
var mrp=\$('#mrps').val();
var price=\$('#dprice').val();
var membership=\$('#dmprice').val();
  var mrp1=\$('#prs').val();
var price1=\$('#dpr').val();
var cost =\$('#costpriceO').val();

}
else
{
  var variation=\$('#variation_names').val();
  var mrp=\$('#mrp').val();
var price=\$('#price').val();
  var mrp1=\$('#prs').val();
var price1=\$('#dpr').val();
var membership=\$('#membership').val();
var cost =\$('#costprice').val();

}
var priority=\$('#priority').val();
var barcode=\$('#barcode').val();
var weight=\$('#weight').val();
var net=\$('#net_weight').val();
var min=\$('#min').val();
var max=\$('#max').val();

var sku=\$('#sku').val();
var hsn=\$('#hsn').val();
var unit=\$('#unit').val();
var status=\$('#status').val();
var loyalty=\$('#loyalty').val();

if(status=='0')
{
  var statusd='Active';

}
else
{
    var statusd='Inactive';

}
if(variation=='' || mrp == '' || cost == '')
{
  alert('please enter variation name or valid price!');
  return false;
}
// var x = \$(\"#image\");
//      y = x.clone();
//  x.attr(\"id\", \"fileOld\");
//  y.insertAfter(\".n\");
// priceVariationTable
var x=\$('#pricess').val();
// var price=\$('#mrps').val();
// var res=eval(price) * eval(x) / 100;

// var fin=eval(x) + eval(res);
\$('#priceVariationTable').append('<tr><td></td><td><input type=\"hidden\" name=\"variation[]\" value=\"'+variation+'\"><input type=\"hidden\" name=\"unit[]\" value=\"'+unit+'\">'+variation+'</td><td><input type=\"hidden\" name=\"hsn[]\" value=\"'+hsn+'\"><input type=\"hidden\" name=\"sku[]\" value=\"'+sku+'\"><input type=\"hidden\" name=\"barcode[]\" value=\"'+barcode+'\"><input type=\"hidden\" name=\"weight[]\" value=\"'+weight+'\">'+barcode+'</td><td><input type=\"hidden\" name=\"mrp[]\" value=\"'+mrp+'\">'+mrp1+'</td><td><input type=\"hidden\" name=\"price[]\" value=\"'+price+'\">'+price1+'</td><td><input type=\"hidden\" name=\"membership[]\" value=\"'+membership+'\">'+membership+'</td><td><input type=\"hidden\" name=\"priority[]\" value=\"'+priority+'\">'+priority+'<input type=\"hidden\" name=\"min[]\" value=\"'+min+'\"><input type=\"hidden\" name=\"max[]\" value=\"'+max+'\"></td><td><input type=\"hidden\" name=\"loyalty[]\" value=\"'+loyalty+'\"><input type=\"hidden\" name=\"cost[]\" value=\"'+cost+'\"><input type=\"hidden\" name=\"net_weight[]\" value=\"'+net+'\"><input type=\"hidden\" name=\"status[]\" value=\"'+status+'\">'+statusd+'</td><td><button type=\"button\" onclick=\"removeVariant(this)\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash\"></i></button></td></tr>');
var variation=\$('#variation_name').val('');
var priority=\$('#priority').val('0');
var barcode=\$('#barcode').val('');

var mrp=\$('#mrp').val(0);
var price=\$('#price').val(0);
var membership=\$('#membership').val(0);
var sku=\$('#sku').val('');
});
      \$indexMesure=1;
      \$(document).ready(function() {



          \$collectionHolder = \$('#priceVariationTable');
  
          // count the current form inputs we have (e.g. 2), use that as the new
          // index when inserting a new item (e.g. 2)
          \$indexMesure = \$collectionHolder.find(':input').length;
          // Basic
          \$('.dropify').dropify();
          // Translated
          \$('.dropify-fr').dropify({
              messages: {
                  default: 'Glissez-déposez un fichier ici ou cliquez',
                  replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                  remove: 'Supprimer',
                  error: 'Désolé, le fichier trop volumineux'
              }
          });
  
          // Used events
          var drEvent = \$('#input-file-events').dropify();
  
          drEvent.on('dropify.beforeClear', function(event, element) {
              return confirm(\"Do you really want to delete \\\"\" + element.file.name + \"\\\" ?\");
          });
  
          drEvent.on('dropify.afterClear', function(event, element) {
              alert('File deleted');
          });
  
          drEvent.on('dropify.errors', function(event, element) {
              console.log('Has Errors');
          });
  
          var drDestroy = \$('#input-file-to-destroy').dropify();
          drDestroy = drDestroy.data('dropify')
          \$('#toggleDropify').on('click', function(e) {
              e.preventDefault();
              if (drDestroy.isDropified()) {
                  drDestroy.destroy();
              } else {
                  drDestroy.init();
              }
          })
      });

  function addNewPriceVeriation(){
      \$('#priceVar').attr('style','');
          // Get the ul that holds the collection of tags
      \$collectionHolder = \$('#priceVariationTable');

      var \$newFormLi=\"\";
      var \$holder=\$('div.prototype');
      // Get the data-prototype explained earlier
      var prototype = \$holder.data('prototype');

      // get the new index
      var index = \$indexMesure;
      \$indexMesure= \$indexMesure + 1;

      // Replace '__name__' in the prototype's HTML to
      // instead be a number based on how many items we have
      var newForm = prototype.replace(/__name__/g, index);

      // increase the index with one for the next item
      \$collectionHolder.data('index', index + 1);
      
      // Display the form in the page in an li, before the \"Add a tag\" link li
      \$newFormLi = \$('#priceVariationTable').prepend(newForm);

  }

  function removeVariant(obj){
      \$(obj).parent().parent().remove();
  }

    function deleteimg(id){
    var out ={'id':id}; 

    var r = confirm(\"Do you really want to delete this image?\");
    if (r == true) {

      \$.ajax({
          type: \"POST\",
          url: \"/api/app-manager/get-functionality/delete-variation-images/\"+id,
          data: out,
          success: function (res, dataType) {
            \$('#imgsec'+id).hide().prop('required',false);
          },
          error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert('Error : ' + errorThrown);
          }
      });
     
    } else {
      
    }

  }
</script>

<script>
  
      \$(document).ready(function() {
\$('.multipleSelect').fastselect();
});
      </script>
{% endblock %}", "AppBundle:Restaurant:Menu/addNew.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Restaurant/Menu/addNew.html.twig");
    }
}
