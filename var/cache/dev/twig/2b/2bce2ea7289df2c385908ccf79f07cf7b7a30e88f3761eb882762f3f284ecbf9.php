<?php

/* AppBundle:Admin:Orders/print.html.twig */
class __TwigTemplate_950be25bc71d8e9023504ea5f00b260f8b68c22c33cc7ec9ecd83d500f54952e extends Twig_Template
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
        $__internal_0e39ae5dc4c2f459601df38f5368e05382685d7852758d92acefae6bcffdd969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e39ae5dc4c2f459601df38f5368e05382685d7852758d92acefae6bcffdd969->enter($__internal_0e39ae5dc4c2f459601df38f5368e05382685d7852758d92acefae6bcffdd969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/print.html.twig"));

        $__internal_edb380c846a86eb2e3d3e7a5c6c30705a1d152261156305d4e6c2cb3e93e9fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb380c846a86eb2e3d3e7a5c6c30705a1d152261156305d4e6c2cb3e93e9fe9->enter($__internal_edb380c846a86eb2e3d3e7a5c6c30705a1d152261156305d4e6c2cb3e93e9fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/print.html.twig"));

        // line 1
        echo "    <style type=\"text/css\">
    /* Our Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');

/* Global */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins';
  color: #000 !important;
}
 
body {
  margin-top: 10px;
  height: 100vh;
}


.receipt {
    width: 400px;
    background-color: white;
    border-radius: 30px;
    position: relative;
    /* top: 30%; */
    /* left: 50%; */
    /* margin-top: -360px; */
    /* margin-left: -180px; */
    padding: 20px;
    margin: 0px auto;
}
/* Heading */
.name {
  text-transform: uppercase;
  text-align: center;
  color: #6c8b8e;
  letter-spacing: 1px;
  font-size: 1.8em;
  margin-top: 10px
}

/* Big thank */
.greeting {
  font-size: 21px;
  text-transform: capitalize;
  text-align: center;
  color: #6f8d90;
  margin: 35px 0;
  letter-spacing: 1.2px
}

/* Order info */
.order p {
  font-size: 13px;
  color: #aaa;
  padding-left: 10px;
  letter-spacing: .7px
}

/* Our line */
hr {
  border: .7px solid #ddd;
  margin: 15px 0;
}

/* Order details */
.details {
  padding-left: 10px;
  margin-bottom: 3px;
  overflow: hidden
}

.details h3 {
  font-weight: 400;
  color: #6c8b8e;
  font-size: 1.5em;
  margin-bottom: 8px
}

/* Image and the info of the order */
.product {
  float: left;
  width: 83%
}

.product img {
  width: 65px;
  float: left
}

.product .info {
  float: left;
  margin-left: 15px
}

.product .info h4 {
  color: #6f8d90;
  font-weight: 400;
  text-transform: uppercase;
  margin-top: 5px
}

.product .info p {
  font-size: 12px;
  color: #aaa;
}

/* Net price */
.details > p {
  color: #6f8d90;
  margin-top: 25px;
  font-size: 15px
}

/* Total price */
.totalprice p {
  padding-left: 10px
}

.totalprice .sub,
.totalprice .del {
  font-size: 13px;
  color: #aaa
}

.totalprice span {
  float: right;
  margin-right: 17px
}

.totalprice .tot {
  color: #6f8d90;
  font-size: 15px
}

/* Footer */
footer {
  font-size: 10px;
  text-align: center;
  margin-top: 15px; /* You can make it with position try it */
  color: #aaa
}
.td
{
      padding-left: 24px !important;
    background: white;
    padding: 3px;
    font-size: 12px;
}
.tds {
    padding-left: 20px !important;
    background: white;
    padding: 3px;
    font-size: 12px;
    font-weight: bold;  
}
.tdss {
    padding-left: 18px !important;
    background: white;
    padding: 3px;
    font-size: 10px;
    font-weight: bold;  
}
.tdsss {
    padding-left: 50px !important;
    background: white;
    padding: 3px;
    font-size: 10px;
    font-weight: bold;  
}
hr {
    border: .7px solid #ddd;
    margin: 3px 0;
}
 @media print
      {
         @page {
           margin-top: 0;
           margin-bottom: 0;
         }
         body  {
           padding-top: 72px;
           padding-bottom: 72px ;
         }
      } 
    </style>
   
    <div class=\"receipt\">
    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 190
            echo "      
    <center>  <div class=\"order\"><small>
      ";
            // line 192
            if (($this->getAttribute($context["order"], "orderType", array()) == "Delivery")) {
                // line 193
                echo " <h3>  Home Delivery</h3><br>
      ";
            } else {
                // line 195
                echo " <h3>  Pickup From store</h3><br>
      ";
            }
            // line 197
            echo "                           Delivery Date :  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fixDate", array()), "html", null, true);
            echo "<br>
