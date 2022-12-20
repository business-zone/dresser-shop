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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:tabs.html.twig */
class __TwigTemplate_7c119cbc662183f65a21b38c1e0565261a583a748b0933432f31c15017475f7f extends \Twig\Template
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
        $context["isBasicTabValid"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "basic", []), "vars", []), "valid", []);
        // line 26
        $context["isOptionsTabValid"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "options", []), "vars", []), "valid", []);
        // line 27
        $context["isPricingTabValid"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "pricing", []), "vars", []), "valid", []);
        // line 28
        $context["isSEOTabValid"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "seo", []), "vars", []), "valid", []);
        // line 29
        echo "
";
        // line 31
        $context["isStockTabValid"] = ( !$this->getAttribute(($context["productForm"] ?? null), "stock", [], "any", true, true) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "stock", []), "vars", []), "valid", []));
        // line 32
        $context["isShippingTabValid"] = ( !$this->getAttribute(($context["productForm"] ?? null), "shipping", [], "any", true, true) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "shipping", []), "vars", []), "valid", []));
        // line 33
        echo "
<div class=\"tabs js-tabs\">
  <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
    <i class=\"material-icons hide\">chevron_left</i>
  </div>

  <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    <li id=\"basic-tab-nav\" class=\"nav-item";
        // line 40
        if ( !($context["isBasicTabValid"] ?? null)) {
            echo " has-error";
        }
        echo "\">
      <a href=\"#basic-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link active\">
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Basic settings", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </a>
    </li>

    ";
        // line 46
        if ($this->getAttribute(($context["productForm"] ?? null), "stock", [], "any", true, true)) {
            // line 47
            echo "      <li id=\"stock-tab-nav\" class=\"nav-item";
            if ( !($context["isStockTabValid"] ?? null)) {
                echo " has-error";
            }
            echo "\">
        <a href=\"#stock-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
          ";
            // line 49
            if ((($context["productType"] ?? null) == "virtual")) {
                // line 50
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Virtual product", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "
          ";
            } else {
                // line 52
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "
          ";
            }
            // line 54
            echo "        </a>
      </li>
    ";
        }
        // line 57
        echo "
    ";
        // line 58
        if ((($context["productType"] ?? null) == "combinations")) {
            // line 59
            echo "      <li id=\"combinations-tab-nav\" class=\"nav-item\">
        <a href=\"#combinations-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
          ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        </a>
      </li>
    ";
        }
        // line 65
        echo "
    ";
        // line 66
        if ($this->getAttribute(($context["productForm"] ?? null), "shipping", [], "any", true, true)) {
            // line 67
            echo "      <li id=\"shipping-tab-nav\" class=\"nav-item";
            if ( !($context["isShippingTabValid"] ?? null)) {
                echo " has-error";
            }
            echo "\">
        <a href=\"#shipping-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
          ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        </a>
      </li>
    ";
        }
        // line 73
        echo "
    <li id=\"pricing-tab-nav\" class=\"nav-item";
        // line 74
        if ( !($context["isPricingTabValid"] ?? null)) {
            echo " has-error";
        }
        echo "\">
      <a href=\"#pricing-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
        ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pricing", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </a>
    </li>

    <li id=\"seo-tab-nav\" class=\"nav-item";
        // line 80
        if ( !($context["isSEOTabValid"] ?? null)) {
            echo " has-error";
        }
        echo "\">
      <a href=\"#seo-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
        ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </a>
    </li>

    <li id=\"options-tab-nav\" class=\"nav-item";
        // line 86
        if ( !($context["isOptionsTabValid"] ?? null)) {
            echo " has-error";
        }
        echo "\">
      <a href=\"#options-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
        ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Options", [], "Admin.Global"), "html", null, true);
        echo "
      </a>
    </li>

    ";
        // line 92
        if ( !twig_test_empty($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hooksArrayContent(($context["extraModulesHooks"] ?? null)))) {
            // line 93
            echo "      <li id=\"modules-tab-nav\" class=\"nav-item\">
        <a href=\"#modules-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
          ";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        </a>
      </li>
    ";
        }
        // line 99
        echo "  </ul>

  <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
    <i class=\"material-icons hide\">chevron_right</i>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 99,  184 => 95,  180 => 93,  178 => 92,  171 => 88,  164 => 86,  157 => 82,  150 => 80,  143 => 76,  136 => 74,  133 => 73,  126 => 69,  118 => 67,  116 => 66,  113 => 65,  106 => 61,  102 => 59,  100 => 58,  97 => 57,  92 => 54,  86 => 52,  80 => 50,  78 => 49,  70 => 47,  68 => 46,  61 => 42,  54 => 40,  45 => 33,  43 => 32,  41 => 31,  38 => 29,  36 => 28,  34 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:tabs.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/tabs.html.twig");
    }
}
