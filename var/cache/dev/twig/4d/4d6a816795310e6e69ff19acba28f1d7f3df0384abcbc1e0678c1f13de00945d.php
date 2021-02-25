<?php

/* AppBundle:Advertisement:adForm.html.twig */
class __TwigTemplate_3e82e041fec845c8db252aa2c9cc90a6b6cc98285c82dd306b0a3e2516f45419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Advertisement:adForm.html.twig", 1);
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
        $__internal_a301492a87cb8532505d292d4ef130cdf43cf30c3213e161519e28fed0d70991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a301492a87cb8532505d292d4ef130cdf43cf30c3213e161519e28fed0d70991->enter($__internal_a301492a87cb8532505d292d4ef130cdf43cf30c3213e161519e28fed0d70991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advertisement:adForm.html.twig"));

        $__internal_475393c228f730161d86c1f68440aec2a7690e6efa63adae5eb87b99a932a30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475393c228f730161d86c1f68440aec2a7690e6efa63adae5eb87b99a932a30b->enter($__internal_475393c228f730161d86c1f68440aec2a7690e6efa63adae5eb87b99a932a30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advertisement:adForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a301492a87cb8532505d292d4ef130cdf43cf30c3213e161519e28fed0d70991->leave($__internal_a301492a87cb8532505d292d4ef130cdf43cf30c3213e161519e28fed0d70991_prof);

        
        $__internal_475393c228f730161d86c1f68440aec2a7690e6efa63adae5eb87b99a932a30b->leave($__internal_475393c228f730161d86c1f68440aec2a7690e6efa63adae5eb87b99a932a30b_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_262af02f1834eefbbf83db397ed8603133b083109e89ae6d6cd813850da73e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262af02f1834eefbbf83db397ed8603133b083109e89ae6d6cd813850da73e45->enter($__internal_262af02f1834eefbbf83db397ed8603133b083109e89ae6d6cd813850da73e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_2cb13c5199ec22b4db95700db092e04590fb76295afcc8e414fbb6bb642d0924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb13c5199ec22b4db95700db092e04590fb76295afcc8e414fbb6bb642d0924->enter($__internal_2cb13c5199ec22b4db95700db092e04590fb76295afcc8e414fbb6bb642d0924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
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
<link href=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.css\" rel=\"stylesheet\">

";
        
        $__internal_2cb13c5199ec22b4db95700db092e04590fb76295afcc8e414fbb6bb642d0924->leave($__internal_2cb13c5199ec22b4db95700db092e04590fb76295afcc8e414fbb6bb642d0924_prof);

        
        $__internal_262af02f1834eefbbf83db397ed8603133b083109e89ae6d6cd813850da73e45->leave($__internal_262af02f1834eefbbf83db397ed8603133b083109e89ae6d6cd813850da73e45_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_4188ddbac217cb7e2a4a8027a1fa9fbf5a9f8152d95e9e863ca195c64a9bc8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4188ddbac217cb7e2a4a8027a1fa9fbf5a9f8152d95e9e863ca195c64a9bc8ed->enter($__internal_4188ddbac217cb7e2a4a8027a1fa9fbf5a9f8152d95e9e863ca195c64a9bc8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7ffc1590df47e2961d9f63e0858edc47ef163fa9c5ee4d450aa620235641b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ffc1590df47e2961d9f63e0858edc47ef163fa9c5ee4d450aa620235641b79->enter($__internal_d7ffc1590df47e2961d9f63e0858edc47ef163fa9c5ee4d450aa620235641b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 28
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@AppBundle/Themes/widget.html.twig"));
        // line 29
        echo "                        <div class=\"form-group\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label" => "Banner Title"));
        echo "
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "eg : featured item")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "advertisementType", array()), 'label', array("label" => "Select a banner type"));
        echo "
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "advertisementType", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        ";
        // line 37
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@AppBundle/Themes/file.html.twig"));
        // line 38
        echo "                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bannerFile", array()), 'label', array("label" => "Banner Image(Optional)"));
        echo "
                                ";
        // line 41
        $context["bannerImage"] = "";
        // line 42
        echo "                                ";
        if (($this->getAttribute(($context["advertisement"] ?? $this->getContext($context, "advertisement")), "bannerImage", array()) != null)) {
            // line 43
            echo "                                    ";
            $context["bannerImage"] = ("/uploads/banners/banner/" . $this->getAttribute(($context["advertisement"] ?? $this->getContext($context, "advertisement")), "bannerImage", array()));
            // line 44
            echo "                                ";
        }
        // line 45
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bannerFile", array()), 'row', array("attr" => array("data-default-file" => ($context["bannerImage"] ?? $this->getContext($context, "bannerImage")))));
        echo "
                            </div>
                        </div>
                        
                        ";
        // line 49
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@AppBundle/Themes/widget.html.twig"));
        // line 50
        echo "                        <!--div class=\"row\">
                            <div class=\"col-md-12\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", array()), 'label', array("label" => "Banner Active Status"));
        echo "
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", array()), 'row', array("attr" => array("placeholder" => "Doe", "data-on-text" => "Active", "data-off-text" => "Inactive")));
        echo "
                            </div>
                        </div-->
                        
                          <div class=\"col-md-12\">
                            <label class=\"d-block\">Banner Active Status</label>
                            <label class=\"switch s-success mr-2 mt-3\"> 
                                <input type=\"checkbox\" ";
        // line 60
        if (($this->getAttribute(($context["advertisement"] ?? $this->getContext($context, "advertisement")), "isActive", array()) == 1)) {
            echo "checked ";
        }
        echo " class=\"form-control form-control-sm\" name=\"isActive\"  value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advertisement"] ?? $this->getContext($context, "advertisement")), "isActive", array()), "html", null, true);
        echo "\">
                                <span class=\"slider round\"></span>
                            </label>
                        </div>
                          <div class=\"form-group\">
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bannerFor", array()), 'label', array("label" => "Banner For"));
        echo "
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bannerFor", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "eg : http://google.co.in")));
        echo "
                        </div>


                        <div class=\"form-group\" id=\"link\">
                         <label for=\"reg\" class=\"d-block\">Link</label>
                         <input type=\"text\" class=\"form-control\"   name=\"clickLink\"  placeholder=\"www.example.com/offer\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["clickLink"] ?? $this->getContext($context, "clickLink")), "html", null, true);
        echo "\">
                        </div>    

                         <div class=\"form-group\" id=\"category\" style=\"display:none;\">
                         <label for=\"reg\" class=\"d-block\">Select Category</label>
                         <select class=\"form-control\"  name=\"category[]\" >

                          ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? $this->getContext($context, "category")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 80
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                echo " ";
                if (($context["d"] == $this->getAttribute($context["cat"], "id", array()))) {
                    echo " selected ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "categoryName", array()), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                         </select>      
                        </div> 
                            <div class=\"form-group\" id=\"sub_category\" style=\"display:none;\">
                         <label for=\"reg\" class=\"d-block\">Select Sub/Nested Category</label>
                         <select class=\"form-control\"  name=\"sub_category[]\" >

                          ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nested"] ?? $this->getContext($context, "nested")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 89
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                echo " ";
                if (($context["d"] == $this->getAttribute($context["cat"], "id", array()))) {
                    echo " selected ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "categoryName", array()), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                         </select>      
                        </div>                     
                    
                      
                        <div class=\"form-group\"  id=\"items-link\" style=\"display:none;\">
                         <label for=\"regs\" class=\"d-block\">Products</label>
                       <select class=\"dd\"  name=\"item[]\" multiple>

                             ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
            // line 100
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "id", array()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                echo " ";
                if (($context["d"] == $this->getAttribute($context["it"], "id", array()))) {
                    echo " selected ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "itemName", array()), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
                         </select>
                        </div>   
                           <div class=\"form-group\"  id=\"brands\" style=\"display:none;\">
                         <label for=\"regs\" class=\"d-block\">Brands</label>
                       <select class=\"dd\"  name=\"brand[]\" multiple>
                          
                           ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["brands"] ?? $this->getContext($context, "brands")));
        foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
            // line 110
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "id", array()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                echo " ";
                if (($context["d"] == $this->getAttribute($context["it"], "id", array()))) {
                    echo " selected ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "categoryName", array()), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
                         </select>
                        </div>   
                        

                            <!--end-->
                        <div class=\"clearfix\"></div>
                        <button type=\"submit\" class=\"btn btn-primary pull-left\">Update Banner</button>
                    ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d7ffc1590df47e2961d9f63e0858edc47ef163fa9c5ee4d450aa620235641b79->leave($__internal_d7ffc1590df47e2961d9f63e0858edc47ef163fa9c5ee4d450aa620235641b79_prof);

        
        $__internal_4188ddbac217cb7e2a4a8027a1fa9fbf5a9f8152d95e9e863ca195c64a9bc8ed->leave($__internal_4188ddbac217cb7e2a4a8027a1fa9fbf5a9f8152d95e9e863ca195c64a9bc8ed_prof);

    }

    // line 128
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_8ccf42877e2c53a6260eba076cb6016efc761aa22b22850a8a87f0383624ff6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccf42877e2c53a6260eba076cb6016efc761aa22b22850a8a87f0383624ff6a->enter($__internal_8ccf42877e2c53a6260eba076cb6016efc761aa22b22850a8a87f0383624ff6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_fcc42c1f381754373d1732dd1aef741f95ddfb2812e458c62d68288b78a5dc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc42c1f381754373d1732dd1aef741f95ddfb2812e458c62d68288b78a5dc2d->enter($__internal_fcc42c1f381754373d1732dd1aef741f95ddfb2812e458c62d68288b78a5dc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 129
        echo "
<script src=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.js\"></script>

<script>
    
        //\$(\"input[type='checkbox']\").bootstrapSwitch();
    
      /*\$('#appbundle_advertisement_bannerFor').change(function(){
var id=\$('#appbundle_advertisement_bannerFor').val();

if(id=='1')
{
    \$('.menuitem').show();
    \$('.category').hide();
               \$('.subcategory').hide();
\$('.nestedcategory').hide();
       \$('.brands').hide();
              \$('.link').hide();

    \$('#cats').attr('name', 'test');
    \$('#items').attr('name', 'item');

}
if(id=='2')
{
    \$('.menuitem').hide();
    \$('.category').show();
           \$('.subcategory').hide();
\$('.nestedcategory').hide();
       \$('.brands').hide();
              \$('.link').hide();

    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
if(id=='3')
{
    \$('.menuitem').hide();
     \$('.category').hide();
       \$('.subcategory').show();
\$('.nestedcategory').hide();
       \$('.brands').hide();
              \$('.link').hide();

    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
if(id=='0')
{
    \$('.menuitem').hide();
     \$('.category').hide();
       \$('.subcategory').hide();
\$('.nestedcategory').hide();
       \$('.brands').hide();
              \$('.link').hide();

    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
if(id=='4')
{
    \$('.menuitem').hide();
     \$('.category').hide();
       \$('.subcategory').hide();
       \$('.nestedcategory').show();
       \$('.brands').hide();
              \$('.link').hide();


    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
if(id=='5')
{
    \$('.menuitem').hide();
     \$('.category').hide();
       \$('.subcategory').hide();
       \$('.nestedcategory').hide();
       \$('.brands').show();
              \$('.link').hide();


    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
if(id=='6')
{
    \$('.menuitem').hide();
     \$('.category').hide();
       \$('.subcategory').hide();
       \$('.nestedcategory').hide();
       \$('.brands').hide();
       \$('.link').show();

    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
});  
*/

 \$(document).ready(function() {
\$('.multipleSelect').fastselect();
\$('.dd').fastselect();
var x=\$('#appbundle_advertisement_bannerFor').val();
//alert(x);
if(x==0)
{
\$('#link').show();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==1)
{
\$('#link').hide();
\$('#items-link').show();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==2)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').show();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==3)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').show();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==4)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#sub_category').show();
\$('#brands').hide();
\$('#nestedcategory').hide();

}
if(x==5)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').show();
\$('#sub_category').hide();

}
if(x==6)
{
\$('#link').show();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();

}
\$('#appbundle_advertisement_bannerFor').click(function(){
var x=\$('#appbundle_advertisement_bannerFor').val();
//alert(x);
if(x==1)
{
\$('#link').hide();
\$('#items-link').show();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==2)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').show();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==3)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').show();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==4)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').show();

}
if(x==5)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').show();
\$('#sub_category').hide();

}
if(x==6)
{
\$('#link').show();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
});
 });

 \$(document).ready(function(){
\$('.banner-area').html('<a href=\"";
        // line 383
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("advertisement_new");
        echo "\" class=\"nav-link\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Banner</a>');
 });
</script>

";
        
        $__internal_fcc42c1f381754373d1732dd1aef741f95ddfb2812e458c62d68288b78a5dc2d->leave($__internal_fcc42c1f381754373d1732dd1aef741f95ddfb2812e458c62d68288b78a5dc2d_prof);

        
        $__internal_8ccf42877e2c53a6260eba076cb6016efc761aa22b22850a8a87f0383624ff6a->leave($__internal_8ccf42877e2c53a6260eba076cb6016efc761aa22b22850a8a87f0383624ff6a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Advertisement:adForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 383,  384 => 129,  375 => 128,  359 => 121,  355 => 120,  345 => 112,  321 => 110,  317 => 109,  308 => 102,  284 => 100,  280 => 99,  270 => 91,  246 => 89,  242 => 88,  234 => 82,  210 => 80,  206 => 79,  196 => 72,  187 => 66,  183 => 65,  171 => 60,  161 => 53,  157 => 52,  153 => 50,  151 => 49,  143 => 45,  140 => 44,  137 => 43,  134 => 42,  132 => 41,  128 => 40,  124 => 38,  122 => 37,  117 => 35,  113 => 34,  107 => 31,  103 => 30,  100 => 29,  98 => 28,  94 => 27,  88 => 23,  79 => 22,  51 => 3,  42 => 2,  11 => 1,);
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
<link href=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.css\" rel=\"stylesheet\">

{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    {{ form_start(form) }}
                    {% form_theme form '@AppBundle/Themes/widget.html.twig' %}
                        <div class=\"form-group\">
                            {{ form_label(form.title, \"Banner Title\") }}
                            {{ form_row(form.title,{'attr':{'class':'form-control','placeholder':'eg : featured item'}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(form.advertisementType, \"Select a banner type\") }}
                            {{ form_row(form.advertisementType,{'attr':{'class':'form-control'}}) }}
                        </div>
                        {% form_theme form '@AppBundle/Themes/file.html.twig' %}
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6\">
                                {{ form_label(form.bannerFile, \"Banner Image(Optional)\") }}
                                {% set bannerImage = \"\" %}
                                {% if advertisement.bannerImage != null %}
                                    {% set bannerImage = '/uploads/banners/banner/'~advertisement.bannerImage %}
                                {% endif %}
                                {{ form_row(form.bannerFile,{'attr':{'data-default-file':bannerImage}}) }}
                            </div>
                        </div>
                        
                        {% form_theme form '@AppBundle/Themes/widget.html.twig' %}
                        <!--div class=\"row\">
                            <div class=\"col-md-12\">
                                {{ form_label(form.isActive, \"Banner Active Status\") }}
                                {{ form_row(form.isActive,{'attr':{'placeholder':'Doe',\"data-on-text\":\"Active\",\"data-off-text\":\"Inactive\"}}) }}
                            </div>
                        </div-->
                        
                          <div class=\"col-md-12\">
                            <label class=\"d-block\">Banner Active Status</label>
                            <label class=\"switch s-success mr-2 mt-3\"> 
                                <input type=\"checkbox\" {% if advertisement.isActive == 1 %}checked {% endif %} class=\"form-control form-control-sm\" name=\"isActive\"  value=\"{{ advertisement.isActive }}\">
                                <span class=\"slider round\"></span>
                            </label>
                        </div>
                          <div class=\"form-group\">
                            {{ form_label(form.bannerFor, \"Banner For\") }}
                            {{ form_row(form.bannerFor,{'attr':{'class':'form-control','placeholder':'eg : http://google.co.in'}}) }}
                        </div>


                        <div class=\"form-group\" id=\"link\">
                         <label for=\"reg\" class=\"d-block\">Link</label>
                         <input type=\"text\" class=\"form-control\"   name=\"clickLink\"  placeholder=\"www.example.com/offer\" value=\"{{clickLink}}\">
                        </div>    

                         <div class=\"form-group\" id=\"category\" style=\"display:none;\">
                         <label for=\"reg\" class=\"d-block\">Select Category</label>
                         <select class=\"form-control\"  name=\"category[]\" >

                          {% for cat in category %}
                            <option value=\"{{ cat.id }}\" {% for d in data %} {% if d == cat.id %} selected {% endif %} {% endfor %}>{{ cat.categoryName }}</option>
                          {% endfor %}
                         </select>      
                        </div> 
                            <div class=\"form-group\" id=\"sub_category\" style=\"display:none;\">
                         <label for=\"reg\" class=\"d-block\">Select Sub/Nested Category</label>
                         <select class=\"form-control\"  name=\"sub_category[]\" >

                          {% for cat in nested %}
                            <option value=\"{{ cat.id }}\" {% for d in data %} {% if d == cat.id %} selected {% endif %} {% endfor %}>{{ cat.categoryName }}</option>
                          {% endfor %}
                         </select>      
                        </div>                     
                    
                      
                        <div class=\"form-group\"  id=\"items-link\" style=\"display:none;\">
                         <label for=\"regs\" class=\"d-block\">Products</label>
                       <select class=\"dd\"  name=\"item[]\" multiple>

                             {% for it in menus %}
                            <option value=\"{{ it.id }}\" {% for d in data %} {% if d == it.id %} selected {% endif %} {% endfor %}>{{ it.itemName }}</option>
                          {% endfor %}

                         </select>
                        </div>   
                           <div class=\"form-group\"  id=\"brands\" style=\"display:none;\">
                         <label for=\"regs\" class=\"d-block\">Brands</label>
                       <select class=\"dd\"  name=\"brand[]\" multiple>
                          
                           {% for it in brands %}
                            <option value=\"{{ it.id }}\" {% for d in data %} {% if d == it.id %} selected {% endif %} {% endfor %}>{{ it.categoryName }}</option>
                          {% endfor %}

                         </select>
                        </div>   
                        

                            <!--end-->
                        <div class=\"clearfix\"></div>
                        <button type=\"submit\" class=\"btn btn-primary pull-left\">Update Banner</button>
                    {{ form_end(form) }}
                    {{ form_rest(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block scripts %}

<script src=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.js\"></script>

<script>
    
        //\$(\"input[type='checkbox']\").bootstrapSwitch();
    
      /*\$('#appbundle_advertisement_bannerFor').change(function(){
var id=\$('#appbundle_advertisement_bannerFor').val();

if(id=='1')
{
    \$('.menuitem').show();
    \$('.category').hide();
               \$('.subcategory').hide();
\$('.nestedcategory').hide();
       \$('.brands').hide();
              \$('.link').hide();

    \$('#cats').attr('name', 'test');
    \$('#items').attr('name', 'item');

}
if(id=='2')
{
    \$('.menuitem').hide();
    \$('.category').show();
           \$('.subcategory').hide();
\$('.nestedcategory').hide();
       \$('.brands').hide();
              \$('.link').hide();

    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
if(id=='3')
{
    \$('.menuitem').hide();
     \$('.category').hide();
       \$('.subcategory').show();
\$('.nestedcategory').hide();
       \$('.brands').hide();
              \$('.link').hide();

    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
if(id=='0')
{
    \$('.menuitem').hide();
     \$('.category').hide();
       \$('.subcategory').hide();
\$('.nestedcategory').hide();
       \$('.brands').hide();
              \$('.link').hide();

    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
if(id=='4')
{
    \$('.menuitem').hide();
     \$('.category').hide();
       \$('.subcategory').hide();
       \$('.nestedcategory').show();
       \$('.brands').hide();
              \$('.link').hide();


    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
if(id=='5')
{
    \$('.menuitem').hide();
     \$('.category').hide();
       \$('.subcategory').hide();
       \$('.nestedcategory').hide();
       \$('.brands').show();
              \$('.link').hide();


    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
if(id=='6')
{
    \$('.menuitem').hide();
     \$('.category').hide();
       \$('.subcategory').hide();
       \$('.nestedcategory').hide();
       \$('.brands').hide();
       \$('.link').show();

    \$('#items').attr('name', 'test');
    \$('#cats').attr('name', 'item');
}
});  
*/

 \$(document).ready(function() {
\$('.multipleSelect').fastselect();
\$('.dd').fastselect();
var x=\$('#appbundle_advertisement_bannerFor').val();
//alert(x);
if(x==0)
{
\$('#link').show();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==1)
{
\$('#link').hide();
\$('#items-link').show();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==2)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').show();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==3)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').show();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==4)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#sub_category').show();
\$('#brands').hide();
\$('#nestedcategory').hide();

}
if(x==5)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').show();
\$('#sub_category').hide();

}
if(x==6)
{
\$('#link').show();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();

}
\$('#appbundle_advertisement_bannerFor').click(function(){
var x=\$('#appbundle_advertisement_bannerFor').val();
//alert(x);
if(x==1)
{
\$('#link').hide();
\$('#items-link').show();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==2)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').show();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==3)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').show();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
if(x==4)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').show();

}
if(x==5)
{
\$('#link').hide();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').show();
\$('#sub_category').hide();

}
if(x==6)
{
\$('#link').show();
\$('#items-link').hide();
\$('#category').hide();
\$('#subcategory').hide();
\$('#nestedcategory').hide();
\$('#brands').hide();
\$('#sub_category').hide();

}
});
 });

 \$(document).ready(function(){
\$('.banner-area').html('<a href=\"{{ path('advertisement_new') }}\" class=\"nav-link\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Banner</a>');
 });
</script>

{% endblock %}", "AppBundle:Advertisement:adForm.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Advertisement/adForm.html.twig");
    }
}
