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

/* chat/index.html.twig */
class __TwigTemplate_a34028dc8ef8255aead0f9b07a1f0de4eca43e69b3b92ad7aaae1d9762b5ffcc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chat/index.html.twig", 1);
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

        echo "Chats";
        
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
        echo "
    <div class=\"row text-light d-flex\">
        <div class=\"col col-md-4\">
            <div class=\"bg-gray-800 p-2 d-flex justify-content-between align-center\">
                <div class=\"rounded-full h-12 w-12 bg-yellow-800 flex items-center justify-center\">
                    PHOTO
                </div>

                <div class=\"more\">
                    New chat | Options
                </div>
            </div>

            <div class=\"bg-gray-900 p-2\">
                <div class=\"p-2\">
                    <input type=\"text\" placeholder=\"Search a message or chat\" class=\"form-control\">
                </div>

                ";
        // line 24
        echo "                
                <div class=\"side\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 20, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "                        <a href=\"#\" class=\"p-2 row hover:bg-gray-800 text-light\" style=\"text-decoration:none;width:100%;\">
                            <div class=\"photo col col-md-2\">
                                <div class=\"rounded-full h-12 w-12 bg-yellow-800 flex items-center justify-center\">
                                    PHOTO
                                </div>
                            </div>

                            <div class=\"info col col-md-10\">
                                <div class=\"d-flex justify-content-between\">
                                    <span class=\"titles h5\">Title</span>
                                    <span class=\"hour h6 text-orange-500\">12:00</span>
                                </div>

                                <div class=\"last_message\" style=\"height:30px;overflow:hidden;\">
                                    <span><span class=\"text-primary\">Carlos</span>: Lorem ipsum dolor sit amet consectetur, adipisicing elit</span>
                                </div>
                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </div>
            </div>
        </div>

        ";
        // line 51
        echo "        <div class=\"col col-md-8 bg-gray-800 divide-y divide-gray-700\">
            <div class=\"bg-gray-800 p-2 flex justify-between align-center\">
                <div class=\"row\">
                    <div class=\"col col-md-2 mr-3\">
                        <div class=\"rounded-full h-12 w-12 bg-yellow-800 flex items-center justify-center\">PHOTO</div>
                    </div>

                    <div class=\"col col-md-9\">
                        <div>
                            <span class=\"titles h5\">Title</span>
                        </div>

                        <div class=\"last_message\">
                            Person1, Person2, Person3
                        </div>
                    </div>
                </div>

                <div>
                    Search | Options
                </div>
            </div>

            ";
        // line 75
        echo "            <div class=\"side\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 50, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 77
            echo "                    <div class=\"p-3 my-3 bg-gray-700 w-25\">
                        <div class=\"flex justify-between\">
                            <span class=\"h6 text-red-400\">Carlos</span>
                            <span class=\"hour h6 text-orange-500\">12:00</span>
                        </div>

                        <span>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                        </span>
                    </div>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "            </div>

            ";
        // line 98
        echo "            <div class=\"send-message flex justify-between p-3\">
                <input class=\"form-control\" placeholder=\"Message\">
                <button class=\"button-green mx-3 flex align-center\" :disabled=\"disabled\"><i>send</i></button>
            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "chat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 98,  201 => 95,  178 => 77,  174 => 76,  171 => 75,  146 => 51,  140 => 46,  116 => 27,  112 => 26,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chats{% endblock %}

{% block body %}

    <div class=\"row text-light d-flex\">
        <div class=\"col col-md-4\">
            <div class=\"bg-gray-800 p-2 d-flex justify-content-between align-center\">
                <div class=\"rounded-full h-12 w-12 bg-yellow-800 flex items-center justify-center\">
                    PHOTO
                </div>

                <div class=\"more\">
                    New chat | Options
                </div>
            </div>

            <div class=\"bg-gray-900 p-2\">
                <div class=\"p-2\">
                    <input type=\"text\" placeholder=\"Search a message or chat\" class=\"form-control\">
                </div>

                {# CHATS #}                
                <div class=\"side\">
                    {% for i in range(low = 0, high = 20, step = 1) %}
                        <a href=\"#\" class=\"p-2 row hover:bg-gray-800 text-light\" style=\"text-decoration:none;width:100%;\">
                            <div class=\"photo col col-md-2\">
                                <div class=\"rounded-full h-12 w-12 bg-yellow-800 flex items-center justify-center\">
                                    PHOTO
                                </div>
                            </div>

                            <div class=\"info col col-md-10\">
                                <div class=\"d-flex justify-content-between\">
                                    <span class=\"titles h5\">Title</span>
                                    <span class=\"hour h6 text-orange-500\">12:00</span>
                                </div>

                                <div class=\"last_message\" style=\"height:30px;overflow:hidden;\">
                                    <span><span class=\"text-primary\">Carlos</span>: Lorem ipsum dolor sit amet consectetur, adipisicing elit</span>
                                </div>
                            </div>
                        </a>
                    {% endfor %}
                </div>
            </div>
        </div>

        {# CONTENT CHAT #}
        <div class=\"col col-md-8 bg-gray-800 divide-y divide-gray-700\">
            <div class=\"bg-gray-800 p-2 flex justify-between align-center\">
                <div class=\"row\">
                    <div class=\"col col-md-2 mr-3\">
                        <div class=\"rounded-full h-12 w-12 bg-yellow-800 flex items-center justify-center\">PHOTO</div>
                    </div>

                    <div class=\"col col-md-9\">
                        <div>
                            <span class=\"titles h5\">Title</span>
                        </div>

                        <div class=\"last_message\">
                            Person1, Person2, Person3
                        </div>
                    </div>
                </div>

                <div>
                    Search | Options
                </div>
            </div>

            {# MESSAGES #}
            <div class=\"side\">
                {% for i in range(low = 0, high = 50, step = 1) %}
                    <div class=\"p-3 my-3 bg-gray-700 w-25\">
                        <div class=\"flex justify-between\">
                            <span class=\"h6 text-red-400\">Carlos</span>
                            <span class=\"hour h6 text-orange-500\">12:00</span>
                        </div>

                        <span>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit
                        </span>
                    </div>
                    
                {% endfor %}
            </div>

            {# SEND MESSAGE #}
            <div class=\"send-message flex justify-between p-3\">
                <input class=\"form-control\" placeholder=\"Message\">
                <button class=\"button-green mx-3 flex align-center\" :disabled=\"disabled\"><i>send</i></button>
            </div>
        </div>

    </div>

{% endblock %}", "chat/index.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\chat\\index.html.twig");
    }
}
