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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:header.html.twig */
class __TwigTemplate_00ee88ff3d481bf8881508dae996aeea8af82be19c6d55d16375d7be59312134 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_header_form' => [$this, 'block_product_header_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:header.html.twig"));

        // line 25
        echo "<div class=\"product-header col-md-12\">
  <div class=\"row justify-content-md-center\">
  ";
        // line 27
        if (($context["isMultiShopContext"] ?? $this->getContext($context, "isMultiShopContext"))) {
            // line 28
            echo "    <div class=\"col-xxl-10\">
      <div class=\"alert alert-warning\" role=\"alert\">
        <p class=\"alert-text\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are in a multistore context: any modification will impact all your shops, or each shop of the active group.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</p>
      </div>
    </div>
  ";
        }
        // line 34
        echo "
    <div class=\"col-xxl-10\">
      <div class=\"row\">
        <div class=\"col-md-10 product-header-form\">
          ";
        // line 38
        $this->displayBlock('product_header_form', $context, $blocks);
        // line 42
        echo "        </div>

        <div class=\"toolbar col-sm-3 col-md-2 text-md-right\">
        ";
        // line 45
        if ((null != ($context["statsLink"] ?? $this->getContext($context, "statsLink")))) {
            // line 46
            echo "          <a class=\"toolbar-button btn-sales\" href=\"";
            echo twig_escape_filter($this->env, ($context["statsLink"] ?? $this->getContext($context, "statsLink")), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", [], "Admin.Global"), "html", null, true);
            echo "\"
            id=\"product_form_go_to_sales\">
            <i class=\"material-icons\">assessment</i>
            <span class=\"title\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", [], "Admin.Global"), "html", null, true);
            echo "</span>
          </a>
        ";
        }
        // line 52
        echo "
          <a
            class=\"toolbar-button btn-quicknav btn-sidebar\"
            href=\"#\"
            title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quick navigation", [], "Admin.Global"), "html", null, true);
        echo "\"
            data-toggle=\"sidebar\"
            data-target=\"#right-sidebar\"
            data-url=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_list", ["limit" => "last", "offset" => "last", "view" => "quicknav"]), "html", null, true);
        echo "\"
            id=\"product_form_open_quicknav\"
          >
            <i class=\"material-icons\">list</i>
            <span class=\"title\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product list", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
          </a>

          <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
            title=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", [], "Admin.Global"), "html", null, true);
        echo "\"
            data-toggle=\"sidebar\"
            data-target=\"#right-sidebar\"
            data-url=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["helpLink"] ?? $this->getContext($context, "helpLink")), "html", null, true);
        echo "\"
            id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", [], "Admin.Global"), "html", null, true);
        echo "</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_product_header_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_header_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_header_form"));

        // line 39
        echo "            ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "header", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/header_form_theme.html.twig"], true);
        // line 40
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "header", []), 'row');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 40,  150 => 39,  141 => 38,  123 => 74,  116 => 70,  110 => 67,  103 => 63,  96 => 59,  90 => 56,  84 => 52,  78 => 49,  69 => 46,  67 => 45,  62 => 42,  60 => 38,  54 => 34,  47 => 30,  43 => 28,  41 => 27,  37 => 25,);
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
<div class=\"product-header col-md-12\">
  <div class=\"row justify-content-md-center\">
  {% if isMultiShopContext %}
    <div class=\"col-xxl-10\">
      <div class=\"alert alert-warning\" role=\"alert\">
        <p class=\"alert-text\">{{ 'You are in a multistore context: any modification will impact all your shops, or each shop of the active group.'|trans({}, 'Admin.Catalog.Notification') }}</p>
      </div>
    </div>
  {% endif %}

    <div class=\"col-xxl-10\">
      <div class=\"row\">
        <div class=\"col-md-10 product-header-form\">
          {% block product_header_form %}
            {% form_theme productForm.header '@PrestaShop/Admin/Sell/Catalog/Product/Form/header_form_theme.html.twig' %}
            {{ form_row(productForm.header) }}
          {% endblock %}
        </div>

        <div class=\"toolbar col-sm-3 col-md-2 text-md-right\">
        {% if null != statsLink %}
          <a class=\"toolbar-button btn-sales\" href=\"{{ statsLink }}\" target=\"_blank\" title=\"{{ 'Sales'|trans({}, 'Admin.Global') }}\"
            id=\"product_form_go_to_sales\">
            <i class=\"material-icons\">assessment</i>
            <span class=\"title\">{{ 'Sales'|trans({}, 'Admin.Global') }}</span>
          </a>
        {% endif %}

          <a
            class=\"toolbar-button btn-quicknav btn-sidebar\"
            href=\"#\"
            title=\"{{ 'Quick navigation'|trans({}, 'Admin.Global') }}\"
            data-toggle=\"sidebar\"
            data-target=\"#right-sidebar\"
            data-url=\"{{ path('admin_product_list', {limit: 'last', offset: 'last', view: 'quicknav'}) }}\"
            id=\"product_form_open_quicknav\"
          >
            <i class=\"material-icons\">list</i>
            <span class=\"title\">{{ 'Product list'|trans({}, 'Admin.Catalog.Feature') }}</span>
          </a>

          <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
            title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\"
            data-toggle=\"sidebar\"
            data-target=\"#right-sidebar\"
            data-url=\"{{ helpLink }}\"
            id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">{{ 'Help'|trans({}, 'Admin.Global') }}</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/header.html.twig");
    }
}
