<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dcca168c142b957d3b41c3f08ec9b3557c842d200567c9ed4f7c18e3676aa4fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_532d9c683e2dcba3cff80e72792ccf7e9273fc18b53273c9bbf8e70e96448773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532d9c683e2dcba3cff80e72792ccf7e9273fc18b53273c9bbf8e70e96448773->enter($__internal_532d9c683e2dcba3cff80e72792ccf7e9273fc18b53273c9bbf8e70e96448773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7f949c9ad78ea56b042dfb1f4d83dc50f841342280230e8f91188cbfbd8968b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f949c9ad78ea56b042dfb1f4d83dc50f841342280230e8f91188cbfbd8968b4->enter($__internal_7f949c9ad78ea56b042dfb1f4d83dc50f841342280230e8f91188cbfbd8968b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_532d9c683e2dcba3cff80e72792ccf7e9273fc18b53273c9bbf8e70e96448773->leave($__internal_532d9c683e2dcba3cff80e72792ccf7e9273fc18b53273c9bbf8e70e96448773_prof);

        
        $__internal_7f949c9ad78ea56b042dfb1f4d83dc50f841342280230e8f91188cbfbd8968b4->leave($__internal_7f949c9ad78ea56b042dfb1f4d83dc50f841342280230e8f91188cbfbd8968b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_433251c1e2fa202fa6e703af36c6a5f5a8e1c56fa3f3423f33865a47f8c6da25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433251c1e2fa202fa6e703af36c6a5f5a8e1c56fa3f3423f33865a47f8c6da25->enter($__internal_433251c1e2fa202fa6e703af36c6a5f5a8e1c56fa3f3423f33865a47f8c6da25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dbff99a669ff94cc3055ca0fa6c1ae12dddc0497e3d4d5ea9d04487109a39c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbff99a669ff94cc3055ca0fa6c1ae12dddc0497e3d4d5ea9d04487109a39c14->enter($__internal_dbff99a669ff94cc3055ca0fa6c1ae12dddc0497e3d4d5ea9d04487109a39c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dbff99a669ff94cc3055ca0fa6c1ae12dddc0497e3d4d5ea9d04487109a39c14->leave($__internal_dbff99a669ff94cc3055ca0fa6c1ae12dddc0497e3d4d5ea9d04487109a39c14_prof);

        
        $__internal_433251c1e2fa202fa6e703af36c6a5f5a8e1c56fa3f3423f33865a47f8c6da25->leave($__internal_433251c1e2fa202fa6e703af36c6a5f5a8e1c56fa3f3423f33865a47f8c6da25_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6a42dc220a7abab4f62d65b37e04de4952e52ac51e0030c598b12dcd6290427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a42dc220a7abab4f62d65b37e04de4952e52ac51e0030c598b12dcd6290427->enter($__internal_f6a42dc220a7abab4f62d65b37e04de4952e52ac51e0030c598b12dcd6290427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_38fd455e26160379cfc3729a69221c87d0dfb070a649fe15d6477f2042ebe1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fd455e26160379cfc3729a69221c87d0dfb070a649fe15d6477f2042ebe1ab->enter($__internal_38fd455e26160379cfc3729a69221c87d0dfb070a649fe15d6477f2042ebe1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38fd455e26160379cfc3729a69221c87d0dfb070a649fe15d6477f2042ebe1ab->leave($__internal_38fd455e26160379cfc3729a69221c87d0dfb070a649fe15d6477f2042ebe1ab_prof);

        
        $__internal_f6a42dc220a7abab4f62d65b37e04de4952e52ac51e0030c598b12dcd6290427->leave($__internal_f6a42dc220a7abab4f62d65b37e04de4952e52ac51e0030c598b12dcd6290427_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4bb76a195a4d3fb48b8356f0885905f82b1fb3821d8dcc6b371d18f41bbae224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb76a195a4d3fb48b8356f0885905f82b1fb3821d8dcc6b371d18f41bbae224->enter($__internal_4bb76a195a4d3fb48b8356f0885905f82b1fb3821d8dcc6b371d18f41bbae224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4041f6bb58483dbc95bb26881878f11ce5bc7ca06a9c36bb7754529494f76ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4041f6bb58483dbc95bb26881878f11ce5bc7ca06a9c36bb7754529494f76ec7->enter($__internal_4041f6bb58483dbc95bb26881878f11ce5bc7ca06a9c36bb7754529494f76ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4041f6bb58483dbc95bb26881878f11ce5bc7ca06a9c36bb7754529494f76ec7->leave($__internal_4041f6bb58483dbc95bb26881878f11ce5bc7ca06a9c36bb7754529494f76ec7_prof);

        
        $__internal_4bb76a195a4d3fb48b8356f0885905f82b1fb3821d8dcc6b371d18f41bbae224->leave($__internal_4bb76a195a4d3fb48b8356f0885905f82b1fb3821d8dcc6b371d18f41bbae224_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/grocbay/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
