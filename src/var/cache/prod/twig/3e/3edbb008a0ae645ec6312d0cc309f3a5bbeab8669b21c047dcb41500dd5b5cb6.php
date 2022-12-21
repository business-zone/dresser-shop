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

/* PrestaShopBundle:Admin/Multistore:dropdown.html.twig */
class __TwigTemplate_63f332d0e7b4e8553c201112222b097a3319560c41297651ba14b945921d51d0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'multistore_dropdown' => [$this, 'block_multistore_dropdown'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Multistore:dropdown.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Multistore:dropdown.html.twig"));

        // line 25
        $this->displayBlock('multistore_dropdown', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_multistore_dropdown($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multistore_dropdown"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multistore_dropdown"));

        // line 26
        echo "  <div class=\"btn-group multistore-dropdown js-multistore-dropdown\">
    <button class=\"btn btn-outline-secondary btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton4\" data-toggle=\"dropdown\" data-flip=\"false\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <i class=\"material-icons\">storefront</i>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton4\">
      <div class=\"multistore-dropdown-search-container\">
        <i class=\"material-icons\">search</i>
        <input type=\"text\" class=\"form-control multistore-dropdown-search js-multistore-dropdown-search\" placeholder=\"Search shop name\" data-no-results=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No results found for", [], "Admin.Global"), "html", null, true);
        echo "\" data-searching=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching for", [], "Admin.Global"), "html", null, true);
        echo "\">
      </div>

      <div class=\"multistore-dropdown-content js-multistore-scrollbar\">
        <ul class=\"multistore-dropdown-group\">
          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupList"] ?? $this->getContext($context, "groupList")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 39
            echo "          <li class=\"multistore-dropdown-group-item\">
            <a class=\"multistore-dropdown-group-name\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\MultistoreUrlExtension')->generateGroupUrl($context["group"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", [], "Admin.Global") . " ") . $this->getAttribute($context["group"], "name", [])), "html", null, true);
            echo "</a>

            <ul class=\"multistore-dropdown-shops\">
              ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "shops", []));
            foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                // line 44
                echo "                <li class=\"multistore-dropdown-shop\">
                  <a class=\"multistore-dropdown-shop-name";
                // line 45
                if (($this->getAttribute($context["shop"], "hasMainUrl", [], "method") == false)) {
                    echo " multistore-dropdown-no-url\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "name", []), "html", null, true);
                    echo "</a>";
                } else {
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\MultistoreUrlExtension')->generateShopUrl($context["shop"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "name", []), "html", null, true);
                    echo "</a>";
                }
                // line 46
                echo "                  ";
                if (($this->getAttribute(($context["shopCustomizationChecker"] ?? $this->getContext($context, "shopCustomizationChecker")), "isConfigurationCustomizedForThisShop", [0 => ($context["configurationKey"] ?? $this->getContext($context, "configurationKey")), 1 => $context["shop"], 2 => ($context["isGroupShopContext"] ?? $this->getContext($context, "isGroupShopContext"))], "method") == true)) {
                    // line 47
                    echo "                    <p class=\"multistore-dropdown-shop-status multistore-dropdown-shop-status-locked\">
                      <i class=\"material-icons\">https</i>
                      ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customized", [], "Admin.Global"), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 51
                    echo "                    <p class=\"multistore-dropdown-shop-status\">
                      ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inherited", [], "Admin.Global"), "html", null, true);
                    echo "
                  ";
                }
                // line 54
                echo "                    </p>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            </ul>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </ul>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Multistore:dropdown.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 60,  136 => 57,  128 => 54,  123 => 52,  120 => 51,  115 => 49,  111 => 47,  108 => 46,  96 => 45,  93 => 44,  89 => 43,  81 => 40,  78 => 39,  74 => 38,  64 => 33,  55 => 26,  37 => 25,);
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
{% block multistore_dropdown %}
  <div class=\"btn-group multistore-dropdown js-multistore-dropdown\">
    <button class=\"btn btn-outline-secondary btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton4\" data-toggle=\"dropdown\" data-flip=\"false\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <i class=\"material-icons\">storefront</i>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton4\">
      <div class=\"multistore-dropdown-search-container\">
        <i class=\"material-icons\">search</i>
        <input type=\"text\" class=\"form-control multistore-dropdown-search js-multistore-dropdown-search\" placeholder=\"Search shop name\" data-no-results=\"{{ 'No results found for'|trans({}, 'Admin.Global') }}\" data-searching=\"{{ 'Searching for'|trans({}, 'Admin.Global') }}\">
      </div>

      <div class=\"multistore-dropdown-content js-multistore-scrollbar\">
        <ul class=\"multistore-dropdown-group\">
          {% for group in groupList %}
          <li class=\"multistore-dropdown-group-item\">
            <a class=\"multistore-dropdown-group-name\" href=\"{{ multistore_group_url(group) }}\">{{ \"Group\"|trans({}, 'Admin.Global') ~ ' ' ~ group.name }}</a>

            <ul class=\"multistore-dropdown-shops\">
              {% for shop in group.shops %}
                <li class=\"multistore-dropdown-shop\">
                  <a class=\"multistore-dropdown-shop-name{% if shop.hasMainUrl() == false %} multistore-dropdown-no-url\">{{ shop.name }}</a>{% else %}\" href=\"{{ multistore_shop_url(shop) }}\">{{ shop.name }}</a>{% endif %}
                  {% if shopCustomizationChecker.isConfigurationCustomizedForThisShop(configurationKey, shop, isGroupShopContext) == true %}
                    <p class=\"multistore-dropdown-shop-status multistore-dropdown-shop-status-locked\">
                      <i class=\"material-icons\">https</i>
                      {{ 'Customized'|trans({}, 'Admin.Global') }}
                  {% else %}
                    <p class=\"multistore-dropdown-shop-status\">
                      {{ 'Inherited'|trans({}, 'Admin.Global') }}
                  {% endif %}
                    </p>
                </li>
              {% endfor %}
            </ul>
          </li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>
{% endblock %}
", "PrestaShopBundle:Admin/Multistore:dropdown.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Multistore/dropdown.html.twig");
    }
}
