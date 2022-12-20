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

/* PrestaShopBundle:Admin/Sell/Catalog/Manufacturer/Blocks/View:products.html.twig */
class __TwigTemplate_628466180c6c08ac53dcacc40b94500e3467bb15d85318c162bd72ee27a521aa extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["viewableManufacturer"] ?? null), "manufacturerProducts", [])), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["viewableManufacturer"] ?? null), "manufacturerProducts", []));
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

          <div class=\"d-inline-block float-right\">
            <div class=\"btn-group-action text-right\">
              <div class=\"btn-group\">
                <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split p-0 no-rotate\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"btn tooltip-link js-submit-row-action dropdown-item\"
                     href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
            echo "\"
                  >
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
            echo "
                  </a>
                  <button class=\"btn tooltip-link js-form-submit-btn dropdown-item\"
                          type=\"button\"
                          data-form-submit-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", ["action" => "delete", "id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
            echo "\"
                          data-form-confirm-message=\"";
            // line 51
            echo twig_escape_filter($this->env, sprintf("%s%s?", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete item #", [], "Admin.International.Feature"), $this->getAttribute($context["product"], "id", [])), "html", null, true);
            echo "\"
                  >
                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          ";
            // line 61
            if ( !twig_test_empty($this->getAttribute($context["product"], "combinations", []))) {
                // line 62
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attribute name", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EAN13", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("UPC", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MPN", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  ";
                // line 70
                if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
                    // line 71
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available quantity", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</th>
                  ";
                }
                // line 73
                echo "                </tr>
              </thead>
              <tbody>
                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "combinations", []));
                foreach ($context['_seq'] as $context["_key"] => $context["combination"]) {
                    // line 77
                    echo "                  <tr>
                    <td>";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "attributes", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "reference", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "ean13", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "upc", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "mpn", []), "html", null, true);
                    echo "</td>
                    ";
                    // line 83
                    if (( !($context["isAllShopContext"] ?? null) && ($context["isStockManagementEnabled"] ?? null))) {
                        // line 84
                        echo "                      <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["combination"], "quantity", []), "html", null, true);
                        echo "</td>
                    ";
                    }
                    // line 86
                    echo "                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "              </tbody>
            </table>
          ";
            } else {
                // line 91
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ref:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EAN13:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("UPC:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MPN:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  ";
                // line 98
                if (($context["isStockManagementEnabled"] ?? null)) {
                    // line 99
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Qty:", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</th>
                  ";
                }
                // line 101
                echo "                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "ean13", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "upc", []), "html", null, true);
                echo "</td>
                  <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "mpn", []), "html", null, true);
                echo "</td>
                  ";
                // line 109
                if (($context["isStockManagementEnabled"] ?? null)) {
                    // line 110
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                    echo "</td>
                  ";
                }
                // line 112
                echo "                </tr>
              </tbody>
            </table>
          ";
            }
            // line 116
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Manufacturer/Blocks/View:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 119,  251 => 116,  245 => 112,  239 => 110,  237 => 109,  233 => 108,  229 => 107,  225 => 106,  221 => 105,  215 => 101,  209 => 99,  207 => 98,  203 => 97,  199 => 96,  195 => 95,  191 => 94,  186 => 91,  181 => 88,  174 => 86,  168 => 84,  166 => 83,  162 => 82,  158 => 81,  154 => 80,  150 => 79,  146 => 78,  143 => 77,  139 => 76,  134 => 73,  128 => 71,  126 => 70,  122 => 69,  118 => 68,  114 => 67,  110 => 66,  106 => 65,  101 => 62,  99 => 61,  88 => 53,  83 => 51,  79 => 50,  72 => 46,  67 => 44,  53 => 35,  49 => 33,  45 => 32,  39 => 29,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Manufacturer/Blocks/View:products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig");
    }
}
