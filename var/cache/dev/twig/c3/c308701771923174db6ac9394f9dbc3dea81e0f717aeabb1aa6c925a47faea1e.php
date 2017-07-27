<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2fab39550b085b7072cef11d12dc556b36fe2eebbd759f953dbd7edd9ce1157e extends Twig_Template
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
        $__internal_ae5c4901da9fd8a223d6fc255953bd65f0a5042e7da5defaf70256505db37464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5c4901da9fd8a223d6fc255953bd65f0a5042e7da5defaf70256505db37464->enter($__internal_ae5c4901da9fd8a223d6fc255953bd65f0a5042e7da5defaf70256505db37464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_da79e43e3e66a5dfc08d4a6b518ca7f6112dfb901d6282b70b64cd2ad0970109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da79e43e3e66a5dfc08d4a6b518ca7f6112dfb901d6282b70b64cd2ad0970109->enter($__internal_da79e43e3e66a5dfc08d4a6b518ca7f6112dfb901d6282b70b64cd2ad0970109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ae5c4901da9fd8a223d6fc255953bd65f0a5042e7da5defaf70256505db37464->leave($__internal_ae5c4901da9fd8a223d6fc255953bd65f0a5042e7da5defaf70256505db37464_prof);

        
        $__internal_da79e43e3e66a5dfc08d4a6b518ca7f6112dfb901d6282b70b64cd2ad0970109->leave($__internal_da79e43e3e66a5dfc08d4a6b518ca7f6112dfb901d6282b70b64cd2ad0970109_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
