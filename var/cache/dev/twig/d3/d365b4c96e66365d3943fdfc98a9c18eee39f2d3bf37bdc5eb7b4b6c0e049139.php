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

/* form/custom_types.html.twig */
class __TwigTemplate_372b1964828f9f7c6d7a4bb336bf13e4747315673e1abb6e100739caa5b707f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'custom_grouped_choices_widget' => [$this, 'block_custom_grouped_choices_widget'],
            'custom_single_checkbox_widget' => [$this, 'block_custom_single_checkbox_widget'],
            'custom_from_and_to_datetime_widget' => [$this, 'block_custom_from_and_to_datetime_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/custom_types.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/custom_types.html.twig"));

        // line 1
        $this->displayBlock('custom_grouped_choices_widget', $context, $blocks);
        // line 47
        $this->displayBlock('custom_single_checkbox_widget', $context, $blocks);
        // line 58
        $this->displayBlock('custom_from_and_to_datetime_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_custom_grouped_choices_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_grouped_choices_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_grouped_choices_widget"));

        // line 3
        echo "<div class=\"znv-collapse\">
    ";
        // line 4
        $context["index"] = 0;
        // line 5
        echo "    ";
        $context["children"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "children", [], "any", false, false, false, 5);
        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "choices", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 8
            echo "    <button type=\"button\" class=\"znv-btn\" data-toggle=\"collapse\" data-target=\"#fgroup";
            echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "\" aria-expanded=\"false\"
            aria-controls=\"fgroup";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "label", [], "any", false, false, false, 10), "html", null, true);
            echo "
        <div class=\"znv-icon fa-chevron-left\"></div>
    </button>
    <div class=\"znv-group collapse\" id=\"fgroup";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\">
        <div class=\"znv-checkbox znv-full\">
            <label>
                <input type=\"checkbox\" data-rol-group=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "label", [], "any", false, false, false, 16)), [" " => "-"]), "html", null, true);
            echo "\"
                       class=\"js-all-choices\">
                <span class=\"znv-label\">";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.choices.all"), "html", null, true);
            echo "</span>
            </label>
        </div>
        <hr>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["role"], "choices", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["key"] => $context["rol"]) {
                // line 23
                echo "            <div class=\"znv-checkbox znv-small\">
                <label>
                    ";
                // line 25
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), $context["key"], [], "array", false, false, false, 25), 'widget', ["attr" => ["class" => ("js-role-" . twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "label", [], "any", false, false, false, 25)), [" " => "-"]))]]);
                echo "
                    <span class=\"znv-checkbox-material\"><span class=\"check\"></span></span>
                    <span class=\"znv-label\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rol"], "label", [], "any", false, false, false, 27), "html", null, true);
                echo "</span>
                </label>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </div>
        ";
            // line 32
            $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 32, $this->source); })()) + 1);
            // line 33
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>

<script>
    \$(\".js-all-choices\").off('change.roleSelectAll')
        .on('change.roleSelectAll', function () {
            var \$input = \$(this);
            var checked = \$input.is(\":checked\");
            var label = \$input.data(\"rol-group\");
            \$('.js-role-' + label).prop(\"checked\", checked);
        });
</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_custom_single_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_single_checkbox_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_single_checkbox_widget"));

        // line 48
        echo "<div class=\"znv-togglebutton\">
        <label>
            <span class=\"znv-label\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "false_choice", [], "any", false, false, false, 50)), "html", null, true);
        echo "</span>
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'widget');
        echo "
            <span class=\"toggle\"></span>
            <span class=\"znv-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "true_choice", [], "any", false, false, false, 53)), "html", null, true);
        echo "</span>
        </label>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_custom_from_and_to_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_from_and_to_datetime_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_from_and_to_datetime_widget"));

        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "from", [], "any", false, false, false, 59), 'row');
        echo "
    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "to", [], "any", false, false, false, 60), 'row');
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form/custom_types.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  222 => 60,  218 => 59,  208 => 58,  195 => 53,  190 => 51,  186 => 50,  182 => 48,  172 => 47,  152 => 34,  146 => 33,  144 => 32,  141 => 31,  131 => 27,  126 => 25,  122 => 23,  118 => 22,  111 => 18,  106 => 16,  100 => 13,  94 => 10,  90 => 9,  85 => 8,  81 => 7,  78 => 6,  75 => 5,  73 => 4,  70 => 3,  60 => 1,  50 => 58,  48 => 47,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- block custom_grouped_choices_widget -%}

<div class=\"znv-collapse\">
    {% set index = 0 %}
    {% set children = form.children %}

    {% for role in form.vars.choices %}
    <button type=\"button\" class=\"znv-btn\" data-toggle=\"collapse\" data-target=\"#fgroup{{ index }}\" aria-expanded=\"false\"
            aria-controls=\"fgroup{{ index }}\">
        {{ role.label }}
        <div class=\"znv-icon fa-chevron-left\"></div>
    </button>
    <div class=\"znv-group collapse\" id=\"fgroup{{ index }}\">
        <div class=\"znv-checkbox znv-full\">
            <label>
                <input type=\"checkbox\" data-rol-group=\"{{ role.label | lower | replace({' ': '-'}) }}\"
                       class=\"js-all-choices\">
                <span class=\"znv-label\">{{ 'form.choices.all' | trans }}</span>
            </label>
        </div>
        <hr>
        {% for key, rol in role.choices %}
            <div class=\"znv-checkbox znv-small\">
                <label>
                    {{ form_widget(form[key], {'attr' : {'class' : 'js-role-' ~ role.label| lower | replace({' ': '-'}) }}) }}
                    <span class=\"znv-checkbox-material\"><span class=\"check\"></span></span>
                    <span class=\"znv-label\">{{ rol.label }}</span>
                </label>
            </div>
        {% endfor %}
    </div>
        {% set index = index + 1 %}
    {% endfor %}
</div>

<script>
    \$(\".js-all-choices\").off('change.roleSelectAll')
        .on('change.roleSelectAll', function () {
            var \$input = \$(this);
            var checked = \$input.is(\":checked\");
            var label = \$input.data(\"rol-group\");
            \$('.js-role-' + label).prop(\"checked\", checked);
        });
</script>
{%- endblock -%}

{%- block custom_single_checkbox_widget -%}
    <div class=\"znv-togglebutton\">
        <label>
            <span class=\"znv-label\">{{ form.vars.false_choice | trans }}</span>
            {{ form_widget(form) }}
            <span class=\"toggle\"></span>
            <span class=\"znv-label\">{{ form.vars.true_choice | trans }}</span>
        </label>
    </div>
{%- endblock -%}

{%- block custom_from_and_to_datetime_widget -%}
    {{ form_row(form.from) }}
    {{ form_row(form.to) }}
{%- endblock -%}
", "form/custom_types.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/form/custom_types.html.twig");
    }
}
