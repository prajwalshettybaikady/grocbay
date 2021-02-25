<?php

/* AppBundle:Admin:Orders/multithermal.html.twig */
class __TwigTemplate_36c7f14a9b44500f0c8d46846e6c4c833997b7f8a642383dd5546a066bdfc7f8 extends Twig_Template
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
        $__internal_a1942ab56606183969aae9ba361986f1f78a6e1c38230c3b1183b829354be1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1942ab56606183969aae9ba361986f1f78a6e1c38230c3b1183b829354be1ce->enter($__internal_a1942ab56606183969aae9ba361986f1f78a6e1c38230c3b1183b829354be1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/multithermal.html.twig"));

        $__internal_4f11d91f4a19052311c20deab89bbcaf76f8e4fa54165d3a08e9e9d4abb4dcd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f11d91f4a19052311c20deab89bbcaf76f8e4fa54165d3a08e9e9d4abb4dcd8->enter($__internal_4f11d91f4a19052311c20deab89bbcaf76f8e4fa54165d3a08e9e9d4abb4dcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/multithermal.html.twig"));

        // line 1
        echo "        ";
        if ((($context["yes"] ?? $this->getContext($context, "yes")) == 1)) {
            // line 2
            echo "    <center>No Data Found!</center>
";
        }
        // line 4
        echo "
      <style type=\"text/css\">
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

/* The Receipt */
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
.body {
    width: 100%;
    display: inline-block;
    margin: 0 auto;
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
.tdd
{
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
.tdds {
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
    margin: seconds.3px 0;
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
    ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 209
            echo "
    ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 211
                echo "    ";
                $context["numberFormat"] = $this->getAttribute($context["res"], "number_format", array());
                // line 212
                echo "       <div class=\"body\">

    <div class=\"receipt\">
      <h2 class=\"name\"> ";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantName", array()), "html", null, true);
                echo " </h2>
      
    <center>  
    <b>#";
                // line 218
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                echo "</b>
    <h4>";
                // line 219
                if (($this->getAttribute($context["order"], "orderType", array()) == "Delivery")) {
                    echo " Home Delivery ";
                } elseif (($this->getAttribute($context["order"], "orderType", array()) == "pickup")) {
                    echo " Pickup From Store ";
                } else {
                    echo " Express Delivery ";
                }
                echo "</h4>
 <div class=\"order\"><small>
                           ";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantAddress", array()), "html", null, true);
                echo "<br>
                           ";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantLocation", array()), "html", null, true);
                echo "<br>
                            Gst No:";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "gst", array()), "html", null, true);
                echo "<br>

                           Mobile : ";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "primaryMobile", array()), "html", null, true);
                echo "<br>
                           Email : ";
                // line 226
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "primaryEmail", array()), "html", null, true);
                echo " 
                         </small>
                         </div></center>
<hr>

    <div class=\"order\">

      <p>Bill to/Ship to:<br>
                           <small>
                           ";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "customerName", array()), "html", null, true);
                echo "<br>
                           ";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "address", array()), "html", null, true);
                echo "<br>
                           ";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "landmark", array()), "html", null, true);
                echo "<br>
                           Mobile : ";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "mobileNo", array()), "html", null, true);
                echo "<br>
                           Email : ";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "email", array()), "html", null, true);
                echo "<br>
                           Gst No: ";
                // line 240
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "gst", array()), "html", null, true);
                echo "<br>
                           Delivery Date :  ";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fixDate", array()), "html", null, true);
                echo "<br>
Delivery Time : ";
                // line 242
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fixtime", array()), "html", null, true);
                echo "<br>
Note : <b>";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "note", array()), "html", null, true);
                echo "</b><br>
Order Date :";
                // line 244
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "orderDate", array()), "d-m-Y"), "html", null, true);
                echo " at ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "orderDate", array()), "h-i A"), "html", null, true);
                echo "<br>
Payment Type : ";
                // line 245
                if (($this->getAttribute($context["order"], "paymentType", array()) == "cod")) {
                    echo "Cash On Delivery ";
                } elseif (($this->getAttribute($context["order"], "paymentType", array()) == "sod")) {
                    echo " Swipe On Delivery ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "paymentType", array()), "html", null, true);
                    echo " ";
                }
                // line 246
                echo "                           </small>
      </div>

      <hr>

      <!-- Details -->
