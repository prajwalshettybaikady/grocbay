<?php

/* @AppBundle/Admin/base.html.twig */
class __TwigTemplate_9c07e709cbc70ac997026d8d36c2c1620dc439a8271b59724bb8ef4afe4955a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ad0decacee85eaf569c02599d3bb7485071b3070c40d227382678688ef7031a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad0decacee85eaf569c02599d3bb7485071b3070c40d227382678688ef7031a->enter($__internal_3ad0decacee85eaf569c02599d3bb7485071b3070c40d227382678688ef7031a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Admin/base.html.twig"));

        $__internal_4d5afde0bc99de492bdd95ad4d42d13dac073e0ebc4d7463bc88503abaeeffc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5afde0bc99de492bdd95ad4d42d13dac073e0ebc4d7463bc88503abaeeffc4->enter($__internal_4d5afde0bc99de492bdd95ad4d42d13dac073e0ebc4d7463bc88503abaeeffc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Admin/base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
        } else {
            // line 3
            echo "<script type=\"text/javascript\">
window.location.href = \"";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_login");
            echo "\"; </script>
 ";
        }
        // line 6
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/assets/images/favicon.png\">
    <title>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "baseUrl", array()), "html", null, true);
        echo " - admin</title>
     <link href=\"/assets/assets/css/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link href=\"/assets/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <link href=\"/assets/assets/css/components/tabs-accordian/custom-accordions.css\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href=\"/assets/plugins/apex/apexcharts.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/assets/css/dashboard/dash_1.css\" rel=\"stylesheet\" type=\"text/css\" class=\"dashboard-analytics\" />
    <link href=\"/assets/assets/css/dashboard/dash_2.css\" rel=\"stylesheet\" type=\"text/css\" class=\"dashboard-analytics\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/assets/css/forms/theme-checkbox-radio.css\">
    <link href=\"/assets/assets/css/custom.css\" rel=\"stylesheet\" type=\"text/css\" class=\"dashboard-analytics\" />
    <link href=\"/assets/plugins/drag-and-drop/dragula/dragula.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/assets/assets/css/fastselect.min.css\" rel=\"stylesheet\">
 <link href=\"/assets/assets/css/apps/scrumboard.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/forms/theme-checkbox-radio.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/plugins/drag-and-drop/dragula/example.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/tables/table-basic.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css\">
    <link href=\"/assets/assets/css/users/user-profile.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/forms/switches.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"/assets/plugins/dropify/dist/css/dropify.min.css\">
    <link href=\"/assets/assets/css/users/user-profile.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/components/tabs-accordian/custom-tabs.css\" type=\"text/css\" />
     <script src=\"/assets/assets/js/libs/jquery-3.1.1.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/plugins/table/datatable/datatables.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/plugins/table/datatable/dt-global_style.css\">
    
    <link href=\"/assets/assets/css/apps/todolist.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/assets/plugins/Bootstrap Multiselect/bootstrap-multiselect.css\">
    <link href=\"/assets/plugins/tagInput/tags-input.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"/assets/assets/css/scrollspyNav.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/plugins/editors/quill/quill.snow.css\">      <link rel=\"stylesheet\" href=\"/assets/editor/src/richtext.min.css\">  <link rel=\"stylesheet\" href=\"/assets/editor/src/richtext.min.css\">
        <script type=\"text/javascript\" src=\"/assets/editor/src/jquery.richtext.js\"></script>
    ";
        // line 59
        $this->displayBlock('styles', $context, $blocks);
        // line 60
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
</head>

