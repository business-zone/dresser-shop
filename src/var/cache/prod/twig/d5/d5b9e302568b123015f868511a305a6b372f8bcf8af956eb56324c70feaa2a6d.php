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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:stock.html.twig */
class __TwigTemplate_a87193dc4119ed7f2c3c8dbe91424d3a45e7af947c68f6afd472a1594646fdb1 extends \Twig\Template
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid\" id=\"stock-tab\">
  ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "stock", [], "any", false, true), "virtual_product_file", [], "any", true, true)) {
            // line 28
            echo "    ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "stock", []), "virtual_product_file", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/virtual_product_file_form_theme.html.twig"], true);
            // line 29
            echo "  ";
        }
        // line 30
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? null), "stock", []), 'row');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 30,  39 => 29,  36 => 28,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:stock.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Tabs/stock.html.twig");
    }
}
