<?php

/* AppBundle:Admin:Firebase/view.html.twig */
class __TwigTemplate_a2f8525da92753e74bfac91ecc29e4b8ff48aa244f14aec5fb8898101f212bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Firebase/view.html.twig", 1);
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
        $__internal_e2fcc15bb2b107a25ef17323e6eeaf1492094a517570f762a8b130f9d1421302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fcc15bb2b107a25ef17323e6eeaf1492094a517570f762a8b130f9d1421302->enter($__internal_e2fcc15bb2b107a25ef17323e6eeaf1492094a517570f762a8b130f9d1421302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Firebase/view.html.twig"));

        $__internal_d8a512297dad23ac8954fd2cd14b67340d561f8a1af92ee4e0646301774cbf60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a512297dad23ac8954fd2cd14b67340d561f8a1af92ee4e0646301774cbf60->enter($__internal_d8a512297dad23ac8954fd2cd14b67340d561f8a1af92ee4e0646301774cbf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Firebase/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2fcc15bb2b107a25ef17323e6eeaf1492094a517570f762a8b130f9d1421302->leave($__internal_e2fcc15bb2b107a25ef17323e6eeaf1492094a517570f762a8b130f9d1421302_prof);

        
        $__internal_d8a512297dad23ac8954fd2cd14b67340d561f8a1af92ee4e0646301774cbf60->leave($__internal_d8a512297dad23ac8954fd2cd14b67340d561f8a1af92ee4e0646301774cbf60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad8d610a15b8865de6c0f797388f6cb0a41edf1bee2ea1294c66fff39dfb2f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8d610a15b8865de6c0f797388f6cb0a41edf1bee2ea1294c66fff39dfb2f3c->enter($__internal_ad8d610a15b8865de6c0f797388f6cb0a41edf1bee2ea1294c66fff39dfb2f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fa09c584c16adf4edec8d01c2266da9dbac2ff6702bdd7f6e05145cea858820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa09c584c16adf4edec8d01c2266da9dbac2ff6702bdd7f6e05145cea858820->enter($__internal_1fa09c584c16adf4edec8d01c2266da9dbac2ff6702bdd7f6e05145cea858820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"col-xs-12\">
                                                

                        
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "                              
                              
<div class=\"container\">
  <div class=\"card\">
<div class=\"card-header\">
<strong><h3>Notification Details</h3></strong> 
  <span class=\"float-right\"> <strong> </strong></span>

</div>
<div class=\"card-body\">
<div class=\"row mb-4\">
<div class=\"col-sm-6\">
<div>
Date and time : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "dateTime", array()), "html", null, true);
            echo " 
</div>
<div>Message : ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "message", array()), "html", null, true);
            echo "</div>
<div>Notification Trigger : ";
            // line 31
            if (($this->getAttribute($context["product"], "notificationFor", array()) == 3)) {
                echo " Link ";
            }
            // line 32
            echo "                                       ";
            if (($this->getAttribute($context["product"], "notificationFor", array()) == 4)) {
                echo " Items ";
            }
            // line 33
            echo "                                     ";
            if (($this->getAttribute($context["product"], "notificationFor", array()) == 5)) {
                echo " Category ";
            }
            // line 34
            echo "                                     ";
            if (($this->getAttribute($context["product"], "notificationFor", array()) == 10)) {
                echo " Brands ";
            }
            // line 35
            echo "                                   ";
            if (($this->getAttribute($context["product"], "notificationFor", array()) == 6)) {
                echo " Redirect to Homepage ";
            }
            echo "</div>
<div>Data : ";
            // line 36
            echo twig_escape_filter($this->env, ($context["response"] ?? $this->getContext($context, "response")), "html", null, true);
            echo "</div>
<div>";
            // line 37
            if (($this->getAttribute($context["product"], "image", array()) == "")) {
            } else {
                echo "<img class=\"img-responsive\" src=\"/uploads/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "image", array()), "html", null, true);
                echo "\" style=\"width:100px;height:100px\"/>";
            }
            echo "</div>


";
            // line 50
            echo "


</div><br><br>

<div class=\"table-responsive\">
<table class=\"table table-striped\" style=\"width:100%;\" id=\"myTable\">
<thead>
<tr>
<th class=\"center\">#</th>
<th>Name</th>
<th class=\"right\">Status</th>
</tr>
</thead>
<tbody>
     ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["history"] ?? $this->getContext($context, "history")));
            foreach ($context['_seq'] as $context["_key"] => $context["sl"]) {
                // line 66
                echo "<tr>
<td class=\"center\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["sl"], "id", array()), "html", null, true);
                echo "</td>
<td class=\"left strong\"> ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["sl"], "username", array()), "html", null, true);
                echo "</td>
<td class=\"right\">";
                // line 69
                if (($this->getAttribute($context["sl"], "status", array()) == 0)) {
                    echo "Pending";
                } else {
                    echo " Opened ";
                }
                echo "</td>
</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "</tbody>
</table>
</div>
<div class=\"row\">
<div class=\"col-lg-4 col-sm-5\">

</div>


</div>

</div>
</div>
</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
<span class=\"pull-right\">
                    ";
        // line 90
        echo "                            <a href=\"#back\" class=\"btn btn-primary\" onclick=\"window.history.go(-1); return false;\">Back</a>
                        </span>



                    </div>
                </div>
            </div>
    </div>
</div>
";
        
        $__internal_1fa09c584c16adf4edec8d01c2266da9dbac2ff6702bdd7f6e05145cea858820->leave($__internal_1fa09c584c16adf4edec8d01c2266da9dbac2ff6702bdd7f6e05145cea858820_prof);

        
        $__internal_ad8d610a15b8865de6c0f797388f6cb0a41edf1bee2ea1294c66fff39dfb2f3c->leave($__internal_ad8d610a15b8865de6c0f797388f6cb0a41edf1bee2ea1294c66fff39dfb2f3c_prof);

    }

    // line 102
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_5189cc4a21924f471732aea8ba9d43b0b99592ffbbbad267e84ee04b9f3c9599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5189cc4a21924f471732aea8ba9d43b0b99592ffbbbad267e84ee04b9f3c9599->enter($__internal_5189cc4a21924f471732aea8ba9d43b0b99592ffbbbad267e84ee04b9f3c9599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f1c43087e038e1e56a21e3f6777eb14f2b5918cb39adb4ad9a991e3826a327e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1c43087e038e1e56a21e3f6777eb14f2b5918cb39adb4ad9a991e3826a327e->enter($__internal_6f1c43087e038e1e56a21e3f6777eb14f2b5918cb39adb4ad9a991e3826a327e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 103
        echo "
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable();
    });
   
