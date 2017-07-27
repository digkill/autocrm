<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_887ba0b8a7a442822e4239e913370297480edf95c64f25b0048334d085705d89 extends Twig_Template
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
        $__internal_cf2bb2493fb1c4e90e77189dfb6b185ed501797c28ece7aff694025b5d7b4b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2bb2493fb1c4e90e77189dfb6b185ed501797c28ece7aff694025b5d7b4b26->enter($__internal_cf2bb2493fb1c4e90e77189dfb6b185ed501797c28ece7aff694025b5d7b4b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_63c71385f0a0f29ff18add24ecb367fef94c7ba4204a7e7c092fabf5a48646a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c71385f0a0f29ff18add24ecb367fef94c7ba4204a7e7c092fabf5a48646a5->enter($__internal_63c71385f0a0f29ff18add24ecb367fef94c7ba4204a7e7c092fabf5a48646a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cf2bb2493fb1c4e90e77189dfb6b185ed501797c28ece7aff694025b5d7b4b26->leave($__internal_cf2bb2493fb1c4e90e77189dfb6b185ed501797c28ece7aff694025b5d7b4b26_prof);

        
        $__internal_63c71385f0a0f29ff18add24ecb367fef94c7ba4204a7e7c092fabf5a48646a5->leave($__internal_63c71385f0a0f29ff18add24ecb367fef94c7ba4204a7e7c092fabf5a48646a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
