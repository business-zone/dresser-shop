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

/* PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks:form.html.twig */
class __TwigTemplate_1b8475a07d8af18ec7c5494d92e203f5420aedcab359b5b193a7f9ac3bb77cf6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks:form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks:form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">local_shipping</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Suppliers", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">

      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "name", []), 'row');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "description", []), 'row');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "phone", []), 'row');
        echo "
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "mobile_phone", []), 'row');
        echo "
      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "address", []), 'row');
        echo "
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "address2", []), 'row');
        echo "
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "post_code", []), 'row');
        echo "
      ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "city", []), 'row');
        echo "
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "id_country", []), 'row');
        echo "
        <div class=\"js-supplier-state";
        // line 46
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "id_state", []), "vars", []), "choices", []))) {
            echo " d-none";
        }
        echo "\">
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "id_state", []), 'row');
        echo "
        </div>
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "dni", []), 'row');
        echo "
      ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), "logo", []), 'row');
        echo "

      ";
        // line 52
        if ((array_key_exists("logoImage", $context) &&  !(null === ($context["logoImage"] ?? $this->getContext($context, "logoImage"))))) {
            // line 53
            echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
            // line 56
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Suppliers/logo_image.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks:form.html.twig", 56)->display($context);
            // line 57
            echo "          </div>
        </div>
      ";
        }
        // line 60
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), 'widget');
        echo "

    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_suppliers_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["supplierForm"] ?? $this->getContext($context, "supplierForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 73,  148 => 69,  142 => 66,  138 => 65,  129 => 60,  124 => 57,  122 => 56,  117 => 53,  115 => 52,  110 => 50,  106 => 49,  101 => 47,  95 => 46,  91 => 45,  87 => 44,  83 => 43,  79 => 42,  75 => 41,  71 => 40,  67 => 39,  63 => 38,  59 => 37,  51 => 32,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% form_theme supplierForm 'PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig' %}

{{ form_start(supplierForm) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">local_shipping</i>
    {{ 'Suppliers'|trans({}, 'Admin.Global') }}
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">

      {{ form_row(supplierForm.name) }}
      {{ form_row(supplierForm.description) }}
      {{ form_row(supplierForm.phone) }}
      {{ form_row(supplierForm.mobile_phone) }}
      {{ form_row(supplierForm.address) }}
      {{ form_row(supplierForm.address2) }}
      {{ form_row(supplierForm.post_code) }}
      {{ form_row(supplierForm.city) }}
      {{ form_row(supplierForm.id_country) }}
        <div class=\"js-supplier-state{% if supplierForm.id_state.vars.choices is empty %} d-none{% endif %}\">
          {{ form_row(supplierForm.id_state) }}
        </div>
      {{ form_row(supplierForm.dni) }}
      {{ form_row(supplierForm.logo) }}

      {% if logoImage is defined and logoImage is not null %}
        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            {% include '@PrestaShop/Admin/Sell/Catalog/Suppliers/logo_image.html.twig' %}
          </div>
        </div>
      {% endif %}
      {{ form_widget(supplierForm) }}

    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_suppliers_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\">
      {{ 'Save'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
</div>
{{ form_end(supplierForm) }}
", "PrestaShopBundle:Admin/Sell/Catalog/Suppliers/Blocks:form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig");
    }
}
