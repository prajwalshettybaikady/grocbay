<?php

/* AppBundle:Admin:AppManager/createMembership.html.twig */
class __TwigTemplate_1f0bcb1618f7bd8cea9abda75544424dd55a49bebf197b8c012d4ba7f83cbce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:AppManager/createMembership.html.twig", 1);
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
        $__internal_41c7721037bd81105e77d3d4936a1302873e4264e89f28534e6a39eabb159d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c7721037bd81105e77d3d4936a1302873e4264e89f28534e6a39eabb159d4e->enter($__internal_41c7721037bd81105e77d3d4936a1302873e4264e89f28534e6a39eabb159d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:AppManager/createMembership.html.twig"));

        $__internal_2fa88eeaaf648c44e3ca0601861a3c74d4be41ba306076c06a9355c5fcbcfe43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa88eeaaf648c44e3ca0601861a3c74d4be41ba306076c06a9355c5fcbcfe43->enter($__internal_2fa88eeaaf648c44e3ca0601861a3c74d4be41ba306076c06a9355c5fcbcfe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:AppManager/createMembership.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c7721037bd81105e77d3d4936a1302873e4264e89f28534e6a39eabb159d4e->leave($__internal_41c7721037bd81105e77d3d4936a1302873e4264e89f28534e6a39eabb159d4e_prof);

        
        $__internal_2fa88eeaaf648c44e3ca0601861a3c74d4be41ba306076c06a9355c5fcbcfe43->leave($__internal_2fa88eeaaf648c44e3ca0601861a3c74d4be41ba306076c06a9355c5fcbcfe43_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        $__internal_a21f21996c530020365b79a14d096a19a5c8c10ddef4cbdb75b27ab9bf36e6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21f21996c530020365b79a14d096a19a5c8c10ddef4cbdb75b27ab9bf36e6f4->enter($__internal_a21f21996c530020365b79a14d096a19a5c8c10ddef4cbdb75b27ab9bf36e6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_92a161fdcfe14528352cdaa2944036d7326bc9fcda6465579407a7acc70d2e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a161fdcfe14528352cdaa2944036d7326bc9fcda6465579407a7acc70d2e62->enter($__internal_92a161fdcfe14528352cdaa2944036d7326bc9fcda6465579407a7acc70d2e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "

<link href=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.css\" rel=\"stylesheet\">

";
        
        $__internal_92a161fdcfe14528352cdaa2944036d7326bc9fcda6465579407a7acc70d2e62->leave($__internal_92a161fdcfe14528352cdaa2944036d7326bc9fcda6465579407a7acc70d2e62_prof);

        
        $__internal_a21f21996c530020365b79a14d096a19a5c8c10ddef4cbdb75b27ab9bf36e6f4->leave($__internal_a21f21996c530020365b79a14d096a19a5c8c10ddef4cbdb75b27ab9bf36e6f4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0c9fc0db2fa4505cc6aba65669f08c860e64e99b07a3ed96f67622de9b9b17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c9fc0db2fa4505cc6aba65669f08c860e64e99b07a3ed96f67622de9b9b17a->enter($__internal_b0c9fc0db2fa4505cc6aba65669f08c860e64e99b07a3ed96f67622de9b9b17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9472852971e1a0ff93b91ab92c16e79727b0ed4639c8d88aecb84c3ee67e9daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9472852971e1a0ff93b91ab92c16e79727b0ed4639c8d88aecb84c3ee67e9daa->enter($__internal_9472852971e1a0ff93b91ab92c16e79727b0ed4639c8d88aecb84c3ee67e9daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card card-outline-info\">
                    ";
        // line 19
        echo ($context["msg"] ?? $this->getContext($context, "msg"));
        echo "
                    <div class=\"card-header\">
                        <h4 class=\"m-b-0 text-white\">Create Membership Form</h4>
                    </div>
                    <div class=\"card-body\">
<form method=\"post\" action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_membership");
        echo "\" enctype=\"multipart/form-data\">       
          <div class=\"form-body\">     
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["parent"] ?? $this->getContext($context, "parent")));
        foreach ($context['_seq'] as $context["_key"] => $context["pdata"]) {
            // line 27
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                  
                                <div class=\"row p-t-20\">                                
                                    <div class=\"col-md-12\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                <label for=\"name\">Membership Plan*</label>
                                                  <input type=\"text\" name=\"membership_plan\" class=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), 0, array()), "name", array()), "html", null, true);
        echo "\">
                                                </div>
                                                </div>
                                          </div>
                                                                      
                                         <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                <label for=\"name\">Display Image *[Before Purchasing Membership]</label>
                                                  <input type=\"file\" name=\"image\" class=\"dropify\" data-default-file=\"/uploads/";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), 0, array()), "avator", array()), "html", null, true);
        echo "\">
                                                </div>
                                                </div>
                                                 <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                <label for=\"name\">Post Image *[After Purchasing Membership]</label>
                                                  <input type=\"file\" name=\"post_img\" class=\"dropify\" data-default-file=\"/uploads/";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), 0, array()), "post_image", array()), "html", null, true);
        echo "\">
                                                </div>
                                                </div>
                                            <!--/span-->
                                           
                                            <!--/span-->
                                        </div>      
                                       <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                  <label for=\"name\">Description *</label>
                                                  <textarea class=\"form-control\" name=\"description\" rows=\"6\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), 0, array()), "description", array()), "html", null, true);
        echo "</textarea>
                                                </div>
                                            </div>
                                </div>
                                <!--/row-->
                      
                             
                             
                            </div>

        <table class=\"table\" id=\"addvar\">
        <tr>
        <th>Plan Name</th>
        <th>Duration</th>
        <th>Mrp</th>
        <th>Discounted Price</th>       
        <th></th>
          <th><button class=\"btn btn-primary btn-sm\" id=\"variationAdd\" type=\"button\">Add Variation</button></th>
        </tr>
          ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["child"] ?? $this->getContext($context, "child")));
        foreach ($context['_seq'] as $context["_key"] => $context["cdata"]) {
            // line 80
            echo "           <tr>
    <td><input type=\"hidden\"  class=\"form-control\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["cdata"], "id", array()), "html", null, true);
            echo "\" name=\"id[]\"><input type=\"text\"  class=\"form-control\" placeholder=\"plan name\" name=\"plan_name[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cdata"], "name", array()), "html", null, true);
            echo "\"></td>
        <td>
            <select class=\"form-control\" style=\"width:100px\"  name=\"duration[]\">
                <option value=\"1\" ";
            // line 84
            if (($this->getAttribute($context["cdata"], "duration", array()) == "1")) {
                echo " selected ";
            }
            echo ">1 Month</option>
                 <option value=\"2\" ";
            // line 85
            if (($this->getAttribute($context["cdata"], "duration", array()) == "2")) {
                echo " selected ";
            }
            echo ">2 Month</option>
                  <option value=\"3\" ";
            // line 86
            if (($this->getAttribute($context["cdata"], "duration", array()) == "3")) {
                echo " selected ";
            }
            echo ">3 Month</option>
                   <option value=\"4\" ";
            // line 87
            if (($this->getAttribute($context["cdata"], "duration", array()) == "4")) {
                echo " selected ";
            }
            echo ">4 Month</option>
                    <option value=\"5\" ";
            // line 88
            if (($this->getAttribute($context["cdata"], "duration", array()) == "5")) {
                echo " selected ";
            }
            echo ">5 Month</option>
                      <option value=\"6\" ";
            // line 89
            if (($this->getAttribute($context["cdata"], "duration", array()) == "6")) {
                echo " selected ";
            }
            echo ">6 Month</option>
                       <option value=\"7\" ";
            // line 90
            if (($this->getAttribute($context["cdata"], "duration", array()) == "7")) {
                echo " selected ";
            }
            echo ">7 Month</option>
                        <option value=\"8\" ";
            // line 91
            if (($this->getAttribute($context["cdata"], "duration", array()) == "8")) {
                echo " selected ";
            }
            echo ">8 Month</option>
                        <option value=\"9\" ";
            // line 92
            if (($this->getAttribute($context["cdata"], "duration", array()) == "9")) {
                echo " selected ";
            }
            echo ">9 Month</option>
                        <option value=\"10\" ";
            // line 93
            if (($this->getAttribute($context["cdata"], "duration", array()) == "10")) {
                echo " selected ";
            }
            echo ">10 Month</option>
                        <option value=\"11\" ";
            // line 94
            if (($this->getAttribute($context["cdata"], "duration", array()) == "11")) {
                echo " selected ";
            }
            echo ">11 Month</option>
                        <option value=\"12\" ";
            // line 95
            if (($this->getAttribute($context["cdata"], "duration", array()) == "12")) {
                echo " selected ";
            }
            echo ">12 Month</option>

        </select>
    </td>
    <td><input type=\"text\"  class=\"form-control\" placeholder=\"Mrp\"  name=\"mrp[]\"  value=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["cdata"], "price", array()), "html", null, true);
            echo "\"></td>
    <td><input type=\"text\"  class=\"form-control\" placeholder=\"Discounted Price\"  name=\"discounted[]\"  value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["cdata"], "discounted_price", array()), "html", null, true);
            echo "\"></td>
    <td>  <a class=\"btn btn-danger \" style=\"float:right;\"  onclick=\"removeVariant(this)\" data-toggle=\"collapse\" data-parent=\"#col\"  href=\"#\" ><i class=\"fa fa-trash\"></i></a></td>


          </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cdata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "<!--           <tr>
    <td><input type=\"hidden\"  class=\"form-control\" value=\"new\" name=\"id[]\"><input type=\"text\"  class=\"form-control\" placeholder=\"plan name\" name=\"plan_name[]\"></td>
        <td>
            <select class=\"form-control\" style=\"width:100px\"  name=\"duration[]\">
                <option value=\"1\">1 Month</option>
                 <option value=\"2\">2 Month</option>
                  <option value=\"3\">3 Month</option>
                   <option value=\"4\">4 Month</option>
                    <option value=\"5\">5 Month</option>
                      <option value=\"6\">6 Month</option>
                       <option value=\"7\">7 Month</option>
                        <option value=\"8\">8 Month</option>
                        <option value=\"9\">9 Month</option>
                        <option value=\"10\">10 Month</option>
                        <option value=\"11\">11 Month</option>
                        <option value=\"12\">12 Month</option>

        </select>
    </td>
    <td><input type=\"text\"  class=\"form-control\" placeholder=\"Mrp\"  name=\"mrp[]\"></td>
    <td><input type=\"text\"  class=\"form-control\" placeholder=\"Discounted Price\"  name=\"discounted[]\"></td>
    <td>  <a class=\"btn btn-danger \" style=\"float:right;\"  onclick=\"removeVariant(this)\" data-toggle=\"collapse\" data-parent=\"#col\"  href=\"#\" ><i class=\"fa fa-trash\"></i></a></td>


          </tr>
 -->
     
           </table>

