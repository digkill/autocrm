<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_68310c367f0d4888e9cd9260d8e5d642962f703545bbe65756fa2c11183b3231 extends Twig_Template
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
        $__internal_97d29101cfd917b2d570d1a64800d9140c28e0c9c200aab59c6eb937495694e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d29101cfd917b2d570d1a64800d9140c28e0c9c200aab59c6eb937495694e7->enter($__internal_97d29101cfd917b2d570d1a64800d9140c28e0c9c200aab59c6eb937495694e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_bc75c9f5a985d7dd00a7e30faee64f260923e9840294dd957937538c96d6adfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc75c9f5a985d7dd00a7e30faee64f260923e9840294dd957937538c96d6adfd->enter($__internal_bc75c9f5a985d7dd00a7e30faee64f260923e9840294dd957937538c96d6adfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_97d29101cfd917b2d570d1a64800d9140c28e0c9c200aab59c6eb937495694e7->leave($__internal_97d29101cfd917b2d570d1a64800d9140c28e0c9c200aab59c6eb937495694e7_prof);

        
        $__internal_bc75c9f5a985d7dd00a7e30faee64f260923e9840294dd957937538c96d6adfd->leave($__internal_bc75c9f5a985d7dd00a7e30faee64f260923e9840294dd957937538c96d6adfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
