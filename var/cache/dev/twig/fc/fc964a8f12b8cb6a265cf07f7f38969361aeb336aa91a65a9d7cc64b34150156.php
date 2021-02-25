<?php

/* AppBundle:Admin:Reports/brandSales.html.twig */
class __TwigTemplate_a18a5a9a9456b7ab8eedb7409124c392b1c8581c65ffb7add1d32db2cc465f42 extends Twig_Template
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
        return $this->loadTemplate((("@AppBundle/" . ($context["myExtend"] ?? $this->getContext($context, "myExtend"))) . "/base.html.twig"), "AppBundle:Admin:Reports/brandSales.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4afe9b1ae022b4a122d9e34c3ebc7f002d4b42ab52bbeff0f6a4bdd2117ac87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4afe9b1ae022b4a122d9e34c3ebc7f002d4b42ab52bbeff0f6a4bdd2117ac87->enter($__internal_a4afe9b1ae022b4a122d9e34c3ebc7f002d4b42ab52bbeff0f6a4bdd2117ac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Reports/brandSales.html.twig"));

        $__internal_186b9926a6a631e6533ecfc58f20f9b201783f4c098b4eaa7027cc438a42ca87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186b9926a6a631e6533ecfc58f20f9b201783f4c098b4eaa7027cc438a42ca87->enter($__internal_186b9926a6a631e6533ecfc58f20f9b201783f4c098b4eaa7027cc438a42ca87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Reports/brandSales.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4afe9b1ae022b4a122d9e34c3ebc7f002d4b42ab52bbeff0f6a4bdd2117ac87->leave($__internal_a4afe9b1ae022b4a122d9e34c3ebc7f002d4b42ab52bbeff0f6a4bdd2117ac87_prof);

        
        $__internal_186b9926a6a631e6533ecfc58f20f9b201783f4c098b4eaa7027cc438a42ca87->leave($__internal_186b9926a6a631e6533ecfc58f20f9b201783f4c098b4eaa7027cc438a42ca87_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_6c0b30caf8c1f715795aa93f802726d5c0138d58e44041ece2f844e5e226fe8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0b30caf8c1f715795aa93f802726d5c0138d58e44041ece2f844e5e226fe8e->enter($__internal_6c0b30caf8c1f715795aa93f802726d5c0138d58e44041ece2f844e5e226fe8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_dc389bc0bd53891713c901ea1ea1cc54257c8491b0dcc74375bb1e114350e76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc389bc0bd53891713c901ea1ea1cc54257c8491b0dcc74375bb1e114350e76b->enter($__internal_dc389bc0bd53891713c901ea1ea1cc54257c8491b0dcc74375bb1e114350e76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "
";
        
        $__internal_dc389bc0bd53891713c901ea1ea1cc54257c8491b0dcc74375bb1e114350e76b->leave($__internal_dc389bc0bd53891713c901ea1ea1cc54257c8491b0dcc74375bb1e114350e76b_prof);

        
        $__internal_6c0b30caf8c1f715795aa93f802726d5c0138d58e44041ece2f844e5e226fe8e->leave($__internal_6c0b30caf8c1f715795aa93f802726d5c0138d58e44041ece2f844e5e226fe8e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a73e5cbfa881f6edad3bf3680faa216a3c408420c71b00158a56c44eac509da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a73e5cbfa881f6edad3bf3680faa216a3c408420c71b00158a56c44eac509da->enter($__internal_6a73e5cbfa881f6edad3bf3680faa216a3c408420c71b00158a56c44eac509da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c06b65c50b367d023f4ac2502e9920708fcaa296b4df3197df7c47d1a00ed3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06b65c50b367d023f4ac2502e9920708fcaa296b4df3197df7c47d1a00ed3fa->enter($__internal_c06b65c50b367d023f4ac2502e9920708fcaa296b4df3197df7c47d1a00ed3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"order-report-app\">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

      <!-- Javascript -->
      <script>
         \$(function() {
            \$( \"#datepicker1\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });
            \$( \"#datepicker2\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });

         });
      </script>
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12\">
            <div class=\"card card-default\">
                <div class=\"card-body collapse show\"> 
                    ";
        // line 28
        echo "                    <h6 id=\"reportheader\">Brand Report Filter</h6>
                    <hr>
                    <form method=\"post\" action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_brands");
        echo "\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                                <label for=\"\">From</label>
                            <input type=\"text\" name=\"fromDate\" id=\"datepicker1\"  class=\"form-control\" autocomplete=\"off\"  value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["from"] ?? $this->getContext($context, "from")), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"\">To</label>
                            <input type=\"text\" name=\"toDate\" id=\"datepicker2\" class=\"form-control\"  autocomplete=\"off\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["to"] ?? $this->getContext($context, "to")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    ";
        // line 52
        echo "
                     <div class=\"row m-t-20\" id=\"brandid\">
                        <div class=\"col-md-12\">
                            <label for=\"\">Brands</label>
                            <select name=\"brand\" id=\"brand\" class=\"form-control\">
                                <option value=\"0\">All</option>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["brands"] ?? $this->getContext($context, "brands")));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 59
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "\" ";
            if ((($context["brandid"] ?? $this->getContext($context, "brandid")) == $this->getAttribute($context["brand"], "id", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "categoryName", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </select>
                        </div>
                    </div>

                    <br>
                    <div class=\"row m-t-20\">
                        <div class=\"col-md-12\">
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"filter\">Filter</button>
                       
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class=\"col-lg-12 col-md-12\">
            <div class=\"card card-default\">
                <div class=\"card-header\">
                    <div class=\"card-actions\">
                        <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>                    </div>
                    ";
        // line 83
        echo "                     <h4 class=\"card-title m-b-0\" id=\"headertext\">Brandwise Sales Report
                    </h4>
                    <table class=\"table table-hovered\" id=\"myTable\">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td id=\"tableheadertext\">Brand Name</td>
                                ";
        // line 95
        echo "                                <td>Quantity</td>
                                <td>Total</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 101
        $context["count"] = 1;
        // line 102
        echo "                            ";
        $context["sales"] = 0;
        // line 103
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["da"]) {
            // line 104
            echo "                            <tr>
                                <td>";
            // line 105
            echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
            echo "</td>
                                <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "categoryName", array()), "html", null, true);
            echo "</td>
                                ";
            // line 112
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "quantity", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 113
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["da"], "price", array()), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["da"], "price", array()), 2, ".", ""), "html", null, true);
            }
            echo "</td>
                                <td><a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_brand_sale", array("id" => $this->getAttribute($context["da"], "brand", array()))), "html", null, true);
            echo "\">view</a></td>

                                    
                                </tr>
                ";
            // line 118
            $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
            // line 119
            echo "                ";
            $context["sales"] = (($context["sales"] ?? $this->getContext($context, "sales")) + $this->getAttribute($context["da"], "price", array()));
            // line 120
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['da'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                        </tbody>
                    </table>
                    <hr>
                  <b style=\"color:red;\">  Sales : ";
        // line 125
        echo twig_escape_filter($this->env, ($context["sales"] ?? $this->getContext($context, "sales")), "html", null, true);
        echo "</b>
                </div>
                <div class=\"card-body collapse show\">
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
";
        
        $__internal_c06b65c50b367d023f4ac2502e9920708fcaa296b4df3197df7c47d1a00ed3fa->leave($__internal_c06b65c50b367d023f4ac2502e9920708fcaa296b4df3197df7c47d1a00ed3fa_prof);

        
        $__internal_6a73e5cbfa881f6edad3bf3680faa216a3c408420c71b00158a56c44eac509da->leave($__internal_6a73e5cbfa881f6edad3bf3680faa216a3c408420c71b00158a56c44eac509da_prof);

    }

    // line 137
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_77fab60e9e2d858c0a6ac4cc3ac5a433f6702a18cfb96f2095c75331cf76cc1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fab60e9e2d858c0a6ac4cc3ac5a433f6702a18cfb96f2095c75331cf76cc1a->enter($__internal_77fab60e9e2d858c0a6ac4cc3ac5a433f6702a18cfb96f2095c75331cf76cc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_0eab78eaaabe04f1449ccd0e9f295be3432516861ccb99a642c3123bf9cfac7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eab78eaaabe04f1449ccd0e9f295be3432516861ccb99a642c3123bf9cfac7a->enter($__internal_0eab78eaaabe04f1449ccd0e9f295be3432516861ccb99a642c3123bf9cfac7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 138
        echo "
<script>

        ";
        // line 144
        echo "
         \$('#myTable').DataTable();
";
        // line 151
        echo "

        ";
        // line 170
        echo "
</script>

";
        
        $__internal_0eab78eaaabe04f1449ccd0e9f295be3432516861ccb99a642c3123bf9cfac7a->leave($__internal_0eab78eaaabe04f1449ccd0e9f295be3432516861ccb99a642c3123bf9cfac7a_prof);

        
        $__internal_77fab60e9e2d858c0a6ac4cc3ac5a433f6702a18cfb96f2095c75331cf76cc1a->leave($__internal_77fab60e9e2d858c0a6ac4cc3ac5a433f6702a18cfb96f2095c75331cf76cc1a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Reports/brandSales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 170,  281 => 151,  277 => 144,  272 => 138,  263 => 137,  242 => 125,  237 => 122,  230 => 120,  227 => 119,  225 => 118,  218 => 114,  210 => 113,  205 => 112,  201 => 106,  197 => 105,  194 => 104,  189 => 103,  186 => 102,  184 => 101,  176 => 95,  167 => 83,  145 => 61,  130 => 59,  126 => 58,  118 => 52,  111 => 38,  104 => 34,  97 => 30,  93 => 28,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  20 => 1,);
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
{% block styles %}

{% endblock %}
{% block body %}
<div id=\"order-report-app\">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

      <!-- Javascript -->
      <script>
         \$(function() {
            \$( \"#datepicker1\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });
            \$( \"#datepicker2\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });

         });
      </script>
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12\">
            <div class=\"card card-default\">
                <div class=\"card-body collapse show\"> 
                    {# <h6 id=\"reportheader\">{% if filtertype == 'filterbyitem' %}Item{% elseif filtertype == 'filterbyitem' %}Brand{% endif %} Report Filter</h6> #}
                    <h6 id=\"reportheader\">Brand Report Filter</h6>
                    <hr>
                    <form method=\"post\" action=\"{{ path('filter_brands')}}\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                                <label for=\"\">From</label>
                            <input type=\"text\" name=\"fromDate\" id=\"datepicker1\"  class=\"form-control\" autocomplete=\"off\"  value=\"{{ from }}\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"\">To</label>
                            <input type=\"text\" name=\"toDate\" id=\"datepicker2\" class=\"form-control\"  autocomplete=\"off\" value=\"{{ to }}\">
                        </div>
                    </div>

                    {# <div class=\"row\" style=\"margin-top: 10px;\">
                        <div class=\"col-md-2\">
                            <label for=\"\">Filter By Items</label>
                            <input type=\"radio\" class=\"\" name=\"filterby\" id=\"filterby\" value=\"filterbyitem\" onclick=\"filterBy(this)\" {% if filtertype == 'filterbyitem' %} checked {% endif %}/>
                        </div>
                         <div class=\"col-md-2\">
                            <label for=\"\">Filter By Brands</label>
                            <input type=\"radio\" class=\"\" name=\"filterby\" id=\"filterby\" value=\"filterbybrand\" onclick=\"filterBy(this)\" {% if filtertype == 'filterbybrand' %} checked {% endif %}/>
                        </div>
                    </div> #}

                     <div class=\"row m-t-20\" id=\"brandid\">
                        <div class=\"col-md-12\">
                            <label for=\"\">Brands</label>
                            <select name=\"brand\" id=\"brand\" class=\"form-control\">
                                <option value=\"0\">All</option>
                                {% for brand in brands%}
                                <option value=\"{{ brand.id }}\" {% if brandid == brand.id %} selected {% endif %}>{{ brand.categoryName }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class=\"row m-t-20\">
                        <div class=\"col-md-12\">
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"filter\">Filter</button>
                       
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class=\"col-lg-12 col-md-12\">
            <div class=\"card card-default\">
                <div class=\"card-header\">
                    <div class=\"card-actions\">
                        <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>                    </div>
                    {# <h4 class=\"card-title m-b-0\" id=\"headertext\">{% if filtertype == 'filterbyitem' %}Itemwise{% elseif filtertype == 'filterbybrand' %}Brandwise{% endif %} Sales Report
                    </h4> #}
                     <h4 class=\"card-title m-b-0\" id=\"headertext\">Brandwise Sales Report
                    </h4>
                    <table class=\"table table-hovered\" id=\"myTable\">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td id=\"tableheadertext\">Brand Name</td>
                                {# {% if filtertype == 'filterbyitem' %}
                                    <td id=\"tableheadertext\">Item Name</td>
                                {% elseif filtertype == 'filterbybrand' %}
                                    <td id=\"tableheadertext\">Brand Name</td>
                                {% endif %} #}
                                <td>Quantity</td>
                                <td>Total</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            {% set count = 1 %}
                            {% set sales = 0 %}
                            {% for da in data %}
                            <tr>
                                <td>{{ count }}</td>
                                <td>{{ da.categoryName }}</td>
                                {# {% if filtertype == 'filterbyitem' %}
                                    <td>{{ da.itemName }} - {{ da.priceVariavtion }}</td>
                                {% elseif filtertype == 'filterbybrand' %}
                                    <td>{{ da.categoryName }}</td>
                                {% endif %} #}
                                <td>{{ da.quantity }}</td>
                                <td>{% if numberFormat == 0 %}{{ da.price|round(2, 'floor')}}{% elseif numberFormat == 1 %}{{ da.price|number_format(2, '.', '') }}{% endif %}</td>
                                <td><a href=\"{{ path('view_brand_sale',{'id':da.brand}) }}\">view</a></td>

                                    
                                </tr>
                {% set count = count + 1 %}
                {% set sales = sales + da.price %}

                            {% endfor %}
                        </tbody>
                    </table>
                    <hr>
                  <b style=\"color:red;\">  Sales : {{ sales }}</b>
                </div>
                <div class=\"card-body collapse show\">
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{% endblock %}

{% block scripts %}

<script>

        {# \$('#grocbay').select2({
        selectOnClose: true
        }); #}

         \$('#myTable').DataTable();
{# 
         \$(document).ready(function() { 
            \$('#itemid').show();
            \$('#brandid').hide();
         }); #}


        {# function filterBy(checkbox){

            if(checkbox.value == 'filterbyitem'){
                \$('#itemid').show();
                \$('#brandid').hide();

                \$('#reportheader').html('Item Report Filter');

            }else if(checkbox.value == 'filterbybrand'){
                \$('#itemid').hide();
                \$('#brandid').show();

                \$('#reportheader').html('Brand Report Filter');
            }


        } #}

</script>

{% endblock %}", "AppBundle:Admin:Reports/brandSales.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Reports/brandSales.html.twig");
    }
}
