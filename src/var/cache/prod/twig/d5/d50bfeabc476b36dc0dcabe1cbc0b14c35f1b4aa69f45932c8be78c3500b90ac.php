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

/* @Modules/ps_metrics/views/templates/admin/fullscreen.html.twig */
class __TwigTemplate_e7507887c22e7554fc16ab8ca927bce57471f4e88cd6fda70a5e3c026bc9f678 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 19
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">
  <link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
  <link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />
    ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "  </head>
  <body>
    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "  </body>
</html>
";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@Modules/ps_metrics/views/templates/admin/fullscreen.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  76 => 33,  71 => 32,  66 => 29,  60 => 35,  57 => 34,  54 => 33,  52 => 32,  48 => 30,  46 => 29,  34 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_metrics/views/templates/admin/fullscreen.html.twig", "/var/www/html/modules/ps_metrics/views/templates/admin/fullscreen.html.twig");
    }
}
