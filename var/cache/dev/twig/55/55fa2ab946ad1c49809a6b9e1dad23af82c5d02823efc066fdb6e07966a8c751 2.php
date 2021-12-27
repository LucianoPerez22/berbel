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

/* global/macros.html.twig */
class __TwigTemplate_787f005ebeaaf69baad4ff20fc75dc872feb2b3e9a8dd688bd186e24dbd768b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/macros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/macros.html.twig"));

        // line 18
        echo "
";
        // line 25
        echo "
";
        // line 32
        echo "
";
        // line 39
        echo "
";
        // line 53
        echo "
";
        // line 66
        echo "
";
        // line 74
        echo "
";
        // line 127
        echo "
";
        // line 141
        echo "
";
        // line 148
        echo "
";
        // line 155
        echo "
";
        // line 164
        echo "
";
        // line 175
        echo "
";
        // line 181
        echo "

";
        // line 183
        $macros["macro"] = $this->macros["macro"] = $this;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_alertMessage($__label__ = null, $__messages__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "messages" => $__messages__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alertMessage"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alertMessage"));

            // line 2
            $context["alertColor"] = "red";
            // line 3
            if ((0 === twig_compare((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 3, $this->source); })()), "info"))) {
                $context["alertColor"] = "ligthBlue";
            }
            // line 4
            if ((0 === twig_compare((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 4, $this->source); })()), "warning"))) {
                $context["alertColor"] = "yellow";
            }
            // line 5
            if ((0 === twig_compare((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 5, $this->source); })()), "success"))) {
                $context["alertColor"] = "green";
            }
            // line 6
            echo "<div class=\"znv-alert znv-";
            echo twig_escape_filter($this->env, (isset($context["alertColor"]) || array_key_exists("alertColor", $context) ? $context["alertColor"] : (function () { throw new RuntimeError('Variable "alertColor" does not exist.', 6, $this->source); })()), "html", null, true);
            echo " alert\" role=\"alert\">
    <button type=\"button\" class=\"znv-close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
    <strong>";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("flash.labels." . (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })())), [], "flashes"), "html", null, true);
            echo "!</strong>
    ";
            // line 9
            if (twig_test_iterable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 9, $this->source); })()))) {
                // line 10
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 10, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 11
                    echo "            ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [], "flashes");
                    echo " <br>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "    ";
            } else {
                // line 14
                echo "        ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 14, $this->source); })()), [], "flashes");
                echo " <br>
    ";
            }
            // line 16
            echo "</div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 19
    public function macro_buttonReturn($__path__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "path" => $__path__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "buttonReturn"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "buttonReturn"));

            // line 20
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\" class=\"znv-btn\">
        <i class=\"fa-arrow-left\"></i>
        ";
            // line 22
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.return")), "html", null, true);
            echo "
    </a>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 26
    public function macro_listActionButton($__path__ = null, $__title__ = null, $__icon__ = null, $__roles__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "path" => $__path__,
            "title" => $__title__,
            "icon" => $__icon__,
            "roles" => $__roles__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "listActionButton"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "listActionButton"));

            // line 27
            echo "    ";
            if ((( !twig_test_empty((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 27, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "hasRole", [0 => (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 27, $this->source); })())], "method", false, false, false, 27)) || twig_test_empty((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 27, $this->source); })())))) {
                // line 28
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 28, $this->source); })())), "html", null, true);
                echo "\"
               class=\"znv-icon ";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "\"></a>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 33
    public function macro_listActionButtonSpan($__path__ = null, $__title__ = null, $__spanClass__ = null, $__spanText__ = null, $__roles__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "path" => $__path__,
            "title" => $__title__,
            "spanClass" => $__spanClass__,
            "spanText" => $__spanText__,
            "roles" => $__roles__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "listActionButtonSpan"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "listActionButtonSpan"));

            // line 34
            echo "    ";
            if ((( !twig_test_empty((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 34, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "hasRole", [0 => (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 34, $this->source); })())], "method", false, false, false, 34)) || twig_test_empty((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 34, $this->source); })())))) {
                // line 35
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 35, $this->source); })()), "html", null, true);
                echo "\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 35, $this->source); })())), "html", null, true);
                echo "\">
        <span class=\"znv-label ";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["spanClass"]) || array_key_exists("spanClass", $context) ? $context["spanClass"] : (function () { throw new RuntimeError('Variable "spanClass" does not exist.', 36, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["spanText"]) || array_key_exists("spanText", $context) ? $context["spanText"] : (function () { throw new RuntimeError('Variable "spanText" does not exist.', 36, $this->source); })()))), "html", null, true);
                echo "</span></a>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 40
    public function macro_liConfirmButton($__title__ = null, $__classIcon__ = null, $__roles__ = null, $__callback__ = null, $__modalId__ = null, $__selector__ = null, $__path__ = null, $__dataExtraBody__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "classIcon" => $__classIcon__,
            "roles" => $__roles__,
            "callback" => $__callback__,
            "modalId" => $__modalId__,
            "selector" => $__selector__,
            "path" => $__path__,
            "dataExtraBody" => $__dataExtraBody__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "liConfirmButton"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "liConfirmButton"));

            // line 41
            echo "    ";
            $context["selector"] = (((0 === twig_compare((isset($context["selector"]) || array_key_exists("selector", $context) ? $context["selector"] : (function () { throw new RuntimeError('Variable "selector" does not exist.', 41, $this->source); })()), ""))) ? ("div.znv-line") : ((isset($context["selector"]) || array_key_exists("selector", $context) ? $context["selector"] : (function () { throw new RuntimeError('Variable "selector" does not exist.', 41, $this->source); })())));
            // line 42
            echo "    ";
            $context["modalId"] = (((0 === twig_compare((isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new RuntimeError('Variable "modalId" does not exist.', 42, $this->source); })()), ""))) ? ("modalConfirm") : ((isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new RuntimeError('Variable "modalId" does not exist.', 42, $this->source); })())));
            // line 43
            echo "    ";
            $context["callback"] = (((0 === twig_compare((isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 43, $this->source); })()), ""))) ? ("undefined") : ((isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 43, $this->source); })())));
            // line 44
            echo "    ";
            $context["path"] = (((0 === twig_compare((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 44, $this->source); })()), ""))) ? ("undefined") : ((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 44, $this->source); })())));
            // line 45
            echo "    ";
            $context["dataExtraBody"] = (((0 === twig_compare((isset($context["dataExtraBody"]) || array_key_exists("dataExtraBody", $context) ? $context["dataExtraBody"] : (function () { throw new RuntimeError('Variable "dataExtraBody" does not exist.', 45, $this->source); })()), ""))) ? ("undefined") : ((isset($context["dataExtraBody"]) || array_key_exists("dataExtraBody", $context) ? $context["dataExtraBody"] : (function () { throw new RuntimeError('Variable "dataExtraBody" does not exist.', 45, $this->source); })())));
            // line 46
            echo "    ";
            if ((( !twig_test_empty((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 46, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "hasRole", [0 => (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 46, $this->source); })())], "method", false, false, false, 46)) || twig_test_empty((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 46, $this->source); })())))) {
                // line 47
                echo "            <button type=\"button\" data-rel=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 47, $this->source); })())), "html", null, true);
                echo "\"
                    data-toggle=\"modal\" class=\"";
                // line 48
                echo twig_escape_filter($this->env, (isset($context["classIcon"]) || array_key_exists("classIcon", $context) ? $context["classIcon"] : (function () { throw new RuntimeError('Variable "classIcon" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "\"
                    data-target=\"#";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new RuntimeError('Variable "modalId" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "\" onclick=\"show";
                echo twig_escape_filter($this->env, (isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new RuntimeError('Variable "modalId" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "(this, ";
                echo twig_escape_filter($this->env, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 49, $this->source); })()), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, (isset($context["selector"]) || array_key_exists("selector", $context) ? $context["selector"] : (function () { throw new RuntimeError('Variable "selector" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (isset($context["dataExtraBody"]) || array_key_exists("dataExtraBody", $context) ? $context["dataExtraBody"] : (function () { throw new RuntimeError('Variable "dataExtraBody" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "')\">
            </button>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_liConfirmButtonComercio($__title__ = null, $__color__ = null, $__action__ = null, $__text__ = null, $__roles__ = null, $__callback__ = null, $__modalId__ = null, $__selector__ = null, $__path__ = null, $__dataExtraBody__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "color" => $__color__,
            "action" => $__action__,
            "text" => $__text__,
            "roles" => $__roles__,
            "callback" => $__callback__,
            "modalId" => $__modalId__,
            "selector" => $__selector__,
            "path" => $__path__,
            "dataExtraBody" => $__dataExtraBody__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "liConfirmButtonComercio"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "liConfirmButtonComercio"));

            // line 55
            echo "    ";
            $context["selector"] = (((0 === twig_compare((isset($context["selector"]) || array_key_exists("selector", $context) ? $context["selector"] : (function () { throw new RuntimeError('Variable "selector" does not exist.', 55, $this->source); })()), ""))) ? ("div.znv-line") : ((isset($context["selector"]) || array_key_exists("selector", $context) ? $context["selector"] : (function () { throw new RuntimeError('Variable "selector" does not exist.', 55, $this->source); })())));
            // line 56
            echo "    ";
            $context["modalId"] = (((0 === twig_compare((isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new RuntimeError('Variable "modalId" does not exist.', 56, $this->source); })()), ""))) ? ("modalConfirm") : ((isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new RuntimeError('Variable "modalId" does not exist.', 56, $this->source); })())));
            // line 57
            echo "    ";
            $context["callback"] = (((0 === twig_compare((isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 57, $this->source); })()), ""))) ? ("undefined") : ((isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 57, $this->source); })())));
            // line 58
            echo "    ";
            $context["path"] = (((0 === twig_compare((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 58, $this->source); })()), ""))) ? ("undefined") : ((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 58, $this->source); })())));
            // line 59
            echo "    ";
            $context["dataExtraBody"] = (((0 === twig_compare((isset($context["dataExtraBody"]) || array_key_exists("dataExtraBody", $context) ? $context["dataExtraBody"] : (function () { throw new RuntimeError('Variable "dataExtraBody" does not exist.', 59, $this->source); })()), ""))) ? ("undefined") : ((isset($context["dataExtraBody"]) || array_key_exists("dataExtraBody", $context) ? $context["dataExtraBody"] : (function () { throw new RuntimeError('Variable "dataExtraBody" does not exist.', 59, $this->source); })())));
            // line 60
            echo "    ";
            if ((( !twig_test_empty((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 60, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "hasRole", [0 => (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 60, $this->source); })())], "method", false, false, false, 60)) || twig_test_empty((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 60, $this->source); })())))) {
                // line 61
                echo "        <button type=\"button\" data-rel=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 61, $this->source); })()), "html", null, true);
                echo "\"
                class=\"znv-btn\" data-toggle=\"modal\" data-target=\"#";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new RuntimeError('Variable "modalId" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "\" onclick=\"show";
                echo twig_escape_filter($this->env, (isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new RuntimeError('Variable "modalId" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "(this, ";
                echo twig_escape_filter($this->env, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 62, $this->source); })()), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, (isset($context["selector"]) || array_key_exists("selector", $context) ? $context["selector"] : (function () { throw new RuntimeError('Variable "selector" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (isset($context["dataExtraBody"]) || array_key_exists("dataExtraBody", $context) ? $context["dataExtraBody"] : (function () { throw new RuntimeError('Variable "dataExtraBody" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "')\"><span class=\"znv-label ";
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "
        </button>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 67
    public function macro_listEmpty($__totalEntitiesCount__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "totalEntitiesCount" => $__totalEntitiesCount__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "listEmpty"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "listEmpty"));

            // line 68
            echo "    ";
            if ((0 === twig_compare((isset($context["totalEntitiesCount"]) || array_key_exists("totalEntitiesCount", $context) ? $context["totalEntitiesCount"] : (function () { throw new RuntimeError('Variable "totalEntitiesCount" does not exist.', 68, $this->source); })()), 0))) {
                // line 69
                echo "        <div class=\"boxListEmpty\">
            <p>";
                // line 70
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.list.empty")), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 75
    public function macro_modal($__label__ = null, $__body__ = null, $__icon__ = null, $__modalClass__ = null, $__id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "body" => $__body__,
            "icon" => $__icon__,
            "modalClass" => $__modalClass__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "modal"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "modal"));

            // line 76
            echo "    ";
            $context["id"] = (((0 === twig_compare((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 76, $this->source); })()), ""))) ? ("modalConfirm") : ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 76, $this->source); })())));
            // line 77
            echo "    <div class=\"znv-modal ";
            echo twig_escape_filter($this->env, (isset($context["modalClass"]) || array_key_exists("modalClass", $context) ? $context["modalClass"] : (function () { throw new RuntimeError('Variable "modalClass" does not exist.', 77, $this->source); })()), "html", null, true);
            echo " in\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete\">
        <div class=\"znv-modal-dialog\" role=\"document\">
            <div class=\"znv-modal-content\">
                <div class=\"znv-modal-header\">
                    <button type=\"button\" class=\"znv-close\" data-dismiss=\"modal\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    <div class=\"znv-icon ";
            // line 84
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 84, $this->source); })()), "fa-trash")) : ("fa-trash")), "html", null, true);
            echo "\"></div>
                    <span class=\"js-modal-label\">";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 85, $this->source); })()));
            echo "</span>
                </div>
                <div class=\"znv-modal-body\">
                    <p class=\"js-modal-body\">";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 88, $this->source); })()));
            echo "<span class=\"js-modal-extra-body\"></span></p>
                </div>
                <div class=\"znv-modal-footer\">
                    <button type=\"button\" class=\"znv-btn znv-greyDark\" data-dismiss=\"modal\">
                        ";
            // line 92
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.cancel")), "html", null, true);
            echo "
                        <div class=\"ripple-container\">
                            <div class=\"ripple ripple-on ripple-out\"
                                 style=\"left: 16.0313px; top: 18px; background-color: rgb(255, 255, 255); transform: scale(10.375);\"></div>
                        </div>
                    </button>
                    <button type=\"submit\" class=\"znv-btn znv-greenDark js-modal-accept\">
                        ";
            // line 99
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.accept_modal")), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function show";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 107, $this->source); })()), "html", null, true);
            echo "(button, callback, selector, path, dataExtraBody) {
            ";
            // line 108
            if ( !array_key_exists("selector", $context)) {
                echo " ";
                $context["selector"] = "div.znv-line";
                echo " ";
            }
            // line 109
            echo "            if (typeof callback !== 'undefined') {
                callback(button);
            }

            var \$modal = \$('#";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 113, $this->source); })()), "html", null, true);
            echo "');
            var \$button = \$(button);
            var \$div = \$button.parents(selector);
            if( path !== 'undefined'){
                \$path = path;
            }else{
                \$path = \$div.data('path');
            }
            \$modal.find('.js-modal-extra-body').html (' '+ dataExtraBody);
            \$modal.find('.js-modal-accept').click(function(){window.location=\$path});

        }
    </script>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 128
    public function macro_liNav($__active__ = null, $__route__ = null, $__linkText__ = null, $__roles__ = null, $__icon__ = null, $__routeParams__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "active" => $__active__,
            "route" => $__route__,
            "linkText" => $__linkText__,
            "roles" => $__roles__,
            "icon" => $__icon__,
            "routeParams" => $__routeParams__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "liNav"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "liNav"));

            // line 129
            if ((null === (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 129, $this->source); })()))) {
                $context["routeParams"] = [];
            }
            // line 130
            $context["classIcon"] = "";
            // line 131
            echo "    ";
            if ((array_key_exists("icon", $context) && (0 !== twig_compare((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 131, $this->source); })()), "")))) {
                $context["classIcon"] = ("znv-icon " . (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 131, $this->source); })()));
            }
            // line 132
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "hasRole", [0 => (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 132, $this->source); })())], "method", false, false, false, 132)) {
                // line 133
                echo "        <li ";
                if ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 133, $this->source); })())) {
                    echo " class=\"znv-active\" ";
                }
                echo ">
            <a href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 134, $this->source); })()), (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 134, $this->source); })())), "html", null, true);
                echo "\" class=\"znv-btn\">
                <div class=\"";
                // line 135
                echo twig_escape_filter($this->env, (isset($context["classIcon"]) || array_key_exists("classIcon", $context) ? $context["classIcon"] : (function () { throw new RuntimeError('Variable "classIcon" does not exist.', 135, $this->source); })()), "html", null, true);
                echo "\"></div>
                ";
                // line 136
                echo twig_escape_filter($this->env, (isset($context["linkText"]) || array_key_exists("linkText", $context) ? $context["linkText"] : (function () { throw new RuntimeError('Variable "linkText" does not exist.', 136, $this->source); })()), "html", null, true);
                echo "
            </a>
        </li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 142
    public function macro_cardHalfView($__text__ = null, $__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "cardHalfView"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "cardHalfView"));

            // line 143
            echo "<div class=\"znv-form-group-view\">
    <p>";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 144, $this->source); })()), "html", null, true);
            echo "</p>
    <h3>";
            // line 145
            echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 145, $this->source); })()), " ---- ")) : (" ---- ")), "html", null, true);
            echo "</h3>
