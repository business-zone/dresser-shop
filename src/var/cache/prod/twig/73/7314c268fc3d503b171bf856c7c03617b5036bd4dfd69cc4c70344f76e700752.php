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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Form:features_form_theme.html.twig */
class __TwigTemplate_ff04db269a78bddd00b64df9e9478b8eb3d3c171ce4a5de9e775c43d33c040b3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'features_row' => [$this, 'block_features_row'],
            'feature_value_row' => [$this, 'block_feature_value_row'],
            'collection_row' => [$this, 'block_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('features_row', $context, $blocks);
        // line 33
        $this->displayBlock('feature_value_row', $context, $blocks);
        // line 64
        $this->displayBlock('collection_row', $context, $blocks);
    }

    // line 26
    public function block_features_row($context, array $blocks = [])
    {
        // line 27
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>

  ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 30
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 33
    public function block_feature_value_row($context, array $blocks = [])
    {
        // line 34
        echo "<div class=\"form-group row product-feature\">
    <div class=\"col-lg-12 col-xl-3\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "feature_id", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "feature_id", []), 'widget');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "feature_id", []), 'errors');
        echo "
      </fieldset>
    </div>
    <div class=\"col-lg-12 col-xl-4\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "feature_value_id", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "feature_value_id", []), 'widget');
        echo "
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "feature_value_id", []), 'errors');
        echo "
      </fieldset>
    </div>
    <div class=\"col-lg-11 col-xl-4\">
      <fieldset class=\"form-group mb-0\">
        <label class=\"form-control-label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "custom_value", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "custom_value_id", []), 'widget');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "custom_value", []), 'widget');
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "custom_value", []), 'errors');
        echo "
      </fieldset>
    </div>
    <div class=\"col-lg-1 col-xl-1\">
      ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delete", []), 'widget');
        echo "
    </div>
  </div>";
    }

    // line 64
    public function block_collection_row($context, array $blocks = [])
    {
        // line 66
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? null), "vars", []), "name", [])]);
        // line 67
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-group row feature-values-collection"))]);
        // line 69
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    <div class=\"col-sm\">";
        // line 71
        $this->displayBlock("form_rows", $context, $blocks);
        // line 72
        echo "</div>
  </div>";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:features_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 72,  134 => 71,  129 => 69,  127 => 67,  125 => 66,  122 => 64,  115 => 58,  108 => 54,  104 => 53,  100 => 52,  96 => 51,  88 => 46,  84 => 45,  80 => 44,  72 => 39,  68 => 38,  64 => 37,  59 => 34,  56 => 33,  52 => 30,  50 => 29,  44 => 27,  41 => 26,  37 => 64,  35 => 33,  33 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:features_form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Form/features_form_theme.html.twig");
    }
}
