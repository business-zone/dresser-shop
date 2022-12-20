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
class __TwigTemplate_c470e919dcaaaf48204af7532085082af19e423d105a698c534de740c44d4100 extends \Twig\Template
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
        // line 25
        echo "
";
        // line 26
        if (($context["isDeleteSubmitted"] ?? null)) {
            // line 27
            echo "  ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteCategoriesForm"] ?? null), 'form_start');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["deleteCategoriesForm"] ?? null), "delete_mode", []), 'widget');
            echo "
                </div>
                <div class=\"d-none\">
                  ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["deleteCategoriesForm"] ?? null), "categories_to_delete", []), 'widget');
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteCategoriesForm"] ?? null), 'form_end');
            echo "
";
        }
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
        return array (  92 => 62,  84 => 57,  74 => 50,  68 => 47,  58 => 40,  52 => 37,  43 => 31,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Sell/Catalog/Categories/Blocks:delete_block.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig");
    }
}
