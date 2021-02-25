<?php

/* AppBundle:Admin:Customers/viewWalletUser.html.twig */
class __TwigTemplate_a85cb6c72752825427ab4167017070a3018e6f15bf82805cbec92ddb5b64207b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Customers/viewWalletUser.html.twig", 1);
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
        $__internal_14866473f31a37a2a468a5ed96b4eb720b28d703b9231ae7dd7402db3b8a5aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14866473f31a37a2a468a5ed96b4eb720b28d703b9231ae7dd7402db3b8a5aa4->enter($__internal_14866473f31a37a2a468a5ed96b4eb720b28d703b9231ae7dd7402db3b8a5aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Customers/viewWalletUser.html.twig"));

        $__internal_1cc98e4485bd25b557858a4e002fbf47d6883bb490a3936a82dae1f505e68922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc98e4485bd25b557858a4e002fbf47d6883bb490a3936a82dae1f505e68922->enter($__internal_1cc98e4485bd25b557858a4e002fbf47d6883bb490a3936a82dae1f505e68922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Customers/viewWalletUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14866473f31a37a2a468a5ed96b4eb720b28d703b9231ae7dd7402db3b8a5aa4->leave($__internal_14866473f31a37a2a468a5ed96b4eb720b28d703b9231ae7dd7402db3b8a5aa4_prof);

        
        $__internal_1cc98e4485bd25b557858a4e002fbf47d6883bb490a3936a82dae1f505e68922->leave($__internal_1cc98e4485bd25b557858a4e002fbf47d6883bb490a3936a82dae1f505e68922_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_4024b7d2f259c2d9da3cdf55224049b619f7c4d03038b9be2765f3f4c99ad13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4024b7d2f259c2d9da3cdf55224049b619f7c4d03038b9be2765f3f4c99ad13b->enter($__internal_4024b7d2f259c2d9da3cdf55224049b619f7c4d03038b9be2765f3f4c99ad13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_077351155450fa91a0076a4ff8a5054ebb4c30bbdb9814f20b4a9d448bcee787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077351155450fa91a0076a4ff8a5054ebb4c30bbdb9814f20b4a9d448bcee787->enter($__internal_077351155450fa91a0076a4ff8a5054ebb4c30bbdb9814f20b4a9d448bcee787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"/assets/css/star/rating.css\"/>
";
        
        $__internal_077351155450fa91a0076a4ff8a5054ebb4c30bbdb9814f20b4a9d448bcee787->leave($__internal_077351155450fa91a0076a4ff8a5054ebb4c30bbdb9814f20b4a9d448bcee787_prof);

        
        $__internal_4024b7d2f259c2d9da3cdf55224049b619f7c4d03038b9be2765f3f4c99ad13b->leave($__internal_4024b7d2f259c2d9da3cdf55224049b619f7c4d03038b9be2765f3f4c99ad13b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1da0e6e08e18dc9147f730731243a3bd4246d3e982c009fcccbfdead0d9ba9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1da0e6e08e18dc9147f730731243a3bd4246d3e982c009fcccbfdead0d9ba9a->enter($__internal_c1da0e6e08e18dc9147f730731243a3bd4246d3e982c009fcccbfdead0d9ba9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a1fdc8bd50c9001115ba9bc8be8b1a042e4fadf1997e6cd31dc4bf3524f2205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1fdc8bd50c9001115ba9bc8be8b1a042e4fadf1997e6cd31dc4bf3524f2205->enter($__internal_1a1fdc8bd50c9001115ba9bc8be8b1a042e4fadf1997e6cd31dc4bf3524f2205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
      
<!-- Modal -->
<div id=\"edit\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Edit ";
        // line 20
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "username", array())), "html", null, true);
        echo "  </h4>
      </div>
      <div class=\"modal-body\">
<form method=\"post\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_customer");
        echo "\">
  <div class=\"form-row\">
    <div class=\"col-12\">
      <label>First Name</label>
      <input type=\"text\" class=\"form-control\" placeholder=\"User Name\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "username", array()), "html", null, true);
        echo "\" name=\"name\">
            <input type=\"hidden\" class=\"form-control\" placeholder=\"User Name\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "\" name=\"id\">

    </div>

  </div><br>
   <div class=\"form-group\">
            <label>Email</label>
      <input type=\"email\" class=\"form-control\" placeholder=\"Email\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "\" name=\"email\">
    </div>
      <div class=\"form-group\">
            <label>Gst</label>
      <input type=\"text\" class=\"form-control\" placeholder=\"Gst Number\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "gst", array()), "html", null, true);
        echo "\" name=\"gst\">
    </div>
       <div class=\"form-group\">
            <label>Mobile Number</label>
      <input type=\"text\" class=\"form-control\" placeholder=\"Mobile Number\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "mobileNumber", array()), "html", null, true);
        echo "\" required name=\"mobile\">
    </div>
</div>
      <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>

        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
      </form>

    </div>

  </div>
</div>


    <div class=\"row\">
            <!-- Column -->
            <div class=\"col-lg-3 col-xlg-3 col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">

                        <center class=\"m-t-30\">
                            <h4 class=\"card-title m-t-10\">";
        // line 66
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "username", array())), "html", null, true);
        echo "</h4>
                             <input type=\"hidden\" id=\"userID\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "\" >

                            <h6 class=\"card-subtitle\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "mobileNumber", array()), "html", null, true);
        echo "</h6>
                            <div class=\"row text-center justify-content-md-center\">
                                <div class=\"col-4\"><a href=\"javascript:void(0)\" class=\"link\"><i class=\"fa fa-shopping-cart\"></i> <font class=\"font-medium\">";
        // line 71
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "customerOrder", array())), "html", null, true);
        echo "</font></a></div>
                                <div class=\"col-4\"><a href=\"javascript:void(0)\" class=\"link\"><i class=\"fa fa-star-o\"></i> <font class=\"font-medium\">";
        // line 72
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "restaurantRatings", array())), "html", null, true);
        echo "</font></a></div>
                            </div>
                                                        <a href=\"#edit\"  data-toggle=\"modal\" data-target=\"#edit\"> <i class=\"fa fa-edit\"></i>edit</a>

                        </center>
                    </div>
                    <div>
                        <hr> 
                    </div>
                    <div class=\"card-body\"> 
                        <small class=\"text-muted\">Primary Email address </small>
                        <h6>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "</h6>  <hr>
                           <small class=\"text-muted\">Gst Number </small>
                        <h6>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "gst", array()), "html", null, true);
        echo "</h6>  <hr>
                         <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Wallet Balance</small>
                        <h6>";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["balance"] ?? $this->getContext($context, "balance")));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "prepaid", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h6>  
<hr>    
        <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Loyalty Points</small>
                        <h6>";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["balance"] ?? $this->getContext($context, "balance")));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "loyalty", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h6>  
<hr>    

                <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Ip Address</small>
                <h6>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "ip", array()), "html", null, true);
        echo "</h6>  <hr>

                <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Device</small>
                <h6>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "device", array()), "html", null, true);
        echo "</h6>  <hr>

                <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Channel</small>
                <h6>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "channel", array()), "html", null, true);
        echo "</h6>  <hr>

                <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Registered Date</small>
                <h6>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "createdDate", array()), "html", null, true);
        echo "</h6>  <hr>

            ";
        // line 117
        echo "                    </div>
                </div>
            </div>
    
    
                                
                             


