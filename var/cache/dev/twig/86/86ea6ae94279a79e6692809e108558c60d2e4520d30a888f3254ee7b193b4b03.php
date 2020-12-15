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

/* sideBar.html.twig */
class __TwigTemplate_50f8d956006720038c06bb800177c848dd9375660b220b659873b32775ee3dfa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sideBar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sideBar.html.twig"));

        // line 1
        echo "<div class=\"sidebar-container text-light bg-gray-800 shadow-2xl\">
    <div class=\"logo bg-gray-800\">
        <h4 class=\"h4 mt-2\">FACER</h4>
    </div>
    <div class=\"menu\">
        ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BAN")) {
            // line 7
            echo "            <div class=\"container\">
                <p class=\"text-danger h4\">Your account is banned, you only have access to the Home page</p>
                <p>For more info, click <a class=\"text-info\" href=\"#\">here</a></p>
            </div>
           ";
        } else {
            // line 11
            echo "        
                <a href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\" class=\"d-block p-3 d-flex align-center text-yellow-500\"><i>home</i> Home</a>
                <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_index");
            echo "\" class=\"d-block p-3 d-flex align-center text-green-400\"><i>work</i> Tasks</a>
                <a href=\"#\" class=\"d-block p-3 d-flex align-center text-pink-600\"><i>chat</i> Chats</a>
            ";
            // line 15
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 16
                echo "                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
                echo "\" class=\"d-block p-3 d-flex align-center text-blue-600\"><i>person</i> Profile</a>
            ";
                // line 17
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 18
                    echo "                <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                    echo "\" class=\"d-block p-3 d-flex align-center text-yellow-600\"><i>admin_panel_settings</i> Admin</a>
            ";
                }
                // line 20
                echo "                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\" class=\"d-block p-3 d-flex align-center text-red-600\"><i>logout</i> Logout</a>
            ";
            } else {
                // line 22
                echo "                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" class=\"d-block p-3 d-flex align-center text-green-400\"><i>login</i> Login</a>
                <a href=\"";
                // line 23
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
                echo "\" class=\"d-block p-3 d-flex align-center text-blue-500\"><i>person_add</i> Register</a>
            ";
            }
            // line 25
            echo "            
        ";
        }
        // line 27
        echo "    </div>
</div>

<style>
    .sidebar-container{
        min-height: 100vh;
    }
    .logo{
        padding-left: 1rem;
        padding-top: 0.73rem;
        padding-bottom: 0.73rem;
    }
    .menu{
        width: 18rem;
    }
    .menu > a:hover{
        text-decoration: none;
        color:white;
    }
</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sideBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  102 => 25,  97 => 23,  92 => 22,  86 => 20,  80 => 18,  78 => 17,  73 => 16,  71 => 15,  66 => 13,  62 => 12,  59 => 11,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar-container text-light bg-gray-800 shadow-2xl\">
    <div class=\"logo bg-gray-800\">
        <h4 class=\"h4 mt-2\">FACER</h4>
    </div>
    <div class=\"menu\">
        {% if is_granted('ROLE_BAN') %}
            <div class=\"container\">
                <p class=\"text-danger h4\">Your account is banned, you only have access to the Home page</p>
                <p>For more info, click <a class=\"text-info\" href=\"#\">here</a></p>
            </div>
           {% else %}        
                <a href=\"{{path('index')}}\" class=\"d-block p-3 d-flex align-center text-yellow-500\"><i>home</i> Home</a>
                <a href=\"{{path('task_index')}}\" class=\"d-block p-3 d-flex align-center text-green-400\"><i>work</i> Tasks</a>
                <a href=\"#\" class=\"d-block p-3 d-flex align-center text-pink-600\"><i>chat</i> Chats</a>
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <a href=\"{{path('profile')}}\" class=\"d-block p-3 d-flex align-center text-blue-600\"><i>person</i> Profile</a>
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{path('admin')}}\" class=\"d-block p-3 d-flex align-center text-yellow-600\"><i>admin_panel_settings</i> Admin</a>
            {% endif %}
                <a href=\"{{path('app_logout')}}\" class=\"d-block p-3 d-flex align-center text-red-600\"><i>logout</i> Logout</a>
            {% else %}
                <a href=\"{{path('app_login')}}\" class=\"d-block p-3 d-flex align-center text-green-400\"><i>login</i> Login</a>
                <a href=\"{{path('register')}}\" class=\"d-block p-3 d-flex align-center text-blue-500\"><i>person_add</i> Register</a>
            {% endif %}
            
        {% endif %}
    </div>
</div>

<style>
    .sidebar-container{
        min-height: 100vh;
    }
    .logo{
        padding-left: 1rem;
        padding-top: 0.73rem;
        padding-bottom: 0.73rem;
    }
    .menu{
        width: 18rem;
    }
    .menu > a:hover{
        text-decoration: none;
        color:white;
    }
</style>", "sideBar.html.twig", "C:\\xampp\\htdocs\\files\\symfony_folders\\newSymfony\\templates\\sideBar.html.twig");
    }
}
