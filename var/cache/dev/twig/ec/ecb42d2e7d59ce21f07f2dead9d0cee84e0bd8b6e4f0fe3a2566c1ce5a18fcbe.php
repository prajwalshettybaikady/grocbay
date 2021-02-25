<?php

/* AppBundle:Admin:Stock/stockReports.html.twig */
class __TwigTemplate_79b2f2171a26bb3e7c615b08f9514bffe934db9e7c5457d6b04c9784be01d4d6 extends Twig_Template
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
        return $this->loadTemplate((("@AppBundle/" . ($context["myExtend"] ?? $this->getContext($context, "myExtend"))) . "/base.html.twig"), "AppBundle:Admin:Stock/stockReports.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d474ef841acde639a5b0d8cea2c4847ba802c166fed8da8bb3944fd4b39b81f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d474ef841acde639a5b0d8cea2c4847ba802c166fed8da8bb3944fd4b39b81f5->enter($__internal_d474ef841acde639a5b0d8cea2c4847ba802c166fed8da8bb3944fd4b39b81f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Stock/stockReports.html.twig"));

        $__internal_f5aa24e3a08f2e9b692dc0027535e7762c6784a4acf3ce81c5dd8fd34f2a1552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5aa24e3a08f2e9b692dc0027535e7762c6784a4acf3ce81c5dd8fd34f2a1552->enter($__internal_f5aa24e3a08f2e9b692dc0027535e7762c6784a4acf3ce81c5dd8fd34f2a1552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Stock/stockReports.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d474ef841acde639a5b0d8cea2c4847ba802c166fed8da8bb3944fd4b39b81f5->leave($__internal_d474ef841acde639a5b0d8cea2c4847ba802c166fed8da8bb3944fd4b39b81f5_prof);

        
        $__internal_f5aa24e3a08f2e9b692dc0027535e7762c6784a4acf3ce81c5dd8fd34f2a1552->leave($__internal_f5aa24e3a08f2e9b692dc0027535e7762c6784a4acf3ce81c5dd8fd34f2a1552_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_b234d468aefef22cbb779dbf0a01dde450572e09a303aa24c730e551d18ed4a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b234d468aefef22cbb779dbf0a01dde450572e09a303aa24c730e551d18ed4a8->enter($__internal_b234d468aefef22cbb779dbf0a01dde450572e09a303aa24c730e551d18ed4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_932ebe84696266fb2f59f9c751cf088be020c856dcd9be122383686784c6a491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932ebe84696266fb2f59f9c751cf088be020c856dcd9be122383686784c6a491->enter($__internal_932ebe84696266fb2f59f9c751cf088be020c856dcd9be122383686784c6a491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "
<link href=\"/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\">
";
        
        $__internal_932ebe84696266fb2f59f9c751cf088be020c856dcd9be122383686784c6a491->leave($__internal_932ebe84696266fb2f59f9c751cf088be020c856dcd9be122383686784c6a491_prof);

        
        $__internal_b234d468aefef22cbb779dbf0a01dde450572e09a303aa24c730e551d18ed4a8->leave($__internal_b234d468aefef22cbb779dbf0a01dde450572e09a303aa24c730e551d18ed4a8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ce68a23096a0b440c8903e7664fe09ac7681fb9bf51a4425c6ba5578a255cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce68a23096a0b440c8903e7664fe09ac7681fb9bf51a4425c6ba5578a255cee->enter($__internal_2ce68a23096a0b440c8903e7664fe09ac7681fb9bf51a4425c6ba5578a255cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9105122f117e0cf8fca1b431d8ad137003b6c4e034e011efe2dccdf950af5b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9105122f117e0cf8fca1b431d8ad137003b6c4e034e011efe2dccdf950af5b60->enter($__internal_9105122f117e0cf8fca1b431d8ad137003b6c4e034e011efe2dccdf950af5b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"order-report-app\">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->


    
        <div class=\"col-lg-12 col-md-12\">
            <div class=\"card card-default\">
                <div class=\"card-header\">
                    <div class=\"card-actions\">
                        <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>                    </div>
                    <h4 class=\"card-title m-b-0\">Stock Reports
                       
                    </h4>
                    ";
        // line 23
        echo "                </div>
                    <table class=\"table table-hovered\" id=\"myTable\">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Name </td>
                                    <td>Variation </td>
                                <td>Current Stock</td>
                                <td>status</td>
                                
                            </tr>
                        </thead>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 36
            echo "                               
                                <tr>
                                 <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "id", array()), "html", null, true);
            echo "</td>
                                 <td>
                                     
                                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_edit_menu_item", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "itemName", array()), "html", null, true);
            echo "</a>
                                      
                                     
                                    </td>
                                       <td>
                                     
                                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_edit_menu_item", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "variationName", array()), "html", null, true);
            echo "</a>
                                      
                                     
                                    </td>
                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "stock", array()), "html", null, true);
            echo "</td>
                                    <td>
                                       ";
            // line 53
            if (($this->getAttribute($context["st"], "stock", array()) <= $this->getAttribute($context["st"], "alert", array()))) {
                // line 54
                echo "                                        <b style=\"color:red;\">Stock Getting Low</b>
                                         ";
            } else {
                // line 56
                echo "                                        <b style=\"color:red;\">In Stock</b>
                                       ";
            }
            // line 58
            echo "
                                    </td>
                                </tr>
                          
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</tbody>

                    </table>
                </div>
                <div class=\"card-body collapse show\">
                    
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_9105122f117e0cf8fca1b431d8ad137003b6c4e034e011efe2dccdf950af5b60->leave($__internal_9105122f117e0cf8fca1b431d8ad137003b6c4e034e011efe2dccdf950af5b60_prof);

        
        $__internal_2ce68a23096a0b440c8903e7664fe09ac7681fb9bf51a4425c6ba5578a255cee->leave($__internal_2ce68a23096a0b440c8903e7664fe09ac7681fb9bf51a4425c6ba5578a255cee_prof);

    }

    // line 75
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_72ef4c45530a47862ee03fe2de88947a0fe73838a1379315922405ef875b5e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ef4c45530a47862ee03fe2de88947a0fe73838a1379315922405ef875b5e7e->enter($__internal_72ef4c45530a47862ee03fe2de88947a0fe73838a1379315922405ef875b5e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_5cefd073c7b5e4dabaac9696a7be31fd4ef5bbdf3f4a38807d9327897e214103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cefd073c7b5e4dabaac9696a7be31fd4ef5bbdf3f4a38807d9327897e214103->enter($__internal_5cefd073c7b5e4dabaac9696a7be31fd4ef5bbdf3f4a38807d9327897e214103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 76
        echo "<script src=\"/assets/plugins/moment/moment.js\"></script>
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"/assets/plugins/iCheck/icheck.min.js\"></script>
<script>
    \$(document).ready(function() {
 \$('#myTable').DataTable();
    });     
    </script>
";
        
        $__internal_5cefd073c7b5e4dabaac9696a7be31fd4ef5bbdf3f4a38807d9327897e214103->leave($__internal_5cefd073c7b5e4dabaac9696a7be31fd4ef5bbdf3f4a38807d9327897e214103_prof);

        
        $__internal_72ef4c45530a47862ee03fe2de88947a0fe73838a1379315922405ef875b5e7e->leave($__internal_72ef4c45530a47862ee03fe2de88947a0fe73838a1379315922405ef875b5e7e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Stock/stockReports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 76,  182 => 75,  161 => 62,  151 => 58,  147 => 56,  143 => 54,  141 => 53,  136 => 51,  127 => 47,  116 => 41,  110 => 38,  106 => 36,  102 => 35,  88 => 23,  71 => 7,  62 => 6,  50 => 3,  41 => 2,  20 => 1,);
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

<link href=\"/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
<div id=\"order-report-app\">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->


    
        <div class=\"col-lg-12 col-md-12\">
            <div class=\"card card-default\">
                <div class=\"card-header\">
                    <div class=\"card-actions\">
                        <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>                    </div>
                    <h4 class=\"card-title m-b-0\">Stock Reports
                       
                    </h4>
                    {# {{ dump(stock) }} #}
                </div>
                    <table class=\"table table-hovered\" id=\"myTable\">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Name </td>
                                    <td>Variation </td>
                                <td>Current Stock</td>
                                <td>status</td>
                                
                            </tr>
                        </thead>
                        {% for st in menu %}
                               
                                <tr>
                                 <td>{{ st.id }}</td>
                                 <td>
                                     
                                            <a href=\"{{ path('restaurant_edit_menu_item',{'id':st.id})}}\">{{ st.itemName }}</a>
                                      
                                     
                                    </td>
                                       <td>
                                     
                                            <a href=\"{{ path('restaurant_edit_menu_item',{'id':st.id})}}\">{{ st.variationName }}</a>
                                      
                                     
                                    </td>
                                    <td>{{ st.stock }}</td>
                                    <td>
                                       {% if st.stock <= st.alert %}
                                        <b style=\"color:red;\">Stock Getting Low</b>
                                         {% else %}
                                        <b style=\"color:red;\">In Stock</b>
                                       {% endif %}

                                    </td>
                                </tr>
                          
                            {% endfor %}</tbody>

                    </table>
                </div>
                <div class=\"card-body collapse show\">
                    
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block scripts %}
<script src=\"/assets/plugins/moment/moment.js\"></script>
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"/assets/plugins/iCheck/icheck.min.js\"></script>
<script>
    \$(document).ready(function() {
 \$('#myTable').DataTable();
    });     
    </script>
{% endblock %}", "AppBundle:Admin:Stock/stockReports.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Stock/stockReports.html.twig");
    }
}
