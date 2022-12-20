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

/* PrestaShopBundle:Admin/Module/Includes:categories_card.html.twig */
class __TwigTemplate_671a29f63450f6350b464eb0c25021bccb08a280bc64c8c9bf134bc05e0a0ea0 extends \Twig\Template
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
        echo "<div class=\"module-category-item col-lg-3 col-md-4 col-sm-6\"
     ";
        // line 26
        if ($this->getAttribute(($context["category"] ?? null), "tab", [])) {
            echo "data-category-tab=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "tab", []), "html", null, true);
            echo "\"";
        }
        // line 27
        echo "     data-category-ref=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "refMenu", []), "html", null, true);
        echo "\"
>
    <div class=\"module-category-item-wrapper\">
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["category"] ?? null), "name", []), [], "Admin.Modules.Feature"), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:categories_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 30,  39 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Module/Includes:categories_card.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/categories_card.html.twig");
    }
}
