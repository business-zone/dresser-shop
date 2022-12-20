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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Form:categories_form_theme.html.twig */
class __TwigTemplate_89c535ad103a29cb61b1eb61f2089ca340900109c64ab99aff78072fd5e9c4fe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'product_category_row' => [$this, 'block_product_category_row'],
            'collection_widget' => [$this, 'block_collection_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit_base.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:categories_form_theme.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_product_category_row($context, array $blocks = [])
    {
        // line 28
        echo "  <li class=\"category-tree-element\">
    <div class=\"checkbox category-tree-inputs\">
      ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "is_associated", []), 'widget');
        echo "
      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "is_default", []), 'widget');
        echo "
    </div>
    <ul class=\"children-list\"></ul>
  </li>
";
    }

    // line 37
    public function block_collection_widget($context, array $blocks = [])
    {
        // line 38
        echo "  <div class=\"categories-tree js-categories-container\">
    <fieldset class=\"form-group tree-fieldset d-none\">
      <div class=\"ui-widget\">
        <div class=\"search search-with-icon\">
          <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1 ui-autocomplete-input\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search categories", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" autocomplete=\"off\">
        </div>

        <label class=\"form-control-label text-uppercase\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Associated categories", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>

        <div id=\"categories-tags-container\" class=\"pstaggerTagsWrapper\">
        </div>

        <div class=\"categories-tree-actions js-categories-tree-actions\">
          <span class=\"form-control-label\" id=\"categories-tree-expand\"><i class=\"material-icons\">expand_more</i>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand All", [], "Admin.Actions"), "html", null, true);
        echo "</span>
          <span class=\"form-control-label\" id=\"categories-tree-reduce\"><i class=\"material-icons\">expand_less</i>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse All", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </div>

        <div class=\"category-tree-overflow js-category-tree-overflow\">";
        // line 56
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? null), "vars", []), "name", [])]);
        // line 57
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " js-categories-tree category-tree"))]);
        // line 58
        echo "<label class=\"main-category\">
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          </label>
          <ul ";
        // line 61
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 62
        $this->displayBlock("form_rows", $context, $blocks);
        // line 63
        echo "</ul>
        </div>
      </div>
    </fieldset>

    <div class=\"categories-tree-loader\">
      <div class=\"spinner m-auto d-block\"></div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:categories_form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 63,  109 => 62,  106 => 61,  101 => 59,  98 => 58,  96 => 57,  94 => 56,  88 => 52,  84 => 51,  75 => 45,  69 => 42,  63 => 38,  60 => 37,  51 => 31,  47 => 30,  43 => 28,  40 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:categories_form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Form/categories_form_theme.html.twig");
    }
}
