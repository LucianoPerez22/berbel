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

/* global/_pagination.html.twig */
class __TwigTemplate_ab87f91f87c06f588b4a300e4546df4bbb3bd35100e1026e6f9059c20757ba0f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/_pagination.html.twig"));

        // line 1
        echo "<div class=\"znv-list-footer\">
    <div class=\"znv-selector\">
        <p>
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.list.pagination.show"), "html", null, true);
        echo "
        </p>
        <div class=\"znv-form-group is-empty\">
            ";
        // line 7
        $context["options"] = [0 => "10", 1 => "25", 2 => "50", 3 => "100"];
        // line 8
        echo "            <select id=\"js-znv-select-limit\" class=\"znv-form-control\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 10
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare($context["option"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "get", [0 => "limit"], "method", false, false, false, 10)))) {
                echo " selected ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </select>
        </div>
        <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.list.pagination.records"), "html", null, true);
        echo "</p>
        ";
        // line 15
        $context["params"] = ["limit" => "placeholder"];
        // line 16
        echo "        ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", [0 => "_route_params"], "method", false, false, false, 16))) {
            // line 17
            echo "            ";
            $context["routeParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", [0 => "_route_params"], "method", false, false, false, 17);
            // line 18
            echo "            ";
            $context["params"] = twig_array_merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 18, $this->source); })()), (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 18, $this->source); })()));
            // line 19
            echo "        ";
        }
        // line 20
        echo "        <script type=\"text/javascript\">
            \$(\"#js-znv-select-limit\").change(function () {
                var route = \"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 22, $this->source); })()), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 22, $this->source); })())), "html", null, true);
        echo "\";
                window.location = route.replace(\"placeholder\", \$(this).val());
            });
        </script>
    </div><!-- znv-pagination -->
    <div class=\"znv-pagination\">
        <ul>
            ";
        // line 29
        if ((1 === twig_compare((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 29, $this->source); })()), 1))) {
            // line 30
            echo "                <li>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 31, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 31, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 31, $this->source); })()) => 1])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.list.pagination.firstPage"), "html", null, true);
            echo "</a>
                </li>
            ";
        } else {
            // line 34
            echo "                <li class=\"\">
                    <span>";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.list.pagination.firstPage"), "html", null, true);
            echo "</span>
                </li>
            ";
        }
        // line 38
        echo "            ";
        if (array_key_exists("previous", $context)) {
            // line 39
            echo "                <li>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 40, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 40, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 40, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 40, $this->source); })())])), "html", null, true);
            echo "\">
                        <i class=\"fa-chevron-left\"></i>
                    </a>
                </li>
            ";
        } else {
            // line 45
            echo "                <li class=\"\">
                    <span>
                        <i class=\"fa-chevron-left\"></i>
                    </span>
                </li>
            ";
        }
        // line 51
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 52
            echo "                ";
            if ((0 !== twig_compare($context["page"], (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 52, $this->source); })())))) {
                // line 53
                echo "                    <li class=\"znv-active\">
                        <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 54, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 54, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 54, $this->source); })()) => $context["page"]])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                    </li>
                ";
            } else {
                // line 57
                echo "                    <li class=\"znv-active\">
                        <span>";
                // line 58
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span>
                    </li>
                ";
            }
            // line 61
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            ";
        if (array_key_exists("next", $context)) {
            // line 63
            echo "                <li>
                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 64, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 64, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 64, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 64, $this->source); })())])), "html", null, true);
            echo "\">
                        <i class=\"fa-chevron-right\"></i>
                    </a>
                </li>
            ";
        } else {
            // line 69
            echo "                <li class=\"\">
                    <span>
                        <i class=\"fa-chevron-right\"></i>
                    </span>
                </li>
            ";
        }
        // line 75
        echo "            ";
        if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 75, $this->source); })()), (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 75, $this->source); })())))) {
            // line 76
            echo "                <li>
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 77, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 77, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 77, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 77, $this->source); })())])), "html", null, true);
            echo "\">
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.list.pagination.lastPage"), "html", null, true);
            echo "</a>
                </li>
            ";
        } else {
            // line 81
            echo "                <li class=\"\">
                    <span>";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.list.pagination.lastPage"), "html", null, true);
            echo "</span>
                </li>
            ";
        }
        // line 85
        echo "        </ul>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "global/_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 85,  233 => 82,  230 => 81,  224 => 78,  220 => 77,  217 => 76,  214 => 75,  206 => 69,  198 => 64,  195 => 63,  192 => 62,  186 => 61,  180 => 58,  177 => 57,  169 => 54,  166 => 53,  163 => 52,  158 => 51,  150 => 45,  142 => 40,  139 => 39,  136 => 38,  130 => 35,  127 => 34,  119 => 31,  116 => 30,  114 => 29,  104 => 22,  100 => 20,  97 => 19,  94 => 18,  91 => 17,  88 => 16,  86 => 15,  82 => 14,  78 => 12,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"znv-list-footer\">
    <div class=\"znv-selector\">
        <p>
            {{ 'page.list.pagination.show'|trans }}
        </p>
        <div class=\"znv-form-group is-empty\">
            {% set options = ['10','25','50','100'] %}
            <select id=\"js-znv-select-limit\" class=\"znv-form-control\">
                {% for option in options %}
                    <option value=\"{{ option }}\" {% if (option == app.session.get('limit')) %} selected {% endif %} >{{ option }}</option>
                {% endfor %}
            </select>
        </div>
        <p>{{ 'page.list.pagination.records'|trans }}</p>
        {% set params = {\"limit\": \"placeholder\"} %}
        {% if app.request.attributes.get('_route_params')| length %}
            {% set routeParams = app.request.attributes.get('_route_params') %}
            {% set params = (params|merge(routeParams)) %}
        {% endif %}
        <script type=\"text/javascript\">
            \$(\"#js-znv-select-limit\").change(function () {
                var route = \"{{ path(route, params) }}\";
                window.location = route.replace(\"placeholder\", \$(this).val());
            });
        </script>
    </div><!-- znv-pagination -->
    <div class=\"znv-pagination\">
        <ul>
            {% if current > 1 %}
                <li>
                    <a href=\"{{ path(route, query|merge({ (pageParameterName): 1 })) }}\">{{ 'page.list.pagination.firstPage'|trans() }}</a>
                </li>
            {% else %}
                <li class=\"\">
                    <span>{{ 'page.list.pagination.firstPage'|trans }}</span>
                </li>
            {% endif %}
            {% if previous is defined %}
                <li>
                    <a href=\"{{ path(route, query|merge({ (pageParameterName): previous })) }}\">
                        <i class=\"fa-chevron-left\"></i>
                    </a>
                </li>
            {% else %}
                <li class=\"\">
                    <span>
                        <i class=\"fa-chevron-left\"></i>
                    </span>
                </li>
            {% endif %}
            {% for page in pagesInRange %}
                {% if page != current %}
                    <li class=\"znv-active\">
                        <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </li>
                {% else %}
                    <li class=\"znv-active\">
                        <span>{{ page }}</span>
                    </li>
                {% endif %}
            {% endfor %}
            {% if next is defined %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                        <i class=\"fa-chevron-right\"></i>
                    </a>
                </li>
            {% else %}
                <li class=\"\">
                    <span>
                        <i class=\"fa-chevron-right\"></i>
                    </span>
                </li>
            {% endif %}
            {% if pageCount > current %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">
                        {{ 'page.list.pagination.lastPage'|trans }}</a>
                </li>
            {% else %}
                <li class=\"\">
                    <span>{{ 'page.list.pagination.lastPage'|trans }}</span>
                </li>
            {% endif %}
        </ul>
    </div>
</div>
", "global/_pagination.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/global/_pagination.html.twig");
    }
}
