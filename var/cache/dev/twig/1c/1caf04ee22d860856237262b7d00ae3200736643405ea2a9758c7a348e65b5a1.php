<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_48a0d1521436814f49658ef8cc0264c498d585a2f3cbc7423f17ca69d1186ba4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e90516f9a948b5e2f208a30479a36bd44e50321a55f178078e1b7d2e07f5edae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90516f9a948b5e2f208a30479a36bd44e50321a55f178078e1b7d2e07f5edae->enter($__internal_e90516f9a948b5e2f208a30479a36bd44e50321a55f178078e1b7d2e07f5edae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c4c0bcd065292796c485e0df4733858a28d542c94ad8eba49ff412c2a30f450c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c0bcd065292796c485e0df4733858a28d542c94ad8eba49ff412c2a30f450c->enter($__internal_c4c0bcd065292796c485e0df4733858a28d542c94ad8eba49ff412c2a30f450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e90516f9a948b5e2f208a30479a36bd44e50321a55f178078e1b7d2e07f5edae->leave($__internal_e90516f9a948b5e2f208a30479a36bd44e50321a55f178078e1b7d2e07f5edae_prof);

        
        $__internal_c4c0bcd065292796c485e0df4733858a28d542c94ad8eba49ff412c2a30f450c->leave($__internal_c4c0bcd065292796c485e0df4733858a28d542c94ad8eba49ff412c2a30f450c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db31e074d43cd6ff4f71250bcd0a4673093c393e7669dfdec1bdd86472ac374c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db31e074d43cd6ff4f71250bcd0a4673093c393e7669dfdec1bdd86472ac374c->enter($__internal_db31e074d43cd6ff4f71250bcd0a4673093c393e7669dfdec1bdd86472ac374c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5d2d6048c11dd7cd2bff4c9f79044a373c15183499fc8bff2ade4a99fed2ab37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2d6048c11dd7cd2bff4c9f79044a373c15183499fc8bff2ade4a99fed2ab37->enter($__internal_5d2d6048c11dd7cd2bff4c9f79044a373c15183499fc8bff2ade4a99fed2ab37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d2d6048c11dd7cd2bff4c9f79044a373c15183499fc8bff2ade4a99fed2ab37->leave($__internal_5d2d6048c11dd7cd2bff4c9f79044a373c15183499fc8bff2ade4a99fed2ab37_prof);

        
        $__internal_db31e074d43cd6ff4f71250bcd0a4673093c393e7669dfdec1bdd86472ac374c->leave($__internal_db31e074d43cd6ff4f71250bcd0a4673093c393e7669dfdec1bdd86472ac374c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0098b42d1cb3782d62713ad681cd1ff9db6076dfe9bf9639bc4b1d7fd3e63a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0098b42d1cb3782d62713ad681cd1ff9db6076dfe9bf9639bc4b1d7fd3e63a9->enter($__internal_f0098b42d1cb3782d62713ad681cd1ff9db6076dfe9bf9639bc4b1d7fd3e63a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e2b3d6c59e8239d85f19df9c1ea948819de18b4d25cfb5a7196149fcc14aaf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2b3d6c59e8239d85f19df9c1ea948819de18b4d25cfb5a7196149fcc14aaf6->enter($__internal_7e2b3d6c59e8239d85f19df9c1ea948819de18b4d25cfb5a7196149fcc14aaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e2b3d6c59e8239d85f19df9c1ea948819de18b4d25cfb5a7196149fcc14aaf6->leave($__internal_7e2b3d6c59e8239d85f19df9c1ea948819de18b4d25cfb5a7196149fcc14aaf6_prof);

        
        $__internal_f0098b42d1cb3782d62713ad681cd1ff9db6076dfe9bf9639bc4b1d7fd3e63a9->leave($__internal_f0098b42d1cb3782d62713ad681cd1ff9db6076dfe9bf9639bc4b1d7fd3e63a9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7568552f46ef37ac5c6fef805d03a7246941b963eb98144eb03920afd23591d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7568552f46ef37ac5c6fef805d03a7246941b963eb98144eb03920afd23591d->enter($__internal_a7568552f46ef37ac5c6fef805d03a7246941b963eb98144eb03920afd23591d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2d2dd1d78a8fe7a8ab719e3beffc24097edb3d0fc03889828372119ceb93db98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2dd1d78a8fe7a8ab719e3beffc24097edb3d0fc03889828372119ceb93db98->enter($__internal_2d2dd1d78a8fe7a8ab719e3beffc24097edb3d0fc03889828372119ceb93db98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2d2dd1d78a8fe7a8ab719e3beffc24097edb3d0fc03889828372119ceb93db98->leave($__internal_2d2dd1d78a8fe7a8ab719e3beffc24097edb3d0fc03889828372119ceb93db98_prof);

        
        $__internal_a7568552f46ef37ac5c6fef805d03a7246941b963eb98144eb03920afd23591d->leave($__internal_a7568552f46ef37ac5c6fef805d03a7246941b963eb98144eb03920afd23591d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
