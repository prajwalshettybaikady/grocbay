<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d91409427efa72a80b36326c9986027d087a462d9040b5b62e687b74cf7d87ac extends Twig_Template
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
        $__internal_3811bc1a020a6e376a4449af247e1f0c3b46b21dfed1c9794524d3df98a3ef80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3811bc1a020a6e376a4449af247e1f0c3b46b21dfed1c9794524d3df98a3ef80->enter($__internal_3811bc1a020a6e376a4449af247e1f0c3b46b21dfed1c9794524d3df98a3ef80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e8b082380e7d2e48f39e6cf4dd610a7c6a45ef415ce70892701304063c504271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b082380e7d2e48f39e6cf4dd610a7c6a45ef415ce70892701304063c504271->enter($__internal_e8b082380e7d2e48f39e6cf4dd610a7c6a45ef415ce70892701304063c504271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3811bc1a020a6e376a4449af247e1f0c3b46b21dfed1c9794524d3df98a3ef80->leave($__internal_3811bc1a020a6e376a4449af247e1f0c3b46b21dfed1c9794524d3df98a3ef80_prof);

        
        $__internal_e8b082380e7d2e48f39e6cf4dd610a7c6a45ef415ce70892701304063c504271->leave($__internal_e8b082380e7d2e48f39e6cf4dd610a7c6a45ef415ce70892701304063c504271_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/html/grocbay/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
