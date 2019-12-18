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
        ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 17
            echo "        <div>
            <h2>Nos dernières séries</h2>
            <div class=\"container-fluid row\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["programs"]) || array_key_exists("programs", $context) ? $context["programs"] : (function () { throw new RuntimeError('Variable "programs" does not exist.', 20, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
                // line 21
                echo "                    <div class=\"col-sm-3 offset-1\">
                        <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["program"], "slug", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\"><h5
                                    class=\"serie_title\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["program"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "</h5>
                            <h6 class=\"serie_category\">Catégorie : ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["program"], "category", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                echo "</h6>
                            <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["program"], "poster", [], "any", false, false, false, 25), "html", null, true);
                echo "\" class=\"picture_series\" width=\"100\"></a>
                    </div>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 28
                echo "                    Aucune série trouvée.
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            </div>
            ";
        }
        // line 32
        echo "        </div>
    </div>

    <div>
    ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "
        <div class=\"container\">
            <div class=\"d-flex justify-content-around\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Tester une série culte</h5>
                        <p class=\"card-text\">Après une apocalypse ayant transformé la quasi-totalité de la
                            population en
                            zombies,
                            un groupe d'hommes et de femmes mené par l'officier Rick Grimes tente de survivre.
                            Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde.</p>
                        <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_show", ["slug" => "walking-dead"]);
            echo "\">
                            <button type=\"button\" class=\"btn btn-primary btn-lg\">The Walking Dead</button>
                        </a>
                    </div>
                </div>

                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Tout le catalogue</h5>
                        <p class=\"card-text\">Wild Series est une entreprise multinationale, opérant dans le
                            secteur
                            d'activité des industries créatives par la distribution et
                            l'exploitation d'œuvres cinématographiques et télévisuelles par le biais d'une
                            plate-forme
                            dédiée.</p>
                        <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_index");
            echo "\">
                            <button type=\"button\" class=\"btn btn-secondary btn-lg\">Faites votre choix</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    ";
        }
        
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
        return array (  167 => 63,  149 => 48,  136 => 37,  134 => 36,  128 => 32,  124 => 30,  117 => 28,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  94 => 21,  89 => 20,  84 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
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
        {% if is_granted('ROLE_USER') %}
        <div>
            <h2>Nos dernières séries</h2>
            <div class=\"container-fluid row\">
                {% for program in programs %}
                    <div class=\"col-sm-3 offset-1\">
                        <a href=\"{{ path('wild_show', {'slug': program.slug }) }}\"><h5
                                    class=\"serie_title\">{{ program.title }}</h5>
                            <h6 class=\"serie_category\">Catégorie : {{ program.category.name }}</h6>
                            <img src=\"{{ program.poster }}\" class=\"picture_series\" width=\"100\"></a>
                    </div>
                {% else %}
                    Aucune série trouvée.
                {% endfor %}
            </div>
            {% endif %}
        </div>
    </div>

    <div>
    {% if is_granted('ROLE_ADMIN') %}

        <div class=\"container\">
            <div class=\"d-flex justify-content-around\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Tester une série culte</h5>
                        <p class=\"card-text\">Après une apocalypse ayant transformé la quasi-totalité de la
                            population en
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
                        <p class=\"card-text\">Wild Series est une entreprise multinationale, opérant dans le
                            secteur
                            d'activité des industries créatives par la distribution et
                            l'exploitation d'œuvres cinématographiques et télévisuelles par le biais d'une
                            plate-forme
                            dédiée.</p>
                        <a href=\"{{ path('wild_index') }}\">
                            <button type=\"button\" class=\"btn btn-secondary btn-lg\">Faites votre choix</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    {% endif %}
{% endblock %}
", "home.html.twig", "/home/wilder/PhpstormProjects/wild-series/templates/home.html.twig");
    }
}
