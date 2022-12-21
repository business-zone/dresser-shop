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

/* PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig */
class __TwigTemplate_5e461e766cd7d4a93968f5e2bdae3082f221ebe9a83486429f4e81c4de62491f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'order_states_listing' => [$this, 'block_order_states_listing'],
            'order_return_states_listing' => [$this, 'block_order_return_states_listing'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 41
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig"));

        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Statuses", [], "Admin.Navigation.Menu");
        // line 28
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_states_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new order status", [], "Admin.Shopparameters.Feature"), "icon" => "add_circle_outline"], "add_return_state" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_return_states_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new order return status", [], "Admin.Shopparameters.Feature"), "icon" => "add_circle_outline"]];
        // line 41
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", 41);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "
  ";
        // line 45
        $this->displayBlock('order_states_listing', $context, $blocks);
        // line 53
        echo "
  ";
        // line 54
        $this->displayBlock('order_return_states_listing', $context, $blocks);
        // line 62
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_order_states_listing($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_states_listing"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_states_listing"));

        // line 46
        echo "    <div class=\"row\">
      <div class=\"col-12\">
        ";
        // line 48
        $this->loadTemplate("PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", 48, "1001398918")->display(twig_array_merge($context, ["grid" => ($context["orderStatesGrid"] ?? $this->getContext($context, "orderStatesGrid"))]));
        // line 50
        echo "      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_order_return_states_listing($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_return_states_listing"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_return_states_listing"));

        // line 55
        echo "    <div class=\"row\">
      <div class=\"col-12\">
        ";
        // line 57
        $this->loadTemplate("PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", 57, "1403215331")->display(twig_array_merge($context, ["grid" => ($context["orderReturnStatesGrid"] ?? $this->getContext($context, "orderReturnStatesGrid"))]));
        // line 59
        echo "      </div>
    </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_states.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 69,  160 => 68,  154 => 66,  145 => 65,  133 => 59,  131 => 57,  127 => 55,  118 => 54,  106 => 50,  104 => 48,  100 => 46,  91 => 45,  80 => 62,  78 => 54,  75 => 53,  73 => 45,  70 => 44,  61 => 43,  50 => 41,  48 => 28,  46 => 27,  44 => 26,  32 => 41,);
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

{% set enableSidebar = true %}
{% set layoutTitle = 'Statuses'|trans({}, 'Admin.Navigation.Menu') %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_order_states_create'),
    'desc': 'Add new order status'|trans({}, 'Admin.Shopparameters.Feature'),
    'icon': 'add_circle_outline'
  },
  'add_return_state': {
    'href': path('admin_order_return_states_create'),
    'desc': 'Add new order return status'|trans({}, 'Admin.Shopparameters.Feature'),
    'icon': 'add_circle_outline'
  }
} %}

{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block content %}

  {% block order_states_listing %}
    <div class=\"row\">
      <div class=\"col-12\">
        {% embed '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': orderStatesGrid} %}
        {% endembed %}
      </div>
    </div>
  {% endblock %}

  {% block order_return_states_listing %}
    <div class=\"row\">
      <div class=\"col-12\">
        {% embed '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': orderReturnStatesGrid} %}
        {% endembed %}
      </div>
    </div>
  {% endblock %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/order_states.bundle.js') }}\"></script>
{% endblock %}

", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/index.html.twig");
    }
}


/* PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig */
class __TwigTemplate_5e461e766cd7d4a93968f5e2bdae3082f221ebe9a83486429f4e81c4de62491f___1001398918 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 48
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", 48);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 48,  164 => 69,  160 => 68,  154 => 66,  145 => 65,  133 => 59,  131 => 57,  127 => 55,  118 => 54,  106 => 50,  104 => 48,  100 => 46,  91 => 45,  80 => 62,  78 => 54,  75 => 53,  73 => 45,  70 => 44,  61 => 43,  50 => 41,  48 => 28,  46 => 27,  44 => 26,  32 => 41,);
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

{% set enableSidebar = true %}
{% set layoutTitle = 'Statuses'|trans({}, 'Admin.Navigation.Menu') %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_order_states_create'),
    'desc': 'Add new order status'|trans({}, 'Admin.Shopparameters.Feature'),
    'icon': 'add_circle_outline'
  },
  'add_return_state': {
    'href': path('admin_order_return_states_create'),
    'desc': 'Add new order return status'|trans({}, 'Admin.Shopparameters.Feature'),
    'icon': 'add_circle_outline'
  }
} %}

{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block content %}

  {% block order_states_listing %}
    <div class=\"row\">
      <div class=\"col-12\">
        {% embed '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': orderStatesGrid} %}
        {% endembed %}
      </div>
    </div>
  {% endblock %}

  {% block order_return_states_listing %}
    <div class=\"row\">
      <div class=\"col-12\">
        {% embed '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': orderReturnStatesGrid} %}
        {% endembed %}
      </div>
    </div>
  {% endblock %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/order_states.bundle.js') }}\"></script>
{% endblock %}

", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/index.html.twig");
    }
}


/* PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig */
class __TwigTemplate_5e461e766cd7d4a93968f5e2bdae3082f221ebe9a83486429f4e81c4de62491f___1403215331 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 57
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", 57);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 57,  290 => 48,  164 => 69,  160 => 68,  154 => 66,  145 => 65,  133 => 59,  131 => 57,  127 => 55,  118 => 54,  106 => 50,  104 => 48,  100 => 46,  91 => 45,  80 => 62,  78 => 54,  75 => 53,  73 => 45,  70 => 44,  61 => 43,  50 => 41,  48 => 28,  46 => 27,  44 => 26,  32 => 41,);
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

{% set enableSidebar = true %}
{% set layoutTitle = 'Statuses'|trans({}, 'Admin.Navigation.Menu') %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_order_states_create'),
    'desc': 'Add new order status'|trans({}, 'Admin.Shopparameters.Feature'),
    'icon': 'add_circle_outline'
  },
  'add_return_state': {
    'href': path('admin_order_return_states_create'),
    'desc': 'Add new order return status'|trans({}, 'Admin.Shopparameters.Feature'),
    'icon': 'add_circle_outline'
  }
} %}

{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block content %}

  {% block order_states_listing %}
    <div class=\"row\">
      <div class=\"col-12\">
        {% embed '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': orderStatesGrid} %}
        {% endembed %}
      </div>
    </div>
  {% endblock %}

  {% block order_return_states_listing %}
    <div class=\"row\">
      <div class=\"col-12\">
        {% embed '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': orderReturnStatesGrid} %}
        {% endembed %}
      </div>
    </div>
  {% endblock %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/order_states.bundle.js') }}\"></script>
{% endblock %}

", "PrestaShopBundle:Admin/Configure/ShopParameters/OrderStates:index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/index.html.twig");
    }
}
