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
class __TwigTemplate_72ad4266056d75f76c4f7ec007fe0a62262deec3df28e66b0e0d32849b7fb88d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/ProductPage/Forms:form_warehouse_combination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/ProductPage/Forms:form_warehouse_combination.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, ($context["warehouses"] ?? $this->getContext($context, "warehouses"))) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["warehouses"] ?? $this->getContext($context, "warehouses")));
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
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["collectionName"] ?? $this->getContext($context, "collectionName")), [], "array"), "vars", []), "label", []), "html", null, true);
                echo "</h4><br/>
                    ";
                // line 42
                if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["collectionName"] ?? $this->getContext($context, "collectionName")), [], "array")) > 1)) {
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
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["collectionName"] ?? $this->getContext($context, "collectionName")), [], "array"), 'errors');
                echo "
                    ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["collectionName"] ?? $this->getContext($context, "collectionName")), [], "array"));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  141 => 63,  131 => 59,  127 => 58,  123 => 57,  119 => 56,  115 => 55,  111 => 54,  106 => 52,  103 => 51,  99 => 50,  95 => 49,  91 => 47,  85 => 44,  82 => 43,  80 => 42,  76 => 41,  70 => 39,  68 => 38,  65 => 37,  61 => 36,  56 => 34,  50 => 31,  46 => 30,  38 => 26,  36 => 25,);
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
{% if warehouses|length > 0 %}
    <h4>{{ 'Product location in warehouses'|trans({}, 'Admin.Catalog.Feature') }}</h4>

    <div class=\"alert alert-info\" style=\"display:block; position: 'auto';\" role=\"alert\">
        <div class=\"alert-text\">
            <p>{{ 'This interface allows you to specify the warehouse in which the product is stocked.'|trans({}, 'Admin.Catalog.Help') }}</p>
            <p>{{ 'It is also possible to specify the location within the warehouse for each product or combination.'|trans({}, 'Admin.Catalog.Help') }}</p>
        </div>
    </div>
    <p>{{ 'Please choose the warehouses associated with this product.'|trans({}, 'Admin.Catalog.Feature') }}</p>

    {% for warehouse in warehouses %}
        <div class=\"panel panel-default\">
            {% set collectionName = 'warehouse_combination_' ~ warehouse.id_warehouse %}
            <div class=\"form-group\" id=\"warehouse_combination_{{ warehouse.id_warehouse }}\">
                <label class=\"col-sm-2 control-label\">
                    <h4>{{ form[collectionName].vars.label }}</h4><br/>
                    {% if form[collectionName]|length() > 1 %}
                        <button type=\"button\" class=\"btn btn-default check_all_warehouse\">
                            <i class=\"icon-check-sign\"></i> {{ 'Check / Uncheck all'|trans({}, 'Admin.Actions') }}
                        </button>
                    {% endif %}
                </label>
                <div class=\"col-sm-10\">
                    {{ form_errors(form[collectionName]) }}
                    {% for warehouse_combination in form[collectionName] %}
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">{{ warehouse_combination.vars.value.label }}</label>
                            <div class=\"col-sm-10\">
                                <div class=\"float-left col-lg-1\">{{ form_widget(warehouse_combination.activated) }}</div>
                                {{ form_label(warehouse_combination.location) }}
                                <div class=\"float-left col-lg-3\">{{ form_widget(warehouse_combination.location) }}</div>
                                {{ form_widget(warehouse_combination.id_product_attribute) }}
                                {{ form_widget(warehouse_combination.warehouse_id) }}
                                {{ form_widget(warehouse_combination.product_id) }}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endfor %}
{% endif %}
", "PrestaShopBundle:Admin/Product/ProductPage/Forms:form_warehouse_combination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig");
    }
}
