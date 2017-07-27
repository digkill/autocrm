<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_2fc0c3d917fe2c142ed986587055ac355ed4e9d89c94e4e9e21416e23a863d29 extends Twig_Template
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
        $__internal_e260622585e21bc64f5b033a024705db0e3921fb6d708851b7763c82c272e42c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e260622585e21bc64f5b033a024705db0e3921fb6d708851b7763c82c272e42c->enter($__internal_e260622585e21bc64f5b033a024705db0e3921fb6d708851b7763c82c272e42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_47929592164d49313103647997cfc45a0d490e7f11518d007837daae4a45e8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47929592164d49313103647997cfc45a0d490e7f11518d007837daae4a45e8e6->enter($__internal_47929592164d49313103647997cfc45a0d490e7f11518d007837daae4a45e8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e260622585e21bc64f5b033a024705db0e3921fb6d708851b7763c82c272e42c->leave($__internal_e260622585e21bc64f5b033a024705db0e3921fb6d708851b7763c82c272e42c_prof);

        
        $__internal_47929592164d49313103647997cfc45a0d490e7f11518d007837daae4a45e8e6->leave($__internal_47929592164d49313103647997cfc45a0d490e7f11518d007837daae4a45e8e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
