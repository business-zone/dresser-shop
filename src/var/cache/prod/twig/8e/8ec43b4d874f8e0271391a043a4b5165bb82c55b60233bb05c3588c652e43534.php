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

/* PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_messages.html.twig */
class __TwigTemplate_5c9c3b5d8b74058df3504217b33331770b65554aade9ea34c56567a73fe44080 extends \Twig\Template
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
<div class=\"row\">
  <div class=\"col\">
    <ul class=\"list-unstyled ml-5\">
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerThreadView"] ?? null), "messages", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "        ";
            if ( !$this->getAttribute($context["loop"], "first", [])) {
                // line 31
                echo "          <li>
            <hr class=\"mb-3 mt-0\">
          </li>
        ";
            }
            // line 35
            echo "
        <li class=\"media\">
          ";
            // line 37
            if (($this->getAttribute($context["message"], "type", []) == "customer")) {
                // line 38
                echo "            <i class=\"material-icons thread-message-icon\">person</i>
          ";
            } else {
                // line 40
                echo "            <img class=\"rounded-circle thread-message-employee-image\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "employeeImage", []), "html", null, true);
                echo "\">
          ";
            }
            // line 42
            echo "
          <div class=\"media-body ml-2\">
            <h4 class=\"mt-0 mb-1\">
              <i class=\"material-icons text-muted\">reply</i>

              ";
            // line 47
            if (($this->getAttribute($context["message"], "type", []) == twig_constant("PrestaShop\\PrestaShop\\Core\\Domain\\CustomerService\\ValueObject\\CustomerThreadMessageType::CUSTOMER"))) {
                // line 48
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "customerName", []), "html", null, true);
                echo "
              ";
            } else {
                // line 50
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "employeeName", []), "html", null, true);
                echo "
              ";
            }
            // line 52
            echo "
              <span class=\"text-muted\">
                <i class=\"material-icons text-muted font-16\">calendar_today</i>
                -
                ";
            // line 56
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('format_date')->getCallable(), [$this->getAttribute($context["message"], "date", [])]), "html", null, true);
            echo "
                <i class=\"material-icons text-muted font-16\">access_time</i>
                -
                ";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", []), "H:i"), "html", null, true);
            echo "
              </span>

              ";
            // line 62
            if ($this->getAttribute($context["message"], "attachmentFile", [])) {
                // line 63
                echo "                <i class=\"material-icons font-16\">attachment</i>
                <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "attachmentFile", []), "html", null, true);
                echo "\" target=\"_blank\">
                  ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attachment", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "
                </a>
              ";
            }
            // line 68
            echo "
              ";
            // line 69
            if ($this->getAttribute($context["message"], "productId", [])) {
                // line 70
                echo "                <i class=\"material-icons font-16\">library_books</i>
                <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["message"], "productId", [])]), "html", null, true);
                echo "\">
                  ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
                echo "
                  ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "productName", []), "html", null, true);
                echo "
                </a>
              ";
            }
            // line 76
            echo "            </h4>
            <p class=\"pl-2 thread-message\">";
            // line 77
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", []), "html", null, true));
            echo "</p>
          </div>
        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 81,  157 => 77,  154 => 76,  148 => 73,  144 => 72,  140 => 71,  137 => 70,  135 => 69,  132 => 68,  126 => 65,  122 => 64,  119 => 63,  117 => 62,  111 => 59,  105 => 56,  99 => 52,  93 => 50,  87 => 48,  85 => 47,  78 => 42,  72 => 40,  68 => 38,  66 => 37,  62 => 35,  56 => 31,  53 => 30,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:thread_messages.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig");
    }
}
