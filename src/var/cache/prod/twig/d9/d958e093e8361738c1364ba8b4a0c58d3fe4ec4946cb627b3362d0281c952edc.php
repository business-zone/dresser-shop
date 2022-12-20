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

/* PrestaShopBundle:Admin/Sell/Catalog/Attribute:index.html.twig */
class __TwigTemplate_c403dbaadf6356c6f2eafe96afa554441ad0ef2f0d5ffc6f851b600529c8f6a5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'attributes_listing' => [$this, 'block_attributes_listing'],
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
        // line 27
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_attributes_create", ["attributeGroupId" =>         // line 29
($context["attributeGroupId"] ?? null)]), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new value", [], "Admin.Catalog.Feature"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Attribute:index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        // line 37
        echo "  ";
        $this->displayBlock('attributes_listing', $context, $blocks);
    }

    public function block_attributes_listing($context, array $blocks = [])
    {
        // line 38
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 40
        $this->loadTemplate("PrestaShopBundle:Admin/Sell/Catalog/Attribute:index.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Attribute:index.html.twig", 40, "1433101811")->display(twig_array_merge($context, ["grid" => ($context["attributeGrid"] ?? null)]));
        // line 51
        echo "      </div>
    </div>
  ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        // line 57
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/attribute.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Attribute:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 60,  76 => 59,  70 => 57,  67 => 56,  61 => 51,  59 => 40,  55 => 38,  48 => 37,  45 => 36,  40 => 26,  38 => 29,  37 => 27,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Attribute:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Attribute/index.html.twig");
    }
}


/* PrestaShopBundle:Admin/Sell/Catalog/Attribute:index.html.twig */
class __TwigTemplate_c403dbaadf6356c6f2eafe96afa554441ad0ef2f0d5ffc6f851b600529c8f6a5___1433101811 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 40
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Attribute:index.html.twig", 40);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    public function block_grid_panel_footer($context, array $blocks = [])
    {
        // line 42
        echo "            <div class=\"card-footer\">
              <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_attribute_groups_index");
        echo "\"
                 class=\"btn btn-outline-secondary\">
                <i class=\"material-icons\">arrow_back</i>
                ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to list", [], "Admin.Actions"), "html", null, true);
        echo "
              </a>
            </div>
          ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Attribute:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 46,  146 => 43,  143 => 42,  140 => 41,  130 => 40,  80 => 60,  76 => 59,  70 => 57,  67 => 56,  61 => 51,  59 => 40,  55 => 38,  48 => 37,  45 => 36,  40 => 26,  38 => 29,  37 => 27,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Attribute:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Attribute/index.html.twig");
    }
}
