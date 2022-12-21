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

/* PrestaShopBundle:Admin/Sell/Customer/Blocks/View:addresses.html.twig */
class __TwigTemplate_871dd81aaccc5c801640f97761b8cc17d137e818d9fe851f90ed73f21f6a21df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:addresses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:addresses.html.twig"));

        // line 25
        echo "
<div class=\"card customer-addresses-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">location_on</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "addressesInformation", [])), "html", null, true);
        echo "</span>

    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminAddresses", true, ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", []), "addaddress" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", [])]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">add_circle</i>
    </a>
  </h3>

  <div class=\"card-body\">
    ";
        // line 44
        if (($this->getAttribute($this->getAttribute(($context["customerAddressGrid"] ?? $this->getContext($context, "customerAddressGrid")), "data", []), "records_total", []) > 0)) {
            // line 45
            echo "      <div class=\"row\">
        <div class=\"col\">
          ";
            // line 47
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:addresses.html.twig", 47)->display(twig_array_merge($context, ["grid" => ($context["customerAddressGrid"] ?? $this->getContext($context, "customerAddressGrid"))]));
            // line 48
            echo "        </div>
      </div>
    ";
        } else {
            // line 51
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has not registered any addresses yet", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 55
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 55,  85 => 52,  82 => 51,  77 => 48,  75 => 47,  71 => 45,  69 => 44,  59 => 37,  51 => 32,  46 => 30,  42 => 29,  36 => 25,);
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

<div class=\"card customer-addresses-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">location_on</i>
    {{ 'Addresses'|trans({}, 'Admin.Global') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.addressesInformation|length }}</span>

    <a href=\"{{ getAdminLink('AdminAddresses', true, {'id_customer': customerInformation.customerId.value, 'addaddress': 1, 'back': app.request.uri}) }}\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"{{ 'Add'|trans({}, 'Admin.Actions') }}\"
    >
      <i class=\"material-icons\">add_circle</i>
    </a>
  </h3>

  <div class=\"card-body\">
    {% if customerAddressGrid.data.records_total > 0 %}
      <div class=\"row\">
        <div class=\"col\">
          {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': customerAddressGrid} %}
        </div>
      </div>
    {% else %}
      <p class=\"text-muted text-center mb-0\">
        {{ '%firstname% %lastname% has not registered any addresses yet'|trans({'%firstname%': customerInformation.personalInformation.firstName, '%lastname%': customerInformation.personalInformation.lastName}, 'Admin.Orderscustomers.Feature') }}
      </p>
    {% endif %}
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:addresses.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/addresses.html.twig");
    }
}
