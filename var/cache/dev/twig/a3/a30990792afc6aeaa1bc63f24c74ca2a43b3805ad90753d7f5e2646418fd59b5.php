<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_e3cc369d20bb4dd8ef407ff3a34e6696f4e140cb216c1ccffa8c8953c3a41be5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1cb24cf5a7c3bb375a6d35df8b1601a3b1cd64fa0d2af334d8fbca460cf7ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1cb24cf5a7c3bb375a6d35df8b1601a3b1cd64fa0d2af334d8fbca460cf7ec3->enter($__internal_a1cb24cf5a7c3bb375a6d35df8b1601a3b1cd64fa0d2af334d8fbca460cf7ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_316cf109aaae7b5bb2dec7292a422c6eb10c217bf81f9ce0deab9c0ad24c9c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316cf109aaae7b5bb2dec7292a422c6eb10c217bf81f9ce0deab9c0ad24c9c0a->enter($__internal_316cf109aaae7b5bb2dec7292a422c6eb10c217bf81f9ce0deab9c0ad24c9c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1cb24cf5a7c3bb375a6d35df8b1601a3b1cd64fa0d2af334d8fbca460cf7ec3->leave($__internal_a1cb24cf5a7c3bb375a6d35df8b1601a3b1cd64fa0d2af334d8fbca460cf7ec3_prof);

        
        $__internal_316cf109aaae7b5bb2dec7292a422c6eb10c217bf81f9ce0deab9c0ad24c9c0a->leave($__internal_316cf109aaae7b5bb2dec7292a422c6eb10c217bf81f9ce0deab9c0ad24c9c0a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b47d0c5d258fc9638262d279a8143704681b599f78056c2633a995ac8035851a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47d0c5d258fc9638262d279a8143704681b599f78056c2633a995ac8035851a->enter($__internal_b47d0c5d258fc9638262d279a8143704681b599f78056c2633a995ac8035851a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8dd0df22e941149e2408f4017cc13067c35c3f7cb7fe3863b7e7bab9b483ab6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd0df22e941149e2408f4017cc13067c35c3f7cb7fe3863b7e7bab9b483ab6e->enter($__internal_8dd0df22e941149e2408f4017cc13067c35c3f7cb7fe3863b7e7bab9b483ab6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_8dd0df22e941149e2408f4017cc13067c35c3f7cb7fe3863b7e7bab9b483ab6e->leave($__internal_8dd0df22e941149e2408f4017cc13067c35c3f7cb7fe3863b7e7bab9b483ab6e_prof);

        
        $__internal_b47d0c5d258fc9638262d279a8143704681b599f78056c2633a995ac8035851a->leave($__internal_b47d0c5d258fc9638262d279a8143704681b599f78056c2633a995ac8035851a_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resource.html.twig");
    }
}
