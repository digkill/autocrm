<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_0cdfcfe94b340b5799bf4c721bf27417c901d8c17aee8576e533838715161392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cff5f472ffd894e7e06cb3b0b43abc1a73967a78a9e0ee88ccf49f6001630763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff5f472ffd894e7e06cb3b0b43abc1a73967a78a9e0ee88ccf49f6001630763->enter($__internal_cff5f472ffd894e7e06cb3b0b43abc1a73967a78a9e0ee88ccf49f6001630763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_df83b38f96fc9873fd95ee0775a36fc0a4efbd061fee68f69a9bba25941d35b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df83b38f96fc9873fd95ee0775a36fc0a4efbd061fee68f69a9bba25941d35b6->enter($__internal_df83b38f96fc9873fd95ee0775a36fc0a4efbd061fee68f69a9bba25941d35b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_cff5f472ffd894e7e06cb3b0b43abc1a73967a78a9e0ee88ccf49f6001630763->leave($__internal_cff5f472ffd894e7e06cb3b0b43abc1a73967a78a9e0ee88ccf49f6001630763_prof);

        
        $__internal_df83b38f96fc9873fd95ee0775a36fc0a4efbd061fee68f69a9bba25941d35b6->leave($__internal_df83b38f96fc9873fd95ee0775a36fc0a4efbd061fee68f69a9bba25941d35b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
