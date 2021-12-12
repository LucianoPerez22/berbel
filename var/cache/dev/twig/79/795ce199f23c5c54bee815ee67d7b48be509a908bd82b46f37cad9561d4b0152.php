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

/* user/list.html.twig */
class __TwigTemplate_43df59b05003200522635b28923fa91fbb944a3eb7400ebcc90239dd4df8970c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'list' => [$this, 'block_list'],
            'modalDelete' => [$this, 'block_modalDelete'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "global/layout_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        // line 3
        $context["titlePage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.title.list");
        // line 4
        $context["menu"] = "user";
        // line 6
        $context["formFilterAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
        // line 7
        $context["pathNew"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        // line 8
        $context["labelButtonNew"] = "page.user.buttons.add";
        // line 9
        $context["rolesNew"] = [0 => "ROLE_USER_NEW"];
        // line 1
        $this->parent = $this->loadTemplate("global/layout_list.html.twig", "user/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 12
        echo "
    <div class=\"znv-header\">
        <div class=\"znv-col\">
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.labels.name"), "html", null, true);
        echo "
        </div>
        <div class=\"znv-col\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.labels.username"), "html", null, true);
        echo "
        </div>
        <div class=\"znv-col\">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.labels.email"), "html", null, true);
        echo "
        </div>
        <div class=\"znv-col\">
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.labels.groups"), "html", null, true);
        echo "
        </div>
        <div class=\"znv-col-actions\">
        </div>
    </div>

    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "        <div class=\"znv-line\" data-path=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_enable_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31), "value" => "|CHECKED|"]), "html", null, true);
            echo "\">
            <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.labels.name"), "html", null, true);
            echo "</div>
                ";
            // line 34
            echo twig_escape_filter($this->env, $context["user"], "html", null, true);
            echo "
            </div>
            <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.labels.username"), "html", null, true);
            echo "</div>
                ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 38), "html", null, true);
            echo "
            </div>
            <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.labels.email"), "html", null, true);
            echo "</div>
                ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 42), "html", null, true);
            echo "
            </div>
            <div class=\"znv-col\">
                <div class=\"znv-header\">";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.labels.groups"), "html", null, true);
            echo "</div>
                ";
            // line 46
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["user"], "groups", [], "any", false, false, false, 46), ", "), "html", null, true);
            echo "
            </div>
            <div class=\"znv-col-actions\">
                <div class=\"znv-group\">
                    ";
            // line 50
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 50)]), 1 => "page.list.buttons.view", 2 => "fa-eye", 3 => [0 => "ROLE_USER_VIEW"]]);
            echo "
                    ";
            // line 51
            echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 51)]), 1 => "page.list.buttons.edit", 2 => "fa-pencil", 3 => [0 => "ROLE_USER_EDIT"]]);
            echo "
                    ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["user"], "enabled", [], "any", false, false, false, 52)) {
                // line 53
                echo "                        ";
                echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_enable_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53), "value" => 0]), 1 => "page.list.buttons.disable", 2 => "fa-toggle-on", 3 => [0 => "ROLE_USER_EDIT"]]);
                echo "
                    ";
            } else {
                // line 55
                echo "                        ";
                echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_enable_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 55), "value" => 1]), 1 => "page.list.buttons.enable", 2 => "fa-toggle-off", 3 => [0 => "ROLE_USER_EDIT"]]);
                echo "
                    ";
            }
            // line 57
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 57)) {
                // line 58
                echo "                        ";
                echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "listActionButton", [0 => (($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home") . "?_switch_user=") . twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 58)), 1 => "page.list.buttons.switch", 2 => "fa-user", 3 => [0 => "ROLE_ALLOWED_TO_SWITCH"]]);
                echo "
                    ";
            }
            // line 60
            echo "                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
    <script>
        function enabledDisabled(input) {
            var \$button = \$(input);
            var checked = (\$button.is(\":checked\")) ? 1 : 0;
            var label = \"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.confirm.label_enable"), "html", null, true);
        echo "\";
            var body = \"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.confirm.body_enable"), "html", null, true);
        echo "\";
            if (!checked) {
                label = \"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.confirm.label_disable"), "html", null, true);
        echo "\";
                body = \"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.user.confirm.body_disable"), "html", null, true);
        echo "\";
            }

            body += \"<br> ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.common.confirm.ask_continue"), "html", null, true);
        echo "\";

            var \$modal = \$(\"#modalEnDisUser\");
            \$modal.find('.js-modal-label').html(label);
            \$modal.find('.js-modal-body').html(body);

            var \$div = \$button.parents('div.line');
            var path = \$div.data('path').replace('|CHECKED|', checked);
            \$div.data('path', path);
        }

    </script>

    ";
        // line 89
        echo $this->extensions['App\Twig\MacroAutoloadTwigExtension']->twig_render_macro($this->env, $context, "modal", [0 => "page.common.confirm.label", 1 => "page.common.confirm.ask_continue", 2 => "lock-open", 3 => "modalYellow", 4 => "modalEnDisUser"]);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_modalDelete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalDelete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalDelete"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 93,  247 => 89,  231 => 76,  225 => 73,  221 => 72,  216 => 70,  212 => 69,  205 => 64,  196 => 60,  190 => 58,  187 => 57,  181 => 55,  175 => 53,  173 => 52,  169 => 51,  165 => 50,  158 => 46,  154 => 45,  148 => 42,  144 => 41,  138 => 38,  134 => 37,  128 => 34,  124 => 33,  118 => 31,  114 => 30,  105 => 24,  99 => 21,  93 => 18,  87 => 15,  82 => 12,  72 => 11,  61 => 1,  59 => 9,  57 => 8,  55 => 7,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'global/layout_list.html.twig' %}

