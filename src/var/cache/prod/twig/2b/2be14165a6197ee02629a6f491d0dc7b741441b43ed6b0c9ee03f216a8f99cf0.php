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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:modules.html.twig */
class __TwigTemplate_d3cdbedf6b244ff0f72ac06663931b51d01aadcaf73b9f8e0b5eb5804efa743d extends \Twig\Template
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
        if ( !twig_test_empty($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hooksArrayContent(($context["extraModulesHooks"] ?? null)))) {
            // line 27
            echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid\" id=\"modules-tab\">
  ";
            // line 28
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-preview.html.twig", ["extraModules" =>             // line 29
($context["extraModulesHooks"] ?? null)]);
            // line 30
            echo "

  ";
            // line 32
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig", ["extraModules" =>             // line 33
($context["extraModulesHooks"] ?? null)]);
            // line 34
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 34,  46 => 33,  45 => 32,  41 => 30,  39 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:modules.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Tabs/modules.html.twig");
    }
}
