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

/* PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_messages.html.twig */
class __TwigTemplate_95ea5928fa432c27c502639a338aade762b40ffccb6176c9ea818b94d8a2130f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_messages.html.twig"));

        // line 25
        echo "
<div class=\"row\">
  <div class=\"col\">
    <ul class=\"list-unstyled ml-5\">
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "messages", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "        ";
            if ( !$this->getAttribute($context["loop"], "first", [])) {
                // line 31
                echo "          <li>
            <hr class=\"mb-3 mt-0\">
          </li>
        ";
            }
            // line 35
            echo "
        <li class=\"media\">
          ";
            // line 37
            if (($this->getAttribute($context["message"], "type", []) == "customer")) {
                // line 38
                echo "            <i class=\"material-icons thread-message-icon\">person</i>
          ";
            } else {
                // line 40
                echo "            <img class=\"rounded-circle thread-message-employee-image\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "employeeImage", []), "html", null, true);
                echo "\">
          ";
            }
            // line 42
            echo "
          <div class=\"media-body ml-2\">
            <h4 class=\"mt-0 mb-1\">
              <i class=\"material-icons text-muted\">reply</i>

              ";
            // line 47
            if (($this->getAttribute($context["message"], "type", []) == twig_constant("PrestaShop\\PrestaShop\\Core\\Domain\\CustomerService\\ValueObject\\CustomerThreadMessageType::CUSTOMER"))) {
                // line 48
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "customerName", []), "html", null, true);
                echo "
              ";
            } else {
                // line 50
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "employeeName", []), "html", null, true);
                echo "
              ";
            }
            // line 52
            echo "
              <span class=\"text-muted\">
                <i class=\"material-icons text-muted font-16\">calendar_today</i>
                -
                ";
            // line 56
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('format_date')->getCallable(), [$this->getAttribute($context["message"], "date", [])]), "html", null, true);
            echo "
                <i class=\"material-icons text-muted font-16\">access_time</i>
                -
                ";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", []), "H:i"), "html", null, true);
            echo "
              </span>

              ";
            // line 62
            if ($this->getAttribute($context["message"], "attachmentFile", [])) {
                // line 63
                echo "                <i class=\"material-icons font-16\">attachment</i>
                <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "attachmentFile", []), "html", null, true);
                echo "\" target=\"_blank\">
                  ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attachment", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "
                </a>
              ";
            }
            // line 68
            echo "
              ";
            // line 69
            if ($this->getAttribute($context["message"], "productId", [])) {
                // line 70
                echo "                <i class=\"material-icons font-16\">library_books</i>
                <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["message"], "productId", [])]), "html", null, true);
                echo "\">
                  ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
                echo "
                  ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "productName", []), "html", null, true);
                echo "
                </a>
              ";
            }
            // line 76
            echo "            </h4>
            <p class=\"pl-2 thread-message\">";
            // line 77
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", []), "html", null, true));
            echo "</p>
          </div>
        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </ul>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  163 => 77,  160 => 76,  154 => 73,  150 => 72,  146 => 71,  143 => 70,  141 => 69,  138 => 68,  132 => 65,  128 => 64,  125 => 63,  123 => 62,  117 => 59,  111 => 56,  105 => 52,  99 => 50,  93 => 48,  91 => 47,  84 => 42,  78 => 40,  74 => 38,  72 => 37,  68 => 35,  62 => 31,  59 => 30,  42 => 29,  36 => 25,);
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

<div class=\"row\">
  <div class=\"col\">
    <ul class=\"list-unstyled ml-5\">
      {% for message in customerThreadView.messages %}
        {% if not loop.first %}
          <li>
            <hr class=\"mb-3 mt-0\">
          </li>
        {% endif %}

        <li class=\"media\">
          {% if message.type == 'customer' %}
            <i class=\"material-icons thread-message-icon\">person</i>
          {% else %}
            <img class=\"rounded-circle thread-message-employee-image\" src=\"{{ message.employeeImage }}\">
          {% endif %}

          <div class=\"media-body ml-2\">
            <h4 class=\"mt-0 mb-1\">
              <i class=\"material-icons text-muted\">reply</i>

              {% if message.type == constant('PrestaShop\\\\PrestaShop\\\\Core\\\\Domain\\\\CustomerService\\\\ValueObject\\\\CustomerThreadMessageType::CUSTOMER') %}
                {{ message.customerName }}
              {% else %}
                {{ message.employeeName }}
              {% endif %}

              <span class=\"text-muted\">
                <i class=\"material-icons text-muted font-16\">calendar_today</i>
                -
                {{ format_date(message.date) }}
                <i class=\"material-icons text-muted font-16\">access_time</i>
                -
                {{ message.date|date('H:i') }}
              </span>

              {% if message.attachmentFile %}
                <i class=\"material-icons font-16\">attachment</i>
                <a href=\"{{ message.attachmentFile }}\" target=\"_blank\">
                  {{ 'Attachment'|trans({}, 'Admin.Catalog.Feature') }}
                </a>
              {% endif %}

              {% if message.productId %}
                <i class=\"material-icons font-16\">library_books</i>
                <a href=\"{{ path('admin_product_form', {'id': message.productId}) }}\">
                  {{ 'Product'|trans({}, 'Admin.Global') }}
                  {{ message.productName }}
                </a>
              {% endif %}
            </h4>
            <p class=\"pl-2 thread-message\">{{ message.message|nl2br }}</p>
          </div>
        </li>
      {% endfor %}
    </ul>
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_messages.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig");
    }
}
