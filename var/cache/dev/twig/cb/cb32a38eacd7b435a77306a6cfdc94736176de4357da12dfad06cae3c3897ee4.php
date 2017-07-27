<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_ac44e367c1c27d28ee02c6fdd2829275f184acfd8b64176724379230a543f013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fc2c0f20a2ab23b9a3e0a218431cd2149b904d88286f52df80b519a2b7821ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc2c0f20a2ab23b9a3e0a218431cd2149b904d88286f52df80b519a2b7821ac->enter($__internal_2fc2c0f20a2ab23b9a3e0a218431cd2149b904d88286f52df80b519a2b7821ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_9ca62528030bcb5b83ffdad577112dda575b50e3ed4093ee786b065c57b1a5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca62528030bcb5b83ffdad577112dda575b50e3ed4093ee786b065c57b1a5b7->enter($__internal_9ca62528030bcb5b83ffdad577112dda575b50e3ed4093ee786b065c57b1a5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_2fc2c0f20a2ab23b9a3e0a218431cd2149b904d88286f52df80b519a2b7821ac->leave($__internal_2fc2c0f20a2ab23b9a3e0a218431cd2149b904d88286f52df80b519a2b7821ac_prof);

        
        $__internal_9ca62528030bcb5b83ffdad577112dda575b50e3ed4093ee786b065c57b1a5b7->leave($__internal_9ca62528030bcb5b83ffdad577112dda575b50e3ed4093ee786b065c57b1a5b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
