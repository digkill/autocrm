<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_17028a05e0b8773a3c23206889d52e25c7563a1eeea025bd160eb75aa13b5990 extends Twig_Template
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
        $__internal_b7751f0355cb1d5534dbe6966508a1179ccbac0b1c92cd7098c90a7a688c28a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7751f0355cb1d5534dbe6966508a1179ccbac0b1c92cd7098c90a7a688c28a8->enter($__internal_b7751f0355cb1d5534dbe6966508a1179ccbac0b1c92cd7098c90a7a688c28a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7cc51d6d08ffb40ee62435d5e6b7f0739f2b38ac9c90f9e0a3f33a852f84d179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc51d6d08ffb40ee62435d5e6b7f0739f2b38ac9c90f9e0a3f33a852f84d179->enter($__internal_7cc51d6d08ffb40ee62435d5e6b7f0739f2b38ac9c90f9e0a3f33a852f84d179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b7751f0355cb1d5534dbe6966508a1179ccbac0b1c92cd7098c90a7a688c28a8->leave($__internal_b7751f0355cb1d5534dbe6966508a1179ccbac0b1c92cd7098c90a7a688c28a8_prof);

        
        $__internal_7cc51d6d08ffb40ee62435d5e6b7f0739f2b38ac9c90f9e0a3f33a852f84d179->leave($__internal_7cc51d6d08ffb40ee62435d5e6b7f0739f2b38ac9c90f9e0a3f33a852f84d179_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