<body class=\"dashboard-analytics\">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
          <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        ";
        // line 75
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "userType", array()) == "root")) {
            // line 76
            echo "                ";
            $this->loadTemplate("@AppBundle/Admin/Properties/leftSideBarAdmin.html.twig", "@AppBundle/Admin/base.html.twig", 76)->display($context);
            // line 77
            echo "
        ";
        } else {
            // line 79
            echo "        ";
            $this->loadTemplate("@AppBundle/Admin/Properties/leftSideBar.html.twig", "@AppBundle/Admin/base.html.twig", 79)->display($context);
            // line 80
            echo "        ";
        }
        // line 81
        echo "        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
           ";
        // line 87
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "userType", array()) == "root")) {
            // line 88
            echo "        ";
            $this->loadTemplate("@AppBundle/Admin/Properties/headerMainAdmin.html.twig", "@AppBundle/Admin/base.html.twig", 88)->display($context);
            // line 89
            echo "
        ";
        } else {
            // line 91
            echo "        ";
            $this->loadTemplate("@AppBundle/Admin/Properties/headerMain.html.twig", "@AppBundle/Admin/base.html.twig", 91)->display($context);
            // line 92
            echo "        ";
        }
        // line 93
        echo "        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->    


      

         <div id=\"content\" class=\"main-content\">

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
            
                <!-- Row -->
                <div class=\"row\">
                    <!-- Column -->
                    <div class=\"col-md-12\" style=\"margin-top:20px\">
                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 111
            echo "                            <div class=\"alert alert-success\"> <i class=\"ti-check\"></i> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button>
                            </div>                         
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 116
            echo "                            <div class=\"alert alert-danger\"> <i class=\"ti-na\"></i> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "                    </div>
                </div>
                <!-- Row -->
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            ";
        // line 134
        $this->loadTemplate("@AppBundle/Admin/Properties/footer.html.twig", "@AppBundle/Admin/base.html.twig", 134)->display($context);
        // line 135
        echo "              
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
       
    <!-- Bootstrap tether Core JavaScript -->
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"/assets/bootstrap/js/popper.min.js\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"/assets/assets/js/app.js\"></script>
        <script src=\"/assets/assets/js/ie11fix/fn.fix-padStart.js\"></script>
    <script src=\"/assets/plugins/editors/quill/quill.js\"></script>
    <script src=\"/assets/assets/js/apps/todoList.js\"></script>
    <script>
        \$(document).ready(function() {
            App.init();
        });
    </script>
        <script src=\"/assets/plugins/table/datatable/datatables.js\"></script>
    <script src=\"/assets/plugins/tagInput/tags-input.js\"></script>

    <script src=\"/assets/assets/js/custom.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src=\"/assets/plugins/dropify/dist/js/dropify.min.js\"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=\"/assets/plugins/apex/apexcharts.min.js\"></script>
    <script src=\"/assets/assets/js/dashboard/dash_1.js\"></script>
        <script src=\"/assets/plugins/Bootstrap Multiselect/bootstrap-multiselect.js\"></script>
                <script src=\"/assets/assets/js/fastselect.standalone.js\"></script>

   <script src=\"/assets/assets/js/ie11fix/fn.fix-padStart.js\"></script>
    <script src=\"/assets/assets/js/apps/scrumboard.js\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script type=\"text/javascript\" src=\"/assets/assets/js/dashboard/dash_2.js\"></script>
    <script src=\"/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js\"></script>
 <script src=\"/assets/assets/js/scrollspyNav.js\"></script>

    <script src=\"/assets/assets/plugins/bootstrap-touchspin/custom-bootstrap-touchspin.js\"></script>
 <script>
        var instance = new TagsInput({
            selector: 'skill-input'
        });



         \$(document).ready(function() {
\$('.multipleSelect').fastselect();
});

    \$( function() {
    var availableTags = [
      \"Shwetha\",
      \"Abc\",
      \"xyz\",
      \"Shruthi\",
      \"Ashwini\",
      \"Ramya\"
    ];
    \$( \"#tags\" ).autocomplete({
      source: availableTags
    });
  } );
    
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
    <script type=\"text/javascript\">
\$(document).ready(function(){


    jQuery(\"[name=category]\").click(function(source) { 
        checkboxes = jQuery('.category');
        for(var i in checkboxes){
            checkboxes[i].checked = source.target.checked;
        }
    });

    jQuery(\"[name=subcategory]\").click(function(source) { 
        checkboxes = jQuery('.subcategory');
        for(var i in checkboxes){
            checkboxes[i].checked = source.target.checked;
        }
    });
     jQuery(\"[name=nestedcategory]\").click(function(source) { 
        checkboxes = jQuery('.nestedcategory');
        for(var i in checkboxes){
            checkboxes[i].checked = source.target.checked;
        }
    });
});
</script>
    <script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?sensor=false&amp;key=AIzaSyBSR3pigsWMH7goi_CthGQFckfb5QPOH8E&amp;v=3.21.5a&amp;libraries=drawing&amp;signed_in=true&amp;libraries=places,drawing,geometry\"></script>
    ";
        // line 270
        $this->displayBlock('scripts', $context, $blocks);
        // line 271
        echo "</body>

