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

/* global/layout_list_multi.html.twig */
class __TwigTemplate_0a70bafba67abe8918f9739f50a7144d65b9bb99d8aa99da0b08416b48d067dc extends Template
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
            'blockmultilist' => [$this, 'block_blockmultilist'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/layout_list_multi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/layout_list_multi.html.twig"));

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
        $this->parent = $this->loadTemplate("global/layout.html.twig", "global/layout_list_multi.html.twig", 1);
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
        <button type=\"button\" class=\"znv-btn js-active collapsed\" data-toggle=\"collapse\"
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
        // line 61
        $this->displayBlock('blockmultilist', $context, $blocks);
        // line 62
        $this->displayBlock('modalDelete', $context, $blocks);
        // line 80
        echo "
";
        
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
        // line 44
        echo "            <div class=\"znv-form-group znv-form-action\">
                <button type=\"submit\" class=\"znv-btn znv-greenDark\" name=\"filter\" value=\"filter\">
                    ";
        // line 46
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.apply")), "html", null, true);
        echo "
                </button>
                <button type=\"button\" class=\"znv-btn znv-greyDark\" onclick=\"cleanFilters(this);\" value=\"reset\">
                    ";
        // line 49
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.clean")), "html", null, true);
        echo "
                </button>
            </div>
            ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "children", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 41
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_blockmultilist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blockmultilist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blockmultilist"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_modalDelete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalDelete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalDelete"));

        // line 63
        echo "        ";
        echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "modal", [0 => "page.common.confirm.delete_record", 1 => "page.common.confirm.ask_continue", 2 => "fa-trash", 3 => "modalRed"]);
        echo "

        <script>
            function setNameAndText(button) {

                var \$modal = \$('#modalConfirm');
                var \$button = \$(button);
                var \$div = \$button.parents('div.znv-line');
                var text = '";
        // line 71
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
        return "global/layout_list_multi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 71,  303 => 63,  293 => 62,  274 => 61,  264 => 43,  255 => 41,  250 => 40,  240 => 39,  221 => 52,  215 => 49,  209 => 46,  205 => 44,  203 => 39,  199 => 38,  198 => 37,  195 => 36,  185 => 35,  174 => 80,  172 => 62,  170 => 61,  167 => 35,  157 => 34,  147 => 19,  140 => 15,  135 => 13,  132 => 12,  129 => 11,  119 => 10,  104 => 28,  98 => 24,  95 => 23,  91 => 21,  88 => 20,  85 => 10,  75 => 9,  64 => 1,  62 => 7,  60 => 6,  58 => 5,  56 => 4,  54 => 3,  41 => 1,);
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
        <button type=\"button\" class=\"znv-btn js-active collapsed\" data-toggle=\"collapse\"
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
{% block blockmultilist '' %}
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
", "global/layout_list_multi.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/global/layout_list_multi.html.twig");
    }
}
