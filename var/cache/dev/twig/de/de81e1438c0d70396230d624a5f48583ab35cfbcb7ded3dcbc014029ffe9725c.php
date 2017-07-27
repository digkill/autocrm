<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0bcb1786220adb0c20c9cbe79f49f171723cac2be1fbae0700434eb09f90518d extends Twig_Template
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
        $__internal_adefb4889d8cfa4e4e5bc61924eef6085da94383cb3eeaa81f1368d24fdc72ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adefb4889d8cfa4e4e5bc61924eef6085da94383cb3eeaa81f1368d24fdc72ac->enter($__internal_adefb4889d8cfa4e4e5bc61924eef6085da94383cb3eeaa81f1368d24fdc72ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_55ffe4f692812e046d840d8f90ebda09b784f83ea3f8db9176dff94793c341a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ffe4f692812e046d840d8f90ebda09b784f83ea3f8db9176dff94793c341a2->enter($__internal_55ffe4f692812e046d840d8f90ebda09b784f83ea3f8db9176dff94793c341a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_adefb4889d8cfa4e4e5bc61924eef6085da94383cb3eeaa81f1368d24fdc72ac->leave($__internal_adefb4889d8cfa4e4e5bc61924eef6085da94383cb3eeaa81f1368d24fdc72ac_prof);

        
        $__internal_55ffe4f692812e046d840d8f90ebda09b784f83ea3f8db9176dff94793c341a2->leave($__internal_55ffe4f692812e046d840d8f90ebda09b784f83ea3f8db9176dff94793c341a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
