<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8b6e3628f6d2b161c790441e7adb38b54913f25466686f73c8a8558fb2ec4c29 extends Twig_Template
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
        $__internal_8d28edf69958ac2f6c60431df5cd4938a3c35e3d560f294e1940c7bbf629a93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d28edf69958ac2f6c60431df5cd4938a3c35e3d560f294e1940c7bbf629a93b->enter($__internal_8d28edf69958ac2f6c60431df5cd4938a3c35e3d560f294e1940c7bbf629a93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8bc8056b945cae437353add4fbf22aca55c9e253329a89b0d2e440ed0ee12e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc8056b945cae437353add4fbf22aca55c9e253329a89b0d2e440ed0ee12e68->enter($__internal_8bc8056b945cae437353add4fbf22aca55c9e253329a89b0d2e440ed0ee12e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8d28edf69958ac2f6c60431df5cd4938a3c35e3d560f294e1940c7bbf629a93b->leave($__internal_8d28edf69958ac2f6c60431df5cd4938a3c35e3d560f294e1940c7bbf629a93b_prof);

        
        $__internal_8bc8056b945cae437353add4fbf22aca55c9e253329a89b0d2e440ed0ee12e68->leave($__internal_8bc8056b945cae437353add4fbf22aca55c9e253329a89b0d2e440ed0ee12e68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
