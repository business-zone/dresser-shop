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

/* PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup/Blocks:showcase_card.html.twig */
class __TwigTemplate_133b936b1845b3161484c779dc2065891895fe8d0d34df8ebc597c3baf6d7a9e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup/Blocks:showcase_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup/Blocks:showcase_card.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !($context["isShowcaseCardClosed"] ?? $this->getContext($context, "isShowcaseCardClosed"))) {
            // line 27
            echo "  <div id=\"attributesShowcaseCard\" class=\"helper-card card\">
    <div class=\"helper-card__left helper-card__attribute shape-one\">
      <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/scss/img/helper-card/attributes@3x.png"), "html", null, true);
            echo "\" class=\"img-fluid img-rtl\">
    </div>
    <div class=\"helper-card__right\">
      <h2>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create attributes", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
      <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Color, dimension, size, disk space... think about attributes as properties that change from one product to another. As a consequence, attributes allow you to build product combinations.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</p>
      <a class=\"btn btn-outline-secondary\"
         href=\"";
            // line 35
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('documentation_link')->getCallable(), ["attribute"]), "html", null, true);
            echo "\"
         target=\"_blank\"
      >
        ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            echo "
      </a>
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\"
       data-card-name=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["showcaseCardName"] ?? $this->getContext($context, "showcaseCardName")), "html", null, true);
            echo "\"
       data-close-url=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_close_showcase_card");
            echo "\"
    >
      close
    </i>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup/Blocks:showcase_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 43,  73 => 42,  66 => 38,  60 => 35,  55 => 33,  51 => 32,  45 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% if not isShowcaseCardClosed %}
  <div id=\"attributesShowcaseCard\" class=\"helper-card card\">
    <div class=\"helper-card__left helper-card__attribute shape-one\">
      <img src=\"{{ asset('themes/new-theme/scss/img/helper-card/attributes@3x.png') }}\" class=\"img-fluid img-rtl\">
    </div>
    <div class=\"helper-card__right\">
      <h2>{{ 'Create attributes'|trans({}, 'Admin.Catalog.Feature') }}</h2>
      <p>{{ 'Color, dimension, size, disk space... think about attributes as properties that change from one product to another. As a consequence, attributes allow you to build product combinations.'|trans({}, 'Admin.Catalog.Feature') }}</p>
      <a class=\"btn btn-outline-secondary\"
         href=\"{{ documentation_link('attribute') }}\"
         target=\"_blank\"
      >
        {{ 'Learn more'|trans({}, 'Admin.Actions') }}
      </a>
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\"
       data-card-name=\"{{ showcaseCardName }}\"
       data-close-url=\"{{ path('admin_close_showcase_card') }}\"
    >
      close
    </i>
  </div>
{% endif %}
", "PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup/Blocks:showcase_card.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/AttributeGroup/Blocks/showcase_card.html.twig");
    }
}
