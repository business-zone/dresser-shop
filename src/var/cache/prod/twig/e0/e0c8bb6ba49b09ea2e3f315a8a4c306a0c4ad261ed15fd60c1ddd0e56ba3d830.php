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

/* PrestaShopBundle:Admin/Sell/Customer:modal_create_success.html.twig */
class __TwigTemplate_100048bda4f532bf750beadeae61a46ebc6ae7501b7a0492255e2400ae893262 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Sell/Customer:modal_create_success.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        // line 32
        echo "  <script type=\"text/javascript\">
    ";
        // line 34
        echo "
    // legacy behavior
    if (typeof window.parent.setupCustomer !== \"undefined\") {
      \$('#customer', window.parent.document).val('";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["customerEmail"] ?? null), "js"), "html", null, true);
        echo "');
      window.parent.setupCustomer(";
        // line 38
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["customerId"] ?? null), "js"), "html", null, true);
        echo ");
    }
    // symfony behavior
    if (typeof window.parent.order_create !== \"undefined\") {
      \$('#customer-search-input', window.parent.document).val('";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["customerEmail"] ?? null), "js"), "html", null, true);
        echo "');
      window.parent.order_create.searchCustomerByString('";
        // line 43
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["customerEmail"] ?? null), "js"), "html", null, true);
        echo "');
    }

    window.parent.\$.fancybox.close();
  </script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Customer:modal_create_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  67 => 42,  60 => 38,  56 => 37,  51 => 34,  48 => 32,  45 => 31,  40 => 28,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Customer:modal_create_success.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/modal_create_success.html.twig");
    }
}
