<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_9eec5bfc72368bbb7bacdbf0c131eb98dbdd02f369b19213e7c74b5eef80005d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_0a6f99b4c4991e1c22a32da32e56169cc0d9d12844998d014c3ba992d0b881e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6f99b4c4991e1c22a32da32e56169cc0d9d12844998d014c3ba992d0b881e1->enter($__internal_0a6f99b4c4991e1c22a32da32e56169cc0d9d12844998d014c3ba992d0b881e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_973a12c82d28276fb6784b67f8089ab2a3633e4c1cbfbf8355309025d0d05edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973a12c82d28276fb6784b67f8089ab2a3633e4c1cbfbf8355309025d0d05edd->enter($__internal_973a12c82d28276fb6784b67f8089ab2a3633e4c1cbfbf8355309025d0d05edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6f99b4c4991e1c22a32da32e56169cc0d9d12844998d014c3ba992d0b881e1->leave($__internal_0a6f99b4c4991e1c22a32da32e56169cc0d9d12844998d014c3ba992d0b881e1_prof);

        
        $__internal_973a12c82d28276fb6784b67f8089ab2a3633e4c1cbfbf8355309025d0d05edd->leave($__internal_973a12c82d28276fb6784b67f8089ab2a3633e4c1cbfbf8355309025d0d05edd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df6174b798ab72a2ca5c42621db06ad18b3b20fc706b3ccdf145af175a470fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6174b798ab72a2ca5c42621db06ad18b3b20fc706b3ccdf145af175a470fe7->enter($__internal_df6174b798ab72a2ca5c42621db06ad18b3b20fc706b3ccdf145af175a470fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f9165ac986f69efc6e35443ab8531e9e8e1b9c9e33055837f3995dbe129ee895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9165ac986f69efc6e35443ab8531e9e8e1b9c9e33055837f3995dbe129ee895->enter($__internal_f9165ac986f69efc6e35443ab8531e9e8e1b9c9e33055837f3995dbe129ee895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f9165ac986f69efc6e35443ab8531e9e8e1b9c9e33055837f3995dbe129ee895->leave($__internal_f9165ac986f69efc6e35443ab8531e9e8e1b9c9e33055837f3995dbe129ee895_prof);

        
        $__internal_df6174b798ab72a2ca5c42621db06ad18b3b20fc706b3ccdf145af175a470fe7->leave($__internal_df6174b798ab72a2ca5c42621db06ad18b3b20fc706b3ccdf145af175a470fe7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
