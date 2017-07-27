<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_24089fecff9d8c9521c35859867192078e3cee7697fd600107172bab8be58390 extends Twig_Template
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
        $__internal_62f1b4c8979cb6a7cd13707b3dbd005daa99595a8dbb7c10e0b8a482c96d8479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f1b4c8979cb6a7cd13707b3dbd005daa99595a8dbb7c10e0b8a482c96d8479->enter($__internal_62f1b4c8979cb6a7cd13707b3dbd005daa99595a8dbb7c10e0b8a482c96d8479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a419abc5b66e945876df51f1ac1789c02b047aa492856553819c84dbadaf6ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a419abc5b66e945876df51f1ac1789c02b047aa492856553819c84dbadaf6ac2->enter($__internal_a419abc5b66e945876df51f1ac1789c02b047aa492856553819c84dbadaf6ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_62f1b4c8979cb6a7cd13707b3dbd005daa99595a8dbb7c10e0b8a482c96d8479->leave($__internal_62f1b4c8979cb6a7cd13707b3dbd005daa99595a8dbb7c10e0b8a482c96d8479_prof);

        
        $__internal_a419abc5b66e945876df51f1ac1789c02b047aa492856553819c84dbadaf6ac2->leave($__internal_a419abc5b66e945876df51f1ac1789c02b047aa492856553819c84dbadaf6ac2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
