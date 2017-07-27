<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d70317fc610aa58a08ccd37dc6b51b8af5e136310505e13f9f36931ae1167e04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_b61071b29ef83b428c8c36ad05d24bfb6c478d5d120bcece43c797a1f71639db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61071b29ef83b428c8c36ad05d24bfb6c478d5d120bcece43c797a1f71639db->enter($__internal_b61071b29ef83b428c8c36ad05d24bfb6c478d5d120bcece43c797a1f71639db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_f704a707afaa264aedb8517b8fb190a63203e2766540368da7b55b35a7022a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f704a707afaa264aedb8517b8fb190a63203e2766540368da7b55b35a7022a93->enter($__internal_f704a707afaa264aedb8517b8fb190a63203e2766540368da7b55b35a7022a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b61071b29ef83b428c8c36ad05d24bfb6c478d5d120bcece43c797a1f71639db->leave($__internal_b61071b29ef83b428c8c36ad05d24bfb6c478d5d120bcece43c797a1f71639db_prof);

        
        $__internal_f704a707afaa264aedb8517b8fb190a63203e2766540368da7b55b35a7022a93->leave($__internal_f704a707afaa264aedb8517b8fb190a63203e2766540368da7b55b35a7022a93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21f90f9d9203c1a9db07f35c8ebfa5cab7be6f49914362d202cc813e1e5f9de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f90f9d9203c1a9db07f35c8ebfa5cab7be6f49914362d202cc813e1e5f9de1->enter($__internal_21f90f9d9203c1a9db07f35c8ebfa5cab7be6f49914362d202cc813e1e5f9de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_36fa23105f754383e83eee8e0ecf099ddf1e16553312f6b453e56e2a8762c2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36fa23105f754383e83eee8e0ecf099ddf1e16553312f6b453e56e2a8762c2a2->enter($__internal_36fa23105f754383e83eee8e0ecf099ddf1e16553312f6b453e56e2a8762c2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_36fa23105f754383e83eee8e0ecf099ddf1e16553312f6b453e56e2a8762c2a2->leave($__internal_36fa23105f754383e83eee8e0ecf099ddf1e16553312f6b453e56e2a8762c2a2_prof);

        
        $__internal_21f90f9d9203c1a9db07f35c8ebfa5cab7be6f49914362d202cc813e1e5f9de1->leave($__internal_21f90f9d9203c1a9db07f35c8ebfa5cab7be6f49914362d202cc813e1e5f9de1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
