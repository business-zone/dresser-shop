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

/* PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_data_configuration.html.twig */
class __TwigTemplate_be3641a04895b18bc4be5788c0b274cd25d1100f399ceef8f9790668ed14150f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_data_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_data_configuration.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importDataConfigurationForm"] ?? $this->getContext($context, "importDataConfigurationForm")), 'form_start', ["attr" => ["class" => "import-data-configuration-form"]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">list</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Match your data", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"alert alert-info\" role=\"alert\">
            <p class=\"alert-text\">
              ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please match each column of your source file to one of the destination columns.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </p>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Load a data matching configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          <div class=\"form-row\">
            <div class=\"col\">
              ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importDataConfigurationForm"] ?? $this->getContext($context, "importDataConfigurationForm")), "matches", []), 'widget');
        echo "
            </div>
            <div class=\"col\">
              <button
                class=\"btn btn-outline-primary js-load-import-match\"
                data-url=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_data_configuration_get");
        echo "\"
              >
                <i class=\"material-icons\">settings</i> ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Load", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
              <button
                class=\"btn btn-outline-primary js-delete-import-match\"
                data-url=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_data_configuration_delete");
        echo "\"
              >
                <i class=\"material-icons\">delete</i> ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save your data matching configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          <div class=\"form-row\">
            <div class=\"col\">
              ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importDataConfigurationForm"] ?? $this->getContext($context, "importDataConfigurationForm")), "match_name", []), 'widget', ["attr" => ["class" => "js-import-match-input", "type" => "button"]]);
        echo "
            </div>
            <div class=\"col\">
              <button
                class=\"btn btn-outline-primary js-save-import-match\"
                data-url=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_data_configuration_create");
        echo "\"
              >
                <i class=\"material-icons\">save</i> ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rows to skip", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importDataConfigurationForm"] ?? $this->getContext($context, "importDataConfigurationForm")), "skip", []), 'widget', ["attr" => ["class" => "col-xs-12 col-md-4 js-rows-skip", "min" => 0]]);
        echo "
          <small class=\"form-text\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Indicate how many of the first rows of your file should be skipped when importing the data. For instance set it to 1 if the first row of your file contains headers.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</small>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"alert alert-warning js-validation-error js-duplicate-columns-warning d-none\" role=\"alert\">
            <p class=\"alert-text\">
              ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Two columns cannot have the same type of values", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </p>
          </div>
          <div class=\"alert alert-warning js-validation-error js-missing-column-warning d-none\" role=\"alert\">
            <p class=\"alert-text\">
              ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This column must be set:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
              <span class=\"js-missing-column\">&nbsp;</span>
            </p>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <table
          class=\"table table-bordered js-import-data-table\"
          data-required-fields=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["requiredFields"] ?? $this->getContext($context, "requiredFields"))), "html", null, true);
        echo "\"
        >
          <thead>
            <tr>
              ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["importDataConfigurationForm"] ?? $this->getContext($context, "importDataConfigurationForm")), "type_value", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["importEntityField"]) {
            // line 122
            echo "                <th class=\"js-entity-field ";
            if (($this->getAttribute($context["loop"], "index", []) > ($context["maxVisibleColumns"] ?? $this->getContext($context, "maxVisibleColumns")))) {
                echo " d-none";
            }
            echo "\">
                  ";
            // line 123
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["importEntityField"], 'errors');
            echo "
                  ";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["importEntityField"], 'widget');
            echo "
                </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['importEntityField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "            </tr>
          </thead>
          <tbody>
            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dataRowCollection"] ?? $this->getContext($context, "dataRowCollection")), "rows", []));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 131
            echo "              <tr>
                ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 133
                echo "                  <td";
                if (($this->getAttribute($context["loop"], "index", []) > ($context["maxVisibleColumns"] ?? $this->getContext($context, "maxVisibleColumns")))) {
                    echo " class=\"d-none\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cell"], "value", []), "html", null, true);
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col text-left\">
          <button class=\"btn btn-outline-primary js-import-previous-page d-none\" type=\"button\">
            <i class=\"material-icons\">arrow_back</i>
          </button>
        </div>
        <div class=\"col text-right\">
          <button
            class=\"btn btn-outline-primary js-import-next-page";
        // line 148
        if ( !($context["showPagingArrows"] ?? $this->getContext($context, "showPagingArrows"))) {
            echo " d-none";
        }
        echo "\"
            type=\"button\"
          >
            <i class=\"material-icons\">arrow_forward</i>
          </button>
        </div>
      </div>
      ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importDataConfigurationForm"] ?? $this->getContext($context, "importDataConfigurationForm")), 'rest');
        echo "
    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-between\">
      <a class=\"btn btn-outline-secondary js-import-process-button\"
         href=\"";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
        echo "\"
              data-import_url=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_process");
        echo "\"
      >
        <i class=\"material-icons\">cancel</i>
        ";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary js-process-import\">
        <i class=\"material-icons\">check</i>
        ";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
        // line 174
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importDataConfigurationForm"] ?? $this->getContext($context, "importDataConfigurationForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_data_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 174,  345 => 169,  338 => 165,  332 => 162,  328 => 161,  319 => 155,  307 => 148,  294 => 137,  287 => 135,  266 => 133,  249 => 132,  246 => 131,  242 => 130,  237 => 127,  220 => 124,  216 => 123,  209 => 122,  192 => 121,  185 => 117,  173 => 108,  165 => 103,  155 => 96,  151 => 95,  145 => 92,  134 => 84,  129 => 82,  121 => 77,  113 => 72,  102 => 64,  97 => 62,  90 => 58,  85 => 56,  77 => 51,  69 => 46,  59 => 39,  48 => 31,  42 => 28,  39 => 27,  36 => 25,);
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

