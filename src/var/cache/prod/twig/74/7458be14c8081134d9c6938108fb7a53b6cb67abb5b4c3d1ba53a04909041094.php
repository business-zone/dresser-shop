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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Form:suppliers_form_theme.html.twig */
class __TwigTemplate_945928160fd3b0692e58e67645f7d51bf70286280fccfaf360724347acbc4fff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_supplier_row' => [$this, 'block_product_supplier_row'],
            'collection_row' => [$this, 'block_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('product_supplier_row', $context, $blocks);
        // line 51
        $this->displayBlock('collection_row', $context, $blocks);
    }

    // line 26
    public function block_product_supplier_row($context, array $blocks = [])
    {
        // line 27
        echo "<tr class=\"product_supplier_row\" id=\"product_supplier_row_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "name", []), "html", null, true);
        echo "\">
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 29
            echo "    ";
            $context["childType"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "block_prefixes", []), 1, []);
            // line 30
            echo "    ";
            if ((($context["childType"] ?? null) != "hidden")) {
                // line 31
                echo "      ";
                // line 32
                echo "      <td>
        ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
                // line 34
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
      </td>
    ";
            } elseif ( !twig_test_empty($this->getAttribute($this->getAttribute(            // line 36
$context["child"], "vars", []), "label", []))) {
                // line 37
                echo "      ";
                // line 38
                echo "      <td class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", []), "name", []), "html", null, true);
                echo "\">
        ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "supplier_name", []), 'widget');
                echo "
        <span class=\"preview\">";
                // line 40
                if ($this->getAttribute($this->getAttribute($context["child"], "vars", []), "value", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", []), "value", []), "html", null, true);
                }
                echo "</span>
      </td>
    ";
            } else {
                // line 43
                echo "      ";
                // line 44
                echo "      ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
    ";
            }
            // line 46
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </tr>";
    }

    // line 51
    public function block_collection_row($context, array $blocks = [])
    {
        // line 52
        echo "<div class=\"form-group product-suppliers-collection-row\">
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 54
        $this->displayBlock("form_alert", $context, $blocks);
        // line 57
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? null), "vars", []), "name", [])]);
        // line 58
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
      <div class=\"row\">
        <div class=\"col-sm\">
          <table class=\"table\">
            <thead class=\"thead-default\">
            <tr>
              ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["prototype"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 65
            echo "                ";
            // line 66
            echo "                ";
            $context["childType"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", []), "block_prefixes", []), 1, []);
            // line 67
            echo "                ";
            if (((($context["childType"] ?? null) != "hidden") ||  !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "vars", []), "label", [])))) {
                // line 68
                echo "                  <th>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", []), "label", []), "html", null, true);
                echo "</th>
                ";
            }
            // line 70
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tr>
            </thead>
            <tbody>";
        // line 74
        $this->displayBlock("form_rows", $context, $blocks);
        // line 75
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:suppliers_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 75,  159 => 74,  155 => 71,  149 => 70,  143 => 68,  140 => 67,  137 => 66,  135 => 65,  131 => 64,  121 => 58,  119 => 57,  117 => 54,  115 => 53,  112 => 52,  109 => 51,  105 => 47,  99 => 46,  93 => 44,  91 => 43,  83 => 40,  79 => 39,  74 => 38,  72 => 37,  70 => 36,  65 => 34,  61 => 33,  58 => 32,  56 => 31,  53 => 30,  50 => 29,  46 => 28,  41 => 27,  38 => 26,  34 => 51,  32 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:suppliers_form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Form/suppliers_form_theme.html.twig");
    }
}
