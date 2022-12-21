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

/* PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:msg_list_item.html.twig */
class __TwigTemplate_5182b98c5d4f3bcf6e31bbca34f3dbf3854064cb32979cd9b03d568a9c8b5f99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:msg_list_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:msg_list_item.html.twig"));

        // line 25
        echo "
 <li class=\"mb-2 ";
        // line 26
        if ($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "employeeId", [])) {
            echo "messages-block-employee";
        } else {
            echo "messages-block-customer";
        }
        echo "\">
  <div class=\"row no-gutters\">
    ";
        // line 28
        if ( !$this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "employeeId", [])) {
            // line 29
            echo "      <div class=\"messages-block-icon\">
        <i class=\"material-icons\">account_circle</i>
      </div>

      <div class=\"messages-block-content\">
        <p class=\"mb-0 message customer-message\">
          ";
            // line 35
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "message", []), "html", null, true));
            echo "
        </p>
        <p class=\"text-muted mb-0\">
          ";
            // line 38
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "customerFirstName", []) . " ") . $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "customerLastName", [])), "html", null, true);
            echo "
          ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "messageDate", []), "format", []), "html", null, true);
            echo "
        </p>
      </div>
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if ($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "employeeId", [])) {
            // line 45
            echo "      <div class=\"messages-block-content\">
        <p class=\"mb-0 message employee-message";
            // line 46
            echo (($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "isPrivate", [])) ? ("--private") : (""));
            echo "\">
          ";
            // line 47
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "message", []), "html", null, true));
            echo "
        </p>
        <p class=\"text-muted mb-0 text-right\">
          ";
            // line 50
            if ($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "isCurrentEmployeesMessage", [])) {
                // line 51
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Me", [], "Admin.Global"), "html", null, true);
                echo "
          ";
            } else {
                // line 53
                echo "            ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "employeeFirstName", []) . " ") . $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "employeeLastName", [])), "html", null, true);
                echo "
          ";
            }
            // line 55
            echo "
          ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "messageDate", []), "format", []), "html", null, true);
            echo "
        </p>
      </div>

      <div class=\"messages-block-icon\">
        <i class=\"material-icons employee-icon";
            // line 61
            echo (($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "isPrivate", [])) ? ("--private") : (""));
            echo "\"></i>
      </div>
    ";
        }
        // line 64
        echo "  </div>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:msg_list_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 64,  118 => 61,  110 => 56,  107 => 55,  101 => 53,  95 => 51,  93 => 50,  87 => 47,  83 => 46,  80 => 45,  78 => 44,  75 => 43,  68 => 39,  64 => 38,  58 => 35,  50 => 29,  48 => 28,  39 => 26,  36 => 25,);
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

 <li class=\"mb-2 {% if message.employeeId %}messages-block-employee{% else %}messages-block-customer{% endif %}\">
  <div class=\"row no-gutters\">
    {% if not message.employeeId %}
      <div class=\"messages-block-icon\">
        <i class=\"material-icons\">account_circle</i>
      </div>

      <div class=\"messages-block-content\">
        <p class=\"mb-0 message customer-message\">
          {{ message.message|nl2br }}
        </p>
        <p class=\"text-muted mb-0\">
          {{ message.customerFirstName ~ ' ' ~ message.customerLastName }}
          {{ message.messageDate.format }}
        </p>
      </div>
    {% endif %}

    {% if message.employeeId %}
      <div class=\"messages-block-content\">
        <p class=\"mb-0 message employee-message{{ message.isPrivate ? '--private' : '' }}\">
          {{ message.message|nl2br }}
        </p>
        <p class=\"text-muted mb-0 text-right\">
          {% if message.isCurrentEmployeesMessage %}
            {{ 'Me'|trans({}, 'Admin.Global') }}
          {% else %}
            {{ message.employeeFirstName ~ ' ' ~ message.employeeLastName }}
          {% endif %}

          {{ message.messageDate.format }}
        </p>
      </div>

      <div class=\"messages-block-icon\">
        <i class=\"material-icons employee-icon{{ message.isPrivate ? '--private' : '' }}\"></i>
      </div>
    {% endif %}
  </div>
</li>
", "PrestaShopBundle:Admin/Sell/Order/Order/Blocks/View:msg_list_item.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig");
    }
}
