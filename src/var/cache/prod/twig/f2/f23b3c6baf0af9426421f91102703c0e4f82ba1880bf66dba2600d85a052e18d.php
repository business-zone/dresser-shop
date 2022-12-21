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
class __TwigTemplate_66ab93ef6009dac8b181186fb4412041f445c86f221fdd10c8a7c9bacb33aa5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:tabs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:tabs.html.twig"));

        // line 25
        $context["isBasicTabValid"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "basic", []), "vars", []), "valid", []);
        // line 26
        $context["isOptionsTabValid"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "options", []), "vars", []), "valid", []);
        // line 27
        $context["isPricingTabValid"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "pricing", []), "vars", []), "valid", []);
        // line 28
        $context["isSEOTabValid"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "seo", []), "vars", []), "valid", []);
        // line 29
        echo "
";
        // line 31
        $context["isStockTabValid"] = ( !$this->getAttribute(($context["productForm"] ?? null), "stock", [], "any", true, true) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "stock", []), "vars", []), "valid", []));
        // line 32
        $context["isShippingTabValid"] = ( !$this->getAttribute(($context["productForm"] ?? null), "shipping", [], "any", true, true) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "shipping", []), "vars", []), "valid", []));
        // line 33
        echo "
<div class=\"tabs js-tabs\">
  <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
    <i class=\"material-icons hide\">chevron_left</i>
  </div>

  <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    <li id=\"basic-tab-nav\" class=\"nav-item";
        // line 40
        if ( !($context["isBasicTabValid"] ?? $this->getContext($context, "isBasicTabValid"))) {
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
            if ( !($context["isStockTabValid"] ?? $this->getContext($context, "isStockTabValid"))) {
                echo " has-error";
            }
            echo "\">
        <a href=\"#stock-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
          ";
            // line 49
            if ((($context["productType"] ?? $this->getContext($context, "productType")) == "virtual")) {
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
        if ((($context["productType"] ?? $this->getContext($context, "productType")) == "combinations")) {
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
            if ( !($context["isShippingTabValid"] ?? $this->getContext($context, "isShippingTabValid"))) {
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
        if ( !($context["isPricingTabValid"] ?? $this->getContext($context, "isPricingTabValid"))) {
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
        if ( !($context["isSEOTabValid"] ?? $this->getContext($context, "isSEOTabValid"))) {
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
        if ( !($context["isOptionsTabValid"] ?? $this->getContext($context, "isOptionsTabValid"))) {
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
        if ( !twig_test_empty($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hooksArrayContent(($context["extraModulesHooks"] ?? $this->getContext($context, "extraModulesHooks"))))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  197 => 99,  190 => 95,  186 => 93,  184 => 92,  177 => 88,  170 => 86,  163 => 82,  156 => 80,  149 => 76,  142 => 74,  139 => 73,  132 => 69,  124 => 67,  122 => 66,  119 => 65,  112 => 61,  108 => 59,  106 => 58,  103 => 57,  98 => 54,  92 => 52,  86 => 50,  84 => 49,  76 => 47,  74 => 46,  67 => 42,  60 => 40,  51 => 33,  49 => 32,  47 => 31,  44 => 29,  42 => 28,  40 => 27,  38 => 26,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% set isBasicTabValid = productForm.basic.vars.valid %}
{% set isOptionsTabValid = productForm.options.vars.valid %}
{% set isPricingTabValid = productForm.pricing.vars.valid %}
{% set isSEOTabValid = productForm.seo.vars.valid %}

{# Some forms may be removed #}
{% set isStockTabValid = productForm.stock is not defined or productForm.stock.vars.valid %}
{% set isShippingTabValid = productForm.shipping is not defined or productForm.shipping.vars.valid %}

<div class=\"tabs js-tabs\">
  <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
    <i class=\"material-icons hide\">chevron_left</i>
  </div>

  <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    <li id=\"basic-tab-nav\" class=\"nav-item{% if not isBasicTabValid %} has-error{% endif %}\">
      <a href=\"#basic-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link active\">
        {{ 'Basic settings'|trans({}, 'Admin.Catalog.Feature') }}
      </a>
    </li>

    {% if productForm.stock is defined %}
      <li id=\"stock-tab-nav\" class=\"nav-item{% if not isStockTabValid %} has-error{% endif %}\">
        <a href=\"#stock-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
          {% if productType == 'virtual' %}
            {{ 'Virtual product'|trans({}, 'Admin.Catalog.Feature') }}
          {% else %}
            {{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}
          {% endif %}
        </a>
      </li>
    {% endif %}

    {% if productType == 'combinations' %}
      <li id=\"combinations-tab-nav\" class=\"nav-item\">
        <a href=\"#combinations-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
          {{ 'Combinations'|trans({}, 'Admin.Catalog.Feature') }}
        </a>
      </li>
    {% endif %}

    {% if productForm.shipping is defined %}
      <li id=\"shipping-tab-nav\" class=\"nav-item{% if not isShippingTabValid %} has-error{% endif %}\">
        <a href=\"#shipping-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
          {{ 'Shipping'|trans({}, 'Admin.Catalog.Feature') }}
        </a>
      </li>
    {% endif %}

    <li id=\"pricing-tab-nav\" class=\"nav-item{% if not isPricingTabValid %} has-error{% endif %}\">
      <a href=\"#pricing-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
        {{ 'Pricing'|trans({}, 'Admin.Catalog.Feature') }}
      </a>
    </li>

    <li id=\"seo-tab-nav\" class=\"nav-item{% if not isSEOTabValid %} has-error{% endif %}\">
      <a href=\"#seo-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
        {{ 'SEO'|trans({}, 'Admin.Catalog.Feature') }}
      </a>
    </li>

    <li id=\"options-tab-nav\" class=\"nav-item{% if not isOptionsTabValid %} has-error{% endif %}\">
      <a href=\"#options-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
        {{ 'Options'|trans({}, 'Admin.Global') }}
      </a>
    </li>

    {% if hooksarraycontent(extraModulesHooks) is not empty %}
      <li id=\"modules-tab-nav\" class=\"nav-item\">
        <a href=\"#modules-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">
          {{ 'Modules'|trans({}, 'Admin.Catalog.Feature') }}
        </a>
      </li>
    {% endif %}
  </ul>

  <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
    <i class=\"material-icons hide\">chevron_right</i>
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:tabs.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/tabs.html.twig");
    }
}
