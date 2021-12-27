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

/* __string_template__f55f75c5d73809f357896f6532969ddc79419e97fc1612d1fbdc7ce3e4ef64c8 */
class __TwigTemplate_a9311b3f9dbefb3cf5295e12c3b4d594aff24c200df10a4d69a319a40ebc5db3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__f55f75c5d73809f357896f6532969ddc79419e97fc1612d1fbdc7ce3e4ef64c8"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__f55f75c5d73809f357896f6532969ddc79419e97fc1612d1fbdc7ce3e4ef64c8"));

        // line 1
        $macros["gm"] = $this->macros["gm"] = $this->loadTemplate("global/macros.html.twig", "__string_template__f55f75c5d73809f357896f6532969ddc79419e97fc1612d1fbdc7ce3e4ef64c8", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["gm"], "macro_cardHalfView", [(isset($context["_cardHalfView_1"]) || array_key_exists("_cardHalfView_1", $context) ? $context["_cardHalfView_1"] : (function () { throw new RuntimeError('Variable "_cardHalfView_1" does not exist.', 2, $this->source); })()), (isset($context["_cardHalfView_2"]) || array_key_exists("_cardHalfView_2", $context) ? $context["_cardHalfView_2"] : (function () { throw new RuntimeError('Variable "_cardHalfView_2" does not exist.', 2, $this->source); })())], 2, $context, $this->getSourceContext());
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__f55f75c5d73809f357896f6532969ddc79419e97fc1612d1fbdc7ce3e4ef64c8";
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
{{ gm.cardHalfView(_cardHalfView_1, _cardHalfView_2) }}", "__string_template__f55f75c5d73809f357896f6532969ddc79419e97fc1612d1fbdc7ce3e4ef64c8", "");
    }
}
