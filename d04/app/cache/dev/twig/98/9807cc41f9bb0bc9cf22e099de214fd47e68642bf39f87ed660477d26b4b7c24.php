<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* E03Bundle:Default:index.html.twig */
class __TwigTemplate_bcf97c35cc5cf52c40d9bbabded29d8ae09242b5e705c6958499505b3a421a8d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "E03Bundle:Default:index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "E03Bundle:Default:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<style>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["color"] ?? $this->getContext($context, "color")));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 5
            echo ".";
            echo twig_escape_filter($this->env, $context["class"], "html", null, true);
            echo " {
    background-color: ";
            // line 6
            echo twig_escape_filter($this->env, $context["class"], "html", null, true);
            echo ";
    width:80px;
    height:40px}
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "table { margin: 0 auto; }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<table>
    <thead>
        <tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["color"] ?? $this->getContext($context, "color")));
        foreach ($context['_seq'] as $context["_key"] => $context["th"]) {
            // line 18
            echo "            <th><h2 style=\"color:";
            echo twig_escape_filter($this->env, $context["th"], "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, $context["th"], "html", null, true);
            echo "</h2></th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['th'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["opacity"] ?? $this->getContext($context, "opacity")));
        foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
            // line 24
            echo "        <tr style=\"opacity: ";
            echo twig_escape_filter($this->env, $context["tr"], "html", null, true);
            echo "%;\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["color"] ?? $this->getContext($context, "color")));
            foreach ($context['_seq'] as $context["_key"] => $context["td"]) {
                // line 26
                echo "            <td class=\"";
                echo twig_escape_filter($this->env, $context["td"], "html", null, true);
                echo "\"></td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['td'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "E03Bundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 30,  136 => 28,  127 => 26,  123 => 25,  118 => 24,  114 => 23,  109 => 20,  98 => 18,  94 => 17,  89 => 14,  83 => 13,  74 => 10,  64 => 6,  59 => 5,  55 => 4,  52 => 3,  46 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
<style>
{% for class in color %}
.{{class}} {
    background-color: {{class}};
    width:80px;
    height:40px}
{% endfor %}
table { margin: 0 auto; }
</style>
{% endblock %}
{% block body %}
<table>
    <thead>
        <tr>
        {% for th in color %}
            <th><h2 style=\"color:{{th}};\">{{th}}</h2></th>
        {% endfor %}
        </tr>
    </thead>
    <tbody>
        {% for tr in opacity %}
        <tr style=\"opacity: {{tr}}%;\">
        {% for td in color %}
            <td class=\"{{td}}\"></td>
        {% endfor %}
        </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "E03Bundle:Default:index.html.twig", "/Users/hcho/Desktop/d04/src/E03Bundle/Resources/views/Default/index.html.twig");
    }
}
