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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:modules-preview.html.twig */
class __TwigTemplate_79e539ce8da1ced365d86bf24c12078ae09617fcd2c0b9f616b6415658e8659c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:modules-preview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:modules-preview.html.twig"));

        // line 25
        echo "
<div class=\"module-render-container all-modules\">
  <p>
    <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose a module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules are relative to the product page of your shop.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "<br />
    ";
        // line 30
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To manage all your modules go to the [1]Installed module page[/1]", [], "Admin.Catalog.Feature"), ["[1]" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"]);
        echo "
  </p>

  <div class=\"row\">
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extraModules"] ?? $this->getContext($context, "extraModules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 35
            echo "      <div class=\"col-md-12 col-lg-6 col-xl-4\">
        <div class=\"module-item-wrapper-grid\">
          <div class=\"module-item-heading-grid\">
            <img class=\"module-logo-thumb-grid\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "img", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
            echo "\">
            <h3 class=\"text-ellipsis module-name-grid\">
              ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
            echo "
            </h3>
            <div class=\"text-ellipsis small-text module-version-author-grid\">
              ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "version", []), "html", null, true);
            echo " by ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "author", []), "html", null, true);
            echo "
            </div>
          </div>
          <div class=\"module-quick-description-grid small no-padding\">
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "description", []), "html", null, true);
            echo "
          </div>
          <div class=\"module-container\">
            <div class=\"module-quick-action-grid clearfix\">
              <button type=\"button\" class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", []), "html", null, true);
            echo "\">
                ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:modules-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 59,  98 => 52,  94 => 51,  87 => 47,  78 => 43,  72 => 40,  65 => 38,  60 => 35,  56 => 34,  49 => 30,  45 => 29,  41 => 28,  36 => 25,);
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

<div class=\"module-render-container all-modules\">
  <p>
    <h2>{{ 'Choose a module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    {{ 'These modules are relative to the product page of your shop.'|trans({}, 'Admin.Catalog.Feature') }}<br />
    {{ 'To manage all your modules go to the [1]Installed module page[/1]'|trans({}, 'Admin.Catalog.Feature')|replace({'[1]': '<a href=\"' ~ path(\"admin_module_manage\") ~ '\">', '[/1]': '</a>'})|raw }}
  </p>

  <div class=\"row\">
    {% for module in extraModules %}
      <div class=\"col-md-12 col-lg-6 col-xl-4\">
        <div class=\"module-item-wrapper-grid\">
          <div class=\"module-item-heading-grid\">
            <img class=\"module-logo-thumb-grid\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
            <h3 class=\"text-ellipsis module-name-grid\">
              {{ module.attributes.displayName }}
            </h3>
            <div class=\"text-ellipsis small-text module-version-author-grid\">
              {{ module.attributes.version }} by {{ module.attributes.author }}
            </div>
          </div>
          <div class=\"module-quick-description-grid small no-padding\">
            {{ module.attributes.description }}
          </div>
          <div class=\"module-container\">
            <div class=\"module-quick-action-grid clearfix\">
              <button type=\"button\" class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-{{ module.id }}\">
                {{ 'Configure'|trans({}, 'Admin.Actions') }}
              </button>
            </div>
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:modules-preview.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/modules-preview.html.twig");
    }
}
