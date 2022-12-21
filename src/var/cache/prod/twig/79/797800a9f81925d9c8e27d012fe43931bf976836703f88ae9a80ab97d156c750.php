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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:options.html.twig */
class __TwigTemplate_2be3fcd1602963563d7d16bc6291b73d341dd489057f688b7ae6862dd8779c21 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:options.html.twig"));

        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "options", []), "customizations", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/customizations_form_theme.html.twig"], true);
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "options", [], "any", false, true), "suppliers", [], "any", true, true)) {
            // line 27
            echo "  ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "options", []), "suppliers", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/suppliers_form_theme.html.twig"], true);
        }
        // line 29
        echo "
<div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid\" id=\"options-tab\">
  ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "options", []), 'row');
        echo "

  ";
        // line 33
        if (( !$this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "options", [], "any", false, true), "suppliers", [], "any", true, true) && (($context["productType"] ?? $this->getContext($context, "productType")) == "combinations"))) {
            // line 34
            echo "    ";
            // line 35
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Suppliers", [], "Admin.Global"), "html", null, true);
            echo "</h2>
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To specify the suppliers of this product's combinations you can go to [1]{combinations_label}[/1] tab.", ["[1]" => "<a href=\"#combinations-tab\" class=\"tab-link\" data-target-tab=\"combinations-tab\">", "[/1]" => "</a>", "{combinations_label}" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Catalog.Feature")], "Admin.Catalog.Help");
            // line 42
            echo "<br>
      </p>
    </div>
  ";
        }
        // line 46
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 46,  66 => 42,  64 => 38,  57 => 35,  55 => 34,  53 => 33,  48 => 31,  44 => 29,  40 => 27,  38 => 26,  36 => 25,);
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
{% form_theme productForm.options.customizations '@PrestaShop/Admin/Sell/Catalog/Product/Form/customizations_form_theme.html.twig' %}
{% if productForm.options.suppliers is defined %}
  {% form_theme productForm.options.suppliers '@PrestaShop/Admin/Sell/Catalog/Product/Form/suppliers_form_theme.html.twig' %}
{% endif %}

<div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid\" id=\"options-tab\">
  {{ form_row(productForm.options) }}

  {% if productForm.options.suppliers is not defined and productType == 'combinations' %}
    {# For product with combinations suppliers are not here but in the combination form #}
    <h2>{{ 'Suppliers'|trans({}, 'Admin.Global') }}</h2>
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'To specify the suppliers of this product\\'s combinations you can go to [1]{combinations_label}[/1] tab.'|trans({
          '[1]': '<a href=\"#combinations-tab\" class=\"tab-link\" data-target-tab=\"combinations-tab\">',
          '[/1]': '</a>',
          '{combinations_label}': 'Combinations'|trans({}, 'Admin.Catalog.Feature')
        }, 'Admin.Catalog.Help')|raw }}<br>
      </p>
    </div>
  {% endif %}
</div>
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Tabs/options.html.twig");
    }
}
