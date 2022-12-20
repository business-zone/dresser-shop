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

/* PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup:index.html.twig */
class __TwigTemplate_6cf7b085fa17c43e4c6439c5eb09273cf911d0c767f4a1d836f83ccef0bd851f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'attribute_group_showcase_card' => [$this, 'block_attribute_group_showcase_card'],
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
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_attribute_groups_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new attribute", [], "Admin.Catalog.Feature"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup:index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        // line 37
        echo "
  ";
        // line 38
        $this->displayBlock('attribute_group_showcase_card', $context, $blocks);
        // line 45
        echo "
  ";
        // line 46
        $this->displayBlock('attributes_listing', $context, $blocks);
    }

    // line 38
    public function block_attribute_group_showcase_card($context, array $blocks = [])
    {
        // line 39
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/AttributeGroup/Blocks/showcase_card.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup:index.html.twig", 41)->display($context);
        // line 42
        echo "      </div>
    </div>
  ";
    }

    // line 46
    public function block_attributes_listing($context, array $blocks = [])
    {
        // line 47
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 49
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup:index.html.twig", 49)->display(twig_array_merge($context, ["grid" => ($context["attributeGroupGrid"] ?? null)]));
        // line 50
        echo "      </div>
    </div>
  ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        // line 56
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/attribute_group.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 59,  99 => 58,  93 => 56,  90 => 55,  84 => 50,  82 => 49,  78 => 47,  75 => 46,  69 => 42,  67 => 41,  63 => 39,  60 => 38,  56 => 46,  53 => 45,  51 => 38,  48 => 37,  45 => 36,  40 => 26,  38 => 27,  32 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/AttributeGroup:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/AttributeGroup/index.html.twig");
    }
}
