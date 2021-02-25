<?php

/* AppBundle:Admin:User/login.html.twig */
class __TwigTemplate_6bcd6035934a56249dfadd06badb5b8910b2adcd466510c28c9c5f45b1dfd571 extends Twig_Template
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
        $__internal_9474fe018ab11b5cf85a730c6f9710ee766503f5f3177a984c3776577e98463f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9474fe018ab11b5cf85a730c6f9710ee766503f5f3177a984c3776577e98463f->enter($__internal_9474fe018ab11b5cf85a730c6f9710ee766503f5f3177a984c3776577e98463f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:User/login.html.twig"));

        $__internal_a2d719a00f357e19a9e3b05e7d23ea4f66dfbd5b6981677f95b18d2bfce5abc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d719a00f357e19a9e3b05e7d23ea4f66dfbd5b6981677f95b18d2bfce5abc5->enter($__internal_a2d719a00f357e19a9e3b05e7d23ea4f66dfbd5b6981677f95b18d2bfce5abc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:User/login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "baseUrl", array()), "html", null, true);
        echo " - Login Page</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap\" rel=\"stylesheet\">
    <link href=\"/assets/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/authentication/form-2.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/assets/css/forms/theme-checkbox-radio.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/assets/css/forms/switches.css\">
</head>
<body class=\"form\">
    

    <div class=\"form-container outer\">
        <div class=\"form-form\">
            <div class=\"form-form-wrap\">
                <div class=\"form-container\">
                    <div class=\"form-content\">

                        <p class=\"\">Log in to your account to continue.</p>
                        
                        <form class=\"text-left\"  id=\"loginform\" method=\"POST\"  method=\"POST\" action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_login_check");
        echo "\">
                            <div class=\"form\">

                                <div id=\"username-field\" class=\"field-wrapper input\">
                                    <label for=\"username\">Email </label>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg>
                                    <input id=\"username\" name=\"_username\" type=\"email\" class=\"form-control\" placeholder=\"admin@grocbay.com\">
                                </div>

                                <div id=\"password-field\" class=\"field-wrapper input mb-2\">
                                    <div class=\"d-flex justify-content-between\">
                                        <label for=\"password\">PASSWORD</label>
                                        <a href=\"#commingsoon!\" class=\"forgot-pass-link\">Forgot Password?</a>
                                    </div>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-lock\"><rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" ry=\"2\"></rect><path d=\"M7 11V7a5 5 0 0 1 10 0v4\"></path></svg>
                                    <input id=\"password\" name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"toggle-password\" class=\"feather feather-eye\"><path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path><circle cx=\"12\" cy=\"12\" r=\"3\"></circle></svg>
                                </div>
                                <div class=\"d-sm-flex justify-content-between\">
                                    <div class=\"field-wrapper\">
                                        <button type=\"submit\" class=\"btn btn-primary\" value=\"\">Log In</button>
                                    </div>
                                </div>

                                <div class=\"division\">
               ";
        // line 55
        if (($context["users"] ?? $this->getContext($context, "users"))) {
            // line 56
            echo "                            <div class=\"alert alert-danger alert-dismissible\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
<strong>Wrong Password or Email Id!</strong> Please enter valid credentails!.</div>
    
  ";
        }
        // line 60
        echo "                                </div>

                               

                                <p class=\"signup-link\">Powered By <a href=\"https://appinsight.tech/\" target=\"_BLANK\">AppInsight Technologies</a></p>

                            </div>
                        </form>

                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\"/assets/assets/js/libs/jquery-3.1.1.min.js\"></script>
    <script src=\"/assets/bootstrap/js/popper.min.js\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src=\"/assets/assets/js/authentication/form-2.js\"></script>

</body>
</html>
";
        
        $__internal_9474fe018ab11b5cf85a730c6f9710ee766503f5f3177a984c3776577e98463f->leave($__internal_9474fe018ab11b5cf85a730c6f9710ee766503f5f3177a984c3776577e98463f_prof);

        
        $__internal_a2d719a00f357e19a9e3b05e7d23ea4f66dfbd5b6981677f95b18d2bfce5abc5->leave($__internal_a2d719a00f357e19a9e3b05e7d23ea4f66dfbd5b6981677f95b18d2bfce5abc5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 60,  89 => 56,  87 => 55,  59 => 30,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\">
    <title>{{ app.request.baseUrl }} - Login Page</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap\" rel=\"stylesheet\">
    <link href=\"/assets/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/assets/css/authentication/form-2.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/assets/css/forms/theme-checkbox-radio.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/assets/css/forms/switches.css\">
</head>
<body class=\"form\">
    

    <div class=\"form-container outer\">
        <div class=\"form-form\">
            <div class=\"form-form-wrap\">
                <div class=\"form-container\">
                    <div class=\"form-content\">

                        <p class=\"\">Log in to your account to continue.</p>
                        
                        <form class=\"text-left\"  id=\"loginform\" method=\"POST\"  method=\"POST\" action=\"{{ path('admin_login_check') }}\">
                            <div class=\"form\">

                                <div id=\"username-field\" class=\"field-wrapper input\">
                                    <label for=\"username\">Email </label>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg>
                                    <input id=\"username\" name=\"_username\" type=\"email\" class=\"form-control\" placeholder=\"admin@grocbay.com\">
                                </div>

                                <div id=\"password-field\" class=\"field-wrapper input mb-2\">
                                    <div class=\"d-flex justify-content-between\">
                                        <label for=\"password\">PASSWORD</label>
                                        <a href=\"#commingsoon!\" class=\"forgot-pass-link\">Forgot Password?</a>
                                    </div>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-lock\"><rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" ry=\"2\"></rect><path d=\"M7 11V7a5 5 0 0 1 10 0v4\"></path></svg>
                                    <input id=\"password\" name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"toggle-password\" class=\"feather feather-eye\"><path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path><circle cx=\"12\" cy=\"12\" r=\"3\"></circle></svg>
                                </div>
                                <div class=\"d-sm-flex justify-content-between\">
                                    <div class=\"field-wrapper\">
                                        <button type=\"submit\" class=\"btn btn-primary\" value=\"\">Log In</button>
                                    </div>
                                </div>

                                <div class=\"division\">
               {% if  users  %}
                            <div class=\"alert alert-danger alert-dismissible\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
<strong>Wrong Password or Email Id!</strong> Please enter valid credentails!.</div>
    
  {% endif %}                                </div>

                               

                                <p class=\"signup-link\">Powered By <a href=\"https://appinsight.tech/\" target=\"_BLANK\">AppInsight Technologies</a></p>

                            </div>
                        </form>

                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\"/assets/assets/js/libs/jquery-3.1.1.min.js\"></script>
    <script src=\"/assets/bootstrap/js/popper.min.js\"></script>
    <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src=\"/assets/assets/js/authentication/form-2.js\"></script>

</body>
</html>
", "AppBundle:Admin:User/login.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/User/login.html.twig");
    }
}
