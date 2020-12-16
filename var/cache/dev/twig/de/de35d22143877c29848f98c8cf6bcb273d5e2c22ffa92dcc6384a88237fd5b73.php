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

/* profile/_delete.html.twig */
class __TwigTemplate_66345d33fe901fb29f30062aae18700c5d9c5c01685266b7b48f946fb4807955 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_delete.html.twig"));

        // line 1
        echo "<div id=\"app\">

    <button type=\"button\" class=\"btn btn-outline-danger d-flex aligin-center\" data-toggle=\"modal\" data-target=\"#deleteAccount\">Delete account <i>delete</i></button>
    
    <!-- Modal -->
    <div class=\"modal fade text-dark\" id=\"deleteAccount\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title h4\">Delete account</p>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" @click=\"reWriteName = ''\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form method=\"post\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">
                        <p class=\"h5\">Rewrite your data to complete this action</p><br>

                        <input type=\"hidden\" v-model=\"name\" id=\"name\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21))), "html", null, true);
        echo "\">

                        <label for=\"inputName\">Name</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "\" v-model=\"reWriteName\" @keyup=\"checkName\"><br>

                        <label for=\"inputPassword\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\"><br>

                        <div class=\"d-flex justify-content-between\">
                            <button type=\"submit\" class=\"btn btn-outline-danger d-flex aligin-center\" :disabled=\"disabled\" onclick=\"return confirm('Are you really sure?')\">Delete account <i>delete</i></button>
                            <button type=\"button\" class=\"mx-3 button-gray\" data-dismiss=\"modal\" @click=\"reWriteName = ''\">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <p>Do you really want delete this account?</p>
                    <cite class=\"text-danger\">This action is irreversible</cite>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    new Vue({
        el: '#app',
        data: {
            disabled: true,
            reWriteName: '',
            name: ''
        },
        methods: {
            checkName(){
                this.disabled = this.name != this.reWriteName;
            }
        },
        created(){
            this.name = \$(\"#name\").val()
            this.checkName();
        }
    })

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profile/_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  71 => 21,  66 => 19,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"app\">

    <button type=\"button\" class=\"btn btn-outline-danger d-flex aligin-center\" data-toggle=\"modal\" data-target=\"#deleteAccount\">Delete account <i>delete</i></button>
    
    <!-- Modal -->
    <div class=\"modal fade text-dark\" id=\"deleteAccount\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title h4\">Delete account</p>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" @click=\"reWriteName = ''\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form method=\"post\" action=\"{{ path('profile_delete', {'id': app.user.id}) }}\">
                        <p class=\"h5\">Rewrite your data to complete this action</p><br>

                        <input type=\"hidden\" v-model=\"name\" id=\"name\" value=\"{{ app.user.name }}\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ app.user.id) }}\">

                        <label for=\"inputName\">Name</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"{{ app.user.name }}\" v-model=\"reWriteName\" @keyup=\"checkName\"><br>

                        <label for=\"inputPassword\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"password\"><br>

                        <div class=\"d-flex justify-content-between\">
                            <button type=\"submit\" class=\"btn btn-outline-danger d-flex aligin-center\" :disabled=\"disabled\" onclick=\"return confirm('Are you really sure?')\">Delete account <i>delete</i></button>
                            <button type=\"button\" class=\"mx-3 button-gray\" data-dismiss=\"modal\" @click=\"reWriteName = ''\">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <p>Do you really want delete this account?</p>
                    <cite class=\"text-danger\">This action is irreversible</cite>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    new Vue({
        el: '#app',
        data: {
            disabled: true,
            reWriteName: '',
            name: ''
        },
        methods: {
            checkName(){
                this.disabled = this.name != this.reWriteName;
            }
        },
        created(){
            this.name = \$(\"#name\").val()
            this.checkName();
        }
    })

</script>", "profile/_delete.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\profile\\_delete.html.twig");
    }
}