Delivery Time : ";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fixtime", array()), "html", null, true);
            echo "<br>

                         </small>
                         </div></center>
<hr>
      <!-- Order info -->
      <div class=\"order\">


      <p>Bill to/Ship to:<br>
                           <small>
                           ";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "customerName", array()), "html", null, true);
            echo "<br>
                           ";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "address", array()), "html", null, true);
            echo "<br>
                           ";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "landmark", array()), "html", null, true);
            echo "
                           Mobile : ";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "mobileNo", array()), "html", null, true);
            echo "<br>
                           Email : ";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "email", array()), "html", null, true);
            echo "<br>
                          
                           </small>
      </div>

      <hr>

      <!-- Details -->
<table style=\"width:100%;\">
  <tr>
    <td class=\"tds\">Item</td>
    <td></td>
    <td class=\"tds\">Qty</td>

 </tr>
";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 229
                echo "<tr>
    <td class=\"td\">";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                echo " </td>
    <td></td>
    <td class=\"td\">";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "</td>

 </tr>
   
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["merged_items"] ?? $this->getContext($context, "merged_items")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 238
                echo "<tr>
    <td class=\"td\">";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                echo " </td>
    <td></td>
    <td class=\"td\">";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "</td>

 </tr>
   
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "</table>
  
      <!-- Footer -->

    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0e39ae5dc4c2f459601df38f5368e05382685d7852758d92acefae6bcffdd969->leave($__internal_0e39ae5dc4c2f459601df38f5368e05382685d7852758d92acefae6bcffdd969_prof);

        
        $__internal_edb380c846a86eb2e3d3e7a5c6c30705a1d152261156305d4e6c2cb3e93e9fe9->leave($__internal_edb380c846a86eb2e3d3e7a5c6c30705a1d152261156305d4e6c2cb3e93e9fe9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Orders/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 246,  325 => 241,  318 => 239,  315 => 238,  311 => 237,  300 => 232,  293 => 230,  290 => 229,  286 => 228,  268 => 213,  264 => 212,  260 => 211,  256 => 210,  252 => 209,  238 => 198,  233 => 197,  229 => 195,  225 => 193,  223 => 192,  219 => 190,  215 => 189,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <style type=\"text/css\">
    /* Our Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');

/* Global */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins';
  color: #000 !important;
}
 
body {
  margin-top: 10px;
  height: 100vh;
}


.receipt {
    width: 400px;
    background-color: white;
    border-radius: 30px;
    position: relative;
    /* top: 30%; */
    /* left: 50%; */
    /* margin-top: -360px; */
    /* margin-left: -180px; */
    padding: 20px;
    margin: 0px auto;
}
/* Heading */
.name {
  text-transform: uppercase;
  text-align: center;
  color: #6c8b8e;
  letter-spacing: 1px;
  font-size: 1.8em;
  margin-top: 10px
}

/* Big thank */
.greeting {
  font-size: 21px;
  text-transform: capitalize;
  text-align: center;
  color: #6f8d90;
  margin: 35px 0;
  letter-spacing: 1.2px
}

