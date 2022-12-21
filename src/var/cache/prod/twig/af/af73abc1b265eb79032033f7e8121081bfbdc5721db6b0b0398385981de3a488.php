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

/* PrestaShopBundle:Admin/Sell/Address/Blocks:form.html.twig */
class __TwigTemplate_83ebbf63efdc58d6f073d78caaf4cc7430573eaf02d18d6077dcfb1ff22d0460 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'customer_information' => [$this, 'block_customer_information'],
            'address_form_widget' => [$this, 'block_address_form_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Address/Blocks:form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Address/Blocks:form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["addressForm"] ?? $this->getContext($context, "addressForm")), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'form_start');
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    <i class=\"material-icons\">mail_outline</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Navigation.Menu"), "html", null, true);
        echo "
  </div>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'errors');
        echo "

      ";
        // line 39
        $this->displayBlock('customer_information', $context, $blocks);
        // line 57
        echo "      ";
        $this->displayBlock('address_form_widget', $context, $blocks);
        // line 60
        echo "    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
        ";
        // line 67
        echo "        ";
        if ((array_key_exists("displayInIframe", $context) && (($context["displayInIframe"] ?? $this->getContext($context, "displayInIframe")) == true))) {
            // line 68
            echo "          <a href=\"javascript:window.parent.\$.fancybox.close();\" class=\"btn btn-outline-secondary\">
        ";
        } else {
            // line 70
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("cancelPath", $context)) ? (_twig_default_filter(($context["cancelPath"] ?? $this->getContext($context, "cancelPath")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addresses_index"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addresses_index"))), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
        ";
        }
        // line 72
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\" id=\"save-button\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>
</div>
";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_customer_information($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customer_information"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customer_information"));

        // line 40
        echo "        ";
        if ( !(null === ($context["customerInformation"] ?? $this->getContext($context, "customerInformation")))) {
            // line 41
            echo "          ";
            if ($this->getAttribute(($context["addressForm"] ?? null), "id_customer", [], "any", true, true)) {
                // line 42
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "form_widget_with_error", [0 => $this->getAttribute(($context["addressForm"] ?? $this->getContext($context, "addressForm")), "id_customer", [])], "method"), "html", null, true);
                echo "
          ";
            }
            // line 44
            echo "          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => ($context["customerId"] ?? $this->getContext($context, "customerId"))]), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
                <i class=\"material-icons\">remove_red_eye</i>
                ";
            // line 51
            echo twig_escape_filter($this->env, ($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "html", null, true);
            echo "
              </a>
            </div>
          </div>
        ";
        }
        // line 56
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_address_form_widget($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "address_form_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "address_form_widget"));

        // line 58
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addressForm"] ?? $this->getContext($context, "addressForm")), 'widget');
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Address/Blocks:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 58,  172 => 57,  162 => 56,  154 => 51,  149 => 49,  143 => 46,  139 => 44,  133 => 42,  130 => 41,  127 => 40,  118 => 39,  106 => 80,  99 => 76,  91 => 72,  85 => 70,  81 => 68,  78 => 67,  71 => 60,  68 => 57,  66 => 39,  61 => 37,  53 => 32,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
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

{% form_theme addressForm 'PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig' %}

{{ form_start(addressForm) }}
<div class=\"card\">
  <div class=\"card-header\">
    <i class=\"material-icons\">mail_outline</i>
    {{ 'Addresses'|trans({}, 'Admin.Navigation.Menu') }}
  </div>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      {{ form_errors(addressForm) }}

      {% block customer_information %}
        {% if customerInformation is not null %}
          {% if addressForm.id_customer is defined %}
            {{ ps.form_widget_with_error(addressForm.id_customer) }}
          {% endif %}
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Customer'|trans({}, 'Admin.Global') }}
            </label>
            <div class=\"col-sm\">
              <a href=\"{{ path('admin_customers_view', {'customerId': customerId}) }}\" class=\"btn btn-outline-secondary\">
                <i class=\"material-icons\">remove_red_eye</i>
                {{ customerInformation }}
              </a>
            </div>
          </div>
        {% endif %}
      {% endblock %}
      {% block address_form_widget %}
        {{ form_widget(addressForm) }}
      {% endblock %}
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
        {#  Form appears not only in address controller but in order creation page as well. This if is needed in order
        to correctly close form when it's a popup instead of redirecting to addresses page. #}
        {% if (displayInIframe is defined and displayInIframe == true) %}
          <a href=\"javascript:window.parent.\$.fancybox.close();\" class=\"btn btn-outline-secondary\">
        {% else %}
          <a href=\"{{ cancelPath|default(path('admin_addresses_index')) }}\" class=\"btn btn-outline-secondary\">
        {% endif %}
        {{ 'Cancel'|trans({}, 'Admin.Actions') }}
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\" id=\"save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
    </div>
  </div>
</div>
{{ form_end(addressForm) }}
", "PrestaShopBundle:Admin/Sell/Address/Blocks:form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Address/Blocks/form.html.twig");
    }
}
