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
class __TwigTemplate_9dd7f2c24e8a32bf46e49f8b1e777a59a26c9638981cd3373be66601a4948322 extends \Twig\Template
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
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["viewableSupplier"] ?? null), "supplierProducts", [])), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["viewableSupplier"] ?? null), "supplierProducts", []));
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
            if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
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
                    if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
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
                if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
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
        if (twig_test_empty($this->getAttribute(($context["viewableSupplier"] ?? null), "supplierProducts", []))) {
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
        return array (  215 => 91,  209 => 88,  205 => 86,  202 => 85,  192 => 80,  188 => 78,  182 => 76,  180 => 75,  176 => 74,  172 => 73,  168 => 72,  164 => 71,  160 => 70,  156 => 69,  153 => 68,  150 => 67,  143 => 65,  137 => 63,  135 => 62,  131 => 61,  127 => 60,  123 => 59,  119 => 58,  115 => 57,  111 => 56,  108 => 55,  103 => 54,  101 => 53,  96 => 50,  90 => 48,  88 => 47,  84 => 46,  80 => 45,  76 => 44,  72 => 43,  68 => 42,  64 => 41,  53 => 35,  49 => 33,  45 => 32,  39 => 29,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks/View:products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig");
    }
}
