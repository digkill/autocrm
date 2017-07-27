<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ecfb92a83dbb504f430722abb3e8d1c3e5fda73ab629f1f2362c29bb7a59fe7e extends Twig_Template
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
        $__internal_abc49daf07d51c1e18c54286717d7a19ef495ce909611f470404a73dc8dd2c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc49daf07d51c1e18c54286717d7a19ef495ce909611f470404a73dc8dd2c18->enter($__internal_abc49daf07d51c1e18c54286717d7a19ef495ce909611f470404a73dc8dd2c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_0802dbe6bc450e99309373d871c9814a154ac5910eb1219350989afe036c108d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0802dbe6bc450e99309373d871c9814a154ac5910eb1219350989afe036c108d->enter($__internal_0802dbe6bc450e99309373d871c9814a154ac5910eb1219350989afe036c108d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_abc49daf07d51c1e18c54286717d7a19ef495ce909611f470404a73dc8dd2c18->leave($__internal_abc49daf07d51c1e18c54286717d7a19ef495ce909611f470404a73dc8dd2c18_prof);

        
        $__internal_0802dbe6bc450e99309373d871c9814a154ac5910eb1219350989afe036c108d->leave($__internal_0802dbe6bc450e99309373d871c9814a154ac5910eb1219350989afe036c108d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
