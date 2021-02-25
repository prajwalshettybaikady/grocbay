<?php

/* AppBundle:Restaurant:Menu/bulkImport.html.twig */
class __TwigTemplate_e1033c8348f5074eb20a8cd7e201bcf1f9b3a76664908f454eb6cad145c7828a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Restaurant:Menu/bulkImport.html.twig", 1);
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
        $__internal_9ba62170dbf316c1567fd2319c208de1e87fa2169512730c3ba51946eadc9ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba62170dbf316c1567fd2319c208de1e87fa2169512730c3ba51946eadc9ee2->enter($__internal_9ba62170dbf316c1567fd2319c208de1e87fa2169512730c3ba51946eadc9ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Restaurant:Menu/bulkImport.html.twig"));

        $__internal_cbcb7d4f3cc0bb5dcd787d96e826dc7880f88db31344d3cb177731bcd8acc4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcb7d4f3cc0bb5dcd787d96e826dc7880f88db31344d3cb177731bcd8acc4d4->enter($__internal_cbcb7d4f3cc0bb5dcd787d96e826dc7880f88db31344d3cb177731bcd8acc4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Restaurant:Menu/bulkImport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ba62170dbf316c1567fd2319c208de1e87fa2169512730c3ba51946eadc9ee2->leave($__internal_9ba62170dbf316c1567fd2319c208de1e87fa2169512730c3ba51946eadc9ee2_prof);

        
        $__internal_cbcb7d4f3cc0bb5dcd787d96e826dc7880f88db31344d3cb177731bcd8acc4d4->leave($__internal_cbcb7d4f3cc0bb5dcd787d96e826dc7880f88db31344d3cb177731bcd8acc4d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_266db3e2220ddb31ec4999acb7b439e03e1d0a317a23e73aa5dfda735d929645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266db3e2220ddb31ec4999acb7b439e03e1d0a317a23e73aa5dfda735d929645->enter($__internal_266db3e2220ddb31ec4999acb7b439e03e1d0a317a23e73aa5dfda735d929645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d58d31fa77bac6c7db3cfdd709175eeccc8f7c1d821aef3296a0ed25d31cc8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58d31fa77bac6c7db3cfdd709175eeccc8f7c1d821aef3296a0ed25d31cc8c3->enter($__internal_d58d31fa77bac6c7db3cfdd709175eeccc8f7c1d821aef3296a0ed25d31cc8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <link href = \"https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css\"
         rel = \"stylesheet\">
      <script src = \"https://code.jquery.com/jquery-1.10.2.js\"></script>
      <script src = \"https://code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
      
      <!-- Javascript -->
      <script>
         \$(function() {
            \$( \"#datepicker-13\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });

         });
      </script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js\" integrity=\"sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css\" integrity=\"sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=\" crossorigin=\"anonymous\" />
";
        // line 21
        echo "<!-- Modal -->

<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
                              ";
        // line 26
        echo ($context["msg"] ?? $this->getContext($context, "msg"));
        echo "

                <div class=\"card-body\">
                    <div class=\"col-xs-12\">
                        <span class=\"pull-right\">
                    ";
        // line 32
        echo "                          
                        </span>
                    </div> 
                    <h2>Bulk Import <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_csv");
        echo "\" class=\"btn btn-primary\" style=\"float:right;margin-left:15px;\">Download CSV Data</a> 
                       <a href=\"#pricing\" class=\"btn btn-primary\" style=\"float:right;\" data-toggle=\"modal\" data-target=\"#pricing\">Update Pricing</a>
</h2>


<!-- Modal -->
<div id=\"pricing\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Update Pricing</h4>
      </div>
      <div class=\"modal-body\">
        <p>
<form method=\"post\" action=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_import_pricing");
        echo "\" enctype=\"multipart/form-data\">       
<div class=\"form-group\">
<input type=\"file\" name=\"file\" class=\"form-control\" required>

</div>
        </p>
      </div>
      <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Upload</button>

        <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_single_stock");
        echo "\" class=\"btn btn-success\" style=\"float:right;\">Download CSV</a>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
      </form>

    </div>

  </div>
</div>
                    <div>
<form method=\"post\" action=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_import_csv");
        echo "\" enctype=\"multipart/form-data\">       
                        <div class=\"row\">
                             <div class=\"form-group col-md-8\">
                            <label>Select CSV File*</label>
                            <input type=\"file\" name=\"file\" class=\"form-control\" required=\"\"   accept=\".csv\"  style=\"border:none;\">

                        </div>
                          <div class=\"form-group col-md-4\">
                            <label></label><br>
                            <button type=\"submit\" name=\"ref\" class=\"btn btn-primary\" value=\"Upload\" style=\"margin-top:9px;\">upload</button>

                        </div>
                    </div>
</form>
                        <hr> 
 <div class=\"table-responsive m-t-10\">
                        <table id=\"myTable\" class=\"table table-hovered\">
                            <thead>
                                <tr>
                                    <th>Log id</th>
                                     <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 98
            echo "                               <tr>
                                <td><a href=\"/uploads/csv/";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["rows"], "ref", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rows"], "ref", array()), "html", null, true);
            echo "</a></td>
                               <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["rows"], "date", array()), "html", null, true);
            echo "</td>
                               <td><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("csv_delete", array("id" => $this->getAttribute($context["rows"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">remove</a></td>
                             </tr>
                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                            </tbody>
                        </table>
                    </div>
                    </form> 
                    </div>
     
                </div>
            </div>
    </div>
</div>


";
        
        $__internal_d58d31fa77bac6c7db3cfdd709175eeccc8f7c1d821aef3296a0ed25d31cc8c3->leave($__internal_d58d31fa77bac6c7db3cfdd709175eeccc8f7c1d821aef3296a0ed25d31cc8c3_prof);

        
        $__internal_266db3e2220ddb31ec4999acb7b439e03e1d0a317a23e73aa5dfda735d929645->leave($__internal_266db3e2220ddb31ec4999acb7b439e03e1d0a317a23e73aa5dfda735d929645_prof);

    }

    // line 118
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_44ba61e1fde1a132f1dcf490c043be6a9056ff71e4422bd454648f773c029704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ba61e1fde1a132f1dcf490c043be6a9056ff71e4422bd454648f773c029704->enter($__internal_44ba61e1fde1a132f1dcf490c043be6a9056ff71e4422bd454648f773c029704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_7ef9ec98b8fe2e278c936433bb96c7e682e68f24e21bb0ef42d1a6d4c8b972ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef9ec98b8fe2e278c936433bb96c7e682e68f24e21bb0ef42d1a6d4c8b972ba->enter($__internal_7ef9ec98b8fe2e278c936433bb96c7e682e68f24e21bb0ef42d1a6d4c8b972ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 119
        echo "
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable({
                  \"order\": [[ 0, \"desc\" ]]

        });
    });
</script>

";
        
        $__internal_7ef9ec98b8fe2e278c936433bb96c7e682e68f24e21bb0ef42d1a6d4c8b972ba->leave($__internal_7ef9ec98b8fe2e278c936433bb96c7e682e68f24e21bb0ef42d1a6d4c8b972ba_prof);

        
        $__internal_44ba61e1fde1a132f1dcf490c043be6a9056ff71e4422bd454648f773c029704->leave($__internal_44ba61e1fde1a132f1dcf490c043be6a9056ff71e4422bd454648f773c029704_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Restaurant:Menu/bulkImport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 119,  210 => 118,  188 => 104,  179 => 101,  175 => 100,  169 => 99,  166 => 98,  162 => 97,  134 => 72,  121 => 62,  108 => 52,  88 => 35,  83 => 32,  75 => 26,  68 => 21,  50 => 4,  41 => 3,  11 => 1,);
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
      <link href = \"https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css\"
         rel = \"stylesheet\">
      <script src = \"https://code.jquery.com/jquery-1.10.2.js\"></script>
      <script src = \"https://code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
      
      <!-- Javascript -->
      <script>
         \$(function() {
            \$( \"#datepicker-13\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });

         });
      </script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js\" integrity=\"sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css\" integrity=\"sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=\" crossorigin=\"anonymous\" />
{# {{ dump(res) }} #}
<!-- Modal -->

<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
                              {{ msg | raw }}

                <div class=\"card-body\">
                    <div class=\"col-xs-12\">
                        <span class=\"pull-right\">
                    {#      <a href=\"#\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#uploadCSV\">Upload CSV</a> #}
                          
                        </span>
                    </div> 
                    <h2>Bulk Import <a href=\"{{ path('get_csv') }}\" class=\"btn btn-primary\" style=\"float:right;margin-left:15px;\">Download CSV Data</a> 
                       <a href=\"#pricing\" class=\"btn btn-primary\" style=\"float:right;\" data-toggle=\"modal\" data-target=\"#pricing\">Update Pricing</a>
</h2>


<!-- Modal -->
<div id=\"pricing\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Update Pricing</h4>
      </div>
      <div class=\"modal-body\">
        <p>
<form method=\"post\" action=\"{{ path('manage_import_pricing') }}\" enctype=\"multipart/form-data\">       
<div class=\"form-group\">
<input type=\"file\" name=\"file\" class=\"form-control\" required>

</div>
        </p>
      </div>
      <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Upload</button>

        <a href=\"{{ path('get_single_stock') }}\" class=\"btn btn-success\" style=\"float:right;\">Download CSV</a>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
      </form>

    </div>

  </div>
</div>
                    <div>
<form method=\"post\" action=\"{{ path('manage_import_csv') }}\" enctype=\"multipart/form-data\">       
                        <div class=\"row\">
                             <div class=\"form-group col-md-8\">
                            <label>Select CSV File*</label>
                            <input type=\"file\" name=\"file\" class=\"form-control\" required=\"\"   accept=\".csv\"  style=\"border:none;\">

                        </div>
                          <div class=\"form-group col-md-4\">
                            <label></label><br>
                            <button type=\"submit\" name=\"ref\" class=\"btn btn-primary\" value=\"Upload\" style=\"margin-top:9px;\">upload</button>

                        </div>
                    </div>
</form>
                        <hr> 
 <div class=\"table-responsive m-t-10\">
                        <table id=\"myTable\" class=\"table table-hovered\">
                            <thead>
                                <tr>
                                    <th>Log id</th>
                                     <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for rows in data %}
                               <tr>
                                <td><a href=\"/uploads/csv/{{  rows.ref }}\">{{  rows.ref }}</a></td>
                               <td>{{  rows.date }}</td>
                               <td><a href=\"{{ path('csv_delete',{'id':rows.id}) }}\" class=\"btn btn-danger btn-sm\">remove</a></td>
                             </tr>
                               {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    </form> 
                    </div>
     
                </div>
            </div>
    </div>
</div>


{% endblock %}

{% block scripts %}

<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable({
                  \"order\": [[ 0, \"desc\" ]]

        });
    });
</script>

{% endblock %}
", "AppBundle:Restaurant:Menu/bulkImport.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Restaurant/Menu/bulkImport.html.twig");
    }
}
