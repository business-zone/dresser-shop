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

/* @Modules/ps_metrics/views/PrestaShop/Admin/Sell/Order/Order/index_old.html.twig */
class __TwigTemplate_c19d61395fefc29214717aec75f2c7c33515dfbe84a5ad368973fd4194f76d14 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'orders_kpi' => [$this, 'block_orders_kpi'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "PrestaShopBundle:Admin/Sell/Order/Order:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Sell/Order/Order:index.html.twig", "@Modules/ps_metrics/views/PrestaShop/Admin/Sell/Order/Order/index_old.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_orders_kpi($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        if (( !array_key_exists("nativeStatsModulesEnabled", $context) || ($context["nativeStatsModulesEnabled"] ?? null))) {
            // line 24
            echo "        ";
            $this->displayParentBlock("orders_kpi", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@Modules/ps_metrics/views/PrestaShop/Admin/Sell/Order/Order/index_old.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 24,  42 => 23,  39 => 22,  29 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_metrics/views/PrestaShop/Admin/Sell/Order/Order/index_old.html.twig", "/var/www/html/modules/ps_metrics/views/PrestaShop/Admin/Sell/Order/Order/index_old.html.twig");
    }
}
