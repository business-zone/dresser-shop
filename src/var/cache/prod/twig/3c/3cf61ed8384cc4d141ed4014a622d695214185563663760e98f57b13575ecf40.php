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

/* PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates/Blocks:form.html.twig */
class __TwigTemplate_75bd4a12cf14578b9452f447bab41ca5ab2805dcafc41c6249a6a1ecd5272964 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'order_return_state_form' => [$this, 'block_order_return_state_form'],
            'order_return_state_form_reset' => [$this, 'block_order_return_state_form_reset'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates/Blocks:form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates/Blocks:form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates/Blocks:form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('order_return_state_form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_order_return_state_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_return_state_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_return_state_form"));

        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderReturnStateForm"] ?? $this->getContext($context, "orderReturnStateForm")), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return statuses", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderReturnStateForm"] ?? $this->getContext($context, "orderReturnStateForm")), 'errors');
        echo "

          ";
        // line 39
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderReturnStateForm"] ?? $this->getContext($context, "orderReturnStateForm")), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status name", [], "Admin.Shopparameters.Feature"), "help" => ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order's return status name.", [], "Admin.Shopparameters.Help") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters: numbers and", [], "Admin.Shopparameters.Help")) . " !<>,;?=+()@#\"{}_\$%:")]);
        // line 45
        echo "

          ";
        // line 47
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderReturnStateForm"] ?? $this->getContext($context, "orderReturnStateForm")), "color", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Color", [], "Admin.Shopparameters.Feature"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status will be highlighted in this color. HTML colors only.", [], "Admin.Shopparameters.Help") . " \"lightblue\", \"#CC6600\")")]);
        // line 50
        echo "

          ";
        // line 52
        $this->displayBlock('order_return_state_form_reset', $context, $blocks);
        // line 55
        echo "        </div>
      </div>
      <div class=\"card-footer\">
          <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension')->getPathWithBackUrl("admin_order_states"), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\">
          ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderReturnStateForm"] ?? $this->getContext($context, "orderReturnStateForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_order_return_state_form_reset($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_return_state_form_reset"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_return_state_form_reset"));

        // line 53
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderReturnStateForm"] ?? $this->getContext($context, "orderReturnStateForm")), 'rest');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates/Blocks:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 53,  132 => 52,  120 => 66,  113 => 62,  107 => 59,  103 => 58,  98 => 55,  96 => 52,  92 => 50,  90 => 47,  86 => 45,  84 => 39,  79 => 37,  72 => 33,  64 => 29,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
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

{% block order_return_state_form %}
  {{ form_start(orderReturnStateForm) }}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        {{ 'Return statuses'|trans({}, 'Admin.Shopparameters.Feature') }}
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          {{ form_errors(orderReturnStateForm) }}

          {{ ps.form_group_row(orderReturnStateForm.name, {}, {
            'label': 'Status name'|trans({}, 'Admin.Shopparameters.Feature'),
            'help': 'Order\\'s return status name.'|trans({}, 'Admin.Shopparameters.Help')
                    ~ ' '
                    ~ 'Invalid characters: numbers and'|trans({}, 'Admin.Shopparameters.Help')
                    ~ ' !<>,;?=+()@#\"{}_\$%:'
          }) }}

          {{ ps.form_group_row(orderReturnStateForm.color, {}, {
            'label': 'Color'|trans({}, 'Admin.Shopparameters.Feature'),
            'help': 'Status will be highlighted in this color. HTML colors only.'|trans({}, 'Admin.Shopparameters.Help') ~ ' \"lightblue\", \"#CC6600\")'
          }) }}

          {% block order_return_state_form_reset %}
            {{ form_rest(orderReturnStateForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
          <a href=\"{{ pathWithBackUrl('admin_order_states') }}\" class=\"btn btn-outline-secondary\">
          {{ 'Cancel'|trans({}, 'Admin.Actions') }}
        </a>
        <button class=\"btn btn-primary float-right\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    </div>
  {{ form_end(orderReturnStateForm) }}
{% endblock %}
", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates/Blocks:form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig");
    }
}
