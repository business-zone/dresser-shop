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

/* PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:customer_information.html.twig */
class __TwigTemplate_b752d35822a2c95de0953a3f36aa49f51e5c75af54380d215747c10147e75b18 extends \Twig\Template
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
<div class=\"row mt-4\">
  <div class=\"col\">
    <div class=\"media\">
      ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "customerId", [])) {
            // line 30
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "customerId", [])]), "html", null, true);
            echo "\">
          <i class=\"material-icons thread-customer-icon\">
            person
          </i>
        </a>
      ";
        } else {
            // line 36
            echo "        <i class=\"material-icons thread-customer-icon\">
          person
        </i>
      ";
        }
        // line 40
        echo "
      <div class=\"media-body\">
        <h2 class=\"mt-0 mb-0\">
          ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "firstName", [])) {
            // line 44
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "customerId", [])]), "html", null, true);
            echo "\">
              ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "firstName", []), "html", null, true);
            echo "
              ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "lastName", []), "html", null, true);
            echo "
              <small class=\"text-muted\">(";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "email", []), "html", null, true);
            echo ")</small>
            </a>
          ";
        } else {
            // line 50
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "email", []), "html", null, true);
            echo "
          ";
        }
        // line 52
        echo "        </h2>
        <p>
          ";
        // line 54
        if ( !twig_test_empty($this->getAttribute(($context["customerThreadView"] ?? null), "contactName", []))) {
            // line 55
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            <span class=\"badge badge-primary rounded\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["customerThreadView"] ?? null), "contactName", []), "html", null, true);
            echo "</span>
          ";
        }
        // line 58
        echo "        </p>
      </div>

    </div>
  </div>
  <div class=\"col\">
    ";
        // line 64
        if ($this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "customerInformation", []), "validatedOrdersCount", [])) {
            // line 65
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1]%count%[/1] order(s) validated for a total amount of [2]%total%[/2]", ["%count%" => $this->getAttribute($this->getAttribute(            // line 66
($context["customerThreadView"] ?? null), "customerInformation", []), "validatedOrdersCount", []), "%total%" => $this->getAttribute($this->getAttribute(            // line 67
($context["customerThreadView"] ?? null), "customerInformation", []), "validatedOrdersAmount", []), "[1]" => "<span class=\"badge badge-primary rounded\">", "[/1]" => "</span>", "[2]" => "<span class=\"badge badge-success rounded\">", "[/2]" => "</span>"], "Admin.Orderscustomers.Feature");
            // line 72
            echo "
    ";
        } else {
            // line 74
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No order validated for the moment. By default, an order is considered validated when its payment is accepted.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
    ";
        }
        // line 76
        echo "
    <p class=\"text-muted\">
      ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer since: %s", ["%s" => $this->getAttribute($this->getAttribute(        // line 79
($context["customerThreadView"] ?? null), "customerInformation", []), "customerSinceDate", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
        // line 81
        echo "
    </p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:customer_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 81,  132 => 79,  131 => 78,  127 => 76,  121 => 74,  117 => 72,  115 => 67,  114 => 66,  112 => 65,  110 => 64,  102 => 58,  97 => 56,  92 => 55,  90 => 54,  86 => 52,  80 => 50,  74 => 47,  70 => 46,  66 => 45,  61 => 44,  59 => 43,  54 => 40,  48 => 36,  38 => 30,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:customer_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig");
    }
}
