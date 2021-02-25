<?php

/* AppBundle:Admin:Pages/AppHome.html.twig */
class __TwigTemplate_aaf9228c6e3d8d7ec0bd8df5c368b8607b26377a46ab929de506f73cf690b898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Pages/AppHome.html.twig", 1);
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
        $__internal_749521fa5a02eb6e123842ab3b209470b38289d4bb116e8eefb0acb442f0d901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749521fa5a02eb6e123842ab3b209470b38289d4bb116e8eefb0acb442f0d901->enter($__internal_749521fa5a02eb6e123842ab3b209470b38289d4bb116e8eefb0acb442f0d901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/AppHome.html.twig"));

        $__internal_c57914641186b886575b4ac60dcaa3ec97dfe2229be86e740139c9778ae2a1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57914641186b886575b4ac60dcaa3ec97dfe2229be86e740139c9778ae2a1f1->enter($__internal_c57914641186b886575b4ac60dcaa3ec97dfe2229be86e740139c9778ae2a1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/AppHome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_749521fa5a02eb6e123842ab3b209470b38289d4bb116e8eefb0acb442f0d901->leave($__internal_749521fa5a02eb6e123842ab3b209470b38289d4bb116e8eefb0acb442f0d901_prof);

        
        $__internal_c57914641186b886575b4ac60dcaa3ec97dfe2229be86e740139c9778ae2a1f1->leave($__internal_c57914641186b886575b4ac60dcaa3ec97dfe2229be86e740139c9778ae2a1f1_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_424071b5a8e60ecc3c7a09bd18dfa094bb08dbc8b8ec454b7fa1e6ce098e2529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424071b5a8e60ecc3c7a09bd18dfa094bb08dbc8b8ec454b7fa1e6ce098e2529->enter($__internal_424071b5a8e60ecc3c7a09bd18dfa094bb08dbc8b8ec454b7fa1e6ce098e2529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_42f38e578cf8aeee77291202d440398844edf05c2fee3ca4b3d63a810e06806a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f38e578cf8aeee77291202d440398844edf05c2fee3ca4b3d63a810e06806a->enter($__internal_42f38e578cf8aeee77291202d440398844edf05c2fee3ca4b3d63a810e06806a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
";
        
        $__internal_42f38e578cf8aeee77291202d440398844edf05c2fee3ca4b3d63a810e06806a->leave($__internal_42f38e578cf8aeee77291202d440398844edf05c2fee3ca4b3d63a810e06806a_prof);

        
        $__internal_424071b5a8e60ecc3c7a09bd18dfa094bb08dbc8b8ec454b7fa1e6ce098e2529->leave($__internal_424071b5a8e60ecc3c7a09bd18dfa094bb08dbc8b8ec454b7fa1e6ce098e2529_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_52b350f0c29c14a3996602482f604c5ae4f0eb3267451e30a86a58d424b8b694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b350f0c29c14a3996602482f604c5ae4f0eb3267451e30a86a58d424b8b694->enter($__internal_52b350f0c29c14a3996602482f604c5ae4f0eb3267451e30a86a58d424b8b694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef97e95c932ac1492281bcd2d8e51139fb48d143b09c4c325a31d9f74e8e050f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef97e95c932ac1492281bcd2d8e51139fb48d143b09c4c325a31d9f74e8e050f->enter($__internal_ef97e95c932ac1492281bcd2d8e51139fb48d143b09c4c325a31d9f74e8e050f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card card-outline-info\">
            
                <form method=\"post\" action=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_home_page");
        echo "\">
                <div class=\"card-body\">
<center><h4>App Home Page Setting</h4></center>
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                         <label for=\"reg\"><input type=\"text\" name=\"featured_label\" required=\"\" placeholder=\"featured label\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["featured_label"] ?? $this->getContext($context, "featured_label")), "html", null, true);
        echo "\"></label>
                          <select class=\"multipleSelect\" multiple name=\"featured[]\">
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["MenuItem"] ?? $this->getContext($context, "MenuItem")));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 33
            echo "  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "id", array()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["f"] ?? $this->getContext($context, "f")));
            foreach ($context['_seq'] as $context["_key"] => $context["fe"]) {
                echo " ";
                if (($context["fe"] == $this->getAttribute($context["me"], "id", array()))) {
                    echo " selected ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "itemName", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </select>
                        </div>
                        <div class=\"form-group\">
                         <label for=\"reg\"><input type=\"text\" name=\"discount_label\" required=\"\" placeholder=\"discount label\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["discount_label"] ?? $this->getContext($context, "discount_label")), "html", null, true);
        echo "\"></label>
                                 <select class=\"multipleSelect\" multiple name=\"discount[]\">
  ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["MenuItem"] ?? $this->getContext($context, "MenuItem")));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 41
            echo "  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "id", array()), "html", null, true);
            echo "\"  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["d"] ?? $this->getContext($context, "d")));
            foreach ($context['_seq'] as $context["_key"] => $context["fe"]) {
                echo " ";
                if (($context["fe"] == $this->getAttribute($context["me"], "id", array()))) {
                    echo " selected ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "itemName", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </select>
                        </div>     

                  <center><b>Featured Sub Categories 1</b></center>  
                  <div class=\"form-group\">
                         <label for=\"reg\"><input type=\"text\" name=\"category_label\" required=\"\" placeholder=\"Sub Category Label\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["category_label"] ?? $this->getContext($context, "category_label")), "html", null, true);
        echo "\"></label>
                         <select class=\"multipleSelect\" multiple name=\"category[]\">
                          ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category_list"] ?? $this->getContext($context, "category_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 51
            echo "                          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "id", array()), "html", null, true);
            echo "\"  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category"] ?? $this->getContext($context, "category")));
            foreach ($context['_seq'] as $context["_key"] => $context["fe"]) {
                echo " ";
                if (($context["fe"] == $this->getAttribute($context["me"], "id", array()))) {
                    echo " selected ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "categoryName", array()), "html", null, true);
            echo "</option>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                             </select>
                        </div>       
                  <center><b>Featured Sub Categories 2</b></center>  
                  <div class=\"form-group\">
                         <label for=\"reg\"><input type=\"text\" name=\"category_label_one\" required=\"\" placeholder=\"Sub Category Label\" class=\"form-control\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["category_one_label"] ?? $this->getContext($context, "category_one_label")), "html", null, true);
        echo "\"></label>
                         <select class=\"multipleSelect\" multiple name=\"category_one[]\">
                          ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category_list"] ?? $this->getContext($context, "category_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 60
            echo "                          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "id", array()), "html", null, true);
            echo "\"  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_one"] ?? $this->getContext($context, "category_one")));
            foreach ($context['_seq'] as $context["_key"] => $context["fe"]) {
                echo " ";
                if (($context["fe"] == $this->getAttribute($context["me"], "id", array()))) {
                    echo " selected ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "categoryName", array()), "html", null, true);
            echo "</option>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                             </select>
                        </div> 
                   <center><b>Featured Sub Categories 3</b></center>  
                  <div class=\"form-group\">
                         <label for=\"reg\"><input type=\"text\" name=\"category_label_two\" required=\"\" placeholder=\"Sub Category Label\" class=\"form-control\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["category_two_label"] ?? $this->getContext($context, "category_two_label")), "html", null, true);
        echo "\"></label>
                         <select class=\"multipleSelect\" multiple name=\"category_two[]\">
                          ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category_list"] ?? $this->getContext($context, "category_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 69
            echo "                          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "id", array()), "html", null, true);
            echo "\"  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_two"] ?? $this->getContext($context, "category_two")));
            foreach ($context['_seq'] as $context["_key"] => $context["fe"]) {
                echo " ";
                if (($context["fe"] == $this->getAttribute($context["me"], "id", array()))) {
                    echo " selected ";
                }
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["me"], "categoryName", array()), "html", null, true);
            echo "</option>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                             </select>
                        </div>                    
                        <div class=\"clearfix\"></div>
                        <button type=\"submit\" class=\"btn btn-primary pull-left\">Save</button><br>
  </div>
                      
                </div>
            </form>
            </div>
        </div>
    </div>
";
        
        $__internal_ef97e95c932ac1492281bcd2d8e51139fb48d143b09c4c325a31d9f74e8e050f->leave($__internal_ef97e95c932ac1492281bcd2d8e51139fb48d143b09c4c325a31d9f74e8e050f_prof);

        
        $__internal_52b350f0c29c14a3996602482f604c5ae4f0eb3267451e30a86a58d424b8b694->leave($__internal_52b350f0c29c14a3996602482f604c5ae4f0eb3267451e30a86a58d424b8b694_prof);

    }

    // line 84
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_851990427920c7a5bb35c5d55c641a7772da616e6e7bb24bb1b8f04a905d5617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851990427920c7a5bb35c5d55c641a7772da616e6e7bb24bb1b8f04a905d5617->enter($__internal_851990427920c7a5bb35c5d55c641a7772da616e6e7bb24bb1b8f04a905d5617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_5107654fcbcef91937ae0a52fec7e15a132b0cd629443eee055c7147942e64c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5107654fcbcef91937ae0a52fec7e15a132b0cd629443eee055c7147942e64c7->enter($__internal_5107654fcbcef91937ae0a52fec7e15a132b0cd629443eee055c7147942e64c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 85
        echo "

<script>
    
   
        </script>

";
        
        $__internal_5107654fcbcef91937ae0a52fec7e15a132b0cd629443eee055c7147942e64c7->leave($__internal_5107654fcbcef91937ae0a52fec7e15a132b0cd629443eee055c7147942e64c7_prof);

        
        $__internal_851990427920c7a5bb35c5d55c641a7772da616e6e7bb24bb1b8f04a905d5617->leave($__internal_851990427920c7a5bb35c5d55c641a7772da616e6e7bb24bb1b8f04a905d5617_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Pages/AppHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 85,  310 => 84,  289 => 71,  265 => 69,  261 => 68,  256 => 66,  250 => 62,  226 => 60,  222 => 59,  217 => 57,  211 => 53,  187 => 51,  183 => 50,  178 => 48,  171 => 43,  147 => 41,  143 => 40,  138 => 38,  133 => 35,  109 => 33,  105 => 32,  100 => 30,  92 => 25,  86 => 21,  77 => 20,  51 => 3,  42 => 2,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card card-outline-info\">
            
                <form method=\"post\" action=\"{{ path('create_home_page') }}\">
                <div class=\"card-body\">
<center><h4>App Home Page Setting</h4></center>
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                         <label for=\"reg\"><input type=\"text\" name=\"featured_label\" required=\"\" placeholder=\"featured label\" class=\"form-control\" value=\"{{ featured_label }}\"></label>
                          <select class=\"multipleSelect\" multiple name=\"featured[]\">
  {% for me in MenuItem %}
  <option value=\"{{ me.id }}\" {% for fe in f %} {% if fe == me.id %} selected {% endif %} {% endfor %}>{{ me.itemName }}</option>
  {% endfor %}
    </select>
                        </div>
                        <div class=\"form-group\">
                         <label for=\"reg\"><input type=\"text\" name=\"discount_label\" required=\"\" placeholder=\"discount label\" class=\"form-control\" value=\"{{ discount_label }}\"></label>
                                 <select class=\"multipleSelect\" multiple name=\"discount[]\">
  {% for me in MenuItem %}
  <option value=\"{{ me.id }}\"  {% for fe in d %} {% if fe == me.id %} selected {% endif %} {% endfor %} >{{ me.itemName }}</option>
  {% endfor %}
    </select>
                        </div>     

                  <center><b>Featured Sub Categories 1</b></center>  
                  <div class=\"form-group\">
                         <label for=\"reg\"><input type=\"text\" name=\"category_label\" required=\"\" placeholder=\"Sub Category Label\" class=\"form-control\" value=\"{{ category_label }}\"></label>
                         <select class=\"multipleSelect\" multiple name=\"category[]\">
                          {% for me in category_list %}
                          <option value=\"{{ me.id }}\"  {% for fe in category %} {% if fe == me.id %} selected {% endif %} {% endfor %} >{{ me.categoryName }}</option>
                           {% endfor %}
                             </select>
                        </div>       
                  <center><b>Featured Sub Categories 2</b></center>  
                  <div class=\"form-group\">
                         <label for=\"reg\"><input type=\"text\" name=\"category_label_one\" required=\"\" placeholder=\"Sub Category Label\" class=\"form-control\" value=\"{{ category_one_label }}\"></label>
                         <select class=\"multipleSelect\" multiple name=\"category_one[]\">
                          {% for me in category_list %}
                          <option value=\"{{ me.id }}\"  {% for fe in category_one %} {% if fe == me.id %} selected {% endif %} {% endfor %} >{{ me.categoryName }}</option>
                           {% endfor %}
                             </select>
                        </div> 
                   <center><b>Featured Sub Categories 3</b></center>  
                  <div class=\"form-group\">
                         <label for=\"reg\"><input type=\"text\" name=\"category_label_two\" required=\"\" placeholder=\"Sub Category Label\" class=\"form-control\" value=\"{{ category_two_label }}\"></label>
                         <select class=\"multipleSelect\" multiple name=\"category_two[]\">
                          {% for me in category_list %}
                          <option value=\"{{ me.id }}\"  {% for fe in category_two %} {% if fe == me.id %} selected {% endif %} {% endfor %} >{{ me.categoryName }}</option>
                           {% endfor %}
                             </select>
                        </div>                    
                        <div class=\"clearfix\"></div>
                        <button type=\"submit\" class=\"btn btn-primary pull-left\">Save</button><br>
  </div>
                      
                </div>
            </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block scripts %}


<script>
    
   
        </script>

{% endblock %}", "AppBundle:Admin:Pages/AppHome.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Pages/AppHome.html.twig");
    }
}
