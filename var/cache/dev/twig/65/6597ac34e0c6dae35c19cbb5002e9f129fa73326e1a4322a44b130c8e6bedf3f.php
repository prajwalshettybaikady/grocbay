<?php

/* AppBundle:Admin:Orders/thermal.html.twig */
class __TwigTemplate_05f7f7e58f5c74eddd5d1b374c5dcb6f8d810b7792311a0b0ad4336d755a40fc extends Twig_Template
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
        $__internal_8a4691d9222cb29e634f7e38b770a5bef7cf8dcec8d89cf761b1145eb77b5a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4691d9222cb29e634f7e38b770a5bef7cf8dcec8d89cf761b1145eb77b5a5f->enter($__internal_8a4691d9222cb29e634f7e38b770a5bef7cf8dcec8d89cf761b1145eb77b5a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/thermal.html.twig"));

        $__internal_42b8d75f4fd8ce30453a8afe36d10a84a2e88cbb68f1dea5adadc3be1f4cadaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b8d75f4fd8ce30453a8afe36d10a84a2e88cbb68f1dea5adadc3be1f4cadaf->enter($__internal_42b8d75f4fd8ce30453a8afe36d10a84a2e88cbb68f1dea5adadc3be1f4cadaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Orders/thermal.html.twig"));

        // line 1
        echo "  <style type=\"text/css\">
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
  font-size: 15px;
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
    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 203
            echo "       <div class=\"body\">

    <div class=\"receipt\">

      <h2 class=\"name\"> ";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantName", array()), "html", null, true);
            echo " </h2>
      
    <center> 
     ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 211
                echo "    <b>#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                echo "</b>
    <h4>";
                // line 212
                if (($this->getAttribute($context["order"], "orderType", array()) == "Delivery")) {
                    echo " Home Delivery ";
                } elseif (($this->getAttribute($context["order"], "orderType", array()) == "pickup")) {
                    echo " Pickup From Store ";
                } else {
                    echo " Express Delivery ";
                }
                echo "</h4>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "   
  <div class=\"order\"><small>
                           ";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantAddress", array()), "html", null, true);
            echo "<br>
                           ";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantLocation", array()), "html", null, true);
            echo "<br>
                            Gst No:";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "gst", array()), "html", null, true);
            echo "<br>

                           Mobile : ";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "primaryMobile", array()), "html", null, true);
            echo "<br>
                           Email : ";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "primaryEmail", array()), "html", null, true);
            echo " 
                         </small>
                         </div></center>

<hr>
      <!-- Order info -->
      <div class=\"order\">
    ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 228
                echo "
      <p>Bill to/Ship to:<br>
                           <small>
                           ";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "customerName", array()), "html", null, true);
                echo "<br>
                           ";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "address", array()), "html", null, true);
                echo "<br>
                           ";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "landmark", array()), "html", null, true);
                echo "<br>
                           Mobile : ";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "mobileNo", array()), "html", null, true);
                echo "<br>
                           Email : ";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "email", array()), "html", null, true);
                echo "<br>
                           Gst No: ";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "gst", array()), "html", null, true);
                echo "<br>
                           Delivery Date :  ";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fixDate", array()), "html", null, true);
                echo "<br>
Delivery Time : ";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fixtime", array()), "html", null, true);
                echo "<br>
Note : <b>";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "note", array()), "html", null, true);
                echo "</b><br>
Order Date :";
                // line 240
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "orderDate", array()), "d-m-Y"), "html", null, true);
                echo " at ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "orderDate", array()), "h-i A"), "html", null, true);
                echo "<br>
Payment Type : ";
                // line 241
                if (($this->getAttribute($context["order"], "paymentType", array()) == "cod")) {
                    echo "Cash On Delivery ";
                } elseif (($this->getAttribute($context["order"], "paymentType", array()) == "sod")) {
                    echo " Swipe On Delivery ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "paymentType", array()), "html", null, true);
                    echo " ";
                }
                // line 242
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
                // line 257
                $context["count"] = 0;
                // line 258
                echo " ";
                $context["sum"] = 0;
                // line 259
                echo " ";
                $context["discount"] = 0;
                // line 260
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 261
                    if (($this->getAttribute($context["item"], "order_d", array()) == $this->getAttribute($context["order"], "id", array()))) {
                        // line 262
                        if ((($this->getAttribute($context["item"], "tax", array()) == 0) || ($this->getAttribute($context["item"], "tax", array()) == ""))) {
                            // line 263
                            $context["taxp"] = $this->getAttribute($context["item"], "tax", array());
                            echo " 
<tr>
    <td class=\"tdd\">";
                            // line 265
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                            echo "<br>
    ";
                            // line 266
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "barcode", array()), "html", null, true);
                            echo "</td>
  ";
                            // line 267
                            $context["dis"] = ($this->getAttribute($context["item"], "discount", array()) + $this->getAttribute($context["item"], "discountPrice", array()));
                            // line 268
                            echo "    <td class=\"td\">";
                            $context["final"] = $this->getAttribute($context["item"], "price", array());
                            // line 269
                            echo "        ";
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 270
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor"), "html", null, true);
                                echo "
        ";
                            } elseif ((                            // line 271
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 272
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", ""), "html", null, true);
                                echo "
        ";
                            }
                            // line 274
                            echo "    </td>
    <td class=\"td\">";
                            // line 275
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                            echo "</td>
    <td class=\"td\">";
                            // line 276
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array()), "html", null, true);
                            echo "</td>
    <td class=\"td\">";
                            // line 277
                            $context["x"] = ($this->getAttribute($context["item"], "price", array()) * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 
        ";
                            // line 278
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 279
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["item"], "subTotal", array()), 2, "floor"), "html", null, true);
                                echo "
        ";
                            } elseif ((                            // line 280
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 281
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "subTotal", array()), 2, ".", ""), "html", null, true);
                                echo "
        ";
                            }
                            // line 283
                            echo "    </td>
 </tr>
 ";
                            // line 285
                            $context["fts"] = (0 * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 
 ";
                            // line 286
                            $context["stotal"] = ($this->getAttribute($context["item"], "subTotal", array()) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor"));
                            // line 287
                            echo "
";
                        } else {
                            // line 288
                            echo " 
<tr>
    <td class=\"tdd\">";
                            // line 290
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                            echo "<br>
    ";
                            // line 291
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "barcode", array()), "html", null, true);
                            echo " </td>
  ";
                            // line 292
                            $context["dis"] = ($this->getAttribute($context["item"], "discount", array()) + $this->getAttribute($context["item"], "discountPrice", array()));
                            // line 293
                            echo "    ";
                            if ((($context["orders"] ?? $this->getContext($context, "orders")) == "")) {
                                // line 294
                                echo "    <center>No Data Found!</center>
";
                            }
                            // line 295
                            echo "  
";
                            // line 296
                            if (($this->getAttribute($context["item"], "discount", array()) != 0)) {
                                // line 297
                                $context["discount"] = $this->getAttribute($context["item"], "discount", array());
                                // line 298
                                $context["quantity"] = $this->getAttribute($context["item"], "quantity", array());
                                // line 299
                                $context["priceO"] = (($context["discount"] ?? $this->getContext($context, "discount")) / ($context["quantity"] ?? $this->getContext($context, "quantity")));
                                // line 300
                                $context["price"] = ($this->getAttribute($context["item"], "price", array()) + ($context["priceO"] ?? $this->getContext($context, "priceO")));
                            } else {
                                // line 302
                                $context["price"] = $this->getAttribute($context["item"], "price", array());
                            }
                            // line 304
                            echo " ";
                            $context["taxp"] = (($context["price"] ?? $this->getContext($context, "price")) / $this->getAttribute($context["item"], "tax", array()));
                            echo " ";
                            $context["finals"] = ($context["price"] ?? $this->getContext($context, "price"));
                            echo " 
