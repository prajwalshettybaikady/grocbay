<?php

/* AppBundle:Admin:Reports/profit.html.twig */
class __TwigTemplate_9a47e26b94eafe3790c28036a49b41639bd4a18b7758e6db4d720fe793970dcf extends Twig_Template
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
        return $this->loadTemplate((("@AppBundle/" . ($context["myExtend"] ?? $this->getContext($context, "myExtend"))) . "/base.html.twig"), "AppBundle:Admin:Reports/profit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92916c3c0077a2e4f810269722327fed8e960c42f96e8ef51c224c631d79839d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92916c3c0077a2e4f810269722327fed8e960c42f96e8ef51c224c631d79839d->enter($__internal_92916c3c0077a2e4f810269722327fed8e960c42f96e8ef51c224c631d79839d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Reports/profit.html.twig"));

        $__internal_ee2b8e3cd4ee7119315e0060c605485ec10ffb404ffaa9550744e16a4c569b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2b8e3cd4ee7119315e0060c605485ec10ffb404ffaa9550744e16a4c569b8d->enter($__internal_ee2b8e3cd4ee7119315e0060c605485ec10ffb404ffaa9550744e16a4c569b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Reports/profit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92916c3c0077a2e4f810269722327fed8e960c42f96e8ef51c224c631d79839d->leave($__internal_92916c3c0077a2e4f810269722327fed8e960c42f96e8ef51c224c631d79839d_prof);

        
        $__internal_ee2b8e3cd4ee7119315e0060c605485ec10ffb404ffaa9550744e16a4c569b8d->leave($__internal_ee2b8e3cd4ee7119315e0060c605485ec10ffb404ffaa9550744e16a4c569b8d_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_5915a193635d84035e7e076e14d9111902deadce490ae4b126e175c8d78105cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5915a193635d84035e7e076e14d9111902deadce490ae4b126e175c8d78105cb->enter($__internal_5915a193635d84035e7e076e14d9111902deadce490ae4b126e175c8d78105cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_74e007cf6f9d4743c878ad989fb47d1f6d85df08a03fd46f6d81075ca17b1951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e007cf6f9d4743c878ad989fb47d1f6d85df08a03fd46f6d81075ca17b1951->enter($__internal_74e007cf6f9d4743c878ad989fb47d1f6d85df08a03fd46f6d81075ca17b1951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "
<link href=\"/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\">
";
        
        $__internal_74e007cf6f9d4743c878ad989fb47d1f6d85df08a03fd46f6d81075ca17b1951->leave($__internal_74e007cf6f9d4743c878ad989fb47d1f6d85df08a03fd46f6d81075ca17b1951_prof);

        
        $__internal_5915a193635d84035e7e076e14d9111902deadce490ae4b126e175c8d78105cb->leave($__internal_5915a193635d84035e7e076e14d9111902deadce490ae4b126e175c8d78105cb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ed2018d1500345fc6580c0efe8acd1bb91e588ce377f45ea8e439ccd9c5d479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed2018d1500345fc6580c0efe8acd1bb91e588ce377f45ea8e439ccd9c5d479->enter($__internal_9ed2018d1500345fc6580c0efe8acd1bb91e588ce377f45ea8e439ccd9c5d479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_594169be820299c896ed7fa907dad860d3501aaf1eb4e5c02922912a8eeadcc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594169be820299c896ed7fa907dad860d3501aaf1eb4e5c02922912a8eeadcc9->enter($__internal_594169be820299c896ed7fa907dad860d3501aaf1eb4e5c02922912a8eeadcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h6>Profit Report</h6>
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
                    <div class=\"row m-t-20\">
                    <div class=\"col-md-12\">
                            <label for=\"\">Report Type</label>
                            <select id=\"type\" class=\"form-control\" name=\"type\">
                            <option value=\"0\" ";
        // line 46
        if ((($context["type"] ?? $this->getContext($context, "type")) == 0)) {
            echo " selected ";
        }
        echo ">Item</option>
                            <option value=\"1\" ";
        // line 47
        if ((($context["type"] ?? $this->getContext($context, "type")) == 1)) {
            echo " selected ";
        }
        echo ">Sales</option>

                            </select>
                        </div>
                    </div>
                    
                    <div class=\"row m-t-20 toggle\">
                        <div class=\"col-md-12\">
                            <label for=\"\">Items</label>
                            <select name=\"item\" id=\"grocbay\" class=\"form-control\">
                                <option value=\"0\">All</option>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" ";
            if ((($context["itemid"] ?? $this->getContext($context, "itemid")) == $this->getAttribute($context["item"], "id", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
            echo " - (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "variationName", array()), "html", null, true);
            echo ")</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </select>
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
        // line 76
        if ((($context["type"] ?? $this->getContext($context, "type")) == 0)) {
            // line 77
            echo "            <div class=\"card card-default\">
                <div class=\"card-header\">
                    <div class=\"card-actions\">
                        <a class=\"btn-minimize\" data-action=\"expand\"><i class=\"mdi mdi-arrow-expand\"></i></a>                    </div>
                    <h4 class=\"card-title m-b-0\">Profit Report 
                    </h4>
                    <table class=\"table table-hovered\" id=\"myTable\">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Item Name</td>
                                <td>Quantity</td>
                                <td>Total</td>
                                <td>Profit</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 95
            $context["count"] = 1;
            // line 96
            echo "                            ";
            $context["sales"] = 0;
            // line 97
            echo "                            ";
            $context["profit"] = 0;
            // line 98
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["da"]) {
                // line 99
                echo "                            <tr>
                                <td>";
                // line 100
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "</td>
                                <td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "itemName", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "priceVariavtion", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "quantity", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 103
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["da"], "price", array()), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["da"], "price", array()), 2, ".", ""), "html", null, true);
                }
                echo "</td>
                                <td>";
                // line 104
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["da"], "cost", array()), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["da"], "cost", array()), 2, ".", ""), "html", null, true);
                }
                echo "</td>
                                <td><a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_item_sale", array("id" => $this->getAttribute($context["da"], "itemId", array()))), "html", null, true);
                echo "\">view</a></td>

                                    
                                </tr>
                ";
                // line 109
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 110
                echo "                ";
                $context["sales"] = (($context["sales"] ?? $this->getContext($context, "sales")) + $this->getAttribute($context["da"], "price", array()));
                // line 111
                echo "                ";
                $context["profit"] = (($context["profit"] ?? $this->getContext($context, "profit")) + $this->getAttribute($context["da"], "cost", array()));
                // line 112
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['da'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                        </tbody>
                    </table>
                    <hr>
                  <b style=\"color:red;font-weight:400\">  Sales : ";
            // line 117
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["sales"] ?? $this->getContext($context, "sales")), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sales"] ?? $this->getContext($context, "sales")), 2, ".", ""), "html", null, true);
            }
            echo " |  Profit : ";
            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                echo twig_escape_filter($this->env, twig_round(($context["profit"] ?? $this->getContext($context, "profit")), 2, "floor"), "html", null, true);
            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["profit"] ?? $this->getContext($context, "profit")), 2, ".", ""), "html", null, true);
            }
            echo "</b>

                </div>
                <div class=\"card-body collapse show\">
                    
                </div>
            </div>
        </div>
        ";
        } else {
            // line 126
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
            // line 144
            $context["sum"] = 0;
            // line 145
            echo "                            ";
            $context["profit"] = 0;
            // line 146
            echo "                        
                            ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 148
                echo "                            <tr >
                                <td><a href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" title=\"Edit\" style=\"font-weight:600;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "orderDate", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 151
                if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["item"], "orderAmount", array()), 2, "floor"), "html", null, true);
                } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "orderAmount", array()), 2, ".", ""), "html", null, true);
                }
                echo "</td>
                                <td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "paymentType", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "orderStatus", array()), "html", null, true);
                echo "</td>
                        
                            </tr>
                               ";
                // line 156
                $context["sum"] = (($context["sum"] ?? $this->getContext($context, "sum")) + $this->getAttribute($context["item"], "orderAmount", array()));
                // line 157
                echo "                               ";
                $context["profit"] = (($context["profit"] ?? $this->getContext($context, "profit")) + $this->getAttribute($context["item"], "cost", array()));
                // line 158
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                        </tbody>
                    </table>
                    <hr>
                    <b style=\"color:red;font-size:17px;font-weight:bold;\"> Total Sale : ";
            // line 163
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
        // line 170
        echo "    </div>
