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

/* PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:timeline.html.twig */
class __TwigTemplate_68eb966dd1d4e3877b6c4cb0233319f95c06e26875873abee945b78890abc6d8 extends \Twig\Template
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
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders and messages timeline", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"timeline\">
      ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["customerThreadView"] ?? null), "timeline", []), "timelineItems", []));
        foreach ($context['_seq'] as $context["_key"] => $context["timelineItem"]) {
            // line 33
            echo "        <article class=\"timeline-item ";
            if (($this->getAttribute($context["timelineItem"], "arrow", []) == "right")) {
                echo "alt";
            }
            echo "\">
          <div class=\"timeline-caption\">
            <div class=\"timeline-panel arrow arrow-";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["timelineItem"], "arrow", []), "html", null, true);
            echo "\">
              <span class=\"timeline-icon\"
                    ";
            // line 37
            if ($this->getAttribute($context["timelineItem"], "color", [])) {
                echo "style=\"background-color: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["timelineItem"], "color", []), "html", null, true);
                echo "\"";
            }
            // line 38
            echo "              >
                <i class=\"material-icons text-white\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["timelineItem"], "icon", []), "html", null, true);
            echo "</i>
              </span>

              <span class=\"timeline-date\">
                <i class=\"material-icons font-16\">calendar_today</i>
                ";
            // line 44
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('format_date')->getCallable(), [$this->getAttribute($context["timelineItem"], "date", [])]), "html", null, true);
            echo "
                <i class=\"material-icons font-16\">access_time</i>
                ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timelineItem"], "date", []), "H:i"), "html", null, true);
            echo "
              </span>

              <span>
                ";
            // line 50
            echo nl2br($this->getAttribute($context["timelineItem"], "content", []));
            echo "
              </span>

              ";
            // line 53
            if ($this->getAttribute($context["timelineItem"], "relatedOrderId", [])) {
                // line 54
                echo "                <p class=\"mb-0 mt-2\">
                  <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["vieworder" => 1, "id_order" => $this->getAttribute($context["timelineItem"], "relatedOrderId", [])]), "html", null, true);
                echo "\"
                     class=\"btn btn-outline-secondary btn-sm\"
                     target=\"_blank\"
                  >
                    ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See more", [], "Admin.Actions"), "html", null, true);
                echo "
                  </a>
                </p>
              ";
            }
            // line 63
            echo "            </div>
          </div>
        </article>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timelineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 67,  113 => 63,  106 => 59,  99 => 55,  96 => 54,  94 => 53,  88 => 50,  81 => 46,  76 => 44,  68 => 39,  65 => 38,  59 => 37,  54 => 35,  46 => 33,  42 => 32,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/CustomerService/CustomerThread/Block:timeline.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig");
    }
}
