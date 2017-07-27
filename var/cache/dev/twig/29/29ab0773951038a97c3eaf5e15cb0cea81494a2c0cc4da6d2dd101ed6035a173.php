<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_05f18289e52b7a66141e778c4cf7e736bf475637bc547589f289452473fdb465 extends Twig_Template
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
        $__internal_cd60d72373718ba5bddb0e2134291ce7d31e302d12fb29e4af25f6ac053fff50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd60d72373718ba5bddb0e2134291ce7d31e302d12fb29e4af25f6ac053fff50->enter($__internal_cd60d72373718ba5bddb0e2134291ce7d31e302d12fb29e4af25f6ac053fff50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_26d635c6e944f9072a940adb8f86a7fe18b412b8f95e589f9fa34f3b6d295056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d635c6e944f9072a940adb8f86a7fe18b412b8f95e589f9fa34f3b6d295056->enter($__internal_26d635c6e944f9072a940adb8f86a7fe18b412b8f95e589f9fa34f3b6d295056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cd60d72373718ba5bddb0e2134291ce7d31e302d12fb29e4af25f6ac053fff50->leave($__internal_cd60d72373718ba5bddb0e2134291ce7d31e302d12fb29e4af25f6ac053fff50_prof);

        
        $__internal_26d635c6e944f9072a940adb8f86a7fe18b412b8f95e589f9fa34f3b6d295056->leave($__internal_26d635c6e944f9072a940adb8f86a7fe18b412b8f95e589f9fa34f3b6d295056_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
