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

/* global/_blocks.html.twig */
class __TwigTemplate_09ff27f707e49d9fe9e2a2ba6a9c939fd19148b7265be0e57432283757857ec3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'alertContainer' => [$this, 'block_alertContainer'],
            'alertContainerMessages' => [$this, 'block_alertContainerMessages'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/_blocks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/_blocks.html.twig"));

        // line 1
        $this->displayBlock('alertContainer', $context, $blocks);
        // line 52
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_alertContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alertContainer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alertContainer"));

        // line 2
        echo "    ";
        if ( !array_key_exists("alertContainerId", $context)) {
            // line 3
            echo "        ";
            $context["alertContainerId"] = "alert-container";
            // line 4
            echo "    ";
        }
        // line 5
        echo "    ";
        if ( !array_key_exists("alertIsDismissible", $context)) {
            // line 6
            echo "        ";
            $context["alertIsDismissible"] = true;
            // line 7
            echo "    ";
        }
        // line 8
        echo "    <div class=\"znv-alert ";
        echo twig_escape_filter($this->env, ((array_key_exists("alertColor", $context)) ? (_twig_default_filter((isset($context["alertColor"]) || array_key_exists("alertColor", $context) ? $context["alertColor"] : (function () { throw new RuntimeError('Variable "alertColor" does not exist.', 8, $this->source); })()), "znv-red")) : ("znv-red")), "html", null, true);
        echo " alert\" role=\"alert\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["alertContainerId"]) || array_key_exists("alertContainerId", $context) ? $context["alertContainerId"] : (function () { throw new RuntimeError('Variable "alertContainerId" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\"
         style=\"";
        // line 9
        echo twig_escape_filter($this->env, ((array_key_exists("alertContainerStyle", $context)) ? (_twig_default_filter((isset($context["alertContainerStyle"]) || array_key_exists("alertContainerStyle", $context) ? $context["alertContainerStyle"] : (function () { throw new RuntimeError('Variable "alertContainerStyle" does not exist.', 9, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\">
        <button type=\"button\"
                class=\"znv-close\" ";
        // line 11
        if ((0 === twig_compare((isset($context["alertIsDismissible"]) || array_key_exists("alertIsDismissible", $context) ? $context["alertIsDismissible"] : (function () { throw new RuntimeError('Variable "alertIsDismissible" does not exist.', 11, $this->source); })()), true))) {
            echo " data-dismiss=\"alert\" ";
        }
        echo ">
            <span aria-hidden=\"true\" onclick=\"onClickCloseAlert()\">×</span>
        </button>
        ";
        // line 14
        $this->displayBlock('alertContainerMessages', $context, $blocks);
        // line 24
        echo "    </div>
    <script>
        var \$alertContainer = \$('#";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["alertContainerId"]) || array_key_exists("alertContainerId", $context) ? $context["alertContainerId"] : (function () { throw new RuntimeError('Variable "alertContainerId" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "');
        var \$alertMessagesContainer = \$('#alert-messages-container ul');


        function onClickCloseAlert() {
            \$alertContainer.hide();
        }

        function hideAlertContainer() {
            \$alertContainer.hide();
        }

        function showAlertContainer() {
            \$alertContainer.show();
        }

        function removeAlertMessagesContainerChildren() {
            \$alertMessagesContainer.children().remove();
        }

        function addMessageToAlert(message) {
            \$alertMessagesContainer.append(\"<li>\" + message + \"</li>\");
            showAlertContainer();
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_alertContainerMessages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alertContainerMessages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "alertContainerMessages"));

        // line 15
        echo "            <strong>";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, ((array_key_exists("alertContainerLabel", $context)) ? (_twig_default_filter((isset($context["alertContainerLabel"]) || array_key_exists("alertContainerLabel", $context) ? $context["alertContainerLabel"] : (function () { throw new RuntimeError('Variable "alertContainerLabel" does not exist.', 15, $this->source); })()), "")) : (""))), "html", null, true);
        echo "</strong>
            <div id=\"alert-messages-container\">
                <ul>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("messages", $context)) ? (_twig_default_filter((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 18, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "                        <li>";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [], "flashes");
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </ul>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "global/_blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 21,  169 => 19,  165 => 18,  158 => 15,  148 => 14,  112 => 26,  108 => 24,  106 => 14,  98 => 11,  93 => 9,  86 => 8,  83 => 7,  80 => 6,  77 => 5,  74 => 4,  71 => 3,  68 => 2,  58 => 1,  47 => 52,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block alertContainer %}
    {% if alertContainerId is not defined %}
        {% set alertContainerId = 'alert-container' %}
    {% endif %}
    {% if alertIsDismissible is not defined %}
        {% set alertIsDismissible = true %}
    {% endif %}
    <div class=\"znv-alert {{ alertColor|default('znv-red') }} alert\" role=\"alert\" id=\"{{ alertContainerId }}\"
         style=\"{{ alertContainerStyle|default('') }}\">
        <button type=\"button\"
                class=\"znv-close\" {% if alertIsDismissible == true %} data-dismiss=\"alert\" {% endif %}>
            <span aria-hidden=\"true\" onclick=\"onClickCloseAlert()\">×</span>
        </button>
        {% block alertContainerMessages %}
            <strong>{{ alertContainerLabel|default('')|title }}</strong>
            <div id=\"alert-messages-container\">
                <ul>
                    {% for message in messages|default([]) %}
                        <li>{{ message |trans({}, 'flashes') | raw }}</li>
                    {% endfor %}
                </ul>
            </div>
        {% endblock %}
    </div>
    <script>
        var \$alertContainer = \$('#{{ alertContainerId }}');
        var \$alertMessagesContainer = \$('#alert-messages-container ul');


        function onClickCloseAlert() {
            \$alertContainer.hide();
        }

        function hideAlertContainer() {
            \$alertContainer.hide();
        }

        function showAlertContainer() {
            \$alertContainer.show();
        }

        function removeAlertMessagesContainerChildren() {
            \$alertMessagesContainer.children().remove();
        }

        function addMessageToAlert(message) {
            \$alertMessagesContainer.append(\"<li>\" + message + \"</li>\");
            showAlertContainer();
        }
    </script>
{% endblock %}

", "global/_blocks.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/global/_blocks.html.twig");
    }
}
