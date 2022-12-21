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

/* PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_actions.html.twig */
class __TwigTemplate_fd10a13ebb1de84073579a33096e68923427d463f0db046006709eca57e67922 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_actions.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <div class=\"card-body\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "actions", []));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 29
            echo "      <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customer_threads_update_status", ["customerThreadId" => $this->getAttribute($this->getAttribute(            // line 30
($context["customerThreadView"] ?? $this->getContext($context, "customerThreadView")), "customerThreadId", []), "value", []), "newStatus" => $this->getAttribute(            // line 31
$context["action"], "value", [])]), "html", null, true);
            // line 32
            echo "\" method=\"post\" class=\"d-inline\">
        <button class=\"btn btn-outline-secondary\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "label", []), "html", null, true);
            echo "</button>
      </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    <button class=\"btn btn-outline-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#forwardThreadModal\">
      ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forward this discussion to another employee", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </button>

    ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_actions.html.twig", 41)->display($context);
        // line 42
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 42,  72 => 41,  66 => 38,  62 => 36,  53 => 33,  50 => 32,  48 => 31,  47 => 30,  45 => 29,  41 => 28,  36 => 25,);
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

<div class=\"card\">
  <div class=\"card-body\">
    {% for action in customerThreadView.actions %}
      <form action=\"{{ path('admin_customer_threads_update_status', {
        'customerThreadId': customerThreadView.customerThreadId.value,
        'newStatus': action.value
      }) }}\" method=\"post\" class=\"d-inline\">
        <button class=\"btn btn-outline-secondary\">{{ action.label }}</button>
      </form>
    {% endfor %}

    <button class=\"btn btn-outline-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#forwardThreadModal\">
      {{ 'Forward this discussion to another employee'|trans({}, 'Admin.Orderscustomers.Feature') }}
    </button>

    {% include '@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig' %}
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig");
    }
}
