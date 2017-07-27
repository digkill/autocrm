<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_846cb791798c34cc5f9c2b012b270a7810ba52ed163a76b3587b10589073a119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_6cd516abd3a9a1c49b3d2d05e24d130831a329b6229c4379f862ceee4ddbab9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd516abd3a9a1c49b3d2d05e24d130831a329b6229c4379f862ceee4ddbab9b->enter($__internal_6cd516abd3a9a1c49b3d2d05e24d130831a329b6229c4379f862ceee4ddbab9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_7e1b195d90799eb7668b6ac53e0b7fac52a890dc6a1bcf14e16e4d46c37468d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1b195d90799eb7668b6ac53e0b7fac52a890dc6a1bcf14e16e4d46c37468d5->enter($__internal_7e1b195d90799eb7668b6ac53e0b7fac52a890dc6a1bcf14e16e4d46c37468d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cd516abd3a9a1c49b3d2d05e24d130831a329b6229c4379f862ceee4ddbab9b->leave($__internal_6cd516abd3a9a1c49b3d2d05e24d130831a329b6229c4379f862ceee4ddbab9b_prof);

        
        $__internal_7e1b195d90799eb7668b6ac53e0b7fac52a890dc6a1bcf14e16e4d46c37468d5->leave($__internal_7e1b195d90799eb7668b6ac53e0b7fac52a890dc6a1bcf14e16e4d46c37468d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7afde2302ed00215f0f184a6a196d3d53c882def9671f116395ebc8116cac81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7afde2302ed00215f0f184a6a196d3d53c882def9671f116395ebc8116cac81b->enter($__internal_7afde2302ed00215f0f184a6a196d3d53c882def9671f116395ebc8116cac81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ddff13d40d6f57604eb957153e8b3ffe40ce6839037db0669bd689dae9fcfe19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddff13d40d6f57604eb957153e8b3ffe40ce6839037db0669bd689dae9fcfe19->enter($__internal_ddff13d40d6f57604eb957153e8b3ffe40ce6839037db0669bd689dae9fcfe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ddff13d40d6f57604eb957153e8b3ffe40ce6839037db0669bd689dae9fcfe19->leave($__internal_ddff13d40d6f57604eb957153e8b3ffe40ce6839037db0669bd689dae9fcfe19_prof);

        
        $__internal_7afde2302ed00215f0f184a6a196d3d53c882def9671f116395ebc8116cac81b->leave($__internal_7afde2302ed00215f0f184a6a196d3d53c882def9671f116395ebc8116cac81b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
