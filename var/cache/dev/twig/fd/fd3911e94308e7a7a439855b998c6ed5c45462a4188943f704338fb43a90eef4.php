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

/* __string_template__722bd2b914872fb40848301236b9d4d0a91c5cba592a3724fb77a21faf795040 */
class __TwigTemplate_b32d275d071e8cc1f1f0e8eec5d12e526a4aafc054e4d2965918643883aedd83 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__722bd2b914872fb40848301236b9d4d0a91c5cba592a3724fb77a21faf795040"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__722bd2b914872fb40848301236b9d4d0a91c5cba592a3724fb77a21faf795040"));

        // line 1
        $macros["gm"] = $this->macros["gm"] = $this->loadTemplate("global/macros.html.twig", "__string_template__722bd2b914872fb40848301236b9d4d0a91c5cba592a3724fb77a21faf795040", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["gm"], "macro_liNav", [(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 2, $this->source); })()), (isset($context["_liNav_1"]) || array_key_exists("_liNav_1", $context) ? $context["_liNav_1"] : (function () { throw new RuntimeError('Variable "_liNav_1" does not exist.', 2, $this->source); })()), (isset($context["_liNav_2"]) || array_key_exists("_liNav_2", $context) ? $context["_liNav_2"] : (function () { throw new RuntimeError('Variable "_liNav_2" does not exist.', 2, $this->source); })()), (isset($context["_liNav_3"]) || array_key_exists("_liNav_3", $context) ? $context["_liNav_3"] : (function () { throw new RuntimeError('Variable "_liNav_3" does not exist.', 2, $this->source); })()), (isset($context["_liNav_4"]) || array_key_exists("_liNav_4", $context) ? $context["_liNav_4"] : (function () { throw new RuntimeError('Variable "_liNav_4" does not exist.', 2, $this->source); })())], 2, $context, $this->getSourceContext());
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__722bd2b914872fb40848301236b9d4d0a91c5cba592a3724fb77a21faf795040";
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
{{ gm.liNav(filter, _liNav_1, _liNav_2, _liNav_3, _liNav_4) }}", "__string_template__722bd2b914872fb40848301236b9d4d0a91c5cba592a3724fb77a21faf795040", "");
    }
}
