<?php

/* FOSOAuthServerBundle:Authorize:authorize.html.twig */
class __TwigTemplate_ab5d884b26cbd6aaf401a53a53f82245cf58a10e6e7fddb3c00011675164f878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSOAuthServerBundle::layout.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 1);
        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de9ff24aa76e5410cd2d009e5c578d7577042febe4421c2d563884d5f989a703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9ff24aa76e5410cd2d009e5c578d7577042febe4421c2d563884d5f989a703->enter($__internal_de9ff24aa76e5410cd2d009e5c578d7577042febe4421c2d563884d5f989a703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize.html.twig"));

        $__internal_97753433bfa3755408dee9921bf6638af1093cc4bd77a14e4dfd5017b1e6a226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97753433bfa3755408dee9921bf6638af1093cc4bd77a14e4dfd5017b1e6a226->enter($__internal_97753433bfa3755408dee9921bf6638af1093cc4bd77a14e4dfd5017b1e6a226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de9ff24aa76e5410cd2d009e5c578d7577042febe4421c2d563884d5f989a703->leave($__internal_de9ff24aa76e5410cd2d009e5c578d7577042febe4421c2d563884d5f989a703_prof);

        
        $__internal_97753433bfa3755408dee9921bf6638af1093cc4bd77a14e4dfd5017b1e6a226->leave($__internal_97753433bfa3755408dee9921bf6638af1093cc4bd77a14e4dfd5017b1e6a226_prof);

    }

    // line 3
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        $__internal_c621bdfc7ede38da0a328c186c1dd3826d420ba39a3817367f8491c57ab53d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c621bdfc7ede38da0a328c186c1dd3826d420ba39a3817367f8491c57ab53d4d->enter($__internal_c621bdfc7ede38da0a328c186c1dd3826d420ba39a3817367f8491c57ab53d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        $__internal_63976de1c7b1d02558cf9cbc4f08982c34e108567ecd27bbe8827b24a1b40d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63976de1c7b1d02558cf9cbc4f08982c34e108567ecd27bbe8827b24a1b40d58->enter($__internal_63976de1c7b1d02558cf9cbc4f08982c34e108567ecd27bbe8827b24a1b40d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        // line 4
        $this->loadTemplate("FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 4)->display($context);
        
        $__internal_63976de1c7b1d02558cf9cbc4f08982c34e108567ecd27bbe8827b24a1b40d58->leave($__internal_63976de1c7b1d02558cf9cbc4f08982c34e108567ecd27bbe8827b24a1b40d58_prof);

        
        $__internal_c621bdfc7ede38da0a328c186c1dd3826d420ba39a3817367f8491c57ab53d4d->leave($__internal_c621bdfc7ede38da0a328c186c1dd3826d420ba39a3817367f8491c57ab53d4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle:Authorize:authorize.html.twig";
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
        return new Twig_Source("{% extends \"FOSOAuthServerBundle::layout.html.twig\" %}

{% block fos_oauth_server_content %}
{% include \"FOSOAuthServerBundle:Authorize:authorize_content.html.twig\" %}
{% endblock fos_oauth_server_content %}
", "FOSOAuthServerBundle:Authorize:authorize.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/Authorize/authorize.html.twig");
    }
}
