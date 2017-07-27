<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_e460dbb3ca2e75816fe819fd5d10fc273de75c5fd213acbb43b0157a58c6bfaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06c0b882f0dfe35ebf79fc1067146e5550c1d91c39920ed60e01ff57d7928a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c0b882f0dfe35ebf79fc1067146e5550c1d91c39920ed60e01ff57d7928a74->enter($__internal_06c0b882f0dfe35ebf79fc1067146e5550c1d91c39920ed60e01ff57d7928a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_b4e95060b20cb28dd09e14d4286ed9096d710cb0d79fc96e72586bbb9522beb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e95060b20cb28dd09e14d4286ed9096d710cb0d79fc96e72586bbb9522beb0->enter($__internal_b4e95060b20cb28dd09e14d4286ed9096d710cb0d79fc96e72586bbb9522beb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06c0b882f0dfe35ebf79fc1067146e5550c1d91c39920ed60e01ff57d7928a74->leave($__internal_06c0b882f0dfe35ebf79fc1067146e5550c1d91c39920ed60e01ff57d7928a74_prof);

        
        $__internal_b4e95060b20cb28dd09e14d4286ed9096d710cb0d79fc96e72586bbb9522beb0->leave($__internal_b4e95060b20cb28dd09e14d4286ed9096d710cb0d79fc96e72586bbb9522beb0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_729892310e75cf3009136e6f7129cf790731dfebcb17761389ad0c89bb29e13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729892310e75cf3009136e6f7129cf790731dfebcb17761389ad0c89bb29e13a->enter($__internal_729892310e75cf3009136e6f7129cf790731dfebcb17761389ad0c89bb29e13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_60f31d3b7c271bf20295a3c3c00bc46b07f88be2218dc18f05485d34d741f30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f31d3b7c271bf20295a3c3c00bc46b07f88be2218dc18f05485d34d741f30c->enter($__internal_60f31d3b7c271bf20295a3c3c00bc46b07f88be2218dc18f05485d34d741f30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_60f31d3b7c271bf20295a3c3c00bc46b07f88be2218dc18f05485d34d741f30c->leave($__internal_60f31d3b7c271bf20295a3c3c00bc46b07f88be2218dc18f05485d34d741f30c_prof);

        
        $__internal_729892310e75cf3009136e6f7129cf790731dfebcb17761389ad0c89bb29e13a->leave($__internal_729892310e75cf3009136e6f7129cf790731dfebcb17761389ad0c89bb29e13a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
