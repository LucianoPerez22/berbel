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

/* __string_template__19e1ca0a51570e93a5ded9ef42e76c181fd8a9b8b62f66f52e5a0e25557c47da */
class __TwigTemplate_effdc17919ec0edd9bebaa247bf52eee363cf129d34da423f7af203b1c69a358 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__19e1ca0a51570e93a5ded9ef42e76c181fd8a9b8b62f66f52e5a0e25557c47da"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__19e1ca0a51570e93a5ded9ef42e76c181fd8a9b8b62f66f52e5a0e25557c47da"));

        // line 1
        $macros["gm"] = $this->macros["gm"] = $this->loadTemplate("global/macros.html.twig", "__string_template__19e1ca0a51570e93a5ded9ef42e76c181fd8a9b8b62f66f52e5a0e25557c47da", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["gm"], "macro_alertMessage", [(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 2, $this->source); })()), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 2, $this->source); })())], 2, $context, $this->getSourceContext());
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__19e1ca0a51570e93a5ded9ef42e76c181fd8a9b8b62f66f52e5a0e25557c47da";
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
{{ gm.alertMessage(label, messages) }}", "__string_template__19e1ca0a51570e93a5ded9ef42e76c181fd8a9b8b62f66f52e5a0e25557c47da", "");
    }
}
