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

/* PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:your_answer.html.twig */
class __TwigTemplate_d2e1bb00867151b95119eae93c04cb5468dd290e89d76870bcc93da2a034ec28 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'reply_to_customer_form_rest' => [$this, 'block_reply_to_customer_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["replyToCustomerThreadForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customer_threads_reply", ["customerThreadId" => $this->getAttribute($this->getAttribute(        // line 27
($context["customerThreadView"] ?? null), "customerThreadId", []), "value", [])])]);
        // line 28
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your answer to", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "

      ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "firstName", [])) {
            // line 34
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "firstName", []), "html", null, true);
            echo "
        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "lastName", []), "html", null, true);
            echo "
      ";
        } else {
            // line 37
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "email", []), "html", null, true);
            echo "
      ";
        }
        // line 39
        echo "    </h3>

    <div class=\"card-body\">
      <div class=\"media\">
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["employeeAvatarUrl"] ?? null), "html", null, true);
        echo "\" class=\"mr-3 rounded-circle thread-message-employee-image\">
        <div class=\"media-body\">
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["replyToCustomerThreadForm"] ?? null), "reply_message", []), 'widget', ["attr" => ["rows" => 5]]);
        echo "
        </div>
      </div>

      <div class=\"d-none\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["replyToCustomerThreadForm"] ?? null), "_token", []), 'widget');
        echo "
      </div>

      ";
        // line 53
        $this->displayBlock('reply_to_customer_form_rest', $context, $blocks);
        // line 56
        echo "    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["replyToCustomerThreadForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 53
    public function block_reply_to_customer_form_rest($context, array $blocks = [])
    {
        // line 54
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["replyToCustomerThreadForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:your_answer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 54,  111 => 53,  105 => 64,  98 => 60,  92 => 56,  90 => 53,  84 => 50,  76 => 45,  71 => 43,  65 => 39,  59 => 37,  54 => 35,  49 => 34,  47 => 33,  42 => 31,  37 => 28,  35 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:your_answer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig");
    }
}
