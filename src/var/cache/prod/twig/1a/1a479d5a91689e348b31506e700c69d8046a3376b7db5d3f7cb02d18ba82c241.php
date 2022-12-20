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

/* PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_modal.html.twig */
class __TwigTemplate_ce731ec81da9db2630cd617ccefa8e224977595361f5c9d9a698d1ddce1e6b9b extends \Twig\Template
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
        // line 27
        echo "
";
        // line 28
        $this->loadTemplate("PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_modal.html.twig", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_modal.html.twig", 28, "1482212225")->display(twig_array_merge($context, ["id" => "import_progress_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Importing your data...", [], "Admin.Advparameters.Notification"), "closable" => false, "progressbar" => ["id" => "import_progress_bar", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Validating data...", [], "Admin.Advparameters.Notification")], "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ignore warnings and continue?", [], "Admin.Advparameters.Notification"), "class" => "btn btn-outline-warning btn-lg js-continue-import"], 1 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Abort import", [], "Admin.Advparameters.Notification"), "class" => "btn btn-outline-danger btn-lg js-abort-import"], 2 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "class" => "btn btn-outline-secondary btn-lg js-close-modal"]]]));
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 28,  33 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig");
    }
}


/* PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_modal.html.twig */
class __TwigTemplate_ce731ec81da9db2630cd617ccefa8e224977595361f5c9d9a698d1ddce1e6b9b___1482212225 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_modal.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        // line 55
        echo "    <div class=\"modal-body\"
         data-importing-label=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Importing your data...", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "\"
         data-imported-label=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Data imported!", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "\"
    >
      <div class=\"alert alert-success js-import-success d-none\" role=\"alert\">
        <span class=\"alert-text\">
          ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Data imported!", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
          ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Look at your listings to make sure it's all there as you wished.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        </span>
      </div>
      <div class=\"alert alert-warning js-post-limit-warning d-none\" role=\"alert\">
        <div class=\"alert-text\">
          ";
        // line 67
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning, the current import may require a PHP setting update, to allow more data to be transferred. If the current import stops before the end, you should increase your PHP \"post_max_size\" setting to [1]%size%[/1]MB at least, and try again.", [], "Admin.Advparameters.Notification"), ["[1]" => "<span id=\"post_limit_value\">", "%size%" => "16", "[/1]" => "</span>"]);
        echo "
        </div>
      </div>
      <div class=\"alert alert-warning js-import-warnings d-none\" role=\"alert\">
        <span class=\"alert-text\">
          ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some errors were detected. Please check the details:", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        </span>
      </div>
      <div class=\"alert alert-danger js-import-errors d-none\" role=\"alert\">
        <span class=\"alert-text\">
          ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Errors occurred:", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        </span>
      </div>
      <div class=\"alert alert-info js-import-info d-none\" role=\"alert\">
        <span class=\"alert-text\">
          ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We made the following adjustments:", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 82,  138 => 77,  130 => 72,  122 => 67,  114 => 62,  110 => 61,  103 => 57,  99 => 56,  96 => 55,  93 => 54,  36 => 28,  33 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks:import_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig");
    }
}
