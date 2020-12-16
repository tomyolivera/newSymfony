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

/* profile/_permissions.html.twig */
class __TwigTemplate_1032a20db4ee8edeae5dcc5d9b52fede98528ca9fab08fce741b1d35988c2a78 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_permissions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_permissions.html.twig"));

        // line 1
        echo "<div class=\"text-pink-700\">
    <p>Your permissions are</p>
    
    ";
        // line 4
        $context["roles"] = [0 => "BASIC", 1 => "BAN", 2 => "EDIT", 3 => "DELETE"];
        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "roles", [], "any", false, false, false, 7), 0, [], "array", false, false, false, 7), "ROLE_USER"))) {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 8, $this->source); })()), 0, [], "array", false, false, false, 8), "html", null, true);
            echo "

    ";
            // line 11
            echo "    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "roles", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11), "ROLE_MOD"))) {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 12, $this->source); })()), 0, [], "array", false, false, false, 12), "html", null, true);
            echo "

    ";
            // line 15
            echo "    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15), "ROLE_ADMIN"))) {
            // line 16
            echo "    ";
            $context["permissionsAdmin"] = (twig_length_filter($this->env, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 16, $this->source); })())) - 2);
            // line 17
            echo "
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["permissionsAdmin"]) || array_key_exists("permissionsAdmin", $context) ? $context["permissionsAdmin"] : (function () { throw new RuntimeError('Variable "permissionsAdmin" does not exist.', 18, $this->source); })()), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 19
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 19, $this->source); })()), $context["i"], [], "array", false, false, false, 19), "html", null, true);
                echo "
        ";
                // line 20
                if ((0 !== twig_compare($context["i"], (isset($context["permissionsAdmin"]) || array_key_exists("permissionsAdmin", $context) ? $context["permissionsAdmin"] : (function () { throw new RuntimeError('Variable "permissionsAdmin" does not exist.', 20, $this->source); })())))) {
                    // line 21
                    echo "            -
        ";
                }
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    
    ";
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "    ";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 27, $this->source); })()), "-"), "html", null, true);
            echo "

    ";
        }
        // line 30
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profile/_permissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  107 => 27,  104 => 26,  101 => 24,  95 => 23,  91 => 21,  89 => 20,  84 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  65 => 12,  62 => 11,  56 => 8,  53 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"text-pink-700\">
    <p>Your permissions are</p>
    
    {% set roles = ['BASIC', 'BAN', 'EDIT', 'DELETE'] %}

    {# USER #}
    {% if app.user.roles[0] == 'ROLE_USER' %}
    {{ roles[0] }}

    {# MOD #}
    {% elseif app.user.roles[0] == 'ROLE_MOD' %}
    {{ roles[0] }}

    {# ADMIN #}
    {% elseif app.user.roles[0] == 'ROLE_ADMIN' %}
    {% set permissionsAdmin = roles|length - 2 %}

    {% for i in range(low = 0, high = permissionsAdmin, step = 1) %}
        {{ roles[i] }}
        {% if i != permissionsAdmin %}
            -
        {% endif %}
    {% endfor %}
    
    {# OWNER #}
    {% else %}
    {{ roles|join('-') }}

    {% endif %}
</div>", "profile/_permissions.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\profile\\_permissions.html.twig");
    }
}
