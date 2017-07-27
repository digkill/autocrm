<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_18d755665bfdea3a156ad06e3c5e2c02fb9329d0eed98b57cc83533a1c98edb9 extends Twig_Template
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
        $__internal_86783f302f36bca0bdbc6aaeb8dc9a0c45db38101af26b11bd8fb7f1bbf651ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86783f302f36bca0bdbc6aaeb8dc9a0c45db38101af26b11bd8fb7f1bbf651ad->enter($__internal_86783f302f36bca0bdbc6aaeb8dc9a0c45db38101af26b11bd8fb7f1bbf651ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e6bb3d4de9e007e14214cc6746e69924e8a45aa1379b770088996fc5409d87e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bb3d4de9e007e14214cc6746e69924e8a45aa1379b770088996fc5409d87e1->enter($__internal_e6bb3d4de9e007e14214cc6746e69924e8a45aa1379b770088996fc5409d87e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_86783f302f36bca0bdbc6aaeb8dc9a0c45db38101af26b11bd8fb7f1bbf651ad->leave($__internal_86783f302f36bca0bdbc6aaeb8dc9a0c45db38101af26b11bd8fb7f1bbf651ad_prof);

        
        $__internal_e6bb3d4de9e007e14214cc6746e69924e8a45aa1379b770088996fc5409d87e1->leave($__internal_e6bb3d4de9e007e14214cc6746e69924e8a45aa1379b770088996fc5409d87e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
