<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a0053d26158ab6adeb0fa72906049c1242b9fd27113ffc94214b5f64d916b379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_585865ae53cf470f5e1d7020dfbc6b00cab764f723c3b4f68b1161a27ce711f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585865ae53cf470f5e1d7020dfbc6b00cab764f723c3b4f68b1161a27ce711f2->enter($__internal_585865ae53cf470f5e1d7020dfbc6b00cab764f723c3b4f68b1161a27ce711f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_6035627dd8b7b38a2b125ec9d907f6f6d6db7f790d0ac6e45eee3bebe60e5f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6035627dd8b7b38a2b125ec9d907f6f6d6db7f790d0ac6e45eee3bebe60e5f66->enter($__internal_6035627dd8b7b38a2b125ec9d907f6f6d6db7f790d0ac6e45eee3bebe60e5f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585865ae53cf470f5e1d7020dfbc6b00cab764f723c3b4f68b1161a27ce711f2->leave($__internal_585865ae53cf470f5e1d7020dfbc6b00cab764f723c3b4f68b1161a27ce711f2_prof);

        
        $__internal_6035627dd8b7b38a2b125ec9d907f6f6d6db7f790d0ac6e45eee3bebe60e5f66->leave($__internal_6035627dd8b7b38a2b125ec9d907f6f6d6db7f790d0ac6e45eee3bebe60e5f66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28df1a674d7a85b2d20284d1d21e7107d34f890e46c5d6804fd75a4f22f4b1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28df1a674d7a85b2d20284d1d21e7107d34f890e46c5d6804fd75a4f22f4b1cf->enter($__internal_28df1a674d7a85b2d20284d1d21e7107d34f890e46c5d6804fd75a4f22f4b1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a25ffd14d2bc4ce702f221ee78872791c0137acd4aa1eb5d5013ae4571697706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25ffd14d2bc4ce702f221ee78872791c0137acd4aa1eb5d5013ae4571697706->enter($__internal_a25ffd14d2bc4ce702f221ee78872791c0137acd4aa1eb5d5013ae4571697706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a25ffd14d2bc4ce702f221ee78872791c0137acd4aa1eb5d5013ae4571697706->leave($__internal_a25ffd14d2bc4ce702f221ee78872791c0137acd4aa1eb5d5013ae4571697706_prof);

        
        $__internal_28df1a674d7a85b2d20284d1d21e7107d34f890e46c5d6804fd75a4f22f4b1cf->leave($__internal_28df1a674d7a85b2d20284d1d21e7107d34f890e46c5d6804fd75a4f22f4b1cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
