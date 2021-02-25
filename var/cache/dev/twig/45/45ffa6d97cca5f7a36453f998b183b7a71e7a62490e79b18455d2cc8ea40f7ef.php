<?php

/* AppBundle:Admin:Pages/manageCategories.html.twig */
class __TwigTemplate_0c4808aafe59fa0374b02187169b6f6308b50999b18e907906baec970b6ef67b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Pages/manageCategories.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AppBundle/Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0da2e1a731782f2cf20b2c02be563216a6811808ab47143a75b451b7554249d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da2e1a731782f2cf20b2c02be563216a6811808ab47143a75b451b7554249d2->enter($__internal_0da2e1a731782f2cf20b2c02be563216a6811808ab47143a75b451b7554249d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/manageCategories.html.twig"));

        $__internal_c71d1d5313334c9167ec8fd50f240608821bed02c9d9777bee3df7db59cb57f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71d1d5313334c9167ec8fd50f240608821bed02c9d9777bee3df7db59cb57f9->enter($__internal_c71d1d5313334c9167ec8fd50f240608821bed02c9d9777bee3df7db59cb57f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/manageCategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da2e1a731782f2cf20b2c02be563216a6811808ab47143a75b451b7554249d2->leave($__internal_0da2e1a731782f2cf20b2c02be563216a6811808ab47143a75b451b7554249d2_prof);

        
        $__internal_c71d1d5313334c9167ec8fd50f240608821bed02c9d9777bee3df7db59cb57f9->leave($__internal_c71d1d5313334c9167ec8fd50f240608821bed02c9d9777bee3df7db59cb57f9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f0f1f68f9e1d6baf81c923a663ddb0885888022221772ecaf1bb32736f8fb0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0f1f68f9e1d6baf81c923a663ddb0885888022221772ecaf1bb32736f8fb0e->enter($__internal_4f0f1f68f9e1d6baf81c923a663ddb0885888022221772ecaf1bb32736f8fb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1af57281dd7bd1bb20c2fdc73419f81c43d15fcb01795777f58ae5a09005b0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af57281dd7bd1bb20c2fdc73419f81c43d15fcb01795777f58ae5a09005b0d6->enter($__internal_1af57281dd7bd1bb20c2fdc73419f81c43d15fcb01795777f58ae5a09005b0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"main-content\">
    <div class=\"layout-px-spacing\">
        <div class=\"row scrumboard\" id=\"cancel-row\">
            <div class=\"col-lg-12 layout-spacing\">
                <!--add main category-->
                <div class=\"task-list-section\">
                    <div data-section=\"s-new\" class=\"task-list-container\">
                        <div class=\"connect-sorting\">
                            <div class=\"task-container-header\">
                                <h6 class=\"s-heading\" data-listTitle=\"In Progress\">Main Categories</h6>
                                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_category");
        echo "\" class=\"badge outline-badge-danger pull-right\">Export to CSV</a>
                            </div>
                            <form data-2 method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bulk_action_category");
        echo "\">
                                <div class=\"row order-info mt-3 mb-3 pl-3\" >
                                    <input class=\"\" type=\"checkbox\" id=\"gridCheck\" name=\"category\">
                                    <div class=\"col-lg-8 col-md-8 col-12 mb-3 \">
                                        <select class=\"form-control form-control-sm\" name=\"type\">
                                          <option value=\"0\">Activate</option>
                                          <option value=\"1\">Deactivate</option>
                                          <option value=\"2\">Delete</option>
                                        </select>
                                    </div>
                                    <div class=\"col-lg-3 col-md-3 col-12 mb-3  align-self-end\">
                                        <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Update\">
                                    </div>
                                </div>
                                <div class=\"connect-sorting-content\" >
                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? $this->getContext($context, "category")));
        foreach ($context['_seq'] as $context["_key"] => $context["main"]) {
            // line 31
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_category_get", array("id" => $this->getAttribute($context["main"], "id", array()))), "html", null, true);
            echo "\">
                                    <div  class=\"card main-category-list simple-title-task ";
            // line 32
            if (($this->getAttribute($context["main"], "id", array()) == ($context["mainid"] ?? $this->getContext($context, "mainid")))) {
                echo " active ";
            }
            echo "\">
                                        <div class=\"card-body\">
                                            <div class=\"task-header background-white main-category\">
                                                <!--task header start-->
                                                <div class=\"row \">
                                                    <div class=\"col-md-4\">
                                                        <div class=\"row h-100\">
                                                            <div class=\"col-md-12 align-self-center\">
                                                                <div class=\"category-img-wrapper\">
                                                                    <img class=\"img-fluid img-responsive\" src='/uploads/sub-category/icons/";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "iconImage", array()), "html", null, true);
            echo "'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-8\">
                                                        <div class=\"bg-inner\">
                                                            <div class=\"row h-100 p-3\">
                                                                <div class=\"col-md-12 mb-3 text-left\" >
                                                                    <input type=\"checkbox\" name=\"all[]\" class=\"category\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "id", array()), "html", null, true);
            echo "\">
                                                                    <span class=\"text-right\" style=\"font-size:16px; font-weight:700;float:right;\">#";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "id", array()), "html", null, true);
            echo "</span>
                                                                </div>
                                                                <div class=\"col-md-12\">
                                                                    <h4 class=\"text-left mb-3\" data-taskTitle=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "categoryName", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "categoryName", array()), "html", null, true);
            echo "</h4>
                                                                </div>
                                                                <div class=\"col-md-12\">
                                                                    <i class=\"fa\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 s-task-edit\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"   data-toggle=\"modal\" data-target=\"#category";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "id", array()), "html", null, true);
            echo "\"></path></svg></i>
                                                                    ";
            // line 58
            if (($this->getAttribute($context["main"], "featured", array()) == 0)) {
                // line 59
                echo "                                                                    <i class=\"fa fa-eye\"></i>
                                                                    ";
            } else {
                // line 61
                echo "                                                                    <i class=\"fa fa-eye-slash\"></i>
                                                                    ";
            }
            // line 63
            echo "                                                                    ";
            if (($this->getAttribute($context["main"], "status", array()) == 1)) {
                // line 64
                echo "                                                                    <i class=\"fa fa-circle\" style=\"color:red;\"></i> 
                                                                    ";
            } else {
                // line 66
                echo "                                                                    <i class=\"fa fa-circle\" style=\"color:green;\"></i>
                                                                    ";
            }
            // line 68
            echo "                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--task header ends-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                            </form>
                             <!-- add category -->
                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? $this->getContext($context, "category")));
        foreach ($context['_seq'] as $context["_key"] => $context["main"]) {
            // line 82
            echo "                            <div class=\"modal fade\" id=\"category";
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-body\">
                                            <div class=\"compose-box\">
                                                <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                                    <h5 class=\"add-task-title\">Edit Category</h5>

                                                    <form data-3 method=\"post\"  enctype=\"multipart/form-data\" action=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_category");
            echo "\">
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"name\">Category Name</label>
                                                            <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "categoryName", array()), "html", null, true);
            echo "\">
                                                            <input type=\"hidden\" name=\"id\" placeholder=\"Category  Name*\" required=\"\"  value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "id", array()), "html", null, true);
            echo "\">
                                                        </div>

                                                        <div class=\"form-row mb-4\">
                                                            <div class=\"form-group col-md-8\">
                                                                <label for=\"Priority\">Priority</label>
                                                                <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" name=\"priority\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "priority", array()), "html", null, true);
            echo "\">
                                                            </div>
                                                            <input type=\"hidden\" id=\"parent\" class=\"form-control form-control-sm\" name=\"parent\" value=\"0\">
                                                            <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"0\">
                                                            <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"0\">

                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Status</label>
                                                                <label class=\"switch s-success mr-2\"> 
                                                                    <input type=\"checkbox\" ";
            // line 109
            if (($this->getAttribute($context["main"], "status", array()) == 0)) {
                echo "checked";
            }
            echo " class=\"form-control form-control-sm\" name=\"status\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "status", array()), "html", null, true);
            echo "\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Visiblity</label>
                                                                <label class=\"switch s-danger mr-2\"> 
                                                                    <input type=\"checkbox\"  ";
            // line 116
            if (($this->getAttribute($context["main"], "featured", array()) == 0)) {
                echo "checked";
            }
            echo " class=\"form-control form-control-sm\" name=\"visiblity\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "featured", array()), "html", null, true);
            echo "\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"Status\">Icon </label>
                                                            <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"/uploads/sub-category/icons/";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["main"], "iconImage", array()), "html", null, true);
            echo "\"> 
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                                <button  class=\"btn btn-primary\" >Update</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "
                            <!-- end of add category -->
                        </div>
                         <div class=\"add-s-task\">
                            <a class=\"addTask main-category-btn\" data-toggle=\"modal\" data-target=\"#category\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus-circle\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"16\"></line><line x1=\"8\" y1=\"12\" x2=\"16\" y2=\"12\"></line></svg> Add Category</a>
                        </div>
                    </div>
                <!--ends main category-->
                <!--starts main category modal -->
                    <div class=\"modal fade\" id=\"category\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-body\">
                                    <div class=\"compose-box\">
                                        <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                            <h5 class=\"add-task-title\">Add Category -main catgory</h5>

                                            <form data-4 method=\"post\"  enctype=\"multipart/form-data\" action=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_category");
        echo "\">
                                                <div class=\"form-group mb-4\">
                                                    <label for=\"name\">Category Name</label>
                                                    <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\">
                                                    <input type=\"hidden\" id=\"parent\" class=\"form-control form-control-sm\" name=\"parent\" value=\"0\">
                                                    <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"0\">
                                                    <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"0\">
                                                </div>
                                                <div class=\"form-row mb-4\">
                                                    <div class=\"form-group col-md-8\">
                                                        <label for=\"Priority\">Priority</label>
                                                        <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" value=\"0\" name=\"priority\">
                                                    </div>
                                                    <div class=\"form-group col-md-2 align-self-end text-right\">
                                                        <label>Status</label>
                                                        <label class=\"switch s-success mr-2\"> 
                                                            <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"status\">
                                                            <span class=\"slider round\"></span>
                                                        </label>
                                                    </div>
                                                    <div class=\"form-group col-md-2 align-self-end text-right\">
                                                        <label>Visiblity</label>
                                                        <label class=\"switch s-danger mr-2\"> 
                                                            <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"visiblity\">
                                                            <span class=\"slider round\"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class=\"form-group mb-4\">
                                                    <label for=\"Status\">Icon </label>
                                                    <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"\"> 
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                        <button  class=\"btn btn-primary\" >Save</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
               
                 <div data-section=\"s-new\" class=\"task-list-container\">
                        <div class=\"connect-sorting\">
                            <div class=\"task-container-header\">
                                <h6 class=\"s-heading\" data-listTitle=\"In Progress\">Sub Categories</h6>
                                <a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_subcategory");
        echo "\" class=\"badge outline-badge-danger pull-right\">Export to CSV</a>
                            </div>
                            <form data-5 method=\"post\" action=\"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bulk_action_category");
        echo "\">
                                <div class=\"row order-info mt-3 mb-3 pl-3 align-self-center\" >
                                    <input class=\"\" type=\"checkbox\" id=\"gridCheck\" name=\"subcategory\">
                                    <div class=\"col-lg-8 col-md-8 col-12 mb-3 \">
                                        <select class=\"form-control form-control-sm\" name=\"type\">
                                        <option value=\"0\">Activate</option>
                                        <option value=\"1\">Deactivate</option>
                                          <option value=\"2\">Delete</option>
                                    </select>
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 mb-3 align-self-end\">
                                        <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Update\" >
                                    </div>
                                </div>
                                <div class=\"connect-sorting-content\" >
                                    ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategory"] ?? $this->getContext($context, "subcategory")));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 225
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_category_get_nested", array("parent" => $this->getAttribute($context["sub"], "parent_id", array()), "id" => $this->getAttribute($context["sub"], "id", array()))), "html", null, true);
            echo "\">
                                        <div  class=\"card sub-category-list simple-title-task ";
            // line 226
            if (($this->getAttribute($context["sub"], "id", array()) == ($context["subid"] ?? $this->getContext($context, "subid")))) {
                echo " active ";
            }
            echo "\">
                                            <div class=\"card-body\">
                                                <div class=\"task-header background-white sub-category\">
                                                    <!--task header start-->
                                                     <div class=\"row\">
                                                        <div class=\"col-md-4\">
                                                             <div class=\"row h-100\">
                                                                <div class=\"col-md-12 align-self-center\">
                                                                     <div class=\"category-img-wrapper\">
                                                                        <img src='/uploads/sub-category/icons/";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "iconImage", array()), "html", null, true);
            echo "' class=\"img-fluid img-responsive rounded\">
                                                                    </div>
                                                                </div>
                                                             </div>
                                                            <!--end-->
                                                        </div>
                                                        <div class=\"col-md-8\">
                                                            <div class=\"bg-inner\">
                                                              <div class=\"row h-100 p-3\">
                                                                    <div class=\"col-md-12 mb-3 text-left\" >
                                                                        <input type=\"checkbox\" name=\"all[]\" class=\"subcategory\" value=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "\">
                                                                        <span  style=\"font-size:16px; font-weight:700;float:right;\">#";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "</span>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <h4 class=\"text-left mb-3\" data-taskTitle=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "categoryName", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "categoryName", array()), "html", null, true);
            echo "</h4>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <i class=\"fa\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 s-task-edit\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"   data-toggle=\"modal\" data-target=\"#subcategory";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "\"></path></svg></i>
                                                                        ";
            // line 253
            if (($this->getAttribute($context["sub"], "featured", array()) == 0)) {
                // line 254
                echo "                                                                        <i class=\"fa fa-eye\"></i>
                                                                        ";
            } else {
                // line 256
                echo "                                                                        <i class=\"fa fa-eye-slash\"></i>
                                                                        ";
            }
            // line 258
            echo "                                                                        ";
            if (($this->getAttribute($context["sub"], "status", array()) == 1)) {
                // line 259
                echo "                                                                        <i class=\"fa fa-circle\" style=\"color:red;\"></i> 
                                                                        ";
            } else {
                // line 261
                echo "                                                                        <i class=\"fa fa-circle\" style=\"color:green;\"></i>
                                                                        ";
            }
            // line 263
            echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end-->
                                                                    <!--task header ends-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "                                </div>
                            </form>
                            ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategory"] ?? $this->getContext($context, "subcategory")));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            echo " 
                                 <!-- add sub category -->
                            <div class=\"modal fade\" id=\"subcategory";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <form data-6 method=\"post\"  enctype=\"multipart/form-data\" action=\"";
            // line 282
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_category");
            echo "\">
                                            <div class=\"modal-body\">
                                                <div class=\"compose-box\">
                                                    <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                                        <h5 class=\"add-task-title\">Edit Category</h5>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"name\">Category Name</label>
                                                            <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\" value=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "categoryName", array()), "html", null, true);
            echo "\">
                                                            <input type=\"hidden\" name=\"id\" placeholder=\"Category  Name*\" required=\"\"  value=\"";
            // line 290
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "\">
                                                        </div>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"name\">Parent Category</label>
                                                            <select id=\"name\" class=\"form-control form-control-sm\" name=\"parent\">
                                                                ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category"] ?? $this->getContext($context, "category")));
            foreach ($context['_seq'] as $context["_key"] => $context["mainc"]) {
                // line 296
                echo "                                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mainc"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["mainc"], "id", array()) == $this->getAttribute($context["sub"], "parent_id", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mainc"], "categoryName", array()), "html", null, true);
                echo "</option>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 298
            echo "                                                            </select>
                                                        </div>
                                                        <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"0\">
                                                        <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                                        <div class=\"form-row mb-4\">
                                                            <div class=\"form-group col-md-8\">
                                                                <label for=\"Priority\">Priority</label>
                                                                <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" name=\"priority\" value=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "priority", array()), "html", null, true);
            echo "\">
                                                            </div>
                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Status</label>
                                                                <label class=\"switch s-success mr-2\"> 
                                                                    <input type=\"checkbox\" ";
            // line 310
            if (($this->getAttribute($context["sub"], "status", array()) == 0)) {
                echo "checked";
            }
            echo " class=\"form-control form-control-sm\" name=\"status\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "status", array()), "html", null, true);
            echo "\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Visiblity</label>
                                                                <label class=\"switch s-danger mr-2\"> 
                                                                    <input type=\"checkbox\"  ";
            // line 317
            if (($this->getAttribute($context["sub"], "featured", array()) == 0)) {
                echo "checked";
            }
            echo " class=\"form-control form-control-sm\" name=\"visiblity\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "featured", array()), "html", null, true);
            echo "\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"Status\">Icon </label>
                                                            <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"/uploads/sub-category/icons/";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "iconImage", array()), "html", null, true);
            echo "\"> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                                <button  class=\"btn btn-primary\" >Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                <!-- end of add category --> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        echo "                            ";
        if ((($context["subadd"] ?? $this->getContext($context, "subadd")) == "0")) {
            // line 340
            echo "                            <div class=\"add-s-task\">
                                <a class=\"addTask\" data-toggle=\"modal\" data-target=\"#subcategory\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus-circle\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"16\"></line><line x1=\"8\" y1=\"12\" x2=\"16\" y2=\"12\"></line></svg> Add Category</a>
                            </div>
                            ";
        }
        // line 344
        echo "                         </div>
                    </div>
                 <!--end sub category-->

                <!-- starts sub category add modal -->
                <div class=\"modal fade\" id=\"subcategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <div class=\"compose-box\">
                                    <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                        <h5 class=\"add-task-title\">Add Category</h5>

                                        <form data-7 method=\"post\"  enctype=\"multipart/form-data\" action=\"";
        // line 357
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_category");
        echo "\">
                                            <div class=\"form-group mb-4\">
                                                <label for=\"name\">Category Name</label>
                                                <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"form-group mb-4\">
                                                <label for=\"name\">Parent Category</label>
                                                <select id=\"name\" class=\"form-control\" name=\"parent\">
                                                    ";
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? $this->getContext($context, "category")));
        foreach ($context['_seq'] as $context["_key"] => $context["mainc"]) {
            // line 366
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mainc"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mainc"], "categoryName", array()), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
        echo "                                                </select>
                                            </div>
                                            <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"0\">
                                            <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                            <div class=\"form-row mb-4\">
                                                <div class=\"form-group col-md-8\">
                                                    <label for=\"Priority\">Priority</label>
                                                    <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" value=\"0\" name=\"priority\">
                                                </div>
                                                <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"0\">
                                                <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                                <div class=\"form-group col-md-2 align-self-end text-right\">
                                                    <label>Status</label>
                                                    <label class=\"switch s-success mr-2\"> 
                                                        <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"status\">
                                                        <span class=\"slider round\"></span>
                                                    </label>
                                                </div>
                                                <div class=\"form-group col-md-2 align-self-end text-right\">
                                                    <label>Visiblity</label>
                                                    <label class=\"switch s-danger mr-2\"> 
                                                        <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"visiblity\">
                                                        <span class=\"slider round\"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group mb-4\">
                                                <label for=\"Status\">Icon </label>
                                                <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"\"> 
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                    <button  class=\"btn btn-primary\" >Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--it ends here-->


                <!-- add nested category -->
                
                    <div data-section=\"s-new\" class=\"task-list-container\">
                        <div class=\"connect-sorting\">
                            <div class=\"task-container-header\">
                                <h6 class=\"s-heading\" data-listTitle=\"In Progress\">Nested Categories</h6>
                                <a href=\"";
        // line 419
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_nestedcategory");
        echo "\" class=\"badge outline-badge-danger pull-right\">Export to CSV</a>
                            </div>
                            <form data-8 method=\"post\" action=\"";
        // line 421
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bulk_action_category");
        echo "\">
                                <div class=\"row order-info mt-3 mb-3 pl-3\" >
                                    <input class=\"\" type=\"checkbox\" id=\"gridCheck\" name=\"nestedcategory\">
                                    <div class=\"col-lg-8 col-md-8 col-12 mb-3 \">
                                        <select class=\"form-control form-control-sm\" name=\"type\">
                                        <option value=\"0\">Activate</option>
                                        <option value=\"1\">Deactivate</option>
                                           <option value=\"2\">Delete</option>
                                       </select>
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 mb-3 align-self-end\">
                                        <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Update\">
                                    </div>
                                </div>
                                <div class=\"connect-sorting-content\" >
                                    ";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nestedcategory"] ?? $this->getContext($context, "nestedcategory")));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 437
            echo "                                    <a href=\"#nestedtedit\">
                                        <div  class=\"card  nested-category-list simple-title-task ";
            // line 438
            if (($this->getAttribute($context["sub"], "id", array()) == ($context["mainid"] ?? $this->getContext($context, "mainid")))) {
                echo " active ";
            }
            echo "\">
                                            <div class=\"card-body\">
                                                <div class=\"task-header background-white nested-category\">
                                                    <!--task header start-->
                                                    <div class=\"row \">
                                                        <div class=\"col-md-4\">
                                                              <div class=\"row h-100\">
                                                                <div class=\"col-md-12 align-self-center\">
                                                                    <div class=\"category-img-wrapper\">
                                                                         <img src='/uploads/sub-category/icons/";
            // line 447
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "iconImage", array()), "html", null, true);
            echo "' class=\"img-fluid  img-responsive\">
                                                                    </div>
                                                                 </div>
                                                             </div>
                                                        </div>
                                                        <div class=\"col-md-8\">
                                                            <div class=\"bg-inner\">
                                                                <div class=\"row h-100 p-3\">
                                                                    <div class=\"col-md-12 mb-3 text-left\" >
                                                                        <input type=\"checkbox\" name=\"all[]\" class=\"category\" value=\"";
            // line 456
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "\">
                                                                        <span class=\"text-right\" style=\"font-size:16px; font-weight:700;float:right;\">#";
            // line 457
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "</span>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <h4 class=\"text-left mb-3\" data-taskTitle=\"";
            // line 460
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "categoryName", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "categoryName", array()), "html", null, true);
            echo "</h4>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <i class=\"fa\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 s-task-edit\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"   data-toggle=\"modal\" data-target=\"#nestedcategory";
            // line 463
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "\"></path></svg></i>
                                                                        ";
            // line 464
            if (($this->getAttribute($context["sub"], "featured", array()) == 0)) {
                // line 465
                echo "                                                                        <i class=\"fa fa-eye\"></i>
                                                                        ";
            } else {
                // line 467
                echo "                                                                        <i class=\"fa fa-eye-slash\"></i>
                                                                        ";
            }
            // line 469
            echo "                                                                        ";
            if (($this->getAttribute($context["sub"], "status", array()) == 1)) {
                // line 470
                echo "                                                                        <i class=\"fa fa-circle\" style=\"color:red;\"></i> 
                                                                        ";
            } else {
                // line 472
                echo "                                                                        <i class=\"fa fa-circle\" style=\"color:green;\"></i>
                                                                        ";
            }
            // line 474
            echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 484
        echo "                                </div>
                            </form>
                            <!-- add nested category -->
                             ";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nestedcategory"] ?? $this->getContext($context, "nestedcategory")));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 488
            echo "                            <div class=\"modal fade\" id=\"nestedcategory";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <!--form starts-->
                                        <form  method=\"post\"  enctype=\"multipart/form-data\" action=\"";
            // line 492
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_category");
            echo "\">      
                                            <div class=\"modal-body\">
                                                <div class=\"compose-box\">
                                                    <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                                        <h5 class=\"add-task-title\">Edit Nested Category</h5>
                                                        <div  class=\"form-group mb-4\">
                                                            <label for=\"name\">Category Name</label>
                                                            <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\" value=\"";
            // line 499
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "categoryName", array()), "html", null, true);
            echo "\">
                                                            <input type=\"hidden\" name=\"id\" placeholder=\"Category  Name*\" required=\"\"  value=\"";
            // line 500
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "\">
                                                        </div>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"name\">Parent Category</label>
                                                            <select id=\"name\" class=\"form-control form-control-sm\" name=\"parent\">
                                                                ";
            // line 505
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["nested"] ?? $this->getContext($context, "nested")));
            foreach ($context['_seq'] as $context["_key"] => $context["mainc"]) {
                // line 506
                echo "                                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mainc"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["mainc"], "id", array()) == $this->getAttribute($context["sub"], "parent_id", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mainc"], "categoryName", array()), "html", null, true);
                echo "</option>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 508
            echo "                                                            </select>
                                                        </div>
                                                        <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"1\">
                                                        <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                                        <div class=\"form-row mb-4\">
                                                            <div class=\"form-group col-md-8\">
                                                                <label for=\"Priority\">Priority</label>
                                                                <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" name=\"priority\" value=\"";
            // line 515
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "priority", array()), "html", null, true);
            echo "\">
                                                            </div>
                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Status</label>
                                                                <label class=\"switch s-success mr-2\"> 
                                                                    <input type=\"checkbox\" ";
            // line 520
            if (($this->getAttribute($context["sub"], "status", array()) == 0)) {
                echo "checked";
            }
            echo " class=\"form-control form-control-sm\" name=\"status\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "status", array()), "html", null, true);
            echo "\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Visiblity</label>
                                                                <label class=\"switch s-danger mr-2\"> 
                                                                    <input type=\"checkbox\"  ";
            // line 527
            if (($this->getAttribute($context["sub"], "featured", array()) == 0)) {
                echo "checked";
            }
            echo " class=\"form-control form-control-sm\" name=\"visiblity\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "featured", array()), "html", null, true);
            echo "\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"Status\">Icon </label>
                                                            <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"/uploads/sub-category/icons/";
            // line 534
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "iconImage", array()), "html", null, true);
            echo "\"> 
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                                <button  class=\"btn btn-primary\" >Update</button>
                                            </div>
                                        </form>
                                        <!--from ends-->
                                    </div>
                                </div>
                            </div>
                            <!-- end of nested category -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 551
        echo "                        ";
        if ((($context["nestedadd"] ?? $this->getContext($context, "nestedadd")) == "0")) {
            // line 552
            echo "                            <div class=\"add-s-task\">
                                <a class=\"addTask\" data-toggle=\"modal\" data-target=\"#nestedcategory\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus-circle\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"16\"></line><line x1=\"8\" y1=\"12\" x2=\"16\" y2=\"12\"></line></svg> Add Category</a>
                            </div>
                            ";
        }
        // line 556
        echo "                        </div>
                    </div>
                <!--nested add category -->
                <div class=\"modal fade\" data-myform id=\"nestedcategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content\">
                        <form data-1 id=\"nestedcategoryform\"  method=\"post\"  enctype=\"multipart/form-data\" action=\"";
        // line 562
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_category");
        echo "\">
                                <div class=\"modal-body\">
                                    <div class=\"compose-box\">
                                        <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                            <h5 class=\"add-task-title\">Add Category</h5>
                                            <div class=\"form-group mb-4\">
                                                <label for=\"name\">Category Name</label>
                                                <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"form-group mb-4\">
                                                <label for=\"name\">Parent Category</label>
                                                <select id=\"name\" class=\"form-control\" name=\"parent\">
                                                    ";
        // line 574
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nested"] ?? $this->getContext($context, "nested")));
        foreach ($context['_seq'] as $context["_key"] => $context["mainc"]) {
            // line 575
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mainc"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mainc"], "categoryName", array()), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 577
        echo "                                                </select>
                                            </div>
                                            <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                            <div class=\"form-row mb-4\">
                                                <div class=\"form-group col-md-8\">
                                                    <label for=\"Priority\">Priority</label>
                                                    <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" value=\"0\" name=\"priority\">
                                                </div>
                                                <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"1\">
                                                <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                                <div class=\"form-group col-md-2 align-self-end text-right\">
                                                    <label>Status</label>
                                                    <label class=\"switch s-success mr-2\"> 
                                                        <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"status\">
                                                        <span class=\"slider round\"></span>
                                                    </label>
                                                </div>
                                                <div class=\"form-group col-md-2 align-self-end text-right\">
                                                    <label>Visiblity</label>
                                                    <label class=\"switch s-danger mr-2\"> 
                                                        <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"visiblity\">
                                                        <span class=\"slider round\"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group mb-4\">
                                                <label for=\"Status\">Icon </label>
                                                <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"\"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                    <button  class=\"btn btn-primary\" >Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--nested ends category-->
            </div>
          
        </div>
    </div>
