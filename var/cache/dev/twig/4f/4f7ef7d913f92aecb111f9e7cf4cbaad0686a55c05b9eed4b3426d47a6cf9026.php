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

/* empleado/list.html.twig */
class __TwigTemplate_723219e556b4f6a04127e0844365869b7e9006aa1adc76e569e16bba64949c38 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empleado/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empleado/list.html.twig"));

        // line 3
        $context["titlePage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.empleados.title.list");
        // line 4
        $context["menu"] = "empleados";
        // line 6
        $context["formFilterAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleados_list");
        // line 7
        $context["pathNew"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleado_new");
        // line 8
        $context["labelButtonNew"] = "page.empleados.buttons.add";
        // line 9
        $context["rolesNew"] = [0 => "ROLE_EMPLEADOS_NEW"];
        // line 1
        $this->parent = $this->loadTemplate("global/layout_list.html.twig", "empleado/list.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.empleados.labels.name"), "html", null, true);
        echo "
        </div>
        <div class=\"znv-col\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.empleados.labels.phone"), "html", null, true);
        echo "
        </div>
        <div class=\"znv-col\"> ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.empleados.labels.email"), "html", null, true);
        echo "
        </div>
        <div class=\"znv-col-actions\">
        </div>
    </div>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 24
            echo "        <div class=\"znv-line\" data-path=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleado_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["empleado"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
            <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.group.labels.name"), "html", null, true);
            echo ":</div>
                ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "
            </div>
             <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.group.labels.name"), "html", null, true);
            echo ":</div>
                ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "phone", [], "any", false, false, false, 31), "html", null, true);
            echo "
            </div>
             <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.group.labels.name"), "html", null, true);
            echo ":</div>
                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empleado"], "email", [], "any", false, false, false, 35), "html", null, true);
            echo "
            </div>
            <div class=\"znv-col-actions\">
                <div class=\"znv-group\">
                    ";
            // line 39
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleado_view", ["id" => twig_get_attribute($this->env, $this->source, $context["empleado"], "id", [], "any", false, false, false, 39)]), 1 => "page.list.buttons.view", 2 => "fa-eye", 3 => [0 => "ROLE_EMPLEADOS_VIEW"]]);
            echo "
                    ";
            // line 40
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("empleado_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["empleado"], "id", [], "any", false, false, false, 40)]), 1 => "page.list.buttons.edit", 2 => "fa-pencil", 3 => [0 => "ROLE_EMPLEADOS_EDIT"]]);
            echo "
                    ";
            // line 41
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "liConfirmButton", [0 => "page.list.buttons.delete", 1 => "znv-icon fa-trash", 2 => [0 => "ROLE_EMPLEADOS_DELETE"], 3 => "setNameAndText"]);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "empleado/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 46,  154 => 41,  150 => 40,  146 => 39,  139 => 35,  135 => 34,  129 => 31,  125 => 30,  119 => 27,  115 => 26,  107 => 24,  103 => 23,  94 => 17,  89 => 15,  84 => 13,  81 => 12,  71 => 11,  60 => 1,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout_list.html.twig' %}

{% set titlePage = \"page.empleados.title.list\" | trans %}
{% set menu = \"empleados\" %}

{% set formFilterAction = path('empleados_list') %}
{% set pathNew = path('empleado_new') %}
{% set labelButtonNew = 'page.empleados.buttons.add' %}
{% set rolesNew = ['ROLE_EMPLEADOS_NEW'] %}

{% block list %}
    <div class=\"znv-header\">
        <div class=\"znv-col\"> {{ 'page.empleados.labels.name' | trans }}
        </div>
        <div class=\"znv-col\"> {{ 'page.empleados.labels.phone' | trans }}
        </div>
        <div class=\"znv-col\"> {{ 'page.empleados.labels.email' | trans }}
        </div>
        <div class=\"znv-col-actions\">
        </div>
    </div>

    {% for empleado in entities %}
        <div class=\"znv-line\" data-path=\"{{ path('empleado_delete', { 'id' : empleado.id }) }}\" data-name=\"{{ empleado.name }}\">
            <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.group.labels.name' | trans }}:</div>
                {{ empleado.name }}
            </div>
             <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.group.labels.name' | trans }}:</div>
                {{ empleado.phone }}
            </div>
             <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.group.labels.name' | trans }}:</div>
                {{ empleado.email }}
            </div>
            <div class=\"znv-col-actions\">
                <div class=\"znv-group\">
                    {{ macro_listActionButton(path('empleado_view', {'id' : empleado.id}), 'page.list.buttons.view', 'fa-eye', ['ROLE_EMPLEADOS_VIEW']) }}
                    {{ macro_listActionButton(path('empleado_edit', {'id' : empleado.id}), 'page.list.buttons.edit', 'fa-pencil', ['ROLE_EMPLEADOS_EDIT']) }}
                    {{ macro_liConfirmButton('page.list.buttons.delete', 'znv-icon fa-trash', ['ROLE_EMPLEADOS_DELETE'], 'setNameAndText') }}
                </div>
            </div>
        </div>
    {% endfor %}

{% endblock list %}
", "empleado/list.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/empleado/list.html.twig");
    }
}
