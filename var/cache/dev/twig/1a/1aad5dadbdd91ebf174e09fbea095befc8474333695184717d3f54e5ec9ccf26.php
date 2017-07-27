<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7c18034e7764146689a6bd23e535aa1cf4a01ac997b7e252e890e3131a2e8597 extends Twig_Template
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
        $__internal_b30007674edc60712165addb31de87a6dae73665eec713b41876b1d882d14732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b30007674edc60712165addb31de87a6dae73665eec713b41876b1d882d14732->enter($__internal_b30007674edc60712165addb31de87a6dae73665eec713b41876b1d882d14732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_54c024cbdb1e855effeb1cfa1fd627eba70708048669b7a54f9699bb759aa1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c024cbdb1e855effeb1cfa1fd627eba70708048669b7a54f9699bb759aa1fa->enter($__internal_54c024cbdb1e855effeb1cfa1fd627eba70708048669b7a54f9699bb759aa1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b30007674edc60712165addb31de87a6dae73665eec713b41876b1d882d14732->leave($__internal_b30007674edc60712165addb31de87a6dae73665eec713b41876b1d882d14732_prof);

        
        $__internal_54c024cbdb1e855effeb1cfa1fd627eba70708048669b7a54f9699bb759aa1fa->leave($__internal_54c024cbdb1e855effeb1cfa1fd627eba70708048669b7a54f9699bb759aa1fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
