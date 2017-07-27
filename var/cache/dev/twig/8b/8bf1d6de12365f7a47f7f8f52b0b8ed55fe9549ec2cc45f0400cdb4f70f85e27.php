<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7d74b4373325be32a8ee276240b47695579978ec41df1547e65286293820a73d extends Twig_Template
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
        $__internal_e2117f50846c2115e2720ef840158ad97b8c0425605e18809e30174d7ed09833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2117f50846c2115e2720ef840158ad97b8c0425605e18809e30174d7ed09833->enter($__internal_e2117f50846c2115e2720ef840158ad97b8c0425605e18809e30174d7ed09833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_0b90b02acabdcfa669b6d8b8bac394d0cd8d66de8331336b6797e2145f491289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b90b02acabdcfa669b6d8b8bac394d0cd8d66de8331336b6797e2145f491289->enter($__internal_0b90b02acabdcfa669b6d8b8bac394d0cd8d66de8331336b6797e2145f491289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_e2117f50846c2115e2720ef840158ad97b8c0425605e18809e30174d7ed09833->leave($__internal_e2117f50846c2115e2720ef840158ad97b8c0425605e18809e30174d7ed09833_prof);

        
        $__internal_0b90b02acabdcfa669b6d8b8bac394d0cd8d66de8331336b6797e2145f491289->leave($__internal_0b90b02acabdcfa669b6d8b8bac394d0cd8d66de8331336b6797e2145f491289_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
