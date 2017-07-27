<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7af69d4563c3827ad8c783e7ee07daeee59e086346953a119ad4220ea4a747de extends Twig_Template
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
        $__internal_d9698cefb6f44e7100364522bdfa6ea2913a0ca0d482125fe92f5935b49e2e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9698cefb6f44e7100364522bdfa6ea2913a0ca0d482125fe92f5935b49e2e9c->enter($__internal_d9698cefb6f44e7100364522bdfa6ea2913a0ca0d482125fe92f5935b49e2e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e99bd8897876a9090648a62f68b76f3333803fa60bc6cd70645b0e7a9294af78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99bd8897876a9090648a62f68b76f3333803fa60bc6cd70645b0e7a9294af78->enter($__internal_e99bd8897876a9090648a62f68b76f3333803fa60bc6cd70645b0e7a9294af78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d9698cefb6f44e7100364522bdfa6ea2913a0ca0d482125fe92f5935b49e2e9c->leave($__internal_d9698cefb6f44e7100364522bdfa6ea2913a0ca0d482125fe92f5935b49e2e9c_prof);

        
        $__internal_e99bd8897876a9090648a62f68b76f3333803fa60bc6cd70645b0e7a9294af78->leave($__internal_e99bd8897876a9090648a62f68b76f3333803fa60bc6cd70645b0e7a9294af78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
