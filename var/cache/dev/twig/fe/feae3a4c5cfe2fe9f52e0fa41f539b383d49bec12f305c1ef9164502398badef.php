<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_31332b19cf7bf57dff68b3d5b6625a65a74bd87d1fd0e2b34bfc320d05e3c95e extends Twig_Template
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
        $__internal_16393a9a0611be96cdfedb59beb5c70de41fa2ad5feb355d63e55d1081e8f94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16393a9a0611be96cdfedb59beb5c70de41fa2ad5feb355d63e55d1081e8f94c->enter($__internal_16393a9a0611be96cdfedb59beb5c70de41fa2ad5feb355d63e55d1081e8f94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6553a69ca26936266ad47042456ae751fce159eba37612f3507dd1595fdc160b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6553a69ca26936266ad47042456ae751fce159eba37612f3507dd1595fdc160b->enter($__internal_6553a69ca26936266ad47042456ae751fce159eba37612f3507dd1595fdc160b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_16393a9a0611be96cdfedb59beb5c70de41fa2ad5feb355d63e55d1081e8f94c->leave($__internal_16393a9a0611be96cdfedb59beb5c70de41fa2ad5feb355d63e55d1081e8f94c_prof);

        
        $__internal_6553a69ca26936266ad47042456ae751fce159eba37612f3507dd1595fdc160b->leave($__internal_6553a69ca26936266ad47042456ae751fce159eba37612f3507dd1595fdc160b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
