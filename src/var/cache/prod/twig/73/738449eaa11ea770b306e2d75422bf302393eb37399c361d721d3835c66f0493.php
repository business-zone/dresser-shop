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
class __TwigTemplate_8652c15278cd326897ad8ee4d7665da30d4ef35e0a5beca932e80e56956bcaa7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/core/order_conf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/core/order_conf.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/classic/components/order_layout.html.twig", "@MailThemes/classic/core/order_conf.html.twig", 1);
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
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
        echo "</span><br/>
      <span class=\"subtitle\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Thank you for shopping with {shop_name}!", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 22
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 23
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order details", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
            echo "
              </p>

";
        }
        // line 29
        echo "            <span>
              <span><strong>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</strong></span> {order_name} ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Placed on", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo " {date}<br/><br/>
              <span><strong>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <table class=\"table table-recap\" bgcolor=\"#ffffff\"><!-- Title -->
        <tr>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit price", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total price", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
        </tr>
        ";
        // line 51
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 52
            echo "{products}
";
        }
        // line 54
        echo "        ";
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "txt")) {
            // line 55
            echo "{products_txt}
";
        }
        // line 57
        echo "
        ";
        // line 58
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 59
            echo "{discounts}
";
        }
        // line 61
        echo "        ";
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "txt")) {
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discounts", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift-wrapping", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total Tax paid", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total paid", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 245
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 246
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 248
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
            echo "
              </p>

";
        }
        // line 252
        echo "            <span>
              <span><strong>";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</strong></span> {carrier}<br/><br/>
              <span><strong>";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 276
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 277
            echo "                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 278
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
            echo "
                    </p>
                    <span>
                      {delivery_block_html}
                    </span>
                  ";
        }
        // line 284
        echo "                  ";
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "txt")) {
            // line 285
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 301
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 302
            echo "                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 303
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
            echo "
                    </p>
                    <span>
                      {invoice_block_html}
                    </span>
                  ";
        }
        // line 309
        echo "\t\t\t\t\t\t\t\t\t";
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "txt")) {
            // line 310
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 330
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Follow your order and download your invoice on our shop, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? $this->getContext($context, "locale")))], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 337
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 339
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
        return "@MailThemes/classic/core/order_conf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 339,  570 => 337,  560 => 330,  555 => 328,  538 => 313,  531 => 310,  528 => 309,  519 => 303,  516 => 302,  514 => 301,  510 => 300,  496 => 288,  489 => 285,  486 => 284,  477 => 278,  474 => 277,  472 => 276,  468 => 275,  444 => 254,  440 => 253,  437 => 252,  430 => 248,  426 => 246,  424 => 245,  420 => 244,  397 => 224,  382 => 212,  378 => 211,  360 => 196,  345 => 184,  341 => 183,  323 => 168,  308 => 156,  304 => 155,  286 => 140,  271 => 128,  267 => 127,  249 => 112,  234 => 100,  230 => 99,  212 => 84,  197 => 72,  193 => 71,  184 => 64,  180 => 62,  177 => 61,  173 => 59,  171 => 58,  168 => 57,  164 => 55,  161 => 54,  157 => 52,  155 => 51,  150 => 49,  146 => 48,  142 => 47,  138 => 46,  134 => 45,  128 => 42,  114 => 31,  108 => 30,  105 => 29,  98 => 25,  94 => 23,  92 => 22,  88 => 21,  72 => 8,  68 => 7,  64 => 6,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/classic/components/order_layout.html.twig' %}

{% block content %}
<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">{{ 'Hi {firstname} {lastname},'|trans({}, 'Emails.Body', locale) }}</span><br/>
      <span class=\"subtitle\">{{ 'Thank you for shopping with {shop_name}!'|trans({}, 'Emails.Body', locale) }}</span>
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
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Order details'|trans({}, 'Emails.Body', locale)|raw }}
              </p>

{% endif %}
            <span>
              <span><strong>{{ 'Order:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {order_name} {{ 'Placed on'|trans({}, 'Emails.Body', locale)|raw }} {date}<br/><br/>
              <span><strong>{{ 'Payment:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {payment}
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
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <table class=\"table table-recap\" bgcolor=\"#ffffff\"><!-- Title -->
        <tr>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">{{ 'Reference'|trans({}, 'Emails.Body', locale)|raw }}</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">{{ 'Product'|trans({}, 'Emails.Body', locale)|raw }}</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">{{ 'Unit price'|trans({}, 'Emails.Body', locale)|raw }}</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">{{ 'Quantity'|trans({}, 'Emails.Body', locale)|raw }}</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">{{ 'Total price'|trans({}, 'Emails.Body', locale)|raw }}</th>
        </tr>
        {% if templateType == 'html' %}
{products}
{% endif %}
        {% if templateType == 'txt' %}
{products_txt}
{% endif %}

        {% if templateType == 'html' %}
{discounts}
{% endif %}
        {% if templateType == 'txt' %}
{discounts_txt}
{% endif %}

        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Products'|trans({}, 'Emails.Body', locale)|raw }}</strong>
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
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
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
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Discounts'|trans({}, 'Emails.Body', locale)|raw }}</strong>
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
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
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
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Gift-wrapping'|trans({}, 'Emails.Body', locale)|raw }}</strong>
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
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
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
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Shipping'|trans({}, 'Emails.Body', locale)|raw }}</strong>
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
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
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
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Total Tax paid'|trans({}, 'Emails.Body', locale)|raw }}</strong>
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
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
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
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Total paid'|trans({}, 'Emails.Body', locale)|raw }}</strong>
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
                  <font size=\"4\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
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
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Shipping'|trans({}, 'Emails.Body', locale)|raw }}
              </p>

{% endif %}
            <span>
              <span><strong>{{ 'Carrier:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {carrier}<br/><br/>
              <span><strong>{{ 'Payment:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {payment}
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
                <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                  {% if templateType == 'html' %}
                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      {{ 'Delivery address'|trans({}, 'Emails.Body', locale)|raw }}
                    </p>
                    <span>
                      {delivery_block_html}
                    </span>
                  {% endif %}
                  {% if templateType == 'txt' %}
\t\t\t\t\t\t\t\t\t\t{{ 'Delivery address'|trans({}, 'Emails.Body', locale)|raw }}
\t\t\t\t\t\t\t\t\t\t{delivery_block_txt}
\t\t\t\t\t\t\t\t\t{% endif %}
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
                <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                  {% if templateType == 'html' %}
                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      {{ 'Billing address'|trans({}, 'Emails.Body', locale)|raw }}
                    </p>
                    <span>
                      {invoice_block_html}
                    </span>
                  {% endif %}
\t\t\t\t\t\t\t\t\t{% if templateType == 'txt' %}
\t\t\t\t\t\t\t\t\t\t{{ 'Billing address'|trans({}, 'Emails.Body', locale)|raw }}
\t\t\t\t\t\t\t\t\t\t{invoice_block_txt}
\t\t\t\t\t\t\t\t\t{% endif %}
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
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>
        {{ 'Follow your order and download your invoice on our shop, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.'|trans({'%order_history_label%': 'Order history and details'|trans({}, 'Shop.Theme.Customeraccount', locale)}, 'Emails.Body', locale)|raw }}
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>
        {{ 'If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.'|trans({'%guest_tracking_label%': 'Guest Tracking'|trans({}, 'Shop.Theme.Customeraccount', locale)}, 'Emails.Body', locale)|raw }}
      </span>
    </font>
  </td>
</tr>
{% endblock %}
", "@MailThemes/classic/core/order_conf.html.twig", "/var/www/html/mails/themes/classic/core/order_conf.html.twig");
    }
}
