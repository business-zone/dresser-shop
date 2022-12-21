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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Form:suppliers_form_theme.html.twig */
class __TwigTemplate_7ba26f4a1fe9fda3eefa0505fd2c7b91039ae5ee88e8c9decf8da6d825c2572b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_supplier_row' => [$this, 'block_product_supplier_row'],
            'collection_row' => [$this, 'block_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:suppliers_form_theme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:suppliers_form_theme.html.twig"));

        // line 26
        $this->displayBlock('product_supplier_row', $context, $blocks);
        // line 51
        $this->displayBlock('collection_row', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_product_supplier_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_supplier_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_supplier_row"));

        // line 27
        echo "<tr class=\"product_supplier_row\" id=\"product_supplier_row_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "name", []), "html", null, true);
        echo "\">
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 29
            echo "    ";
            $context["childType"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "block_prefixes", []), 1, []);
            // line 30
            echo "    ";
            if ((($context["childType"] ?? $this->getContext($context, "childType")) != "hidden")) {
                // line 31
                echo "      ";
                // line 32
                echo "      <td>
        ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
                // line 34
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
      </td>
    ";
            } elseif ( !twig_test_empty($this->getAttribute($this->getAttribute(            // line 36
$context["child"], "vars", []), "label", []))) {
                // line 37
                echo "      ";
                // line 38
                echo "      <td class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", []), "name", []), "html", null, true);
                echo "\">
        ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "supplier_name", []), 'widget');
                echo "
        <span class=\"preview\">";
                // line 40
                if ($this->getAttribute($this->getAttribute($context["child"], "vars", []), "value", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", []), "value", []), "html", null, true);
                }
                echo "</span>
      </td>
    ";
            } else {
                // line 43
                echo "      ";
                // line 44
                echo "      ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
    ";
            }
            // line 46
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </tr>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_collection_row($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        // line 52
        echo "<div class=\"form-group product-suppliers-collection-row\">
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 54
        $this->displayBlock("form_alert", $context, $blocks);
        // line 57
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row'), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? $this->getContext($context, "prototype")), "vars", []), "name", [])]);
        // line 58
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
      <div class=\"row\">
        <div class=\"col-sm\">
          <table class=\"table\">
            <thead class=\"thead-default\">
            <tr>
              ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["prototype"] ?? $this->getContext($context, "prototype")), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 65
            echo "                ";
            // line 66
            echo "                ";
            $context["childType"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "block_prefixes", []), 1, []);
            // line 67
            echo "                ";
            if (((($context["childType"] ?? $this->getContext($context, "childType")) != "hidden") ||  !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "vars", []), "label", [])))) {
                // line 68
                echo "                  <th>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", []), "label", []), "html", null, true);
                echo "</th>
                ";
            }
            // line 70
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tr>
            </thead>
            <tbody>";
        // line 74
        $this->displayBlock("form_rows", $context, $blocks);
        // line 75
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
  </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:suppliers_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  191 => 75,  189 => 74,  185 => 71,  179 => 70,  173 => 68,  170 => 67,  167 => 66,  165 => 65,  161 => 64,  151 => 58,  149 => 57,  147 => 54,  145 => 53,  142 => 52,  133 => 51,  123 => 47,  117 => 46,  111 => 44,  109 => 43,  101 => 40,  97 => 39,  92 => 38,  90 => 37,  88 => 36,  83 => 34,  79 => 33,  76 => 32,  74 => 31,  71 => 30,  68 => 29,  64 => 28,  59 => 27,  50 => 26,  40 => 51,  38 => 26,);
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

{%- block product_supplier_row -%}
  <tr class=\"product_supplier_row\" id=\"product_supplier_row_{{ form.vars.name }}\">
  {% for child in form.children %}
    {% set childType = child.vars.block_prefixes.1 %}
    {% if childType != 'hidden' %}
      {# Regular chidlren are displayed thanks to their widget #}
      <td>
        {{ form_widget(child) }}
        {{ form_errors(child) }}
      </td>
    {% elseif child.vars.label is not empty %}
      {# Hidden input with label is displayed, at least its value, with a class allowing to target them #}
      <td class=\"{{ child.vars.name }}\">
        {{ form_widget(form.supplier_name) }}
        <span class=\"preview\">{% if child.vars.value %}{{ child.vars.value }}{% endif %}</span>
      </td>
    {% else %}
      {# Other hidden types are simply added and will be invisible #}
      {{ form_widget(child) }}
    {% endif %}
  {% endfor %}
  </tr>
{%- endblock product_supplier_row -%}

{# Override suppliers collection template to remove the label and init the table #}
{%- block collection_row -%}
  <div class=\"form-group product-suppliers-collection-row\">
    {{ form_label(form) }}
    {{- block('form_alert') -}}

    {# We put prototype name in a data attribute, so the JS code can get it dynamically #}
    {%- set attr = attr|merge({'data-prototype': form_row(prototype), 'data-prototype-name': prototype.vars.name }) -%}
    <div {{ block('widget_attributes') }}>
      <div class=\"row\">
        <div class=\"col-sm\">
          <table class=\"table\">
            <thead class=\"thead-default\">
            <tr>
              {% for child in prototype.children %}
                {# We add column for children that are not hidden type, unless their label is not empty (like supplier_name) #}
                {% set childType = child.vars.block_prefixes.1 %}
                {% if childType != 'hidden' or (child.vars.label is not empty) %}
                  <th>{{ child.vars.label }}</th>
                {% endif %}
              {% endfor %}
            </tr>
            </thead>
            <tbody>
            {{- block('form_rows') -}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
{%- endblock -%}
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:suppliers_form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Form/suppliers_form_theme.html.twig");
    }
}
