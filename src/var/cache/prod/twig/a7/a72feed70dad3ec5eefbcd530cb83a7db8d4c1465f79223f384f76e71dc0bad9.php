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
class __TwigTemplate_6ae2c524e17aacb04b483a4d8d90c1c441c371443158443cbb22078e64332112 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:forward_thread_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:forward_thread_modal.html.twig"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["forwardCustomerThreadForm"] ?? $this->getContext($context, "forwardCustomerThreadForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customer_threads_forward", ["customerThreadId" => $this->getAttribute($this->getAttribute(        // line 35
($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerThreadId", []), "value", [])]), "attr" => ["class" => "form-horizontal"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["forwardCustomerThreadForm"] ?? $this->getContext($context, "forwardCustomerThreadForm")), "employee_id", []), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["forwardCustomerThreadForm"] ?? $this->getContext($context, "forwardCustomerThreadForm")), "someone_else_email", []), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["forwardCustomerThreadForm"] ?? $this->getContext($context, "forwardCustomerThreadForm")), "comment", []), 'widget', ["attr" => ["placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can add a comment here.", [], "Admin.Orderscustomers.Help")]]);
        // line 78
        echo "
            </div>
          </div>

          <div class=\"d-none\">
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["forwardCustomerThreadForm"] ?? $this->getContext($context, "forwardCustomerThreadForm")), "_token", []), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["forwardCustomerThreadForm"] ?? $this->getContext($context, "forwardCustomerThreadForm")), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_forward_customer_thread_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "forward_customer_thread_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "forward_customer_thread_form_rest"));

        // line 87
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["forwardCustomerThreadForm"] ?? $this->getContext($context, "forwardCustomerThreadForm")), 'rest');
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  169 => 87,  160 => 86,  146 => 99,  139 => 95,  133 => 92,  128 => 89,  126 => 86,  120 => 83,  113 => 78,  111 => 76,  105 => 73,  96 => 67,  90 => 64,  81 => 58,  75 => 55,  64 => 47,  56 => 42,  50 => 38,  48 => 35,  47 => 33,  37 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
<div class=\"modal fade\"
     id=\"forwardThreadModal\"
     tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"forwardThreadModalLabel\"
     aria-hidden=\"true\"
>
  <div class=\"modal-dialog\" role=\"document\">
    {{ form_start(forwardCustomerThreadForm, {
      'action': path('admin_customer_threads_forward', {
        'customerThreadId': customerThreadView.customerThreadId.value
      }),
      'attr': {'class': 'form-horizontal'}
    }) }}
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"forwardThreadModalLabel\">
            {{ 'Forward this discussion'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </h5>
          <button type=\"button\"
                  class=\"close\"
                  data-dismiss=\"modal\"
                  aria-label=\"{{ 'Close'|trans({}, 'Admin.Actions') }}\"
          >
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"form-group row\">
            <label for=\"customer_email\" class=\"form-control-label\">
              {{ 'Forward this discussion to an employee:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            </label>
            <div class=\"col-sm\">
              {{ form_widget(forwardCustomerThreadForm.employee_id) }}
            </div>
          </div>

          <div class=\"form-group row d-none\">
            <label for=\"customer_email\" class=\"form-control-label\">
              {{ 'Email'|trans({}, 'Admin.Global') }}
            </label>
            <div class=\"col-sm\">
              {{ form_widget(forwardCustomerThreadForm.someone_else_email) }}
            </div>
          </div>

          <div class=\"form-group row\">
            <label for=\"customer_email\" class=\"form-control-label\">
              {{ 'Comment:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            </label>
            <div class=\"col-sm\">
              {{ form_widget(forwardCustomerThreadForm.comment, {
                'attr': {'placeholder': 'You can add a comment here.'|trans({}, 'Admin.Orderscustomers.Help')}
              }) }}
            </div>
          </div>

          <div class=\"d-none\">
            {{ form_widget(forwardCustomerThreadForm._token) }}
          </div>

          {% block forward_customer_thread_form_rest %}
            {{ form_rest(forwardCustomerThreadForm) }}
          {% endblock %}
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
            {{ 'Close'|trans({}, 'Admin.Actions') }}
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            {{ 'Forward'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </button>
        </div>
      </div>
    {{ form_end(forwardCustomerThreadForm) }}
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:forward_thread_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig");
    }
}
