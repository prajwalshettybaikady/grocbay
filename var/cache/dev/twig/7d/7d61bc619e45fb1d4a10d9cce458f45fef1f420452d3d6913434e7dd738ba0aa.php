<?php

/* AppBundle:Admin:Pages/newSlots.html.twig */
class __TwigTemplate_ea10f030812b9276e80ac3115cb8efe4455c6ec78792cf67507804d5140dee9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Pages/newSlots.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
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
        $__internal_679bb96955d8fef3c431be3cc1c2d6ae82ba09c8f1fafae003c7c566770ec1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_679bb96955d8fef3c431be3cc1c2d6ae82ba09c8f1fafae003c7c566770ec1a4->enter($__internal_679bb96955d8fef3c431be3cc1c2d6ae82ba09c8f1fafae003c7c566770ec1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/newSlots.html.twig"));

        $__internal_5862075a537a382f40483dff73bb959e74af948082c3e55ff7b87a5a4be7fe58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5862075a537a382f40483dff73bb959e74af948082c3e55ff7b87a5a4be7fe58->enter($__internal_5862075a537a382f40483dff73bb959e74af948082c3e55ff7b87a5a4be7fe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/newSlots.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_679bb96955d8fef3c431be3cc1c2d6ae82ba09c8f1fafae003c7c566770ec1a4->leave($__internal_679bb96955d8fef3c431be3cc1c2d6ae82ba09c8f1fafae003c7c566770ec1a4_prof);

        
        $__internal_5862075a537a382f40483dff73bb959e74af948082c3e55ff7b87a5a4be7fe58->leave($__internal_5862075a537a382f40483dff73bb959e74af948082c3e55ff7b87a5a4be7fe58_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_030a63685c53a1820a5eba59283ee417fb95927eb8e6c0e7a868910f176de44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030a63685c53a1820a5eba59283ee417fb95927eb8e6c0e7a868910f176de44b->enter($__internal_030a63685c53a1820a5eba59283ee417fb95927eb8e6c0e7a868910f176de44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_8acb9416a85f7ad069c617e63003ddf6a8543dd5f95e3fe8968e83c89b4f1c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acb9416a85f7ad069c617e63003ddf6a8543dd5f95e3fe8968e83c89b4f1c29->enter($__internal_8acb9416a85f7ad069c617e63003ddf6a8543dd5f95e3fe8968e83c89b4f1c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "

<link href=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.css\" rel=\"stylesheet\">
<link href=\"/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\">
";
        
        $__internal_8acb9416a85f7ad069c617e63003ddf6a8543dd5f95e3fe8968e83c89b4f1c29->leave($__internal_8acb9416a85f7ad069c617e63003ddf6a8543dd5f95e3fe8968e83c89b4f1c29_prof);

        
        $__internal_030a63685c53a1820a5eba59283ee417fb95927eb8e6c0e7a868910f176de44b->leave($__internal_030a63685c53a1820a5eba59283ee417fb95927eb8e6c0e7a868910f176de44b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_416b984761be1d546c9fd0300fcd9f8e8ac2ba74a192ff13bc94e49f72df35a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416b984761be1d546c9fd0300fcd9f8e8ac2ba74a192ff13bc94e49f72df35a2->enter($__internal_416b984761be1d546c9fd0300fcd9f8e8ac2ba74a192ff13bc94e49f72df35a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddb3c46d5375662704a0f7337573532ca5e4c1e607c4cccd116b51f443f38822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb3c46d5375662704a0f7337573532ca5e4c1e607c4cccd116b51f443f38822->enter($__internal_ddb3c46d5375662704a0f7337573532ca5e4c1e607c4cccd116b51f443f38822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card card-outline-info\">
                    <div class=\"card-header\">
                        <h4 class=\"m-b-0 text-white\">Manage Delivery Slots | ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["location"] ?? $this->getContext($context, "location")));
        foreach ($context['_seq'] as $context["_key"] => $context["lo"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["lo"], "title", array()), "html", null, true);
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</h4>

                    </div>
                    <div class=\"card-body\">
                    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_slots", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\"class=\"btn btn-primary btn-sm\"  style=\"float:right;\">Add/edit Timings</a>
    <table class=\"table\" id=\"addvar\">
      <tr>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Order Per Slot</th>
       
      </tr>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["da"]) {
            // line 33
            echo "
          <tr>
<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "start", array()), "html", null, true);
            echo "</td>
<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "end", array()), "html", null, true);
            echo "</td>
<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["da"], "orders", array()), "html", null, true);
            echo "</td>


          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['da'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </table>



<hr>
        <table class=\"table\" id=\"myTable\">
       <thead>
        <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Action</th>        
        </tr>
        </thead>
        <tbody>
       ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slot"] ?? $this->getContext($context, "slot")));
        foreach ($context['_seq'] as $context["_key"] => $context["slots"]) {
            echo "  
       ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["status"] ?? $this->getContext($context, "status")));
            foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                echo "   
       ";
                // line 58
                if (((($this->getAttribute($context["st"], "start", array()) == $this->getAttribute($context["slots"], "start", array())) && ($this->getAttribute($context["st"], "end", array()) == $this->getAttribute($context["slots"], "end", array()))) && ($this->getAttribute($context["st"], "date", array()) == $this->getAttribute($context["slots"], "date", array())))) {
                    // line 59
                    echo "     
<tr>
<td>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["slots"], "date", array()), "html", null, true);
                    echo " </td>
<td>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["slots"], "start", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["slots"], "end", array()), "html", null, true);
                    echo "</td>
