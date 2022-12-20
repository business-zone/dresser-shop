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

/* @CsaGuzzle/Icon/guzzle.svg */
class __TwigTemplate_616d19f7bb49d4b9549ec2fab2c85ed05180467508ce1eb6c04b28994df6f398 extends \Twig\Template
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
        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("height", $context)) ? (_twig_default_filter(($context["height"] ?? null), 24)) : (24)), "html", null, true);
        echo "\" viewBox=\"0 20 70 110\" xml:space=\"preserve\">
    <path fill=\"";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("color", $context)) ? (_twig_default_filter(($context["color"] ?? null), "#AAAAAA")) : ("#AAAAAA")), "html", null, true);
        echo "\" d=\"m31.7 59c0 1.2-0.8 2-2 2l-22 0c-1.2 0-2-0.8-2-2l0-19c0-1.2 0.8-2 2-2l22 0c1.2 0 2 0.8 2 2zm26.6 2.4c-2.8-0.6-3.9-2.1-3.9-3.4l0-4.9c0 0 1.9 0.4 2.3 0.5 0.9 0.2 1.5 1.7 1.5 2.9 0 1.2 0 4.9 0 4.9zm5.4 29.7c0 0-1-5.9-1-5.9l0-27.6c0-3-1-5.5-3-7.5l-12-13c-0.9 0-3 3-3 3 0 0.9 6 7 6 7l0 11c1.2 5.5 3.7 6.9 8 7l0 20 1 7 4 21c0.1 3.4-3.6 6-6 6-2.2 0-6-2.6-6-5l0-36c0-4.4-2.6-7-7-7l-7 0c0-9.3 0-21.7 0-32 0-4.3-1.7-6-6-6l-26 0c-4.3 0-6 1.7-6 6l0 84 38 0 0-48 7 0c1.6 0 3 1.4 3 3l0 36c0 4.9 4.8 9 10 9 4.9 0 10-3.8 10-9-0.1-1.2-4-23-4-23z\" />
</svg>
";
    }

    public function getTemplateName()
    {
        return "@CsaGuzzle/Icon/guzzle.svg";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@CsaGuzzle/Icon/guzzle.svg", "/var/www/html/vendor/csa/guzzle-bundle/src/Resources/views/Icon/guzzle.svg");
    }
}
