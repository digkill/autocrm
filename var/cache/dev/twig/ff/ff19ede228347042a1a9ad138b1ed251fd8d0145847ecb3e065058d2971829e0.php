<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_bde1eeae4494ccee2c65e727310956b67c1bc711238a76834a62309c8ade70c1 extends Twig_Template
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
        $__internal_3ebe3f6e86e730202658c618a420e7f7011251fcbb26e5b3b22e717ab16a6988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ebe3f6e86e730202658c618a420e7f7011251fcbb26e5b3b22e717ab16a6988->enter($__internal_3ebe3f6e86e730202658c618a420e7f7011251fcbb26e5b3b22e717ab16a6988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1137b855d248847a376286df877561db4b4a983ee08934740c7e4e547631553c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1137b855d248847a376286df877561db4b4a983ee08934740c7e4e547631553c->enter($__internal_1137b855d248847a376286df877561db4b4a983ee08934740c7e4e547631553c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3ebe3f6e86e730202658c618a420e7f7011251fcbb26e5b3b22e717ab16a6988->leave($__internal_3ebe3f6e86e730202658c618a420e7f7011251fcbb26e5b3b22e717ab16a6988_prof);

        
        $__internal_1137b855d248847a376286df877561db4b4a983ee08934740c7e4e547631553c->leave($__internal_1137b855d248847a376286df877561db4b4a983ee08934740c7e4e547631553c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