{% trans_default_domain 'Admin.Advparameters.Feature' %}

{{ form_start(importDataConfigurationForm, {attr: {class: 'import-data-configuration-form'}}) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">list</i> {{ 'Match your data'|trans }}
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"alert alert-info\" role=\"alert\">
            <p class=\"alert-text\">
              {{ 'Please match each column of your source file to one of the destination columns.'|trans }}
            </p>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Load a data matching configuration'|trans }}
        </label>
        <div class=\"col-sm\">
          <div class=\"form-row\">
            <div class=\"col\">
              {{ form_widget(importDataConfigurationForm.matches) }}
            </div>
            <div class=\"col\">
              <button
                class=\"btn btn-outline-primary js-load-import-match\"
                data-url=\"{{ path('admin_import_data_configuration_get') }}\"
              >
                <i class=\"material-icons\">settings</i> {{ 'Load'|trans({}, 'Admin.Actions') }}
              </button>
              <button
                class=\"btn btn-outline-primary js-delete-import-match\"
                data-url=\"{{ path('admin_import_data_configuration_delete') }}\"
              >
                <i class=\"material-icons\">delete</i> {{ 'Delete'|trans({}, 'Admin.Actions') }}
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Save your data matching configuration'|trans }}
        </label>
        <div class=\"col-sm\">
          <div class=\"form-row\">
            <div class=\"col\">
              {{ form_widget(importDataConfigurationForm.match_name, {'attr': {'class': 'js-import-match-input', 'type': 'button'}}) }}
            </div>
            <div class=\"col\">
              <button
                class=\"btn btn-outline-primary js-save-import-match\"
                data-url=\"{{ path('admin_import_data_configuration_create') }}\"
              >
                <i class=\"material-icons\">save</i> {{ 'Save'|trans({}, 'Admin.Actions') }}
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Rows to skip'|trans }}
        </label>
        <div class=\"col-sm\">
          {{ form_widget(importDataConfigurationForm.skip, {'attr': {'class': 'col-xs-12 col-md-4 js-rows-skip', 'min': 0}}) }}
          <small class=\"form-text\">{{ 'Indicate how many of the first rows of your file should be skipped when importing the data. For instance set it to 1 if the first row of your file contains headers.'|trans }}</small>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"alert alert-warning js-validation-error js-duplicate-columns-warning d-none\" role=\"alert\">
            <p class=\"alert-text\">
              {{ 'Two columns cannot have the same type of values'|trans({}, 'Admin.Advparameters.Feature') }}
            </p>
          </div>
          <div class=\"alert alert-warning js-validation-error js-missing-column-warning d-none\" role=\"alert\">
            <p class=\"alert-text\">
              {{ 'This column must be set:'|trans({}, 'Admin.Advparameters.Feature') }}
              <span class=\"js-missing-column\">&nbsp;</span>
            </p>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <table
          class=\"table table-bordered js-import-data-table\"
          data-required-fields=\"{{ requiredFields|json_encode }}\"
        >
          <thead>
            <tr>
              {% for importEntityField in importDataConfigurationForm.type_value %}
                <th class=\"js-entity-field {% if loop.index > maxVisibleColumns %} d-none{% endif %}\">
                  {{ form_errors(importEntityField) }}
                  {{ form_widget(importEntityField) }}
                </th>
              {% endfor %}
            </tr>
          </thead>
          <tbody>
            {% for row in dataRowCollection.rows %}
              <tr>
                {% for cell in row %}
                  <td{% if loop.index > maxVisibleColumns %} class=\"d-none\"{% endif %}>{{ cell.value }}</td>
                {% endfor %}
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col text-left\">
          <button class=\"btn btn-outline-primary js-import-previous-page d-none\" type=\"button\">
            <i class=\"material-icons\">arrow_back</i>
          </button>
        </div>
        <div class=\"col text-right\">
          <button
            class=\"btn btn-outline-primary js-import-next-page{% if not showPagingArrows %} d-none{% endif %}\"
            type=\"button\"
          >
            <i class=\"material-icons\">arrow_forward</i>
          </button>
        </div>
      </div>
      {{ form_rest(importDataConfigurationForm) }}
    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-between\">
      <a class=\"btn btn-outline-secondary js-import-process-button\"
         href=\"{{ path('admin_import') }}\"
              data-import_url=\"{{ path('admin_import_process') }}\"
      >
        <i class=\"material-icons\">cancel</i>
        {{ 'Cancel'|trans({}, 'Admin.Actions') }}
      </a>
      <button class=\"btn btn-primary js-process-import\">
        <i class=\"material-icons\">check</i>
        {{ 'Import'|trans({}, 'Admin.Actions') }}
      </button>
    </div>
  </div>
</div>
{{ form_end(importDataConfigurationForm) }}
", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_data_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig");
    }
}
