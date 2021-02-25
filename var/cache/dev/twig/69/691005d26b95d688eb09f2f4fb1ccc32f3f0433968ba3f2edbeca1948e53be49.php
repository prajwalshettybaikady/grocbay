<?php

/* @AppBundle/Themes/file.html.twig */
class __TwigTemplate_ecee5328f0c4b134f3eca4305ee3a359fda725623be19e1c0ca4516ede88c1d4 extends Twig_Template
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
        $__internal_e4bf863a1bc48aa71fee55d810dafbab83bf743477c741dc6ee0f344807993f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bf863a1bc48aa71fee55d810dafbab83bf743477c741dc6ee0f344807993f3->enter($__internal_e4bf863a1bc48aa71fee55d810dafbab83bf743477c741dc6ee0f344807993f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Themes/file.html.twig"));

        $__internal_680a4ef03f3d03da1ff80478336d33d8eab4335f27137753e1e8ae5ab8807d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680a4ef03f3d03da1ff80478336d33d8eab4335f27137753e1e8ae5ab8807d64->enter($__internal_680a4ef03f3d03da1ff80478336d33d8eab4335f27137753e1e8ae5ab8807d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Themes/file.html.twig"));

        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_e4bf863a1bc48aa71fee55d810dafbab83bf743477c741dc6ee0f344807993f3->leave($__internal_e4bf863a1bc48aa71fee55d810dafbab83bf743477c741dc6ee0f344807993f3_prof);

        
        $__internal_680a4ef03f3d03da1ff80478336d33d8eab4335f27137753e1e8ae5ab8807d64->leave($__internal_680a4ef03f3d03da1ff80478336d33d8eab4335f27137753e1e8ae5ab8807d64_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_078c3dd31cf0bba845c4297291ba06df64aace3b5bd944ac5bd6856389879114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078c3dd31cf0bba845c4297291ba06df64aace3b5bd944ac5bd6856389879114->enter($__internal_078c3dd31cf0bba845c4297291ba06df64aace3b5bd944ac5bd6856389879114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1f4959f7c1fb372005fcae8436853b49c031c6b8cffe38802e363d4ca58d7ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4959f7c1fb372005fcae8436853b49c031c6b8cffe38802e363d4ca58d7ee2->enter($__internal_1f4959f7c1fb372005fcae8436853b49c031c6b8cffe38802e363d4ca58d7ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 3
        ob_start();
        // line 4
        echo "
<div id=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_form_group\" class=\"form-group ";
        echo (($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) ? ("has-error") : (""));
        echo "\">

<div class=\"card\">
    <div class=\"card-body\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "dropify", "data-max-file-size" => "2M")));
        echo "
    </div>
</div>


  
  ";
        // line 15
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 16
            echo "      ";
            ob_start();
            // line 17
            echo "        ";
            if (array_key_exists("errors", $context)) {
                // line 18
                echo "            ";
                if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                    // line 19
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 20
                        echo "                <div class=\"alert alert-danger fade in\">
                    <a href=\"javascript:;\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                    <strong>Error!</strong> ";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                        echo ".
                </div>
                
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "        ";
            }
            // line 28
            echo "      ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 29
            echo "  ";
        }
        // line 30
        echo "  </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1f4959f7c1fb372005fcae8436853b49c031c6b8cffe38802e363d4ca58d7ee2->leave($__internal_1f4959f7c1fb372005fcae8436853b49c031c6b8cffe38802e363d4ca58d7ee2_prof);

        
        $__internal_078c3dd31cf0bba845c4297291ba06df64aace3b5bd944ac5bd6856389879114->leave($__internal_078c3dd31cf0bba845c4297291ba06df64aace3b5bd944ac5bd6856389879114_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Themes/file.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  87 => 22,  83 => 20,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  67 => 15,  58 => 9,  49 => 5,  46 => 4,  44 => 3,  26 => 2,);
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

<div class=\"card\">
    <div class=\"card-body\">
        {{ form_widget(form,{'attr':{'class':'dropify','data-max-file-size':'2M'}}) }}
    </div>
</div>


  
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
{% endblock form_row %}", "@AppBundle/Themes/file.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Themes/file.html.twig");
    }
}
