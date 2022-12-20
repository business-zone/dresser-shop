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

/* PrestaShopBundle:Admin/Sell/Order/Order/Blocks/Create:summary.html.twig */
class __TwigTemplate_4119b84ad4b00ab91f3914332b57bd600eb09decfd4424f54417eba2d708143f extends \Twig\Template
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
<div class=\"card d-none\" id=\"summary-block\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Summary", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-success d-none\" id=\"js-summary-success-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"alert alert-danger d-none\" id=\"js-summary-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"row\">
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <strong class=\"js-total-products\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total vouchers (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <strong class=\"js-total-discounts\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total shipping (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <strong class=\"js-total-shipping\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total taxes", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <strong class=\"js-total-taxes\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <strong class=\"js-total-without-tax\"></strong>
              </div>
              <div class=\"col text-center\">
                <p class=\"mb-0 text-muted\">
                  <strong>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total (Tax incl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
                </p>
                <span class=\"js-total-with-tax badge rounded badge-dark\"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["summaryForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_place")]);
        echo "
      <div class=\"row mt-3\">
        <div class=\"col col-11\">

          <div id=\"js-order-message-wrap\">
            ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "form_group_row", [0 => $this->getAttribute(($context["summaryForm"] ?? null), "order_message", []), 1 => [], 2 => ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order message", [], "Admin.Orderscustomers.Feature")]], "method"), "html", null, true);
        // line 91
        echo "
          </div>

          ";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "form_group_row", [0 => $this->getAttribute(($context["summaryForm"] ?? null), "payment_module", []), 1 => [], 2 => ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global")]], "method"), "html", null, true);
        // line 96
        echo "

          ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "form_group_row", [0 => $this->getAttribute(($context["summaryForm"] ?? null), "order_state", []), 1 => [], 2 => ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order status", [], "Admin.Orderscustomers.Feature")]], "method"), "html", null, true);
        // line 100
        echo "

          <div class=\"form-group row mt-4\">
            <div class=\"col-sm offset-sm-4\">
              <button class=\"btn btn-primary\" type=\"submit\" id=\"create-order-button\">
                ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
              </button>

              <div class=\"btn-group\">
                <button
                  class=\"btn btn-outline-primary dropdown-toggle\"
                  type=\"button\"
                  id=\"dropdown-menu-actions\"
                  data-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                >
                  ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More actions", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </button>

                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-menu-actions\">
                  <button type=\"button\" class=\"dropdown-item\" id=\"js-send-process-order-email-btn\">
                    ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send pre-filled order to the customer by email", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                  </button>
                  <a class=\"dropdown-item\" id=\"js-process-order-link\" target=\"_blank\">
                    ";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Proceed to checkout in the front office", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                  </a>

                  ";
        // line 128
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderCreateExtraButtons");
        echo "
                </div>
              </div>

              ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["summaryForm"] ?? null), "cart_id", []), 'row', ["attr" => ["class" => "js-place-order-cart-id"]]);
        echo "
            </div>
          </div>
        </div>
      </div>
    ";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["summaryForm"] ?? null), 'form_end');
        echo "

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/Create:summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 137,  184 => 132,  177 => 128,  171 => 125,  165 => 122,  157 => 117,  142 => 105,  135 => 100,  133 => 98,  129 => 96,  127 => 94,  122 => 91,  120 => 89,  112 => 84,  99 => 74,  90 => 68,  81 => 62,  72 => 56,  63 => 50,  54 => 44,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/Create:summary.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig");
    }
}
