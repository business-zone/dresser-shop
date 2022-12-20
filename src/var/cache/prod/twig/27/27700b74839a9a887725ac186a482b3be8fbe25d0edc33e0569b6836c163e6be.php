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

/* PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread:view.html.twig */
class __TwigTemplate_05ecbd7070fa1a24bef1a8fd82ef5f198f325e37404e26e791114fb82e90b7c0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'customer_thread_actions' => [$this, 'block_customer_thread_actions'],
            'customer_information' => [$this, 'block_customer_information'],
            'customer_thread_messages' => [$this, 'block_customer_thread_messages'],
            'customer_thread_reply' => [$this, 'block_customer_thread_reply'],
            'customer_thread_timeline' => [$this, 'block_customer_thread_timeline'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread:view.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  <div class=\"row\">
    <div class=\"col\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Thread", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          <strong>#";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerThreadId", []), "value", []), "html", null, true);
        echo "</strong>
        </h3>
        <div class=\"card-body\">
          ";
        // line 37
        $this->displayBlock('customer_thread_actions', $context, $blocks);
        // line 40
        echo "
          ";
        // line 41
        $this->displayBlock('customer_information', $context, $blocks);
        // line 44
        echo "
          ";
        // line 45
        $this->displayBlock('customer_thread_messages', $context, $blocks);
        // line 48
        echo "        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 55
        $this->displayBlock('customer_thread_reply', $context, $blocks);
        // line 58
        echo "    </div>
  </div>

  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 63
        $this->displayBlock('customer_thread_timeline', $context, $blocks);
        // line 66
        echo "    </div>
  </div>
";
    }

    // line 37
    public function block_customer_thread_actions($context, array $blocks = [])
    {
        // line 38
        echo "            ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread:view.html.twig", 38)->display($context);
        // line 39
        echo "          ";
    }

    // line 41
    public function block_customer_information($context, array $blocks = [])
    {
        // line 42
        echo "            ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread:view.html.twig", 42)->display($context);
        // line 43
        echo "          ";
    }

    // line 45
    public function block_customer_thread_messages($context, array $blocks = [])
    {
        // line 46
        echo "            ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread:view.html.twig", 46)->display($context);
        // line 47
        echo "          ";
    }

    // line 55
    public function block_customer_thread_reply($context, array $blocks = [])
    {
        // line 56
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread:view.html.twig", 56)->display($context);
        // line 57
        echo "      ";
    }

    // line 63
    public function block_customer_thread_timeline($context, array $blocks = [])
    {
        // line 64
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread:view.html.twig", 64)->display($context);
        // line 65
        echo "      ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        // line 71
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/customer_thread_view.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 73,  155 => 71,  152 => 70,  148 => 65,  145 => 64,  142 => 63,  138 => 57,  135 => 56,  132 => 55,  128 => 47,  125 => 46,  122 => 45,  118 => 43,  115 => 42,  112 => 41,  108 => 39,  105 => 38,  102 => 37,  96 => 66,  94 => 63,  87 => 58,  85 => 55,  76 => 48,  74 => 45,  71 => 44,  69 => 41,  66 => 40,  64 => 37,  58 => 34,  54 => 33,  48 => 29,  45 => 28,  35 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread:view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/view.html.twig");
    }
}
