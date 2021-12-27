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

/* global/_nav.html.twig */
class __TwigTemplate_368f9d0b0d666dc658371bfd0bfbbe7ca30435b631672c9cc9e1e414f7ee3e7e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/_nav.html.twig"));

        // line 1
        if ( !array_key_exists("menu", $context)) {
            // line 2
            echo "    ";
            $context["menu"] = "";
        }
        // line 4
        echo "
";
        // line 5
        $context["rolesMenu"] = [0 => "ROLE_USER_LIST", 1 => "ROLE_GROUP_LIST", 2 => "ROLE_EMPLEADOS_LIST"];
        // line 6
        echo "
";
        // line 7
        $context["listMenu"] = [];
        // line 8
        echo "
<nav class=\"znv-nav\">
    <div class=\"znv-nav-section\">
        <h3>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.menu.menu"), "html", null, true);
        echo "</h3>
        <ul>
            ";
        // line 13
        echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "liNav", [0 => (0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 13, $this->source); })()), "dashboard")), 1 => "home", 2 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.dashboard.title"), 3 => [0 => "ROLE_USER"], 4 => "fa-home"]);
        echo "
            
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "isSuperAdmin", [], "any", false, false, false, 15)) {
            // line 16
            echo "                ";
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "liNav", [0 => (0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 16, $this->source); })()), "user")), 1 => "user_list", 2 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.menu.user"), 3 => [0 => "ROLE_USER_LIST"], 4 => "fa-user"]);
            echo "
                ";
            // line 17
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "liNav", [0 => (0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 17, $this->source); })()), "group")), 1 => "group_list", 2 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.menu.group"), 3 => [0 => "ROLE_GROUP_LIST"], 4 => "fa-users"]);
            echo "
                <hr />
                 ";
            // line 19
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "liNav", [0 => (0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 19, $this->source); })()), "empleados")), 1 => "empleados_list", 2 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.menu.empleados"), 3 => [0 => "ROLE_USER"], 4 => "fa-users"]);
            echo "
                 <hr />
                 ";
            // line 21
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "liNav", [0 => (0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 21, $this->source); })()), "areas")), 1 => "areas_list", 2 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.menu.areas"), 3 => [0 => "ROLE_AREAS_LIST"], 4 => "fa-users"]);
            echo "
            ";
        }
        // line 23
        echo "            ";
        // line 24
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "hasRole", [0 => (isset($context["rolesMenu"]) || array_key_exists("rolesMenu", $context) ? $context["rolesMenu"] : (function () { throw new RuntimeError('Variable "rolesMenu" does not exist.', 24, $this->source); })())], "method", false, false, false, 24) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "isSuperAdmin", [], "any", false, false, false, 24))) {
            echo "           
                ";
            // line 25
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "liNav", [0 => (0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 25, $this->source); })()), "empleados")), 1 => "empleados_list", 2 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.menu.empleados"), 3 => [0 => "ROLE_USER"], 4 => "fa-users"]);
            echo "                                                             
            ";
        }
        // line 27
        echo "        </ul>
    </div><!-- znv-nav-section -->
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "global/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  103 => 25,  98 => 24,  96 => 23,  91 => 21,  86 => 19,  81 => 17,  76 => 16,  74 => 15,  69 => 13,  64 => 11,  59 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if menu is not defined %}
    {% set menu = \"\" %}
{% endif %}

{% set rolesMenu = ['ROLE_USER_LIST', 'ROLE_GROUP_LIST', 'ROLE_EMPLEADOS_LIST'] %}

{% set listMenu =  [] %}

<nav class=\"znv-nav\">
    <div class=\"znv-nav-section\">
        <h3>{{ 'page.menu.menu'|trans }}</h3>
        <ul>
            {{ macro_liNav((menu == \"dashboard\"), 'home', 'page.dashboard.title'|trans, ['ROLE_USER'], 'fa-home') }}
            
            {% if app.user.isSuperAdmin %}
                {{ macro_liNav((menu == \"user\"), 'user_list', 'page.menu.user'|trans, ['ROLE_USER_LIST'], 'fa-user') }}
                {{ macro_liNav((menu == \"group\"), 'group_list', 'page.menu.group'|trans, ['ROLE_GROUP_LIST'], 'fa-users') }}
                <hr />
                 {{ macro_liNav((menu == \"empleados\"), 'empleados_list', 'page.menu.empleados'|trans, ['ROLE_USER'], 'fa-users') }}
                 <hr />
                 {{ macro_liNav((menu == \"areas\"), 'areas_list', 'page.menu.areas'|trans, ['ROLE_AREAS_LIST'], 'fa-users') }}
            {% endif %}
            {# PARA EL USUARIO COMUN #}
            {% if app.user.hasRole(rolesMenu) and not app.user.isSuperAdmin %}           
                {{ macro_liNav((menu == \"empleados\"), 'empleados_list', 'page.menu.empleados'|trans, ['ROLE_USER'], 'fa-users') }}                                                             
            {% endif %}
        </ul>
    </div><!-- znv-nav-section -->
</nav>
", "global/_nav.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/global/_nav.html.twig");
    }
}
