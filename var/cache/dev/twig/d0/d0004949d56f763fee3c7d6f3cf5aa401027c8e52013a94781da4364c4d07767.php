<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6e5c335ec351021e0fead7c2f18c040224dfa7cbe038120622f1fe6823d0eb2f extends Twig_Template
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
        $__internal_2a0bf8f5ead1673380fd70b2b874de7ed170b366ad4d0a0b1d159cbbd7b73760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0bf8f5ead1673380fd70b2b874de7ed170b366ad4d0a0b1d159cbbd7b73760->enter($__internal_2a0bf8f5ead1673380fd70b2b874de7ed170b366ad4d0a0b1d159cbbd7b73760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_129c64a57e89e799a2e62c2cfb1960cf2f18edca12dc958a281de1b83cdc4456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129c64a57e89e799a2e62c2cfb1960cf2f18edca12dc958a281de1b83cdc4456->enter($__internal_129c64a57e89e799a2e62c2cfb1960cf2f18edca12dc958a281de1b83cdc4456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2a0bf8f5ead1673380fd70b2b874de7ed170b366ad4d0a0b1d159cbbd7b73760->leave($__internal_2a0bf8f5ead1673380fd70b2b874de7ed170b366ad4d0a0b1d159cbbd7b73760_prof);

        
        $__internal_129c64a57e89e799a2e62c2cfb1960cf2f18edca12dc958a281de1b83cdc4456->leave($__internal_129c64a57e89e799a2e62c2cfb1960cf2f18edca12dc958a281de1b83cdc4456_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