";
                            // line 305
                            $context["xs"] = (100 + $this->getAttribute($context["item"], "tax", array()));
                            // line 306
                            echo " ";
                            $context["finals"] = ((($context["price"] ?? $this->getContext($context, "price")) * 100) / ($context["xs"] ?? $this->getContext($context, "xs")));
                            echo " 
                                     ";
                            // line 307
                            $context["final"] = ($context["finals"] ?? $this->getContext($context, "finals"));
                            // line 308
                            echo "   ";
                            $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - ($context["final"] ?? $this->getContext($context, "final")));
                            echo " 

   ";
                            // line 310
                            $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 

    <td class=\"td\">";
                            // line 312
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
  
    <td class=\"td\">";
                            // line 314
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                            echo "</td>
    <td class=\"td\">";
                            // line 315
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array()), "html", null, true);
                            echo "</td>
      ";
                            // line 316
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 317
                                $context["subTotals"] = (twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor") * $this->getAttribute($context["item"], "quantity", array()));
                                echo " 
";
                            } elseif ((                            // line 318
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 319
                                $context["subTotals"] = (twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", "") * $this->getAttribute($context["item"], "quantity", array()));
                                echo " 
";
                            }
                            // line 321
                            echo "    <td class=\"td\"> 
";
                            // line 322
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 323
                                echo " ";
                                $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor"));
                                echo " ";
                                $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                                echo " 

";
                            } elseif ((                            // line 325
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 326
                                $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", ""));
                                echo " 
";
                            }
                            // line 328
                            $context["fts"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 

      ";
                            // line 330
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                $context["x"] = twig_round(($context["subTotals"] ?? $this->getContext($context, "subTotals")), 2, "floor");
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                $context["x"] = twig_number_format_filter($this->env, ($context["subTotals"] ?? $this->getContext($context, "subTotals")), 2, ".", "");
                            }
                            // line 331
                            echo " ";
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 332
                                echo " ";
                                $context["stotal"] = (($context["x"] ?? $this->getContext($context, "x")) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor"));
                                // line 333
                                echo "                                       ";
                                echo twig_escape_filter($this->env, (($context["x"] ?? $this->getContext($context, "x")) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor")), "html", null, true);
                                echo "
                                    ";
                            } elseif ((                            // line 334
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 335
                                echo "                                       ";
                                echo twig_escape_filter($this->env, (($context["x"] ?? $this->getContext($context, "x")) - twig_number_format_filter($this->env, $this->getAttribute($context["item"], "discount", array()), 2, ".", "")), "html", null, true);
                                echo "
                                        ";
                                // line 336
                                $context["stotal"] = (($context["x"] ?? $this->getContext($context, "x")) - twig_number_format_filter($this->env, $this->getAttribute($context["item"], "discount", array()), 2, ".", ""));
                                // line 337
                                echo "
                                    ";
                            }
                            // line 339
                            echo "    </td>

 </tr>

 ";
                        }
                        // line 344
                        echo "    ";
                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + ($context["fts"] ?? $this->getContext($context, "fts")));
                        // line 345
                        echo "    ";
                        $context["sum"] = (($context["sum"] ?? $this->getContext($context, "sum")) + ($context["stotal"] ?? $this->getContext($context, "stotal")));
                        // line 346
                        echo "    ";
                        $context["discount"] = (($context["discount"] ?? $this->getContext($context, "discount")) + ($context["dis"] ?? $this->getContext($context, "dis")));
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 349
                echo "</table>
<hr>  
";
                // line 351
                if (((($context["count"] ?? $this->getContext($context, "count")) == 0) || (($context["count"] ?? $this->getContext($context, "count")) == ""))) {
                    // line 352
                    echo "<div class=\"totalprice\">

        <p class=\"sub\"> Subtotal <span> ";
                    // line 354
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_round(($context["sum"] ?? $this->getContext($context, "sum")), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum"] ?? $this->getContext($context, "sum")), 2, ".", ""), "html", null, true);
                    }
                    echo "</span></p>
        <!-- <p class=\"del\"> Tax <span>   ";
                    // line 355
                    echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                    echo " </span> </p> -->
        <!-- <p class=\"del\"> Discount <span> ";
                    // line 356
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["order"], "totalDiscount", array()) + $this->getAttribute($context["order"], "discountTotal", array())), "html", null, true);
                    echo " </span> </p> -->
 <p class=\"del\"> Delivery <span> ";
                    // line 357
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "deliveryCharge", array()), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "deliveryCharge", array()), 2, ".", ""), "html", null, true);
                    }
                    echo " </span> </p>
  ";
                    // line 358
                    if (($this->getAttribute($context["order"], "promocode", array()) == "")) {
                        // line 359
                        echo "        ";
                    } else {
                        // line 360
                        echo "        ";
                    }
                    // line 361
                    echo "      ";
                    if (($this->getAttribute($context["order"], "loyalty", array()) == 0)) {
                        // line 362
                        echo "        ";
                    } else {
                        // line 363
                        echo "        <p class=\"del\"> Loyalty <span>-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "loyalty", array()), "html", null, true);
                        echo "</span> </p>
        ";
                    }
                    // line 365
                    echo "        <hr>
";
                    // line 367
                    echo "        <p class=\"del\"> Total <span> ";
                    if (($this->getAttribute($context["order"], "paymentType", array()) == "wallet")) {
                        echo " ";
                        $context["total"] = (($this->getAttribute($context["order"], "actualAmount", array()) + $this->getAttribute($context["order"], "deliveryCharge", array())) + $this->getAttribute($context["order"], "totalDiscount", array()));
                        echo " ";
                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                            echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total")), 2, "floor"), "html", null, true);
                        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                        }
                        echo " ";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
                    }
                    echo "</span> </p>

      </div>

      ";
                    // line 371
                    if ((($context["discount"] ?? $this->getContext($context, "discount")) == 0)) {
                        // line 372
                        echo "      ";
                    } else {
                        echo " 
          ";
                        // line 373
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
                        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                            // line 374
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
                        // line 376
                        echo "        ";
                    }
                    // line 377
                    echo "<center style=\"font-size:10px;\"> 
    ";
                    // line 378
                    if (($this->getAttribute($context["order"], "promocode", array()) != "")) {
                        // line 379
                        echo "  <span> Promocode (";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "promocode", array()), "html", null, true);
                        echo ")<span> <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalDiscount", array()), "html", null, true);
                        echo " OFF!</b></span><br>
";
                    }
                    // line 381
                    echo "<span>Wallet Payment : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "wallet", array()), "html", null, true);
                    echo " | Cash/Online Payment :  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
                    echo "</span></center>
";
                } else {
                    // line 383
                    echo "      <div class=\"totalprice\">

        <p class=\"sub\"> Subtotal <span> ";
                    // line 385
                    $context["x"] = (($this->getAttribute($context["order"], "actualAmount", array()) * ($context["count"] ?? $this->getContext($context, "count"))) / 100);
                    echo " ";
                    $context["fin"] = (($context["sum"] ?? $this->getContext($context, "sum")) - ($context["x"] ?? $this->getContext($context, "x")));
                    echo " ";
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_round(($context["sum"] ?? $this->getContext($context, "sum")), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum"] ?? $this->getContext($context, "sum")), 2, ".", ""), "html", null, true);
                    }
                    echo "</span></p>
        ";
                    // line 386
                    if (($this->getAttribute($context["res"], "currencyFormat", array()) == "AED")) {
                        // line 387
                        echo "<p class=\"del\"> VAT <span>   ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), 2, ".", ""), "html", null, true);
                        echo " </span> </p> 
";
                    } else {
                        // line 389
                        echo "<p class=\"del\"> Tax <span>   ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), 2, ".", ""), "html", null, true);
                        echo " </span> </p> 

        ";
                    }
                    // line 392
                    echo "  

        <p class=\"del\"> Delivery <span> ";
                    // line 394
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "deliveryCharge", array()), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "deliveryCharge", array()), 2, ".", ""), "html", null, true);
                    }
                    echo " </span> </p>
  ";
                    // line 395
                    if (($this->getAttribute($context["order"], "promocode", array()) == "")) {
                        // line 396
                        echo "        ";
                    } else {
                        // line 397
                        echo "        ";
                    }
                    // line 398
                    echo "      ";
                    if (($this->getAttribute($context["order"], "loyalty", array()) == 0)) {
                        // line 399
                        echo "        ";
                    } else {
                        // line 400
                        echo "        <p class=\"del\"> Loyalty <span>-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "loyalty", array()), "html", null, true);
                        echo "</span> </p>
        ";
                    }
                    // line 402
                    echo " 
         
               <hr>

        <p class=\"del\"> Total <span> ";
                    // line 406
                    if (($this->getAttribute($context["order"], "paymentType", array()) == "wallet")) {
                        echo " ";
                        $context["total"] = (($this->getAttribute($context["order"], "actualAmount", array()) + $this->getAttribute($context["order"], "deliveryCharge", array())) + $this->getAttribute($context["order"], "totalDiscount", array()));
                        echo " ";
                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                            echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total")), 2, "floor"), "html", null, true);
                        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                        }
                        echo " ";
                    } else {
                        $context["total"] = (((($this->getAttribute($context["order"], "actualAmount", array()) + $this->getAttribute($context["order"], "wallet", array())) + $this->getAttribute($context["order"], "loyalty", array())) + $this->getAttribute($context["order"], "deliveryCharge", array())) + $this->getAttribute($context["order"], "totalDiscount", array()));
                        echo " ";
                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                            echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total")), 2, "floor"), "html", null, true);
                        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                        }
                    }
                    echo "</span> </p>

      </div>
      ";
                    // line 409
                    if ((($context["discount"] ?? $this->getContext($context, "discount")) == 0)) {
                        // line 410
                        echo "      ";
                    } else {
                        // line 411
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
                        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                            // line 412
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
                        // line 414
                        echo "     ";
                    }
                    // line 415
                    echo "<center style=\"font-size:10px;\">
  ";
                    // line 416
                    if (($this->getAttribute($context["order"], "promocode", array()) != "")) {
                        // line 417
                        echo "  <span> Promocode (";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "promocode", array()), "html", null, true);
                        echo ")<span> <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalDiscount", array()), "html", null, true);
                        echo " OFF!</b></span><br>
