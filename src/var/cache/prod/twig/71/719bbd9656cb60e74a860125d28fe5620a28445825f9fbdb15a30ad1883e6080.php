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

/* PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates:edit.html.twig */
class __TwigTemplate_cf9d4e5ed42a6cf11941c05ff87ab99915afae690211f54e39c95082481ac4db extends \Twig\Template
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
        // line 31
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit: %name%", ["%name%" => $this->getAttribute($this->getAttribute(        // line 28
($context["editableOrderReturnState"] ?? null), "localizedNames", []), ($context["contextLangId"] ?? null), [], "array")], "Admin.Actions");
        // line 31
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates:edit.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        // line 34
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col\">
      ";
        // line 36
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates:edit.html.twig", 36)->display($context);
        // line 37
        echo "    </div>
  </div>
";
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        // line 42
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_return_states_form.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 44,  64 => 42,  61 => 41,  55 => 37,  53 => 36,  49 => 34,  46 => 33,  41 => 31,  39 => 28,  38 => 27,  36 => 26,  30 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderReturnStates:edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderReturnStates/edit.html.twig");
    }
}
