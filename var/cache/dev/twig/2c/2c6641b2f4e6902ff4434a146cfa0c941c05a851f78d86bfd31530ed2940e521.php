<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a92a39239fc0081ca7cd7432ae584e90e273a697f817d004fe98a08d23d652f6 extends Twig_Template
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
        $__internal_ed1e6478dc1c27319d297987c3191f2762442660f1399188ffe1e58f489a67b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1e6478dc1c27319d297987c3191f2762442660f1399188ffe1e58f489a67b8->enter($__internal_ed1e6478dc1c27319d297987c3191f2762442660f1399188ffe1e58f489a67b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9640b601237aa61bf38e3e3de5376b1647a0f4652992f091d11d35865d65712b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9640b601237aa61bf38e3e3de5376b1647a0f4652992f091d11d35865d65712b->enter($__internal_9640b601237aa61bf38e3e3de5376b1647a0f4652992f091d11d35865d65712b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ed1e6478dc1c27319d297987c3191f2762442660f1399188ffe1e58f489a67b8->leave($__internal_ed1e6478dc1c27319d297987c3191f2762442660f1399188ffe1e58f489a67b8_prof);

        
        $__internal_9640b601237aa61bf38e3e3de5376b1647a0f4652992f091d11d35865d65712b->leave($__internal_9640b601237aa61bf38e3e3de5376b1647a0f4652992f091d11d35865d65712b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
