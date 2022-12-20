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

/* PrestaShopBundle:Admin/Sell/Catalog/Product/Form:header_form_theme.html.twig */
class __TwigTemplate_e9eacc238310515ab71b363b14703ded3336dc6a62f53b3144bd047b076b5d41 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_help' => [$this, 'block_form_help'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('form_help', $context, $blocks);
    }

    public function block_form_help($context, array $blocks = [])
    {
        // line 27
        echo "  ";
        if (($context["help"] ?? null)) {
            // line 28
            echo "    ";
            $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:header_form_theme.html.twig", 28)->display(twig_array_merge($context, ["placement" => "top", "content" => ($context["help"] ?? null)]));
            // line 29
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:header_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 29,  43 => 28,  40 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Product/Form:header_form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Form/header_form_theme.html.twig");
    }
}
