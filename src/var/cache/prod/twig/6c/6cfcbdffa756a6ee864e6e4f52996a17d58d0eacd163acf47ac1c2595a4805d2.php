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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:header.html.twig */
class __TwigTemplate_8e3675a26cb8f7934d17952dbcaaac371114b081ae45cd50cbdbabec681f0b0b extends \Twig\Template
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
        echo "<div class=\"product-header col-md-12\">
  <div class=\"row justify-content-md-center\">
  ";
        // line 27
        if (($context["isMultiShopContext"] ?? null)) {
            // line 28
            echo "    <div class=\"col-xxl-10\">
      <div class=\"alert alert-warning\" role=\"alert\">
        <p class=\"alert-text\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are in a multistore context: any modification will impact all your shops, or each shop of the active group.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</p>
      </div>
    </div>
  ";
        }
        // line 34
        echo "
    <div class=\"col-xxl-10\">
      <div class=\"row\">
        <div class=\"col-md-10 product-header-form\">
          ";
        // line 38
        $this->displayBlock('product_header_form', $context, $blocks);
        // line 42
        echo "        </div>

        <div class=\"toolbar col-sm-3 col-md-2 text-md-right\">
        ";
        // line 45
        if ((null != ($context["statsLink"] ?? null))) {
            // line 46
            echo "          <a class=\"toolbar-button btn-sales\" href=\"";
            echo twig_escape_filter($this->env, ($context["statsLink"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", [], "Admin.Global"), "html", null, true);
            echo "\"
            id=\"product_form_go_to_sales\">
            <i class=\"material-icons\">assessment</i>
            <span class=\"title\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", [], "Admin.Global"), "html", null, true);
            echo "</span>
          </a>
        ";
        }
        // line 52
        echo "
          <a
            class=\"toolbar-button btn-quicknav btn-sidebar\"
            href=\"#\"
            title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quick navigation", [], "Admin.Global"), "html", null, true);
        echo "\"
            data-toggle=\"sidebar\"
            data-target=\"#right-sidebar\"
            data-url=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_list", ["limit" => "last", "offset" => "last", "view" => "quicknav"]), "html", null, true);
        echo "\"
            id=\"product_form_open_quicknav\"
          >
            <i class=\"material-icons\">list</i>
            <span class=\"title\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product list", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
          </a>

          <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
            title=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", [], "Admin.Global"), "html", null, true);
        echo "\"
            data-toggle=\"sidebar\"
            data-target=\"#right-sidebar\"
            data-url=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["helpLink"] ?? null), "html", null, true);
        echo "\"
            id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", [], "Admin.Global"), "html", null, true);
        echo "</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    // line 38
    public function block_product_header_form($context, array $blocks = [])
    {
        // line 39
        echo "            ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute(($context["productForm"] ?? null), "header", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/header_form_theme.html.twig"], true);
        // line 40
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? null), "header", []), 'row');
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 40,  132 => 39,  129 => 38,  117 => 74,  110 => 70,  104 => 67,  97 => 63,  90 => 59,  84 => 56,  78 => 52,  72 => 49,  63 => 46,  61 => 45,  56 => 42,  54 => 38,  48 => 34,  41 => 30,  37 => 28,  35 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/header.html.twig");
    }
}
