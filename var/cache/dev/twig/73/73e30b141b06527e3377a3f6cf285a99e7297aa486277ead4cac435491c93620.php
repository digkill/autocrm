<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_391dfe655067f4528d87f816856ccee7808e57d8af11ad8fd84e7811fef45bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e284a4e18823f3640ed90ee801e6f14c870341eebc744c1163c6a49818c127c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e284a4e18823f3640ed90ee801e6f14c870341eebc744c1163c6a49818c127c8->enter($__internal_e284a4e18823f3640ed90ee801e6f14c870341eebc744c1163c6a49818c127c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_03b4fa4508d2fbff55b63dfa0b7b886c9562e187a928ca2b06ec63fe332702e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b4fa4508d2fbff55b63dfa0b7b886c9562e187a928ca2b06ec63fe332702e8->enter($__internal_03b4fa4508d2fbff55b63dfa0b7b886c9562e187a928ca2b06ec63fe332702e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e284a4e18823f3640ed90ee801e6f14c870341eebc744c1163c6a49818c127c8->leave($__internal_e284a4e18823f3640ed90ee801e6f14c870341eebc744c1163c6a49818c127c8_prof);

        
        $__internal_03b4fa4508d2fbff55b63dfa0b7b886c9562e187a928ca2b06ec63fe332702e8->leave($__internal_03b4fa4508d2fbff55b63dfa0b7b886c9562e187a928ca2b06ec63fe332702e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_701543465a85383cd5a5278975171edb49772c33a5d41d0a3613c7ca4d93155e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701543465a85383cd5a5278975171edb49772c33a5d41d0a3613c7ca4d93155e->enter($__internal_701543465a85383cd5a5278975171edb49772c33a5d41d0a3613c7ca4d93155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e8117c28de82c142507544df97009dd919848723ccb18d6cc0e4a9c12757fe1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8117c28de82c142507544df97009dd919848723ccb18d6cc0e4a9c12757fe1b->enter($__internal_e8117c28de82c142507544df97009dd919848723ccb18d6cc0e4a9c12757fe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e8117c28de82c142507544df97009dd919848723ccb18d6cc0e4a9c12757fe1b->leave($__internal_e8117c28de82c142507544df97009dd919848723ccb18d6cc0e4a9c12757fe1b_prof);

        
        $__internal_701543465a85383cd5a5278975171edb49772c33a5d41d0a3613c7ca4d93155e->leave($__internal_701543465a85383cd5a5278975171edb49772c33a5d41d0a3613c7ca4d93155e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
