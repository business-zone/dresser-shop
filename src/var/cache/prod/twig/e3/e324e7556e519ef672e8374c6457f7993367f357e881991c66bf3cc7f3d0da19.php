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

/* @Modules/ps_metrics/views/templates/hook/HookBlockLegacyPages.html.twig */
class __TwigTemplate_3b78c748a70cc488c2b0346f11b065dede5ba0ca132031302ea4449339f96628 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_metrics/views/templates/hook/HookBlockLegacyPages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_metrics/views/templates/hook/HookBlockLegacyPages.html.twig"));

        // line 19
        echo "
";
        // line 20
        if ( !($context["nativeStatsModulesEnabled"] ?? $this->getContext($context, "nativeStatsModulesEnabled"))) {
            // line 21
            echo "  ";
            $this->displayBlock('content', $context, $blocks);
            // line 24
            echo "
  ";
            // line 25
            $this->displayBlock('stylesheets', $context, $blocks);
            // line 39
            echo "
  ";
            // line 40
            $this->displayBlock('javascripts', $context, $blocks);
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "      <div id=\"metrics-app\"></div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "    ";
        if ((($context["useLocalVueApp"] ?? $this->getContext($context, "useLocalVueApp")) == false)) {
            // line 27
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["pathAssetsCdn"] ?? $this->getContext($context, "pathAssetsCdn")), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
    ";
        } elseif (((        // line 28
($context["useLocalVueApp"] ?? $this->getContext($context, "useLocalVueApp")) == true) && (($context["useBuildModeOnly"] ?? $this->getContext($context, "useBuildModeOnly")) == true))) {
            // line 29
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["pathAssetsBuilded"] ?? $this->getContext($context, "pathAssetsBuilded")), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
    ";
        }
        // line 31
        echo "
    <style>
      /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
      #content.nobootstrap div.bootstrap.panel {
        display: none;
      }
    </style>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    <script>
      var oAuthGoogleErrorMessage = '";
        // line 42
        echo ($context["oAuthGoogleErrorMessage"] ?? $this->getContext($context, "oAuthGoogleErrorMessage"));
        echo "';
      var fullscreen = ";
        // line 43
        if (($context["fullscreen"] ?? $this->getContext($context, "fullscreen"))) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ";
      var contextPsAccounts = ";
        // line 44
        echo twig_jsonencode_filter(($context["contextPsAccounts"] ?? $this->getContext($context, "contextPsAccounts")));
        echo ";
      var metricsApiUrl = '";
        // line 45
        echo ($context["metricsApiUrl"] ?? $this->getContext($context, "metricsApiUrl"));
        echo "';
      var metricsModule = ";
        // line 46
        echo twig_jsonencode_filter(($context["metricsModule"] ?? $this->getContext($context, "metricsModule")));
        echo ";
      var eventBusModule = ";
        // line 47
        echo twig_jsonencode_filter(($context["eventBusModule"] ?? $this->getContext($context, "eventBusModule")));
        echo ";
      var accountsModule = ";
        // line 48
        echo twig_jsonencode_filter(($context["accountsModule"] ?? $this->getContext($context, "accountsModule")));
        echo ";
      var graphqlEndpoint = '";
        // line 49
        echo ($context["graphqlEndpoint"] ?? $this->getContext($context, "graphqlEndpoint"));
        echo "';
      var isoCode = '";
        // line 50
        echo ($context["isoCode"] ?? $this->getContext($context, "isoCode"));
        echo "';
      var currencyIsoCode = '";
        // line 51
        echo ($context["currencyIsoCode"] ?? $this->getContext($context, "currencyIsoCode"));
        echo "';
      var currentPage = '";
        // line 52
        echo ($context["currentPage"] ?? $this->getContext($context, "currentPage"));
        echo "';
      var adminToken = '";
        // line 53
        echo ($context["adminToken"] ?? $this->getContext($context, "adminToken"));
        echo "';
    </script>

    ";
        // line 56
        if ((($context["useLocalVueApp"] ?? $this->getContext($context, "useLocalVueApp")) == true)) {
            // line 57
            echo "      ";
            if ((($context["useBuildModeOnly"] ?? $this->getContext($context, "useBuildModeOnly")) == true)) {
                // line 58
                echo "        <script type=\"module\" src=\"";
                echo twig_escape_filter($this->env, ($context["pathAppBuilded"] ?? $this->getContext($context, "pathAppBuilded")), "html", null, true);
                echo "\"></script>
      ";
            } else {
                // line 60
                echo "        <script type=\"module\" src=\"https://localhost:3001/@vite/client\"></script>
        <script type=\"module\" src=\"https://localhost:3001/src/main.ts\"></script>
      ";
            }
            // line 63
            echo "    ";
        } else {
            // line 64
            echo "      <script type=\"module\" src=\"";
            echo twig_escape_filter($this->env, ($context["pathAppCdn"] ?? $this->getContext($context, "pathAppCdn")), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 66
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_metrics/views/templates/hook/HookBlockLegacyPages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 66,  213 => 64,  210 => 63,  205 => 60,  199 => 58,  196 => 57,  194 => 56,  188 => 53,  184 => 52,  180 => 51,  176 => 50,  172 => 49,  168 => 48,  164 => 47,  160 => 46,  156 => 45,  152 => 44,  144 => 43,  140 => 42,  137 => 41,  128 => 40,  111 => 31,  105 => 29,  103 => 28,  98 => 27,  95 => 26,  86 => 25,  75 => 22,  66 => 21,  55 => 40,  52 => 39,  50 => 25,  47 => 24,  44 => 21,  42 => 20,  39 => 19,);
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
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}