";
                    }
                    // line 419
                    echo "Wallet Payment : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "wallet", array()), "html", null, true);
                    echo " | Cash/Online Payment :  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
                    echo "</span></center>
";
                    // line 420
                    if (($this->getAttribute($context["res"], "currencyFormat", array()) == "AED")) {
                    } else {
                        // line 422
                        if (((($context["count"] ?? $this->getContext($context, "count")) == 0) || (($context["count"] ?? $this->getContext($context, "count")) == ""))) {
                        } else {
                            // line 424
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
                            // line 435
                            $context["count"] = 1;
                            // line 436
                            echo "  ";
                            $context["res"] = 0;
                            // line 437
                            echo "  ";
                            $context["data"] = 0;
                            // line 438
                            echo "
 ";
                            // line 439
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["tax"] ?? $this->getContext($context, "tax")));
                            foreach ($context['_seq'] as $context["_key"] => $context["ta"]) {
                                // line 440
                                echo " ";
                                if (($this->getAttribute($context["ta"], "tax", array()) == 0)) {
                                    // line 441
                                    echo " ";
                                } else {
                                    // line 442
                                    echo "  <tr> 
    <td class=\"td\">";
                                    // line 443
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["ta"], "tax", array()), "html", null, true);
                                    echo "</td>
    <td class=\"td\">";
                                    // line 444
                                    $context["x"] = (100 + $this->getAttribute($context["ta"], "tax", array()));
                                    // line 445
                                    echo "                                     ";
                                    $context["pr"] = (($this->getAttribute($context["ta"], "subTotal", array()) * 100) / ($context["x"] ?? $this->getContext($context, "x")));
                                    echo " 
                                     ";
                                    // line 446
                                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                        // line 447
                                        echo "                                      ";
                                        echo twig_escape_filter($this->env, twig_round(($context["pr"] ?? $this->getContext($context, "pr")), 2, "floor"), "html", null, true);
                                        echo "
                                    ";
                                    } elseif ((                                    // line 448
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                        // line 449
                                        echo "                                      ";
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["pr"] ?? $this->getContext($context, "pr")), 2, ".", ""), "html", null, true);
                                        echo "
                                    ";
                                    }
                                    // line 451
                                    echo "</td>
";
                                    // line 452
                                    $context["cgst"] = ($this->getAttribute($context["ta"], "subTotal", array()) - ($context["pr"] ?? $this->getContext($context, "pr")));
                                    echo " 
    <td class=\"td\">";
                                    // line 453
                                    $context["cg"] = (($context["cgst"] ?? $this->getContext($context, "cgst")) / 2);
                                    echo " 
    ";
                                    // line 454
                                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                        // line 455
                                        echo "      ";
                                        echo twig_escape_filter($this->env, twig_round(($context["cg"] ?? $this->getContext($context, "cg")), 2, "floor"), "html", null, true);
                                        echo "
    ";
                                    } elseif ((                                    // line 456
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                        // line 457
                                        echo "      ";
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cg"] ?? $this->getContext($context, "cg")), 2, ".", ""), "html", null, true);
                                        echo "
    ";
                                    }
                                    // line 459
                                    echo "      </td>
    <td class=\"td\">  
    ";
                                    // line 461
                                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                        // line 462
                                        echo "      ";
                                        echo twig_escape_filter($this->env, twig_round(($context["cg"] ?? $this->getContext($context, "cg")), 2, "floor"), "html", null, true);
                                        echo "
    ";
                                    } elseif ((                                    // line 463
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                        // line 464
                                        echo "      ";
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cg"] ?? $this->getContext($context, "cg")), 2, ".", ""), "html", null, true);
                                        echo "
    ";
                                    }
                                    // line 466
                                    echo "    </td>
    <td class=\"td\">";
                                    // line 467
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["ta"], "subTotal", array()), "html", null, true);
                                    echo "</td>
 </tr>
 ";
                                    // line 469
                                    $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                                    // line 470
                                    echo " ";
                                    $context["res"] = ($context["res"] + ($context["cg"] ?? $this->getContext($context, "cg")));
                                    // line 471
                                    echo "  ";
                                    $context["data"] = (($context["data"] ?? $this->getContext($context, "data")) + ($context["pr"] ?? $this->getContext($context, "pr")));
                                    // line 472
                                    echo " ";
                                }
                                // line 473
                                echo "
";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ta'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 475
                            echo "<tr>
<th colspan=\"5\"><hr></th></tr>
  <tr>

    <td class=\"tdss\">Total</td>
    <td class=\"tdss\">";
                            // line 480
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_round(($context["data"] ?? $this->getContext($context, "data")), 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
    <td class=\"tdss\">";
                            // line 481
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_round($context["res"], 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $context["res"], 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
    <td class=\"tdss\">";
                            // line 482
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_round($context["res"], 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $context["res"], 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
    <td class=\"tdss\">";
                            // line 483
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "actualAmount", array()), 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "actualAmount", array()), 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
 </tr>
</table>
";
                        }
                    }
                    // line 488
                    echo " ";
                }
                // line 489
                echo "
<hr>

   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 493
            echo "      <!-- Footer -->
      <footer><b> Thank you for ordering with      ";
            // line 494
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 495
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantName", array()), "html", null, true);
                echo "</b> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</footer>

    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 498
        echo "  </div>

</span>
</center>
</p>
</div>
</div>
</div>


  ";
        // line 509
        echo "
    ";
        // line 510
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["merged_orders"] ?? $this->getContext($context, "merged_orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 511
            echo "
    ";
            // line 512
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 513
                echo "       <div class=\"body\">

    <div class=\"receipt\">

      <h2 class=\"name\"> ";
                // line 517
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantName", array()), "html", null, true);
                echo " </h2>
      
    <center> 
     ";
                // line 520
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["merged_orders"] ?? $this->getContext($context, "merged_orders")));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 521
                    echo "    <b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                    echo "</b>
    <h4>";
                    // line 522
                    if (($this->getAttribute($context["order"], "orderType", array()) == "Delivery")) {
                        echo " Home Delivery ";
                    } elseif (($this->getAttribute($context["order"], "orderType", array()) == "pickup")) {
                        echo " Pickup From Store ";
                    } else {
                        echo " Express Delivery ";
                    }
                    echo "</h4>
 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 523
                echo "   
  <div class=\"order\"><small>
                           ";
                // line 525
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantAddress", array()), "html", null, true);
                echo "<br>
                           ";
                // line 526
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantLocation", array()), "html", null, true);
                echo "<br>
                            Gst No:";
                // line 527
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "gst", array()), "html", null, true);
                echo "<br>

                           Mobile : ";
                // line 529
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "primaryMobile", array()), "html", null, true);
                echo "<br>
                           Email : ";
                // line 530
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "primaryEmail", array()), "html", null, true);
                echo " 
                         </small>
                         </div></center>

<hr>
      <!-- Order info -->
      <div class=\"order\">

      <p>Bill to/Ship to:<br>
                           <small>
                           ";
                // line 540
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "customerName", array()), "html", null, true);
                echo "<br>
                           ";
                // line 541
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "address", array()), "html", null, true);
                echo "<br>
                           ";
                // line 542
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "landmark", array()), "html", null, true);
                echo "<br>
                           Mobile : ";
                // line 543
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "mobileNo", array()), "html", null, true);
                echo "<br>
                           Email : ";
                // line 544
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "email", array()), "html", null, true);
                echo "<br>
                           Gst No: ";
                // line 545
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "gst", array()), "html", null, true);
                echo "<br>
                           Delivery Date :  ";
                // line 546
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fixDate", array()), "html", null, true);
                echo "<br>
Delivery Time : ";
                // line 547
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "fixtime", array()), "html", null, true);
                echo "<br>
Note : <b>";
                // line 548
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "note", array()), "html", null, true);
                echo "</b><br>
Order Date :";
                // line 549
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "orderDate", array()), "d-m-Y"), "html", null, true);
                echo " at ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "orderDate", array()), "h-i A"), "html", null, true);
                echo "<br>
