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

/* PrestaShopBundle:Admin/Improve/Design/Theme/Blocks:rtl_configuration.html.twig */
class __TwigTemplate_04eff3a5c1db1d8e7ef390b5d4e4d0fcbec70c6373567bc4d5b689e80494c22f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Improve/Design/Theme/Blocks:rtl_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Improve/Design/Theme/Blocks:rtl_configuration.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/Improve/Design/Theme/Blocks:rtl_configuration.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["adaptThemeToRtlLanguagesForm"] ?? $this->getContext($context, "adaptThemeToRtlLanguagesForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_adapt_to_rtl_languages")]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adaptation to Right-to-Left languages", [], "Admin.Design.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Be careful! Please check your theme in an RTL language before generating the RTL stylesheet: your theme could be already adapted to RTL.
Once you enable the \"%generate_rtl_label%\" option, any RTL-specific file that you might have added to your theme might be deleted by the created stylesheet.", ["%generate_rtl_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate RTL stylesheet", [], "Admin.Design.Feature")], "Admin.Design.Help"), "html", null, true);
        echo "
        </p>
      </div>

      ";
        // line 41
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["adaptThemeToRtlLanguagesForm"] ?? $this->getContext($context, "adaptThemeToRtlLanguagesForm")), "theme_to_adapt", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme to adapt", [], "Admin.Design.Feature")]);
        // line 43
        echo "

      ";
        // line 45
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["adaptThemeToRtlLanguagesForm"] ?? $this->getContext($context, "adaptThemeToRtlLanguagesForm")), "generate_rtl_css", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate RTL stylesheet", [], "Admin.Design.Feature")]);
        // line 47
        echo "
    </div>
  </div>

  ";
        // line 51
        if ((($context["isMultiShopFeatureUsed"] ?? $this->getContext($context, "isMultiShopFeatureUsed")) && ($context["isSingleShopContext"] ?? $this->getContext($context, "isSingleShopContext")))) {
            // line 52
            echo "    <hr>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
            // line 55
            echo $context["ps"]->getmultistore_switch(($context["shopLogosForm"] ?? $this->getContext($context, "shopLogosForm")), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Multistore", [], "Admin.Global")]);
            // line 57
            echo "
      </div>
    </div>
  ";
        }
        // line 61
        echo "  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["adaptThemeToRtlLanguagesForm"] ?? $this->getContext($context, "adaptThemeToRtlLanguagesForm")), 'rest');
        echo "
";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["adaptThemeToRtlLanguagesForm"] ?? $this->getContext($context, "adaptThemeToRtlLanguagesForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Improve/Design/Theme/Blocks:rtl_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 70,  109 => 69,  101 => 64,  96 => 61,  90 => 57,  88 => 55,  83 => 52,  81 => 51,  75 => 47,  73 => 45,  69 => 43,  67 => 41,  59 => 37,  50 => 31,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{{ form_start(adaptThemeToRtlLanguagesForm, {'action': path('admin_themes_adapt_to_rtl_languages')}) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    {{ 'Adaptation to Right-to-Left languages'|trans({}, 'Admin.Design.Feature') }}
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          {{ 'Be careful! Please check your theme in an RTL language before generating the RTL stylesheet: your theme could be already adapted to RTL.\\nOnce you enable the \"%generate_rtl_label%\" option, any RTL-specific file that you might have added to your theme might be deleted by the created stylesheet.'|trans({'%generate_rtl_label%': 'Generate RTL stylesheet'|trans({}, 'Admin.Design.Feature')}, 'Admin.Design.Help') }}
        </p>
      </div>

      {{ ps.form_group_row(adaptThemeToRtlLanguagesForm.theme_to_adapt, {}, {
        'label': 'Theme to adapt'|trans({}, 'Admin.Design.Feature')
      }) }}

      {{ ps.form_group_row(adaptThemeToRtlLanguagesForm.generate_rtl_css, {}, {
        'label': 'Generate RTL stylesheet'|trans({}, 'Admin.Design.Feature')
      }) }}
    </div>
  </div>

  {% if isMultiShopFeatureUsed and isSingleShopContext %}
    <hr>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        {{ ps.multistore_switch(shopLogosForm, {
          'label': 'Multistore'|trans({}, 'Admin.Global'),
        }) }}
      </div>
    </div>
  {% endif %}
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        {{ 'Save'|trans({}, 'Admin.Actions') }}
      </button>
    </div>
  </div>
</div>
{{ form_rest(adaptThemeToRtlLanguagesForm) }}
{{ form_end(adaptThemeToRtlLanguagesForm) }}
", "PrestaShopBundle:Admin/Improve/Design/Theme/Blocks:rtl_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig");
    }
}