</div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 149
    public function macro_viewHeaderFields($__title__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "viewHeaderFields"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "viewHeaderFields"));

            // line 150
            echo "<div class=\"znv-widgets-header\">
    <div class=\"znv-icon ";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 151, $this->source); })()), "html", null, true);
            echo "\"></div>
    <h3>";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 152, $this->source); })()), "html", null, true);
            echo "</h3>
</div><!-- znv-widgets-header -->
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 156
    public function macro_viewField($__label__ = null, $__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "viewField"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "viewField"));

            // line 157
            echo "<div class=\"znv-form-group-view\">
    <p>";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 158, $this->source); })()), "html", null, true);
            echo "</p>
    <div class=\"znv-group\">
        <h3>";
            // line 160
            echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 160, $this->source); })()), " ---- ")) : (" ---- ")), "html", null, true);
            echo "</h3>
    </div>
</div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 165
    public function macro_viewButtonManager($__path__ = null, $__title__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "path" => $__path__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "viewButtonManager"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "viewButtonManager"));

            // line 166
            echo "<div class=\"znv-full\">
    <div class=\"znv-buttons znv-go-right\">
        <a href=\"";
            // line 168
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 168, $this->source); })()), "html", null, true);
            echo "\" class=\"znv-btn znv-sm znv-lightBlue\">
            <div class=\"znv-icon fa-cog\"></div>
            ";
            // line 170
            echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 170, $this->source); })()), "Manager")) : ("Manager")), "html", null, true);
            echo "
        </a>
    </div>
