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
class __TwigTemplate_5001c4757c04b2a1553ca569cf91d549e21ed3f0e87a1827d8672bdc03e6efbf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Congratulations!", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A new order was placed on {shop_name} by the following customer: {firstname} {lastname} ({email})", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 28
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 29
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order details", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
            echo "
              </p>
            
";
        }
        // line 35
        echo "            <span>
              <span><strong>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</strong></span> {order_name} ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Placed on", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo " {date}<br/><br/>
              <span><strong>";
        // line 37
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
        // line 48
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <table class=\"table table-recap\" bgcolor=\"#ffffff\"><!-- Title -->
        <thead>
          <tr>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit price", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total price", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 68
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
        // line 80
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
        // line 95
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 96
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
        // line 108
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
        // line 123
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 124
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
        // line 136
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
        // line 151
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 152
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
        // line 164
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
        // line 179
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 180
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
        // line 192
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
        // line 207
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 208
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
                  <td align=\"right\" class=\"total_amount\">
                    <font size=\"4\" face=\"";
        // line 220
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 241
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 242
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 244
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 271
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 272
            echo "
                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 274
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 294
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 295
            echo "
                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 297
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 324
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 325
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 327
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer message:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  534 => 331,  527 => 327,  523 => 325,  521 => 324,  517 => 323,  493 => 301,  486 => 297,  482 => 295,  480 => 294,  476 => 293,  459 => 278,  452 => 274,  448 => 272,  446 => 271,  442 => 270,  418 => 248,  411 => 244,  407 => 242,  405 => 241,  401 => 240,  378 => 220,  363 => 208,  359 => 207,  341 => 192,  326 => 180,  322 => 179,  304 => 164,  289 => 152,  285 => 151,  267 => 136,  252 => 124,  248 => 123,  230 => 108,  215 => 96,  211 => 95,  193 => 80,  178 => 68,  174 => 67,  160 => 56,  156 => 55,  152 => 54,  148 => 53,  144 => 52,  137 => 48,  123 => 37,  117 => 36,  114 => 35,  107 => 31,  103 => 29,  101 => 28,  97 => 27,  81 => 14,  77 => 13,  68 => 7,  64 => 6,  60 => 4,  51 => 3,  29 => 1,);
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
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">{{ 'Congratulations!'|trans({}, 'Emails.Body', locale)|raw }}</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>{{ 'A new order was placed on {shop_name} by the following customer: {firstname} {lastname} ({email})'|trans({}, 'Emails.Body', locale) }}</span>
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
        <thead>
          <tr>
            <th style=\"border:1px solid #D6D4D4;\">{{ 'Reference'|trans({}, 'Emails.Body', locale)|raw }}</th>
            <th style=\"border:1px solid #D6D4D4;\">{{ 'Product'|trans({}, 'Emails.Body', locale)|raw }}</th>
            <th style=\"border:1px solid #D6D4D4;\">{{ 'Unit price'|trans({}, 'Emails.Body', locale)|raw }}</th>
            <th style=\"border:1px solid #D6D4D4;\">{{ 'Quantity'|trans({}, 'Emails.Body', locale)|raw }}</th>
            <th style=\"border:1px solid #D6D4D4;\">{{ 'Total price'|trans({}, 'Emails.Body', locale)|raw }}</th>
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
                  <td align=\"right\" class=\"total_amount\">
                    <font size=\"4\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
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
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Carrier:'|trans({}, 'Emails.Body', locale)|raw }}
              </p>
            
{% endif %}
            <span>
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
                <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                  {% if templateType == 'html' %}

                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      {{ 'Delivery address'|trans({}, 'Emails.Body', locale)|raw }}
                    </p>
                  
{% endif %}
                  <span>
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
                <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                  {% if templateType == 'html' %}

                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      {{ 'Billing address'|trans({}, 'Emails.Body', locale)|raw }}
                    </p>
                  
{% endif %}
                  <span>
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
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Customer message:'|trans({}, 'Emails.Body', locale)|raw }}
              </p>
            
{% endif %}
            <span>
              {message}
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
{% endblock %}
", "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig", "/var/www/html/mails/themes/classic/modules/ps_emailalerts/new_order.html.twig");
    }
}
