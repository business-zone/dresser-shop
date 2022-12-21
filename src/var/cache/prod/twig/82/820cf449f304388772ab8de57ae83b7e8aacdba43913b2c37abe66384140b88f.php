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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig */
class __TwigTemplate_747ce7472c8e73b680dad68d0976abe7f8ef088cf7c118a94136d7364b53c636 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'combination_list_row' => [$this, 'block_combination_list_row'],
            'combination_item_row' => [$this, 'block_combination_item_row'],
            'collection_row' => [$this, 'block_collection_row'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig"));

        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_combination_list_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_list_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_list_row"));

        // line 28
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 29
        $this->displayBlock("form_rows", $context, $blocks);
        // line 30
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_combination_item_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_item_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_item_row"));

        // line 34
        echo "<tr id=\"combination-list-row-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "name", []), "html", null, true);
        echo "\" class=\"combination\">
    <td>
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_selected", []), 'widget');
        echo "
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "combination_id", []), 'widget');
        echo "
    </td>
    <td>
      <img class=\"combination-image\" src=\"\" alt=\"\">
    </td>
    <td>
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'widget');
        echo "
    </td>
    <td>
      ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", []), 'widget');
        echo "
    </td>
    <td>
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "impact_on_price", []), 'widget');
        echo "
    </td>
    <td>
      ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "final_price_te", []), 'widget');
        echo "
    </td>
    <td>
      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", []), 'widget');
        echo "
      ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", []), 'errors');
        echo "
    </td>
    <td>
      ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_default", []), 'widget');
        echo "
      ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_default", []), 'errors');
        echo "
    </td>
    <td class=\"combination-actions\">
      ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "edit", []), 'widget');
        echo "
      ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", []), 'widget');
        echo "
    </td>
  </tr>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_collection_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        // line 70
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig", 70)->unwrap();
        // line 72
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row'), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? $this->getContext($context, "prototype")), "vars", []), "name", [])]);
        // line 73
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " grid-table table grid-ordering-column"))]);
        // line 74
        echo "<table ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    <thead class=\"thead-default\">
    <tr class=\"column-headers\">
      <th scope=\"col\">
        ";
        // line 78
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "id_product_attribute");
        echo "
      </th>
      <th scope=\"col\"></th>
      <th scope=\"col\">
        ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", [], "Admin.Global"), "html", null, true);
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 85
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "reference");
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 88
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact on price (tax excl.)", [], "Admin.Catalog.Feature"), "price");
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 94
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "stock_quantity");
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 97
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default combination", [], "Admin.Catalog.Feature"), "default_on");
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
      </th>
    </tr>
    </thead>
    <tbody>";
        // line 105
        $this->displayBlock("form_rows", $context, $blocks);
        // line 106
        echo "</tbody>
  </table>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 106,  240 => 105,  233 => 100,  227 => 97,  221 => 94,  215 => 91,  209 => 88,  203 => 85,  197 => 82,  190 => 78,  182 => 74,  180 => 73,  178 => 72,  176 => 70,  167 => 69,  154 => 64,  150 => 63,  144 => 60,  140 => 59,  134 => 56,  130 => 55,  124 => 52,  118 => 49,  112 => 46,  106 => 43,  97 => 37,  93 => 36,  87 => 34,  78 => 33,  68 => 30,  66 => 29,  62 => 28,  53 => 27,  31 => 25,);
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
{% extends 'PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig' %}

{%- block combination_list_row -%}
  <div {{ block('widget_attributes') }}>
    {{- block('form_rows') -}}
  </div>
{%- endblock -%}

{%- block combination_item_row -%}
  <tr id=\"combination-list-row-{{ form.vars.name }}\" class=\"combination\">
    <td>
      {{ form_widget(form.is_selected) }}
      {{ form_widget(form.combination_id) }}
    </td>
    <td>
      <img class=\"combination-image\" src=\"\" alt=\"\">
    </td>
    <td>
      {{ form_widget(form.name) }}
    </td>
    <td>
      {{ form_widget(form.reference) }}
    </td>
    <td>
      {{ form_widget(form.impact_on_price) }}
    </td>
    <td>
      {{ form_widget(form.final_price_te) }}
    </td>
    <td>
      {{ form_widget(form.quantity) }}
      {{ form_errors(form.quantity) }}
    </td>
    <td>
      {{ form_widget(form.is_default) }}
      {{ form_errors(form.is_default) }}
    </td>
    <td class=\"combination-actions\">
      {{ form_widget(form.edit) }}
      {{ form_widget(form.delete) }}
    </td>
  </tr>
{%- endblock -%}

{%- block collection_row -%}
  {% import '@PrestaShop/Admin/macros.html.twig' as ps %}

  {%- set attr = attr|merge({'data-prototype': form_row(prototype), 'data-prototype-name': prototype.vars.name }) -%}
  {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' grid-table table grid-ordering-column')|trim }) -%}
  <table {{ block('widget_attributes') }}>
    <thead class=\"thead-default\">
    <tr class=\"column-headers\">
      <th scope=\"col\">
        {{ ps.sortable_column_header('ID'|trans({}, 'Admin.Global'), 'id_product_attribute') }}
      </th>
      <th scope=\"col\"></th>
      <th scope=\"col\">
        {{ 'Combination'|trans({}, 'Admin.Global') }}
      </th>
      <th scope=\"col\">
        {{ ps.sortable_column_header('Reference'|trans({}, 'Admin.Global'), 'reference') }}
      </th>
      <th scope=\"col\">
        {{ ps.sortable_column_header('Impact on price (tax excl.)'|trans({}, 'Admin.Catalog.Feature'), 'price') }}
      </th>
      <th scope=\"col\">
        {{ 'Final price (tax excl.)'|trans({}, 'Admin.Catalog.Feature') }}
      </th>
      <th scope=\"col\">
        {{ ps.sortable_column_header('Quantity'|trans({}, 'Admin.Global'), 'stock_quantity') }}
      </th>
      <th scope=\"col\">
        {{ ps.sortable_column_header('Default combination'|trans({}, 'Admin.Catalog.Feature'), 'default_on') }}
      </th>
      <th scope=\"col\">
        {{ 'Actions'|trans({}, 'Admin.Global') }}
      </th>
    </tr>
    </thead>
    <tbody>
    {{- block('form_rows') -}}
    </tbody>
  </table>
{%- endblock -%}

", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Form/combination_listing_form_theme.html.twig");
    }
}