<table>
  <tr>
    <td class=\"tdds\">Item</td>
      <td class=\"tds\">Net. Price</td>
    <td class=\"tds\">Qty</td>
    <td class=\"tds\">Discount</td>
    <td class=\"tds\">Total </td>
 </tr>
 ";
                // line 260
                $context["count"] = 0;
                // line 261
                echo " ";
                $context["sum"] = 0;
                // line 262
                echo " ";
                $context["discount"] = 0;
                // line 263
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 264
                    if (($this->getAttribute($context["item"], "order_d", array()) == $this->getAttribute($context["order"], "id", array()))) {
                        // line 265
                        if ((($this->getAttribute($context["item"], "tax", array()) == 0) || ($this->getAttribute($context["item"], "tax", array()) == ""))) {
                            // line 266
                            $context["taxp"] = $this->getAttribute($context["item"], "tax", array());
                            echo " 
<tr>
    <td class=\"tdd\">";
                            // line 268
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                            echo "<br>
    ";
                            // line 269
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "barcode", array()), "html", null, true);
                            echo "</td>
  ";
                            // line 270
                            $context["dis"] = ($this->getAttribute($context["item"], "discount", array()) + $this->getAttribute($context["item"], "discountPrice", array()));
                            // line 271
                            echo "    <td class=\"td\">";
                            $context["final"] = $this->getAttribute($context["item"], "price", array());
                            // line 272
                            echo "        ";
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 273
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor"), "html", null, true);
                                echo "
        ";
                            } elseif ((                            // line 274
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 275
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", ""), "html", null, true);
                                echo "
        ";
                            }
                            // line 277
                            echo "    </td>
    <td class=\"td\">";
                            // line 278
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                            echo "</td>
    <td class=\"td\">";
                            // line 279
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array()), "html", null, true);
                            echo "</td>
    <td class=\"td\">";
                            // line 280
                            $context["x"] = ($this->getAttribute($context["item"], "price", array()) * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 
        ";
                            // line 281
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 282
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["item"], "subTotal", array()), 2, "floor"), "html", null, true);
                                echo "
        ";
                            } elseif ((                            // line 283
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 284
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "subTotal", array()), 2, ".", ""), "html", null, true);
                                echo "
        ";
                            }
                            // line 286
                            echo "    </td>
 </tr>
 ";
                            // line 288
                            $context["fts"] = (0 * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 
 ";
                            // line 289
                            $context["stotal"] = ($this->getAttribute($context["item"], "subTotal", array()) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor"));
                            // line 290
                            echo "
";
                        } else {
                            // line 291
                            echo " 
<tr>
    <td class=\"tdd\">";
                            // line 293
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                            echo "<br>
    ";
                            // line 294
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "barcode", array()), "html", null, true);
                            echo " </td>
  ";
                            // line 295
                            $context["dis"] = ($this->getAttribute($context["item"], "discount", array()) + $this->getAttribute($context["item"], "discountPrice", array()));
                            // line 296
                            echo "    ";
                            if ((($context["orders"] ?? $this->getContext($context, "orders")) == "")) {
                                // line 297
                                echo "    <center>No Data Found!</center>
";
                            }
                            // line 298
                            echo "  
";
                            // line 299
                            if (($this->getAttribute($context["item"], "discount", array()) != 0)) {
                                // line 300
                                $context["discount"] = $this->getAttribute($context["item"], "discount", array());
                                // line 301
                                $context["quantity"] = $this->getAttribute($context["item"], "quantity", array());
                                // line 302
                                $context["priceO"] = (($context["discount"] ?? $this->getContext($context, "discount")) / ($context["quantity"] ?? $this->getContext($context, "quantity")));
                                // line 303
                                $context["price"] = ($this->getAttribute($context["item"], "price", array()) + ($context["priceO"] ?? $this->getContext($context, "priceO")));
                            } else {
                                // line 305
                                $context["price"] = $this->getAttribute($context["item"], "price", array());
                            }
                            // line 307
                            echo " ";
                            $context["taxp"] = (($context["price"] ?? $this->getContext($context, "price")) / $this->getAttribute($context["item"], "tax", array()));
                            echo " ";
                            $context["finals"] = ($context["price"] ?? $this->getContext($context, "price"));
                            echo " 
