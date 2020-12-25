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

/* task/index.html.twig */
class __TwigTemplate_7ad76fbe17b6d6f7f99c99388064397bd869508f5ca85cff2f53ee89d8a30416 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
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

        echo "My Tasks";
        
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
        echo "    <p class=\"title\">My Tasks</p>

    <div class=\"mt-3 d-flex justify-content-between\">

        <div class=\"d-flex align-center\">
            ";
        // line 11
        $context["limit"] = 15;
        // line 12
        echo "            <input type=\"hidden\" id=\"limit_tasks\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 13
        $context["isValid"] = (-1 === twig_compare(twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 13, $this->source); })())), (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })())));
        // line 14
        echo "
            ";
        // line 15
        if ((isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_new");
            echo "\" class=\"button-green\">New</a>

                ";
        } else {
            // line 19
            echo "                <div class=\"text-light bg-red-600 p-2 rounded\">You can't have more than ";
            echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 19, $this->source); })()), "html", null, true);
            echo " tasks !!</div>
            ";
        }
        // line 21
        echo "
            <span id=\"btn_delete_all\">
                ";
        // line 23
        if ((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                    ";
            $this->loadTemplate("task/_delete_all.html.twig", "task/index.html.twig", 24)->display($context);
            // line 25
            echo "                ";
        }
        // line 26
        echo "            </span>

        </div>
    
        <div
        id=\"tasks_length\"
        class=\"
        text-light
        p-2
        rounded
        ";
        // line 36
        if ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 36, $this->source); })())), 8))) {
            echo " bg-green-600 ";
        } elseif ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 36, $this->source); })())), 13))) {
            echo " bg-yellow-600 ";
        } elseif ((isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 36, $this->source); })())) {
            echo " bg-orange-600 ";
        } else {
            echo " bg-red-600 ";
        }
        // line 37
        echo "        \">
            ";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 38, $this->source); })())), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " tasks
        </div>

    </div>

    <div class=\"flex flex-col\">
        <div class=\"my-2 overflow-x-auto sm:-mx-6 lg:-mx-8\">
            <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                <div class=\"shadow overflow-hidden sm:rounded-lg\">
                    <table class=\"min-w-full divide-y\">
                        <thead>
                            <tr>
                                <th class=\"px-6 py-3 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Name
                                </th>
                                <th class=\"px-6 py-3 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Description
                                </th>
                                <th class=\"px-6 py-3 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Date
                                </th>
                                <th class=\"px-6 py-3 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-dark text-light divide-y\" id=\"tbody\">
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 65, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            echo "        
                                <tr>
                                    <td class=\"px-6 py-4\">
                                        ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 72), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        ";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "dateFor", [], "any", false, false, false, 76), "d-m-Y"), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"button-yellow\"><i>edit</i></a>
                                        ";
            // line 81
            echo twig_include($this->env, $context, "task/_delete_form.html.twig");
            echo "
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 85
            echo "                                <tr>
                                    <td class=\"px-6 py-4 whitespace-no-wrap\">
                                        <p>You do not have any task yet!</p>
                                    </td>
                                    <td class=\"\"></td>
                                    <td class=\"\"></td>
                                    <td class=\"\"></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tasks.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 107,  306 => 106,  302 => 105,  297 => 104,  287 => 103,  270 => 94,  256 => 85,  239 => 81,  235 => 80,  228 => 76,  221 => 72,  214 => 68,  192 => 65,  160 => 38,  157 => 37,  147 => 36,  135 => 26,  132 => 25,  129 => 24,  127 => 23,  123 => 21,  117 => 19,  110 => 16,  108 => 15,  105 => 14,  103 => 13,  98 => 12,  96 => 11,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Tasks{% endblock %}

{% block body %}
    <p class=\"title\">My Tasks</p>

    <div class=\"mt-3 d-flex justify-content-between\">

        <div class=\"d-flex align-center\">
            {% set limit =  15 %}
            <input type=\"hidden\" id=\"limit_tasks\" value=\"{{ limit }}\">
            {% set isValid = tasks|length < limit %}

            {% if isValid %}
                <a href=\"{{ path('task_new') }}\" class=\"button-green\">New</a>

                {% else %}
                <div class=\"text-light bg-red-600 p-2 rounded\">You can't have more than {{ limit }} tasks !!</div>
            {% endif %}

            <span id=\"btn_delete_all\">
                {% if tasks %}
                    {% include \"task/_delete_all.html.twig\" %}
                {% endif %}
            </span>

        </div>
    
        <div
        id=\"tasks_length\"
        class=\"
        text-light
        p-2
        rounded
        {% if tasks|length < 8 %} bg-green-600 {% elseif tasks|length < 13 %} bg-yellow-600 {% elseif isValid %} bg-orange-600 {% else %} bg-red-600 {% endif %}
        \">
            {{ tasks|length }} of {{ limit }} tasks
        </div>

    </div>

    <div class=\"flex flex-col\">
        <div class=\"my-2 overflow-x-auto sm:-mx-6 lg:-mx-8\">
            <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                <div class=\"shadow overflow-hidden sm:rounded-lg\">
                    <table class=\"min-w-full divide-y\">
                        <thead>
                            <tr>
                                <th class=\"px-6 py-3 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Name
                                </th>
                                <th class=\"px-6 py-3 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Description
                                </th>
                                <th class=\"px-6 py-3 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Date
                                </th>
                                <th class=\"px-6 py-3 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-dark text-light divide-y\" id=\"tbody\">
                            {% for task in tasks %}        
                                <tr>
                                    <td class=\"px-6 py-4\">
                                        {{task.name}}
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        {{task.description}}
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        {{ task.dateFor | date('d-m-Y') }}
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        <a href=\"{{ path('task_edit', {'id': task.id}) }}\" class=\"button-yellow\"><i>edit</i></a>
                                        {{ include('task/_delete_form.html.twig') }}
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td class=\"px-6 py-4 whitespace-no-wrap\">
                                        <p>You do not have any task yet!</p>
                                    </td>
                                    <td class=\"\"></td>
                                    <td class=\"\"></td>
                                    <td class=\"\"></td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('js/tasks.js') }}\"></script>
{% endblock %}", "task/index.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\task\\index.html.twig");
    }
}