/* Order info */
.order p {
  font-size: 13px;
  color: #aaa;
  padding-left: 10px;
  letter-spacing: .7px
}

/* Our line */
hr {
  border: .7px solid #ddd;
  margin: 15px 0;
}

/* Order details */
.details {
  padding-left: 10px;
  margin-bottom: 3px;
  overflow: hidden
}

.details h3 {
  font-weight: 400;
  color: #6c8b8e;
  font-size: 1.5em;
  margin-bottom: 8px
}

/* Image and the info of the order */
.product {
  float: left;
  width: 83%
}

.product img {
  width: 65px;
  float: left
}

.product .info {
  float: left;
  margin-left: 15px
}

.product .info h4 {
  color: #6f8d90;
  font-weight: 400;
  text-transform: uppercase;
  margin-top: 5px
}

.product .info p {
  font-size: 12px;
  color: #aaa;
}

/* Net price */
.details > p {
  color: #6f8d90;
  margin-top: 25px;
  font-size: 15px
}

/* Total price */
.totalprice p {
  padding-left: 10px
}

.totalprice .sub,
.totalprice .del {
  font-size: 13px;
  color: #aaa
}

.totalprice span {
  float: right;
  margin-right: 17px
}

.totalprice .tot {
  color: #6f8d90;
  font-size: 15px
}

/* Footer */
footer {
  font-size: 10px;
  text-align: center;
  margin-top: 15px; /* You can make it with position try it */
  color: #aaa
}
.td
{
      padding-left: 24px !important;
    background: white;
    padding: 3px;
    font-size: 12px;
}
.tds {
    padding-left: 20px !important;
    background: white;
    padding: 3px;
    font-size: 12px;
    font-weight: bold;  
}
.tdss {
    padding-left: 18px !important;
    background: white;
    padding: 3px;
    font-size: 10px;
    font-weight: bold;  
}
.tdsss {
    padding-left: 50px !important;
    background: white;
    padding: 3px;
    font-size: 10px;
    font-weight: bold;  
}
hr {
    border: .7px solid #ddd;
    margin: 3px 0;
}
 @media print
      {
         @page {
           margin-top: 0;
           margin-bottom: 0;
         }
         body  {
           padding-top: 72px;
           padding-bottom: 72px ;
         }
      } 
    </style>
   
    <div class=\"receipt\">
    {% for order in orders %}
      
    <center>  <div class=\"order\"><small>
      {% if order.orderType == 'Delivery' %}
 <h3>  Home Delivery</h3><br>
      {% else %}
 <h3>  Pickup From store</h3><br>
      {% endif %}
                           Delivery Date :  {{ order.fixDate }}<br>
Delivery Time : {{ order.fixtime }}<br>

                         </small>
                         </div></center>
<hr>
      <!-- Order info -->
      <div class=\"order\">


      <p>Bill to/Ship to:<br>
                           <small>
                           {{ order.customerName }}<br>
                           {{ order.address }}<br>
                           {{ order.landmark }}
                           Mobile : {{ order.mobileNo }}<br>
                           Email : {{ order.email }}<br>
                          
                           </small>
      </div>

      <hr>

      <!-- Details -->
<table style=\"width:100%;\">
  <tr>
    <td class=\"tds\">Item</td>
    <td></td>
    <td class=\"tds\">Qty</td>

 </tr>
{% for item in items %}
<tr>
    <td class=\"td\">{{ item.itemName }} - {{ item.priceVariavtion }} </td>
    <td></td>
    <td class=\"td\">{{ item.quantity }}</td>

 </tr>
   
{% endfor %}
{% for item in merged_items %}
<tr>
    <td class=\"td\">{{ item.itemName }} - {{ item.priceVariavtion }} </td>
    <td></td>
    <td class=\"td\">{{ item.quantity }}</td>

 </tr>
   
{% endfor %}
</table>
  
      <!-- Footer -->

    </div>{% endfor %}", "AppBundle:Admin:Orders/print.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Orders/print.html.twig");
    }
}
