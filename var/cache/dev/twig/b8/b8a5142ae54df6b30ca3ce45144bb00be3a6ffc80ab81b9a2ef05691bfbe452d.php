<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2f0c584f47ab5398c9e40403e4a9f87c2b076c13fa53dbf4478be0872f425f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_17dc9ea518cf4ecc777f7f7b9c2ce506032c1ea8815f3612c458e7db1af694ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17dc9ea518cf4ecc777f7f7b9c2ce506032c1ea8815f3612c458e7db1af694ed->enter($__internal_17dc9ea518cf4ecc777f7f7b9c2ce506032c1ea8815f3612c458e7db1af694ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_624983b9e7e6a244df9bb4dadeede8fc3c231f8b20827c306d584f7f325de7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624983b9e7e6a244df9bb4dadeede8fc3c231f8b20827c306d584f7f325de7fa->enter($__internal_624983b9e7e6a244df9bb4dadeede8fc3c231f8b20827c306d584f7f325de7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17dc9ea518cf4ecc777f7f7b9c2ce506032c1ea8815f3612c458e7db1af694ed->leave($__internal_17dc9ea518cf4ecc777f7f7b9c2ce506032c1ea8815f3612c458e7db1af694ed_prof);

        
        $__internal_624983b9e7e6a244df9bb4dadeede8fc3c231f8b20827c306d584f7f325de7fa->leave($__internal_624983b9e7e6a244df9bb4dadeede8fc3c231f8b20827c306d584f7f325de7fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92080e9fb3555e971f9f25081ee8848a3317b1a1594a7a4e723bcc126502e42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92080e9fb3555e971f9f25081ee8848a3317b1a1594a7a4e723bcc126502e42b->enter($__internal_92080e9fb3555e971f9f25081ee8848a3317b1a1594a7a4e723bcc126502e42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f662a76157dbed022a8971d052b3fd78baeaa7fa820d5bdb8ba4b4162ba062e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f662a76157dbed022a8971d052b3fd78baeaa7fa820d5bdb8ba4b4162ba062e1->enter($__internal_f662a76157dbed022a8971d052b3fd78baeaa7fa820d5bdb8ba4b4162ba062e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f662a76157dbed022a8971d052b3fd78baeaa7fa820d5bdb8ba4b4162ba062e1->leave($__internal_f662a76157dbed022a8971d052b3fd78baeaa7fa820d5bdb8ba4b4162ba062e1_prof);

        
        $__internal_92080e9fb3555e971f9f25081ee8848a3317b1a1594a7a4e723bcc126502e42b->leave($__internal_92080e9fb3555e971f9f25081ee8848a3317b1a1594a7a4e723bcc126502e42b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
