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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:seo.html.twig */
class __TwigTemplate_efa41f4f88b4610f69ba1ce50fabff0c553d9b9c7162ad3b0bb325309e58ec72 extends \Twig\Template
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
        echo "
<div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid\" id=\"seo-tab\">
  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? null), "seo", []), 'row');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:seo.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Tabs/seo.html.twig");
    }
}
