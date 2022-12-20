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

/* PrestaShopBundle:Admin/Common/Grid/Columns/Content:link_group.html.twig */
class __TwigTemplate_dd847f83cccf12030fd56a531a255d8c6e25e77ff6f7cd8c5be1262ff9233311 extends \Twig\Template
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
<div class=\"text-nowrap\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "links", []));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 28
            echo "    ";
            if ($this->getAttribute(($context["record"] ?? null), $this->getAttribute($context["link"], "is_link_available_field", []), [], "array")) {
                // line 29
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["link"], "route", []), [$this->getAttribute($context["link"], "route_param_name", []) => $this->getAttribute(($context["record"] ?? null), $this->getAttribute($context["link"], "route_param_field", []), [], "array")]), "html", null, true);
                echo "\">
        <i class=\"material-icons\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "icon", []), "html", null, true);
                echo "</i>
      </a>
    ";
            }
            // line 33
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Common/Grid/Columns/Content:link_group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 34,  52 => 33,  46 => 30,  41 => 29,  38 => 28,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Common/Grid/Columns/Content:link_group.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/link_group.html.twig");
    }
}
