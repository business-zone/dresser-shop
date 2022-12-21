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

/* PrestaShopBundle:Admin/Sell/Customer:view.html.twig */
class __TwigTemplate_482c175ad2909222da54bb2dd2144b9d454baacc58636718db77aab1221df018 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 28
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig"));

        // line 26
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Information about customer %name%", ["%name%" => ((twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "firstName", []), 0, 1) . ". ") . $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastName", []))], "Admin.Orderscustomers.Feature");
        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 33)->display($context);
        // line 34
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 34)->display($context);
        // line 35
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 35)->display($context);
        // line 36
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 36)->display($context);
        // line 37
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/viewed_products.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 37)->display($context);
        // line 38
        echo "    </div>

    <div class=\"col\">
      ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 41)->display($context);
        // line 42
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 42)->display($context);
        // line 43
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 43)->display($context);
        // line 44
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 44)->display($context);
        // line 45
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 45)->display($context);
        // line 46
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 46)->display($context);
        // line 47
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 47)->display($context);
        // line 48
        echo "    </div>
  </div>

  <div class=\"row\">
    ";
        // line 52
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminCustomers", ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", [])]);
        echo "
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 59
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/javascript.html.twig", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", 59)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Customer:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 59,  135 => 57,  126 => 56,  113 => 52,  107 => 48,  104 => 47,  101 => 46,  98 => 45,  95 => 44,  92 => 43,  89 => 42,  87 => 41,  82 => 38,  79 => 37,  76 => 36,  73 => 35,  70 => 34,  68 => 33,  64 => 31,  55 => 30,  44 => 28,  42 => 26,  30 => 28,);
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

{% set layoutTitle = 'Information about customer %name%'|trans({'%name%': customerInformation.personalInformation.firstName[0:1] ~ '. ' ~ customerInformation.personalInformation.lastName}, 'Admin.Orderscustomers.Feature') %}

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  <div class=\"row\">
    <div class=\"col\">
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/viewed_products.html.twig' %}
    </div>

    <div class=\"col\">
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig' %}
    </div>
  </div>

  <div class=\"row\">
    {{ renderhook('displayAdminCustomers', {'id_customer': customerInformation.customerId.value}) }}
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  {% include '@PrestaShop/Admin/Sell/Customer/Blocks/javascript.html.twig' %}
{% endblock %}
", "PrestaShopBundle:Admin/Sell/Customer:view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/view.html.twig");
    }
}
