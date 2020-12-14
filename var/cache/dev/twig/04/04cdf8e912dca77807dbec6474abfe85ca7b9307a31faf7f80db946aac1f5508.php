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

/* header.html.twig */
class __TwigTemplate_bb5351840f2499afdb23e606e5d4624a0e556e36fca65291b88840d637fe90ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-light text-light bg-blue-500\">
    <div class=\"container\">
        <div>
            <a href=\"\" class=\"navbar-brand text-light\">FACER</a>
        </div>
        <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#menu-collapse\" aria-expanded=\"false\">
            <i class=\"material-icons text-white\">menu</i>
        </button>
        <div id=\"menu-collapse\" class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "                    <li class=\"nav-item\"><p class=\"text-warning nav-link disabled uppercase\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</p></li>
                    <li class=\"nav-item\"><a class=\"text-light nav-link\" href=\"/task\">My tasks</a></li>
                    ";
            // line 14
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 15
                echo "                        <li class=\"nav-item\"><a class=\"text-success nav-link\" href=\"/admin/dashboard\">Control</a></li>
                    ";
            }
            // line 17
            echo "                    <li class=\"nav-item\"><a class=\"text-light nav-link\" href=\"/logout/\">Logout</a></li>
                ";
        } else {
            // line 19
            echo "                    <li class=\"nav-item\"><p class=\"text-light nav-link disabled\" title=\"Login to access\">My tasks</p></li>
                    <li class=\"nav-item\"><a class=\"text-light nav-link\" href=\"/login\">Log In</a></li>
                    <li class=\"nav-item\"><a class=\"text-light nav-link\" href=\"/register\">Register</a></li>
                ";
        }
        // line 23
        echo "            </ul>
        </div>
    </div>
</nav>

";
        // line 29
        echo "<div class=\"allPage\">
    <div class=\"preloader\"></div>
</div>

<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  79 => 23,  73 => 19,  69 => 17,  65 => 15,  63 => 14,  57 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light text-light bg-blue-500\">
    <div class=\"container\">
        <div>
            <a href=\"\" class=\"navbar-brand text-light\">FACER</a>
        </div>
        <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#menu-collapse\" aria-expanded=\"false\">
            <i class=\"material-icons text-white\">menu</i>
        </button>
        <div id=\"menu-collapse\" class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav ml-auto\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"nav-item\"><p class=\"text-warning nav-link disabled uppercase\">{{ app.user.name }}</p></li>
                    <li class=\"nav-item\"><a class=\"text-light nav-link\" href=\"/task\">My tasks</a></li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\"><a class=\"text-success nav-link\" href=\"/admin/dashboard\">Control</a></li>
                    {% endif %}
                    <li class=\"nav-item\"><a class=\"text-light nav-link\" href=\"/logout/\">Logout</a></li>
                {% else %}
                    <li class=\"nav-item\"><p class=\"text-light nav-link disabled\" title=\"Login to access\">My tasks</p></li>
                    <li class=\"nav-item\"><a class=\"text-light nav-link\" href=\"/login\">Log In</a></li>
                    <li class=\"nav-item\"><a class=\"text-light nav-link\" href=\"/register\">Register</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

{# Preloader #}
<div class=\"allPage\">
    <div class=\"preloader\"></div>
</div>

<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js\"></script>", "header.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\symfonyFacer\\templates\\header.html.twig");
    }
}
