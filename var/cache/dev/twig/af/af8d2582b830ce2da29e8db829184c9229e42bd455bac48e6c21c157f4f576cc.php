<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_eb4990d853a597816a334c8c7272b1bd6cbab558bdcba358b2ce3fa198118f80 extends Twig_Template
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
        $__internal_5c087227b8d4209021b508ffda93b2ce962af456af21e439d32fc9c4c794038b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c087227b8d4209021b508ffda93b2ce962af456af21e439d32fc9c4c794038b->enter($__internal_5c087227b8d4209021b508ffda93b2ce962af456af21e439d32fc9c4c794038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        $__internal_c7829db015b713c15f097fe1f8104b111c26f65d818629702d7faf186a8eb216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7829db015b713c15f097fe1f8104b111c26f65d818629702d7faf186a8eb216->enter($__internal_c7829db015b713c15f097fe1f8104b111c26f65d818629702d7faf186a8eb216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        // line 1
        if ((twig_test_empty(($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion"))) && twig_test_empty(($context["untilVersion"] ?? $this->getContext($context, "untilVersion"))))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty(($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion")))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, ($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion")), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty(($context["untilVersion"] ?? $this->getContext($context, "untilVersion")))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty(($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion")))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, ($context["untilVersion"] ?? $this->getContext($context, "untilVersion")), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_5c087227b8d4209021b508ffda93b2ce962af456af21e439d32fc9c4c794038b->leave($__internal_5c087227b8d4209021b508ffda93b2ce962af456af21e439d32fc9c4c794038b_prof);

        
        $__internal_c7829db015b713c15f097fe1f8104b111c26f65d818629702d7faf186a8eb216->leave($__internal_c7829db015b713c15f097fe1f8104b111c26f65d818629702d7faf186a8eb216_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sinceVersion is empty and untilVersion is empty %}
*
{% else %}
    {% if sinceVersion is not empty %}&gt;={{ sinceVersion }}{% endif %}
    {% if untilVersion is not empty %}
        {% if sinceVersion is not empty %},{% endif %}&lt;={{ untilVersion }}
    {% endif %}
{% endif %}
", "NelmioApiDocBundle:Components:version.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/version.html.twig");
    }
}
