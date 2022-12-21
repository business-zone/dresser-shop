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

/* /var/www/html/mails/themes/classic/modules/ps_reminder/followup_1.html.twig */
class __TwigTemplate_41c869bd016de79ab5cbe9a236d58c7caf79db866ed788b3c7d18e9a450d9643 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "/var/www/html/mails/themes/classic/modules/ps_reminder/followup_1.html.twig", 1);
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
          <font size=\"2\" face=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 21
        if ((($context["templateType"] ?? null) == "html")) {
            // line 22
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your cart at {shop_name}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
            echo "
              </p>
            
";
        }
        // line 28
        echo "            <span>
              ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We noticed that during your last visit on {shop_name}, you did not complete the order you had started.", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "<br/> <br/>
              ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your cart has been saved, you can resume your order by visiting our shop:", [], "Emails.Body", ($context["locale"] ?? null));
        echo " <span><strong><a title=\"{shop_name}\" href=\"{shop_url}\">{shop_url}</a></strong></span><br/><br/>
              ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("As an incentive, we can give you a discount of [1]{amount}%[/1] off your next order! This offer is valid for [1]{days}[/1] days, so do not waste a moment!", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
        echo "
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
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 50
        if ((($context["templateType"] ?? null) == "html")) {
            // line 51
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your {shop_name} login details", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
            echo "
              </p>
            
";
        }
        // line 57
        echo "            <span>
              <span><strong>";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here is your coupon:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {voucher_num}<br/>
              ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enter this code in your shopping cart to get your discount.", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
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
        return "/var/www/html/mails/themes/classic/modules/ps_reminder/followup_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 59,  135 => 58,  132 => 57,  125 => 53,  121 => 51,  119 => 50,  115 => 49,  94 => 31,  90 => 30,  86 => 29,  83 => 28,  76 => 24,  72 => 22,  70 => 21,  66 => 20,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/mails/themes/classic/modules/ps_reminder/followup_1.html.twig", "/var/www/html/mails/themes/classic/modules/ps_reminder/followup_1.html.twig");
    }
}
