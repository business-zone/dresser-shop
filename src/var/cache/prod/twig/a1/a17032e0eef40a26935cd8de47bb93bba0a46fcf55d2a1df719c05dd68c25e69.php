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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Form:features_form_theme.html.twig */
class __TwigTemplate_4d09adf625033c4334ecad5e773c42335dcd4eae7a38d98b75d019b6f83064ad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'features_row' => [$this, 'block_features_row'],
            'feature_value_row' => [$this, 'block_feature_value_row'],
            'collection_row' => [$this, 'block_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:features_form_theme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:features_form_theme.html.twig"));

        // line 26
        $this->displayBlock('features_row', $context, $blocks);
        // line 33
        $this->displayBlock('feature_value_row', $context, $blocks);
        // line 64
        $this->displayBlock('collection_row', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_features_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "features_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "features_row"));

        // line 27
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>

  ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 30
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_feature_value_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_value_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_value_row"));

        // line 34
        echo "<div class=\"form-group row product-feature\">
    <div class=\"col-lg-12 col-xl-3\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "feature_id", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "feature_id", []), 'widget');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "feature_id", []), 'errors');
        echo "
      </fieldset>
    </div>
    <div class=\"col-lg-12 col-xl-4\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "feature_value_id", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "feature_value_id", []), 'widget');
        echo "
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "feature_value_id", []), 'errors');
        echo "
      </fieldset>
    </div>
    <div class=\"col-lg-11 col-xl-4\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "custom_value", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "custom_value_id", []), 'widget');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "custom_value", []), 'widget');
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "custom_value", []), 'errors');
        echo "
      </fieldset>
    </div>
    <div class=\"col-lg-1 col-xl-1\">
      ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", []), 'widget');
        echo "
    </div>
  </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_collection_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        // line 66
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row'), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? $this->getContext($context, "prototype")), "vars", []), "name", [])]);
        // line 67
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-group row feature-values-collection"))]);
        // line 69
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    <div class=\"col-sm\">";
        // line 71
        $this->displayBlock("form_rows", $context, $blocks);
        // line 72
        echo "</div>
  </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:features_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 72,  176 => 71,  171 => 69,  169 => 67,  167 => 66,  158 => 64,  145 => 58,  138 => 54,  134 => 53,  130 => 52,  126 => 51,  118 => 46,  114 => 45,  110 => 44,  102 => 39,  98 => 38,  94 => 37,  89 => 34,  80 => 33,  70 => 30,  68 => 29,  62 => 27,  53 => 26,  43 => 64,  41 => 33,  39 => 26,);
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

{%- block features_row -%}
  <h2>{{ 'Features'|trans({}, 'Admin.Catalog.Feature') }}</h2>

  {{ form_errors(form) }}
  {{- block('form_rows') -}}
{%- endblock -%}

{%- block feature_value_row -%}
  <div class=\"form-group row product-feature\">
    <div class=\"col-lg-12 col-xl-3\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">{{ form.feature_id.vars.label }}</label>
        {{ form_widget(form.feature_id) }}
        {{ form_errors(form.feature_id) }}
      </fieldset>
    </div>
    <div class=\"col-lg-12 col-xl-4\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">{{ form.feature_value_id.vars.label }}</label>
        {{ form_widget(form.feature_value_id) }}
        {{ form_errors(form.feature_value_id) }}
      </fieldset>
    </div>
    <div class=\"col-lg-11 col-xl-4\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">{{ form.custom_value.vars.label }}</label>
        {{ form_widget(form.custom_value_id) }}
        {{ form_widget(form.custom_value) }}
        {{ form_errors(form.custom_value) }}
      </fieldset>
    </div>
    <div class=\"col-lg-1 col-xl-1\">
      {{ form_widget(form.delete) }}
    </div>
  </div>
{%- endblock -%}

{# Override features collection template to remove the label and init the table #}
{%- block collection_row -%}
  {# We put prototype name in a data attribute, so the JS code can get it dynamically #}
  {%- set attr = attr|merge({'data-prototype': form_row(prototype), 'data-prototype-name': prototype.vars.name }) -%}
  {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' form-group row feature-values-collection')|trim }) -%}

  <div {{ block('widget_attributes') }}>
    <div class=\"col-sm\">
      {{- block('form_rows') -}}
    </div>
  </div>
{%- endblock -%}
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:features_form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Form/features_form_theme.html.twig");
    }
}
