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

/* admin/_form.html.twig */
class __TwigTemplate_3ca6ffc0bdacb3e19ef1c961cf37212051c11ecd7c7364c27467b0aa1ce8f7f3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

";
        // line 13
        echo "
";
        // line 15
        echo "
";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "ban", [], "any", false, false, false, 16)) {
            // line 17
            echo "    <p class=\"h4 text-danger\">This user is banned</p>
";
        }
        // line 19
        echo "
";
        // line 20
        $context["roles"] = [0 => "user", 1 => "mod", 2 => "admin"];
        // line 21
        echo "
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 22, $this->source); })())) - 1), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 23
            echo "    ";
            if ((((0 === twig_compare($context["i"], (twig_length_filter($this->env, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 23, $this->source); })())) - 1))) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OWNER")) || (-1 === twig_compare($context["i"], (twig_length_filter($this->env, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 23, $this->source); })())) - 1))))) {
                // line 24
                echo "        <input
            type=\"radio\"
            id=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 26, $this->source); })()), $context["i"], [], "array", false, false, false, 26), "html", null, true);
                echo "\"
            name=\"roles\"
            value=\"ROLE_";
                // line 28
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 28, $this->source); })()), $context["i"], [], "array", false, false, false, 28)), "html", null, true);
                echo "\"
            ";
                // line 29
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "roles", [], "any", false, false, false, 29), 0, [], "array", false, false, false, 29), "ROLE_"), 1, [], "array", false, false, false, 29), twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 29, $this->source); })()), $context["i"], [], "array", false, false, false, 29))))) {
                    echo " checked ";
                }
                // line 30
                echo "            
            ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "ban", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "                disabled
            ";
                }
                // line 34
                echo "        >
        <label for=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 35, $this->source); })()), $context["i"], [], "array", false, false, false, 35), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 35, $this->source); })()), $context["i"], [], "array", false, false, false, 35)), "html", null, true);
                echo "</label><br>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  115 => 38,  104 => 35,  101 => 34,  97 => 32,  95 => 31,  92 => 30,  88 => 29,  84 => 28,  79 => 26,  75 => 24,  72 => 23,  68 => 22,  65 => 21,  63 => 20,  60 => 19,  56 => 17,  54 => 16,  51 => 15,  48 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

{# {% set fields = ['id', 'email', 'name'] %}

{% for i in range(low = 0, high = fields|length - 1, step = 1) %}
    <div>
        <label for=\"form_{{ fields[i] }}\">{{ fields[i]|upper }}</label>
        <input type=\"text\" name=\"form_{{ fields[i] }}\"
        value=\"{% if i == 0 %}{{ user.id }}{% elseif i == 1 %}{{ user.email }}{% else %}{{ user.name }}{% endif %}\"
        class=\"input-customize\">
    </div>
{% endfor %} #}

{# ROLES #}

{% if user.ban %}
    <p class=\"h4 text-danger\">This user is banned</p>
{% endif %}

{% set roles = ['user', 'mod', 'admin'] %}

{% for i in range(low = 0, high = roles|length - 1, step = 1) %}
    {% if ( i == roles|length - 1 and is_granted('ROLE_OWNER') or (i < roles|length - 1) ) %}
        <input
            type=\"radio\"
            id=\"{{ roles[i] }}\"
            name=\"roles\"
            value=\"ROLE_{{ roles[i]|upper }}\"
            {% if user.roles[0]|split('ROLE_')[1] == roles[i]|upper %} checked {% endif %}
            
            {% if user.ban %}
                disabled
            {% endif %}
        >
        <label for=\"{{ roles[i] }}\">{{ roles[i]|upper }}</label><br>
    {% endif %}
{% endfor %}

{{ form_end(form) }}", "admin/_form.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\admin\\_form.html.twig");
    }
}
