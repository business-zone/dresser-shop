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

/* PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:forward_thread_modal.html.twig */
class __TwigTemplate_281ff52d08c64aa521a29a884eb2679ca6f8ee403870ff429b49f970ff7a9be0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'forward_customer_thread_form_rest' => [$this, 'block_forward_customer_thread_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "<div class=\"modal fade\"
     id=\"forwardThreadModal\"
     tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"forwardThreadModalLabel\"
     aria-hidden=\"true\"
>
  <div class=\"modal-dialog\" role=\"document\">
    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["forwardCustomerThreadForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customer_threads_forward", ["customerThreadId" => $this->getAttribute($this->getAttribute(        // line 35
($context["customerThreadView"] ?? null), "customerThreadId", []), "value", [])]), "attr" => ["class" => "form-horizontal"]]);
        // line 38
        echo "
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"forwardThreadModalLabel\">
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forward this discussion", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </h5>
          <button type=\"button\"
                  class=\"close\"
                  data-dismiss=\"modal\"
                  aria-label=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "\"
          >
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"form-group row\">
            <label for=\"customer_email\" class=\"form-control-label\">
              ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forward this discussion to an employee:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["forwardCustomerThreadForm"] ?? null), "employee_id", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row d-none\">
            <label for=\"customer_email\" class=\"form-control-label\">
              ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "Admin.Global"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["forwardCustomerThreadForm"] ?? null), "someone_else_email", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label for=\"customer_email\" class=\"form-control-label\">
              ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["forwardCustomerThreadForm"] ?? null), "comment", []), 'widget', ["attr" => ["placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can add a comment here.", [], "Admin.Orderscustomers.Help")]]);
        // line 78
        echo "
            </div>
          </div>

          <div class=\"d-none\">
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["forwardCustomerThreadForm"] ?? null), "_token", []), 'widget');
        echo "
          </div>

          ";
        // line 86
        $this->displayBlock('forward_customer_thread_form_rest', $context, $blocks);
        // line 89
        echo "        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
            ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forward", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["forwardCustomerThreadForm"] ?? null), 'form_end');
        echo "
  </div>
</div>
";
    }

    // line 86
    public function block_forward_customer_thread_form_rest($context, array $blocks = [])
    {
        // line 87
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["forwardCustomerThreadForm"] ?? null), 'rest');
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:forward_thread_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 87,  148 => 86,  140 => 99,  133 => 95,  127 => 92,  122 => 89,  120 => 86,  114 => 83,  107 => 78,  105 => 76,  99 => 73,  90 => 67,  84 => 64,  75 => 58,  69 => 55,  58 => 47,  50 => 42,  44 => 38,  42 => 35,  41 => 33,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:forward_thread_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig");
    }
}
