<?php

/* @AppBundle/Themes/widget.html.twig */
class __TwigTemplate_14c0364136cc76188f2f7ee6d6cfd4def52625c0748b971b8cd1585a39fc7421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17811dcaa6c332ba31401f133c1918f512d0c6e831148ea6b41c25721e8c67a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17811dcaa6c332ba31401f133c1918f512d0c6e831148ea6b41c25721e8c67a3->enter($__internal_17811dcaa6c332ba31401f133c1918f512d0c6e831148ea6b41c25721e8c67a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Themes/widget.html.twig"));

        $__internal_87d2bccdddc9bd056ac85109f79f059eebe76920783e8e1e099aa812e60331a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d2bccdddc9bd056ac85109f79f059eebe76920783e8e1e099aa812e60331a0->enter($__internal_87d2bccdddc9bd056ac85109f79f059eebe76920783e8e1e099aa812e60331a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Themes/widget.html.twig"));

        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_17811dcaa6c332ba31401f133c1918f512d0c6e831148ea6b41c25721e8c67a3->leave($__internal_17811dcaa6c332ba31401f133c1918f512d0c6e831148ea6b41c25721e8c67a3_prof);

        
        $__internal_87d2bccdddc9bd056ac85109f79f059eebe76920783e8e1e099aa812e60331a0->leave($__internal_87d2bccdddc9bd056ac85109f79f059eebe76920783e8e1e099aa812e60331a0_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5c0aac56a798c77e6c8d705ff45340c3ea3b2824da9fe1d0cdd14121c039f25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0aac56a798c77e6c8d705ff45340c3ea3b2824da9fe1d0cdd14121c039f25f->enter($__internal_5c0aac56a798c77e6c8d705ff45340c3ea3b2824da9fe1d0cdd14121c039f25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b2e4831deeda7506ad94d9eeb7e6aef45229c2101495254c8214c089543c6cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e4831deeda7506ad94d9eeb7e6aef45229c2101495254c8214c089543c6cd0->enter($__internal_b2e4831deeda7506ad94d9eeb7e6aef45229c2101495254c8214c089543c6cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 3
        ob_start();
        // line 4
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_form_group\" class=\"form-group ";
        echo (($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) ? ("has-error") : (""));
        echo "\">


  ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
  ";
        // line 8
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 9
            echo "      ";
            ob_start();
            // line 10
            echo "   ";
            if (array_key_exists("errors", $context)) {
                // line 11
                echo "    ";
                if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                    // line 12
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 13
                        echo "          <div class=\"alert alert-danger fade in\">
               <a href=\"javascript:;\" class=\"close\" data-dismiss=\"alert\">&times;</a>
               <strong>Error!</strong> ";
                        // line 15
                        echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                        echo ".
          </div>
        
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "    ";
                }
                // line 20
                echo "   ";
            }
            // line 21
            echo "      ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 22
            echo "  ";
        }
        // line 23
        echo "  </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b2e4831deeda7506ad94d9eeb7e6aef45229c2101495254c8214c089543c6cd0->leave($__internal_b2e4831deeda7506ad94d9eeb7e6aef45229c2101495254c8214c089543c6cd0_prof);

        
        $__internal_5c0aac56a798c77e6c8d705ff45340c3ea3b2824da9fe1d0cdd14121c039f25f->leave($__internal_5c0aac56a798c77e6c8d705ff45340c3ea3b2824da9fe1d0cdd14121c039f25f_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Themes/widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  79 => 15,  75 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  59 => 8,  55 => 7,  46 => 4,  44 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/template/fields.html.twig #}
{% block form_row %}
{% spaceless %}
    <div id=\"{{ form.vars.id }}_form_group\" class=\"form-group {{ form_errors(form) ? \"has-error\" : \"\" }}\">


  {{ form_widget(form) }}
  {% if form_errors(form) %}
      {% spaceless %}
   {% if errors is defined %}
    {% if errors|length > 0 %}
        {% for error in errors %}
          <div class=\"alert alert-danger fade in\">
               <a href=\"javascript:;\" class=\"close\" data-dismiss=\"alert\">&times;</a>
               <strong>Error!</strong> {{ error.message }}.
          </div>
        
        {% endfor %}
    {% endif %}
   {% endif %}
      {% endspaceless %}
  {% endif %}
  </div>

{% endspaceless %}
{% endblock form_row %}", "@AppBundle/Themes/widget.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Themes/widget.html.twig");
    }
}
