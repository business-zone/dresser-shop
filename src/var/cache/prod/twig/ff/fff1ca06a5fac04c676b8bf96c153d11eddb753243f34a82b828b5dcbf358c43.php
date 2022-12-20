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
class __TwigTemplate_15a10bb6be7001d0bf3e41170444f6b8a284525b5b49adcdf27d1bacd098d021 extends \Twig\Template
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
        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["combinationsForm"] ?? null), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/combination_listing_form_theme.html.twig"], true);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('combinations_paginated_list', $context, $blocks);
    }

    public function block_combinations_paginated_list($context, array $blocks = [])
    {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combinationsForm"] ?? null), 'row', ["attr" => ["data-combination-token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken($this->getAttribute($this->getAttribute(($context["combinationItemForm"] ?? null), "vars", []), "name", []))]]);
        echo "
    </div>

    <div class=\"row justify-content-center\" id=\"combinations-pagination\">
      ";
        // line 63
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" =>         // line 64
($context["combinationsLimit"] ?? null), "limitChoices" =>         // line 65
($context["combinationLimitChoices"] ?? null)]);
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
        return array (  90 => 71,  83 => 66,  81 => 65,  80 => 64,  79 => 63,  71 => 59,  62 => 51,  60 => 39,  56 => 38,  50 => 34,  48 => 31,  45 => 30,  42 => 28,  36 => 27,  33 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:paginated_list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig");
    }
}
