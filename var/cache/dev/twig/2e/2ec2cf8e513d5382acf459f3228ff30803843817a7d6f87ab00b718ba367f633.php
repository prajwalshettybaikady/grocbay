<?php

/* @AppBundle/Admin/Properties/footer.html.twig */
class __TwigTemplate_34823daac118c617d9be14cf59a2b151140a2920e5084b229349753901ce60c4 extends Twig_Template
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
        $__internal_6ca2f8a11a2ca77906e5c24416bce4d5e02d0cedfc931385ca80b4070542c608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca2f8a11a2ca77906e5c24416bce4d5e02d0cedfc931385ca80b4070542c608->enter($__internal_6ca2f8a11a2ca77906e5c24416bce4d5e02d0cedfc931385ca80b4070542c608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Admin/Properties/footer.html.twig"));

        $__internal_d18768935a1fd8618e5374dfaae72c2e0e9906cec74defe11e6276a38082ddb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18768935a1fd8618e5374dfaae72c2e0e9906cec74defe11e6276a38082ddb3->enter($__internal_d18768935a1fd8618e5374dfaae72c2e0e9906cec74defe11e6276a38082ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Admin/Properties/footer.html.twig"));

        // line 1
        echo " <!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<script type=\"text/javascript\">

\$(document).ready(function(){
web_getneworder();

});
function web_getneworder() {
  \$.get(\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_getneworder", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "branch", array()))), "html", null, true);
        echo "\", function(data, status){
\t// \$('.page-title').html(data);
  // console.log(data.delivery);
  // \$.each(data, function () {
  \$('.home').html(data.delivery);
  \$('.pickup').html(data.pickup);
  \$('.express').html(data.express);
   \$('.page-title').html(data.branch);
   \$('.onway').html(data.onway);
   \$('.neworder').html(data.new);

// });

});
}
window.setInterval(function(){
web_getneworder();
// notifyMe();
  }, 5000);

  

</script>

<footer class=\"footer noprint\">
  <!--   Designed and developed by <a href=\"https://www.appinsight.tech/\" target=\"blank_\" style=\"color:#f79501;\"> Appinsight Technologies </a> -->
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->";
        
        $__internal_6ca2f8a11a2ca77906e5c24416bce4d5e02d0cedfc931385ca80b4070542c608->leave($__internal_6ca2f8a11a2ca77906e5c24416bce4d5e02d0cedfc931385ca80b4070542c608_prof);

        
        $__internal_d18768935a1fd8618e5374dfaae72c2e0e9906cec74defe11e6276a38082ddb3->leave($__internal_d18768935a1fd8618e5374dfaae72c2e0e9906cec74defe11e6276a38082ddb3_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Admin/Properties/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<script type=\"text/javascript\">

\$(document).ready(function(){
web_getneworder();

});
function web_getneworder() {
  \$.get(\"{{ path('web_getneworder',{'id':app.user.branch }) }}\", function(data, status){
\t// \$('.page-title').html(data);
  // console.log(data.delivery);
  // \$.each(data, function () {
  \$('.home').html(data.delivery);
  \$('.pickup').html(data.pickup);
  \$('.express').html(data.express);
   \$('.page-title').html(data.branch);
   \$('.onway').html(data.onway);
   \$('.neworder').html(data.new);

// });

});
}
window.setInterval(function(){
web_getneworder();
// notifyMe();
  }, 5000);

  

</script>

<footer class=\"footer noprint\">
  <!--   Designed and developed by <a href=\"https://www.appinsight.tech/\" target=\"blank_\" style=\"color:#f79501;\"> Appinsight Technologies </a> -->
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->", "@AppBundle/Admin/Properties/footer.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Properties/footer.html.twig");
    }
}
