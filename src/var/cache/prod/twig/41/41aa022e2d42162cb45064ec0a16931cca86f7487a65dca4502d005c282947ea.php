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
class __TwigTemplate_f69c8fa764162d0df21e42a181901f6ea776fb8188cbc34b5e03e5642786f114 extends \Twig\Template
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
        // line 25
        echo "
<div class=\"card\">
  <div class=\"card-body\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerThreadView"] ?? null), "actions", []));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 29
            echo "      <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customer_threads_update_status", ["customerThreadId" => $this->getAttribute($this->getAttribute(            // line 30
($context["customerThreadView"] ?? null), "customerThreadId", []), "value", []), "newStatus" => $this->getAttribute(            // line 31
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
        return array (  68 => 42,  66 => 41,  60 => 38,  56 => 36,  47 => 33,  44 => 32,  42 => 31,  41 => 30,  39 => 29,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig");
    }
}