";
                            // line 308
                            $context["xs"] = (100 + $this->getAttribute($context["item"], "tax", array()));
                            // line 309
                            echo " ";
                            $context["finals"] = ((($context["price"] ?? $this->getContext($context, "price")) * 100) / ($context["xs"] ?? $this->getContext($context, "xs")));
                            echo " 
                                     ";
                            // line 310
                            $context["final"] = ($context["finals"] ?? $this->getContext($context, "finals"));
                            // line 311
                            echo "   ";
                            $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - ($context["final"] ?? $this->getContext($context, "final")));
                            echo " 

   ";
                            // line 313
                            $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 

    <td class=\"td\">";
                            // line 315
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
  
    <td class=\"td\">";
                            // line 317
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                            echo "</td>
    <td class=\"td\">";
                            // line 318
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array()), "html", null, true);
                            echo "</td>
      ";
                            // line 319
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 320
                                $context["subTotals"] = (twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor") * $this->getAttribute($context["item"], "quantity", array()));
                                echo " 
";
                            } elseif ((                            // line 321
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 322
                                $context["subTotals"] = (twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", "") * $this->getAttribute($context["item"], "quantity", array()));
                                echo " 
";
                            }
                            // line 324
                            echo "    <td class=\"td\"> 
";
                            // line 325
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 326
                                echo " ";
                                $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor"));
                                echo " ";
                                $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                                echo " 

";
                            } elseif ((                            // line 328
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 329
                                $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", ""));
                                echo " 
";
                            }
                            // line 331
                            $context["fts"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 

      ";
                            // line 333
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                $context["x"] = twig_round(($context["subTotals"] ?? $this->getContext($context, "subTotals")), 2, "floor");
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                $context["x"] = twig_number_format_filter($this->env, ($context["subTotals"] ?? $this->getContext($context, "subTotals")), 2, ".", "");
                            }
                            // line 334
                            echo " ";
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 335
                                echo " ";
                                $context["stotal"] = (($context["x"] ?? $this->getContext($context, "x")) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor"));
                                // line 336
                                echo "                                       ";
                                echo twig_escape_filter($this->env, (($context["x"] ?? $this->getContext($context, "x")) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor")), "html", null, true);
                                echo "
                                    ";
                            } elseif ((                            // line 337
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 338
                                echo "                                       ";
                                echo twig_escape_filter($this->env, (($context["x"] ?? $this->getContext($context, "x")) - twig_number_format_filter($this->env, $this->getAttribute($context["item"], "discount", array()), 2, ".", "")), "html", null, true);
                                echo "
                                        ";
                                // line 339
                                $context["stotal"] = (($context["x"] ?? $this->getContext($context, "x")) - twig_number_format_filter($this->env, $this->getAttribute($context["item"], "discount", array()), 2, ".", ""));
                                // line 340
                                echo "
                                    ";
                            }
                            // line 342
                            echo "    </td>

 </tr>

 ";
                        }
                        // line 347
                        echo "    ";
                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + ($context["fts"] ?? $this->getContext($context, "fts")));
                        // line 348
                        echo "    ";
                        $context["sum"] = (($context["sum"] ?? $this->getContext($context, "sum")) + ($context["stotal"] ?? $this->getContext($context, "stotal")));
                        // line 349
                        echo "    ";
                        $context["discount"] = (($context["discount"] ?? $this->getContext($context, "discount")) + ($context["dis"] ?? $this->getContext($context, "dis")));
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 352
                echo "</table>
<hr>
";
                // line 354
                if (((($context["count"] ?? $this->getContext($context, "count")) == 0) || (($context["count"] ?? $this->getContext($context, "count")) == ""))) {
                    // line 355
                    echo "<div class=\"totalprice\">

        <p class=\"sub\"> Subtotal <span> ";
                    // line 357
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_round(($context["sum"] ?? $this->getContext($context, "sum")), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum"] ?? $this->getContext($context, "sum")), 2, ".", ""), "html", null, true);
                    }
                    echo "</span></p>
        <!-- <p class=\"del\"> Tax <span>   ";
                    // line 358
                    echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                    echo " </span> </p> -->
        <!-- <p class=\"del\"> Discount <span> ";
                    // line 359
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["order"], "totalDiscount", array()) + $this->getAttribute($context["order"], "discountTotal", array())), "html", null, true);
                    echo " </span> </p> -->
 <p class=\"del\"> Delivery <span> ";
                    // line 360
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "deliveryCharge", array()), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "deliveryCharge", array()), 2, ".", ""), "html", null, true);
                    }
                    echo " </span> </p>
  ";
                    // line 361
                    if (($this->getAttribute($context["order"], "promocode", array()) == "")) {
                        // line 362
                        echo "        ";
                    } else {
                        // line 363
                        echo "        ";
                    }
                    // line 364
                    echo "      ";
                    if (($this->getAttribute($context["order"], "loyalty", array()) == 0)) {
                        // line 365
                        echo "        ";
                    } else {
                        // line 366
                        echo "        <p class=\"del\"> Loyalty <span>-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "loyalty", array()), "html", null, true);
                        echo "</span> </p>
        ";
                    }
                    // line 368
                    echo "        <hr>

        <p class=\"del\"> Total <span> ";
                    // line 370
                    if (($this->getAttribute($context["order"], "paymentType", array()) == "wallet")) {
                        echo " ";
                        $context["total"] = (($this->getAttribute($context["order"], "actualAmount", array()) + $this->getAttribute($context["order"], "deliveryCharge", array())) + $this->getAttribute($context["order"], "totalDiscount", array()));
                        echo " ";
                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                            echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total")), 2, "floor"), "html", null, true);
                        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                        }
                        echo " ";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
                    }
                    echo "</span> </p>

      </div>

      ";
                    // line 374
                    if ((($context["discount"] ?? $this->getContext($context, "discount")) == 0)) {
                        // line 375
                        echo "      ";
                    } else {
                        // line 376
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
                        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                            // line 377
                            echo "       <center><b>You Saved ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "currencyFormat", array()), "html", null, true);
                            $context["d"] = ($context["discount"] ?? $this->getContext($context, "discount"));
                            echo " ";
                            echo twig_escape_filter($this->env, ($context["d"] ?? $this->getContext($context, "d")), "html", null, true);
                            echo "</b></center>
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 379
                        echo "        ";
                    }
                    // line 380
                    echo "<center style=\"font-size:10px;\"> 
    ";
                    // line 381
                    if (($this->getAttribute($context["order"], "promocode", array()) != "")) {
                        // line 382
                        echo "  <span> Promocode (";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "promocode", array()), "html", null, true);
                        echo ")<span> <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalDiscount", array()), "html", null, true);
                        echo " OFF!</b></span><br>
";
                    }
                    // line 384
                    echo "<span>Wallet Payment : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "wallet", array()), "html", null, true);
                    echo " | Cash/Online Payment :  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
                    echo "</span></center>
