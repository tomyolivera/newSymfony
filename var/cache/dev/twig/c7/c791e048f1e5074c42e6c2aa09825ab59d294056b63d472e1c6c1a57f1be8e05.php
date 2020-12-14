<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/_table.html.twig */
class __TwigTemplate_956c8ea1a688535038a55912802f838437fa005404bb72261112be4d1729bde2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_table.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 1, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 2
            echo "    <tr>
        <td class=\"px-6 py-4 whitespace-no-wrap\">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "
        </td>
        <td class=\"px-6 py-4 whitespace-no-wrap\">
            ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 7), "html", null, true);
            echo "
        </td>
        <td class=\"px-6 py-4 whitespace-no-wrap\">
            ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 10), "html", null, true);
            echo "
        </td>
        <td class=\"px-6 py-4 whitespace-no-wrap\">
            ";
            // line 13
            echo twig_include($this->env, $context, "admin/_role.html.twig");
            echo "
        </td>
        <td class=\"px-6 py-4 whitespace-no-wrap td_ban_";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
            ";
            // line 16
            echo twig_include($this->env, $context, "admin/_ban_form.html.twig");
            echo "
        </td>
        <td class=\"px-6 py-4 whitespace-no-wrap\">
            <div class=\"d-inline-block\">
                ";
            // line 20
            echo twig_include($this->env, $context, "admin/_goto_edit.html.twig");
            echo "
            </div>
            <div class=\"d-inline-block td_delete_";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                ";
            // line 23
            echo twig_include($this->env, $context, "admin/_delete_form.html.twig");
            echo "
            </div>
        </td>
    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 23,  103 => 22,  98 => 20,  91 => 16,  87 => 15,  82 => 13,  76 => 10,  70 => 7,  64 => 4,  60 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for user in pagination %}
    <tr>
        <td class=\"px-6 py-4 whitespace-no-wrap\">
            {{ user.id }}
        </td>
        <td class=\"px-6 py-4 whitespace-no-wrap\">
            {{ user.name }}
        </td>
        <td class=\"px-6 py-4 whitespace-no-wrap\">
            {{ user.email }}
        </td>
        <td class=\"px-6 py-4 whitespace-no-wrap\">
            {{ include('admin/_role.html.twig') }}
        </td>
        <td class=\"px-6 py-4 whitespace-no-wrap td_ban_{{ user.id }}\">
            {{ include('admin/_ban_form.html.twig') }}
        </td>
        <td class=\"px-6 py-4 whitespace-no-wrap\">
            <div class=\"d-inline-block\">
                {{ include('admin/_goto_edit.html.twig') }}
            </div>
            <div class=\"d-inline-block td_delete_{{ user.id }}\">
                {{ include('admin/_delete_form.html.twig') }}
            </div>
        </td>
    </tr>
{% endfor %}", "admin/_table.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\symfonyFacer\\templates\\admin\\_table.html.twig");
    }
}
