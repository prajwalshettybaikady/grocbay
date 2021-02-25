<?php

/* AppBundle:Admin:Shop/shopDetails.html.twig */
class __TwigTemplate_0460ccbfce31f89de39f359eeb74ed44cdaae493ff0ad89677abc1935ee7efdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Shop/shopDetails.html.twig", 1);
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
        $__internal_21c4f435582c5b3955d6bca0cc577214c40481cb190a08ba78789776915938ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c4f435582c5b3955d6bca0cc577214c40481cb190a08ba78789776915938ef->enter($__internal_21c4f435582c5b3955d6bca0cc577214c40481cb190a08ba78789776915938ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Shop/shopDetails.html.twig"));

        $__internal_25e1e1c7ef319ef4b5898866328141938147b0d5a0f7287ad40136f53b1b920f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e1e1c7ef319ef4b5898866328141938147b0d5a0f7287ad40136f53b1b920f->enter($__internal_25e1e1c7ef319ef4b5898866328141938147b0d5a0f7287ad40136f53b1b920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Shop/shopDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c4f435582c5b3955d6bca0cc577214c40481cb190a08ba78789776915938ef->leave($__internal_21c4f435582c5b3955d6bca0cc577214c40481cb190a08ba78789776915938ef_prof);

        
        $__internal_25e1e1c7ef319ef4b5898866328141938147b0d5a0f7287ad40136f53b1b920f->leave($__internal_25e1e1c7ef319ef4b5898866328141938147b0d5a0f7287ad40136f53b1b920f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_826a7d773e0c56f8843e84da6e834cb98b76b605e926b1c0eddcf1e6e16e10f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826a7d773e0c56f8843e84da6e834cb98b76b605e926b1c0eddcf1e6e16e10f8->enter($__internal_826a7d773e0c56f8843e84da6e834cb98b76b605e926b1c0eddcf1e6e16e10f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5d741580791ed4ac4a6afaf8d6cfddf1ec559e2a97e0173a51dda053d6f176d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d741580791ed4ac4a6afaf8d6cfddf1ec559e2a97e0173a51dda053d6f176d->enter($__internal_d5d741580791ed4ac4a6afaf8d6cfddf1ec559e2a97e0173a51dda053d6f176d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card card-outline-info\">
                <div class=\"card-header\">
                    <h4 class=\"m-b-0 text-white\">Shop Details | About | Privacy Policy | Refund Policy

                    </h4>
                </div>
                <div class=\"card-body\">
                 
<form method=\"post\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_shop_details");
        echo "\">
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 15
            echo "    <div class=\"form-row\">
  <div class=\"form-group col-md-4\">
      <label for=\"mid\">Currency Format*</label>
 <SELECT class=\"form-control\" id=\"mid\"   name=\"currency\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "currencyFormat", array()), "html", null, true);
            echo "\">
  <option value=\"₹\" ";
            // line 19
            if (($this->getAttribute($context["res"], "currencyFormat", array()) == "₹")) {
                echo " selected ";
            }
            echo " >INR</option>
  <option value=\"AED\" ";
            // line 20
            if (($this->getAttribute($context["res"], "currencyFormat", array()) == "AED")) {
                echo " selected ";
            }
            echo ">AED</option>
 </SELECT>
    </div>
    <div class=\"form-group col-md-4\">
      <label for=\"mkey\">Country Code</label>
 <select class=\"form-control\" id=\"mkey\" placeholder=\"Country Code\"  name=\"country\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "countryCode", array()), "html", null, true);
            echo "\">
   <option value=\"+91\" ";
            // line 26
            if (($this->getAttribute($context["res"], "countryCode", array()) == "+91")) {
                echo " selected ";
            }
            echo " >+91</option>
  <option value=\"+971\" ";
            // line 27
            if (($this->getAttribute($context["res"], "countryCode", array()) == "+971")) {
                echo " selected ";
            }
            echo ">+971</option>
 </select>
    </div>
        <div class=\"form-group col-md-4\">
      <label for=\"mkey\">SMS Senderid</label>
 <input type=\"text\" class=\"form-control\" id=\"mkey\" placeholder=\"Senderid\"  name=\"sms\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "sms", array()), "html", null, true);
            echo "\">
    </div>
  </div>
      <div class=\"form-row\">
  <div class=\"form-group col-md-6\">
      <label for=\"mid\">SMS api Key*</label>
 <input type=\"text\" class=\"form-control\" id=\"mid\" placeholder=\"Curency Format\"  name=\"apiKey\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "apiKey", array()), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"mkey\">Firebase</label>
 <input type=\"text\" class=\"form-control\" id=\"mkey\" placeholder=\"RazorPay key secret\"  name=\"firebase\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "firebase", array()), "html", null, true);
            echo "\">
    </div>
     
  </div>

    <div class=\"form-row\">
   <div class=\"form-group col-md-6\">
      <label for=\"fb\">Facebook</label>
     <input type=\"text\" class=\"form-control \" id=\"fb\" placeholder=\"Facebook link\"  name=\"facebook\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "facebook_url", array()), "html", null, true);
            echo "\">
    </div>
<div class=\"form-group col-md-6\">
      <label for=\"inputPassword4\">Instagram</label>
 <input type=\"text\" class=\"form-control\" id=\"fb\" placeholder=\"Instagram link\"  name=\"instagram\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "instagram_url", array()), "html", null, true);
            echo "\">
    </div>
</div>
    <div class=\"form-row\">
   <div class=\"form-group col-md-6\">
      <label for=\"fb\">Youtube</label>
     <input type=\"text\" class=\"form-control\" id=\"fb\" placeholder=\"Youtube link\"  name=\"youtube\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "youtube_url", array()), "html", null, true);
            echo "\">
    </div>
<div class=\"form-group col-md-6\">
      <label for=\"inputPassword4\">Twitter</label>
 <input type=\"text\" class=\"form-control\" id=\"fb\" placeholder=\"Twitter link\"  name=\"twitter\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "twitter_url", array()), "html", null, true);
            echo "\">
    </div>
</div>
   <div class=\"form-row\">
   <div class=\"form-group col-md-6\">
      <label for=\"fb\">Play Store </label>
     <input type=\"text\" class=\"form-control\" id=\"fb\" placeholder=\"google play store link\"  name=\"play_store\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "play_store", array()), "html", null, true);
            echo "\">
    </div>
<div class=\"form-group col-md-6\">
      <label for=\"inputPassword4\">App Store</label>
 <input type=\"text\" class=\"form-control\" id=\"fb\" placeholder=\"apple store link\"  name=\"app_store\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "apple_store", array()), "html", null, true);
            echo "\">
    </div>
</div>

    <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
            <label for=\"inputPassword4\">Number Format</label>
            <select class=\"form-control\" id=\"numberformat\" name=\"numberformat\" placeholder=\"Number Format\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "number_format", array()), "html", null, true);
            echo "\">
<option value=\"1\" ";
            // line 82
            if (($this->getAttribute($context["res"], "number_format", array()) == "1")) {
                echo " selected ";
            }
            echo " >Round ( Eg : 4.00 )</option>

                <option value=\"0\" ";
            // line 84
            if (($this->getAttribute($context["res"], "number_format", array()) == "0")) {
                echo " selected ";
            }
            echo ">Round For Decimals (Eg : 4.50)</option>
            </select>
        </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "  <button type=\"submit\" class=\"btn btn-primary\">Save</button>

</form>
</div>
            </div>
        </div>
    </div>
";
        
        $__internal_d5d741580791ed4ac4a6afaf8d6cfddf1ec559e2a97e0173a51dda053d6f176d->leave($__internal_d5d741580791ed4ac4a6afaf8d6cfddf1ec559e2a97e0173a51dda053d6f176d_prof);

        
        $__internal_826a7d773e0c56f8843e84da6e834cb98b76b605e926b1c0eddcf1e6e16e10f8->leave($__internal_826a7d773e0c56f8843e84da6e834cb98b76b605e926b1c0eddcf1e6e16e10f8_prof);

    }

    // line 99
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ff39f736553e9671a9f56bc4c89d56da9dcd5eec868062d087b6c9c506f9e557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff39f736553e9671a9f56bc4c89d56da9dcd5eec868062d087b6c9c506f9e557->enter($__internal_ff39f736553e9671a9f56bc4c89d56da9dcd5eec868062d087b6c9c506f9e557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_0bf34a8c45acd0b73e193c0f9349f5e33176a7a6877a73e49f305f82e92a4f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf34a8c45acd0b73e193c0f9349f5e33176a7a6877a73e49f305f82e92a4f28->enter($__internal_0bf34a8c45acd0b73e193c0f9349f5e33176a7a6877a73e49f305f82e92a4f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 100
        echo "
<script>
    
        \$(document).ready(function() {
            // Basic
            \$('.dropify').dropify();
            // Translated
            \$('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });
    
            // Used events
            var drEvent = \$('#input-file-events').dropify();
    
            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm(\"Do you really want to delete \\\"\" + element.file.name + \"\\\" ?\");
            });
    
            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });
    
            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });
    
            var drDestroy = \$('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            \$('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
        
</script>
 <script>
        \$(document).ready(function() {
            \$('.privacy').richText();
        });
        \$(document).ready(function() {
            \$('.description').richText();
        });
        \$(document).ready(function() {
            \$('.terms').richText();
        });
         \$(document).ready(function() {
            \$('.return').richText();
        });
           \$(document).ready(function() {
            \$('.refund').richText();
        });
             \$(document).ready(function() {
            \$('.wallet').richText();
        });
        </script>
";
        
        $__internal_0bf34a8c45acd0b73e193c0f9349f5e33176a7a6877a73e49f305f82e92a4f28->leave($__internal_0bf34a8c45acd0b73e193c0f9349f5e33176a7a6877a73e49f305f82e92a4f28_prof);

        
        $__internal_ff39f736553e9671a9f56bc4c89d56da9dcd5eec868062d087b6c9c506f9e557->leave($__internal_ff39f736553e9671a9f56bc4c89d56da9dcd5eec868062d087b6c9c506f9e557_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Shop/shopDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 100,  233 => 99,  216 => 90,  202 => 84,  195 => 82,  191 => 81,  181 => 74,  174 => 70,  165 => 64,  158 => 60,  149 => 54,  142 => 50,  131 => 42,  124 => 38,  115 => 32,  105 => 27,  99 => 26,  95 => 25,  85 => 20,  79 => 19,  75 => 18,  70 => 15,  66 => 14,  62 => 13,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@AppBundle/Admin/base.html.twig\" %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card card-outline-info\">
                <div class=\"card-header\">
                    <h4 class=\"m-b-0 text-white\">Shop Details | About | Privacy Policy | Refund Policy

                    </h4>
                </div>
                <div class=\"card-body\">
                 
<form method=\"post\" action=\"{{ path('update_shop_details') }}\">
  {% for res in data %}
    <div class=\"form-row\">
  <div class=\"form-group col-md-4\">
      <label for=\"mid\">Currency Format*</label>
 <SELECT class=\"form-control\" id=\"mid\"   name=\"currency\" value=\"{{ res.currencyFormat }}\">
  <option value=\"₹\" {% if res.currencyFormat == '₹' %} selected {% endif %} >INR</option>
  <option value=\"AED\" {% if res.currencyFormat == 'AED' %} selected {% endif %}>AED</option>
 </SELECT>
    </div>
    <div class=\"form-group col-md-4\">
      <label for=\"mkey\">Country Code</label>
 <select class=\"form-control\" id=\"mkey\" placeholder=\"Country Code\"  name=\"country\" value=\"{{ res.countryCode }}\">
   <option value=\"+91\" {% if res.countryCode == '+91' %} selected {% endif %} >+91</option>
  <option value=\"+971\" {% if res.countryCode == '+971' %} selected {% endif %}>+971</option>
 </select>
    </div>
        <div class=\"form-group col-md-4\">
      <label for=\"mkey\">SMS Senderid</label>
 <input type=\"text\" class=\"form-control\" id=\"mkey\" placeholder=\"Senderid\"  name=\"sms\" value=\"{{ res.sms }}\">
    </div>
  </div>
      <div class=\"form-row\">
  <div class=\"form-group col-md-6\">
      <label for=\"mid\">SMS api Key*</label>
 <input type=\"text\" class=\"form-control\" id=\"mid\" placeholder=\"Curency Format\"  name=\"apiKey\" value=\"{{ res.apiKey }}\">
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"mkey\">Firebase</label>
 <input type=\"text\" class=\"form-control\" id=\"mkey\" placeholder=\"RazorPay key secret\"  name=\"firebase\" value=\"{{ res.firebase }}\">
    </div>
     
  </div>

    <div class=\"form-row\">
   <div class=\"form-group col-md-6\">
      <label for=\"fb\">Facebook</label>
     <input type=\"text\" class=\"form-control \" id=\"fb\" placeholder=\"Facebook link\"  name=\"facebook\" value=\"{{ res.facebook_url }}\">
    </div>
<div class=\"form-group col-md-6\">
      <label for=\"inputPassword4\">Instagram</label>
 <input type=\"text\" class=\"form-control\" id=\"fb\" placeholder=\"Instagram link\"  name=\"instagram\" value=\"{{ res.instagram_url }}\">
    </div>
</div>
    <div class=\"form-row\">
   <div class=\"form-group col-md-6\">
      <label for=\"fb\">Youtube</label>
     <input type=\"text\" class=\"form-control\" id=\"fb\" placeholder=\"Youtube link\"  name=\"youtube\" value=\"{{ res.youtube_url }}\">
    </div>
<div class=\"form-group col-md-6\">
      <label for=\"inputPassword4\">Twitter</label>
 <input type=\"text\" class=\"form-control\" id=\"fb\" placeholder=\"Twitter link\"  name=\"twitter\" value=\"{{ res.twitter_url }}\">
    </div>
</div>
   <div class=\"form-row\">
   <div class=\"form-group col-md-6\">
      <label for=\"fb\">Play Store </label>
     <input type=\"text\" class=\"form-control\" id=\"fb\" placeholder=\"google play store link\"  name=\"play_store\" value=\"{{ res.play_store }}\">
    </div>
<div class=\"form-group col-md-6\">
      <label for=\"inputPassword4\">App Store</label>
 <input type=\"text\" class=\"form-control\" id=\"fb\" placeholder=\"apple store link\"  name=\"app_store\" value=\"{{ res.apple_store }}\">
    </div>
</div>

    <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
            <label for=\"inputPassword4\">Number Format</label>
            <select class=\"form-control\" id=\"numberformat\" name=\"numberformat\" placeholder=\"Number Format\" value=\"{{ res.number_format }}\">
<option value=\"1\" {% if res.number_format == '1' %} selected {% endif %} >Round ( Eg : 4.00 )</option>

                <option value=\"0\" {% if res.number_format == '0' %} selected {% endif %}>Round For Decimals (Eg : 4.50)</option>
            </select>
        </div>
    </div>

{% endfor %}
  <button type=\"submit\" class=\"btn btn-primary\">Save</button>

</form>
</div>
            </div>
        </div>
    </div>
{% endblock %}

{% block scripts %}

<script>
    
        \$(document).ready(function() {
            // Basic
            \$('.dropify').dropify();
            // Translated
            \$('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });
    
            // Used events
            var drEvent = \$('#input-file-events').dropify();
    
            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm(\"Do you really want to delete \\\"\" + element.file.name + \"\\\" ?\");
            });
    
            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });
    
            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });
    
            var drDestroy = \$('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            \$('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
        
</script>
 <script>
        \$(document).ready(function() {
            \$('.privacy').richText();
        });
        \$(document).ready(function() {
            \$('.description').richText();
        });
        \$(document).ready(function() {
            \$('.terms').richText();
        });
         \$(document).ready(function() {
            \$('.return').richText();
        });
           \$(document).ready(function() {
            \$('.refund').richText();
        });
             \$(document).ready(function() {
            \$('.wallet').richText();
        });
        </script>
{% endblock %}
", "AppBundle:Admin:Shop/shopDetails.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Shop/shopDetails.html.twig");
    }
}
