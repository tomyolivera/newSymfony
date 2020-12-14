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

    <div class=\"mt-3 d-flex align-center\">
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_new");
        echo "\" class=\"button-green\">
            New Task
        </a>
        ";
        // line 12
        if ((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "            <button id=\"deleteAllTasks\" class=\"mx-2 button-red d-flex align-center\">Delete all <i>delete</i></button>
        ";
        }
        // line 15
        echo "    </div>

    <div class=\"flex flex-col\">
        <div class=\"my-2 overflow-x-auto sm:-mx-6 lg:-mx-8\">
            <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead>
                            <tr>
                                <th class=\"px-6 py-3 bg-gray-900 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Name
                                </th>
                                <th class=\"px-6 py-3 bg-gray-900 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Description
                                </th>
                                <th class=\"px-6 py-3 bg-gray-900 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Date
                                </th>
                                <th class=\"px-6 py-3 bg-gray-900 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-dark text-light divide-y divide-gray-200\">
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 39, $this->source); })()));
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
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "dateFor", [], "any", false, false, false, 50), "d-m-Y"), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"button-yellow\"><i>edit</i></a>
                                        ";
            // line 55
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
            // line 59
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
        // line 70
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
        return array (  211 => 70,  195 => 59,  178 => 55,  174 => 54,  167 => 50,  160 => 46,  153 => 42,  131 => 39,  105 => 15,  101 => 13,  99 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Tasks{% endblock %}

{% block body %}
    <p class=\"title\">My Tasks</p>

    <div class=\"mt-3 d-flex align-center\">
        <a href=\"{{ path('task_new') }}\" class=\"button-green\">
            New Task
        </a>
        {% if tasks %}
            <button id=\"deleteAllTasks\" class=\"mx-2 button-red d-flex align-center\">Delete all <i>delete</i></button>
        {% endif %}
    </div>

    <div class=\"flex flex-col\">
        <div class=\"my-2 overflow-x-auto sm:-mx-6 lg:-mx-8\">
            <div class=\"py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8\">
                <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead>
                            <tr>
                                <th class=\"px-6 py-3 bg-gray-900 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Name
                                </th>
                                <th class=\"px-6 py-3 bg-gray-900 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Description
                                </th>
                                <th class=\"px-6 py-3 bg-gray-900 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Date
                                </th>
                                <th class=\"px-6 py-3 bg-gray-900 text-left text-xs leading-4 font-medium text-light uppercase tracking-wider\">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class=\"bg-dark text-light divide-y divide-gray-200\">
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

{% endblock %}", "task/index.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\symfonyFacer\\templates\\task\\index.html.twig");
    }
}