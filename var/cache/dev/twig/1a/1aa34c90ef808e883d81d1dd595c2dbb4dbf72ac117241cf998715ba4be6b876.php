<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7b9812a69cb52da441d7d3bc0fd8a0b1f8f8a2597c2b25d513c956382b6464f9 extends Twig_Template
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
        $__internal_263c3f3f12d569bda694a2c28514f2b3b8e1b151ca683de328d9c03ec3bc4b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263c3f3f12d569bda694a2c28514f2b3b8e1b151ca683de328d9c03ec3bc4b8d->enter($__internal_263c3f3f12d569bda694a2c28514f2b3b8e1b151ca683de328d9c03ec3bc4b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_dfb3e810b9def81a354d791e43e4fd40eadbc4da82db67ffeb7bb12dd5e3c506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb3e810b9def81a354d791e43e4fd40eadbc4da82db67ffeb7bb12dd5e3c506->enter($__internal_dfb3e810b9def81a354d791e43e4fd40eadbc4da82db67ffeb7bb12dd5e3c506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_263c3f3f12d569bda694a2c28514f2b3b8e1b151ca683de328d9c03ec3bc4b8d->leave($__internal_263c3f3f12d569bda694a2c28514f2b3b8e1b151ca683de328d9c03ec3bc4b8d_prof);

        
        $__internal_dfb3e810b9def81a354d791e43e4fd40eadbc4da82db67ffeb7bb12dd5e3c506->leave($__internal_dfb3e810b9def81a354d791e43e4fd40eadbc4da82db67ffeb7bb12dd5e3c506_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
