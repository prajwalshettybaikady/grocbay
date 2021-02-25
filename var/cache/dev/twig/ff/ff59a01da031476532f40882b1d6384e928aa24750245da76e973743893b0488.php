<?php

/* AppBundle:Admin:Pages/dashboard.html.twig */
class __TwigTemplate_dcc3fddc824e5611c2bd67757a9fe2db6b49637c6d4b5e2af105e02e68679e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Pages/dashboard.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AppBundle/Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7fad67f165d3be35269c659aef2e2dd81a478a612215ea8873a9d0893470657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fad67f165d3be35269c659aef2e2dd81a478a612215ea8873a9d0893470657->enter($__internal_a7fad67f165d3be35269c659aef2e2dd81a478a612215ea8873a9d0893470657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/dashboard.html.twig"));

        $__internal_0e64bc6adb844e58c6a57fff9e3c06b63a9ccd5f2ccf82a4df66e7817412cdd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e64bc6adb844e58c6a57fff9e3c06b63a9ccd5f2ccf82a4df66e7817412cdd8->enter($__internal_0e64bc6adb844e58c6a57fff9e3c06b63a9ccd5f2ccf82a4df66e7817412cdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Pages/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7fad67f165d3be35269c659aef2e2dd81a478a612215ea8873a9d0893470657->leave($__internal_a7fad67f165d3be35269c659aef2e2dd81a478a612215ea8873a9d0893470657_prof);

        
        $__internal_0e64bc6adb844e58c6a57fff9e3c06b63a9ccd5f2ccf82a4df66e7817412cdd8->leave($__internal_0e64bc6adb844e58c6a57fff9e3c06b63a9ccd5f2ccf82a4df66e7817412cdd8_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_01f19e9337718a840556156b757f79b389e433f384766f670f661025183c8361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f19e9337718a840556156b757f79b389e433f384766f670f661025183c8361->enter($__internal_01f19e9337718a840556156b757f79b389e433f384766f670f661025183c8361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_0095c38170d0fc73dc78484b16bfa192e03289e6b2e28ded73e9a223af3443f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0095c38170d0fc73dc78484b16bfa192e03289e6b2e28ded73e9a223af3443f7->enter($__internal_0095c38170d0fc73dc78484b16bfa192e03289e6b2e28ded73e9a223af3443f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "

";
        
        $__internal_0095c38170d0fc73dc78484b16bfa192e03289e6b2e28ded73e9a223af3443f7->leave($__internal_0095c38170d0fc73dc78484b16bfa192e03289e6b2e28ded73e9a223af3443f7_prof);

        
        $__internal_01f19e9337718a840556156b757f79b389e433f384766f670f661025183c8361->leave($__internal_01f19e9337718a840556156b757f79b389e433f384766f670f661025183c8361_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_cef1cf5a11c2a685d90f690fcd8f7005c7dc2ae04e968d76fcbba6b64bb167cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef1cf5a11c2a685d90f690fcd8f7005c7dc2ae04e968d76fcbba6b64bb167cc->enter($__internal_cef1cf5a11c2a685d90f690fcd8f7005c7dc2ae04e968d76fcbba6b64bb167cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6e5681eff414917d6e1a6769884f8659a5150e81d33b2d004e440a8b20b53bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e5681eff414917d6e1a6769884f8659a5150e81d33b2d004e440a8b20b53bb->enter($__internal_d6e5681eff414917d6e1a6769884f8659a5150e81d33b2d004e440a8b20b53bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "userType", array()) == "root")) {
            // line 8
            echo "        <div class=\"layout-px-spacing\">
                <div class=\"row layout-top-spacing\">
                     <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_list");
            echo "\">
                        <div class=\"color-box\">
                            <span class=\"cl-example peach\">
<i class=\"fa fa-users dash-icon\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">";
            // line 18
            echo twig_escape_filter($this->env, ($context["customer"] ?? $this->getContext($context, "customer")), "html", null, true);
            echo "</h5>
                                <span>Customer</span>
                            </div>
                        </div>
  </a>
                    </div>

                    <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"#\">
                        <div class=\"color-box\"> 
                            <span class=\"cl-example\">
<i class=\"fa fa-users dash-icon\" style=\"color:#fff\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">";
            // line 33
            echo twig_escape_filter($this->env, ($context["totalorders"] ?? $this->getContext($context, "totalorders")), "html", null, true);
            echo "</h5>
                                <span>Orders</span>
                            </div>
                        </div>
  </a>
                    </div>

   <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_list");
            echo "\">
                        <div class=\"color-box\">
                            <span class=\"cl-example red\">
<i class=\"fa fa-users dash-icon\" style=\"color:#fff\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">";
            // line 48
            echo twig_escape_filter($this->env, ($context["store"] ?? $this->getContext($context, "store")), "html", null, true);
            echo "</h5>
                                <span>Stores</span>
                            </div>
                        </div>
  </a>
                    </div>

                   


      </div>
    </div>
        ";
        } else {
            // line 61
            echo "            <div class=\"layout-px-spacing\">
                <div class=\"row layout-top-spacing\">
                    <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                        <a href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
            echo "?type=0&status=received&time=0&date=&area=0\">
                          <div class=\"color-box\">
                            <span class=\"cl-example pink\">
                                <i class=\"fa fa-shopping-cart dash-icon\"></i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title neworder\">";
            // line 70
            echo twig_escape_filter($this->env, ($context["orders"] ?? $this->getContext($context, "orders")), "html", null, true);
            echo "</h5>
                                <span>Pending Order</span>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
<a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_tickets", array("status" => "Open"));
            echo "\">

                        <div class=\"color-box\">
                            <span class=\"cl-example vilot\">
<i class=\"fa fa-ticket dash-icon\"></i>

                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">";
            // line 86
            echo twig_escape_filter($this->env, ($context["tickets"] ?? $this->getContext($context, "tickets")), "html", null, true);
            echo "</h5>
                                <span>Tickets Waiting</span>
                            </div>
                        </div>
                      </a>
                    </div>
                     <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
                      <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_return", array("id" => "0"));
            echo "\">

                        <div class=\"color-box\">
                            <span class=\"cl-example vilot-1\">
<i class=\"fa fa-thumbs-o-up dash-icon\"> </i>
                           </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">";
            // line 101
            echo twig_escape_filter($this->env, ($context["returns"] ?? $this->getContext($context, "returns")), "html", null, true);
            echo "</h5>
                                <span>Return Ready</span>
                            </div>
                        </div>
                      </a>
                    </div>
                      <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"";
            // line 109
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
            echo "?type=0&status=out-for-delivery&time=0&date=&area=0\">
                       <div class=\"color-box\">
                            <span class=\"cl-example red\">
<i class=\"fa fa-calendar-times-o dash-icon\" style=\"color:#fff;\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title onway\">";
            // line 115
            echo twig_escape_filter($this->env, ($context["dispatched"] ?? $this->getContext($context, "dispatched")), "html", null, true);
            echo "</h5>
                                <span>Out For Delivery</span>
                            </div>
                        </div>
</a>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"";
            // line 123
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_app_foodra_stock_report");
            echo "\">
                        <div class=\"color-box\">
                            <span class=\"cl-example green\">
<i class=\"fa fa-level-down dash-icon\" style=\"color:#fff;\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">";
            // line 129
            echo twig_escape_filter($this->env, ($context["stock"] ?? $this->getContext($context, "stock")), "html", null, true);
            echo "</h5>
                                <span>Stock Low</span>
                            </div>
                        </div>
</a>
                    </div>
                     <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_list");
            echo "\">
                        <div class=\"color-box\">
                            <span class=\"cl-example peach\">
<i class=\"fa fa-users dash-icon\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">";
            // line 143
            echo twig_escape_filter($this->env, ($context["customer"] ?? $this->getContext($context, "customer")), "html", null, true);
            echo "</h5>
                                <span>Customer</span>
                            </div>
                        </div>
  </a>
                    </div>

                    <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-wrapper  widget-table-two\">

                            <div class=\"widget-heading\">
                                <h5 class=\"\">Recent Orders</h5>
                            </div>

                            <div class=\"widget-content\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th><div class=\"th-content\">ID</div></th>
                                                <th><div class=\"th-content\">Customer</div></th>
                                                <th><div class=\"th-content th-heading\">Price</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestOrders"] ?? $this->getContext($context, "latestOrders")));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 169
                echo "                                           
                                              <tr>
                                                <td> <a href=\"";
                // line 171
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\"><div class=\"td-content\">#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                echo "</div></a></td>
                                               <td> <a href=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\"><div class=\"td-content customer-name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "customerName", array()), "html", null, true);
                echo "</div></a></td>
                                                <td><div class=\"td-content pricing\"><span class=\"\">";
                // line 173
                echo twig_escape_filter($this->env, ($context["currency"] ?? $this->getContext($context, "currency")), "html", null, true);
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "orderAmount", array()), 2, "floor"), "html", null, true);
                echo "</span></div></td>
                                            </tr>
                                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-wrapper widget-activity-three\">

                            <div class=\"widget-heading\">
                                <h5 class=\"\">New Users</h5>
                            </div>

                            <div class=\"widget-content\">

                                <div class=\"mt-container mx-auto\">
                                    <div class=\"timeline-line\">
