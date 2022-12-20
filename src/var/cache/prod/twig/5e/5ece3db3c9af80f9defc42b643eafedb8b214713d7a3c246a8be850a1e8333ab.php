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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Form:product_form_theme.html.twig */
class __TwigTemplate_bf1321d2e789aa097be07b7887e79eb32d66851e29d02612263ab697a1ca52b3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:product_form_theme.html.twig", 27);
        // line 27
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 27, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'image_dropzone_widget' => [$this, 'block_image_dropzone_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('image_dropzone_widget', $context, $blocks);
    }

    public function block_image_dropzone_widget($context, array $blocks = [])
    {
        // line 30
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(        // line 31
($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " image-dropzone")), "data-translations" => twig_jsonencode_filter(        // line 32
($context["translations"] ?? null)), "data-locales" => twig_jsonencode_filter(        // line 33
($context["locales"] ?? null)), "data-product-id" =>         // line 34
($context["product_id"] ?? null), "data-form-name" =>         // line 35
($context["update_form_name"] ?? null), "data-token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(        // line 36
($context["update_form_name"] ?? null))]);
        // line 38
        echo "
  <div ";
        // line 39
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
  </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:product_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 39,  64 => 38,  62 => 36,  61 => 35,  60 => 34,  59 => 33,  58 => 32,  57 => 31,  55 => 30,  49 => 29,  46 => 28,  43 => 25,  25 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:product_form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Form/product_form_theme.html.twig");
    }
}
