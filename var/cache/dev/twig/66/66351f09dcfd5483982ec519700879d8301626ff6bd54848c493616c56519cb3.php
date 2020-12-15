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
class __TwigTemplate_b796989badab86b5a6decf8e91644de236c76bc3a9181381890d2ebdcce6dd61 extends Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-gray-900 shadow-2xl\">
    <div>
        ";
        // line 3
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 4
            echo "            <p class=\"text-light\">
                Welcome: 
                <span class=\"text-warning\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
            echo " </span>
            </p>
        ";
        } else {
            // line 9
            echo "            <a href=\"\" class=\"navbar-brand text-light\">Welcome to FACER</a>
        ";
        }
        // line 11
        echo "            
    </div>
    <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#menu-collapse\" aria-expanded=\"false\">
        <i class=\"material-icons text-white\">menu</i>
    </button>
    <div id=\"menu-collapse\" class=\"collapse navbar-collapse\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link rounded mx-2\" href=\"https://www.facebook.com/tomi.olivera.2004\" target=\"_blank\">
                    <img src=\"https://i.pinimg.com/originals/57/98/53/5798533bb3f2a08ee3514f9c6f6e03be.png\" width=\"35\" heigth=\"35\"></img>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link rounded mx-2\" href=\"https://twitter.com/Tomyolivera2004\" target=\"_blank\">
                    <img src=\"https://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png\" width=\"35\" heigth=\"35\"></img>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link rounded mx-2\" href=\"https://www.instagram.com/tomy_olivera/\" target=\"_blank\">
                    <img src=\"https://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png\" width=\"35\" heigth=\"35\"></img>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link rounded mx-2 bg-gray-200\" href=\"https://github.com/tomyolivera\" target=\"_blank\">
                    <img src=\"https://image.flaticon.com/icons/png/512/25/25231.png\" width=\"35\" heigth=\"35\"></img>
                </a>
            </li>
        </ul>
    </div>
</nav>

";
        // line 43
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
        return array (  96 => 43,  63 => 11,  59 => 9,  53 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-gray-900 shadow-2xl\">
    <div>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <p class=\"text-light\">
                Welcome: 
                <span class=\"text-warning\">{{ app.user.name }} </span>
            </p>
        {% else %}
            <a href=\"\" class=\"navbar-brand text-light\">Welcome to FACER</a>
        {% endif %}
            
    </div>
    <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#menu-collapse\" aria-expanded=\"false\">
        <i class=\"material-icons text-white\">menu</i>
    </button>
    <div id=\"menu-collapse\" class=\"collapse navbar-collapse\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link rounded mx-2\" href=\"https://www.facebook.com/tomi.olivera.2004\" target=\"_blank\">
                    <img src=\"https://i.pinimg.com/originals/57/98/53/5798533bb3f2a08ee3514f9c6f6e03be.png\" width=\"35\" heigth=\"35\"></img>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link rounded mx-2\" href=\"https://twitter.com/Tomyolivera2004\" target=\"_blank\">
                    <img src=\"https://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png\" width=\"35\" heigth=\"35\"></img>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link rounded mx-2\" href=\"https://www.instagram.com/tomy_olivera/\" target=\"_blank\">
                    <img src=\"https://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png\" width=\"35\" heigth=\"35\"></img>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link rounded mx-2 bg-gray-200\" href=\"https://github.com/tomyolivera\" target=\"_blank\">
                    <img src=\"https://image.flaticon.com/icons/png/512/25/25231.png\" width=\"35\" heigth=\"35\"></img>
                </a>
            </li>
        </ul>
    </div>
</nav>

{# Preloader #}
<div class=\"allPage\">
    <div class=\"preloader\"></div>
</div>

<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
<script src=\"//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js\"></script>", "header.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\header.html.twig");
    }
}
