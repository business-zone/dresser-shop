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

/* PrestaShopBundle:Admin/Improve/Shipping/Carriers:index.html.twig */
class __TwigTemplate_51cf72e78591c2efdaa9e7e167e3527e46e89ab216d9102fabf8145c1fd19d3f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'carrier_showcase_card' => [$this, 'block_carrier_showcase_card'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Improve/Shipping/Carriers:index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        $this->displayBlock('carrier_showcase_card', $context, $blocks);
        // line 36
        echo "
  ";
        // line 37
        $this->loadTemplate("@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig", "PrestaShopBundle:Admin/Improve/Shipping/Carriers:index.html.twig", 37)->display($context);
        // line 38
        echo "  <div class=\"row\">
    <div class=\"col\">
        ";
        // line 40
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "PrestaShopBundle:Admin/Improve/Shipping/Carriers:index.html.twig", 40)->display(twig_array_merge($context, ["grid" => ($context["carrierGrid"] ?? null)]));
        // line 41
        echo "    </div>
  </div>

  ";
        // line 45
        echo "  <div class=\"row\">
    <div class=\"col\"></div>
  </div>
";
    }

    // line 29
    public function block_carrier_showcase_card($context, array $blocks = [])
    {
        // line 30
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 32
        $this->loadTemplate("@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/showcase_card.html.twig", "PrestaShopBundle:Admin/Improve/Shipping/Carriers:index.html.twig", 32)->display($context);
        // line 33
        echo "      </div>
    </div>
  ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        // line 51
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/carrier.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Improve/Shipping/Carriers:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 54,  94 => 53,  88 => 51,  85 => 50,  79 => 33,  77 => 32,  73 => 30,  70 => 29,  63 => 45,  58 => 41,  56 => 40,  52 => 38,  50 => 37,  47 => 36,  44 => 29,  41 => 28,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Improve/Shipping/Carriers:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Carriers/index.html.twig");
    }
}
