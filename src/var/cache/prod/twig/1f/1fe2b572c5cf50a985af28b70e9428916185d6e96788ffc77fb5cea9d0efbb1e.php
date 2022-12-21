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

/* PrestaShopBundle:Admin/Sell/Catalog/CatalogPriceRule/Blocks:form.html.twig */
class __TwigTemplate_41ff8de11833e2b49db44883a5c4e9ae7d6dd435f1c8f1eb1a98584ebf72a0d4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'catalog_price_rule_form_rest' => [$this, 'block_catalog_price_rule_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/CatalogPriceRule/Blocks:form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/CatalogPriceRule/Blocks:form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/CatalogPriceRule/Blocks:form.html.twig", 26)->unwrap();
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), 'form_start');
        echo "
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), 'errors');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">attach_money</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catalog price rules", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global")]);
        // line 38
        echo "

      ";
        // line 40
        if ($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "id_shop", [], "any", true, true)) {
            // line 41
            echo "        ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "id_shop", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "Admin.Global")]);
            // line 43
            echo "
      ";
        }
        // line 45
        echo "
      ";
        // line 46
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "id_currency", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", [], "Admin.Global")]);
        // line 48
        echo "

      ";
        // line 50
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "id_country", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", [], "Admin.Global")]);
        // line 52
        echo "

      ";
        // line 54
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "id_group", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", [], "Admin.Global")]);
        // line 56
        echo "

      ";
        // line 58
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "from_quantity", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From quantity", [], "Admin.Catalog.Feature")]);
        // line 60
        echo "

      ";
        // line 62
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "price", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", [], "Admin.Catalog.Feature")]);
        // line 64
        echo "

      ";
        // line 66
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "leave_initial_price", []), [], ["label" => ""]);
        echo "

      ";
        // line 68
        echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "date_range", []), "from", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", [], "Admin.Global")]);
        // line 70
        echo "

      ";
        // line 72
        echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "date_range", []), "to", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", [], "Admin.Global")]);
        // line 74
        echo "

      ";
        // line 76
        echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "reduction", []), "type", []), ["attr" => ["class" => "js-reduction-type-source"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reduction type", [], "Admin.Catalog.Feature")]);
        // line 78
        echo "

      <div class=\"js-include-tax-target\">
        ";
        // line 81
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "include_tax", []), ["attr" => ["class" => "js-include-tax-target"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reduction with or without taxes", [], "Admin.Catalog.Feature")]);
        // line 83
        echo "
      </div>

      ";
        // line 86
        echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), "reduction", []), "value", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reduction", [], "Admin.Catalog.Feature")]);
        // line 88
        echo "

      ";
        // line 90
        $this->displayBlock('catalog_price_rule_form_rest', $context, $blocks);
        // line 93
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_catalog_price_rules_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 90
    public function block_catalog_price_rule_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_price_rule_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_price_rule_form_rest"));

        // line 91
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["catalogPriceRuleForm"] ?? $this->getContext($context, "catalogPriceRuleForm")), 'rest');
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/CatalogPriceRule/Blocks:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 91,  181 => 90,  169 => 104,  162 => 100,  156 => 97,  152 => 96,  147 => 93,  145 => 90,  141 => 88,  139 => 86,  134 => 83,  132 => 81,  127 => 78,  125 => 76,  121 => 74,  119 => 72,  115 => 70,  113 => 68,  108 => 66,  104 => 64,  102 => 62,  98 => 60,  96 => 58,  92 => 56,  90 => 54,  86 => 52,  84 => 50,  80 => 48,  78 => 46,  75 => 45,  71 => 43,  68 => 41,  66 => 40,  62 => 38,  60 => 36,  53 => 32,  46 => 28,  42 => 27,  40 => 26,  37 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}
{{ form_start(catalogPriceRuleForm) }}
{{ form_errors(catalogPriceRuleForm) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">attach_money</i>
    {{ 'Catalog price rules'|trans({}, 'Admin.Catalog.Feature') }}
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      {{ ps.form_group_row(catalogPriceRuleForm.name, {}, {
        'label': 'Name'|trans({}, 'Admin.Global'),
      }) }}

      {% if catalogPriceRuleForm.id_shop is defined %}
        {{ ps.form_group_row(catalogPriceRuleForm.id_shop, {}, {
          'label': 'Shop'|trans({}, 'Admin.Global')
        }) }}
      {% endif %}

      {{ ps.form_group_row(catalogPriceRuleForm.id_currency, {}, {
        'label': 'Currency'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.id_country, {}, {
        'label': 'Country'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.id_group, {}, {
        'label': 'Group'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.from_quantity, {}, {
        'label': 'From quantity'|trans({}, 'Admin.Catalog.Feature'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.price, {}, {
        'label': 'Price (tax excl.)'|trans({}, 'Admin.Catalog.Feature'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.leave_initial_price, {}, {'label': ''}) }}

      {{ ps.form_group_row(catalogPriceRuleForm.date_range.from, {}, {
        'label': 'From'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.date_range.to, {}, {
        'label': 'To'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.reduction.type, {'attr': {'class': 'js-reduction-type-source'}}, {
        'label': 'Reduction type'|trans({}, 'Admin.Catalog.Feature'),
      }) }}

      <div class=\"js-include-tax-target\">
        {{ ps.form_group_row(catalogPriceRuleForm.include_tax, {'attr': {'class': 'js-include-tax-target'}}, {
          'label': 'Reduction with or without taxes'|trans({}, 'Admin.Catalog.Feature'),
        }) }}
      </div>

      {{ ps.form_group_row(catalogPriceRuleForm.reduction.value, {}, {
        'label': 'Reduction'|trans({}, 'Admin.Catalog.Feature'),
      }) }}

      {% block catalog_price_rule_form_rest %}
        {{ form_rest(catalogPriceRuleForm) }}
      {% endblock %}
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_catalog_price_rules_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\">
      {{ 'Save'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
</div>
{{ form_end(catalogPriceRuleForm) }}
", "PrestaShopBundle:Admin/Sell/Catalog/CatalogPriceRule/Blocks:form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig");
    }
}
