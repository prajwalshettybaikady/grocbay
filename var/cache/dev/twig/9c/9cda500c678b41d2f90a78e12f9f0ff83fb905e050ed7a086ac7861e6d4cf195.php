<?php

/* @AppBundle/Admin/Properties/leftSideBar.html.twig */
class __TwigTemplate_8987597b89dad5a199ec29b2b0f6cb1e0669068b695bdbffaaa795ad11759190 extends Twig_Template
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
        $__internal_a1f75c1ad2e702cbffd5fc4932ffd43a55de9d67920db9fa9a962e589af26ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f75c1ad2e702cbffd5fc4932ffd43a55de9d67920db9fa9a962e589af26ac3->enter($__internal_a1f75c1ad2e702cbffd5fc4932ffd43a55de9d67920db9fa9a962e589af26ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Admin/Properties/leftSideBar.html.twig"));

        $__internal_c68d22c8ef199ef4b476f38738b3e28229e9907bdcdab7f2279f1025711655eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68d22c8ef199ef4b476f38738b3e28229e9907bdcdab7f2279f1025711655eb->enter($__internal_c68d22c8ef199ef4b476f38738b3e28229e9907bdcdab7f2279f1025711655eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Admin/Properties/leftSideBar.html.twig"));

        // line 1
        echo "<!--  BEGIN MAIN CONTAINER  -->
<div class=\"main-container\" id=\"container\">
    <div class=\"overlay\"></div>
    <div class=\"cs-overlay\"></div>
    <div class=\"search-overlay\"></div>
    <div class=\"sidebar-wrapper sidebar-theme\">         
        <nav id=\"compactSidebar\">
            <div class=\"theme-logo\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("developer_dashboard");
        echo "\">
                    <img src=\"/assets/assets/img/logo.png\" class=\"navbar-logo\" alt=\"Grocbay\">
                </a>
            </div>
            <ul class=\"menu-categories\">
                <li class=\"menu active\" id=\"dashboard\">
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("developer_dashboard");
        echo "\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Home</span></div>
                </li>
                <li class=\"menu menubar\" id=\"ordersoption\">
                    <a href=\"#orders\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Orders</span></div>
                </li>
                <li class=\"menu menubar\" id=\"productsoption\">
                    <a href=\"#products\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-zap\"><polygon points=\"13 2 3 14 12 14 11 22 21 10 12 10 13 2\"></polygon></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Products</span></div>
                </li>

                <li class=\"menu\" id=\"customer\">
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_list");
        echo "\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-users\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Customers</span></div>
                </li>

                <li class=\"menu menubar\" id=\"deliveryoption\">
                    <a href=\"#delivery\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-truck\"><rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect><polygon points=\"16 8 20 8 23 11 23 16 16 16 16 8\"></polygon><circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle><circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Delivery</span></div>
                </li>

                <li class=\"menu menubar\" id=\"analyticsoption\">
                    <a href=\"#analytics\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-pie-chart\"><path d=\"M21.21 15.89A10 10 0 1 1 8 2.83\"></path><path d=\"M22 12A10 10 0 0 0 12 2v10z\"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Analytics</span></div>
                </li>

                <li class=\"menu menubar\" id=\"marketingoption\">
                    <a href=\"#marketing\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-briefcase\"><rect x=\"2\" y=\"7\" width=\"20\" height=\"14\" rx=\"2\" ry=\"2\"></rect><path d=\"M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16\"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Marketing / Discounts</span></div>
                </li>

                <li class=\"menu menubar\" id=\"settingsoption\">
                    <a href=\"#settings\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg-->

                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Settings</span></div>
                </li>
            </ul>
        </nav>

            <div id=\"compact_submenuSidebar\" class=\"submenu-sidebar\">
                <div class=\"submenu\" id=\"orders\">
                    <div class=\"category-info\">
                        <h5>Orders</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>

                    <ul class=\"submenu-list\" data-parent-element=\"#orders\"> 
                        <li>
                            <a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=all&time=0&date=&area=0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-copy\"><rect x=\"9\" y=\"9\" width=\"13\" height=\"13\" rx=\"2\" ry=\"2\"></rect><path d=\"M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1\"></path></svg>
                            All Orders</a>
                        </li>
                        <li class=\"\">
                            <a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=0&time=0&date=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "&area=0\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-gift\"><polyline points=\"20 12 20 22 4 22 4 12\"></polyline><rect x=\"2\" y=\"7\" width=\"20\" height=\"5\"></rect><line x1=\"12\" y1=\"22\" x2=\"12\" y2=\"7\"></line><path d=\"M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z\"></path><path d=\"M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z\"></path></svg>
                            Todays Orders </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=received&time=0&date=&area=0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-codesandbox\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"7.5 4.21 12 6.81 16.5 4.21\"></polyline><polyline points=\"7.5 19.79 7.5 14.6 3 12\"></polyline><polyline points=\"21 12 16.5 14.6 16.5 19.79\"></polyline><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>
                                New Orders
                            </a>
                        </li>


                     

                        <li>
                            <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_order");
        echo "\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0lsubmenu7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>
                            Create Order</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=pickup&status=received&time=0&date=&area=0\"> 
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg>
                            Pickup From Store </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_return", array("id" => "0"));
        echo "\"> 
                              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-hash\"><line x1=\"4\" y1=\"9\" x2=\"20\" y2=\"9\"></line><line x1=\"4\" y1=\"15\" x2=\"20\" y2=\"15\"></line><line x1=\"10\" y1=\"3\" x2=\"8\" y2=\"21\"></line><line x1=\"16\" y1=\"3\" x2=\"14\" y2=\"21\"></line></svg>

                           Return/Exchange</a>
                        </li>
               
                    </ul>
                </div>

                <div class=\"submenu\" id=\"products\">
                    <div class=\"category-info\">
                        <h5>Products</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>
                    <ul class=\"submenu-list\" data-parent-element=\"#products\"> 
                        <li>
                            <a href=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_view_menu_item");
        echo "\">
                                <i class=\"fa fa fa-bars\"></i> Manage Products </a>
                        </li>
   ";
        // line 161
        if ((($context["branch_type"] ?? $this->getContext($context, "branch_type")) == 0)) {
            // line 162
            echo "
<li><a href=\"";
            // line 163
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bulk_import");
            echo "\"><i class=\"fa fa-cloud-download\"></i>Import/Export Products</a></li>

";
        } else {
            // line 166
            echo "   <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("import_products");
            echo "\"><i class=\"fa fa-cloud-download\"></i>Import/Export Products</a></li>

";
        }
        // line 169
        echo "
                       <li class=\"sub-submenu\">
                            <a role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#Inventory\" aria-expanded=\"false\"><div>    <i class=\"fa fa-keyboard-o\"></i>Inventory</div> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg></a>
                            <ul id=\"Inventory\" class=\"collapse\" data-parent=\"#compact_submenuSidebar\" style=\"\">
                           <li><a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_stock");
        echo "\">Purchase Inwards</a></li>
                                 <li><a href=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_stock_return");
        echo "\">Purchase Returns</a></li>
                            </ul>
                        </li>
                      <li> <a href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_category");
        echo "\">
                                <i class=\"fa fa-server\"></i> Manage Categories </a>
                        </li>
                        <li><a href=\"";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("brand_list");
        echo "\"><i class=\"fa fa-shopping-bag\"></i>Manage Brands</a></li>

                    </ul>
                </div>

           
                <div class=\"submenu\" id=\"delivery\">
                    <div class=\"category-info\">
                        <h5>Delivery</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>
                    <ul class=\"submenu-list\" data-parent-element=\"#delivery\"> 
                       <li>
                            <a href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delivery_boy_reports");
        echo "\">
                              <i class=\"fa fa-eraser\"></i>
                            Live Report</a>
                        </li>
                      
                            <li>
                         <a href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delivery_location");
        echo "\">
                              <i class=\"fa fa-motorcycle\"></i>
                            Delivery Locations</a>
                        </li>
                       <li>
                          <a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_delivery_slots");
        echo "\">
                              <i class=\"fa fa-clock-o\"></i>
                            Delivery Slots</a>
                        </li>

                    </ul>
                </div>

                <div class=\"submenu\" id=\"analytics\">
                    <div class=\"category-info\">
                        <h5>Analytics</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>
                    <ul class=\"submenu-list\" data-parent-element=\"#analytics\">
                             <li><a href=\"";
        // line 218
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_app_foodra_order_report");
        echo "\"><i class=\"fa fa-bar-chart\"></i>Sales Report</a></li>
                             
                               <li><a href=\"";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("itemwise_report");
        echo "\"><i class=\"fa fa-line-chart\"></i>Itemwise Sales  Report</a></li>
                               <li><a href=\"";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("brandwise_report");
        echo "\"><i class=\"fa fa-line-chart\"></i>Brandwise Sales  Report</a></li>
<li><a href=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_report");
        echo "\"><i class=\"fa fa-search\"></i>Search History Report</a></li>

                              <li><a href=\"";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delivery_boy_reports");
        echo "\"> <i class=\"fa fa-motorcycle  
\"></i>Delivery  Report</a></li>
                              <li><a href=\"";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profit_report");
        echo "\"><i class=\"fa fa-history 
\"></i>Profit  Report</a></li>
<li> <a  href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_app_foodra_all_stock_report");
        echo "\" aria-expanded=\"false\"><span class=\"hide-menu\"><i class=\"fa fa-mail-forward\"></i>All Stocks</span></a></li>
                                <li><a href=\"";
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_app_foodra_stock_report");
        echo "\"><i class=\"fa fa-mail-reply\"></i>Out Of Stocks</a></li>
                    </ul>
                </div>


                <div class=\"submenu\" id=\"marketing\">
                    <div class=\"category-info\">
                        <h5>Marketing / Discounts</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>
                    <ul class=\"submenu-list\" data-parent-element=\"#marketing\">
                        <li>
                            <a href=\"";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("advertisement_manager");
        echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-image\"><rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect><circle cx=\"8.5\" cy=\"8.5\" r=\"1.5\"></circle><polyline points=\"21 15 16 10 5 21\"></polyline></svg> 
                            Banners </a>
                        </li>
                          <li>
                            <a href=\"";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_promocode");
        echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-hash\"><line x1=\"4\" y1=\"9\" x2=\"20\" y2=\"9\"></line><line x1=\"4\" y1=\"15\" x2=\"20\" y2=\"15\"></line><line x1=\"10\" y1=\"3\" x2=\"8\" y2=\"21\"></line><line x1=\"16\" y1=\"3\" x2=\"14\" y2=\"21\"></line></svg>
                                Discount Code 
                            </a>
                        </li>
                          <li>
                            <a href=\"";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loyalty");
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>Loyalty </a>
                        </li>
                          <li>
                            <a href=\"";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_membership");
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-slack\"><path d=\"M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z\"></path><path d=\"M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z\"></path><path d=\"M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z\"></path><path d=\"M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z\"></path><path d=\"M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z\"></path><path d=\"M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z\"></path><path d=\"M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z\"></path><path d=\"M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z\"></path></svg> Membership </a>
                        </li>
                          <li>
                            <a href=\"";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_notification");
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\"><path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"></path><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path></svg> Push Notification </a>
                        </li>
                        
                          <li>
                            <a href=\"";
        // line 262
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_page");
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-grid\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"></rect><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"></rect><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"></rect><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"></rect></svg>
                            Featured Items </a>
                        </li>
                    </ul>
                </div>

                <div class=\"submenu\" id=\"settings\">
                    <div class=\"category-info\">
                        <h5>Settings</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>
                    <ul class=\"submenu-list\" data-parent-element=\"#settings\">
                                      <li> <a  href=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_edit", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "branch", array()))), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"hide-menu\"><i class=\"fa fa-university\"></i>Store Settings</span></a></li>

                       <li>

                       <li>
                            <a href=\"";
        // line 279
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pickup_location");
        echo "\">
                              <i class=\"fa fa-truck\"></i>
                           Pickup Location</a>
                        </li>

                  <li class=\"sub-submenu\">
                            <a role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#returns\" aria-expanded=\"false\"><div>
                                <i class=\"fa fa-user\"></i>

                            Accounts & Permissions</div> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg></a>
                            <ul id=\"returns\" class=\"collapse\" data-parent=\"#compact_submenuSidebar\" style=\"\">
                              <li><a href=\"";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_list");
        echo "\">All User</a></li>
                                        <li><a href=\"";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_create");
        echo "\">Create New User</a></li>
                               
                            </ul>
                        </li>
                        
                        ";
        // line 296
        if ((($context["branch_type"] ?? $this->getContext($context, "branch_type")) == 0)) {
            // line 297
            echo "          <li class=\"sub-submenu\">
                            <a role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#Inventory\" aria-expanded=\"false\"><div>   <i class=\"fa fa-cog\"></i>
                            General Setting</div> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg></a>
                            <ul id=\"Inventory\" class=\"collapse\" data-parent=\"#compact_submenuSidebar\" style=\"\">
                           <li><a href=\"";
            // line 301
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_shop_details");
            echo "\">Basic Setting</a></li>
                              <li><a href=\"";
            // line 302
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sms_manage_template");
            echo "\">SMS API Keys</a></li>
                              <li><a href=\"";
            // line 303
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_setting");
            echo "\">Site Settings</a></li>
                            </ul>
                        </li>
                         <li class=\"sub-submenu\">
                            <a role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#pages\" aria-expanded=\"false\"><div>
                                <i class=\"fa fa-book\"></i>Pages</div> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg></a>
                            <ul id=\"pages\" class=\"collapse\" data-parent=\"#compact_submenuSidebar\" style=\"\">
                                <li><a href=\"";
            // line 310
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_about");
            echo "\">About Us</a></li>
                               <li><a href=\"";
            // line 311
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_privacy");
            echo "\">Privacy And Policy
</a></li>
                              <li><a href=\"";
            // line 313
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_terms");
            echo "\">Terms and Conditions</a></li>
<li><a href=\"";
            // line 314
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_refund");
            echo "\">Refund Policy</a></li>
<li> <a  href=\"";
            // line 315
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_return");
            echo "\" aria-expanded=\"false\"><span class=\"hide-menu\">Return Policy</span></a></li>
                                <li><a href=\"";
            // line 316
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pages_wallet");
            echo "\">Wallet Policy</a></li>
                               
                            </ul>
                        </li>
                     
                            <li><a href=\"";
            // line 321
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_membership");
            echo "\">
                              <i class=\"fa fa-truck\"></i>
                           Membership Setting</a>
                        </li>
                        ";
        }
        // line 326
        echo "                    </ul>
                </div>
            </div>
        </div>";
        
        $__internal_a1f75c1ad2e702cbffd5fc4932ffd43a55de9d67920db9fa9a962e589af26ac3->leave($__internal_a1f75c1ad2e702cbffd5fc4932ffd43a55de9d67920db9fa9a962e589af26ac3_prof);

        
        $__internal_c68d22c8ef199ef4b476f38738b3e28229e9907bdcdab7f2279f1025711655eb->leave($__internal_c68d22c8ef199ef4b476f38738b3e28229e9907bdcdab7f2279f1025711655eb_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Admin/Properties/leftSideBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 326,  496 => 321,  488 => 316,  484 => 315,  480 => 314,  476 => 313,  471 => 311,  467 => 310,  457 => 303,  453 => 302,  449 => 301,  443 => 297,  441 => 296,  433 => 291,  429 => 290,  415 => 279,  407 => 274,  392 => 262,  385 => 258,  379 => 255,  373 => 252,  364 => 246,  356 => 241,  341 => 229,  337 => 228,  332 => 226,  327 => 224,  322 => 222,  318 => 221,  314 => 220,  309 => 218,  292 => 204,  284 => 199,  275 => 193,  259 => 180,  253 => 177,  247 => 174,  243 => 173,  237 => 169,  230 => 166,  224 => 163,  221 => 162,  219 => 161,  213 => 158,  194 => 142,  186 => 137,  179 => 133,  166 => 123,  156 => 118,  148 => 113,  78 => 46,  44 => 15,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--  BEGIN MAIN CONTAINER  -->
<div class=\"main-container\" id=\"container\">
    <div class=\"overlay\"></div>
    <div class=\"cs-overlay\"></div>
    <div class=\"search-overlay\"></div>
    <div class=\"sidebar-wrapper sidebar-theme\">         
        <nav id=\"compactSidebar\">
            <div class=\"theme-logo\">
                <a href=\"{{ path('developer_dashboard') }}\">
                    <img src=\"/assets/assets/img/logo.png\" class=\"navbar-logo\" alt=\"Grocbay\">
                </a>
            </div>
            <ul class=\"menu-categories\">
                <li class=\"menu active\" id=\"dashboard\">
                    <a href=\"{{ path('developer_dashboard') }}\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Home</span></div>
                </li>
                <li class=\"menu menubar\" id=\"ordersoption\">
                    <a href=\"#orders\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Orders</span></div>
                </li>
                <li class=\"menu menubar\" id=\"productsoption\">
                    <a href=\"#products\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-zap\"><polygon points=\"13 2 3 14 12 14 11 22 21 10 12 10 13 2\"></polygon></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Products</span></div>
                </li>

                <li class=\"menu\" id=\"customer\">
                    <a href=\"{{path('users_list')}}\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-users\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Customers</span></div>
                </li>

                <li class=\"menu menubar\" id=\"deliveryoption\">
                    <a href=\"#delivery\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-truck\"><rect x=\"1\" y=\"3\" width=\"15\" height=\"13\"></rect><polygon points=\"16 8 20 8 23 11 23 16 16 16 16 8\"></polygon><circle cx=\"5.5\" cy=\"18.5\" r=\"2.5\"></circle><circle cx=\"18.5\" cy=\"18.5\" r=\"2.5\"></circle></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Delivery</span></div>
                </li>

                <li class=\"menu menubar\" id=\"analyticsoption\">
                    <a href=\"#analytics\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-pie-chart\"><path d=\"M21.21 15.89A10 10 0 1 1 8 2.83\"></path><path d=\"M22 12A10 10 0 0 0 12 2v10z\"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Analytics</span></div>
                </li>

                <li class=\"menu menubar\" id=\"marketingoption\">
                    <a href=\"#marketing\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-briefcase\"><rect x=\"2\" y=\"7\" width=\"20\" height=\"14\" rx=\"2\" ry=\"2\"></rect><path d=\"M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16\"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Marketing / Discounts</span></div>
                </li>

                <li class=\"menu menubar\" id=\"settingsoption\">
                    <a href=\"#settings\" data-active=\"false\" class=\"menu-toggle\">
                        <div class=\"base-menu\">
                            <div class=\"base-icons\">
                                <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file\"><path d=\"M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z\"></path><polyline points=\"13 2 13 9 20 9\"></polyline></svg-->

                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg>
                            </div>
                        </div>
                    </a>
                    <div class=\"tooltip\"><span>Settings</span></div>
                </li>
            </ul>
        </nav>

            <div id=\"compact_submenuSidebar\" class=\"submenu-sidebar\">
                <div class=\"submenu\" id=\"orders\">
                    <div class=\"category-info\">
                        <h5>Orders</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>

                    <ul class=\"submenu-list\" data-parent-element=\"#orders\"> 
                        <li>
                            <a href=\"{{ path('filter_order_list')}}?type=0&status=all&time=0&date=&area=0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-copy\"><rect x=\"9\" y=\"9\" width=\"13\" height=\"13\" rx=\"2\" ry=\"2\"></rect><path d=\"M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1\"></path></svg>
                            All Orders</a>
                        </li>
                        <li class=\"\">
                            <a href=\"{{ path('filter_order_list')}}?type=0&status=0&time=0&date={{ \"now\"|date('d-m-Y') }}&area=0\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-gift\"><polyline points=\"20 12 20 22 4 22 4 12\"></polyline><rect x=\"2\" y=\"7\" width=\"20\" height=\"5\"></rect><line x1=\"12\" y1=\"22\" x2=\"12\" y2=\"7\"></line><path d=\"M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z\"></path><path d=\"M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z\"></path></svg>
                            Todays Orders </a>
                        </li>
                        <li>
                            <a href=\"{{ path('filter_order_list')}}?type=0&status=received&time=0&date=&area=0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-codesandbox\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"7.5 4.21 12 6.81 16.5 4.21\"></polyline><polyline points=\"7.5 19.79 7.5 14.6 3 12\"></polyline><polyline points=\"21 12 16.5 14.6 16.5 19.79\"></polyline><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>
                                New Orders
                            </a>
                        </li>


                     

                        <li>
                            <a href=\"{{ path('create_order') }}\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0lsubmenu7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>
                            Create Order</a>
                        </li>
                        <li>
                            <a href=\"{{ path('filter_order_list')}}?type=pickup&status=received&time=0&date=&area=0\"> 
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg>
                            Pickup From Store </a>
                        </li>
                        <li>
                            <a href=\"{{ path('restaurant_return',{'id':'0'}) }}\"> 
                              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-hash\"><line x1=\"4\" y1=\"9\" x2=\"20\" y2=\"9\"></line><line x1=\"4\" y1=\"15\" x2=\"20\" y2=\"15\"></line><line x1=\"10\" y1=\"3\" x2=\"8\" y2=\"21\"></line><line x1=\"16\" y1=\"3\" x2=\"14\" y2=\"21\"></line></svg>

                           Return/Exchange</a>
                        </li>
               
                    </ul>
                </div>

                <div class=\"submenu\" id=\"products\">
                    <div class=\"category-info\">
                        <h5>Products</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>
                    <ul class=\"submenu-list\" data-parent-element=\"#products\"> 
                        <li>
                            <a href=\"{{ path('restaurant_view_menu_item')}}\">
                                <i class=\"fa fa fa-bars\"></i> Manage Products </a>
                        </li>
   {% if branch_type == 0 %}

<li><a href=\"{{ path('bulk_import')}}\"><i class=\"fa fa-cloud-download\"></i>Import/Export Products</a></li>

{% else %}
   <li><a href=\"{{ path('import_products')}}\"><i class=\"fa fa-cloud-download\"></i>Import/Export Products</a></li>

{% endif %}

                       <li class=\"sub-submenu\">
                            <a role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#Inventory\" aria-expanded=\"false\"><div>    <i class=\"fa fa-keyboard-o\"></i>Inventory</div> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg></a>
                            <ul id=\"Inventory\" class=\"collapse\" data-parent=\"#compact_submenuSidebar\" style=\"\">
                           <li><a href=\"{{ path('manage_restaurant_stock') }}\">Purchase Inwards</a></li>
                                 <li><a href=\"{{ path('manage_restaurant_stock_return') }}\">Purchase Returns</a></li>
                            </ul>
                        </li>
                      <li> <a href=\"{{ path('manage_category')}}\">
                                <i class=\"fa fa-server\"></i> Manage Categories </a>
                        </li>
                        <li><a href=\"{{ path('brand_list') }}\"><i class=\"fa fa-shopping-bag\"></i>Manage Brands</a></li>

                    </ul>
                </div>

           
                <div class=\"submenu\" id=\"delivery\">
                    <div class=\"category-info\">
                        <h5>Delivery</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>
                    <ul class=\"submenu-list\" data-parent-element=\"#delivery\"> 
                       <li>
                            <a href=\"{{ path('delivery_boy_reports') }}\">
                              <i class=\"fa fa-eraser\"></i>
                            Live Report</a>
                        </li>
                      
                            <li>
                         <a href=\"{{ path('delivery_location') }}\">
                              <i class=\"fa fa-motorcycle\"></i>
                            Delivery Locations</a>
                        </li>
                       <li>
                          <a href=\"{{ path('all_delivery_slots') }}\">
                              <i class=\"fa fa-clock-o\"></i>
                            Delivery Slots</a>
                        </li>

                    </ul>
                </div>

                <div class=\"submenu\" id=\"analytics\">
                    <div class=\"category-info\">
                        <h5>Analytics</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>
                    <ul class=\"submenu-list\" data-parent-element=\"#analytics\">
                             <li><a href=\"{{ path('manage_app_foodra_order_report') }}\"><i class=\"fa fa-bar-chart\"></i>Sales Report</a></li>
                             
                               <li><a href=\"{{ path('itemwise_report') }}\"><i class=\"fa fa-line-chart\"></i>Itemwise Sales  Report</a></li>
                               <li><a href=\"{{ path('brandwise_report') }}\"><i class=\"fa fa-line-chart\"></i>Brandwise Sales  Report</a></li>
<li><a href=\"{{ path('search_report') }}\"><i class=\"fa fa-search\"></i>Search History Report</a></li>

                              <li><a href=\"{{ path('delivery_boy_reports') }}\"> <i class=\"fa fa-motorcycle  
\"></i>Delivery  Report</a></li>
                              <li><a href=\"{{ path('profit_report') }}\"><i class=\"fa fa-history 
\"></i>Profit  Report</a></li>
<li> <a  href=\"{{ path('manage_app_foodra_all_stock_report') }}\" aria-expanded=\"false\"><span class=\"hide-menu\"><i class=\"fa fa-mail-forward\"></i>All Stocks</span></a></li>
                                <li><a href=\"{{ path('manage_app_foodra_stock_report') }}\"><i class=\"fa fa-mail-reply\"></i>Out Of Stocks</a></li>
                    </ul>
                </div>


                <div class=\"submenu\" id=\"marketing\">
                    <div class=\"category-info\">
                        <h5>Marketing / Discounts</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>
                    <ul class=\"submenu-list\" data-parent-element=\"#marketing\">
                        <li>
                            <a href=\"{{ path('advertisement_manager') }}\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-image\"><rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect><circle cx=\"8.5\" cy=\"8.5\" r=\"1.5\"></circle><polyline points=\"21 15 16 10 5 21\"></polyline></svg> 
                            Banners </a>
                        </li>
                          <li>
                            <a href=\"{{ path('manage_promocode') }}\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-hash\"><line x1=\"4\" y1=\"9\" x2=\"20\" y2=\"9\"></line><line x1=\"4\" y1=\"15\" x2=\"20\" y2=\"15\"></line><line x1=\"10\" y1=\"3\" x2=\"8\" y2=\"21\"></line><line x1=\"16\" y1=\"3\" x2=\"14\" y2=\"21\"></line></svg>
                                Discount Code 
                            </a>
                        </li>
                          <li>
                            <a href=\"{{ path('loyalty') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>Loyalty </a>
                        </li>
                          <li>
                            <a href=\"{{ path('create_membership') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-slack\"><path d=\"M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z\"></path><path d=\"M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z\"></path><path d=\"M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z\"></path><path d=\"M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z\"></path><path d=\"M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z\"></path><path d=\"M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z\"></path><path d=\"M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z\"></path><path d=\"M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z\"></path></svg> Membership </a>
                        </li>
                          <li>
                            <a href=\"{{ path('list_notification') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\"><path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"></path><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path></svg> Push Notification </a>
                        </li>
                        
                          <li>
                            <a href=\"{{ path('app_home_page')}}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-grid\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"></rect><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"></rect><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"></rect><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"></rect></svg>
                            Featured Items </a>
                        </li>
                    </ul>
                </div>

                <div class=\"submenu\" id=\"settings\">
                    <div class=\"category-info\">
                        <h5>Settings</h5>
                        <!--p>Lorem ipsum dolor sit amet sed incididunt ut labore et dolore magna aliqua.</p-->
                    </div>
                    <ul class=\"submenu-list\" data-parent-element=\"#settings\">
                                      <li> <a  href=\"{{ path('restaurant_edit',{'id':app.user.branch}) }}\" aria-expanded=\"false\"><span class=\"hide-menu\"><i class=\"fa fa-university\"></i>Store Settings</span></a></li>

                       <li>

                       <li>
                            <a href=\"{{ path('pickup_location') }}\">
                              <i class=\"fa fa-truck\"></i>
                           Pickup Location</a>
                        </li>

                  <li class=\"sub-submenu\">
                            <a role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#returns\" aria-expanded=\"false\"><div>
                                <i class=\"fa fa-user\"></i>

                            Accounts & Permissions</div> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg></a>
                            <ul id=\"returns\" class=\"collapse\" data-parent=\"#compact_submenuSidebar\" style=\"\">
                              <li><a href=\"{{ path('admin_list') }}\">All User</a></li>
                                        <li><a href=\"{{ path('admin_create') }}\">Create New User</a></li>
                               
                            </ul>
                        </li>
                        
                        {% if branch_type == 0 %}
          <li class=\"sub-submenu\">
                            <a role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#Inventory\" aria-expanded=\"false\"><div>   <i class=\"fa fa-cog\"></i>
                            General Setting</div> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg></a>
                            <ul id=\"Inventory\" class=\"collapse\" data-parent=\"#compact_submenuSidebar\" style=\"\">
                           <li><a href=\"{{ path('app_shop_details') }}\">Basic Setting</a></li>
                              <li><a href=\"{{ path('sms_manage_template') }}\">SMS API Keys</a></li>
                              <li><a href=\"{{ path('site_setting') }}\">Site Settings</a></li>
                            </ul>
                        </li>
                         <li class=\"sub-submenu\">
                            <a role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#pages\" aria-expanded=\"false\"><div>
                                <i class=\"fa fa-book\"></i>Pages</div> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg></a>
                            <ul id=\"pages\" class=\"collapse\" data-parent=\"#compact_submenuSidebar\" style=\"\">
                                <li><a href=\"{{ path('pages_about') }}\">About Us</a></li>
                               <li><a href=\"{{ path('pages_privacy') }}\">Privacy And Policy
</a></li>
                              <li><a href=\"{{ path('pages_terms') }}\">Terms and Conditions</a></li>
<li><a href=\"{{ path('pages_refund') }}\">Refund Policy</a></li>
<li> <a  href=\"{{ path('pages_return') }}\" aria-expanded=\"false\"><span class=\"hide-menu\">Return Policy</span></a></li>
                                <li><a href=\"{{ path('pages_wallet') }}\">Wallet Policy</a></li>
                               
                            </ul>
                        </li>
                     
                            <li><a href=\"{{ path('create_membership') }}\">
                              <i class=\"fa fa-truck\"></i>
                           Membership Setting</a>
                        </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>", "@AppBundle/Admin/Properties/leftSideBar.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Properties/leftSideBar.html.twig");
    }
}
