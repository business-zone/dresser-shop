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
class __TwigTemplate_f85811830289ef59433ddffc06ec978274e0f92383ef747b648f9410adcbc4a8 extends \Twig\Template
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
        echo "
";
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importDataConfigurationForm"] ?? null), 'form_start', ["attr" => ["class" => "import-data-configuration-form"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importDataConfigurationForm"] ?? null), "matches", []), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importDataConfigurationForm"] ?? null), "match_name", []), 'widget', ["attr" => ["class" => "js-import-match-input", "type" => "button"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importDataConfigurationForm"] ?? null), "skip", []), 'widget', ["attr" => ["class" => "col-xs-12 col-md-4 js-rows-skip", "min" => 0]]);
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
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["requiredFields"] ?? null)), "html", null, true);
        echo "\"
        >
          <thead>
            <tr>
              ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["importDataConfigurationForm"] ?? null), "type_value", []));
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
            if (($this->getAttribute($context["loop"], "index", []) > ($context["maxVisibleColumns"] ?? null))) {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dataRowCollection"] ?? null), "rows", []));
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
                if (($this->getAttribute($context["loop"], "index", []) > ($context["maxVisibleColumns"] ?? null))) {
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
        if ( !($context["showPagingArrows"] ?? null)) {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importDataConfigurationForm"] ?? null), 'rest');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importDataConfigurationForm"] ?? null), 'form_end');
        echo "
";
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
        return array (  347 => 174,  339 => 169,  332 => 165,  326 => 162,  322 => 161,  313 => 155,  301 => 148,  288 => 137,  281 => 135,  260 => 133,  243 => 132,  240 => 131,  236 => 130,  231 => 127,  214 => 124,  210 => 123,  203 => 122,  186 => 121,  179 => 117,  167 => 108,  159 => 103,  149 => 96,  145 => 95,  139 => 92,  128 => 84,  123 => 82,  115 => 77,  107 => 72,  96 => 64,  91 => 62,  84 => 58,  79 => 56,  71 => 51,  63 => 46,  53 => 39,  42 => 31,  36 => 28,  33 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_data_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig");
    }
}
