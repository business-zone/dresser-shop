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

/* PrestaShopBundle:Admin/Sell/Address:modal_create_success.html.twig */
class __TwigTemplate_2c6a0602e6499b0717352923c944c1b79a6ae50f3b6bc5b3f01fd94b329f5898 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Sell/Address:modal_create_success.html.twig", 26);
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
        // line 35
        echo "
    // legacy behavior
    if (typeof window.parent.getSummary !== \"undefined\") {
      window.parent.getSummary();
    }

    // symfony behavior
    if (typeof window.parent.order_create !== \"undefined\") {
      window.parent.order_create.refreshAddressesList(";
        // line 43
        echo twig_escape_filter($this->env, ($context["refreshCartAddresses"] ?? null), "html", null, true);
        echo ");
    }
    if (typeof window.parent.order_view !== \"undefined\") {
      window.parent.location.reload();
    }

    window.parent.\$.fancybox.close();
  </script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Address:modal_create_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 43,  51 => 35,  48 => 32,  45 => 31,  40 => 28,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Address:modal_create_success.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Address/modal_create_success.html.twig");
    }
}
