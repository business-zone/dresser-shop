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

/* @MailThemes/classic/modules/ps_emailalerts/new_order.html.twig */
class __TwigTemplate_e8cbee41dda27c95c5fa2a1bc2406f455ce0c1c4d47869d681e46f626e2af25d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Congratulations!", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A new order was placed on {shop_name} by the following customer: {firstname} {lastname} ({email})", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 28
        if ((($context["templateType"] ?? null) == "html")) {
            // line 29
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order details", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>
            
";
        }
        // line 35
        echo "            <span>
              <span><strong>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {order_name} ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Placed on", [], "Emails.Body", ($context["locale"] ?? null));
        echo " {date}<br/><br/>
              <span><strong>";
        // line 37
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
        // line 48
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <table class=\"table table-recap\" bgcolor=\"#ffffff\"><!-- Title -->
        <thead>
          <tr>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit price", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total price", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          </tr>
        </thead>
        <tbody>
          {items}
          <tr class=\"conf_body\">
            <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
              <table class=\"table\">
                <tr>
                  <td width=\"10\">&nbsp;</td>
                  <td align=\"right\">
                    <font size=\"2\" face=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 68
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
        // line 80
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
        // line 95
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 96
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
        // line 108
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
        // line 123
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 124
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
        // line 136
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
        // line 151
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 152
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
        // line 164
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
        // line 179
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 180
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
        // line 192
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
        // line 207
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 208
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
                  <td align=\"right\" class=\"total_amount\">
                    <font size=\"4\" face=\"";
        // line 220
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
        </tbody>
      </table>
    </font>
  </td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 240
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 241
        if ((($context["templateType"] ?? null) == "html")) {
            // line 242
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 244
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier:", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>
            
";
        }
        // line 248
        echo "            <span>
              {carrier}
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
        // line 270
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 271
        if ((($context["templateType"] ?? null) == "html")) {
            // line 272
            echo "
                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 274
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
                    </p>
                  
";
        }
        // line 278
        echo "                  <span>
                    {delivery_block_html}
                  </span>
                </font>
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
        // line 293
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 294
        if ((($context["templateType"] ?? null) == "html")) {
            // line 295
            echo "
                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 297
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
                    </p>
                  
";
        }
        // line 301
        echo "                  <span>
                    {invoice_block_html}
                  </span>
                </font>
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
  <td class=\"box\" colspan=\"3\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 323
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 324
        if ((($context["templateType"] ?? null) == "html")) {
            // line 325
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 327
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer message:", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>
            
";
        }
        // line 331
        echo "            <span>
              {message}
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 331,  509 => 327,  505 => 325,  503 => 324,  499 => 323,  475 => 301,  468 => 297,  464 => 295,  462 => 294,  458 => 293,  441 => 278,  434 => 274,  430 => 272,  428 => 271,  424 => 270,  400 => 248,  393 => 244,  389 => 242,  387 => 241,  383 => 240,  360 => 220,  345 => 208,  341 => 207,  323 => 192,  308 => 180,  304 => 179,  286 => 164,  271 => 152,  267 => 151,  249 => 136,  234 => 124,  230 => 123,  212 => 108,  197 => 96,  193 => 95,  175 => 80,  160 => 68,  156 => 67,  142 => 56,  138 => 55,  134 => 54,  130 => 53,  126 => 52,  119 => 48,  105 => 37,  99 => 36,  96 => 35,  89 => 31,  85 => 29,  83 => 28,  79 => 27,  63 => 14,  59 => 13,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig", "/var/www/html/mails/themes/classic/modules/ps_emailalerts/new_order.html.twig");
    }
}
