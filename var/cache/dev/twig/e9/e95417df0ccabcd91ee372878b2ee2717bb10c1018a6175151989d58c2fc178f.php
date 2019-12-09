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
class __TwigTemplate_eff28ba8f60982b5b85e97f667f970cb4c81bf651df02b444433c6bc18cf9d9a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  96 => 36,  80 => 23,  59 => 4,  52 => 3,  35 => 1,);
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
