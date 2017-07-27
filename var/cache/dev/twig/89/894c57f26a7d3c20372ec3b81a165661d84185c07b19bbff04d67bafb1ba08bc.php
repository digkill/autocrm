<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ffaeef9ced12f63c177579c371f039761a13752d8df2bbb1fe662fba9ef7c882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fa80ee3f642697b27bbd5ced29ffaeef826a401b99a36ebe76b3fc9e3fb49bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa80ee3f642697b27bbd5ced29ffaeef826a401b99a36ebe76b3fc9e3fb49bf->enter($__internal_4fa80ee3f642697b27bbd5ced29ffaeef826a401b99a36ebe76b3fc9e3fb49bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_dd52f5503f3ad2adb373d402be346c81b54f91f1553d9a2971920f8f23f2f092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd52f5503f3ad2adb373d402be346c81b54f91f1553d9a2971920f8f23f2f092->enter($__internal_dd52f5503f3ad2adb373d402be346c81b54f91f1553d9a2971920f8f23f2f092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4fa80ee3f642697b27bbd5ced29ffaeef826a401b99a36ebe76b3fc9e3fb49bf->leave($__internal_4fa80ee3f642697b27bbd5ced29ffaeef826a401b99a36ebe76b3fc9e3fb49bf_prof);

        
        $__internal_dd52f5503f3ad2adb373d402be346c81b54f91f1553d9a2971920f8f23f2f092->leave($__internal_dd52f5503f3ad2adb373d402be346c81b54f91f1553d9a2971920f8f23f2f092_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_615efbf5d0f1bd204f7ea6942d021cf719cc0261b9aadff59476e116ca9d6ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615efbf5d0f1bd204f7ea6942d021cf719cc0261b9aadff59476e116ca9d6ca2->enter($__internal_615efbf5d0f1bd204f7ea6942d021cf719cc0261b9aadff59476e116ca9d6ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0739695966704b11d67ee1bb43803e7cd18363461d7d258d27e3e9d51ad839fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0739695966704b11d67ee1bb43803e7cd18363461d7d258d27e3e9d51ad839fb->enter($__internal_0739695966704b11d67ee1bb43803e7cd18363461d7d258d27e3e9d51ad839fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_0739695966704b11d67ee1bb43803e7cd18363461d7d258d27e3e9d51ad839fb->leave($__internal_0739695966704b11d67ee1bb43803e7cd18363461d7d258d27e3e9d51ad839fb_prof);

        
        $__internal_615efbf5d0f1bd204f7ea6942d021cf719cc0261b9aadff59476e116ca9d6ca2->leave($__internal_615efbf5d0f1bd204f7ea6942d021cf719cc0261b9aadff59476e116ca9d6ca2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5ffdcdc3b46af889e7071cb3fafe73298e421633d4dd095ff13addf6a90f1c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffdcdc3b46af889e7071cb3fafe73298e421633d4dd095ff13addf6a90f1c2a->enter($__internal_5ffdcdc3b46af889e7071cb3fafe73298e421633d4dd095ff13addf6a90f1c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3ed5020a192a248fc9f3519bd8ce1557f6dd4667216aff91f785d32726a81a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed5020a192a248fc9f3519bd8ce1557f6dd4667216aff91f785d32726a81a8c->enter($__internal_3ed5020a192a248fc9f3519bd8ce1557f6dd4667216aff91f785d32726a81a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3ed5020a192a248fc9f3519bd8ce1557f6dd4667216aff91f785d32726a81a8c->leave($__internal_3ed5020a192a248fc9f3519bd8ce1557f6dd4667216aff91f785d32726a81a8c_prof);

        
        $__internal_5ffdcdc3b46af889e7071cb3fafe73298e421633d4dd095ff13addf6a90f1c2a->leave($__internal_5ffdcdc3b46af889e7071cb3fafe73298e421633d4dd095ff13addf6a90f1c2a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d62671d3b6dcf309ff0184005969d6cd36289f92cab4fba76bd19839e4fabe0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62671d3b6dcf309ff0184005969d6cd36289f92cab4fba76bd19839e4fabe0d->enter($__internal_d62671d3b6dcf309ff0184005969d6cd36289f92cab4fba76bd19839e4fabe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e2be06a372516bc8dcd834d048661b73fd32447fd0520889a2d2cde800050833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2be06a372516bc8dcd834d048661b73fd32447fd0520889a2d2cde800050833->enter($__internal_e2be06a372516bc8dcd834d048661b73fd32447fd0520889a2d2cde800050833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e2be06a372516bc8dcd834d048661b73fd32447fd0520889a2d2cde800050833->leave($__internal_e2be06a372516bc8dcd834d048661b73fd32447fd0520889a2d2cde800050833_prof);

        
        $__internal_d62671d3b6dcf309ff0184005969d6cd36289f92cab4fba76bd19839e4fabe0d->leave($__internal_d62671d3b6dcf309ff0184005969d6cd36289f92cab4fba76bd19839e4fabe0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
