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

/* area/list.html.twig */
class __TwigTemplate_bf880e829ed7874151fc7fbabb3549f074e3dff4098a23ed03509ba1f592675b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'list' => [$this, 'block_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "global/layout_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "area/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "area/list.html.twig"));

        // line 3
        $context["titlePage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.areas.title.list");
        // line 4
        $context["menu"] = "areas";
        // line 6
        $context["formFilterAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("areas_list");
        // line 7
        $context["pathNew"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("area_new");
        // line 8
        $context["labelButtonNew"] = "page.areas.buttons.add";
        // line 9
        $context["rolesNew"] = [0 => "ROLE_AREA_NEW"];
        // line 1
        $this->parent = $this->loadTemplate("global/layout_list.html.twig", "area/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 12
        echo "
";
        // line 14
        echo "    <div class=\"znv-header\">
        <div class=\"znv-col\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.areas.labels.name"), "html", null, true);
        echo "
        </div>
        <div class=\"znv-col\"> ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.areas.labels.status"), "html", null, true);
        echo "
        </div>       
        <div class=\"znv-col-actions\">
        </div>
    </div>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 24
            echo "        <div class=\"znv-line\" data-path=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("area_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["area"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["area"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
            <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.areas.labels.name"), "html", null, true);
            echo ":</div>
                ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["area"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "
            </div>
             <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.areas.labels.status"), "html", null, true);
            echo ":</div>
                ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["area"], "status", [], "any", false, false, false, 31), "html", null, true);
            echo "
            </div>         
            <div class=\"znv-col-actions\">
                <div class=\"znv-group\">
                    ";
            // line 35
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_list", ["id" => twig_get_attribute($this->env, $this->source, $context["area"], "id", [], "any", false, false, false, 35)]), 1 => "page.list.buttons.propiedades", 2 => "fas fa-list-ul", 3 => [0 => "ROLE_PROPIEDAD_LIST"]]);
            echo "
                    ";
            // line 36
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("area_view", ["id" => twig_get_attribute($this->env, $this->source, $context["area"], "id", [], "any", false, false, false, 36)]), 1 => "page.list.buttons.view", 2 => "fa-eye", 3 => [0 => "ROLE_GROUP_VIEW"]]);
            echo "
                    ";
            // line 37
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("area_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["area"], "id", [], "any", false, false, false, 37)]), 1 => "page.list.buttons.edit", 2 => "fa-pencil", 3 => [0 => "ROLE_GROUP_EDIT"]]);
            echo "
                    ";
            // line 38
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "liConfirmButton", [0 => "page.list.buttons.delete", 1 => "znv-icon fa-trash", 2 => [0 => "ROLE_GROUP_DELETE"], 3 => "setNameAndText"]);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "area/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 43,  146 => 38,  142 => 37,  138 => 36,  134 => 35,  127 => 31,  123 => 30,  117 => 27,  113 => 26,  105 => 24,  101 => 23,  92 => 17,  87 => 15,  84 => 14,  81 => 12,  71 => 11,  60 => 1,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout_list.html.twig' %}

{% set titlePage = \"page.areas.title.list\" | trans %}
{% set menu = \"areas\" %}

{% set formFilterAction = path('areas_list') %}
{% set pathNew = path('area_new') %}
{% set labelButtonNew = 'page.areas.buttons.add' %}
{% set rolesNew = ['ROLE_AREA_NEW'] %}

{% block list %}

{# {{ dump(entities) }} #}
    <div class=\"znv-header\">
        <div class=\"znv-col\"> {{ 'page.areas.labels.name' | trans }}
        </div>
        <div class=\"znv-col\"> {{ 'page.areas.labels.status' | trans }}
        </div>       
        <div class=\"znv-col-actions\">
        </div>
    </div>

    {% for area in entities %}
        <div class=\"znv-line\" data-path=\"{{ path('area_delete', { 'id' : area.id }) }}\" data-name=\"{{ area.name }}\">
            <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.areas.labels.name' | trans }}:</div>
                {{ area.name }}
            </div>
             <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.areas.labels.status' | trans }}:</div>
                {{ area.status }}
            </div>         
            <div class=\"znv-col-actions\">
                <div class=\"znv-group\">
                    {{ macro_listActionButton(path('propiedad_list', {'id' : area.id}), 'page.list.buttons.propiedades', 'fas fa-list-ul', ['ROLE_PROPIEDAD_LIST']) }}
                    {{ macro_listActionButton(path('area_view', {'id' : area.id}), 'page.list.buttons.view', 'fa-eye', ['ROLE_GROUP_VIEW']) }}
                    {{ macro_listActionButton(path('area_edit', {'id' : area.id}), 'page.list.buttons.edit', 'fa-pencil', ['ROLE_GROUP_EDIT']) }}
                    {{ macro_liConfirmButton('page.list.buttons.delete', 'znv-icon fa-trash', ['ROLE_GROUP_DELETE'], 'setNameAndText') }}
                </div>
            </div>
        </div>
    {% endfor %}

{% endblock list %}
", "area/list.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/area/list.html.twig");
    }
}
