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

/* profile/_disable.html.twig */
class __TwigTemplate_b5deaca7924d85bd1605b1568e4f8852645db000fa1b775311a182da81431b6d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_disable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_disable.html.twig"));

        // line 1
        echo "<button type=\"button\" class=\"btn ";
        echo twig_escape_filter($this->env, (isset($context["color_btn"]) || array_key_exists("color_btn", $context) ? $context["color_btn"] : (function () { throw new RuntimeError('Variable "color_btn" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " d-flex aligin-center\" data-toggle=\"modal\" data-target=\"#disableAccount\">";
        echo twig_escape_filter($this->env, (isset($context["enable_disable"]) || array_key_exists("enable_disable", $context) ? $context["enable_disable"] : (function () { throw new RuntimeError('Variable "enable_disable" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " account</button>

<!-- Modal -->
<div class=\"modal fade text-dark\" id=\"disableAccount\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <p class=\"modal-title h4\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["enable_disable"]) || array_key_exists("enable_disable", $context) ? $context["enable_disable"] : (function () { throw new RuntimeError('Variable "enable_disable" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " account</p>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" @click=\"reWriteName = ''\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form method=\"post\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_disable", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">
                    <p class=\"h5\">Rewrite your data to complete this action</p><br>

                    <input type=\"hidden\" v-model=\"name\" id=\"name\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\">

                    <label for=\"inputName\">Name</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "\" v-model=\"reWriteName\" @keyup=\"checkName\"><br>

                    <label for=\"inputPassword\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\"><br>

                    <div class=\"d-flex justify-content-between\">
                        <button type=\"submit\" class=\"btn ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["color_btn"]) || array_key_exists("color_btn", $context) ? $context["color_btn"] : (function () { throw new RuntimeError('Variable "color_btn" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " d-flex aligin-center\" :disabled=\"disabled\" onclick=\"return confirm('Are you really sure?')\">";
        echo twig_escape_filter($this->env, (isset($context["enable_disable"]) || array_key_exists("enable_disable", $context) ? $context["enable_disable"] : (function () { throw new RuntimeError('Variable "enable_disable" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " account</button>
                        <button type=\"button\" class=\"mx-3 button-gray\" data-dismiss=\"modal\" @click=\"reWriteName = ''\">Cancel</button>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <p>Do you really want ";
        // line 33
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["enable_disable"]) || array_key_exists("enable_disable", $context) ? $context["enable_disable"] : (function () { throw new RuntimeError('Variable "enable_disable" does not exist.', 33, $this->source); })())), "html", null, true);
        echo " this account?</p>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profile/_disable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  87 => 27,  78 => 21,  71 => 17,  65 => 14,  56 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button type=\"button\" class=\"btn {{ color_btn }} d-flex aligin-center\" data-toggle=\"modal\" data-target=\"#disableAccount\">{{ enable_disable }} account</button>

<!-- Modal -->
<div class=\"modal fade text-dark\" id=\"disableAccount\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <p class=\"modal-title h4\">{{ enable_disable }} account</p>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" @click=\"reWriteName = ''\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form method=\"post\" action=\"{{ path('profile_disable', {'id': app.user.id}) }}\">
                    <p class=\"h5\">Rewrite your data to complete this action</p><br>

                    <input type=\"hidden\" v-model=\"name\" id=\"name\" value=\"{{ app.user.name }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\">

                    <label for=\"inputName\">Name</label>
                    <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"{{ app.user.name }}\" v-model=\"reWriteName\" @keyup=\"checkName\"><br>

                    <label for=\"inputPassword\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\"><br>

                    <div class=\"d-flex justify-content-between\">
                        <button type=\"submit\" class=\"btn {{ color_btn }} d-flex aligin-center\" :disabled=\"disabled\" onclick=\"return confirm('Are you really sure?')\">{{ enable_disable }} account</button>
                        <button type=\"button\" class=\"mx-3 button-gray\" data-dismiss=\"modal\" @click=\"reWriteName = ''\">Cancel</button>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <p>Do you really want {{ enable_disable|lower }} this account?</p>
            </div>
        </div>
    </div>
</div>", "profile/_disable.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\profile\\_disable.html.twig");
    }
}
