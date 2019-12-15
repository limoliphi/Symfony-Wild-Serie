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

/* episode/show.html.twig */
class __TwigTemplate_f86636a98de84eb157cadda1ff7fc34ef8946c12fc5decb9a02be0bf50d34464 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "episode/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "episode/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "episode/show.html.twig", 1);
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

        echo "Episodes";
        
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
        echo "    <div class=\"m-5 container\">
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>

        <h2>Episode ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 9, $this->source); })()), "number", [], "any", false, false, false, 9), "html", null, true);
        echo " de la saison ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
        <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
        <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 11, $this->source); })()), "synopsis", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>


        <div class=\"d-flex justify-content-between mt-3\">
            <div>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("season_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">
                    <button class=\"btn btn-primary\">Voir la saison</button>
                </a>
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("program_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 19, $this->source); })()), "slug", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">
                    <button class=\"btn btn-primary\">Voir la série</button>
                </a>
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_index");
        echo "\">
                    <button class=\"btn btn-primary\">Retour aux séries</button>
                </a>
            </div>
            <div class=\"d-flex\">
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("episode_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 27, $this->source); })()), "slug", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">
                    <button class=\"btn btn-primary mr-1\">Modifier l'épisode</button>
                </a>
                ";
        // line 30
        echo twig_include($this->env, $context, "episode/_delete_form.html.twig");
        echo "
            </div>
        </div>
    </div>


    <div class=\"m-5 container\">
        <h2>Qu'en avez-vous pensé ?</h2>

        ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "            <div class=\"m-5  border-primary\">
                ";
            // line 41
            echo twig_include($this->env, $context, "comment/_form.html.twig");
            echo "
            </div>
        ";
        } else {
            // line 44
            echo "            <div>
                <p>Vous devez être connecté pour pouvoir laisser un message...</p>
                <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                    <button type=\"button\" class=\"btn btn-success\">Se connecter</button>
                </a>
            </div>
        ";
        }
        // line 51
        echo "
        <hr>
        <div class=\"m-5 container\">
            <h3>Vos commentaires :</h3>

            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 57
            echo "
                <div class=\"card mt-5 mb-5 border-dark\">
                    <div class=\"card-body d-flex justify-content-between bg-secondary\">
                        <h3>Par ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 60), "username", [], "any", false, false, false, 60), "html", null, true);
            echo " :</h3>
                    </div>
                    <p class=\"p-2\">Votre note : ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 62), "html", null, true);
            echo " / 5</p> <br>
                    <p class=\"p-2\">Votre message : ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 63), "html", null, true);
            echo "</p>
                </div>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "episode/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 68,  200 => 63,  196 => 62,  191 => 60,  186 => 57,  182 => 56,  175 => 51,  167 => 46,  163 => 44,  157 => 41,  154 => 40,  152 => 39,  140 => 30,  134 => 27,  126 => 22,  120 => 19,  114 => 16,  106 => 11,  102 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Episodes{% endblock %}

{% block body %}
    <div class=\"m-5 container\">
        <h1>{{ program.title }}</h1>

        <h2>Episode {{ episode.number }} de la saison {{ season.id }}</h2>
        <p>{{ episode.title }}</p>
        <p>{{ episode.synopsis }}</p>


        <div class=\"d-flex justify-content-between mt-3\">
            <div>
                <a href=\"{{ path('season_show', {'id': season.id }) }}\">
                    <button class=\"btn btn-primary\">Voir la saison</button>
                </a>
                <a href=\"{{ path('program_show', {'slug': program.slug }) }}\">
                    <button class=\"btn btn-primary\">Voir la série</button>
                </a>
                <a href=\"{{ path('wild_index') }}\">
                    <button class=\"btn btn-primary\">Retour aux séries</button>
                </a>
            </div>
            <div class=\"d-flex\">
                <a href=\"{{ path('episode_edit', {'slug': episode.slug}) }}\">
                    <button class=\"btn btn-primary mr-1\">Modifier l'épisode</button>
                </a>
                {{ include('episode/_delete_form.html.twig') }}
            </div>
        </div>
    </div>


    <div class=\"m-5 container\">
        <h2>Qu'en avez-vous pensé ?</h2>

        {% if app.user %}
            <div class=\"m-5  border-primary\">
                {{ include('comment/_form.html.twig') }}
            </div>
        {% else %}
            <div>
                <p>Vous devez être connecté pour pouvoir laisser un message...</p>
                <a href=\"{{ path('app_login') }}\">
                    <button type=\"button\" class=\"btn btn-success\">Se connecter</button>
                </a>
            </div>
        {% endif %}

        <hr>
        <div class=\"m-5 container\">
            <h3>Vos commentaires :</h3>

            {% for comment in comments %}

                <div class=\"card mt-5 mb-5 border-dark\">
                    <div class=\"card-body d-flex justify-content-between bg-secondary\">
                        <h3>Par {{ comment.author.username }} :</h3>
                    </div>
                    <p class=\"p-2\">Votre note : {{ comment.rate }} / 5</p> <br>
                    <p class=\"p-2\">Votre message : {{ comment.comment }}</p>
                </div>


            {% endfor %}
        </div>
    </div>
{% endblock %}

", "episode/show.html.twig", "/home/wilder/PhpstormProjects/wild-series/templates/episode/show.html.twig");
    }
}
