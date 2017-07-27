<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_8a74c4747dde0ecada49dffab82109da65a80160b38eda1d15f798c1aef0e48d extends Twig_Template
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
        $__internal_4d71fdd430280e37d85729690ddea6bea9b97826e43bd92cccc1f8d01c448d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d71fdd430280e37d85729690ddea6bea9b97826e43bd92cccc1f8d01c448d60->enter($__internal_4d71fdd430280e37d85729690ddea6bea9b97826e43bd92cccc1f8d01c448d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c56e7a1142d0869aa8c77a4a23f2c8c00e1a1e777af97baebaf756736e145ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56e7a1142d0869aa8c77a4a23f2c8c00e1a1e777af97baebaf756736e145ac1->enter($__internal_c56e7a1142d0869aa8c77a4a23f2c8c00e1a1e777af97baebaf756736e145ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4d71fdd430280e37d85729690ddea6bea9b97826e43bd92cccc1f8d01c448d60->leave($__internal_4d71fdd430280e37d85729690ddea6bea9b97826e43bd92cccc1f8d01c448d60_prof);

        
        $__internal_c56e7a1142d0869aa8c77a4a23f2c8c00e1a1e777af97baebaf756736e145ac1->leave($__internal_c56e7a1142d0869aa8c77a4a23f2c8c00e1a1e777af97baebaf756736e145ac1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
