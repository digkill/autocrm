<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a8a205ad585f61e4e0cd9616beed327ce2ee5f738a5a6ea25c5c345142f30497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_eca5cac003aebc91c2f2b5c74426cfaf451c6d9ad40f9f0590f38eb2ed128e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca5cac003aebc91c2f2b5c74426cfaf451c6d9ad40f9f0590f38eb2ed128e8b->enter($__internal_eca5cac003aebc91c2f2b5c74426cfaf451c6d9ad40f9f0590f38eb2ed128e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_1d461187228b58af6beed94c99a89a630f61ec0d845ae598bb22c662672485dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d461187228b58af6beed94c99a89a630f61ec0d845ae598bb22c662672485dd->enter($__internal_1d461187228b58af6beed94c99a89a630f61ec0d845ae598bb22c662672485dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eca5cac003aebc91c2f2b5c74426cfaf451c6d9ad40f9f0590f38eb2ed128e8b->leave($__internal_eca5cac003aebc91c2f2b5c74426cfaf451c6d9ad40f9f0590f38eb2ed128e8b_prof);

        
        $__internal_1d461187228b58af6beed94c99a89a630f61ec0d845ae598bb22c662672485dd->leave($__internal_1d461187228b58af6beed94c99a89a630f61ec0d845ae598bb22c662672485dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5c7bb9e766b2a64c2aa3101c94abbbaee3db595c23c6020014882ef6e310de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c7bb9e766b2a64c2aa3101c94abbbaee3db595c23c6020014882ef6e310de3->enter($__internal_d5c7bb9e766b2a64c2aa3101c94abbbaee3db595c23c6020014882ef6e310de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e40869eb3ea2bf789821a4e6e001c6e2716813fc8582468d6e50ffaef55a9159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40869eb3ea2bf789821a4e6e001c6e2716813fc8582468d6e50ffaef55a9159->enter($__internal_e40869eb3ea2bf789821a4e6e001c6e2716813fc8582468d6e50ffaef55a9159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e40869eb3ea2bf789821a4e6e001c6e2716813fc8582468d6e50ffaef55a9159->leave($__internal_e40869eb3ea2bf789821a4e6e001c6e2716813fc8582468d6e50ffaef55a9159_prof);

        
        $__internal_d5c7bb9e766b2a64c2aa3101c94abbbaee3db595c23c6020014882ef6e310de3->leave($__internal_d5c7bb9e766b2a64c2aa3101c94abbbaee3db595c23c6020014882ef6e310de3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
