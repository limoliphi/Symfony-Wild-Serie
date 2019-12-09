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

/* wild/index.html.twig */
class __TwigTemplate_9e13ba4fb190d4f341cdc600e8c53df833a7eb37719cb6c19c59350a1db6bb24 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wild/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Toutes les séries";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"m-5 container-fluid\">
        <h1>Toutes les séries... de Wild Series</h1>
    </div>
    <div class=\"container-fluid\">
        <div class=\"d-flex justify-content-around\">
            <div class=\"d-flex flex-wrap\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programs"]) || array_key_exists("programs", $context) ? $context["programs"] : (function () { throw new RuntimeError('Variable "programs" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 13
            echo "                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["program"], "poster", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"film image\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["program"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["program"], "category", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                            <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["program"], "summary", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["program"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">Découvrez la série</a>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                    Aucune série trouvée.
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </div>
        </div>
    </div>
    <div class=\"m-5 d-flex justify-content-around\">
        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">
            <button type=\"button\" class=\"btn btn-primary\">Retour à l'accueil</button>
        </a>
        <a href=\"/category\">
            <button type=\"button\" class=\"btn btn-danger\">Ajouter une catégorie à Wild Series</button>
        </a>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "wild/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 29,  122 => 25,  115 => 23,  106 => 19,  102 => 18,  98 => 17,  94 => 16,  89 => 14,  86 => 13,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Toutes les séries{% endblock %}

{% block body %}
    <div class=\"m-5 container-fluid\">
        <h1>Toutes les séries... de Wild Series</h1>
    </div>
    <div class=\"container-fluid\">
        <div class=\"d-flex justify-content-around\">
            <div class=\"d-flex flex-wrap\">
                {% for program in programs %}
                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"{{ program.poster }}\" class=\"card-img-top\" alt=\"film image\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ program.title }}</h5>
                            <p class=\"card-text\">{{ program.category.name }}</p>
                            <p>{{ program.summary }}</p>
                            <a href=\"{{ path('wild_show', {'slug': program.slug}) }}\">Découvrez la série</a>
                        </div>
                    </div>
                {% else %}
                    Aucune série trouvée.
                {% endfor %}
            </div>
        </div>
    </div>
    <div class=\"m-5 d-flex justify-content-around\">
        <a href=\"{{ path('app_index') }}\">
            <button type=\"button\" class=\"btn btn-primary\">Retour à l'accueil</button>
        </a>
        <a href=\"/category\">
            <button type=\"button\" class=\"btn btn-danger\">Ajouter une catégorie à Wild Series</button>
        </a>
    </div>
    </div>
{% endblock %}
", "wild/index.html.twig", "/home/wilder/PhpstormProjects/wild-series/templates/wild/index.html.twig");
    }
}
