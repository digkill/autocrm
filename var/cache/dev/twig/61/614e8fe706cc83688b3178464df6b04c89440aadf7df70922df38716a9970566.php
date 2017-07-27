<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8d9dfd32edf32f488edd4f2fdf84a29ef45c28ac86b30ba23ad9d136d4e9c821 extends Twig_Template
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
        $__internal_85c9ed6dae38a5388e738dc728bea6666f6d1aef3d28c1bf6454df094ddfd673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c9ed6dae38a5388e738dc728bea6666f6d1aef3d28c1bf6454df094ddfd673->enter($__internal_85c9ed6dae38a5388e738dc728bea6666f6d1aef3d28c1bf6454df094ddfd673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f5070c225103ac997b6f8338e717c2d24398e58b304349695d12a13f48b9c117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5070c225103ac997b6f8338e717c2d24398e58b304349695d12a13f48b9c117->enter($__internal_f5070c225103ac997b6f8338e717c2d24398e58b304349695d12a13f48b9c117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_85c9ed6dae38a5388e738dc728bea6666f6d1aef3d28c1bf6454df094ddfd673->leave($__internal_85c9ed6dae38a5388e738dc728bea6666f6d1aef3d28c1bf6454df094ddfd673_prof);

        
        $__internal_f5070c225103ac997b6f8338e717c2d24398e58b304349695d12a13f48b9c117->leave($__internal_f5070c225103ac997b6f8338e717c2d24398e58b304349695d12a13f48b9c117_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
