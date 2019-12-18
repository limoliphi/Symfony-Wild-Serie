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

/* wild/navbar.html.twig */
class __TwigTemplate_c6e65c7826486d0aa88161e49e933df0e36b6a3af2cc911cc0a3d5675758c009 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/navbar.html.twig"));

        // line 1
        echo "<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\">Wild Series</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\"
                aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"/home\">Accueil <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/wild\">Les séries</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/category\">Ajouter une catégorie à Wild Series</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/program\">AdminProgram</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/season\">AdminSeason</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/episode\">AdminEpisode</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/actor\">AdminActor</a>
                </li>
            </ul>
            ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "email", [], "any", false, false, false, 34), "html", null, true);
            echo "
                <a class=\"nav-link\" href=\"/my-profile\">Mon compte</a>
                <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> Se déconnecter</a>
            ";
        } else {
            // line 38
            echo "                <div class=\"mr-3\">
                    <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><img src=\"https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg\" class=\"rounded-circle z-depth-0\"
                     alt=\"avatar image\" height=\"35\">
                </div>
                <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Se connecter</a>
            ";
        }
        // line 44
        echo "            <li class=\"nav-item\">
                ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "                    <p class=\"align-self-center\" style=\"color: lightgray;\">Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "username", [], "any", false, false, false, 46), "html", null, true);
            echo " !</p>
                ";
        }
        // line 48
        echo "            </li>

        </div>
    </nav>
</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "wild/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 48,  109 => 46,  107 => 45,  104 => 44,  99 => 42,  93 => 39,  90 => 38,  85 => 36,  79 => 34,  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\">Wild Series</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\"
                aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"/home\">Accueil <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/wild\">Les séries</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/category\">Ajouter une catégorie à Wild Series</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/program\">AdminProgram</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/season\">AdminSeason</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/episode\">AdminEpisode</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/actor\">AdminActor</a>
                </li>
            </ul>
            {% if app.user %}
                {{ app.user.email }}
                <a class=\"nav-link\" href=\"/my-profile\">Mon compte</a>
                <a href=\"{{ path('app_logout') }}\"> Se déconnecter</a>
            {% else %}
                <div class=\"mr-3\">
                    <a href=\"{{ path('app_login') }}\"><img src=\"https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg\" class=\"rounded-circle z-depth-0\"
                     alt=\"avatar image\" height=\"35\">
                </div>
                <a href=\"{{ path('app_login') }}\"> Se connecter</a>
            {% endif %}
            <li class=\"nav-item\">
                {% if app.user %}
                    <p class=\"align-self-center\" style=\"color: lightgray;\">Bienvenue {{ app.user.username }} !</p>
                {% endif %}
            </li>

        </div>
    </nav>
</header>
", "wild/navbar.html.twig", "/home/wilder/PhpstormProjects/wild-series/templates/wild/navbar.html.twig");
    }
}