";
                } else {
                    // line 386
                    echo "      <div class=\"totalprice\">

        <p class=\"sub\"> Subtotal <span> ";
                    // line 388
                    $context["x"] = (($this->getAttribute($context["order"], "actualAmount", array()) * ($context["count"] ?? $this->getContext($context, "count"))) / 100);
                    echo " ";
                    $context["fin"] = (($context["sum"] ?? $this->getContext($context, "sum")) - ($context["x"] ?? $this->getContext($context, "x")));
                    echo " ";
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum"] ?? $this->getContext($context, "sum")), 2, ".", ""), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum"] ?? $this->getContext($context, "sum")), 2, ".", ""), "html", null, true);
                    }
                    echo "</span></p>
        ";
                    // line 389
                    if (($this->getAttribute($context["res"], "currencyFormat", array()) == "AED")) {
                        // line 390
                        echo "<p class=\"del\"> VAT <span>   ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), 2, ".", ""), "html", null, true);
                        echo " </span> </p> 
";
                    } else {
                        // line 392
                        echo "<p class=\"del\"> Tax <span>   ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), 2, ".", ""), "html", null, true);
                        echo " </span> </p> 

        ";
                    }
                    // line 395
                    echo "  

        <p class=\"del\"> Delivery <span> ";
                    // line 397
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "deliveryCharge", array()), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "deliveryCharge", array()), 2, ".", ""), "html", null, true);
                    }
                    echo " </span> </p>
  ";
                    // line 398
                    if (($this->getAttribute($context["order"], "promocode", array()) == "")) {
                        // line 399
                        echo "        ";
                    } else {
                        // line 400
                        echo "        ";
                    }
                    // line 401
                    echo "      ";
                    if (($this->getAttribute($context["order"], "loyalty", array()) == 0)) {
                        // line 402
                        echo "        ";
                    } else {
                        // line 403
                        echo "        <p class=\"del\"> Loyalty <span>-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "loyalty", array()), "html", null, true);
                        echo "</span> </p>
        ";
                    }
                    // line 405
                    echo " 
         
               <hr>

   <p class=\"del\"> Total <span> ";
                    // line 409
                    if (($this->getAttribute($context["order"], "paymentType", array()) == "wallet")) {
                        echo " ";
                        $context["total"] = (($this->getAttribute($context["order"], "actualAmount", array()) + $this->getAttribute($context["order"], "deliveryCharge", array())) + $this->getAttribute($context["order"], "totalDiscount", array()));
                        echo " ";
                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                        }
                        echo " ";
                    } else {
                        $context["total"] = (((($this->getAttribute($context["order"], "actualAmount", array()) + $this->getAttribute($context["order"], "wallet", array())) + $this->getAttribute($context["order"], "loyalty", array())) + $this->getAttribute($context["order"], "deliveryCharge", array())) + $this->getAttribute($context["order"], "totalDiscount", array()));
                        echo " ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                    }
                    echo "</span> </p>

      </div>
      ";
                    // line 412
                    if ((($context["discount"] ?? $this->getContext($context, "discount")) == 0)) {
                        // line 413
                        echo "      ";
                    } else {
                        // line 414
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
                        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                            // line 415
                            echo "       <center><b>You Saved ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "currencyFormat", array()), "html", null, true);
                            $context["d"] = ($context["discount"] ?? $this->getContext($context, "discount"));
                            echo " ";
                            echo twig_escape_filter($this->env, ($context["d"] ?? $this->getContext($context, "d")), "html", null, true);
                            echo "</b></center>
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 417
                        echo "     ";
                    }
                    // line 418
                    echo "<center style=\"font-size:10px;\">
  ";
                    // line 419
                    if (($this->getAttribute($context["order"], "promocode", array()) != "")) {
                        // line 420
                        echo "  <span> Promocode (";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "promocode", array()), "html", null, true);
                        echo ")<span> <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalDiscount", array()), "html", null, true);
                        echo " OFF!</b></span><br>
";
                    }
                    // line 422
                    echo "Wallet Payment : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "wallet", array()), "html", null, true);
                    echo " | Cash/Online Payment :  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
                    echo "</span></center>

";
                    // line 424
                    if (($this->getAttribute($context["res"], "currencyFormat", array()) == "AED")) {
                    } else {
                        // line 426
                        if (((($context["count"] ?? $this->getContext($context, "count")) == 0) || (($context["count"] ?? $this->getContext($context, "count")) == ""))) {
                        } else {
                            // line 428
                            echo " 
<table>
  <tr>
    <td class=\"tdss\">GST Index</td>
    <td class=\"tdss\">Taxable Amount</td>
    <td class=\"tdss\">CGST</td>
    <td class=\"tdss\">SGST</td>
    <td class=\"tdss\">Total</td>
 </tr>
 <hr>       

 ";
                            // line 439
                            $context["count"] = 1;
                            // line 440
                            echo "  ";
                            $context["res"] = 0;
                            // line 441
                            echo "  ";
                            $context["data"] = 0;
                            // line 442
                            echo "
 ";
                            // line 443
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["tax"] ?? $this->getContext($context, "tax")));
                            foreach ($context['_seq'] as $context["_key"] => $context["ta"]) {
                                // line 444
                                echo " ";
                                if (($this->getAttribute($context["order"], "id", array()) == $this->getAttribute($context["ta"], "order_d", array()))) {
                                    // line 445
                                    echo "
 ";
                                    // line 446
                                    if (($this->getAttribute($context["ta"], "tax", array()) == 0)) {
                                        // line 447
                                        echo " ";
                                    } else {
                                        // line 448
                                        echo "  <tr> 
    <td class=\"td\">";
                                        // line 449
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["ta"], "tax", array()), "html", null, true);
                                        echo "</td>
    <td class=\"td\">";
                                        // line 450
                                        $context["x"] = (100 + $this->getAttribute($context["ta"], "tax", array()));
                                        // line 451
                                        echo "                                     ";
                                        $context["pr"] = (($this->getAttribute($context["ta"], "subTotal", array()) * 100) / ($context["x"] ?? $this->getContext($context, "x")));
                                        echo " 
                                     ";
                                        // line 452
                                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                            // line 453
                                            echo "                                      ";
                                            echo twig_escape_filter($this->env, twig_round(($context["pr"] ?? $this->getContext($context, "pr")), 2, "floor"), "html", null, true);
                                            echo "
                                    ";
                                        } elseif ((                                        // line 454
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                            // line 455
                                            echo "                                      ";
                                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["pr"] ?? $this->getContext($context, "pr")), 2, ".", ""), "html", null, true);
                                            echo "
                                    ";
                                        }
                                        // line 457
                                        echo "</td>
