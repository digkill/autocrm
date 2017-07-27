<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3938fedfd478d000bfcea8b95b4b7794aa566be455e7f7ed551e3cdb77b4a21c extends Twig_Template
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
        $__internal_43a7b5c01e95c8b3efc3e6380789074bc05cbbb50051aea4cbf70c1c8270756d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a7b5c01e95c8b3efc3e6380789074bc05cbbb50051aea4cbf70c1c8270756d->enter($__internal_43a7b5c01e95c8b3efc3e6380789074bc05cbbb50051aea4cbf70c1c8270756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_061b9d9c03f85b0ed0469b12b88614ca3b900f0258ede602499ccdfa50f9afd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061b9d9c03f85b0ed0469b12b88614ca3b900f0258ede602499ccdfa50f9afd5->enter($__internal_061b9d9c03f85b0ed0469b12b88614ca3b900f0258ede602499ccdfa50f9afd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_43a7b5c01e95c8b3efc3e6380789074bc05cbbb50051aea4cbf70c1c8270756d->leave($__internal_43a7b5c01e95c8b3efc3e6380789074bc05cbbb50051aea4cbf70c1c8270756d_prof);

        
        $__internal_061b9d9c03f85b0ed0469b12b88614ca3b900f0258ede602499ccdfa50f9afd5->leave($__internal_061b9d9c03f85b0ed0469b12b88614ca3b900f0258ede602499ccdfa50f9afd5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
