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

/* PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:information_block.html.twig */
class __TwigTemplate_ed195a46c163508494551a69c4a4531ecca52cf8df30c34da0199c5cb59478b3 extends \Twig\Template
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
        if (($context["showHeaderAlert"] ?? null)) {
            // line 29
            echo "  <div class=\"alert alert-info\">
    <p>";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You need to register all the carriers with which you have chosen to work. PrestaShop comes with a selection of carrier modules you can install right below the page or buy on [1]Addons marketplace[/1].", ["[1]" => "<a href=\"https://addons.prestashop.com/en/520-shipping-carriers\">", "[/1]" => "</a>"], "Admin.Shipping.Help");
            echo "</p><br>
    <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If there is no existing module for your carrier, you can register it manually by clicking on \"[1]\" but before, please make sure you did not register a new carrier if a module already exists for it!", ["[1]" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new carrier", [], "Admin.Shipping.Feature")], "Admin.Shipping.Help"), "html", null, true);
            echo "</p>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:information_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 31,  41 => 30,  38 => 29,  36 => 28,  33 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Improve/Shipping/Carriers/Blocks:information_block.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig");
    }
}
