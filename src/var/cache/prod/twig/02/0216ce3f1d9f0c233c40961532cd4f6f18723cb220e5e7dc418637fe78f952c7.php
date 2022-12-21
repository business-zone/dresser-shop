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

/* PrestaShopBundle:Admin/Configure/AdvancedParameters/RequestSql:view.html.twig */
class __TwigTemplate_e8c25725d6e17378eee6037a64afb246ce32e248b15c6065c793be9d7fcf7cc6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'request_sql_view_block' => [$this, 'block_request_sql_view_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/AdvancedParameters/RequestSql:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/AdvancedParameters/RequestSql:view.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Configure/AdvancedParameters/RequestSql:view.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "  ";
        $this->displayBlock('request_sql_view_block', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_request_sql_view_block($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "request_sql_view_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "request_sql_view_block"));

        // line 31
        echo "    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card\">
          <div class=\"card-header\">
            <h3>
              <i class=\"material-icons\">list</i>
              ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query result", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["sqlRequestResult"] ?? $this->getContext($context, "sqlRequestResult")), "rows", [])), "html", null, true);
        echo ")
            </h3>
          </div>
            <div class=\"card-block\">
              ";
        // line 41
        if ( !twig_test_empty($this->getAttribute(($context["sqlRequestResult"] ?? $this->getContext($context, "sqlRequestResult")), "rows", []))) {
            // line 42
            echo "              <div class=\"table-responsive\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sqlRequestResult"] ?? $this->getContext($context, "sqlRequestResult")), "columns", []));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 47
                echo "                        <th>";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "</th>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sqlRequestResult"] ?? $this->getContext($context, "sqlRequestResult")), "rows", []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 53
                echo "                    <tr>
                      ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sqlRequestResult"] ?? $this->getContext($context, "sqlRequestResult")), "columns", []));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 55
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute(($context["requestSqlView"] ?? null), "attributes", [], "any", false, true), $context["column"], [], "array", true, true)) {
                        // line 56
                        echo "                          <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["requestSqlView"] ?? $this->getContext($context, "requestSqlView")), "attributes", []), $context["column"], [], "array"), "html", null, true);
                        echo "</td>
                        ";
                    } else {
                        // line 58
                        echo "                          <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["row"], $context["column"], [], "array"), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 60
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                  </tbody>
                </table>
              </div>
              ";
        } else {
            // line 67
            echo "                <div class=\"alert alert-warning\">
                  <p class=\"alert-text\">
                    ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This SQL query has no result.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "
                  </p>
                </div>
              ";
        }
        // line 73
        echo "            </div>
        </div>
      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/AdvancedParameters/RequestSql:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 73,  172 => 69,  168 => 67,  162 => 63,  155 => 61,  149 => 60,  143 => 58,  137 => 56,  134 => 55,  130 => 54,  127 => 53,  123 => 52,  118 => 49,  109 => 47,  105 => 46,  99 => 42,  97 => 41,  88 => 37,  80 => 31,  61 => 30,  52 => 29,  30 => 26,);
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

{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Advparameters.Feature\" %}

{% block content %}
  {% block request_sql_view_block %}
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card\">
          <div class=\"card-header\">
            <h3>
              <i class=\"material-icons\">list</i>
              {{ 'SQL query result'|trans }} ({{ sqlRequestResult.rows|length }})
            </h3>
          </div>
            <div class=\"card-block\">
              {% if sqlRequestResult.rows is not empty %}
              <div class=\"table-responsive\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      {% for column in sqlRequestResult.columns %}
                        <th>{{ column }}</th>
                      {% endfor %}
                    </tr>
                  </thead>
                  <tbody>
                    {% for row in sqlRequestResult.rows %}
                    <tr>
                      {% for column in sqlRequestResult.columns %}
                        {% if requestSqlView.attributes[column] is defined %}
                          <td>{{ requestSqlView.attributes[column] }}</td>
                        {% else %}
                          <td>{{ row[column] }}</td>
                        {% endif %}
                      {% endfor %}
                    </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
              {% else %}
                <div class=\"alert alert-warning\">
                  <p class=\"alert-text\">
                    {{ 'This SQL query has no result.'|trans({}, 'Admin.Advparameters.Notification') }}
                  </p>
                </div>
              {% endif %}
            </div>
        </div>
      </div>
    </div>
  {% endblock %}
{% endblock %}
", "PrestaShopBundle:Admin/Configure/AdvancedParameters/RequestSql:view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig");
    }
}