</script>
";
        
        $__internal_6f1c43087e038e1e56a21e3f6777eb14f2b5918cb39adb4ad9a991e3826a327e->leave($__internal_6f1c43087e038e1e56a21e3f6777eb14f2b5918cb39adb4ad9a991e3826a327e_prof);

        
        $__internal_5189cc4a21924f471732aea8ba9d43b0b99592ffbbbad267e84ee04b9f3c9599->leave($__internal_5189cc4a21924f471732aea8ba9d43b0b99592ffbbbad267e84ee04b9f3c9599_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Firebase/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 103,  220 => 102,  200 => 90,  196 => 87,  176 => 72,  163 => 69,  159 => 68,  155 => 67,  152 => 66,  148 => 65,  131 => 50,  120 => 37,  116 => 36,  109 => 35,  104 => 34,  99 => 33,  94 => 32,  90 => 31,  86 => 30,  81 => 28,  66 => 15,  62 => 14,  50 => 4,  41 => 3,  11 => 1,);
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
                    <div class=\"col-xs-12\">
                                                

                        
                        {% for product in data %}
                              
                              
<div class=\"container\">
  <div class=\"card\">
<div class=\"card-header\">
<strong><h3>Notification Details</h3></strong> 
  <span class=\"float-right\"> <strong> </strong></span>

</div>
<div class=\"card-body\">
<div class=\"row mb-4\">
<div class=\"col-sm-6\">
<div>
Date and time : {{ product.dateTime }} 
</div>
<div>Message : {{ product.message }}</div>
<div>Notification Trigger : {% if product.notificationFor == 3 %} Link {% endif %}
                                       {% if product.notificationFor == 4 %} Items {% endif %}
                                     {% if product.notificationFor == 5 %} Category {% endif %}
                                     {% if product.notificationFor == 10 %} Brands {% endif %}
                                   {% if product.notificationFor == 6 %} Redirect to Homepage {% endif %}</div>
<div>Data : {{ response }}</div>
<div>{% if product.image == '' %}{% else %}<img class=\"img-responsive\" src=\"/uploads/{{ product.image }}\" style=\"width:100px;height:100px\"/>{% endif %}</div>


{# <div class=\"col-sm-6\">
<h6 class=\"mb-3\">To:</h6>
<div>
<strong>Bob Mart</strong>
</div>
<div>Attn: Daniel Marek</div>
<div>43-190 Mikolow, Poland</div>
<div>Email: marek@daniel.com</div>
<div>Phone: +48 123 456 789</div>
</div> #}



</div><br><br>

<div class=\"table-responsive\">
<table class=\"table table-striped\" style=\"width:100%;\" id=\"myTable\">
<thead>
<tr>
<th class=\"center\">#</th>
<th>Name</th>
<th class=\"right\">Status</th>
</tr>
</thead>
<tbody>
     {% for sl in history %}
<tr>
<td class=\"center\">{{ sl.id }}</td>
<td class=\"left strong\"> {{ sl.username }}</td>
<td class=\"right\">{% if sl.status == 0 %}Pending{% else %} Opened {% endif %}</td>
</tr>
    {% endfor %}
</tbody>
</table>
</div>
<div class=\"row\">
<div class=\"col-lg-4 col-sm-5\">

</div>


</div>

</div>
</div>
</div>
  {% endfor %}

<span class=\"pull-right\">
                    {#      <a href=\"#\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#uploadCSV\">Upload CSV</a> #}
                            <a href=\"#back\" class=\"btn btn-primary\" onclick=\"window.history.go(-1); return false;\">Back</a>
                        </span>



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
{% endblock %}
", "AppBundle:Admin:Firebase/view.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Firebase/view.html.twig");
    }
}
