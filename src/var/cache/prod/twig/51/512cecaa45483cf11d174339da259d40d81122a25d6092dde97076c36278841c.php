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
class __TwigTemplate_d60895c6dfbecfbefe8d38f92e5a2439a35843f258e86bbb32d5adcb48f8b21f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:your_answer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:your_answer.html.twig"));

        // line 25
        echo "
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["replyToCustomerThreadForm"] ?? $this->getContext($context, "replyToCustomerThreadForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customer_threads_reply", ["customerThreadId" => $this->getAttribute($this->getAttribute(        // line 27
($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerThreadId", []), "value", [])])]);
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
        if ($this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "firstName", [])) {
            // line 34
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "firstName", []), "html", null, true);
            echo "
        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "lastName", []), "html", null, true);
            echo "
      ";
        } else {
            // line 37
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerInformation", []), "email", []), "html", null, true);
            echo "
      ";
        }
        // line 39
        echo "    </h3>

    <div class=\"card-body\">
      <div class=\"media\">
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["employeeAvatarUrl"] ?? $this->getContext($context, "employeeAvatarUrl")), "html", null, true);
        echo "\" class=\"mr-3 rounded-circle thread-message-employee-image\">
        <div class=\"media-body\">
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["replyToCustomerThreadForm"] ?? $this->getContext($context, "replyToCustomerThreadForm")), "reply_message", []), 'widget', ["attr" => ["rows" => 5]]);
        echo "
        </div>
      </div>

      <div class=\"d-none\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["replyToCustomerThreadForm"] ?? $this->getContext($context, "replyToCustomerThreadForm")), "_token", []), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["replyToCustomerThreadForm"] ?? $this->getContext($context, "replyToCustomerThreadForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_reply_to_customer_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reply_to_customer_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reply_to_customer_form_rest"));

        // line 54
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["replyToCustomerThreadForm"] ?? $this->getContext($context, "replyToCustomerThreadForm")), 'rest');
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  132 => 54,  123 => 53,  111 => 64,  104 => 60,  98 => 56,  96 => 53,  90 => 50,  82 => 45,  77 => 43,  71 => 39,  65 => 37,  60 => 35,  55 => 34,  53 => 33,  48 => 31,  43 => 28,  41 => 27,  40 => 26,  37 => 25,);
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

{{ form_start(replyToCustomerThreadForm, {
  'action': path('admin_customer_threads_reply', {'customerThreadId': customerThreadView.customerThreadId.value})
}) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
      {{ 'Your answer to'|trans({}, 'Admin.Orderscustomers.Feature') }}

      {% if customerThreadView.customerInformation.firstName %}
        {{ customerThreadView.customerInformation.firstName }}
        {{ customerThreadView.customerInformation.lastName }}
      {% else %}
        {{ customerThreadView.customerInformation.email }}
      {% endif %}
    </h3>

    <div class=\"card-body\">
      <div class=\"media\">
        <img src=\"{{ employeeAvatarUrl }}\" class=\"mr-3 rounded-circle thread-message-employee-image\">
        <div class=\"media-body\">
          {{ form_widget(replyToCustomerThreadForm.reply_message, {'attr': {'rows': 5}}) }}
        </div>
      </div>

      <div class=\"d-none\">
        {{ form_widget(replyToCustomerThreadForm._token) }}
      </div>

      {% block reply_to_customer_form_rest %}
        {{ form_rest(replyToCustomerThreadForm) }}
      {% endblock %}
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">{{ 'Send'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
{{ form_end(replyToCustomerThreadForm) }}
", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:your_answer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig");
    }
}
