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

/* global/layout_form.html.twig */
class __TwigTemplate_f1edd7f399e15d7a8d58136c1c698cdeea41d3a7fc38d06926ed7994e1c1347d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'beforeForm' => [$this, 'block_beforeForm'],
            'formFull' => [$this, 'block_formFull'],
            'formContent' => [$this, 'block_formContent'],
            'formExtraContent' => [$this, 'block_formExtraContent'],
            'formButtons' => [$this, 'block_formButtons'],
            'formCommonButtons' => [$this, 'block_formCommonButtons'],
            'formExtraButtons' => [$this, 'block_formExtraButtons'],
            'formScripts' => [$this, 'block_formScripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/layout_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/layout_form.html.twig"));

        // line 3
        $context["multipart"] = ((array_key_exists("multipart", $context)) ? ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new RuntimeError('Variable "multipart" does not exist.', 3, $this->source); })())) : (false));
        // line 4
        $context["classForm"] = ((array_key_exists("classForm", $context)) ? ((isset($context["classForm"]) || array_key_exists("classForm", $context) ? $context["classForm"] : (function () { throw new RuntimeError('Variable "classForm" does not exist.', 4, $this->source); })())) : ("znv-form-horizontal"));
        // line 5
        $context["formAction"] = ((array_key_exists("formAction", $context)) ? ((isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 5, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "attributes", [], "any", false, false, false, 5), "get", [0 => "_route"], "method", false, false, false, 5), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "attributes", [], "any", false, false, false, 5), "get", [0 => "_route_params"], "method", false, false, false, 5))));
        // line 6
        $context["formMethod"] = ((array_key_exists("formMethod", $context)) ? ((isset($context["formMethod"]) || array_key_exists("formMethod", $context) ? $context["formMethod"] : (function () { throw new RuntimeError('Variable "formMethod" does not exist.', 6, $this->source); })())) : ("POST"));
        // line 7
        $context["classDivContent"] = ((array_key_exists("classDivContent", $context)) ? ((isset($context["classDivContent"]) || array_key_exists("classDivContent", $context) ? $context["classDivContent"] : (function () { throw new RuntimeError('Variable "classDivContent" does not exist.', 7, $this->source); })())) : ("col12"));
        // line 8
        $context["classDivContentButton"] = ((array_key_exists("classDivContentButton", $context)) ? ((isset($context["classDivContentButton"]) || array_key_exists("classDivContentButton", $context) ? $context["classDivContentButton"] : (function () { throw new RuntimeError('Variable "classDivContentButton" does not exist.', 8, $this->source); })())) : (""));
        // line 9
        $context["pathCancel"] = ((array_key_exists("pathCancel", $context)) ? ((isset($context["pathCancel"]) || array_key_exists("pathCancel", $context) ? $context["pathCancel"] : (function () { throw new RuntimeError('Variable "pathCancel" does not exist.', 9, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home")));
        // line 1
        $this->parent = $this->loadTemplate("global/layout.html.twig", "global/layout_form.html.twig", 1);
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
        echo "    <div class=\"znv-card\">
        <div class=\"znv-card-body\">
            ";
        // line 14
        $this->displayBlock('beforeForm', $context, $blocks);
        // line 16
        echo "
            ";
        // line 17
        $this->displayBlock('formFull', $context, $blocks);
        // line 54
        echo "        </div>
    </div>
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_beforeForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeForm"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeForm"));

        // line 15
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_formFull($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formFull"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formFull"));

        // line 18
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["action" => (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 18, $this->source); })()), "multipart" => (isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new RuntimeError('Variable "multipart" does not exist.', 18, $this->source); })()), "method" => (isset($context["formMethod"]) || array_key_exists("formMethod", $context) ? $context["formMethod"] : (function () { throw new RuntimeError('Variable "formMethod" does not exist.', 18, $this->source); })()), "attr" => ["class" =>         // line 19
(isset($context["classForm"]) || array_key_exists("classForm", $context) ? $context["classForm"] : (function () { throw new RuntimeError('Variable "classForm" does not exist.', 19, $this->source); })()), "novalidate" => "novalidate"]]);
        echo "
                ";
        // line 20
        $this->displayBlock('formContent', $context, $blocks);
        // line 29
        echo "
                ";
        // line 30
        $this->displayBlock('formButtons', $context, $blocks);
        // line 49
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "

                ";
        // line 51
        $this->displayBlock('formScripts', $context, $blocks);
        // line 52
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_formContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        // line 21
        echo "                    <div class=\"znv-full\">
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "children", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </div>
                    ";
        // line 26
        $this->displayBlock('formExtraContent', $context, $blocks);
        // line 28
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_formExtraContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formExtraContent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formExtraContent"));

        // line 27
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formButtons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formButtons"));

        // line 31
        echo "                    <div class=\"znv-full\">
                        <div class=\"znv-buttons\">
                            <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.info.field_required"), "html", null, true);
        echo "</p>

                            ";
        // line 35
        $this->displayBlock('formCommonButtons', $context, $blocks);
        // line 44
        echo "
                            ";
        // line 45
        $this->displayBlock('formExtraButtons', $context, $blocks);
        // line 46
        echo "                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_formCommonButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formCommonButtons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formCommonButtons"));

        // line 36
        echo "                                ";
        if ((0 !== twig_compare((isset($context["pathCancel"]) || array_key_exists("pathCancel", $context) ? $context["pathCancel"] : (function () { throw new RuntimeError('Variable "pathCancel" does not exist.', 36, $this->source); })()), ""))) {
            // line 37
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["pathCancel"]) || array_key_exists("pathCancel", $context) ? $context["pathCancel"] : (function () { throw new RuntimeError('Variable "pathCancel" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\"
                                       class=\"znv-btn znv-greyDark\">";
            // line 38
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.cancel")), "html", null, true);
            echo "</a>
                                ";
        }
        // line 40
        echo "                                <button type=\"submit\" id=\"save-button\" class=\"znv-btn znv-greenDark\">
                                    ";
        // line 41
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.save")), "html", null, true);
        echo "
                                </button>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_formExtraButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formExtraButtons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formExtraButtons"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_formScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formScripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formScripts"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "global/layout_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 51,  315 => 45,  302 => 41,  299 => 40,  294 => 38,  289 => 37,  286 => 36,  276 => 35,  264 => 46,  262 => 45,  259 => 44,  257 => 35,  252 => 33,  248 => 31,  238 => 30,  228 => 27,  218 => 26,  208 => 28,  206 => 26,  203 => 25,  194 => 23,  190 => 22,  187 => 21,  177 => 20,  166 => 52,  164 => 51,  158 => 49,  156 => 30,  153 => 29,  151 => 20,  147 => 19,  145 => 18,  135 => 17,  125 => 15,  115 => 14,  102 => 54,  100 => 17,  97 => 16,  95 => 14,  91 => 12,  81 => 11,  70 => 1,  68 => 9,  66 => 8,  64 => 7,  62 => 6,  60 => 5,  58 => 4,  56 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout.html.twig' %}

{% set multipart = multipart is defined ? multipart : false %}
{% set classForm = classForm is defined ? classForm : 'znv-form-horizontal' %}
{% set formAction = formAction is defined ? formAction : path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) %}
{% set formMethod = formMethod is defined ? formMethod : 'POST' %}
{% set classDivContent = classDivContent is defined ? classDivContent : 'col12' %}
{% set classDivContentButton = classDivContentButton is defined ? classDivContentButton : '' %}
{% set pathCancel = pathCancel is defined ? pathCancel : path('home') %}

{% block content %}
    <div class=\"znv-card\">
        <div class=\"znv-card-body\">
            {% block beforeForm %}
            {% endblock %}

            {% block formFull %}
                {{ form_start(form, {'action': formAction, 'multipart': multipart, 'method': formMethod,
                    'attr': {'class': classForm, 'novalidate': 'novalidate' }}) }}
                {% block formContent %}
                    <div class=\"znv-full\">
                        {% for child in form.children %}
                            {{ form_row(child) }}
                        {% endfor %}
                    </div>
                    {% block formExtraContent %}
                    {% endblock %}
                {% endblock formContent %}

                {% block formButtons %}
                    <div class=\"znv-full\">
                        <div class=\"znv-buttons\">
                            <p>{{ 'form.info.field_required'|trans }}</p>

                            {% block formCommonButtons %}
                                {% if pathCancel != \"\" %}
                                    <a href=\"{{ pathCancel }}\"
                                       class=\"znv-btn znv-greyDark\">{{ 'form.buttons.cancel'|trans|upper }}</a>
                                {% endif %}
                                <button type=\"submit\" id=\"save-button\" class=\"znv-btn znv-greenDark\">
                                    {{ 'form.buttons.save'|trans|upper }}
                                </button>
                            {% endblock formCommonButtons %}

                            {% block formExtraButtons '' %}
                        </div>
                    </div>
                {% endblock formButtons %}
                {{ form_end(form) }}

                {% block formScripts '' %}

            {% endblock %}
        </div>
    </div>
            
{% endblock content %}
", "global/layout_form.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/global/layout_form.html.twig");
    }
}
