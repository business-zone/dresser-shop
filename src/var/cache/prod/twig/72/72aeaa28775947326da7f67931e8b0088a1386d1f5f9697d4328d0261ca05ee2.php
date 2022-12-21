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

/* PrestaShopBundle:Admin/Sell/Catalog/Categories/Blocks:delete_block.html.twig */
class __TwigTemplate_b4740b69607f56b5fb3a9c0ba17a4dea4df79ae025dcd9c6695117a2e022a418 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Categories/Blocks:delete_block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Categories/Blocks:delete_block.html.twig"));

        // line 25
        echo "
";
        // line 26
        if (($context["isDeleteSubmitted"] ?? $this->getContext($context, "isDeleteSubmitted"))) {
            // line 27
            echo "  ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteCategoriesForm"] ?? $this->getContext($context, "deleteCategoriesForm")), 'form_start');
            echo "
    <div class=\"col-md-12\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("What do you want to do with the products associated with this category?", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
        </h3>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col\">
                <div class=\"form-group mb-0\">
                  ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["deleteCategoriesForm"] ?? $this->getContext($context, "deleteCategoriesForm")), "delete_mode", []), 'widget');
            echo "
                </div>
                <div class=\"d-none\">
                  ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["deleteCategoriesForm"] ?? $this->getContext($context, "deleteCategoriesForm")), "categories_to_delete", []), 'widget');
            echo "
                </div>
            </div>
          </div>
        </div>
        <div class=\"card-footer\">
          <a class=\"btn btn-secondary btn-sm\"
             href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index");
            echo "\"
          >
            <i class=\"material-icons\">cancel</i>
            ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
            echo "
          </a>

          <button class=\"btn btn-danger btn-sm\"
                  type=\"submit\"
          >
            <i class=\"material-icons\">delete</i>
            ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
          </button>
        </div>
      </div>
    </div>
  ";
            // line 62
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteCategoriesForm"] ?? $this->getContext($context, "deleteCategoriesForm")), 'form_end');
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Categories/Blocks:delete_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 62,  90 => 57,  80 => 50,  74 => 47,  64 => 40,  58 => 37,  49 => 31,  41 => 27,  39 => 26,  36 => 25,);
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

{% if isDeleteSubmitted %}
  {{ form_start(deleteCategoriesForm) }}
    <div class=\"col-md-12\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          {{ 'What do you want to do with the products associated with this category?'|trans({}, 'Admin.Catalog.Notification') }}
        </h3>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col\">
                <div class=\"form-group mb-0\">
                  {{ form_widget(deleteCategoriesForm.delete_mode) }}
                </div>
                <div class=\"d-none\">
                  {{ form_widget(deleteCategoriesForm.categories_to_delete) }}
                </div>
            </div>
          </div>
        </div>
        <div class=\"card-footer\">
          <a class=\"btn btn-secondary btn-sm\"
             href=\"{{ path('admin_categories_index') }}\"
          >
            <i class=\"material-icons\">cancel</i>
            {{ 'Cancel'|trans({}, 'Admin.Actions') }}
          </a>

          <button class=\"btn btn-danger btn-sm\"
                  type=\"submit\"
          >
            <i class=\"material-icons\">delete</i>
            {{ 'Delete'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    </div>
  {{ form_end(deleteCategoriesForm) }}
{% endif %}
", "PrestaShopBundle:Admin/Sell/Catalog/Categories/Blocks:delete_block.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig");
    }
}
