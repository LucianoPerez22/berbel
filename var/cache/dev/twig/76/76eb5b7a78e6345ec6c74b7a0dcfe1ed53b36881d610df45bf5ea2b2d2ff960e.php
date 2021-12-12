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

/* propiedad/list.html.twig */
class __TwigTemplate_6eec515ac02063412b52056ec603e5be78c3f98e41d016da3fb4bd166dee0025 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propiedad/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propiedad/list.html.twig"));

        // line 3
        $context["titlePage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.propiedades.title.list");
        // line 4
        $context["menu"] = "areas";
        // line 6
        $context["formFilterAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_list", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 6, $this->source); })()), "params", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)]);
        // line 7
        $context["pathNew"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_new", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 7, $this->source); })()), "params", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)]);
        // line 8
        $context["labelButtonNew"] = "page.propiedades.buttons.add";
        // line 9
        $context["rolesNew"] = [0 => "ROLE_PROPIEDAD_NEW"];
        // line 1
        $this->parent = $this->loadTemplate("global/layout_list.html.twig", "propiedad/list.html.twig", 1);
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
        echo "    <div class=\"znv-header\">
        <div class=\"znv-col\"> ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.propiedades.labels.name"), "html", null, true);
        echo "
        </div>
        <div class=\"znv-col\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.propiedades.labels.value"), "html", null, true);
        echo "
        </div>       
        <div class=\"znv-col-actions\">
        </div>
    </div>

    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["propiedad"]) {
            // line 22
            echo "        <div class=\"znv-line\" data-path=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["propiedad"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propiedad"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
            <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.propiedades.labels.name"), "html", null, true);
            echo ":</div>
                ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propiedad"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "
            </div>
             <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.propiedades.labels.value"), "html", null, true);
            echo ":</div>
                ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propiedad"], "value", [], "any", false, false, false, 29), "html", null, true);
            echo "
            </div>         
            <div class=\"znv-col-actions\">
                <div class=\"znv-group\">                    
                    ";
            // line 33
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_view", ["id" => twig_get_attribute($this->env, $this->source, $context["propiedad"], "id", [], "any", false, false, false, 33)]), 1 => "page.list.buttons.view", 2 => "fa-eye", 3 => [0 => "ROLE_PROPIEDAD_VIEW"]]);
            echo "
                    ";
            // line 34
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["propiedad"], "id", [], "any", false, false, false, 34)]), 1 => "page.list.buttons.edit", 2 => "fa-pencil", 3 => [0 => "ROLE_PROPIEDAD_EDIT"]]);
            echo "
                    ";
            // line 35
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "liConfirmButton", [0 => "page.list.buttons.delete", 1 => "znv-icon fa-trash", 2 => [0 => "ROLE_PROPIEDAD_DELETE"], 3 => "setNameAndText"]);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propiedad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "propiedad/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 35,  135 => 34,  131 => 33,  124 => 29,  120 => 28,  114 => 25,  110 => 24,  102 => 22,  98 => 21,  89 => 15,  84 => 13,  81 => 12,  71 => 11,  60 => 1,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout_list.html.twig' %}

{% set titlePage = \"page.propiedades.title.list\" | trans %}
{% set menu = \"areas\" %}

{% set formFilterAction = path('propiedad_list',{'id' : entities.params.id}) %}
{% set pathNew = path('propiedad_new',{'id' : entities.params.id}) %}
{% set labelButtonNew = 'page.propiedades.buttons.add' %}
{% set rolesNew = ['ROLE_PROPIEDAD_NEW'] %}

{% block list %}
    <div class=\"znv-header\">
        <div class=\"znv-col\"> {{ 'page.propiedades.labels.name' | trans }}
        </div>
        <div class=\"znv-col\"> {{ 'page.propiedades.labels.value' | trans }}
        </div>       
        <div class=\"znv-col-actions\">
        </div>
    </div>

    {% for propiedad in entities %}
        <div class=\"znv-line\" data-path=\"{{ path('propiedad_delete', { 'id' : propiedad.id }) }}\" data-name=\"{{ propiedad.name }}\">
            <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.propiedades.labels.name' | trans }}:</div>
                {{ propiedad.name }}
            </div>
             <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.propiedades.labels.value' | trans }}:</div>
                {{ propiedad.value }}
            </div>         
            <div class=\"znv-col-actions\">
                <div class=\"znv-group\">                    
                    {{ macro_listActionButton(path('propiedad_view', {'id' : propiedad.id}), 'page.list.buttons.view', 'fa-eye', ['ROLE_PROPIEDAD_VIEW']) }}
                    {{ macro_listActionButton(path('propiedad_edit', {'id' : propiedad.id}), 'page.list.buttons.edit', 'fa-pencil', ['ROLE_PROPIEDAD_EDIT']) }}
                    {{ macro_liConfirmButton('page.list.buttons.delete', 'znv-icon fa-trash', ['ROLE_PROPIEDAD_DELETE'], 'setNameAndText') }}
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock list %}
", "propiedad/list.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/propiedad/list.html.twig");
    }
}
