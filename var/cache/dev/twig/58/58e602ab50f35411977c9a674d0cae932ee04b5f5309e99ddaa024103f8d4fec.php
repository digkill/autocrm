<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_4247306c31696338be032dce6c7ed5e38a31263e081f13b62933a304aaf8e26e extends Twig_Template
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
        $__internal_5d2567f61a16da8b6757349f2165dc7faeae7502b29baacb66e4f5759f2ef0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2567f61a16da8b6757349f2165dc7faeae7502b29baacb66e4f5759f2ef0c6->enter($__internal_5d2567f61a16da8b6757349f2165dc7faeae7502b29baacb66e4f5759f2ef0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7eae276d35288ca67d024003d32a560c8c507e27e70130ee003366eac550a7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eae276d35288ca67d024003d32a560c8c507e27e70130ee003366eac550a7e0->enter($__internal_7eae276d35288ca67d024003d32a560c8c507e27e70130ee003366eac550a7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5d2567f61a16da8b6757349f2165dc7faeae7502b29baacb66e4f5759f2ef0c6->leave($__internal_5d2567f61a16da8b6757349f2165dc7faeae7502b29baacb66e4f5759f2ef0c6_prof);

        
        $__internal_7eae276d35288ca67d024003d32a560c8c507e27e70130ee003366eac550a7e0->leave($__internal_7eae276d35288ca67d024003d32a560c8c507e27e70130ee003366eac550a7e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
