<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7fc702981f1eac3c8eb6e8ad2f510ded44c48f5101ff15f407cc512429ca7a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3c8b35657904d86ee649b903527e91b6d28036c0918774de84cf657b262a5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c8b35657904d86ee649b903527e91b6d28036c0918774de84cf657b262a5bc->enter($__internal_b3c8b35657904d86ee649b903527e91b6d28036c0918774de84cf657b262a5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9c6fe243b1287ca994157b6705c4e471052c1970e698efffdc395a9bebc0ac29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6fe243b1287ca994157b6705c4e471052c1970e698efffdc395a9bebc0ac29->enter($__internal_9c6fe243b1287ca994157b6705c4e471052c1970e698efffdc395a9bebc0ac29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c8b35657904d86ee649b903527e91b6d28036c0918774de84cf657b262a5bc->leave($__internal_b3c8b35657904d86ee649b903527e91b6d28036c0918774de84cf657b262a5bc_prof);

        
        $__internal_9c6fe243b1287ca994157b6705c4e471052c1970e698efffdc395a9bebc0ac29->leave($__internal_9c6fe243b1287ca994157b6705c4e471052c1970e698efffdc395a9bebc0ac29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd7b92ac01c626e08a67cc5d3905edc054e20a2488f6e2df8e3f93e5b6656f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7b92ac01c626e08a67cc5d3905edc054e20a2488f6e2df8e3f93e5b6656f63->enter($__internal_dd7b92ac01c626e08a67cc5d3905edc054e20a2488f6e2df8e3f93e5b6656f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_509cc01096c08cf117858651640e327dd05e68c4fd587ffe703559a41b16c79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509cc01096c08cf117858651640e327dd05e68c4fd587ffe703559a41b16c79f->enter($__internal_509cc01096c08cf117858651640e327dd05e68c4fd587ffe703559a41b16c79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_509cc01096c08cf117858651640e327dd05e68c4fd587ffe703559a41b16c79f->leave($__internal_509cc01096c08cf117858651640e327dd05e68c4fd587ffe703559a41b16c79f_prof);

        
        $__internal_dd7b92ac01c626e08a67cc5d3905edc054e20a2488f6e2df8e3f93e5b6656f63->leave($__internal_dd7b92ac01c626e08a67cc5d3905edc054e20a2488f6e2df8e3f93e5b6656f63_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc731b5bf008b92108f871a8090e24ba232ec7e1d3612d5d10b28baf31ee1483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc731b5bf008b92108f871a8090e24ba232ec7e1d3612d5d10b28baf31ee1483->enter($__internal_fc731b5bf008b92108f871a8090e24ba232ec7e1d3612d5d10b28baf31ee1483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44a55adb83016f6fcb20047801d25862ee7285a8da9293c3f6fbff4c5889765a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a55adb83016f6fcb20047801d25862ee7285a8da9293c3f6fbff4c5889765a->enter($__internal_44a55adb83016f6fcb20047801d25862ee7285a8da9293c3f6fbff4c5889765a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_44a55adb83016f6fcb20047801d25862ee7285a8da9293c3f6fbff4c5889765a->leave($__internal_44a55adb83016f6fcb20047801d25862ee7285a8da9293c3f6fbff4c5889765a_prof);

        
        $__internal_fc731b5bf008b92108f871a8090e24ba232ec7e1d3612d5d10b28baf31ee1483->leave($__internal_fc731b5bf008b92108f871a8090e24ba232ec7e1d3612d5d10b28baf31ee1483_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_59dcfb294f3bab9c045951c20a77f2c2086154ad5430eca2090452741a689d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59dcfb294f3bab9c045951c20a77f2c2086154ad5430eca2090452741a689d69->enter($__internal_59dcfb294f3bab9c045951c20a77f2c2086154ad5430eca2090452741a689d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_538eef72e7f7cb6c602e0dd292c3121539324cb4db8427b1abbdb13d2429bade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538eef72e7f7cb6c602e0dd292c3121539324cb4db8427b1abbdb13d2429bade->enter($__internal_538eef72e7f7cb6c602e0dd292c3121539324cb4db8427b1abbdb13d2429bade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_538eef72e7f7cb6c602e0dd292c3121539324cb4db8427b1abbdb13d2429bade->leave($__internal_538eef72e7f7cb6c602e0dd292c3121539324cb4db8427b1abbdb13d2429bade_prof);

        
        $__internal_59dcfb294f3bab9c045951c20a77f2c2086154ad5430eca2090452741a689d69->leave($__internal_59dcfb294f3bab9c045951c20a77f2c2086154ad5430eca2090452741a689d69_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/grocbay/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
