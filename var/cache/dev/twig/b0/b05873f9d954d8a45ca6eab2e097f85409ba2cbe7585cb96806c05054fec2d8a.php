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

    <div class=\"mt-3 d-flex justify-content-between\">

        <div class=\"d-flex align-center\">
            ";
        // line 11
        $context["limit"] = 15;
        // line 12
        echo "            ";
        $context["isValid"] = (-1 === twig_compare(twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 12, $this->source); })())), (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 12, $this->source); })())));
        // line 13
        echo "
            ";
        // line 14
        if ((isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_new");
            echo "\" class=\"button-green\">New</a>

                ";
        } else {
            // line 18
            echo "                <div class=\"text-light bg-red-600 p-2 rounded\">You can't have more than ";
            echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 18, $this->source); })()), "html", null, true);
            echo " tasks !!</div>
            ";
        }
        // line 20
        echo "
            ";
        // line 21
        if ((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "                ";
            $this->loadTemplate("task/_delete_all.html.twig", "task/index.html.twig", 22)->display($context);
            // line 23
            echo "            ";
        }
        // line 24
        echo "
        </div>
    
        <div class=\"
        text-light
        p-2
        rounded
        ";
        // line 31
        if ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 31, $this->source); })())), 8))) {
            echo " bg-green-600 ";
        } elseif ((-1 === twig_compare(twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 31, $this->source); })())), 13))) {
            echo " bg-yellow-600 ";
        } elseif ((isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 31, $this->source); })())) {
            echo " bg-orange-600 ";
        } else {
            echo " bg-red-600 ";
        }
        // line 32
        echo "
        \">";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 33, $this->source); })())), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " tasks</div>

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
                        <tbody class=\"bg-dark text-light divide-y\">
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 59, $this->source); })()));
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
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 62), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 66), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "dateFor", [], "any", false, false, false, 70), "d-m-Y"), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"px-6 py-4\">
                                        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" class=\"button-yellow\"><i>edit</i></a>
                                        ";
            // line 75
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
            // line 79
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
        // line 90
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
        return array (  262 => 90,  246 => 79,  229 => 75,  225 => 74,  218 => 70,  211 => 66,  204 => 62,  182 => 59,  151 => 33,  148 => 32,  138 => 31,  129 => 24,  126 => 23,  123 => 22,  121 => 21,  118 => 20,  112 => 18,  105 => 15,  103 => 14,  100 => 13,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            {% set isValid = tasks|length < limit %}

            {% if isValid %}
                <a href=\"{{ path('task_new') }}\" class=\"button-green\">New</a>

                {% else %}
                <div class=\"text-light bg-red-600 p-2 rounded\">You can't have more than {{ limit }} tasks !!</div>
            {% endif %}

            {% if tasks %}
                {% include \"task/_delete_all.html.twig\" %}
            {% endif %}

        </div>
    
        <div class=\"
        text-light
        p-2
        rounded
        {% if tasks|length < 8 %} bg-green-600 {% elseif tasks|length < 13 %} bg-yellow-600 {% elseif isValid %} bg-orange-600 {% else %} bg-red-600 {% endif %}

        \">{{ tasks|length }} of {{ limit }} tasks</div>

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
                        <tbody class=\"bg-dark text-light divide-y\">
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

{% endblock %}", "task/index.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\task\\index.html.twig");
    }
}
