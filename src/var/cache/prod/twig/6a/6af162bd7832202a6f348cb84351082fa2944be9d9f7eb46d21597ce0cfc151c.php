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

/* PrestaShopBundle:Admin/Common:recommendedModules.html.twig */
class __TwigTemplate_25c6303c0eab7e7487ea3201157fda486e3d603f2220277f0d857b0ff409c7f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Common:recommendedModules.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Common:recommendedModules.html.twig"));

        // line 25
        echo "<div id=\"recommended_module_";
        echo twig_escape_filter($this->env, ($context["domain"] ?? $this->getContext($context, "domain")), "html", null, true);
        echo "\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        $context['_iterated'] = false;
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
            // line 27
            echo "        ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/card.html.twig", "PrestaShopBundle:Admin/Common:recommendedModules.html.twig", 27)->display(twig_array_merge($context, ["module" =>             // line 29
$context["module"], "display_type" => "grid", "col_lg" => "col-lg-12", "additionalModalSuffix" => ("tab_product_" .             // line 32
($context["domain"] ?? $this->getContext($context, "domain")))]));
            // line 35
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 36
            echo "        <a href=\"https://addons.prestashop.com/\" target=\"_blank\" class=\"col-lg-12\">
            <img class=\"img-responsive center-block\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/img/bundle/pub_conversion_EN.gif"), "html", null, true);
            echo "\" />
        </a>
        <div class=\"clearfix\">&nbsp;</div>
        <a href=\"https://addons.prestashop.com/\" target=\"_blank\" class=\"col-lg-12\">
            <img class=\"img-responsive center-block\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/img/bundle/pub_loyalty_EN.gif"), "html", null, true);
            echo "\" />
        </a>
        <div class=\"clearfix\">&nbsp;</div>
        <a href=\"https://addons.prestashop.com/\" target=\"_blank\" class=\"col-lg-12\">
            <img class=\"img-responsive center-block\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/img/bundle/pub_trafic_EN.gif"), "html", null, true);
            echo "\" />
        </a>
        <div class=\"clearfix\">&nbsp;</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Common:recommendedModules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  94 => 45,  87 => 41,  80 => 37,  77 => 36,  64 => 35,  62 => 32,  61 => 29,  59 => 27,  41 => 26,  36 => 25,);
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
<div id=\"recommended_module_{{ domain }}\">
    {% for module in modules %}
        {% include '@PrestaShop/Admin/Module/Includes/card.html.twig'
            with {
                'module': module,
                'display_type': 'grid',
                'col_lg': 'col-lg-12',
                'additionalModalSuffix': 'tab_product_' ~ domain
            }
        %}
    {% else %}
        <a href=\"https://addons.prestashop.com/\" target=\"_blank\" class=\"col-lg-12\">
            <img class=\"img-responsive center-block\" src=\"{{ asset('themes/default/img/bundle/pub_conversion_EN.gif') }}\" />
        </a>
        <div class=\"clearfix\">&nbsp;</div>
        <a href=\"https://addons.prestashop.com/\" target=\"_blank\" class=\"col-lg-12\">
            <img class=\"img-responsive center-block\" src=\"{{ asset('themes/default/img/bundle/pub_loyalty_EN.gif') }}\" />
        </a>
        <div class=\"clearfix\">&nbsp;</div>
        <a href=\"https://addons.prestashop.com/\" target=\"_blank\" class=\"col-lg-12\">
            <img class=\"img-responsive center-block\" src=\"{{ asset('themes/default/img/bundle/pub_trafic_EN.gif') }}\" />
        </a>
        <div class=\"clearfix\">&nbsp;</div>
    {% endfor %}
</div>
", "PrestaShopBundle:Admin/Common:recommendedModules.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/recommendedModules.html.twig");
    }
}
