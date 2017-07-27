<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_be4edad31c0ae331f4cd47a483d4c164f13debb532457554028d837c8bbff672 extends Twig_Template
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
        $__internal_705f7a0699e6cba7062791eb7f614d2a8c03060b35f7021b404ab963f36426c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705f7a0699e6cba7062791eb7f614d2a8c03060b35f7021b404ab963f36426c8->enter($__internal_705f7a0699e6cba7062791eb7f614d2a8c03060b35f7021b404ab963f36426c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_66039d8d9329888266c897a1ee49a47e5db293aa1d2367f01cef68861b9f7aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66039d8d9329888266c897a1ee49a47e5db293aa1d2367f01cef68861b9f7aa9->enter($__internal_66039d8d9329888266c897a1ee49a47e5db293aa1d2367f01cef68861b9f7aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_705f7a0699e6cba7062791eb7f614d2a8c03060b35f7021b404ab963f36426c8->leave($__internal_705f7a0699e6cba7062791eb7f614d2a8c03060b35f7021b404ab963f36426c8_prof);

        
        $__internal_66039d8d9329888266c897a1ee49a47e5db293aa1d2367f01cef68861b9f7aa9->leave($__internal_66039d8d9329888266c897a1ee49a47e5db293aa1d2367f01cef68861b9f7aa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
