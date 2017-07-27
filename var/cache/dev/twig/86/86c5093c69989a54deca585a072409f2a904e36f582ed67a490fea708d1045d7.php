<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_87799b294bd1484f3a05a766da4fc015a975ffc50ca8681dadad624083b35711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe3cf265adeefc52b40486714e0a0f83b22767cc117c21499f392b6cf7e51ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3cf265adeefc52b40486714e0a0f83b22767cc117c21499f392b6cf7e51ce1->enter($__internal_fe3cf265adeefc52b40486714e0a0f83b22767cc117c21499f392b6cf7e51ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_be2a92868ef87a807f0ec52a3302d00b0636d9c40eb4d97a038c66a2131712c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2a92868ef87a807f0ec52a3302d00b0636d9c40eb4d97a038c66a2131712c1->enter($__internal_be2a92868ef87a807f0ec52a3302d00b0636d9c40eb4d97a038c66a2131712c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe3cf265adeefc52b40486714e0a0f83b22767cc117c21499f392b6cf7e51ce1->leave($__internal_fe3cf265adeefc52b40486714e0a0f83b22767cc117c21499f392b6cf7e51ce1_prof);

        
        $__internal_be2a92868ef87a807f0ec52a3302d00b0636d9c40eb4d97a038c66a2131712c1->leave($__internal_be2a92868ef87a807f0ec52a3302d00b0636d9c40eb4d97a038c66a2131712c1_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e49c1c65133edd32f1e0331a9a8b485eee3cd1e3804cb5c223a4a45c4c65ec07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49c1c65133edd32f1e0331a9a8b485eee3cd1e3804cb5c223a4a45c4c65ec07->enter($__internal_e49c1c65133edd32f1e0331a9a8b485eee3cd1e3804cb5c223a4a45c4c65ec07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2c237d732c7eb62737702c6300651abbde7e20ddf041d7ecc2675388d3b9e4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c237d732c7eb62737702c6300651abbde7e20ddf041d7ecc2675388d3b9e4ca->enter($__internal_2c237d732c7eb62737702c6300651abbde7e20ddf041d7ecc2675388d3b9e4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_2c237d732c7eb62737702c6300651abbde7e20ddf041d7ecc2675388d3b9e4ca->leave($__internal_2c237d732c7eb62737702c6300651abbde7e20ddf041d7ecc2675388d3b9e4ca_prof);

        
        $__internal_e49c1c65133edd32f1e0331a9a8b485eee3cd1e3804cb5c223a4a45c4c65ec07->leave($__internal_e49c1c65133edd32f1e0331a9a8b485eee3cd1e3804cb5c223a4a45c4c65ec07_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d3b15f5059e765c85e9f88b4a280a2bb10b2fa14707a5a051c65b09f87df804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3b15f5059e765c85e9f88b4a280a2bb10b2fa14707a5a051c65b09f87df804->enter($__internal_4d3b15f5059e765c85e9f88b4a280a2bb10b2fa14707a5a051c65b09f87df804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ad9ecc8d4d5dc85f73ce3e6d46dbd9c291163e34682f03116f8e7c880b732a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad9ecc8d4d5dc85f73ce3e6d46dbd9c291163e34682f03116f8e7c880b732a1->enter($__internal_8ad9ecc8d4d5dc85f73ce3e6d46dbd9c291163e34682f03116f8e7c880b732a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8ad9ecc8d4d5dc85f73ce3e6d46dbd9c291163e34682f03116f8e7c880b732a1->leave($__internal_8ad9ecc8d4d5dc85f73ce3e6d46dbd9c291163e34682f03116f8e7c880b732a1_prof);

        
        $__internal_4d3b15f5059e765c85e9f88b4a280a2bb10b2fa14707a5a051c65b09f87df804->leave($__internal_4d3b15f5059e765c85e9f88b4a280a2bb10b2fa14707a5a051c65b09f87df804_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
