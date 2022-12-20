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

/* PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn/Blocks:options.html.twig */
class __TwigTemplate_515267f0dd37bc2b2b631cca9d9e4089fb7de27211b34211b7dbe7230903ace9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'merchandise_return_options_form_rest' => [$this, 'block_merchandise_return_options_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn/Blocks:options.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["merchandiseReturnsOptionsForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_merchandise_returns_save_options")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise return (RMA) options", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 35
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["merchandiseReturnsOptionsForm"] ?? null), "enable_order_return", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable returns", [], "Admin.Orderscustomers.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Would you like to allow merchandise returns in your shop?", [], "Admin.Orderscustomers.Help")]);
        // line 38
        echo "

        ";
        // line 40
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["merchandiseReturnsOptionsForm"] ?? null), "order_return_period_in_days", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time limit of validity", [], "Admin.Orderscustomers.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How many days after the delivery date does the customer have to return a product?", [], "Admin.Orderscustomers.Help")]);
        // line 43
        echo "

        ";
        // line 45
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["merchandiseReturnsOptionsForm"] ?? null), "order_return_prefix", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return prefix", [], "Admin.Orderscustomers.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prefix used for merchandise returns (e.g. RE00001).", [], "Admin.Orderscustomers.Help")]);
        // line 48
        echo "

        ";
        // line 50
        $this->displayBlock('merchandise_return_options_form_rest', $context, $blocks);
        // line 53
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["merchandiseReturnsOptionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 50
    public function block_merchandise_return_options_form_rest($context, array $blocks = [])
    {
        // line 51
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["merchandiseReturnsOptionsForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn/Blocks:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 51,  93 => 50,  87 => 63,  79 => 58,  72 => 53,  70 => 50,  66 => 48,  64 => 45,  60 => 43,  58 => 40,  54 => 38,  52 => 35,  45 => 31,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/CustomerService/MerchandiseReturn/Blocks:options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/MerchandiseReturn/Blocks/options.html.twig");
    }
}