";
        // line 127
        echo "

<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id=\"setings\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Current Balance : ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["balance"] ?? $this->getContext($context, "balance")));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "postpaid", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</small>

        <h4 class=\"modal-title\">Settings</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"container-fluid\">
        <form>
<div class=\"form-group\">
<div class=\"row\">
<label>Duration For Credits</label>
<select class=\"form-control\" id=\"settingsDrop\">
    <option value=\"10\">10 Days</option>
    <option value=\"15\">15 Days</option>
     <option value=\"20\">20 Days</option>
      <option value=\"25\">25 Days</option>
       <option value=\"30\">30 Days</option>
        <option value=\"35\">35 Days</option>
         <option value=\"40\">40 Days</option>
          <option value=\"45\">45 Days</option>
          <option value=\"50\">50 Days</option>
          <option value=\"60\">60 Days</option>
</select>
</div>
</div>

<div class=\"form-group\">
<div class=\"row\">
<button type=\"button\" class=\"btn btn-success\" id=\"settingsSave\">Save</button>&nbsp;

</div>
</div>



</form>

<div class=\"form-group\">
<div class=\"row\">
</div>
</div>

</div>
</div>
  <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
</div>
</div>
    
            <!-- Column -->
            <!-- Column -->
            <div class=\"col-lg-9 col-xlg-9 col-md-8\">
                <div class=\"card\">
                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs profile-tab\" role=\"tablist\">
                       
                        <li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#prepaid\" role=\"tab\">Wallet</a> </li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#loyalty\" role=\"tab\">Loyalty</a> </li>
                      ";
        // line 199
        echo "                           <!-- <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#reviews\" role=\"tab\">Reviews</a> </li> -->
                         <li class=\"nav-item\"> <a class=\"nav-link \" data-toggle=\"tab\" href=\"#latest-orders\" role=\"tab\">Order History</a> </li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#customer-address\" role=\"tab\">Address</a> </li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#membership-logs\" role=\"tab\">Membership History</a> </li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#customer-logs\" role=\"tab\">Logs</a> </li>
                    </ul>

                    ";
        // line 207
        echo "     <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"prepaid\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#add-prepaid-credits\">Add Credits</button>
                                    <div class=\"table-responsive m-t-10\">
                                        <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                     <th>Description</th>
                                                    <th>Debit</th>
                                                    <th>Credit</th>
                                                    <th>Available Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["prepaid"] ?? $this->getContext($context, "prepaid")));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            // line 225
            echo "                                             ";
            if ((($this->getAttribute($context["wallet"], "debit", array()) == 0) && ($this->getAttribute($context["wallet"], "credit", array()) == 0))) {
                // line 226
                echo "                                             ";
            } else {
                // line 227
                echo "                                                <tr>
                                                <th>";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "id", array()), "html", null, true);
                echo "</th>
                                               <th>";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "date", array()), "html", null, true);
                echo " at ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "dateTime", array()), "html", null, true);
                echo "</th>
                                                <th>";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "note", array()), "html", null, true);
                echo "</th>
                                                <th>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "debit", array()), "html", null, true);
                echo "</th>
                                                <th>";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "credit", array()), "html", null, true);
                echo "</th>
                                                <th>";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "balance", array()), "html", null, true);
                echo "</th>
                                            </tr>
                                            ";
            }
            // line 236
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
<!-- start of loyalty -->
    <div class=\"tab-pane\" id=\"loyalty\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#add-loyalty-points\">Add Loyalty Points</button>
                                    <div class=\"table-responsive m-t-10\">
                                        <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                     <th>Description</th>
                                                    <th>Debit</th>
                                                    <th>Credit</th>
                                                    <th>Available Points</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["loyaltyData"] ?? $this->getContext($context, "loyaltyData")));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            // line 260
            echo "                                             ";
            if ((($this->getAttribute($context["wallet"], "debit", array()) == 0) && ($this->getAttribute($context["wallet"], "credit", array()) == 0))) {
                // line 261
                echo "                                             ";
            } else {
                // line 262
                echo "                                                <tr>
                                                <th>";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "id", array()), "html", null, true);
                echo "</th>
                                               <th>";
                // line 264
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "date", array()), "html", null, true);
                echo " at ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "dateTime", array()), "html", null, true);
                echo "</th>
                                                <th>";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "note", array()), "html", null, true);
                echo "</th>
                                                <th>";
                // line 266
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "debit", array()), "html", null, true);
                echo "</th>
                                                <th>";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "credit", array()), "html", null, true);
                echo "</th>
                                                <th>";
                // line 268
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "balance", array()), "html", null, true);
                echo "</th>
                                            </tr>
                                            ";
            }
            // line 271
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
<!-- end of loyalty -->
                    ";
        // line 280
        echo "
<!-- Trigger the modal with a button -->
<div id=\"add-loyalty-points\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Current Points : ";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["balance"] ?? $this->getContext($context, "balance")));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "loyalty", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</small>

        <h4 class=\"modal-title\">Add Points</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"container-fluid\">
        <form>
<div class=\"form-group\">
<div class=\"row\">
<label>No. Of Points</label>
<input type=\"text\" name=\"credits\" placeholder=\"100 credits\" required=\"\" class=\"form-control\" id=\"lprepaidcredit\">
</div>
</div>

<div class=\"form-group\">
<div class=\"row\">
<label>Note *</label>
<textarea name=\"credits\" placeholder=\"Added By Admin\" required=\"\" class=\"form-control\" id=\"lwalletnote\">Added by Admin</textarea>
</div>
</div>
<div class=\"form-group\">
<div class=\"row\">
<label>Payment Mode</label>
<select class=\"form-control\" required=\"\" name=\"duration\" id=\"lprepaidmode\">
    <option value=\"cash\">Cash</option>
    <option value=\"card\">Card</option>
    <option value=\"online\">Online Payment</option>
   </select>
</div>
</div>



<input class=\"form-control\" type=\"hidden\" id=\"lprepaidnotes\">


<div class=\"form-group\">
<div class=\"row\">
<button class=\"btn btn-success\" type=\"button\" id=\"addloyalty\">Add Credit</button>
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
";
        // line 343
        echo "<!-- Modal -->
<div id=\"add-prepaid-credits\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Current Balance : ";
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["balance"] ?? $this->getContext($context, "balance")));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "prepaid", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</small>

        <h4 class=\"modal-title\">Add Credits</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"container-fluid\">
        <form>
<div class=\"form-group\">
<div class=\"row\">
<label>No. Of Credits</label>
<input type=\"text\" name=\"credits\" placeholder=\"100 credits\" required=\"\" class=\"form-control\" id=\"prepaidcredit\">
</div>
</div>

<div class=\"form-group\">
<div class=\"row\">
<label>Note *</label>
<textarea name=\"credits\" placeholder=\"Added By Admin\" required=\"\" class=\"form-control\" id=\"walletnote\">Added by Admin</textarea>
</div>
</div>
<div class=\"form-group\">
<div class=\"row\">
<label>Payment Mode</label>
<select class=\"form-control\" required=\"\" name=\"duration\" id=\"prepaidmode\">
    <option value=\"cash\">Cash</option>
    <option value=\"card\">Card</option>
    <option value=\"online\">Online Payment</option>
   </select>
