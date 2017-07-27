<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2213121ecb0a18d6f589c9c203eaeab1a3b06116231fddbf503b1288f7b3c254 extends Twig_Template
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
        $__internal_70278856c99f377ff53c6d3e7799d0a6eb1f92e913e124221b5a04467b2efd86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70278856c99f377ff53c6d3e7799d0a6eb1f92e913e124221b5a04467b2efd86->enter($__internal_70278856c99f377ff53c6d3e7799d0a6eb1f92e913e124221b5a04467b2efd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_6ab22841987aa284a86c7fee3aebbe92ad8574aa55a3983cae28c69a18958678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab22841987aa284a86c7fee3aebbe92ad8574aa55a3983cae28c69a18958678->enter($__internal_6ab22841987aa284a86c7fee3aebbe92ad8574aa55a3983cae28c69a18958678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_70278856c99f377ff53c6d3e7799d0a6eb1f92e913e124221b5a04467b2efd86->leave($__internal_70278856c99f377ff53c6d3e7799d0a6eb1f92e913e124221b5a04467b2efd86_prof);

        
        $__internal_6ab22841987aa284a86c7fee3aebbe92ad8574aa55a3983cae28c69a18958678->leave($__internal_6ab22841987aa284a86c7fee3aebbe92ad8574aa55a3983cae28c69a18958678_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
