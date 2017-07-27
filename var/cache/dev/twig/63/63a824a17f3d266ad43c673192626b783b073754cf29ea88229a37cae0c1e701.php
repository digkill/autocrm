<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_342772fb491c762e8cc882c4d1da498ab4d9b2d4539e34a60454501205eb3756 extends Twig_Template
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
        $__internal_5819370ab5dfb39c0a44e33a8bdd03dc99cf049007c21413aca885ea4b92c408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5819370ab5dfb39c0a44e33a8bdd03dc99cf049007c21413aca885ea4b92c408->enter($__internal_5819370ab5dfb39c0a44e33a8bdd03dc99cf049007c21413aca885ea4b92c408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3500932f9b90f0ed9f1ca18229d0abca4f661ed11d62e41b7d8dec9dacc41756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3500932f9b90f0ed9f1ca18229d0abca4f661ed11d62e41b7d8dec9dacc41756->enter($__internal_3500932f9b90f0ed9f1ca18229d0abca4f661ed11d62e41b7d8dec9dacc41756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5819370ab5dfb39c0a44e33a8bdd03dc99cf049007c21413aca885ea4b92c408->leave($__internal_5819370ab5dfb39c0a44e33a8bdd03dc99cf049007c21413aca885ea4b92c408_prof);

        
        $__internal_3500932f9b90f0ed9f1ca18229d0abca4f661ed11d62e41b7d8dec9dacc41756->leave($__internal_3500932f9b90f0ed9f1ca18229d0abca4f661ed11d62e41b7d8dec9dacc41756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
