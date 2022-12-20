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

/* PrestaShopBundle:Admin/Sell/Order/Order/Blocks/Create:cart.html.twig */
class __TwigTemplate_625b1b06371e34cd4f2c8eb60ff9968848b904f16c4e0bff3354818d496adef1 extends \Twig\Template
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
<div class=\"card d-none\" id=\"cart-block\">
  <h3 class=\"card-header\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</h3>
  <div class=\"card-body\">
    <div class=\"alert alert-danger d-none\" id=\"js-cart-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"row\">
      <div class=\"col-3\">
        <span class=\"float-right\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</span>
      </div>
      <div class=\"col-4\">
        <input id=\"product-search\" type=\"text\" class=\"form-control\">
        <small class=\"form-text\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for an existing product by typing the first letters of its name.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
        </small>
      </div>
    </div>

    <div class=\"row js-no-products-found d-none\">
      <div class=\"col\">
        <div class=\"alert alert-danger\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No products found", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

    <div class=\"row js-searching-products d-none\">
      <div class=\"col\">
        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching for products", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

    <hr class=\"mt-3 mb-3\">

    <div class=\"row\">
      <div class=\"col\">
        <div id=\"product-search-results\" class=\"d-none\">
          <form id=\"js-add-product-form\">

            <div class=\"row js-product-select-row\">
              <div class=\"col-3\">
                <span class=\"float-right\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</span>
              </div>
              <div class=\"col-4\">
                <select name=\"product_id\" id=\"product-select\" class=\"form-control custom-select\" data-customization-label=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customization", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"></select>
              </div>
            </div>

            <div class=\"row mt-3 js-combinations-row d-none\">
              <div class=\"col-3\">
                <span class=\"float-right\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", [], "Admin.Global"), "html", null, true);
        echo "</span>
              </div>
              <div class=\"col-4\">
                <select name=\"combination_id\" id=\"combination-select\" class=\"form-control custom-select\"></select>
              </div>
            </div>

            <div class=\"row mt-3 d-none\" id=\"js-customization-container\">
              <div class=\"col-3\">
                <span class=\"float-right\">
                  ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customization", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </span>
              </div>
              <div class=\"col-4 custom-fields-container\" id=\"js-custom-fields-container\"></div>
            </div>

            <div class=\"row mt-3 js-quantity-row\">
              <div class=\"col-3\">
                <span class=\"float-right\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</span>
              </div>
              <div class=\"col-2\">
                <input name=\"product_quantity\" id=\"quantity-input\" type=\"number\" min=\"1\" value=\"1\" class=\"form-control\">
                ";
        // line 100
        if (($context["stockManagementEnabled"] ?? null)) {
            // line 101
            echo "                  <small class=\"form-text\">
                    ";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In stock", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
                    <span class=\"js-in-stock-counter\"></span>
                  </small>
                ";
        }
        // line 106
        echo "              </div>
            </div>
            <div class=\"row mt-3\">
              <div class=\"col-1 offset-sm-3\">
                <button id=\"add-product-to-cart-btn\" type=\"button\" class=\"btn btn-primary\">
                  ";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add to cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </button>
              </div>
            </div>

          </form>
          <div class=\"row\">
            <div class=\"col\">
              <hr>
            </div>
          </div>
        </div>
        <div class=\"js-no-records-found\"></div>
        <div class=\"row\">
          <div class=\"col\">
            <table id=\"products-table\" class=\"table d-none\">
              <thead>
              <tr>
                <th>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price per unit", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                <th>";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th></th>
              </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
        <div class=\"row js-tax-warning d-none\">
          <div class=\"col-4 offset-sm-3\">
            <div class=\"alert alert-warning\">
              <div class=\"alert-text\">
                ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The prices are without taxes.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-3\">
            <span class=\"float-right\">
              ";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", [], "Admin.Global"), "html", null, true);
        echo "
            </span>
          </div>
          <div class=\"col-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-currency-select\">
              ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["id"]) {
            // line 160
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "            </select>
          </div>
        </div>
        <div class=\"row mt-3\">
          <div class=\"col-3\">
            <span class=\"float-right\">
              ";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "
            </span>
          </div>
          <div class=\"col-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-language-select\">
              ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["id"]) {
            // line 174
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

";
        // line 184
        $context["requiredFieldMarkTemplate"] = ('' === $tmp = "  <span class=\"js-required-field-mark text-danger d-none\">*</span>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 187
        echo "
<script id=\"js-product-custom-text-template\" type=\"text/template\">
  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 191
        echo twig_escape_filter($this->env, ($context["requiredFieldMarkTemplate"] ?? null), "html", null, true);
        echo "
      <label for=\"\" class=\"js-product-custom-input-label\"></label>
      <input name=\"\" type=\"text\" class=\"form-control js-product-custom-input\">
    </div>
  </div>
</script>

<script id=\"js-product-custom-file-template\" type=\"text/template\">
  <div class=\"row mt-3\">
    <div class=\"col\">
      ";
        // line 201
        echo twig_escape_filter($this->env, ($context["requiredFieldMarkTemplate"] ?? null), "html", null, true);
        echo "
      <label for=\"\" class=\"js-product-custom-input-label\"></label>
      <div class=\"custom-file\">
        <input name=\"\" type=\"file\" class=\"custom-file-input js-product-custom-input\">
        <label class=\"custom-file-label\">
          ";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true);
        echo "
        </label>
      </div>
    </div>
  </div>
</script>

<script id=\"products-table-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td><input class=\"form-control js-product-unit-input\" type=\"text\"></td>
    <td>
      <input type=\"number\" min=\"1\" class=\"form-control js-product-qty-input\" style=\"max-width: 100px;";
        // line 223
        if ( !($context["stockManagementEnabled"] ?? null)) {
            echo "margin-top:0px;";
        }
        echo "\">
      ";
        // line 224
        if (($context["stockManagementEnabled"] ?? null)) {
            // line 225
            echo "        <small class=\"form-text\">  
          ";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In stock", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          <span class=\"js-product-qty-stock\"></span>
        </small>
      ";
        }
        // line 230
        echo "    </td>
    <td class=\"js-product-total-price\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-product-remove-btn\">";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remove", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </td>
  </tr>
</script>

<script id=\"products-table-gift-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td>";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
    <td class=\"js-product-gift-qty\"></td>
    <td class=\"js-product-total-price\">";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
    <td></td>
  </tr>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-text-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"></span>
    </small>
  </div>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-file-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"> <img src=\"\" alt=\"\"></span>
    </small>
  </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/Create:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 248,  376 => 246,  360 => 233,  355 => 230,  348 => 226,  345 => 225,  343 => 224,  337 => 223,  317 => 206,  309 => 201,  296 => 191,  290 => 187,  287 => 184,  277 => 176,  266 => 174,  262 => 173,  254 => 168,  246 => 162,  235 => 160,  231 => 159,  223 => 154,  212 => 146,  197 => 134,  193 => 133,  189 => 132,  185 => 131,  181 => 130,  177 => 129,  156 => 111,  149 => 106,  142 => 102,  139 => 101,  137 => 100,  130 => 96,  119 => 88,  106 => 78,  97 => 72,  91 => 69,  74 => 55,  63 => 47,  52 => 39,  44 => 34,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/Create:cart.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig");
    }
}
