<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_28051d7736a38fd6b9b76a12a847223b5180fee88c9bea67363166f6f63734e5 extends Twig_Template
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
        $__internal_bae6bb09ac98b48347b4bf098bcd7727678bc78d96b2e9baf0a73cd77b27374b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae6bb09ac98b48347b4bf098bcd7727678bc78d96b2e9baf0a73cd77b27374b->enter($__internal_bae6bb09ac98b48347b4bf098bcd7727678bc78d96b2e9baf0a73cd77b27374b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_761f33b875049e5a51b492e0dd51f58b8b1048eeb2c0574f4b15e8922284fc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761f33b875049e5a51b492e0dd51f58b8b1048eeb2c0574f4b15e8922284fc3a->enter($__internal_761f33b875049e5a51b492e0dd51f58b8b1048eeb2c0574f4b15e8922284fc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bae6bb09ac98b48347b4bf098bcd7727678bc78d96b2e9baf0a73cd77b27374b->leave($__internal_bae6bb09ac98b48347b4bf098bcd7727678bc78d96b2e9baf0a73cd77b27374b_prof);

        
        $__internal_761f33b875049e5a51b492e0dd51f58b8b1048eeb2c0574f4b15e8922284fc3a->leave($__internal_761f33b875049e5a51b492e0dd51f58b8b1048eeb2c0574f4b15e8922284fc3a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
