<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_31a2e05e1ad7ba977fb33a398f75fac98865708b9718d5de983331f58fbf1d14 extends Twig_Template
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
        $__internal_530a45718ea5ef6a3fd40b377dcf0ae07108d7666b9c8da3dcb192e26bfcc4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530a45718ea5ef6a3fd40b377dcf0ae07108d7666b9c8da3dcb192e26bfcc4c2->enter($__internal_530a45718ea5ef6a3fd40b377dcf0ae07108d7666b9c8da3dcb192e26bfcc4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_9db96fb97cf9e19fd1f6615e6fc86b1170c92faee9ba8ccd353abfb0e7a12b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db96fb97cf9e19fd1f6615e6fc86b1170c92faee9ba8ccd353abfb0e7a12b51->enter($__internal_9db96fb97cf9e19fd1f6615e6fc86b1170c92faee9ba8ccd353abfb0e7a12b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_530a45718ea5ef6a3fd40b377dcf0ae07108d7666b9c8da3dcb192e26bfcc4c2->leave($__internal_530a45718ea5ef6a3fd40b377dcf0ae07108d7666b9c8da3dcb192e26bfcc4c2_prof);

        
        $__internal_9db96fb97cf9e19fd1f6615e6fc86b1170c92faee9ba8ccd353abfb0e7a12b51->leave($__internal_9db96fb97cf9e19fd1f6615e6fc86b1170c92faee9ba8ccd353abfb0e7a12b51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
