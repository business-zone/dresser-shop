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

/* PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn/Blocks:options.html.twig */
class __TwigTemplate_01e03fc081f4f5574efc8ab51ac5c0d49a900b3e2fdb7867e5899f71a1d19df6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'merchandise_return_options_form_rest' => [$this, 'block_merchandise_return_options_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn/Blocks:options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn/Blocks:options.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn/Blocks:options.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["merchandiseReturnsOptionsForm"] ?? $this->getContext($context, "merchandiseReturnsOptionsForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_merchandise_returns_save_options")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise return (RMA) options", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 35
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["merchandiseReturnsOptionsForm"] ?? $this->getContext($context, "merchandiseReturnsOptionsForm")), "enable_order_return", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable returns", [], "Admin.Orderscustomers.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Would you like to allow merchandise returns in your shop?", [], "Admin.Orderscustomers.Help")]);
        // line 38
        echo "

        ";
        // line 40
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["merchandiseReturnsOptionsForm"] ?? $this->getContext($context, "merchandiseReturnsOptionsForm")), "order_return_period_in_days", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time limit of validity", [], "Admin.Orderscustomers.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How many days after the delivery date does the customer have to return a product?", [], "Admin.Orderscustomers.Help")]);
        // line 43
        echo "

        ";
        // line 45
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["merchandiseReturnsOptionsForm"] ?? $this->getContext($context, "merchandiseReturnsOptionsForm")), "order_return_prefix", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return prefix", [], "Admin.Orderscustomers.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prefix used for merchandise returns (e.g. RE00001).", [], "Admin.Orderscustomers.Help")]);
        // line 48
        echo "

        ";
        // line 50
        $this->displayBlock('merchandise_return_options_form_rest', $context, $blocks);
        // line 53
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["merchandiseReturnsOptionsForm"] ?? $this->getContext($context, "merchandiseReturnsOptionsForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_merchandise_return_options_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "merchandise_return_options_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "merchandise_return_options_form_rest"));

        // line 51
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["merchandiseReturnsOptionsForm"] ?? $this->getContext($context, "merchandiseReturnsOptionsForm")), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn/Blocks:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 51,  105 => 50,  93 => 63,  85 => 58,  78 => 53,  76 => 50,  72 => 48,  70 => 45,  66 => 43,  64 => 40,  60 => 38,  58 => 35,  51 => 31,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{{ form_start(merchandiseReturnsOptionsForm, {action: path('admin_merchandise_returns_save_options')}) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
      {{ 'Merchandise return (RMA) options'|trans({}, 'Admin.Orderscustomers.Feature') }}
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        {{ ps.form_group_row(merchandiseReturnsOptionsForm.enable_order_return, {}, {
          label: 'Enable returns'|trans({}, 'Admin.Orderscustomers.Feature'),
          help: 'Would you like to allow merchandise returns in your shop?'|trans({}, 'Admin.Orderscustomers.Help')
          }) }}

        {{ ps.form_group_row(merchandiseReturnsOptionsForm.order_return_period_in_days, {}, {
          label: 'Time limit of validity'|trans({}, 'Admin.Orderscustomers.Feature'),
          help: 'How many days after the delivery date does the customer have to return a product?'|trans({}, 'Admin.Orderscustomers.Help')
          }) }}

        {{ ps.form_group_row(merchandiseReturnsOptionsForm.order_return_prefix, {}, {
          label: 'Return prefix'|trans({}, 'Admin.Orderscustomers.Feature'),
          help: 'Prefix used for merchandise returns (e.g. RE00001).'|trans({}, 'Admin.Orderscustomers.Help')
          }) }}

        {% block merchandise_return_options_form_rest %}
          {{ form_rest(merchandiseReturnsOptionsForm) }}
        {% endblock %}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    </div>
  </div>
{{ form_end(merchandiseReturnsOptionsForm) }}
", "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn/Blocks:options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/MerchandiseReturn/Blocks/options.html.twig");
    }
}
