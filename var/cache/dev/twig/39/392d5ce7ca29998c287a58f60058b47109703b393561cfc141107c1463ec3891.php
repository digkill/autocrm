<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_7d67c4ed2ea1a6b237770f7de50ee40924c95e07f77e1e608b5508d5a5d452a3 extends Twig_Template
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
        $__internal_9bb8e2eb9258b9a8eda71ed24f1d21955babe6319d3ce6f467510e302a4147e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb8e2eb9258b9a8eda71ed24f1d21955babe6319d3ce6f467510e302a4147e5->enter($__internal_9bb8e2eb9258b9a8eda71ed24f1d21955babe6319d3ce6f467510e302a4147e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_436683da9c8d940c3b260fc6cb6f8d55067ba924894d65b4f93ef2448b4e89f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436683da9c8d940c3b260fc6cb6f8d55067ba924894d65b4f93ef2448b4e89f4->enter($__internal_436683da9c8d940c3b260fc6cb6f8d55067ba924894d65b4f93ef2448b4e89f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9bb8e2eb9258b9a8eda71ed24f1d21955babe6319d3ce6f467510e302a4147e5->leave($__internal_9bb8e2eb9258b9a8eda71ed24f1d21955babe6319d3ce6f467510e302a4147e5_prof);

        
        $__internal_436683da9c8d940c3b260fc6cb6f8d55067ba924894d65b4f93ef2448b4e89f4->leave($__internal_436683da9c8d940c3b260fc6cb6f8d55067ba924894d65b4f93ef2448b4e89f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
