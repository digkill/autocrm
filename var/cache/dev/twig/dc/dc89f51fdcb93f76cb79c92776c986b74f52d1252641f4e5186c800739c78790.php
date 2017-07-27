<?php

/* ::base.html.twig */
class __TwigTemplate_08df43055c2969ad9d6328c4b0bdf76373555a96c77240b967afc392bb739e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e0bda3fc125d52fec35a3b5a566c05f651ca7579f10e99a7c680c1d9bbdb410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0bda3fc125d52fec35a3b5a566c05f651ca7579f10e99a7c680c1d9bbdb410->enter($__internal_5e0bda3fc125d52fec35a3b5a566c05f651ca7579f10e99a7c680c1d9bbdb410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ae56d64062d61eae6ec6e2a6545c1513da425f96d7049870353fa7bff7c4dfd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae56d64062d61eae6ec6e2a6545c1513da425f96d7049870353fa7bff7c4dfd7->enter($__internal_ae56d64062d61eae6ec6e2a6545c1513da425f96d7049870353fa7bff7c4dfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5e0bda3fc125d52fec35a3b5a566c05f651ca7579f10e99a7c680c1d9bbdb410->leave($__internal_5e0bda3fc125d52fec35a3b5a566c05f651ca7579f10e99a7c680c1d9bbdb410_prof);

        
        $__internal_ae56d64062d61eae6ec6e2a6545c1513da425f96d7049870353fa7bff7c4dfd7->leave($__internal_ae56d64062d61eae6ec6e2a6545c1513da425f96d7049870353fa7bff7c4dfd7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_00cebeef6f84d88144b0856ea169963d9df6538d59ccafd3bb12c2c14c0c8820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00cebeef6f84d88144b0856ea169963d9df6538d59ccafd3bb12c2c14c0c8820->enter($__internal_00cebeef6f84d88144b0856ea169963d9df6538d59ccafd3bb12c2c14c0c8820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f623bf3e9ae301a2cbaccf14f3ed50f9817cf92ef62c2ada90673864a00dd1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f623bf3e9ae301a2cbaccf14f3ed50f9817cf92ef62c2ada90673864a00dd1fc->enter($__internal_f623bf3e9ae301a2cbaccf14f3ed50f9817cf92ef62c2ada90673864a00dd1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f623bf3e9ae301a2cbaccf14f3ed50f9817cf92ef62c2ada90673864a00dd1fc->leave($__internal_f623bf3e9ae301a2cbaccf14f3ed50f9817cf92ef62c2ada90673864a00dd1fc_prof);

        
        $__internal_00cebeef6f84d88144b0856ea169963d9df6538d59ccafd3bb12c2c14c0c8820->leave($__internal_00cebeef6f84d88144b0856ea169963d9df6538d59ccafd3bb12c2c14c0c8820_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b2b9c8d7bf9acdb1072959d6bbdc471aa0f37d217d156b6d6f849765e03fd7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2b9c8d7bf9acdb1072959d6bbdc471aa0f37d217d156b6d6f849765e03fd7f->enter($__internal_5b2b9c8d7bf9acdb1072959d6bbdc471aa0f37d217d156b6d6f849765e03fd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cb0aa44479ea2708d679a58d5b23e209a1e5eaf50f053a4f20a14b2726fbe445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0aa44479ea2708d679a58d5b23e209a1e5eaf50f053a4f20a14b2726fbe445->enter($__internal_cb0aa44479ea2708d679a58d5b23e209a1e5eaf50f053a4f20a14b2726fbe445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb0aa44479ea2708d679a58d5b23e209a1e5eaf50f053a4f20a14b2726fbe445->leave($__internal_cb0aa44479ea2708d679a58d5b23e209a1e5eaf50f053a4f20a14b2726fbe445_prof);

        
        $__internal_5b2b9c8d7bf9acdb1072959d6bbdc471aa0f37d217d156b6d6f849765e03fd7f->leave($__internal_5b2b9c8d7bf9acdb1072959d6bbdc471aa0f37d217d156b6d6f849765e03fd7f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c192864c236e04fac2e851357a78b7bbe2fbd16a504800640af2776226ee731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c192864c236e04fac2e851357a78b7bbe2fbd16a504800640af2776226ee731->enter($__internal_4c192864c236e04fac2e851357a78b7bbe2fbd16a504800640af2776226ee731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a936ce1642bf6522cdb6162ce065c36f8f1f3be6f1651b16d16d4082cb86f8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a936ce1642bf6522cdb6162ce065c36f8f1f3be6f1651b16d16d4082cb86f8d3->enter($__internal_a936ce1642bf6522cdb6162ce065c36f8f1f3be6f1651b16d16d4082cb86f8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a936ce1642bf6522cdb6162ce065c36f8f1f3be6f1651b16d16d4082cb86f8d3->leave($__internal_a936ce1642bf6522cdb6162ce065c36f8f1f3be6f1651b16d16d4082cb86f8d3_prof);

        
        $__internal_4c192864c236e04fac2e851357a78b7bbe2fbd16a504800640af2776226ee731->leave($__internal_4c192864c236e04fac2e851357a78b7bbe2fbd16a504800640af2776226ee731_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27f87d0166557e69676c7cb8ba5a858441ab9cdda0adbcfcfed65bcd6cae40e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f87d0166557e69676c7cb8ba5a858441ab9cdda0adbcfcfed65bcd6cae40e5->enter($__internal_27f87d0166557e69676c7cb8ba5a858441ab9cdda0adbcfcfed65bcd6cae40e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c50c87eb2baddbd216c73a29c80b6bf5d47ea501a419c70f15c2dbfa98bd2171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50c87eb2baddbd216c73a29c80b6bf5d47ea501a419c70f15c2dbfa98bd2171->enter($__internal_c50c87eb2baddbd216c73a29c80b6bf5d47ea501a419c70f15c2dbfa98bd2171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c50c87eb2baddbd216c73a29c80b6bf5d47ea501a419c70f15c2dbfa98bd2171->leave($__internal_c50c87eb2baddbd216c73a29c80b6bf5d47ea501a419c70f15c2dbfa98bd2171_prof);

        
        $__internal_27f87d0166557e69676c7cb8ba5a858441ab9cdda0adbcfcfed65bcd6cae40e5->leave($__internal_27f87d0166557e69676c7cb8ba5a858441ab9cdda0adbcfcfed65bcd6cae40e5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/mnt/e/workspace/gitflow/autocrm/app/Resources/views/base.html.twig");
    }
}
