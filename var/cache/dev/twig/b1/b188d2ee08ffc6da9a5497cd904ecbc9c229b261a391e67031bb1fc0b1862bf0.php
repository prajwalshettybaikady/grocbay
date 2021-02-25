<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_d6176d1cc0f9477a638a9e8aae9d079558ad24f6ccbd1c650fa810bc0de2a970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ff7254e33dea20671eeca0653ab920d36598d66b4fa7c2a028f903e02a877f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff7254e33dea20671eeca0653ab920d36598d66b4fa7c2a028f903e02a877f1->enter($__internal_1ff7254e33dea20671eeca0653ab920d36598d66b4fa7c2a028f903e02a877f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_58ebef055950955c9a44e23d64c55349046713be70537dab18fef98480475dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ebef055950955c9a44e23d64c55349046713be70537dab18fef98480475dd2->enter($__internal_58ebef055950955c9a44e23d64c55349046713be70537dab18fef98480475dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1ff7254e33dea20671eeca0653ab920d36598d66b4fa7c2a028f903e02a877f1->leave($__internal_1ff7254e33dea20671eeca0653ab920d36598d66b4fa7c2a028f903e02a877f1_prof);

        
        $__internal_58ebef055950955c9a44e23d64c55349046713be70537dab18fef98480475dd2->leave($__internal_58ebef055950955c9a44e23d64c55349046713be70537dab18fef98480475dd2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2512f01f37ff9444c3b32fa0b53c63051a1067fa989791d8a80949542da05611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2512f01f37ff9444c3b32fa0b53c63051a1067fa989791d8a80949542da05611->enter($__internal_2512f01f37ff9444c3b32fa0b53c63051a1067fa989791d8a80949542da05611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92909132352b4899090088763c61b8c3d39f0003ee469a3197ad68a9f372b846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92909132352b4899090088763c61b8c3d39f0003ee469a3197ad68a9f372b846->enter($__internal_92909132352b4899090088763c61b8c3d39f0003ee469a3197ad68a9f372b846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_92909132352b4899090088763c61b8c3d39f0003ee469a3197ad68a9f372b846->leave($__internal_92909132352b4899090088763c61b8c3d39f0003ee469a3197ad68a9f372b846_prof);

        
        $__internal_2512f01f37ff9444c3b32fa0b53c63051a1067fa989791d8a80949542da05611->leave($__internal_2512f01f37ff9444c3b32fa0b53c63051a1067fa989791d8a80949542da05611_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_78f251f4f20234d2a4cfe4a66119b7b841f5ba22142ebd8d93e6e3abdc62070d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f251f4f20234d2a4cfe4a66119b7b841f5ba22142ebd8d93e6e3abdc62070d->enter($__internal_78f251f4f20234d2a4cfe4a66119b7b841f5ba22142ebd8d93e6e3abdc62070d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c209e3b3cd373a7e1f07b318bbdd85a04726b3b54e23d4c6c4f194b6db924284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c209e3b3cd373a7e1f07b318bbdd85a04726b3b54e23d4c6c4f194b6db924284->enter($__internal_c209e3b3cd373a7e1f07b318bbdd85a04726b3b54e23d4c6c4f194b6db924284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c209e3b3cd373a7e1f07b318bbdd85a04726b3b54e23d4c6c4f194b6db924284->leave($__internal_c209e3b3cd373a7e1f07b318bbdd85a04726b3b54e23d4c6c4f194b6db924284_prof);

        
        $__internal_78f251f4f20234d2a4cfe4a66119b7b841f5ba22142ebd8d93e6e3abdc62070d->leave($__internal_78f251f4f20234d2a4cfe4a66119b7b841f5ba22142ebd8d93e6e3abdc62070d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_53edbf3427d315d8a0f793cc0e172c88b7a27b49f7ff28fb63fe3da7a4db7281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53edbf3427d315d8a0f793cc0e172c88b7a27b49f7ff28fb63fe3da7a4db7281->enter($__internal_53edbf3427d315d8a0f793cc0e172c88b7a27b49f7ff28fb63fe3da7a4db7281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a19d1d9e1d84ca2384bf0ee78d64c7a972a3d287223deef3a517f58cda303647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19d1d9e1d84ca2384bf0ee78d64c7a972a3d287223deef3a517f58cda303647->enter($__internal_a19d1d9e1d84ca2384bf0ee78d64c7a972a3d287223deef3a517f58cda303647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a19d1d9e1d84ca2384bf0ee78d64c7a972a3d287223deef3a517f58cda303647->leave($__internal_a19d1d9e1d84ca2384bf0ee78d64c7a972a3d287223deef3a517f58cda303647_prof);

        
        $__internal_53edbf3427d315d8a0f793cc0e172c88b7a27b49f7ff28fb63fe3da7a4db7281->leave($__internal_53edbf3427d315d8a0f793cc0e172c88b7a27b49f7ff28fb63fe3da7a4db7281_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/grocbay/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
