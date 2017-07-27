<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1bd111e056d3f26202139246aee78f340cef35a88001445b36b071bf3bc5f87e extends Twig_Template
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
        $__internal_17b406445a56034808503cda766a282b1b2d8ea2dedefa33eb070daaea11d2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b406445a56034808503cda766a282b1b2d8ea2dedefa33eb070daaea11d2a0->enter($__internal_17b406445a56034808503cda766a282b1b2d8ea2dedefa33eb070daaea11d2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e5bfb4de5efefdca7c5d6c8ee4173afad1fd206fa584e42839720b47740a2eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bfb4de5efefdca7c5d6c8ee4173afad1fd206fa584e42839720b47740a2eb5->enter($__internal_e5bfb4de5efefdca7c5d6c8ee4173afad1fd206fa584e42839720b47740a2eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_17b406445a56034808503cda766a282b1b2d8ea2dedefa33eb070daaea11d2a0->leave($__internal_17b406445a56034808503cda766a282b1b2d8ea2dedefa33eb070daaea11d2a0_prof);

        
        $__internal_e5bfb4de5efefdca7c5d6c8ee4173afad1fd206fa584e42839720b47740a2eb5->leave($__internal_e5bfb4de5efefdca7c5d6c8ee4173afad1fd206fa584e42839720b47740a2eb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
