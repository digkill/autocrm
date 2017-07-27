<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_9eba4ec9600d49ab2ed95a3bfe3ffbddb42cbce440cf0b637450b725652986fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_8e81d3b0c2062009ebf8b5789741bdcd35b3652debad6cf77ebeb3b5659f2c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e81d3b0c2062009ebf8b5789741bdcd35b3652debad6cf77ebeb3b5659f2c37->enter($__internal_8e81d3b0c2062009ebf8b5789741bdcd35b3652debad6cf77ebeb3b5659f2c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_4f0efe9e7dfc39a5b2d5d91058b5b2f9d3107cd84ab167af1a8ef232ab54ec9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0efe9e7dfc39a5b2d5d91058b5b2f9d3107cd84ab167af1a8ef232ab54ec9b->enter($__internal_4f0efe9e7dfc39a5b2d5d91058b5b2f9d3107cd84ab167af1a8ef232ab54ec9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e81d3b0c2062009ebf8b5789741bdcd35b3652debad6cf77ebeb3b5659f2c37->leave($__internal_8e81d3b0c2062009ebf8b5789741bdcd35b3652debad6cf77ebeb3b5659f2c37_prof);

        
        $__internal_4f0efe9e7dfc39a5b2d5d91058b5b2f9d3107cd84ab167af1a8ef232ab54ec9b->leave($__internal_4f0efe9e7dfc39a5b2d5d91058b5b2f9d3107cd84ab167af1a8ef232ab54ec9b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a02e685c811be0f42d9f45a874b60cc681d26d1277e9523cb4226edd64a4fbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02e685c811be0f42d9f45a874b60cc681d26d1277e9523cb4226edd64a4fbec->enter($__internal_a02e685c811be0f42d9f45a874b60cc681d26d1277e9523cb4226edd64a4fbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fdcb771be88350311dfe33055d5be0dfaeeb3ac333af0519962fe71c4d3ee88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcb771be88350311dfe33055d5be0dfaeeb3ac333af0519962fe71c4d3ee88e->enter($__internal_fdcb771be88350311dfe33055d5be0dfaeeb3ac333af0519962fe71c4d3ee88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fdcb771be88350311dfe33055d5be0dfaeeb3ac333af0519962fe71c4d3ee88e->leave($__internal_fdcb771be88350311dfe33055d5be0dfaeeb3ac333af0519962fe71c4d3ee88e_prof);

        
        $__internal_a02e685c811be0f42d9f45a874b60cc681d26d1277e9523cb4226edd64a4fbec->leave($__internal_a02e685c811be0f42d9f45a874b60cc681d26d1277e9523cb4226edd64a4fbec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