</div>
</div>



<input class=\"form-control\" type=\"hidden\" id=\"prepaidnotes\">


<div class=\"form-group\">
<div class=\"row\">
<button class=\"btn btn-success\" type=\"button\" id=\"addcredit\">Add Credit</button>
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
";
        // line 405
        echo "
";
        // line 407
        echo "


                       ";
        // line 411
        echo "                        <div class=\"tab-pane \" id=\"postpaid\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#add-credits\">Add Credits</button>

                             


";
        // line 419
        echo "

<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id=\"add-credits\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Current Balance : ";
        // line 430
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["balance"] ?? $this->getContext($context, "balance")));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "postpaid", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</small>

        <h4 class=\"modal-title\">Add Credits</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"container-fluid\">
        <form>
<div class=\"form-group\">
<div class=\"row\">
<label>No. Of Credits</label>
<input type=\"text\" name=\"credits\" placeholder=\"100 credits\" required=\"\" class=\"form-control\" id=\"pocredits\">
</div>
</div>
";
        // line 453
        echo "
";
        // line 466
        echo "<div class=\"form-group\">
<div class=\"row\">
<button class=\"btn btn-success\" type=\"button\" id=\"poadd\">Add Credit</button>
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
";
        // line 483
        echo "
";
        // line 485
        echo "