";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestCustomers"] ?? $this->getContext($context, "latestCustomers")));
            foreach ($context['_seq'] as $context["_key"] => $context["cus"]) {
                // line 194
                echo "                                        <div class=\"item-timeline timeline-new\">
                                            <!--div class=\"t-dot\">
                                                <div class=\"t-primary\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-check\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></div>
                                            <</div-->
                                            <a href=\"";
                // line 198
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_view", array("id" => $this->getAttribute($context["cus"], "id", array()))), "html", null, true);
                echo "\">

                                            <div class=\"t-content\">

                                                <div class=\"t-uppercontent\">
                                                    <h5>";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($context["cus"], "username", array()), "html", null, true);
                echo "</h5>
                                                    <span class=\"\">";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["cus"], "created_date", array()), "html", null, true);
                echo "</span>
                                                </div>
                                                <p>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["cus"], "area", array()), "html", null, true);
                echo "</p>
                                               
                                            </div>
                                          </a>
                                        </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "                                    

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-wrapper widget-table-one\">
                            <div class=\"widget-heading\">
                                <h5 class=\"\">Other Stack</h5>
                            </div>

                            <div class=\"widget-content\">
                                <div class=\"transactions-list\">
                                  <a href=\"";
            // line 227
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_view_menu_item");
            echo "\">
                                    <div class=\"t-item\">
                                        <div class=\"t-company-name\">
                                            <div class=\"t-icon\">
                                                <div class=\"icon\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class=\"t-name\">
                                                <h4>No. of Items</h4>
                                                <!--p class=\"meta-date\">4 Aug 1:00PM</p-->
                                            </div>

                                        </div>
                                        <div class=\"t-rate rate-dec\">
                                            <p><span>";
            // line 242
            echo twig_escape_filter($this->env, ($context["item"] ?? $this->getContext($context, "item")), "html", null, true);
            echo "</span> <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-down\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><polyline points=\"19 12 12 19 5 12\"></polyline></svg--></p>
                                        </div>
                                    </div>
                                  </a>
                                </div>

                                <div class=\"transactions-list\">
                                  <a href=\"";
            // line 249
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_list");
            echo "\">
                                    <div class=\"t-item\">
                                        <div class=\"t-company-name\">
                                            <div class=\"t-icon\">
                                                <div class=\"avatar avatar-xl\">
                                                    <span class=\"avatar-title rounded-circle\">C</span>
                                                </div>
                                            </div>
                                            <div class=\"t-name\">
                                                <h4>No. of Users</h4>
                                                <!--p class=\"meta-date\">4 Aug 1:00PM</p-->
                                            </div>
                                        </div>
                                        <div class=\"t-rate rate-inc\">
                                            <p><span>";
            // line 263
            echo twig_escape_filter($this->env, ($context["customer"] ?? $this->getContext($context, "customer")), "html", null, true);
            echo "</span> <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-up\"><line x1=\"12\" y1=\"19\" x2=\"12\" y2=\"5\"></line><polyline points=\"5 12 12 5 19 12\"></polyline></svg--></p>
                                        </div>
                                    </div>
                                  </a>
                                </div>

                                <div class=\"transactions-list\">
                                  <a href=\"";
            // line 270
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
            echo "?type=0&status=all&time=0&date=&area=0\">
                                    <div class=\"t-item\">
                                        <div class=\"t-company-name\">
                                            <div class=\"t-icon\">
                                                <div class=\"avatar avatar-xl\">
                                                    <span class=\"avatar-title rounded-circle\">O</span>
                                                </div>
                                            </div>
                                            <div class=\"t-name\">
                                                <h4>No. of Orders</h4>
                                                <!--p class=\"meta-date\">4 Aug 1:00PM</p-->
                                            </div>

                                        </div>
                                        <div class=\"t-rate rate-inc\">
                                            <p><span>";
            // line 285
            echo twig_escape_filter($this->env, ($context["all_orders"] ?? $this->getContext($context, "all_orders")), "html", null, true);
            echo "</span> <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-up\"><line x1=\"12\" y1=\"19\" x2=\"12\" y2=\"5\"></line><polyline points=\"5 12 12 5 19 12\"></polyline></svg--></p>
                                        </div>
                                    </div>
                                  </a>
                                </div>
                                    <div class=\"transactions-list\">
                                  <a href=\"";
            // line 291
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_main_list");
            echo "\">
                                    <div class=\"t-item\">
                                        <div class=\"t-company-name\">
                                            <div class=\"t-icon\">
                                                <div class=\"avatar avatar-xl\">
                                                    <span class=\"avatar-title rounded-circle\">C</span>
                                                </div>
                                            </div>
                                            <div class=\"t-name\">
                                                <h4>No. of Categories</h4>
                                                <!--p class=\"meta-date\">4 Aug 1:00PM</p-->
                                            </div>

                                        </div>
                                        <div class=\"t-rate rate-inc\">
                                            <p><span>";
            // line 306
            echo twig_escape_filter($this->env, ($context["categories"] ?? $this->getContext($context, "categories")), "html", null, true);
            echo "</span> <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-up\"><line x1=\"12\" y1=\"19\" x2=\"12\" y2=\"5\"></line><polyline points=\"5 12 12 5 19 12\"></polyline></svg--></p>
                                        </div>
                                    </div>
                                  </a>
                                </div>
                                   <div class=\"transactions-list\">
                                  <a href=\"";
            // line 312
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("brand_list");
            echo "\">
                                    <div class=\"t-item\">
                                        <div class=\"t-company-name\">
                                            <div class=\"t-icon\">
                                                <div class=\"avatar avatar-xl\">
                                                    <span class=\"avatar-title rounded-circle\">C</span>
                                                </div>
                                            </div>
                                            <div class=\"t-name\">
                                                <h4>No. of Brands</h4>
                                                <!--p class=\"meta-date\">4 Aug 1:00PM</p-->
                                            </div>

                                        </div>
                                        <div class=\"t-rate rate-inc\">
                                            <p><span>";
            // line 327
            echo twig_escape_filter($this->env, ($context["brands"] ?? $this->getContext($context, "brands")), "html", null, true);
            echo "</span> <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-up\"><line x1=\"12\" y1=\"19\" x2=\"12\" y2=\"5\"></line><polyline points=\"5 12 12 5 19 12\"></polyline></svg--></p>
                                        </div>
                                    </div>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing\">

                        <div class=\"widget widget-wrapper widget-account-invoice-one\">

                            <div class=\"widget-heading\">
                                <h5 class=\"\">Revenue Summary</h5>
                            </div>

                            <div class=\"widget-content\">
                                <div class=\"invoice-box\">
                                    <div class=\"inv-detail\">
                                        <div class=\"info-detail-1\">
                                            <p>Today Revenue</p>
                                            <p>";
            // line 348
            echo twig_escape_filter($this->env, ($context["currency"] ?? $this->getContext($context, "currency")), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_round(($context["thisDaySale"] ?? $this->getContext($context, "thisDaySale")), 2, "floor"), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"info-detail-1\">
                                            <p>Yesterday Revenue</p>
                                            <p>";
            // line 352
            echo twig_escape_filter($this->env, ($context["currency"] ?? $this->getContext($context, "currency")), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_round(($context["previousDaySale"] ?? $this->getContext($context, "previousDaySale")), 2, "floor"), "html", null, true);
            echo "</p>
                                        </div>
                                        
                                        <div class=\"info-detail-2\">
                                            <p>Week</p>
                                            <p>";
            // line 357
            echo twig_escape_filter($this->env, ($context["currency"] ?? $this->getContext($context, "currency")), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_round(($context["weekDaySale"] ?? $this->getContext($context, "weekDaySale")), 2, "floor"), "html", null, true);
            echo "</p>
                                        </div>
                                         <div class=\"info-detail-2\">
                                            <p>Month</p>
                                            <p>";
            // line 361
            echo twig_escape_filter($this->env, ($context["currency"] ?? $this->getContext($context, "currency")), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_round(($context["monthDaySale"] ?? $this->getContext($context, "monthDaySale")), 2, "floor"), "html", null, true);
            echo "</p>
                                        </div>

                                         <div class=\"info-detail-2\">
                                            <p>All Time</p>
                                            <p>";
            // line 366
            echo twig_escape_filter($this->env, ($context["currency"] ?? $this->getContext($context, "currency")), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_round(($context["sales"] ?? $this->getContext($context, "sales")), 2, "floor"), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                     
<div class=\"col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget-four\">
                            <div class=\"widget-heading\">
                                <h5 class=\"\">Devices</h5>
                            </div>
                            <div class=\"widget-content\">
                                <div class=\"vistorsBrowser\">
                                    <div class=\"browser-list\">
                                        <div class=\"w-icon\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chrome\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><circle cx=\"12\" cy=\"12\" r=\"4\"></circle><line x1=\"21.17\" y1=\"8\" x2=\"12\" y2=\"8\"></line><line x1=\"3.95\" y1=\"6.06\" x2=\"8.54\" y2=\"14\"></line><line x1=\"10.88\" y1=\"21.94\" x2=\"15.46\" y2=\"14\"></line></svg>
                                        </div>
                                        <div class=\"w-browser-details\">
                                            <div class=\"w-browser-info\">
                                                <h6>Android</h6>
                                                <p class=\"browser-count\">";
            // line 389
            echo twig_escape_filter($this->env, ($context["androidchannel"] ?? $this->getContext($context, "androidchannel")), "html", null, true);
            echo "</p>
                                            </div>
                                            <div class=\"w-browser-stats\">
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar bg-gradient-primary\" role=\"progressbar\" style=\"width: ";
            // line 393
            echo twig_escape_filter($this->env, ($context["androidchannel_per"] ?? $this->getContext($context, "androidchannel_per")), "html", null, true);
            echo "%\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"browser-list\">
                                        <div class=\"w-icon\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-compass\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><polygon points=\"16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76\"></polygon></svg>
                                        </div>
                                        <div class=\"w-browser-details\">
                                            <div class=\"w-browser-info\">
                                                <h6>IOS</h6>
                                                <p class=\"browser-count\">";
            // line 405
            echo twig_escape_filter($this->env, ($context["ioschannel"] ?? $this->getContext($context, "ioschannel")), "html", null, true);
            echo "</p>
                                            </div>
                                            <div class=\"w-browser-stats\">
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar bg-gradient-danger\" role=\"progressbar\" style=\"width: ";
            // line 409
            echo twig_escape_filter($this->env, ($context["ioschannel_per"] ?? $this->getContext($context, "ioschannel_per")), "html", null, true);
            echo "%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"browser-list\">
                                        <div class=\"w-icon\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-globe\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line><path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path></svg>
                                        </div>
                                        <div class=\"w-browser-details\">
                                            <div class=\"w-browser-info\">
                                                <h6>Web</h6>
                                                <p class=\"browser-count\">";
            // line 421
            echo twig_escape_filter($this->env, ($context["webchannel"] ?? $this->getContext($context, "webchannel")), "html", null, true);
            echo "</p>
                                            </div>
                                            <div class=\"w-browser-stats\">
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar bg-gradient-warning\" role=\"progressbar\" style=\"width: ";
            // line 425
            echo twig_escape_filter($this->env, ($context["webchannel_per"] ?? $this->getContext($context, "webchannel_per")), "html", null, true);
            echo "}%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-wrapper widget-table-three\">

                            <div class=\"widget-heading\">
                                <h5 class=\"\">Top Selling Product</h5>
                            </div>

                            <div class=\"widget-content\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th><div class=\"th-content\">Product</div></th>
                                                <th><div class=\"th-content th-heading\">Quatity</div></th>
                                                <th><div class=\"th-content th-heading\">Total</div></th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                          ";
            // line 452
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["itemSale"] ?? $this->getContext($context, "itemSale")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 453
                echo "                                            <tr>
                                                <td><div class=\"td-content product-name\">";
                // line 454
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                echo "</div></td>
                                                <td><div class=\"td-content\"><span class=\"pricing\">";
                // line 455
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "</span></div></td>
                                                <td><div class=\"td-content\">";
                // line 456
                echo twig_escape_filter($this->env, ($context["currency"] ?? $this->getContext($context, "currency")), "html", null, true);
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["item"], "price", array()), 2, "floor"), "html", null, true);
                echo "</div></td>
                                            </tr>
                                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 459
            echo "                                        </tbody>
                                     
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
";
        }
        
        $__internal_d6e5681eff414917d6e1a6769884f8659a5150e81d33b2d004e440a8b20b53bb->leave($__internal_d6e5681eff414917d6e1a6769884f8659a5150e81d33b2d004e440a8b20b53bb_prof);

        
        $__internal_cef1cf5a11c2a685d90f690fcd8f7005c7dc2ae04e968d76fcbba6b64bb167cc->leave($__internal_cef1cf5a11c2a685d90f690fcd8f7005c7dc2ae04e968d76fcbba6b64bb167cc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Pages/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  719 => 459,  709 => 456,  705 => 455,  699 => 454,  696 => 453,  692 => 452,  662 => 425,  655 => 421,  640 => 409,  633 => 405,  618 => 393,  611 => 389,  583 => 366,  573 => 361,  564 => 357,  554 => 352,  545 => 348,  521 => 327,  503 => 312,  494 => 306,  476 => 291,  467 => 285,  449 => 270,  439 => 263,  422 => 249,  412 => 242,  394 => 227,  377 => 212,  365 => 206,  360 => 204,  356 => 203,  348 => 198,  342 => 194,  338 => 193,  319 => 176,  309 => 173,  303 => 172,  297 => 171,  293 => 169,  289 => 168,  261 => 143,  252 => 137,  241 => 129,  232 => 123,  221 => 115,  212 => 109,  201 => 101,  191 => 94,  180 => 86,  169 => 78,  158 => 70,  149 => 64,  144 => 61,  128 => 48,  119 => 42,  107 => 33,  89 => 18,  80 => 12,  74 => 8,  71 => 7,  62 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
{% block styles %}


{% endblock %}
{% block body %}
        {% if app.user.userType == 'root' %}
        <div class=\"layout-px-spacing\">
                <div class=\"row layout-top-spacing\">
                     <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"{{ path('users_list') }}\">
                        <div class=\"color-box\">
                            <span class=\"cl-example peach\">
<i class=\"fa fa-users dash-icon\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">{{ customer }}</h5>
                                <span>Customer</span>
                            </div>
                        </div>
  </a>
                    </div>

                    <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"#\">
                        <div class=\"color-box\"> 
                            <span class=\"cl-example\">
<i class=\"fa fa-users dash-icon\" style=\"color:#fff\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">{{ totalorders }}</h5>
                                <span>Orders</span>
                            </div>
                        </div>
  </a>
                    </div>

   <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"{{ path('restaurant_list') }}\">
                        <div class=\"color-box\">
                            <span class=\"cl-example red\">
<i class=\"fa fa-users dash-icon\" style=\"color:#fff\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">{{ store }}</h5>
                                <span>Stores</span>
                            </div>
                        </div>
  </a>
                    </div>

                   


      </div>
    </div>
        {% else %}
            <div class=\"layout-px-spacing\">
                <div class=\"row layout-top-spacing\">
                    <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                        <a href=\"{{ path('filter_order_list') }}?type=0&status=received&time=0&date=&area=0\">
                          <div class=\"color-box\">
                            <span class=\"cl-example pink\">
                                <i class=\"fa fa-shopping-cart dash-icon\"></i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title neworder\">{{ orders }}</h5>
                                <span>Pending Order</span>
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
<a href=\"{{ path('all_tickets',{'status':'Open'})}}\">

                        <div class=\"color-box\">
                            <span class=\"cl-example vilot\">
<i class=\"fa fa-ticket dash-icon\"></i>

                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">{{tickets}}</h5>
                                <span>Tickets Waiting</span>
                            </div>
                        </div>
                      </a>
                    </div>
                     <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
                      <a href=\"{{ path('restaurant_return',{'id':'0'}) }}\">

                        <div class=\"color-box\">
                            <span class=\"cl-example vilot-1\">
<i class=\"fa fa-thumbs-o-up dash-icon\"> </i>
                           </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">{{ returns }}</h5>
                                <span>Return Ready</span>
                            </div>
                        </div>
                      </a>
                    </div>
                      <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"{{ path('filter_order_list') }}?type=0&status=out-for-delivery&time=0&date=&area=0\">
                       <div class=\"color-box\">
                            <span class=\"cl-example red\">
<i class=\"fa fa-calendar-times-o dash-icon\" style=\"color:#fff;\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title onway\">{{ dispatched }}</h5>
                                <span>Out For Delivery</span>
                            </div>
                        </div>
</a>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"{{ path('manage_app_foodra_stock_report') }}\">
                        <div class=\"color-box\">
                            <span class=\"cl-example green\">
<i class=\"fa fa-level-down dash-icon\" style=\"color:#fff;\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">{{ stock }}</h5>
                                <span>Stock Low</span>
                            </div>
                        </div>
</a>
                    </div>
                     <div class=\"col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 layout-spacing\">
                 
 <a href=\"{{ path('users_list') }}\">
                        <div class=\"color-box\">
                            <span class=\"cl-example peach\">
<i class=\"fa fa-users dash-icon\"> </i>
                            </span>
                            <div class=\"cl-info\">
                                <h5 class=\"cl-title\">{{ customer }}</h5>
                                <span>Customer</span>
                            </div>
                        </div>
  </a>
                    </div>

                    <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-wrapper  widget-table-two\">

                            <div class=\"widget-heading\">
                                <h5 class=\"\">Recent Orders</h5>
                            </div>

                            <div class=\"widget-content\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th><div class=\"th-content\">ID</div></th>
                                                <th><div class=\"th-content\">Customer</div></th>
                                                <th><div class=\"th-content th-heading\">Price</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          {% for order in latestOrders %}
                                           
                                              <tr>
                                                <td> <a href=\"{{ path('restaurant_orders_panel_update',{'id':order.id}) }}\"><div class=\"td-content\">#{{ order.id }}</div></a></td>
                                               <td> <a href=\"{{ path('restaurant_orders_panel_update',{'id':order.id}) }}\"><div class=\"td-content customer-name\">{{ order.customerName }}</div></a></td>
                                                <td><div class=\"td-content pricing\"><span class=\"\">{{ currency }}{{ order.orderAmount|round(2,'floor') }}</span></div></td>
                                            </tr>
                                           {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-wrapper widget-activity-three\">

                            <div class=\"widget-heading\">
                                <h5 class=\"\">New Users</h5>
                            </div>

                            <div class=\"widget-content\">

                                <div class=\"mt-container mx-auto\">
                                    <div class=\"timeline-line\">
{% for cus in latestCustomers %}
                                        <div class=\"item-timeline timeline-new\">
                                            <!--div class=\"t-dot\">
                                                <div class=\"t-primary\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-check\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></div>
                                            <</div-->
                                            <a href=\"{{ path('customer_view',{'id':cus.id}) }}\">

                                            <div class=\"t-content\">

                                                <div class=\"t-uppercontent\">
                                                    <h5>{{ cus.username }}</h5>
                                                    <span class=\"\">{{ cus.created_date }}</span>
                                                </div>
                                                <p>{{ cus.area }}</p>
                                               
                                            </div>
                                          </a>
                                        </div>
{% endfor %}
                                    

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-wrapper widget-table-one\">
                            <div class=\"widget-heading\">
                                <h5 class=\"\">Other Stack</h5>
                            </div>

                            <div class=\"widget-content\">
                                <div class=\"transactions-list\">
                                  <a href=\"{{ path('restaurant_view_menu_item')}}\">
                                    <div class=\"t-item\">
                                        <div class=\"t-company-name\">
                                            <div class=\"t-icon\">
                                                <div class=\"icon\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class=\"t-name\">
                                                <h4>No. of Items</h4>
                                                <!--p class=\"meta-date\">4 Aug 1:00PM</p-->
                                            </div>

                                        </div>
                                        <div class=\"t-rate rate-dec\">
                                            <p><span>{{ item }}</span> <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-down\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><polyline points=\"19 12 12 19 5 12\"></polyline></svg--></p>
                                        </div>
                                    </div>
                                  </a>
                                </div>

                                <div class=\"transactions-list\">
                                  <a href=\"{{ path('users_list') }}\">
                                    <div class=\"t-item\">
                                        <div class=\"t-company-name\">
                                            <div class=\"t-icon\">
                                                <div class=\"avatar avatar-xl\">
                                                    <span class=\"avatar-title rounded-circle\">C</span>
                                                </div>
                                            </div>
                                            <div class=\"t-name\">
                                                <h4>No. of Users</h4>
                                                <!--p class=\"meta-date\">4 Aug 1:00PM</p-->
                                            </div>
                                        </div>
                                        <div class=\"t-rate rate-inc\">
                                            <p><span>{{ customer }}</span> <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-up\"><line x1=\"12\" y1=\"19\" x2=\"12\" y2=\"5\"></line><polyline points=\"5 12 12 5 19 12\"></polyline></svg--></p>
                                        </div>
                                    </div>
                                  </a>
                                </div>

                                <div class=\"transactions-list\">
                                  <a href=\"{{ path('filter_order_list')}}?type=0&status=all&time=0&date=&area=0\">
                                    <div class=\"t-item\">
                                        <div class=\"t-company-name\">
                                            <div class=\"t-icon\">
                                                <div class=\"avatar avatar-xl\">
                                                    <span class=\"avatar-title rounded-circle\">O</span>
                                                </div>
                                            </div>
                                            <div class=\"t-name\">
                                                <h4>No. of Orders</h4>
                                                <!--p class=\"meta-date\">4 Aug 1:00PM</p-->
                                            </div>

                                        </div>
                                        <div class=\"t-rate rate-inc\">
                                            <p><span>{{ all_orders }}</span> <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-up\"><line x1=\"12\" y1=\"19\" x2=\"12\" y2=\"5\"></line><polyline points=\"5 12 12 5 19 12\"></polyline></svg--></p>
                                        </div>
                                    </div>
                                  </a>
                                </div>
                                    <div class=\"transactions-list\">
                                  <a href=\"{{ path('category_main_list')}}\">
                                    <div class=\"t-item\">
                                        <div class=\"t-company-name\">
                                            <div class=\"t-icon\">
                                                <div class=\"avatar avatar-xl\">
                                                    <span class=\"avatar-title rounded-circle\">C</span>
                                                </div>
                                            </div>
                                            <div class=\"t-name\">
                                                <h4>No. of Categories</h4>
                                                <!--p class=\"meta-date\">4 Aug 1:00PM</p-->
                                            </div>

                                        </div>
                                        <div class=\"t-rate rate-inc\">
                                            <p><span>{{ categories }}</span> <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-up\"><line x1=\"12\" y1=\"19\" x2=\"12\" y2=\"5\"></line><polyline points=\"5 12 12 5 19 12\"></polyline></svg--></p>
                                        </div>
                                    </div>
                                  </a>
                                </div>
                                   <div class=\"transactions-list\">
                                  <a href=\"{{ path('brand_list')}}\">
                                    <div class=\"t-item\">
                                        <div class=\"t-company-name\">
                                            <div class=\"t-icon\">
                                                <div class=\"avatar avatar-xl\">
                                                    <span class=\"avatar-title rounded-circle\">C</span>
                                                </div>
                                            </div>
                                            <div class=\"t-name\">
                                                <h4>No. of Brands</h4>
                                                <!--p class=\"meta-date\">4 Aug 1:00PM</p-->
                                            </div>

                                        </div>
                                        <div class=\"t-rate rate-inc\">
                                            <p><span>{{ brands }}</span> <!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-up\"><line x1=\"12\" y1=\"19\" x2=\"12\" y2=\"5\"></line><polyline points=\"5 12 12 5 19 12\"></polyline></svg--></p>
                                        </div>
                                    </div>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing\">

                        <div class=\"widget widget-wrapper widget-account-invoice-one\">

                            <div class=\"widget-heading\">
                                <h5 class=\"\">Revenue Summary</h5>
                            </div>

                            <div class=\"widget-content\">
                                <div class=\"invoice-box\">
                                    <div class=\"inv-detail\">
                                        <div class=\"info-detail-1\">
                                            <p>Today Revenue</p>
                                            <p>{{ currency }}. {{ thisDaySale|round(2,'floor') }}</p>
                                        </div>
                                        <div class=\"info-detail-1\">
                                            <p>Yesterday Revenue</p>
                                            <p>{{ currency }}. {{ previousDaySale|round(2,'floor') }}</p>
                                        </div>
                                        
                                        <div class=\"info-detail-2\">
                                            <p>Week</p>
                                            <p>{{ currency }}. {{ weekDaySale|round(2,'floor') }}</p>
                                        </div>
                                         <div class=\"info-detail-2\">
                                            <p>Month</p>
                                            <p>{{ currency }}. {{ monthDaySale|round(2,'floor') }}</p>
                                        </div>

                                         <div class=\"info-detail-2\">
                                            <p>All Time</p>
                                            <p>{{ currency }}. {{ sales|round(2,'floor') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                     
<div class=\"col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget-four\">
                            <div class=\"widget-heading\">
                                <h5 class=\"\">Devices</h5>
                            </div>
                            <div class=\"widget-content\">
                                <div class=\"vistorsBrowser\">
                                    <div class=\"browser-list\">
                                        <div class=\"w-icon\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chrome\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><circle cx=\"12\" cy=\"12\" r=\"4\"></circle><line x1=\"21.17\" y1=\"8\" x2=\"12\" y2=\"8\"></line><line x1=\"3.95\" y1=\"6.06\" x2=\"8.54\" y2=\"14\"></line><line x1=\"10.88\" y1=\"21.94\" x2=\"15.46\" y2=\"14\"></line></svg>
                                        </div>
                                        <div class=\"w-browser-details\">
                                            <div class=\"w-browser-info\">
                                                <h6>Android</h6>
                                                <p class=\"browser-count\">{{androidchannel}}</p>
                                            </div>
                                            <div class=\"w-browser-stats\">
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar bg-gradient-primary\" role=\"progressbar\" style=\"width: {{androidchannel_per}}%\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"browser-list\">
                                        <div class=\"w-icon\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-compass\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><polygon points=\"16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76\"></polygon></svg>
                                        </div>
                                        <div class=\"w-browser-details\">
                                            <div class=\"w-browser-info\">
                                                <h6>IOS</h6>
                                                <p class=\"browser-count\">{{ioschannel}}</p>
                                            </div>
                                            <div class=\"w-browser-stats\">
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar bg-gradient-danger\" role=\"progressbar\" style=\"width: {{ioschannel_per}}%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"browser-list\">
                                        <div class=\"w-icon\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-globe\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line><path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path></svg>
                                        </div>
                                        <div class=\"w-browser-details\">
                                            <div class=\"w-browser-info\">
                                                <h6>Web</h6>
                                                <p class=\"browser-count\">{{webchannel}}</p>
                                            </div>
                                            <div class=\"w-browser-stats\">
                                                <div class=\"progress\">
                                                    <div class=\"progress-bar bg-gradient-warning\" role=\"progressbar\" style=\"width: {{webchannel_per}}}%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"widget widget-wrapper widget-table-three\">

                            <div class=\"widget-heading\">
                                <h5 class=\"\">Top Selling Product</h5>
                            </div>

                            <div class=\"widget-content\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th><div class=\"th-content\">Product</div></th>
                                                <th><div class=\"th-content th-heading\">Quatity</div></th>
                                                <th><div class=\"th-content th-heading\">Total</div></th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                          {% for item in itemSale %}
                                            <tr>
                                                <td><div class=\"td-content product-name\">{{ item.itemName }} - {{ item.priceVariavtion }}</div></td>
                                                <td><div class=\"td-content\"><span class=\"pricing\">{{ item.quantity }}</span></div></td>
                                                <td><div class=\"td-content\">{{ currency }}{{ item.price|round(2,'floor') }}</div></td>
                                            </tr>
                                     {% endfor %}
                                        </tbody>
                                     
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
{% endif %}
{% endblock %}
", "AppBundle:Admin:Pages/dashboard.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Pages/dashboard.html.twig");
    }
}
