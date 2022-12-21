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

/* PrestaShopBundle:Admin/Sell/Customer/Blocks/View:discounts.html.twig */
class __TwigTemplate_2585055aaeb4b108d59b809bdb177d42882393a42abbd81fee26508ea1e8f8ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:discounts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:discounts.html.twig"));

        // line 25
        echo "
<div class=\"card customer-discounts-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">loyalty</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vouchers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "discountsInformation", [])), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 33
        if (($this->getAttribute($this->getAttribute(($context["customerDiscountGrid"] ?? $this->getContext($context, "customerDiscountGrid")), "data", []), "records_total", []) > 0)) {
            // line 34
            echo "      <div class=\"row\">
        <div class=\"col\">
          ";
            // line 36
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:discounts.html.twig", 36)->display(twig_array_merge($context, ["grid" => ($context["customerDiscountGrid"] ?? $this->getContext($context, "customerDiscountGrid"))]));
            // line 37
            echo "        </div>
      </div>
    ";
        } else {
            // line 40
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has no discount vouchers", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 44
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:discounts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 44,  68 => 41,  65 => 40,  60 => 37,  58 => 36,  54 => 34,  52 => 33,  46 => 30,  42 => 29,  36 => 25,);
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

<div class=\"card customer-discounts-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">loyalty</i>
    {{ 'Vouchers'|trans({}, 'Admin.Orderscustomers.Feature') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.discountsInformation|length }}</span>
  </h3>
  <div class=\"card-body\">
    {% if customerDiscountGrid.data.records_total > 0 %}
      <div class=\"row\">
        <div class=\"col\">
          {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': customerDiscountGrid} %}
        </div>
      </div>
    {% else %}
      <p class=\"text-muted text-center mb-0\">
        {{ '%firstname% %lastname% has no discount vouchers'|trans({'%firstname%': customerInformation.personalInformation.firstName, '%lastname%': customerInformation.personalInformation.lastName}, 'Admin.Orderscustomers.Feature') }}
      </p>
    {% endif %}
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:discounts.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/discounts.html.twig");
    }
}
