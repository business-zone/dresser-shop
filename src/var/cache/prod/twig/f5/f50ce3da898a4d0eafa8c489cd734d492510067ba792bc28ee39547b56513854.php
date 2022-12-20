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

/* PrestaShopBundle:Admin/Exception:not_found.html.twig */
class __TwigTemplate_afd6b748b365880319d4b7b2ddbcc8dc4cdf79ab1b253835e6e1f03aa34dae22 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("::base.html.twig", "PrestaShopBundle:Admin/Exception:not_found.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 29
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/theme.css"), "html", null, true);
        echo "\" />
";
    }

    // line 32
    public function block_title($context, array $blocks = [])
    {
        // line 33
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The object cannot be loaded (or found).", [], "Admin.Notifications.Error"), "html", null, true);
        echo "
";
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        // line 37
        echo "  <div class=\"container\">
    <div class=\"row mt-5\">
      <div class=\"col\">
        <div class=\"card\">
          <div class=\"card-body text-center\">
            <img class=\"img-responsive\"
                 src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/img/error/500.svg"), "html", null, true);
        echo "\"
                 alt=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The object cannot be loaded (or found).", [], "Admin.Notifications.Error"), "html", null, true);
        echo "\"
            >

            <div class=\"mt-3\">
              <p class=\"error-header\">
                ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The object cannot be loaded (or found).", [], "Admin.Notifications.Error"), "html", null, true);
        echo "
              </p>

              ";
        // line 52
        if ((array_key_exists("exception", $context) && ($context["exception"] ?? null))) {
            // line 53
            echo "                <div class=\"mx-auto\">
                  <p class=\"mb-0\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", []), "html", null, true);
            echo "</p>
                  ";
            // line 55
            if (($this->getAttribute(($context["exception"] ?? null), "class", [], "any", true, true) || $this->getAttribute(($context["exception"] ?? null), "code", [], "any", true, true))) {
                // line 56
                echo "                    <p class=\"mb-0\">[";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class", []), "Exception")) : ("Exception")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "code", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "code", []), 0)) : (0)), "html", null, true);
                echo "]</p>
                  ";
            }
            // line 58
            echo "                </div>
              ";
        }
        // line 60
        echo "
              ";
        // line 61
        if (array_key_exists("errorMessage", $context)) {
            // line 62
            echo "                <div class=\"mx-auto\">
                  <p class=\"mb-0\">";
            // line 63
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? null), "html", null, true);
            echo "</p>
                </div>
              ";
        }
        // line 66
        echo "
              <div class=\"mt-4\">
                <form action=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_errors_enable_debug_mode");
        echo "\" method=\"post\" class=\"d-inline\">
                  <input type=\"hidden\" name=\"_redirect_url\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "requestUri", []), "html", null, true);
        echo "\">

                  <button class=\"btn btn-outline-secondary\" type=\"submit\">
                    ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable debug mode", [], "Admin.Actions"), "html", null, true);
        echo "
                  </button>
                </form>
                <button class=\"btn btn-primary js-go-back-btn ml-3\" type=\"button\">
                  ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to previous page", [], "Admin.Actions"), "html", null, true);
        echo "
                </button>
              </div>

              <p class=\"mt-3\">
                <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('documentation_link')->getCallable(), ["debug_mode"]), "html", null, true);
        echo "\" target=\"_blank\">
                  ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Learn more about debug mode", [], "Admin.Actions"), "html", null, true);
        echo "
                  <i class=\"material-icons\">arrow_right_alt</i>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        // line 95
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/error.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Exception:not_found.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 95,  176 => 94,  161 => 82,  157 => 81,  149 => 76,  142 => 72,  136 => 69,  132 => 68,  128 => 66,  122 => 63,  119 => 62,  117 => 61,  114 => 60,  110 => 58,  102 => 56,  100 => 55,  96 => 54,  93 => 53,  91 => 52,  85 => 49,  77 => 44,  73 => 43,  65 => 37,  62 => 36,  55 => 33,  52 => 32,  45 => 29,  42 => 28,  32 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Exception:not_found.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Exception/not_found.html.twig");
    }
}
