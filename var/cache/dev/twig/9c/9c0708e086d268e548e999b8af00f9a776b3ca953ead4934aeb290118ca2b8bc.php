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

/* profile/index.html.twig */
class __TwigTemplate_44f39c3a286089b309ab613c160d0714c638714c3a76f7e1605ced6ec59332fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profile";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"appProfile\">
        
        ";
        // line 8
        $context["class"] = "bg-gray-900 text-light p-5 mb-5 rounded h-15 w-15 d-flex justify-content-between";
        // line 9
        echo "
        <p class=\"title\">My profile</p>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["dat"]) {
            // line 13
            echo "            <div class=\"text-dark my-5\">

                ";
            // line 16
            echo "                <p class=\"title\">ID </p>
                <div class=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">ID: </span>
                        <span class=\"title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dat"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
                    </div>

                    <div>
                    </div>
                </div>

                ";
            // line 28
            echo "                <p class=\"title\">Photo </p>
                <div class=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">Photo: </span>
                        <span class=\"h5\">You don´t have a photo yet</span>
                    </div>

                    <div class=\"d-flex justify-content-between align-center\">
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                ";
            // line 41
            echo "                <p class=\"title\">Name </p>
                <div class=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">Name: </span>
                        <span class=\"title\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dat"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
                    </div>

                    <div class=\"d-flex justify-content-between align-center\">
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                ";
            // line 54
            echo "                <p class=\"title\">Email </p>
                <div class=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">Email: </span>
                        <span class=\"title\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dat"], "email", [], "any", false, false, false, 58), "html", null, true);
            echo "</span>
                    </div>

                    <div class=\"d-flex justify-content-between align-center\">
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                ";
            // line 67
            echo "                <p class=\"title\">Role </p>
                <div class=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">Role: </span>     
                        <span class=\"title\"> ";
            // line 71
            $context["role"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dat"], "roles", [], "any", false, false, false, 71), 0, [], "array", false, false, false, 71), "_");
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 71, $this->source); })()), 1, [], "array", false, false, false, 71), "html", null, true);
            echo " </span>
                    </div>
                    
                    ";
            // line 74
            $this->loadTemplate("profile/_permissions.html.twig", "profile/index.html.twig", 74)->display($context);
            // line 75
            echo "                </div>

                ";
            // line 78
            echo "                <p class=\"title\">Password </p>
                <div class=\"";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 79, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">Password: **********</span>
                    </div>

                    <div>
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                ";
            // line 90
            echo "                ";
            // line 91
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DISABLE")) {
                // line 92
                echo "                    ";
                $context["enable_disable"] = "Enable";
                // line 93
                echo "                    ";
                $context["color_btn"] = "btn-outline-success";
                // line 94
                echo "                ";
            } else {
                // line 95
                echo "                    ";
                $context["enable_disable"] = "Disable";
                // line 96
                echo "                    ";
                $context["color_btn"] = "btn-outline-danger";
                // line 97
                echo "                ";
            }
            // line 98
            echo "
                <p class=\"title\">";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["enable_disable"]) || array_key_exists("enable_disable", $context) ? $context["enable_disable"] : (function () { throw new RuntimeError('Variable "enable_disable" does not exist.', 99, $this->source); })()), "html", null, true);
            echo " account</p>
                <div class=\"";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 100, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["enable_disable"]) || array_key_exists("enable_disable", $context) ? $context["enable_disable"] : (function () { throw new RuntimeError('Variable "enable_disable" does not exist.', 102, $this->source); })()), "html", null, true);
            echo " account</span>
                    </div>

                    <div>
                        ";
            // line 106
            $this->loadTemplate("profile/_disable.html.twig", "profile/index.html.twig", 106)->display($context);
            // line 107
            echo "                    </div>
                </div>

                ";
            // line 111
            echo "                <p class=\"title\">Delete account </p>
                <div class=\"";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 112, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">This action is irreversible</span>
                    </div>

                    <div>
                        ";
            // line 118
            $this->loadTemplate("profile/_delete.html.twig", "profile/index.html.twig", 118)->display($context);
            // line 119
            echo "                    </div>
                </div>

                <br><br><br><br><br><br><br><br>

            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/profile.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 133,  341 => 131,  331 => 130,  319 => 126,  299 => 119,  297 => 118,  288 => 112,  285 => 111,  280 => 107,  278 => 106,  271 => 102,  266 => 100,  262 => 99,  259 => 98,  256 => 97,  253 => 96,  250 => 95,  247 => 94,  244 => 93,  241 => 92,  238 => 91,  236 => 90,  223 => 79,  220 => 78,  216 => 75,  214 => 74,  206 => 71,  200 => 68,  197 => 67,  186 => 58,  180 => 55,  177 => 54,  166 => 45,  160 => 42,  157 => 41,  143 => 29,  140 => 28,  130 => 20,  124 => 17,  121 => 16,  117 => 13,  100 => 12,  95 => 9,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}
    <div id=\"appProfile\">
        
        {% set class = \"bg-gray-900 text-light p-5 mb-5 rounded h-15 w-15 d-flex justify-content-between\" %}

        <p class=\"title\">My profile</p>

        {% for dat in data %}
            <div class=\"text-dark my-5\">

                {# ID #}
                <p class=\"title\">ID </p>
                <div class=\"{{ class }}\">
                    <div>
                        <span class=\"title\">ID: </span>
                        <span class=\"title\">{{dat.id}}</span>
                    </div>

                    <div>
                    </div>
                </div>

                {# Photo #}
                <p class=\"title\">Photo </p>
                <div class=\"{{ class }}\">
                    <div>
                        <span class=\"title\">Photo: </span>
                        <span class=\"h5\">You don´t have a photo yet</span>
                    </div>

                    <div class=\"d-flex justify-content-between align-center\">
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                {# Name #}
                <p class=\"title\">Name </p>
                <div class=\"{{ class }}\">
                    <div>
                        <span class=\"title\">Name: </span>
                        <span class=\"title\">{{dat.name}}</span>
                    </div>

                    <div class=\"d-flex justify-content-between align-center\">
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                {# Email #}
                <p class=\"title\">Email </p>
                <div class=\"{{ class }}\">
                    <div>
                        <span class=\"title\">Email: </span>
                        <span class=\"title\">{{dat.email}}</span>
                    </div>

                    <div class=\"d-flex justify-content-between align-center\">
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                {# Email #}
                <p class=\"title\">Role </p>
                <div class=\"{{ class }}\">
                    <div>
                        <span class=\"title\">Role: </span>     
                        <span class=\"title\"> {% set role = dat.roles[0]|split('_') %} {{role[1]}} </span>
                    </div>
                    
                    {% include \"profile/_permissions.html.twig\" %}
                </div>

                {# Password #}
                <p class=\"title\">Password </p>
                <div class=\"{{ class }}\">
                    <div>
                        <span class=\"title\">Password: **********</span>
                    </div>

                    <div>
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                {# Actions #}
                {# Disable - Enable account #}
                {% if is_granted('ROLE_DISABLE') %}
                    {% set enable_disable = 'Enable' %}
                    {% set color_btn = 'btn-outline-success' %}
                {% else %}
                    {% set enable_disable = 'Disable' %}
                    {% set color_btn = 'btn-outline-danger' %}
                {% endif %}

                <p class=\"title\">{{ enable_disable }} account</p>
                <div class=\"{{ class }}\">
                    <div>
                        <span class=\"title\">{{ enable_disable }} account</span>
                    </div>

                    <div>
                        {% include \"profile/_disable.html.twig\" %}
                    </div>
                </div>

                {# Delete account #}
                <p class=\"title\">Delete account </p>
                <div class=\"{{ class }}\">
                    <div>
                        <span class=\"title\">This action is irreversible</span>
                    </div>

                    <div>
                        {% include \"profile/_delete.html.twig\" %}
                    </div>
                </div>

                <br><br><br><br><br><br><br><br>

            </div>
        {% endfor %}

    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}

<script src=\"{{ asset('js/profile.js') }}\"></script>
{% endblock %}", "profile/index.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\profile\\index.html.twig");
    }
}
