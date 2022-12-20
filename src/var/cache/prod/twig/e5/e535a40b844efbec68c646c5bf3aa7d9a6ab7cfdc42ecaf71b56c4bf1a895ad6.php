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
class __TwigTemplate_dbdf83057d1aee5d4121e391e8edf9153fe810ce61e23925cb9fd7d1cfd76d18 extends \Twig\Template
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
<div class=\"modal fade\" id=\"addOrderProductModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addProductToOrderForm"] ?? null), 'form_start', ["action" => "#"]);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addProductToOrderForm"] ?? null), "product_id", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                  ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "
                </label>

                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductToOrderForm"] ?? null), "product_id", []), 'widget');
        echo "
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addProductToOrderForm"] ?? null), "combination_id", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                  ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", [], "Admin.Global"), "html", null, true);
        echo "
                </label>

                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductToOrderForm"] ?? null), "combination_id", []), 'widget');
        echo "
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addProductToOrderForm"] ?? null), "price_tax_excl", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                  ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price tax excluded", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </label>

                <div class=\"input-group\">
                  ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductToOrderForm"] ?? null), "price_tax_excl", []), 'widget');
        echo "
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "currencyId", []), "html", null, true);
        echo "</span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-group mb-0\">
                <label class=\"form-control-label\" for=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addProductToOrderForm"] ?? null), "price_tax_incl", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                  ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price tax included", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </label>

                <div class=\"input-group\">
                  ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductToOrderForm"] ?? null), "price_tax_incl", []), 'widget');
        echo "
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "currencyId", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addProductToOrderForm"] ?? null), "quantity", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                  ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "
                </label>

                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductToOrderForm"] ?? null), "quantity", []), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addProductToOrderForm"] ?? null), 'form_end');
        echo "
  </div>
</div>
";
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
        return array (  188 => 115,  181 => 111,  175 => 108,  165 => 101,  159 => 98,  155 => 97,  142 => 87,  137 => 85,  130 => 81,  126 => 80,  116 => 73,  111 => 71,  104 => 67,  100 => 66,  89 => 58,  83 => 55,  79 => 54,  68 => 46,  62 => 43,  58 => 42,  47 => 34,  42 => 32,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View/Modal:add_product_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig");
    }
}
