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

/* PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View/Modal:add_product_modal.html.twig */
class __TwigTemplate_7cc7bbfaaa4a8144102861de7b68eaae2838b940db31cdc56b824335ad22dde4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View/Modal:add_product_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View/Modal:add_product_modal.html.twig"));

        // line 25
        echo "
<div class=\"modal fade\" id=\"addOrderProductModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), 'form_start', ["action" => "#"]);
        echo "
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), "product_id", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                  ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "
                </label>

                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), "product_id", []), 'widget');
        echo "
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), "combination_id", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                  ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", [], "Admin.Global"), "html", null, true);
        echo "
                </label>

                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), "combination_id", []), 'widget');
        echo "
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), "price_tax_excl", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                  ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price tax excluded", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </label>

                <div class=\"input-group\">
                  ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), "price_tax_excl", []), 'widget');
        echo "
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "currencyId", []), "html", null, true);
        echo "</span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-group mb-0\">
                <label class=\"form-control-label\" for=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), "price_tax_incl", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                  ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price tax included", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </label>

                <div class=\"input-group\">
                  ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), "price_tax_incl", []), 'widget');
        echo "
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "currencyId", []), "html", null, true);
        echo "</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), "quantity", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                  ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "
                </label>

                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), "quantity", []), 'widget');
        echo "
              </div>
            </div>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
            ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addProductToOrderForm"] ?? $this->getContext($context, "addProductToOrderForm")), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View/Modal:add_product_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 115,  187 => 111,  181 => 108,  171 => 101,  165 => 98,  161 => 97,  148 => 87,  143 => 85,  136 => 81,  132 => 80,  122 => 73,  117 => 71,  110 => 67,  106 => 66,  95 => 58,  89 => 55,  85 => 54,  74 => 46,  68 => 43,  64 => 42,  53 => 34,  48 => 32,  41 => 28,  36 => 25,);
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

<div class=\"modal fade\" id=\"addOrderProductModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    {{ form_start(addProductToOrderForm, {'action': '#'}) }}
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">
            {{ 'Add a product'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ 'Close'|trans({}, 'Admin.Actions') }}\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"{{ addProductToOrderForm.product_id.vars.id }}\">
                  {{ 'Product'|trans({}, 'Admin.Global') }}
                </label>

                {{ form_widget(addProductToOrderForm.product_id) }}
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"{{ addProductToOrderForm.combination_id.vars.id }}\">
                  {{ 'Combination'|trans({}, 'Admin.Global') }}
                </label>

                {{ form_widget(addProductToOrderForm.combination_id) }}
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"{{ addProductToOrderForm.price_tax_excl.vars.id }}\">
                  {{ 'Price tax excluded'|trans({}, 'Admin.Advparameters.Feature') }}
                </label>

                <div class=\"input-group\">
                  {{ form_widget(addProductToOrderForm.price_tax_excl) }}
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">{{ orderForViewing.currencyId }}</span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-group mb-0\">
                <label class=\"form-control-label\" for=\"{{ addProductToOrderForm.price_tax_incl.vars.id }}\">
                  {{ 'Price tax included'|trans({}, 'Admin.Advparameters.Feature') }}
                </label>

                <div class=\"input-group\">
                  {{ form_widget(addProductToOrderForm.price_tax_incl) }}
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">{{ orderForViewing.currencyId }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"{{ addProductToOrderForm.quantity.vars.id }}\">
                  {{ 'Quantity'|trans({}, 'Admin.Global') }}
                </label>

                {{ form_widget(addProductToOrderForm.quantity) }}
              </div>
            </div>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
            {{ 'Cancel'|trans({}, 'Admin.Actions') }}
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            {{ 'Add'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    {{ form_end(addProductToOrderForm) }}
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View/Modal:add_product_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig");
    }
}
