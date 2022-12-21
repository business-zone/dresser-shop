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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:basic.html.twig */
class __TwigTemplate_7429bb7bcdd66b846d883f2b08912daf5861a745706a80d9789dabc32248d7c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:basic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:basic.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "categories", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/categories_form_theme.html.twig"], true);
        // line 27
        echo "
<div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid active\" id=\"basic-tab\">
  <div class=\"row\">
    <div class=\"col-md-9 left-column\">
      ";
        // line 31
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "basic", []), "features", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/features_form_theme.html.twig"], true);
        // line 32
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "basic", []), 'row');
        echo "
    </div>
    <div class=\"col-md-3 right-column\">
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "shortcuts", []), 'row');
        echo "
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "categories", []), 'row');
        echo "
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 36,  56 => 35,  49 => 32,  47 => 31,  41 => 27,  39 => 26,  36 => 25,);
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

{% form_theme productForm.categories '@PrestaShop/Admin/Sell/Catalog/Product/Form/categories_form_theme.html.twig' %}

<div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid active\" id=\"basic-tab\">
  <div class=\"row\">
    <div class=\"col-md-9 left-column\">
      {% form_theme productForm.basic.features '@PrestaShop/Admin/Sell/Catalog/Product/Form/features_form_theme.html.twig' %}
      {{ form_row(productForm.basic) }}
    </div>
    <div class=\"col-md-3 right-column\">
      {{ form_row(productForm.shortcuts) }}
      {{ form_row(productForm.categories) }}
    </div>
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:basic.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Tabs/basic.html.twig");
    }
}
