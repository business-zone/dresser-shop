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

/* PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates/Blocks:form.html.twig */
class __TwigTemplate_71bd7b81bc3267c63fcffd407c8343c33ae707132962fcc1d738c8057423d160 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'order_state_form' => [$this, 'block_order_state_form'],
            'order_state_form_reset' => [$this, 'block_order_state_form_reset'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates/Blocks:form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('order_state_form', $context, $blocks);
    }

    public function block_order_state_form($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderStateForm"] ?? null), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order status", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderStateForm"] ?? null), 'errors');
        echo "

          ";
        // line 39
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status name", [], "Admin.Shopparameters.Feature"), "help" => ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order status (e.g. 'Pending').", [], "Admin.Shopparameters.Help") . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters: numbers and", [], "Admin.Shopparameters.Help")) . " !<>,;?=+()@#\"{}_\$%:")]);
        // line 45
        echo "

          ";
        // line 47
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "color", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Color", [], "Admin.Shopparameters.Feature"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status will be highlighted in this color. HTML colors only.", [], "Admin.Shopparameters.Help") . " \"lightblue\", \"#CC6600\")")]);
        // line 50
        echo "

          ";
        // line 52
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "loggable", []), [], ["label" => ""]);
        echo "

          ";
        // line 54
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "invoice", []), [], ["label" => ""]);
        echo "

          ";
        // line 56
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "hidden", []), [], ["label" => ""]);
        echo "

          ";
        // line 58
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "send_email", []), [], ["label" => ""]);
        echo "

          ";
        // line 60
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "pdf_invoice", []), [], ["label" => ""]);
        echo "

          ";
        // line 62
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "pdf_delivery", []), [], ["label" => ""]);
        echo "

          ";
        // line 64
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "shipped", []), [], ["label" => ""]);
        echo "

          ";
        // line 66
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "paid", []), [], ["label" => ""]);
        echo "

          ";
        // line 68
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "delivery", []), [], ["label" => ""]);
        echo "

          ";
        // line 70
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderStateForm"] ?? null), "template", []), ["options_extra" => ["data-preview" =>         // line 72
($context["templatesPreviewUrl"] ?? null)], "button" => ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", [], "Admin.Actions"), "icon" => "visibility", "class" => "btn btn-primary", "id" => "order_state_template_preview"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email template", [], "Admin.Shopparameters.Feature"), "hint" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status will be highlighted in this color. HTML colors only.", [], "Admin.Shopparameters.Help") . " \"lightblue\", \"#CC6600\")"), "class" => "order_state_template_select"]);
        // line 85
        echo "

          ";
        // line 87
        $this->displayBlock('order_state_form_reset', $context, $blocks);
        // line 90
        echo "        </div>
      </div>
      <div class=\"card-footer\">
          <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension')->getPathWithBackUrl("admin_order_states"), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\">
          ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderStateForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 87
    public function block_order_state_form_reset($context, array $blocks = [])
    {
        // line 88
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderStateForm"] ?? null), 'rest');
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates/Blocks:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 88,  160 => 87,  154 => 101,  147 => 97,  141 => 94,  137 => 93,  132 => 90,  130 => 87,  126 => 85,  124 => 72,  123 => 70,  118 => 68,  113 => 66,  108 => 64,  103 => 62,  98 => 60,  93 => 58,  88 => 56,  83 => 54,  78 => 52,  74 => 50,  72 => 47,  68 => 45,  66 => 39,  61 => 37,  54 => 33,  46 => 29,  40 => 28,  37 => 27,  35 => 26,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates/Blocks:form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig");
    }
}
