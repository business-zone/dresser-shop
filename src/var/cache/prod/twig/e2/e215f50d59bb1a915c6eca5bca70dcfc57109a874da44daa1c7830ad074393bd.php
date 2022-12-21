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

/* PrestaShopBundle:Admin/Sell/Catalog/Product:edit.html.twig */
class __TwigTemplate_472f404b53bb93f9511d1e65f7416eeafb86605503d65b07e60b7a6d0589f219 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_tabs_container' => [$this, 'block_product_tabs_container'],
            'product_tab_basic' => [$this, 'block_product_tab_basic'],
            'product_tab_combinations' => [$this, 'block_product_tab_combinations'],
            'product_tab_stock' => [$this, 'block_product_tab_stock'],
            'product_tab_shipping' => [$this, 'block_product_tab_shipping'],
            'product_tab_pricing' => [$this, 'block_product_tab_pricing'],
            'product_tab_seo' => [$this, 'block_product_tab_seo'],
            'product_tab_options' => [$this, 'block_product_tab_options'],
            'product_extra_tab' => [$this, 'block_product_extra_tab'],
            'product_footer' => [$this, 'block_product_footer'],
            'product_rest' => [$this, 'block_product_rest'],
            'product_external_tab_combinations' => [$this, 'block_product_external_tab_combinations'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Catalog/Product:edit.html.twig"));

        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["productForm"] ?? $this->getContext($context, "productForm")), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/Form/product_form_theme.html.twig"], false);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Sell/Catalog/Product:edit.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 39
        echo "  ";
        $context["productType"] = $this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "vars", []), "product_type", []);
        // line 40
        echo "  ";
        $context["productId"] = $this->getAttribute($this->getAttribute(($context["productForm"] ?? $this->getContext($context, "productForm")), "vars", []), "product_id", []);
        // line 41
        echo "  ";
        $context["extraModulesHooks"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHooksArray("displayAdminProductsExtra", ["id_product" => ($context["productId"] ?? $this->getContext($context, "productId"))]);
        // line 42
        echo "
  <div class=\"header-toolbar d-print-none\">
    ";
        // line 44
        echo $this->env->getExtension('PrestaShopBundle\Twig\Extension\MultistoreHeaderExtension')->getMultistoreHeader();
        echo "
  </div>

  ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? $this->getContext($context, "productForm")), 'form_start', ["attr" => ["class" => "form-horizontal product-page product-page-v2 row justify-content-md-center", "novalidate" => "novalidate", "data-product-id" =>         // line 49
($context["productId"] ?? $this->getContext($context, "productId")), "data-product-type" =>         // line 50
($context["productType"] ?? $this->getContext($context, "productType"))]]);
        // line 51
        echo "

  ";
        // line 53
        $this->displayBlock('product_header', $context, $blocks);
        // line 62
        echo "
  <div class=\"col-xxl-10\">

  ";
        // line 65
        $this->displayBlock("session_alert", $context, $blocks);
        echo "

  <div class=\"alert alert-info alert-experimental\" role=\"alert\">
    <p class=\"mb-1\">
      <strong>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the experimental product page.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</strong>
    </p>
    <p class=\"alert-text\">
      ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This page benefits from increased performance and includes new features such as a new combination management system. Please note this is a work in progress and some features are not available yet.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
    </p>
  </div>

    ";
        // line 76
        $this->displayBlock('product_tabs_container', $context, $blocks);
        // line 83
        echo "
    <div id=\"form_content\" class=\"product-tabs tab-content\">
      ";
        // line 85
        $this->displayBlock('product_tab_basic', $context, $blocks);
        // line 90
        echo "
      ";
        // line 91
        if ((($context["productType"] ?? $this->getContext($context, "productType")) == "combinations")) {
            // line 92
            echo "        ";
            $this->displayBlock('product_tab_combinations', $context, $blocks);
            // line 95
            echo "      ";
        }
        // line 96
        echo "
      ";
        // line 97
        if ($this->getAttribute(($context["productForm"] ?? null), "stock", [], "any", true, true)) {
            // line 98
            echo "        ";
            $this->displayBlock('product_tab_stock', $context, $blocks);
            // line 101
            echo "      ";
        }
        // line 102
        echo "
      ";
        // line 103
        if ($this->getAttribute(($context["productForm"] ?? null), "shipping", [], "any", true, true)) {
            // line 104
            echo "        ";
            $this->displayBlock('product_tab_shipping', $context, $blocks);
            // line 109
            echo "      ";
        }
        // line 110
        echo "
      ";
        // line 111
        $this->displayBlock('product_tab_pricing', $context, $blocks);
        // line 116
        echo "
      ";
        // line 117
        $this->displayBlock('product_tab_seo', $context, $blocks);
        // line 122
        echo "
      ";
        // line 123
        $this->displayBlock('product_tab_options', $context, $blocks);
        // line 128
        echo "
      ";
        // line 129
        $this->displayBlock('product_extra_tab', $context, $blocks);
        // line 135
        echo "    </div>
  </div>

  ";
        // line 138
        $this->displayBlock('product_footer', $context, $blocks);
        // line 145
        echo "
  ";
        // line 146
        $this->displayBlock('product_rest', $context, $blocks);
        // line 149
        echo "
  ";
        // line 151
        echo "  ";
        $this->displayBlock('product_external_tab_combinations', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_product_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_header"));

        // line 54
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig", ["productForm" =>         // line 55
($context["productForm"] ?? $this->getContext($context, "productForm")), "isMultiShopContext" =>         // line 56
($context["isMultiShopContext"] ?? $this->getContext($context, "isMultiShopContext")), "helpLink" =>         // line 57
($context["helpLink"] ?? $this->getContext($context, "helpLink")), "statsLink" =>         // line 58
($context["statsLink"] ?? $this->getContext($context, "statsLink"))]);
        // line 60
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_product_tabs_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tabs_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tabs_container"));

        // line 77
        echo "      ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/tabs.html.twig", ["productForm" =>         // line 78
($context["productForm"] ?? $this->getContext($context, "productForm")), "productType" =>         // line 79
($context["productType"] ?? $this->getContext($context, "productType")), "extraModulesHooks" =>         // line 80
($context["extraModulesHooks"] ?? $this->getContext($context, "extraModulesHooks"))]);
        // line 81
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_product_tab_basic($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_basic"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_basic"));

        // line 86
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/basic.html.twig", ["productForm" =>         // line 87
($context["productForm"] ?? $this->getContext($context, "productForm"))]);
        // line 88
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_product_tab_combinations($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_combinations"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_combinations"));

        // line 93
        echo "          ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/combinations.html.twig");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_product_tab_stock($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_stock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_stock"));

        // line 99
        echo "          ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/stock.html.twig");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_product_tab_shipping($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_shipping"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_shipping"));

        // line 105
        echo "          ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/shipping.html.twig", ["productForm" =>         // line 106
($context["productForm"] ?? $this->getContext($context, "productForm"))]);
        // line 107
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_product_tab_pricing($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_pricing"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_pricing"));

        // line 112
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/pricing.html.twig", ["productForm" =>         // line 113
($context["productForm"] ?? $this->getContext($context, "productForm"))]);
        // line 114
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_product_tab_seo($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_seo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_seo"));

        // line 118
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/seo.html.twig", ["productForm" =>         // line 119
($context["productForm"] ?? $this->getContext($context, "productForm"))]);
        // line 120
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_product_tab_options($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_options"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tab_options"));

        // line 124
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/options.html.twig", ["productForm" =>         // line 125
($context["productForm"] ?? $this->getContext($context, "productForm"))]);
        // line 126
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_product_extra_tab($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_extra_tab"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_extra_tab"));

        // line 130
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Tabs/modules.html.twig", ["productForm" =>         // line 131
($context["productForm"] ?? $this->getContext($context, "productForm")), "extraModulesHooks" =>         // line 132
($context["extraModulesHooks"] ?? $this->getContext($context, "extraModulesHooks"))]);
        // line 133
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_product_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_footer"));

        // line 139
        echo "  ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig", ["productForm" =>         // line 140
($context["productForm"] ?? $this->getContext($context, "productForm")), "editable" =>         // line 141
($context["editable"] ?? $this->getContext($context, "editable")), "productId" =>         // line 142
($context["productId"] ?? $this->getContext($context, "productId"))]);
        // line 143
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_product_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_rest"));

        // line 147
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? $this->getContext($context, "productForm")), 'form_end');
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_product_external_tab_combinations($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_external_tab_combinations"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_external_tab_combinations"));

        // line 152
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/external_tab.html.twig");
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 158
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product_edit.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Catalog/Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 160,  580 => 158,  571 => 157,  558 => 152,  549 => 151,  536 => 147,  527 => 146,  516 => 143,  514 => 142,  513 => 141,  512 => 140,  510 => 139,  501 => 138,  490 => 133,  488 => 132,  487 => 131,  485 => 130,  476 => 129,  465 => 126,  463 => 125,  461 => 124,  452 => 123,  441 => 120,  439 => 119,  437 => 118,  428 => 117,  417 => 114,  415 => 113,  413 => 112,  404 => 111,  393 => 107,  391 => 106,  389 => 105,  380 => 104,  367 => 99,  358 => 98,  345 => 93,  336 => 92,  325 => 88,  323 => 87,  321 => 86,  312 => 85,  301 => 81,  299 => 80,  298 => 79,  297 => 78,  295 => 77,  286 => 76,  275 => 60,  273 => 58,  272 => 57,  271 => 56,  270 => 55,  268 => 54,  259 => 53,  248 => 151,  245 => 149,  243 => 146,  240 => 145,  238 => 138,  233 => 135,  231 => 129,  228 => 128,  226 => 123,  223 => 122,  221 => 117,  218 => 116,  216 => 111,  213 => 110,  210 => 109,  207 => 104,  205 => 103,  202 => 102,  199 => 101,  196 => 98,  194 => 97,  191 => 96,  188 => 95,  185 => 92,  183 => 91,  180 => 90,  178 => 85,  174 => 83,  172 => 76,  165 => 72,  159 => 69,  152 => 65,  147 => 62,  145 => 53,  141 => 51,  139 => 50,  138 => 49,  137 => 47,  131 => 44,  127 => 42,  124 => 41,  121 => 40,  118 => 39,  109 => 38,  92 => 35,  79 => 31,  70 => 30,  59 => 25,  57 => 28,  45 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{# It is very important to use product theme ONLY or the default theme from Symfony config is always preloaded #}
{% form_theme productForm with ['@PrestaShop/Admin/Sell/Catalog/Product/Form/product_form_theme.html.twig'] only %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{# We empty the parent content header block because session alert is gonna be displayed inside the content #}
{% block content_header %}
{% endblock %}

{% block content %}
  {% set productType = productForm.vars.product_type %}
  {% set productId = productForm.vars.product_id %}
  {% set extraModulesHooks = renderhooksarray('displayAdminProductsExtra', { 'id_product': productId }) %}

  <div class=\"header-toolbar d-print-none\">
    {{ multistoreHeader() }}
  </div>

  {{ form_start(productForm, {'attr': {
    'class': 'form-horizontal product-page product-page-v2 row justify-content-md-center', 'novalidate': 'novalidate',
    'data-product-id': productId,
    'data-product-type': productType
  }}) }}

  {% block product_header %}
    {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig', {
      'productForm': productForm,
      'isMultiShopContext': isMultiShopContext,
      'helpLink': helpLink,
      'statsLink': statsLink
    })
    }}
  {% endblock %}

  <div class=\"col-xxl-10\">

  {{ block('session_alert') }}

  <div class=\"alert alert-info alert-experimental\" role=\"alert\">
    <p class=\"mb-1\">
      <strong>{{ 'This is the experimental product page.'|trans({}, 'Admin.Catalog.Notification') }}</strong>
    </p>
    <p class=\"alert-text\">
      {{ 'This page benefits from increased performance and includes new features such as a new combination management system. Please note this is a work in progress and some features are not available yet.'|trans({}, 'Admin.Advparameters.Help') }}
    </p>
  </div>

    {% block product_tabs_container %}
      {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Blocks/tabs.html.twig', {
        'productForm': productForm,
        'productType': productType,
        'extraModulesHooks': extraModulesHooks
      }) }}
    {% endblock %}

    <div id=\"form_content\" class=\"product-tabs tab-content\">
      {% block product_tab_basic %}
        {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Tabs/basic.html.twig', {
          'productForm': productForm,
        }) }}
      {% endblock %}

      {% if productType == 'combinations' %}
        {% block product_tab_combinations %}
          {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Tabs/combinations.html.twig') }}
        {% endblock %}
      {% endif %}

      {% if productForm.stock is defined %}
        {% block product_tab_stock %}
          {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Tabs/stock.html.twig') }}
        {% endblock %}
      {% endif %}

      {% if productForm.shipping is defined %}
        {% block product_tab_shipping %}
          {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Tabs/shipping.html.twig', {
            'productForm': productForm,
          }) }}
        {% endblock %}
      {% endif %}

      {% block product_tab_pricing %}
        {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Tabs/pricing.html.twig', {
          'productForm': productForm,
        }) }}
      {% endblock %}

      {% block product_tab_seo %}
        {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Tabs/seo.html.twig', {
          'productForm': productForm,
        }) }}
      {% endblock %}

      {% block product_tab_options %}
        {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Tabs/options.html.twig', {
          'productForm': productForm,
        }) }}
      {% endblock %}

      {% block product_extra_tab %}
        {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Tabs/modules.html.twig', {
          'productForm': productForm,
          'extraModulesHooks': extraModulesHooks,
        }) }}
      {% endblock %}
    </div>
  </div>

  {% block product_footer %}
  {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig', {
    'productForm': productForm,
    'editable': editable,
    'productId': productId,
  }) }}
  {% endblock %}

  {% block product_rest %}
  {{ form_end(productForm) }}
  {% endblock %}

  {# We don't want the combinations input to be inside the product form which is why this tab is rendered after the form #}
  {% block product_external_tab_combinations %}
    {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Combination/external_tab.html.twig') }}
  {% endblock %}
{% endblock %}


{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/product_edit.bundle.js') }}\"></script>
{% endblock %}
", "PrestaShopBundle:Admin/Sell/Catalog/Product:edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/edit.html.twig");
    }
}
