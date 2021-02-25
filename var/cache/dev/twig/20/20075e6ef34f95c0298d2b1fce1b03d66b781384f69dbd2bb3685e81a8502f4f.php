<?php

/* AppBundle:Admin:Promocode/promoList.html.twig */
class __TwigTemplate_1c3c957268e182a4f59678cd2e15974942696b15391148733937f07b7a174db6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Promocode/promoList.html.twig", 1);
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
        $__internal_9305d72f1c9dc794383370495e0c34f325de8d7929eba1a79935090b71f1a734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9305d72f1c9dc794383370495e0c34f325de8d7929eba1a79935090b71f1a734->enter($__internal_9305d72f1c9dc794383370495e0c34f325de8d7929eba1a79935090b71f1a734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Promocode/promoList.html.twig"));

        $__internal_9191b74dbe9b28807dedf1617b0a088ddead7adcf21b970bf787feb9889806a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9191b74dbe9b28807dedf1617b0a088ddead7adcf21b970bf787feb9889806a8->enter($__internal_9191b74dbe9b28807dedf1617b0a088ddead7adcf21b970bf787feb9889806a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Promocode/promoList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9305d72f1c9dc794383370495e0c34f325de8d7929eba1a79935090b71f1a734->leave($__internal_9305d72f1c9dc794383370495e0c34f325de8d7929eba1a79935090b71f1a734_prof);

        
        $__internal_9191b74dbe9b28807dedf1617b0a088ddead7adcf21b970bf787feb9889806a8->leave($__internal_9191b74dbe9b28807dedf1617b0a088ddead7adcf21b970bf787feb9889806a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c523ce59af6194bd52a5254ddd2e748c94b4044cd84feea0c0da1e9a214bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c523ce59af6194bd52a5254ddd2e748c94b4044cd84feea0c0da1e9a214bc8->enter($__internal_43c523ce59af6194bd52a5254ddd2e748c94b4044cd84feea0c0da1e9a214bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c96a55c495125169bd87d0c2136d67b3d1c9218135405680ddee2e0f07d6805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c96a55c495125169bd87d0c2136d67b3d1c9218135405680ddee2e0f07d6805->enter($__internal_6c96a55c495125169bd87d0c2136d67b3d1c9218135405680ddee2e0f07d6805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"table-responsive m-t-10\">
                        <table id=\"myTable\" class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>Promocode</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["promocodes"] ?? $this->getContext($context, "promocodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 21
            echo "                                <tr>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["promo"], "promoCode", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["promo"], "startDate", array()), "d F Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["promo"], "endDate", array()), "d F Y"), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 26
            if ($this->getAttribute($context["promo"], "isActive", array())) {
                // line 27
                echo "                                            <a href=\"javascript:;\" class=\"badge badge-success\">active</a>
                                        ";
            } else {
                // line 29
                echo "                                            <a href=\"javascript:;\" class=\"badge badge-danger\">inactive</a>
                                        ";
            }
            // line 31
            echo "                                    </td>
                                    <td>
                                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_new_promocode", array("edid" => $this->getAttribute($context["promo"], "id", array()))), "html", null, true);
            echo "\" title=\"Edit\" class=\"badge badge-primary\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
";
        
        $__internal_6c96a55c495125169bd87d0c2136d67b3d1c9218135405680ddee2e0f07d6805->leave($__internal_6c96a55c495125169bd87d0c2136d67b3d1c9218135405680ddee2e0f07d6805_prof);

        
        $__internal_43c523ce59af6194bd52a5254ddd2e748c94b4044cd84feea0c0da1e9a214bc8->leave($__internal_43c523ce59af6194bd52a5254ddd2e748c94b4044cd84feea0c0da1e9a214bc8_prof);

    }

    // line 48
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_68c59a0c602b0013c835ed0e8260a2c66c80adab19e6c040e684c02f5d5d52d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c59a0c602b0013c835ed0e8260a2c66c80adab19e6c040e684c02f5d5d52d3->enter($__internal_68c59a0c602b0013c835ed0e8260a2c66c80adab19e6c040e684c02f5d5d52d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_954aca209f3218a9ec0ca690ebd85e9e89276e7c2b96d37b28034734eff6d56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954aca209f3218a9ec0ca690ebd85e9e89276e7c2b96d37b28034734eff6d56d->enter($__internal_954aca209f3218a9ec0ca690ebd85e9e89276e7c2b96d37b28034734eff6d56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 49
        echo "
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable();
    });
</script>
";
        
        $__internal_954aca209f3218a9ec0ca690ebd85e9e89276e7c2b96d37b28034734eff6d56d->leave($__internal_954aca209f3218a9ec0ca690ebd85e9e89276e7c2b96d37b28034734eff6d56d_prof);

        
        $__internal_68c59a0c602b0013c835ed0e8260a2c66c80adab19e6c040e684c02f5d5d52d3->leave($__internal_68c59a0c602b0013c835ed0e8260a2c66c80adab19e6c040e684c02f5d5d52d3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Promocode/promoList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  131 => 48,  114 => 39,  102 => 33,  98 => 31,  94 => 29,  90 => 27,  88 => 26,  83 => 24,  79 => 23,  75 => 22,  72 => 21,  68 => 20,  50 => 4,  41 => 3,  11 => 1,);
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
                        <table id=\"myTable\" class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>Promocode</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for promo in promocodes %}
                                <tr>
                                    <td>{{ promo.promoCode }}</td>
                                    <td>{{ promo.startDate|date('d F Y') }}</td>
                                    <td>{{ promo.endDate|date('d F Y') }}</td>
                                    <td>
                                        {% if promo.isActive %}
                                            <a href=\"javascript:;\" class=\"badge badge-success\">active</a>
                                        {% else %}
                                            <a href=\"javascript:;\" class=\"badge badge-danger\">inactive</a>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('add_new_promocode',{'edid':promo.id})}}\" title=\"Edit\" class=\"badge badge-primary\">
                                            <i class=\"fa fa-edit\"></i>
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
{% endblock %}", "AppBundle:Admin:Promocode/promoList.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Promocode/promoList.html.twig");
    }
}
