<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_34630bc38f6476e53efd756634f1d9a1409aa3bda65483bb2e6054b80540e1ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_29a6c6f2b61a329c85b7051db6e8c46601a21af02480610cdb9cc3d3cfc310ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a6c6f2b61a329c85b7051db6e8c46601a21af02480610cdb9cc3d3cfc310ee->enter($__internal_29a6c6f2b61a329c85b7051db6e8c46601a21af02480610cdb9cc3d3cfc310ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_d1c526663bdd176844e1f66c215d58bf3e41ce130e2962ffdb30789da3ffca3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c526663bdd176844e1f66c215d58bf3e41ce130e2962ffdb30789da3ffca3b->enter($__internal_d1c526663bdd176844e1f66c215d58bf3e41ce130e2962ffdb30789da3ffca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a6c6f2b61a329c85b7051db6e8c46601a21af02480610cdb9cc3d3cfc310ee->leave($__internal_29a6c6f2b61a329c85b7051db6e8c46601a21af02480610cdb9cc3d3cfc310ee_prof);

        
        $__internal_d1c526663bdd176844e1f66c215d58bf3e41ce130e2962ffdb30789da3ffca3b->leave($__internal_d1c526663bdd176844e1f66c215d58bf3e41ce130e2962ffdb30789da3ffca3b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92e7081a487a59e93cd213ee48de5c5414c74f7603d4941603093e279f5cad61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e7081a487a59e93cd213ee48de5c5414c74f7603d4941603093e279f5cad61->enter($__internal_92e7081a487a59e93cd213ee48de5c5414c74f7603d4941603093e279f5cad61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af11f8b977a6995afcea2d3bc00c088245b58bdd2d278fe03a8e2e74cc4328ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af11f8b977a6995afcea2d3bc00c088245b58bdd2d278fe03a8e2e74cc4328ca->enter($__internal_af11f8b977a6995afcea2d3bc00c088245b58bdd2d278fe03a8e2e74cc4328ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_af11f8b977a6995afcea2d3bc00c088245b58bdd2d278fe03a8e2e74cc4328ca->leave($__internal_af11f8b977a6995afcea2d3bc00c088245b58bdd2d278fe03a8e2e74cc4328ca_prof);

        
        $__internal_92e7081a487a59e93cd213ee48de5c5414c74f7603d4941603093e279f5cad61->leave($__internal_92e7081a487a59e93cd213ee48de5c5414c74f7603d4941603093e279f5cad61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
