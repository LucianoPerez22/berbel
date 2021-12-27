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

/* group/view.html.twig */
class __TwigTemplate_b3714940c30edd91a81b9c38fd8f984c1eaf393dd62e8899ec7239ec3f3d858c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/view.html.twig"));

        // line 3
        $context["titlePage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.group.title.view");
        // line 4
        $context["menu"] = "group";
        // line 1
        $this->parent = $this->loadTemplate("global/layout_view.html.twig", "group/view.html.twig", 1);
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
        echo "<li>
    ";
        // line 8
        echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "buttonReturn", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_list")]);
        echo "
</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_viewContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "viewContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "viewContent"));

        // line 13
        echo "<div class=\"znv-card-full znv-highlight\">
    <div class=\"znv-form-group-view\">
        <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.group.labels.name"), "html", null, true);
        echo "</p>
        <h3>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</h3>
    </div>
</div>

<div class=\"znv-card-full znv-two-column\">
  ";
        // line 21
        echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "cardHalfView", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.group.labels.description"), 1 => twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21)]);
        echo "

  ";
        // line 23
        $context["rolesByModule"] = twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 23, $this->source); })()), "getRolesByModule", [], "method", false, false, false, 23);
        // line 24
        echo "
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rolesByModule"]) || array_key_exists("rolesByModule", $context) ? $context["rolesByModule"] : (function () { throw new RuntimeError('Variable "rolesByModule" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["module"] => $context["roles"]) {
            // line 26
            echo "
          <div class=\"znv-form-group-view\">
              <p>";
            // line 28
            echo twig_escape_filter($this->env, $context["module"], "html", null, true);
            echo "</p>
              <ul>
                  ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["roles"]);
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 31
                echo "                  <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rol"], "title", [], "any", false, false, false, 31), "html", null, true);
                echo "</li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "              </ul>
          </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['module'], $context['roles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "group/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 37,  152 => 33,  143 => 31,  139 => 30,  134 => 28,  130 => 26,  126 => 25,  123 => 24,  121 => 23,  116 => 21,  108 => 16,  104 => 15,  100 => 13,  90 => 12,  77 => 8,  74 => 7,  64 => 6,  53 => 1,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout_view.html.twig' %}

{% set titlePage = \"page.group.title.view\" | trans %}
{% set menu = \"group\" %}

{% block buttonsTitle %}
<li>
    {{ macro_buttonReturn(path('group_list')) }}
</li>
{% endblock %}

{% block viewContent %}
<div class=\"znv-card-full znv-highlight\">
    <div class=\"znv-form-group-view\">
        <p>{{ 'page.group.labels.name' | trans }}</p>
        <h3>{{ group }}</h3>
    </div>
</div>

<div class=\"znv-card-full znv-two-column\">
  {{ macro_cardHalfView('page.group.labels.description' | trans, group.description) }}

  {% set rolesByModule = group.getRolesByModule() %}

  {% for module, roles in rolesByModule %}

          <div class=\"znv-form-group-view\">
              <p>{{ module }}</p>
              <ul>
                  {% for rol in roles %}
                  <li>{{ rol.title }}</li>
                  {% endfor %}
              </ul>
          </div>

  {% endfor %}
</div>
  {% endblock %}
", "group/view.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/group/view.html.twig");
    }
}
