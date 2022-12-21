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

/* PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:form.html.twig */
class __TwigTemplate_2d477f9281a3e9810e409f1d8b3a59408dcb8d265d2dd6df93b33530bd2ef46f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'feature_form_block' => [$this, 'block_feature_form_block'],
            'feature_form_rest' => [$this, 'block_feature_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("PrestaShopBundle:Admin:macros.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('feature_form_block', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_feature_form_block($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_form_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_form_block"));

        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["featureForm"] ?? $this->getContext($context, "featureForm")), 'form_start');
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feature", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 38
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["featureForm"] ?? $this->getContext($context, "featureForm")), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>={}")]);
        // line 41
        echo "

        ";
        // line 43
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayFeatureForm", ["id_feature" => ($context["featureId"] ?? $this->getContext($context, "featureId"))]);
        echo "

        ";
        // line 45
        if ($this->getAttribute(($context["featureForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 46
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["featureForm"] ?? $this->getContext($context, "featureForm")), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 48
            echo "
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        $this->displayBlock('feature_form_rest', $context, $blocks);
        // line 54
        echo "      </div>
    </div>

    <div class=\"card-footer\">
      ";
        // line 59
        echo "      <a href=\"";
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary float-right\">
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>

  ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["featureForm"] ?? $this->getContext($context, "featureForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_feature_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_form_rest"));

        // line 52
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["featureForm"] ?? $this->getContext($context, "featureForm")), 'rest');
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 52,  141 => 51,  129 => 68,  121 => 63,  115 => 60,  111 => 59,  105 => 54,  103 => 51,  100 => 50,  96 => 48,  93 => 46,  91 => 45,  86 => 43,  82 => 41,  80 => 38,  72 => 33,  64 => 29,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
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

{% import 'PrestaShopBundle:Admin:macros.html.twig' as ps %}

{% block feature_form_block %}
  {{ form_start(featureForm) }}

  <div class=\"card\">
    <h3 class=\"card-header\">
      {{ 'Feature'|trans({}, 'Admin.Catalog.Feature') }}
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        {{ ps.form_group_row(featureForm.name, {}, {
          'label': 'Name'|trans({}, 'Admin.Global'),
          'help': 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>={}'
        }) }}

        {{ renderhook('displayFeatureForm', {'id_feature': featureId}) }}

        {% if featureForm.shop_association is defined %}
          {{ ps.form_group_row(featureForm.shop_association, {}, {
            'label': 'Shop association'|trans({}, 'Admin.Global')
          }) }}
        {% endif %}

        {% block feature_form_rest %}
          {{ form_rest(featureForm) }}
        {% endblock %}
      </div>
    </div>

    <div class=\"card-footer\">
      {#@todo uncomment path when index is migrated#}
      <a href=\"{#{{ path('admin_features_index') }}#}\" class=\"btn btn-outline-secondary\">
        {{ 'Cancel'|trans({}, 'Admin.Actions') }}
      </a>
      <button class=\"btn btn-primary float-right\">
        {{ 'Save'|trans({}, 'Admin.Actions') }}
      </button>
    </div>
  </div>

  {{ form_end(featureForm) }}
{% endblock %}
", "PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Features/Blocks/form.html.twig");
    }
}