Payment Type : ";
                // line 550
                if (($this->getAttribute($context["order"], "paymentType", array()) == "cod")) {
                    echo "Cash On Delivery ";
                } elseif (($this->getAttribute($context["order"], "paymentType", array()) == "sod")) {
                    echo " Swipe On Delivery ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "paymentType", array()), "html", null, true);
                    echo " ";
                }
                // line 551
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
                // line 566
                $context["count"] = 0;
                // line 567
                echo " ";
                $context["sum"] = 0;
                // line 568
                echo " ";
                $context["discount"] = 0;
                // line 569
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["merged_items"] ?? $this->getContext($context, "merged_items")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 570
                    if (($this->getAttribute($context["item"], "order_d", array()) == $this->getAttribute($context["order"], "id", array()))) {
                        // line 571
                        if ((($this->getAttribute($context["item"], "tax", array()) == 0) || ($this->getAttribute($context["item"], "tax", array()) == ""))) {
                            // line 572
                            $context["taxp"] = $this->getAttribute($context["item"], "tax", array());
                            echo " 
<tr>
    <td class=\"tdd\">";
                            // line 574
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                            echo "<br>
    ";
                            // line 575
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "barcode", array()), "html", null, true);
                            echo "</td>
  ";
                            // line 576
                            $context["dis"] = ($this->getAttribute($context["item"], "discount", array()) + $this->getAttribute($context["item"], "discountPrice", array()));
                            // line 577
                            echo "    <td class=\"td\">";
                            $context["final"] = $this->getAttribute($context["item"], "price", array());
                            // line 578
                            echo "        ";
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 579
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor"), "html", null, true);
                                echo "
        ";
                            } elseif ((                            // line 580
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 581
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", ""), "html", null, true);
                                echo "
        ";
                            }
                            // line 583
                            echo "    </td>
    <td class=\"td\">";
                            // line 584
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                            echo "</td>
    <td class=\"td\">";
                            // line 585
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array()), "html", null, true);
                            echo "</td>
    <td class=\"td\">";
                            // line 586
                            $context["x"] = ($this->getAttribute($context["item"], "price", array()) * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 
        ";
                            // line 587
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 588
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["item"], "subTotal", array()), 2, "floor"), "html", null, true);
                                echo "
        ";
                            } elseif ((                            // line 589
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 590
                                echo "          ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "subTotal", array()), 2, ".", ""), "html", null, true);
                                echo "
        ";
                            }
                            // line 592
                            echo "    </td>
 </tr>
 ";
                            // line 594
                            $context["fts"] = (0 * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 
 ";
                            // line 595
                            $context["stotal"] = ($this->getAttribute($context["item"], "subTotal", array()) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor"));
                            // line 596
                            echo "
";
                        } else {
                            // line 597
                            echo " 
<tr>
    <td class=\"tdd\">";
                            // line 599
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "itemName", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "priceVariavtion", array()), "html", null, true);
                            echo "<br>
    ";
                            // line 600
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "barcode", array()), "html", null, true);
                            echo " </td>
  ";
                            // line 601
                            $context["dis"] = ($this->getAttribute($context["item"], "discount", array()) + $this->getAttribute($context["item"], "discountPrice", array()));
                            // line 602
                            echo "    ";
                            if ((($context["orders"] ?? $this->getContext($context, "orders")) == "")) {
                                // line 603
                                echo "    <center>No Data Found!</center>
";
                            }
                            // line 604
                            echo "  
";
                            // line 605
                            if (($this->getAttribute($context["item"], "discount", array()) != 0)) {
                                // line 606
                                $context["discount"] = $this->getAttribute($context["item"], "discount", array());
                                // line 607
                                $context["quantity"] = $this->getAttribute($context["item"], "quantity", array());
                                // line 608
                                $context["priceO"] = (($context["discount"] ?? $this->getContext($context, "discount")) / ($context["quantity"] ?? $this->getContext($context, "quantity")));
                                // line 609
                                $context["price"] = ($this->getAttribute($context["item"], "price", array()) + ($context["priceO"] ?? $this->getContext($context, "priceO")));
                            } else {
                                // line 611
                                $context["price"] = $this->getAttribute($context["item"], "price", array());
                            }
                            // line 613
                            echo " ";
                            $context["taxp"] = (($context["price"] ?? $this->getContext($context, "price")) / $this->getAttribute($context["item"], "tax", array()));
                            echo " ";
                            $context["finals"] = ($context["price"] ?? $this->getContext($context, "price"));
                            echo " 
";
                            // line 614
                            $context["xs"] = (100 + $this->getAttribute($context["item"], "tax", array()));
                            // line 615
                            echo " ";
                            $context["finals"] = ((($context["price"] ?? $this->getContext($context, "price")) * 100) / ($context["xs"] ?? $this->getContext($context, "xs")));
                            echo " 
                                     ";
                            // line 616
                            $context["final"] = ($context["finals"] ?? $this->getContext($context, "finals"));
                            // line 617
                            echo "   ";
                            $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - ($context["final"] ?? $this->getContext($context, "final")));
                            echo " 

   ";
                            // line 619
                            $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 

    <td class=\"td\">";
                            // line 621
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
  
    <td class=\"td\">";
                            // line 623
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                            echo "</td>
    <td class=\"td\">";
                            // line 624
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array()), "html", null, true);
                            echo "</td>
      ";
                            // line 625
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 626
                                $context["subTotals"] = (twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor") * $this->getAttribute($context["item"], "quantity", array()));
                                echo " 
";
                            } elseif ((                            // line 627
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 628
                                $context["subTotals"] = (twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", "") * $this->getAttribute($context["item"], "quantity", array()));
                                echo " 
";
                            }
                            // line 630
                            echo "    <td class=\"td\"> 
";
                            // line 631
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 632
                                echo " ";
                                $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - twig_round(($context["final"] ?? $this->getContext($context, "final")), 2, "floor"));
                                echo " ";
                                $context["ft"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                                echo " 

";
                            } elseif ((                            // line 634
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 635
                                $context["f"] = (($context["price"] ?? $this->getContext($context, "price")) - twig_number_format_filter($this->env, ($context["final"] ?? $this->getContext($context, "final")), 2, ".", ""));
                                echo " 
";
                            }
                            // line 637
                            $context["fts"] = (($context["f"] ?? $this->getContext($context, "f")) * $this->getAttribute($context["item"], "quantity", array()));
                            echo " 

      ";
                            // line 639
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                $context["x"] = twig_round(($context["subTotals"] ?? $this->getContext($context, "subTotals")), 2, "floor");
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                $context["x"] = twig_number_format_filter($this->env, ($context["subTotals"] ?? $this->getContext($context, "subTotals")), 2, ".", "");
                            }
                            // line 640
                            echo " ";
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                // line 641
                                echo " ";
                                $context["stotal"] = (($context["x"] ?? $this->getContext($context, "x")) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor"));
                                // line 642
                                echo "                                       ";
                                echo twig_escape_filter($this->env, (($context["x"] ?? $this->getContext($context, "x")) - twig_round($this->getAttribute($context["item"], "discount", array()), 2, "floor")), "html", null, true);
                                echo "
                                    ";
                            } elseif ((                            // line 643
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                // line 644
                                echo "                                       ";
                                echo twig_escape_filter($this->env, (($context["x"] ?? $this->getContext($context, "x")) - twig_number_format_filter($this->env, $this->getAttribute($context["item"], "discount", array()), 2, ".", "")), "html", null, true);
                                echo "
                                        ";
                                // line 645
                                $context["stotal"] = (($context["x"] ?? $this->getContext($context, "x")) - twig_number_format_filter($this->env, $this->getAttribute($context["item"], "discount", array()), 2, ".", ""));
                                // line 646
                                echo "
                                    ";
                            }
                            // line 648
                            echo "    </td>

 </tr>

 ";
                        }
                        // line 653
                        echo "    ";
                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + ($context["fts"] ?? $this->getContext($context, "fts")));
                        // line 654
                        echo "    ";
                        $context["sum"] = (($context["sum"] ?? $this->getContext($context, "sum")) + ($context["stotal"] ?? $this->getContext($context, "stotal")));
                        // line 655
                        echo "    ";
                        $context["discount"] = (($context["discount"] ?? $this->getContext($context, "discount")) + ($context["dis"] ?? $this->getContext($context, "dis")));
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 658
                echo "</table>
<hr>  
";
                // line 660
                if (((($context["count"] ?? $this->getContext($context, "count")) == 0) || (($context["count"] ?? $this->getContext($context, "count")) == ""))) {
                    // line 661
                    echo "<div class=\"totalprice\">

        <p class=\"sub\"> Subtotal <span> ";
                    // line 663
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_round(($context["sum"] ?? $this->getContext($context, "sum")), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum"] ?? $this->getContext($context, "sum")), 2, ".", ""), "html", null, true);
                    }
                    echo "</span></p>
        <!-- <p class=\"del\"> Tax <span>   ";
                    // line 664
                    echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                    echo " </span> </p> -->
        <!-- <p class=\"del\"> Discount <span> ";
                    // line 665
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["order"], "totalDiscount", array()) + $this->getAttribute($context["order"], "discountTotal", array())), "html", null, true);
                    echo " </span> </p> -->
 <p class=\"del\"> Delivery <span> ";
                    // line 666
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "deliveryCharge", array()), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "deliveryCharge", array()), 2, ".", ""), "html", null, true);
                    }
                    echo " </span> </p>
  ";
                    // line 667
                    if (($this->getAttribute($context["order"], "promocode", array()) == "")) {
                        // line 668
                        echo "        ";
                    } else {
                        // line 669
                        echo "        ";
                    }
                    // line 670
                    echo "      ";
                    if (($this->getAttribute($context["order"], "loyalty", array()) == 0)) {
                        // line 671
                        echo "        ";
                    } else {
                        // line 672
                        echo "        <p class=\"del\"> Loyalty <span>-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "loyalty", array()), "html", null, true);
                        echo "</span> </p>
        ";
                    }
                    // line 674
                    echo "        <hr>
