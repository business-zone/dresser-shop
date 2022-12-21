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

/* PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:information_block.html.twig */
class __TwigTemplate_3fd40074cc7bd8bc9ae5cb3c871e1df5647e8957b181237eb534786de996ce30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:information_block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:information_block.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        if (($context["showHeaderAlert"] ?? $this->getContext($context, "showHeaderAlert"))) {
            // line 29
            echo "  <div class=\"alert alert-info\">
    <p>";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You need to register all the carriers with which you have chosen to work. PrestaShop comes with a selection of carrier modules you can install right below the page or buy on [1]Addons marketplace[/1].", ["[1]" => "<a href=\"https://addons.prestashop.com/en/520-shipping-carriers\">", "[/1]" => "</a>"], "Admin.Shipping.Help");
            echo "</p><br>
    <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If there is no existing module for your carrier, you can register it manually by clicking on \"[1]\" but before, please make sure you did not register a new carrier if a module already exists for it!", ["[1]" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new carrier", [], "Admin.Shipping.Feature")], "Admin.Shipping.Help"), "html", null, true);
            echo "</p>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:information_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 31,  47 => 30,  44 => 29,  42 => 28,  39 => 27,  36 => 25,);
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

{% trans_default_domain 'Admin.Shipping.Help' %}

{% if showHeaderAlert %}
  <div class=\"alert alert-info\">
    <p>{{ 'You need to register all the carriers with which you have chosen to work. PrestaShop comes with a selection of carrier modules you can install right below the page or buy on [1]Addons marketplace[/1].'|trans({'[1]': '<a href=\"https://addons.prestashop.com/en/520-shipping-carriers\">', '[/1]': '</a>'}, 'Admin.Shipping.Help')|raw }}</p><br>
    <p>{{ 'If there is no existing module for your carrier, you can register it manually by clicking on \"[1]\" but before, please make sure you did not register a new carrier if a module already exists for it!'|trans({'[1]': 'Add new carrier'|trans({}, 'Admin.Shipping.Feature')}, 'Admin.Shipping.Help') }}</p>
  </div>
{% endif %}
", "PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:information_block.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig");
    }
}
