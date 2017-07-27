<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_08e78cd5e606f72349c41ce0691806b904fb13ed4dd286c145421fe42d66ca26 extends Twig_Template
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
        $__internal_4116b134147a6265c31dd4f174763376b25f0eeea53243e863e991ccd8791fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4116b134147a6265c31dd4f174763376b25f0eeea53243e863e991ccd8791fa4->enter($__internal_4116b134147a6265c31dd4f174763376b25f0eeea53243e863e991ccd8791fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_cd43f8ba731522e95cefd7aeecdc7bc05a7d438d978a0d0e3d7fd930006850f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd43f8ba731522e95cefd7aeecdc7bc05a7d438d978a0d0e3d7fd930006850f7->enter($__internal_cd43f8ba731522e95cefd7aeecdc7bc05a7d438d978a0d0e3d7fd930006850f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4116b134147a6265c31dd4f174763376b25f0eeea53243e863e991ccd8791fa4->leave($__internal_4116b134147a6265c31dd4f174763376b25f0eeea53243e863e991ccd8791fa4_prof);

        
        $__internal_cd43f8ba731522e95cefd7aeecdc7bc05a7d438d978a0d0e3d7fd930006850f7->leave($__internal_cd43f8ba731522e95cefd7aeecdc7bc05a7d438d978a0d0e3d7fd930006850f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
