<?php

/* AppBundle:Admin:Reports/search.html.twig */
class __TwigTemplate_17451697823d2676b674c6283329c112a64ed86c79af45eb2e4dcaa4f018a8ee extends Twig_Template
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
        return $this->loadTemplate((("@AppBundle/" . ($context["myExtend"] ?? $this->getContext($context, "myExtend"))) . "/base.html.twig"), "AppBundle:Admin:Reports/search.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9cef998f0114fed14a9cf1aa51b714ee891a242e3b2a50a69c5355942e41653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9cef998f0114fed14a9cf1aa51b714ee891a242e3b2a50a69c5355942e41653->enter($__internal_f9cef998f0114fed14a9cf1aa51b714ee891a242e3b2a50a69c5355942e41653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Reports/search.html.twig"));

        $__internal_01cca1a0c8c4a641a347e5aacf95793d692ca5e20c60f141544961a00c7f2ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cca1a0c8c4a641a347e5aacf95793d692ca5e20c60f141544961a00c7f2ccf->enter($__internal_01cca1a0c8c4a641a347e5aacf95793d692ca5e20c60f141544961a00c7f2ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Reports/search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9cef998f0114fed14a9cf1aa51b714ee891a242e3b2a50a69c5355942e41653->leave($__internal_f9cef998f0114fed14a9cf1aa51b714ee891a242e3b2a50a69c5355942e41653_prof);

        
        $__internal_01cca1a0c8c4a641a347e5aacf95793d692ca5e20c60f141544961a00c7f2ccf->leave($__internal_01cca1a0c8c4a641a347e5aacf95793d692ca5e20c60f141544961a00c7f2ccf_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_ffd3468523027f46873eaafe4bd13738627d60443e2ce339eb026ba5a2b6bb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd3468523027f46873eaafe4bd13738627d60443e2ce339eb026ba5a2b6bb99->enter($__internal_ffd3468523027f46873eaafe4bd13738627d60443e2ce339eb026ba5a2b6bb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_b92fdcf3b79b950ff91795a366289f8eb88ab0f1898a0a8cfbd80c97e39210c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92fdcf3b79b950ff91795a366289f8eb88ab0f1898a0a8cfbd80c97e39210c0->enter($__internal_b92fdcf3b79b950ff91795a366289f8eb88ab0f1898a0a8cfbd80c97e39210c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "
<link href=\"/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\">
";
        
        $__internal_b92fdcf3b79b950ff91795a366289f8eb88ab0f1898a0a8cfbd80c97e39210c0->leave($__internal_b92fdcf3b79b950ff91795a366289f8eb88ab0f1898a0a8cfbd80c97e39210c0_prof);

        
        $__internal_ffd3468523027f46873eaafe4bd13738627d60443e2ce339eb026ba5a2b6bb99->leave($__internal_ffd3468523027f46873eaafe4bd13738627d60443e2ce339eb026ba5a2b6bb99_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a61517e49dfc4efc494848fabc83a393943f65996997f92198d23d596db1691d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61517e49dfc4efc494848fabc83a393943f65996997f92198d23d596db1691d->enter($__internal_a61517e49dfc4efc494848fabc83a393943f65996997f92198d23d596db1691d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d63bd78d236689eb9a23a868a4bceda307991a6efdd96ec9e4d20d9b149cf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d63bd78d236689eb9a23a868a4bceda307991a6efdd96ec9e4d20d9b149cf8d->enter($__internal_0d63bd78d236689eb9a23a868a4bceda307991a6efdd96ec9e4d20d9b149cf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
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
                    <h6>Search History Report</h6>
                    <hr>
                    <form method=\"post\" action=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_profit");
        echo "\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                                <label for=\"\">From</label>
                            <input type=\"text\" name=\"fromDate\" id=\"datepicker1\"  class=\"form-control\" autocomplete=\"off\"  value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["from"] ?? $this->getContext($context, "from")), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"\">To</label>
                            <input type=\"text\" name=\"toDate\" id=\"datepicker2\" class=\"form-control\"  autocomplete=\"off\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["to"] ?? $this->getContext($context, "to")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <br>
                    <div class=\"row m-t-20\">
                        <div class=\"col-md-12\">
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"filter\">Generate Report</button>
                       
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class=\"col-lg-12 col-md-12 toggle\">
          ";
        // line 55
        if ((($context["type"] ?? $this->getContext($context, "type")) == 0)) {
            // line 56
            echo "            <div class=\"card card-default\">
                <div class=\"card-header\">
                    <div class=\"card-actions\">
                        <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>                    </div>
                    <h4 class=\"card-title m-b-0\">Search Report 
                    </h4>
                    <table class=\"table table-hovered\" id=\"myTable\">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Search Value</td>
                                <td>Searched On</td>
                                <td>Hits</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 72
            $context["count"] = 1;
            // line 73
            echo "                          
                            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["da"]) {
                // line 75
                echo "                            <tr>
                                <td>";
                // line 76
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "</td>
                                <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "search_value", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "time", array()), "html", null, true);
                echo "</td>
                               
                                <td><a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_item_sale", array("id" => $this->getAttribute($context["da"], "itemId", array()))), "html", null, true);
                echo "\">view</a></td>

                                    
                                </tr>
                ";
                // line 84
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 85
                echo "              

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['da'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                        </tbody>
                    </table>
                    <hr>

                </div>
                <div class=\"card-body collapse show\">
                    
                </div>
            </div>
        </div>
        ";
        } else {
            // line 99
            echo "                <div class=\"card card-default\">
                <div class=\"card-header\">
                    <div class=\"card-actions\">
                        <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>                    </div>
                    <h4 class=\"card-title m-b-0\">Order Reports
                        <p class=\"text-muted pull-right\"></p>
                    </h4>
                    <table class=\"table table-hovered\" id=\"myTable\">
                        <thead>
                            <tr>
                                <td>Order ID</td>
                                <td>Order Date</td>
                                <td>Order amount</td>
                                <td>Payment Type</td>
                                <td>Order Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 117
            $context["sum"] = 0;
            // line 118
            echo "                            ";
            $context["profit"] = 0;
            // line 119
            echo "                        
                            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 121
                echo "                            <tr >
                                <td><a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" title=\"Edit\" style=\"font-weight:600;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "orderDate", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 124
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["item"], "orderAmount", array()), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "orderAmount", array()), 2, ".", ""), "html", null, true);
                }
                echo "</td>
                                <td>";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paymentType", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "orderStatus", array()), "html", null, true);
                echo "</td>
                        
                            </tr>
                               ";
                // line 129
                $context["sum"] = (($context["sum"] ?? $this->getContext($context, "sum")) + $this->getAttribute($context["item"], "orderAmount", array()));
                // line 130
                echo "                               ";
                $context["profit"] = (($context["profit"] ?? $this->getContext($context, "profit")) + $this->getAttribute($context["item"], "cost", array()));
                // line 131
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                        </tbody>
                    </table>
                    <hr>
                    <b style=\"color:red;font-size:17px;font-weight:bold;\"> Total Sale : ";
            // line 136
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["sum"] ?? $this->getContext($context, "sum")), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum"] ?? $this->getContext($context, "sum")), 2, ".", ""), "html", null, true);
            }
            echo " </b> |    <b style=\"color:red;font-size:17px;font-weight:bold;\"> Profit : ";
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_round(($context["profit"] ?? $this->getContext($context, "profit")), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["profit"] ?? $this->getContext($context, "profit")), 2, ".", ""), "html", null, true);
            }
            echo " </b>
                </div>
                <div class=\"card-body collapse show\">
                    
                </div>  
            </div>
        ";
        }
        // line 143
        echo "    </div>
