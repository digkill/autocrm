<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_df418ada44b56d49d8c86fbf9e89029a5d8e1ed716956001a63ce3efe9201dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_204ecb6f9120da5bae3a84b4c7193e92cee334bc9bb0d4168cc5a353aec19f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204ecb6f9120da5bae3a84b4c7193e92cee334bc9bb0d4168cc5a353aec19f33->enter($__internal_204ecb6f9120da5bae3a84b4c7193e92cee334bc9bb0d4168cc5a353aec19f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5dbfbfcf1b858c292b2f5d1e0897cfbe3cda5574a92e8cf3d1526680b20abe8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbfbfcf1b858c292b2f5d1e0897cfbe3cda5574a92e8cf3d1526680b20abe8d->enter($__internal_5dbfbfcf1b858c292b2f5d1e0897cfbe3cda5574a92e8cf3d1526680b20abe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_204ecb6f9120da5bae3a84b4c7193e92cee334bc9bb0d4168cc5a353aec19f33->leave($__internal_204ecb6f9120da5bae3a84b4c7193e92cee334bc9bb0d4168cc5a353aec19f33_prof);

        
        $__internal_5dbfbfcf1b858c292b2f5d1e0897cfbe3cda5574a92e8cf3d1526680b20abe8d->leave($__internal_5dbfbfcf1b858c292b2f5d1e0897cfbe3cda5574a92e8cf3d1526680b20abe8d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff08e9727a96f07ef7d54c49995ad50fa4945ea3c072587a066225bcdea5cde0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff08e9727a96f07ef7d54c49995ad50fa4945ea3c072587a066225bcdea5cde0->enter($__internal_ff08e9727a96f07ef7d54c49995ad50fa4945ea3c072587a066225bcdea5cde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d3c7d3d61710852f795f642dda006811971523f37e00437b78150bd1bd4e981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3c7d3d61710852f795f642dda006811971523f37e00437b78150bd1bd4e981->enter($__internal_9d3c7d3d61710852f795f642dda006811971523f37e00437b78150bd1bd4e981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9d3c7d3d61710852f795f642dda006811971523f37e00437b78150bd1bd4e981->leave($__internal_9d3c7d3d61710852f795f642dda006811971523f37e00437b78150bd1bd4e981_prof);

        
        $__internal_ff08e9727a96f07ef7d54c49995ad50fa4945ea3c072587a066225bcdea5cde0->leave($__internal_ff08e9727a96f07ef7d54c49995ad50fa4945ea3c072587a066225bcdea5cde0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f80637b6f6322c29cb6dc0d2b1907d428964c5c2374f254d87304294a1bc5ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80637b6f6322c29cb6dc0d2b1907d428964c5c2374f254d87304294a1bc5ad3->enter($__internal_f80637b6f6322c29cb6dc0d2b1907d428964c5c2374f254d87304294a1bc5ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_602ad3ff1ccc6cb1ac577349a24db50daf326fa8a7e3dd33dafe39d50998d220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602ad3ff1ccc6cb1ac577349a24db50daf326fa8a7e3dd33dafe39d50998d220->enter($__internal_602ad3ff1ccc6cb1ac577349a24db50daf326fa8a7e3dd33dafe39d50998d220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_602ad3ff1ccc6cb1ac577349a24db50daf326fa8a7e3dd33dafe39d50998d220->leave($__internal_602ad3ff1ccc6cb1ac577349a24db50daf326fa8a7e3dd33dafe39d50998d220_prof);

        
        $__internal_f80637b6f6322c29cb6dc0d2b1907d428964c5c2374f254d87304294a1bc5ad3->leave($__internal_f80637b6f6322c29cb6dc0d2b1907d428964c5c2374f254d87304294a1bc5ad3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb87c36eb3e4ba9a7144048cf6968a9ced000865de620702f0c85f513514294d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb87c36eb3e4ba9a7144048cf6968a9ced000865de620702f0c85f513514294d->enter($__internal_bb87c36eb3e4ba9a7144048cf6968a9ced000865de620702f0c85f513514294d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8eb98b14754f8587066dec08ca2e0cd025923155a20c633d6740e9f0d5b4ccfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb98b14754f8587066dec08ca2e0cd025923155a20c633d6740e9f0d5b4ccfb->enter($__internal_8eb98b14754f8587066dec08ca2e0cd025923155a20c633d6740e9f0d5b4ccfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8eb98b14754f8587066dec08ca2e0cd025923155a20c633d6740e9f0d5b4ccfb->leave($__internal_8eb98b14754f8587066dec08ca2e0cd025923155a20c633d6740e9f0d5b4ccfb_prof);

        
        $__internal_bb87c36eb3e4ba9a7144048cf6968a9ced000865de620702f0c85f513514294d->leave($__internal_bb87c36eb3e4ba9a7144048cf6968a9ced000865de620702f0c85f513514294d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
