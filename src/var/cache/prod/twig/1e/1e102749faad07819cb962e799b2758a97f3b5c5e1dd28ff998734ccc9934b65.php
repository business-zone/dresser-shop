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

/* PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:showcase_card.html.twig */
class __TwigTemplate_f5865beb3e862bd34c37532c77542e864adca25acc6744afbf52e6d2da944127 extends \Twig\Template
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
        // line 27
        echo "
";
        // line 28
        if ( !($context["isShowcaseCardClosed"] ?? null)) {
            // line 29
            echo "  <div id=\"carriersShowcaseCard\" class=\"helper-card card\">
    <div class=\"helper-card__left helper-card__carrier shape-one\">
      <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/helper-card/carrier@3x.png"), "html", null, true);
            echo "\">
    </div>
    <div class=\"helper-card__right\">
      <h2>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage your carriers", [], "Admin.Shipping.Feature"), "html", null, true);
            echo "</h2>
      <p>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create carriers to let your customers choose their best shipping option in terms of delivery dates or fees. Start with editing/deleting the default \"My carrier\", and add as many options as you need.", [], "Admin.Shipping.Feature"), "html", null, true);
            echo "</p>
      <a class=\"btn btn-outline-secondary\"
         href=\"";
            // line 37
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('documentation_link')->getCallable(), ["carrier"]), "html", null, true);
            echo "\"
         target=\"_blank\"
      >
        ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            echo "
      </a>
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\"
       data-card-name=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["showcaseCardName"] ?? null), "html", null, true);
            echo "\"
       data-close-url=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_close_showcase_card");
            echo "\"
    >
      close
    </i>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:showcase_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 45,  70 => 44,  63 => 40,  57 => 37,  52 => 35,  48 => 34,  42 => 31,  38 => 29,  36 => 28,  33 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:showcase_card.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Carriers/Blocks/showcase_card.html.twig");
    }
}
