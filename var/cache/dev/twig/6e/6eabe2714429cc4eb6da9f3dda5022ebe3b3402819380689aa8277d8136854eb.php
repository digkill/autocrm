<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f106961bd55ea6fe992efb2a918d34b4776648a268d4beb929d1b8fe50d9e7be extends Twig_Template
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
        $__internal_869b6734d4bf1e10c549099201e3abfea93b8536861528262ceb2bdf8165ae89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869b6734d4bf1e10c549099201e3abfea93b8536861528262ceb2bdf8165ae89->enter($__internal_869b6734d4bf1e10c549099201e3abfea93b8536861528262ceb2bdf8165ae89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_24399c0f71db86913289b7afc48853e198811a228f17aa4ff1b098b56db85715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24399c0f71db86913289b7afc48853e198811a228f17aa4ff1b098b56db85715->enter($__internal_24399c0f71db86913289b7afc48853e198811a228f17aa4ff1b098b56db85715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_869b6734d4bf1e10c549099201e3abfea93b8536861528262ceb2bdf8165ae89->leave($__internal_869b6734d4bf1e10c549099201e3abfea93b8536861528262ceb2bdf8165ae89_prof);

        
        $__internal_24399c0f71db86913289b7afc48853e198811a228f17aa4ff1b098b56db85715->leave($__internal_24399c0f71db86913289b7afc48853e198811a228f17aa4ff1b098b56db85715_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
