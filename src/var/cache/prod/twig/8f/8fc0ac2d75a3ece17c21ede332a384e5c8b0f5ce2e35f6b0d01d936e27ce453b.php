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

/* PrestaShopBundle:Admin/Sell/Catalog/Product:edit.html.twig */
class __TwigTemplate_dd8b5b6a94ffbd4a7384f207cd7852547fe25308d26fc651b759d5d153a71676 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_tabs_container' => [$this, 'block_product_tabs_container'],
            'product_tab_basic' => [$this, 'block_product_tab_basic'],
            'product_tab_combinations' => [$this, 'block_product_tab_combinations'],
            'product_tab_stock' => [$this, 'block_product_tab_stock'],
            'product_tab_shipping' => [$this, 'block_product_tab_shipping'],
            'product_tab_pricing' => [$this, 'block_product_tab_pricing'],
            'product_tab_seo' => [$this, 'block_product_tab_seo'],
            'product_tab_options' => [$this, 'block_product_tab_options'],
            'product_extra_tab' => [$this, 'block_product_extra_tab'],
            'product_footer' => [$this, 'block_product_footer'],
            'product_rest' => [$this, 'block_product_rest'],
            'product_external_tab_combinations' => [$this, 'block_product_external_tab_combinations'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["productForm"] ?? null), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/product_form_theme.html.twig"], false);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product:edit.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 31
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 35
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        // line 39
        echo "  ";
        $context["productType"] = $this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "vars", []), "product_type", []);
        // line 40
        echo "  ";
        $context["productId"] = $this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "vars", []), "product_id", []);
        // line 41
        echo "  ";
        $context["extraModulesHooks"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHooksArray("displayAdminProductsExtra", ["id_product" => ($context["productId"] ?? null)]);
        // line 42
        echo "
  <div class=\"header-toolbar d-print-none\">
    ";
        // line 44
        echo $this->env->getExtension('PrestaShopBundle\Twig\Extension\MultistoreHeaderExtension')->getMultistoreHeader();
        echo "
  </div>

  ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal product-page product-page-v2 row justify-content-md-center", "novalidate" => "novalidate", "data-product-id" =>         // line 49
($context["productId"] ?? null), "data-product-type" =>         // line 50
($context["productType"] ?? null)]]);
        // line 51
        echo "

  ";
        // line 53
        $this->displayBlock('product_header', $context, $blocks);
        // line 62
        echo "
  <div class=\"col-xxl-10\">

  ";
        // line 65
        $this->displayBlock("session_alert", $context, $blocks);
        echo "

  <div class=\"alert alert-info alert-experimental\" role=\"alert\">
    <p class=\"mb-1\">
      <strong>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the experimental product page.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</strong>
    </p>
    <p class=\"alert-text\">
      ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This page benefits from increased performance and includes new features such as a new combination management system. Please note this is a work in progress and some features are not available yet.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
    </p>
  </div>

    ";
        // line 76
        $this->displayBlock('product_tabs_container', $context, $blocks);
        // line 83
        echo "
    <div id=\"form_content\" class=\"product-tabs tab-content\">
      ";
        // line 85
        $this->displayBlock('product_tab_basic', $context, $blocks);
        // line 90
        echo "
      ";
        // line 91
        if ((($context["productType"] ?? null) == "combinations")) {
            // line 92
            echo "        ";
            $this->displayBlock('product_tab_combinations', $context, $blocks);
            // line 95
            echo "      ";
        }
        // line 96
        echo "
      ";
        // line 97
        if ($this->getAttribute(($context["productForm"] ?? null), "stock", [], "any", true, true)) {
            // line 98
            echo "        ";
            $this->displayBlock('product_tab_stock', $context, $blocks);
            // line 101
            echo "      ";
        }
        // line 102
        echo "
      ";
        // line 103
        if ($this->getAttribute(($context["productForm"] ?? null), "shipping", [], "any", true, true)) {
            // line 104
            echo "        ";
            $this->displayBlock('product_tab_shipping', $context, $blocks);
            // line 109
            echo "      ";
        }
        // line 110
        echo "
      ";
        // line 111
        $this->displayBlock('product_tab_pricing', $context, $blocks);
        // line 116
        echo "
      ";
        // line 117
        $this->displayBlock('product_tab_seo', $context, $blocks);
        // line 122
        echo "
      ";
        // line 123
        $this->displayBlock('product_tab_options', $context, $blocks);
        // line 128
        echo "
      ";
        // line 129
        $this->displayBlock('product_extra_tab', $context, $blocks);
        // line 135
        echo "    </div>
  </div>

  ";
        // line 138
        $this->displayBlock('product_footer', $context, $blocks);
        // line 145
        echo "
  ";
        // line 146
        $this->displayBlock('product_rest', $context, $blocks);
        // line 149
        echo "
  ";
        // line 151
        echo "  ";
        $this->displayBlock('product_external_tab_combinations', $context, $blocks);
    }

    // line 53
    public function block_product_header($context, array $blocks = [])
    {
        // line 54
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig", ["productForm" =>         // line 55
($context["productForm"] ?? null), "isMultiShopContext" =>         // line 56
($context["isMultiShopContext"] ?? null), "helpLink" =>         // line 57
($context["helpLink"] ?? null), "statsLink" =>         // line 58
($context["statsLink"] ?? null)]);
        // line 60
        echo "
  ";
    }

    // line 76
    public function block_product_tabs_container($context, array $blocks = [])
    {
        // line 77
        echo "      ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/tabs.html.twig", ["productForm" =>         // line 78
($context["productForm"] ?? null), "productType" =>         // line 79
($context["productType"] ?? null), "extraModulesHooks" =>         // line 80
($context["extraModulesHooks"] ?? null)]);
        // line 81
        echo "
    ";
    }

    // line 85
    public function block_product_tab_basic($context, array $blocks = [])
    {
        // line 86
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/basic.html.twig", ["productForm" =>         // line 87
($context["productForm"] ?? null)]);
        // line 88
        echo "
      ";
    }

    // line 92
    public function block_product_tab_combinations($context, array $blocks = [])
    {
        // line 93
        echo "          ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/combinations.html.twig");
        echo "
        ";
    }

    // line 98
    public function block_product_tab_stock($context, array $blocks = [])
    {
        // line 99
        echo "          ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/stock.html.twig");
        echo "
        ";
    }

    // line 104
    public function block_product_tab_shipping($context, array $blocks = [])
    {
        // line 105
        echo "          ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/shipping.html.twig", ["productForm" =>         // line 106
($context["productForm"] ?? null)]);
        // line 107
        echo "
        ";
    }

    // line 111
    public function block_product_tab_pricing($context, array $blocks = [])
    {
        // line 112
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/pricing.html.twig", ["productForm" =>         // line 113
($context["productForm"] ?? null)]);
        // line 114
        echo "
      ";
    }

    // line 117
    public function block_product_tab_seo($context, array $blocks = [])
    {
        // line 118
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/seo.html.twig", ["productForm" =>         // line 119
($context["productForm"] ?? null)]);
        // line 120
        echo "
      ";
    }

    // line 123
    public function block_product_tab_options($context, array $blocks = [])
    {
        // line 124
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/options.html.twig", ["productForm" =>         // line 125
($context["productForm"] ?? null)]);
        // line 126
        echo "
      ";
    }

    // line 129
    public function block_product_extra_tab($context, array $blocks = [])
    {
        // line 130
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/modules.html.twig", ["productForm" =>         // line 131
($context["productForm"] ?? null), "extraModulesHooks" =>         // line 132
($context["extraModulesHooks"] ?? null)]);
        // line 133
        echo "
      ";
    }

    // line 138
    public function block_product_footer($context, array $blocks = [])
    {
        // line 139
        echo "  ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig", ["productForm" =>         // line 140
($context["productForm"] ?? null), "editable" =>         // line 141
($context["editable"] ?? null), "productId" =>         // line 142
($context["productId"] ?? null)]);
        // line 143
        echo "
  ";
    }

    // line 146
    public function block_product_rest($context, array $blocks = [])
    {
        // line 147
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? null), 'form_end');
        echo "
  ";
    }

    // line 151
    public function block_product_external_tab_combinations($context, array $blocks = [])
    {
        // line 152
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/external_tab.html.twig");
        echo "
  ";
    }

    // line 157
    public function block_javascripts($context, array $blocks = [])
    {
        // line 158
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product_edit.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 160,  370 => 158,  367 => 157,  360 => 152,  357 => 151,  350 => 147,  347 => 146,  342 => 143,  340 => 142,  339 => 141,  338 => 140,  336 => 139,  333 => 138,  328 => 133,  326 => 132,  325 => 131,  323 => 130,  320 => 129,  315 => 126,  313 => 125,  311 => 124,  308 => 123,  303 => 120,  301 => 119,  299 => 118,  296 => 117,  291 => 114,  289 => 113,  287 => 112,  284 => 111,  279 => 107,  277 => 106,  275 => 105,  272 => 104,  265 => 99,  262 => 98,  255 => 93,  252 => 92,  247 => 88,  245 => 87,  243 => 86,  240 => 85,  235 => 81,  233 => 80,  232 => 79,  231 => 78,  229 => 77,  226 => 76,  221 => 60,  219 => 58,  218 => 57,  217 => 56,  216 => 55,  214 => 54,  211 => 53,  206 => 151,  203 => 149,  201 => 146,  198 => 145,  196 => 138,  191 => 135,  189 => 129,  186 => 128,  184 => 123,  181 => 122,  179 => 117,  176 => 116,  174 => 111,  171 => 110,  168 => 109,  165 => 104,  163 => 103,  160 => 102,  157 => 101,  154 => 98,  152 => 97,  149 => 96,  146 => 95,  143 => 92,  141 => 91,  138 => 90,  136 => 85,  132 => 83,  130 => 76,  123 => 72,  117 => 69,  110 => 65,  105 => 62,  103 => 53,  99 => 51,  97 => 50,  96 => 49,  95 => 47,  89 => 44,  85 => 42,  82 => 41,  79 => 40,  76 => 39,  73 => 38,  68 => 35,  61 => 31,  58 => 30,  53 => 25,  51 => 28,  45 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product:edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/edit.html.twig");
    }
}
