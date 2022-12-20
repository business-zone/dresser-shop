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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig */
class __TwigTemplate_44a2c7d63eb186612f3bdae9d3469c284c8d06066d2bb3fea548fe053cba7fad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'combination_list_row' => [$this, 'block_combination_list_row'],
            'combination_item_row' => [$this, 'block_combination_item_row'],
            'collection_row' => [$this, 'block_collection_row'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_combination_list_row($context, array $blocks = [])
    {
        // line 28
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 29
        $this->displayBlock("form_rows", $context, $blocks);
        // line 30
        echo "</div>";
    }

    // line 33
    public function block_combination_item_row($context, array $blocks = [])
    {
        // line 34
        echo "<tr id=\"combination-list-row-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "name", []), "html", null, true);
        echo "\" class=\"combination\">
    <td>
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "is_selected", []), 'widget');
        echo "
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "combination_id", []), 'widget');
        echo "
    </td>
    <td>
      <img class=\"combination-image\" src=\"\" alt=\"\">
    </td>
    <td>
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", []), 'widget');
        echo "
    </td>
    <td>
      ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reference", []), 'widget');
        echo "
    </td>
    <td>
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "impact_on_price", []), 'widget');
        echo "
    </td>
    <td>
      ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "final_price_te", []), 'widget');
        echo "
    </td>
    <td>
      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", []), 'widget');
        echo "
      ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", []), 'errors');
        echo "
    </td>
    <td>
      ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "is_default", []), 'widget');
        echo "
      ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "is_default", []), 'errors');
        echo "
    </td>
    <td class=\"combination-actions\">
      ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "edit", []), 'widget');
        echo "
      ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delete", []), 'widget');
        echo "
    </td>
  </tr>";
    }

    // line 69
    public function block_collection_row($context, array $blocks = [])
    {
        // line 70
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig", 70)->unwrap();
        // line 72
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? null), "vars", []), "name", [])]);
        // line 73
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " grid-table table grid-ordering-column"))]);
        // line 74
        echo "<table ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    <thead class=\"thead-default\">
    <tr class=\"column-headers\">
      <th scope=\"col\">
        ";
        // line 78
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "id_product_attribute");
        echo "
      </th>
      <th scope=\"col\"></th>
      <th scope=\"col\">
        ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", [], "Admin.Global"), "html", null, true);
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 85
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "reference");
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 88
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact on price (tax excl.)", [], "Admin.Catalog.Feature"), "price");
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 94
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "stock_quantity");
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 97
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default combination", [], "Admin.Catalog.Feature"), "default_on");
        echo "
      </th>
      <th scope=\"col\">
        ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
      </th>
    </tr>
    </thead>
    <tbody>";
        // line 105
        $this->displayBlock("form_rows", $context, $blocks);
        // line 106
        echo "</tbody>
  </table>";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 106,  198 => 105,  191 => 100,  185 => 97,  179 => 94,  173 => 91,  167 => 88,  161 => 85,  155 => 82,  148 => 78,  140 => 74,  138 => 73,  136 => 72,  134 => 70,  131 => 69,  124 => 64,  120 => 63,  114 => 60,  110 => 59,  104 => 56,  100 => 55,  94 => 52,  88 => 49,  82 => 46,  76 => 43,  67 => 37,  63 => 36,  57 => 34,  54 => 33,  50 => 30,  48 => 29,  44 => 28,  41 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:combination_listing_form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Form/combination_listing_form_theme.html.twig");
    }
}
