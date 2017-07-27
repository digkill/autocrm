<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_172d1c184c65ed5b683b31ef4d5aa3b70927b9086077568fc19dd9b9c3080056 extends Twig_Template
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
        $__internal_20c527b1af85d98be8d15d3e1bd73cca3bc73d3e0f46e4c5ece08f5e684b46a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c527b1af85d98be8d15d3e1bd73cca3bc73d3e0f46e4c5ece08f5e684b46a6->enter($__internal_20c527b1af85d98be8d15d3e1bd73cca3bc73d3e0f46e4c5ece08f5e684b46a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3b7c48fa1569b05c7e3c5e7f2af254a544ef2d1b14af9da8fe34c23d7bbb2e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7c48fa1569b05c7e3c5e7f2af254a544ef2d1b14af9da8fe34c23d7bbb2e85->enter($__internal_3b7c48fa1569b05c7e3c5e7f2af254a544ef2d1b14af9da8fe34c23d7bbb2e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_20c527b1af85d98be8d15d3e1bd73cca3bc73d3e0f46e4c5ece08f5e684b46a6->leave($__internal_20c527b1af85d98be8d15d3e1bd73cca3bc73d3e0f46e4c5ece08f5e684b46a6_prof);

        
        $__internal_3b7c48fa1569b05c7e3c5e7f2af254a544ef2d1b14af9da8fe34c23d7bbb2e85->leave($__internal_3b7c48fa1569b05c7e3c5e7f2af254a544ef2d1b14af9da8fe34c23d7bbb2e85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
