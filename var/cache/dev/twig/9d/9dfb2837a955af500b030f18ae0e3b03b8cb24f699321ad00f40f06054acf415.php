<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5537808a782e051e46fabd9b9462253195f2f5d21dc493daf72ce8d5959a6367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_574acc309d40bbf5db826774944990a5e3163af0bf9ec5d62a8116deca1292f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574acc309d40bbf5db826774944990a5e3163af0bf9ec5d62a8116deca1292f3->enter($__internal_574acc309d40bbf5db826774944990a5e3163af0bf9ec5d62a8116deca1292f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ba95962a81f6626817a4c322494e98aa79ce1f766ec72681fea53cef02f26a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba95962a81f6626817a4c322494e98aa79ce1f766ec72681fea53cef02f26a5d->enter($__internal_ba95962a81f6626817a4c322494e98aa79ce1f766ec72681fea53cef02f26a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574acc309d40bbf5db826774944990a5e3163af0bf9ec5d62a8116deca1292f3->leave($__internal_574acc309d40bbf5db826774944990a5e3163af0bf9ec5d62a8116deca1292f3_prof);

        
        $__internal_ba95962a81f6626817a4c322494e98aa79ce1f766ec72681fea53cef02f26a5d->leave($__internal_ba95962a81f6626817a4c322494e98aa79ce1f766ec72681fea53cef02f26a5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04c84d7d67081f6e4b6a5d2ff0020d7cf945f52abc30407686f30882d9657a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c84d7d67081f6e4b6a5d2ff0020d7cf945f52abc30407686f30882d9657a81->enter($__internal_04c84d7d67081f6e4b6a5d2ff0020d7cf945f52abc30407686f30882d9657a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66e06819fe5f90f06d1adcfffc9204dcbbd30849971d3333bd1656d86f11875b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e06819fe5f90f06d1adcfffc9204dcbbd30849971d3333bd1656d86f11875b->enter($__internal_66e06819fe5f90f06d1adcfffc9204dcbbd30849971d3333bd1656d86f11875b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_66e06819fe5f90f06d1adcfffc9204dcbbd30849971d3333bd1656d86f11875b->leave($__internal_66e06819fe5f90f06d1adcfffc9204dcbbd30849971d3333bd1656d86f11875b_prof);

        
        $__internal_04c84d7d67081f6e4b6a5d2ff0020d7cf945f52abc30407686f30882d9657a81->leave($__internal_04c84d7d67081f6e4b6a5d2ff0020d7cf945f52abc30407686f30882d9657a81_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_91ee8215aaea367ca1918328c9580697e348d276aaa96f35a9dd085356f4a919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ee8215aaea367ca1918328c9580697e348d276aaa96f35a9dd085356f4a919->enter($__internal_91ee8215aaea367ca1918328c9580697e348d276aaa96f35a9dd085356f4a919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca1b491280cbadee25fdb28bc93ed8fc2adb06b96c887d2aef397ecdfd97ed70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1b491280cbadee25fdb28bc93ed8fc2adb06b96c887d2aef397ecdfd97ed70->enter($__internal_ca1b491280cbadee25fdb28bc93ed8fc2adb06b96c887d2aef397ecdfd97ed70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ca1b491280cbadee25fdb28bc93ed8fc2adb06b96c887d2aef397ecdfd97ed70->leave($__internal_ca1b491280cbadee25fdb28bc93ed8fc2adb06b96c887d2aef397ecdfd97ed70_prof);

        
        $__internal_91ee8215aaea367ca1918328c9580697e348d276aaa96f35a9dd085356f4a919->leave($__internal_91ee8215aaea367ca1918328c9580697e348d276aaa96f35a9dd085356f4a919_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
