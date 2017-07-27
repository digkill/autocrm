<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ed24ce2403398930bb7ede729ce6f5f51bb38b95ee84c1b0e0f5b2f1dbd7c010 extends Twig_Template
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
        $__internal_a46ca6d7ece4ee21d63fe66ec6877a661f4ab25fbc56a3b3515427a726433e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46ca6d7ece4ee21d63fe66ec6877a661f4ab25fbc56a3b3515427a726433e0f->enter($__internal_a46ca6d7ece4ee21d63fe66ec6877a661f4ab25fbc56a3b3515427a726433e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ab835e761ecf499a49822c0442e673bff33a37a2bb5bdc45ee86f0e88d890caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab835e761ecf499a49822c0442e673bff33a37a2bb5bdc45ee86f0e88d890caa->enter($__internal_ab835e761ecf499a49822c0442e673bff33a37a2bb5bdc45ee86f0e88d890caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a46ca6d7ece4ee21d63fe66ec6877a661f4ab25fbc56a3b3515427a726433e0f->leave($__internal_a46ca6d7ece4ee21d63fe66ec6877a661f4ab25fbc56a3b3515427a726433e0f_prof);

        
        $__internal_ab835e761ecf499a49822c0442e673bff33a37a2bb5bdc45ee86f0e88d890caa->leave($__internal_ab835e761ecf499a49822c0442e673bff33a37a2bb5bdc45ee86f0e88d890caa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
