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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:options.html.twig */
class __TwigTemplate_8d7c8a764601ed795a31492746a5be21d21bd5737e6912712a643477e3c889f2 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "options", []), "customizations", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/customizations_form_theme.html.twig"], true);
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "options", [], "any", false, true), "suppliers", [], "any", true, true)) {
            // line 27
            echo "  ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "options", []), "suppliers", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/suppliers_form_theme.html.twig"], true);
        }
        // line 29
        echo "
<div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid\" id=\"options-tab\">
  ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["productForm"] ?? null), "options", []), 'row');
        echo "

  ";
        // line 33
        if (( !$this->getAttribute($this->getAttribute(($context["productForm"] ?? null), "options", [], "any", false, true), "suppliers", [], "any", true, true) && (($context["productType"] ?? null) == "combinations"))) {
            // line 34
            echo "    ";
            // line 35
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Suppliers", [], "Admin.Global"), "html", null, true);
            echo "</h2>
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To specify the suppliers of this product's combinations you can go to [1]{combinations_label}[/1] tab.", ["[1]" => "<a href=\"#combinations-tab\" class=\"tab-link\" data-target-tab=\"combinations-tab\">", "[/1]" => "</a>", "{combinations_label}" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Catalog.Feature")], "Admin.Catalog.Help");
            // line 42
            echo "<br>
      </p>
    </div>
  ";
        }
        // line 46
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 46,  60 => 42,  58 => 38,  51 => 35,  49 => 34,  47 => 33,  42 => 31,  38 => 29,  34 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Tabs:options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Tabs/options.html.twig");
    }
}