<td><a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unblock_slot", array("id" => $this->getAttribute($context["st"], "id", array()), "date" => $this->getAttribute($context["slots"], "date", array()), "area" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
                    echo "\" class=\"btn btn-success btn-sm\">unblock</a></td>
</tr>
";
                } else {
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slots'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slot"] ?? $this->getContext($context, "slot")));
        foreach ($context['_seq'] as $context["_key"] => $context["slots"]) {
            echo "  

<tr>
<td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["slots"], "date", array()), "html", null, true);
            echo "</td>
<td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["slots"], "start", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slots"], "end", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("block_slot", array("id" => $this->getAttribute($context["slots"], "id", array()), "date" => $this->getAttribute($context["slots"], "date", array()), "area" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">block</a></td>
</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slots'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
</tbody>
           </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
";
        
        $__internal_ddb3c46d5375662704a0f7337573532ca5e4c1e607c4cccd116b51f443f38822->leave($__internal_ddb3c46d5375662704a0f7337573532ca5e4c1e607c4cccd116b51f443f38822_prof);

        
        $__internal_416b984761be1d546c9fd0300fcd9f8e8ac2ba74a192ff13bc94e49f72df35a2->leave($__internal_416b984761be1d546c9fd0300fcd9f8e8ac2ba74a192ff13bc94e49f72df35a2_prof);

    }

    // line 88
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_f7d920c78b6a1684a95941c1ac9173ae6187eae1943d6c8b165e80b982d8733f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d920c78b6a1684a95941c1ac9173ae6187eae1943d6c8b165e80b982d8733f->enter($__internal_f7d920c78b6a1684a95941c1ac9173ae6187eae1943d6c8b165e80b982d8733f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_48ed5fb6ad86a4ca7b31897ac79d93630736d1b91a500a38a154ecfcca5e171e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ed5fb6ad86a4ca7b31897ac79d93630736d1b91a500a38a154ecfcca5e171e->enter($__internal_48ed5fb6ad86a4ca7b31897ac79d93630736d1b91a500a38a154ecfcca5e171e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 89
        echo "
<script src=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.js\"></script>
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"/assets/plugins/moment/moment.js\"></script>

<script src=\"/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js\"></script>
<script>

      \$(document).ready(function(){

    \$('#xss').bootstrapMaterialDatePicker({ format : 'HH:mm', time: true, date: false });
        var count=0;
      \$('#variationAdd').click(function(){
// alert('add');
\$('#addvar').append('<tr><th><input type=\"text\" class=\"form-control\" placeholder=\"9-00 AM\" name=\"start[]\" required></th><th><input type=\"text\" class=\"form-control\"  placeholder=\"11-00 AM\" name=\"end[]\"></th><th><input type=\"number\" class=\"form-control\" placeholder=\"order per slot\"  name=\"slot[]\"></th><td><a class=\"btn btn-danger \" style=\"float:right;\"  onclick=\"removeVariant(this)\" data-toggle=\"collapse\" data-parent=\"#col\"  href=\"#\" ><i class=\"fa fa-trash\"></i></a></td></tr>');

count++;
});

// console.log(items)
//       });

      });


       function removeVariant(obj){
// \$(this).attr(\"data-usr\" , '');

        \$(obj).parent().parent().remove();

    }
    function save(x,itemname,id,parent)
    {
var id=fixed(x,itemname,id,parent);

    }

     // PICK THE VALUES FROM EACH TEXTBOX WHEN \"SUBMIT\" BUTTON IS CLICKED.
   

    \$(document).ready(function() {
        \$('#myTable').DataTable();
    });

    
        \$(\"input[type='checkbox']\").bootstrapSwitch();
        \$(document).ready(function() {
            // Basic
            \$('.dropify').dropify();
            // Translated
            \$('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });
    
            // Used events
            var drEvent = \$('#input-file-events').dropify();
    
            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm(\"Do you really want to delete \\\"\" + element.file.name + \"\\\" ?\");
            });
    
            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });
    
            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });
    
            var drDestroy = \$('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            \$('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
</script>

";
        
        $__internal_48ed5fb6ad86a4ca7b31897ac79d93630736d1b91a500a38a154ecfcca5e171e->leave($__internal_48ed5fb6ad86a4ca7b31897ac79d93630736d1b91a500a38a154ecfcca5e171e_prof);

        
        $__internal_f7d920c78b6a1684a95941c1ac9173ae6187eae1943d6c8b165e80b982d8733f->leave($__internal_f7d920c78b6a1684a95941c1ac9173ae6187eae1943d6c8b165e80b982d8733f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Pages/newSlots.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 89,  244 => 88,  226 => 78,  216 => 74,  210 => 73,  206 => 72,  197 => 69,  182 => 63,  176 => 62,  172 => 61,  168 => 59,  166 => 58,  160 => 57,  154 => 56,  138 => 42,  127 => 37,  123 => 36,  119 => 35,  115 => 33,  111 => 32,  100 => 24,  94 => 20,  84 => 19,  74 => 11,  65 => 10,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@AppBundle/Admin/base.html.twig\" %}

{% block styles %}


<link href=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.css\" rel=\"stylesheet\">
<link href=\"/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card card-outline-info\">
                    <div class=\"card-header\">
                        <h4 class=\"m-b-0 text-white\">Manage Delivery Slots | {% for lo in location %}{{ lo.title }}   {% endfor %}
</h4>

                    </div>
                    <div class=\"card-body\">
                    <a href=\"{{ path('edit_slots',{'id':id}) }}\"class=\"btn btn-primary btn-sm\"  style=\"float:right;\">Add/edit Timings</a>
    <table class=\"table\" id=\"addvar\">
      <tr>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Order Per Slot</th>
       
      </tr>
    {% for da in data %}

          <tr>
<td>{{ da.start }}</td>
<td>{{ da.end }}</td>
<td>{{ da.orders }}</td>


          </tr>
      {% endfor %}
    </table>



<hr>
        <table class=\"table\" id=\"myTable\">
       <thead>
        <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Action</th>        
        </tr>
        </thead>
        <tbody>
       {% for slots in slot %}  
       {% for st in status %}   
       {% if st.start == slots.start and st.end == slots.end  and st.date == slots.date %}
     
<tr>
<td>{{ slots.date }} </td>
<td>{{ slots.start }} - {{ slots.end }}</td>
<td><a href=\"{{ path('unblock_slot',{'id':st.id,'date':slots.date,'area':id}) }}\" class=\"btn btn-success btn-sm\">unblock</a></td>
</tr>
{% else %}
{% endif %}
{% endfor %}
{% endfor %}
 {% for slots in slot %}  

<tr>
<td>{{ slots.date }}</td>
<td>{{ slots.start }} - {{ slots.end }}</td>
<td><a href=\"{{ path('block_slot',{'id':slots.id,'date':slots.date,'area':id}) }}\" class=\"btn btn-danger btn-sm\">block</a></td>
</tr>

{% endfor %}

</tbody>
           </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
{% endblock %}

{% block scripts %}

<script src=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.js\"></script>
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"/assets/plugins/moment/moment.js\"></script>

<script src=\"/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js\"></script>
<script>

      \$(document).ready(function(){

    \$('#xss').bootstrapMaterialDatePicker({ format : 'HH:mm', time: true, date: false });
        var count=0;
      \$('#variationAdd').click(function(){
// alert('add');
\$('#addvar').append('<tr><th><input type=\"text\" class=\"form-control\" placeholder=\"9-00 AM\" name=\"start[]\" required></th><th><input type=\"text\" class=\"form-control\"  placeholder=\"11-00 AM\" name=\"end[]\"></th><th><input type=\"number\" class=\"form-control\" placeholder=\"order per slot\"  name=\"slot[]\"></th><td><a class=\"btn btn-danger \" style=\"float:right;\"  onclick=\"removeVariant(this)\" data-toggle=\"collapse\" data-parent=\"#col\"  href=\"#\" ><i class=\"fa fa-trash\"></i></a></td></tr>');

count++;
});

// console.log(items)
//       });

      });


       function removeVariant(obj){
// \$(this).attr(\"data-usr\" , '');

        \$(obj).parent().parent().remove();

    }
    function save(x,itemname,id,parent)
    {
var id=fixed(x,itemname,id,parent);

    }

     // PICK THE VALUES FROM EACH TEXTBOX WHEN \"SUBMIT\" BUTTON IS CLICKED.
   

    \$(document).ready(function() {
        \$('#myTable').DataTable();
    });

    
        \$(\"input[type='checkbox']\").bootstrapSwitch();
        \$(document).ready(function() {
            // Basic
            \$('.dropify').dropify();
            // Translated
            \$('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });
    
            // Used events
            var drEvent = \$('#input-file-events').dropify();
    
            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm(\"Do you really want to delete \\\"\" + element.file.name + \"\\\" ?\");
            });
    
            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });
    
            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });
    
            var drDestroy = \$('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            \$('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
</script>

{% endblock %}", "AppBundle:Admin:Pages/newSlots.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Pages/newSlots.html.twig");
    }
}
