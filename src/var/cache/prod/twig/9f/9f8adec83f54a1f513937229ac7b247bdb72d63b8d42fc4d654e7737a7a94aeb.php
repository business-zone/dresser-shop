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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:external_tab.html.twig */
class __TwigTemplate_ba49032dd4f24b3fd424780a2c2c7e0f4a07211c2ae569623d270e0449679f67 extends \Twig\Template
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
<div id=\"external-combination-tab\" class=\"form-horizontal row justify-content-md-center d-none\">
  <div class=\"col-xxl-10\">
    <div class=\"tab-content\">
      <div class=\"form-contenttab container-fluid\">
        <h2>
          ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </h2>

        ";
        // line 35
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/loading_state.html.twig");
        echo "

        ";
        // line 38
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig");
        echo "

        ";
        // line 41
        echo "        <div id=\"product_combinations_generator\"
             data-translations=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["generator.open" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Open combinations generator", [], "Admin.Catalog.Feature"), "generator.success" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Successfully generated %combinationsNb% combinations.", [], "Admin.Catalog.Feature"), "generator.action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate combinations|Generate combination|Generate %combinationsNb% combinations", [], "Admin.Catalog.Feature"), "search.placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search for attributes...", [], "Admin.Catalog.Feature"), "modal.title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate combinations", [], "Admin.Catalog.Feature"), "modal.close" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions")]), "html", null, true);
        // line 49
        echo "\"
        ></div>

        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Sell\\Catalog\\Product\\Combination:paginatedList", ["productId" =>         // line 53
($context["productId"] ?? null)]));
        // line 54
        echo "

        <div id=\"combinations-stock-availability\">
          ";
        // line 57
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/unavailable-feature.html.twig", ["featureTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Availability preferences", [], "Admin.Catalog.Feature")]);
        // line 59
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:external_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 59,  74 => 57,  69 => 54,  67 => 53,  66 => 52,  61 => 49,  59 => 42,  56 => 41,  50 => 38,  44 => 35,  38 => 31,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:external_tab.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/external_tab.html.twig");
    }
}
