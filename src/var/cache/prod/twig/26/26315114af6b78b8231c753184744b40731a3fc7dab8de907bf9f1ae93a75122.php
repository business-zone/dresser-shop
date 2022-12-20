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

/* PrestaShopBundle:Admin/Sell/Catalog/CatalogPriceRule/Blocks:form.html.twig */
class __TwigTemplate_df5847ef62fe623d1753f7b13078eeb85758d5a10cfc09682d6843cb6e2e8a4f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'catalog_price_rule_form_rest' => [$this, 'block_catalog_price_rule_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/CatalogPriceRule/Blocks:form.html.twig", 26)->unwrap();
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["catalogPriceRuleForm"] ?? null), 'form_start');
        echo "
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["catalogPriceRuleForm"] ?? null), 'errors');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">attach_money</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catalog price rules", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global")]);
        // line 38
        echo "

      ";
        // line 40
        if ($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "id_shop", [], "any", true, true)) {
            // line 41
            echo "        ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "id_shop", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "Admin.Global")]);
            // line 43
            echo "
      ";
        }
        // line 45
        echo "
      ";
        // line 46
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "id_currency", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", [], "Admin.Global")]);
        // line 48
        echo "

      ";
        // line 50
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "id_country", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", [], "Admin.Global")]);
        // line 52
        echo "

      ";
        // line 54
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "id_group", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", [], "Admin.Global")]);
        // line 56
        echo "

      ";
        // line 58
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "from_quantity", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From quantity", [], "Admin.Catalog.Feature")]);
        // line 60
        echo "

      ";
        // line 62
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "price", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", [], "Admin.Catalog.Feature")]);
        // line 64
        echo "

      ";
        // line 66
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "leave_initial_price", []), [], ["label" => ""]);
        echo "

      ";
        // line 68
        echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "date_range", []), "from", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", [], "Admin.Global")]);
        // line 70
        echo "

      ";
        // line 72
        echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "date_range", []), "to", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", [], "Admin.Global")]);
        // line 74
        echo "

      ";
        // line 76
        echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "reduction", []), "type", []), ["attr" => ["class" => "js-reduction-type-source"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reduction type", [], "Admin.Catalog.Feature")]);
        // line 78
        echo "

      <div class=\"js-include-tax-target\">
        ";
        // line 81
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "include_tax", []), ["attr" => ["class" => "js-include-tax-target"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reduction with or without taxes", [], "Admin.Catalog.Feature")]);
        // line 83
        echo "
      </div>

      ";
        // line 86
        echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["catalogPriceRuleForm"] ?? null), "reduction", []), "value", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reduction", [], "Admin.Catalog.Feature")]);
        // line 88
        echo "

      ";
        // line 90
        $this->displayBlock('catalog_price_rule_form_rest', $context, $blocks);
        // line 93
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_catalog_price_rules_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["catalogPriceRuleForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 90
    public function block_catalog_price_rule_form_rest($context, array $blocks = [])
    {
        // line 91
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["catalogPriceRuleForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/CatalogPriceRule/Blocks:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 91,  169 => 90,  163 => 104,  156 => 100,  150 => 97,  146 => 96,  141 => 93,  139 => 90,  135 => 88,  133 => 86,  128 => 83,  126 => 81,  121 => 78,  119 => 76,  115 => 74,  113 => 72,  109 => 70,  107 => 68,  102 => 66,  98 => 64,  96 => 62,  92 => 60,  90 => 58,  86 => 56,  84 => 54,  80 => 52,  78 => 50,  74 => 48,  72 => 46,  69 => 45,  65 => 43,  62 => 41,  60 => 40,  56 => 38,  54 => 36,  47 => 32,  40 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/CatalogPriceRule/Blocks:form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig");
    }
}