</html>";
        
        $__internal_3ad0decacee85eaf569c02599d3bb7485071b3070c40d227382678688ef7031a->leave($__internal_3ad0decacee85eaf569c02599d3bb7485071b3070c40d227382678688ef7031a_prof);

        
        $__internal_4d5afde0bc99de492bdd95ad4d42d13dac073e0ebc4d7463bc88503abaeeffc4->leave($__internal_4d5afde0bc99de492bdd95ad4d42d13dac073e0ebc4d7463bc88503abaeeffc4_prof);

    }

    // line 59
    public function block_styles($context, array $blocks = array())
    {
        $__internal_42610b6a88a198354e0bb67d5b71f4e6ebfbb64195c17b2077086d82ff11babe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42610b6a88a198354e0bb67d5b71f4e6ebfbb64195c17b2077086d82ff11babe->enter($__internal_42610b6a88a198354e0bb67d5b71f4e6ebfbb64195c17b2077086d82ff11babe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_67c7998724098572f9f864ad2bdf66b6c4ef2655ea6a7b33fdf64a973663c866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c7998724098572f9f864ad2bdf66b6c4ef2655ea6a7b33fdf64a973663c866->enter($__internal_67c7998724098572f9f864ad2bdf66b6c4ef2655ea6a7b33fdf64a973663c866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        
        $__internal_67c7998724098572f9f864ad2bdf66b6c4ef2655ea6a7b33fdf64a973663c866->leave($__internal_67c7998724098572f9f864ad2bdf66b6c4ef2655ea6a7b33fdf64a973663c866_prof);

        
        $__internal_42610b6a88a198354e0bb67d5b71f4e6ebfbb64195c17b2077086d82ff11babe->leave($__internal_42610b6a88a198354e0bb67d5b71f4e6ebfbb64195c17b2077086d82ff11babe_prof);

    }

    // line 120
    public function block_body($context, array $blocks = array())
    {
        $__internal_244d77367928f0cab136180b5b52eff41140ca88246bd5341b97f597967960ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244d77367928f0cab136180b5b52eff41140ca88246bd5341b97f597967960ef->enter($__internal_244d77367928f0cab136180b5b52eff41140ca88246bd5341b97f597967960ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1901a4ce16312967e7829606acd67849a613c112b08f1e5266a9dcfa2b015f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1901a4ce16312967e7829606acd67849a613c112b08f1e5266a9dcfa2b015f7f->enter($__internal_1901a4ce16312967e7829606acd67849a613c112b08f1e5266a9dcfa2b015f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1901a4ce16312967e7829606acd67849a613c112b08f1e5266a9dcfa2b015f7f->leave($__internal_1901a4ce16312967e7829606acd67849a613c112b08f1e5266a9dcfa2b015f7f_prof);

        
        $__internal_244d77367928f0cab136180b5b52eff41140ca88246bd5341b97f597967960ef->leave($__internal_244d77367928f0cab136180b5b52eff41140ca88246bd5341b97f597967960ef_prof);

    }

    // line 270
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_e0d2a682d4b03decabb0596847559b6061bcab8f1ffd3c65b453e325b7c024d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d2a682d4b03decabb0596847559b6061bcab8f1ffd3c65b453e325b7c024d0->enter($__internal_e0d2a682d4b03decabb0596847559b6061bcab8f1ffd3c65b453e325b7c024d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_845f010be3a981e62b18cef3438d2c9b455d0f15eeb76d99e117ad750e45bd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845f010be3a981e62b18cef3438d2c9b455d0f15eeb76d99e117ad750e45bd8a->enter($__internal_845f010be3a981e62b18cef3438d2c9b455d0f15eeb76d99e117ad750e45bd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_845f010be3a981e62b18cef3438d2c9b455d0f15eeb76d99e117ad750e45bd8a->leave($__internal_845f010be3a981e62b18cef3438d2c9b455d0f15eeb76d99e117ad750e45bd8a_prof);

        
        $__internal_e0d2a682d4b03decabb0596847559b6061bcab8f1ffd3c65b453e325b7c024d0->leave($__internal_e0d2a682d4b03decabb0596847559b6061bcab8f1ffd3c65b453e325b7c024d0_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 270,  392 => 120,  375 => 59,  363 => 271,  361 => 270,  224 => 135,  222 => 134,  207 => 121,  204 => 120,  193 => 116,  188 => 115,  177 => 111,  173 => 110,  154 => 93,  151 => 92,  148 => 91,  144 => 89,  141 => 88,  139 => 87,  131 => 81,  128 => 80,  125 => 79,  121 => 77,  118 => 76,  116 => 75,  99 => 60,  97 => 59,  53 => 18,  39 => 6,  34 => 4,  31 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user %}
{% else %}
<script type=\"text/javascript\">
window.location.href = \"{{path('admin_login')}}\"; </script>
 {% endif %}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/assets/images/favicon.png\">
    <title>{{ app.request.baseUrl }} - admin</title>
     <link href=\"/assets/assets/css/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link href=\"/assets/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <link href=\"/assets/assets/css/components/tabs-accordian/custom-accordions.css\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href=\"/assets/plugins/apex/apexcharts.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/assets/css/dashboard/dash_1.css\" rel=\"stylesheet\" type=\"text/css\" class=\"dashboard-analytics\" />
    <link href=\"/assets/assets/css/dashboard/dash_2.css\" rel=\"stylesheet\" type=\"text/css\" class=\"dashboard-analytics\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/assets/css/forms/theme-checkbox-radio.css\">
    <link href=\"/assets/assets/css/custom.css\" rel=\"stylesheet\" type=\"text/css\" class=\"dashboard-analytics\" />
    <link href=\"/assets/plugins/drag-and-drop/dragula/dragula.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/assets/assets/css/fastselect.min.css\" rel=\"stylesheet\">
 <link href=\"/assets/assets/css/apps/scrumboard.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/forms/theme-checkbox-radio.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/plugins/drag-and-drop/dragula/example.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/tables/table-basic.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css\">
    <link href=\"/assets/assets/css/users/user-profile.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/forms/switches.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"/assets/plugins/dropify/dist/css/dropify.min.css\">
    <link href=\"/assets/assets/css/users/user-profile.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/components/tabs-accordian/custom-tabs.css\" type=\"text/css\" />
     <script src=\"/assets/assets/js/libs/jquery-3.1.1.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/plugins/table/datatable/datatables.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/plugins/table/datatable/dt-global_style.css\">
    
    <link href=\"/assets/assets/css/apps/todolist.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/assets/plugins/Bootstrap Multiselect/bootstrap-multiselect.css\">
    <link href=\"/assets/plugins/tagInput/tags-input.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"/assets/assets/css/scrollspyNav.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/plugins/editors/quill/quill.snow.css\">      <link rel=\"stylesheet\" href=\"/assets/editor/src/richtext.min.css\">  <link rel=\"stylesheet\" href=\"/assets/editor/src/richtext.min.css\">
        <script type=\"text/javascript\" src=\"/assets/editor/src/jquery.richtext.js\"></script>
    {% block styles %}{% endblock %}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
</head>

<body class=\"dashboard-analytics\">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
          <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        {% if app.user.userType == 'root' %}
                {% include \"@AppBundle/Admin/Properties/leftSideBarAdmin.html.twig\" %}

        {% else %}
        {% include \"@AppBundle/Admin/Properties/leftSideBar.html.twig\" %}
        {% endif %}
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
           {% if app.user.userType == 'root' %}
        {% include \"@AppBundle/Admin/Properties/headerMainAdmin.html.twig\" %}

        {% else %}
        {% include \"@AppBundle/Admin/Properties/headerMain.html.twig\" %}
        {% endif %}
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->    


      

         <div id=\"content\" class=\"main-content\">

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
            
                <!-- Row -->
                <div class=\"row\">
                    <!-- Column -->
                    <div class=\"col-md-12\" style=\"margin-top:20px\">
                        {% for message in app.flashes('success') %}
                            <div class=\"alert alert-success\"> <i class=\"ti-check\"></i> {{ message }}
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button>
                            </div>                         
                        {% endfor %}
                        {% for message in app.flashes('error') %}
                            <div class=\"alert alert-danger\"> <i class=\"ti-na\"></i> {{ message }}
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> <span aria-hidden=\"true\">&times;</span> </button>
                            </div>
                        {% endfor %}
                        {% block body %}{% endblock %}
                    </div>
                </div>
                <!-- Row -->
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            {% include \"@AppBundle/Admin/Properties/footer.html.twig\" %}
              
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
       
    <!-- Bootstrap tether Core JavaScript -->
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"/assets/bootstrap/js/popper.min.js\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"/assets/assets/js/app.js\"></script>
        <script src=\"/assets/assets/js/ie11fix/fn.fix-padStart.js\"></script>
    <script src=\"/assets/plugins/editors/quill/quill.js\"></script>
    <script src=\"/assets/assets/js/apps/todoList.js\"></script>
    <script>
        \$(document).ready(function() {
            App.init();
        });
    </script>
        <script src=\"/assets/plugins/table/datatable/datatables.js\"></script>
    <script src=\"/assets/plugins/tagInput/tags-input.js\"></script>

    <script src=\"/assets/assets/js/custom.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src=\"/assets/plugins/dropify/dist/js/dropify.min.js\"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=\"/assets/plugins/apex/apexcharts.min.js\"></script>
    <script src=\"/assets/assets/js/dashboard/dash_1.js\"></script>
        <script src=\"/assets/plugins/Bootstrap Multiselect/bootstrap-multiselect.js\"></script>
                <script src=\"/assets/assets/js/fastselect.standalone.js\"></script>

   <script src=\"/assets/assets/js/ie11fix/fn.fix-padStart.js\"></script>
    <script src=\"/assets/assets/js/apps/scrumboard.js\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script type=\"text/javascript\" src=\"/assets/assets/js/dashboard/dash_2.js\"></script>
    <script src=\"/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js\"></script>
 <script src=\"/assets/assets/js/scrollspyNav.js\"></script>

    <script src=\"/assets/assets/plugins/bootstrap-touchspin/custom-bootstrap-touchspin.js\"></script>
 <script>
        var instance = new TagsInput({
            selector: 'skill-input'
        });



         \$(document).ready(function() {
\$('.multipleSelect').fastselect();
});

    \$( function() {
    var availableTags = [
      \"Shwetha\",
      \"Abc\",
      \"xyz\",
      \"Shruthi\",
      \"Ashwini\",
      \"Ramya\"
    ];
    \$( \"#tags\" ).autocomplete({
      source: availableTags
    });
  } );
    
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
    <script type=\"text/javascript\">
\$(document).ready(function(){


    jQuery(\"[name=category]\").click(function(source) { 
        checkboxes = jQuery('.category');
        for(var i in checkboxes){
            checkboxes[i].checked = source.target.checked;
        }
    });

    jQuery(\"[name=subcategory]\").click(function(source) { 
        checkboxes = jQuery('.subcategory');
        for(var i in checkboxes){
            checkboxes[i].checked = source.target.checked;
        }
    });
     jQuery(\"[name=nestedcategory]\").click(function(source) { 
        checkboxes = jQuery('.nestedcategory');
        for(var i in checkboxes){
            checkboxes[i].checked = source.target.checked;
        }
    });
});
</script>
    <script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?sensor=false&amp;key=AIzaSyBSR3pigsWMH7goi_CthGQFckfb5QPOH8E&amp;v=3.21.5a&amp;libraries=drawing&amp;signed_in=true&amp;libraries=places,drawing,geometry\"></script>
    {% block scripts %}{% endblock %}
</body>

</html>", "@AppBundle/Admin/base.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/base.html.twig");
    }
}
