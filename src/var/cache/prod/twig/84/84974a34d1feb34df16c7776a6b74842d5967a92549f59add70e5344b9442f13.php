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

/* PrestaShopBundle:Admin/Sell/Catalog/Features:create.html.twig */
class __TwigTemplate_87cb15bf58b8c0f3e8d1af177e5d7de75083ff4000332c1bc49adf4aae3028de extends \Twig\Template
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
        // line 28
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a new feature", [], "Admin.Catalog.Feature");
        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Features:create.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "  ";
        if ((array_key_exists("showDisabledFeatureWarning", $context) && ($context["showDisabledFeatureWarning"] ?? null))) {
            // line 32
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Features/Blocks/disabled_feature_warning.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Features:create.html.twig", 32)->display($context);
            // line 33
            echo "  ";
        } else {
            // line 34
            echo "    <div class=\"row justify-content-center\">
      <div class=\"col\">
        ";
            // line 36
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Features:create.html.twig", 36)->display(twig_array_merge($context, ["featureId" => null, "featureForm" =>             // line 38
($context["featureForm"] ?? null)]));
            // line 40
            echo "      </div>
    </div>
  ";
        }
    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        // line 46
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  ";
        // line 47
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form_javascripts.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Features:create.html.twig", 47)->display($context);
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Features:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 47,  72 => 46,  69 => 45,  62 => 40,  60 => 38,  59 => 36,  55 => 34,  52 => 33,  49 => 32,  46 => 31,  43 => 30,  38 => 28,  36 => 26,  30 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Features:create.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Features/create.html.twig");
    }
}
