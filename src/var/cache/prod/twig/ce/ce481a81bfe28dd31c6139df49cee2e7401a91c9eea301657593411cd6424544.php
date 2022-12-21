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

/* /var/www/html/mails/themes/classic/modules/ps_emailalerts/order_changed.html.twig */
class __TwigTemplate_f4f8e0f7301bbc04593f8bf98f21f4a44e9f92c2242e02e0e15268f8e74c6d2c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "/var/www/html/mails/themes/classic/modules/ps_emailalerts/order_changed.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<tr>
    <td align=\"center\" class=\"titleblock\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            <span class=\"title\" style=\"font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
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
        if ((($context["templateType"] ?? null) == "html")) {
            // line 22
            echo "
                            <p style=\"border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px\">
                                ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order {order_name}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
            echo "&nbsp;-&nbsp;";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order edited", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
                            </p>

";
        }
        // line 28
        echo "                        <span style=\"color:#777\">
                            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your order with the reference [1]{order_name}[/1] has been modified.", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Follow your order and download your invoice on our shop, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.", ["%guest_tracking_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Guest Tracking", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "
            </span>
        </font>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/mails/themes/classic/modules/ps_emailalerts/order_changed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 54,  104 => 45,  85 => 29,  82 => 28,  73 => 24,  69 => 22,  67 => 21,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/mails/themes/classic/modules/ps_emailalerts/order_changed.html.twig", "/var/www/html/mails/themes/classic/modules/ps_emailalerts/order_changed.html.twig");
    }
}