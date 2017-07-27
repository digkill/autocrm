<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3c26aebef77bbb52710497e8efb75f102e2231f697fd4e68e36dbce51eb41dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_032d53a417cc865cfb111af1b898aeae064f1b54765da97b49bd276f05210681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032d53a417cc865cfb111af1b898aeae064f1b54765da97b49bd276f05210681->enter($__internal_032d53a417cc865cfb111af1b898aeae064f1b54765da97b49bd276f05210681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0eb9b42531a0e6c9f5ee8cc4bc94fbd91512328528188cf8d4bda89daf17d73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb9b42531a0e6c9f5ee8cc4bc94fbd91512328528188cf8d4bda89daf17d73c->enter($__internal_0eb9b42531a0e6c9f5ee8cc4bc94fbd91512328528188cf8d4bda89daf17d73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_032d53a417cc865cfb111af1b898aeae064f1b54765da97b49bd276f05210681->leave($__internal_032d53a417cc865cfb111af1b898aeae064f1b54765da97b49bd276f05210681_prof);

        
        $__internal_0eb9b42531a0e6c9f5ee8cc4bc94fbd91512328528188cf8d4bda89daf17d73c->leave($__internal_0eb9b42531a0e6c9f5ee8cc4bc94fbd91512328528188cf8d4bda89daf17d73c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe5f2d10321ca68656dd7715292ab2a7560543817280b21692756c23ecb93def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5f2d10321ca68656dd7715292ab2a7560543817280b21692756c23ecb93def->enter($__internal_fe5f2d10321ca68656dd7715292ab2a7560543817280b21692756c23ecb93def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_376ea11f6aa1b29f58aa3ef78d2b5a163c24c62945cfba5e14fc9af2c502f26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376ea11f6aa1b29f58aa3ef78d2b5a163c24c62945cfba5e14fc9af2c502f26d->enter($__internal_376ea11f6aa1b29f58aa3ef78d2b5a163c24c62945cfba5e14fc9af2c502f26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_376ea11f6aa1b29f58aa3ef78d2b5a163c24c62945cfba5e14fc9af2c502f26d->leave($__internal_376ea11f6aa1b29f58aa3ef78d2b5a163c24c62945cfba5e14fc9af2c502f26d_prof);

        
        $__internal_fe5f2d10321ca68656dd7715292ab2a7560543817280b21692756c23ecb93def->leave($__internal_fe5f2d10321ca68656dd7715292ab2a7560543817280b21692756c23ecb93def_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
