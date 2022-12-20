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

/* PrestaShopBundle:Admin/Sell/Order/Order:create.html.twig */
class __TwigTemplate_71a2ca8f5ae2da727ecbc6afffc9df9548e163dcce303d472d0e2446304485f7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create order", [], "Admin.Orderscustomers.Feature");
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Sell/Order/Order:create.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 31
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/orders.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        // line 35
        echo "  <div id=\"order-creation-container\">
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 38
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/customer.html.twig", "PrestaShopBundle:Admin/Sell/Order/Order:create.html.twig", 38)->display($context);
        // line 39
        echo "      </div>
    </div>
    <div id=\"js-cart-info-wrapper\">
      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 44
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig", "PrestaShopBundle:Admin/Sell/Order/Order:create.html.twig", 44)->display($context);
        // line 45
        echo "        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 49
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig", "PrestaShopBundle:Admin/Sell/Order/Order:create.html.twig", 49)->display($context);
        // line 50
        echo "        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 54
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/addresses.html.twig", "PrestaShopBundle:Admin/Sell/Order/Order:create.html.twig", 54)->display($context);
        // line 55
        echo "        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 59
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig", "PrestaShopBundle:Admin/Sell/Order/Order:create.html.twig", 59)->display($context);
        // line 60
        echo "        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 64
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig", "PrestaShopBundle:Admin/Sell/Order/Order:create.html.twig", 64)->display($context);
        // line 65
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        // line 72
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_create.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Order/Order:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 74,  116 => 72,  113 => 71,  105 => 65,  103 => 64,  97 => 60,  95 => 59,  89 => 55,  87 => 54,  81 => 50,  79 => 49,  73 => 45,  71 => 44,  64 => 39,  62 => 38,  57 => 35,  54 => 34,  47 => 31,  44 => 30,  39 => 26,  37 => 28,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Order/Order:create.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/create.html.twig");
    }
}
