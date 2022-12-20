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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:edit.html.twig */
class __TwigTemplate_036b28ffffb7a7daf4574968edc548bbb6138dc8cad5b3fbdd079fdd77a8a562 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["combinationForm"] ?? null), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/combination_form_theme.html.twig"], true);
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($this->getAttribute(($context["combinationForm"] ?? null), "suppliers", []), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/suppliers_form_theme.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:edit.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 31
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        // line 35
        echo "<div class=\"row justify-content-center\">
  <div class=\"col-sm-12\">
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["combinationForm"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal combination-page", "novalidate" => "novalidate"]]);
        echo "
    <div class=\"card\">
      <div class=\"card-header\">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination details", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " -
        <span>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["combinationForm"] ?? null), "vars", []), "value", []), "name", []), "html", null, true);
        echo "</span>
      </div>
      <div class=\"card-block row\">
        <div id=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["combinationForm"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combinationForm"] ?? null), 'row');
        echo "
        </div>
      </div>
    </div>
    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["combinationForm"] ?? null), 'form_end');
        echo "
  </div>
</div>
";
    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        // line 55
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/combination_edit.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 57,  101 => 55,  98 => 54,  90 => 49,  83 => 45,  79 => 44,  73 => 41,  69 => 40,  63 => 37,  59 => 35,  56 => 34,  49 => 31,  46 => 30,  41 => 25,  39 => 28,  37 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Combination:edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/edit.html.twig");
    }
}
