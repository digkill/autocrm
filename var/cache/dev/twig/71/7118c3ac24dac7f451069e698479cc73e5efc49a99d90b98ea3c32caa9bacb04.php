<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_edfc8757fb97eb7117325760995364c8999d03bb95a7b0b7f647a8bc34cc9061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_61f556df598cb12db110c988e36a1ea3d3148f591a9da6af4c796a17383bbb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f556df598cb12db110c988e36a1ea3d3148f591a9da6af4c796a17383bbb42->enter($__internal_61f556df598cb12db110c988e36a1ea3d3148f591a9da6af4c796a17383bbb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_604327d2a3e024c1a917d86463a7352a9f6b5e2d975d941a3c92b802e9bd8d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604327d2a3e024c1a917d86463a7352a9f6b5e2d975d941a3c92b802e9bd8d5b->enter($__internal_604327d2a3e024c1a917d86463a7352a9f6b5e2d975d941a3c92b802e9bd8d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61f556df598cb12db110c988e36a1ea3d3148f591a9da6af4c796a17383bbb42->leave($__internal_61f556df598cb12db110c988e36a1ea3d3148f591a9da6af4c796a17383bbb42_prof);

        
        $__internal_604327d2a3e024c1a917d86463a7352a9f6b5e2d975d941a3c92b802e9bd8d5b->leave($__internal_604327d2a3e024c1a917d86463a7352a9f6b5e2d975d941a3c92b802e9bd8d5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b5be76dbb618cc7f1af243c4c4b45a54eeb543abc389eb3dd58fe115aa27f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5be76dbb618cc7f1af243c4c4b45a54eeb543abc389eb3dd58fe115aa27f3b->enter($__internal_8b5be76dbb618cc7f1af243c4c4b45a54eeb543abc389eb3dd58fe115aa27f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5a640c32cc1c7c3376f67826cd59558acbd319a8f0887b1f4c1a0812d19d484f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a640c32cc1c7c3376f67826cd59558acbd319a8f0887b1f4c1a0812d19d484f->enter($__internal_5a640c32cc1c7c3376f67826cd59558acbd319a8f0887b1f4c1a0812d19d484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5a640c32cc1c7c3376f67826cd59558acbd319a8f0887b1f4c1a0812d19d484f->leave($__internal_5a640c32cc1c7c3376f67826cd59558acbd319a8f0887b1f4c1a0812d19d484f_prof);

        
        $__internal_8b5be76dbb618cc7f1af243c4c4b45a54eeb543abc389eb3dd58fe115aa27f3b->leave($__internal_8b5be76dbb618cc7f1af243c4c4b45a54eeb543abc389eb3dd58fe115aa27f3b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
