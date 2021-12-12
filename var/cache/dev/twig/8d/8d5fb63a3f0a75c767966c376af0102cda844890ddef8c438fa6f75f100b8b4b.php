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

/* __string_template__d6992b44690fd0d3891cd9a7309cf66ab3c5a3a141fec7a1fe03e471eb1ad8aa */
class __TwigTemplate_b1b9a4aba358bd4e36d4c8c03bf5a15826e411780fb147cf1dac7324c4fe0ab5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__d6992b44690fd0d3891cd9a7309cf66ab3c5a3a141fec7a1fe03e471eb1ad8aa"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__d6992b44690fd0d3891cd9a7309cf66ab3c5a3a141fec7a1fe03e471eb1ad8aa"));

        // line 1
        $macros["gm"] = $this->macros["gm"] = $this->loadTemplate("global/macros.html.twig", "__string_template__d6992b44690fd0d3891cd9a7309cf66ab3c5a3a141fec7a1fe03e471eb1ad8aa", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["gm"], "macro_modal", [(isset($context["_modal_1"]) || array_key_exists("_modal_1", $context) ? $context["_modal_1"] : (function () { throw new RuntimeError('Variable "_modal_1" does not exist.', 2, $this->source); })()), (isset($context["_modal_2"]) || array_key_exists("_modal_2", $context) ? $context["_modal_2"] : (function () { throw new RuntimeError('Variable "_modal_2" does not exist.', 2, $this->source); })()), (isset($context["_modal_3"]) || array_key_exists("_modal_3", $context) ? $context["_modal_3"] : (function () { throw new RuntimeError('Variable "_modal_3" does not exist.', 2, $this->source); })()), (isset($context["_modal_4"]) || array_key_exists("_modal_4", $context) ? $context["_modal_4"] : (function () { throw new RuntimeError('Variable "_modal_4" does not exist.', 2, $this->source); })())], 2, $context, $this->getSourceContext());
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__d6992b44690fd0d3891cd9a7309cf66ab3c5a3a141fec7a1fe03e471eb1ad8aa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'global/macros.html.twig' as gm %}
{{ gm.modal(_modal_1, _modal_2, _modal_3, _modal_4) }}", "__string_template__d6992b44690fd0d3891cd9a7309cf66ab3c5a3a141fec7a1fe03e471eb1ad8aa", "");
    }
}
