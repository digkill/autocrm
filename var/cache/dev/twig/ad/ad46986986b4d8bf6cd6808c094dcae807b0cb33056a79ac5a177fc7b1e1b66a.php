<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ef4defaf1c526d5014f0f13b5cb5e550dddb2c37bcb94d043917fa9d0a1d6a9c extends Twig_Template
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
        $__internal_155a7d83bd3f2c8fdc70b57465ab580363082b734b8d8656899406a0c9b42260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155a7d83bd3f2c8fdc70b57465ab580363082b734b8d8656899406a0c9b42260->enter($__internal_155a7d83bd3f2c8fdc70b57465ab580363082b734b8d8656899406a0c9b42260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0864765b473455b283f4fd40b9dd2e95d1f9df734ed1d215a1f211376934e88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0864765b473455b283f4fd40b9dd2e95d1f9df734ed1d215a1f211376934e88b->enter($__internal_0864765b473455b283f4fd40b9dd2e95d1f9df734ed1d215a1f211376934e88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_155a7d83bd3f2c8fdc70b57465ab580363082b734b8d8656899406a0c9b42260->leave($__internal_155a7d83bd3f2c8fdc70b57465ab580363082b734b8d8656899406a0c9b42260_prof);

        
        $__internal_0864765b473455b283f4fd40b9dd2e95d1f9df734ed1d215a1f211376934e88b->leave($__internal_0864765b473455b283f4fd40b9dd2e95d1f9df734ed1d215a1f211376934e88b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
