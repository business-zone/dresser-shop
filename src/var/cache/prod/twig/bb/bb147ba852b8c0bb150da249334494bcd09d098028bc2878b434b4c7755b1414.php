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
class __TwigTemplate_a4452af772b9eba73a62d19b6097a2c5a0723ff546da31102b7ddcb77276c46e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Exception:not_found.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Exception:not_found.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "PrestaShopBundle:Admin/Exception:not_found.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/theme.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 33
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The object cannot be loaded (or found).", [], "Admin.Notifications.Error"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        if ((array_key_exists("exception", $context) && ($context["exception"] ?? $this->getContext($context, "exception")))) {
            // line 53
            echo "                <div class=\"mx-auto\">
                  <p class=\"mb-0\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", []), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "requestUri", []), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/error.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  233 => 95,  224 => 94,  203 => 82,  199 => 81,  191 => 76,  184 => 72,  178 => 69,  174 => 68,  170 => 66,  164 => 63,  161 => 62,  159 => 61,  156 => 60,  152 => 58,  144 => 56,  142 => 55,  138 => 54,  135 => 53,  133 => 52,  127 => 49,  119 => 44,  115 => 43,  107 => 37,  98 => 36,  85 => 33,  76 => 32,  63 => 29,  54 => 28,  32 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% extends '::base.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/theme.css') }}\" />
{% endblock %}

{% block title %}
  {{ 'The object cannot be loaded (or found).'|trans({},'Admin.Notifications.Error' ) }}
{% endblock %}

{% block body %}
  <div class=\"container\">
    <div class=\"row mt-5\">
      <div class=\"col\">
        <div class=\"card\">
          <div class=\"card-body text-center\">
            <img class=\"img-responsive\"
                 src=\"{{ asset('themes/new-theme/img/error/500.svg') }}\"
                 alt=\"{{ 'The object cannot be loaded (or found).'|trans({}, 'Admin.Notifications.Error') }}\"
            >

            <div class=\"mt-3\">
              <p class=\"error-header\">
                {{ 'The object cannot be loaded (or found).'|trans({}, 'Admin.Notifications.Error') }}
              </p>

              {% if exception is defined and exception %}
                <div class=\"mx-auto\">
                  <p class=\"mb-0\">{{ exception.message }}</p>
                  {% if exception.class is defined or exception.code is defined %}
                    <p class=\"mb-0\">[{{ exception.class|default('Exception') }} {{ exception.code|default(0) }}]</p>
                  {% endif %}
                </div>
              {% endif %}

              {% if errorMessage is defined %}
                <div class=\"mx-auto\">
                  <p class=\"mb-0\">{{ errorMessage }}</p>
                </div>
              {% endif %}

              <div class=\"mt-4\">
                <form action=\"{{ path('admin_errors_enable_debug_mode') }}\" method=\"post\" class=\"d-inline\">
                  <input type=\"hidden\" name=\"_redirect_url\" value=\"{{ app.request.requestUri }}\">

                  <button class=\"btn btn-outline-secondary\" type=\"submit\">
                    {{ 'Enable debug mode'|trans({}, 'Admin.Actions') }}
                  </button>
                </form>
                <button class=\"btn btn-primary js-go-back-btn ml-3\" type=\"button\">
                  {{ 'Back to previous page'|trans({}, 'Admin.Actions') }}
                </button>
              </div>

              <p class=\"mt-3\">
                <a href=\"{{ documentation_link('debug_mode') }}\" target=\"_blank\">
                  {{ 'Learn more about debug mode'|trans({}, 'Admin.Actions') }}
                  <i class=\"material-icons\">arrow_right_alt</i>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  <script src=\"{{ asset('themes/new-theme/public/error.bundle.js') }}\"></script>
{% endblock %}
", "PrestaShopBundle:Admin/Exception:not_found.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Exception/not_found.html.twig");
    }
}
