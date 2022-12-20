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

/* PrestaShopBundle:Admin/Product/ProductPage/Forms:form_warehouse_combination.html.twig */
class __TwigTemplate_e0d1aaa581d9eba0e3564a4139973cbff2b68c40c5095254a5659293ae2f1a11 extends \Twig\Template
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
        // line 25
        if ((twig_length_filter($this->env, ($context["warehouses"] ?? null)) > 0)) {
            // line 26
            echo "    <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product location in warehouses", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h4>

    <div class=\"alert alert-info\" style=\"display:block; position: 'auto';\" role=\"alert\">
        <div class=\"alert-text\">
            <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This interface allows you to specify the warehouse in which the product is stocked.", [], "Admin.Catalog.Help"), "html", null, true);
            echo "</p>
            <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("It is also possible to specify the location within the warehouse for each product or combination.", [], "Admin.Catalog.Help"), "html", null, true);
            echo "</p>
        </div>
    </div>
    <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please choose the warehouses associated with this product.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</p>

    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["warehouses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["warehouse"]) {
                // line 37
                echo "        <div class=\"panel panel-default\">
            ";
                // line 38
                $context["collectionName"] = ("warehouse_combination_" . $this->getAttribute($context["warehouse"], "id_warehouse", []));
                // line 39
                echo "            <div class=\"form-group\" id=\"warehouse_combination_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["warehouse"], "id_warehouse", []), "html", null, true);
                echo "\">
                <label class=\"col-sm-2 control-label\">
                    <h4>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), ($context["collectionName"] ?? null), [], "array"), "vars", []), "label", []), "html", null, true);
                echo "</h4><br/>
                    ";
                // line 42
                if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), ($context["collectionName"] ?? null), [], "array")) > 1)) {
                    // line 43
                    echo "                        <button type=\"button\" class=\"btn btn-default check_all_warehouse\">
                            <i class=\"icon-check-sign\"></i> ";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                    echo "
                        </button>
                    ";
                }
                // line 47
                echo "                </label>
                <div class=\"col-sm-10\">
                    ";
                // line 49
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), ($context["collectionName"] ?? null), [], "array"), 'errors');
                echo "
                    ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), ($context["collectionName"] ?? null), [], "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["warehouse_combination"]) {
                    // line 51
                    echo "                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["warehouse_combination"], "vars", []), "value", []), "label", []), "html", null, true);
                    echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"float-left col-lg-1\">";
                    // line 54
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["warehouse_combination"], "activated", []), 'widget');
                    echo "</div>
                                ";
                    // line 55
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["warehouse_combination"], "location", []), 'label');
                    echo "
                                <div class=\"float-left col-lg-3\">";
                    // line 56
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["warehouse_combination"], "location", []), 'widget');
                    echo "</div>
                                ";
                    // line 57
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["warehouse_combination"], "id_product_attribute", []), 'widget');
                    echo "
                                ";
                    // line 58
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["warehouse_combination"], "warehouse_id", []), 'widget');
                    echo "
                                ";
                    // line 59
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["warehouse_combination"], "product_id", []), 'widget');
                    echo "
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warehouse_combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warehouse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/ProductPage/Forms:form_warehouse_combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 63,  125 => 59,  121 => 58,  117 => 57,  113 => 56,  109 => 55,  105 => 54,  100 => 52,  97 => 51,  93 => 50,  89 => 49,  85 => 47,  79 => 44,  76 => 43,  74 => 42,  70 => 41,  64 => 39,  62 => 38,  59 => 37,  55 => 36,  50 => 34,  44 => 31,  40 => 30,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Product/ProductPage/Forms:form_warehouse_combination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig");
    }
}
