<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4a6a194e8676d74acd2a056573743bdc5f858cf2d257ee3acfa814f22866fc8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_96dbec2bfc3b9225437a7b1e29eb60b89f9dc12ba9cb9ca35dc4a13dcc7e051e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96dbec2bfc3b9225437a7b1e29eb60b89f9dc12ba9cb9ca35dc4a13dcc7e051e->enter($__internal_96dbec2bfc3b9225437a7b1e29eb60b89f9dc12ba9cb9ca35dc4a13dcc7e051e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_3c85d7e4a5e8d854f5fc33a31168b209c1343559b79176e88d2501ffad107d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c85d7e4a5e8d854f5fc33a31168b209c1343559b79176e88d2501ffad107d63->enter($__internal_3c85d7e4a5e8d854f5fc33a31168b209c1343559b79176e88d2501ffad107d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96dbec2bfc3b9225437a7b1e29eb60b89f9dc12ba9cb9ca35dc4a13dcc7e051e->leave($__internal_96dbec2bfc3b9225437a7b1e29eb60b89f9dc12ba9cb9ca35dc4a13dcc7e051e_prof);

        
        $__internal_3c85d7e4a5e8d854f5fc33a31168b209c1343559b79176e88d2501ffad107d63->leave($__internal_3c85d7e4a5e8d854f5fc33a31168b209c1343559b79176e88d2501ffad107d63_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3219d11ed1ba928cc79b56c78dde14ec93b00bb812cfec05b56299b8efa75a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3219d11ed1ba928cc79b56c78dde14ec93b00bb812cfec05b56299b8efa75a50->enter($__internal_3219d11ed1ba928cc79b56c78dde14ec93b00bb812cfec05b56299b8efa75a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d8c207aac1852560c64999ad4dbfc22485207c0ec15936aced5d3d910486fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8c207aac1852560c64999ad4dbfc22485207c0ec15936aced5d3d910486fef->enter($__internal_5d8c207aac1852560c64999ad4dbfc22485207c0ec15936aced5d3d910486fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_5d8c207aac1852560c64999ad4dbfc22485207c0ec15936aced5d3d910486fef->leave($__internal_5d8c207aac1852560c64999ad4dbfc22485207c0ec15936aced5d3d910486fef_prof);

        
        $__internal_3219d11ed1ba928cc79b56c78dde14ec93b00bb812cfec05b56299b8efa75a50->leave($__internal_3219d11ed1ba928cc79b56c78dde14ec93b00bb812cfec05b56299b8efa75a50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
