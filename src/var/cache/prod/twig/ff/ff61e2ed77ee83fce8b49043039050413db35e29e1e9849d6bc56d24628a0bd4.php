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

/* PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:linked_orders.html.twig */
class __TwigTemplate_fadb8b4d65cc5ce56f854ecee56a3d98054324913cdbafcedbc6edf5af2090b2 extends \Twig\Template
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
<div class=\"card\" id=\"linkedOrdersPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Linked orders", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "linkedOrders", []), "linkedOrders", [])), "html", null, true);
        echo "</span>
    </h3>
  </div>

  <div class=\"card-body\">
    <table class=\"table mb-3\">
      <thead>
      <tr>
        <th>
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order ID", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </th>
        <th>
          ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "
        </th>
        <th>
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "
        </th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 51
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "linkedOrders", []), "linkedOrders", []))) {
            // line 52
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "linkedOrders", []), "linkedOrders", []));
            foreach ($context['_seq'] as $context["_key"] => $context["linkedOrder"]) {
                // line 53
                echo "      <tr>
        <td>
          <a class=\"_blank\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute($context["linkedOrder"], "orderId", [])]), "html", null, true);
                echo "\">
            ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["linkedOrder"], "orderId", []), "html", null, true);
                echo "
          </a>
        </td>
        <td>
          ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["linkedOrder"], "statusName", []), "html", null, true);
                echo "
        </td>
        <td>
          ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["linkedOrder"], "amount", []), "html", null, true);
                echo "
        </td>
        <td>
          <a class=\"_blank\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute($context["linkedOrder"], "orderId", [])]), "html", null, true);
                echo "\">
            <i class=\"material-icons\">remove_red_eye</i>
            ";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
          </a>
        </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkedOrder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        ";
        }
        // line 73
        echo "      </tbody>
    </table>
  </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:linked_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 73,  122 => 72,  112 => 68,  107 => 66,  101 => 63,  95 => 60,  88 => 56,  84 => 55,  80 => 53,  75 => 52,  73 => 51,  64 => 45,  58 => 42,  52 => 39,  40 => 30,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:linked_orders.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig");
    }
}
