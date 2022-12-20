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

/* PrestaShopBundle:Admin/Common/Grid/Columns/Content:status.html.twig */
class __TwigTemplate_df3d9a7b2a4f389b4902b518f39b3eb4cb1639d24f74fc461f78b69be3a93710 extends \Twig\Template
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
        $context["isValid"] = ($this->getAttribute(($context["record"] ?? null), $this->getAttribute(($context["column"] ?? null), "id", []), [], "array") === "1");
        // line 26
        echo "
<i
  class=\"material-icons ";
        // line 28
        if ((($context["isValid"] ?? null) == true)) {
            echo "text-success";
        } else {
            echo "text-danger";
        }
        echo "\"
>
  ";
        // line 30
        if (($context["isValid"] ?? null)) {
            echo "check";
        } else {
            echo "clear";
        }
        // line 31
        echo "</i>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Common/Grid/Columns/Content:status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 31,  45 => 30,  36 => 28,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Common/Grid/Columns/Content:status.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/status.html.twig");
    }
}