</div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 176
    public function macro_viewEmptyList($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "viewEmptyList"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "viewEmptyList"));

            // line 177
            echo "<div class=\"znv-list-empty\">
    <h4>";
            // line 178
            echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 178, $this->source); })()), "List Empty")) : ("List Empty")), "html", null, true);
            echo "</h4>
</div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "global/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  942 => 178,  939 => 177,  920 => 176,  900 => 170,  895 => 168,  891 => 166,  871 => 165,  852 => 160,  847 => 158,  844 => 157,  824 => 156,  806 => 152,  802 => 151,  799 => 150,  779 => 149,  761 => 145,  757 => 144,  754 => 143,  734 => 142,  714 => 136,  710 => 135,  706 => 134,  699 => 133,  696 => 132,  691 => 131,  689 => 130,  685 => 129,  661 => 128,  632 => 113,  626 => 109,  620 => 108,  616 => 107,  605 => 99,  595 => 92,  588 => 88,  582 => 85,  578 => 84,  565 => 77,  562 => 76,  539 => 75,  520 => 70,  517 => 69,  514 => 68,  495 => 67,  460 => 62,  455 => 61,  452 => 60,  449 => 59,  446 => 58,  443 => 57,  440 => 56,  437 => 55,  409 => 54,  380 => 49,  376 => 48,  371 => 47,  368 => 46,  365 => 45,  362 => 44,  359 => 43,  356 => 42,  353 => 41,  327 => 40,  307 => 36,  300 => 35,  297 => 34,  274 => 33,  256 => 29,  249 => 28,  246 => 27,  224 => 26,  206 => 22,  200 => 20,  181 => 19,  165 => 16,  159 => 14,  156 => 13,  147 => 11,  142 => 10,  140 => 9,  136 => 8,  130 => 6,  126 => 5,  122 => 4,  118 => 3,  116 => 2,  96 => 1,  86 => 183,  82 => 181,  79 => 175,  76 => 164,  73 => 155,  70 => 148,  67 => 141,  64 => 127,  61 => 74,  58 => 66,  55 => 53,  52 => 39,  49 => 32,  46 => 25,  43 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro alertMessage(label, messages) %}
{% set alertColor = 'red' %}
{% if label == 'info' %}{% set alertColor = 'ligthBlue' %}{% endif %}
{% if label == 'warning' %}{% set alertColor = 'yellow' %}{% endif %}
{% if label == 'success' %}{% set alertColor = 'green' %}{% endif %}
<div class=\"znv-alert znv-{{ alertColor }} alert\" role=\"alert\">
    <button type=\"button\" class=\"znv-close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
    <strong>{{ ('flash.labels.'~ label)| trans({}, 'flashes') }}!</strong>
    {% if messages is iterable %}
        {% for message in messages %}
            {{ message |trans({}, 'flashes') | raw }} <br>
        {% endfor %}
    {% else %}
        {{ messages |trans({}, 'flashes') | raw }} <br>
    {% endif %}
