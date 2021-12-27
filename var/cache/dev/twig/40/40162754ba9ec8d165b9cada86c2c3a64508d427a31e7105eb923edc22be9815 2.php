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

/* __string_template__3a3e3ee5b82a03a237f4c490e5131fb5fd14184624761491fcf313d683b45ab0 */
class __TwigTemplate_b03cb53242065559ede25263c23f159636ef3193b2b779b60fb2a29a45eeb24f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__3a3e3ee5b82a03a237f4c490e5131fb5fd14184624761491fcf313d683b45ab0"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__3a3e3ee5b82a03a237f4c490e5131fb5fd14184624761491fcf313d683b45ab0"));

        // line 1
        $macros["gm"] = $this->macros["gm"] = $this->loadTemplate("global/macros.html.twig", "__string_template__3a3e3ee5b82a03a237f4c490e5131fb5fd14184624761491fcf313d683b45ab0", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["gm"], "macro_modal", [(isset($context["_modal_1"]) || array_key_exists("_modal_1", $context) ? $context["_modal_1"] : (function () { throw new RuntimeError('Variable "_modal_1" does not exist.', 2, $this->source); })()), (isset($context["_modal_2"]) || array_key_exists("_modal_2", $context) ? $context["_modal_2"] : (function () { throw new RuntimeError('Variable "_modal_2" does not exist.', 2, $this->source); })()), (isset($context["_modal_3"]) || array_key_exists("_modal_3", $context) ? $context["_modal_3"] : (function () { throw new RuntimeError('Variable "_modal_3" does not exist.', 2, $this->source); })()), (isset($context["_modal_4"]) || array_key_exists("_modal_4", $context) ? $context["_modal_4"] : (function () { throw new RuntimeError('Variable "_modal_4" does not exist.', 2, $this->source); })()), (isset($context["_modal_5"]) || array_key_exists("_modal_5", $context) ? $context["_modal_5"] : (function () { throw new RuntimeError('Variable "_modal_5" does not exist.', 2, $this->source); })())], 2, $context, $this->getSourceContext());
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__3a3e3ee5b82a03a237f4c490e5131fb5fd14184624761491fcf313d683b45ab0";
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
{{ gm.modal(_modal_1, _modal_2, _modal_3, _modal_4, _modal_5) }}", "__string_template__3a3e3ee5b82a03a237f4c490e5131fb5fd14184624761491fcf313d683b45ab0", "");
    }
}
