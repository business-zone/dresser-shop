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

/* PrestaShopBundle:Admin/Module:tab-modules-list.html.twig */
class __TwigTemplate_388176988e4f79863aea886b54cc653918211d2f78e7bd8e4786e23a59a8e703 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:tab-modules-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:tab-modules-list.html.twig"));

        // line 25
        $context["modulesListShouldBeDisplayed"] = (array_key_exists("modulesList", $context) &&  !twig_test_empty(($context["modulesList"] ?? $this->getContext($context, "modulesList"))));
        // line 26
        if ((($context["modulesListShouldBeDisplayed"] ?? $this->getContext($context, "modulesListShouldBeDisplayed")) == true)) {
            // line 27
            echo "  <div class=\"row row-margin-bottom\">
  <div class=\"col-lg-12\">
    <ul class=\"nav nav-pills\">
      ";
            // line 30
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "notInstalled", [])) > 0)) {
                // line 31
                echo "      <li class=\"active\">
        <a href=\"#tab_modules_list_not_installed\" data-toggle=\"tab\">
          ";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not Installed", []), "html", null, true);
                echo "
        </a>
      </li>
      ";
            }
            // line 37
            echo "
      ";
            // line 38
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "installed", [])) > 0)) {
                // line 39
                echo "        <li ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "notInstalled", [])) == 0)) {
                    echo "class=\"active\"";
                }
                echo ">
        <a href=\"#tab_modules_list_installed\" data-toggle=\"tab\">
          ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installed", []), "html", null, true);
                echo "
        </a>
        </li>
      ";
            }
            // line 45
            echo "    </ul>
  </div>
</div>
<div id=\"modules_list_container_content\" class=\"tab-content modal-content-overflow\">
  ";
            // line 49
            if (($this->getAttribute(($context["modulesList"] ?? null), "notInstalled", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "notInstalled", [])))) {
                // line 50
                echo "  <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\">
    <table id=\"tab_modules_list_not_installed\" class=\"table\">
      ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "notInstalled", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 53
                    echo "        ";
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["module"]]);
                    echo "
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "    </table>
  </div>
  ";
            }
            // line 58
            echo "  ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "installed", [])) > 0)) {
                // line 59
                echo "  <div class=\"tab-pane ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "notInstalled", [])) == 0)) {
                    echo "active";
                }
                echo "\" id=\"tab_modules_list_installed\">
    <table id=\"tab_modules_list_installed\" class=\"table\">
      ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "installed", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 62
                    echo "        ";
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["module"]]);
                    echo "
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "    </table>
  </div>
  ";
            }
            // line 67
            echo "</div>
";
        }
        // line 69
        echo "<div class=\"alert alert-addons row-margin-top\" role=\"alert\">
  <p class=\"alert-text\">
    <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "html", null, true);
        echo "&amp;utm_content=download";
        if (array_key_exists("adminListFromSource", $context)) {
            echo "&amp;utm_term=";
            echo twig_escape_filter($this->env, ($context["adminListFromSource"] ?? $this->getContext($context, "adminListFromSource")), "html", null, true);
        }
        echo "\" onclick=\"return !window.open(this.href);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More modules on addons.prestashop.com", []), "html", null, true);
        echo "</a>
  </p>
</div>

";
        // line 75
        if ((($context["modulesListShouldBeDisplayed"] ?? $this->getContext($context, "modulesListShouldBeDisplayed")) == true)) {
            // line 76
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/module_card.bundle.js"), "html", null, true);
            echo "\"></script>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:tab-modules-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 76,  201 => 75,  187 => 71,  183 => 69,  179 => 67,  174 => 64,  157 => 62,  140 => 61,  132 => 59,  129 => 58,  124 => 55,  107 => 53,  90 => 52,  86 => 50,  84 => 49,  78 => 45,  71 => 41,  63 => 39,  61 => 38,  58 => 37,  51 => 33,  47 => 31,  45 => 30,  40 => 27,  38 => 26,  36 => 25,);
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
{% set modulesListShouldBeDisplayed = (modulesList is defined and modulesList is not empty) %}
{% if modulesListShouldBeDisplayed == true %}
  <div class=\"row row-margin-bottom\">
  <div class=\"col-lg-12\">
    <ul class=\"nav nav-pills\">
      {% if modulesList.notInstalled|length > 0 %}
      <li class=\"active\">
        <a href=\"#tab_modules_list_not_installed\" data-toggle=\"tab\">
          {{ 'Not Installed'|trans({}) }}
        </a>
      </li>
      {% endif %}

      {% if modulesList.installed|length > 0 %}
        <li {% if modulesList.notInstalled|length == 0 %}class=\"active\"{% endif %}>
        <a href=\"#tab_modules_list_installed\" data-toggle=\"tab\">
          {{ 'Installed'|trans({}) }}
        </a>
        </li>
      {% endif %}
    </ul>
  </div>
</div>
<div id=\"modules_list_container_content\" class=\"tab-content modal-content-overflow\">
  {% if modulesList.notInstalled is defined and modulesList.notInstalled is not empty %}
  <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\">
    <table id=\"tab_modules_list_not_installed\" class=\"table\">
      {% for module in modulesList.notInstalled %}
        {{ include('@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig',{'module': module}) }}
      {% endfor %}
    </table>
  </div>
  {% endif %}
  {% if modulesList.installed|length > 0 %}
  <div class=\"tab-pane {% if modulesList.notInstalled|length == 0 %}active{% endif %}\" id=\"tab_modules_list_installed\">
    <table id=\"tab_modules_list_installed\" class=\"table\">
      {% for module in modulesList.installed %}
        {{ include('@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig',{'module': module}) }}
      {% endfor %}
    </table>
  </div>
  {% endif %}
</div>
{% endif %}
<div class=\"alert alert-addons row-margin-top\" role=\"alert\">
  <p class=\"alert-text\">
    <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-{{ app.request.locale }}&amp;utm_content=download{% if adminListFromSource is defined %}&amp;utm_term={{ adminListFromSource }}{% endif %}\" onclick=\"return !window.open(this.href);\">{{ 'More modules on addons.prestashop.com'|trans({}) }}</a>
  </p>
</div>

{% if modulesListShouldBeDisplayed == true %}
  <script src=\"{{ asset('themes/new-theme/public/module_card.bundle.js') }}\"></script>
{% endif %}
", "PrestaShopBundle:Admin/Module:tab-modules-list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/tab-modules-list.html.twig");
    }
}
