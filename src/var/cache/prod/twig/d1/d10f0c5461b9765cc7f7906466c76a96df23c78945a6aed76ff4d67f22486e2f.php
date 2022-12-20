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

/* PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn:index.html.twig */
class __TwigTemplate_5e73741a9b10c203fe0fe43346c498b7511c007e2c363617749af20fa74377a9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'merchandise_returns_listing' => [$this, 'block_merchandise_returns_listing'],
            'merchandise_returns_options' => [$this, 'block_merchandise_returns_options'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 29
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise Returns", [], "Admin.Orderscustomers.Feature");
        // line 29
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn:index.html.twig", 29);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "  ";
        $this->displayBlock('merchandise_returns_listing', $context, $blocks);
        // line 39
        echo "
  ";
        // line 40
        $this->displayBlock('merchandise_returns_options', $context, $blocks);
    }

    // line 32
    public function block_merchandise_returns_listing($context, array $blocks = [])
    {
        // line 33
        echo "    <div class=\"row\">
      <div class=\"col-12\">
        ";
        // line 35
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn:index.html.twig", 35)->display(twig_array_merge($context, ["grid" => ($context["merchandiseReturnsGrid"] ?? null)]));
        // line 36
        echo "      </div>
    </div>
  ";
    }

    // line 40
    public function block_merchandise_returns_options($context, array $blocks = [])
    {
        // line 41
        echo "    <div class=\"row\">
      <div class=\"col-12\">
        ";
        // line 43
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/Blocks/options.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn:index.html.twig", 43)->display($context);
        // line 44
        echo "      </div>
    </div>
  ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        // line 50
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/merchandise_return.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 53,  99 => 52,  93 => 50,  90 => 49,  84 => 44,  82 => 43,  78 => 41,  75 => 40,  69 => 36,  67 => 35,  63 => 33,  60 => 32,  56 => 40,  53 => 39,  50 => 32,  47 => 31,  42 => 29,  40 => 27,  38 => 26,  32 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/MerchandiseReturn/index.html.twig");
    }
}
