<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_34e4cb731e37b0231d5ec0fe056307eec49f96ee8c6a59f78bd092483efef9d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5791da72767b8c1940b20bc23dbed776df9b6a8ffc2bd700e405c6c63ca0260d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5791da72767b8c1940b20bc23dbed776df9b6a8ffc2bd700e405c6c63ca0260d->enter($__internal_5791da72767b8c1940b20bc23dbed776df9b6a8ffc2bd700e405c6c63ca0260d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d888ab9192b84d5e4cf1cec3f8854ac771eab363bfde8c80e4c651cb9ef1f387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d888ab9192b84d5e4cf1cec3f8854ac771eab363bfde8c80e4c651cb9ef1f387->enter($__internal_d888ab9192b84d5e4cf1cec3f8854ac771eab363bfde8c80e4c651cb9ef1f387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5791da72767b8c1940b20bc23dbed776df9b6a8ffc2bd700e405c6c63ca0260d->leave($__internal_5791da72767b8c1940b20bc23dbed776df9b6a8ffc2bd700e405c6c63ca0260d_prof);

        
        $__internal_d888ab9192b84d5e4cf1cec3f8854ac771eab363bfde8c80e4c651cb9ef1f387->leave($__internal_d888ab9192b84d5e4cf1cec3f8854ac771eab363bfde8c80e4c651cb9ef1f387_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_478b57a044edc13ff4678598d6418c1b89d2e249b96717a7a86c3c96e6890bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478b57a044edc13ff4678598d6418c1b89d2e249b96717a7a86c3c96e6890bcc->enter($__internal_478b57a044edc13ff4678598d6418c1b89d2e249b96717a7a86c3c96e6890bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fbbb0f723fa29b2c6afec7225d7c020f4ba3e69eed5f33b7ee1d6316ff60eaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbb0f723fa29b2c6afec7225d7c020f4ba3e69eed5f33b7ee1d6316ff60eaa8->enter($__internal_fbbb0f723fa29b2c6afec7225d7c020f4ba3e69eed5f33b7ee1d6316ff60eaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fbbb0f723fa29b2c6afec7225d7c020f4ba3e69eed5f33b7ee1d6316ff60eaa8->leave($__internal_fbbb0f723fa29b2c6afec7225d7c020f4ba3e69eed5f33b7ee1d6316ff60eaa8_prof);

        
        $__internal_478b57a044edc13ff4678598d6418c1b89d2e249b96717a7a86c3c96e6890bcc->leave($__internal_478b57a044edc13ff4678598d6418c1b89d2e249b96717a7a86c3c96e6890bcc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02e954bcb298fdbeed509a3ba980edbd3be89ce42f1494caf02c489837391a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e954bcb298fdbeed509a3ba980edbd3be89ce42f1494caf02c489837391a9d->enter($__internal_02e954bcb298fdbeed509a3ba980edbd3be89ce42f1494caf02c489837391a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_202d51a01414c64291a203c3a4e47ac3cc3e20d1d1f4369efe66a852c351dfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202d51a01414c64291a203c3a4e47ac3cc3e20d1d1f4369efe66a852c351dfb9->enter($__internal_202d51a01414c64291a203c3a4e47ac3cc3e20d1d1f4369efe66a852c351dfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_202d51a01414c64291a203c3a4e47ac3cc3e20d1d1f4369efe66a852c351dfb9->leave($__internal_202d51a01414c64291a203c3a4e47ac3cc3e20d1d1f4369efe66a852c351dfb9_prof);

        
        $__internal_02e954bcb298fdbeed509a3ba980edbd3be89ce42f1494caf02c489837391a9d->leave($__internal_02e954bcb298fdbeed509a3ba980edbd3be89ce42f1494caf02c489837391a9d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7780a6f31a7b0a9f90fe5b27f5c1d914f9f98ed5518604160800f78d97c97470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7780a6f31a7b0a9f90fe5b27f5c1d914f9f98ed5518604160800f78d97c97470->enter($__internal_7780a6f31a7b0a9f90fe5b27f5c1d914f9f98ed5518604160800f78d97c97470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0aef0ec239b4162af1ad847228d2b6e968cfd195321fe8196cdca6b0f8e69fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aef0ec239b4162af1ad847228d2b6e968cfd195321fe8196cdca6b0f8e69fc6->enter($__internal_0aef0ec239b4162af1ad847228d2b6e968cfd195321fe8196cdca6b0f8e69fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0aef0ec239b4162af1ad847228d2b6e968cfd195321fe8196cdca6b0f8e69fc6->leave($__internal_0aef0ec239b4162af1ad847228d2b6e968cfd195321fe8196cdca6b0f8e69fc6_prof);

        
        $__internal_7780a6f31a7b0a9f90fe5b27f5c1d914f9f98ed5518604160800f78d97c97470->leave($__internal_7780a6f31a7b0a9f90fe5b27f5c1d914f9f98ed5518604160800f78d97c97470_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