";
                    // line 676
                    echo "        <p class=\"del\"> Total <span> ";
                    if (($this->getAttribute($context["order"], "paymentType", array()) == "wallet")) {
                        echo " ";
                        $context["total"] = (($this->getAttribute($context["order"], "actualAmount", array()) + $this->getAttribute($context["order"], "deliveryCharge", array())) + $this->getAttribute($context["order"], "totalDiscount", array()));
                        echo " ";
                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                            echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total")), 2, "floor"), "html", null, true);
                        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                        }
                        echo " ";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
                    }
                    echo "</span> </p>

      </div>

      ";
                    // line 680
                    if ((($context["discount"] ?? $this->getContext($context, "discount")) == 0)) {
                        // line 681
                        echo "      ";
                    } else {
                        echo " 
          ";
                        // line 682
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
                        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                            // line 683
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
                        // line 685
                        echo "        ";
                    }
                    // line 686
                    echo "<center style=\"font-size:10px;\"> 
    ";
                    // line 687
                    if (($this->getAttribute($context["order"], "promocode", array()) != "")) {
                        // line 688
                        echo "  <span> Promocode (";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "promocode", array()), "html", null, true);
                        echo ")<span> <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalDiscount", array()), "html", null, true);
                        echo " OFF!</b></span><br>
";
                    }
                    // line 690
                    echo "<span>Wallet Payment : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "wallet", array()), "html", null, true);
                    echo " | Cash/Online Payment :  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
                    echo "</span></center>
";
                } else {
                    // line 692
                    echo "      <div class=\"totalprice\">

        <p class=\"sub\"> Subtotal <span> ";
                    // line 694
                    $context["x"] = (($this->getAttribute($context["order"], "actualAmount", array()) * ($context["count"] ?? $this->getContext($context, "count"))) / 100);
                    echo " ";
                    $context["fin"] = (($context["sum"] ?? $this->getContext($context, "sum")) - ($context["x"] ?? $this->getContext($context, "x")));
                    echo " ";
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_round(($context["sum"] ?? $this->getContext($context, "sum")), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum"] ?? $this->getContext($context, "sum")), 2, ".", ""), "html", null, true);
                    }
                    echo "</span></p>
        ";
                    // line 695
                    if (($this->getAttribute($context["res"], "currencyFormat", array()) == "AED")) {
                        // line 696
                        echo "<p class=\"del\"> VAT <span>   ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), 2, ".", ""), "html", null, true);
                        echo " </span> </p> 
";
                    } else {
                        // line 698
                        echo "<p class=\"del\"> Tax <span>   ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), 2, ".", ""), "html", null, true);
                        echo " </span> </p> 

        ";
                    }
                    // line 701
                    echo "  

        <p class=\"del\"> Delivery <span> ";
                    // line 703
                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "deliveryCharge", array()), 2, "floor"), "html", null, true);
                    } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "deliveryCharge", array()), 2, ".", ""), "html", null, true);
                    }
                    echo " </span> </p>
  ";
                    // line 704
                    if (($this->getAttribute($context["order"], "promocode", array()) == "")) {
                        // line 705
                        echo "        ";
                    } else {
                        // line 706
                        echo "        ";
                    }
                    // line 707
                    echo "      ";
                    if (($this->getAttribute($context["order"], "loyalty", array()) == 0)) {
                        // line 708
                        echo "        ";
                    } else {
                        // line 709
                        echo "        <p class=\"del\"> Loyalty <span>-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "loyalty", array()), "html", null, true);
                        echo "</span> </p>
        ";
                    }
                    // line 711
                    echo " 
         
               <hr>

        <p class=\"del\"> Total <span> ";
                    // line 715
                    if (($this->getAttribute($context["order"], "paymentType", array()) == "wallet")) {
                        echo " ";
                        $context["total"] = (($this->getAttribute($context["order"], "actualAmount", array()) + $this->getAttribute($context["order"], "deliveryCharge", array())) + $this->getAttribute($context["order"], "totalDiscount", array()));
                        echo " ";
                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                            echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total")), 2, "floor"), "html", null, true);
                        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                        }
                        echo " ";
                    } else {
                        $context["total"] = (((($this->getAttribute($context["order"], "actualAmount", array()) + $this->getAttribute($context["order"], "wallet", array())) + $this->getAttribute($context["order"], "loyalty", array())) + $this->getAttribute($context["order"], "deliveryCharge", array())) + $this->getAttribute($context["order"], "totalDiscount", array()));
                        echo " ";
                        if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                            echo twig_escape_filter($this->env, twig_round(($context["total"] ?? $this->getContext($context, "total")), 2, "floor"), "html", null, true);
                        } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ""), "html", null, true);
                        }
                    }
                    echo "</span> </p>

      </div>
      ";
                    // line 718
                    if ((($context["discount"] ?? $this->getContext($context, "discount")) == 0)) {
                        // line 719
                        echo "      ";
                    } else {
                        // line 720
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
                        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                            // line 721
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
                        // line 723
                        echo "     ";
                    }
                    // line 724
                    echo "<center style=\"font-size:10px;\">
  ";
                    // line 725
                    if (($this->getAttribute($context["order"], "promocode", array()) != "")) {
                        // line 726
                        echo "  <span> Promocode (";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "promocode", array()), "html", null, true);
                        echo ")<span> <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalDiscount", array()), "html", null, true);
                        echo " OFF!</b></span><br>
";
                    }
                    // line 728
                    echo "Wallet Payment : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "wallet", array()), "html", null, true);
                    echo " | Cash/Online Payment :  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderAmount", array()), "html", null, true);
                    echo "</span></center>
";
                    // line 729
                    if (($this->getAttribute($context["res"], "currencyFormat", array()) == "AED")) {
                    } else {
                        // line 731
                        if (((($context["count"] ?? $this->getContext($context, "count")) == 0) || (($context["count"] ?? $this->getContext($context, "count")) == ""))) {
                        } else {
                            // line 733
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
                            // line 744
                            $context["count"] = 1;
                            // line 745
                            echo "  ";
                            $context["res"] = 0;
                            // line 746
                            echo "  ";
                            $context["data"] = 0;
                            // line 747
                            echo "
 ";
                            // line 748
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["merged_tax"] ?? $this->getContext($context, "merged_tax")));
                            foreach ($context['_seq'] as $context["_key"] => $context["ta"]) {
                                // line 749
                                echo " ";
                                if (($this->getAttribute($context["ta"], "tax", array()) == 0)) {
                                    // line 750
                                    echo " ";
                                } else {
                                    // line 751
                                    echo "  <tr> 
    <td class=\"td\">";
                                    // line 752
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["ta"], "tax", array()), "html", null, true);
                                    echo "</td>
    <td class=\"td\">";
                                    // line 753
                                    $context["x"] = (100 + $this->getAttribute($context["ta"], "tax", array()));
                                    // line 754
                                    echo "                                     ";
                                    $context["pr"] = (($this->getAttribute($context["ta"], "subTotal", array()) * 100) / ($context["x"] ?? $this->getContext($context, "x")));
                                    echo " 
                                     ";
                                    // line 755
                                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                        // line 756
                                        echo "                                      ";
                                        echo twig_escape_filter($this->env, twig_round(($context["pr"] ?? $this->getContext($context, "pr")), 2, "floor"), "html", null, true);
                                        echo "
                                    ";
                                    } elseif ((                                    // line 757
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                        // line 758
                                        echo "                                      ";
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["pr"] ?? $this->getContext($context, "pr")), 2, ".", ""), "html", null, true);
                                        echo "
                                    ";
                                    }
                                    // line 760
                                    echo "</td>
