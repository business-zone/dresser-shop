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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:suppliers.html.twig */
class __TwigTemplate_9eeef97304379d869f6b509483eb8f85051bb64a643c28b8acc7ac50d9b67a7d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_product_suppliers' => [$this, 'block_form_product_suppliers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["suppliersForm"] ?? null), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/suppliers_form_theme.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_product_suppliers', $context, $blocks);
    }

    public function block_form_product_suppliers($context, array $blocks = [])
    {
        // line 29
        echo "  <div class=\"product-suppliers-block\">
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["suppliersForm"] ?? null), "supplier_ids", []), 'row');
        echo "
      </div>
      <div class=\"col\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["suppliersForm"] ?? null), "default_supplier_id", []), 'row');
        echo "
      </div>
    </div>

    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["suppliersForm"] ?? null), "product_suppliers", []), 'row');
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:suppliers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 39,  56 => 35,  50 => 32,  45 => 29,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:suppliers.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/suppliers.html.twig");
    }
}
