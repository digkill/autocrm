<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2c9e897f19fae5eed1a7f90da03872ab28c223220316be12dfe33dc7fb5a4706 extends Twig_Template
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
        $__internal_a6b2a57bd2bbf514bdff6784d81bc730cda54b758e3903d9e92d7ec0ca5aac2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b2a57bd2bbf514bdff6784d81bc730cda54b758e3903d9e92d7ec0ca5aac2e->enter($__internal_a6b2a57bd2bbf514bdff6784d81bc730cda54b758e3903d9e92d7ec0ca5aac2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_bfd7b31f87432e993e1e33cb24072ca1c8e452aa0751013d6efacbe1093cadd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd7b31f87432e993e1e33cb24072ca1c8e452aa0751013d6efacbe1093cadd0->enter($__internal_bfd7b31f87432e993e1e33cb24072ca1c8e452aa0751013d6efacbe1093cadd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a6b2a57bd2bbf514bdff6784d81bc730cda54b758e3903d9e92d7ec0ca5aac2e->leave($__internal_a6b2a57bd2bbf514bdff6784d81bc730cda54b758e3903d9e92d7ec0ca5aac2e_prof);

        
        $__internal_bfd7b31f87432e993e1e33cb24072ca1c8e452aa0751013d6efacbe1093cadd0->leave($__internal_bfd7b31f87432e993e1e33cb24072ca1c8e452aa0751013d6efacbe1093cadd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