</div>
{% endmacro alertMessage %}

{% macro buttonReturn(path) %}
    <a href=\"{{ path }}\" class=\"znv-btn\">
        <i class=\"fa-arrow-left\"></i>
        {{ 'form.buttons.return'|trans|upper }}
    </a>
{% endmacro buttonReturn %}

{% macro listActionButton(path, title, icon, roles) %}
    {% if (roles is not empty and app.user.hasRole(roles)) or roles is empty %}
        <a href=\"{{ path }}\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"{{ title|trans }}\"
               class=\"znv-icon {{ icon }}\"></a>
    {% endif %}
{% endmacro listActionButton %}

{% macro listActionButtonSpan(path, title, spanClass, spanText, roles) %}
    {% if (roles is not empty and app.user.hasRole(roles)) or roles is empty %}
        <a href=\"{{ path }}\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"{{ title|trans }}\">
        <span class=\"znv-label {{spanClass}}\">{{ spanText | trans | upper}}</span></a>
    {% endif %}
{% endmacro listActionButtonSpan %}

{% macro liConfirmButton(title, classIcon, roles, callback, modalId,selector, path, dataExtraBody) %}
    {% set selector = (selector == \"\") ? 'div.znv-line' : selector %}
    {% set modalId = (modalId == \"\") ? 'modalConfirm' : modalId %}
    {% set callback = (callback == \"\") ? 'undefined' : callback %}
    {% set path = (path == \"\") ? 'undefined' : path %}
    {% set dataExtraBody = (dataExtraBody == \"\") ? 'undefined' : dataExtraBody %}
    {% if (roles is not empty and app.user.hasRole(roles)) or roles is empty %}
            <button type=\"button\" data-rel=\"tooltip\" data-placement=\"top\" title=\"{{ title | trans }}\"
                    data-toggle=\"modal\" class=\"{{ classIcon }}\"
                    data-target=\"#{{ modalId }}\" onclick=\"show{{modalId}}(this, {{ callback }},'{{ selector }}', '{{path}}', '{{dataExtraBody}}')\">
            </button>
    {% endif %}
{% endmacro %}

{% macro liConfirmButtonComercio(title, color, action, text, roles, callback, modalId,selector, path, dataExtraBody) %}
    {% set selector = (selector == \"\") ? 'div.znv-line' : selector %}
    {% set modalId = (modalId == \"\") ? 'modalConfirm' : modalId %}
    {% set callback = (callback == \"\") ? 'undefined' : callback %}
    {% set path = (path == \"\") ? 'undefined' : path %}
    {% set dataExtraBody = (dataExtraBody == \"\") ? 'undefined' : dataExtraBody %}
    {% if (roles is not empty and app.user.hasRole(roles)) or roles is empty %}
        <button type=\"button\" data-rel=\"tooltip\" data-placement=\"top\" title=\"{{ title}}\"
                class=\"znv-btn\" data-toggle=\"modal\" data-target=\"#{{ modalId }}\" onclick=\"show{{modalId}}(this, {{ callback }},'{{ selector }}', '{{path}}', '{{dataExtraBody}}')\"><span class=\"znv-label {{ color }}\">{{ action }}</span> {{ text }}
        </button>
    {% endif %}
{% endmacro %}

{% macro listEmpty(totalEntitiesCount) %}
    {% if totalEntitiesCount == 0 %}
        <div class=\"boxListEmpty\">
            <p>{{ 'page.list.empty' | trans() | upper }}</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro modal(label, body, icon, modalClass, id) %}
    {% set id = (id == \"\") ? 'modalConfirm' : id %}
    <div class=\"znv-modal {{modalClass}} in\" id=\"{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete\">
        <div class=\"znv-modal-dialog\" role=\"document\">
            <div class=\"znv-modal-content\">
                <div class=\"znv-modal-header\">
                    <button type=\"button\" class=\"znv-close\" data-dismiss=\"modal\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                    <div class=\"znv-icon {{ icon|default('fa-trash') }}\"></div>
                    <span class=\"js-modal-label\">{{ label|trans|raw }}</span>
                </div>
                <div class=\"znv-modal-body\">
                    <p class=\"js-modal-body\">{{ body|trans|raw }}<span class=\"js-modal-extra-body\"></span></p>
                </div>
                <div class=\"znv-modal-footer\">
                    <button type=\"button\" class=\"znv-btn znv-greyDark\" data-dismiss=\"modal\">
                        {{ 'form.buttons.cancel'|trans|upper }}
                        <div class=\"ripple-container\">
                            <div class=\"ripple ripple-on ripple-out\"
                                 style=\"left: 16.0313px; top: 18px; background-color: rgb(255, 255, 255); transform: scale(10.375);\"></div>
                        </div>
                    </button>
                    <button type=\"submit\" class=\"znv-btn znv-greenDark js-modal-accept\">
                        {{ 'form.buttons.accept_modal'|trans|upper }}
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function show{{ id }}(button, callback, selector, path, dataExtraBody) {
            {%if selector is not defined  %} {% set selector = 'div.znv-line' %} {%endif%}
            if (typeof callback !== 'undefined') {
                callback(button);
            }

            var \$modal = \$('#{{ id }}');
            var \$button = \$(button);
            var \$div = \$button.parents(selector);
            if( path !== 'undefined'){
                \$path = path;
            }else{
                \$path = \$div.data('path');
            }
            \$modal.find('.js-modal-extra-body').html (' '+ dataExtraBody);
            \$modal.find('.js-modal-accept').click(function(){window.location=\$path});

        }
    </script>
{% endmacro modal %}

{% macro liNav(active, route, linkText, roles, icon, routeParams) %}
{% if routeParams is null %}{% set routeParams = {} %}{% endif %}
{% set classIcon = \"\" %}
    {% if icon is defined  and icon != \"\" %}{% set classIcon = \"znv-icon \"~icon %}{% endif %}
    {% if app.user.hasRole(roles) %}
        <li {% if(active) %} class=\"znv-active\" {% endif %}>
            <a href=\"{{ path(route, routeParams) }}\" class=\"znv-btn\">
                <div class=\"{{ classIcon }}\"></div>
                {{ linkText }}
            </a>
        </li>
    {% endif %}
{% endmacro %}

{% macro cardHalfView(text, value) %}
<div class=\"znv-form-group-view\">
    <p>{{ text }}</p>
    <h3>{{ value | default(' ---- ') }}</h3>
</div>
{% endmacro %}

{% macro viewHeaderFields(title, icon) %}
<div class=\"znv-widgets-header\">
    <div class=\"znv-icon {{ icon }}\"></div>
    <h3>{{ title }}</h3>
</div><!-- znv-widgets-header -->
{% endmacro %}

{% macro viewField(label, value) %}
<div class=\"znv-form-group-view\">
    <p>{{ label }}</p>
    <div class=\"znv-group\">
        <h3>{{ value | default(' ---- ') }}</h3>
    </div>
</div>
{% endmacro %}

{% macro viewButtonManager(path, title) %}
<div class=\"znv-full\">
    <div class=\"znv-buttons znv-go-right\">
        <a href=\"{{ path }}\" class=\"znv-btn znv-sm znv-lightBlue\">
            <div class=\"znv-icon fa-cog\"></div>
            {{ title|default('Manager') }}
        </a>
    </div>
</div>
{% endmacro  %}

{% macro viewEmptyList(text) %}
<div class=\"znv-list-empty\">
    <h4>{{ text | default('List Empty') }}</h4>
</div>
{% endmacro %}


{% import _self as macro %}
", "global/macros.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/global/macros.html.twig");
    }
}
