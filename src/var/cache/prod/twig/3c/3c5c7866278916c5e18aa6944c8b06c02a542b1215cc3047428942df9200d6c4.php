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

/* @MailThemes/classic/components/header.html.twig */
class __TwigTemplate_89f66681fcacf113825298cb51dffa6fa7eafa7a343bd571dc452045c09bc388 extends \Twig\Template
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
  <td align=\"center\" class=\"logo\" style=\"border-bottom: 4px solid #333333\">
    <a title=\"{shop_name}\" href=\"{shop_url}\" test=\"{shop_url}\">
      <img src=\"{shop_logo}\" alt=\"{shop_name}\" />
    </a>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/components/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/components/header.html.twig", "/var/www/html/mails/themes/classic/components/header.html.twig");
    }
}
