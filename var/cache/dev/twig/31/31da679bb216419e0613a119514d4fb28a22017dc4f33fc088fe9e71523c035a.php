<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f33bdc8721c45fecb4a9c9afc54861c490e04e33fb8efaa03b053a5f09da2fe1 extends Twig_Template
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
        $__internal_da4711e5e7c22c2ca36ebd6a28aafde1a6cccb85d53882c9070da4a2c7305cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4711e5e7c22c2ca36ebd6a28aafde1a6cccb85d53882c9070da4a2c7305cb2->enter($__internal_da4711e5e7c22c2ca36ebd6a28aafde1a6cccb85d53882c9070da4a2c7305cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8ec6efebc75bad2195955ffa285ce5c845435d44c9ae073036e7286865ffcd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec6efebc75bad2195955ffa285ce5c845435d44c9ae073036e7286865ffcd7b->enter($__internal_8ec6efebc75bad2195955ffa285ce5c845435d44c9ae073036e7286865ffcd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_da4711e5e7c22c2ca36ebd6a28aafde1a6cccb85d53882c9070da4a2c7305cb2->leave($__internal_da4711e5e7c22c2ca36ebd6a28aafde1a6cccb85d53882c9070da4a2c7305cb2_prof);

        
        $__internal_8ec6efebc75bad2195955ffa285ce5c845435d44c9ae073036e7286865ffcd7b->leave($__internal_8ec6efebc75bad2195955ffa285ce5c845435d44c9ae073036e7286865ffcd7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
