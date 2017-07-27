<?php

/* NelmioApiDocBundle::resources.html.twig */
class __TwigTemplate_5dcbc94c6981329746bab875b7e2576fafd3c0bc440d9b420ee15622d1f033c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resources.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84859aabeea9322db6d3bf7c85f3c558f52f017c80c7b263ddaeb0afa8bd975f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84859aabeea9322db6d3bf7c85f3c558f52f017c80c7b263ddaeb0afa8bd975f->enter($__internal_84859aabeea9322db6d3bf7c85f3c558f52f017c80c7b263ddaeb0afa8bd975f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resources.html.twig"));

        $__internal_cc39aa4e13d0002ff5e43df2779ddd90243ad7963b64435a8d68f3ccbd271755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc39aa4e13d0002ff5e43df2779ddd90243ad7963b64435a8d68f3ccbd271755->enter($__internal_cc39aa4e13d0002ff5e43df2779ddd90243ad7963b64435a8d68f3ccbd271755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resources.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84859aabeea9322db6d3bf7c85f3c558f52f017c80c7b263ddaeb0afa8bd975f->leave($__internal_84859aabeea9322db6d3bf7c85f3c558f52f017c80c7b263ddaeb0afa8bd975f_prof);

        
        $__internal_cc39aa4e13d0002ff5e43df2779ddd90243ad7963b64435a8d68f3ccbd271755->leave($__internal_cc39aa4e13d0002ff5e43df2779ddd90243ad7963b64435a8d68f3ccbd271755_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_db86bde08ec3be8d96bd892e1c9d506acace209dd8c57cac0f1e1ccc0072d286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db86bde08ec3be8d96bd892e1c9d506acace209dd8c57cac0f1e1ccc0072d286->enter($__internal_db86bde08ec3be8d96bd892e1c9d506acace209dd8c57cac0f1e1ccc0072d286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_35d2ec0e2b19483fe05d02d1cded9038a50ddd19e3d4484cdbfd0081eb1a36cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d2ec0e2b19483fe05d02d1cded9038a50ddd19e3d4484cdbfd0081eb1a36cc->enter($__internal_35d2ec0e2b19483fe05d02d1cded9038a50ddd19e3d4484cdbfd0081eb1a36cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"summary\">
        <ul>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resources"] ?? $this->getContext($context, "resources")));
        foreach ($context['_seq'] as $context["section"] => $context["sections"]) {
            // line 7
            echo "                <li><a href=\"#section-";
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </ul>
    </div>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resources"] ?? $this->getContext($context, "resources")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["section"] => $context["sections"]) {
            // line 12
            echo "        ";
            if (($context["section"] != "_others")) {
                // line 13
                echo "            <li class=\"section";
                echo ((($context["defaultSectionsOpened"] ?? $this->getContext($context, "defaultSectionsOpened"))) ? (" active") : (""));
                echo "\">
                <div class=\"actions\">
                    <a class=\"action-show-hide\">Show/hide</a>
                    <a class=\"action-list\">List Operations</a>
                    <a class=\"action-expand\">Expand Operations</a>
                </div>
                <h1>";
                // line 19
                echo twig_escape_filter($this->env, $context["section"], "html", null, true);
                echo "</h1>
                <ul class=\"section-list\" ";
                // line 20
                if ( !($context["defaultSectionsOpened"] ?? $this->getContext($context, "defaultSectionsOpened"))) {
                    echo "style=\"display: none\"";
                }
                echo ">
        ";
            }
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sections"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["resource"] => $context["methods"]) {
                // line 23
                echo "            <a id=\"section-";
                echo twig_escape_filter($this->env, $context["section"], "html", null, true);
                echo "\"></a>
            <li class=\"resource\">
                <div class=\"heading\">
                    ";
                // line 26
                if ((($context["section"] == "_others") && ($context["resource"] != "others"))) {
                    // line 27
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, $context["resource"], "html", null, true);
                    echo "</h2>
                    ";
                } elseif ((                // line 28
$context["resource"] != "others")) {
                    // line 29
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, $context["resource"], "html", null, true);
                    echo "</h2>
                    ";
                }
                // line 31
                echo "                </div>
                <ul class=\"endpoints\">
                    <li class=\"endpoint\">
                        <ul class=\"operations\">
                            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["methods"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 36
                    echo "                                ";
                    $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resources.html.twig", 36)->display($context);
                    // line 37
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                        </ul>
                    </li>
                </ul>
            </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['resource'], $context['methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        ";
            if (($context["section"] != "_others")) {
                // line 44
                echo "                </ul>
            </li>
        ";
            }
            // line 47
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_35d2ec0e2b19483fe05d02d1cded9038a50ddd19e3d4484cdbfd0081eb1a36cc->leave($__internal_35d2ec0e2b19483fe05d02d1cded9038a50ddd19e3d4484cdbfd0081eb1a36cc_prof);

        
        $__internal_db86bde08ec3be8d96bd892e1c9d506acace209dd8c57cac0f1e1ccc0072d286->leave($__internal_db86bde08ec3be8d96bd892e1c9d506acace209dd8c57cac0f1e1ccc0072d286_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 47,  214 => 44,  211 => 43,  193 => 38,  179 => 37,  176 => 36,  159 => 35,  153 => 31,  147 => 29,  145 => 28,  140 => 27,  138 => 26,  131 => 23,  113 => 22,  106 => 20,  102 => 19,  92 => 13,  89 => 12,  72 => 11,  68 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <div id=\"summary\">
        <ul>
            {% for section, sections in resources  %}
                <li><a href=\"#section-{{ section }}\">{{ section }}</a></li>
            {% endfor %}
        </ul>
    </div>
    {% for section, sections in resources  %}
        {% if section != '_others' %}
            <li class=\"section{{ defaultSectionsOpened? ' active':'' }}\">
                <div class=\"actions\">
                    <a class=\"action-show-hide\">Show/hide</a>
                    <a class=\"action-list\">List Operations</a>
                    <a class=\"action-expand\">Expand Operations</a>
                </div>
                <h1>{{ section }}</h1>
                <ul class=\"section-list\" {% if not defaultSectionsOpened %}style=\"display: none\"{% endif %}>
        {% endif %}
        {% for resource, methods in sections %}
            <a id=\"section-{{ section }}\"></a>
            <li class=\"resource\">
                <div class=\"heading\">
                    {% if section == '_others' and resource != 'others' %}
                        <h2>{{ resource }}</h2>
                    {% elseif resource != 'others' %}
                        <h2>{{ resource }}</h2>
                    {% endif %}
                </div>
                <ul class=\"endpoints\">
                    <li class=\"endpoint\">
                        <ul class=\"operations\">
                            {% for data in methods %}
                                {% include 'NelmioApiDocBundle::method.html.twig' %}
                            {% endfor %}
                        </ul>
                    </li>
                </ul>
            </li>
        {% endfor %}
        {% if section != '_others' %}
                </ul>
            </li>
        {% endif %}
    {% endfor %}
{% endblock content %}
", "NelmioApiDocBundle::resources.html.twig", "/mnt/e/workspace/gitflow/autocrm/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resources.html.twig");
    }
}
