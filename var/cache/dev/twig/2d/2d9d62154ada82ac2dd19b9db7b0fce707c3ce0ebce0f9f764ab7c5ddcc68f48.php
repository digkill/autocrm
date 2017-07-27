<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_de02e004c93c2f93e1cd3b61a7141d7c13781907034b5bdbc2a62b0cdecaf88b extends Twig_Template
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
        $__internal_b7de3a2930f5dd4fc43f87355ffb1dfb233ea846245c968cc7cbb7b6ff59d501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7de3a2930f5dd4fc43f87355ffb1dfb233ea846245c968cc7cbb7b6ff59d501->enter($__internal_b7de3a2930f5dd4fc43f87355ffb1dfb233ea846245c968cc7cbb7b6ff59d501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_4851f8f2e4f7c1960a1f4235a4470f28867c694faa1490b6f39559eec1bfec4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4851f8f2e4f7c1960a1f4235a4470f28867c694faa1490b6f39559eec1bfec4e->enter($__internal_4851f8f2e4f7c1960a1f4235a4470f28867c694faa1490b6f39559eec1bfec4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b7de3a2930f5dd4fc43f87355ffb1dfb233ea846245c968cc7cbb7b6ff59d501->leave($__internal_b7de3a2930f5dd4fc43f87355ffb1dfb233ea846245c968cc7cbb7b6ff59d501_prof);

        
        $__internal_4851f8f2e4f7c1960a1f4235a4470f28867c694faa1490b6f39559eec1bfec4e->leave($__internal_4851f8f2e4f7c1960a1f4235a4470f28867c694faa1490b6f39559eec1bfec4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
