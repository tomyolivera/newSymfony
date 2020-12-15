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

/* admin/_role.html.twig */
class __TwigTemplate_9b29247524c435b9e206ce49ecd9c934e4f9801afbda37edba175842e1e2f8a0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_role.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_role.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "roles", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 2
            echo "    <div class=\"form-roles\">
        ";
            // line 3
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "roles", [], "any", false, false, false, 3), [0 => "ROLE_OWNER"]))) {
                echo "    
            <span class=\"text-yellow-400 d-flex justify-content-between\"> ";
                // line 4
                $context["role"] = twig_split_filter($this->env, $context["rol"], "_");
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 4, $this->source); })()), 1, [], "array", false, false, false, 4), "html", null, true);
                echo " <i>star</i> </span>

            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 6
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "roles", [], "any", false, false, false, 6), [0 => "ROLE_ADMIN"]))) {
                // line 7
                echo "            <span class=\"text-blue-400 d-flex justify-content-between\"> ";
                $context["role"] = twig_split_filter($this->env, $context["rol"], "_");
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 7, $this->source); })()), 1, [], "array", false, false, false, 7), "html", null, true);
                echo " <i>local_fire_department</i> </span>

            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 9
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "roles", [], "any", false, false, false, 9), [0 => "ROLE_MOD"]))) {
                // line 10
                echo "            <span class=\"text-purple-400 d-flex justify-content-between\"> ";
                $context["role"] = twig_split_filter($this->env, $context["rol"], "_");
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 10, $this->source); })()), 1, [], "array", false, false, false, 10), "html", null, true);
                echo " <i>security</i> </span>

            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "roles", [], "any", false, false, false, 12), [0 => "ROLE_USER"]))) {
                // line 13
                echo "            <span class=\"text-green-600 d-flex justify-content-between\"> ";
                $context["role"] = twig_split_filter($this->env, $context["rol"], "_");
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 13, $this->source); })()), 1, [], "array", false, false, false, 13), "html", null, true);
                echo " <i>person</i> </span>

            ";
            } else {
                // line 16
                echo "            <span class=\"text-red-500 d-flex justify-content-between\"> ";
                $context["role"] = twig_split_filter($this->env, $context["rol"], "_");
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 16, $this->source); })()), 1, [], "array", false, false, false, 16), "html", null, true);
                echo " <i>error</i> </span>
        ";
            }
            // line 18
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/_role.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 18,  92 => 16,  83 => 13,  81 => 12,  73 => 10,  71 => 9,  63 => 7,  61 => 6,  54 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for rol in user.roles %}
    <div class=\"form-roles\">
        {% if user.roles == ['ROLE_OWNER'] %}    
            <span class=\"text-yellow-400 d-flex justify-content-between\"> {% set role = rol|split('_') %} {{role[1]}} <i>star</i> </span>

            {% elseif (user.roles == ['ROLE_ADMIN']) %}
            <span class=\"text-blue-400 d-flex justify-content-between\"> {% set role = rol|split('_') %} {{role[1]}} <i>local_fire_department</i> </span>

            {% elseif (user.roles == ['ROLE_MOD']) %}
            <span class=\"text-purple-400 d-flex justify-content-between\"> {% set role = rol|split('_') %} {{role[1]}} <i>security</i> </span>

            {% elseif (user.roles) == ['ROLE_USER'] %}
            <span class=\"text-green-600 d-flex justify-content-between\"> {% set role = rol|split('_') %} {{role[1]}} <i>person</i> </span>

            {% else %}
            <span class=\"text-red-500 d-flex justify-content-between\"> {% set role = rol|split('_') %} {{role[1]}} <i>error</i> </span>
        {% endif %}
    </div>
{% endfor %}", "admin/_role.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\admin\\_role.html.twig");
    }
}