<!-- Trigger the modal with a button -->







                                    <div class=\"table-responsive m-t-10\">
                                    <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                     <th>Description</th>
                                                    <th>Debit</th>
                                                    <th>Credit</th>
                                                    <th>Available Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             ";
        // line 508
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["postpaid"] ?? $this->getContext($context, "postpaid"))));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            // line 509
            echo "                                                <tr>
                                                <th>";
            // line 510
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "id", array()), "html", null, true);
            echo "</th>
                                               <th>";
            // line 511
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "date", array()), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "dateTime", array()), "html", null, true);
            echo "</th>
                                                <th>";
            // line 512
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "note", array()), "html", null, true);
            echo "</th>
                                                <th>";
            // line 513
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "debit", array()), "html", null, true);
            echo "</th>
                                                <th>";
            // line 514
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "credit", array()), "html", null, true);
            echo "</th>
                                                <th>";
            // line 515
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "balance", array()), "html", null, true);
            echo "</th>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        echo "                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    ";
        // line 524
        echo "                    <!-- Tab panes -->
                        <div class=\"tab-pane\" id=\"latest-orders\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                    <div class=\"table-responsive m-t-10\">
                                        <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>Order Number</th>
                                                    <th>Order Date</th>
                                                    <th>Status</th>
                                                    <th>Order Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 539
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "customerOrder", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 540
            echo "                                                    <tr>
                                                        <td>";
            // line 541
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 542
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "orderDate", array()), "d F Y"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 543
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderStatus", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 544
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
            echo "</td>
                                                        <td>  
                                                            <a href=\"";
            // line 546
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("restaurant_orders_panel_update", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-eye\"></i></a>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 550
        echo "                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
  <!--second tab-->
                        <div class=\"tab-pane\" id=\"reccive\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                   <button class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#reccive-payment\">Reccive Payments</button>

                                <div class=\"table-responsive m-t-10\">
                                    <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Due Balance</th>
                                                    <th>Due Duration</th>
                                                    <th>Paid Balance</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             ";
        // line 573
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["due"] ?? $this->getContext($context, "due"))));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            // line 574
            echo "                                                <tr>
                                                <th>";
            // line 575
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "id", array()), "html", null, true);
            echo "</th>
                                               <th>";
            // line 576
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "date", array()), "html", null, true);
            echo "</th>
                                                <th><a href=\"#\">
                                                    ";
            // line 578
            if (($this->getAttribute($context["wallet"], "balance", array()) < 0)) {
                // line 579
                echo "
                                                       Payement Reccived
                                                         ";
            } else {
                // line 582
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "balance", array()), "html", null, true);
                echo "
                                                    ";
            }
            // line 584
            echo "                                                    </a></th>
                                                <th>";
            // line 585
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "duedate", array()), "html", null, true);
            echo " Days</th>
                                                <th>";
            // line 586
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "paid", array()), "html", null, true);
            echo "</th>
                                                 <th>

    ";
            // line 589
            if (($this->getAttribute($context["wallet"], "status", array()) == 0)) {
                // line 590
                echo "         <span style=\"font-weight:bold;color:red;font-size:14px;\">Pending</span> 
    ";
            } else {
                // line 592
                echo "         <span  style=\"font-weight:bold;color:green;font-size:14px;\">Paid</span> 
    ";
            }
            // line 594
            echo " </th>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 597
        echo "                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>

                        <!--second tab-->
                        <div class=\"tab-pane\" id=\"reviews\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <table class=\"table table-hovered\">
                                    <tr>
                                        <th>Restaurant</th>
                                        <th>Ratings</th>
                                        <th>Reviews</th>
                                    </tr>
                                ";
        // line 612
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "restaurantRatings", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 613
            echo "                                    <tr>
                                        <td>";
            // line 614
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rating"], "restaurant", array()), "restaurantName", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <div class=\"rating-wrap text-left margin-top-10\">
                                                <div class=\"star-ratings-sprite pull-left\">
                                                    <span style=\"width:";
            // line 618
            echo twig_escape_filter($this->env, ($this->getAttribute($context["rating"], "ratings", array()) * 20), "html", null, true);
            echo "%\" class=\"star-ratings-sprite-rating\"></span>
                                                </div>
                                                <span class=\"star-count pull-left margin-left-5\">(";
            // line 620
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "ratings", array()), "html", null, true);
            echo ")</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </td>
                                        <td>";
            // line 624
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "reviews", array()), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 627
        echo "                            </table>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"customer-address\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive m-t-10\">
                                    <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 643
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "billingAddress", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 644
            echo "                                            <tr>
                                                <td>
                                                    ";
            // line 646
            if (($this->getAttribute($context["address"], "addressType", array()) == "Home")) {
                // line 647
                echo "                                                        <a href=\"javascipt:;\"><i class=\"fa fa-home\"> Home</i></a>
                                                    ";
            } elseif (($this->getAttribute(            // line 648
$context["address"], "addressType", array()) == "Work")) {
                // line 649
                echo "                                                        <a href=\"javascipt:;\"><i class=\"fa fa-building\"></i> Work</a>
                                                    ";
            } else {
                // line 651
                echo "                                                        <a href=\"javascipt:;\"><i class=\"fa fa-universal-access\"></i> Others</a>
                                                    ";
            }
            // line 653
            echo "                                                </td>
                                                <td>";
            // line 654
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "fullName", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 655
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "address", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 658
        echo "                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"membership-logs\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive m-t-10\">
                                    <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Purchased Date</th>
                                                <th>Expiry Date</th>
                                                <th>Login Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      ";
        // line 678
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membership"] ?? $this->getContext($context, "membership")));
        foreach ($context['_seq'] as $context["_key"] => $context["mem"]) {
            echo "                                   
                                             <tr>
                                                <td>";
            // line 680
            echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "duration", array()), "html", null, true);
            echo " Month </td>
                                                <td>";
            // line 681
            echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "purchased_date", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 682
            echo twig_escape_filter($this->env, $this->getAttribute($context["mem"], "expiry_date", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 683
            if (($this->getAttribute($context["mem"], "status", array()) == 0)) {
                echo " Activated ";
            } elseif (($this->getAttribute($context["mem"], "status", array()) == 2)) {
                echo "Hold";
            } else {
                echo "Deactivated ";
            }
            echo "</td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 686
        echo "                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"customer-logs\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive m-t-10\">
                                    <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                        <thead>
                                            <tr>
                                                <th>IP Address</th>
                                                <th>Device</th>
                                                <th>Channel</th>
                                                <th>Login Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 705
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cutomerlogs"] ?? $this->getContext($context, "cutomerlogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["logs"]) {
            // line 706
            echo "                                            <tr>
                                                <td>";
            // line 707
            echo twig_escape_filter($this->env, $this->getAttribute($context["logs"], "ip", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 708
            echo twig_escape_filter($this->env, $this->getAttribute($context["logs"], "device", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 709
            echo twig_escape_filter($this->env, $this->getAttribute($context["logs"], "channel", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 710
            echo twig_escape_filter($this->env, $this->getAttribute($context["logs"], "created_date", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 713
        echo "                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->


<!-- Modal -->
<div id=\"reccive-payment\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Current Balance : ";
        // line 735
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["balance"] ?? $this->getContext($context, "balance")));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "postpaid", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</small>

        <h4 class=\"modal-title\">Reccive Payments</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"container-fluid\">
        <form>
<div class=\"form-group\">
<div class=\"row\">
<label>Select Credit</label>
<select class=\"form-control\" required=\"\" name=\"duration\" id=\"rid\">
      ";
        // line 746
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["due"] ?? $this->getContext($context, "due")));
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            // line 747
            echo "        ";
            if (($this->getAttribute($context["wallet"], "status", array()) == 0)) {
                // line 748
                echo "    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "balance", array()), "html", null, true);
                echo " on ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["wallet"], "date", array()), "html", null, true);
                echo "</option>

        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 752
        echo "   </select>
</div>
</div>

<div class=\"form-group\">
<div class=\"row\">
<label>Reccived Amount</label>
<input type=\"text\" class=\"form-control\" placeholder=\"1000\" id=\"ramount\">
</textarea>
</div>
</div>

<div class=\"form-group\">
<div class=\"row\">
<label>Payment Mode</label>
<select class=\"form-control\" required=\"\" name=\"duration\" id=\"rmode\">
    <option value=\"cash\">Cash</option>
    <option value=\"card\">Card</option>
    <option value=\"online\">Online Payment</option>
   </select>
</div>
</div>





<div class=\"form-group\">
<div class=\"row\">
<button class=\"btn btn-success\" type=\"submit\" id=\"radd\">Reccive Payment</button>
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
";
        // line 796
        echo "
     
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
";
        
        $__internal_1a1fdc8bd50c9001115ba9bc8be8b1a042e4fadf1997e6cd31dc4bf3524f2205->leave($__internal_1a1fdc8bd50c9001115ba9bc8be8b1a042e4fadf1997e6cd31dc4bf3524f2205_prof);

        
        $__internal_c1da0e6e08e18dc9147f730731243a3bd4246d3e982c009fcccbfdead0d9ba9a->leave($__internal_c1da0e6e08e18dc9147f730731243a3bd4246d3e982c009fcccbfdead0d9ba9a_prof);

    }

    // line 805
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_c5880ca047033ae914f8f3d18324dc94cdcd4ff0df7345d118fe0cee56b4dfbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5880ca047033ae914f8f3d18324dc94cdcd4ff0df7345d118fe0cee56b4dfbb->enter($__internal_c5880ca047033ae914f8f3d18324dc94cdcd4ff0df7345d118fe0cee56b4dfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_c4d1072ea2d18a19fa5103ff6d574831b076a31d24aa68737e7c27f7c1d64c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d1072ea2d18a19fa5103ff6d574831b076a31d24aa68737e7c27f7c1d64c02->enter($__internal_c4d1072ea2d18a19fa5103ff6d574831b076a31d24aa68737e7c27f7c1d64c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 806
        echo "<script type=\"text/javascript\">
  //to add prepaid
        \$('#addcredit').click(function(){
          var credits=parseInt(\$('#prepaidcredit').val());
          var mode=\$('#prepaidmode').val();
          var notes=\$('#prepaidnotes').val();
          var userID=\$('#userID').val();
          var walletnote=\$('#walletnote').val();
          
if(isNaN(credits))
{
    alert('Please enter valid Credits');
}
else
{
    var url='";
        // line 821
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_credit_to_wallet");
        echo "';
 
    var data={\"userID\":userID,\"mode\":mode,\"credits\":credits,\"note\":walletnote};

ajax(url,data,location.reload());
}
});
\$('#radd').click(function(){
var credits=parseInt(\$('#ramount').val());
var mode=\$('#rmode').val();
var id=\$('#rid').val();
var userID=\$('#userID').val();
if(credits<1 || isNaN(credits))
{
    alert('Please enter valid amount');
}
else
{
    var url='";
        // line 839
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reccive_postpaid_payments");
        echo "';
 
    var data={\"userID\":userID,\"mode\":mode,\"credits\":credits,\"id\":id};

ajax(url,data,location.reload());
}
}); 
//to add loyalty
        \$('#addloyalty').click(function(){
          var credits=parseInt(\$('#lprepaidcredit').val());
          var mode=\$('#lprepaidmode').val();
          var notes=\$('#lprepaidnotes').val();
          var userID=\$('#userID').val();
          var walletnote=\$('#lwalletnote').val();
          
if(isNaN(credits))
{
    alert('Please enter valid Points');
}
else
{
    var url='";
        // line 860
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_credit_to_loyalty");
        echo "';
 
    var data={\"userID\":userID,\"mode\":mode,\"credits\":credits,\"note\":walletnote};
// alert(url)
 ajax(url,data,location.reload());
}
});
\$('#radd').click(function(){
var credits=parseInt(\$('#ramount').val());
var mode=\$('#rmode').val();
var id=\$('#rid').val();
var userID=\$('#userID').val();
if(credits<1 || isNaN(credits))
{
    alert('Please enter valid amount');
}
else
{
    var url='";
        // line 878
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reccive_postpaid_payments");
        echo "';
 
    var data={\"userID\":userID,\"mode\":mode,\"credits\":credits,\"id\":id};

ajax(url,data,location.reload());
}
});
addloyalty
//to add postpaid
 \$('#poadd').click(function(){
          var credits=parseInt(\$('#pocredits').val());
          var mode='dummy';
          var duration='15';
          var userID=\$('#userID').val();
if(credits==0 || isNaN(credits))
{
    alert('Please enter valid Credits');
}
else
{
    var url='";
        // line 898
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_credit_to_wallet_postpaid");
        echo "';
 
    var data={\"userID\":userID,\"mode\":'null',\"credits\":credits,\"note\":'Credit From Marketbhaav',\"duration\":duration};
// console.log()
ajax(url,data,location.reload());
}
 });
 //to add postpaid
 \$('#settingsSave').click(function(){
          var drop=\$('#settingsDrop').val();
          
          var userID=\$('#userID').val();


    var url='";
        // line 912
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_duration_postpaid");
        echo "';
 
    var data={\"userID\":userID,\"drop\":drop};
    // alert(data)
// console.log()
ajax(url,data,alert('Credit Duration changed to '+drop+' Days'));

 });

// blockP
 //to add postpaid
 \$('#blockP').click(function(){
          
          var userID=\$('#userID').val();
      


    var url='";
        // line 929
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("block_duration_postpaid");
        echo "';
 
    var data={\"userID\":userID,\"status\":'1'};
    // alert(data)
// console.log()
ajax(url,data,location.reload());

 });
 \$('#unblockP').click(function(){
          
          var userID=\$('#userID').val();
      


    var url='";
        // line 943
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("block_duration_postpaid");
        echo "';
 
    var data={\"userID\":userID,\"status\":'0'};
    // alert(data)
// console.log()
ajax(url,data,location.reload());

 });
function ajax(url,data,output)
 {

\$.ajax({
    type: \"POST\",
    url: url,
    data: data,
    success: function (data, dataType) {
output;
location.reload();
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
        alert('Error : ' + errorThrown);
    }
});
}
 </script>
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable(
            {
                \"aaSorting\": [[0, 'desc']],
            }
        );
    });



</script>
";
        
        $__internal_c4d1072ea2d18a19fa5103ff6d574831b076a31d24aa68737e7c27f7c1d64c02->leave($__internal_c4d1072ea2d18a19fa5103ff6d574831b076a31d24aa68737e7c27f7c1d64c02_prof);

        
        $__internal_c5880ca047033ae914f8f3d18324dc94cdcd4ff0df7345d118fe0cee56b4dfbb->leave($__internal_c5880ca047033ae914f8f3d18324dc94cdcd4ff0df7345d118fe0cee56b4dfbb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Customers/viewWalletUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1442 => 943,  1425 => 929,  1405 => 912,  1388 => 898,  1365 => 878,  1344 => 860,  1320 => 839,  1299 => 821,  1282 => 806,  1273 => 805,  1258 => 796,  1213 => 752,  1198 => 748,  1195 => 747,  1191 => 746,  1169 => 735,  1145 => 713,  1136 => 710,  1132 => 709,  1128 => 708,  1124 => 707,  1121 => 706,  1117 => 705,  1096 => 686,  1081 => 683,  1077 => 682,  1073 => 681,  1067 => 680,  1060 => 678,  1038 => 658,  1029 => 655,  1025 => 654,  1022 => 653,  1018 => 651,  1014 => 649,  1012 => 648,  1009 => 647,  1007 => 646,  1003 => 644,  999 => 643,  981 => 627,  972 => 624,  965 => 620,  960 => 618,  953 => 614,  950 => 613,  946 => 612,  929 => 597,  921 => 594,  917 => 592,  913 => 590,  911 => 589,  905 => 586,  901 => 585,  898 => 584,  892 => 582,  887 => 579,  885 => 578,  880 => 576,  876 => 575,  873 => 574,  869 => 573,  844 => 550,  834 => 546,  829 => 544,  825 => 543,  821 => 542,  817 => 541,  814 => 540,  810 => 539,  793 => 524,  786 => 518,  777 => 515,  773 => 514,  769 => 513,  765 => 512,  759 => 511,  755 => 510,  752 => 509,  748 => 508,  723 => 485,  720 => 483,  702 => 466,  699 => 453,  675 => 430,  662 => 419,  653 => 411,  648 => 407,  645 => 405,  580 => 350,  571 => 343,  506 => 288,  496 => 280,  488 => 272,  482 => 271,  476 => 268,  472 => 267,  468 => 266,  464 => 265,  458 => 264,  454 => 263,  451 => 262,  448 => 261,  445 => 260,  441 => 259,  417 => 237,  411 => 236,  405 => 233,  401 => 232,  397 => 231,  393 => 230,  387 => 229,  383 => 228,  380 => 227,  377 => 226,  374 => 225,  370 => 224,  351 => 207,  342 => 199,  272 => 138,  259 => 127,  248 => 117,  243 => 103,  237 => 100,  231 => 97,  225 => 94,  210 => 90,  196 => 87,  191 => 85,  186 => 83,  172 => 72,  168 => 71,  163 => 69,  158 => 67,  154 => 66,  128 => 43,  121 => 39,  114 => 35,  104 => 28,  100 => 27,  93 => 23,  87 => 20,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"/assets/css/star/rating.css\"/>
{% endblock %}
{% block body %}

<!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
      
<!-- Modal -->
<div id=\"edit\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Edit {{ customer.username|upper }}  </h4>
      </div>
      <div class=\"modal-body\">
<form method=\"post\" action=\"{{ path('save_customer')}}\">
  <div class=\"form-row\">
    <div class=\"col-12\">
      <label>First Name</label>
      <input type=\"text\" class=\"form-control\" placeholder=\"User Name\" value=\"{{ customer.username}}\" name=\"name\">
            <input type=\"hidden\" class=\"form-control\" placeholder=\"User Name\" value=\"{{ customer.id}}\" name=\"id\">

    </div>

  </div><br>
   <div class=\"form-group\">
            <label>Email</label>
      <input type=\"email\" class=\"form-control\" placeholder=\"Email\" value=\"{{ customer.email}}\" name=\"email\">
    </div>
      <div class=\"form-group\">
            <label>Gst</label>
      <input type=\"text\" class=\"form-control\" placeholder=\"Gst Number\" value=\"{{ customer.gst}}\" name=\"gst\">
    </div>
       <div class=\"form-group\">
            <label>Mobile Number</label>
      <input type=\"text\" class=\"form-control\" placeholder=\"Mobile Number\" value=\"{{ customer.mobileNumber}}\" required name=\"mobile\">
    </div>
</div>
      <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>

        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
      </form>

    </div>

  </div>
</div>


    <div class=\"row\">
            <!-- Column -->
            <div class=\"col-lg-3 col-xlg-3 col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">

                        <center class=\"m-t-30\">
                            <h4 class=\"card-title m-t-10\">{{ customer.username|upper }}</h4>
                             <input type=\"hidden\" id=\"userID\" value=\"{{ customer.id }}\" >

                            <h6 class=\"card-subtitle\">{{ customer.mobileNumber }}</h6>
                            <div class=\"row text-center justify-content-md-center\">
                                <div class=\"col-4\"><a href=\"javascript:void(0)\" class=\"link\"><i class=\"fa fa-shopping-cart\"></i> <font class=\"font-medium\">{{ customer.customerOrder|length }}</font></a></div>
                                <div class=\"col-4\"><a href=\"javascript:void(0)\" class=\"link\"><i class=\"fa fa-star-o\"></i> <font class=\"font-medium\">{{ customer.restaurantRatings|length }}</font></a></div>
                            </div>
                                                        <a href=\"#edit\"  data-toggle=\"modal\" data-target=\"#edit\"> <i class=\"fa fa-edit\"></i>edit</a>

                        </center>
                    </div>
                    <div>
                        <hr> 
                    </div>
                    <div class=\"card-body\"> 
                        <small class=\"text-muted\">Primary Email address </small>
                        <h6>{{ customer.email }}</h6>  <hr>
                           <small class=\"text-muted\">Gst Number </small>
                        <h6>{{ customer.gst }}</h6>  <hr>
                         <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Wallet Balance</small>
                        <h6>{% for wallet in balance %}{{ wallet.prepaid }} {% endfor %}</h6>  
<hr>    
        <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Loyalty Points</small>
                        <h6>{% for wallet in balance %}{{ wallet.loyalty }} {% endfor %}</h6>  
<hr>    

                <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Ip Address</small>
                <h6>{{ customer.ip }}</h6>  <hr>

                <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Device</small>
                <h6>{{ customer.device }}</h6>  <hr>

                <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Channel</small>
                <h6>{{ customer.channel }}</h6>  <hr>

                <small class=\"text-muted\" style=\"color:#e91e63 !important;font-weight:bold;\">Registered Date</small>
                <h6>{{ customer.createdDate }}</h6>  <hr>

            {#                <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Postpaid Balance</small>
                        <h6>{% for wallet in balance %}{{ wallet.postpaid }} {% endfor %}</h6>  
<hr>
  <span data-toggle=\"modal\" data-target=\"#setings\" style=\"font-size: 10px;/* font-weight:bold; */color:#fff;background: #9d498a;color: #fff;cursor: pointer;padding: 6px;border-radius: 4px;text-align: center;\">Change Credit Duration</span>
 {% for wallet in balance %}
  {% if wallet.status == 0 %}
   <span  style=\"font-size: 10px;/* font-weight:bold; */color:#fff;background: #9d498a;color: #fff;cursor: pointer;padding: 6px;border-radius: 4px;text-align: center;\" id=\"blockP\">Block</span>

{% else %}
      <span  style=\"font-size: 10px;/* font-weight:bold; */color:#fff;background:green;color: #fff;cursor: pointer;padding: 6px;border-radius: 4px;text-align: center;\" id=\"unblockP\">unblock</span>
{% endif %}
{% endfor %} #}
                    </div>
                </div>
            </div>
    
    
                                
                             


{# modal  1 for add postpaid credits#}


<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id=\"setings\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Current Balance : {% for wallet in balance %}{{ wallet.postpaid }} {% endfor %}</small>

        <h4 class=\"modal-title\">Settings</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"container-fluid\">
        <form>
<div class=\"form-group\">
<div class=\"row\">
<label>Duration For Credits</label>
<select class=\"form-control\" id=\"settingsDrop\">
    <option value=\"10\">10 Days</option>
    <option value=\"15\">15 Days</option>
     <option value=\"20\">20 Days</option>
      <option value=\"25\">25 Days</option>
       <option value=\"30\">30 Days</option>
        <option value=\"35\">35 Days</option>
         <option value=\"40\">40 Days</option>
          <option value=\"45\">45 Days</option>
          <option value=\"50\">50 Days</option>
          <option value=\"60\">60 Days</option>
</select>
</div>
</div>

<div class=\"form-group\">
<div class=\"row\">
<button type=\"button\" class=\"btn btn-success\" id=\"settingsSave\">Save</button>&nbsp;

</div>
</div>



</form>

<div class=\"form-group\">
<div class=\"row\">
</div>
</div>

</div>
</div>
  <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
</div>
</div>
    
            <!-- Column -->
            <!-- Column -->
            <div class=\"col-lg-9 col-xlg-9 col-md-8\">
                <div class=\"card\">
                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs profile-tab\" role=\"tablist\">
                       
                        <li class=\"nav-item\"> <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#prepaid\" role=\"tab\">Wallet</a> </li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#loyalty\" role=\"tab\">Loyalty</a> </li>
                      {#   <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#postpaid\" role=\"tab\">Postpaid</a> </li>
                          <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#reccive\" role=\"tab\">Receive Payments</a> </li> #}
                           <!-- <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#reviews\" role=\"tab\">Reviews</a> </li> -->
                         <li class=\"nav-item\"> <a class=\"nav-link \" data-toggle=\"tab\" href=\"#latest-orders\" role=\"tab\">Order History</a> </li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#customer-address\" role=\"tab\">Address</a> </li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#membership-logs\" role=\"tab\">Membership History</a> </li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" data-toggle=\"tab\" href=\"#customer-logs\" role=\"tab\">Logs</a> </li>
                    </ul>

                    {# prepaid start #}
     <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"prepaid\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#add-prepaid-credits\">Add Credits</button>
                                    <div class=\"table-responsive m-t-10\">
                                        <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                     <th>Description</th>
                                                    <th>Debit</th>
                                                    <th>Credit</th>
                                                    <th>Available Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             {% for wallet in prepaid %}
                                             {% if wallet.debit == 0  and wallet.credit == 0 %}
                                             {% else %}
                                                <tr>
                                                <th>{{ wallet.id }}</th>
                                               <th>{{ wallet.date }} at {{ wallet.dateTime }}</th>
                                                <th>{{ wallet.note }}</th>
                                                <th>{{ wallet.debit }}</th>
                                                <th>{{ wallet.credit }}</th>
                                                <th>{{ wallet.balance }}</th>
                                            </tr>
                                            {% endif %}
                                        {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
<!-- start of loyalty -->
    <div class=\"tab-pane\" id=\"loyalty\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#add-loyalty-points\">Add Loyalty Points</button>
                                    <div class=\"table-responsive m-t-10\">
                                        <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                     <th>Description</th>
                                                    <th>Debit</th>
                                                    <th>Credit</th>
                                                    <th>Available Points</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             {% for wallet in loyaltyData %}
                                             {% if wallet.debit == 0  and wallet.credit == 0 %}
                                             {% else %}
                                                <tr>
                                                <th>{{ wallet.id }}</th>
                                               <th>{{ wallet.date }} at {{ wallet.dateTime }}</th>
                                                <th>{{ wallet.note }}</th>
                                                <th>{{ wallet.debit }}</th>
                                                <th>{{ wallet.credit }}</th>
                                                <th>{{ wallet.balance }}</th>
                                            </tr>
                                            {% endif %}
                                        {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
<!-- end of loyalty -->
                    {# end prepaid #}
{# modal  for add postpaid credits#}

<!-- Trigger the modal with a button -->
<div id=\"add-loyalty-points\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Current Points : {% for wallet in balance %}{{ wallet.loyalty }} {% endfor %}</small>

        <h4 class=\"modal-title\">Add Points</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"container-fluid\">
        <form>
<div class=\"form-group\">
<div class=\"row\">
<label>No. Of Points</label>
<input type=\"text\" name=\"credits\" placeholder=\"100 credits\" required=\"\" class=\"form-control\" id=\"lprepaidcredit\">
</div>
</div>

<div class=\"form-group\">
<div class=\"row\">
<label>Note *</label>
<textarea name=\"credits\" placeholder=\"Added By Admin\" required=\"\" class=\"form-control\" id=\"lwalletnote\">Added by Admin</textarea>
</div>
</div>
<div class=\"form-group\">
<div class=\"row\">
<label>Payment Mode</label>
<select class=\"form-control\" required=\"\" name=\"duration\" id=\"lprepaidmode\">
    <option value=\"cash\">Cash</option>
    <option value=\"card\">Card</option>
    <option value=\"online\">Online Payment</option>
   </select>
</div>
</div>



<input class=\"form-control\" type=\"hidden\" id=\"lprepaidnotes\">


<div class=\"form-group\">
<div class=\"row\">
<button class=\"btn btn-success\" type=\"button\" id=\"addloyalty\">Add Credit</button>
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
{# prepaid #}
<!-- Modal -->
<div id=\"add-prepaid-credits\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Current Balance : {% for wallet in balance %}{{ wallet.prepaid }} {% endfor %}</small>

        <h4 class=\"modal-title\">Add Credits</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"container-fluid\">
        <form>
<div class=\"form-group\">
<div class=\"row\">
<label>No. Of Credits</label>
<input type=\"text\" name=\"credits\" placeholder=\"100 credits\" required=\"\" class=\"form-control\" id=\"prepaidcredit\">
</div>
</div>

<div class=\"form-group\">
<div class=\"row\">
<label>Note *</label>
<textarea name=\"credits\" placeholder=\"Added By Admin\" required=\"\" class=\"form-control\" id=\"walletnote\">Added by Admin</textarea>
</div>
</div>
<div class=\"form-group\">
<div class=\"row\">
<label>Payment Mode</label>
<select class=\"form-control\" required=\"\" name=\"duration\" id=\"prepaidmode\">
    <option value=\"cash\">Cash</option>
    <option value=\"card\">Card</option>
    <option value=\"online\">Online Payment</option>
   </select>
</div>
</div>



<input class=\"form-control\" type=\"hidden\" id=\"prepaidnotes\">


<div class=\"form-group\">
<div class=\"row\">
<button class=\"btn btn-success\" type=\"button\" id=\"addcredit\">Add Credit</button>
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
{# end of modal 1 #}

{# modal     for recive postpaid credits#}



                       {# postpaid start #}
                        <div class=\"tab-pane \" id=\"postpaid\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#add-credits\">Add Credits</button>

                             


{# modal  1 for add postpaid credits#}


<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id=\"add-credits\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Current Balance : {% for wallet in balance %}{{ wallet.postpaid }} {% endfor %}</small>

        <h4 class=\"modal-title\">Add Credits</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"container-fluid\">
        <form>
<div class=\"form-group\">
<div class=\"row\">
<label>No. Of Credits</label>
<input type=\"text\" name=\"credits\" placeholder=\"100 credits\" required=\"\" class=\"form-control\" id=\"pocredits\">
</div>
</div>
{# <div class=\"form-group\">
<div class=\"row\">
<label>Payment Mode</label>
<select class=\"form-control\" required=\"\" name=\"duration\" id=\"pomode\">
    <option value=\"cash\">Cash</option>
    <option value=\"card\">Card</option>
    <option value=\"online\">Online Payment</option>
   </select>
</div>
</div> #}

{# <div class=\"form-group\">
<div class=\"row\">
<label>Credit Duration</label>
<select class=\"form-control\" required=\"\" name=\"duration\" id=\"poduration\">
    <option value=\"15\">15 Days</option>
    <option value=\"20\">20 Days</option>
    <option value=\"25\">25 Days</option>
    <option value=\"30\">30 Days</option>

</select>
</div>
</div> #}
<div class=\"form-group\">
<div class=\"row\">
<button class=\"btn btn-success\" type=\"button\" id=\"poadd\">Add Credit</button>
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
{# end of modal 1 #}

{# modal 2 for recive postpaid credits#}


<!-- Trigger the modal with a button -->







                                    <div class=\"table-responsive m-t-10\">
                                    <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                     <th>Description</th>
                                                    <th>Debit</th>
                                                    <th>Credit</th>
                                                    <th>Available Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             {% for wallet in postpaid|reverse %}
                                                <tr>
                                                <th>{{ wallet.id }}</th>
                                               <th>{{ wallet.date }} at {{ wallet.dateTime }}</th>
                                                <th>{{ wallet.note }}</th>
                                                <th>{{ wallet.debit }}</th>
                                                <th>{{ wallet.credit }}</th>
                                                <th>{{ wallet.balance }}</th>
                                            </tr>
                                        {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    {# end postpaid #}
                    <!-- Tab panes -->
                        <div class=\"tab-pane\" id=\"latest-orders\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                    <div class=\"table-responsive m-t-10\">
                                        <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>Order Number</th>
                                                    <th>Order Date</th>
                                                    <th>Status</th>
                                                    <th>Order Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for order in customer.customerOrder|reverse %}
                                                    <tr>
                                                        <td>{{ order.id }}</td>
                                                        <td>{{ order.orderDate|date('d F Y') }}</td>
                                                        <td>{{ order.orderStatus }}</td>
                                                        <td>{{ order.orderAmount }}</td>
                                                        <td>  
                                                            <a href=\"{{ path('restaurant_orders_panel_update',{'id':order.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-eye\"></i></a>
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
  <!--second tab-->
                        <div class=\"tab-pane\" id=\"reccive\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                   <button class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#reccive-payment\">Reccive Payments</button>

                                <div class=\"table-responsive m-t-10\">
                                    <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Due Balance</th>
                                                    <th>Due Duration</th>
                                                    <th>Paid Balance</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             {% for wallet in due|reverse %}
                                                <tr>
                                                <th>{{ wallet.id }}</th>
                                               <th>{{ wallet.date }}</th>
                                                <th><a href=\"#\">
                                                    {% if wallet.balance <  0 %}

                                                       Payement Reccived
                                                         {% else %}
                                                            {{ wallet.balance }}
                                                    {% endif %}
                                                    </a></th>
                                                <th>{{ wallet.duedate }} Days</th>
                                                <th>{{ wallet.paid }}</th>
                                                 <th>

    {% if wallet.status == 0 %}
         <span style=\"font-weight:bold;color:red;font-size:14px;\">Pending</span> 
    {% else %}
         <span  style=\"font-weight:bold;color:green;font-size:14px;\">Paid</span> 
    {% endif %}
 </th>
                                            </tr>
                                        {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>

                        <!--second tab-->
                        <div class=\"tab-pane\" id=\"reviews\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <table class=\"table table-hovered\">
                                    <tr>
                                        <th>Restaurant</th>
                                        <th>Ratings</th>
                                        <th>Reviews</th>
                                    </tr>
                                {% for rating in customer.restaurantRatings %}
                                    <tr>
                                        <td>{{ rating.restaurant.restaurantName }}</td>
                                        <td>
                                            <div class=\"rating-wrap text-left margin-top-10\">
                                                <div class=\"star-ratings-sprite pull-left\">
                                                    <span style=\"width:{{ rating.ratings * 20 }}%\" class=\"star-ratings-sprite-rating\"></span>
                                                </div>
                                                <span class=\"star-count pull-left margin-left-5\">({{rating.ratings}})</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </td>
                                        <td>{{ rating.reviews }}</td>
                                    </tr>
                                {% endfor %}
                            </table>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"customer-address\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive m-t-10\">
                                    <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for address in customer.billingAddress %}
                                            <tr>
                                                <td>
                                                    {% if address.addressType == \"Home\" %}
                                                        <a href=\"javascipt:;\"><i class=\"fa fa-home\"> Home</i></a>
                                                    {% elseif address.addressType == \"Work\" %}
                                                        <a href=\"javascipt:;\"><i class=\"fa fa-building\"></i> Work</a>
                                                    {% else %}
                                                        <a href=\"javascipt:;\"><i class=\"fa fa-universal-access\"></i> Others</a>
                                                    {% endif %}
                                                </td>
                                                <td>{{ address.fullName }}</td>
                                                <td>{{ address.address }}</td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"membership-logs\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive m-t-10\">
                                    <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Purchased Date</th>
                                                <th>Expiry Date</th>
                                                <th>Login Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      {% for mem in membership %}                                   
                                             <tr>
                                                <td>{{ mem.name }} - {{ mem.duration }} Month </td>
                                                <td>{{ mem.purchased_date }}</td>
                                                <td>{{ mem.expiry_date }}</td>
                                                <td>{% if mem.status == 0 %} Activated {% elseif mem.status == 2  %}Hold{% else %}Deactivated {% endif %}</td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"customer-logs\" role=\"tabpanel\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive m-t-10\">
                                    <table id=\"myTable\" class=\"table table-bordered table-striped\">
                                        <thead>
                                            <tr>
                                                <th>IP Address</th>
                                                <th>Device</th>
                                                <th>Channel</th>
                                                <th>Login Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for logs in cutomerlogs %}
                                            <tr>
                                                <td>{{ logs.ip }}</td>
                                                <td>{{ logs.device }}</td>
                                                <td>{{ logs.channel }}</td>
                                                <td>{{ logs.created_date }}</td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->


<!-- Modal -->
<div id=\"reccive-payment\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <small class=\"text-muted\" style=\"color:#e91e63  !important;font-weight:bold;\">Current Balance : {% for wallet in balance %}{{ wallet.postpaid }} {% endfor %}</small>

        <h4 class=\"modal-title\">Reccive Payments</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"container-fluid\">
        <form>
<div class=\"form-group\">
<div class=\"row\">
<label>Select Credit</label>
<select class=\"form-control\" required=\"\" name=\"duration\" id=\"rid\">
      {% for wallet in due %}
        {% if wallet.status == 0 %}
    <option value=\"{{ wallet.id }}\">{{ wallet.balance }} on {{ wallet.date }}</option>

        {% endif %}
{% endfor %}
   </select>
</div>
</div>

<div class=\"form-group\">
<div class=\"row\">
<label>Reccived Amount</label>
<input type=\"text\" class=\"form-control\" placeholder=\"1000\" id=\"ramount\">
</textarea>
</div>
</div>

<div class=\"form-group\">
<div class=\"row\">
<label>Payment Mode</label>
<select class=\"form-control\" required=\"\" name=\"duration\" id=\"rmode\">
    <option value=\"cash\">Cash</option>
    <option value=\"card\">Card</option>
    <option value=\"online\">Online Payment</option>
   </select>
</div>
</div>





<div class=\"form-group\">
<div class=\"row\">
<button class=\"btn btn-success\" type=\"submit\" id=\"radd\">Reccive Payment</button>
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
{# end of modal 2 #}

     
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
{% endblock %}


 
{% block scripts %}
<script type=\"text/javascript\">
  //to add prepaid
        \$('#addcredit').click(function(){
          var credits=parseInt(\$('#prepaidcredit').val());
          var mode=\$('#prepaidmode').val();
          var notes=\$('#prepaidnotes').val();
          var userID=\$('#userID').val();
          var walletnote=\$('#walletnote').val();
          
if(isNaN(credits))
{
    alert('Please enter valid Credits');
}
else
{
    var url='{{ path('add_credit_to_wallet') }}';
 
    var data={\"userID\":userID,\"mode\":mode,\"credits\":credits,\"note\":walletnote};

ajax(url,data,location.reload());
}
});
\$('#radd').click(function(){
var credits=parseInt(\$('#ramount').val());
var mode=\$('#rmode').val();
var id=\$('#rid').val();
var userID=\$('#userID').val();
if(credits<1 || isNaN(credits))
{
    alert('Please enter valid amount');
}
else
{
    var url='{{ path('reccive_postpaid_payments') }}';
 
    var data={\"userID\":userID,\"mode\":mode,\"credits\":credits,\"id\":id};

ajax(url,data,location.reload());
}
}); 
//to add loyalty
        \$('#addloyalty').click(function(){
          var credits=parseInt(\$('#lprepaidcredit').val());
          var mode=\$('#lprepaidmode').val();
          var notes=\$('#lprepaidnotes').val();
          var userID=\$('#userID').val();
          var walletnote=\$('#lwalletnote').val();
          
if(isNaN(credits))
{
    alert('Please enter valid Points');
}
else
{
    var url='{{ path('add_credit_to_loyalty') }}';
 
    var data={\"userID\":userID,\"mode\":mode,\"credits\":credits,\"note\":walletnote};
// alert(url)
 ajax(url,data,location.reload());
}
});
\$('#radd').click(function(){
var credits=parseInt(\$('#ramount').val());
var mode=\$('#rmode').val();
var id=\$('#rid').val();
var userID=\$('#userID').val();
if(credits<1 || isNaN(credits))
{
    alert('Please enter valid amount');
}
else
{
    var url='{{ path('reccive_postpaid_payments') }}';
 
    var data={\"userID\":userID,\"mode\":mode,\"credits\":credits,\"id\":id};

ajax(url,data,location.reload());
}
});
addloyalty
//to add postpaid
 \$('#poadd').click(function(){
          var credits=parseInt(\$('#pocredits').val());
          var mode='dummy';
          var duration='15';
          var userID=\$('#userID').val();
if(credits==0 || isNaN(credits))
{
    alert('Please enter valid Credits');
}
else
{
    var url='{{ path('add_credit_to_wallet_postpaid') }}';
 
    var data={\"userID\":userID,\"mode\":'null',\"credits\":credits,\"note\":'Credit From Marketbhaav',\"duration\":duration};
// console.log()
ajax(url,data,location.reload());
}
 });
 //to add postpaid
 \$('#settingsSave').click(function(){
          var drop=\$('#settingsDrop').val();
          
          var userID=\$('#userID').val();


    var url='{{ path('add_duration_postpaid') }}';
 
    var data={\"userID\":userID,\"drop\":drop};
    // alert(data)
// console.log()
ajax(url,data,alert('Credit Duration changed to '+drop+' Days'));

 });

// blockP
 //to add postpaid
 \$('#blockP').click(function(){
          
          var userID=\$('#userID').val();
      


    var url='{{ path('block_duration_postpaid') }}';
 
    var data={\"userID\":userID,\"status\":'1'};
    // alert(data)
// console.log()
ajax(url,data,location.reload());

 });
 \$('#unblockP').click(function(){
          
          var userID=\$('#userID').val();
      


    var url='{{ path('block_duration_postpaid') }}';
 
    var data={\"userID\":userID,\"status\":'0'};
    // alert(data)
// console.log()
ajax(url,data,location.reload());

 });
function ajax(url,data,output)
 {

\$.ajax({
    type: \"POST\",
    url: url,
    data: data,
    success: function (data, dataType) {
output;
location.reload();
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
        alert('Error : ' + errorThrown);
    }
});
}
 </script>
<script src=\"/assets/plugins/datatables/jquery.dataTables.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#myTable').DataTable(
            {
                \"aaSorting\": [[0, 'desc']],
            }
        );
    });



</script>
{% endblock %}", "AppBundle:Admin:Customers/viewWalletUser.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Customers/viewWalletUser.html.twig");
    }
}
