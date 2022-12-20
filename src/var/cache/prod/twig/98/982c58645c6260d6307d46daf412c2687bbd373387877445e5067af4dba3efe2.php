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

/* PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration:index.html.twig */
class __TwigTemplate_7cab634e901b1a0e57f742b39297dfed5eb32b5f007ee6f441419dbc2d0e3150 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'import_data_configuration_panel' => [$this, 'block_import_data_configuration_panel'],
            'import_modal' => [$this, 'block_import_modal'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration:index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "<div class=\"row justify-content-center\">
  <div class=\"col-xl-10\">
    ";
        // line 32
        $this->displayBlock('import_data_configuration_panel', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('import_modal', $context, $blocks);
        // line 39
        echo "  </div>
</div>
";
    }

    // line 32
    public function block_import_data_configuration_panel($context, array $blocks = [])
    {
        // line 33
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration:index.html.twig", 33)->display($context);
        // line 34
        echo "    ";
    }

    // line 36
    public function block_import_modal($context, array $blocks = [])
    {
        // line 37
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration:index.html.twig", 37)->display($context);
        // line 38
        echo "    ";
    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        // line 44
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/imports_data.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 46,  85 => 44,  82 => 43,  78 => 38,  75 => 37,  72 => 36,  68 => 34,  65 => 33,  62 => 32,  56 => 39,  54 => 36,  51 => 35,  49 => 32,  45 => 30,  42 => 29,  32 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportDataConfiguration/index.html.twig");
    }
}
