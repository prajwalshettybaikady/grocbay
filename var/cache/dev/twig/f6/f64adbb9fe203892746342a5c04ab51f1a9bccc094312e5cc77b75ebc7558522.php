<?php

/* AppBundle:Admin:Orders/orderList.html.twig */
class __TwigTemplate_ebe234791e8e7f58b6c2e250e652307dccacdd36318200c044086167dcdbd061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Orders/orderList.html.twig", 1);
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
        $__internal_4428e631e8032e656a3681d2bee313af84375cfb6e30177611766f93a7b66aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4428e631e8032e656a3681d2bee313af84375cfb6e30177611766f93a7b66aa9->enter($__internal_4428e631e8032e656a3681d2bee313af84375cfb6e30177611766f93a7b66aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/orderList.html.twig"));

        $__internal_cf6ce0fd0f98a7e0f78cd27d19d5f9c521295a144034795cd2610de331f6f8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6ce0fd0f98a7e0f78cd27d19d5f9c521295a144034795cd2610de331f6f8a5->enter($__internal_cf6ce0fd0f98a7e0f78cd27d19d5f9c521295a144034795cd2610de331f6f8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/orderList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4428e631e8032e656a3681d2bee313af84375cfb6e30177611766f93a7b66aa9->leave($__internal_4428e631e8032e656a3681d2bee313af84375cfb6e30177611766f93a7b66aa9_prof);

        
        $__internal_cf6ce0fd0f98a7e0f78cd27d19d5f9c521295a144034795cd2610de331f6f8a5->leave($__internal_cf6ce0fd0f98a7e0f78cd27d19d5f9c521295a144034795cd2610de331f6f8a5_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_c3b900e653b6431d088b73bd588d56563ed32ce1f0901d3194dd3494517dce63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b900e653b6431d088b73bd588d56563ed32ce1f0901d3194dd3494517dce63->enter($__internal_c3b900e653b6431d088b73bd588d56563ed32ce1f0901d3194dd3494517dce63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_57453357adf82ee593885e7834652dc289a902d6af2f54c5a4e587792b5e30fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57453357adf82ee593885e7834652dc289a902d6af2f54c5a4e587792b5e30fe->enter($__internal_57453357adf82ee593885e7834652dc289a902d6af2f54c5a4e587792b5e30fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"/admin/assets/plugins/iCheck/all.css\">
<style>
    [type=checkbox]:checked, [type=checkbox]:not(:checked) {
         position: relative; 
         left: 0px; 
         opacity: 1; 
    }
   
   
        .btns
    {
color: #0071a1;
      border-color: #0071a1;
      background: #f3f5f6;
      vertical-align: top;
      height: 32px !important;
      line-height: 10px;
    }
.left {
    margin-left: 2px;
}
.all-orders a {
    color: #0073aa;
    font-weight: 400;
    font-size: 16px;
        font-family: initial;
    margin-left: 2px;
    transition-property: border,background,color;
    transition-duration: .05s;
    transition-timing-function: ease-in-out;
    }
    .view
    {
 color: #0073aa;
    font-weight: 400;
    font-size: 12px;
    font-family: initial;
    margin-left: 2px;
    transition-property: border,background,color;
    transition-duration: .05s;
    width: 150px;
    height: 29px !important;
    transition-timing-function: ease-in-out;
    }
    @media print{
   .noprint{
       display:none;
   }
}
</style>

      
      <!-- Javascript -->
      <script>
         \$(function() {
          
            \$( \"#datepicker\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });
   \$( \"#datepickers\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });

         });
      </script>
";
        
        $__internal_57453357adf82ee593885e7834652dc289a902d6af2f54c5a4e587792b5e30fe->leave($__internal_57453357adf82ee593885e7834652dc289a902d6af2f54c5a4e587792b5e30fe_prof);

        
        $__internal_c3b900e653b6431d088b73bd588d56563ed32ce1f0901d3194dd3494517dce63->leave($__internal_c3b900e653b6431d088b73bd588d56563ed32ce1f0901d3194dd3494517dce63_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_e236a076ff0dd934ba992675841818d935e525f7e561647b2ba15fe15c5065de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e236a076ff0dd934ba992675841818d935e525f7e561647b2ba15fe15c5065de->enter($__internal_e236a076ff0dd934ba992675841818d935e525f7e561647b2ba15fe15c5065de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae6a698503302e12f3de8b457db466b6cd330c006ce6e37106de0fbd394b8178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6a698503302e12f3de8b457db466b6cd330c006ce6e37106de0fbd394b8178->enter($__internal_ae6a698503302e12f3de8b457db466b6cd330c006ce6e37106de0fbd394b8178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "<div class=\"noprint\">
<!-- Modal -->
<div id=\"myModal\" class=\"modal\" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Export To Csv</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row m-t-20\">
               <form method=\"post\" action=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_order");
        echo "\">
                  <div>
                    <div class=\"col-12\">
                      <label>Order Status </label><br>
                        <select class=\"form-control form-control-sm otype \" name=\"orderStatuss\" style=\"width:450px !important;\">
                            <option value=\"received\">Received</option>
                            <option value=\"processing\">Processing</option>
                            <option value=\"ready\">Order ready</option>
                            <option value=\"dispatched\">Out for delivery</option>
                            <option value=\"delivered\">Delivered</option>
                            <option value=\"cancelled\">Cancelled</option>
                            <option value=\"completed\">Completed</option>
                        </select>
                    </div><br>
                    <div class=\"col-12\">
                      <label>Date </label><br>
                      <!--input type=\"text\" name=\"dates\" class=\"form-control form-control-sm\" id=\"datepickers\" placeholder=\"select date\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["date"] ?? $this->getContext($context, "date")), "html", null, true);
        echo "\" style=\"width:450px !important;\"-->
                    </div><br>
                    <div class=\"col-12\">
                      <label>Area </label><br>
                      <select class=\"form-control form-control-sm \" id=\"areas\" name=\"areas\" style=\"width:450px !important;\">
                        <option value=\"0\">SELECT AREA</option>
                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["area"] ?? $this->getContext($context, "area")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 105
            echo "                          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["place"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["place"], "title", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                      </select>
                    </div><br>
                    <div class=\"col-12\">
                      <button class=\"btn\" type=\"submit\" id=\"filters\" name=\"order\">Export Order List</button>
                      <button class=\"btn\" type=\"submit\" id=\"filterss\" name=\"packing\">Export Packing List</button>
                      <button class=\"btn\" type=\"submit\" id=\"print-multi\" name=\"print\">Print</button>
                    </div>
                  </div>
               </form>
            </div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- end of modal -->
  <div class=\"layout-px-spacing\">
    <div class=\"row layout-top-spacing\">
      <div class=\"col-xl-12 col-lg-12 col-md-12\">
        <div class=\"mail-box-container\">
          <div class=\"mail-overlay\"></div>
          <div class=\"tab-title\">
              <div class=\"row\">
                  <div class=\"col-md-12 col-sm-12 col-12 text-center\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-clipboard\"><path d=\"M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2\"></path><rect x=\"8\" y=\"2\" width=\"8\" height=\"4\" rx=\"1\" ry=\"1\"></rect></svg>
                      <h5 class=\"app-title\">Orders</h5>
                  </div>
                  <div class=\"todoList-sidebar-scroll\">
                      <div class=\"col-md-12 col-sm-12 col-12 mt-5\">
                     <form method=\"get\" id=\"filter-submit\" >
                            <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                                 <input type=\"text\" name=\"date\" class=\"form-control form-control-sm\" id=\"orderdatepicker\" placeholder=\"Select date\" autocomplete=\"off\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, ($context["date_d"] ?? $this->getContext($context, "date_d")), "html", null, true);
        echo "\">
                              </div>
                            </div>
                             <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                               <select class=\"form-control form-control-sm  select-bulk\" id=\"area\" name=\"area\">
                                  <option value=\"0\">Select Area</option>
                                 ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["area"] ?? $this->getContext($context, "area")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 149
            echo "     <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["place"], "title", array()), "html", null, true);
            echo "\" ";
            if ((($context["area_d"] ?? $this->getContext($context, "area_d")) == $this->getAttribute($context["place"], "title", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["place"], "title", array()), "html", null, true);
            echo "</option>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                                 </select>
                              </div>
                            </div>
                             <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                                <select class=\"form-control form-control-sm  select-bulk\" id=\"time\" name=\"time\">
                                  <option value=\"0\">Select Time</option>
                            ";
        // line 158
        if (((($context["time_d"] ?? $this->getContext($context, "time_d")) == "") || (($context["time_d"] ?? $this->getContext($context, "time_d")) == "0"))) {
            // line 159
            echo "                            ";
        } else {
            // line 160
            echo "                            <option selected=\"\">";
            echo twig_escape_filter($this->env, ($context["time_d"] ?? $this->getContext($context, "time_d")), "html", null, true);
            echo "</option>
                            ";
        }
        // line 162
        echo "                                </select>
                              </div>
                            </div>
                             <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                                <select class=\"form-control form-control-sm  select-bulk type\"  name=\"type\">
<option value=\"0\" ";
        // line 168
        if ((($context["type"] ?? $this->getContext($context, "type")) == "0")) {
            echo " selected ";
        }
        echo ">All (Order Type)</option>

                           <option value=\"delivery\" ";
        // line 170
        if ((($context["type"] ?? $this->getContext($context, "type")) == "delivery")) {
            echo " selected ";
        }
        echo ">Home Delivery</option>
                                  <option value=\"pickup\" ";
        // line 171
        if ((($context["type"] ?? $this->getContext($context, "type")) == "pickup")) {
            echo " selected ";
        }
        echo ">Pickup From Store</option>
                                  <option value=\"express\" ";
        // line 172
        if ((($context["type"] ?? $this->getContext($context, "type")) == "express")) {
            echo " selected ";
        }
        echo ">Express Delivery</option>
                                </select>
                              </div>
                            </div>
                             <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                                <select class=\"form-control form-control-sm  select-bulk\" name=\"status\" id=\"orderstatus\" >
                         <option value=\"0\" ";
        // line 179
        if ((($context["status"] ?? $this->getContext($context, "status")) == "0")) {
            echo " selected ";
        }
        echo ">All (Order Status)</option>
                                  <option value=\"received\" ";
        // line 180
        if ((($context["status"] ?? $this->getContext($context, "status")) == "received")) {
            echo " selected ";
        }
        echo ">Received</option>
                                  <option value=\"processing\" ";
        // line 181
        if ((($context["status"] ?? $this->getContext($context, "status")) == "processing")) {
            echo " selected ";
        }
        echo ">Processing</option>
                                  <option value=\"ready\" ";
        // line 182
        if ((($context["status"] ?? $this->getContext($context, "status")) == "ready")) {
            echo " selected ";
        }
        echo ">Order Ready</option>
                                  <option value=\"dispatched\" ";
        // line 183
        if ((($context["status"] ?? $this->getContext($context, "status")) == "dispatched")) {
            echo " selected ";
        }
        echo ">Assigned Delivery</option>   
                                  <option value=\"onway\" ";
        // line 184
        if ((($context["status"] ?? $this->getContext($context, "status")) == "onway")) {
            echo " selected ";
        }
        echo ">Out For Delivery</option>
                                  <option value=\"delivered\" ";
        // line 185
        if ((($context["status"] ?? $this->getContext($context, "status")) == "delivered")) {
            echo " selected ";
        }
        echo ">Delivered</option>
                                  <option value=\"completed\" ";
        // line 186
        if ((($context["status"] ?? $this->getContext($context, "status")) == "completed")) {
            echo " selected ";
        }
        echo ">Completed</option>
                                  <option value=\"cancelled\" ";
        // line 187
        if ((($context["status"] ?? $this->getContext($context, "status")) == "cancelled")) {
            echo " selected ";
        }
        echo ">Cancelled</option>
                                    <option value=\"failed\" ";
        // line 188
        if ((($context["status"] ?? $this->getContext($context, "status")) == "failed")) {
            echo " selected ";
        }
        echo ">Failed</option

                                   </select>
                            
                                </select>
                              </div>
                            </div>
                                <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                                <button class=\"btn btn-sm btn-block btn-primary mb-2 mr-2\">
                                        Filter
                                </button>
                              </div>
                            </div>
                          </form>
                      </div>
                  </div>
                 
              </div>
          </div>
          <div id=\"todo-inbox\" class=\"accordion todo-inbox\">
              <div class=\"search\">
                  <!--input type=\"text\" class=\"form-control input-search\" placeholder=\"Search Here...\"-->
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu mail-menu d-lg-none\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg>
              </div>
              <div class=\"todo-box\">

                  <div id=\"ct\" class=\"todo-box-scroll\">
                      <div class=\"todo-item all-list\">
                          <!--badges-->
                          
                          <div class=\"mt-3 text-center\">
                                  

                                    <a href=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=all&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">All (";
        // line 223
        echo twig_escape_filter($this->env, ($context["all"] ?? $this->getContext($context, "all")), "html", null, true);
        echo ")</span></a>
                                    <!--span class=\"badge outline-badge-primary mb-2\">Picker (10)</span-->
                                    <a href=\"";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=received&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Received (";
        // line 226
        echo twig_escape_filter($this->env, ($context["received"] ?? $this->getContext($context, "received")), "html", null, true);
        echo ")</span></a>
                                    <a href=\"";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=pick&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Picker (";
        // line 228
        echo twig_escape_filter($this->env, ($context["picker"] ?? $this->getContext($context, "picker")), "html", null, true);
        echo ")</span></a>
                                    <a href=\"";
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=processing&time=0&date=&area=0\"><span class=\"badge outline-badge-primary mb-2\">Processing(";
        echo twig_escape_filter($this->env, ($context["processing"] ?? $this->getContext($context, "processing")), "html", null, true);
        echo ")</span></a>
                                    <a href=\"";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=ready&time=0&date=&area=0\"><span class=\"badge outline-badge-primary mb-2\">Order Ready(";
        echo twig_escape_filter($this->env, ($context["ready"] ?? $this->getContext($context, "ready")), "html", null, true);
        echo ") </span></a>
                                    <a href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=dispatched&time=0&date=&area=0\"><span class=\"badge outline-badge-primary mb-2\">Assigned Delivery(";
        echo twig_escape_filter($this->env, ($context["dispatched"] ?? $this->getContext($context, "dispatched")), "html", null, true);
        echo ")</span></a>
                                     <a href=\"";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=onway&time=0&date=&area=0\"><span class=\"badge outline-badge-primary mb-2\">Out For Delivery (";
        echo twig_escape_filter($this->env, ($context["onway"] ?? $this->getContext($context, "onway")), "html", null, true);
        echo ")</span></a>
                                    <a href=\"";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=delivered&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Delivered (";
        // line 234
        echo twig_escape_filter($this->env, ($context["delivered"] ?? $this->getContext($context, "delivered")), "html", null, true);
        echo ")</span>
                                  </a>
                                  <a href=\"";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_all_orders_list", array("status" => "delayed"));
        echo "\">
                                    <span class=\"badge outline-badge-primary mb-2\">Delayed (";
        // line 237
        echo twig_escape_filter($this->env, ($context["delayed"] ?? $this->getContext($context, "delayed")), "html", null, true);
        echo ")</span>
                                  </a>  
                                    <a href=\"";
        // line 239
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=reschedule&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Rescheduled (";
        // line 240
        echo twig_escape_filter($this->env, ($context["reschedule"] ?? $this->getContext($context, "reschedule")), "html", null, true);
        echo ")</span>
                                  </a>                                       
                                  <a href=\"";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=completed&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Completed (";
        // line 243
        echo twig_escape_filter($this->env, ($context["completed"] ?? $this->getContext($context, "completed")), "html", null, true);
        echo ")</span>
                                  </a>
                                  <a href=\"";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=cancelled&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Canceled (";
        // line 246
        echo twig_escape_filter($this->env, ($context["cancelled"] ?? $this->getContext($context, "cancelled")), "html", null, true);
        echo ")</span>
                                   </a>
                                     <a href=\"";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("filter_order_list");
        echo "?type=0&status=failed&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Failed (";
        // line 249
        echo twig_escape_filter($this->env, ($context["failed"] ?? $this->getContext($context, "failed")), "html", null, true);
        echo ")</span>
                                   </a>
                              </div>
                           
                      ";
        // line 253
        if ((($context["status"] ?? $this->getContext($context, "status")) == "")) {
            echo " 
                    <form method=\"POST\" action=\"";
            // line 254
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_order_status");
            echo "\" >

                      ";
        } else {
            // line 257
            echo "                        <form method=\"POST\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_order_status");
            echo "\" >
                       
                        
                         ";
        }
        // line 261
        echo "                         <input type=\"hidden\" name=\"status\" value=\"";
        echo twig_escape_filter($this->env, ($context["status"] ?? $this->getContext($context, "status")), "html", null, true);
        echo "\">
<div class=\"row order-info mt-3 mb-3 pl-3 print-table\" >
                            <div class=\"col-lg-1 col-md-1 col-8 mb-3 \">
                                <button name=\"print\" class=\"btn btn-outline-default btn-sm\" value=\"Filter\"><i class=\"fa fa-print\"></i></button>
                            </div>
                            <div class=\"col-lg-2 col-md-2 col-8 mb-3\">
                                <select class=\"form-control form-control-sm otype orderstatustype\" id=\"exampleFormControlSelect1\" name=\"orderStatus\">
                                   >
                                   <option value=\"0\">All</option>
                                   <option value=\"received\">Received</option>
                                   <option value=\"pick\">Assign Picker</option>
                                   <option value=\"processing\">Processing</option>
                                   <option value=\"ready\">Order ready</option>
                                   <option value=\"dispatched\">Out for delivery</option>
                                   <option value=\"delivered\">Delivered</option>
                                   <option value=\"cancelled\">Cancelled</option>
                                   <option value=\"completed\">Completed</option>

                                </select>

              
                            </div>

                            <div id=\"dboy\" >
                            </div>
                            <div class=\"col-lg-1 col-md-4 col-4 mb-3 pl-0 order-column\">
                                  <input type=\"submit\" name=\"time\" class=\"btn btn-info  apply-submit\" value=\"Apply\">
                            </div>
                          </div>
                        <!--starts div-->
                           <div class=\"table-responsive mb-4 mt-4\">
                                <table id=\"zero-config\" class=\"table table-hover\" style=\"width:100%\">
                                 
                            <thead>
                                <tr>
                                            <th data-orderable=\"false\">  <input class=\"\" type=\"checkbox\" id=\"gridCheck\" name=\"selectThemAll\">
    </th>
                                            <th>Customer Details</th>
                                            <th>Shipping</th>
                                            <th>Order INfo</th>
                                            <th>Action</th>
                                        </tr>
                            </thead> 
                             <tbody id=\"tbody\">
                              ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 306
            echo "                                <tr>
                                    <td>
                                      <input type=\"checkbox\" name=\"all[]\" class=\"tst\" value=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "\">  
                                        ";
            // line 309
            if (((($this->getAttribute($context["order"], "trayStatus", array()) == "0") || ($this->getAttribute($context["order"], "trayStatus", array()) == "")) || (null === $this->getAttribute($context["order"], "trayStatus", array())))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\" title=\"Edit\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                echo "</a><br> ";
            }
            // line 310
            echo "                                        ";
            if (($this->getAttribute($context["order"], "trayStatus", array()) == "3")) {
                echo " <span ><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\" title=\"Edit\" style=\"color:#e91e63;font-weight:400;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                echo "</a><br></span> ";
            }
            // line 311
            echo "                                        ";
            if (($this->getAttribute($context["order"], "trayStatus", array()) == "1")) {
                echo " <span ><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\" title=\"Edit\" style=\"color:#F44337;font-weight:400;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                echo "</a><br></span> ";
            }
            // line 312
            echo "                                        ";
            if (($this->getAttribute($context["order"], "trayStatus", array()) == "2")) {
                echo " <span ><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\" title=\"Edit\" style=\"color:#014c0a;font-weight:400;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                echo "</a><br></span> ";
            }
            // line 313
            echo "                                    </td> 
                                    <td>
                                      <p>
                                        <small class=\"text-sm\">
                                            ";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "customerName", array()), "html", null, true);
            echo "<br>
                                            ";
            // line 318
            if ((($context["s"] ?? $this->getContext($context, "s")) == 0)) {
                // line 319
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "mobileNo", array()), "html", null, true);
                echo "<br>
                                            ";
            } else {
                // line 321
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "customer", array()), "mobileNumber", array()), "html", null, true);
                echo "<br>
                                            ";
            }
            // line 323
            echo "                                        </small>
                                      </p>
                                    </td>
                                    <td>
                                      <small class=\"text-sm\">
                                        ";
            // line 328
            if (($this->getAttribute($context["order"], "orderType", array()) == "Delivery")) {
                // line 329
                echo "                                        <span class=\"badge badge-success\">Home Delivery</span>
                                         ";
            } elseif (($this->getAttribute(            // line 330
$context["order"], "orderType", array()) == "pickup")) {
                echo " 
<span class=\"badge badge-info\">Pickup From Store</span>
                                         ";
            } else {
                // line 333
                echo "<span class=\"badge badge-danger\">Express Delivery</span>
                                          ";
            }
            // line 335
            echo "                                       <br>
                                        <span style=\"color: #000000;font-size: 10px;text-transform: uppercase;\">Delivery Area : ";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "area", array()), "html", null, true);
            echo " <br> Delivery Time : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fixtime", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fixDate", array()), "html", null, true);
            echo "</span></small>

                                    </td>
                                    <td>
                                        <small>
                                            ";
            // line 341
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["order"], "paymentType", array())), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ($context["currency"] ?? $this->getContext($context, "currency")), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
            echo "<br>
                                             ";
            // line 342
            if (($this->getAttribute($context["order"], "orderStatus", array()) == "dispatched")) {
                // line 343
                echo "                                      <span class=\"badge badge-primary\" style=\"background: #ff5722;color: #fff;\">Assigned To Delivery Boy</span>
                                          ";
            } elseif (($this->getAttribute(            // line 344
$context["order"], "orderStatus", array()) == "ready")) {
                echo " 
                                      <span class=\"badge badge-primary\" style=\"background: #4caf50;color: #fff;\">Order Ready</span>
                                      ";
            } elseif (($this->getAttribute(            // line 346
$context["order"], "orderStatus", array()) == "received")) {
                echo " 
                                      <span class=\"badge badge-primary\" style=\"background: #3f51b5;color: #fff;\">Received</span>
                                        ";
            } elseif (($this->getAttribute(            // line 348
$context["order"], "orderStatus", array()) == "processing")) {
                echo " 
                                      <span class=\"badge badge-primary\" style=\"background: #009688;color: #fff;\">Processing</span>
                                        ";
            } elseif (($this->getAttribute(            // line 350
$context["order"], "orderStatus", array()) == "processing")) {
                echo " 
                                      <span class=\"badge badge-primary\" style=\"background: #009688;color: #fff;\">Processing</span>
                                        ";
            } elseif (($this->getAttribute(            // line 352
$context["order"], "orderStatus", array()) == "delivered")) {
                echo " 
                                      <span class=\"badge badge-primary\" style=\"background: #4caf50;color: #fff;\">delivered</span>
                                        ";
            } elseif (($this->getAttribute(            // line 354
$context["order"], "orderStatus", array()) == "delivered")) {
                echo " 
                                      <span class=\"badge badge-primary\" style=\"background: #4caf50;color: #fff;\">delivered</span>
                                      ";
            } elseif (($this->getAttribute(            // line 356
$context["order"], "orderStatus", array()) == "cancelled")) {
                echo " 
                                      <span class=\"badge badge-primary\" style=\"background: red;color: #fff;\">Cancelled</span>
                                      ";
            } elseif (($this->getAttribute(            // line 358
$context["order"], "orderStatus", array()) == "completed")) {
                echo " 
                                      <span class=\"badge badge-primary\" style=\"background: green;color: #fff;\">Completed</span>
                                      ";
            } else {
                // line 361
                echo "                                      <span class=\"badge badge-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderStatus", array()), "html", null, true);
                echo "</span> 
                                      ";
            }
            // line 362
            echo "&nbsp;<br>
<span class=\"badge badge-primary\" style=\"background: red;color: #fff;font-size:10px;\">Delayed</span>

                                        </small>
                                    </td>
                                    <td>
                                        <span style=\"font-size:10px;font-weight:bold;\">  Tray.No :";
            // line 368
            if (((($this->getAttribute($context["order"], "tray", array()) == "0") || ($this->getAttribute($context["order"], "tray", array()) == "")) ||  !(null === $this->getAttribute($context["order"], "tray", array())))) {
                echo " Not Assigned ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["order"], "tray", array())), "html", null, true);
                echo " ";
            }
            echo "</span>
                                      <a class=\"btn btn-outline-primary btn-sm\" href=\"";
            // line 369
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">
                                        Update
                                      </a>
                                    </td>
                                </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "                              </tbody>
                            </table> 
                          </div>
                        <!--ends-->
                      </div>
                  </div>

                  <div class=\"modal fade\" id=\"todoShowListItem\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                      <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                          <div class=\"modal-content\">
                              <div class=\"modal-body\">
                                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x close\" data-dismiss=\"modal\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
                                  <div class=\"compose-box\">
                                      <div class=\"compose-content\">
                                          <h5 class=\"task-heading\"></h5>
                                          <p class=\"task-text\"></p>
                                      </div>
                                  </div>
                              </div>
                              <div class=\"modal-footer\">
                                  <button class=\"btn\" data-dismiss=\"modal\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash\"><polyline points=\"3 6 5 6 21 6\"></polyline><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg> Close</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>                                    
      </div>

      <!-- Modal -->
      <div class=\"modal fade\" id=\"addTaskModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
          <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
              <div class=\"modal-content\">
                  <div class=\"modal-body\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x close\" data-dismiss=\"modal\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
                      <div class=\"compose-box\">
                          <div class=\"compose-content\" id=\"addTaskModalTitle\">
                              <h5 class=\"\">Add Task</h5>
                              <form>
                                  <div class=\"row\">
                                      <div class=\"col-md-12\">
                                          <div class=\"d-flex mail-to mb-4\">
                                              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-3 flaticon-notes\"><path d=\"M12 20h9\"></path><path d=\"M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z\"></path></svg>
                                              <div class=\"w-100\">
                                                  <input id=\"task\" type=\"text\" placeholder=\"Task\" class=\"form-control form-control-sm\" name=\"task\">
                                                  <span class=\"validation-text\"></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class=\"d-flex  mail-subject mb-4\">
                                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file-text flaticon-menu-list\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path><polyline points=\"14 2 14 8 20 8\"></polyline><line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line><line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line><polyline points=\"10 9 9 9 8 9\"></polyline></svg>
                                      <div class=\"w-100\">
                                          <div id=\"taskdescription\" class=\"\"></div>
                                          <span class=\"validation-text\"></span>
                                      </div>
                                  </div>

                              </form>
                          </div>
                      </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button class=\"btn\" data-dismiss=\"modal\"><i class=\"flaticon-cancel-12\"></i> Discard</button>
                      <button class=\"btn add-tsk\">Add Task</button>
                      <button class=\"btn edit-tsk\">Save</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
              
            <!--/div-->
";
        
        $__internal_ae6a698503302e12f3de8b457db466b6cd330c006ce6e37106de0fbd394b8178->leave($__internal_ae6a698503302e12f3de8b457db466b6cd330c006ce6e37106de0fbd394b8178_prof);

        
        $__internal_e236a076ff0dd934ba992675841818d935e525f7e561647b2ba15fe15c5065de->leave($__internal_e236a076ff0dd934ba992675841818d935e525f7e561647b2ba15fe15c5065de_prof);

    }

    // line 454
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_226ac7bb3f0192b11db5371e78c8e9bd6dfac4ff6ff171d5679cb5c6fb894a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226ac7bb3f0192b11db5371e78c8e9bd6dfac4ff6ff171d5679cb5c6fb894a15->enter($__internal_226ac7bb3f0192b11db5371e78c8e9bd6dfac4ff6ff171d5679cb5c6fb894a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_97ff59cb5406333e729a90d91c53743cedcabea62d70251e44ea08e0de191462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ff59cb5406333e729a90d91c53743cedcabea62d70251e44ea08e0de191462->enter($__internal_97ff59cb5406333e729a90d91c53743cedcabea62d70251e44ea08e0de191462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 455
        echo "
    <script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js
\"></script>
<script>

        c1 = \$('#style-2').DataTable({
                 \"order\": [[ 0, \"desc\" ]]

            
        });
        multiCheck(c1);
   
</script>
<script>
function postForm(status) {

     var date = \$('#orderdatepicker').val();
    var area = \$('#area').val();
    var time = \$('#time').val();
    var type = \$('.type').val();

   \$('#zero-config').DataTable({
            \"destroy\": true,
            \"oLanguage\": {
                \"oPaginate\": { \"sPrevious\": '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-left\"><line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line><polyline points=\"12 19 5 12 12 5\"></polyline></svg>', \"sNext\": '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-right\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line><polyline points=\"12 5 19 12 12 19\"></polyline></svg>' },
                \"sInfo\": \"Showing page _PAGE_ of _PAGES_\",
                \"sSearch\": '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-search\"><circle cx=\"11\" cy=\"11\" r=\"8\"></circle><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line></svg>',
                \"sSearchPlaceholder\": \"Search...\",
               \"sLengthMenu\": \"Results :  _MENU_\",
            },
            \"stripeClasses\": [],
            \"aaSorting\": [[0, 'desc']],
            \"lengthMenu\": [7, 10, 20, 50],
            \"pageLength\": 15,
            'ajax': { 
             url: '/app-manager/filter-order-list-ajax',
          data: {
            date :date, 
            area : area,
            time:time,
            type:type,
            status:status
          },
            'type': \"GET\",      },
            'fnDrawCallback': function()
            {
                 // \$(\"#myTable_length\").prepend('');
            },
          'columns': [
            { data: 'id' },
            { data: 'customerdetails' },
            { data: 'shipping' },
            { data: 'orderInfo' },
            { data: 'action' }
          ], 
        });

}

\$('#filter-submit').submit(function() {
   var status = \$('#orderstatus').val();
  
    postForm(status);
    return false;
});

\$(function() {
     status = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&')[1].split('=')[1];
    if(status == 'all'){
      status = '0';
    }
    postForm(status);
});






</script>

   <script>
   var status='';
  \$(document).ready(function() {
    
      status = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&')[1].split('=')[1];;
      var option = '';
      \$('.orderstatustype').html('');
      if(status == 'all' || status == 'received'){
                 var option = '<option value=\"received\">Received</option><option value=\"pick\">Assign Picker</option><option value=\"processing\">Processing</option><option value=\"ready\">Order ready</option><option value=\"dispatched\">Assign To Delivery Boy</option><option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
      }
                               
       if ( status == 'pick') {

            var option = '<option value=\"processing\">Processing</option><option value=\"ready\">Order ready</option><option value=\"dispatched\">Assign To Delivery Boy</option><option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
       }
       if(status == 'processing') {
            var option = '<option value=\"ready\">Order ready</option><option value=\"dispatched\">Assign To Delivery Boy</option><option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
       }
       if(status == 'ready') {
          var option = '<option value=\"ready\">Order ready</option><option value=\"dispatched\">Assign To Delivery Boy</option><option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
       }
       if(status == 'dispatched') {
         var option = ' <option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
       }
       if(status == 'onway') {
         var option = ' <option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
       }
      if(status == 'delivered') {
          var option = '<option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
                                 
      }
      if(status == 'completed'){
          var option = '<option value=\"completed\">Completed</option>';
                                 
      }
      if (status == 'cancelled'){
            var option = '<option value=\"cancelled\">Cancelled</option>';
                                
      }
      \$('.orderstatustype').append(option); 


         \$('#myTable').DataTable( {
                 \"order\": [[ 0, \"desc\" ]]

    } );
    });
\$('#filter').click(function(){
var datepicker =\$('#datepicker').val();
var area =\$('#area').val();
var time =\$('#time').val();
var out ={'area':area,'time':time,'date':datepicker};                      // alert(x);
\$.ajax({
    type: \"POST\",
    url: \"";
        // line 590
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_list", array("status" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
        echo "\",
    data: out,
    success: function (res, dataType) {

  \$('#tbody').empty();
  \$('#tbody').append(res);
          

    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
        alert('Error : ' + errorThrown);
    }
});
});

\$('#area').change(function() {  
var area=\$('#area').val();
var out ={'data':area};                      // alert(x);
\$.ajax({
    type: \"POST\",
    url: \"";
        // line 610
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_time_by_location");
        echo "\",
    data: out,
    success: function (res, dataType)
    {
time(res);
    },
   error: function (XMLHttpRequest, textStatus, errorThrown) {
    alert('Error : ' + errorThrown);
    }
});

        });
\$('#areas').change(function() {  
var area=\$('#areas').val();
var out ={'data':area};                      // alert(x);
\$.ajax({
    type: \"POST\",
    url: \"";
        // line 627
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_time_by_location");
        echo "\",
    data: out,
    success: function (res, dataType)
    {
times(res);
    },
   error: function (XMLHttpRequest, textStatus, errorThrown) {
    alert('Error : ' + errorThrown);
    }
});

        });
    \$(function() {
    jQuery(\"[name=selectThemAll]\").click(function(source) { 
        checkboxes = jQuery('.tst');
        for(var i in checkboxes){
            checkboxes[i].checked = source.target.checked;
        }
    });
});

    \$('.otype').change(function(){
var value=this.value;
if(value=='dispatched')
{
    // alert('delivery boy names come here!');
 \$('#dboy').show();
    \$('#dboy').html('<select class=\"form-control form-control-sm db\" name=\"delivery\"></select>&nbsp;&nbsp;&nbsp;');
    getDelivery();
}
else if(value=='pick')
{
    // alert('delivery boy names come here!');
 \$('#dboy').show();
    \$('#dboy').html('<select class=\"form-control form-control-sm db\" name=\"picker\"></select>nbsp;nbsp;');
    getPicker();
}
else
{
 \$('#dboy').hide();   
}
});


function getDelivery()
{
var out ={'branch':";
        // line 673
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "branch", array()), "html", null, true);
        echo "};                      // alert(x);
\$.ajax({
    type: \"POST\",
    url: \"/restaurant-manager/get-del\",
    data: out,
    success: function (res, dataType) {
 // console.log('";
        // line 679
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_get_cat");
        echo "');
send(res);
          
// console.log(datas);

    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
        alert('Error : ' + errorThrown);
    }
});
}
function getPicker()
{
var out ={'branch':";
        // line 692
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "branch", array()), "html", null, true);
        echo "};                      // alert(x);
\$.ajax({
    type: \"POST\",
    url: \"/restaurant-manager/get-picker\",
    data: out,
    success: function (res, dataType) {
 // console.log('";
        // line 698
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_get_cat");
        echo "');
send(res);
          
// console.log(datas);

    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
        alert('Error : ' + errorThrown);
    }
});
}
function send(myObjects)
{
\$('.subcat').html('');
\$.each(myObjects, function () {
    \$('.db').append('<option value=\"'+this.id+'\">'+this.value+'</option>');
      
    });            
   }
   function time(myObjects)
{
  \$('#time').html('');
\$('#time').append('<option value=\"0\">Select Time</option>');
\$.each(myObjects, function () {
    \$('#time').append('<option value=\"'+this.start+' - '+this.end+'\">'+this.start+' - '+this.end+'</option>');
      
    });            
   }
      function times(myObjects)
{
  \$('#times').html('');
\$('#times').append('<option value=\"0\">Select Time</option>');
\$.each(myObjects, function () {
    \$('#times').append('<option value=\"'+this.start+' - '+this.end+'\">'+this.start+' - '+this.end+'</option>');
      
    });            
   }

        \$(function() {
            \$( \"#orderdatepicker\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });
        });
</script>
";
        
        $__internal_97ff59cb5406333e729a90d91c53743cedcabea62d70251e44ea08e0de191462->leave($__internal_97ff59cb5406333e729a90d91c53743cedcabea62d70251e44ea08e0de191462_prof);

        
        $__internal_226ac7bb3f0192b11db5371e78c8e9bd6dfac4ff6ff171d5679cb5c6fb894a15->leave($__internal_226ac7bb3f0192b11db5371e78c8e9bd6dfac4ff6ff171d5679cb5c6fb894a15_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Orders/orderList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1134 => 698,  1125 => 692,  1109 => 679,  1100 => 673,  1051 => 627,  1031 => 610,  1008 => 590,  871 => 455,  862 => 454,  776 => 375,  764 => 369,  754 => 368,  746 => 362,  740 => 361,  734 => 358,  729 => 356,  724 => 354,  719 => 352,  714 => 350,  709 => 348,  704 => 346,  699 => 344,  696 => 343,  694 => 342,  687 => 341,  675 => 336,  672 => 335,  668 => 333,  662 => 330,  659 => 329,  657 => 328,  650 => 323,  644 => 321,  638 => 319,  636 => 318,  632 => 317,  626 => 313,  617 => 312,  608 => 311,  599 => 310,  591 => 309,  587 => 308,  583 => 306,  579 => 305,  531 => 261,  523 => 257,  517 => 254,  513 => 253,  506 => 249,  502 => 248,  497 => 246,  493 => 245,  488 => 243,  484 => 242,  479 => 240,  475 => 239,  470 => 237,  466 => 236,  461 => 234,  457 => 233,  451 => 232,  445 => 231,  439 => 230,  433 => 229,  429 => 228,  425 => 227,  421 => 226,  417 => 225,  412 => 223,  408 => 222,  369 => 188,  363 => 187,  357 => 186,  351 => 185,  345 => 184,  339 => 183,  333 => 182,  327 => 181,  321 => 180,  315 => 179,  303 => 172,  297 => 171,  291 => 170,  284 => 168,  276 => 162,  270 => 160,  267 => 159,  265 => 158,  256 => 151,  241 => 149,  237 => 148,  227 => 141,  191 => 107,  180 => 105,  176 => 104,  167 => 98,  148 => 82,  135 => 71,  126 => 70,  51 => 3,  42 => 2,  11 => 1,);
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
<link rel=\"stylesheet\" href=\"/admin/assets/plugins/iCheck/all.css\">
<style>
    [type=checkbox]:checked, [type=checkbox]:not(:checked) {
         position: relative; 
         left: 0px; 
         opacity: 1; 
    }
   
   
        .btns
    {
color: #0071a1;
      border-color: #0071a1;
      background: #f3f5f6;
      vertical-align: top;
      height: 32px !important;
      line-height: 10px;
    }
.left {
    margin-left: 2px;
}
.all-orders a {
    color: #0073aa;
    font-weight: 400;
    font-size: 16px;
        font-family: initial;
    margin-left: 2px;
    transition-property: border,background,color;
    transition-duration: .05s;
    transition-timing-function: ease-in-out;
    }
    .view
    {
 color: #0073aa;
    font-weight: 400;
    font-size: 12px;
    font-family: initial;
    margin-left: 2px;
    transition-property: border,background,color;
    transition-duration: .05s;
    width: 150px;
    height: 29px !important;
    transition-timing-function: ease-in-out;
    }
    @media print{
   .noprint{
       display:none;
   }
}
</style>

      
      <!-- Javascript -->
      <script>
         \$(function() {
          
            \$( \"#datepicker\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });
   \$( \"#datepickers\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });

         });
      </script>
{% endblock %}

{% block body %}
<div class=\"noprint\">
<!-- Modal -->
<div id=\"myModal\" class=\"modal\" role=\"dialog\">
   <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h4 class=\"modal-title\">Export To Csv</h4>
         </div>
         <div class=\"modal-body\">
            <div class=\"row m-t-20\">
               <form method=\"post\" action=\"{{ path('export_order') }}\">
                  <div>
                    <div class=\"col-12\">
                      <label>Order Status </label><br>
                        <select class=\"form-control form-control-sm otype \" name=\"orderStatuss\" style=\"width:450px !important;\">
                            <option value=\"received\">Received</option>
                            <option value=\"processing\">Processing</option>
                            <option value=\"ready\">Order ready</option>
                            <option value=\"dispatched\">Out for delivery</option>
                            <option value=\"delivered\">Delivered</option>
                            <option value=\"cancelled\">Cancelled</option>
                            <option value=\"completed\">Completed</option>
                        </select>
                    </div><br>
                    <div class=\"col-12\">
                      <label>Date </label><br>
                      <!--input type=\"text\" name=\"dates\" class=\"form-control form-control-sm\" id=\"datepickers\" placeholder=\"select date\" value=\"{{ date }}\" style=\"width:450px !important;\"-->
                    </div><br>
                    <div class=\"col-12\">
                      <label>Area </label><br>
                      <select class=\"form-control form-control-sm \" id=\"areas\" name=\"areas\" style=\"width:450px !important;\">
                        <option value=\"0\">SELECT AREA</option>
                        {% for place in area %}
                          <option value=\"{{  place.title }}\">{{ place.title }}</option>
                        {% endfor %}
                      </select>
                    </div><br>
                    <div class=\"col-12\">
                      <button class=\"btn\" type=\"submit\" id=\"filters\" name=\"order\">Export Order List</button>
                      <button class=\"btn\" type=\"submit\" id=\"filterss\" name=\"packing\">Export Packing List</button>
                      <button class=\"btn\" type=\"submit\" id=\"print-multi\" name=\"print\">Print</button>
                    </div>
                  </div>
               </form>
            </div>
         </div>
         <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- end of modal -->
  <div class=\"layout-px-spacing\">
    <div class=\"row layout-top-spacing\">
      <div class=\"col-xl-12 col-lg-12 col-md-12\">
        <div class=\"mail-box-container\">
          <div class=\"mail-overlay\"></div>
          <div class=\"tab-title\">
              <div class=\"row\">
                  <div class=\"col-md-12 col-sm-12 col-12 text-center\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-clipboard\"><path d=\"M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2\"></path><rect x=\"8\" y=\"2\" width=\"8\" height=\"4\" rx=\"1\" ry=\"1\"></rect></svg>
                      <h5 class=\"app-title\">Orders</h5>
                  </div>
                  <div class=\"todoList-sidebar-scroll\">
                      <div class=\"col-md-12 col-sm-12 col-12 mt-5\">
                     <form method=\"get\" id=\"filter-submit\" >
                            <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                                 <input type=\"text\" name=\"date\" class=\"form-control form-control-sm\" id=\"orderdatepicker\" placeholder=\"Select date\" autocomplete=\"off\" value=\"{{ date_d }}\">
                              </div>
                            </div>
                             <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                               <select class=\"form-control form-control-sm  select-bulk\" id=\"area\" name=\"area\">
                                  <option value=\"0\">Select Area</option>
                                 {% for place in area %}
     <option value=\"{{  place.title }}\" {% if area_d == place.title %} selected {% endif %}>{{ place.title }}</option>
   {% endfor %}
                                 </select>
                              </div>
                            </div>
                             <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                                <select class=\"form-control form-control-sm  select-bulk\" id=\"time\" name=\"time\">
                                  <option value=\"0\">Select Time</option>
                            {% if time_d == '' or time_d == '0'%}
                            {% else %}
                            <option selected=\"\">{{ time_d }}</option>
                            {% endif %}
                                </select>
                              </div>
                            </div>
                             <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                                <select class=\"form-control form-control-sm  select-bulk type\"  name=\"type\">
<option value=\"0\" {% if type == '0' %} selected {% endif %}>All (Order Type)</option>

                           <option value=\"delivery\" {% if type == 'delivery' %} selected {% endif %}>Home Delivery</option>
                                  <option value=\"pickup\" {% if type == 'pickup' %} selected {% endif %}>Pickup From Store</option>
                                  <option value=\"express\" {% if type == 'express' %} selected {% endif %}>Express Delivery</option>
                                </select>
                              </div>
                            </div>
                             <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                                <select class=\"form-control form-control-sm  select-bulk\" name=\"status\" id=\"orderstatus\" >
                         <option value=\"0\" {% if status == '0' %} selected {% endif %}>All (Order Status)</option>
                                  <option value=\"received\" {% if status == 'received' %} selected {% endif %}>Received</option>
                                  <option value=\"processing\" {% if status == 'processing' %} selected {% endif %}>Processing</option>
                                  <option value=\"ready\" {% if status == 'ready' %} selected {% endif %}>Order Ready</option>
                                  <option value=\"dispatched\" {% if status == 'dispatched' %} selected {% endif %}>Assigned Delivery</option>   
                                  <option value=\"onway\" {% if status == 'onway' %} selected {% endif %}>Out For Delivery</option>
                                  <option value=\"delivered\" {% if status == 'delivered' %} selected {% endif %}>Delivered</option>
                                  <option value=\"completed\" {% if status == 'completed' %} selected {% endif %}>Completed</option>
                                  <option value=\"cancelled\" {% if status == 'cancelled' %} selected {% endif %}>Cancelled</option>
                                    <option value=\"failed\" {% if status == 'failed' %} selected {% endif %}>Failed</option

                                   </select>
                            
                                </select>
                              </div>
                            </div>
                                <div class=\"row form-row mt-2\">
                              <div class=\"form-group col-md-12\">
                                <button class=\"btn btn-sm btn-block btn-primary mb-2 mr-2\">
                                        Filter
                                </button>
                              </div>
                            </div>
                          </form>
                      </div>
                  </div>
                 
              </div>
          </div>
          <div id=\"todo-inbox\" class=\"accordion todo-inbox\">
              <div class=\"search\">
                  <!--input type=\"text\" class=\"form-control input-search\" placeholder=\"Search Here...\"-->
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu mail-menu d-lg-none\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg>
              </div>
              <div class=\"todo-box\">

                  <div id=\"ct\" class=\"todo-box-scroll\">
                      <div class=\"todo-item all-list\">
                          <!--badges-->
                          
                          <div class=\"mt-3 text-center\">
                                  

                                    <a href=\"{{ path('filter_order_list') }}?type=0&status=all&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">All ({{ all }})</span></a>
                                    <!--span class=\"badge outline-badge-primary mb-2\">Picker (10)</span-->
                                    <a href=\"{{ path('filter_order_list') }}?type=0&status=received&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Received ({{ received }})</span></a>
                                    <a href=\"{{ path('filter_order_list') }}?type=0&status=pick&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Picker ({{ picker }})</span></a>
                                    <a href=\"{{ path('filter_order_list') }}?type=0&status=processing&time=0&date=&area=0\"><span class=\"badge outline-badge-primary mb-2\">Processing({{ processing }})</span></a>
                                    <a href=\"{{ path('filter_order_list') }}?type=0&status=ready&time=0&date=&area=0\"><span class=\"badge outline-badge-primary mb-2\">Order Ready({{ ready }}) </span></a>
                                    <a href=\"{{ path('filter_order_list') }}?type=0&status=dispatched&time=0&date=&area=0\"><span class=\"badge outline-badge-primary mb-2\">Assigned Delivery({{ dispatched }})</span></a>
                                     <a href=\"{{ path('filter_order_list') }}?type=0&status=onway&time=0&date=&area=0\"><span class=\"badge outline-badge-primary mb-2\">Out For Delivery ({{ onway }})</span></a>
                                    <a href=\"{{ path('filter_order_list') }}?type=0&status=delivered&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Delivered ({{ delivered }})</span>
                                  </a>
                                  <a href=\"{{ path('restaurant_all_orders_list',{'status':'delayed'})}}\">
                                    <span class=\"badge outline-badge-primary mb-2\">Delayed ({{ delayed }})</span>
                                  </a>  
                                    <a href=\"{{ path('filter_order_list') }}?type=0&status=reschedule&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Rescheduled ({{ reschedule }})</span>
                                  </a>                                       
                                  <a href=\"{{ path('filter_order_list') }}?type=0&status=completed&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Completed ({{ completed }})</span>
                                  </a>
                                  <a href=\"{{ path('filter_order_list') }}?type=0&status=cancelled&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Canceled ({{ cancelled }})</span>
                                   </a>
                                     <a href=\"{{ path('filter_order_list') }}?type=0&status=failed&time=0&date=&area=0\">
                                    <span class=\"badge outline-badge-primary mb-2\">Failed ({{ failed }})</span>
                                   </a>
                              </div>
                           
                      {% if status == '' %} 
                    <form method=\"POST\" action=\"{{ path('update_order_status') }}\" >

                      {% else %}
                        <form method=\"POST\" action=\"{{ path('update_order_status') }}\" >
                       
                        
                         {% endif %}
                         <input type=\"hidden\" name=\"status\" value=\"{{ status }}\">
<div class=\"row order-info mt-3 mb-3 pl-3 print-table\" >
                            <div class=\"col-lg-1 col-md-1 col-8 mb-3 \">
                                <button name=\"print\" class=\"btn btn-outline-default btn-sm\" value=\"Filter\"><i class=\"fa fa-print\"></i></button>
                            </div>
                            <div class=\"col-lg-2 col-md-2 col-8 mb-3\">
                                <select class=\"form-control form-control-sm otype orderstatustype\" id=\"exampleFormControlSelect1\" name=\"orderStatus\">
                                   >
                                   <option value=\"0\">All</option>
                                   <option value=\"received\">Received</option>
                                   <option value=\"pick\">Assign Picker</option>
                                   <option value=\"processing\">Processing</option>
                                   <option value=\"ready\">Order ready</option>
                                   <option value=\"dispatched\">Out for delivery</option>
                                   <option value=\"delivered\">Delivered</option>
                                   <option value=\"cancelled\">Cancelled</option>
                                   <option value=\"completed\">Completed</option>

                                </select>

              
                            </div>

                            <div id=\"dboy\" >
                            </div>
                            <div class=\"col-lg-1 col-md-4 col-4 mb-3 pl-0 order-column\">
                                  <input type=\"submit\" name=\"time\" class=\"btn btn-info  apply-submit\" value=\"Apply\">
                            </div>
                          </div>
                        <!--starts div-->
                           <div class=\"table-responsive mb-4 mt-4\">
                                <table id=\"zero-config\" class=\"table table-hover\" style=\"width:100%\">
                                 
                            <thead>
                                <tr>
                                            <th data-orderable=\"false\">  <input class=\"\" type=\"checkbox\" id=\"gridCheck\" name=\"selectThemAll\">
    </th>
                                            <th>Customer Details</th>
                                            <th>Shipping</th>
                                            <th>Order INfo</th>
                                            <th>Action</th>
                                        </tr>
                            </thead> 
                             <tbody id=\"tbody\">
                              {% for order in orders %}
                                <tr>
                                    <td>
                                      <input type=\"checkbox\" name=\"all[]\" class=\"tst\" value=\"{{ order.id }}\">  
                                        {% if order.trayStatus == '0' or order.trayStatus == '' or order.trayStatus is null %}<a href=\"{{ path('restaurant_orders_panel_update',{'id':order.id}) }}\" title=\"Edit\">{{ order.id }}</a><br> {% endif %}
                                        {% if order.trayStatus == '3'%} <span ><a href=\"{{ path('restaurant_orders_panel_update',{'id':order.id}) }}\" title=\"Edit\" style=\"color:#e91e63;font-weight:400;\">{{ order.id }}</a><br></span> {% endif %}
                                        {% if order.trayStatus == '1' %} <span ><a href=\"{{ path('restaurant_orders_panel_update',{'id':order.id}) }}\" title=\"Edit\" style=\"color:#F44337;font-weight:400;\">{{ order.id }}</a><br></span> {% endif %}
                                        {% if order.trayStatus == '2' %} <span ><a href=\"{{ path('restaurant_orders_panel_update',{'id':order.id}) }}\" title=\"Edit\" style=\"color:#014c0a;font-weight:400;\">{{ order.id }}</a><br></span> {% endif %}
                                    </td> 
                                    <td>
                                      <p>
                                        <small class=\"text-sm\">
                                            {{ order.customerName }}<br>
                                            {% if s == 0 %}
                                            {{ order.mobileNo }}<br>
                                            {% else %}
                                            {{ order.customer.mobileNumber }}<br>
                                            {% endif %}
                                        </small>
                                      </p>
                                    </td>
                                    <td>
                                      <small class=\"text-sm\">
                                        {% if order.orderType == 'Delivery' %}
                                        <span class=\"badge badge-success\">Home Delivery</span>
                                         {% elseif order.orderType == 'pickup' %} 
<span class=\"badge badge-info\">Pickup From Store</span>
                                         {% else %}
<span class=\"badge badge-danger\">Express Delivery</span>
                                          {% endif %}
                                       <br>
                                        <span style=\"color: #000000;font-size: 10px;text-transform: uppercase;\">Delivery Area : {{ order.area }} <br> Delivery Time : {{ order.fixtime }} - {{ order.fixDate }}</span></small>

                                    </td>
                                    <td>
                                        <small>
                                            {{ order.paymentType|upper }}, {{ currency }}{{ order.orderAmount }}<br>
                                             {% if order.orderStatus == 'dispatched' %}
                                      <span class=\"badge badge-primary\" style=\"background: #ff5722;color: #fff;\">Assigned To Delivery Boy</span>
                                          {% elseif order.orderStatus == 'ready' %} 
                                      <span class=\"badge badge-primary\" style=\"background: #4caf50;color: #fff;\">Order Ready</span>
                                      {% elseif order.orderStatus == 'received' %} 
                                      <span class=\"badge badge-primary\" style=\"background: #3f51b5;color: #fff;\">Received</span>
                                        {% elseif order.orderStatus == 'processing' %} 
                                      <span class=\"badge badge-primary\" style=\"background: #009688;color: #fff;\">Processing</span>
                                        {% elseif order.orderStatus == 'processing' %} 
                                      <span class=\"badge badge-primary\" style=\"background: #009688;color: #fff;\">Processing</span>
                                        {% elseif order.orderStatus == 'delivered' %} 
                                      <span class=\"badge badge-primary\" style=\"background: #4caf50;color: #fff;\">delivered</span>
                                        {% elseif order.orderStatus == 'delivered' %} 
                                      <span class=\"badge badge-primary\" style=\"background: #4caf50;color: #fff;\">delivered</span>
                                      {% elseif order.orderStatus == 'cancelled' %} 
                                      <span class=\"badge badge-primary\" style=\"background: red;color: #fff;\">Cancelled</span>
                                      {% elseif order.orderStatus == 'completed' %} 
                                      <span class=\"badge badge-primary\" style=\"background: green;color: #fff;\">Completed</span>
                                      {% else %}
                                      <span class=\"badge badge-primary\">{{ order.orderStatus }}</span> 
                                      {% endif %}&nbsp;<br>
<span class=\"badge badge-primary\" style=\"background: red;color: #fff;font-size:10px;\">Delayed</span>

                                        </small>
                                    </td>
                                    <td>
                                        <span style=\"font-size:10px;font-weight:bold;\">  Tray.No :{% if order.tray == '0' or order.tray == '' or order.tray is not null %} Not Assigned {% else %} {{ order.tray|upper }} {% endif %}</span>
                                      <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('restaurant_orders_panel_update',{'id':order.id}) }}\">
                                        Update
                                      </a>
                                    </td>
                                </tr>
                                    {% endfor %}
                              </tbody>
                            </table> 
                          </div>
                        <!--ends-->
                      </div>
                  </div>

                  <div class=\"modal fade\" id=\"todoShowListItem\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                      <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                          <div class=\"modal-content\">
                              <div class=\"modal-body\">
                                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x close\" data-dismiss=\"modal\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
                                  <div class=\"compose-box\">
                                      <div class=\"compose-content\">
                                          <h5 class=\"task-heading\"></h5>
                                          <p class=\"task-text\"></p>
                                      </div>
                                  </div>
                              </div>
                              <div class=\"modal-footer\">
                                  <button class=\"btn\" data-dismiss=\"modal\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash\"><polyline points=\"3 6 5 6 21 6\"></polyline><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg> Close</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>                                    
      </div>

      <!-- Modal -->
      <div class=\"modal fade\" id=\"addTaskModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTaskModalTitle\" aria-hidden=\"true\">
          <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
              <div class=\"modal-content\">
                  <div class=\"modal-body\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x close\" data-dismiss=\"modal\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
                      <div class=\"compose-box\">
                          <div class=\"compose-content\" id=\"addTaskModalTitle\">
                              <h5 class=\"\">Add Task</h5>
                              <form>
                                  <div class=\"row\">
                                      <div class=\"col-md-12\">
                                          <div class=\"d-flex mail-to mb-4\">
                                              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-3 flaticon-notes\"><path d=\"M12 20h9\"></path><path d=\"M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z\"></path></svg>
                                              <div class=\"w-100\">
                                                  <input id=\"task\" type=\"text\" placeholder=\"Task\" class=\"form-control form-control-sm\" name=\"task\">
                                                  <span class=\"validation-text\"></span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class=\"d-flex  mail-subject mb-4\">
                                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-file-text flaticon-menu-list\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path><polyline points=\"14 2 14 8 20 8\"></polyline><line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line><line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line><polyline points=\"10 9 9 9 8 9\"></polyline></svg>
                                      <div class=\"w-100\">
                                          <div id=\"taskdescription\" class=\"\"></div>
                                          <span class=\"validation-text\"></span>
                                      </div>
                                  </div>

                              </form>
                          </div>
                      </div>
                  </div>
                  <div class=\"modal-footer\">
                      <button class=\"btn\" data-dismiss=\"modal\"><i class=\"flaticon-cancel-12\"></i> Discard</button>
                      <button class=\"btn add-tsk\">Add Task</button>
                      <button class=\"btn edit-tsk\">Save</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
              
            <!--/div-->
{% endblock %}


{% block scripts %}

    <script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js
\"></script>
<script>

        c1 = \$('#style-2').DataTable({
                 \"order\": [[ 0, \"desc\" ]]

            
        });
        multiCheck(c1);
   
</script>
<script>
function postForm(status) {

     var date = \$('#orderdatepicker').val();
    var area = \$('#area').val();
    var time = \$('#time').val();
    var type = \$('.type').val();

   \$('#zero-config').DataTable({
            \"destroy\": true,
            \"oLanguage\": {
                \"oPaginate\": { \"sPrevious\": '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-left\"><line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line><polyline points=\"12 19 5 12 12 5\"></polyline></svg>', \"sNext\": '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-right\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line><polyline points=\"12 5 19 12 12 19\"></polyline></svg>' },
                \"sInfo\": \"Showing page _PAGE_ of _PAGES_\",
                \"sSearch\": '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-search\"><circle cx=\"11\" cy=\"11\" r=\"8\"></circle><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line></svg>',
                \"sSearchPlaceholder\": \"Search...\",
               \"sLengthMenu\": \"Results :  _MENU_\",
            },
            \"stripeClasses\": [],
            \"aaSorting\": [[0, 'desc']],
            \"lengthMenu\": [7, 10, 20, 50],
            \"pageLength\": 15,
            'ajax': { 
             url: '/app-manager/filter-order-list-ajax',
          data: {
            date :date, 
            area : area,
            time:time,
            type:type,
            status:status
          },
            'type': \"GET\",      },
            'fnDrawCallback': function()
            {
                 // \$(\"#myTable_length\").prepend('');
            },
          'columns': [
            { data: 'id' },
            { data: 'customerdetails' },
            { data: 'shipping' },
            { data: 'orderInfo' },
            { data: 'action' }
          ], 
        });

}

\$('#filter-submit').submit(function() {
   var status = \$('#orderstatus').val();
  
    postForm(status);
    return false;
});

\$(function() {
     status = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&')[1].split('=')[1];
    if(status == 'all'){
      status = '0';
    }
    postForm(status);
});






</script>

   <script>
   var status='';
  \$(document).ready(function() {
    
      status = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&')[1].split('=')[1];;
      var option = '';
      \$('.orderstatustype').html('');
      if(status == 'all' || status == 'received'){
                 var option = '<option value=\"received\">Received</option><option value=\"pick\">Assign Picker</option><option value=\"processing\">Processing</option><option value=\"ready\">Order ready</option><option value=\"dispatched\">Assign To Delivery Boy</option><option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
      }
                               
       if ( status == 'pick') {

            var option = '<option value=\"processing\">Processing</option><option value=\"ready\">Order ready</option><option value=\"dispatched\">Assign To Delivery Boy</option><option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
       }
       if(status == 'processing') {
            var option = '<option value=\"ready\">Order ready</option><option value=\"dispatched\">Assign To Delivery Boy</option><option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
       }
       if(status == 'ready') {
          var option = '<option value=\"ready\">Order ready</option><option value=\"dispatched\">Assign To Delivery Boy</option><option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
       }
       if(status == 'dispatched') {
         var option = ' <option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
       }
       if(status == 'onway') {
         var option = ' <option value=\"delivered\">Delivered</option><option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
       }
      if(status == 'delivered') {
          var option = '<option value=\"cancelled\">Cancelled</option><option value=\"completed\">Completed</option>';
                                 
      }
      if(status == 'completed'){
          var option = '<option value=\"completed\">Completed</option>';
                                 
      }
      if (status == 'cancelled'){
            var option = '<option value=\"cancelled\">Cancelled</option>';
                                
      }
      \$('.orderstatustype').append(option); 


         \$('#myTable').DataTable( {
                 \"order\": [[ 0, \"desc\" ]]

    } );
    });
\$('#filter').click(function(){
var datepicker =\$('#datepicker').val();
var area =\$('#area').val();
var time =\$('#time').val();
var out ={'area':area,'time':time,'date':datepicker};                      // alert(x);
\$.ajax({
    type: \"POST\",
    url: \"{{ path('restaurant_orders_list',{'status':status}) }}\",
    data: out,
    success: function (res, dataType) {

  \$('#tbody').empty();
  \$('#tbody').append(res);
          

    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
        alert('Error : ' + errorThrown);
    }
});
});

\$('#area').change(function() {  
var area=\$('#area').val();
var out ={'data':area};                      // alert(x);
\$.ajax({
    type: \"POST\",
    url: \"{{ path('get_time_by_location') }}\",
    data: out,
    success: function (res, dataType)
    {
time(res);
    },
   error: function (XMLHttpRequest, textStatus, errorThrown) {
    alert('Error : ' + errorThrown);
    }
});

        });
\$('#areas').change(function() {  
var area=\$('#areas').val();
var out ={'data':area};                      // alert(x);
\$.ajax({
    type: \"POST\",
    url: \"{{ path('get_time_by_location') }}\",
    data: out,
    success: function (res, dataType)
    {
times(res);
    },
   error: function (XMLHttpRequest, textStatus, errorThrown) {
    alert('Error : ' + errorThrown);
    }
});

        });
    \$(function() {
    jQuery(\"[name=selectThemAll]\").click(function(source) { 
        checkboxes = jQuery('.tst');
        for(var i in checkboxes){
            checkboxes[i].checked = source.target.checked;
        }
    });
});

    \$('.otype').change(function(){
var value=this.value;
if(value=='dispatched')
{
    // alert('delivery boy names come here!');
 \$('#dboy').show();
    \$('#dboy').html('<select class=\"form-control form-control-sm db\" name=\"delivery\"></select>&nbsp;&nbsp;&nbsp;');
    getDelivery();
}
else if(value=='pick')
{
    // alert('delivery boy names come here!');
 \$('#dboy').show();
    \$('#dboy').html('<select class=\"form-control form-control-sm db\" name=\"picker\"></select>nbsp;nbsp;');
    getPicker();
}
else
{
 \$('#dboy').hide();   
}
});


function getDelivery()
{
var out ={'branch':{{ app.user.branch }}};                      // alert(x);
\$.ajax({
    type: \"POST\",
    url: \"/restaurant-manager/get-del\",
    data: out,
    success: function (res, dataType) {
 // console.log('{{ path('manage_restaurant_get_cat') }}');
send(res);
          
// console.log(datas);

    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
        alert('Error : ' + errorThrown);
    }
});
}
function getPicker()
{
var out ={'branch':{{ app.user.branch }}};                      // alert(x);
\$.ajax({
    type: \"POST\",
    url: \"/restaurant-manager/get-picker\",
    data: out,
    success: function (res, dataType) {
 // console.log('{{ path('manage_restaurant_get_cat') }}');
send(res);
          
// console.log(datas);

    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
        alert('Error : ' + errorThrown);
    }
});
}
function send(myObjects)
{
\$('.subcat').html('');
\$.each(myObjects, function () {
    \$('.db').append('<option value=\"'+this.id+'\">'+this.value+'</option>');
      
    });            
   }
   function time(myObjects)
{
  \$('#time').html('');
\$('#time').append('<option value=\"0\">Select Time</option>');
\$.each(myObjects, function () {
    \$('#time').append('<option value=\"'+this.start+' - '+this.end+'\">'+this.start+' - '+this.end+'</option>');
      
    });            
   }
      function times(myObjects)
{
  \$('#times').html('');
\$('#times').append('<option value=\"0\">Select Time</option>');
\$.each(myObjects, function () {
    \$('#times').append('<option value=\"'+this.start+' - '+this.end+'\">'+this.start+' - '+this.end+'</option>');
      
    });            
   }

        \$(function() {
            \$( \"#orderdatepicker\" ).datepicker({
                  dateFormat:\"dd-mm-yy\",
            });
        });
</script>
{% endblock %}
", "AppBundle:Admin:Orders/orderList.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Orders/orderList.html.twig");
    }
}
