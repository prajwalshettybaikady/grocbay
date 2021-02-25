<?php

/* AppBundle:Admin:Stock/stockReturn.html.twig */
class __TwigTemplate_9c4bdc00dfb8e0aba6c77f4b07b575bf4c110c23d93fa35b8fde915d4f8eba1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Stock/stockReturn.html.twig", 1);
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
        $__internal_d0920a7e53f7684f4b48c6e1d1921f5bb37969d3c308f79adf64e9a98d0d1cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0920a7e53f7684f4b48c6e1d1921f5bb37969d3c308f79adf64e9a98d0d1cf2->enter($__internal_d0920a7e53f7684f4b48c6e1d1921f5bb37969d3c308f79adf64e9a98d0d1cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Stock/stockReturn.html.twig"));

        $__internal_c03b7aebc45963655e023be60763d7208594b37f2c3b1400d0721c848c8e7b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03b7aebc45963655e023be60763d7208594b37f2c3b1400d0721c848c8e7b32->enter($__internal_c03b7aebc45963655e023be60763d7208594b37f2c3b1400d0721c848c8e7b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Stock/stockReturn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0920a7e53f7684f4b48c6e1d1921f5bb37969d3c308f79adf64e9a98d0d1cf2->leave($__internal_d0920a7e53f7684f4b48c6e1d1921f5bb37969d3c308f79adf64e9a98d0d1cf2_prof);

        
        $__internal_c03b7aebc45963655e023be60763d7208594b37f2c3b1400d0721c848c8e7b32->leave($__internal_c03b7aebc45963655e023be60763d7208594b37f2c3b1400d0721c848c8e7b32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1840ee27e9dd7f454f212304bcb0546274681e3f37916573bddf1b30a1f95a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1840ee27e9dd7f454f212304bcb0546274681e3f37916573bddf1b30a1f95a0f->enter($__internal_1840ee27e9dd7f454f212304bcb0546274681e3f37916573bddf1b30a1f95a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bcfc98a9dee328c52d35b86b2e24fac73d7cebec9e19c7e2ee35992de59251e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcfc98a9dee328c52d35b86b2e24fac73d7cebec9e19c7e2ee35992de59251e->enter($__internal_1bcfc98a9dee328c52d35b86b2e24fac73d7cebec9e19c7e2ee35992de59251e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                                <h3>Purchase Returns</h3>

                        <span class=\"pull-right\">
                    ";
        // line 36
        echo "                            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_purchase_return");
        echo "\" class=\"btn btn-primary btn-sm\"> Purchase Return</a>
                        </span>
                    </div>
                    <div class=\"table-responsive m-t-10\">
                                              <table id=\"myTable\" class=\"table table-hovered\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 ";
        // line 50
        $context["id"] = 1;
        // line 51
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? $this->getContext($context, "menuItems")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 52
            echo "
                                <tr>
                                     <td>";
            // line 54
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "</td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "date", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_stock_detail", array("id" => $this->getAttribute($context["product"], "ref", array()))), "html", null, true);
            echo "\" title=\"Manage item\" class=\"btn btn-primary btn-sm\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                      
                                    </td>
                                </tr>
                                 ";
            // line 64
            $context["id"] = (($context["id"] ?? $this->getContext($context, "id")) + 1);
            // line 65
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
";
        
        $__internal_1bcfc98a9dee328c52d35b86b2e24fac73d7cebec9e19c7e2ee35992de59251e->leave($__internal_1bcfc98a9dee328c52d35b86b2e24fac73d7cebec9e19c7e2ee35992de59251e_prof);

        
        $__internal_1840ee27e9dd7f454f212304bcb0546274681e3f37916573bddf1b30a1f95a0f->leave($__internal_1840ee27e9dd7f454f212304bcb0546274681e3f37916573bddf1b30a1f95a0f_prof);

    }

    // line 75
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_f39b08761ac0d6a0856af48b60dc373a68353238ce590303becffaa4dcde929c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39b08761ac0d6a0856af48b60dc373a68353238ce590303becffaa4dcde929c->enter($__internal_f39b08761ac0d6a0856af48b60dc373a68353238ce590303becffaa4dcde929c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_d059c450da3d895e6d557c84d443caa9b812af401751c747646ee01f1ede9530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d059c450da3d895e6d557c84d443caa9b812af401751c747646ee01f1ede9530->enter($__internal_d059c450da3d895e6d557c84d443caa9b812af401751c747646ee01f1ede9530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 76
        echo "
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable();
    });
   
</script>
";
        
        $__internal_d059c450da3d895e6d557c84d443caa9b812af401751c747646ee01f1ede9530->leave($__internal_d059c450da3d895e6d557c84d443caa9b812af401751c747646ee01f1ede9530_prof);

        
        $__internal_f39b08761ac0d6a0856af48b60dc373a68353238ce590303becffaa4dcde929c->leave($__internal_f39b08761ac0d6a0856af48b60dc373a68353238ce590303becffaa4dcde929c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Stock/stockReturn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 76,  159 => 75,  142 => 66,  136 => 65,  134 => 64,  125 => 58,  120 => 56,  116 => 55,  112 => 54,  108 => 52,  103 => 51,  101 => 50,  83 => 36,  50 => 4,  41 => 3,  11 => 1,);
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
                                                <h3>Purchase Returns</h3>

                        <span class=\"pull-right\">
                    {#      <a href=\"#\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#uploadCSV\">Upload CSV</a> #}
                            <a href=\"{{ path('manage_restaurant_purchase_return') }}\" class=\"btn btn-primary btn-sm\"> Purchase Return</a>
                        </span>
                    </div>
                    <div class=\"table-responsive m-t-10\">
                                              <table id=\"myTable\" class=\"table table-hovered\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 {% set id = 1 %}
                                {% for product in menuItems %}

                                <tr>
                                     <td>{{ id }}</td>
                                    <td>{{ product.date }}</td>
                                    <td>{{ product.description }}</td>
                                    <td>
                                        <a href=\"{{ path('manage_restaurant_stock_detail',{'id':product.ref})}}\" title=\"Manage item\" class=\"btn btn-primary btn-sm\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                      
                                    </td>
                                </tr>
                                 {% set id = id + 1 %}
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
{% endblock %}
", "AppBundle:Admin:Stock/stockReturn.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Stock/stockReturn.html.twig");
    }
}
