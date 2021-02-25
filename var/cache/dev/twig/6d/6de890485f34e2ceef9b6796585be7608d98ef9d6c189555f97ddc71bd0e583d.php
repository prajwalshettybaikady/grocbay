<?php

/* AppBundle:Admin:Stock/stockDetail.html.twig */
class __TwigTemplate_0330ce949de5cc9a53a0f3dc03dd2f507c3d36e28fa1b096aad862be14e68f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Stock/stockDetail.html.twig", 1);
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
        $__internal_b39afe85a1df26956aa97d902b41e75c108c4015d6b10a8b7092e57df4180484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39afe85a1df26956aa97d902b41e75c108c4015d6b10a8b7092e57df4180484->enter($__internal_b39afe85a1df26956aa97d902b41e75c108c4015d6b10a8b7092e57df4180484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Stock/stockDetail.html.twig"));

        $__internal_8d287b8352b2f81e61a1804f91bd80a5332cbec94875261107e80ca9816eea2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d287b8352b2f81e61a1804f91bd80a5332cbec94875261107e80ca9816eea2a->enter($__internal_8d287b8352b2f81e61a1804f91bd80a5332cbec94875261107e80ca9816eea2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Stock/stockDetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b39afe85a1df26956aa97d902b41e75c108c4015d6b10a8b7092e57df4180484->leave($__internal_b39afe85a1df26956aa97d902b41e75c108c4015d6b10a8b7092e57df4180484_prof);

        
        $__internal_8d287b8352b2f81e61a1804f91bd80a5332cbec94875261107e80ca9816eea2a->leave($__internal_8d287b8352b2f81e61a1804f91bd80a5332cbec94875261107e80ca9816eea2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd87018afdce6b4df47a7696d4047eedead5a9f58be82e65c61ddc1623a7525c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd87018afdce6b4df47a7696d4047eedead5a9f58be82e65c61ddc1623a7525c->enter($__internal_dd87018afdce6b4df47a7696d4047eedead5a9f58be82e65c61ddc1623a7525c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e37db40ac29f642564177890e41231f14d573534b3a77c05dacca2d66a15988e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37db40ac29f642564177890e41231f14d573534b3a77c05dacca2d66a15988e->enter($__internal_e37db40ac29f642564177890e41231f14d573534b3a77c05dacca2d66a15988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!-- Modal -->
<div id=\"uploadCSV\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Upload Menu Items</h4>
      </div>
      <div class=\"modal-body\">
        <p><form>
        <input type=\"file\" class=\"form-control\">
        </form></p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
</div>
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"col-xs-12\">
                                                <h3>Details</h3>

                        
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock"] ?? $this->getContext($context, "stock")));
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 36
            echo "                              
                              
<div class=\"container\">
  <div class=\"card\">
<div class=\"card-header\">
Invoice : 
<strong>#";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "ref", array()), "html", null, true);
            echo "</strong> 
  <span class=\"float-right\"> <strong> ";
            // line 43
            if (($this->getAttribute($context["st"], "mode", array()) == 0)) {
                echo " Purchase Inwards ";
            } else {
                echo " Purchase Return ";
            }
            echo "</strong></span>

</div>
<div class=\"card-body\">
<div class=\"row mb-4\">
<div class=\"col-sm-6\">
<div>
Date and time : ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "date", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "time", array()), "html", null, true);
            echo "
</div>
<div>Description : ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "description", array()), "html", null, true);
            echo "</div>
<div>Added By : ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "addedBy", array()), "html", null, true);
            echo "</div>


";
            // line 66
            echo "


</div><br><br>

<div class=\"table-responsive\">
<table class=\"table table-striped\" style=\"width:100%;\">
<thead>
<tr>
<th class=\"center\">#</th>
<th>Item Name</th>
  <th class=\"center\">Qty</th>
<th class=\"right\">Curent Stock</th>
</tr>
</thead>
<tbody>
     ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? $this->getContext($context, "menu")));
            foreach ($context['_seq'] as $context["_key"] => $context["sl"]) {
                // line 83
                echo "<tr>
<td class=\"center\">";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["sl"], "id", array()), "html", null, true);
                echo "</td>
<td class=\"left strong\"> ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["sl"], "itemName", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sl"], "variationName", array()), "html", null, true);
                echo "</td>
