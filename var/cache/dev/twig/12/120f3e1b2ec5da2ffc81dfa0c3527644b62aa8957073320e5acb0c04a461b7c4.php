<?php

/* AppBundle:Admin:Customers/listUser.html.twig */
class __TwigTemplate_8b37b96e8f6aadb32bd19e10454ebff58a48ecbc40679afa62ce60c38c23f94d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBundle/Admin/base.html.twig", "AppBundle:Admin:Customers/listUser.html.twig", 1);
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
        $__internal_fc0873714482d360fafd1e3dd8d007077cc843ec06b9711bfbcb3e37d9c0dce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0873714482d360fafd1e3dd8d007077cc843ec06b9711bfbcb3e37d9c0dce5->enter($__internal_fc0873714482d360fafd1e3dd8d007077cc843ec06b9711bfbcb3e37d9c0dce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Customers/listUser.html.twig"));

        $__internal_66b94bc0d538e6078b189a3b6aa87b3a558fe2ae4e814727a2f20d8e60f66d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b94bc0d538e6078b189a3b6aa87b3a558fe2ae4e814727a2f20d8e60f66d35->enter($__internal_66b94bc0d538e6078b189a3b6aa87b3a558fe2ae4e814727a2f20d8e60f66d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:Customers/listUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc0873714482d360fafd1e3dd8d007077cc843ec06b9711bfbcb3e37d9c0dce5->leave($__internal_fc0873714482d360fafd1e3dd8d007077cc843ec06b9711bfbcb3e37d9c0dce5_prof);

        
        $__internal_66b94bc0d538e6078b189a3b6aa87b3a558fe2ae4e814727a2f20d8e60f66d35->leave($__internal_66b94bc0d538e6078b189a3b6aa87b3a558fe2ae4e814727a2f20d8e60f66d35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db19d11abfad184d9ce4e4a871e4579cf083788267ec70402f4be39123bffb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db19d11abfad184d9ce4e4a871e4579cf083788267ec70402f4be39123bffb51->enter($__internal_db19d11abfad184d9ce4e4a871e4579cf083788267ec70402f4be39123bffb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32151ad2c957f40af8da92b8ad80e01d6cc104bb885e9ad0018f9812aad0b29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32151ad2c957f40af8da92b8ad80e01d6cc104bb885e9ad0018f9812aad0b29b->enter($__internal_32151ad2c957f40af8da92b8ad80e01d6cc104bb885e9ad0018f9812aad0b29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "            <div class=\"layout-px-spacing\">

                
                <div class=\"row layout-top-spacing\" id=\"cancel-row\">
                
                    <div class=\"col-xl-12 col-lg-12 col-sm-12  layout-spacing\">
                        <div class=\"widget-content widget-content-area br-6\">
                            <div class=\"table-responsive mb-4 mt-4\">
                              <a href=\"\" class=\"badge badge-success\" style=\"float:right\">Export To CSV</a>
                                <table id=\"myTable\" class=\"table\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>Email Id</th>
                                    <th>Mobile Number</th>
                                   <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                           
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
";
        
        $__internal_32151ad2c957f40af8da92b8ad80e01d6cc104bb885e9ad0018f9812aad0b29b->leave($__internal_32151ad2c957f40af8da92b8ad80e01d6cc104bb885e9ad0018f9812aad0b29b_prof);

        
        $__internal_db19d11abfad184d9ce4e4a871e4579cf083788267ec70402f4be39123bffb51->leave($__internal_db19d11abfad184d9ce4e4a871e4579cf083788267ec70402f4be39123bffb51_prof);

    }

    // line 34
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ae7c44111c6078a526f6efe7a7cb1db3fcc3e4b5ab65699c530d4fc4c4f47965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7c44111c6078a526f6efe7a7cb1db3fcc3e4b5ab65699c530d4fc4c4f47965->enter($__internal_ae7c44111c6078a526f6efe7a7cb1db3fcc3e4b5ab65699c530d4fc4c4f47965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_613f98fd69a546345e27f1004c3ac824f450dba7b777c368951a50281a80ef3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613f98fd69a546345e27f1004c3ac824f450dba7b777c368951a50281a80ef3d->enter($__internal_613f98fd69a546345e27f1004c3ac824f450dba7b777c368951a50281a80ef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 35
        echo "
<script>
    \$(document).ready(function() {
      \$('#myTable').DataTable({   
         
      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',
      \"aaSorting\": [[0, 'desc']],
      'ajax': {
          'url':\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_page");
        echo "\",
          'type': \"post\",
      },
      'columns': [
         { data: 'id'},
         { data: 'username' },
         { data: 'email' },
         { data: 'mobileNo' },
         { data: 'isActive' },
         { data: 'actionid' },
      ],
   });
    });
</script>
";
        
        $__internal_613f98fd69a546345e27f1004c3ac824f450dba7b777c368951a50281a80ef3d->leave($__internal_613f98fd69a546345e27f1004c3ac824f450dba7b777c368951a50281a80ef3d_prof);

        
        $__internal_ae7c44111c6078a526f6efe7a7cb1db3fcc3e4b5ab65699c530d4fc4c4f47965->leave($__internal_ae7c44111c6078a526f6efe7a7cb1db3fcc3e4b5ab65699c530d4fc4c4f47965_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Customers/listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 45,  97 => 35,  88 => 34,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@AppBundle/Admin/base.html.twig' %}

{% block body %}
            <div class=\"layout-px-spacing\">

                
                <div class=\"row layout-top-spacing\" id=\"cancel-row\">
                
                    <div class=\"col-xl-12 col-lg-12 col-sm-12  layout-spacing\">
                        <div class=\"widget-content widget-content-area br-6\">
                            <div class=\"table-responsive mb-4 mt-4\">
                              <a href=\"\" class=\"badge badge-success\" style=\"float:right\">Export To CSV</a>
                                <table id=\"myTable\" class=\"table\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>Email Id</th>
                                    <th>Mobile Number</th>
                                   <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                           
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
{% endblock %}

{% block scripts %}

<script>
    \$(document).ready(function() {
      \$('#myTable').DataTable({   
         
      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',
      \"aaSorting\": [[0, 'desc']],
      'ajax': {
          'url':\"{{ path('customer_page')}}\",
          'type': \"post\",
      },
      'columns': [
         { data: 'id'},
         { data: 'username' },
         { data: 'email' },
         { data: 'mobileNo' },
         { data: 'isActive' },
         { data: 'actionid' },
      ],
   });
    });
</script>
{% endblock %}", "AppBundle:Admin:Customers/listUser.html.twig", "/var/www/html/grocbay/src/AppBundle/Resources/views/Admin/Customers/listUser.html.twig");
    }
}
