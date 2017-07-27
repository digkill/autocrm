<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c345c617a369d5fc79f895d199381ab865598b4c6ca249917bcfe3d6127f47b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f5b4b6436ba3f1d833ff45c7012b629f247c4adb5b440e4e2dd44359af25266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5b4b6436ba3f1d833ff45c7012b629f247c4adb5b440e4e2dd44359af25266->enter($__internal_3f5b4b6436ba3f1d833ff45c7012b629f247c4adb5b440e4e2dd44359af25266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_d10ff5307d263e0ceb4c8d819b282172d4e55f4762a3c0e3e3ab482c235ee4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10ff5307d263e0ceb4c8d819b282172d4e55f4762a3c0e3e3ab482c235ee4a6->enter($__internal_d10ff5307d263e0ceb4c8d819b282172d4e55f4762a3c0e3e3ab482c235ee4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f5b4b6436ba3f1d833ff45c7012b629f247c4adb5b440e4e2dd44359af25266->leave($__internal_3f5b4b6436ba3f1d833ff45c7012b629f247c4adb5b440e4e2dd44359af25266_prof);

        
        $__internal_d10ff5307d263e0ceb4c8d819b282172d4e55f4762a3c0e3e3ab482c235ee4a6->leave($__internal_d10ff5307d263e0ceb4c8d819b282172d4e55f4762a3c0e3e3ab482c235ee4a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcfcf97fe10416aab5adad2d53e532a7411bf10dc17529b647358d2f52d7d558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcfcf97fe10416aab5adad2d53e532a7411bf10dc17529b647358d2f52d7d558->enter($__internal_bcfcf97fe10416aab5adad2d53e532a7411bf10dc17529b647358d2f52d7d558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d890d3cfd0878cf5d3d8d1702b529d1d51c55876190882f5c57a91c882152ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d890d3cfd0878cf5d3d8d1702b529d1d51c55876190882f5c57a91c882152ca1->enter($__internal_d890d3cfd0878cf5d3d8d1702b529d1d51c55876190882f5c57a91c882152ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_d890d3cfd0878cf5d3d8d1702b529d1d51c55876190882f5c57a91c882152ca1->leave($__internal_d890d3cfd0878cf5d3d8d1702b529d1d51c55876190882f5c57a91c882152ca1_prof);

        
        $__internal_bcfcf97fe10416aab5adad2d53e532a7411bf10dc17529b647358d2f52d7d558->leave($__internal_bcfcf97fe10416aab5adad2d53e532a7411bf10dc17529b647358d2f52d7d558_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
