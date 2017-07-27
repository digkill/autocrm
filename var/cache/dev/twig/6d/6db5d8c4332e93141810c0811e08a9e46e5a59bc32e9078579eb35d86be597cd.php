<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e0dbd9603b3063dcf2eb6b7913861786df0b9538029a69de2bcde0dc651c7a98 extends Twig_Template
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
        $__internal_dcafd32ad84613a00193936e369cdbde75f28c41c5b19836801fbe0bbfdc1b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcafd32ad84613a00193936e369cdbde75f28c41c5b19836801fbe0bbfdc1b47->enter($__internal_dcafd32ad84613a00193936e369cdbde75f28c41c5b19836801fbe0bbfdc1b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ca6fc87b9974e3cc724affc63e9aa62b18c832e95b527fe33b6b6bcd9b4e47f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6fc87b9974e3cc724affc63e9aa62b18c832e95b527fe33b6b6bcd9b4e47f6->enter($__internal_ca6fc87b9974e3cc724affc63e9aa62b18c832e95b527fe33b6b6bcd9b4e47f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dcafd32ad84613a00193936e369cdbde75f28c41c5b19836801fbe0bbfdc1b47->leave($__internal_dcafd32ad84613a00193936e369cdbde75f28c41c5b19836801fbe0bbfdc1b47_prof);

        
        $__internal_ca6fc87b9974e3cc724affc63e9aa62b18c832e95b527fe33b6b6bcd9b4e47f6->leave($__internal_ca6fc87b9974e3cc724affc63e9aa62b18c832e95b527fe33b6b6bcd9b4e47f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
