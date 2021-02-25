<?php

/* AppBundle:Restaurant:Menu/viewMenu.html.twig */
class __TwigTemplate_22ea9caa85aceb16b033e32b907a5afd3e20bc8403662e24f06a24ef81822bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Restaurant:Menu/viewMenu.html.twig", 1);
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
        $__internal_6e9109c594fa11e35dcff2ddf4e1c5e0bad6a46dbfb0109abbf43e0398a338d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9109c594fa11e35dcff2ddf4e1c5e0bad6a46dbfb0109abbf43e0398a338d3->enter($__internal_6e9109c594fa11e35dcff2ddf4e1c5e0bad6a46dbfb0109abbf43e0398a338d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Restaurant:Menu/viewMenu.html.twig"));

        $__internal_a6329b372ee829d693b5176604e74749646e7db9db93f58158087f59f8d3f159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6329b372ee829d693b5176604e74749646e7db9db93f58158087f59f8d3f159->enter($__internal_a6329b372ee829d693b5176604e74749646e7db9db93f58158087f59f8d3f159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Restaurant:Menu/viewMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e9109c594fa11e35dcff2ddf4e1c5e0bad6a46dbfb0109abbf43e0398a338d3->leave($__internal_6e9109c594fa11e35dcff2ddf4e1c5e0bad6a46dbfb0109abbf43e0398a338d3_prof);

        
        $__internal_a6329b372ee829d693b5176604e74749646e7db9db93f58158087f59f8d3f159->leave($__internal_a6329b372ee829d693b5176604e74749646e7db9db93f58158087f59f8d3f159_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9935d2fc83cfdf0e3d24d82ceed602c2805458a3f51af52c20ce7bf41683ee45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9935d2fc83cfdf0e3d24d82ceed602c2805458a3f51af52c20ce7bf41683ee45->enter($__internal_9935d2fc83cfdf0e3d24d82ceed602c2805458a3f51af52c20ce7bf41683ee45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7de7afbab1198ad42bfee195d100862b18a7dc6d81f06a9635bbe9e740e35930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de7afbab1198ad42bfee195d100862b18a7dc6d81f06a9635bbe9e740e35930->enter($__internal_7de7afbab1198ad42bfee195d100862b18a7dc6d81f06a9635bbe9e740e35930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <span class=\"pull-right\">
                    ";
        // line 34
        echo "                        </span>
                    </div>
                    <div class=\"table-responsive m-t-10\">
                                   <form method=\"post\" action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bulk_action_items");
        echo "\">
                  &nbsp; <div class=\"product-action form-row\">
                    <div class=\"col-2\">
                      <select class=\"form-control form-control-sm\" name=\"type\">
                        <option  value=\"1\">Activate</option>
                        <option  value=\"0\">Deactivate</option>
                        <option  value=\"2\">Delete</option>
                      </select>
                    </div>
                    <div class=\"col-1\">
                    <label><span style=\"color:transparent;\">sss</span></label>
                  <input type=\"submit\" class=\"btn btn-primary btn-sm\" value=\"Update\">
                </div>
                <div class=\"col-1\">
                    <label><span style=\"color:transparent;\">sss</span></label>
                 <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_csv");
        echo "\"> <input type=\"button\" class=\"btn btn-primary btn-sm\" value=\"CSV\"></a>
                </div>
              </div>
                        <table id=\"myTable\" class=\"table table-hovered\">
                            <thead>
                                <tr>
                                  <th data-orderable=\"false\"><input class=\"\" type=\"checkbox\" id=\"gridCheck\" name=\"selectThemAll\"></th>
                                    <th >id</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>                          
                        </table>
                      </form>
                    </div>
                </div>
            </div>
    </div>
</div>
";
        
        $__internal_7de7afbab1198ad42bfee195d100862b18a7dc6d81f06a9635bbe9e740e35930->leave($__internal_7de7afbab1198ad42bfee195d100862b18a7dc6d81f06a9635bbe9e740e35930_prof);

        
        $__internal_9935d2fc83cfdf0e3d24d82ceed602c2805458a3f51af52c20ce7bf41683ee45->leave($__internal_9935d2fc83cfdf0e3d24d82ceed602c2805458a3f51af52c20ce7bf41683ee45_prof);

    }

    // line 75
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_c3826fbf1171d78427d9f015e1b7ad4b6f86eaa5fa1fe07a2c6d7c54bb53122d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3826fbf1171d78427d9f015e1b7ad4b6f86eaa5fa1fe07a2c6d7c54bb53122d->enter($__internal_c3826fbf1171d78427d9f015e1b7ad4b6f86eaa5fa1fe07a2c6d7c54bb53122d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_5c2b3ebb5438ffe148162915a68cce3a44b8f3b0878c8d34ff95c6d49cdc167a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2b3ebb5438ffe148162915a68cce3a44b8f3b0878c8d34ff95c6d49cdc167a->enter($__internal_5c2b3ebb5438ffe148162915a68cce3a44b8f3b0878c8d34ff95c6d49cdc167a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 76
        echo "
<script>
  \$(function() {
    jQuery(\"[name=selectThemAll]\").click(function(source) { 
        checkboxes = jQuery('.tst');
        for(var i in checkboxes){
            checkboxes[i].checked = source.target.checked;
        }
    });
});
   \$(document).ready(function() {
      \$('#myTable').DataTable({   
              // \"dom\": '<\"toolbar\">frtip',
      'processing': true,
      'serverSide': true,
      \"pageLength\": 25,
      'serverMethod': 'post',
      'ajax': { 
          'url':\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_menu_item");
        echo "?branch=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "branch", array()), "html", null, true);
        echo "\",
          'type': \"post\",      },
           'fnDrawCallback': function()
            {
                 // \$(\"#myTable_length\").prepend('');
            },
      'columns': [
         { data: 'branch' },
         { data: 'id' },
         { data: 'itemName' },
         { data: 'category' },
         { data: 'isActive' },
         { data: 'view' },
      ],

   });

          // \$(\"div.toolbar\").html('<b>Custom tool bar! Text/images etc.</b>');

    });</script>
";
        
        $__internal_5c2b3ebb5438ffe148162915a68cce3a44b8f3b0878c8d34ff95c6d49cdc167a->leave($__internal_5c2b3ebb5438ffe148162915a68cce3a44b8f3b0878c8d34ff95c6d49cdc167a_prof);

        
        $__internal_c3826fbf1171d78427d9f015e1b7ad4b6f86eaa5fa1fe07a2c6d7c54bb53122d->leave($__internal_c3826fbf1171d78427d9f015e1b7ad4b6f86eaa5fa1fe07a2c6d7c54bb53122d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Restaurant:Menu/viewMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 94,  145 => 76,  136 => 75,  104 => 52,  86 => 37,  81 => 34,  50 => 4,  41 => 3,  11 => 1,);
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
                        <span class=\"pull-right\">
                    {#      <a href=\"#\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#uploadCSV\">Upload CSV</a> #}
                        </span>
                    </div>
                    <div class=\"table-responsive m-t-10\">
                                   <form method=\"post\" action=\"{{ path('bulk_action_items')}}\">
                  &nbsp; <div class=\"product-action form-row\">
                    <div class=\"col-2\">
                      <select class=\"form-control form-control-sm\" name=\"type\">
                        <option  value=\"1\">Activate</option>
                        <option  value=\"0\">Deactivate</option>
                        <option  value=\"2\">Delete</option>
                      </select>
                    </div>
                    <div class=\"col-1\">
                    <label><span style=\"color:transparent;\">sss</span></label>
                  <input type=\"submit\" class=\"btn btn-primary btn-sm\" value=\"Update\">
                </div>
                <div class=\"col-1\">
                    <label><span style=\"color:transparent;\">sss</span></label>
                 <a href=\"{{ path('get_csv') }}\"> <input type=\"button\" class=\"btn btn-primary btn-sm\" value=\"CSV\"></a>
                </div>
              </div>
                        <table id=\"myTable\" class=\"table table-hovered\">
                            <thead>
                                <tr>
                                  <th data-orderable=\"false\"><input class=\"\" type=\"checkbox\" id=\"gridCheck\" name=\"selectThemAll\"></th>
                                    <th >id</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>                          
                        </table>
                      </form>
                    </div>
                </div>
            </div>
    </div>
</div>
{% endblock %}

{% block scripts %}

<script>
  \$(function() {
    jQuery(\"[name=selectThemAll]\").click(function(source) { 
        checkboxes = jQuery('.tst');
        for(var i in checkboxes){
            checkboxes[i].checked = source.target.checked;
        }
    });
});
   \$(document).ready(function() {
      \$('#myTable').DataTable({   
              // \"dom\": '<\"toolbar\">frtip',
      'processing': true,
      'serverSide': true,
      \"pageLength\": 25,
      'serverMethod': 'post',
      'ajax': { 
          'url':\"{{ path('view_menu_item')}}?branch={{ app.user.branch }}\",
          'type': \"post\",      },
           'fnDrawCallback': function()
            {
                 // \$(\"#myTable_length\").prepend('');
            },
      'columns': [
         { data: 'branch' },
         { data: 'id' },
         { data: 'itemName' },
         { data: 'category' },
         { data: 'isActive' },
         { data: 'view' },
      ],

   });

          // \$(\"div.toolbar\").html('<b>Custom tool bar! Text/images etc.</b>');

    });</script>
{% endblock %}
", "AppBundle:Restaurant:Menu/viewMenu.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Restaurant/Menu/viewMenu.html.twig");
    }
}
