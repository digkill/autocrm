<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_49f633c934fd2f8e7db438dc84c1f06996f55ad4e364ff376b0c4c0860abf92b extends Twig_Template
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
        $__internal_634a58f567d13669509b671f0d0ed6bb95501c1d826cdb2e1f98ad43c768b7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634a58f567d13669509b671f0d0ed6bb95501c1d826cdb2e1f98ad43c768b7d1->enter($__internal_634a58f567d13669509b671f0d0ed6bb95501c1d826cdb2e1f98ad43c768b7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a7e677710ae22bbf2721af35dc18fcd5694dff7a2022bc1b37c8967cc9a93f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e677710ae22bbf2721af35dc18fcd5694dff7a2022bc1b37c8967cc9a93f1f->enter($__internal_a7e677710ae22bbf2721af35dc18fcd5694dff7a2022bc1b37c8967cc9a93f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_634a58f567d13669509b671f0d0ed6bb95501c1d826cdb2e1f98ad43c768b7d1->leave($__internal_634a58f567d13669509b671f0d0ed6bb95501c1d826cdb2e1f98ad43c768b7d1_prof);

        
        $__internal_a7e677710ae22bbf2721af35dc18fcd5694dff7a2022bc1b37c8967cc9a93f1f->leave($__internal_a7e677710ae22bbf2721af35dc18fcd5694dff7a2022bc1b37c8967cc9a93f1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
