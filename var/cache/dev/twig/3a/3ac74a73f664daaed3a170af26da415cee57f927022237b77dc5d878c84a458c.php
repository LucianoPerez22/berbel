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

/* area/view.html.twig */
class __TwigTemplate_5247e4e4500f58c8fad3ea476908fe636a6e741d045c2623c2c1a8fc77ff8697 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'buttonsTitle' => [$this, 'block_buttonsTitle'],
            'viewContent' => [$this, 'block_viewContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "global/layout_view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "area/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "area/view.html.twig"));

        // line 3
        $context["titlePage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.areas.title.view");
        // line 4
        $context["menu"] = "areas";
        // line 1
        $this->parent = $this->loadTemplate("global/layout_view.html.twig", "area/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_buttonsTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "buttonsTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "buttonsTitle"));

        // line 7
        $context["referer"] = (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "server", [], "any", false, false, false, 7), "get", [0 => "HTTP_REFERER"], "method", false, false, false, 7))) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["app"] ?? null), "request", [], "any", false, true, false, 8), "server", [], "any", false, true, false, 8), "get", [0 => "HTTP_REFERER"], "method", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 8), "server", [], "any", false, true, false, 8), "get", [0 => "HTTP_REFERER"], "method", false, false, false, 8), "/")) : ("/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("areas_list")));
        // line 10
        echo "<li>
    ";
        // line 11
        echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "buttonReturn", [0 => (isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 11, $this->source); })())]);
        echo "
</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_viewContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "viewContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "viewContent"));

        // line 16
        echo "<div class=\"znv-card-full znv-highlight\">
    <div class=\"znv-form-group-view\">
        <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.areas.labels.name"), "html", null, true);
        echo "</p>
        <h3>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h3>
    </div>
</div>

<div class=\"znv-card-full znv-two-column\">
  ";
        // line 24
        echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "cardHalfView", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.areas.labels.status"), 1 => twig_get_attribute($this->env, $this->source, (isset($context["area"]) || array_key_exists("area", $context) ? $context["area"] : (function () { throw new RuntimeError('Variable "area" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24)]);
        echo "  
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "area/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  111 => 19,  107 => 18,  103 => 16,  93 => 15,  80 => 11,  77 => 10,  75 => 8,  74 => 7,  64 => 6,  53 => 1,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout_view.html.twig' %}

{% set titlePage = \"page.areas.title.view\" | trans %}
{% set menu = \"areas\" %}

{% block buttonsTitle %}
{% set referer = (app.request.server.get('HTTP_REFERER') is not null ?
            app.request.server.get('HTTP_REFERER')|default('/') :
            path('areas_list')) %}
<li>
    {{ macro_buttonReturn(referer) }}
</li>
{% endblock %}

{% block viewContent %}
<div class=\"znv-card-full znv-highlight\">
    <div class=\"znv-form-group-view\">
        <p>{{ 'page.areas.labels.name'|trans }}</p>
        <h3>{{ area.name }}</h3>
    </div>
</div>

<div class=\"znv-card-full znv-two-column\">
  {{ macro_cardHalfView('page.areas.labels.status' | trans, area.status) }}  
</div>

{% endblock %}
", "area/view.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/area/view.html.twig");
    }
}
