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

/* PrestaShopBundle:Admin/Configure/AdvancedParameters/Profiles/Blocks:form.html.twig */
class __TwigTemplate_ae35ca2780a8a559c3e2803f8812cc4f90049bd763f80b191228c69133d3037f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'profile_form_rest' => [$this, 'block_profile_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/AdvancedParameters/Profiles/Blocks:form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/AdvancedParameters/Profiles/Blocks:form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/Configure/AdvancedParameters/Profiles/Blocks:form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? $this->getContext($context, "profileForm")), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">group</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["profileForm"] ?? $this->getContext($context, "profileForm")), 'errors');
        echo "

      ";
        // line 38
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["profileForm"] ?? $this->getContext($context, "profileForm")), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global")]);
        // line 40
        echo "

      ";
        // line 42
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["profileForm"] ?? $this->getContext($context, "profileForm")), "avatarUrl", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Avatar", [], "Admin.Global")]);
        // line 44
        echo "

      ";
        // line 46
        if ( !twig_test_empty(((array_key_exists("avatarUrl", $context)) ? (_twig_default_filter(($context["avatarUrl"] ?? $this->getContext($context, "avatarUrl")), "")) : ("")))) {
            // line 47
            echo "      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <img class=\"img-thumbnail clickable-avatar\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["avatarUrl"] ?? $this->getContext($context, "avatarUrl")), "html", null, true);
            echo "\" alt=\"\">
        </div>
      </div>
      ";
        }
        // line 54
        echo "
      ";
        // line 55
        $this->displayBlock('profile_form_rest', $context, $blocks);
        // line 58
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profiles_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">
      ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["profileForm"] ?? $this->getContext($context, "profileForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_profile_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profile_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profile_form_rest"));

        // line 56
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["profileForm"] ?? $this->getContext($context, "profileForm")), 'rest');
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/AdvancedParameters/Profiles/Blocks:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 56,  129 => 55,  117 => 69,  110 => 65,  104 => 62,  100 => 61,  95 => 58,  93 => 55,  90 => 54,  83 => 50,  78 => 47,  76 => 46,  72 => 44,  70 => 42,  66 => 40,  64 => 38,  59 => 36,  52 => 32,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
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

{{ form_start(profileForm) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">group</i>
    {{ 'Profile'|trans({}, 'Admin.Advparameters.Feature') }}
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      {{ form_errors(profileForm) }}

      {{ ps.form_group_row(profileForm.name, {}, {
        'label': 'Name'|trans({}, 'Admin.Global')
      }) }}

      {{ ps.form_group_row(profileForm.avatarUrl, {}, {
        'label': 'Avatar'|trans({}, 'Admin.Global')
      }) }}

      {% if avatarUrl|default('') is not empty %}
      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <img class=\"img-thumbnail clickable-avatar\" src=\"{{ avatarUrl }}\" alt=\"\">
        </div>
      </div>
      {% endif %}

      {% block profile_form_rest %}
        {{ form_rest(profileForm) }}
      {% endblock %}
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_profiles_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">
      {{ 'Save'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
</div>
{{ form_end(profileForm) }}
", "PrestaShopBundle:Admin/Configure/AdvancedParameters/Profiles/Blocks:form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Profiles/Blocks/form.html.twig");
    }
}
