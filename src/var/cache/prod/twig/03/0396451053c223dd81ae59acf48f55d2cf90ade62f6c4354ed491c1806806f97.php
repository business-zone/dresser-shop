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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:footer.html.twig */
class __TwigTemplate_92c5b36cf351804a4cd62cfd82ac111f220c7e5b9a8434d16b8edd981cdab4ce extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_header_form' => [$this, 'block_product_header_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"product-footer\">
  ";
        // line 27
        $this->displayBlock('product_header_form', $context, $blocks);
        // line 44
        echo "</div>
";
    }

    // line 27
    public function block_product_header_form($context, array $blocks = [])
    {
        // line 28
        echo "    <div class=\"product-footer-container\">
      ";
        // line 30
        echo "      <div class=\"form-group\">
        <div id=\"product-footer-left\" class=\"product-footer-left\">
          ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "footer", []), "catalog", []), 'row');
        echo "
          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "footer", []), "preview", []), 'row');
        echo "
          ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "footer", []), "standard_page", []), 'row');
        echo "
          ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "footer", []), "delete", []), 'row');
        echo "
          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "footer", []), "active", []), 'row');
        echo "
        </div>
      </div>

      ";
        // line 41
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? null), "footer", []), 'row');
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 41,  68 => 36,  64 => 35,  60 => 34,  56 => 33,  52 => 32,  48 => 30,  45 => 28,  42 => 27,  37 => 44,  35 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:footer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/footer.html.twig");
    }
}
