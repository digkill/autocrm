<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a7b6ba66240916f6ab00d0304d12858c8bd5a04d29431ebe46a91ee926f7b761 extends Twig_Template
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
        $__internal_5da2c51c731bb51b3b6ec8d69afb990bc1791643a95c8aa78abf42e2865d6a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da2c51c731bb51b3b6ec8d69afb990bc1791643a95c8aa78abf42e2865d6a43->enter($__internal_5da2c51c731bb51b3b6ec8d69afb990bc1791643a95c8aa78abf42e2865d6a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f9a16278c190baf7cb7e6a4a4b0dc376c95ba6c83c0210820f26a6e990dfc592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a16278c190baf7cb7e6a4a4b0dc376c95ba6c83c0210820f26a6e990dfc592->enter($__internal_f9a16278c190baf7cb7e6a4a4b0dc376c95ba6c83c0210820f26a6e990dfc592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_5da2c51c731bb51b3b6ec8d69afb990bc1791643a95c8aa78abf42e2865d6a43->leave($__internal_5da2c51c731bb51b3b6ec8d69afb990bc1791643a95c8aa78abf42e2865d6a43_prof);

        
        $__internal_f9a16278c190baf7cb7e6a4a4b0dc376c95ba6c83c0210820f26a6e990dfc592->leave($__internal_f9a16278c190baf7cb7e6a4a4b0dc376c95ba6c83c0210820f26a6e990dfc592_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
