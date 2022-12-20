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

/* PrestaShopBundle:Admin/WebProfiler:commands_and_queries.html.twig */
class __TwigTemplate_864433b2f7bbda0764e2f1c94d6ee3509af394e06018cb701657677ac3140caf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "PrestaShopBundle:Admin/WebProfiler:commands_and_queries.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_toolbar($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        ob_start(function () { return ''; });
        // line 30
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "
    <span class=\"sf-toolbar-value\">Commands / Queries</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
  ";
        // line 34
        ob_start(function () { return ''; });
        // line 35
        echo "    <div class=\"sf-toolbar-info-piece\">
      <div class=\"sf-toolbar-info-piece\">
        <b class=\"sf-toolbar-ajax-info\">Commands / Queries</b>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Commands</b>
        ";
        // line 41
        $context["commandsCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "executedCommands", []));
        // line 42
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        if ((($context["commandsCount"] ?? null) > 0)) {
            echo "green";
        } else {
            echo "red";
        }
        echo "\">
          ";
        // line 43
        echo twig_escape_filter($this->env, ($context["commandsCount"] ?? null), "html", null, true);
        echo "
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Queries</b>
        ";
        // line 48
        $context["queriesCount"] = twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "executedQueries", []));
        // line 49
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        if ((($context["queriesCount"] ?? null) > 0)) {
            echo "green";
        } else {
            echo "red";
        }
        echo "\">
          ";
        // line 50
        echo twig_escape_filter($this->env, ($context["queriesCount"] ?? null), "html", null, true);
        echo "
        </span>
      </div>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "
  ";
        // line 56
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        echo "
";
    }

    // line 59
    public function block_menu($context, array $blocks = [])
    {
        // line 60
        echo "  <span class=\"label\">
    <span class=\"icon\">";
        // line 61
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
    <strong>Commands / Queries</strong>
  </span>
";
    }

    // line 66
    public function block_panel($context, array $blocks = [])
    {
        // line 67
        echo "  <h2>Commands</h2>

  <div class=\"sf-toolbar-info-piece\">
    <table id=\"cqrs-commands-log\">
      <thead>
        <tr>
          <th>Command</th>
          <th>Command Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
        ";
        // line 79
        if ( !twig_test_empty($this->getAttribute(($context["collector"] ?? null), "executedCommands", []))) {
            // line 80
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "executedCommands", []));
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 81
                echo "            <tr>
              <td class=\"text-small\">";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "command", []), "html", null, true);
                echo "</td>
              <td class=\"text-small\">";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "command_handler", []), "html", null, true);
                echo "</td>
              <td class=\"text-small\">";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["command"], "trace", []), "file", []), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["command"], "trace", []), "line", []), "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        ";
        } else {
            // line 88
            echo "          <tr>
            <td colspan=\"3\" class=\"font-normal\">No Commands where executed during request.</td>
          </tr>
        ";
        }
        // line 92
        echo "      </tbody>
    </table>

    <h2>Queries</h2>

    <table id=\"cqrs-queries-log\">
      <thead>
        <tr>
          <th>Query</th>
          <th>Query Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
      ";
        // line 106
        if ( !twig_test_empty($this->getAttribute(($context["collector"] ?? null), "executedQueries", []))) {
            // line 107
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "executedQueries", []));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 108
                echo "          <tr>
            <td class=\"text-small\">";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "query", []), "html", null, true);
                echo "</td>
            <td class=\"text-small\">";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "query_handler", []), "html", null, true);
                echo "</td>
            <td class=\"text-small\">";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["query"], "trace", []), "file", []), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["query"], "trace", []), "line", []), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "      ";
        } else {
            // line 115
            echo "        <tr>
          <td colspan=\"3\" class=\"font-normal\">No Queries where executed during request.</td>
        </tr>
      ";
        }
        // line 119
        echo "      </tbody>
    </table>
  </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/WebProfiler:commands_and_queries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 119,  231 => 115,  228 => 114,  217 => 111,  213 => 110,  209 => 109,  206 => 108,  201 => 107,  199 => 106,  183 => 92,  177 => 88,  174 => 87,  163 => 84,  159 => 83,  155 => 82,  152 => 81,  147 => 80,  145 => 79,  131 => 67,  128 => 66,  120 => 61,  117 => 60,  114 => 59,  108 => 56,  105 => 55,  97 => 50,  88 => 49,  86 => 48,  78 => 43,  69 => 42,  67 => 41,  59 => 35,  57 => 34,  54 => 33,  47 => 30,  44 => 29,  41 => 28,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/WebProfiler:commands_and_queries.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/WebProfiler/commands_and_queries.html.twig");
    }
}