";
                                    // line 761
                                    $context["cgst"] = ($this->getAttribute($context["ta"], "subTotal", array()) - ($context["pr"] ?? $this->getContext($context, "pr")));
                                    echo " 
    <td class=\"td\">";
                                    // line 762
                                    $context["cg"] = (($context["cgst"] ?? $this->getContext($context, "cgst")) / 2);
                                    echo " 
    ";
                                    // line 763
                                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                        // line 764
                                        echo "      ";
                                        echo twig_escape_filter($this->env, twig_round(($context["cg"] ?? $this->getContext($context, "cg")), 2, "floor"), "html", null, true);
                                        echo "
    ";
                                    } elseif ((                                    // line 765
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                        // line 766
                                        echo "      ";
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cg"] ?? $this->getContext($context, "cg")), 2, ".", ""), "html", null, true);
                                        echo "
    ";
                                    }
                                    // line 768
                                    echo "      </td>
    <td class=\"td\">  
    ";
                                    // line 770
                                    if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                        // line 771
                                        echo "      ";
                                        echo twig_escape_filter($this->env, twig_round(($context["cg"] ?? $this->getContext($context, "cg")), 2, "floor"), "html", null, true);
                                        echo "
    ";
                                    } elseif ((                                    // line 772
($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                        // line 773
                                        echo "      ";
                                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cg"] ?? $this->getContext($context, "cg")), 2, ".", ""), "html", null, true);
                                        echo "
    ";
                                    }
                                    // line 775
                                    echo "    </td>
    <td class=\"td\">";
                                    // line 776
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["ta"], "subTotal", array()), "html", null, true);
                                    echo "</td>
 </tr>
 ";
                                    // line 778
                                    $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                                    // line 779
                                    echo " ";
                                    $context["res"] = ($context["res"] + ($context["cg"] ?? $this->getContext($context, "cg")));
                                    // line 780
                                    echo "  ";
                                    $context["data"] = (($context["data"] ?? $this->getContext($context, "data")) + ($context["pr"] ?? $this->getContext($context, "pr")));
                                    // line 781
                                    echo " ";
                                }
                                // line 782
                                echo "
";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ta'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 784
                            echo "<tr>
<th colspan=\"5\"><hr></th></tr>
  <tr>

    <td class=\"tdss\">Total</td>
    <td class=\"tdss\">";
                            // line 789
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_round(($context["data"] ?? $this->getContext($context, "data")), 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
    <td class=\"tdss\">";
                            // line 790
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_round($context["res"], 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $context["res"], 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
    <td class=\"tdss\">";
                            // line 791
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_round($context["res"], 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $context["res"], 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
    <td class=\"tdss\">";
                            // line 792
                            if ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 1)) {
                                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["order"], "actualAmount", array()), 2, "floor"), "html", null, true);
                            } elseif ((($context["numberFormat"] ?? $this->getContext($context, "numberFormat")) == 0)) {
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["order"], "actualAmount", array()), 2, ".", ""), "html", null, true);
                            }
                            echo "</td>
 </tr>
</table>
";
                        }
                    }
                    // line 797
                    echo " ";
                }
                // line 798
                echo "
<hr>

   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 802
            echo "      <!-- Footer -->
      <footer><b> Thank you for ordering with      ";
            // line 803
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["restaurant"] ?? $this->getContext($context, "restaurant")));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 804
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "restaurantName", array()), "html", null, true);
                echo "</b> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</footer>

    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 807
        echo "  </div>
