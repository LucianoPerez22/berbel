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

/* email/registration.html.twig */
class __TwigTemplate_ae8bd897fa56d41992f7c492e0fd289c359480f4dd0c6bc9011ed4188979c0e0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/registration.html.twig"));

        // line 1
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width:100%; height:100%; background-color:#f8f8f8\">
    <tbody>
    <tr>
        <td valign=\"top\" align=\"center\" style=\"padding-top:20px\">

            <table cellpadding=\"0\" cellspacing=\"0\" style=\"max-width:600px\">
                <tbody>
                <tr>
                    <td valign=\"top\">
                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td colspan=\"2\" align=\"left\">
                                    <img src=\"\" style=\"padding: 10px; padding-top:10px; height: 55px; width: auto;\">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"background-color: #ffffff; border: 1px solid #e8e8e8; border-top: 4px solid #00A6AE ; padding: 15px\">
                            <tbody>
                            <tr>
                                <td align=\"center\">
                                    <h1 style=\"color:#444444;font-family:Helvetica,Arial,sans-serif;font-size:28px;font-weight:normal;line-height:32px;margin:0; margin-bottom: 10px; padding-top:10px; padding-bottom: 10px;text-align:center;word-wrap:normal\">
                                        ¡";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.message.welcome", [], "email");
        echo " Zennovia Skeleton!
                                    </h1>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"color:#444444;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:18px;margin:0;padding-top:10px; padding-bottom: 10px;text-align:left;word-wrap:normal\">
                                    <p>
                                        ";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.message.explanation", [], "email");
        echo "
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"color:#444444;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:18px;margin:0;padding-top:10px; padding-bottom: 10px;text-align:left;word-wrap:normal\">
                                    <p>
                                        ";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.message.next_step", [], "email");
        echo ":
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"background-color: #f4f4f4; color:#444444;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:20px;margin:0;padding:20px 30px ;text-align:left;word-wrap:normal\">
                                    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_registration", ["hash" => (isset($context["hash"]) || array_key_exists("hash", $context) ? $context["hash"] : (function () { throw new RuntimeError('Variable "hash" does not exist.', 50, $this->source); })())]), "html", null, true);
        echo "\" target=\"_blank\" style=\"word-break: break-all;\" >
                                        ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_registration", ["hash" => (isset($context["hash"]) || array_key_exists("hash", $context) ? $context["hash"] : (function () { throw new RuntimeError('Variable "hash" does not exist.', 51, $this->source); })())]), "html", null, true);
        echo "
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"color:#444444;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:18px;margin:0;padding-top:30px; padding-bottom: 5px;text-align:left;word-wrap:normal;\">
                                    <p>
                                        ";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.message.greeting", [], "email");
        echo " <br>
                                        <strong>Zennovia Skeleton</strong>
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align=\"center\" style=\"color:#ababab;font-family:Helvetica,Arial,sans-serif;font-size:13px;font-weight:normal;line-height:16px;margin:0;padding-top: 5px;text-align:center;word-wrap:normal;\">
                        Zennovia Skeleton · ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 69,  117 => 58,  107 => 51,  103 => 50,  94 => 44,  84 => 37,  74 => 30,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width:100%; height:100%; background-color:#f8f8f8\">
    <tbody>
    <tr>
        <td valign=\"top\" align=\"center\" style=\"padding-top:20px\">

            <table cellpadding=\"0\" cellspacing=\"0\" style=\"max-width:600px\">
                <tbody>
                <tr>
                    <td valign=\"top\">
                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td colspan=\"2\" align=\"left\">
                                    <img src=\"\" style=\"padding: 10px; padding-top:10px; height: 55px; width: auto;\">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"background-color: #ffffff; border: 1px solid #e8e8e8; border-top: 4px solid #00A6AE ; padding: 15px\">
                            <tbody>
                            <tr>
                                <td align=\"center\">
                                    <h1 style=\"color:#444444;font-family:Helvetica,Arial,sans-serif;font-size:28px;font-weight:normal;line-height:32px;margin:0; margin-bottom: 10px; padding-top:10px; padding-bottom: 10px;text-align:center;word-wrap:normal\">
                                        ¡{{ 'registration.message.welcome' | trans({}, 'email') | raw}} Zennovia Skeleton!
                                    </h1>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"color:#444444;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:18px;margin:0;padding-top:10px; padding-bottom: 10px;text-align:left;word-wrap:normal\">
                                    <p>
                                        {{ 'registration.message.explanation' | trans({}, 'email') | raw }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"color:#444444;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:18px;margin:0;padding-top:10px; padding-bottom: 10px;text-align:left;word-wrap:normal\">
                                    <p>
                                        {{ 'registration.message.next_step' | trans({}, 'email') | raw }}:
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"background-color: #f4f4f4; color:#444444;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:20px;margin:0;padding:20px 30px ;text-align:left;word-wrap:normal\">
                                    <a href=\"{{ url('user_registration', {'hash': hash }) }}\" target=\"_blank\" style=\"word-break: break-all;\" >
                                        {{ url('user_registration', {'hash': hash }) }}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"color:#444444;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:18px;margin:0;padding-top:30px; padding-bottom: 5px;text-align:left;word-wrap:normal;\">
                                    <p>
                                        {{ 'registration.message.greeting' | trans({}, 'email') | raw }} <br>
                                        <strong>Zennovia Skeleton</strong>
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align=\"center\" style=\"color:#ababab;font-family:Helvetica,Arial,sans-serif;font-size:13px;font-weight:normal;line-height:16px;margin:0;padding-top: 5px;text-align:center;word-wrap:normal;\">
                        Zennovia Skeleton · {{ \"now\"|date(\"Y\") }}
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
", "email/registration.html.twig", "/Users/lucianoperez/Documents/Zennovia/berbel/web/templates/email/registration.html.twig");
    }
}
