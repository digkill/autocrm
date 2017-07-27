<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f23b4d4441389dfa82f503a1b1470bda1d4c16da051f87d98be8154e63daf6d7 extends Twig_Template
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
        $__internal_d307174db035c11a7f4b021e33bb6350183d40464ec590e951862f96dbeec598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d307174db035c11a7f4b021e33bb6350183d40464ec590e951862f96dbeec598->enter($__internal_d307174db035c11a7f4b021e33bb6350183d40464ec590e951862f96dbeec598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c4b42c93037135700cea25ad2d4bfa29e9bddac9cc4f9a234dc11e125b6a69d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b42c93037135700cea25ad2d4bfa29e9bddac9cc4f9a234dc11e125b6a69d0->enter($__internal_c4b42c93037135700cea25ad2d4bfa29e9bddac9cc4f9a234dc11e125b6a69d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d307174db035c11a7f4b021e33bb6350183d40464ec590e951862f96dbeec598->leave($__internal_d307174db035c11a7f4b021e33bb6350183d40464ec590e951862f96dbeec598_prof);

        
        $__internal_c4b42c93037135700cea25ad2d4bfa29e9bddac9cc4f9a234dc11e125b6a69d0->leave($__internal_c4b42c93037135700cea25ad2d4bfa29e9bddac9cc4f9a234dc11e125b6a69d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