{% set titlePage = \"page.user.title.list\" | trans %}
{% set menu = \"user\" %}

{% set formFilterAction = path('user_list') %}
{% set pathNew = path('user_new') %}
{% set labelButtonNew = 'page.user.buttons.add' %}
{% set rolesNew = ['ROLE_USER_NEW'] %}

{% block list %}

    <div class=\"znv-header\">
        <div class=\"znv-col\">
            {{ 'page.user.labels.name' | trans() }}
        </div>
        <div class=\"znv-col\">
            {{ 'page.user.labels.username' | trans() }}
        </div>
        <div class=\"znv-col\">
            {{ 'page.user.labels.email' | trans() }}
        </div>
        <div class=\"znv-col\">
            {{ 'page.user.labels.groups' | trans() }}
        </div>
        <div class=\"znv-col-actions\">
        </div>
    </div>

    {% for user in entities %}
        <div class=\"znv-line\" data-path=\"{{ path('user_enable_disable', {id: user.id, value: '|CHECKED|'}) }}\">
            <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.user.labels.name' | trans() }}</div>
                {{ user }}
            </div>
            <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.user.labels.username' | trans() }}</div>
                {{ user.username }}
            </div>
            <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.user.labels.email' | trans() }}</div>
                {{ user.email }}
            </div>
            <div class=\"znv-col\">
                <div class=\"znv-header\">{{ 'page.user.labels.groups' | trans() }}</div>
                {{ user.groups | join(', ') }}
            </div>
            <div class=\"znv-col-actions\">
                <div class=\"znv-group\">
                    {{ macro_listActionButton(path('user_view', {'id' : user.id}), 'page.list.buttons.view', 'fa-eye', ['ROLE_USER_VIEW']) }}
                    {{ macro_listActionButton(path('user_edit', {'id' : user.id}), 'page.list.buttons.edit', 'fa-pencil', ['ROLE_USER_EDIT']) }}
                    {% if user.enabled %}
                        {{ macro_listActionButton(path('user_enable_disable', {'id' : user.id, 'value': 0}), 'page.list.buttons.disable', 'fa-toggle-on', ['ROLE_USER_EDIT']) }}
                    {% else %}
                        {{ macro_listActionButton(path('user_enable_disable', {'id' : user.id, 'value': 1}), 'page.list.buttons.enable', 'fa-toggle-off', ['ROLE_USER_EDIT']) }}
                    {% endif %}
                    {% if not user.isSuperAdmin %}
                        {{ macro_listActionButton(path('home')~'?_switch_user='~user.username, 'page.list.buttons.switch', 'fa-user', ['ROLE_ALLOWED_TO_SWITCH']) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endfor %}

    <script>
        function enabledDisabled(input) {
            var \$button = \$(input);
            var checked = (\$button.is(\":checked\")) ? 1 : 0;
            var label = \"{{ 'page.user.confirm.label_enable' | trans() }}\";
            var body = \"{{ 'page.user.confirm.body_enable' | trans() }}\";
            if (!checked) {
                label = \"{{ 'page.user.confirm.label_disable' | trans() }}\";
                body = \"{{ 'page.user.confirm.body_disable' | trans() }}\";
            }

            body += \"<br> {{ 'page.common.confirm.ask_continue' | trans() }}\";

            var \$modal = \$(\"#modalEnDisUser\");
            \$modal.find('.js-modal-label').html(label);
            \$modal.find('.js-modal-body').html(body);

            var \$div = \$button.parents('div.line');
            var path = \$div.data('path').replace('|CHECKED|', checked);
            \$div.data('path', path);
        }

    </script>

    {{ macro_modal('page.common.confirm.label', 'page.common.confirm.ask_continue', 'lock-open', 'modalYellow', 'modalEnDisUser' ) }}

{% endblock list %}

{% block modalDelete '' %}
", "user/list.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/user/list.html.twig");
    }
}
