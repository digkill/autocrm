<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0aa6cc26e6e657c5b6778c36edd9ae366688fd3d25b331bfd14841af40ec4cfd extends Twig_Template
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
        $__internal_aa004fde8e99aa7a6fc78e58d2b7dab7dea1da47c64217500e54692c77f7209b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa004fde8e99aa7a6fc78e58d2b7dab7dea1da47c64217500e54692c77f7209b->enter($__internal_aa004fde8e99aa7a6fc78e58d2b7dab7dea1da47c64217500e54692c77f7209b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_249bfe2969ad2d56a2ff73f9b95a49f79c260b767d6c231ccbb004b58200a478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249bfe2969ad2d56a2ff73f9b95a49f79c260b767d6c231ccbb004b58200a478->enter($__internal_249bfe2969ad2d56a2ff73f9b95a49f79c260b767d6c231ccbb004b58200a478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_aa004fde8e99aa7a6fc78e58d2b7dab7dea1da47c64217500e54692c77f7209b->leave($__internal_aa004fde8e99aa7a6fc78e58d2b7dab7dea1da47c64217500e54692c77f7209b_prof);

        
        $__internal_249bfe2969ad2d56a2ff73f9b95a49f79c260b767d6c231ccbb004b58200a478->leave($__internal_249bfe2969ad2d56a2ff73f9b95a49f79c260b767d6c231ccbb004b58200a478_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
