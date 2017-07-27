<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d2fe6f8bcef4d58e9c59b0ff4a905255513e4a1df0f6e4a8cb640ab91aedbd7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c8ca57fd795f9e96d446c47b04b3ffa476e40338c439bc9ea77ab2a3ef20b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8ca57fd795f9e96d446c47b04b3ffa476e40338c439bc9ea77ab2a3ef20b3b->enter($__internal_8c8ca57fd795f9e96d446c47b04b3ffa476e40338c439bc9ea77ab2a3ef20b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_26ad6f88374fa1c5a755900c33a1930554e00ed02968f41a8c235b08e16d367d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ad6f88374fa1c5a755900c33a1930554e00ed02968f41a8c235b08e16d367d->enter($__internal_26ad6f88374fa1c5a755900c33a1930554e00ed02968f41a8c235b08e16d367d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c8ca57fd795f9e96d446c47b04b3ffa476e40338c439bc9ea77ab2a3ef20b3b->leave($__internal_8c8ca57fd795f9e96d446c47b04b3ffa476e40338c439bc9ea77ab2a3ef20b3b_prof);

        
        $__internal_26ad6f88374fa1c5a755900c33a1930554e00ed02968f41a8c235b08e16d367d->leave($__internal_26ad6f88374fa1c5a755900c33a1930554e00ed02968f41a8c235b08e16d367d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a85190c232f1f3fca0561b2340cf39ef227dc4485c1afa504e795baa90ff04ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85190c232f1f3fca0561b2340cf39ef227dc4485c1afa504e795baa90ff04ea->enter($__internal_a85190c232f1f3fca0561b2340cf39ef227dc4485c1afa504e795baa90ff04ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a2497baedcb4fa229c0ab10cc655f53878ffb6514a9dbfbf216acbc065f3742d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2497baedcb4fa229c0ab10cc655f53878ffb6514a9dbfbf216acbc065f3742d->enter($__internal_a2497baedcb4fa229c0ab10cc655f53878ffb6514a9dbfbf216acbc065f3742d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a2497baedcb4fa229c0ab10cc655f53878ffb6514a9dbfbf216acbc065f3742d->leave($__internal_a2497baedcb4fa229c0ab10cc655f53878ffb6514a9dbfbf216acbc065f3742d_prof);

        
        $__internal_a85190c232f1f3fca0561b2340cf39ef227dc4485c1afa504e795baa90ff04ea->leave($__internal_a85190c232f1f3fca0561b2340cf39ef227dc4485c1afa504e795baa90ff04ea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_71ce8dea9722f8c138a1f9bc632c6dba6cca1a35276e3c9e79cd0fe029922479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ce8dea9722f8c138a1f9bc632c6dba6cca1a35276e3c9e79cd0fe029922479->enter($__internal_71ce8dea9722f8c138a1f9bc632c6dba6cca1a35276e3c9e79cd0fe029922479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e46932490b9a22b0885c9237086706796947a944086b2bd5b0170d45e222363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e46932490b9a22b0885c9237086706796947a944086b2bd5b0170d45e222363->enter($__internal_6e46932490b9a22b0885c9237086706796947a944086b2bd5b0170d45e222363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6e46932490b9a22b0885c9237086706796947a944086b2bd5b0170d45e222363->leave($__internal_6e46932490b9a22b0885c9237086706796947a944086b2bd5b0170d45e222363_prof);

        
        $__internal_71ce8dea9722f8c138a1f9bc632c6dba6cca1a35276e3c9e79cd0fe029922479->leave($__internal_71ce8dea9722f8c138a1f9bc632c6dba6cca1a35276e3c9e79cd0fe029922479_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
