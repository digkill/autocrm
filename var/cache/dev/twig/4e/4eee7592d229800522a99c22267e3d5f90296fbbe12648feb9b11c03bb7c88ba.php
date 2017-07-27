<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_64c04d8a7212f8b37d66889b0a243dc14a846279a4707721cc4eabcf26068bac extends Twig_Template
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
        $__internal_999014e78a9801abe0081abf9e3edd5e1edff602c4710d0179e9598ef5fd63c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999014e78a9801abe0081abf9e3edd5e1edff602c4710d0179e9598ef5fd63c4->enter($__internal_999014e78a9801abe0081abf9e3edd5e1edff602c4710d0179e9598ef5fd63c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_cf8ad20e5ab6dc851055a6647bcb569b26aeeb721a02e0e144e16db97a897568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8ad20e5ab6dc851055a6647bcb569b26aeeb721a02e0e144e16db97a897568->enter($__internal_cf8ad20e5ab6dc851055a6647bcb569b26aeeb721a02e0e144e16db97a897568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_999014e78a9801abe0081abf9e3edd5e1edff602c4710d0179e9598ef5fd63c4->leave($__internal_999014e78a9801abe0081abf9e3edd5e1edff602c4710d0179e9598ef5fd63c4_prof);

        
        $__internal_cf8ad20e5ab6dc851055a6647bcb569b26aeeb721a02e0e144e16db97a897568->leave($__internal_cf8ad20e5ab6dc851055a6647bcb569b26aeeb721a02e0e144e16db97a897568_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
