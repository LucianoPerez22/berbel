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

/* global/_user_section.html.twig */
class __TwigTemplate_0b32553f142ae75f3121c07d4d865de52a9f506dc3652a33359b0fbc53e592d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/_user_section.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "global/_user_section.html.twig"));

        // line 1
        echo "<div class=\"znv-user-session-area\">
    <div class=\"znv-user-session\">
        <!--
        <div class=\"znv-avatar\">
          <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/men.svg"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        -->
        <div class=\"znv-letter\">
          ";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9))), "html", null, true);
        echo "
        </div>
        <div class=\"znv-info\">
            <h4>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "lastName", [], "any", false, false, false, 12), "html", null, true);
        echo "</h4>
            <button type=\"button\" class=\"znv-btn znv-icon fa-ellipsis-v dropdown-toggle\"
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            </button>
            <ul class=\"dropdown-menu\">
                <li>
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_change_password");
        echo "\">
                        <div class=\"znv-icon fa-key\"></div>
                        ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.menu.change_password"), "html", null, true);
        echo "
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
                        <div class=\"znv-icon fa-sign-out\"></div>
                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.menu.sign_out"), "html", null, true);
        echo "
                    </a>
                </li>
                <li>
                    ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 31
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["_switch_user" => "_exit"]);
            echo "\">
                            <div class=\"znv-icon far fa-user\"></div>
                            ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.menu.exit_impersonation"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 36
        echo "                </li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "global/_user_section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  105 => 33,  99 => 31,  97 => 30,  90 => 26,  85 => 24,  78 => 20,  73 => 18,  62 => 12,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"znv-user-session-area\">
    <div class=\"znv-user-session\">
        <!--
        <div class=\"znv-avatar\">
          <img src=\"{{ asset('build/images/men.svg') }}\" alt=\"\">
        </div>
        -->
        <div class=\"znv-letter\">
          {{ app.user.name | first | upper }}
        </div>
        <div class=\"znv-info\">
            <h4>{{ app.user.name }} {{ app.user.lastName }}</h4>
            <button type=\"button\" class=\"znv-btn znv-icon fa-ellipsis-v dropdown-toggle\"
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            </button>
            <ul class=\"dropdown-menu\">
                <li>
                    <a href=\"{{ path('user_change_password') }}\">
                        <div class=\"znv-icon fa-key\"></div>
                        {{ 'page.menu.change_password'|trans }}
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('logout') }}\">
                        <div class=\"znv-icon fa-sign-out\"></div>
                        {{ 'page.menu.sign_out'|trans }}
                    </a>
                </li>
                <li>
                    {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                        <a href=\"{{ path('user_list', {'_switch_user': '_exit'}) }}\">
                            <div class=\"znv-icon far fa-user\"></div>
                            {{ 'page.menu.exit_impersonation'|trans }}
                        </a>
                    {% endif %}
                </li>
            </ul>
        </div>
    </div>
</div>
", "global/_user_section.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/global/_user_section.html.twig");
    }
}
