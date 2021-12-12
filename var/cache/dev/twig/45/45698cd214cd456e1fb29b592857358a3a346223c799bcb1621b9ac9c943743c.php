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

/* global/layout_report.html.twig */
class __TwigTemplate_c380f0794fb0ed0941a09ce9be76d2795611b00ac8975af8e23248fc03499c13 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'formFilter' => [$this, 'block_formFilter'],
            'formContent' => [$this, 'block_formContent'],
            'header_block' => [$this, 'block_header_block'],
            'list' => [$this, 'block_list'],
            'modalDelete' => [$this, 'block_modalDelete'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "global/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/layout_report.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/layout_report.html.twig"));

        // line 3
        $context["classForm"] = ((array_key_exists("classForm", $context)) ? ((isset($context["classForm"]) || array_key_exists("classForm", $context) ? $context["classForm"] : (function () { throw new RuntimeError('Variable "classForm" does not exist.', 3, $this->source); })())) : ("znv-form-inline"));
        // line 4
        $context["formFilterAction"] = ((array_key_exists("formFilterAction", $context)) ? ((isset($context["formFilterAction"]) || array_key_exists("formFilterAction", $context) ? $context["formFilterAction"] : (function () { throw new RuntimeError('Variable "formFilterAction" does not exist.', 4, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", [0 => "_route_params"], "method", false, false, false, 4))));
        // line 5
        $context["formMethod"] = ((array_key_exists("formMethod", $context)) ? ((isset($context["formMethod"]) || array_key_exists("formMethod", $context) ? $context["formMethod"] : (function () { throw new RuntimeError('Variable "formMethod" does not exist.', 5, $this->source); })())) : ("GET"));
        // line 6
        $context["labelButtonNew"] = ((array_key_exists("labelButtonNew", $context)) ? ((isset($context["labelButtonNew"]) || array_key_exists("labelButtonNew", $context) ? $context["labelButtonNew"] : (function () { throw new RuntimeError('Variable "labelButtonNew" does not exist.', 6, $this->source); })())) : ("page.list.buttons.add"));
        // line 7
        $context["rolesNew"] = ((array_key_exists("rolesNew", $context)) ? ((isset($context["rolesNew"]) || array_key_exists("rolesNew", $context) ? $context["rolesNew"] : (function () { throw new RuntimeError('Variable "rolesNew" does not exist.', 7, $this->source); })())) : (false));
        // line 1
        $this->parent = $this->loadTemplate("global/layout.html.twig", "global/layout_report.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('formFilter', $context, $blocks);
        // line 39
        echo "

        ";
        // line 41
        $this->displayBlock('header_block', $context, $blocks);
        // line 42
        echo "                ";
        $this->displayBlock('list', $context, $blocks);
        // line 43
        echo "

    ";
        // line 45
        $this->displayBlock('modalDelete', $context, $blocks);
        // line 63
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_formFilter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formFilter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formFilter"));

        // line 14
        echo "        <div class=\"znv-box-filter\" id=\"js-filter\" aria-expanded=\"true\">
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["action" => (isset($context["formFilterAction"]) || array_key_exists("formFilterAction", $context) ? $context["formFilterAction"] : (function () { throw new RuntimeError('Variable "formFilterAction" does not exist.', 15, $this->source); })()), "method" => (isset($context["formMethod"]) || array_key_exists("formMethod", $context) ? $context["formMethod"] : (function () { throw new RuntimeError('Variable "formMethod" does not exist.', 15, $this->source); })()), "attr" => ["class" =>         // line 16
(isset($context["classForm"]) || array_key_exists("classForm", $context) ? $context["classForm"] : (function () { throw new RuntimeError('Variable "classForm" does not exist.', 16, $this->source); })()), "novalidate" => "novalidate"]]);
        echo "
            ";
        // line 17
        $this->displayBlock('formContent', $context, $blocks);
        // line 22
        echo "            <div class=\"znv-form-group znv-form-action\">
                <button type=\"submit\" class=\"znv-btn znv-greenDark\" name=\"filter\" value=\"filter\">
                    ";
        // line 24
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.apply")), "html", null, true);
        echo "
                </button>
                <button type=\"button\" class=\"znv-btn znv-greyDark\" onclick=\"cleanFilters(this);\" value=\"reset\">
                    ";
        // line 27
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.clean")), "html", null, true);
        echo "
                </button>
            </div>
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
        </div>
        <script type=\"text/javascript\">
            function cleanFilters(button) {
                \$(button).parents('form').attr('method', 'POST');
                \$(button).parents('form').submit();
            }
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_formContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        // line 18
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "children", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 19
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_header_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_block"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_modalDelete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalDelete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalDelete"));

        // line 46
        echo "        ";
        echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "modal", [0 => "page.common.confirm.delete_record", 1 => "page.common.confirm.ask_continue", 2 => "fa-trash", 3 => "modalRed"]);
        echo "

        <script>
            function setNameAndText(button) {

                var \$modal = \$('#modalConfirm');
                var \$button = \$(button);
                var \$div = \$button.parents('div.znv-line');
                var text = '";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.common.confirm.delete_text");
        echo "' + '<br/>' + '";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.common.confirm.ask_continue");
        echo "';

                text = text.replace('%name%', \$div.data('name'));
                \$modal.find('.js-modal-body').html(text);
            }
        </script>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "global/layout_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 54,  252 => 46,  242 => 45,  223 => 42,  204 => 41,  194 => 21,  185 => 19,  180 => 18,  170 => 17,  151 => 30,  145 => 27,  139 => 24,  135 => 22,  133 => 17,  129 => 16,  128 => 15,  125 => 14,  115 => 13,  104 => 63,  102 => 45,  98 => 43,  95 => 42,  93 => 41,  89 => 39,  87 => 13,  84 => 12,  74 => 11,  63 => 1,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout.html.twig' %}

{% set classForm = classForm is defined ? classForm : 'znv-form-inline' %}
{% set formFilterAction = formFilterAction is defined ? formFilterAction : path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) %}
{% set formMethod = formMethod is defined ? formMethod : 'GET' %}
{% set labelButtonNew = labelButtonNew is defined ? labelButtonNew : 'page.list.buttons.add' %}
{% set rolesNew = rolesNew is defined ? rolesNew : false %}



{% block content %}

    {% block formFilter %}
        <div class=\"znv-box-filter\" id=\"js-filter\" aria-expanded=\"true\">
            {{ form_start(form, {'action': formFilterAction, 'method': formMethod,
                'attr': {'class': classForm, 'novalidate': 'novalidate' }}) }}
            {% block formContent %}
                {% for child in form.children %}
                    {{ form_row(child) }}
                {% endfor %}
            {% endblock formContent %}
            <div class=\"znv-form-group znv-form-action\">
                <button type=\"submit\" class=\"znv-btn znv-greenDark\" name=\"filter\" value=\"filter\">
                    {{ 'form.buttons.apply'|trans()|upper }}
                </button>
                <button type=\"button\" class=\"znv-btn znv-greyDark\" onclick=\"cleanFilters(this);\" value=\"reset\">
                    {{ 'form.buttons.clean'|trans()|upper }}
                </button>
            </div>
            {{ form_end(form) }}
        </div>
        <script type=\"text/javascript\">
            function cleanFilters(button) {
                \$(button).parents('form').attr('method', 'POST');
                \$(button).parents('form').submit();
            }
        </script>
    {% endblock %}


        {% block header_block '' %}
                {% block list '' %}


    {% block modalDelete %}
        {{ macro_modal('page.common.confirm.delete_record', 'page.common.confirm.ask_continue', 'fa-trash', 'modalRed' ) }}

        <script>
            function setNameAndText(button) {

                var \$modal = \$('#modalConfirm');
                var \$button = \$(button);
                var \$div = \$button.parents('div.znv-line');
                var text = '{{ 'page.common.confirm.delete_text'|trans|raw }}' + '<br/>' + '{{ 'page.common.confirm.ask_continue' | trans | raw }}';

                text = text.replace('%name%', \$div.data('name'));
                \$modal.find('.js-modal-body').html(text);
            }
        </script>


    {% endblock %}

{% endblock content %}
", "global/layout_report.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/global/layout_report.html.twig");
    }
}
