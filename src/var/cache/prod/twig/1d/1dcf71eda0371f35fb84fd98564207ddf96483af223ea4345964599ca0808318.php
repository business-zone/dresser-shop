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

/* PrestaShopBundle:Admin/Common:javascript_pagination.html.twig */
class __TwigTemplate_ced773f31722d0d73bfa5d8934e57f146de7c7704bd749b70321c0c09f7b5d63 extends \Twig\Template
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
        // line 30
        echo "<ul class=\"pagination mb-0\">
  <li class=\"page-item first disabled\">
    <button type=\"button\" class=\"page-link first\" data-page=\"1\">1</button>
  </li>
  <li class=\"page-item previous disabled\">
    <button type=\"button\" class=\"page-link previous\" aria-label=\"Previous\"><span class=\"sr-only\">Previous</span></button>
  </li>
  <li class=\"page-item current active\">
    <label>
      <input
        name=\"paginator-jump-page\"
        class=\"jump-to-page\"
        type=\"text\"
        value=\"1\"
      />
    </label>
  </li>
  <li class=\"page-item next\">
    <button
      type=\"button\"
      class=\"page-link next\"
      aria-label=\"Next\"
      data-page=\"2\">
      <span class=\"sr-only\">Next</span>
    </button>
  </li>
  <li class=\"page-item last\">
    <button type=\"button\" class=\"page-link last\"></button>
  </li>
</ul>
<div class=\"mx-3\">
  <label class=\"col-form-label\" id=\"pagination-info\"
         data-pagination-info=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => "%from%", "%to%" => "%to%", "%total%" => "%total%", "%current_page%" => "%current_page%", "%page_count%" => "%page_count%"], "Admin.Catalog.Feature"), "html", null, true);
        // line 68
        echo "\"
  >
  </label>
</div>
<div class=\"mx-3\">
  <div class=\"form-group row mb-0\">
    <label for=\"paginator-limit\" class=\"col-form-label mr-2\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
    <div>
      <select name=\"paginator-limit\" id=\"paginator-limit\" class=\"pagination-link custom-select\">
        ";
        // line 77
        if (!twig_in_filter(($context["limit"] ?? null), ($context["limitChoices"] ?? null))) {
            // line 78
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
            echo "</option>
        ";
        }
        // line 80
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["limitChoices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["limitChoice"]) {
            // line 81
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["limitChoice"], "html", null, true);
            echo "\" ";
            if ((($context["limit"] ?? null) == $context["limitChoice"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["limitChoice"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limitChoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "      </select>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Common:javascript_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 83,  98 => 81,  93 => 80,  85 => 78,  83 => 77,  77 => 74,  69 => 68,  67 => 62,  33 => 30,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Common:javascript_pagination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/javascript_pagination.html.twig");
    }
}