";
                                        // line 458
                                        $context["cgst"] = ($this->getAttribute($context["ta"], "subTotal", array()) - ($context["pr"] ?? $this->getContext($context, "pr")));
                                        echo " 
    <td class=\"td\">";
                                        // line 459
                                        $context["cg"] = (($context["cgst"] ?? $this->getContext($context, "cgst")) / 2);
                                        echo " 
    ";
                                        // line 460
                                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                            // line 461
                                            echo "      ";
                                            echo twig_escape_filter($this->env, twig_round(($context["cg"] ?? $this->getContext($context, "cg")), 2, "floor"), "html", null, true);
                                            echo "
    ";
                                        } elseif ((                                        // line 462
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                            // line 463
                                            echo "      ";
                                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cg"] ?? $this->getContext($context, "cg")), 2, ".", ""), "html", null, true);
                                            echo "
    ";
                                        }
                                        // line 465
                                        echo "      </td>
    <td class=\"td\">  
    ";
                                        // line 467
                                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                            // line 468
                                            echo "      ";
                                            echo twig_escape_filter($this->env, twig_round(($context["cg"] ?? $this->getContext($context, "cg")), 2, "floor"), "html", null, true);
                                            echo "
    ";
                                        } elseif ((                                        // line 469
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                            // line 470
                                            echo "      ";
                                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cg"] ?? $this->getContext($context, "cg")), 2, ".", ""), "html", null, true);
                                            echo "
    ";
                                        }
                                        // line 472
                                        echo "    </td>
    <td class=\"td\">";
                                        // line 473
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["ta"], "subTotal", array()), "html", null, true);
                                        echo "</td>
 </tr>
 ";
                                        // line 475
                                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                                        // line 476
                                        echo " ";
                                        $context["res"] = ($context["res"] + ($context["cg"] ?? $this->getContext($context, "cg")));
                                        // line 477
                                        echo "  ";
                                        $context["data"] = (($context["data"] ?? $this->getContext($context, "data")) + ($context["pr"] ?? $this->getContext($context, "pr")));
                                        // line 478
                                        echo " ";
                                    }
                                    // line 479
                                    echo " ";
                                }
                                // line 480
                                echo "
";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ta'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 482
                            echo "
<tr>
<th colspan=\"5\"><hr></th></tr>
  <tr>

    <td class=\"tdss\">Total</td>
    <td class=\"tdss\">";
                            // line 488
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_round(($context["data"] ?? $this->getContext($context, "data")), 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
    <td class=\"tdss\">";
                            // line 489
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_round($context["res"], 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $context["res"], 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
    <td class=\"tdss\">";
                            // line 490
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_round($context["res"], 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $context["res"], 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
    <td class=\"tdss\">";
                            // line 491
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "actualAmount", array()), 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "actualAmount", array()), 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
 </tr>
</table>
";
                        }
                    }
                    // line 496
                    echo " ";
                }
                // line 497
                echo "
<hr>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 500
            echo "
      <!-- Footer -->
      <footer><b> Thank you for ordering with      ";
            // line 502
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 503
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantName", array()), "html", null, true);
                echo "</b> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</footer>

    </div>
  </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 507
        echo "   
