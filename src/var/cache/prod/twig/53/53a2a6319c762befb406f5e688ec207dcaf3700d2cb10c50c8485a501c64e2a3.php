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

/* PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig */
class __TwigTemplate_50d4f0528f3231680da9bc7f0b06521a74a923b8ea9e231d9c583847af7486a1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'order_states_listing' => [$this, 'block_order_states_listing'],
            'order_return_states_listing' => [$this, 'block_order_return_states_listing'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 41
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statuses", [], "Admin.Navigation.Menu");
        // line 28
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_states_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new order status", [], "Admin.Shopparameters.Feature"), "icon" => "add_circle_outline"], "add_return_state" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_return_states_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new order return status", [], "Admin.Shopparameters.Feature"), "icon" => "add_circle_outline"]];
        // line 41
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", 41);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        // line 44
        echo "
  ";
        // line 45
        $this->displayBlock('order_states_listing', $context, $blocks);
        // line 53
        echo "
  ";
        // line 54
        $this->displayBlock('order_return_states_listing', $context, $blocks);
        // line 62
        echo "
";
    }

    // line 45
    public function block_order_states_listing($context, array $blocks = [])
    {
        // line 46
        echo "    <div class=\"row\">
      <div class=\"col-12\">
        ";
        // line 48
        $this->loadTemplate("PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", 48, "1182027314")->display(twig_array_merge($context, ["grid" => ($context["orderStatesGrid"] ?? null)]));
        // line 50
        echo "      </div>
    </div>
  ";
    }

    // line 54
    public function block_order_return_states_listing($context, array $blocks = [])
    {
        // line 55
        echo "    <div class=\"row\">
      <div class=\"col-12\">
        ";
        // line 57
        $this->loadTemplate("PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", 57, "1586531108")->display(twig_array_merge($context, ["grid" => ($context["orderReturnStatesGrid"] ?? null)]));
        // line 59
        echo "      </div>
    </div>
  ";
    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        // line 66
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_states.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 69,  106 => 68,  100 => 66,  97 => 65,  91 => 59,  89 => 57,  85 => 55,  82 => 54,  76 => 50,  74 => 48,  70 => 46,  67 => 45,  62 => 62,  60 => 54,  57 => 53,  55 => 45,  52 => 44,  49 => 43,  44 => 41,  42 => 28,  40 => 27,  38 => 26,  32 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/index.html.twig");
    }
}


/* PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig */
class __TwigTemplate_50d4f0528f3231680da9bc7f0b06521a74a923b8ea9e231d9c583847af7486a1___1182027314 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 48
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", 48);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 48,  110 => 69,  106 => 68,  100 => 66,  97 => 65,  91 => 59,  89 => 57,  85 => 55,  82 => 54,  76 => 50,  74 => 48,  70 => 46,  67 => 45,  62 => 62,  60 => 54,  57 => 53,  55 => 45,  52 => 44,  49 => 43,  44 => 41,  42 => 28,  40 => 27,  38 => 26,  32 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/index.html.twig");
    }
}


/* PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig */
class __TwigTemplate_50d4f0528f3231680da9bc7f0b06521a74a923b8ea9e231d9c583847af7486a1___1586531108 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 57
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", 57);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 57,  159 => 48,  110 => 69,  106 => 68,  100 => 66,  97 => 65,  91 => 59,  89 => 57,  85 => 55,  82 => 54,  76 => 50,  74 => 48,  70 => 46,  67 => 45,  62 => 62,  60 => 54,  57 => 53,  55 => 45,  52 => 44,  49 => 43,  44 => 41,  42 => 28,  40 => 27,  38 => 26,  32 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/index.html.twig");
    }
}
