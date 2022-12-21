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

/* PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks/View:products.html.twig */
class __TwigTemplate_75cda7900fcd446a334d1fb72a1984d1083d446c36868e728adfdb285ba2db82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks/View:products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks/View:products.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["viewableSupplier"] ?? $this->getContext($context, "viewableSupplier")), "supplierProducts", [])), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["viewableSupplier"] ?? $this->getContext($context, "viewableSupplier")), "supplierProducts", []));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "      <div class=\"card\">
        <div class=\"card-header clearfix\">
          <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
            echo "</a>
        </div>
        <div class=\"card-body\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attribute name", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wholesale price", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "html", null, true);
            echo "</th>
                <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EAN13", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("UPC", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                ";
            // line 47
            if (( !($context["isAllShopContext"] ?? $this->getContext($context, "isAllShopContext")) && ($context["isStockManagementEnabled"] ?? $this->getContext($context, "isStockManagementEnabled")))) {
                // line 48
                echo "                  <th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available quantity", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                ";
            }
            // line 50
            echo "              </tr>
            </thead>
            <tbody>
            ";
            // line 53
            if ( !twig_test_empty($this->getAttribute($context["product"], "combinations", []))) {
                // line 54
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "combinations", []));
                foreach ($context['_seq'] as $context["_key"] => $context["combination"]) {
                    // line 55
                    echo "                  <tr>
                    <td>";
                    // line 56
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["combination"], "attributes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["combination"], "attributes", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 57
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["combination"], "supplier_reference", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["combination"], "supplier_reference", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 58
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["combination"], "wholesale_price", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["combination"], "wholesale_price", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 59
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["combination"], "reference", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["combination"], "reference", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 60
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["combination"], "ean13", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["combination"], "ean13", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 61
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["combination"], "upc", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["combination"], "upc", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    ";
                    // line 62
                    if (( !($context["isAllShopContext"] ?? $this->getContext($context, "isAllShopContext")) && ($context["isStockManagementEnabled"] ?? $this->getContext($context, "isStockManagementEnabled")))) {
                        // line 63
                        echo "                      <td>";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["combination"], "quantity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["combination"], "quantity", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                        echo "</td>
                    ";
                    }
                    // line 65
                    echo "                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "              ";
            } else {
                // line 68
                echo "                <tr>
                  <td>";
                // line 69
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "combinations", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "combinations", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 70
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "supplier_reference", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "supplier_reference", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 71
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "wholesale_price", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "wholesale_price", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 72
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "reference", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "reference", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 73
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "ean13", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "ean13", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 74
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "upc", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "upc", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  ";
                // line 75
                if (( !($context["isAllShopContext"] ?? $this->getContext($context, "isAllShopContext")) && ($context["isStockManagementEnabled"] ?? $this->getContext($context, "isStockManagementEnabled")))) {
                    // line 76
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "quantity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "quantity", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                  ";
                }
                // line 78
                echo "                </tr>
            ";
            }
            // line 80
            echo "            </tbody>
          </table>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    ";
        if (twig_test_empty($this->getAttribute(($context["viewableSupplier"] ?? $this->getContext($context, "viewableSupplier")), "supplierProducts", []))) {
            // line 86
            echo "      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">warning</i></p>
        <p class=\"mb-2\">";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No records found", [], "Admin.Global"), "html", null, true);
            echo "</p>
      </div>
    ";
        }
        // line 91
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks/View:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 91,  215 => 88,  211 => 86,  208 => 85,  198 => 80,  194 => 78,  188 => 76,  186 => 75,  182 => 74,  178 => 73,  174 => 72,  170 => 71,  166 => 70,  162 => 69,  159 => 68,  156 => 67,  149 => 65,  143 => 63,  141 => 62,  137 => 61,  133 => 60,  129 => 59,  125 => 58,  121 => 57,  117 => 56,  114 => 55,  109 => 54,  107 => 53,  102 => 50,  96 => 48,  94 => 47,  90 => 46,  86 => 45,  82 => 44,  78 => 43,  74 => 42,  70 => 41,  59 => 35,  55 => 33,  51 => 32,  45 => 29,  41 => 28,  36 => 25,);
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

<div class=\"card\">
  <h3 class=\"card-header\">
    {{ 'Products'|trans({}, 'Admin.Global') }}
    ({{ viewableSupplier.supplierProducts|length }})
  </h3>
  <div class=\"card-body\">
    {% for product in viewableSupplier.supplierProducts %}
      <div class=\"card\">
        <div class=\"card-header clearfix\">
          <a href=\"{{ path('admin_product_form', {'id': product.id}) }}\">{{ product.name }}</a>
        </div>
        <div class=\"card-body\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>{{ 'Attribute name'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Supplier reference'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Wholesale price'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Reference'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'EAN13'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'UPC'|trans({}, 'Admin.Catalog.Feature') }}</th>
                {% if not isAllShopContext and isStockManagementEnabled %}
                  <th>{{ 'Available quantity'|trans({}, 'Admin.Catalog.Feature') }}</th>
                {% endif %}
              </tr>
            </thead>
            <tbody>
            {% if product.combinations is not empty %}
                {% for combination in product.combinations %}
                  <tr>
                    <td>{{ combination.attributes|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    <td>{{ combination.supplier_reference|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    <td>{{ combination.wholesale_price|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    <td>{{ combination.reference|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    <td>{{ combination.ean13|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    <td>{{ combination.upc|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    {% if not isAllShopContext and isStockManagementEnabled %}
                      <td>{{ combination.quantity|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    {% endif %}
                  </tr>
                {% endfor %}
              {% else %}
                <tr>
                  <td>{{ product.combinations|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  <td>{{ product.supplier_reference|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  <td>{{ product.wholesale_price|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  <td>{{ product.reference|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  <td>{{ product.ean13|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  <td>{{ product.upc|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  {% if not isAllShopContext and isStockManagementEnabled %}
                    <td>{{ product.quantity|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  {% endif %}
                </tr>
            {% endif %}
            </tbody>
          </table>
        </div>
      </div>
    {% endfor %}
    {% if viewableSupplier.supplierProducts is empty %}
      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">warning</i></p>
        <p class=\"mb-2\">{{ 'No records found'|trans({}, 'Admin.Global') }}</p>
      </div>
    {% endif %}
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks/View:products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig");
    }
}
