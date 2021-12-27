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

/* security/login.html.twig */
class __TwigTemplate_56721db4190b3bfb8323e6222d9f9efffb01540bfe8484f3315ad4a8fef07313 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "global/layout_no_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("global/layout_no_user.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"znv-access\">
        <div class=\"znv-access-header\">
            <i class=\"znv-icon fa-sign-in\"></i>
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.login.title"), "html", null, true);
        echo "</h1>
        </div><!-- znv-access-header -->

        <div class=\"znv-access-body\">
        ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "            ";
            $context["msg"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security");
            // line 14
            echo "            ";
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "alertMessage", [0 => "error", 1 => (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 14, $this->source); })())]);
            echo "
        ";
        }
        // line 16
        echo "
            <form name=\"znv-form-vertical\" action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\" class=\"znv-form-vertical\" novalidate>
                <div class=\"znv-form-group\">
                    <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.labels.username_email")), "html", null, true);
        echo "</label>
                    <input class=\"znv-form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"znv-form-group\">
                    <label for=\"password\" class=\"controlLabel\">";
        // line 23
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.labels.password")), "html", null, true);
        echo "</label>
                    <input class=\"znv-form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                </div>
                <div class=\"znv-form-group\">
                    <div class=\"znv-checkbox\">
                        <label for=\"T1\">
                            <input type=\"checkbox\" id=\"T1\" name=\"_remember_me\">
                            <span class=\"znv-label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.login.remember"), "html", null, true);
        echo "</span>
                        </label>
                    </div>
                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_recover_password");
        echo "\" id=\"recoverPassword\" class=\"link\">
                        ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.login.recover_password"), "html", null, true);
        echo "
                    </a>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                <div class=\"znv-form-action\">
                    <div class=\"znv-form-buttons\">
                        <button type=\"submit\" class=\"znv-btn znv-dark\">
                            ";
        // line 42
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.buttons.access")), "html", null, true);
        echo "
                            <span class=\"znv-icon fa-long-arrow-right\"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div><!-- znv-access-body -->

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 42,  137 => 38,  130 => 34,  126 => 33,  120 => 30,  110 => 23,  104 => 20,  100 => 19,  95 => 17,  92 => 16,  86 => 14,  83 => 13,  81 => 12,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout_no_user.html.twig' %}

{% block content %}

    <div class=\"znv-access\">
        <div class=\"znv-access-header\">
            <i class=\"znv-icon fa-sign-in\"></i>
            <h1>{{ 'page.login.title' | trans }}</h1>
        </div><!-- znv-access-header -->

        <div class=\"znv-access-body\">
        {% if error %}
            {% set msg = error.messageKey|trans(error.messageData, 'security') %}
            {{ macro_alertMessage('error',  msg) }}
        {% endif %}

            <form name=\"znv-form-vertical\" action=\"{{ path('login') }}\" method=\"POST\" class=\"znv-form-vertical\" novalidate>
                <div class=\"znv-form-group\">
                    <label for=\"username\">{{ 'form.labels.username_email' | trans | upper }}</label>
                    <input class=\"znv-form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/>
                </div>
                <div class=\"znv-form-group\">
                    <label for=\"password\" class=\"controlLabel\">{{ 'form.labels.password' | trans | upper }}</label>
                    <input class=\"znv-form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                </div>
                <div class=\"znv-form-group\">
                    <div class=\"znv-checkbox\">
                        <label for=\"T1\">
                            <input type=\"checkbox\" id=\"T1\" name=\"_remember_me\">
                            <span class=\"znv-label\">{{ 'page.login.remember' | trans }}</span>
                        </label>
                    </div>
                    <a href=\"{{ path('user_recover_password') }}\" id=\"recoverPassword\" class=\"link\">
                        {{ 'page.login.recover_password' | trans }}
                    </a>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                <div class=\"znv-form-action\">
                    <div class=\"znv-form-buttons\">
                        <button type=\"submit\" class=\"znv-btn znv-dark\">
                            {{ 'form.buttons.access' | trans | upper }}
                            <span class=\"znv-icon fa-long-arrow-right\"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div><!-- znv-access-body -->

    </div>
{% endblock %}
", "security/login.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/security/login.html.twig");
    }
}
