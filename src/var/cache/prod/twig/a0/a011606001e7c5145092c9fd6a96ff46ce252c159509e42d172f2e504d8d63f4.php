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

/* PrestaShopBundle:Admin/Common/Grid/Actions/Row:delete_customer_discount.html.twig */
class __TwigTemplate_ea2aaba7920ae838bb0b483319f67f156e46e223d4ca08f4e569015277e605ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Common/Grid/Actions/Row:delete_customer_discount.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Common/Grid/Actions/Row:delete_customer_discount.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["class"] = "btn tooltip-link js-submit-row-action";
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute(($context["attributes"] ?? null), "class", [], "any", true, true)) {
            // line 29
            echo "  ";
            $context["class"] = ((($context["class"] ?? $this->getContext($context, "class")) . " ") . $this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "class", []));
        }
        // line 31
        echo "
";
        // line 32
        $context["confirmation_message"] = $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "confirm_message", []);
        // line 33
        echo "
<button class=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", [])), "html", null, true);
        echo "-row-link\"
   type=\"button\"
   data-confirm-message=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["confirmation_message"] ?? $this->getContext($context, "confirmation_message")), "html", null, true);
        echo "\"
   data-url=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["id_cart_rule" => $this->getAttribute(($context["record"] ?? $this->getContext($context, "record")), $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "id_cart_rule", []), [], "array"), "deletecart_rule" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", [])]), "html", null, true);
        echo "\"
   data-method=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "method", []), "html", null, true);
        echo "\"
  ";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "modal_options", [], "any", false, true), "options", [], "any", true, true)) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", []), "modal_options", []), "options", []));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 41
                echo "      data-";
                echo twig_escape_filter($this->env, twig_replace_filter($context["attribute"], ["_" => "-"]), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "  ";
        }
        // line 44
        echo "  ";
        if ($this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "tooltip_name", [])) {
            // line 45
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", []), "html", null, true);
            echo "\"
  ";
        }
        // line 49
        echo ">
  ";
        // line 50
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []))) {
            // line 51
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 53
        echo "  ";
        if ( !$this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), "tooltip_name", [])) {
            // line 54
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", []), "html", null, true);
            echo "
  ";
        }
        // line 56
        echo "</button>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Common/Grid/Actions/Row:delete_customer_discount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 56,  124 => 54,  121 => 53,  115 => 51,  113 => 50,  110 => 49,  105 => 47,  101 => 45,  98 => 44,  95 => 43,  84 => 41,  79 => 40,  77 => 39,  73 => 38,  69 => 37,  65 => 36,  58 => 34,  55 => 33,  53 => 32,  50 => 31,  46 => 29,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% set class = 'btn tooltip-link js-submit-row-action' %}

{% if attributes.class is defined %}
  {% set class = class ~ ' ' ~ attributes.class %}
{% endif %}

{% set confirmation_message = action.options.confirm_message %}

<button class=\"{{ class }} grid-{{ action.name|lower }}-row-link\"
   type=\"button\"
   data-confirm-message=\"{{ confirmation_message }}\"
   data-url=\"{{ getAdminLink('AdminCartRules', true, {'id_cart_rule': record[action.options.id_cart_rule], 'deletecart_rule': 1, 'back': app.request.uri}) }}\"
   data-method=\"{{ action.options.method }}\"
  {% if action.options.modal_options.options is defined %}
    {% for attribute, value in action.options.modal_options.options %}
      data-{{ attribute|replace({'_':'-'}) }}=\"{{ value }}\"
    {% endfor %}
  {% endif %}
  {% if attributes.tooltip_name %}
    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"{{ action.name }}\"
  {% endif %}
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {% if not attributes.tooltip_name %}
    {{ action.name }}
  {% endif %}
</button>
", "PrestaShopBundle:Admin/Common/Grid/Actions/Row:delete_customer_discount.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/delete_customer_discount.html.twig");
    }
}
