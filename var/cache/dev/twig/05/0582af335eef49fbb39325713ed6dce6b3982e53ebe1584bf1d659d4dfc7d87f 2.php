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

/* global/layout_list.html.twig */
class __TwigTemplate_da492f3cefb88da45e3d4a7322b6eaabbb5e1815620f6d952a0bd7b9af8cd81c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'buttonsTitle' => [$this, 'block_buttonsTitle'],
            'buttonNew' => [$this, 'block_buttonNew'],
            'content' => [$this, 'block_content'],
            'formFilter' => [$this, 'block_formFilter'],
            'formContent' => [$this, 'block_formContent'],
            'header_block' => [$this, 'block_header_block'],
            'list' => [$this, 'block_list'],
            'pagination' => [$this, 'block_pagination'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/layout_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/layout_list.html.twig"));

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
        $this->parent = $this->loadTemplate("global/layout.html.twig", "global/layout_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_buttonsTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "buttonsTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "buttonsTitle"));

        // line 10
        echo "    ";
        $this->displayBlock('buttonNew', $context, $blocks);
        // line 20
        echo "    ";
        if ((((isset($context["rolesNew"]) || array_key_exists("rolesNew", $context) ? $context["rolesNew"] : (function () { throw new RuntimeError('Variable "rolesNew" does not exist.', 20, $this->source); })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "hasRole", [0 => (isset($context["rolesNew"]) || array_key_exists("rolesNew", $context) ? $context["rolesNew"] : (function () { throw new RuntimeError('Variable "rolesNew" does not exist.', 20, $this->source); })())], "method", false, false, false, 20)) && ((array_key_exists("form", $context)) ? (_twig_default_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), null)) : (null)))) {
            // line 21
            echo "        <li class=\"divider\"></li>
    ";
        }
        // line 23
        echo "    ";
        if (((array_key_exists("form", $context)) ? (_twig_default_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), null)) : (null))) {
            // line 24
            echo "      <li>
        <button type=\"button\" id=\"js-btn-filter\" class=\"znv-btn js-active collapsed\" data-toggle=\"collapse\"
                data-target=\"#js-filter\" aria-expanded=\"false\" aria-controls=\"js-filter\">
            <div class=\"znv-icon fa-filter\"></div>
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.filter"), "html", null, true);
            echo "
        </button>
      </li>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_buttonNew($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "buttonNew"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "buttonNew"));

        // line 11
        echo "        ";
        if (((isset($context["rolesNew"]) || array_key_exists("rolesNew", $context) ? $context["rolesNew"] : (function () { throw new RuntimeError('Variable "rolesNew" does not exist.', 11, $this->source); })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "hasRole", [0 => (isset($context["rolesNew"]) || array_key_exists("rolesNew", $context) ? $context["rolesNew"] : (function () { throw new RuntimeError('Variable "rolesNew" does not exist.', 11, $this->source); })())], "method", false, false, false, 11))) {
            // line 12
            echo "            <li>
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["pathNew"]) || array_key_exists("pathNew", $context) ? $context["pathNew"] : (function () { throw new RuntimeError('Variable "pathNew" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\" class=\"znv-btn\">
                    <div class=\"znv-icon fa-plus\"></div>
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["labelButtonNew"]) || array_key_exists("labelButtonNew", $context) ? $context["labelButtonNew"] : (function () { throw new RuntimeError('Variable "labelButtonNew" does not exist.', 15, $this->source); })())), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "    ";
        $this->displayBlock('formFilter', $context, $blocks);
        // line 70
        echo "
    <div class=\"znv-card\">
        ";
        // line 72
        $this->displayBlock('header_block', $context, $blocks);
        // line 73
        echo "        <div class=\"znv-card-body\">
            <div class=\"znv-list-container znv-striped\">
                ";
        // line 75
        $this->displayBlock('list', $context, $blocks);
        // line 76
        echo "            </div>
            ";
        // line 77
        $this->displayBlock('pagination', $context, $blocks);
        // line 82
        echo "        </div>
    </div>

    ";
        // line 85
        $this->displayBlock('modalDelete', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_formFilter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formFilter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formFilter"));

        // line 36
        echo "        <div class=\"collapse znv-box-filter\" id=\"js-filter\" aria-expanded=\"true\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start', ["action" => (isset($context["formFilterAction"]) || array_key_exists("formFilterAction", $context) ? $context["formFilterAction"] : (function () { throw new RuntimeError('Variable "formFilterAction" does not exist.', 37, $this->source); })()), "method" => (isset($context["formMethod"]) || array_key_exists("formMethod", $context) ? $context["formMethod"] : (function () { throw new RuntimeError('Variable "formMethod" does not exist.', 37, $this->source); })()), "attr" => ["class" =>         // line 38
(isset($context["classForm"]) || array_key_exists("classForm", $context) ? $context["classForm"] : (function () { throw new RuntimeError('Variable "classForm" does not exist.', 38, $this->source); })()), "novalidate" => "novalidate"]]);
        echo "
            ";
        // line 39
        $this->displayBlock('formContent', $context, $blocks);
        // line 53
        echo "            <div class=\"znv-form-group znv-form-action\">
                <button type=\"submit\" class=\"znv-btn znv-greenDark\" name=\"filter\" value=\"filter\">
                    ";
        // line 55
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.apply")), "html", null, true);
        echo "
                </button>
                <button type=\"button\" class=\"znv-btn znv-greyDark\" onclick=\"cleanFilters(this);\" value=\"reset\">
                    ";
        // line 58
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.clean")), "html", null, true);
        echo "
                </button>
            </div>
            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
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

    // line 39
    public function block_formContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        // line 40
        echo "                ";
        $context["filtered"] = false;
        // line 41
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "children", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "                    ";
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42)), 0))) {
                // line 43
                echo "                        ";
                $context["filtered"] = true;
                // line 44
                echo "                    ";
            }
            // line 45
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                ";
        if ((isset($context["filtered"]) || array_key_exists("filtered", $context) ? $context["filtered"] : (function () { throw new RuntimeError('Variable "filtered" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "                    <script type=\"text/javascript\">
                        \$('#js-btn-filter').addClass('znv-yellow');
                    </script>
                ";
        }
        // line 52
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
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

    // line 75
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

    // line 77
    public function block_pagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagination"));

        // line 78
        echo "                ";
        if ((1 === twig_compare((isset($context["totalEntitiesCount"]) || array_key_exists("totalEntitiesCount", $context) ? $context["totalEntitiesCount"] : (function () { throw new RuntimeError('Variable "totalEntitiesCount" does not exist.', 78, $this->source); })()), 0))) {
            // line 79
            echo "                    ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 79, $this->source); })()), "global/_pagination.html.twig");
            echo "
                ";
        }
        // line 81
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_modalDelete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalDelete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalDelete"));

        // line 86
        echo "        ";
        echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "modal", [0 => "page.common.confirm.delete_record", 1 => "page.common.confirm.ask_continue", 2 => "fa-trash", 3 => "modalRed"]);
        echo "

        <script>
            function setNameAndText(button) {

                var \$modal = \$('#modalConfirm');
                var \$button = \$(button);
                var \$div = \$button.parents('div.znv-line');
                var text = '";
        // line 94
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
        return "global/layout_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 94,  391 => 86,  381 => 85,  371 => 81,  365 => 79,  362 => 78,  352 => 77,  333 => 75,  314 => 72,  304 => 52,  298 => 48,  295 => 47,  286 => 45,  283 => 44,  280 => 43,  277 => 42,  272 => 41,  269 => 40,  259 => 39,  240 => 61,  234 => 58,  228 => 55,  224 => 53,  222 => 39,  218 => 38,  217 => 37,  214 => 36,  204 => 35,  194 => 85,  189 => 82,  187 => 77,  184 => 76,  182 => 75,  178 => 73,  176 => 72,  172 => 70,  169 => 35,  159 => 34,  149 => 19,  142 => 15,  137 => 13,  134 => 12,  131 => 11,  121 => 10,  106 => 28,  100 => 24,  97 => 23,  93 => 21,  90 => 20,  87 => 10,  77 => 9,  66 => 1,  64 => 7,  62 => 6,  60 => 5,  58 => 4,  56 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout.html.twig' %}

{% set classForm = classForm is defined ? classForm : 'znv-form-inline' %}
{% set formFilterAction = formFilterAction is defined ? formFilterAction : path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) %}
{% set formMethod = formMethod is defined ? formMethod : 'GET' %}
{% set labelButtonNew = labelButtonNew is defined ? labelButtonNew : 'page.list.buttons.add' %}
{% set rolesNew = rolesNew is defined ? rolesNew : false %}

{% block buttonsTitle %}
    {% block buttonNew %}
        {% if rolesNew and app.user.hasRole(rolesNew) %}
            <li>
                <a href=\"{{ pathNew }}\" class=\"znv-btn\">
                    <div class=\"znv-icon fa-plus\"></div>
                    {{ labelButtonNew|trans }}
                </a>
            </li>
        {% endif %}
    {% endblock %}
    {% if rolesNew and app.user.hasRole(rolesNew) and form|default(null) %}
        <li class=\"divider\"></li>
    {% endif %}
    {% if form|default(null) %}
      <li>
        <button type=\"button\" id=\"js-btn-filter\" class=\"znv-btn js-active collapsed\" data-toggle=\"collapse\"
                data-target=\"#js-filter\" aria-expanded=\"false\" aria-controls=\"js-filter\">
            <div class=\"znv-icon fa-filter\"></div>
            {{ 'form.buttons.filter'|trans }}
        </button>
      </li>
    {% endif %}
{% endblock %}

{% block content %}
    {% block formFilter %}
        <div class=\"collapse znv-box-filter\" id=\"js-filter\" aria-expanded=\"true\">
            {{ form_start(form, {'action': formFilterAction, 'method': formMethod,
                'attr': {'class': classForm, 'novalidate': 'novalidate' }}) }}
            {% block formContent %}
                {% set filtered = false %}
                {% for child in form.children %}
                    {% if child.vars.value|length > 0  %}
                        {% set filtered = true %}
                    {% endif %}
                    {{ form_row(child) }}
                {% endfor %}
                {% if filtered %}
                    <script type=\"text/javascript\">
                        \$('#js-btn-filter').addClass('znv-yellow');
                    </script>
                {% endif %}
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

    <div class=\"znv-card\">
        {% block header_block '' %}
        <div class=\"znv-card-body\">
            <div class=\"znv-list-container znv-striped\">
                {% block list '' %}
            </div>
            {% block pagination %}
                {% if totalEntitiesCount > 0 %}
                    {{ knp_pagination_render(entities,'global/_pagination.html.twig') }}
                {% endif %}
            {% endblock pagination %}
        </div>
    </div>

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
", "global/layout_list.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/global/layout_list.html.twig");
    }
}