</li>
        </ul>
      </div>
    </div>

<script>

      \$(document).ready(function(){
        var count=0;
      \$('#variationAdd').click(function(){
// alert('add');
\$('#addvar').append('</tr><tr><td><input type=\"hidden\"  class=\"form-control\" value=\"new\" name=\"id[]\"><input type=\"text\"  class=\"form-control\" placeholder=\"plan name\" name=\"plan_name[]\"></td><td><select class=\"form-control\" style=\"width:100px\"  name=\"duration[]\"><option value=\"1\">1 Month</option><option value=\"2\">2 Month</option><option value=\"3\">3 Month</option><option value=\"4\">4 Month</option><option value=\"5\">5 Month</option><option value=\"6\">6 Month</option><option value=\"7\">7 Month</option><option value=\"8\">8 Month</option><option value=\"9\">9 Month</option><option value=\"10\">10 Month</option><option value=\"11\">11 Month</option><option value=\"12\">12 Month</option></select></td><td><input type=\"text\" class=\"form-control\" placeholder=\"Mrp\"  name=\"mrp[]\"></td><td><input type=\"text\"  class=\"form-control\" placeholder=\"Discounted Price\"  name=\"discounted[]\"></td><td><a class=\"btn btn-danger \" style=\"float:right;\"  onclick=\"removeVariant(this)\" data-toggle=\"collapse\" data-parent=\"#col\"  href=\"#\" ><i class=\"fa fa-trash\"></i></a></td> </tr>');

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
   
</script>







                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-success\"> <i class=\"fa fa-check\"></i>Add</button>
                                <button type=\"button\" class=\"btn btn-inverse\">Cancel</button>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->

";
        
        $__internal_9472852971e1a0ff93b91ab92c16e79727b0ed4639c8d88aecb84c3ee67e9daa->leave($__internal_9472852971e1a0ff93b91ab92c16e79727b0ed4639c8d88aecb84c3ee67e9daa_prof);

        
        $__internal_b0c9fc0db2fa4505cc6aba65669f08c860e64e99b07a3ed96f67622de9b9b17a->leave($__internal_b0c9fc0db2fa4505cc6aba65669f08c860e64e99b07a3ed96f67622de9b9b17a_prof);

    }

    // line 191
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_74f9bc4c0c9d2c0752f6b5f9b721520e41d2f7ab3c82eb476107e102f7f78b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f9bc4c0c9d2c0752f6b5f9b721520e41d2f7ab3c82eb476107e102f7f78b3b->enter($__internal_74f9bc4c0c9d2c0752f6b5f9b721520e41d2f7ab3c82eb476107e102f7f78b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_c7c132aa0f4fc25dc086c84ec4c182eec41b63cfca34ec437dd4101a6dee067f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c132aa0f4fc25dc086c84ec4c182eec41b63cfca34ec437dd4101a6dee067f->enter($__internal_c7c132aa0f4fc25dc086c84ec4c182eec41b63cfca34ec437dd4101a6dee067f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 192
        echo "
<script src=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.js\"></script>

<script>
    
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
        
        $__internal_c7c132aa0f4fc25dc086c84ec4c182eec41b63cfca34ec437dd4101a6dee067f->leave($__internal_c7c132aa0f4fc25dc086c84ec4c182eec41b63cfca34ec437dd4101a6dee067f_prof);

        
        $__internal_74f9bc4c0c9d2c0752f6b5f9b721520e41d2f7ab3c82eb476107e102f7f78b3b->leave($__internal_74f9bc4c0c9d2c0752f6b5f9b721520e41d2f7ab3c82eb476107e102f7f78b3b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:AppManager/createMembership.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 192,  372 => 191,  278 => 106,  266 => 100,  262 => 99,  253 => 95,  247 => 94,  241 => 93,  235 => 92,  229 => 91,  223 => 90,  217 => 89,  211 => 88,  205 => 87,  199 => 86,  193 => 85,  187 => 84,  179 => 81,  176 => 80,  172 => 79,  150 => 60,  137 => 50,  128 => 44,  116 => 35,  107 => 28,  101 => 27,  97 => 26,  92 => 24,  84 => 19,  74 => 11,  65 => 10,  51 => 4,  42 => 3,  11 => 1,);
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

{% endblock %}

{% block body %}

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card card-outline-info\">
                    {{ msg | raw }}
                    <div class=\"card-header\">
                        <h4 class=\"m-b-0 text-white\">Create Membership Form</h4>
                    </div>
                    <div class=\"card-body\">
<form method=\"post\" action=\"{{ path('add_membership') }}\" enctype=\"multipart/form-data\">       
          <div class=\"form-body\">     
          {% for pdata in parent %}
       {% endfor %}
                  
                                <div class=\"row p-t-20\">                                
                                    <div class=\"col-md-12\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                <label for=\"name\">Membership Plan*</label>
                                                  <input type=\"text\" name=\"membership_plan\" class=\"form-control\" value=\"{{ parent.0.name }}\">
                                                </div>
                                                </div>
                                          </div>
                                                                      
                                         <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                <label for=\"name\">Display Image *[Before Purchasing Membership]</label>
                                                  <input type=\"file\" name=\"image\" class=\"dropify\" data-default-file=\"/uploads/{{ parent.0.avator }}\">
                                                </div>
                                                </div>
                                                 <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                <label for=\"name\">Post Image *[After Purchasing Membership]</label>
                                                  <input type=\"file\" name=\"post_img\" class=\"dropify\" data-default-file=\"/uploads/{{ parent.0.post_image }}\">
                                                </div>
                                                </div>
                                            <!--/span-->
                                           
                                            <!--/span-->
                                        </div>      
                                       <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                  <label for=\"name\">Description *</label>
                                                  <textarea class=\"form-control\" name=\"description\" rows=\"6\">{{ parent.0.description }}</textarea>
                                                </div>
                                            </div>
                                </div>
                                <!--/row-->
                      
                             
                             
                            </div>

        <table class=\"table\" id=\"addvar\">
        <tr>
        <th>Plan Name</th>
        <th>Duration</th>
        <th>Mrp</th>
        <th>Discounted Price</th>       
        <th></th>
          <th><button class=\"btn btn-primary btn-sm\" id=\"variationAdd\" type=\"button\">Add Variation</button></th>
        </tr>
          {% for cdata in child %}
           <tr>
    <td><input type=\"hidden\"  class=\"form-control\" value=\"{{ cdata.id }}\" name=\"id[]\"><input type=\"text\"  class=\"form-control\" placeholder=\"plan name\" name=\"plan_name[]\" value=\"{{ cdata.name }}\"></td>
        <td>
            <select class=\"form-control\" style=\"width:100px\"  name=\"duration[]\">
                <option value=\"1\" {% if cdata.duration == '1' %} selected {% endif %}>1 Month</option>
                 <option value=\"2\" {% if cdata.duration == '2' %} selected {% endif %}>2 Month</option>
                  <option value=\"3\" {% if cdata.duration == '3' %} selected {% endif %}>3 Month</option>
                   <option value=\"4\" {% if cdata.duration == '4' %} selected {% endif %}>4 Month</option>
                    <option value=\"5\" {% if cdata.duration == '5' %} selected {% endif %}>5 Month</option>
                      <option value=\"6\" {% if cdata.duration == '6' %} selected {% endif %}>6 Month</option>
                       <option value=\"7\" {% if cdata.duration == '7' %} selected {% endif %}>7 Month</option>
                        <option value=\"8\" {% if cdata.duration == '8' %} selected {% endif %}>8 Month</option>
                        <option value=\"9\" {% if cdata.duration == '9' %} selected {% endif %}>9 Month</option>
                        <option value=\"10\" {% if cdata.duration == '10' %} selected {% endif %}>10 Month</option>
                        <option value=\"11\" {% if cdata.duration == '11' %} selected {% endif %}>11 Month</option>
                        <option value=\"12\" {% if cdata.duration == '12' %} selected {% endif %}>12 Month</option>

        </select>
    </td>
    <td><input type=\"text\"  class=\"form-control\" placeholder=\"Mrp\"  name=\"mrp[]\"  value=\"{{ cdata.price }}\"></td>
    <td><input type=\"text\"  class=\"form-control\" placeholder=\"Discounted Price\"  name=\"discounted[]\"  value=\"{{ cdata.discounted_price }}\"></td>
    <td>  <a class=\"btn btn-danger \" style=\"float:right;\"  onclick=\"removeVariant(this)\" data-toggle=\"collapse\" data-parent=\"#col\"  href=\"#\" ><i class=\"fa fa-trash\"></i></a></td>


          </tr>
{% endfor %}
<!--           <tr>
    <td><input type=\"hidden\"  class=\"form-control\" value=\"new\" name=\"id[]\"><input type=\"text\"  class=\"form-control\" placeholder=\"plan name\" name=\"plan_name[]\"></td>
        <td>
            <select class=\"form-control\" style=\"width:100px\"  name=\"duration[]\">
                <option value=\"1\">1 Month</option>
                 <option value=\"2\">2 Month</option>
                  <option value=\"3\">3 Month</option>
                   <option value=\"4\">4 Month</option>
                    <option value=\"5\">5 Month</option>
                      <option value=\"6\">6 Month</option>
                       <option value=\"7\">7 Month</option>
                        <option value=\"8\">8 Month</option>
                        <option value=\"9\">9 Month</option>
                        <option value=\"10\">10 Month</option>
                        <option value=\"11\">11 Month</option>
                        <option value=\"12\">12 Month</option>

        </select>
    </td>
    <td><input type=\"text\"  class=\"form-control\" placeholder=\"Mrp\"  name=\"mrp[]\"></td>
    <td><input type=\"text\"  class=\"form-control\" placeholder=\"Discounted Price\"  name=\"discounted[]\"></td>
    <td>  <a class=\"btn btn-danger \" style=\"float:right;\"  onclick=\"removeVariant(this)\" data-toggle=\"collapse\" data-parent=\"#col\"  href=\"#\" ><i class=\"fa fa-trash\"></i></a></td>


          </tr>
 -->
     
           </table>

</li>
        </ul>
      </div>
    </div>

<script>

      \$(document).ready(function(){
        var count=0;
      \$('#variationAdd').click(function(){
// alert('add');
\$('#addvar').append('</tr><tr><td><input type=\"hidden\"  class=\"form-control\" value=\"new\" name=\"id[]\"><input type=\"text\"  class=\"form-control\" placeholder=\"plan name\" name=\"plan_name[]\"></td><td><select class=\"form-control\" style=\"width:100px\"  name=\"duration[]\"><option value=\"1\">1 Month</option><option value=\"2\">2 Month</option><option value=\"3\">3 Month</option><option value=\"4\">4 Month</option><option value=\"5\">5 Month</option><option value=\"6\">6 Month</option><option value=\"7\">7 Month</option><option value=\"8\">8 Month</option><option value=\"9\">9 Month</option><option value=\"10\">10 Month</option><option value=\"11\">11 Month</option><option value=\"12\">12 Month</option></select></td><td><input type=\"text\" class=\"form-control\" placeholder=\"Mrp\"  name=\"mrp[]\"></td><td><input type=\"text\"  class=\"form-control\" placeholder=\"Discounted Price\"  name=\"discounted[]\"></td><td><a class=\"btn btn-danger \" style=\"float:right;\"  onclick=\"removeVariant(this)\" data-toggle=\"collapse\" data-parent=\"#col\"  href=\"#\" ><i class=\"fa fa-trash\"></i></a></td> </tr>');

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
   
</script>







                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-success\"> <i class=\"fa fa-check\"></i>Add</button>
                                <button type=\"button\" class=\"btn btn-inverse\">Cancel</button>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->

{% endblock %}
{% block scripts %}

<script src=\"/assets/plugins/bootstrap-switch/bootstrap-switch.min.js\"></script>

<script>
    
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

{% endblock %}
", "AppBundle:Admin:AppManager/createMembership.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/AppManager/createMembership.html.twig");
    }
}
