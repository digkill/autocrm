<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b61e5272d70c580a8ee580fab7cc34735bd27055771f4d8713614fb4cfc1e425 extends Twig_Template
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
        $__internal_278a2b7355964545273f05aafc5966261d9f447abf9b6656c961ced6410734f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278a2b7355964545273f05aafc5966261d9f447abf9b6656c961ced6410734f0->enter($__internal_278a2b7355964545273f05aafc5966261d9f447abf9b6656c961ced6410734f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e6d333f51019644f27c2f0c27206631ca7018e37bad9e127e938ff75e1136627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d333f51019644f27c2f0c27206631ca7018e37bad9e127e938ff75e1136627->enter($__internal_e6d333f51019644f27c2f0c27206631ca7018e37bad9e127e938ff75e1136627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_278a2b7355964545273f05aafc5966261d9f447abf9b6656c961ced6410734f0->leave($__internal_278a2b7355964545273f05aafc5966261d9f447abf9b6656c961ced6410734f0_prof);

        
        $__internal_e6d333f51019644f27c2f0c27206631ca7018e37bad9e127e938ff75e1136627->leave($__internal_e6d333f51019644f27c2f0c27206631ca7018e37bad9e127e938ff75e1136627_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
