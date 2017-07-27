<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ed59d048162d0ea0168e3a7fcec2272d119a642b1c3e58f49e09fb57d242c324 extends Twig_Template
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
        $__internal_e5e6d7d3bb5adbd6712c8793dc1174bdddbb5fb97d126f1d0f9cce7a475c2c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e6d7d3bb5adbd6712c8793dc1174bdddbb5fb97d126f1d0f9cce7a475c2c16->enter($__internal_e5e6d7d3bb5adbd6712c8793dc1174bdddbb5fb97d126f1d0f9cce7a475c2c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b1301aeab04074d60dce38139296a8c02dfc0408fc0eafa00fe2d3bbecdfb11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1301aeab04074d60dce38139296a8c02dfc0408fc0eafa00fe2d3bbecdfb11d->enter($__internal_b1301aeab04074d60dce38139296a8c02dfc0408fc0eafa00fe2d3bbecdfb11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e5e6d7d3bb5adbd6712c8793dc1174bdddbb5fb97d126f1d0f9cce7a475c2c16->leave($__internal_e5e6d7d3bb5adbd6712c8793dc1174bdddbb5fb97d126f1d0f9cce7a475c2c16_prof);

        
        $__internal_b1301aeab04074d60dce38139296a8c02dfc0408fc0eafa00fe2d3bbecdfb11d->leave($__internal_b1301aeab04074d60dce38139296a8c02dfc0408fc0eafa00fe2d3bbecdfb11d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
