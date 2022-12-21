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
class __TwigTemplate_d82481187610c6ae32bbb2b1574c7357e9f2b0b6f3e9ee2f777d5a8905f78280 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:linked_orders.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:linked_orders.html.twig"));

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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "linkedOrders", []), "linkedOrders", [])), "html", null, true);
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
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "linkedOrders", []), "linkedOrders", []))) {
            // line 52
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "linkedOrders", []), "linkedOrders", []));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  131 => 73,  128 => 72,  118 => 68,  113 => 66,  107 => 63,  101 => 60,  94 => 56,  90 => 55,  86 => 53,  81 => 52,  79 => 51,  70 => 45,  64 => 42,  58 => 39,  46 => 30,  42 => 29,  36 => 25,);
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

<div class=\"card\" id=\"linkedOrdersPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      {{ 'Linked orders'|trans({}, 'Admin.Orderscustomers.Feature') }}
      <span class=\"badge badge-primary rounded\">{{ orderForViewing.linkedOrders.linkedOrders|length }}</span>
    </h3>
  </div>

  <div class=\"card-body\">
    <table class=\"table mb-3\">
      <thead>
      <tr>
        <th>
          {{ 'Order ID'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </th>
        <th>
          {{ 'Status'|trans({}, 'Admin.Global') }}
        </th>
        <th>
          {{ 'Amount'|trans({}, 'Admin.Global') }}
        </th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      {% if orderForViewing.linkedOrders.linkedOrders is not empty %}
      {% for linkedOrder in orderForViewing.linkedOrders.linkedOrders %}
      <tr>
        <td>
          <a class=\"_blank\" href=\"{{ path('admin_orders_view', {'orderId': linkedOrder.orderId}) }}\">
            {{ linkedOrder.orderId }}
          </a>
        </td>
        <td>
          {{ linkedOrder.statusName }}
        </td>
        <td>
          {{ linkedOrder.amount }}
        </td>
        <td>
          <a class=\"_blank\" href=\"{{ path('admin_orders_view', {'orderId': linkedOrder.orderId}) }}\">
            <i class=\"material-icons\">remove_red_eye</i>
            {{ 'View order'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </a>
        </td>
        {% endfor %}
        {% endif %}
      </tbody>
    </table>
  </div>
", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:linked_orders.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig");
    }
}
