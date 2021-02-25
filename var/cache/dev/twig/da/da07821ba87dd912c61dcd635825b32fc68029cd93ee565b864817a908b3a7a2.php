<?php

/* @AppBundle/Admin/Properties/headerMain.html.twig */
class __TwigTemplate_7211c2ba443af223b155045d287c82812991ca2eebf511635ea407f33bd0630e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_602bbeb8c8af882b66689937dcf6388f6e6db84e8f6a47f67f72d71815d08c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602bbeb8c8af882b66689937dcf6388f6e6db84e8f6a47f67f72d71815d08c18->enter($__internal_602bbeb8c8af882b66689937dcf6388f6e6db84e8f6a47f67f72d71815d08c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Admin/Properties/headerMain.html.twig"));

        $__internal_c1641baff2b657cad1f5238ee12397b717cb8f9949eec03cfa9496960c296854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1641baff2b657cad1f5238ee12397b717cb8f9949eec03cfa9496960c296854->enter($__internal_c1641baff2b657cad1f5238ee12397b717cb8f9949eec03cfa9496960c296854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Admin/Properties/headerMain.html.twig"));

        // line 1
        echo "    <div class=\"header-container fixed-top\">
<header class=\"header navbar navbar-expand-sm\">
    <ul class=\"navbar-item flex-row\">
        <li class=\"nav-item align-self-center page-heading\">
            <div class=\"page-header\">
                        ";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "userType", array()) == "root")) {
            // line 7
            echo "                        <h3>Grocbay</h3>
                        ";
        } else {
            // line 9
            echo "                <div class=\"page-title\">
                      <div class=\"spinner-border text-success align-self-center \"></div>

                </div>
                ";
        }
        // line 14
        echo "
            </div>
        </li>
    </ul>
    <a href=\"javascript:void(0);\" class=\"sidebarCollapse\" data-placement=\"bottom\"><svg
            xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
            stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
            class=\"feather feather-list\">
            <line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
            <line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
            <line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
            <line x1=\"3\" y1=\"6\" x2=\"3\" y2=\"6\"></line>
            <line x1=\"3\" y1=\"12\" x2=\"3\" y2=\"12\"></line>
            <line x1=\"3\" y1=\"18\" x2=\"3\" y2=\"18\"></line>
        </svg></a>
    <ul class=\"navbar-item flex-row search-ul\">
        <li class=\"nav-item align-self-center search-animated\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                class=\"feather feather-search toggle-search\">
                <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
            </svg>
<form class=\"form-inline search-full form-inline search\" role=\"search\" action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_data");
        echo "\">
                <div class=\"search-bar\">
                    <input type=\"text\" class=\"form-control search-form-control  ml-lg-auto\"
                        placeholder=\"Type here to search\" name=\"data\">
                </div>
            </form>
        </li>
    </ul>
    <ul class=\"navbar-item flex-row navbar-dropdown\">
            <li class=\"nav-item dropdown message-dropdown mr-4 banner-area\">
            </li>
        ";
        // line 48
        $context["explodedURL"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"), "/");
        // line 49
        echo "
        ";
        // line 50
        if (($this->getAttribute(($context["explodedURL"] ?? null), 1, array(), "array", true, true) && ($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 1, array(), "array") == "web"))) {
            // line 51
            echo "
            ";
            // line 52
            if ($this->getAttribute(($context["explodedURL"] ?? null), 4, array(), "array", true, true)) {
                // line 53
                echo "
                ";
                // line 54
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 4, array(), "array") == "all-users")) {
                    // line 55
                    echo "                    
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                    // line 57
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_create");
                    echo "\" class=\"nav-link create-btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Customer
                        </a>
                    </li>

                ";
                }
                // line 63
                echo "
                ";
                // line 64
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 4, array(), "array") == "orders")) {
                    // line 65
                    echo "
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                    // line 67
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_order");
                    echo "\" class=\"nav-link create-btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Order
                        </a>
                    </li>

                ";
                }
                // line 73
                echo "
                ";
                // line 74
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 4, array(), "array") == "all-parent-category")) {
                    // line 75
                    echo "

            
                ";
                }
                // line 79
                echo "
                ";
                // line 80
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 4, array(), "array") == "all-sub-category")) {
                    // line 81
                    echo "
            
                ";
                }
                // line 84
                echo "
                ";
                // line 85
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 4, array(), "array") == "list-nested")) {
                    // line 86
                    echo "

                ";
                }
                // line 89
                echo "

                ";
                // line 91
                if ((($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 4, array(), "array") == "all-admins") || ($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 4, array(), "array") == "all-delivery-boys"))) {
                    // line 92
                    echo "
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                    // line 94
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_create");
                    echo "\" class=\"nav-link create-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                class=\"feather feather-plus\">
                                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                                <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            </svg> Create User
                        </a>
                    </li>

                ";
                }
                // line 105
                echo "
                ";
                // line 106
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 4, array(), "array") == "all-brands")) {
                    // line 107
                    echo "            ";
                    if ((($context["branch_type"] ?? $this->getContext($context, "branch_type")) == 0)) {
                        // line 108
                        echo "                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"#createBrands\" data-toggle=\"modal\" data-target=\"#createBrands\"class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Brand
                        </a>
                    </li>
                    ";
                    }
                    // line 114
                    echo "                ";
                }
                // line 115
                echo "
            ";
            }
            // line 117
            echo "
            ";
            // line 118
            if ($this->getAttribute(($context["explodedURL"] ?? null), 3, array(), "array", true, true)) {
                // line 119
                echo "
                ";
                // line 120
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "view-menu")) {
                    // line 121
                    echo "            ";
                    if ((($context["branch_type"] ?? $this->getContext($context, "branch_type")) == 0)) {
                        // line 122
                        echo "
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                        // line 124
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_add_menu_item");
                        echo "\" class=\"nav-link create-btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Product
                        </a>
                    </li>
                    ";
                    }
                    // line 129
                    echo "
                ";
                }
                // line 131
                echo "
                ";
                // line 132
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "manage-advertisement")) {
                    // line 133
                    echo "
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                    // line 135
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("advertisement_new");
                    echo "\" class=\"nav-link create-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                class=\"feather feather-plus\">
                                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                                <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            </svg> Create Banner
                        </a>
                    </li>

                ";
                }
                // line 146
                echo "              
               ";
                // line 147
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "list-notification")) {
                    // line 148
                    echo "                
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                    // line 150
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("send_push_notification", array("type" => "all"));
                    echo "\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Send Notifcation
                        </a>
                    </li>

                ";
                }
                // line 156
                echo "                ";
                if ((($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "promocode") &&  !$this->getAttribute(($context["explodedURL"] ?? null), 4, array(), "array", true, true))) {
                    // line 157
                    echo "
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                    // line 159
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_new_promocode");
                    echo "\" class=\"nav-link create-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                class=\"feather feather-plus\">
                                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                                <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            </svg> Create Discount Code
                        </a>
                    </li>

                ";
                }
                // line 170
                echo "
                ";
                // line 171
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "branch")) {
                    // line 172
                    echo "                            ";
                    if ((($context["branch_type"] ?? $this->getContext($context, "branch_type")) == 0)) {
                        // line 173
                        echo "
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                        // line 175
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_create");
                        echo "\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Branch
                        </a>
                    </li>
                    ";
                    }
                    // line 180
                    echo "                ";
                }
                // line 181
                echo "
                 ";
                // line 182
                if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "filter-order-list")) {
                    // line 183
                    echo "                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                    // line 184
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_order");
                    echo "\" class=\"nav-link create-btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Order
                        </a>
                    </li>
                ";
                }
                // line 189
                echo "
                ";
                // line 190
                $context["explodedURLFilter"] = twig_split_filter($this->env, $this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array"), "?");
                // line 191
                echo "
                ";
                // line 192
                if (($this->getAttribute(($context["explodedURLFilter"] ?? $this->getContext($context, "explodedURLFilter")), 0, array(), "array") == "filter-order-list")) {
                    // line 193
                    echo "                
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                            <a href=\"";
                    // line 195
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_order");
                    echo "\" class=\"nav-link\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Order
                            </a>
                    </li>

                ";
                }
                // line 201
                echo " 
            ";
            }
            // line 203
            echo "
        ";
        }
        // line 205
        echo "
        ";
        // line 206
        if ($this->getAttribute(($context["explodedURL"] ?? null), 3, array(), "array", true, true)) {
            // line 207
            echo "
            ";
            // line 208
            if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "all-users")) {
                // line 209
                echo "            
            <li class=\"nav-item dropdown message-dropdown mr-4\">
                <a href=\"";
                // line 211
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_create");
                echo "\" class=\"nav-link\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Customer
                </a>
            </li>

            ";
            }
            // line 217
            echo "               ";
            if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "all-brands")) {
                // line 218
                echo "                        ";
                if ((($context["branch_type"] ?? $this->getContext($context, "branch_type")) == 0)) {
                    // line 219
                    echo "
            <li class=\"nav-item dropdown message-dropdown mr-4\">
                <a href=\"#createBrands\" data-toggle=\"modal\" data-target=\"#createBrands\"class=\"nav-link\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Brand
                </a>
            </li>
            ";
                }
                // line 226
                echo "
            ";
            }
            // line 228
            echo "            ";
            if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "orders")) {
                // line 229
                echo "
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                // line 231
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_order");
                echo "\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Order
                        </a>
                    </li>

            ";
            }
            // line 237
            echo "
            ";
            // line 238
            if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "all-parent-category")) {
                // line 239
                echo "
            ";
            }
            // line 241
            echo "            ";
            if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "list-nested")) {
                // line 242
                echo "
            
            ";
            }
            // line 245
            echo "              ";
            if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 3, array(), "array") == "all-sub-category")) {
                // line 246
                echo "
                
            
            ";
            }
            // line 250
            echo "
        ";
        }
        // line 252
        echo "
         ";
        // line 253
        if ($this->getAttribute(($context["explodedURL"] ?? null), 2, array(), "array", true, true)) {
            // line 254
            echo "
            ";
            // line 255
            if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 2, array(), "array") == "view-menu")) {
                // line 256
                echo "                        ";
                if ((($context["branch_type"] ?? $this->getContext($context, "branch_type")) == 0)) {
                    // line 257
                    echo "
              <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                    // line 259
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_add_menu_item");
                    echo "\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Product
                        </a>
                    </li>
                    ";
                }
                // line 264
                echo "            ";
            }
            // line 265
            echo "            ";
            if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 2, array(), "array") == "branch")) {
                // line 266
                echo "                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                // line 267
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_create");
                echo "\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Branch
                        </a>
                    </li>
            ";
            }
            // line 272
            echo "
            ";
            // line 273
            if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 2, array(), "array") == "manage-advertisement")) {
                // line 274
                echo "                <li class=\"nav-item dropdown message-dropdown mr-4\">
                    <a href=\"";
                // line 275
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("advertisement_new");
                echo "\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                            stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                            class=\"feather feather-plus\">
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                        </svg> Create Banner
                    </a>
                </li>
            ";
            }
            // line 285
            echo "               
            ";
            // line 286
            if (($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 2, array(), "array") == "list-notification")) {
                // line 287
                echo "            
                <li class=\"nav-item dropdown message-dropdown mr-4\">
                    <a href=\"";
                // line 289
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("send_push_notification", array("type" => "all"));
                echo "\" class=\"nav-link\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Send Notifcation
                    </a>
                </li>

            ";
            }
            // line 295
            echo "
            ";
            // line 296
            if ((($this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 2, array(), "array") == "promocode") &&  !$this->getAttribute(($context["explodedURL"] ?? null), 3, array(), "array", true, true))) {
                // line 297
                echo "
                <li class=\"nav-item dropdown message-dropdown mr-4\">
                    <a href=\"";
                // line 299
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_new_promocode");
                echo "\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                            stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                            class=\"feather feather-plus\">
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                        </svg> Create Discount Code
                    </a>
                </li>

             ";
            }
            // line 310
            echo "            
            ";
            // line 311
            $context["explodedURLFilter"] = twig_split_filter($this->env, $this->getAttribute(($context["explodedURL"] ?? $this->getContext($context, "explodedURL")), 2, array(), "array"), "?");
            // line 312
            echo "
            ";
            // line 313
            if (($this->getAttribute(($context["explodedURLFilter"] ?? $this->getContext($context, "explodedURLFilter")), 0, array(), "array") == "filter-order-list")) {
                // line 314
                echo "            
                 <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"";
                // line 316
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_order");
                echo "\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Order
                        </a>
                </li>

            ";
            }
            // line 322
            echo "
        ";
        }
        // line 324
        echo "
           <li class=\"nav-item dropdown notification-dropdown\">
            <a href=\"";
        // line 326
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=delivery&status=received&time=0&date=&area=0\" class=\"nav-link dropdown-toggle expressb center notification icon btn btn-default bs-tooltip\" data-placement=\"bottom\" title=\"Home Delivery\" var='DATAHERE'>
              <img src=\"/assets/images/home.png\" style=\"width:24px;\" class=\"\">
              <span class=\"notification-number home\">0</span>
            </a>
            </li>     
            <li class=\"nav-item dropdown notification-dropdown\">
            <a href=\"";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=express&status=received&time=0&date=&area=0\" class=\"nav-link dropdown-toggle  notification icon btn btn-default bs-tooltip\" data-placement=\"bottom\" title=\"Express Delivery\" var='DATAHERE'>
              <img src=\"/assets/images/express.png\" style=\"width:24px;\">
               <span class=\"notification-number express\">0</span>
            </a>
            </li>          
          <li class=\"nav-item dropdown notification-dropdown\">
            <a href=\"";
        // line 338
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=pickup&status=received&time=0&date=&area=0\" class=\"nav-link dropdown-toggle  notification icon btn btn-default bs-tooltip\" data-placement=\"bottom\" title=\"Pickup From Store\" var='DATAHERE'>
              <img src=\"/assets/images/pickup.png\" style=\"width:24px;\">
               <span class=\"notification-number pickup\">0</span>
            </a>
            </li>     

       <!--  <li class=\"nav-item dropdown notification-dropdown\">
            <a href=\"javascript:void(0);\" class=\"nav-link dropdown-toggle\" id=\"notificationDropdown\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                    stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    class=\"feather feather-bell\">
                    <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"></path>
                    <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path>
                </svg><span class=\"badge badge-success\"></span>
            </a>
            <div class=\"dropdown-menu position-absolute animated fadeInUp\" aria-labelledby=\"notificationDropdown\">
                <div class=\"notification-scroll\">
                    <div class=\"dropdown-item\">
                        <div class=\"media server-log\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                stroke-linejoin=\"round\" class=\"feather feather-server\">
                                <rect x=\"2\" y=\"2\" width=\"20\" height=\"8\" rx=\"2\" ry=\"2\"></rect>
                                <rect x=\"2\" y=\"14\" width=\"20\" height=\"8\" rx=\"2\" ry=\"2\"></rect>
                                <line x1=\"6\" y1=\"6\" x2=\"6\" y2=\"6\"></line>
                                <line x1=\"6\" y1=\"18\" x2=\"6\" y2=\"18\"></line>
                            </svg>
                            <div class=\"media-body\">
                                <div class=\"data-info\">
                                    <h6 class=\"\">Server Rebooted</h6>
                                    <p class=\"\">45 min ago</p>
                                </div>

                                <div class=\"icon-status\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                        stroke-linejoin=\"round\" class=\"feather feather-x\">
                                        <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
                                        <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"dropdown-item\">
                        <div class=\"media \">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                stroke-linejoin=\"round\" class=\"feather feather-heart\">
                                <path
                                    d=\"M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z\">
                                </path>
                            </svg>
                            <div class=\"media-body\">
                                <div class=\"data-info\">
                                    <h6 class=\"\">Licence Expiring Soon</h6>
                                    <p class=\"\">8 hrs ago</p>
                                </div>

                                <div class=\"icon-status\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                        stroke-linejoin=\"round\" class=\"feather feather-x\">
                                        <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
                                        <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"dropdown-item\">
                        <div class=\"media file-upload\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                stroke-linejoin=\"round\" class=\"feather feather-file-text\">
                                <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path>
                                <polyline points=\"14 2 14 8 20 8\"></polyline>
                                <line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line>
                                <line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line>
                                <polyline points=\"10 9 9 9 8 9\"></polyline>
                            </svg>
                            <div class=\"media-body\">
                                <div class=\"data-info\">
                                    <h6 class=\"\">Kelly Portfolio.pdf</h6>
                                    <p class=\"\">670 kb</p>
                                </div>

                                <div class=\"icon-status\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                        stroke-linejoin=\"round\" class=\"feather feather-check\">
                                        <polyline points=\"20 6 9 17 4 12\"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li> -->

        <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
            <a href=\"javascript:void(0);\" class=\"nav-link dropdown-toggle user\" id=\"userProfileDropdown\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                    stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    class=\"feather feather-user\">
                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path>
                    <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>
                </svg>
            </a>
            <div class=\"dropdown-menu position-absolute animated fadeInUp\" aria-labelledby=\"userProfileDropdown\">
                <div class=\"user-profile-section\">
                    <div class=\"media mx-auto\">
 <span style=\"
    width: 35px;
    font-size: 22px;
    font-weight: 900;
    color: #fff !important;
    background: #4156b5;
    border-radius: 50%;
    padding: -1px;
    margin-right: 5px;
    margin-left: -2px;
    text-align: center;
