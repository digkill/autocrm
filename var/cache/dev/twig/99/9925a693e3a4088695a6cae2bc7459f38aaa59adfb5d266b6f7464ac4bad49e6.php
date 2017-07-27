<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_269ab96254c665998dee48c0df6fdbe6d6b6acb8a9228c82b3a8092d388a5324 extends Twig_Template
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
        $__internal_8e0b1bcb745c9ddcc70ad99ff34476df6d27073f10f6f5300055999e36d1be84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0b1bcb745c9ddcc70ad99ff34476df6d27073f10f6f5300055999e36d1be84->enter($__internal_8e0b1bcb745c9ddcc70ad99ff34476df6d27073f10f6f5300055999e36d1be84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_fbb4c9acc9df523443b508a764965fa8008a4b4a10fa71c6d2e250cddafdeb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb4c9acc9df523443b508a764965fa8008a4b4a10fa71c6d2e250cddafdeb32->enter($__internal_fbb4c9acc9df523443b508a764965fa8008a4b4a10fa71c6d2e250cddafdeb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8e0b1bcb745c9ddcc70ad99ff34476df6d27073f10f6f5300055999e36d1be84->leave($__internal_8e0b1bcb745c9ddcc70ad99ff34476df6d27073f10f6f5300055999e36d1be84_prof);

        
        $__internal_fbb4c9acc9df523443b508a764965fa8008a4b4a10fa71c6d2e250cddafdeb32->leave($__internal_fbb4c9acc9df523443b508a764965fa8008a4b4a10fa71c6d2e250cddafdeb32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
