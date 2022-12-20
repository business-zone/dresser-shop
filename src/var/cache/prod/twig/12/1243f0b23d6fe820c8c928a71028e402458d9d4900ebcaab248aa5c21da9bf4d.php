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
class __TwigTemplate_820a52e58490b159f8093b1189a87ad9282fbb656ddcc3c7ecefce027f29a686 extends \Twig\Template
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
        echo "<div id=\"recommended_module_";
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
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
($context["domain"] ?? null))]));
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
        return array (  98 => 49,  88 => 45,  81 => 41,  74 => 37,  71 => 36,  58 => 35,  56 => 32,  55 => 29,  53 => 27,  35 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Common:recommendedModules.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/recommendedModules.html.twig");
    }
}
