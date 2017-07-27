<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_6a0d362a782d3f71d2e9ed82f26cc4d04e638b64d26d48d277274aa707e86981 extends Twig_Template
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
        $__internal_655a76679cdc6df7928fae760dd6790f0b96e070695823c58f8ca2fa507fb32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655a76679cdc6df7928fae760dd6790f0b96e070695823c58f8ca2fa507fb32d->enter($__internal_655a76679cdc6df7928fae760dd6790f0b96e070695823c58f8ca2fa507fb32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d2e10e1e2ab06ed181e64c78e371f405a65312d41112307ad545a100934cbb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e10e1e2ab06ed181e64c78e371f405a65312d41112307ad545a100934cbb55->enter($__internal_d2e10e1e2ab06ed181e64c78e371f405a65312d41112307ad545a100934cbb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_655a76679cdc6df7928fae760dd6790f0b96e070695823c58f8ca2fa507fb32d->leave($__internal_655a76679cdc6df7928fae760dd6790f0b96e070695823c58f8ca2fa507fb32d_prof);

        
        $__internal_d2e10e1e2ab06ed181e64c78e371f405a65312d41112307ad545a100934cbb55->leave($__internal_d2e10e1e2ab06ed181e64c78e371f405a65312d41112307ad545a100934cbb55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
