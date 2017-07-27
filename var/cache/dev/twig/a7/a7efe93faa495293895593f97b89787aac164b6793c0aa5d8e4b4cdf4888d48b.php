<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c6bb9c85f34e80abc3ff8535223e51ffa7ed1514af2437f0d16ca37e98dc7e66 extends Twig_Template
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
        $__internal_89e25dd345b5e899f0f4010f8d4eb086c21dd16c33c8f9245efaba7fec095f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e25dd345b5e899f0f4010f8d4eb086c21dd16c33c8f9245efaba7fec095f37->enter($__internal_89e25dd345b5e899f0f4010f8d4eb086c21dd16c33c8f9245efaba7fec095f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0b97a37fa13b56138ad12476b3ccf1d45c8a7b297de7352266037923d5980a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b97a37fa13b56138ad12476b3ccf1d45c8a7b297de7352266037923d5980a43->enter($__internal_0b97a37fa13b56138ad12476b3ccf1d45c8a7b297de7352266037923d5980a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_89e25dd345b5e899f0f4010f8d4eb086c21dd16c33c8f9245efaba7fec095f37->leave($__internal_89e25dd345b5e899f0f4010f8d4eb086c21dd16c33c8f9245efaba7fec095f37_prof);

        
        $__internal_0b97a37fa13b56138ad12476b3ccf1d45c8a7b297de7352266037923d5980a43->leave($__internal_0b97a37fa13b56138ad12476b3ccf1d45c8a7b297de7352266037923d5980a43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
