<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig */
class __TwigTemplate_56a44eb0de87bb2cb3d260edf011d4d576c1056f42201b111d627a5a1ade22ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MailThemes/classic/components/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<tr>
    <td align=\"center\" class=\"titleblock\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            <span class=\"title\" style=\"font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
        echo "</span>
        </font>
    </td>
</tr>
<tr>
    <td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
    <td class=\"box\" style=\"border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0\">
        <table class=\"table\" style=\"width:100%\">
            <tr>
                <td width=\"10\" style=\"padding:7px 0\">&nbsp;</td>
                <td style=\"padding:7px 0\">
                    <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
                        ";
        // line 21
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 22
            echo "
                            <p style=\"border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px\">
                                ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order {order_name}", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
            echo "&nbsp;-&nbsp;";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order edited", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
            echo "
                            </p>

";
        }
        // line 28
        echo "                        <span style=\"color:#777\">
                            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your order with the reference [1]{order_name}[/1] has been modified.", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
                        </span>
                    </font>
                </td>
                <td width=\"10\" style=\"padding:7px 0\">&nbsp;</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
    <td class=\"linkbelow\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
            <span>
                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Follow your order and download your invoice on our shop, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? $this->getContext($context, "locale")))], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
            </span>
        </font>
    </td>
</tr>
<tr>
    <td class=\"linkbelow\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
            <span>
                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.", ["%guest_tracking_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Guest Tracking", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? $this->getContext($context, "locale")))], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
            </span>
        </font>
    </td>
</tr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 54,  122 => 45,  103 => 29,  100 => 28,  91 => 24,  87 => 22,  85 => 21,  68 => 7,  64 => 6,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/classic/components/layout.html.twig' %}

{% block content %}
<tr>
    <td align=\"center\" class=\"titleblock\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            <span class=\"title\" style=\"font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px\">{{ 'Hi {firstname} {lastname},'|trans({}, 'Emails.Body', locale) }}</span>
        </font>
    </td>
</tr>
<tr>
    <td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
    <td class=\"box\" style=\"border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0\">
        <table class=\"table\" style=\"width:100%\">
            <tr>
                <td width=\"10\" style=\"padding:7px 0\">&nbsp;</td>
                <td style=\"padding:7px 0\">
                    <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
                        {% if templateType == 'html' %}

                            <p style=\"border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px\">
                                {{ 'Order {order_name}'|trans({}, 'Emails.Body', locale) }}&nbsp;-&nbsp;{{ 'Order edited'|trans({}, 'Emails.Body', locale)|raw }}
                            </p>

{% endif %}
                        <span style=\"color:#777\">
                            {{ 'Your order with the reference [1]{order_name}[/1] has been modified.'|trans({'[1]': '<span><strong>', '[/1]': '</strong></span>'}, 'Emails.Body', locale)|raw }}
                        </span>
                    </font>
                </td>
                <td width=\"10\" style=\"padding:7px 0\">&nbsp;</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
    <td class=\"linkbelow\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
            <span>
                {{ 'Follow your order and download your invoice on our shop, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.'|trans({'%order_history_label%': 'Order history and details'|trans({}, 'Shop.Theme.Customeraccount', locale)}, 'Emails.Body', locale)|raw }}
            </span>
        </font>
    </td>
</tr>
<tr>
    <td class=\"linkbelow\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
            <span>
                {{ 'If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.'|trans({'%guest_tracking_label%': 'Guest Tracking'|trans({}, 'Shop.Theme.Customeraccount', locale)}, 'Emails.Body', locale)|raw }}
            </span>
        </font>
    </td>
</tr>
{% endblock %}
", "@MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig", "/var/www/html/mails/themes/classic/modules/ps_emailalerts/order_changed.html.twig");
    }
}
