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

/* PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:disabled_feature_warning.html.twig */
class __TwigTemplate_22d8c76f638ff6809355dd8fd432146e8f3b983895029fc4d3f922634ad77517 extends \Twig\Template
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
        // line 25
        echo "
";
        // line 26
        $context["href"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_performance") . "#optional_features");
        // line 27
        $context["linkText"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Performance", [], "Admin.Global");
        // line 28
        echo "
<div class=\"alert alert-warning\" role=\"alert\">
  <p>
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This feature has been disabled. You can activate it here: %url%.", ["%url%" => (((("<a href=\"" .         // line 32
($context["href"] ?? null)) . "\">") . ($context["linkText"] ?? null)) . "</a>")], "Admin.Catalog.Notification");
        // line 33
        echo "
  </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:disabled_feature_warning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 33,  43 => 32,  42 => 31,  37 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:disabled_feature_warning.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Features/Blocks/disabled_feature_warning.html.twig");
    }
}