</div>

";
        
        $__internal_1af57281dd7bd1bb20c2fdc73419f81c43d15fcb01795777f58ae5a09005b0d6->leave($__internal_1af57281dd7bd1bb20c2fdc73419f81c43d15fcb01795777f58ae5a09005b0d6_prof);

        
        $__internal_4f0f1f68f9e1d6baf81c923a663ddb0885888022221772ecaf1bb32736f8fb0e->leave($__internal_4f0f1f68f9e1d6baf81c923a663ddb0885888022221772ecaf1bb32736f8fb0e_prof);

    }

    // line 625
    public function block_script($context, array $blocks = array())
    {
        $__internal_4a6c970f5bd3e4bdbf511cbe7b7bc3650a86758d74c8ab01e57ca133a4f9f5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6c970f5bd3e4bdbf511cbe7b7bc3650a86758d74c8ab01e57ca133a4f9f5e0->enter($__internal_4a6c970f5bd3e4bdbf511cbe7b7bc3650a86758d74c8ab01e57ca133a4f9f5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_0d089f2ce8d0dcf4a94d2d156968483b3778e227f49f091073f0f801a8a04e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d089f2ce8d0dcf4a94d2d156968483b3778e227f49f091073f0f801a8a04e70->enter($__internal_0d089f2ce8d0dcf4a94d2d156968483b3778e227f49f091073f0f801a8a04e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 626
        echo "<script type=\"text/javascript\">

</script>
";
        
        $__internal_0d089f2ce8d0dcf4a94d2d156968483b3778e227f49f091073f0f801a8a04e70->leave($__internal_0d089f2ce8d0dcf4a94d2d156968483b3778e227f49f091073f0f801a8a04e70_prof);

        
        $__internal_4a6c970f5bd3e4bdbf511cbe7b7bc3650a86758d74c8ab01e57ca133a4f9f5e0->leave($__internal_4a6c970f5bd3e4bdbf511cbe7b7bc3650a86758d74c8ab01e57ca133a4f9f5e0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Pages/manageCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1052 => 626,  1043 => 625,  986 => 577,  975 => 575,  971 => 574,  956 => 562,  948 => 556,  942 => 552,  939 => 551,  916 => 534,  902 => 527,  888 => 520,  880 => 515,  871 => 508,  856 => 506,  852 => 505,  844 => 500,  840 => 499,  830 => 492,  822 => 488,  818 => 487,  813 => 484,  798 => 474,  794 => 472,  790 => 470,  787 => 469,  783 => 467,  779 => 465,  777 => 464,  773 => 463,  765 => 460,  759 => 457,  755 => 456,  743 => 447,  729 => 438,  726 => 437,  722 => 436,  704 => 421,  699 => 419,  646 => 368,  635 => 366,  631 => 365,  620 => 357,  605 => 344,  599 => 340,  596 => 339,  575 => 324,  561 => 317,  547 => 310,  539 => 305,  530 => 298,  515 => 296,  511 => 295,  503 => 290,  499 => 289,  489 => 282,  483 => 279,  476 => 277,  472 => 275,  455 => 263,  451 => 261,  447 => 259,  444 => 258,  440 => 256,  436 => 254,  434 => 253,  430 => 252,  422 => 249,  416 => 246,  412 => 245,  399 => 235,  385 => 226,  380 => 225,  376 => 224,  358 => 209,  353 => 207,  299 => 156,  280 => 139,  258 => 123,  244 => 116,  230 => 109,  218 => 100,  209 => 94,  205 => 93,  199 => 90,  187 => 82,  183 => 81,  179 => 79,  163 => 68,  159 => 66,  155 => 64,  152 => 63,  148 => 61,  144 => 59,  142 => 58,  138 => 57,  130 => 54,  124 => 51,  120 => 50,  108 => 41,  94 => 32,  89 => 31,  85 => 30,  67 => 15,  62 => 13,  50 => 3,  41 => 2,  11 => 1,);
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
<div class=\"main-content\">
    <div class=\"layout-px-spacing\">
        <div class=\"row scrumboard\" id=\"cancel-row\">
            <div class=\"col-lg-12 layout-spacing\">
                <!--add main category-->
                <div class=\"task-list-section\">
                    <div data-section=\"s-new\" class=\"task-list-container\">
                        <div class=\"connect-sorting\">
                            <div class=\"task-container-header\">
                                <h6 class=\"s-heading\" data-listTitle=\"In Progress\">Main Categories</h6>
                                <a href=\"{{ path('export_category') }}\" class=\"badge outline-badge-danger pull-right\">Export to CSV</a>
                            </div>
                            <form data-2 method=\"post\" action=\"{{ path('bulk_action_category')}}\">
                                <div class=\"row order-info mt-3 mb-3 pl-3\" >
                                    <input class=\"\" type=\"checkbox\" id=\"gridCheck\" name=\"category\">
                                    <div class=\"col-lg-8 col-md-8 col-12 mb-3 \">
                                        <select class=\"form-control form-control-sm\" name=\"type\">
                                          <option value=\"0\">Activate</option>
                                          <option value=\"1\">Deactivate</option>
                                          <option value=\"2\">Delete</option>
                                        </select>
                                    </div>
                                    <div class=\"col-lg-3 col-md-3 col-12 mb-3  align-self-end\">
                                        <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Update\">
                                    </div>
                                </div>
                                <div class=\"connect-sorting-content\" >
                                {% for main in category%}
                                <a href=\"{{ path('manage_category_get',{'id': main.id }) }}\">
                                    <div  class=\"card main-category-list simple-title-task {% if main.id == mainid %} active {% endif %}\">
                                        <div class=\"card-body\">
                                            <div class=\"task-header background-white main-category\">
                                                <!--task header start-->
                                                <div class=\"row \">
                                                    <div class=\"col-md-4\">
                                                        <div class=\"row h-100\">
                                                            <div class=\"col-md-12 align-self-center\">
                                                                <div class=\"category-img-wrapper\">
                                                                    <img class=\"img-fluid img-responsive\" src='/uploads/sub-category/icons/{{ main.iconImage }}'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-8\">
                                                        <div class=\"bg-inner\">
                                                            <div class=\"row h-100 p-3\">
                                                                <div class=\"col-md-12 mb-3 text-left\" >
                                                                    <input type=\"checkbox\" name=\"all[]\" class=\"category\" value=\"{{ main.id }}\">
                                                                    <span class=\"text-right\" style=\"font-size:16px; font-weight:700;float:right;\">#{{ main.id }}</span>
                                                                </div>
                                                                <div class=\"col-md-12\">
                                                                    <h4 class=\"text-left mb-3\" data-taskTitle=\"{{ main.categoryName }}\">{{ main.categoryName }}</h4>
                                                                </div>
                                                                <div class=\"col-md-12\">
                                                                    <i class=\"fa\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 s-task-edit\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"   data-toggle=\"modal\" data-target=\"#category{{ main.id }}\"></path></svg></i>
                                                                    {% if main.featured == 0 %}
                                                                    <i class=\"fa fa-eye\"></i>
                                                                    {% else %}
                                                                    <i class=\"fa fa-eye-slash\"></i>
                                                                    {% endif %}
                                                                    {% if main.status == 1 %}
                                                                    <i class=\"fa fa-circle\" style=\"color:red;\"></i> 
                                                                    {% else %}
                                                                    <i class=\"fa fa-circle\" style=\"color:green;\"></i>
                                                                    {% endif %}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--task header ends-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                {% endfor %}
                            </form>
                             <!-- add category -->
                            {% for main in category%}
                            <div class=\"modal fade\" id=\"category{{main.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-body\">
                                            <div class=\"compose-box\">
                                                <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                                    <h5 class=\"add-task-title\">Edit Category</h5>

                                                    <form data-3 method=\"post\"  enctype=\"multipart/form-data\" action=\"{{ path('update_category')}}\">
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"name\">Category Name</label>
                                                            <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\" value=\"{{ main.categoryName }}\">
                                                            <input type=\"hidden\" name=\"id\" placeholder=\"Category  Name*\" required=\"\"  value=\"{{ main.id }}\">
                                                        </div>

                                                        <div class=\"form-row mb-4\">
                                                            <div class=\"form-group col-md-8\">
                                                                <label for=\"Priority\">Priority</label>
                                                                <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" name=\"priority\" value=\"{{ main.priority }}\">
                                                            </div>
                                                            <input type=\"hidden\" id=\"parent\" class=\"form-control form-control-sm\" name=\"parent\" value=\"0\">
                                                            <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"0\">
                                                            <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"0\">

                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Status</label>
                                                                <label class=\"switch s-success mr-2\"> 
                                                                    <input type=\"checkbox\" {% if main.status == 0 %}checked{% endif %} class=\"form-control form-control-sm\" name=\"status\"  value=\"{{ main.status }}\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Visiblity</label>
                                                                <label class=\"switch s-danger mr-2\"> 
                                                                    <input type=\"checkbox\"  {% if main.featured == 0 %}checked{% endif %} class=\"form-control form-control-sm\" name=\"visiblity\"  value=\"{{ main.featured }}\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"Status\">Icon </label>
                                                            <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"/uploads/sub-category/icons/{{ main.iconImage }}\"> 
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                                <button  class=\"btn btn-primary\" >Update</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            {% endfor %}

                            <!-- end of add category -->
                        </div>
                         <div class=\"add-s-task\">
                            <a class=\"addTask main-category-btn\" data-toggle=\"modal\" data-target=\"#category\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus-circle\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"16\"></line><line x1=\"8\" y1=\"12\" x2=\"16\" y2=\"12\"></line></svg> Add Category</a>
                        </div>
                    </div>
                <!--ends main category-->
                <!--starts main category modal -->
                    <div class=\"modal fade\" id=\"category\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-body\">
                                    <div class=\"compose-box\">
                                        <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                            <h5 class=\"add-task-title\">Add Category -main catgory</h5>

                                            <form data-4 method=\"post\"  enctype=\"multipart/form-data\" action=\"{{ path('create_category')}}\">
                                                <div class=\"form-group mb-4\">
                                                    <label for=\"name\">Category Name</label>
                                                    <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\">
                                                    <input type=\"hidden\" id=\"parent\" class=\"form-control form-control-sm\" name=\"parent\" value=\"0\">
                                                    <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"0\">
                                                    <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"0\">
                                                </div>
                                                <div class=\"form-row mb-4\">
                                                    <div class=\"form-group col-md-8\">
                                                        <label for=\"Priority\">Priority</label>
                                                        <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" value=\"0\" name=\"priority\">
                                                    </div>
                                                    <div class=\"form-group col-md-2 align-self-end text-right\">
                                                        <label>Status</label>
                                                        <label class=\"switch s-success mr-2\"> 
                                                            <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"status\">
                                                            <span class=\"slider round\"></span>
                                                        </label>
                                                    </div>
                                                    <div class=\"form-group col-md-2 align-self-end text-right\">
                                                        <label>Visiblity</label>
                                                        <label class=\"switch s-danger mr-2\"> 
                                                            <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"visiblity\">
                                                            <span class=\"slider round\"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class=\"form-group mb-4\">
                                                    <label for=\"Status\">Icon </label>
                                                    <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"\"> 
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                        <button  class=\"btn btn-primary\" >Save</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
               
                 <div data-section=\"s-new\" class=\"task-list-container\">
                        <div class=\"connect-sorting\">
                            <div class=\"task-container-header\">
                                <h6 class=\"s-heading\" data-listTitle=\"In Progress\">Sub Categories</h6>
                                <a href=\"{{ path('export_subcategory') }}\" class=\"badge outline-badge-danger pull-right\">Export to CSV</a>
                            </div>
                            <form data-5 method=\"post\" action=\"{{ path('bulk_action_category')}}\">
                                <div class=\"row order-info mt-3 mb-3 pl-3 align-self-center\" >
                                    <input class=\"\" type=\"checkbox\" id=\"gridCheck\" name=\"subcategory\">
                                    <div class=\"col-lg-8 col-md-8 col-12 mb-3 \">
                                        <select class=\"form-control form-control-sm\" name=\"type\">
                                        <option value=\"0\">Activate</option>
                                        <option value=\"1\">Deactivate</option>
                                          <option value=\"2\">Delete</option>
                                    </select>
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 mb-3 align-self-end\">
                                        <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Update\" >
                                    </div>
                                </div>
                                <div class=\"connect-sorting-content\" >
                                    {% for sub in subcategory%}
                                    <a href=\"{{ path('manage_category_get_nested',{'parent': sub.parent_id,'id': sub.id }) }}\">
                                        <div  class=\"card sub-category-list simple-title-task {% if sub.id == subid %} active {% endif %}\">
                                            <div class=\"card-body\">
                                                <div class=\"task-header background-white sub-category\">
                                                    <!--task header start-->
                                                     <div class=\"row\">
                                                        <div class=\"col-md-4\">
                                                             <div class=\"row h-100\">
                                                                <div class=\"col-md-12 align-self-center\">
                                                                     <div class=\"category-img-wrapper\">
                                                                        <img src='/uploads/sub-category/icons/{{ sub.iconImage }}' class=\"img-fluid img-responsive rounded\">
                                                                    </div>
                                                                </div>
                                                             </div>
                                                            <!--end-->
                                                        </div>
                                                        <div class=\"col-md-8\">
                                                            <div class=\"bg-inner\">
                                                              <div class=\"row h-100 p-3\">
                                                                    <div class=\"col-md-12 mb-3 text-left\" >
                                                                        <input type=\"checkbox\" name=\"all[]\" class=\"subcategory\" value=\"{{ sub.id }}\">
                                                                        <span  style=\"font-size:16px; font-weight:700;float:right;\">#{{ sub.id }}</span>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <h4 class=\"text-left mb-3\" data-taskTitle=\"{{ sub.categoryName }}\">{{ sub.categoryName }}</h4>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <i class=\"fa\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 s-task-edit\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"   data-toggle=\"modal\" data-target=\"#subcategory{{ sub.id }}\"></path></svg></i>
                                                                        {% if sub.featured == 0 %}
                                                                        <i class=\"fa fa-eye\"></i>
                                                                        {% else %}
                                                                        <i class=\"fa fa-eye-slash\"></i>
                                                                        {% endif %}
                                                                        {% if sub.status == 1 %}
                                                                        <i class=\"fa fa-circle\" style=\"color:red;\"></i> 
                                                                        {% else %}
                                                                        <i class=\"fa fa-circle\" style=\"color:green;\"></i>
                                                                        {% endif %}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end-->
                                                                    <!--task header ends-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    {% endfor %}
                                </div>
                            </form>
                            {% for sub in subcategory%} 
                                 <!-- add sub category -->
                            <div class=\"modal fade\" id=\"subcategory{{sub.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <form data-6 method=\"post\"  enctype=\"multipart/form-data\" action=\"{{ path('update_category')}}\">
                                            <div class=\"modal-body\">
                                                <div class=\"compose-box\">
                                                    <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                                        <h5 class=\"add-task-title\">Edit Category</h5>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"name\">Category Name</label>
                                                            <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\" value=\"{{ sub.categoryName }}\">
                                                            <input type=\"hidden\" name=\"id\" placeholder=\"Category  Name*\" required=\"\"  value=\"{{ sub.id }}\">
                                                        </div>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"name\">Parent Category</label>
                                                            <select id=\"name\" class=\"form-control form-control-sm\" name=\"parent\">
                                                                {% for mainc in category %}
                                                                <option value=\"{{ mainc.id }}\" {% if mainc.id == sub.parent_id %} selected {% endif %}>{{ mainc.categoryName }}</option>
                                                                {% endfor %}
                                                            </select>
                                                        </div>
                                                        <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"0\">
                                                        <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                                        <div class=\"form-row mb-4\">
                                                            <div class=\"form-group col-md-8\">
                                                                <label for=\"Priority\">Priority</label>
                                                                <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" name=\"priority\" value=\"{{ sub.priority }}\">
                                                            </div>
                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Status</label>
                                                                <label class=\"switch s-success mr-2\"> 
                                                                    <input type=\"checkbox\" {% if sub.status == 0 %}checked{% endif %} class=\"form-control form-control-sm\" name=\"status\"  value=\"{{ sub.status }}\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Visiblity</label>
                                                                <label class=\"switch s-danger mr-2\"> 
                                                                    <input type=\"checkbox\"  {% if sub.featured == 0 %}checked{% endif %} class=\"form-control form-control-sm\" name=\"visiblity\"  value=\"{{ sub.featured }}\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"Status\">Icon </label>
                                                            <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"/uploads/sub-category/icons/{{ sub.iconImage }}\"> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                                <button  class=\"btn btn-primary\" >Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                <!-- end of add category --> 
                            {% endfor %}
                            {% if subadd == '0' %}
                            <div class=\"add-s-task\">
                                <a class=\"addTask\" data-toggle=\"modal\" data-target=\"#subcategory\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus-circle\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"16\"></line><line x1=\"8\" y1=\"12\" x2=\"16\" y2=\"12\"></line></svg> Add Category</a>
                            </div>
                            {% endif %}
                         </div>
                    </div>
                 <!--end sub category-->

                <!-- starts sub category add modal -->
                <div class=\"modal fade\" id=\"subcategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <div class=\"compose-box\">
                                    <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                        <h5 class=\"add-task-title\">Add Category</h5>

                                        <form data-7 method=\"post\"  enctype=\"multipart/form-data\" action=\"{{ path('create_category')}}\">
                                            <div class=\"form-group mb-4\">
                                                <label for=\"name\">Category Name</label>
                                                <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"form-group mb-4\">
                                                <label for=\"name\">Parent Category</label>
                                                <select id=\"name\" class=\"form-control\" name=\"parent\">
                                                    {% for mainc in category %}
                                                    <option value=\"{{ mainc.id }}\" >{{ mainc.categoryName }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"0\">
                                            <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                            <div class=\"form-row mb-4\">
                                                <div class=\"form-group col-md-8\">
                                                    <label for=\"Priority\">Priority</label>
                                                    <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" value=\"0\" name=\"priority\">
                                                </div>
                                                <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"0\">
                                                <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                                <div class=\"form-group col-md-2 align-self-end text-right\">
                                                    <label>Status</label>
                                                    <label class=\"switch s-success mr-2\"> 
                                                        <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"status\">
                                                        <span class=\"slider round\"></span>
                                                    </label>
                                                </div>
                                                <div class=\"form-group col-md-2 align-self-end text-right\">
                                                    <label>Visiblity</label>
                                                    <label class=\"switch s-danger mr-2\"> 
                                                        <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"visiblity\">
                                                        <span class=\"slider round\"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group mb-4\">
                                                <label for=\"Status\">Icon </label>
                                                <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"\"> 
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                    <button  class=\"btn btn-primary\" >Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--it ends here-->


                <!-- add nested category -->
                
                    <div data-section=\"s-new\" class=\"task-list-container\">
                        <div class=\"connect-sorting\">
                            <div class=\"task-container-header\">
                                <h6 class=\"s-heading\" data-listTitle=\"In Progress\">Nested Categories</h6>
                                <a href=\"{{ path('export_nestedcategory') }}\" class=\"badge outline-badge-danger pull-right\">Export to CSV</a>
                            </div>
                            <form data-8 method=\"post\" action=\"{{ path('bulk_action_category')}}\">
                                <div class=\"row order-info mt-3 mb-3 pl-3\" >
                                    <input class=\"\" type=\"checkbox\" id=\"gridCheck\" name=\"nestedcategory\">
                                    <div class=\"col-lg-8 col-md-8 col-12 mb-3 \">
                                        <select class=\"form-control form-control-sm\" name=\"type\">
                                        <option value=\"0\">Activate</option>
                                        <option value=\"1\">Deactivate</option>
                                           <option value=\"2\">Delete</option>
                                       </select>
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 mb-3 align-self-end\">
                                        <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"Update\">
                                    </div>
                                </div>
                                <div class=\"connect-sorting-content\" >
                                    {% for sub in nestedcategory%}
                                    <a href=\"#nestedtedit\">
                                        <div  class=\"card  nested-category-list simple-title-task {% if sub.id == mainid %} active {% endif %}\">
                                            <div class=\"card-body\">
                                                <div class=\"task-header background-white nested-category\">
                                                    <!--task header start-->
                                                    <div class=\"row \">
                                                        <div class=\"col-md-4\">
                                                              <div class=\"row h-100\">
                                                                <div class=\"col-md-12 align-self-center\">
                                                                    <div class=\"category-img-wrapper\">
                                                                         <img src='/uploads/sub-category/icons/{{ sub.iconImage }}' class=\"img-fluid  img-responsive\">
                                                                    </div>
                                                                 </div>
                                                             </div>
                                                        </div>
                                                        <div class=\"col-md-8\">
                                                            <div class=\"bg-inner\">
                                                                <div class=\"row h-100 p-3\">
                                                                    <div class=\"col-md-12 mb-3 text-left\" >
                                                                        <input type=\"checkbox\" name=\"all[]\" class=\"category\" value=\"{{ sub.id }}\">
                                                                        <span class=\"text-right\" style=\"font-size:16px; font-weight:700;float:right;\">#{{ sub.id }}</span>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <h4 class=\"text-left mb-3\" data-taskTitle=\"{{ sub.categoryName }}\">{{ sub.categoryName }}</h4>
                                                                    </div>
                                                                    <div class=\"col-md-12\">
                                                                        <i class=\"fa\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 s-task-edit\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"   data-toggle=\"modal\" data-target=\"#nestedcategory{{ sub.id }}\"></path></svg></i>
                                                                        {% if sub.featured == 0 %}
                                                                        <i class=\"fa fa-eye\"></i>
                                                                        {% else %}
                                                                        <i class=\"fa fa-eye-slash\"></i>
                                                                        {% endif %}
                                                                        {% if sub.status == 1 %}
                                                                        <i class=\"fa fa-circle\" style=\"color:red;\"></i> 
                                                                        {% else %}
                                                                        <i class=\"fa fa-circle\" style=\"color:green;\"></i>
                                                                        {% endif %}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    {% endfor %}
                                </div>
                            </form>
                            <!-- add nested category -->
                             {% for sub in nestedcategory%}
                            <div class=\"modal fade\" id=\"nestedcategory{{sub.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <!--form starts-->
                                        <form  method=\"post\"  enctype=\"multipart/form-data\" action=\"{{ path('update_category')}}\">      
                                            <div class=\"modal-body\">
                                                <div class=\"compose-box\">
                                                    <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                                        <h5 class=\"add-task-title\">Edit Nested Category</h5>
                                                        <div  class=\"form-group mb-4\">
                                                            <label for=\"name\">Category Name</label>
                                                            <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\" value=\"{{ sub.categoryName }}\">
                                                            <input type=\"hidden\" name=\"id\" placeholder=\"Category  Name*\" required=\"\"  value=\"{{ sub.id }}\">
                                                        </div>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"name\">Parent Category</label>
                                                            <select id=\"name\" class=\"form-control form-control-sm\" name=\"parent\">
                                                                {% for mainc in nested %}
                                                                <option value=\"{{ mainc.id }}\" {% if mainc.id == sub.parent_id %} selected {% endif %}>{{ mainc.categoryName }}</option>
                                                                {% endfor %}
                                                            </select>
                                                        </div>
                                                        <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"1\">
                                                        <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                                        <div class=\"form-row mb-4\">
                                                            <div class=\"form-group col-md-8\">
                                                                <label for=\"Priority\">Priority</label>
                                                                <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" name=\"priority\" value=\"{{ sub.priority }}\">
                                                            </div>
                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Status</label>
                                                                <label class=\"switch s-success mr-2\"> 
                                                                    <input type=\"checkbox\" {% if sub.status == 0 %}checked{% endif %} class=\"form-control form-control-sm\" name=\"status\"  value=\"{{ sub.status }}\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                            <div class=\"form-group col-md-2 align-self-end text-right\">
                                                                <label>Visiblity</label>
                                                                <label class=\"switch s-danger mr-2\"> 
                                                                    <input type=\"checkbox\"  {% if sub.featured == 0 %}checked{% endif %} class=\"form-control form-control-sm\" name=\"visiblity\"  value=\"{{ sub.featured }}\">
                                                                    <span class=\"slider round\"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group mb-4\">
                                                            <label for=\"Status\">Icon </label>
                                                            <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"/uploads/sub-category/icons/{{ sub.iconImage }}\"> 
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                                <button  class=\"btn btn-primary\" >Update</button>
                                            </div>
                                        </form>
                                        <!--from ends-->
                                    </div>
                                </div>
                            </div>
                            <!-- end of nested category -->
                            {% endfor %}
                        {% if nestedadd == '0' %}
                            <div class=\"add-s-task\">
                                <a class=\"addTask\" data-toggle=\"modal\" data-target=\"#nestedcategory\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus-circle\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"16\"></line><line x1=\"8\" y1=\"12\" x2=\"16\" y2=\"12\"></line></svg> Add Category</a>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                <!--nested add category -->
                <div class=\"modal fade\" data-myform id=\"nestedcategory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content\">
                        <form data-1 id=\"nestedcategoryform\"  method=\"post\"  enctype=\"multipart/form-data\" action=\"{{ path('create_category')}}\">
                                <div class=\"modal-body\">
                                    <div class=\"compose-box\">
                                        <div class=\"compose-content\" id=\"addTaskModalTitle\">
                                            <h5 class=\"add-task-title\">Add Category</h5>
                                            <div class=\"form-group mb-4\">
                                                <label for=\"name\">Category Name</label>
                                                <input type=\"text\" id=\"name\" class=\"form-control form-control-sm\" name=\"name\" placeholder=\"Category  Name*\" required=\"\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"form-group mb-4\">
                                                <label for=\"name\">Parent Category</label>
                                                <select id=\"name\" class=\"form-control\" name=\"parent\">
                                                    {% for mainc in nested %}
                                                    <option value=\"{{ mainc.id }}\" >{{ mainc.categoryName }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                            <div class=\"form-row mb-4\">
                                                <div class=\"form-group col-md-8\">
                                                    <label for=\"Priority\">Priority</label>
                                                    <input type=\"number\" class=\"form-control form-control-sm\" id=\"Priority\" placeholder=\"Priority\" autocomplete=\"off\" value=\"0\" name=\"priority\">
                                                </div>
                                                <input type=\"hidden\" id=\"nested\" class=\"form-control form-control-sm\" name=\"nested\" value=\"1\">
                                                <input type=\"hidden\" id=\"type\" class=\"form-control form-control-sm\" name=\"type\" value=\"1\">
                                                <div class=\"form-group col-md-2 align-self-end text-right\">
                                                    <label>Status</label>
                                                    <label class=\"switch s-success mr-2\"> 
                                                        <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"status\">
                                                        <span class=\"slider round\"></span>
                                                    </label>
                                                </div>
                                                <div class=\"form-group col-md-2 align-self-end text-right\">
                                                    <label>Visiblity</label>
                                                    <label class=\"switch s-danger mr-2\"> 
                                                        <input type=\"checkbox\" checked class=\"form-control form-control-sm\" name=\"visiblity\">
                                                        <span class=\"slider round\"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-group mb-4\">
                                                <label for=\"Status\">Icon </label>
                                                <input type=\"file\" name=\"image\"  class=\"dropify\" id=\"icon\" data-default-file=\"\"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn\" data-dismiss=\"modal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg> Close</button>
                                    <button  class=\"btn btn-primary\" >Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--nested ends category-->
            </div>
          
        </div>
    </div>
</div>

{% endblock %}
{% block script %}
<script type=\"text/javascript\">

</script>
{% endblock %}", "AppBundle:Admin:Pages/manageCategories.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Pages/manageCategories.html.twig");
    }
}
