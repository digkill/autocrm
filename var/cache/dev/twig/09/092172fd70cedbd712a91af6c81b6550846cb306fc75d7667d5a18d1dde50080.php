<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b52d21fce6174a2ce023d0ef9d77952d82694b062e85dbe1df730a53f5e191ff extends Twig_Template
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
        $__internal_1c0f773ad561a86fc7f3051406f62e96bcfe816d70719bd4ed1548d1bfb1b382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0f773ad561a86fc7f3051406f62e96bcfe816d70719bd4ed1548d1bfb1b382->enter($__internal_1c0f773ad561a86fc7f3051406f62e96bcfe816d70719bd4ed1548d1bfb1b382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_eb1b9d34709ec66e42daaa38ef9ed31bd5ad8ee13b5a4b1451cfb39e2ed2f143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1b9d34709ec66e42daaa38ef9ed31bd5ad8ee13b5a4b1451cfb39e2ed2f143->enter($__internal_eb1b9d34709ec66e42daaa38ef9ed31bd5ad8ee13b5a4b1451cfb39e2ed2f143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1c0f773ad561a86fc7f3051406f62e96bcfe816d70719bd4ed1548d1bfb1b382->leave($__internal_1c0f773ad561a86fc7f3051406f62e96bcfe816d70719bd4ed1548d1bfb1b382_prof);

        
        $__internal_eb1b9d34709ec66e42daaa38ef9ed31bd5ad8ee13b5a4b1451cfb39e2ed2f143->leave($__internal_eb1b9d34709ec66e42daaa38ef9ed31bd5ad8ee13b5a4b1451cfb39e2ed2f143_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
