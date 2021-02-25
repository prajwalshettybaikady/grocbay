<?php

/* AppBundle:Admin:Promocode/promoForm.html.twig */
class __TwigTemplate_52d21bc4c1eda3da18967f02270ed40f7d77942a5b28bb6236d3fb2c2d6edbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Promocode/promoForm.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AppBundle/Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b027ab8c3ffc0d87735304ed8949c3906413a02756fc58315b8313755314ef69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b027ab8c3ffc0d87735304ed8949c3906413a02756fc58315b8313755314ef69->enter($__internal_b027ab8c3ffc0d87735304ed8949c3906413a02756fc58315b8313755314ef69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Promocode/promoForm.html.twig"));

        $__internal_584c631efad42f69faf155ee788e23602d76d8a3aa720361bc0cb67f60039b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584c631efad42f69faf155ee788e23602d76d8a3aa720361bc0cb67f60039b59->enter($__internal_584c631efad42f69faf155ee788e23602d76d8a3aa720361bc0cb67f60039b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Promocode/promoForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b027ab8c3ffc0d87735304ed8949c3906413a02756fc58315b8313755314ef69->leave($__internal_b027ab8c3ffc0d87735304ed8949c3906413a02756fc58315b8313755314ef69_prof);

        
        $__internal_584c631efad42f69faf155ee788e23602d76d8a3aa720361bc0cb67f60039b59->leave($__internal_584c631efad42f69faf155ee788e23602d76d8a3aa720361bc0cb67f60039b59_prof);

    }

    // line 4
    public function block_styles($context, array $blocks = array())
    {
        $__internal_648a1aa24b374434f7322d4ec800cb9fe1d5fba395741d9aaeb47bd0117fb9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648a1aa24b374434f7322d4ec800cb9fe1d5fba395741d9aaeb47bd0117fb9f7->enter($__internal_648a1aa24b374434f7322d4ec800cb9fe1d5fba395741d9aaeb47bd0117fb9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_a4a3ba39c1880151eca92bf111aa0a595d79295535c9d68a7408bdc11e59af95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a3ba39c1880151eca92bf111aa0a595d79295535c9d68a7408bdc11e59af95->enter($__internal_a4a3ba39c1880151eca92bf111aa0a595d79295535c9d68a7408bdc11e59af95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 5
        echo "
<style>
    [type=checkbox]:checked, [type=checkbox]:not(:checked){
        position: relative;
        left: auto;
        opacity: 1;
    }
     .fstElement { font-size: 9px; }
            .fstToggleBtn { min-width: 16.5em; }

            .submitBtn { display: none; }

            .fstMultipleMode { display: block; }
            .fstMultipleMode .fstControls { width: 100%; }

</style>
";
        
        $__internal_a4a3ba39c1880151eca92bf111aa0a595d79295535c9d68a7408bdc11e59af95->leave($__internal_a4a3ba39c1880151eca92bf111aa0a595d79295535c9d68a7408bdc11e59af95_prof);

        
        $__internal_648a1aa24b374434f7322d4ec800cb9fe1d5fba395741d9aaeb47bd0117fb9f7->leave($__internal_648a1aa24b374434f7322d4ec800cb9fe1d5fba395741d9aaeb47bd0117fb9f7_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_40fcbd73376fb627e9b63aa2e5c46d837f40ba54b31105f4e0af1959d61e5ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40fcbd73376fb627e9b63aa2e5c46d837f40ba54b31105f4e0af1959d61e5ec7->enter($__internal_40fcbd73376fb627e9b63aa2e5c46d837f40ba54b31105f4e0af1959d61e5ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbe3a80b45f7e2fcb2e6bff03952e76397b0d0fe88da7578d447b7fef8ed814f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe3a80b45f7e2fcb2e6bff03952e76397b0d0fe88da7578d447b7fef8ed814f->enter($__internal_bbe3a80b45f7e2fcb2e6bff03952e76397b0d0fe88da7578d447b7fef8ed814f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo " <!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card card-outline-info\">
                <div class=\"card-header\">
                    <h4 class=\"m-b-0 text-white\">Promocode Update Panel
                        <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_promocode");
        echo "\" class=\"btn btn-primary btn-sm pull-right\">Back to the list</a>
                    </h4>
                </div>
                <div class=\"card-body\">
                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 37
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@AppBundle/Themes/widget.html.twig"));
        // line 38
        echo "                        <div class=\"form-body\">
                              <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label', array("label" => "Promocode Type"));
        echo "
                                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "")));
        echo " 
                                    </div>
                                </div>
                            </div>
                            <div class=\"row p-t-10\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promoCode", array()), 'label', array("label" => "Promocode"));
        echo "
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promoCode", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "eg: APP0101")));
        echo " 
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "discountType", array()), 'label', array("label" => "Discount type"));
        echo "
                                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "discountType", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "9918625689")));
        echo " 
                                    </div>
                                </div>
                                <!--/span-->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "discountValue", array()), 'label', array("label" => "Discount value(Rs. / %)"));
        echo "
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "discountValue", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "(optional)")));
        echo "
                                    </div>
                                </div>
                                 
                                <!--/span-->
                            </div>
                              <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maxDiscountAmount", array()), 'label', array("label" => "Max Discount Value"));
        echo "
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maxDiscountAmount", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "")));
        echo " 
                                    </div>
                                </div>
                                <!--/span-->
                                
                                 <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maxDiscount", array()), 'label', array("label" => "Cashback Amount
                                    "));
        // line 85
        echo "
                                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maxDiscount", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "(0 for unlimited)")));
        echo "
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usageType", array()), 'label', array("label" => "Use type(Per customer)"));
        echo "
                                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usageType", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "9918625689")));
        echo " 
                                    </div>
                                </div>
                                <!--/span-->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usageLimit", array()), 'label', array("label" => "Number of limit(Per customer)"));
        echo "
                                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usageLimit", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "(optional)")));
        echo "
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minOrderAmountValidation", array()), 'label', array("label" => "Consider min. order amount"));
        echo "
                                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minOrderAmountValidation", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "9918625689")));
        echo " 
                                    </div>
                                </div>
                                <!--/span-->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minOrderAmount", array()), 'label', array("label" => "Minimum order amount"));
        echo "
                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minOrderAmount", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Sample Restaurant")));
        echo "
                                    </div>  
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", array()), 'label', array("label" => "Promocode Active Status"));
        echo "
                                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", array()), 'row', array("attr" => array("placeholder" => "Doe", "data-on-text" => "Active", "data-off-text" => "Inactive")));
        echo "
                                </div>
                            </div>
                            <!--/row-->
                            <h3>Select the timespan</h3>
                            <!--/row-->
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "startDate", array()), 'label', array("label" => "Start date"));
        echo "
                                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "startDate", array()), 'row', array("attr" => array("class" => "form-control")));
        echo " 
                                    </div>
                                </div>
                                <!--/span-->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endDate", array()), 'label', array("label" => "End date"));
        echo "
                                        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endDate", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <h3>Target users</h3>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "newUsersOnly", array()), 'label', array("label" => "Apply only for new users"));
        echo "
                                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "newUsersOnly", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "eg: APP0101")));
        echo " 
                                    </div>
                                </div>
                            </div>
                            <div class=\"row p-t-10\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        ";
        // line 163
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promocodeFor", array()), 'label', array("label" => "Apply Promocode For"));
        echo "
                                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promocodeFor", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "eg: APP0101", "id" => "changestatus")));
        echo " 
                                    </div>
                                </div>
                            </div>
                            <div class=\"row menuitem\" ";
        // line 168
        if (($this->getAttribute(($context["promocode"] ?? $this->getContext($context, "promocode")), "promocodeFor", array()) == "0")) {
            echo " style=\"display:block;\" ";
        } else {
            echo " style=\"display:none;\" ";
        }
        echo ">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                       <label>Select item</label>
   <select class=\"multipleSelect\" multiple id=\"items\">
  ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuitem"] ?? $this->getContext($context, "menuitem")));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 174
            echo "  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "id", array()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => $this->getAttribute(($context["promocode"] ?? $this->getContext($context, "promocode")), "promocodeFor", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                echo " ";
                if (($context["role"] == $this->getAttribute($context["me"], "id", array()))) {
                    echo " selected ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "itemName", array()), "html", null, true);
            echo " - ( ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "variationName", array()), "html", null, true);
            echo ")</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "    </select>
                                    </div> 
                                </div>
                            </div>
                             <div class=\"row category\"  ";
        // line 180
        if (($this->getAttribute(($context["promocode"] ?? $this->getContext($context, "promocode")), "promocodeFor", array()) == "1")) {
            echo " style=\"display:block;\" ";
        } else {
            echo " style=\"display:none;\" ";
        }
        echo ">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                       <label>Select Category</label>
   <select class=\"multipleSelect\" id=\"cats\" multiple >
  ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? $this->getContext($context, "category")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 186
            echo "  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["promocode"] ?? $this->getContext($context, "promocode")), "items", array()) == $this->getAttribute($context["cat"], "id", array()))) {
                echo " selected ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "categoryName", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcat"] ?? $this->getContext($context, "subcat")));
        foreach ($context['_seq'] as $context["_key"] => $context["scat"]) {
            // line 189
            echo "  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["scat"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["promocode"] ?? $this->getContext($context, "promocode")), "items", array()) == $this->getAttribute($context["scat"], "id", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["scat"], "child", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["scat"], "main", array()), "html", null, true);
            echo ")</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "    </select>
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-success\"> <i class=\"fa fa-check\"></i> Save</button>
                            <button type=\"reset\" class=\"btn btn-inverse\">Cancel</button>
                        </div>
                    ";
        // line 202
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    ";
        // line 203
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    
";
        
        $__internal_bbe3a80b45f7e2fcb2e6bff03952e76397b0d0fe88da7578d447b7fef8ed814f->leave($__internal_bbe3a80b45f7e2fcb2e6bff03952e76397b0d0fe88da7578d447b7fef8ed814f_prof);

        
        $__internal_40fcbd73376fb627e9b63aa2e5c46d837f40ba54b31105f4e0af1959d61e5ec7->leave($__internal_40fcbd73376fb627e9b63aa2e5c46d837f40ba54b31105f4e0af1959d61e5ec7_prof);

    }

    // line 216
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_704aa87688ab267b0ebedc300df1e2e2fc4e45bc97abd6c70c4faf128e03769e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704aa87688ab267b0ebedc300df1e2e2fc4e45bc97abd6c70c4faf128e03769e->enter($__internal_704aa87688ab267b0ebedc300df1e2e2fc4e45bc97abd6c70c4faf128e03769e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_af8081ba43c2b9bc247b1a2905346d64fb35c135925c07ca8f93c56c6651c9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8081ba43c2b9bc247b1a2905346d64fb35c135925c07ca8f93c56c6651c9b3->enter($__internal_af8081ba43c2b9bc247b1a2905346d64fb35c135925c07ca8f93c56c6651c9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 217
        echo "

<script>
        \$(function() {
            \$( \"#appbundle_promocode_startDate\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });
        });
    \$(function() {
            \$( \"#appbundle_promocode_endDate\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });
        });
        \$(document).ready(function() {
\$('.multipleSelect').fastselect();

\$('#appbundle_promocode_promocodeFor').change(function(){
var id=\$('#appbundle_promocode_promocodeFor').val();
if(id=='0')
{
    \$('.menuitem').show();
    \$('.category').hide();
    \$('#cats').attr('name', 'test');
    \$('#items').attr('name', 'item[]');

}
else if(id=='1')
{
    \$('.menuitem').hide();
    \$('.category').show();
    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item[]');
}
else
{
    \$('.menuitem').hide();
    \$('.category').hide();
        \$('#items').attr('name', '');
    \$('#cats').attr('name', '');
}
});
            \$('#appbundle_promocode_applicableRestaurant').multiselect({
                    nonSelectedText: 'Click Here',
                    enableFiltering: true,
                    enableCaseInsensitiveFiltering: true,
                    buttonWidth:'100%',
                    includeSelectAllOption: true,
                    selectAllValue: 'select-all-value'
                });

            \$('#appbundle_promocode_startDate').bootstrapMaterialDatePicker({ format : 'D-MM-Y', time: false, date: true });
            \$('#appbundle_promocode_endDate').bootstrapMaterialDatePicker({ format : 'D-MM-Y', time: false, date: true });


            \$(\"#appbundle_promocode_isActive\").bootstrapSwitch();
        });
</script>

";
        
        $__internal_af8081ba43c2b9bc247b1a2905346d64fb35c135925c07ca8f93c56c6651c9b3->leave($__internal_af8081ba43c2b9bc247b1a2905346d64fb35c135925c07ca8f93c56c6651c9b3_prof);

        
        $__internal_704aa87688ab267b0ebedc300df1e2e2fc4e45bc97abd6c70c4faf128e03769e->leave($__internal_704aa87688ab267b0ebedc300df1e2e2fc4e45bc97abd6c70c4faf128e03769e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Promocode/promoForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 217,  472 => 216,  450 => 203,  446 => 202,  433 => 191,  416 => 189,  411 => 188,  396 => 186,  392 => 185,  380 => 180,  374 => 176,  349 => 174,  345 => 173,  333 => 168,  326 => 164,  322 => 163,  312 => 156,  308 => 155,  295 => 145,  291 => 144,  282 => 138,  278 => 137,  266 => 128,  262 => 127,  251 => 119,  247 => 118,  238 => 112,  234 => 111,  222 => 102,  218 => 101,  209 => 95,  205 => 94,  194 => 86,  191 => 85,  188 => 84,  178 => 77,  174 => 76,  162 => 67,  158 => 66,  149 => 60,  145 => 59,  134 => 51,  130 => 50,  120 => 43,  116 => 42,  110 => 38,  108 => 37,  104 => 36,  97 => 32,  86 => 23,  77 => 22,  51 => 5,  42 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@AppBundle/Admin/base.html.twig\" %}


{% block styles %}

<style>
    [type=checkbox]:checked, [type=checkbox]:not(:checked){
        position: relative;
        left: auto;
        opacity: 1;
    }
     .fstElement { font-size: 9px; }
            .fstToggleBtn { min-width: 16.5em; }

            .submitBtn { display: none; }

            .fstMultipleMode { display: block; }
            .fstMultipleMode .fstControls { width: 100%; }

</style>
{% endblock %}
{% block body %}
 <!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card card-outline-info\">
                <div class=\"card-header\">
                    <h4 class=\"m-b-0 text-white\">Promocode Update Panel
                        <a href=\"{{ path('manage_promocode') }}\" class=\"btn btn-primary btn-sm pull-right\">Back to the list</a>
                    </h4>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form) }}
                    {% form_theme form '@AppBundle/Themes/widget.html.twig' %}
                        <div class=\"form-body\">
                              <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.type, \"Promocode Type\") }}
                                        {{ form_row(form.type,{'attr':{'class':'form-control','placeholder':''}}) }} 
                                    </div>
                                </div>
                            </div>
                            <div class=\"row p-t-10\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.promoCode, \"Promocode\") }}
                                        {{ form_row(form.promoCode,{'attr':{'class':'form-control','placeholder':'eg: APP0101'}}) }} 
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.discountType, \"Discount type\") }}
                                        {{ form_row(form.discountType,{'attr':{'class':'form-control','placeholder':'9918625689'}}) }} 
                                    </div>
                                </div>
                                <!--/span-->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.discountValue, \"Discount value(Rs. / %)\") }}
                                        {{ form_row(form.discountValue,{'attr':{'class':'form-control','placeholder':'(optional)'}}) }}
                                    </div>
                                </div>
                                 
                                <!--/span-->
                            </div>
                              <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.maxDiscountAmount, \"Max Discount Value\") }}
                                        {{ form_row(form.maxDiscountAmount,{'attr':{'class':'form-control','placeholder':''}}) }} 
                                    </div>
                                </div>
                                <!--/span-->
                                
                                 <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.maxDiscount, \"Cashback Amount
                                    \") }}
                                        {{ form_row(form.maxDiscount,{'attr':{'class':'form-control','placeholder':'(0 for unlimited)'}}) }}
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.usageType, \"Use type(Per customer)\") }}
                                        {{ form_row(form.usageType,{'attr':{'class':'form-control','placeholder':'9918625689'}}) }} 
                                    </div>
                                </div>
                                <!--/span-->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.usageLimit, \"Number of limit(Per customer)\") }}
                                        {{ form_row(form.usageLimit,{'attr':{'class':'form-control','placeholder':'(optional)'}}) }}
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.minOrderAmountValidation, \"Consider min. order amount\") }}
                                        {{ form_row(form.minOrderAmountValidation,{'attr':{'class':'form-control','placeholder':'9918625689'}}) }} 
                                    </div>
                                </div>
                                <!--/span-->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.minOrderAmount, \"Minimum order amount\") }}
                                        {{ form_row(form.minOrderAmount,{'attr':{'class':'form-control','placeholder':'Sample Restaurant'}}) }}
                                    </div>  
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    {{ form_label(form.isActive, \"Promocode Active Status\") }}
                                    {{ form_row(form.isActive,{'attr':{'placeholder':'Doe',\"data-on-text\":\"Active\",\"data-off-text\":\"Inactive\"}}) }}
                                </div>
                            </div>
                            <!--/row-->
                            <h3>Select the timespan</h3>
                            <!--/row-->
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.startDate, \"Start date\") }}
                                        {{ form_row(form.startDate,{'attr':{'class':'form-control'}}) }} 
                                    </div>
                                </div>
                                <!--/span-->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.endDate, \"End date\") }}
                                        {{ form_row(form.endDate,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <h3>Target users</h3>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.newUsersOnly, \"Apply only for new users\") }}
                                        {{ form_row(form.newUsersOnly,{'attr':{'class':'form-control','placeholder':'eg: APP0101'}}) }} 
                                    </div>
                                </div>
                            </div>
                            <div class=\"row p-t-10\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        {{ form_label(form.promocodeFor, \"Apply Promocode For\") }}
                                        {{ form_row(form.promocodeFor,{'attr':{'class':'form-control','placeholder':'eg: APP0101',\"id\":'changestatus'}}) }} 
                                    </div>
                                </div>
                            </div>
                            <div class=\"row menuitem\" {% if promocode.promocodeFor ==  '0'  %} style=\"display:block;\" {% else %} style=\"display:none;\" {% endif %}>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                       <label>Select item</label>
   <select class=\"multipleSelect\" multiple id=\"items\">
  {% for me in menuitem %}
  <option value=\"{{ me.id }}\" {% for role in [promocode.promocodeFor] %} {% if role ==  me.id  %} selected {% endif %}{% endfor %}>{{ me.itemName }} - ( {{ me.variationName }})</option>
  {% endfor %}
    </select>
                                    </div> 
                                </div>
                            </div>
                             <div class=\"row category\"  {% if promocode.promocodeFor ==  '1'  %} style=\"display:block;\" {% else %} style=\"display:none;\" {% endif %}>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                       <label>Select Category</label>
   <select class=\"multipleSelect\" id=\"cats\" multiple >
  {% for cat in category %}
  <option value=\"{{ cat.id }}\" {% if promocode.items == cat.id %} selected {% endif %} >{{ cat.categoryName }}</option>
  {% endfor %}
    {% for scat in subcat %}
  <option value=\"{{ scat.id }}\" {% if promocode.items == scat.id %} selected {% endif %}>{{ scat.child }} ({{ scat.main }})</option>
  {% endfor %}
    </select>
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-success\"> <i class=\"fa fa-check\"></i> Save</button>
                            <button type=\"reset\" class=\"btn btn-inverse\">Cancel</button>
                        </div>
                    {{ form_end(form) }}
                    {{ form_rest(form) }}
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    
{% endblock %}

{% block scripts %}


<script>
        \$(function() {
            \$( \"#appbundle_promocode_startDate\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });
        });
    \$(function() {
            \$( \"#appbundle_promocode_endDate\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });
        });
        \$(document).ready(function() {
\$('.multipleSelect').fastselect();

\$('#appbundle_promocode_promocodeFor').change(function(){
var id=\$('#appbundle_promocode_promocodeFor').val();
if(id=='0')
{
    \$('.menuitem').show();
    \$('.category').hide();
    \$('#cats').attr('name', 'test');
    \$('#items').attr('name', 'item[]');

}
else if(id=='1')
{
    \$('.menuitem').hide();
    \$('.category').show();
    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item[]');
}
else
{
    \$('.menuitem').hide();
    \$('.category').hide();
        \$('#items').attr('name', '');
    \$('#cats').attr('name', '');
}
});
            \$('#appbundle_promocode_applicableRestaurant').multiselect({
                    nonSelectedText: 'Click Here',
                    enableFiltering: true,
                    enableCaseInsensitiveFiltering: true,
                    buttonWidth:'100%',
                    includeSelectAllOption: true,
                    selectAllValue: 'select-all-value'
                });

            \$('#appbundle_promocode_startDate').bootstrapMaterialDatePicker({ format : 'D-MM-Y', time: false, date: true });
            \$('#appbundle_promocode_endDate').bootstrapMaterialDatePicker({ format : 'D-MM-Y', time: false, date: true });


            \$(\"#appbundle_promocode_isActive\").bootstrapSwitch();
        });
</script>

{% endblock %}", "AppBundle:Admin:Promocode/promoForm.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Promocode/promoForm.html.twig");
    }
}
