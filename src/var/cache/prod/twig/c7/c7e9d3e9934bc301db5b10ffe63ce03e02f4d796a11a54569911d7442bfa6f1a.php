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

/* PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:customer_information.html.twig */
class __TwigTemplate_ca6c47f9604072e37afb5976cb38188ed4d0b30744b6c8fac2d024ff3c72c917 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:customer_information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:customer_information.html.twig"));

        // line 25
        echo "
<div class=\"row mt-4\">
  <div class=\"col\">
    <div class=\"media\">
      ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "customerId", [])) {
            // line 30
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "customerId", [])]), "html", null, true);
            echo "\">
          <i class=\"material-icons thread-customer-icon\">
            person
          </i>
        </a>
      ";
        } else {
            // line 36
            echo "        <i class=\"material-icons thread-customer-icon\">
          person
        </i>
      ";
        }
        // line 40
        echo "
      <div class=\"media-body\">
        <h2 class=\"mt-0 mb-0\">
          ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "firstName", [])) {
            // line 44
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "customerId", [])]), "html", null, true);
            echo "\">
              ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "firstName", []), "html", null, true);
            echo "
              ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "lastName", []), "html", null, true);
            echo "
              <small class=\"text-muted\">(";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "email", []), "html", null, true);
            echo ")</small>
            </a>
          ";
        } else {
            // line 50
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "email", []), "html", null, true);
            echo "
          ";
        }
        // line 52
        echo "        </h2>
        <p>
          ";
        // line 54
        if ( !twig_test_empty($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "contactName", []))) {
            // line 55
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            <span class=\"badge badge-primary rounded\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "contactName", []), "html", null, true);
            echo "</span>
          ";
        }
        // line 58
        echo "        </p>
      </div>

    </div>
  </div>
  <div class=\"col\">
    ";
        // line 64
        if ($this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "validatedOrdersCount", [])) {
            // line 65
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1]%count%[/1] order(s) validated for a total amount of [2]%total%[/2]", ["%count%" => $this->getAttribute($this->getAttribute(            // line 66
($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "validatedOrdersCount", []), "%total%" => $this->getAttribute($this->getAttribute(            // line 67
($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "validatedOrdersAmount", []), "[1]" => "<span class=\"badge badge-primary rounded\">", "[/1]" => "</span>", "[2]" => "<span class=\"badge badge-success rounded\">", "[/2]" => "</span>"], "Admin.Orderscustomers.Feature");
            // line 72
            echo "
    ";
        } else {
            // line 74
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No order validated for the moment. By default, an order is considered validated when its payment is accepted.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
    ";
        }
        // line 76
        echo "
    <p class=\"text-muted\">
      ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer since: %s", ["%s" => $this->getAttribute($this->getAttribute(        // line 79
($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "customerSinceDate", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
        // line 81
        echo "
    </p>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:customer_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 81,  138 => 79,  137 => 78,  133 => 76,  127 => 74,  123 => 72,  121 => 67,  120 => 66,  118 => 65,  116 => 64,  108 => 58,  103 => 56,  98 => 55,  96 => 54,  92 => 52,  86 => 50,  80 => 47,  76 => 46,  72 => 45,  67 => 44,  65 => 43,  60 => 40,  54 => 36,  44 => 30,  42 => 29,  36 => 25,);
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

<div class=\"row mt-4\">
  <div class=\"col\">
    <div class=\"media\">
      {% if customerThreadView.customerInformation.customerId %}
        <a href=\"{{ path('admin_customers_view', {'customerId': customerThreadView.customerInformation.customerId}) }}\">
          <i class=\"material-icons thread-customer-icon\">
            person
          </i>
        </a>
      {% else %}
        <i class=\"material-icons thread-customer-icon\">
          person
        </i>
      {% endif %}

      <div class=\"media-body\">
        <h2 class=\"mt-0 mb-0\">
          {% if customerThreadView.customerInformation.firstName %}
            <a href=\"{{ path('admin_customers_view', {'customerId': customerThreadView.customerInformation.customerId}) }}\">
              {{ customerThreadView.customerInformation.firstName }}
              {{ customerThreadView.customerInformation.lastName }}
              <small class=\"text-muted\">({{ customerThreadView.customerInformation.email }})</small>
            </a>
          {% else %}
            {{ customerThreadView.customerInformation.email }}
          {% endif %}
        </h2>
        <p>
          {% if customerThreadView.contactName is not empty %}
            {{ 'To:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            <span class=\"badge badge-primary rounded\">{{ customerThreadView.contactName }}</span>
          {% endif %}
        </p>
      </div>

    </div>
  </div>
  <div class=\"col\">
    {% if customerThreadView.customerInformation.validatedOrdersCount %}
      {{ '[1]%count%[/1] order(s) validated for a total amount of [2]%total%[/2]'|trans({
        '%count%': customerThreadView.customerInformation.validatedOrdersCount,
        '%total%': customerThreadView.customerInformation.validatedOrdersAmount,
        '[1]': '<span class=\"badge badge-primary rounded\">',
        '[/1]': '</span>',
        '[2]': '<span class=\"badge badge-success rounded\">',
        '[/2]': '</span>'
      }, 'Admin.Orderscustomers.Feature')|raw }}
    {% else %}
      {{ 'No order validated for the moment. By default, an order is considered validated when its payment is accepted.'|trans({}, 'Admin.Orderscustomers.Feature') }}
    {% endif %}

    <p class=\"text-muted\">
      {{ 'Customer since: %s'|trans(
        {'%s': customerThreadView.customerInformation.customerSinceDate},
        'Admin.Orderscustomers.Feature'
      ) }}
    </p>
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:customer_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig");
    }
}
