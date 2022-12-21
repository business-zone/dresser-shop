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

/* /var/www/html/mails/themes/classic/modules/ps_reminder/followup_3.html.twig */
class __TwigTemplate_d295ade4b6aa01426bd162b0187e6bdbdd6c16a674b613123ce6c3b14fb22dc3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "/var/www/html/mails/themes/classic/modules/ps_reminder/followup_3.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Thanks for your trust.", [], "Emails.Body", ($context["locale"] ?? null));
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are one of our best customers and as such we want to thank you for your continued patronage.", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>
            
";
        }
        // line 29
        echo "            <span>
              ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("As appreciation for your loyalty, we want to give you a discount of [1]{amount}%[/1] valid on your next order! This offer is valid for [1]{days}[/1] days, so do not waste a moment!", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
        echo "<br/> <br/>
              <span><strong>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here is your coupon:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {voucher_num}<br/><br/>
              ";
        // line 32
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
        return "/var/www/html/mails/themes/classic/modules/ps_reminder/followup_3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  94 => 31,  90 => 30,  87 => 29,  80 => 25,  76 => 23,  74 => 22,  70 => 21,  54 => 8,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/mails/themes/classic/modules/ps_reminder/followup_3.html.twig", "/var/www/html/mails/themes/classic/modules/ps_reminder/followup_3.html.twig");
    }
}
