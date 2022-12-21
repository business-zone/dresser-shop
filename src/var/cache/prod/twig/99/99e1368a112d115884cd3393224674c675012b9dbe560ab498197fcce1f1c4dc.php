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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Form:categories_form_theme.html.twig */
class __TwigTemplate_5ea582619092fb6a01bc8036ebf40d6c0e1ebf24cf4744abc44a315586d00c45 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'product_category_row' => [$this, 'block_product_category_row'],
            'collection_widget' => [$this, 'block_collection_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:categories_form_theme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:categories_form_theme.html.twig"));

        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit_base.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:categories_form_theme.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_product_category_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_category_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_category_row"));

        // line 28
        echo "  <li class=\"category-tree-element\">
    <div class=\"checkbox category-tree-inputs\">
      ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_associated", []), 'widget');
        echo "
      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "is_default", []), 'widget');
        echo "
    </div>
    <ul class=\"children-list\"></ul>
  </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_collection_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 38
        echo "  <div class=\"categories-tree js-categories-container\">
    <fieldset class=\"form-group tree-fieldset d-none\">
      <div class=\"ui-widget\">
        <div class=\"search search-with-icon\">
          <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1 ui-autocomplete-input\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search categories", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" autocomplete=\"off\">
        </div>

        <label class=\"form-control-label text-uppercase\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Associated categories", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>

        <div id=\"categories-tags-container\" class=\"pstaggerTagsWrapper\">
        </div>

        <div class=\"categories-tree-actions js-categories-tree-actions\">
          <span class=\"form-control-label\" id=\"categories-tree-expand\"><i class=\"material-icons\">expand_more</i>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand All", [], "Admin.Actions"), "html", null, true);
        echo "</span>
          <span class=\"form-control-label\" id=\"categories-tree-reduce\"><i class=\"material-icons\">expand_less</i>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse All", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </div>

        <div class=\"category-tree-overflow js-category-tree-overflow\">";
        // line 56
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row'), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? $this->getContext($context, "prototype")), "vars", []), "name", [])]);
        // line 57
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " js-categories-tree category-tree"))]);
        // line 58
        echo "<label class=\"main-category\">
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          </label>
          <ul ";
        // line 61
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 62
        $this->displayBlock("form_rows", $context, $blocks);
        // line 63
        echo "</ul>
        </div>
      </div>
    </fieldset>

    <div class=\"categories-tree-loader\">
      <div class=\"spinner m-auto d-block\"></div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:categories_form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 63,  139 => 62,  136 => 61,  131 => 59,  128 => 58,  126 => 57,  124 => 56,  118 => 52,  114 => 51,  105 => 45,  99 => 42,  93 => 38,  84 => 37,  69 => 31,  65 => 30,  61 => 28,  52 => 27,  30 => 25,);
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
{% extends 'PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit_base.html.twig' %}

{% block product_category_row %}
  <li class=\"category-tree-element\">
    <div class=\"checkbox category-tree-inputs\">
      {{ form_widget(form.is_associated) }}
      {{ form_widget(form.is_default) }}
    </div>
    <ul class=\"children-list\"></ul>
  </li>
{% endblock %}

{% block collection_widget %}
  <div class=\"categories-tree js-categories-container\">
    <fieldset class=\"form-group tree-fieldset d-none\">
      <div class=\"ui-widget\">
        <div class=\"search search-with-icon\">
          <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1 ui-autocomplete-input\" placeholder=\"{{ 'Search categories'|trans({}, 'Admin.Catalog.Help') }}\" autocomplete=\"off\">
        </div>

        <label class=\"form-control-label text-uppercase\">{{ 'Associated categories'|trans({}, 'Admin.Catalog.Feature') }}</label>

        <div id=\"categories-tags-container\" class=\"pstaggerTagsWrapper\">
        </div>

        <div class=\"categories-tree-actions js-categories-tree-actions\">
          <span class=\"form-control-label\" id=\"categories-tree-expand\"><i class=\"material-icons\">expand_more</i>{{ 'Expand All'|trans({}, 'Admin.Actions') }}</span>
          <span class=\"form-control-label\" id=\"categories-tree-reduce\"><i class=\"material-icons\">expand_less</i>{{ 'Collapse All'|trans({}, 'Admin.Actions') }}</span>
        </div>

        <div class=\"category-tree-overflow js-category-tree-overflow\">
          {%- set attr = attr|merge({'data-prototype': form_row(prototype), 'data-prototype-name': prototype.vars.name }) -%}
          {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' js-categories-tree category-tree')|trim }) -%}
          <label class=\"main-category\">
            {{ 'Main category'|trans({}, 'Admin.Catalog.Feature') }}
          </label>
          <ul {{ block('widget_attributes') }}>
            {{- block('form_rows') -}}
          </ul>
        </div>
      </div>
    </fieldset>

    <div class=\"categories-tree-loader\">
      <div class=\"spinner m-auto d-block\"></div>
    </div>
  </div>
{% endblock %}
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:categories_form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Form/categories_form_theme.html.twig");
    }
}
