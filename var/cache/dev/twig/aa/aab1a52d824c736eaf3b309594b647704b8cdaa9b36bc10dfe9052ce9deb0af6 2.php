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

/* __string_template__d2467e48009db55141b049af9bca3565dc487b390b0342380d945b91cb327e6a */
class __TwigTemplate_25bcfea280ad5743150bbf2136822c643b7e67f15738286a18de8dbc0fdd76cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__d2467e48009db55141b049af9bca3565dc487b390b0342380d945b91cb327e6a"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__d2467e48009db55141b049af9bca3565dc487b390b0342380d945b91cb327e6a"));

        // line 1
        $macros["gm"] = $this->macros["gm"] = $this->loadTemplate("global/macros.html.twig", "__string_template__d2467e48009db55141b049af9bca3565dc487b390b0342380d945b91cb327e6a", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["gm"], "macro_listActionButton", [(isset($context["_listActionButton_1"]) || array_key_exists("_listActionButton_1", $context) ? $context["_listActionButton_1"] : (function () { throw new RuntimeError('Variable "_listActionButton_1" does not exist.', 2, $this->source); })()), (isset($context["_listActionButton_2"]) || array_key_exists("_listActionButton_2", $context) ? $context["_listActionButton_2"] : (function () { throw new RuntimeError('Variable "_listActionButton_2" does not exist.', 2, $this->source); })()), (isset($context["_listActionButton_3"]) || array_key_exists("_listActionButton_3", $context) ? $context["_listActionButton_3"] : (function () { throw new RuntimeError('Variable "_listActionButton_3" does not exist.', 2, $this->source); })()), (isset($context["_listActionButton_4"]) || array_key_exists("_listActionButton_4", $context) ? $context["_listActionButton_4"] : (function () { throw new RuntimeError('Variable "_listActionButton_4" does not exist.', 2, $this->source); })())], 2, $context, $this->getSourceContext());
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__d2467e48009db55141b049af9bca3565dc487b390b0342380d945b91cb327e6a";
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
{{ gm.listActionButton(_listActionButton_1, _listActionButton_2, _listActionButton_3, _listActionButton_4) }}", "__string_template__d2467e48009db55141b049af9bca3565dc487b390b0342380d945b91cb327e6a", "");
    }
}
