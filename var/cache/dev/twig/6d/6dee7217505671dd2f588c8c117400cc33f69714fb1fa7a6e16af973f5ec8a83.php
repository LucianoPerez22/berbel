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

/* global/_header.html.twig */
class __TwigTemplate_9a6283ae6065cec295a162a1b3372271afdc593818a70b6433f0f94d555d7fb3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/_header.html.twig"));

        // line 1
        echo "<header>
    <!-- Toggle Nav -->
    <div class=\"znv-navbutton-toggle\">
        <button id=\"js-nav-trigger\" class=\"znv-nav-trigger\" type=\"button\">
            <span class=\"znv-nav-icon\"></span>
        </button>
    </div>
    <!-- Logo -->
    <div class=\"znv-logo\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"znv-brand btn\">
            <figure>
                <img src=\"\" alt=\"\">
            </figure>
        </a>
    </div>
  ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "hasRole", [0 => [0 => "ROLE_MESSAGE_LIST_RECIEVED"]], "method", false, false, false, 16) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "isSuperAdmin", [], "any", false, false, false, 16))) {
            // line 17
            echo "    <div class=\"znv-toolbar\">
        <div class=\"znv-notifications \">
            <ul>
                <li class=\"znv-icons\">
                    <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_received");
            echo "\" class=\"znv-btn\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Message\">
                        <div class=\"znv-icon fa-envelope\"></div>
                        <span class=\"badge\" id=\"messageNotification\"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
      <script>
          \$( document ).ready(function() {
              \$.get('";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_unread");
            echo "', function (data) {
                    if(data.quantity > 0){
                        \$('#messageNotification').text(data.quantity);
                    }
              });
          });
      </script>
    ";
        }
        // line 39
        echo "</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "global/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  84 => 31,  71 => 21,  65 => 17,  63 => 16,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <!-- Toggle Nav -->
    <div class=\"znv-navbutton-toggle\">
        <button id=\"js-nav-trigger\" class=\"znv-nav-trigger\" type=\"button\">
            <span class=\"znv-nav-icon\"></span>
        </button>
    </div>
    <!-- Logo -->
    <div class=\"znv-logo\">
        <a href=\"{{ path('home') }}\" class=\"znv-brand btn\">
            <figure>
                <img src=\"\" alt=\"\">
            </figure>
        </a>
    </div>
  {% if app.user.hasRole(['ROLE_MESSAGE_LIST_RECIEVED']) and not app.user.isSuperAdmin %}
    <div class=\"znv-toolbar\">
        <div class=\"znv-notifications \">
            <ul>
                <li class=\"znv-icons\">
                    <a href=\"{{ path('message_received') }}\" class=\"znv-btn\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Message\">
                        <div class=\"znv-icon fa-envelope\"></div>
                        <span class=\"badge\" id=\"messageNotification\"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
      <script>
          \$( document ).ready(function() {
              \$.get('{{ path('message_unread') }}', function (data) {
                    if(data.quantity > 0){
                        \$('#messageNotification').text(data.quantity);
                    }
              });
          });
      </script>
    {% endif %}
</header>
", "global/_header.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/global/_header.html.twig");
    }
}
