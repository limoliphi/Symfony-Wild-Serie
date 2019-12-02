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

/* wild/show.html.twig */
class __TwigTemplate_00155bc22c144c0488a0d32145d2503a3d3165bf71554fc9cb3d0903ffc06565 extends \Twig\Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wild/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"media\">
        <img class=\"align-self-start mr-3\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 8, $this->source); })()), "poster", [], "any", false, false, false, 8), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " poster\">
        <div class=\"media-body\">
            <div>
                <h1 class=\"mt-0\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
                <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 12, $this->source); })()), "summary", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
                <p>Categorie : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 13, $this->source); })()), "category", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
            </div>
            <div>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seasons"]) || array_key_exists("seasons", $context) ? $context["seasons"] : (function () { throw new RuntimeError('Variable "seasons" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 17
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_season", ["id" => twig_get_attribute($this->env, $this->source, $context["season"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">
                        <button type=\"button\" class=\"btn btn-outline-danger\">Découvrez la
                            saison ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "number", [], "any", false, false, false, 19), "html", null, true);
            echo "</button>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_index");
        echo "\">
                    <button type=\"button\" class=\"btn btn-primary\">Vers toutes les séries</button>
                </a>
            </div>
            <strong>Acteur :</strong>
            <ul>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 28, $this->source); })()), "actors", [], "any", false, false, false, 28));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 29
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_actor", ["id" => twig_get_attribute($this->env, $this->source, $context["actor"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo " </a></li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "                    <li>Aucun acteur pour cette série</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </ul>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "wild/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 33,  143 => 31,  133 => 29,  128 => 28,  118 => 22,  109 => 19,  103 => 17,  99 => 16,  93 => 13,  89 => 12,  85 => 11,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/wild/show.html.twig #}
{% extends 'base.html.twig' %}
{% block title %}{{ slug }}{% endblock %}

{% block body %}

    <div class=\"media\">
        <img class=\"align-self-start mr-3\" src=\"{{ program.poster }}\" alt=\"{{ program.title }} poster\">
        <div class=\"media-body\">
            <div>
                <h1 class=\"mt-0\">{{ program.title }}</h1>
                <p>{{ program.summary }}</p>
                <p>Categorie : {{ program.category.name }}</p>
            </div>
            <div>
                {% for season in seasons %}
                    <a href=\"{{ path('wild_season', { 'id': season.id}) }}\">
                        <button type=\"button\" class=\"btn btn-outline-danger\">Découvrez la
                            saison {{ season.number }}</button>
                    </a>
                {% endfor %}
                <a href=\"{{ path('wild_index') }}\">
                    <button type=\"button\" class=\"btn btn-primary\">Vers toutes les séries</button>
                </a>
            </div>
            <strong>Acteur :</strong>
            <ul>
                {% for actor in program.actors %}
                    <li><a href=\"{{ path('show_actor', {'id': actor.id}) }}\">{{ actor.name }} </a></li>
                {% else %}
                    <li>Aucun acteur pour cette série</li>
                {% endfor %}
            </ul>
        </div>
    </div>


{% endblock %}", "wild/show.html.twig", "/home/wilder/PhpstormProjects/wild-series/templates/wild/show.html.twig");
    }
}
