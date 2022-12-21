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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:empty_state.html.twig */
class __TwigTemplate_e67f086592a58eb809e434603620b5fc02ed14bd9252d6b748996241d9e28eb5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:empty_state.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:empty_state.html.twig"));

        // line 25
        echo "
<div id=\"combinations-empty-state\" class=\"d-none\">
  <div class=\"text-center showcase-list-card\">
    <img alt=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" class=\"img-responsive mt-3 img-rtl\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/img/empty_state/combinations.svg"), "html", null, true);
        echo "\">

    <p class=\"mt-4 showcase-list-card__header\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

    <p class=\"mx-auto showcase-list-card__message\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add combinations, you first need to create proper attributes and values in [1]%attributes_and_features_label%[/1].", ["%attributes_and_features_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attributes & Features", [], "Admin.Navigation.Menu"), "[1]" => (("<a class=\"alert-link\" href=" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminAttributesGroups")) . " target=\"_blank\">"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        echo "
    </p>

    <div class=\"mt-4\">
      <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('documentation_link')->getCallable(), ["combinations"]), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-outline-secondary mr-1\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Learn more", [], "Admin.Actions"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-primary generate-combinations-button\" disabled=\"disabled\">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:empty_state.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 40,  67 => 38,  60 => 34,  56 => 33,  50 => 30,  41 => 28,  36 => 25,);
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

<div id=\"combinations-empty-state\" class=\"d-none\">
  <div class=\"text-center showcase-list-card\">
    <img alt=\"{{ 'Generate product combinations'|trans({}, 'Admin.Catalog.Feature') }}\" title=\"{{ 'Generate product combinations'|trans({}, 'Admin.Catalog.Feature') }}\" class=\"img-responsive mt-3 img-rtl\" src=\"{{ asset('themes/new-theme/img/empty_state/combinations.svg') }}\">

    <p class=\"mt-4 showcase-list-card__header\">{{ 'Generate product combinations'|trans({}, 'Admin.Catalog.Feature') }}</p>

    <p class=\"mx-auto showcase-list-card__message\">
      {{ 'Combinations are the different variations of a product, with attributes like its size, weight or color taking different values.'|trans({}, 'Admin.Catalog.Feature') }}
      {{ 'To add combinations, you first need to create proper attributes and values in [1]%attributes_and_features_label%[/1].'|trans({'%attributes_and_features_label%': 'Attributes & Features'|trans({}, 'Admin.Navigation.Menu'), '[1]': '<a class=\"alert-link\" href=' ~ getAdminLink(\"AdminAttributesGroups\") ~ ' target=\"_blank\">', '[/1]': '</a>'}, 'Admin.Catalog.Help')|raw }}
    </p>

    <div class=\"mt-4\">
      <a href=\"{{ documentation_link('combinations') }}\" target=\"_blank\" class=\"btn btn-outline-secondary mr-1\">{{ 'Learn more'|trans({}, 'Admin.Actions') }}</a>
      <button class=\"btn btn-primary generate-combinations-button\" disabled=\"disabled\">
        {{ 'Generate combinations'|trans({}, 'Admin.Catalog.Feature') }}
      </button>
    </div>
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:empty_state.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig");
    }
}