";
        
        $__internal_a1942ab56606183969aae9ba361986f1f78a6e1c38230c3b1183b829354be1ce->leave($__internal_a1942ab56606183969aae9ba361986f1f78a6e1c38230c3b1183b829354be1ce_prof);

        
        $__internal_4f11d91f4a19052311c20deab89bbcaf76f8e4fa54165d3a08e9e9d4abb4dcd8->leave($__internal_4f11d91f4a19052311c20deab89bbcaf76f8e4fa54165d3a08e9e9d4abb4dcd8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Orders/multithermal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1129 => 507,  1113 => 503,  1109 => 502,  1105 => 500,  1097 => 497,  1094 => 496,  1082 => 491,  1074 => 490,  1066 => 489,  1058 => 488,  1050 => 482,  1043 => 480,  1040 => 479,  1037 => 478,  1034 => 477,  1031 => 476,  1029 => 475,  1024 => 473,  1021 => 472,  1015 => 470,  1013 => 469,  1008 => 468,  1006 => 467,  1002 => 465,  996 => 463,  994 => 462,  989 => 461,  987 => 460,  983 => 459,  979 => 458,  976 => 457,  970 => 455,  968 => 454,  963 => 453,  961 => 452,  956 => 451,  954 => 450,  950 => 449,  947 => 448,  944 => 447,  942 => 446,  939 => 445,  936 => 444,  932 => 443,  929 => 442,  926 => 441,  923 => 440,  921 => 439,  908 => 428,  905 => 426,  902 => 424,  894 => 422,  886 => 420,  884 => 419,  881 => 418,  878 => 417,  866 => 415,  861 => 414,  858 => 413,  856 => 412,  836 => 409,  830 => 405,  824 => 403,  821 => 402,  818 => 401,  815 => 400,  812 => 399,  810 => 398,  802 => 397,  798 => 395,  791 => 392,  785 => 390,  783 => 389,  771 => 388,  767 => 386,  759 => 384,  751 => 382,  749 => 381,  746 => 380,  743 => 379,  731 => 377,  726 => 376,  723 => 375,  721 => 374,  702 => 370,  698 => 368,  692 => 366,  689 => 365,  686 => 364,  683 => 363,  680 => 362,  678 => 361,  670 => 360,  666 => 359,  662 => 358,  654 => 357,  650 => 355,  648 => 354,  644 => 352,  636 => 349,  633 => 348,  630 => 347,  623 => 342,  619 => 340,  617 => 339,  612 => 338,  610 => 337,  605 => 336,  602 => 335,  599 => 334,  593 => 333,  588 => 331,  583 => 329,  581 => 328,  573 => 326,  571 => 325,  568 => 324,  563 => 322,  561 => 321,  557 => 320,  555 => 319,  551 => 318,  547 => 317,  538 => 315,  533 => 313,  527 => 311,  525 => 310,  520 => 309,  518 => 308,  511 => 307,  508 => 305,  505 => 303,  503 => 302,  501 => 301,  499 => 300,  497 => 299,  494 => 298,  490 => 297,  487 => 296,  485 => 295,  481 => 294,  475 => 293,  471 => 291,  467 => 290,  465 => 289,  461 => 288,  457 => 286,  451 => 284,  449 => 283,  444 => 282,  442 => 281,  438 => 280,  434 => 279,  430 => 278,  427 => 277,  421 => 275,  419 => 274,  414 => 273,  411 => 272,  408 => 271,  406 => 270,  402 => 269,  396 => 268,  391 => 266,  389 => 265,  387 => 264,  383 => 263,  380 => 262,  377 => 261,  375 => 260,  359 => 246,  349 => 245,  343 => 244,  339 => 243,  335 => 242,  331 => 241,  327 => 240,  323 => 239,  319 => 238,  315 => 237,  311 => 236,  307 => 235,  295 => 226,  291 => 225,  286 => 223,  282 => 222,  278 => 221,  267 => 219,  263 => 218,  257 => 215,  252 => 212,  249 => 211,  245 => 210,  242 => 209,  238 => 208,  32 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        {% if yes == 1 %}
    <center>No Data Found!</center>
{% endif %}

      <style type=\"text/css\">
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

/* The Receipt */
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
.body {
    width: 100%;
    display: inline-block;
    margin: 0 auto;
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
.tdd
{
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
.tdds {
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
    margin: seconds.3px 0;
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
    {% for order in orders %}

    {% for res in restaurant%}
    {% set numberFormat = res.number_format %}
       <div class=\"body\">

    <div class=\"receipt\">
      <h2 class=\"name\"> {{ res.restaurantName }} </h2>
      
    <center>  
    <b>#{{ order.id }}</b>
    <h4>{% if order.orderType == 'Delivery' %} Home Delivery {% elseif order.orderType == 'pickup' %} Pickup From Store {% else %} Express Delivery {% endif %}</h4>
 <div class=\"order\"><small>
                           {{ res.restaurantAddress }}<br>
                           {{ res.restaurantLocation }}<br>
                            Gst No:{{ res.gst }}<br>

                           Mobile : {{ res.primaryMobile }}<br>
                           Email : {{ res.primaryEmail }} 
                         </small>
                         </div></center>
<hr>

    <div class=\"order\">

      <p>Bill to/Ship to:<br>
                           <small>
                           {{ order.customerName }}<br>
                           {{ order.address }}<br>
                           {{ order.landmark }}<br>
                           Mobile : {{ order.mobileNo }}<br>
                           Email : {{ order.email }}<br>
                           Gst No: {{ order.gst }}<br>
                           Delivery Date :  {{ order.fixDate }}<br>
Delivery Time : {{ order.fixtime }}<br>
Note : <b>{{ order.note }}</b><br>
Order Date :{{  order.orderDate|date(\"d-m-Y\") }} at {{  order.orderDate|date(\"h-i A\") }}<br>
Payment Type : {% if order.paymentType == 'cod' %}Cash On Delivery {% elseif order.paymentType == 'sod'%} Swipe On Delivery {% else %} {{ order.paymentType }} {% endif %}
                           </small>
      </div>

      <hr>

      <!-- Details -->
<table>
  <tr>
    <td class=\"tdds\">Item</td>
      <td class=\"tds\">Net. Price</td>
    <td class=\"tds\">Qty</td>
    <td class=\"tds\">Discount</td>
    <td class=\"tds\">Total </td>
 </tr>
 {% set count = 0 %}
 {% set sum = 0 %}
 {% set discount = 0 %}
{% for item in items %}
{% if item.order_d == order.id %}
{% if item.tax == 0 or item.tax == ''%}
{% set taxp = item.tax %} 
<tr>
    <td class=\"tdd\">{{ item.itemName }} - {{ item.priceVariavtion }}<br>
    {{ item.barcode }}</td>
  {% set dis = item.discount+item.discountPrice %}
    <td class=\"td\">{% set final = item.price  %}
        {% if numberFormat == 0 %}
          {{ final|round(2, 'floor') }}
        {% elseif numberFormat == 1 %}
          {{ final|number_format(2, '.', '') }}
        {% endif %}
    </td>
    <td class=\"td\">{{ item.quantity }}</td>
    <td class=\"td\">{{ item.discount }}</td>
    <td class=\"td\">{% set x =  item.price * item.quantity  %} 
        {% if numberFormat == 0 %}
          {{ item.subTotal|round(2, 'floor') }}
        {% elseif numberFormat == 1 %}
          {{ item.subTotal|number_format(2, '.', '') }}
        {% endif %}
    </td>
 </tr>
 {% set fts=0*item.quantity %} 
 {% set stotal = item.subTotal - item.discount|round(2, 'floor')%}

{% else %} 
<tr>
    <td class=\"tdd\">{{ item.itemName }} - {{ item.priceVariavtion }}<br>
    {{ item.barcode }} </td>
  {% set dis = item.discount+item.discountPrice %}
    {% if orders == '' %}
    <center>No Data Found!</center>
{% endif %}  
{% if item.discount != 0 %}
{% set discount = item.discount %}
{% set quantity = item.quantity %}
{% set priceO = discount/quantity %}
{% set price = item.price + priceO %}
{% else %}
{% set price = item.price %}
{% endif %}
 {% set taxp = price / item.tax %} {% set finals = price  %} 
{% set xs= 100+item.tax %}
 {% set finals=price*100/xs %} 
                                     {% set final =  finals %}
   {% set f=price-final %} 

   {% set ft=f*item.quantity %} 

    <td class=\"td\">{% if numberFormat == 0 %}{{ final|round(2, 'floor') }}{% elseif numberFormat == 1 %}{{ final|number_format(2, '.', '') }}{% endif %}</td>
  
    <td class=\"td\">{{ item.quantity }}</td>
    <td class=\"td\">{{ item.discount }}</td>
      {% if numberFormat == 0 %}
{% set subTotals = final|round(2, 'floor') * item.quantity %} 
{% elseif numberFormat == 1 %}
{% set subTotals = final|number_format(2, '.', '') * item.quantity %} 
{% endif %}
    <td class=\"td\"> 
{% if numberFormat == 0 %}
 {% set f=price-final|round(2, 'floor') %} {% set ft=f*item.quantity %} 

{% elseif numberFormat == 1 %}
{% set f=price-final|number_format(2, '.', '') %} 
{% endif %}
{% set fts=f*item.quantity %} 

      {% if numberFormat == 0 %}{% set x = subTotals|round(2, 'floor') %}{% elseif numberFormat == 1 %}{% set x = subTotals|number_format(2, '.', '') %}{% endif %}
 {% if numberFormat == 0 %}
 {% set stotal = x - item.discount|round(2, 'floor')%}
                                       {{ x - item.discount|round(2, 'floor') }}
                                    {% elseif numberFormat == 1 %}
                                       {{ x - item.discount|number_format(2, '.', '') }}
                                        {% set stotal = x - item.discount|number_format(2, '.', '') %}

                                    {% endif %}
    </td>

 </tr>

 {% endif %}
    {% set count = count + fts %}
    {% set sum = sum + stotal %}
    {% set discount = discount + dis %}
{% endif %}
{% endfor %}
</table>
<hr>
{% if count == 0 or count == ''%}
<div class=\"totalprice\">

        <p class=\"sub\"> Subtotal <span> {% if numberFormat == 0 %}{{ sum|round(2,'floor')}}{% elseif numberFormat == 1 %}{{ sum|number_format(2, '.', '')}}{% endif %}</span></p>
        <!-- <p class=\"del\"> Tax <span>   {{ count }} </span> </p> -->
        <!-- <p class=\"del\"> Discount <span> {{ order.totalDiscount + order.discountTotal }} </span> </p> -->
 <p class=\"del\"> Delivery <span> {% if numberFormat == 0 %}{{ order.deliveryCharge|round(2, 'floor') }}{% elseif numberFormat == 1 %}{{ order.deliveryCharge|number_format(2, '.', '') }}{% endif %} </span> </p>
  {% if order.promocode == ''%}
        {% else %}
        {% endif %}
      {% if order.loyalty == 0 %}
        {% else %}
        <p class=\"del\"> Loyalty <span>-{{ order.loyalty }}</span> </p>
        {% endif %}
        <hr>

        <p class=\"del\"> Total <span> {% if order.paymentType == 'wallet' %} {% set total = order.actualAmount + order.deliveryCharge + order.totalDiscount %} {% if numberFormat == 0 %}{{ total|round(2, 'floor') }}{% elseif numberFormat == 1 %}{{ total|number_format(2, '.', '') }}{% endif %} {% else %}{{ order.orderAmount  }}{% endif %}</span> </p>

      </div>

      {% if discount == 0  %}
      {% else %}
          {% for res in restaurant%}
       <center><b>You Saved {{ res.currencyFormat }}{% set d = discount %} {{ d }}</b></center>
        {% endfor %}
        {% endif %}
<center style=\"font-size:10px;\"> 
    {% if order.promocode != '' %}
  <span> Promocode ({{ order.promocode }})<span> <b>{{ order.totalDiscount }} OFF!</b></span><br>
{% endif %}
<span>Wallet Payment : {{ order.wallet }} | Cash/Online Payment :  {{ order.orderAmount }}</span></center>
{% else %}
      <div class=\"totalprice\">

        <p class=\"sub\"> Subtotal <span> {% set x = order.actualAmount * count / 100 %} {%  set fin = sum - x %} {% if numberFormat == 0 %}{{ sum|number_format(2, '.', '')}}{% elseif numberFormat == 1 %}{{ sum|number_format(2, '.', '')}}{% endif %}</span></p>
        {% if res.currencyFormat == 'AED' %}
<p class=\"del\"> VAT <span>   {{ count|number_format(2, '.', '') }} </span> </p> 
{% else %}
<p class=\"del\"> Tax <span>   {{ count|number_format(2, '.', '') }} </span> </p> 

        {% endif %}
  

        <p class=\"del\"> Delivery <span> {% if numberFormat == 0 %}{{ order.deliveryCharge|round(2, 'floor') }}{% elseif numberFormat == 1 %}{{ order.deliveryCharge|number_format(2, '.', '') }}{% endif %} </span> </p>
  {% if order.promocode == ''%}
        {% else %}
        {% endif %}
      {% if order.loyalty == 0 %}
        {% else %}
        <p class=\"del\"> Loyalty <span>-{{ order.loyalty }}</span> </p>
        {% endif %}
 
         
               <hr>

   <p class=\"del\"> Total <span> {% if order.paymentType == 'wallet' %} {% set total = order.actualAmount + order.deliveryCharge + order.totalDiscount %} {% if numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% elseif numberFormat == 1 %}{{ total|number_format(2, '.', '') }}{% endif %} {% else %}{% set total = order.actualAmount + order.wallet + order.loyalty + order.deliveryCharge + order.totalDiscount %} {{ total|number_format(2, '.', '') }}{% endif %}</span> </p>

      </div>
      {% if discount == 0  %}
      {% else %}
          {% for res in restaurant%}
       <center><b>You Saved {{ res.currencyFormat }}{% set d = discount %} {{ d }}</b></center>
        {% endfor %}
     {% endif %}
<center style=\"font-size:10px;\">
  {% if order.promocode != '' %}
  <span> Promocode ({{ order.promocode }})<span> <b>{{ order.totalDiscount }} OFF!</b></span><br>
{% endif %}
Wallet Payment : {{ order.wallet }} | Cash/Online Payment :  {{ order.orderAmount }}</span></center>

{% if res.currencyFormat == 'AED' %}
{% else %}
{% if count == 0 or count == '' %}
{% else %}
 
<table>
  <tr>
    <td class=\"tdss\">GST Index</td>
    <td class=\"tdss\">Taxable Amount</td>
    <td class=\"tdss\">CGST</td>
    <td class=\"tdss\">SGST</td>
    <td class=\"tdss\">Total</td>
 </tr>
 <hr>       

 {% set count = 1 %}
  {% set res = 0 %}
  {% set data = 0 %}

 {% for ta in tax %}
 {% if order.id == ta.order_d %}

 {% if ta.tax == 0 %}
 {% else %}
  <tr> 
    <td class=\"td\">{{ ta.tax }}</td>
    <td class=\"td\">{% set x= 100+ta.tax %}
                                     {% set pr=ta.subTotal*100/x %} 
                                     {% if numberFormat == 0 %}
                                      {{ pr|round(2, 'floor') }}
                                    {% elseif numberFormat == 1 %}
                                      {{ pr|number_format(2, '.', '') }}
                                    {% endif %}
</td>
{% set cgst = ta.subTotal-pr %} 
    <td class=\"td\">{% set cg = cgst/2 %} 
    {% if numberFormat == 0 %}
      {{ cg|round(2,'floor') }}
    {% elseif numberFormat == 1 %}
      {{ cg|number_format(2, '.', '') }}
    {% endif %}
      </td>
    <td class=\"td\">  
    {% if numberFormat == 0 %}
      {{ cg|round(2,'floor') }}
    {% elseif numberFormat == 1 %}
      {{ cg|number_format(2, '.', '') }}
    {% endif %}
    </td>
    <td class=\"td\">{{ ta.subTotal }}</td>
 </tr>
 {% set count = count + 1 %}
 {% set res = res + cg %}
  {% set data = data + pr %}
 {% endif %}
 {% endif %}

{% endfor %}

<tr>
<th colspan=\"5\"><hr></th></tr>
  <tr>

    <td class=\"tdss\">Total</td>
    <td class=\"tdss\">{% if numberFormat == 0 %}{{ data|round(2,'floor') }}{% elseif numberFormat == 1 %}{{ data|number_format(2, '.', '') }}{% endif %}</td>
    <td class=\"tdss\">{% if numberFormat == 0 %}{{ res|round(2,'floor') }}{% elseif numberFormat == 1 %}{{ res|number_format(2, '.', '') }}{% endif %}</td>
    <td class=\"tdss\">{% if numberFormat == 0 %}{{ res|round(2,'floor') }}{% elseif numberFormat == 1 %}{{ res|number_format(2, '.', '') }}{% endif %}</td>
    <td class=\"tdss\">{% if numberFormat == 0 %}{{ order.actualAmount|round(2,'floor') }}{% elseif numberFormat == 1 %}{{ order.actualAmount|number_format(2, '.', '') }}{% endif %}</td>
 </tr>
</table>
{% endif %}
{% endif %}
 {% endif %}

<hr>
   {% endfor %}

      <!-- Footer -->
      <footer><b> Thank you for ordering with      {% for res in restaurant%}
{{ res.restaurantName }}</b> {% endfor %}</footer>

    </div>
  </div>
   {% endfor %}   
", "AppBundle:Admin:Orders/multithermal.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Orders/multithermal.html.twig");
    }
}
