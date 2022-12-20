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

/* PrestaShopBundle:Admin/Common:unavailable-feature.html.twig */
class __TwigTemplate_7a61c1276f13069d92e82a854c5ab2a99b62483cbacf90562d88d30ff9054c44 extends \Twig\Template
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
 <div class=\"unavailable-feature\">
  <h2>
    ";
        // line 28
        echo twig_escape_filter($this->env, ($context["featureTitle"] ?? null), "html", null, true);
        echo "
    ";
        // line 29
        if (array_key_exists("helpbox", $context)) {
            // line 30
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/HelpBox/helpbox.html.twig", ["content" =>             // line 31
($context["helpbox"] ?? null)]);
            // line 32
            echo "
    ";
        }
        // line 34
        echo "  </h2>

  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not available yet", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </p>
  </div>
 </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Common:unavailable-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 38,  49 => 34,  45 => 32,  43 => 31,  41 => 30,  39 => 29,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Common:unavailable-feature.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/unavailable-feature.html.twig");
    }
}
