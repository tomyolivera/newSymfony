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
        echo "    <div>
        ";
        // line 7
        $context["class"] = "bg-gray-900 text-light p-5 mb-5 rounded h-15 w-15 d-flex justify-content-between";
        // line 8
        echo "
        <p class=\"title\">My profile</p>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()));
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
            // line 12
            echo "            <div class=\"text-dark my-5\">

                ";
            // line 15
            echo "                <p class=\"title\">ID </p>
                <div class=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">ID: </span>
                        <span class=\"title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dat"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</span>
                    </div>

                    <div>
                    </div>
                </div>

                ";
            // line 27
            echo "                <p class=\"title\">Photo </p>
                <div class=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 28, $this->source); })()), "html", null, true);
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
            // line 40
            echo "                <p class=\"title\">Name </p>
                <div class=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">Name: </span>
                        <span class=\"title\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dat"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                    </div>

                    <div class=\"d-flex justify-content-between align-center\">
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                ";
            // line 53
            echo "                <p class=\"title\">Email </p>
                <div class=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 54, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">Email: </span>
                        <span class=\"title\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dat"], "email", [], "any", false, false, false, 57), "html", null, true);
            echo "</span>
                    </div>

                    <div class=\"d-flex justify-content-between align-center\">
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                ";
            // line 66
            echo "                <p class=\"title\">Role </p>
                <div class=\"";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">Role: </span>     
                        <span class=\"title\"> ";
            // line 70
            $context["role"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dat"], "roles", [], "any", false, false, false, 70), 0, [], "array", false, false, false, 70), "_");
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 70, $this->source); })()), 1, [], "array", false, false, false, 70), "html", null, true);
            echo " </span>
                    </div>
                    
                    ";
            // line 73
            $this->loadTemplate("profile/_permissions.html.twig", "profile/index.html.twig", 73)->display($context);
            // line 74
            echo "                </div>

                ";
            // line 77
            echo "                <p class=\"title\">Password </p>
                <div class=\"";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">Password: **********</span>
                    </div>

                    <div>
                        <button class=\"button-orange\"><i>edit</i></button>
                    </div>
                </div>

                ";
            // line 89
            echo "                <p class=\"title\">Delete account </p>
                <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 90, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <span class=\"title\">This action is irreversible</span>
                    </div>

                    <div>
                        ";
            // line 96
            $this->loadTemplate("profile/_delete.html.twig", "profile/index.html.twig", 96)->display($context);
            // line 97
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
        // line 104
        echo "
    </div>
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
        return array (  268 => 104,  248 => 97,  246 => 96,  237 => 90,  234 => 89,  221 => 78,  218 => 77,  214 => 74,  212 => 73,  204 => 70,  198 => 67,  195 => 66,  184 => 57,  178 => 54,  175 => 53,  164 => 44,  158 => 41,  155 => 40,  141 => 28,  138 => 27,  128 => 19,  122 => 16,  119 => 15,  115 => 12,  98 => 11,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}
    <div>
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

                {# Delete #}
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
", "profile/index.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\profile\\index.html.twig");
    }
}