{% if not nativeStatsModulesEnabled %}
  {% block content %}
      <div id=\"metrics-app\"></div>
  {% endblock %}

  {% block stylesheets %}
    {% if useLocalVueApp == false %}
      <link rel=\"stylesheet\" href=\"{{ pathAssetsCdn }}\" type=\"text/css\" media=\"all\">
    {% elseif  useLocalVueApp == true and useBuildModeOnly == true %}
      <link rel=\"stylesheet\" href=\"{{ pathAssetsBuilded }}\" type=\"text/css\" media=\"all\">
    {% endif %}

    <style>
      /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
      #content.nobootstrap div.bootstrap.panel {
        display: none;
      }
    </style>
  {% endblock %}

  {% block javascripts %}
    <script>
      var oAuthGoogleErrorMessage = '{{ oAuthGoogleErrorMessage|raw }}';
      var fullscreen = {% if fullscreen %} true {% else %} false {% endif %};
      var contextPsAccounts = {{ contextPsAccounts|json_encode|raw }};
      var metricsApiUrl = '{{ metricsApiUrl|raw }}';
      var metricsModule = {{ metricsModule|json_encode|raw }};
      var eventBusModule = {{ eventBusModule|json_encode|raw }};
      var accountsModule = {{ accountsModule|json_encode|raw }};
      var graphqlEndpoint = '{{ graphqlEndpoint|raw }}';
      var isoCode = '{{ isoCode|raw }}';
      var currencyIsoCode = '{{ currencyIsoCode|raw }}';
      var currentPage = '{{ currentPage|raw }}';
      var adminToken = '{{ adminToken|raw }}';
    </script>

    {% if useLocalVueApp == true %}
      {% if useBuildModeOnly == true %}
        <script type=\"module\" src=\"{{ pathAppBuilded }}\"></script>
      {% else %}
        <script type=\"module\" src=\"https://localhost:3001/@vite/client\"></script>
        <script type=\"module\" src=\"https://localhost:3001/src/main.ts\"></script>
      {% endif %}
    {% else %}
      <script type=\"module\" src=\"{{ pathAppCdn }}\"></script>
    {% endif %}
  {% endblock %}
{% endif %}
", "@Modules/ps_metrics/views/templates/hook/HookBlockLegacyPages.html.twig", "/var/www/html/modules/ps_metrics/views/templates/hook/HookBlockLegacyPages.html.twig");
    }
}
