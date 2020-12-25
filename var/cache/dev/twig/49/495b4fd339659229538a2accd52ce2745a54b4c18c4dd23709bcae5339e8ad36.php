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

/* task/_form.html.twig */
class __TwigTemplate_4e0fc3111ee0b15ed1cc099ffc2cc294be59cfa82a5e50b6390cb5355769bf37 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/_form.html.twig"));

        // line 1
        echo "<div id=\"app\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-name\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), 'label');
        echo "
            <p class=\"text-xs\">Min: 3 characters</p>

            <div class=\"form-error\">
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), 'errors');
        echo "
            </div>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), 'widget');
        echo "
        </div>

        <div class=\"form-description\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), 'label');
        echo "
            <div class=\"form-error\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'errors');
        echo "
            </div>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), 'widget');
        echo "
        </div>

        <div class=\"form-description\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "date_for", [], "any", false, false, false, 22), 'label');
        echo "
            <div class=\"form-error\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "date_for", [], "any", false, false, false, 24), 'errors');
        echo "
            </div>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "date_for", [], "any", false, false, false, 26), 'widget');
        echo "
        </div>

        <button type=\"button\" class=\"button-blue my-3\" onclick=\"setActualDate()\">Today</button>

    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
</div>

<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tasks.js"), "html", null, true);
        echo "\"></script>

<script>

    new Vue({
        el: '#app',
        data: {
            disabled: true,
        },
        methods: {
            disableBtn(){
                setTimeout(() => {
                    this.disabled = true;
                }, 1);
            },
            checkField(){
                if(\$(\"#task_name\").val().length >= 3)
                    this.disabled = false;
                else
                    this.disabled = true;

            }
        },
        mounted(){
            this.checkField();
        }
    })

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "task/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  105 => 31,  97 => 26,  92 => 24,  87 => 22,  80 => 18,  75 => 16,  70 => 14,  63 => 10,  58 => 8,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"app\">
    {{ form_start(form) }}
        <div class=\"form-name\">
            {{ form_label(form.name) }}
            <p class=\"text-xs\">Min: 3 characters</p>

            <div class=\"form-error\">
                {{ form_errors(form.name) }}
            </div>
            {{ form_widget(form.name) }}
        </div>

        <div class=\"form-description\">
            {{ form_label(form.description) }}
            <div class=\"form-error\">
                {{ form_errors(form.description) }}
            </div>
            {{ form_widget(form.description) }}
        </div>

        <div class=\"form-description\">
            {{ form_label(form.date_for) }}
            <div class=\"form-error\">
                {{ form_errors(form.date_for) }}
            </div>
            {{ form_widget(form.date_for) }}
        </div>

        <button type=\"button\" class=\"button-blue my-3\" onclick=\"setActualDate()\">Today</button>

    {{ form_end(form) }}
</div>

<script src=\"{{asset('js/tasks.js')}}\"></script>

<script>

    new Vue({
        el: '#app',
        data: {
            disabled: true,
        },
        methods: {
            disableBtn(){
                setTimeout(() => {
                    this.disabled = true;
                }, 1);
            },
            checkField(){
                if(\$(\"#task_name\").val().length >= 3)
                    this.disabled = false;
                else
                    this.disabled = true;

            }
        },
        mounted(){
            this.checkField();
        }
    })

</script>", "task/_form.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\task\\_form.html.twig");
    }
}
