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

/* PrestaShopBundle:Admin/Common/Grid/Actions/Row:delete_customer_discount.html.twig */
class __TwigTemplate_0ade22ebef9a6ef37ad306260022afee4dfd5264e9b4533c6032874ef94fbbec extends \Twig\Template
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
";
        // line 26
        $context["class"] = "btn tooltip-link js-submit-row-action";
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute(($context["attributes"] ?? null), "class", [], "any", true, true)) {
            // line 29
            echo "  ";
            $context["class"] = ((($context["class"] ?? null) . " ") . $this->getAttribute(($context["attributes"] ?? null), "class", []));
        }
        // line 31
        echo "
";
        // line 32
        $context["confirmation_message"] = $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "confirm_message", []);
        // line 33
        echo "
<button class=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", [])), "html", null, true);
        echo "-row-link\"
   type=\"button\"
   data-confirm-message=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["confirmation_message"] ?? null), "html", null, true);
        echo "\"
   data-url=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["id_cart_rule" => $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "id_cart_rule", []), [], "array"), "deletecart_rule" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "uri", [])]), "html", null, true);
        echo "\"
   data-method=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "method", []), "html", null, true);
        echo "\"
  ";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "modal_options", [], "any", false, true), "options", [], "any", true, true)) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "modal_options", []), "options", []));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 41
                echo "      data-";
                echo twig_escape_filter($this->env, twig_replace_filter($context["attribute"], ["_" => "-"]), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "  ";
        }
        // line 44
        echo "  ";
        if ($this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 45
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
            echo "\"
  ";
        }
        // line 49
        echo ">
  ";
        // line 50
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? null), "icon", []))) {
            // line 51
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 53
        echo "  ";
        if ( !$this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 54
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
            echo "
  ";
        }
        // line 56
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Common/Grid/Actions/Row:delete_customer_discount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 56,  118 => 54,  115 => 53,  109 => 51,  107 => 50,  104 => 49,  99 => 47,  95 => 45,  92 => 44,  89 => 43,  78 => 41,  73 => 40,  71 => 39,  67 => 38,  63 => 37,  59 => 36,  52 => 34,  49 => 33,  47 => 32,  44 => 31,  40 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Common/Grid/Actions/Row:delete_customer_discount.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/delete_customer_discount.html.twig");
    }
}
