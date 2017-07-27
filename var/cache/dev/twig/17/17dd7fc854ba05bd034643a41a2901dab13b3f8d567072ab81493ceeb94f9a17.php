<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b42695ff587961077f90e016e1d93aae26efbe9cb0d03419d846a99d2573d713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_03763fbed77171c7e1b380553056d00e13d19af4b5ab714f2d7adc10043e4496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03763fbed77171c7e1b380553056d00e13d19af4b5ab714f2d7adc10043e4496->enter($__internal_03763fbed77171c7e1b380553056d00e13d19af4b5ab714f2d7adc10043e4496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_d06005c31cfe3d6d0b1f3da31f051e2f1b51351ce8c51ec8996d001ba9aa29c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06005c31cfe3d6d0b1f3da31f051e2f1b51351ce8c51ec8996d001ba9aa29c1->enter($__internal_d06005c31cfe3d6d0b1f3da31f051e2f1b51351ce8c51ec8996d001ba9aa29c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03763fbed77171c7e1b380553056d00e13d19af4b5ab714f2d7adc10043e4496->leave($__internal_03763fbed77171c7e1b380553056d00e13d19af4b5ab714f2d7adc10043e4496_prof);

        
        $__internal_d06005c31cfe3d6d0b1f3da31f051e2f1b51351ce8c51ec8996d001ba9aa29c1->leave($__internal_d06005c31cfe3d6d0b1f3da31f051e2f1b51351ce8c51ec8996d001ba9aa29c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2aac819f3cd79e9eca5cc2307ebe1290f754ce7858bb827de27e0144f922517d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aac819f3cd79e9eca5cc2307ebe1290f754ce7858bb827de27e0144f922517d->enter($__internal_2aac819f3cd79e9eca5cc2307ebe1290f754ce7858bb827de27e0144f922517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b364d23e1bdc56685516b795d74a14463197f2133a0f6b6047617d3f313a657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b364d23e1bdc56685516b795d74a14463197f2133a0f6b6047617d3f313a657->enter($__internal_6b364d23e1bdc56685516b795d74a14463197f2133a0f6b6047617d3f313a657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6b364d23e1bdc56685516b795d74a14463197f2133a0f6b6047617d3f313a657->leave($__internal_6b364d23e1bdc56685516b795d74a14463197f2133a0f6b6047617d3f313a657_prof);

        
        $__internal_2aac819f3cd79e9eca5cc2307ebe1290f754ce7858bb827de27e0144f922517d->leave($__internal_2aac819f3cd79e9eca5cc2307ebe1290f754ce7858bb827de27e0144f922517d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
