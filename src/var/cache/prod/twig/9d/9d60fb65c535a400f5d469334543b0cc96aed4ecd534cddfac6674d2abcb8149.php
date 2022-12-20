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

/* @Modules/ps_metrics/views/templates/admin/metrics.html.twig */
class __TwigTemplate_6995abd189e7f30c737040026b0631b0dd5be69064389df74880e546290de5a8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return $this->loadTemplate(((($context["fullscreen"] ?? null)) ? ("@Modules/ps_metrics/views/templates/admin/fullscreen.html.twig") : ("@PrestaShop/Admin/layout.html.twig")), "@Modules/ps_metrics/views/templates/admin/metrics.html.twig", 20);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        // line 23
        echo "  <div id=\"error-loading-app\" class=\"hide\">
    ";
        // line 24
        $this->loadTemplate("@Modules/ps_metrics/views/templates/admin/error.html.twig", "@Modules/ps_metrics/views/templates/admin/metrics.html.twig", 24)->display($context);
        // line 25
        echo "  </div>
  <div id=\"metrics-app\"></div>
";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 30
        echo "  ";
        if ((($context["useLocalVueApp"] ?? null) == false)) {
            // line 31
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["pathAssetsCdn"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
  ";
        } elseif (((        // line 32
($context["useLocalVueApp"] ?? null) == true) && (($context["useBuildModeOnly"] ?? null) == true))) {
            // line 33
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["pathAssetsBuilded"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
  ";
        }
        // line 35
        echo "
  <style>
    /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
    #content.nobootstrap div.bootstrap.panel {
      display: none;
    }
  </style>

  ";
        // line 43
        if (($context["fullscreen"] ?? null)) {
            // line 44
            echo "  <style>
    body {
      background: #eaebec;
      padding: 20px;
    }
  </style>
  ";
        }
    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        // line 54
        echo "  <script>
    var oAuthGoogleErrorMessage = '";
        // line 55
        echo ($context["oAuthGoogleErrorMessage"] ?? null);
        echo "';
    var fullscreen = ";
        // line 56
        if (($context["fullscreen"] ?? null)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ";
    var contextPsAccounts = ";
        // line 57
        echo twig_jsonencode_filter(($context["contextPsAccounts"] ?? null));
        echo ";
    var metricsApiUrl = '";
        // line 58
        echo ($context["metricsApiUrl"] ?? null);
        echo "';
    var metricsModule = ";
        // line 59
        echo twig_jsonencode_filter(($context["metricsModule"] ?? null));
        echo ";
    var eventBusModule = ";
        // line 60
        echo twig_jsonencode_filter(($context["eventBusModule"] ?? null));
        echo ";
    var accountsModule = ";
        // line 61
        echo twig_jsonencode_filter(($context["accountsModule"] ?? null));
        echo ";
    var graphqlEndpoint = '";
        // line 62
        echo ($context["graphqlEndpoint"] ?? null);
        echo "';
    var isoCode = '";
        // line 63
        echo ($context["isoCode"] ?? null);
        echo "';
    var currencyIsoCode = '";
        // line 64
        echo ($context["currencyIsoCode"] ?? null);
        echo "';
    var currentPage = '";
        // line 65
        echo ($context["currentPage"] ?? null);
        echo "';
    var adminToken = '";
        // line 66
        echo ($context["adminToken"] ?? null);
        echo "';
  </script>

  ";
        // line 69
        if ((($context["useLocalVueApp"] ?? null) == true)) {
            // line 70
            echo "    ";
            if ((($context["useBuildModeOnly"] ?? null) == true)) {
                // line 71
                echo "      <script type=\"module\" src=\"";
                echo twig_escape_filter($this->env, ($context["pathAppBuilded"] ?? null), "html", null, true);
                echo "\"></script>
    ";
            } else {
                // line 73
                echo "      <script type=\"module\" src=\"https://localhost:3001/@vite/client\"></script>
      <script type=\"module\" src=\"https://localhost:3001/src/main.ts\"></script>
    ";
            }
            // line 76
            echo "  ";
        } else {
            // line 77
            echo "    <script type=\"module\" src=\"";
            echo twig_escape_filter($this->env, ($context["pathAppCdn"] ?? null), "html", null, true);
            echo "\"></script>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@Modules/ps_metrics/views/templates/admin/metrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 77,  172 => 76,  167 => 73,  161 => 71,  158 => 70,  156 => 69,  150 => 66,  146 => 65,  142 => 64,  138 => 63,  134 => 62,  130 => 61,  126 => 60,  122 => 59,  118 => 58,  114 => 57,  106 => 56,  102 => 55,  99 => 54,  96 => 53,  85 => 44,  83 => 43,  73 => 35,  67 => 33,  65 => 32,  60 => 31,  57 => 30,  54 => 29,  48 => 25,  46 => 24,  43 => 23,  40 => 22,  31 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_metrics/views/templates/admin/metrics.html.twig", "/var/www/html/modules/ps_metrics/views/templates/admin/metrics.html.twig");
    }
}
