<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b58458fcd96ffaa3cf95f5aa6d9f51dea02e73881bf4d09d52c3d8af61b5a743 extends Twig_Template
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
        $__internal_2e3c64d7d21e285d71f408e6e9a712921becbb95d93266defe469ad5b89e05cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3c64d7d21e285d71f408e6e9a712921becbb95d93266defe469ad5b89e05cc->enter($__internal_2e3c64d7d21e285d71f408e6e9a712921becbb95d93266defe469ad5b89e05cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ddf016dc7ed838205058d7933521b880f77d4290d29807699c35597c41940bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf016dc7ed838205058d7933521b880f77d4290d29807699c35597c41940bf9->enter($__internal_ddf016dc7ed838205058d7933521b880f77d4290d29807699c35597c41940bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2e3c64d7d21e285d71f408e6e9a712921becbb95d93266defe469ad5b89e05cc->leave($__internal_2e3c64d7d21e285d71f408e6e9a712921becbb95d93266defe469ad5b89e05cc_prof);

        
        $__internal_ddf016dc7ed838205058d7933521b880f77d4290d29807699c35597c41940bf9->leave($__internal_ddf016dc7ed838205058d7933521b880f77d4290d29807699c35597c41940bf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
