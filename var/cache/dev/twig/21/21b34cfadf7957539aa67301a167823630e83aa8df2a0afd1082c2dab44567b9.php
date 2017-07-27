<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9f26a401bec1b3be87f052080efd6f3b4eae3afa194d973a072d9661da0c2053 extends Twig_Template
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
        $__internal_e1ce8e45263c61ca3fe146b75526245e39c24af053b96c76d3d6e219e1b70366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ce8e45263c61ca3fe146b75526245e39c24af053b96c76d3d6e219e1b70366->enter($__internal_e1ce8e45263c61ca3fe146b75526245e39c24af053b96c76d3d6e219e1b70366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_dcbe3809f5f42e291ecf3643d51ff2def88ce795444aa4ca0dd3b69a2afa6353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbe3809f5f42e291ecf3643d51ff2def88ce795444aa4ca0dd3b69a2afa6353->enter($__internal_dcbe3809f5f42e291ecf3643d51ff2def88ce795444aa4ca0dd3b69a2afa6353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e1ce8e45263c61ca3fe146b75526245e39c24af053b96c76d3d6e219e1b70366->leave($__internal_e1ce8e45263c61ca3fe146b75526245e39c24af053b96c76d3d6e219e1b70366_prof);

        
        $__internal_dcbe3809f5f42e291ecf3643d51ff2def88ce795444aa4ca0dd3b69a2afa6353->leave($__internal_dcbe3809f5f42e291ecf3643d51ff2def88ce795444aa4ca0dd3b69a2afa6353_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
