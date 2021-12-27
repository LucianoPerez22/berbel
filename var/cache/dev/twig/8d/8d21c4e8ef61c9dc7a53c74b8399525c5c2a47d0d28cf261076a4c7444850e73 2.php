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

/* group/list.html.twig */
class __TwigTemplate_89ab2a1683e23f635c68ed7a04ebb4c6e67584c1d3c5437bded5ba0b3afa18bc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/list.html.twig"));

        // line 3
        $context["titlePage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.group.title.list");
        // line 4
        $context["menu"] = "group";
        // line 6
        $context["formFilterAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_list");
        // line 7
        $context["pathNew"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_new");
        // line 8
        $context["labelButtonNew"] = "page.group.buttons.add";
        // line 9
        $context["rolesNew"] = [0 => "ROLE_GROUP_NEW"];
        // line 1
        $this->parent = $this->loadTemplate("global/layout_list.html.twig", "group/list.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.group.labels.name"), "html", null, true);
        echo "
        </div>
        <div class=\"znv-col-actions\">
        </div>
    </div>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 20
            echo "        <div class=\"znv-line\" data-path=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
            <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.group.labels.name"), "html", null, true);
            echo ":</div>
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "
            </div>
            <div class=\"znv-col-actions\">
                <div class=\"znv-group\">
                    ";
            // line 27
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_view", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 27)]), 1 => "page.list.buttons.view", 2 => "fa-eye", 3 => [0 => "ROLE_GROUP_VIEW"]]);
            echo "
                    ";
            // line 28
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 28)]), 1 => "page.list.buttons.edit", 2 => "fa-pencil", 3 => [0 => "ROLE_GROUP_EDIT"]]);
            echo "
                    ";
            // line 29
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "liConfirmButton", [0 => "page.list.buttons.delete", 1 => "znv-icon fa-trash", 2 => [0 => "ROLE_GROUP_DELETE"], 3 => "setNameAndText"]);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 34,  124 => 29,  120 => 28,  116 => 27,  109 => 23,  105 => 22,  97 => 20,  93 => 19,  84 => 13,  81 => 12,  71 => 11,  60 => 1,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout_list.html.twig' %}

{% set titlePage = \"page.group.title.list\" | trans %}
{% set menu = \"group\" %}

{% set formFilterAction = path('group_list') %}
{% set pathNew = path('group_new') %}
{% set labelButtonNew = 'page.group.buttons.add' %}
{% set rolesNew = ['ROLE_GROUP_NEW'] %}

{% block list %}
    <div class=\"znv-header\">
        <div class=\"znv-col\"> {{ 'page.group.labels.name' | trans }}
        </div>
        <div class=\"znv-col-actions\">
        </div>
    </div>

    {% for group in entities %}
        <div class=\"znv-line\" data-path=\"{{ path('group_delete', { 'id' : group.id }) }}\" data-name=\"{{ group.name }}\">
            <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.group.labels.name' | trans }}:</div>
                {{ group }}
            </div>
            <div class=\"znv-col-actions\">
                <div class=\"znv-group\">
                    {{ macro_listActionButton(path('group_view', {'id' : group.id}), 'page.list.buttons.view', 'fa-eye', ['ROLE_GROUP_VIEW']) }}
                    {{ macro_listActionButton(path('group_edit', {'id' : group.id}), 'page.list.buttons.edit', 'fa-pencil', ['ROLE_GROUP_EDIT']) }}
                    {{ macro_liConfirmButton('page.list.buttons.delete', 'znv-icon fa-trash', ['ROLE_GROUP_DELETE'], 'setNameAndText') }}
                </div>
            </div>
        </div>
    {% endfor %}

{% endblock list %}
", "group/list.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/group/list.html.twig");
    }
}
