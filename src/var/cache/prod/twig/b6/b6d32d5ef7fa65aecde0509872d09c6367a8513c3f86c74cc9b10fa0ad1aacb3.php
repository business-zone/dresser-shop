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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:basic.html.twig */
class __TwigTemplate_e6c344c395b81c307ef069c04629b11b2fe371e9903ec525785018f2e249c28f extends \Twig\Template
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
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute(($context["productForm"] ?? null), "categories", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/categories_form_theme.html.twig"], true);
        // line 27
        echo "
<div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid active\" id=\"basic-tab\">
  <div class=\"row\">
    <div class=\"col-md-9 left-column\">
      ";
        // line 31
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "basic", []), "features", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/features_form_theme.html.twig"], true);
        // line 32
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? null), "basic", []), 'row');
        echo "
    </div>
    <div class=\"col-md-3 right-column\">
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? null), "shortcuts", []), 'row');
        echo "
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? null), "categories", []), 'row');
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 36,  50 => 35,  43 => 32,  41 => 31,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:basic.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Tabs/basic.html.twig");
    }
}
