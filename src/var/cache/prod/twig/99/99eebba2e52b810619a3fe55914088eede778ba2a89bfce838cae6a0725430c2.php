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

/* @Modules/blockwishlist/views/templates/admin/statistics.html.twig */
class __TwigTemplate_9c90ec505dd33174c306350637bdfa33690ca128234476bd8538722415632d6e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "  ";
        if ((($context["shopId"] ?? $this->getContext($context, "shopId")) === null)) {
            // line 23
            echo "    <div class=\"alert medium-alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You need to choose a specific shop to display the top 10 most added products", [], "Modules.Blockwishlist.Admin"), "html", null, true);
            echo "
      </p>
    </div>
  ";
        }
        // line 29
        echo "
  <div class=\"row justify-content-center wishlist-stats\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">star</i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Top 10 most added products", [], "Modules.Blockwishlist.Admin"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-body\">
          <div class=\"card-text\">
            <div class=\"row wishlist-stats-topbar\">
              <div class=\"btn-group\">
                <button class=\"btn btn-default active\" data-tab=\"1\">Day</button>
                <button class=\"btn btn-default\" data-tab=\"2\">Month</button>
                <button class=\"btn btn-default\" data-tab=\"3\">Year</button>
                <button class=\"btn btn-default\" data-tab=\"4\">All time</button>
              </div>

              <button class=\"btn btn-default refresh js-refresh\">
                <i class=\"material-icons\">history</i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refresh", [], "Modules.Blockwishlist.Admin"), "html", null, true);
        echo "
              </button>
            </div>

            <div class=\"wishlist-tab active\" data-tab=\"1\">
              ";
        // line 53
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", 53)->display(twig_array_merge($context, ["grid" => ($context["allTimeStatisticsGrid"] ?? $this->getContext($context, "allTimeStatisticsGrid"))]));
        // line 54
        echo "            </div>

            <div class=\"wishlist-tab\" data-tab=\"2\">
              ";
        // line 57
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", 57)->display(twig_array_merge($context, ["grid" => ($context["currentYearStatisticsGrid"] ?? $this->getContext($context, "currentYearStatisticsGrid"))]));
        // line 58
        echo "            </div>

            <div class=\"wishlist-tab\" data-tab=\"3\">
              ";
        // line 61
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", 61)->display(twig_array_merge($context, ["grid" => ($context["currentMonthStatisticsGrid"] ?? $this->getContext($context, "currentMonthStatisticsGrid"))]));
        // line 62
        echo "            </div>

            <div class=\"wishlist-tab\" data-tab=\"4\">
              ";
        // line 65
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", 65)->display(twig_array_merge($context, ["grid" => ($context["currentDayStatisticsGrid"] ?? $this->getContext($context, "currentDayStatisticsGrid"))]));
        // line 66
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script>
    var blockwishlistModule = {
      'resetCacheUrl': '";
        // line 79
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("blockwishlist_statistics_reset"), "js"), "html", null, true);
        echo "',
    };
  </script>
  <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../modules/blockwishlist/public/backoffice.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/views/templates/admin/statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 82,  163 => 79,  155 => 75,  146 => 74,  130 => 66,  128 => 65,  123 => 62,  121 => 61,  116 => 58,  114 => 57,  109 => 54,  107 => 53,  99 => 48,  82 => 34,  75 => 29,  68 => 25,  64 => 23,  61 => 22,  52 => 21,  30 => 19,);
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
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {% if shopId is same as(null) %}
    <div class=\"alert medium-alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'You need to choose a specific shop to display the top 10 most added products'|trans({}, 'Modules.Blockwishlist.Admin') }}
      </p>
    </div>
  {% endif %}

  <div class=\"row justify-content-center wishlist-stats\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">star</i> {{ 'Top 10 most added products'|trans({}, 'Modules.Blockwishlist.Admin') }}
        </h3>

        <div class=\"card-body\">
          <div class=\"card-text\">
            <div class=\"row wishlist-stats-topbar\">
              <div class=\"btn-group\">
                <button class=\"btn btn-default active\" data-tab=\"1\">Day</button>
                <button class=\"btn btn-default\" data-tab=\"2\">Month</button>
                <button class=\"btn btn-default\" data-tab=\"3\">Year</button>
                <button class=\"btn btn-default\" data-tab=\"4\">All time</button>
              </div>

              <button class=\"btn btn-default refresh js-refresh\">
                <i class=\"material-icons\">history</i> {{ 'Refresh'|trans({}, 'Modules.Blockwishlist.Admin') }}
              </button>
            </div>

            <div class=\"wishlist-tab active\" data-tab=\"1\">
              {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': allTimeStatisticsGrid} %}
            </div>

            <div class=\"wishlist-tab\" data-tab=\"2\">
              {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': currentYearStatisticsGrid} %}
            </div>

            <div class=\"wishlist-tab\" data-tab=\"3\">
              {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': currentMonthStatisticsGrid} %}
            </div>

            <div class=\"wishlist-tab\" data-tab=\"4\">
              {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': currentDayStatisticsGrid} %}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script>
    var blockwishlistModule = {
      'resetCacheUrl': '{{ url('blockwishlist_statistics_reset')|e('js') }}',
    };
  </script>
  <script src=\"{{ asset('../modules/blockwishlist/public/backoffice.bundle.js') }}\"></script>
{% endblock %}
", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", "/var/www/html/modules/blockwishlist/views/templates/admin/statistics.html.twig");
    }
}