\"> ";
        // line 466
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstName", array()))), "html", null, true);
        echo "</span>                        <div class=\"media-body\">
                            <h5>";
        // line 467
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastName", array())), "html", null, true);
        echo "</h5>
                            <p>";
        // line 468
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "userType", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"dropdown-item\">
                    <a href=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                            stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                            class=\"feather feather-user\">
                            <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path>
                            <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>
                        </svg> <span>My Profile</span>
                    </a>
                </div>
                <div class=\"dropdown-item\">
                    <a href=\"";
        // line 483
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logout");
        echo "\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                            stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                            class=\"feather feather-log-out\">
                            <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path>
                            <polyline points=\"16 17 21 12 16 7\"></polyline>
                            <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line>
                        </svg> <span>Log Out</span>
                    </a>
                </div>
            </div>
        </li>
    </ul>
</header>
</div>";
        
        $__internal_602bbeb8c8af882b66689937dcf6388f6e6db84e8f6a47f67f72d71815d08c18->leave($__internal_602bbeb8c8af882b66689937dcf6388f6e6db84e8f6a47f67f72d71815d08c18_prof);

        
        $__internal_c1641baff2b657cad1f5238ee12397b717cb8f9949eec03cfa9496960c296854->leave($__internal_c1641baff2b657cad1f5238ee12397b717cb8f9949eec03cfa9496960c296854_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Admin/Properties/headerMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  772 => 483,  759 => 473,  751 => 468,  747 => 467,  743 => 466,  612 => 338,  603 => 332,  594 => 326,  590 => 324,  586 => 322,  577 => 316,  573 => 314,  571 => 313,  568 => 312,  566 => 311,  563 => 310,  549 => 299,  545 => 297,  543 => 296,  540 => 295,  531 => 289,  527 => 287,  525 => 286,  522 => 285,  509 => 275,  506 => 274,  504 => 273,  501 => 272,  493 => 267,  490 => 266,  487 => 265,  484 => 264,  476 => 259,  472 => 257,  469 => 256,  467 => 255,  464 => 254,  462 => 253,  459 => 252,  455 => 250,  449 => 246,  446 => 245,  441 => 242,  438 => 241,  434 => 239,  432 => 238,  429 => 237,  420 => 231,  416 => 229,  413 => 228,  409 => 226,  400 => 219,  397 => 218,  394 => 217,  385 => 211,  381 => 209,  379 => 208,  376 => 207,  374 => 206,  371 => 205,  367 => 203,  363 => 201,  354 => 195,  350 => 193,  348 => 192,  345 => 191,  343 => 190,  340 => 189,  332 => 184,  329 => 183,  327 => 182,  324 => 181,  321 => 180,  313 => 175,  309 => 173,  306 => 172,  304 => 171,  301 => 170,  287 => 159,  283 => 157,  280 => 156,  271 => 150,  267 => 148,  265 => 147,  262 => 146,  248 => 135,  244 => 133,  242 => 132,  239 => 131,  235 => 129,  227 => 124,  223 => 122,  220 => 121,  218 => 120,  215 => 119,  213 => 118,  210 => 117,  206 => 115,  203 => 114,  195 => 108,  192 => 107,  190 => 106,  187 => 105,  173 => 94,  169 => 92,  167 => 91,  163 => 89,  158 => 86,  156 => 85,  153 => 84,  148 => 81,  146 => 80,  143 => 79,  137 => 75,  135 => 74,  132 => 73,  123 => 67,  119 => 65,  117 => 64,  114 => 63,  105 => 57,  101 => 55,  99 => 54,  96 => 53,  94 => 52,  91 => 51,  89 => 50,  86 => 49,  84 => 48,  70 => 37,  45 => 14,  38 => 9,  34 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <div class=\"header-container fixed-top\">
<header class=\"header navbar navbar-expand-sm\">
    <ul class=\"navbar-item flex-row\">
        <li class=\"nav-item align-self-center page-heading\">
            <div class=\"page-header\">
                        {% if app.user.userType == 'root' %}
                        <h3>Grocbay</h3>
                        {% else %}
                <div class=\"page-title\">
                      <div class=\"spinner-border text-success align-self-center \"></div>

                </div>
                {% endif %}

            </div>
        </li>
    </ul>
    <a href=\"javascript:void(0);\" class=\"sidebarCollapse\" data-placement=\"bottom\"><svg
            xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
            stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
            class=\"feather feather-list\">
            <line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
            <line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
            <line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
            <line x1=\"3\" y1=\"6\" x2=\"3\" y2=\"6\"></line>
            <line x1=\"3\" y1=\"12\" x2=\"3\" y2=\"12\"></line>
            <line x1=\"3\" y1=\"18\" x2=\"3\" y2=\"18\"></line>
        </svg></a>
    <ul class=\"navbar-item flex-row search-ul\">
        <li class=\"nav-item align-self-center search-animated\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                class=\"feather feather-search toggle-search\">
                <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
            </svg>
<form class=\"form-inline search-full form-inline search\" role=\"search\" action=\"{{ path('search_data') }}\">
                <div class=\"search-bar\">
                    <input type=\"text\" class=\"form-control search-form-control  ml-lg-auto\"
                        placeholder=\"Type here to search\" name=\"data\">
                </div>
            </form>
        </li>
    </ul>
    <ul class=\"navbar-item flex-row navbar-dropdown\">
            <li class=\"nav-item dropdown message-dropdown mr-4 banner-area\">
            </li>
        {% set explodedURL = app.request.server.get('REQUEST_URI')|split('/') %}

        {% if explodedURL[1] is defined and explodedURL[1] == 'web' %}

            {% if explodedURL[4] is defined %}

                {% if (explodedURL[4] == 'all-users') %}
                    
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('customer_create') }}\" class=\"nav-link create-btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Customer
                        </a>
                    </li>

                {% endif %}

                {% if (explodedURL[4] == 'orders') %}

                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('create_order') }}\" class=\"nav-link create-btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Order
                        </a>
                    </li>

                {% endif %}

                {% if (explodedURL[4] == 'all-parent-category') %}


            
                {% endif %}

                {% if (explodedURL[4] == 'all-sub-category') %}

            
                {% endif %}

                {% if (explodedURL[4] == 'list-nested') %}


                {% endif %}


                {% if (explodedURL[4] == 'all-admins' or explodedURL[4] == 'all-delivery-boys') %}

                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('admin_create')}}\" class=\"nav-link create-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                class=\"feather feather-plus\">
                                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                                <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            </svg> Create User
                        </a>
                    </li>

                {% endif %}

                {% if (explodedURL[4] == 'all-brands') %}
            {% if branch_type == 0 %}
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"#createBrands\" data-toggle=\"modal\" data-target=\"#createBrands\"class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Brand
                        </a>
                    </li>
                    {% endif %}
                {% endif %}

            {% endif %}

            {% if explodedURL[3] is defined %}

                {% if (explodedURL[3] == 'view-menu') %}
            {% if branch_type == 0 %}

                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('restaurant_add_menu_item') }}\" class=\"nav-link create-btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Product
                        </a>
                    </li>
                    {% endif %}

                {% endif %}

                {% if (explodedURL[3] == 'manage-advertisement') %}

                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('advertisement_new') }}\" class=\"nav-link create-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                class=\"feather feather-plus\">
                                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                                <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            </svg> Create Banner
                        </a>
                    </li>

                {% endif %}
              
               {% if (explodedURL[3] == 'list-notification') %}
                
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('send_push_notification',{'type':'all'}) }}\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Send Notifcation
                        </a>
                    </li>

                {% endif %}
                {% if (explodedURL[3] == 'promocode') and (not(explodedURL[4] is defined)) %}

                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('add_new_promocode') }}\" class=\"nav-link create-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                class=\"feather feather-plus\">
                                <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                                <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                            </svg> Create Discount Code
                        </a>
                    </li>

                {% endif %}

                {% if (explodedURL[3] == 'branch') %}
                            {% if branch_type == 0 %}

                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('restaurant_create') }}\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Branch
                        </a>
                    </li>
                    {% endif %}
                {% endif %}

                 {% if (explodedURL[3] == 'filter-order-list') %}
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('create_order') }}\" class=\"nav-link create-btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Order
                        </a>
                    </li>
                {% endif %}

                {% set explodedURLFilter = explodedURL[3]|split('?') %}

                {% if (explodedURLFilter[0] == 'filter-order-list') %}
                
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                            <a href=\"{{ path('create_order') }}\" class=\"nav-link\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Order
                            </a>
                    </li>

                {% endif %}
 
            {% endif %}

        {% endif %}

        {% if explodedURL[3] is defined %}

            {% if (explodedURL[3] == 'all-users') %}
            
            <li class=\"nav-item dropdown message-dropdown mr-4\">
                <a href=\"{{ path('customer_create') }}\" class=\"nav-link\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Customer
                </a>
            </li>

            {% endif %}
               {% if (explodedURL[3] == 'all-brands') %}
                        {% if branch_type == 0 %}

            <li class=\"nav-item dropdown message-dropdown mr-4\">
                <a href=\"#createBrands\" data-toggle=\"modal\" data-target=\"#createBrands\"class=\"nav-link\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Brand
                </a>
            </li>
            {% endif %}

            {% endif %}
            {% if (explodedURL[3] == 'orders') %}

                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('create_order') }}\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Order
                        </a>
                    </li>

            {% endif %}

            {% if (explodedURL[3] == 'all-parent-category') %}

            {% endif %}
            {% if (explodedURL[3] == 'list-nested') %}

            
            {% endif %}
              {% if (explodedURL[3] == 'all-sub-category') %}

                
            
            {% endif %}

        {% endif %}

         {% if explodedURL[2] is defined %}

            {% if (explodedURL[2] == 'view-menu') %}
                        {% if branch_type == 0 %}

              <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('restaurant_add_menu_item') }}\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Product
                        </a>
                    </li>
                    {% endif %}
            {% endif %}
            {% if (explodedURL[2] == 'branch') %}
                    <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('restaurant_create') }}\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Branch
                        </a>
                    </li>
            {% endif %}

            {% if (explodedURL[2] == 'manage-advertisement') %}
                <li class=\"nav-item dropdown message-dropdown mr-4\">
                    <a href=\"{{ path('advertisement_new') }}\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                            stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                            class=\"feather feather-plus\">
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                        </svg> Create Banner
                    </a>
                </li>
            {% endif %}
               
            {% if (explodedURL[2] == 'list-notification') %}
            
                <li class=\"nav-item dropdown message-dropdown mr-4\">
                    <a href=\"{{ path('send_push_notification',{'type':'all'}) }}\" class=\"nav-link\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Send Notifcation
                    </a>
                </li>

            {% endif %}

            {% if (explodedURL[2] == 'promocode') and (not(explodedURL[3] is defined)) %}

                <li class=\"nav-item dropdown message-dropdown mr-4\">
                    <a href=\"{{ path('add_new_promocode') }}\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                            stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                            class=\"feather feather-plus\">
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                        </svg> Create Discount Code
                    </a>
                </li>

             {% endif %}
            
            {% set explodedURLFilter = explodedURL[2]|split('?') %}

            {% if (explodedURLFilter[0] == 'filter-order-list') %}
            
                 <li class=\"nav-item dropdown message-dropdown mr-4\">
                        <a href=\"{{ path('create_order') }}\" class=\"nav-link\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-plus\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg> Create Order
                        </a>
                </li>

            {% endif %}

        {% endif %}

           <li class=\"nav-item dropdown notification-dropdown\">
            <a href=\"{{ path('filter_order_list')}}?type=delivery&status=received&time=0&date=&area=0\" class=\"nav-link dropdown-toggle expressb center notification icon btn btn-default bs-tooltip\" data-placement=\"bottom\" title=\"Home Delivery\" var='DATAHERE'>
              <img src=\"/assets/images/home.png\" style=\"width:24px;\" class=\"\">
              <span class=\"notification-number home\">0</span>
            </a>
            </li>     
            <li class=\"nav-item dropdown notification-dropdown\">
            <a href=\"{{ path('filter_order_list')}}?type=express&status=received&time=0&date=&area=0\" class=\"nav-link dropdown-toggle  notification icon btn btn-default bs-tooltip\" data-placement=\"bottom\" title=\"Express Delivery\" var='DATAHERE'>
              <img src=\"/assets/images/express.png\" style=\"width:24px;\">
               <span class=\"notification-number express\">0</span>
            </a>
            </li>          
          <li class=\"nav-item dropdown notification-dropdown\">
            <a href=\"{{ path('filter_order_list')}}?type=pickup&status=received&time=0&date=&area=0\" class=\"nav-link dropdown-toggle  notification icon btn btn-default bs-tooltip\" data-placement=\"bottom\" title=\"Pickup From Store\" var='DATAHERE'>
              <img src=\"/assets/images/pickup.png\" style=\"width:24px;\">
               <span class=\"notification-number pickup\">0</span>
            </a>
            </li>     

       <!--  <li class=\"nav-item dropdown notification-dropdown\">
            <a href=\"javascript:void(0);\" class=\"nav-link dropdown-toggle\" id=\"notificationDropdown\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                    stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    class=\"feather feather-bell\">
                    <path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"></path>
                    <path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path>
                </svg><span class=\"badge badge-success\"></span>
            </a>
            <div class=\"dropdown-menu position-absolute animated fadeInUp\" aria-labelledby=\"notificationDropdown\">
                <div class=\"notification-scroll\">
                    <div class=\"dropdown-item\">
                        <div class=\"media server-log\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                stroke-linejoin=\"round\" class=\"feather feather-server\">
                                <rect x=\"2\" y=\"2\" width=\"20\" height=\"8\" rx=\"2\" ry=\"2\"></rect>
                                <rect x=\"2\" y=\"14\" width=\"20\" height=\"8\" rx=\"2\" ry=\"2\"></rect>
                                <line x1=\"6\" y1=\"6\" x2=\"6\" y2=\"6\"></line>
                                <line x1=\"6\" y1=\"18\" x2=\"6\" y2=\"18\"></line>
                            </svg>
                            <div class=\"media-body\">
                                <div class=\"data-info\">
                                    <h6 class=\"\">Server Rebooted</h6>
                                    <p class=\"\">45 min ago</p>
                                </div>

                                <div class=\"icon-status\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                        stroke-linejoin=\"round\" class=\"feather feather-x\">
                                        <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
                                        <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"dropdown-item\">
                        <div class=\"media \">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                stroke-linejoin=\"round\" class=\"feather feather-heart\">
                                <path
                                    d=\"M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z\">
                                </path>
                            </svg>
                            <div class=\"media-body\">
                                <div class=\"data-info\">
                                    <h6 class=\"\">Licence Expiring Soon</h6>
                                    <p class=\"\">8 hrs ago</p>
                                </div>

                                <div class=\"icon-status\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                        stroke-linejoin=\"round\" class=\"feather feather-x\">
                                        <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
                                        <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"dropdown-item\">
                        <div class=\"media file-upload\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                stroke-linejoin=\"round\" class=\"feather feather-file-text\">
                                <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path>
                                <polyline points=\"14 2 14 8 20 8\"></polyline>
                                <line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line>
                                <line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line>
                                <polyline points=\"10 9 9 9 8 9\"></polyline>
                            </svg>
                            <div class=\"media-body\">
                                <div class=\"data-info\">
                                    <h6 class=\"\">Kelly Portfolio.pdf</h6>
                                    <p class=\"\">670 kb</p>
                                </div>

                                <div class=\"icon-status\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                        fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"
                                        stroke-linejoin=\"round\" class=\"feather feather-check\">
                                        <polyline points=\"20 6 9 17 4 12\"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li> -->

        <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
            <a href=\"javascript:void(0);\" class=\"nav-link dropdown-toggle user\" id=\"userProfileDropdown\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                    stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    class=\"feather feather-user\">
                    <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path>
                    <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>
                </svg>
            </a>
            <div class=\"dropdown-menu position-absolute animated fadeInUp\" aria-labelledby=\"userProfileDropdown\">
                <div class=\"user-profile-section\">
                    <div class=\"media mx-auto\">
 <span style=\"
    width: 35px;
    font-size: 22px;
    font-weight: 900;
    color: #fff !important;
    background: #4156b5;
    border-radius: 50%;
    padding: -1px;
    margin-right: 5px;
    margin-left: -2px;
    text-align: center;
\"> {{ app.user.firstName|first|lower }}</span>                        <div class=\"media-body\">
                            <h5>{{ app.user.firstName ~ \" \" ~ app.user.lastName }}</h5>
                            <p>{{ app.user.userType }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"dropdown-item\">
                    <a href=\"{{ path('admin_edit',{'id':app.user.id})}}\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                            stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                            class=\"feather feather-user\">
                            <path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path>
                            <circle cx=\"12\" cy=\"7\" r=\"4\"></circle>
                        </svg> <span>My Profile</span>
                    </a>
                </div>
                <div class=\"dropdown-item\">
                    <a href=\"{{ path('admin_logout')}}\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                            stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                            class=\"feather feather-log-out\">
                            <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path>
                            <polyline points=\"16 17 21 12 16 7\"></polyline>
                            <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line>
                        </svg> <span>Log Out</span>
                    </a>
                </div>
            </div>
        </li>
    </ul>
</header>
</div>", "@AppBundle/Admin/Properties/headerMain.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Properties/headerMain.html.twig");
    }
}
