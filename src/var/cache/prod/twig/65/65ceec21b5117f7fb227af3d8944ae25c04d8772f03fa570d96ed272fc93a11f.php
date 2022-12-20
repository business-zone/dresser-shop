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

/* @MailThemes/classic/core/order_conf.html.twig */
class __TwigTemplate_e8764acca9b57cf76a023767efe611ddd666bcd48ce33a70678b20bd8a5f2e3e extends \Twig\Template
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
        return "@MailThemes/classic/components/order_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/order_layout.html.twig", "@MailThemes/classic/core/order_conf.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</span><br/>
      <span class=\"subtitle\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Thank you for shopping with {shop_name}!", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 22
        if ((($context["templateType"] ?? null) == "html")) {
            // line 23
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order details", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>

";
        }
        // line 29
        echo "            <span>
              <span><strong>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {order_name} ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Placed on", [], "Emails.Body", ($context["locale"] ?? null));
        echo " {date}<br/><br/>
              <span><strong>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {payment}
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td>
    <font size=\"2\" face=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <table class=\"table table-recap\" bgcolor=\"#ffffff\"><!-- Title -->
        <tr>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit price", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total price", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
        </tr>
        ";
        // line 51
        if ((($context["templateType"] ?? null) == "html")) {
            // line 52
            echo "{products}
";
        }
        // line 54
        echo "        ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 55
            echo "{products_txt}
";
        }
        // line 57
        echo "
        ";
        // line 58
        if ((($context["templateType"] ?? null) == "html")) {
            // line 59
            echo "{discounts}
";
        }
        // line 61
        echo "        ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 62
            echo "{discounts_txt}
";
        }
        // line 64
        echo "
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" align=\"right\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_products}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discounts", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_discounts}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 127
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift-wrapping", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 140
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_wrapping}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 155
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 168
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_shipping}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 183
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total Tax paid", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 196
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_tax_paid}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 211
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total paid", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"4\" face=\"";
        // line 224
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_paid}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>

      </table>
    </font>
  </td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 244
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 245
        if ((($context["templateType"] ?? null) == "html")) {
            // line 246
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 248
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>

";
        }
        // line 252
        echo "            <span>
              <span><strong>";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {carrier}<br/><br/>
              <span><strong>";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {payment}
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td>
    <table class=\"table\">
      <tr>
        <td class=\"box address\" width=\"310\" style=\"border:1px solid #D6D4D4;\">
          <table class=\"table\">
            <tr>
              <td width=\"10\">&nbsp;</td>
              <td>
                <font size=\"2\" face=\"";
        // line 275
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 276
        if ((($context["templateType"] ?? null) == "html")) {
            // line 277
            echo "                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 278
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
                    </p>
                    <span>
                      {delivery_block_html}
                    </span>
                  ";
        }
        // line 284
        echo "                  ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 285
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
\t\t\t\t\t\t\t\t\t\t{delivery_block_txt}
\t\t\t\t\t\t\t\t\t";
        }
        // line 288
        echo "                </font>
              </td>
              <td width=\"10\">&nbsp;</td>
            </tr>
          </table>
        </td>
        <td width=\"20\" class=\"space_address\">&nbsp;</td>
        <td class=\"box address\" width=\"310\" style=\"border:1px solid #D6D4D4;\">
          <table class=\"table\">
            <tr>
              <td width=\"10\">&nbsp;</td>
              <td>
                <font size=\"2\" face=\"";
        // line 300
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 301
        if ((($context["templateType"] ?? null) == "html")) {
            // line 302
            echo "                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 303
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
                    </p>
                    <span>
                      {invoice_block_html}
                    </span>
                  ";
        }
        // line 309
        echo "\t\t\t\t\t\t\t\t\t";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 310
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
\t\t\t\t\t\t\t\t\t\t{invoice_block_txt}
\t\t\t\t\t\t\t\t\t";
        }
        // line 313
        echo "                </font>
              </td>
              <td width=\"10\">&nbsp;</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 328
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 330
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Follow your order and download your invoice on our shop, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 337
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 339
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
        return "@MailThemes/classic/core/order_conf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 339,  552 => 337,  542 => 330,  537 => 328,  520 => 313,  513 => 310,  510 => 309,  501 => 303,  498 => 302,  496 => 301,  492 => 300,  478 => 288,  471 => 285,  468 => 284,  459 => 278,  456 => 277,  454 => 276,  450 => 275,  426 => 254,  422 => 253,  419 => 252,  412 => 248,  408 => 246,  406 => 245,  402 => 244,  379 => 224,  364 => 212,  360 => 211,  342 => 196,  327 => 184,  323 => 183,  305 => 168,  290 => 156,  286 => 155,  268 => 140,  253 => 128,  249 => 127,  231 => 112,  216 => 100,  212 => 99,  194 => 84,  179 => 72,  175 => 71,  166 => 64,  162 => 62,  159 => 61,  155 => 59,  153 => 58,  150 => 57,  146 => 55,  143 => 54,  139 => 52,  137 => 51,  132 => 49,  128 => 48,  124 => 47,  120 => 46,  116 => 45,  110 => 42,  96 => 31,  90 => 30,  87 => 29,  80 => 25,  76 => 23,  74 => 22,  70 => 21,  54 => 8,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/core/order_conf.html.twig", "/var/www/html/mails/themes/classic/core/order_conf.html.twig");
    }
}
