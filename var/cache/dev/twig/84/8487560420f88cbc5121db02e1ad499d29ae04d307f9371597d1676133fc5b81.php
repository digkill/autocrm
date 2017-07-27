<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bbd13dcbe22fb67b089c738b0f0f34a55e6ef9b8bd07b870f2710bf43cb1770a extends Twig_Template
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
        $__internal_ba2761c32353d72b693cc7dafd769b42ecfe85fc619b84c824c96b919274e5f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2761c32353d72b693cc7dafd769b42ecfe85fc619b84c824c96b919274e5f6->enter($__internal_ba2761c32353d72b693cc7dafd769b42ecfe85fc619b84c824c96b919274e5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_fd702b14e2b7a15f0e2f51e165a03bdae2e5228085e2bd684a36fc41775f0a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd702b14e2b7a15f0e2f51e165a03bdae2e5228085e2bd684a36fc41775f0a3d->enter($__internal_fd702b14e2b7a15f0e2f51e165a03bdae2e5228085e2bd684a36fc41775f0a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ba2761c32353d72b693cc7dafd769b42ecfe85fc619b84c824c96b919274e5f6->leave($__internal_ba2761c32353d72b693cc7dafd769b42ecfe85fc619b84c824c96b919274e5f6_prof);

        
        $__internal_fd702b14e2b7a15f0e2f51e165a03bdae2e5228085e2bd684a36fc41775f0a3d->leave($__internal_fd702b14e2b7a15f0e2f51e165a03bdae2e5228085e2bd684a36fc41775f0a3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
