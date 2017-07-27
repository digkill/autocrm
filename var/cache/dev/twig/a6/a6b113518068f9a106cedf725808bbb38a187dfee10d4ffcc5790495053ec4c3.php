<?php

/* FOSOAuthServerBundle::form.html.twig */
class __TwigTemplate_15bc625c89bcbbcb07c7afa53f19d26f167916ddc72d518367b65a5663321019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9ef310d28b391f756fe18a5985c1c21984b0cddc52cac50da0abb2d2dc2651f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ef310d28b391f756fe18a5985c1c21984b0cddc52cac50da0abb2d2dc2651f->enter($__internal_c9ef310d28b391f756fe18a5985c1c21984b0cddc52cac50da0abb2d2dc2651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::form.html.twig"));

        $__internal_5809a34092626302f8f5b335108792d13ed2f46476ef8bc06092477ff31fc77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5809a34092626302f8f5b335108792d13ed2f46476ef8bc06092477ff31fc77c->enter($__internal_5809a34092626302f8f5b335108792d13ed2f46476ef8bc06092477ff31fc77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::form.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
        
        $__internal_c9ef310d28b391f756fe18a5985c1c21984b0cddc52cac50da0abb2d2dc2651f->leave($__internal_c9ef310d28b391f756fe18a5985c1c21984b0cddc52cac50da0abb2d2dc2651f_prof);

        
        $__internal_5809a34092626302f8f5b335108792d13ed2f46476ef8bc06092477ff31fc77c->leave($__internal_5809a34092626302f8f5b335108792d13ed2f46476ef8bc06092477ff31fc77c_prof);

    }

    public function block_field_label($context, array $blocks = array())
    {
        $__internal_6dfa243e33b012c85d581948c7d0192c502f42821be79a7129cedf1044cf6a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfa243e33b012c85d581948c7d0192c502f42821be79a7129cedf1044cf6a28->enter($__internal_6dfa243e33b012c85d581948c7d0192c502f42821be79a7129cedf1044cf6a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        $__internal_b1081adc7635c92afbf36fad847d3d5fc547fc8bdfa073e6e89388772545152a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1081adc7635c92afbf36fad847d3d5fc547fc8bdfa073e6e89388772545152a->enter($__internal_b1081adc7635c92afbf36fad847d3d5fc547fc8bdfa073e6e89388772545152a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["id"] ?? $this->getContext($context, "id")), array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b1081adc7635c92afbf36fad847d3d5fc547fc8bdfa073e6e89388772545152a->leave($__internal_b1081adc7635c92afbf36fad847d3d5fc547fc8bdfa073e6e89388772545152a_prof);

        
        $__internal_6dfa243e33b012c85d581948c7d0192c502f42821be79a7129cedf1044cf6a28->leave($__internal_6dfa243e33b012c85d581948c7d0192c502f42821be79a7129cedf1044cf6a28_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  47 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block field_label %}
{% spaceless %}
    <label for=\"{{ id }}\">{{ id|trans([], 'FOSOAuthServerBundle') }}</label>
{% endspaceless %}
{% endblock field_label %}
", "FOSOAuthServerBundle::form.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/form.html.twig");
    }
}
