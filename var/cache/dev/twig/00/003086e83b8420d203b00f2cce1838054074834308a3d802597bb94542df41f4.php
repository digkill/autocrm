<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7899c2b8e7de1b12847d04f3af1aa7ed1b6d6bd5cc37b63b05dd308dd2e67aca extends Twig_Template
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
        $__internal_be96759983fc74d3bce01222345d05c0a6e90aea59f26f9c5190c1bc14e93f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be96759983fc74d3bce01222345d05c0a6e90aea59f26f9c5190c1bc14e93f07->enter($__internal_be96759983fc74d3bce01222345d05c0a6e90aea59f26f9c5190c1bc14e93f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_7a5c68d66b4175784d1d35a991cf84cbbe138d0d2213f4db76c93da5df89c352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5c68d66b4175784d1d35a991cf84cbbe138d0d2213f4db76c93da5df89c352->enter($__internal_7a5c68d66b4175784d1d35a991cf84cbbe138d0d2213f4db76c93da5df89c352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_be96759983fc74d3bce01222345d05c0a6e90aea59f26f9c5190c1bc14e93f07->leave($__internal_be96759983fc74d3bce01222345d05c0a6e90aea59f26f9c5190c1bc14e93f07_prof);

        
        $__internal_7a5c68d66b4175784d1d35a991cf84cbbe138d0d2213f4db76c93da5df89c352->leave($__internal_7a5c68d66b4175784d1d35a991cf84cbbe138d0d2213f4db76c93da5df89c352_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2045818c4757805a7c5824cf9659ce44d2973b0cfc15dc3ea3c2096cda1c839b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2045818c4757805a7c5824cf9659ce44d2973b0cfc15dc3ea3c2096cda1c839b->enter($__internal_2045818c4757805a7c5824cf9659ce44d2973b0cfc15dc3ea3c2096cda1c839b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4bacbbfaf30625e4bcd910b5d8190d8aef2a3a8e724f943591abe6bed341ea0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bacbbfaf30625e4bcd910b5d8190d8aef2a3a8e724f943591abe6bed341ea0f->enter($__internal_4bacbbfaf30625e4bcd910b5d8190d8aef2a3a8e724f943591abe6bed341ea0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4bacbbfaf30625e4bcd910b5d8190d8aef2a3a8e724f943591abe6bed341ea0f->leave($__internal_4bacbbfaf30625e4bcd910b5d8190d8aef2a3a8e724f943591abe6bed341ea0f_prof);

        
        $__internal_2045818c4757805a7c5824cf9659ce44d2973b0cfc15dc3ea3c2096cda1c839b->leave($__internal_2045818c4757805a7c5824cf9659ce44d2973b0cfc15dc3ea3c2096cda1c839b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1558872e5f62eddf128a609742e10cf40b532976367a1424792025dfe12c5294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1558872e5f62eddf128a609742e10cf40b532976367a1424792025dfe12c5294->enter($__internal_1558872e5f62eddf128a609742e10cf40b532976367a1424792025dfe12c5294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_efb4e21934a79772b990aa6f5912d6a18b8d0b65194a52b867089f3e2cc70f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb4e21934a79772b990aa6f5912d6a18b8d0b65194a52b867089f3e2cc70f23->enter($__internal_efb4e21934a79772b990aa6f5912d6a18b8d0b65194a52b867089f3e2cc70f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_efb4e21934a79772b990aa6f5912d6a18b8d0b65194a52b867089f3e2cc70f23->leave($__internal_efb4e21934a79772b990aa6f5912d6a18b8d0b65194a52b867089f3e2cc70f23_prof);

        
        $__internal_1558872e5f62eddf128a609742e10cf40b532976367a1424792025dfe12c5294->leave($__internal_1558872e5f62eddf128a609742e10cf40b532976367a1424792025dfe12c5294_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8a0d4eda6c7575d1ad1a742cb3bc6342092cea48de47b3f5b4779c570d2f1c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0d4eda6c7575d1ad1a742cb3bc6342092cea48de47b3f5b4779c570d2f1c1a->enter($__internal_8a0d4eda6c7575d1ad1a742cb3bc6342092cea48de47b3f5b4779c570d2f1c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f3efffabd15b30af9a0cceed396ec2bc8244591aca44fdcf302138f4db0a39cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3efffabd15b30af9a0cceed396ec2bc8244591aca44fdcf302138f4db0a39cf->enter($__internal_f3efffabd15b30af9a0cceed396ec2bc8244591aca44fdcf302138f4db0a39cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f3efffabd15b30af9a0cceed396ec2bc8244591aca44fdcf302138f4db0a39cf->leave($__internal_f3efffabd15b30af9a0cceed396ec2bc8244591aca44fdcf302138f4db0a39cf_prof);

        
        $__internal_8a0d4eda6c7575d1ad1a742cb3bc6342092cea48de47b3f5b4779c570d2f1c1a->leave($__internal_8a0d4eda6c7575d1ad1a742cb3bc6342092cea48de47b3f5b4779c570d2f1c1a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
