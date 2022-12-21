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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:paginated_list.html.twig */
class __TwigTemplate_0cda4168aa509bfc258ad1dfb96c467299779ef771e46d302cecf6de341424c3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'combinations_paginated_list' => [$this, 'block_combinations_paginated_list'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:paginated_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:paginated_list.html.twig"));

        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["combinationsForm"] ?? $this->getContext($context, "combinationsForm")), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/combination_listing_form_theme.html.twig"], true);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('combinations_paginated_list', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_combinations_paginated_list($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combinations_paginated_list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combinations_paginated_list"));

        // line 28
        echo "  <div id=\"combinations-paginated-list\" class=\"d-none\">
    ";
        // line 30
        echo "    <div id=\"combinations_filters\"
         data-translations=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["filters.label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter by:", [], "Admin.Actions"), "filters.clear" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clear filter|Clear %filtersNb% filters", [], "Admin.Actions")]), "html", null, true);
        // line 34
        echo "\"
    ></div>

    <div id=\"combination-edit-modal\"
         data-empty-image=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/img/empty_state/combinations_history.png"), "html", null, true);
        echo "\"
         data-translations=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["modal.save" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "modal.close" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "modal.previous" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous combination", [], "Admin.Catalog.Feature"), "modal.next" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next combination", [], "Admin.Catalog.Feature"), "modal.history.editedCombination" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edited combinations (%editedNb%)", [], "Admin.Catalog.Feature"), "modal.history.confirmTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discard changes?", [], "Admin.Catalog.Notification"), "modal.history.confirmBody" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All unsaved modifications made on the combination [1]%combinationName%[/1] will be lost.", ["[1]" => "<span class=\"font-weight-bold\">", "[/1]" => "</span>"], "Admin.Catalog.Notification"), "modal.cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "modal.confirm" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discard", [], "Admin.Actions"), "modal.history.empty" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here, you can have a look at the combinations you have edited. The list will reset when you close the editing window.", [], "Admin.Catalog.Feature")]), "html", null, true);
        // line 51
        echo "\"
    ></div>
    <div class=\"justify-content-center\" id=\"combinations-list\">
      <div class=\"spinner-product-combinations-container\" id=\"productCombinationsLoading\">
        <div class=\"spinner spinner-primary\"></div>
      </div>

      ";
        // line 59
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combinationsForm"] ?? $this->getContext($context, "combinationsForm")), 'row', ["attr" => ["data-combination-token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken($this->getAttribute($this->getAttribute(($context["combinationItemForm"] ?? $this->getContext($context, "combinationItemForm")), "vars", []), "name", []))]]);
        echo "
    </div>

    <div class=\"row justify-content-center\" id=\"combinations-pagination\">
      ";
        // line 63
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" =>         // line 64
($context["combinationsLimit"] ?? $this->getContext($context, "combinationsLimit")), "limitChoices" =>         // line 65
($context["combinationLimitChoices"] ?? $this->getContext($context, "combinationLimitChoices"))]);
        // line 66
        echo "
    </div>

    <div class=\"justify-content-start mt-2 mb-3\">
      <button id=\"generate-combinations-button\" class=\"btn btn-primary generate-combinations-button\" disabled=\"disabled\">
        ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:paginated_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 71,  101 => 66,  99 => 65,  98 => 64,  97 => 63,  89 => 59,  80 => 51,  78 => 39,  74 => 38,  68 => 34,  66 => 31,  63 => 30,  60 => 28,  42 => 27,  39 => 26,  37 => 25,);
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
{% form_theme combinationsForm '@PrestaShop/Admin/Sell/Catalog/Product/Form/combination_listing_form_theme.html.twig' %}

{% block combinations_paginated_list %}
  <div id=\"combinations-paginated-list\" class=\"d-none\">
    {# Combination filters for paginated list #}
    <div id=\"combinations_filters\"
         data-translations=\"{{ {
           'filters.label': 'Filter by:'|trans({}, 'Admin.Actions'),
           'filters.clear': 'Clear filter|Clear %filtersNb% filters'|trans({}, 'Admin.Actions'),
         }|json_encode }}\"
    ></div>

    <div id=\"combination-edit-modal\"
         data-empty-image=\"{{ asset('themes/new-theme/img/empty_state/combinations_history.png') }}\"
         data-translations=\"{{ {
          'modal.save': 'Save'|trans({}, 'Admin.Actions'),
          'modal.close': 'Close'|trans({}, 'Admin.Actions'),
          'modal.previous': 'Previous combination'|trans({}, 'Admin.Catalog.Feature'),
          'modal.next': 'Next combination'|trans({}, 'Admin.Catalog.Feature'),
          'modal.history.editedCombination': 'Edited combinations (%editedNb%)'|trans({}, 'Admin.Catalog.Feature'),
          'modal.history.confirmTitle': 'Discard changes?'|trans({}, 'Admin.Catalog.Notification'),
          'modal.history.confirmBody': 'All unsaved modifications made on the combination [1]%combinationName%[/1] will be lost.'|trans({'[1]': '<span class=\"font-weight-bold\">', '[/1]': '</span>'}, 'Admin.Catalog.Notification'),
          'modal.cancel': 'Cancel'|trans({}, 'Admin.Actions'),
          'modal.confirm': 'Discard'|trans({}, 'Admin.Actions'),
          'modal.history.empty': 'Here, you can have a look at the combinations you have edited. The list will reset when you close the editing window.'|trans({}, 'Admin.Catalog.Feature'),

         }|json_encode }}\"
    ></div>
    <div class=\"justify-content-center\" id=\"combinations-list\">
      <div class=\"spinner-product-combinations-container\" id=\"productCombinationsLoading\">
        <div class=\"spinner spinner-primary\"></div>
      </div>

      {# Integrate the token that will be required in the combination update request #}
      {{ form_row(combinationsForm, {'attr': {'data-combination-token': csrf_token(combinationItemForm.vars.name) }}) }}
    </div>

    <div class=\"row justify-content-center\" id=\"combinations-pagination\">
      {{ include('@PrestaShop/Admin/Common/javascript_pagination.html.twig', {
        'limit': combinationsLimit,
        'limitChoices': combinationLimitChoices,
      }) }}
    </div>

    <div class=\"justify-content-start mt-2 mb-3\">
      <button id=\"generate-combinations-button\" class=\"btn btn-primary generate-combinations-button\" disabled=\"disabled\">
        {{ 'Generate combinations'|trans({}, 'Admin.Catalog.Feature') }}
      </button>
    </div>
  </div>
{% endblock %}
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:paginated_list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig");
    }
}
