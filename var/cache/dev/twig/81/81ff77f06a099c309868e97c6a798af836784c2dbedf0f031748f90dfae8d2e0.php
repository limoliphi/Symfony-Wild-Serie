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

/* home.html.twig */
class __TwigTemplate_a909a58053e48b2ba09baff6a1343ad07cbc1f41cac3dda9adff1987793cd2ab extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"m-5 jumbotron jumbotron-fluid\">
            <div class=\"container\">
                <h1 class=\"d-flex justify-content-center display-4\">Bienvenue sur le site Wild Series</h1>
                <p class=\"d-flex justify-content-center lead\">Découvrez toutes les séries, les saisons et les épisodes
                    disponibles sur le site</p>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"d-flex justify-content-around\">
            <div class=\"card\" style=\"width: 18rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Tester une série culte</h5>
                    <p class=\"card-text\">Après une apocalypse ayant transformé la quasi-totalité de la population en
                        zombies,
                        un groupe d'hommes et de femmes mené par l'officier Rick Grimes tente de survivre.
                        Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde.</p>
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_show", ["slug" => "walking-dead"]);
        echo "\">
                        <button type=\"button\" class=\"btn btn-primary btn-lg\">The Walking Dead</button>
                    </a>
                </div>
            </div>

            <div class=\"card\" style=\"width: 18rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Tout le catalogue</h5>
                    <p class=\"card-text\">Wild Series est une entreprise multinationale, opérant dans le secteur
                        d'activité des industries créatives par la distribution et
                        l'exploitation d'œuvres cinématographiques et télévisuelles par le biais d'une plate-forme
                        dédiée.</p>
                    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_index");
        echo "\">
                        <button type=\"button\" class=\"btn btn-secondary btn-lg\">Faites votre choix</button>
                    </a>
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
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  89 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <div class=\"m-5 jumbotron jumbotron-fluid\">
            <div class=\"container\">
                <h1 class=\"d-flex justify-content-center display-4\">Bienvenue sur le site Wild Series</h1>
                <p class=\"d-flex justify-content-center lead\">Découvrez toutes les séries, les saisons et les épisodes
                    disponibles sur le site</p>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"d-flex justify-content-around\">
            <div class=\"card\" style=\"width: 18rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Tester une série culte</h5>
                    <p class=\"card-text\">Après une apocalypse ayant transformé la quasi-totalité de la population en
                        zombies,
                        un groupe d'hommes et de femmes mené par l'officier Rick Grimes tente de survivre.
                        Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde.</p>
                    <a href=\"{{ path('wild_show', { 'slug': \"walking-dead\" }) }}\">
                        <button type=\"button\" class=\"btn btn-primary btn-lg\">The Walking Dead</button>
                    </a>
                </div>
            </div>

            <div class=\"card\" style=\"width: 18rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Tout le catalogue</h5>
                    <p class=\"card-text\">Wild Series est une entreprise multinationale, opérant dans le secteur
                        d'activité des industries créatives par la distribution et
                        l'exploitation d'œuvres cinématographiques et télévisuelles par le biais d'une plate-forme
                        dédiée.</p>
                    <a href=\"{{ path('wild_index') }}\">
                        <button type=\"button\" class=\"btn btn-secondary btn-lg\">Faites votre choix</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "home.html.twig", "/home/wilder/PhpstormProjects/wild-series/templates/home.html.twig");
    }
}
