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

/* /var/www/html/mails/themes/classic/core/in_transit.html.twig */
class __TwigTemplate_bff9fff833072ad10078d297673f6d7261a98ed43c14866de035413f9ac90172 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "/var/www/html/mails/themes/classic/core/in_transit.html.twig", 1);
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
          <div itemscope=\"\" itemtype=\"https://schema.org/ParcelDelivery\">
            <div itemprop=\"deliveryAddress\" itemscope=\"\" itemtype=\"https://schema.org/PostalAddress\">
              <meta itemprop=\"streetAddress\" content=\"{address1}\"/>
              <meta itemprop=\"addressLocality\" content=\"{city}\"/>
              <meta itemprop=\"addressRegion\" content=\"{city}\"/>
              <meta itemprop=\"addressCountry\" content=\"{country}\"/>
              <meta itemprop=\"postalCode\" content=\"{postcode}\"/>
            </div>

            <link itemprop=\"trackingUrl\" href=\"{followup}\"/>
            <div itemprop=\"carrier\" itemscope=\"\" itemtype=\"https://schema.org/Organization\">
              <meta itemprop=\"name\" content=\"{carrier}\"/>
            </div>

            {meta_products}

            <div itemprop=\"partOfOrder\" itemscope=\"\" itemtype=\"https://schema.org/Order\">
              <meta itemprop=\"orderNumber\" content=\"{order_name}\"/>
              <div itemprop=\"merchant\" itemscope=\"\" itemtype=\"https://schema.org/Organization\">
                <meta itemprop=\"name\" content=\"{shop_name}\"/>
              </div>
              <link itemprop=\"orderStatus\" href=\"https://schema.org/OrderInTransit\"/>
            </div>
          </div>

          <font size=\"2\" face=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 46
        if ((($context["templateType"] ?? null) == "html")) {
            // line 47
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order {order_name}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
            echo "&nbsp;-&nbsp;";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In transit", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>

";
        }
        // line 53
        echo "            <span>
              ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your order with the reference [1]{order_name}[/1] is currently in transit.", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
        echo " <br/><br/>
              ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can track your package using the following link:", [], "Emails.Body", ($context["locale"] ?? null));
        echo " <a href=\"{followup}\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("{followup}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</a>
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
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Follow your order and download your invoice on our shop, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 80
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
        return "/var/www/html/mails/themes/classic/core/in_transit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 80,  151 => 78,  141 => 71,  136 => 69,  117 => 55,  113 => 54,  110 => 53,  101 => 49,  97 => 47,  95 => 46,  91 => 45,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/mails/themes/classic/core/in_transit.html.twig", "/var/www/html/mails/themes/classic/core/in_transit.html.twig");
    }
}