";
        
        $__internal_8a4691d9222cb29e634f7e38b770a5bef7cf8dcec8d89cf761b1145eb77b5a5f->leave($__internal_8a4691d9222cb29e634f7e38b770a5bef7cf8dcec8d89cf761b1145eb77b5a5f_prof);

        
        $__internal_42b8d75f4fd8ce30453a8afe36d10a84a2e88cbb68f1dea5adadc3be1f4cadaf->leave($__internal_42b8d75f4fd8ce30453a8afe36d10a84a2e88cbb68f1dea5adadc3be1f4cadaf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Orders/thermal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2034 => 807,  2020 => 804,  2016 => 803,  2013 => 802,  2004 => 798,  2001 => 797,  1989 => 792,  1981 => 791,  1973 => 790,  1965 => 789,  1958 => 784,  1951 => 782,  1948 => 781,  1945 => 780,  1942 => 779,  1940 => 778,  1935 => 776,  1932 => 775,  1926 => 773,  1924 => 772,  1919 => 771,  1917 => 770,  1913 => 768,  1907 => 766,  1905 => 765,  1900 => 764,  1898 => 763,  1894 => 762,  1890 => 761,  1887 => 760,  1881 => 758,  1879 => 757,  1874 => 756,  1872 => 755,  1867 => 754,  1865 => 753,  1861 => 752,  1858 => 751,  1855 => 750,  1852 => 749,  1848 => 748,  1845 => 747,  1842 => 746,  1839 => 745,  1837 => 744,  1824 => 733,  1821 => 731,  1818 => 729,  1811 => 728,  1803 => 726,  1801 => 725,  1798 => 724,  1795 => 723,  1783 => 721,  1778 => 720,  1775 => 719,  1773 => 718,  1749 => 715,  1743 => 711,  1737 => 709,  1734 => 708,  1731 => 707,  1728 => 706,  1725 => 705,  1723 => 704,  1715 => 703,  1711 => 701,  1704 => 698,  1698 => 696,  1696 => 695,  1684 => 694,  1680 => 692,  1672 => 690,  1664 => 688,  1662 => 687,  1659 => 686,  1656 => 685,  1644 => 683,  1640 => 682,  1635 => 681,  1633 => 680,  1613 => 676,  1610 => 674,  1604 => 672,  1601 => 671,  1598 => 670,  1595 => 669,  1592 => 668,  1590 => 667,  1582 => 666,  1578 => 665,  1574 => 664,  1566 => 663,  1562 => 661,  1560 => 660,  1556 => 658,  1548 => 655,  1545 => 654,  1542 => 653,  1535 => 648,  1531 => 646,  1529 => 645,  1524 => 644,  1522 => 643,  1517 => 642,  1514 => 641,  1511 => 640,  1505 => 639,  1500 => 637,  1495 => 635,  1493 => 634,  1485 => 632,  1483 => 631,  1480 => 630,  1475 => 628,  1473 => 627,  1469 => 626,  1467 => 625,  1463 => 624,  1459 => 623,  1450 => 621,  1445 => 619,  1439 => 617,  1437 => 616,  1432 => 615,  1430 => 614,  1423 => 613,  1420 => 611,  1417 => 609,  1415 => 608,  1413 => 607,  1411 => 606,  1409 => 605,  1406 => 604,  1402 => 603,  1399 => 602,  1397 => 601,  1393 => 600,  1387 => 599,  1383 => 597,  1379 => 596,  1377 => 595,  1373 => 594,  1369 => 592,  1363 => 590,  1361 => 589,  1356 => 588,  1354 => 587,  1350 => 586,  1346 => 585,  1342 => 584,  1339 => 583,  1333 => 581,  1331 => 580,  1326 => 579,  1323 => 578,  1320 => 577,  1318 => 576,  1314 => 575,  1308 => 574,  1303 => 572,  1301 => 571,  1299 => 570,  1295 => 569,  1292 => 568,  1289 => 567,  1287 => 566,  1270 => 551,  1260 => 550,  1254 => 549,  1250 => 548,  1246 => 547,  1242 => 546,  1238 => 545,  1234 => 544,  1230 => 543,  1226 => 542,  1222 => 541,  1218 => 540,  1205 => 530,  1201 => 529,  1196 => 527,  1192 => 526,  1188 => 525,  1184 => 523,  1170 => 522,  1165 => 521,  1161 => 520,  1155 => 517,  1149 => 513,  1145 => 512,  1142 => 511,  1138 => 510,  1135 => 509,  1123 => 498,  1109 => 495,  1105 => 494,  1102 => 493,  1093 => 489,  1090 => 488,  1078 => 483,  1070 => 482,  1062 => 481,  1054 => 480,  1047 => 475,  1040 => 473,  1037 => 472,  1034 => 471,  1031 => 470,  1029 => 469,  1024 => 467,  1021 => 466,  1015 => 464,  1013 => 463,  1008 => 462,  1006 => 461,  1002 => 459,  996 => 457,  994 => 456,  989 => 455,  987 => 454,  983 => 453,  979 => 452,  976 => 451,  970 => 449,  968 => 448,  963 => 447,  961 => 446,  956 => 445,  954 => 444,  950 => 443,  947 => 442,  944 => 441,  941 => 440,  937 => 439,  934 => 438,  931 => 437,  928 => 436,  926 => 435,  913 => 424,  910 => 422,  907 => 420,  900 => 419,  892 => 417,  890 => 416,  887 => 415,  884 => 414,  872 => 412,  867 => 411,  864 => 410,  862 => 409,  838 => 406,  832 => 402,  826 => 400,  823 => 399,  820 => 398,  817 => 397,  814 => 396,  812 => 395,  804 => 394,  800 => 392,  793 => 389,  787 => 387,  785 => 386,  773 => 385,  769 => 383,  761 => 381,  753 => 379,  751 => 378,  748 => 377,  745 => 376,  733 => 374,  729 => 373,  724 => 372,  722 => 371,  702 => 367,  699 => 365,  693 => 363,  690 => 362,  687 => 361,  684 => 360,  681 => 359,  679 => 358,  671 => 357,  667 => 356,  663 => 355,  655 => 354,  651 => 352,  649 => 351,  645 => 349,  637 => 346,  634 => 345,  631 => 344,  624 => 339,  620 => 337,  618 => 336,  613 => 335,  611 => 334,  606 => 333,  603 => 332,  600 => 331,  594 => 330,  589 => 328,  584 => 326,  582 => 325,  574 => 323,  572 => 322,  569 => 321,  564 => 319,  562 => 318,  558 => 317,  556 => 316,  552 => 315,  548 => 314,  539 => 312,  534 => 310,  528 => 308,  526 => 307,  521 => 306,  519 => 305,  512 => 304,  509 => 302,  506 => 300,  504 => 299,  502 => 298,  500 => 297,  498 => 296,  495 => 295,  491 => 294,  488 => 293,  486 => 292,  482 => 291,  476 => 290,  472 => 288,  468 => 287,  466 => 286,  462 => 285,  458 => 283,  452 => 281,  450 => 280,  445 => 279,  443 => 278,  439 => 277,  435 => 276,  431 => 275,  428 => 274,  422 => 272,  420 => 271,  415 => 270,  412 => 269,  409 => 268,  407 => 267,  403 => 266,  397 => 265,  392 => 263,  390 => 262,  388 => 261,  384 => 260,  381 => 259,  378 => 258,  376 => 257,  359 => 242,  349 => 241,  343 => 240,  339 => 239,  335 => 238,  331 => 237,  327 => 236,  323 => 235,  319 => 234,  315 => 233,  311 => 232,  307 => 231,  302 => 228,  298 => 227,  288 => 220,  284 => 219,  279 => 217,  275 => 216,  271 => 215,  267 => 213,  253 => 212,  248 => 211,  244 => 210,  238 => 207,  232 => 203,  228 => 202,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <style type=\"text/css\">
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
  font-size: 15px;
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
    {% for res in restaurant%}
       <div class=\"body\">

    <div class=\"receipt\">

      <h2 class=\"name\"> {{ res.restaurantName }} </h2>
      
    <center> 
     {% for order in orders %}
    <b>#{{ order.id }}</b>
    <h4>{% if order.orderType == 'Delivery' %} Home Delivery {% elseif order.orderType == 'pickup' %} Pickup From Store {% else %} Express Delivery {% endif %}</h4>
 {% endfor %}   
  <div class=\"order\"><small>
                           {{ res.restaurantAddress }}<br>
                           {{ res.restaurantLocation }}<br>
                            Gst No:{{ res.gst }}<br>

                           Mobile : {{ res.primaryMobile }}<br>
                           Email : {{ res.primaryEmail }} 
                         </small>
                         </div></center>

<hr>
      <!-- Order info -->
      <div class=\"order\">
    {% for order in orders %}

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
        {% if numberFormat == 1 %}
          {{ final|round(2, 'floor') }}
        {% elseif numberFormat == 0 %}
          {{ final|number_format(2, '.', '') }}
        {% endif %}
    </td>
    <td class=\"td\">{{ item.quantity }}</td>
    <td class=\"td\">{{ item.discount }}</td>
    <td class=\"td\">{% set x =  item.price * item.quantity  %} 
        {% if numberFormat == 1 %}
          {{ item.subTotal|round(2, 'floor') }}
        {% elseif numberFormat == 0 %}
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

    <td class=\"td\">{% if numberFormat == 1 %}{{ final|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ final|number_format(2, '.', '') }}{% endif %}</td>
  
    <td class=\"td\">{{ item.quantity }}</td>
    <td class=\"td\">{{ item.discount }}</td>
      {% if numberFormat == 1 %}
{% set subTotals = final|round(2, 'floor') * item.quantity %} 
{% elseif numberFormat == 0 %}
{% set subTotals = final|number_format(2, '.', '') * item.quantity %} 
{% endif %}
    <td class=\"td\"> 
{% if numberFormat == 1 %}
 {% set f=price-final|round(2, 'floor') %} {% set ft=f*item.quantity %} 

{% elseif numberFormat == 0 %}
{% set f=price-final|number_format(2, '.', '') %} 
{% endif %}
{% set fts=f*item.quantity %} 

      {% if numberFormat == 1 %}{% set x = subTotals|round(2, 'floor') %}{% elseif numberFormat == 0 %}{% set x = subTotals|number_format(2, '.', '') %}{% endif %}
 {% if numberFormat == 1 %}
 {% set stotal = x - item.discount|round(2, 'floor')%}
                                       {{ x - item.discount|round(2, 'floor') }}
                                    {% elseif numberFormat == 0 %}
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

        <p class=\"sub\"> Subtotal <span> {% if numberFormat == 1 %}{{ sum|round(2,'floor')}}{% elseif numberFormat == 0 %}{{ sum|number_format(2, '.', '')}}{% endif %}</span></p>
        <!-- <p class=\"del\"> Tax <span>   {{ count }} </span> </p> -->
        <!-- <p class=\"del\"> Discount <span> {{ order.totalDiscount + order.discountTotal }} </span> </p> -->
 <p class=\"del\"> Delivery <span> {% if numberFormat == 1 %}{{ order.deliveryCharge|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ order.deliveryCharge|number_format(2, '.', '') }}{% endif %} </span> </p>
  {% if order.promocode == ''%}
        {% else %}
        {% endif %}
      {% if order.loyalty == 0 %}
        {% else %}
        <p class=\"del\"> Loyalty <span>-{{ order.loyalty }}</span> </p>
        {% endif %}
        <hr>
{# {{ order.orderAmount }} #}
        <p class=\"del\"> Total <span> {% if order.paymentType == 'wallet' %} {% set total = order.actualAmount + order.deliveryCharge + order.totalDiscount %} {% if numberFormat == 1 %}{{ total|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% endif %} {% else %}{{ order.orderAmount  }}{% endif %}</span> </p>

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

        <p class=\"sub\"> Subtotal <span> {% set x = order.actualAmount * count / 100 %} {%  set fin = sum - x %} {% if numberFormat == 1 %}{{ sum|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ sum|number_format(2, '.', '')}}{% endif %}</span></p>
        {% if res.currencyFormat == 'AED' %}
<p class=\"del\"> VAT <span>   {{ count|number_format(2, '.', '') }} </span> </p> 
{% else %}
<p class=\"del\"> Tax <span>   {{ count|number_format(2, '.', '') }} </span> </p> 

        {% endif %}
  

        <p class=\"del\"> Delivery <span> {% if numberFormat == 1 %}{{ order.deliveryCharge|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ order.deliveryCharge|number_format(2, '.', '') }}{% endif %} </span> </p>
  {% if order.promocode == ''%}
        {% else %}
        {% endif %}
      {% if order.loyalty == 0 %}
        {% else %}
        <p class=\"del\"> Loyalty <span>-{{ order.loyalty }}</span> </p>
        {% endif %}
 
         
               <hr>

        <p class=\"del\"> Total <span> {% if order.paymentType == 'wallet' %} {% set total = order.actualAmount + order.deliveryCharge + order.totalDiscount %} {% if numberFormat == 1 %}{{ total|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% endif %} {% else %}{% set total = order.actualAmount + order.wallet + order.loyalty + order.deliveryCharge + order.totalDiscount %} {% if numberFormat == 1 %}{{ total|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% endif %}{% endif %}</span> </p>

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
 {% if ta.tax == 0 %}
 {% else %}
  <tr> 
    <td class=\"td\">{{ ta.tax }}</td>
    <td class=\"td\">{% set x= 100+ta.tax %}
                                     {% set pr=ta.subTotal*100/x %} 
                                     {% if numberFormat == 1 %}
                                      {{ pr|round(2, 'floor') }}
                                    {% elseif numberFormat == 0 %}
                                      {{ pr|number_format(2, '.', '') }}
                                    {% endif %}
</td>
{% set cgst = ta.subTotal-pr %} 
    <td class=\"td\">{% set cg = cgst/2 %} 
    {% if numberFormat == 1 %}
      {{ cg|round(2,'floor') }}
    {% elseif numberFormat == 0 %}
      {{ cg|number_format(2, '.', '') }}
    {% endif %}
      </td>
    <td class=\"td\">  
    {% if numberFormat == 1 %}
      {{ cg|round(2,'floor') }}
    {% elseif numberFormat == 0 %}
      {{ cg|number_format(2, '.', '') }}
    {% endif %}
    </td>
    <td class=\"td\">{{ ta.subTotal }}</td>
 </tr>
 {% set count = count + 1 %}
 {% set res = res + cg %}
  {% set data = data + pr %}
 {% endif %}

{% endfor %}
<tr>
<th colspan=\"5\"><hr></th></tr>
  <tr>

    <td class=\"tdss\">Total</td>
    <td class=\"tdss\">{% if numberFormat == 1 %}{{ data|round(2,'floor') }}{% elseif numberFormat == 0 %}{{ data|number_format(2, '.', '') }}{% endif %}</td>
    <td class=\"tdss\">{% if numberFormat == 1 %}{{ res|round(2,'floor') }}{% elseif numberFormat == 0 %}{{ res|number_format(2, '.', '') }}{% endif %}</td>
    <td class=\"tdss\">{% if numberFormat == 1 %}{{ res|round(2,'floor') }}{% elseif numberFormat == 0 %}{{ res|number_format(2, '.', '') }}{% endif %}</td>
    <td class=\"tdss\">{% if numberFormat == 1 %}{{ order.actualAmount|round(2,'floor') }}{% elseif numberFormat == 0 %}{{ order.actualAmount|number_format(2, '.', '') }}{% endif %}</td>
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

    </div>{% endfor %}
  </div>

</span>
</center>
</p>
</div>
</div>
</div>


  {# for merged items #}

    {% for order in merged_orders %}

    {% for res in restaurant%}
       <div class=\"body\">

    <div class=\"receipt\">

      <h2 class=\"name\"> {{ res.restaurantName }} </h2>
      
    <center> 
     {% for order in merged_orders %}
    <b>#{{ order.id }}</b>
    <h4>{% if order.orderType == 'Delivery' %} Home Delivery {% elseif order.orderType == 'pickup' %} Pickup From Store {% else %} Express Delivery {% endif %}</h4>
 {% endfor %}   
  <div class=\"order\"><small>
                           {{ res.restaurantAddress }}<br>
                           {{ res.restaurantLocation }}<br>
                            Gst No:{{ res.gst }}<br>

                           Mobile : {{ res.primaryMobile }}<br>
                           Email : {{ res.primaryEmail }} 
                         </small>
                         </div></center>

<hr>
      <!-- Order info -->
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
{% for item in merged_items %}
{% if item.order_d == order.id %}
{% if item.tax == 0 or item.tax == ''%}
{% set taxp = item.tax %} 
<tr>
    <td class=\"tdd\">{{ item.itemName }} - {{ item.priceVariavtion }}<br>
    {{ item.barcode }}</td>
  {% set dis = item.discount+item.discountPrice %}
    <td class=\"td\">{% set final = item.price  %}
        {% if numberFormat == 1 %}
          {{ final|round(2, 'floor') }}
        {% elseif numberFormat == 0 %}
          {{ final|number_format(2, '.', '') }}
        {% endif %}
    </td>
    <td class=\"td\">{{ item.quantity }}</td>
    <td class=\"td\">{{ item.discount }}</td>
    <td class=\"td\">{% set x =  item.price * item.quantity  %} 
        {% if numberFormat == 1 %}
          {{ item.subTotal|round(2, 'floor') }}
        {% elseif numberFormat == 0 %}
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

    <td class=\"td\">{% if numberFormat == 1 %}{{ final|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ final|number_format(2, '.', '') }}{% endif %}</td>
  
    <td class=\"td\">{{ item.quantity }}</td>
    <td class=\"td\">{{ item.discount }}</td>
      {% if numberFormat == 1 %}
{% set subTotals = final|round(2, 'floor') * item.quantity %} 
{% elseif numberFormat == 0 %}
{% set subTotals = final|number_format(2, '.', '') * item.quantity %} 
{% endif %}
    <td class=\"td\"> 
{% if numberFormat == 1 %}
 {% set f=price-final|round(2, 'floor') %} {% set ft=f*item.quantity %} 

{% elseif numberFormat == 0 %}
{% set f=price-final|number_format(2, '.', '') %} 
{% endif %}
{% set fts=f*item.quantity %} 

      {% if numberFormat == 1 %}{% set x = subTotals|round(2, 'floor') %}{% elseif numberFormat == 0 %}{% set x = subTotals|number_format(2, '.', '') %}{% endif %}
 {% if numberFormat == 1 %}
 {% set stotal = x - item.discount|round(2, 'floor')%}
                                       {{ x - item.discount|round(2, 'floor') }}
                                    {% elseif numberFormat == 0 %}
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

        <p class=\"sub\"> Subtotal <span> {% if numberFormat == 1 %}{{ sum|round(2,'floor')}}{% elseif numberFormat == 0 %}{{ sum|number_format(2, '.', '')}}{% endif %}</span></p>
        <!-- <p class=\"del\"> Tax <span>   {{ count }} </span> </p> -->
        <!-- <p class=\"del\"> Discount <span> {{ order.totalDiscount + order.discountTotal }} </span> </p> -->
 <p class=\"del\"> Delivery <span> {% if numberFormat == 1 %}{{ order.deliveryCharge|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ order.deliveryCharge|number_format(2, '.', '') }}{% endif %} </span> </p>
  {% if order.promocode == ''%}
        {% else %}
        {% endif %}
      {% if order.loyalty == 0 %}
        {% else %}
        <p class=\"del\"> Loyalty <span>-{{ order.loyalty }}</span> </p>
        {% endif %}
        <hr>
{# {{ order.orderAmount }} #}
        <p class=\"del\"> Total <span> {% if order.paymentType == 'wallet' %} {% set total = order.actualAmount + order.deliveryCharge + order.totalDiscount %} {% if numberFormat == 1 %}{{ total|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% endif %} {% else %}{{ order.orderAmount  }}{% endif %}</span> </p>

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

        <p class=\"sub\"> Subtotal <span> {% set x = order.actualAmount * count / 100 %} {%  set fin = sum - x %} {% if numberFormat == 1 %}{{ sum|round(2, 'floor')}}{% elseif numberFormat == 0 %}{{ sum|number_format(2, '.', '')}}{% endif %}</span></p>
        {% if res.currencyFormat == 'AED' %}
<p class=\"del\"> VAT <span>   {{ count|number_format(2, '.', '') }} </span> </p> 
{% else %}
<p class=\"del\"> Tax <span>   {{ count|number_format(2, '.', '') }} </span> </p> 

        {% endif %}
  

        <p class=\"del\"> Delivery <span> {% if numberFormat == 1 %}{{ order.deliveryCharge|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ order.deliveryCharge|number_format(2, '.', '') }}{% endif %} </span> </p>
  {% if order.promocode == ''%}
        {% else %}
        {% endif %}
      {% if order.loyalty == 0 %}
        {% else %}
        <p class=\"del\"> Loyalty <span>-{{ order.loyalty }}</span> </p>
        {% endif %}
 
         
               <hr>

        <p class=\"del\"> Total <span> {% if order.paymentType == 'wallet' %} {% set total = order.actualAmount + order.deliveryCharge + order.totalDiscount %} {% if numberFormat == 1 %}{{ total|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% endif %} {% else %}{% set total = order.actualAmount + order.wallet + order.loyalty + order.deliveryCharge + order.totalDiscount %} {% if numberFormat == 1 %}{{ total|round(2, 'floor') }}{% elseif numberFormat == 0 %}{{ total|number_format(2, '.', '') }}{% endif %}{% endif %}</span> </p>

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

 {% for ta in merged_tax %}
 {% if ta.tax == 0 %}
 {% else %}
  <tr> 
    <td class=\"td\">{{ ta.tax }}</td>
    <td class=\"td\">{% set x= 100+ta.tax %}
                                     {% set pr=ta.subTotal*100/x %} 
                                     {% if numberFormat == 1 %}
                                      {{ pr|round(2, 'floor') }}
                                    {% elseif numberFormat == 0 %}
                                      {{ pr|number_format(2, '.', '') }}
                                    {% endif %}
</td>
{% set cgst = ta.subTotal-pr %} 
    <td class=\"td\">{% set cg = cgst/2 %} 
    {% if numberFormat == 1 %}
      {{ cg|round(2,'floor') }}
    {% elseif numberFormat == 0 %}
      {{ cg|number_format(2, '.', '') }}
    {% endif %}
      </td>
    <td class=\"td\">  
    {% if numberFormat == 1 %}
      {{ cg|round(2,'floor') }}
    {% elseif numberFormat == 0 %}
      {{ cg|number_format(2, '.', '') }}
    {% endif %}
    </td>
    <td class=\"td\">{{ ta.subTotal }}</td>
 </tr>
 {% set count = count + 1 %}
 {% set res = res + cg %}
  {% set data = data + pr %}
 {% endif %}

{% endfor %}
<tr>
<th colspan=\"5\"><hr></th></tr>
  <tr>

    <td class=\"tdss\">Total</td>
    <td class=\"tdss\">{% if numberFormat == 1 %}{{ data|round(2,'floor') }}{% elseif numberFormat == 0 %}{{ data|number_format(2, '.', '') }}{% endif %}</td>
    <td class=\"tdss\">{% if numberFormat == 1 %}{{ res|round(2,'floor') }}{% elseif numberFormat == 0 %}{{ res|number_format(2, '.', '') }}{% endif %}</td>
    <td class=\"tdss\">{% if numberFormat == 1 %}{{ res|round(2,'floor') }}{% elseif numberFormat == 0 %}{{ res|number_format(2, '.', '') }}{% endif %}</td>
    <td class=\"tdss\">{% if numberFormat == 1 %}{{ order.actualAmount|round(2,'floor') }}{% elseif numberFormat == 0 %}{{ order.actualAmount|number_format(2, '.', '') }}{% endif %}</td>
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

    </div>{% endfor %}
  </div>
", "AppBundle:Admin:Orders/thermal.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Orders/thermal.html.twig");
    }
}
