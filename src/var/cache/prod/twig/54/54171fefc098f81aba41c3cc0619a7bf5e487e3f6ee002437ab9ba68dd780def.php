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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:modules-content.html.twig */
class __TwigTemplate_d0d574225bdfc6fa21e5807b5a4b4828746accaf036e6e15e935fea4388b00d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:modules-content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:modules-content.html.twig"));

        // line 25
        echo "
<div class=\"row module-selection d-none\">
  <div class=\"col-md-12 col-lg-7\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extraModules"] ?? $this->getContext($context, "extraModules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 29
            echo "      <div class=\"module-render-container module-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
            echo "\">
        <div>
          <img class=\"top-logo\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "img", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
            echo "\">
          <h2 class=\"text-ellipsis module-name-grid\">
            ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
            echo "
          </h2>
          <div class=\"text-ellipsis small-text module-version\">
            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "version", []), "html", null, true);
            echo " by ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "author", []), "html", null, true);
            echo "
          </div>
        </div>
        <div class=\"small no-padding\">
          ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "description", []), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  </div>

  <div class=\"col-md-12 col-lg-5\">
    <h2>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <select class=\"modules-list-select\" data-toggle=\"select2\">
      ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extraModules"] ?? $this->getContext($context, "extraModules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 50
            echo "        <option value=\"module-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </select>
  </div>
</div>

<div class=\"module-contents d-none\">
  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extraModules"] ?? $this->getContext($context, "extraModules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 58
            echo "    <div id=\"module_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", []), "html", null, true);
            echo "\" class=\"module-render-container module-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
            echo "\">
      ";
            // line 59
            echo $this->getAttribute($context["module"], "content", []);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:modules-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 62,  126 => 59,  119 => 58,  115 => 57,  108 => 52,  97 => 50,  93 => 49,  88 => 47,  83 => 44,  73 => 40,  64 => 36,  58 => 33,  51 => 31,  45 => 29,  41 => 28,  36 => 25,);
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

<div class=\"row module-selection d-none\">
  <div class=\"col-md-12 col-lg-7\">
    {% for module in extraModules %}
      <div class=\"module-render-container module-{{ module.attributes.name }}\">
        <div>
          <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
          <h2 class=\"text-ellipsis module-name-grid\">
            {{ module.attributes.displayName }}
          </h2>
          <div class=\"text-ellipsis small-text module-version\">
            {{ module.attributes.version }} by {{ module.attributes.author }}
          </div>
        </div>
        <div class=\"small no-padding\">
          {{ module.attributes.description }}
        </div>
      </div>
    {% endfor %}
  </div>

  <div class=\"col-md-12 col-lg-5\">
    <h2>{{ 'Module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    <select class=\"modules-list-select\" data-toggle=\"select2\">
      {% for module in extraModules %}
        <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
      {% endfor %}
    </select>
  </div>
</div>

<div class=\"module-contents d-none\">
  {% for module in extraModules %}
    <div id=\"module_{{ module.id }}\" class=\"module-render-container module-{{ module.attributes.name }}\">
      {{ module.content|raw }}
    </div>
  {% endfor %}
</div>
", "PrestaShopBundle:Admin/Sell/Catalog/Product/Blocks:modules-content.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig");
    }
}
