<?php

/* AppBundle:Admin:Pages/page.html.twig */
class __TwigTemplate_a3d4eba819fedcbabe58547740bbfd092b8b61fd1080808414c5ce2af7dedfce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Pages/page.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3aa3370f5137ef60bc3db7a9d607b99a86928ab6907f30deaaa4848c8303c5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa3370f5137ef60bc3db7a9d607b99a86928ab6907f30deaaa4848c8303c5c4->enter($__internal_3aa3370f5137ef60bc3db7a9d607b99a86928ab6907f30deaaa4848c8303c5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/page.html.twig"));

        $__internal_6bf2de80387570744ba8573614bdf8d69e2960c1bed425c3cd515bdff387d58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf2de80387570744ba8573614bdf8d69e2960c1bed425c3cd515bdff387d58c->enter($__internal_6bf2de80387570744ba8573614bdf8d69e2960c1bed425c3cd515bdff387d58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aa3370f5137ef60bc3db7a9d607b99a86928ab6907f30deaaa4848c8303c5c4->leave($__internal_3aa3370f5137ef60bc3db7a9d607b99a86928ab6907f30deaaa4848c8303c5c4_prof);

        
        $__internal_6bf2de80387570744ba8573614bdf8d69e2960c1bed425c3cd515bdff387d58c->leave($__internal_6bf2de80387570744ba8573614bdf8d69e2960c1bed425c3cd515bdff387d58c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8bd740099e845253aee91090d0619178359200a08dee5dc3727f1c90ae96fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bd740099e845253aee91090d0619178359200a08dee5dc3727f1c90ae96fc2->enter($__internal_a8bd740099e845253aee91090d0619178359200a08dee5dc3727f1c90ae96fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db4dc32e906ab966447ac786d24f3ffc165c808359d7d09d64ad1720a84a95b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4dc32e906ab966447ac786d24f3ffc165c808359d7d09d64ad1720a84a95b2->enter($__internal_db4dc32e906ab966447ac786d24f3ffc165c808359d7d09d64ad1720a84a95b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "            <div class=\"card card-outline-info\">
                <div class=\"card-header\">
                  
                </div>
                <div class=\"card-body\">
                 
<form method=\"post\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_page_details");
        echo "\">
   <div id=\"basic\" class=\"row layout-spacing layout-top-spacing\">
                        <div class=\"col-lg-12\">
                            <div class=\"statbox widget box box-shadow\">
                                <div class=\"widget-header\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                            <h4>";
        // line 16
        echo twig_escape_filter($this->env, ($context["heading"] ?? $this->getContext($context, "heading")), "html", null, true);
        echo "</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                  <input type=\"hidden\" name=\"type\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\">
                                            <textarea class=\"form-control data\" id=\"data\" placeholder=\"about shop\"  name=\"data\" rows=\"15\">";
        // line 22
        echo twig_escape_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "html", null, true);
        echo "</textarea>

                                  </div>
                                </div>
                              </div>
                            </div>

  <button type=\"submit\" class=\"btn btn-primary\">Save</button>


</form>
</div>
</div>






    
";
        
        $__internal_db4dc32e906ab966447ac786d24f3ffc165c808359d7d09d64ad1720a84a95b2->leave($__internal_db4dc32e906ab966447ac786d24f3ffc165c808359d7d09d64ad1720a84a95b2_prof);

        
        $__internal_a8bd740099e845253aee91090d0619178359200a08dee5dc3727f1c90ae96fc2->leave($__internal_a8bd740099e845253aee91090d0619178359200a08dee5dc3727f1c90ae96fc2_prof);

    }

    // line 44
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_10e58f85e7450b279d17526e93ee2854dd4c0e7581c060c3796f278a5481c657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e58f85e7450b279d17526e93ee2854dd4c0e7581c060c3796f278a5481c657->enter($__internal_10e58f85e7450b279d17526e93ee2854dd4c0e7581c060c3796f278a5481c657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_0fc0aac9901e407e860693f03cd2a73e2257a0f2140e2972bf1d7c43b13eafd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc0aac9901e407e860693f03cd2a73e2257a0f2140e2972bf1d7c43b13eafd6->enter($__internal_0fc0aac9901e407e860693f03cd2a73e2257a0f2140e2972bf1d7c43b13eafd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 45
        echo "
<script>    
     \$(document).ready(function() {
            \$('.data').richText();
        });
        </script>
";
        
        $__internal_0fc0aac9901e407e860693f03cd2a73e2257a0f2140e2972bf1d7c43b13eafd6->leave($__internal_0fc0aac9901e407e860693f03cd2a73e2257a0f2140e2972bf1d7c43b13eafd6_prof);

        
        $__internal_10e58f85e7450b279d17526e93ee2854dd4c0e7581c060c3796f278a5481c657->leave($__internal_10e58f85e7450b279d17526e93ee2854dd4c0e7581c060c3796f278a5481c657_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Pages/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  111 => 44,  80 => 22,  76 => 21,  68 => 16,  58 => 9,  50 => 3,  41 => 2,  11 => 1,);
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
{% block body %}
            <div class=\"card card-outline-info\">
                <div class=\"card-header\">
                  
                </div>
                <div class=\"card-body\">
                 
<form method=\"post\" action=\"{{ path('update_page_details') }}\">
   <div id=\"basic\" class=\"row layout-spacing layout-top-spacing\">
                        <div class=\"col-lg-12\">
                            <div class=\"statbox widget box box-shadow\">
                                <div class=\"widget-header\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                            <h4>{{ heading }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                  <input type=\"hidden\" name=\"type\" value=\"{{ type }}\">
                                            <textarea class=\"form-control data\" id=\"data\" placeholder=\"about shop\"  name=\"data\" rows=\"15\">{{ data }}</textarea>

                                  </div>
                                </div>
                              </div>
                            </div>

  <button type=\"submit\" class=\"btn btn-primary\">Save</button>


</form>
</div>
</div>






    
{% endblock %}

{% block scripts %}

<script>    
     \$(document).ready(function() {
            \$('.data').richText();
        });
        </script>
{% endblock %}
", "AppBundle:Admin:Pages/page.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Pages/page.html.twig");
    }
}
