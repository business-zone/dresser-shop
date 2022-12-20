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

/* PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:form.html.twig */
class __TwigTemplate_44d802ca3959637ecdf9618485fc53734f78e6ee0a4d80f34d1b75845342784e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'feature_form_block' => [$this, 'block_feature_form_block'],
            'feature_form_rest' => [$this, 'block_feature_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("PrestaShopBundle:Admin:macros.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('feature_form_block', $context, $blocks);
    }

    public function block_feature_form_block($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["featureForm"] ?? null), 'form_start');
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feature", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 38
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["featureForm"] ?? null), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>={}")]);
        // line 41
        echo "

        ";
        // line 43
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayFeatureForm", ["id_feature" => ($context["featureId"] ?? null)]);
        echo "

        ";
        // line 45
        if ($this->getAttribute(($context["featureForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 46
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["featureForm"] ?? null), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 48
            echo "
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        $this->displayBlock('feature_form_rest', $context, $blocks);
        // line 54
        echo "      </div>
    </div>

    <div class=\"card-footer\">
      ";
        // line 59
        echo "      <a href=\"";
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary float-right\">
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>

  ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["featureForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 51
    public function block_feature_form_rest($context, array $blocks = [])
    {
        // line 52
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["featureForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  117 => 51,  111 => 68,  103 => 63,  97 => 60,  93 => 59,  87 => 54,  85 => 51,  82 => 50,  78 => 48,  75 => 46,  73 => 45,  68 => 43,  64 => 41,  62 => 38,  54 => 33,  46 => 29,  40 => 28,  37 => 27,  35 => 26,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Features/Blocks:form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Features/Blocks/form.html.twig");
    }
}
