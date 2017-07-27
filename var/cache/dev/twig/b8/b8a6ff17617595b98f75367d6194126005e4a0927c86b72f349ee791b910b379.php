<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a3f5147bab000034328256dbd7bd84b320189fcaed0d0cc99baafe08505e8db2 extends Twig_Template
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
        $__internal_d6c505e3e097dbcc8de30c3f4dceb74d6437e4ba5aefec5a349b4e24a38096b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c505e3e097dbcc8de30c3f4dceb74d6437e4ba5aefec5a349b4e24a38096b3->enter($__internal_d6c505e3e097dbcc8de30c3f4dceb74d6437e4ba5aefec5a349b4e24a38096b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_64fadaefeee08d8c99ac6a581c10a5460dc6747c9df0218b02c9da2a7ebb645e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fadaefeee08d8c99ac6a581c10a5460dc6747c9df0218b02c9da2a7ebb645e->enter($__internal_64fadaefeee08d8c99ac6a581c10a5460dc6747c9df0218b02c9da2a7ebb645e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d6c505e3e097dbcc8de30c3f4dceb74d6437e4ba5aefec5a349b4e24a38096b3->leave($__internal_d6c505e3e097dbcc8de30c3f4dceb74d6437e4ba5aefec5a349b4e24a38096b3_prof);

        
        $__internal_64fadaefeee08d8c99ac6a581c10a5460dc6747c9df0218b02c9da2a7ebb645e->leave($__internal_64fadaefeee08d8c99ac6a581c10a5460dc6747c9df0218b02c9da2a7ebb645e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
