<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_4c00107f39291fdb3fa31108ccabf9e6b3165d3a5f8aef7987952147e26bcf6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eabbdecba2f3befbe092e6f444bbcd851784fce3d3d14ad76682586745af93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eabbdecba2f3befbe092e6f444bbcd851784fce3d3d14ad76682586745af93c->enter($__internal_3eabbdecba2f3befbe092e6f444bbcd851784fce3d3d14ad76682586745af93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_bca38a1cd703102a1a811ca4e2e37ecc20fc66b333d998f71e0bcd4ddfb32117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca38a1cd703102a1a811ca4e2e37ecc20fc66b333d998f71e0bcd4ddfb32117->enter($__internal_bca38a1cd703102a1a811ca4e2e37ecc20fc66b333d998f71e0bcd4ddfb32117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eabbdecba2f3befbe092e6f444bbcd851784fce3d3d14ad76682586745af93c->leave($__internal_3eabbdecba2f3befbe092e6f444bbcd851784fce3d3d14ad76682586745af93c_prof);

        
        $__internal_bca38a1cd703102a1a811ca4e2e37ecc20fc66b333d998f71e0bcd4ddfb32117->leave($__internal_bca38a1cd703102a1a811ca4e2e37ecc20fc66b333d998f71e0bcd4ddfb32117_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba9ca965efaebcbb303b1decfa2a57218052a162b730a53c3a70cfc794f605c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9ca965efaebcbb303b1decfa2a57218052a162b730a53c3a70cfc794f605c4->enter($__internal_ba9ca965efaebcbb303b1decfa2a57218052a162b730a53c3a70cfc794f605c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e84e6cfca42c2aafbe4baa5d215bd70f46eec3c9c9e311acf844b03620da7f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84e6cfca42c2aafbe4baa5d215bd70f46eec3c9c9e311acf844b03620da7f43->enter($__internal_e84e6cfca42c2aafbe4baa5d215bd70f46eec3c9c9e311acf844b03620da7f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e84e6cfca42c2aafbe4baa5d215bd70f46eec3c9c9e311acf844b03620da7f43->leave($__internal_e84e6cfca42c2aafbe4baa5d215bd70f46eec3c9c9e311acf844b03620da7f43_prof);

        
        $__internal_ba9ca965efaebcbb303b1decfa2a57218052a162b730a53c3a70cfc794f605c4->leave($__internal_ba9ca965efaebcbb303b1decfa2a57218052a162b730a53c3a70cfc794f605c4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
