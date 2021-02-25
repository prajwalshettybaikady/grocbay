<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2a0ef3402bcbb46c4c41d535007768cbf36139a2a13829fcbc94acd113cf5fcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f5e96fd58a4c4ecab828860597c1532e42bf8026a5462268e597c7f15d4295c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5e96fd58a4c4ecab828860597c1532e42bf8026a5462268e597c7f15d4295c->enter($__internal_1f5e96fd58a4c4ecab828860597c1532e42bf8026a5462268e597c7f15d4295c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bcff8a00c823e7861a1e75bb60c2525187bebb2c4ffeb6d38f8924f4b94b40b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcff8a00c823e7861a1e75bb60c2525187bebb2c4ffeb6d38f8924f4b94b40b0->enter($__internal_bcff8a00c823e7861a1e75bb60c2525187bebb2c4ffeb6d38f8924f4b94b40b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f5e96fd58a4c4ecab828860597c1532e42bf8026a5462268e597c7f15d4295c->leave($__internal_1f5e96fd58a4c4ecab828860597c1532e42bf8026a5462268e597c7f15d4295c_prof);

        
        $__internal_bcff8a00c823e7861a1e75bb60c2525187bebb2c4ffeb6d38f8924f4b94b40b0->leave($__internal_bcff8a00c823e7861a1e75bb60c2525187bebb2c4ffeb6d38f8924f4b94b40b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23dc585a9dead4066e9ae7910ec8822b7079eefbf0614421279448db091a26fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23dc585a9dead4066e9ae7910ec8822b7079eefbf0614421279448db091a26fd->enter($__internal_23dc585a9dead4066e9ae7910ec8822b7079eefbf0614421279448db091a26fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b3c0498ba8f320b66619f5cb9ed73a568be4dbeb3e98b0390cc4777a7b4feaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3c0498ba8f320b66619f5cb9ed73a568be4dbeb3e98b0390cc4777a7b4feaa->enter($__internal_9b3c0498ba8f320b66619f5cb9ed73a568be4dbeb3e98b0390cc4777a7b4feaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9b3c0498ba8f320b66619f5cb9ed73a568be4dbeb3e98b0390cc4777a7b4feaa->leave($__internal_9b3c0498ba8f320b66619f5cb9ed73a568be4dbeb3e98b0390cc4777a7b4feaa_prof);

        
        $__internal_23dc585a9dead4066e9ae7910ec8822b7079eefbf0614421279448db091a26fd->leave($__internal_23dc585a9dead4066e9ae7910ec8822b7079eefbf0614421279448db091a26fd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99d2f2f29c4418f723b006fdfe8ea2f71c609caa80976ed1295fbde6a30a28cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d2f2f29c4418f723b006fdfe8ea2f71c609caa80976ed1295fbde6a30a28cb->enter($__internal_99d2f2f29c4418f723b006fdfe8ea2f71c609caa80976ed1295fbde6a30a28cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f95d9873da0452d42f48810c06769a594e8be7499d264d6fd71483492fc810fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95d9873da0452d42f48810c06769a594e8be7499d264d6fd71483492fc810fc->enter($__internal_f95d9873da0452d42f48810c06769a594e8be7499d264d6fd71483492fc810fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f95d9873da0452d42f48810c06769a594e8be7499d264d6fd71483492fc810fc->leave($__internal_f95d9873da0452d42f48810c06769a594e8be7499d264d6fd71483492fc810fc_prof);

        
        $__internal_99d2f2f29c4418f723b006fdfe8ea2f71c609caa80976ed1295fbde6a30a28cb->leave($__internal_99d2f2f29c4418f723b006fdfe8ea2f71c609caa80976ed1295fbde6a30a28cb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d21a0c10f119dba36ca2bd3983d7d1629f4e3e309092efe8dcdd4b32c68195d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d21a0c10f119dba36ca2bd3983d7d1629f4e3e309092efe8dcdd4b32c68195d->enter($__internal_4d21a0c10f119dba36ca2bd3983d7d1629f4e3e309092efe8dcdd4b32c68195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1f0e729735d09cabce0a6b73d0ba4e2a581e2226304edcabfe79a3979b52b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f0e729735d09cabce0a6b73d0ba4e2a581e2226304edcabfe79a3979b52b82->enter($__internal_a1f0e729735d09cabce0a6b73d0ba4e2a581e2226304edcabfe79a3979b52b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a1f0e729735d09cabce0a6b73d0ba4e2a581e2226304edcabfe79a3979b52b82->leave($__internal_a1f0e729735d09cabce0a6b73d0ba4e2a581e2226304edcabfe79a3979b52b82_prof);

        
        $__internal_4d21a0c10f119dba36ca2bd3983d7d1629f4e3e309092efe8dcdd4b32c68195d->leave($__internal_4d21a0c10f119dba36ca2bd3983d7d1629f4e3e309092efe8dcdd4b32c68195d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/grocbay/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