</div>
</div>
";
        
        $__internal_594169be820299c896ed7fa907dad860d3501aaf1eb4e5c02922912a8eeadcc9->leave($__internal_594169be820299c896ed7fa907dad860d3501aaf1eb4e5c02922912a8eeadcc9_prof);

        
        $__internal_9ed2018d1500345fc6580c0efe8acd1bb91e588ce377f45ea8e439ccd9c5d479->leave($__internal_9ed2018d1500345fc6580c0efe8acd1bb91e588ce377f45ea8e439ccd9c5d479_prof);

    }

    // line 175
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_160a92d9412fa14af9234fabed564e32cbdfa5a1c4f0ef416119e43f8e08ab6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160a92d9412fa14af9234fabed564e32cbdfa5a1c4f0ef416119e43f8e08ab6c->enter($__internal_160a92d9412fa14af9234fabed564e32cbdfa5a1c4f0ef416119e43f8e08ab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6409348c9b20a1891d205e04e11cf379596750d78420ddd9905b898276c7af60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6409348c9b20a1891d205e04e11cf379596750d78420ddd9905b898276c7af60->enter($__internal_6409348c9b20a1891d205e04e11cf379596750d78420ddd9905b898276c7af60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 176
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
        
        $__internal_6409348c9b20a1891d205e04e11cf379596750d78420ddd9905b898276c7af60->leave($__internal_6409348c9b20a1891d205e04e11cf379596750d78420ddd9905b898276c7af60_prof);

        
        $__internal_160a92d9412fa14af9234fabed564e32cbdfa5a1c4f0ef416119e43f8e08ab6c->leave($__internal_160a92d9412fa14af9234fabed564e32cbdfa5a1c4f0ef416119e43f8e08ab6c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Reports/profit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 176,  411 => 175,  398 => 170,  378 => 163,  373 => 160,  366 => 158,  363 => 157,  361 => 156,  355 => 153,  351 => 152,  343 => 151,  339 => 150,  333 => 149,  330 => 148,  326 => 147,  323 => 146,  320 => 145,  318 => 144,  298 => 126,  276 => 117,  271 => 114,  264 => 112,  261 => 111,  258 => 110,  256 => 109,  249 => 105,  241 => 104,  233 => 103,  229 => 102,  223 => 101,  219 => 100,  216 => 99,  211 => 98,  208 => 97,  205 => 96,  203 => 95,  183 => 77,  181 => 76,  164 => 61,  147 => 59,  143 => 58,  127 => 47,  121 => 46,  111 => 39,  104 => 35,  97 => 31,  71 => 7,  62 => 6,  50 => 3,  41 => 2,  20 => 1,);
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
                    <h6>Profit Report</h6>
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
                    <div class=\"row m-t-20\">
                    <div class=\"col-md-12\">
                            <label for=\"\">Report Type</label>
                            <select id=\"type\" class=\"form-control\" name=\"type\">
                            <option value=\"0\" {% if type == 0 %} selected {% endif %}>Item</option>
                            <option value=\"1\" {% if type == 1 %} selected {% endif %}>Sales</option>

                            </select>
                        </div>
                    </div>
                    
                    <div class=\"row m-t-20 toggle\">
                        <div class=\"col-md-12\">
                            <label for=\"\">Items</label>
                            <select name=\"item\" id=\"grocbay\" class=\"form-control\">
                                <option value=\"0\">All</option>
                                {% for item in items%}
                                <option value=\"{{ item.id }}\" {% if itemid == item.id %} selected {% endif %}>{{ item.itemName }} - ({{ item.variationName }})</option>
                                {% endfor %}
                            </select>
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
                    <h4 class=\"card-title m-b-0\">Profit Report 
                    </h4>
                    <table class=\"table table-hovered\" id=\"myTable\">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Item Name</td>
                                <td>Quantity</td>
                                <td>Total</td>
                                <td>Profit</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            {% set count = 1 %}
                            {% set sales = 0 %}
                            {% set profit = 0 %}
                            {% for da in data %}
                            <tr>
                                <td>{{ count }}</td>
                                <td>{{ da.itemName }} - {{ da.priceVariavtion }}</td>
                                <td>{{ da.quantity }}</td>
                                <td>{% if numberFormat == 1 %}{{ da.price|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ da.price|number_format(2, '.', '') }}{% endif %}</td>
                                <td>{% if numberFormat == 1 %}{{ da.cost|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ da.cost|number_format(2, '.', '') }}{% endif %}</td>
                                <td><a href=\"{{ path('view_item_sale',{'id':da.itemId}) }}\">view</a></td>

                                    
                                </tr>
                {% set count = count + 1 %}
                {% set sales = sales + da.price %}
                {% set profit = profit + da.cost %}

                            {% endfor %}
                        </tbody>
                    </table>
                    <hr>
                  <b style=\"color:red;font-weight:400\">  Sales : {% if numberFormat == 1 %}{{ sales|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ sales|number_format(2, '.', '') }}{% endif %} |  Profit : {% if numberFormat == 1 %}{{ profit|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ profit|number_format(2, '.', '') }}{% endif %}</b>

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

{% endblock %}", "AppBundle:Admin:Reports/profit.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Reports/profit.html.twig");
    }
}
