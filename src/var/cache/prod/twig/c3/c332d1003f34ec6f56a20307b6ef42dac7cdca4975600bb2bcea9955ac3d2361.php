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

/* PrestaShopBundle:Admin/Multistore:dropdown.html.twig */
class __TwigTemplate_74b594d931a9920ed038c666483668f24963cc029e13402b87e36b5c0429b5fc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'multistore_dropdown' => [$this, 'block_multistore_dropdown'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $this->displayBlock('multistore_dropdown', $context, $blocks);
    }

    public function block_multistore_dropdown($context, array $blocks = [])
    {
        // line 26
        echo "  <div class=\"btn-group multistore-dropdown js-multistore-dropdown\">
    <button class=\"btn btn-outline-secondary btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton4\" data-toggle=\"dropdown\" data-flip=\"false\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <i class=\"material-icons\">storefront</i>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton4\">
      <div class=\"multistore-dropdown-search-container\">
        <i class=\"material-icons\">search</i>
        <input type=\"text\" class=\"form-control multistore-dropdown-search js-multistore-dropdown-search\" placeholder=\"Search shop name\" data-no-results=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No results found for", [], "Admin.Global"), "html", null, true);
        echo "\" data-searching=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching for", [], "Admin.Global"), "html", null, true);
        echo "\">
      </div>

      <div class=\"multistore-dropdown-content js-multistore-scrollbar\">
        <ul class=\"multistore-dropdown-group\">
          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 39
            echo "          <li class=\"multistore-dropdown-group-item\">
            <a class=\"multistore-dropdown-group-name\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\MultistoreUrlExtension')->generateGroupUrl($context["group"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", [], "Admin.Global") . " ") . $this->getAttribute($context["group"], "name", [])), "html", null, true);
            echo "</a>

            <ul class=\"multistore-dropdown-shops\">
              ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "shops", []));
            foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                // line 44
                echo "                <li class=\"multistore-dropdown-shop\">
                  <a class=\"multistore-dropdown-shop-name";
                // line 45
                if (($this->getAttribute($context["shop"], "hasMainUrl", [], "method") == false)) {
                    echo " multistore-dropdown-no-url\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "name", []), "html", null, true);
                    echo "</a>";
                } else {
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\MultistoreUrlExtension')->generateShopUrl($context["shop"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "name", []), "html", null, true);
                    echo "</a>";
                }
                // line 46
                echo "                  ";
                if (($this->getAttribute(($context["shopCustomizationChecker"] ?? null), "isConfigurationCustomizedForThisShop", [0 => ($context["configurationKey"] ?? null), 1 => $context["shop"], 2 => ($context["isGroupShopContext"] ?? null)], "method") == true)) {
                    // line 47
                    echo "                    <p class=\"multistore-dropdown-shop-status multistore-dropdown-shop-status-locked\">
                      <i class=\"material-icons\">https</i>
                      ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customized", [], "Admin.Global"), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 51
                    echo "                    <p class=\"multistore-dropdown-shop-status\">
                      ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inherited", [], "Admin.Global"), "html", null, true);
                    echo "
                  ";
                }
                // line 54
                echo "                    </p>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            </ul>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </ul>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Multistore:dropdown.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 60,  118 => 57,  110 => 54,  105 => 52,  102 => 51,  97 => 49,  93 => 47,  90 => 46,  78 => 45,  75 => 44,  71 => 43,  63 => 40,  60 => 39,  56 => 38,  46 => 33,  37 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Multistore:dropdown.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Multistore/dropdown.html.twig");
    }
}