<td class=\"left\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["sl"], "qty", array()), "html", null, true);
                echo "</td>
<td class=\"right\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["sl"], "stock", array()), "html", null, true);
                echo "</td>
</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
<span class=\"pull-right\">
                    ";
        // line 108
        echo "                            <a href=\"#back\" class=\"btn btn-primary\" onclick=\"window.history.go(-1); return false;\">Back</a>
                        </span>



                    </div>
                </div>
            </div>
    </div>
</div>
";
        
        $__internal_e37db40ac29f642564177890e41231f14d573534b3a77c05dacca2d66a15988e->leave($__internal_e37db40ac29f642564177890e41231f14d573534b3a77c05dacca2d66a15988e_prof);

        
        $__internal_dd87018afdce6b4df47a7696d4047eedead5a9f58be82e65c61ddc1623a7525c->leave($__internal_dd87018afdce6b4df47a7696d4047eedead5a9f58be82e65c61ddc1623a7525c_prof);

    }

    // line 120
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_36a9b2dc759777d95b563797ec23664d8148aa443fc8be21a43b2c2337e3788e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a9b2dc759777d95b563797ec23664d8148aa443fc8be21a43b2c2337e3788e->enter($__internal_36a9b2dc759777d95b563797ec23664d8148aa443fc8be21a43b2c2337e3788e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_a0276d5379d2fc68e927d8973af69d78d338e86becc69cc0321fa07e2a354be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0276d5379d2fc68e927d8973af69d78d338e86becc69cc0321fa07e2a354be2->enter($__internal_a0276d5379d2fc68e927d8973af69d78d338e86becc69cc0321fa07e2a354be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 121
        echo "
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable();
    });
   
</script>
";
        
        $__internal_a0276d5379d2fc68e927d8973af69d78d338e86becc69cc0321fa07e2a354be2->leave($__internal_a0276d5379d2fc68e927d8973af69d78d338e86becc69cc0321fa07e2a354be2_prof);

        
        $__internal_36a9b2dc759777d95b563797ec23664d8148aa443fc8be21a43b2c2337e3788e->leave($__internal_36a9b2dc759777d95b563797ec23664d8148aa443fc8be21a43b2c2337e3788e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Stock/stockDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 121,  222 => 120,  202 => 108,  198 => 105,  178 => 90,  169 => 87,  165 => 86,  159 => 85,  155 => 84,  152 => 83,  148 => 82,  130 => 66,  124 => 53,  120 => 52,  113 => 50,  99 => 43,  95 => 42,  87 => 36,  83 => 35,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends '@AppBundle/Admin/base.html.twig' %}

{% block body %}

<!-- Modal -->
<div id=\"uploadCSV\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Upload Menu Items</h4>
      </div>
      <div class=\"modal-body\">
        <p><form>
        <input type=\"file\" class=\"form-control\">
        </form></p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
</div>
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"col-xs-12\">
                                                <h3>Details</h3>

                        
                        {% for st in stock %}
                              
                              
<div class=\"container\">
  <div class=\"card\">
<div class=\"card-header\">
Invoice : 
<strong>#{{ st.ref }}</strong> 
  <span class=\"float-right\"> <strong> {% if st.mode == 0 %} Purchase Inwards {% else %} Purchase Return {% endif %}</strong></span>

</div>
<div class=\"card-body\">
<div class=\"row mb-4\">
<div class=\"col-sm-6\">
<div>
Date and time : {{ st.date }} - {{ st.time }}
</div>
<div>Description : {{ st.description }}</div>
<div>Added By : {{ st.addedBy }}</div>


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
<table class=\"table table-striped\" style=\"width:100%;\">
<thead>
<tr>
<th class=\"center\">#</th>
<th>Item Name</th>
  <th class=\"center\">Qty</th>
<th class=\"right\">Curent Stock</th>
</tr>
</thead>
<tbody>
     {% for sl in menu %}
<tr>
<td class=\"center\">{{ sl.id }}</td>
<td class=\"left strong\"> {{ sl.itemName }} - {{ sl.variationName }}</td>
<td class=\"left\">{{ sl.qty }}</td>
<td class=\"right\">{{ sl.stock }}</td>
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
", "AppBundle:Admin:Stock/stockDetail.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Stock/stockDetail.html.twig");
    }
}
