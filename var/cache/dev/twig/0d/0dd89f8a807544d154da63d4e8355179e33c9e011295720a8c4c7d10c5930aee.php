<?php

/* AppBundle:Admin:Orders/create.html.twig */
class __TwigTemplate_58d7e7d4c9beebde8a6ecca7bcd83b85b741879c31d12d7b55807b815b68c839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Orders/create.html.twig", 1);
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
        $__internal_ef4cfdb6ce484880e224abb7f96e2dcd2e20a4e06d85733930c21f4f9a1aeb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4cfdb6ce484880e224abb7f96e2dcd2e20a4e06d85733930c21f4f9a1aeb7e->enter($__internal_ef4cfdb6ce484880e224abb7f96e2dcd2e20a4e06d85733930c21f4f9a1aeb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/create.html.twig"));

        $__internal_38405e1e54ba0f6178bc0b45c5db1046b4ae1cd9fc8127126a8c87b2fc61d621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38405e1e54ba0f6178bc0b45c5db1046b4ae1cd9fc8127126a8c87b2fc61d621->enter($__internal_38405e1e54ba0f6178bc0b45c5db1046b4ae1cd9fc8127126a8c87b2fc61d621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef4cfdb6ce484880e224abb7f96e2dcd2e20a4e06d85733930c21f4f9a1aeb7e->leave($__internal_ef4cfdb6ce484880e224abb7f96e2dcd2e20a4e06d85733930c21f4f9a1aeb7e_prof);

        
        $__internal_38405e1e54ba0f6178bc0b45c5db1046b4ae1cd9fc8127126a8c87b2fc61d621->leave($__internal_38405e1e54ba0f6178bc0b45c5db1046b4ae1cd9fc8127126a8c87b2fc61d621_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aa688a80e1ad3c5bf6e745fa76e79fafef4c404fb89c70368520872946ac297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa688a80e1ad3c5bf6e745fa76e79fafef4c404fb89c70368520872946ac297->enter($__internal_3aa688a80e1ad3c5bf6e745fa76e79fafef4c404fb89c70368520872946ac297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fa08ff76e7b927610f3462ef3199f69834a8b193c3baa5402cf2a579c600585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa08ff76e7b927610f3462ef3199f69834a8b193c3baa5402cf2a579c600585->enter($__internal_6fa08ff76e7b927610f3462ef3199f69834a8b193c3baa5402cf2a579c600585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<link href = \"https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css\"
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
<style type=\"text/css\">
.ss
{
  background: #fff0;
  color: #000 !important;
  border: none;
  box-shadow: none;
}
.select1{
 padding: 7px 16px;
}
.card-header{
  background-color: #fff;
  border-color: #fff;
}
.card-header section > div.collapsed {
  color: #000;
}

select.info {
  height: calc(1.1em + 1.2rem + 1px) !important;

  /* styling */
  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}

.form-control.form-control-sm {
  padding: 6px 16px;
}

select.classic {
  background-image:
  linear-gradient(45deg, transparent 50%, #000 50%),
  linear-gradient(135deg, #000 50%, transparent 50%),
  linear-gradient(to right, #c7c7c7, #c7c7c7);
  background-position:
  calc(100% - 20px) calc(1em + 2px),
  calc(100% - 15px) calc(1em + 2px),
  100% 0;
  background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
  background-repeat: no-repeat;
}

select.classic:focus {
  background-image:
  linear-gradient(45deg, #000 50%, transparent 50%),
  linear-gradient(135deg, transparent 50%, #000 50%),
  linear-gradient(to right, #c7c7c7, #c7c7c7);
  background-position:
  calc(100% - 15px) 1em,
  calc(100% - 20px) 1em,
  100% 0;
  background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
  background-repeat: no-repeat;
  border-color: grey;
  outline: 0;
}
.right-sidebar-option {
  background: #f1f2f3;
}

.card-header section > div:not(.collapsed) {
  color: #000;
}
.right-sidebar-card {
  margin-bottom:0;
  border-radius:0;
}

.select2-container .select2-selection--single{
  height: 100% !important;
}

select.form-control.form-control-sm.fa.fa-angle-down {
  background: #E2A03F;
  color: #fff !important;
}

.submit-btn {
  background: #2F4ACA;
  border: none;
  height: 33px;
  color: #ffff;
  font-size: 15px;
  font-weight: 700;
}
div#user {
    display: none;
    color: #3f4870;
}
</style>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js\" integrity=\"sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css\" integrity=\"sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=\" crossorigin=\"anonymous\" />
";
        // line 133
        echo "<!-- Modal -->
<form action=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("do_order");
        echo "\" method=\"post\">
  <div class=\"layout-px-spacing\">
    <div class=\"row layout-top-spacing\">
      <!--col-md-9-->
      <div class=\"col-md-9\">
        <div class=\"row\">
          <div class=\"col-md-6 mb-4\">
            <div class=\"card h-100\">
              <div class=\"row form-row\">
                <div class=\"col-md-12 form-group\">
                  <div class=\"card-body\">
                    <div class=\"input-group\">
                      <select class=\"form-control form-control-sm  xxx\" onchange=\"customer(this.value);\" name=\"userid\" id=\"grocbay\">
                        <option><i class=\"fas fa-search\"></i>Search Customer</option>
                        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer"] ?? $this->getContext($context, "customer")));
        foreach ($context['_seq'] as $context["_key"] => $context["custom"]) {
            // line 149
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["custom"], "id", array()), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["custom"], "username", array()), "html", null, true);
            echo "\" data-mobile=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["custom"], "mobileNo", array()), "html", null, true);
            echo "\"  data-email=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["custom"], "email", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["custom"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["custom"], "username", array()), "html", null, true);
            echo "
                        </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                      </select>
                      
                    </div>
                  </div>
                  <div id=\"user\">
                    <div class=\"col-sm-9 card-body\" >
                      <div class=\"customer-info-container\">

                       
                        <input type=\"hidden\" name=\"username\" class=\"username\">

                        <span class=\"name\"></span><br>
                        <span class=\"mobile\"></span><br>

                       <span class=\"email\"></span><br>

                                        </div>
                  </div>
                  <div class=\"col-sm-2\">
                  </div></div>



                </div>  

                <div class=\"col-md-12 form-group\">
                  <div class=\"card-body\">
                    <!--address-->

                    <div class=\"input-group mb-3\">
                      <select class=\"form-control adds form-control-sm\" name=\"addressid\">
                      </select>
                    </div>
                    <div class=\"form-group\">
  <label>Delivery Address</label>
  <textarea class=\"form-control daddress\" rows=\"3\" name=\"address\" required=\"\"></textarea>
 </div>


<select class=\"form-control  form-control-sm\" id=\"type\" style=\"display:none;\" name=\"type\">
  <option value=\"0\">New Order</option>
  <option value=\"1\">Merge Order</option>
</select>

 <br>


<select class=\"form-control  form-control-sm\" id=\"orderidlist\" style=\"display:none;\"  name=\"orderid\">
</select>

                  </div>
                  <!--end-->
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-6 mb-4\">
            <div class=\"card h-100\">
              <div class=\"card-body\">
                <div class=\"form-group col-md-12\">
                  <h5 class=\"mb-4\">Payment Details</h5>
                  <div class=\"row form-row\">
                    <div class=\"col-md-12 form-group\">
                      <select class=\"form-control form-control-sm classic info\" name=\"paymentType\" >
                        <option value=\"cod\">Cash On Delivery</option>
                        <option value=\"sod\">Swipe On Delivery</option>
                        <option value=\"online\">online Payment</option>
                      </select>
                    </div>
                  </div>
                  <div class=\"row form-row\">
                    <div class=\"col-md-12 form-group\">
                      <select class=\"form-control form-control-sm classic info\" name=\"orderType\">
                        <option value=\"delivery\">Home Delivery</option>
                        <option value=\"express\">Express Delivery</option>
                      </select>
                    </div>
                  </div>
                  <div class=\"row form-row\">
                    <div class=\"col-md-12 form-group\">
                     <select class=\"form-control form-control-sm classic info\" name=\"area\" id=\"locationName\">
                      <option value=\"\">Select Area</option>
                      ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["location"] ?? $this->getContext($context, "location")));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 236
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loc"], "id", array()), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loc"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loc"], "title", array()), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                    </select>
                  </div>
                </div>
                <div class=\"row form-row\">
                  <div class=\"col-md-12 form-group\">
                    <select class=\"form-control form-control-sm classic info\" name=\"slot\" id=\"locationSlot\">
                      <option value=\"\">Slots</option>
                      
                    </select>
                  </div>
                </div>
                <input type=\"hidden\" name=\"fixtime\" id=\"fixtime\">
                <input type=\"hidden\" name=\"fixdate\" id=\"fixdate\">
                <input type=\"hidden\" name=\"area\" id=\"area\">
<div class=\"form-group\">
  <label>Note</label>
  <textarea class=\"form-control\" rows=\"3\" name=\"note\"></textarea>
 </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-12 mb-4\">        
          <div class=\"card\">
           <div class=\"card-body\">
             <h5 class=\"mb-4\">Order Items</h5>

                   <!--div class=\"col-md-12 text-right\">
                      <a href=\"#\" class=\"btn btn-primary btn-sm mb-4\"  data-toggle=\"modal\" data-target=\"#uploadCSV\">Add Items</a> 
                    </div-->
                    <div class=\"search-input-group-style input-group mb-3\">
                    
                      <select class=\"form-control\" id=\"vars\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                         ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? $this->getContext($context, "menuItems")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 272
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo "\" data-stock=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "stock", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "mid", array()), "html", null, true);
            echo "\" data-itemName=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "itemName", array()), "html", null, true);
            echo "\"  data-var=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "price", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "itemName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo " </option>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                      </select>
                    </div>
                    <div class=\"col-md-12\">
                      <div class=\"table-responsive m-t-10 row table-show\" style=\"display:block;\">
                        <table id=\"myTable\" class=\"table table-hovered\">
                          <thead>
                            <tr>
                              <th>Item Name</th>
                              <th>Price Variation</th>
                              <th>price</th>
                              <th>Quantity</th>
                              <th>Sub Total</th>
                              <th>#</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th colspan=\"5\" class=\"text-right\">Sub Total</th>
                              <th> <span class=\"sums\">0</span></th>
                            </tr>
                            <tr>
                              <th colspan=\"5\" class=\"text-right\">Add a Discount</th>
                              <th>0</th>
                            </tr>
                            <tr>
                              <th colspan=\"5\" class=\"text-right\">Add a Coupon</th>
                              <th>0</th>
                            </tr>
                            <tr>
                              <th colspan=\"5\" class=\"text-right\">Delivery Charge</th>
                              <th> <span class=\"delivery\">0</span></th>
                            </tr>
                            <tr>
                              <th colspan=\"5\" class=\"text-right\">Grand Total</th>
                              <th> <span class=\"sums\">0</span>
                                 <input type=\"hidden\" value=\"\" name=\"gtotal\" class=\"gtotal\" required=\"\"></th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 mb-4\">
           <div class=\"h-100\">
            <div id=\"toggleAccordion\">
              
              <div class=\"card right-sidebar-card\">
                <div class=\"card-header\" id=\"headingOne1\">
                  <section class=\"mb-0 mt-0\">

                    <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionOne\" aria-expanded=\"true\" aria-controls=\"defaultAccordionOne\">
                      Order Info <div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                    </div>
                  </section>
                </div>
                <div id=\"defaultAccordionOnes\" class=\"collapse\" aria-labelledby=\"headingOne1\" data-parent=\"#toggleAccordion\">
                  <div class=\"card-body right-sidebar-option\">
                    <div class=\"\">
                      <p style=\"\"><b>Ordered on:</b></p>
                      <p>12-12-2020  | 10: 55 AM</p>
                    </div>
                    <div>
                     <p style=\"\"><b>Transaction Id:</b></p>
                     <p>#3333333</p>
                   </div>
                   <div>
                     <p style=\"\"><b>Tray Number:</b></p>
                     <p>3333333</p>
                   </div>
                              <!-- <select class=\"form-control form-control-sm\" name=\"payment\">
                                  <option value=\"cod\">Cash On Delivery</option>
                                  <option value=\"sod\">Swipe On Delivery</option>
                                  <option value=\"online\">online Payment</option>
                                </select> -->
                              </div>
                            </div>
                          </div>
                          <div class=\"card right-sidebar-card\">
                            <div class=\"card-header\" id=\"headingTwo1\">
                              <section class=\"mb-0 mt-0\">
                                <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionTwo\" aria-expanded=\"true\" aria-controls=\"defaultAccordionTwo\">
                                  Order Status<div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                                </div>
                              </section>
                            </div>
                            <div id=\"defaultAccordionTwo1\" class=\"collapse\" aria-labelledby=\"headingTwo1\" data-parent=\"#toggleAccordion\">
                              <div class=\"card-body right-sidebar-option\">
                                
                              </div>
                            </div>
                          </div>
                          <div class=\"card right-sidebar-card\">
                            <div class=\"card-header\" id=\"headingThree1\">
                              <section class=\"mb-0 mt-0\">
                                <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionThree\" aria-expanded=\"false\" aria-controls=\"defaultAccordionThree1\">
                                  Assign Task To <div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                                </div>
                              </section>
                            </div>
                            <div id=\"defaultAccordionThree\" class=\"collapse\" aria-labelledby=\"headingThree1\" data-parent=\"#toggleAccordions\">
                              <div class=\"card-body right-sidebar-option\">
                               <div class=\"row form-row\">
                                <div class=\"col-md-12 form-group\">
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                 <input type=\"submit\" name=\"url\" style=\" /* color: #fff; */font-size: 15px;font-weight: 800;
\" class=\"mb-2 btn-block btn btn-primary\" value=\"Create Order\">
                      
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>


            </form>               
            ";
        // line 410
        echo "            ";
        
        $__internal_6fa08ff76e7b927610f3462ef3199f69834a8b193c3baa5402cf2a579c600585->leave($__internal_6fa08ff76e7b927610f3462ef3199f69834a8b193c3baa5402cf2a579c600585_prof);

        
        $__internal_3aa688a80e1ad3c5bf6e745fa76e79fafef4c404fb89c70368520872946ac297->leave($__internal_3aa688a80e1ad3c5bf6e745fa76e79fafef4c404fb89c70368520872946ac297_prof);

    }

    // line 412
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_25a7b121322ca291193ca8bc70219ff857a9c518c637ae5e0ecb4e41e588250c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a7b121322ca291193ca8bc70219ff857a9c518c637ae5e0ecb4e41e588250c->enter($__internal_25a7b121322ca291193ca8bc70219ff857a9c518c637ae5e0ecb4e41e588250c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_8adde036191ef03ea5537076c6367004eb6cb189383fba5ff2d0b06bc020cbfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adde036191ef03ea5537076c6367004eb6cb189383fba5ff2d0b06bc020cbfe->enter($__internal_8adde036191ef03ea5537076c6367004eb6cb189383fba5ff2d0b06bc020cbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 413
        echo "
            <script src=\"/admin/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
            <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css\" rel=\"stylesheet\" />
            <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js\"></script>
            <script>

            \$('#grocbay').select2({
              selectOnClose: true
            });

            \$('#vars').select2({
              selectOnClose: true
            });

            function send(myObjects)
            {

              \$('.var').html('');
              \$.each(myObjects, function () {
                \$('.var').append('<option value=\"'+this.id+'\"  data-name=\"'+this.name+'\"  data-price=\"'+this.price+'\" data-stock=\"'+this.stock+'\">'+this.name+'</option>');

              });            
            }
            function address(myObjects)
            {
              \$('.adds').html('');
              \$.each(myObjects,function () {
                \$('.adds').append('<option value=\"'+this.id+'\"  data-addressType=\"'+this.addressType+'\"  data-address=\"'+this.address+'\" data-name=\"'+this.name+'\">'+this.address+'('+this.addressType+')</option>');    
                \$('.address').html(this.address);
                \$('.daddress').val(this.address);


              });            

            }
            \$('.adds').change(function(){
             \$('.address').html(\$('.adds option:selected').attr('data-address'));
             \$('.daddress').val(\$('.adds option:selected').attr('data-address'));


           });

\$('#type').change(function(){
var type = \$('#type').val();
if(type == 0)
{
  return false;
}
var id = \$('#grocbay').val();
var out ={'id':id};                      // alert(x);
    \$.ajax({
      type: \"POST\",
      url: \"";
        // line 465
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_user_order_id");
        echo "\",
      data: out,
      success: function (res, dataType) {
 orderid(res);
},
error: function (XMLHttpRequest, textStatus, errorThrown) {
  alert('Error : ' + errorThrown);
}
});
});
            function orderid(myObjects)
            {
              \$('#orderidlist').show();
              \$('#orderidlist').html('');
              \$('#orderidlist').html('<option>Select Order Id to Merge</select>');
              \$.each(myObjects,function () {
                \$('#orderidlist').append('<option value=\"'+this.id+'\">'+this.id+'</option>');   
              });
            }

            function customer(x)
            {
              \$('.basic').show();
              \$('.table-show').show();
              \$('#user').show();
              \$('#type').show();


              \$('.name').html(\$('.xxx option:selected').attr('data-name'));
              \$('.username').val(\$('.xxx option:selected').attr('data-name'));
              \$('.email').html(\$('.xxx option:selected').attr('data-email'));
              \$('.mobile').html(\$('.xxx option:selected').attr('data-mobile'));

    var out ={'data':x};                      // alert(x);
    \$.ajax({
      type: \"POST\",
      url: \"";
        // line 501
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_customer_data");
        echo "\",
      data: out,
      success: function (res, dataType) {
 // console.log('";
        // line 504
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_get_cat");
        echo "');
 address(res);
},
error: function (XMLHttpRequest, textStatus, errorThrown) {
  alert('Error : ' + errorThrown);
}
});
}

function removeVariant(obj){
// \$(this).attr(\"data-usr\" , '');

\$(obj).parent().parent().remove();
var sum = 0;
\$('.sum').each(function() {
 sum += Number(\$(this).val());
});
\$('.sums').html(Math.round(sum * 1.19));
\$('.total').val(sum);
\$('.gtotal').val(sum);

}
\$(document).ready(function() {
  \$('#myTables').DataTable();
});
\$(document).ready(function () {
  \$('.select').selectize({
    sortField: 'text'
  });
  \$('.select1').selectize({
    sortField: 'text'
  });
});



\$(document).ready(function () {
  \$('#select-state').change(function(){
    var id=\$('#select-state').val();
var out ={'data':id};                      // alert(x);
\$.ajax({
  type: \"POST\",
  url: \"";
        // line 546
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_get_var");
        echo "\",
  data: out,
  success: function (res, dataType) {
 // console.log('";
        // line 549
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manage_restaurant_get_cat");
        echo "');
 send(res);
},
error: function (XMLHttpRequest, textStatus, errorThrown) {
  alert('Error : ' + errorThrown);
}
});


});


  \$('#vars').change(function () {
    var selid=\$('#vars option:selected').attr('data-id');
    var selvalue=\$('#vars').html();
    var varid=\$('#vars').val();
    var varvalue=\$('#vars').text();
    // var quantity=1;
    var stock=\$('#vars option:selected').attr('data-stock');
    var itemName=\$('#vars option:selected').attr('data-itemName');
    var varname=\$('#vars option:selected').attr('data-var');
// alert(varid);
  var quantity = prompt(\"Please Enter Quantity for \"+ itemName +\"   [Stock = \"+stock+\"]\", \"1\");

if(quantity=='' || quantity=='0')
{
  alert('please enter quantity!');
  return false;
}
if(stock=='null' || stock<1)
{
  alert('out of stock!');
  return false;
}

var vprice=\$('#vars option:selected').attr('data-price');

\$('#myTable').append('<tr><td><input type=\"hidden\" value=\"'+selid+'\" name=\"selid[]\">'+itemName+'<input type=\"hidden\" value=\"'+varid+'\" name=\"varid[]\"></td>><td>'+varname+'</td><td><input type=\"hidden\" value=\"'+vprice+'\" name=\"price[]\">'+vprice+'</td><td><input type=\"hidden\" value=\"'+quantity+'\" name=\"selqty[]\">'+quantity+'</td><td><input type=\"hidden\" value=\"'+quantity*vprice+'\" name=\"tq[]\" class=\"sum\">'+quantity*vprice+'</td><td><button class=\"btn btn-danger ss\" type=\"button\" class=\"remove\" onclick=\"removeVariant(this)\"><i class=\"fa fa-trash\"></i></button></td></tr>'); 
\$('#quantity').val('');
\$('#vars').val('');
  // \$('#select-state').val('');

  var sum = 0;
  \$('.sum').each(function() {
   sum += Number(\$(this).val());
 });
  \$('.sums').html(Math.round(sum * 1.19));

  \$('.total').val(sum);
  \$('.gtotal').val(sum);
});
  \$(\".remove a\").click(function() {

    // alert('hehehehe');
  });
});
\$('#locationSlot').change(function(){
      var id=\$('#locationSlot').val();
    var date=\$('#locationSlot option:selected').attr('data-date');
    var time=\$('#locationSlot option:selected').attr('data-time');
        \$('#fixdate').val(date);
        \$('#fixtime').val(time);

});
  \$('#locationName').change(function(){
    var id=\$('#locationName').val();
        var area=\$('#locationName option:selected').attr('data-name');
        \$('#area').val(area);

    // alert(id);
var out ={'id':id};                      // alert(x);
\$.ajax({
  type: \"POST\",
  url: \"";
        // line 622
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_slot_by_id");
        echo "\",
  data: out,
  success: function (res, dataType) {
  \$('#locationSlot').html('<option>Select Slot</option>');
              \$.each(res,function () {
                \$('#locationSlot').append('<option value=\"'+this.time+'\"  data-time=\"'+this.time+'\"  data-date=\"'+this.date+'\" >'+this.time+' on '+this.date+'</option>');   
                }); 
},
error: function (XMLHttpRequest, textStatus, errorThrown) {
  alert('Error : ' + errorThrown);
}
});
});

</script>

";
        
        $__internal_8adde036191ef03ea5537076c6367004eb6cb189383fba5ff2d0b06bc020cbfe->leave($__internal_8adde036191ef03ea5537076c6367004eb6cb189383fba5ff2d0b06bc020cbfe_prof);

        
        $__internal_25a7b121322ca291193ca8bc70219ff857a9c518c637ae5e0ecb4e41e588250c->leave($__internal_25a7b121322ca291193ca8bc70219ff857a9c518c637ae5e0ecb4e41e588250c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Orders/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  770 => 622,  694 => 549,  688 => 546,  643 => 504,  637 => 501,  598 => 465,  544 => 413,  535 => 412,  525 => 410,  388 => 274,  365 => 272,  361 => 271,  326 => 238,  313 => 236,  309 => 235,  224 => 152,  204 => 149,  200 => 148,  183 => 134,  180 => 133,  50 => 4,  41 => 3,  11 => 1,);
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
<style type=\"text/css\">
.ss
{
  background: #fff0;
  color: #000 !important;
  border: none;
  box-shadow: none;
}
.select1{
 padding: 7px 16px;
}
.card-header{
  background-color: #fff;
  border-color: #fff;
}
.card-header section > div.collapsed {
  color: #000;
}

select.info {
  height: calc(1.1em + 1.2rem + 1px) !important;

  /* styling */
  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}

.form-control.form-control-sm {
  padding: 6px 16px;
}

select.classic {
  background-image:
  linear-gradient(45deg, transparent 50%, #000 50%),
  linear-gradient(135deg, #000 50%, transparent 50%),
  linear-gradient(to right, #c7c7c7, #c7c7c7);
  background-position:
  calc(100% - 20px) calc(1em + 2px),
  calc(100% - 15px) calc(1em + 2px),
  100% 0;
  background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
  background-repeat: no-repeat;
}

select.classic:focus {
  background-image:
  linear-gradient(45deg, #000 50%, transparent 50%),
  linear-gradient(135deg, transparent 50%, #000 50%),
  linear-gradient(to right, #c7c7c7, #c7c7c7);
  background-position:
  calc(100% - 15px) 1em,
  calc(100% - 20px) 1em,
  100% 0;
  background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
  background-repeat: no-repeat;
  border-color: grey;
  outline: 0;
}
.right-sidebar-option {
  background: #f1f2f3;
}

.card-header section > div:not(.collapsed) {
  color: #000;
}
.right-sidebar-card {
  margin-bottom:0;
  border-radius:0;
}

.select2-container .select2-selection--single{
  height: 100% !important;
}

select.form-control.form-control-sm.fa.fa-angle-down {
  background: #E2A03F;
  color: #fff !important;
}

.submit-btn {
  background: #2F4ACA;
  border: none;
  height: 33px;
  color: #ffff;
  font-size: 15px;
  font-weight: 700;
}
div#user {
    display: none;
    color: #3f4870;
}
</style>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js\" integrity=\"sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css\" integrity=\"sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=\" crossorigin=\"anonymous\" />
{# {{ dump(res) }} #}
<!-- Modal -->
<form action=\"{{ path('do_order') }}\" method=\"post\">
  <div class=\"layout-px-spacing\">
    <div class=\"row layout-top-spacing\">
      <!--col-md-9-->
      <div class=\"col-md-9\">
        <div class=\"row\">
          <div class=\"col-md-6 mb-4\">
            <div class=\"card h-100\">
              <div class=\"row form-row\">
                <div class=\"col-md-12 form-group\">
                  <div class=\"card-body\">
                    <div class=\"input-group\">
                      <select class=\"form-control form-control-sm  xxx\" onchange=\"customer(this.value);\" name=\"userid\" id=\"grocbay\">
                        <option><i class=\"fas fa-search\"></i>Search Customer</option>
                        {% for custom in customer %}
                        <option value=\"{{ custom.id }}\" data-name=\"{{ custom.username }}\" data-mobile=\"{{ custom.mobileNo }}\"  data-email=\"{{ custom.email }}\" data-id=\"{{ custom.id }}\" >{{ custom.username }}
                        </option>
                        {% endfor %}
                      </select>
                      
                    </div>
                  </div>
                  <div id=\"user\">
                    <div class=\"col-sm-9 card-body\" >
                      <div class=\"customer-info-container\">

                       
                        <input type=\"hidden\" name=\"username\" class=\"username\">

                        <span class=\"name\"></span><br>
                        <span class=\"mobile\"></span><br>

                       <span class=\"email\"></span><br>

                                        </div>
                  </div>
                  <div class=\"col-sm-2\">
                  </div></div>



                </div>  

                <div class=\"col-md-12 form-group\">
                  <div class=\"card-body\">
                    <!--address-->

                    <div class=\"input-group mb-3\">
                      <select class=\"form-control adds form-control-sm\" name=\"addressid\">
                      </select>
                    </div>
                    <div class=\"form-group\">
  <label>Delivery Address</label>
  <textarea class=\"form-control daddress\" rows=\"3\" name=\"address\" required=\"\"></textarea>
 </div>


<select class=\"form-control  form-control-sm\" id=\"type\" style=\"display:none;\" name=\"type\">
  <option value=\"0\">New Order</option>
  <option value=\"1\">Merge Order</option>
</select>

 <br>


<select class=\"form-control  form-control-sm\" id=\"orderidlist\" style=\"display:none;\"  name=\"orderid\">
</select>

                  </div>
                  <!--end-->
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-6 mb-4\">
            <div class=\"card h-100\">
              <div class=\"card-body\">
                <div class=\"form-group col-md-12\">
                  <h5 class=\"mb-4\">Payment Details</h5>
                  <div class=\"row form-row\">
                    <div class=\"col-md-12 form-group\">
                      <select class=\"form-control form-control-sm classic info\" name=\"paymentType\" >
                        <option value=\"cod\">Cash On Delivery</option>
                        <option value=\"sod\">Swipe On Delivery</option>
                        <option value=\"online\">online Payment</option>
                      </select>
                    </div>
                  </div>
                  <div class=\"row form-row\">
                    <div class=\"col-md-12 form-group\">
                      <select class=\"form-control form-control-sm classic info\" name=\"orderType\">
                        <option value=\"delivery\">Home Delivery</option>
                        <option value=\"express\">Express Delivery</option>
                      </select>
                    </div>
                  </div>
                  <div class=\"row form-row\">
                    <div class=\"col-md-12 form-group\">
                     <select class=\"form-control form-control-sm classic info\" name=\"area\" id=\"locationName\">
                      <option value=\"\">Select Area</option>
                      {% for loc in location %}
                      <option value=\"{{ loc.id }}\" data-name=\"{{ loc.title }}\">{{ loc.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row form-row\">
                  <div class=\"col-md-12 form-group\">
                    <select class=\"form-control form-control-sm classic info\" name=\"slot\" id=\"locationSlot\">
                      <option value=\"\">Slots</option>
                      
                    </select>
                  </div>
                </div>
                <input type=\"hidden\" name=\"fixtime\" id=\"fixtime\">
                <input type=\"hidden\" name=\"fixdate\" id=\"fixdate\">
                <input type=\"hidden\" name=\"area\" id=\"area\">
<div class=\"form-group\">
  <label>Note</label>
  <textarea class=\"form-control\" rows=\"3\" name=\"note\"></textarea>
 </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-12 mb-4\">        
          <div class=\"card\">
           <div class=\"card-body\">
             <h5 class=\"mb-4\">Order Items</h5>

                   <!--div class=\"col-md-12 text-right\">
                      <a href=\"#\" class=\"btn btn-primary btn-sm mb-4\"  data-toggle=\"modal\" data-target=\"#uploadCSV\">Add Items</a> 
                    </div-->
                    <div class=\"search-input-group-style input-group mb-3\">
                    
                      <select class=\"form-control\" id=\"vars\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                         {% for menu in menuItems %}
      <option value=\"{{ menu.id }}\" data-stock=\"{{ menu.stock }}\" data-id=\"{{ menu.mid }}\" data-itemName=\"{{ menu.itemName }}\"  data-var=\"{{ menu.name }}\" data-price=\"{{ menu.price }}\">{{ menu.itemName }} - {{ menu.name }} </option>
         {% endfor %}
                      </select>
                    </div>
                    <div class=\"col-md-12\">
                      <div class=\"table-responsive m-t-10 row table-show\" style=\"display:block;\">
                        <table id=\"myTable\" class=\"table table-hovered\">
                          <thead>
                            <tr>
                              <th>Item Name</th>
                              <th>Price Variation</th>
                              <th>price</th>
                              <th>Quantity</th>
                              <th>Sub Total</th>
                              <th>#</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th colspan=\"5\" class=\"text-right\">Sub Total</th>
                              <th> <span class=\"sums\">0</span></th>
                            </tr>
                            <tr>
                              <th colspan=\"5\" class=\"text-right\">Add a Discount</th>
                              <th>0</th>
                            </tr>
                            <tr>
                              <th colspan=\"5\" class=\"text-right\">Add a Coupon</th>
                              <th>0</th>
                            </tr>
                            <tr>
                              <th colspan=\"5\" class=\"text-right\">Delivery Charge</th>
                              <th> <span class=\"delivery\">0</span></th>
                            </tr>
                            <tr>
                              <th colspan=\"5\" class=\"text-right\">Grand Total</th>
                              <th> <span class=\"sums\">0</span>
                                 <input type=\"hidden\" value=\"\" name=\"gtotal\" class=\"gtotal\" required=\"\"></th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-3 mb-4\">
           <div class=\"h-100\">
            <div id=\"toggleAccordion\">
              
              <div class=\"card right-sidebar-card\">
                <div class=\"card-header\" id=\"headingOne1\">
                  <section class=\"mb-0 mt-0\">

                    <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionOne\" aria-expanded=\"true\" aria-controls=\"defaultAccordionOne\">
                      Order Info <div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                    </div>
                  </section>
                </div>
                <div id=\"defaultAccordionOnes\" class=\"collapse\" aria-labelledby=\"headingOne1\" data-parent=\"#toggleAccordion\">
                  <div class=\"card-body right-sidebar-option\">
                    <div class=\"\">
                      <p style=\"\"><b>Ordered on:</b></p>
                      <p>12-12-2020  | 10: 55 AM</p>
                    </div>
                    <div>
                     <p style=\"\"><b>Transaction Id:</b></p>
                     <p>#3333333</p>
                   </div>
                   <div>
                     <p style=\"\"><b>Tray Number:</b></p>
                     <p>3333333</p>
                   </div>
                              <!-- <select class=\"form-control form-control-sm\" name=\"payment\">
                                  <option value=\"cod\">Cash On Delivery</option>
                                  <option value=\"sod\">Swipe On Delivery</option>
                                  <option value=\"online\">online Payment</option>
                                </select> -->
                              </div>
                            </div>
                          </div>
                          <div class=\"card right-sidebar-card\">
                            <div class=\"card-header\" id=\"headingTwo1\">
                              <section class=\"mb-0 mt-0\">
                                <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionTwo\" aria-expanded=\"true\" aria-controls=\"defaultAccordionTwo\">
                                  Order Status<div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                                </div>
                              </section>
                            </div>
                            <div id=\"defaultAccordionTwo1\" class=\"collapse\" aria-labelledby=\"headingTwo1\" data-parent=\"#toggleAccordion\">
                              <div class=\"card-body right-sidebar-option\">
                                
                              </div>
                            </div>
                          </div>
                          <div class=\"card right-sidebar-card\">
                            <div class=\"card-header\" id=\"headingThree1\">
                              <section class=\"mb-0 mt-0\">
                                <div role=\"menu\" class=\"collapsed\" data-toggle=\"collapse\" data-target=\"#defaultAccordionThree\" aria-expanded=\"false\" aria-controls=\"defaultAccordionThree1\">
                                  Assign Task To <div class=\"icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-down\"><polyline points=\"6 9 12 15 18 9\"></polyline></svg></div>
                                </div>
                              </section>
                            </div>
                            <div id=\"defaultAccordionThree\" class=\"collapse\" aria-labelledby=\"headingThree1\" data-parent=\"#toggleAccordions\">
                              <div class=\"card-body right-sidebar-option\">
                               <div class=\"row form-row\">
                                <div class=\"col-md-12 form-group\">
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                 <input type=\"submit\" name=\"url\" style=\" /* color: #fff; */font-size: 15px;font-weight: 800;
\" class=\"mb-2 btn-block btn btn-primary\" value=\"Create Order\">
                      
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>


            </form>               
            {# end modal #}
            {% endblock %}

            {% block scripts %}

            <script src=\"/admin/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
            <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css\" rel=\"stylesheet\" />
            <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js\"></script>
            <script>

            \$('#grocbay').select2({
              selectOnClose: true
            });

            \$('#vars').select2({
              selectOnClose: true
            });

            function send(myObjects)
            {

              \$('.var').html('');
              \$.each(myObjects, function () {
                \$('.var').append('<option value=\"'+this.id+'\"  data-name=\"'+this.name+'\"  data-price=\"'+this.price+'\" data-stock=\"'+this.stock+'\">'+this.name+'</option>');

              });            
            }
            function address(myObjects)
            {
              \$('.adds').html('');
              \$.each(myObjects,function () {
                \$('.adds').append('<option value=\"'+this.id+'\"  data-addressType=\"'+this.addressType+'\"  data-address=\"'+this.address+'\" data-name=\"'+this.name+'\">'+this.address+'('+this.addressType+')</option>');    
                \$('.address').html(this.address);
                \$('.daddress').val(this.address);


              });            

            }
            \$('.adds').change(function(){
             \$('.address').html(\$('.adds option:selected').attr('data-address'));
             \$('.daddress').val(\$('.adds option:selected').attr('data-address'));


           });

\$('#type').change(function(){
var type = \$('#type').val();
if(type == 0)
{
  return false;
}
var id = \$('#grocbay').val();
var out ={'id':id};                      // alert(x);
    \$.ajax({
      type: \"POST\",
      url: \"{{ path('get_user_order_id') }}\",
      data: out,
      success: function (res, dataType) {
 orderid(res);
},
error: function (XMLHttpRequest, textStatus, errorThrown) {
  alert('Error : ' + errorThrown);
}
});
});
            function orderid(myObjects)
            {
              \$('#orderidlist').show();
              \$('#orderidlist').html('');
              \$('#orderidlist').html('<option>Select Order Id to Merge</select>');
              \$.each(myObjects,function () {
                \$('#orderidlist').append('<option value=\"'+this.id+'\">'+this.id+'</option>');   
              });
            }

            function customer(x)
            {
              \$('.basic').show();
              \$('.table-show').show();
              \$('#user').show();
              \$('#type').show();


              \$('.name').html(\$('.xxx option:selected').attr('data-name'));
              \$('.username').val(\$('.xxx option:selected').attr('data-name'));
              \$('.email').html(\$('.xxx option:selected').attr('data-email'));
              \$('.mobile').html(\$('.xxx option:selected').attr('data-mobile'));

    var out ={'data':x};                      // alert(x);
    \$.ajax({
      type: \"POST\",
      url: \"{{ path('get_customer_data') }}\",
      data: out,
      success: function (res, dataType) {
 // console.log('{{ path('manage_restaurant_get_cat') }}');
 address(res);
},
error: function (XMLHttpRequest, textStatus, errorThrown) {
  alert('Error : ' + errorThrown);
}
});
}

function removeVariant(obj){
// \$(this).attr(\"data-usr\" , '');

\$(obj).parent().parent().remove();
var sum = 0;
\$('.sum').each(function() {
 sum += Number(\$(this).val());
});
\$('.sums').html(Math.round(sum * 1.19));
\$('.total').val(sum);
\$('.gtotal').val(sum);

}
\$(document).ready(function() {
  \$('#myTables').DataTable();
});
\$(document).ready(function () {
  \$('.select').selectize({
    sortField: 'text'
  });
  \$('.select1').selectize({
    sortField: 'text'
  });
});



\$(document).ready(function () {
  \$('#select-state').change(function(){
    var id=\$('#select-state').val();
var out ={'data':id};                      // alert(x);
\$.ajax({
  type: \"POST\",
  url: \"{{ path('manage_restaurant_get_var') }}\",
  data: out,
  success: function (res, dataType) {
 // console.log('{{ path('manage_restaurant_get_cat') }}');
 send(res);
},
error: function (XMLHttpRequest, textStatus, errorThrown) {
  alert('Error : ' + errorThrown);
}
});


});


  \$('#vars').change(function () {
    var selid=\$('#vars option:selected').attr('data-id');
    var selvalue=\$('#vars').html();
    var varid=\$('#vars').val();
    var varvalue=\$('#vars').text();
    // var quantity=1;
    var stock=\$('#vars option:selected').attr('data-stock');
    var itemName=\$('#vars option:selected').attr('data-itemName');
    var varname=\$('#vars option:selected').attr('data-var');
// alert(varid);
  var quantity = prompt(\"Please Enter Quantity for \"+ itemName +\"   [Stock = \"+stock+\"]\", \"1\");

if(quantity=='' || quantity=='0')
{
  alert('please enter quantity!');
  return false;
}
if(stock=='null' || stock<1)
{
  alert('out of stock!');
  return false;
}

var vprice=\$('#vars option:selected').attr('data-price');

\$('#myTable').append('<tr><td><input type=\"hidden\" value=\"'+selid+'\" name=\"selid[]\">'+itemName+'<input type=\"hidden\" value=\"'+varid+'\" name=\"varid[]\"></td>><td>'+varname+'</td><td><input type=\"hidden\" value=\"'+vprice+'\" name=\"price[]\">'+vprice+'</td><td><input type=\"hidden\" value=\"'+quantity+'\" name=\"selqty[]\">'+quantity+'</td><td><input type=\"hidden\" value=\"'+quantity*vprice+'\" name=\"tq[]\" class=\"sum\">'+quantity*vprice+'</td><td><button class=\"btn btn-danger ss\" type=\"button\" class=\"remove\" onclick=\"removeVariant(this)\"><i class=\"fa fa-trash\"></i></button></td></tr>'); 
\$('#quantity').val('');
\$('#vars').val('');
  // \$('#select-state').val('');

  var sum = 0;
  \$('.sum').each(function() {
   sum += Number(\$(this).val());
 });
  \$('.sums').html(Math.round(sum * 1.19));

  \$('.total').val(sum);
  \$('.gtotal').val(sum);
});
  \$(\".remove a\").click(function() {

    // alert('hehehehe');
  });
});
\$('#locationSlot').change(function(){
      var id=\$('#locationSlot').val();
    var date=\$('#locationSlot option:selected').attr('data-date');
    var time=\$('#locationSlot option:selected').attr('data-time');
        \$('#fixdate').val(date);
        \$('#fixtime').val(time);

});
  \$('#locationName').change(function(){
    var id=\$('#locationName').val();
        var area=\$('#locationName option:selected').attr('data-name');
        \$('#area').val(area);

    // alert(id);
var out ={'id':id};                      // alert(x);
\$.ajax({
  type: \"POST\",
  url: \"{{ path('get_slot_by_id') }}\",
  data: out,
  success: function (res, dataType) {
  \$('#locationSlot').html('<option>Select Slot</option>');
              \$.each(res,function () {
                \$('#locationSlot').append('<option value=\"'+this.time+'\"  data-time=\"'+this.time+'\"  data-date=\"'+this.date+'\" >'+this.time+' on '+this.date+'</option>');   
                }); 
},
error: function (XMLHttpRequest, textStatus, errorThrown) {
  alert('Error : ' + errorThrown);
}
});
});

</script>

{% endblock %}", "AppBundle:Admin:Orders/create.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Orders/create.html.twig");
    }
}
