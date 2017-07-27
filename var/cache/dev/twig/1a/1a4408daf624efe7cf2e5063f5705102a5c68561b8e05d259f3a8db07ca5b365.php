<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_02fd538504dbe7b5636f5b81f1d60f02cad56234d385433fadfb2acc4876f8b5 extends Twig_Template
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
        $__internal_ac8465fd15c212c97979afe9ea00a77478c7bd69f08f14004b20091ac3b187ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8465fd15c212c97979afe9ea00a77478c7bd69f08f14004b20091ac3b187ce->enter($__internal_ac8465fd15c212c97979afe9ea00a77478c7bd69f08f14004b20091ac3b187ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_09990d17ed99d05665a7a212df7322572d5fc209423092ff3031d818d2c447b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09990d17ed99d05665a7a212df7322572d5fc209423092ff3031d818d2c447b2->enter($__internal_09990d17ed99d05665a7a212df7322572d5fc209423092ff3031d818d2c447b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ac8465fd15c212c97979afe9ea00a77478c7bd69f08f14004b20091ac3b187ce->leave($__internal_ac8465fd15c212c97979afe9ea00a77478c7bd69f08f14004b20091ac3b187ce_prof);

        
        $__internal_09990d17ed99d05665a7a212df7322572d5fc209423092ff3031d818d2c447b2->leave($__internal_09990d17ed99d05665a7a212df7322572d5fc209423092ff3031d818d2c447b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
