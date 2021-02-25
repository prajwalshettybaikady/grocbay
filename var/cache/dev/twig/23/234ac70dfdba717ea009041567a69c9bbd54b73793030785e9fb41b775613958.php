<?php

/* AppBundle:Admin:Firebase/list.html.twig */
class __TwigTemplate_116e47bc5917880d19f8f79d3649986b44f1d2bf677ff53e5395b96fb36234ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Firebase/list.html.twig", 1);
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
        $__internal_cca6ea2cef1aa92be86d8e67c56dc838a36636491ee6b5e784b9acc6d9e54937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca6ea2cef1aa92be86d8e67c56dc838a36636491ee6b5e784b9acc6d9e54937->enter($__internal_cca6ea2cef1aa92be86d8e67c56dc838a36636491ee6b5e784b9acc6d9e54937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Firebase/list.html.twig"));

        $__internal_b24514b7588323937e3b299e99926368ee23149217c06e0ccf3777fc28a46598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24514b7588323937e3b299e99926368ee23149217c06e0ccf3777fc28a46598->enter($__internal_b24514b7588323937e3b299e99926368ee23149217c06e0ccf3777fc28a46598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Firebase/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cca6ea2cef1aa92be86d8e67c56dc838a36636491ee6b5e784b9acc6d9e54937->leave($__internal_cca6ea2cef1aa92be86d8e67c56dc838a36636491ee6b5e784b9acc6d9e54937_prof);

        
        $__internal_b24514b7588323937e3b299e99926368ee23149217c06e0ccf3777fc28a46598->leave($__internal_b24514b7588323937e3b299e99926368ee23149217c06e0ccf3777fc28a46598_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aa2edff029969d875e26645f1be349d54c640cacfad34a4c37a7d35846e9e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa2edff029969d875e26645f1be349d54c640cacfad34a4c37a7d35846e9e85->enter($__internal_0aa2edff029969d875e26645f1be349d54c640cacfad34a4c37a7d35846e9e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5155033a279968565d0beeb144e3e52201f023657d4c0f24b3ca8cacf6f2a602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5155033a279968565d0beeb144e3e52201f023657d4c0f24b3ca8cacf6f2a602->enter($__internal_5155033a279968565d0beeb144e3e52201f023657d4c0f24b3ca8cacf6f2a602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
                <div class=\"card-body\">
                    
                    <div class=\"table-responsive m-t-10\">
                        <table id=\"myTable\" class=\"table table-hovered\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Message</th>
                                    <th>Type</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "
                                <tr>
                                     <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "ref", array()), "html", null, true);
            echo "</td>
                                     <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "message", array()), "html", null, true);
            echo "</td>
                                       <td>";
            // line 30
            if (($this->getAttribute($context["product"], "notificationFor", array()) == 3)) {
                echo " Link ";
            }
            // line 31
            echo "                                       ";
            if (($this->getAttribute($context["product"], "notificationFor", array()) == 4)) {
                echo " Items ";
            }
            // line 32
            echo "                                     ";
            if (($this->getAttribute($context["product"], "notificationFor", array()) == 5)) {
                echo " Category ";
            }
            // line 33
            echo "                                        ";
            if (($this->getAttribute($context["product"], "notificationFor", array()) == 6)) {
                echo " Brands ";
            }
            // line 34
            echo "                                   ";
            if (($this->getAttribute($context["product"], "notificationFor", array()) == 6)) {
                echo " Redirect to Homepage ";
            }
            echo "</td>
                                    <td>";
            // line 35
            if (($this->getAttribute($context["product"], "image", array()) == "")) {
            } else {
                echo "<img class=\"img-responsive\" src=\"/uploads/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "image", array()), "html", null, true);
                echo "\" style=\"width:100px;height:100px\"/>";
            }
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "dateTime", array()), "html", null, true);
            echo "</td>
                                      
                                    <td>
                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_notification", array("id" => $this->getAttribute($context["product"], "ref", array()))), "html", null, true);
            echo "\" title=\"view\" class=\"btn btn-primary btn-sm\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                      
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
";
        
        $__internal_5155033a279968565d0beeb144e3e52201f023657d4c0f24b3ca8cacf6f2a602->leave($__internal_5155033a279968565d0beeb144e3e52201f023657d4c0f24b3ca8cacf6f2a602_prof);

        
        $__internal_0aa2edff029969d875e26645f1be349d54c640cacfad34a4c37a7d35846e9e85->leave($__internal_0aa2edff029969d875e26645f1be349d54c640cacfad34a4c37a7d35846e9e85_prof);

    }

    // line 55
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_6058699e623096e9af18918ff3ab82ca3004c39b725925228f81a65b0885d04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6058699e623096e9af18918ff3ab82ca3004c39b725925228f81a65b0885d04f->enter($__internal_6058699e623096e9af18918ff3ab82ca3004c39b725925228f81a65b0885d04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_0d4430fd9cb8473990bc625b85e8286481de23f14b98a7edd3dd0533220db179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4430fd9cb8473990bc625b85e8286481de23f14b98a7edd3dd0533220db179->enter($__internal_0d4430fd9cb8473990bc625b85e8286481de23f14b98a7edd3dd0533220db179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 56
        echo "
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable();
    });
   
</script>
 <script>
         \$(function() {
            \$( \"#datepicker-13\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });

         });
      </script>
";
        
        $__internal_0d4430fd9cb8473990bc625b85e8286481de23f14b98a7edd3dd0533220db179->leave($__internal_0d4430fd9cb8473990bc625b85e8286481de23f14b98a7edd3dd0533220db179_prof);

        
        $__internal_6058699e623096e9af18918ff3ab82ca3004c39b725925228f81a65b0885d04f->leave($__internal_6058699e623096e9af18918ff3ab82ca3004c39b725925228f81a65b0885d04f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Firebase/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 56,  160 => 55,  143 => 46,  130 => 39,  124 => 36,  115 => 35,  108 => 34,  103 => 33,  98 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 26,  73 => 25,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@AppBundle/Admin/base.html.twig' %}

{% block body %}


<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
                <div class=\"card-body\">
                    
                    <div class=\"table-responsive m-t-10\">
                        <table id=\"myTable\" class=\"table table-hovered\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Message</th>
                                    <th>Type</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                {% for product in data %}

                                <tr>
                                     <td>{{ product.ref }}</td>
                                     <td>{{ product.message }}</td>
                                       <td>{% if product.notificationFor == 3 %} Link {% endif %}
                                       {% if product.notificationFor == 4 %} Items {% endif %}
                                     {% if product.notificationFor == 5 %} Category {% endif %}
                                        {% if product.notificationFor == 6 %} Brands {% endif %}
                                   {% if product.notificationFor == 6 %} Redirect to Homepage {% endif %}</td>
                                    <td>{% if product.image == '' %}{% else %}<img class=\"img-responsive\" src=\"/uploads/{{ product.image }}\" style=\"width:100px;height:100px\"/>{% endif %}</td>
                                    <td>{{ product.dateTime }}</td>
                                      
                                    <td>
                                        <a href=\"{{ path('view_notification',{'id':product.ref})}}\" title=\"view\" class=\"btn btn-primary btn-sm\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                      
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
{% endblock %}

{% block scripts %}

<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable();
    });
   
</script>
 <script>
         \$(function() {
            \$( \"#datepicker-13\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });

         });
      </script>
{% endblock %}
", "AppBundle:Admin:Firebase/list.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Firebase/list.html.twig");
    }
}
