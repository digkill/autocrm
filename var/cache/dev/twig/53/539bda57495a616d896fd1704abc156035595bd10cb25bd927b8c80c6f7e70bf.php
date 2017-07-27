<?php

/* FOSOAuthServerBundle::layout.html.twig */
class __TwigTemplate_454b408a0d3100365714aebb12ba33db84673be2d0a0d32f8bf928df8cb0a0a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74da63b1dc0216ac75599958692cb8bf0baf4c4111c34e19466a08ccbd4ed23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74da63b1dc0216ac75599958692cb8bf0baf4c4111c34e19466a08ccbd4ed23f->enter($__internal_74da63b1dc0216ac75599958692cb8bf0baf4c4111c34e19466a08ccbd4ed23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::layout.html.twig"));

        $__internal_2f13e217307656eaa60733e8d5e82fe89f2817d1e35f9b5b9349f51c700340fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f13e217307656eaa60733e8d5e82fe89f2817d1e35f9b5b9349f51c700340fc->enter($__internal_2f13e217307656eaa60733e8d5e82fe89f2817d1e35f9b5b9349f51c700340fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('fos_oauth_server_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_74da63b1dc0216ac75599958692cb8bf0baf4c4111c34e19466a08ccbd4ed23f->leave($__internal_74da63b1dc0216ac75599958692cb8bf0baf4c4111c34e19466a08ccbd4ed23f_prof);

        
        $__internal_2f13e217307656eaa60733e8d5e82fe89f2817d1e35f9b5b9349f51c700340fc->leave($__internal_2f13e217307656eaa60733e8d5e82fe89f2817d1e35f9b5b9349f51c700340fc_prof);

    }

    // line 8
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        $__internal_db980794010dbc2cb4d3c5bd8fd5bc5dd0076096b2a410d230a8adb9f901fb8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db980794010dbc2cb4d3c5bd8fd5bc5dd0076096b2a410d230a8adb9f901fb8f->enter($__internal_db980794010dbc2cb4d3c5bd8fd5bc5dd0076096b2a410d230a8adb9f901fb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        $__internal_2aeb6727081b332bca841baab88b8dfbb3d1a723cf4d8aa0dcf7614c49636934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aeb6727081b332bca841baab88b8dfbb3d1a723cf4d8aa0dcf7614c49636934->enter($__internal_2aeb6727081b332bca841baab88b8dfbb3d1a723cf4d8aa0dcf7614c49636934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        // line 9
        echo "            ";
        
        $__internal_2aeb6727081b332bca841baab88b8dfbb3d1a723cf4d8aa0dcf7614c49636934->leave($__internal_2aeb6727081b332bca841baab88b8dfbb3d1a723cf4d8aa0dcf7614c49636934_prof);

        
        $__internal_db980794010dbc2cb4d3c5bd8fd5bc5dd0076096b2a410d230a8adb9f901fb8f->leave($__internal_db980794010dbc2cb4d3c5bd8fd5bc5dd0076096b2a410d230a8adb9f901fb8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  50 => 8,  37 => 10,  35 => 8,  26 => 1,);
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
    </head>
    <body>
        <div>
            {% block fos_oauth_server_content %}
            {% endblock fos_oauth_server_content %}
        </div>
    </body>
</html>
", "FOSOAuthServerBundle::layout.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/layout.html.twig");
    }
}