</div>
</div>
";
        
        $__internal_0d63bd78d236689eb9a23a868a4bceda307991a6efdd96ec9e4d20d9b149cf8d->leave($__internal_0d63bd78d236689eb9a23a868a4bceda307991a6efdd96ec9e4d20d9b149cf8d_prof);

        
        $__internal_a61517e49dfc4efc494848fabc83a393943f65996997f92198d23d596db1691d->leave($__internal_a61517e49dfc4efc494848fabc83a393943f65996997f92198d23d596db1691d_prof);

    }

    // line 148
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_3c37046615ee61b806ec51de4539d582913f47f4e51d1f980327c43bbceb6480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c37046615ee61b806ec51de4539d582913f47f4e51d1f980327c43bbceb6480->enter($__internal_3c37046615ee61b806ec51de4539d582913f47f4e51d1f980327c43bbceb6480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_fce3c9a0a243d45e7187f5b4ead4632c0f604955954ce853f05cd0efdfda2475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce3c9a0a243d45e7187f5b4ead4632c0f604955954ce853f05cd0efdfda2475->enter($__internal_fce3c9a0a243d45e7187f5b4ead4632c0f604955954ce853f05cd0efdfda2475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 149
        echo "<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js
\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js
\"></script>
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js\"></script>
<script>

\$('#grocbay').select2({
  selectOnClose: true
});

\$(document).ready(function() {
\$('#myTable').DataTable( {   
});
});
  \$('#type').change(function(){
    \$('.toggle').toggle();
  });

         </script>

";
        
        $__internal_fce3c9a0a243d45e7187f5b4ead4632c0f604955954ce853f05cd0efdfda2475->leave($__internal_fce3c9a0a243d45e7187f5b4ead4632c0f604955954ce853f05cd0efdfda2475_prof);

        
        $__internal_3c37046615ee61b806ec51de4539d582913f47f4e51d1f980327c43bbceb6480->leave($__internal_3c37046615ee61b806ec51de4539d582913f47f4e51d1f980327c43bbceb6480_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Reports/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 149,  318 => 148,  305 => 143,  285 => 136,  280 => 133,  273 => 131,  270 => 130,  268 => 129,  262 => 126,  258 => 125,  250 => 124,  246 => 123,  240 => 122,  237 => 121,  233 => 120,  230 => 119,  227 => 118,  225 => 117,  205 => 99,  192 => 88,  184 => 85,  182 => 84,  175 => 80,  170 => 78,  166 => 77,  162 => 76,  159 => 75,  155 => 74,  152 => 73,  150 => 72,  132 => 56,  130 => 55,  111 => 39,  104 => 35,  97 => 31,  71 => 7,  62 => 6,  50 => 3,  41 => 2,  20 => 1,);
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

<link href=\"/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\">
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
                    <h6>Search History Report</h6>
                    <hr>
                    <form method=\"post\" action=\"{{ path('filter_profit')}}\">
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

                    <br>
                    <div class=\"row m-t-20\">
                        <div class=\"col-md-12\">
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"filter\">Generate Report</button>
                       
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class=\"col-lg-12 col-md-12 toggle\">
          {% if type == 0 %}
            <div class=\"card card-default\">
                <div class=\"card-header\">
                    <div class=\"card-actions\">
                        <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>                    </div>
                    <h4 class=\"card-title m-b-0\">Search Report 
                    </h4>
                    <table class=\"table table-hovered\" id=\"myTable\">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Search Value</td>
                                <td>Searched On</td>
                                <td>Hits</td>
                            </tr>
                        </thead>
                        <tbody>
                            {% set count = 1 %}
                          
                            {% for da in data %}
                            <tr>
                                <td>{{ count }}</td>
                                <td>{{ da.search_value }}</td>
                                <td>{{ da.time }}</td>
                               
                                <td><a href=\"{{ path('view_item_sale',{'id':da.itemId}) }}\">view</a></td>

                                    
                                </tr>
                {% set count = count + 1 %}
              

                            {% endfor %}
                        </tbody>
                    </table>
                    <hr>

                </div>
                <div class=\"card-body collapse show\">
                    
                </div>
            </div>
        </div>
        {% else %}
                <div class=\"card card-default\">
                <div class=\"card-header\">
                    <div class=\"card-actions\">
                        <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>                    </div>
                    <h4 class=\"card-title m-b-0\">Order Reports
                        <p class=\"text-muted pull-right\"></p>
                    </h4>
                    <table class=\"table table-hovered\" id=\"myTable\">
                        <thead>
                            <tr>
                                <td>Order ID</td>
                                <td>Order Date</td>
                                <td>Order amount</td>
                                <td>Payment Type</td>
                                <td>Order Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            {% set sum = 0 %}
                            {% set profit = 0 %}
                        
                            {% for item in data %}
                            <tr >
                                <td><a href=\"{{ path('restaurant_orders_panel_update',{'id':item.id}) }}\" title=\"Edit\" style=\"font-weight:600;\">{{ item.id }}</a></td>
                                <td>{{ item.orderDate }}</td>
                                <td>{% if numberFormat == 1 %}{{ item.orderAmount|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ item.orderAmount|number_format(2, '.', '') }}{% endif %}</td>
                                <td>{{ item.paymentType }}</td>
                                <td>{{ item.orderStatus }}</td>
                        
                            </tr>
                               {% set sum = sum + item.orderAmount %}
                               {% set profit = profit + item.cost %}

                            {% endfor %}
                        </tbody>
                    </table>
                    <hr>
                    <b style=\"color:red;font-size:17px;font-weight:bold;\"> Total Sale : {% if numberFormat == 1 %}{{ sum|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ sum|number_format(2, '.', '') }}{% endif %} </b> |    <b style=\"color:red;font-size:17px;font-weight:bold;\"> Profit : {% if numberFormat == 0 %}{{ profit|round(2, 'floor')}}{% elseif numberFormat == 1 %}{{ profit|number_format(2, '.', '') }}{% endif %} </b>
                </div>
                <div class=\"card-body collapse show\">
                    
                </div>  
            </div>
        {% endif %}
    </div>
</div>
</div>
{% endblock %}

{% block scripts %}
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js
\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js
\"></script>
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js\"></script>
<script>

\$('#grocbay').select2({
  selectOnClose: true
});

\$(document).ready(function() {
\$('#myTable').DataTable( {   
});
});
  \$('#type').change(function(){
    \$('.toggle').toggle();
  });

         </script>

{% endblock %}", "AppBundle:Admin:Reports/search.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Reports/search.html.twig");
    }
}
