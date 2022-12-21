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

/* @MailThemes/classic/components/footer.html.twig */
class __TwigTemplate_9623eb7820213e587f069ce1fba34fb048d0f4d573b1e0098f1c4cd5c4970d16 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"footer\" style=\"border-top: 4px solid #333333\">
    <span>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("<a href=\"{shop_url}\">{shop_name}</a> powered by <a href=\"{prestashop_url}\">PrestaShop™</a>", ["{prestashop_url}" => "https://www.prestashop.com/?utm_source=marchandprestashop&utm_medium=e-mail&utm_campaign=footer_1-7"], "Emails.Body", ($context["locale"] ?? null));
        echo "</span>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/components/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/components/footer.html.twig", "/var/www/html/mails/themes/classic/components/footer.html.twig");
    }
}
