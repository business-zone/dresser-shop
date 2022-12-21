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

/* @MailThemes/classic/components/layout.html.twig */
class __TwigTemplate_4113874bfc6bf8423b7ccfff903499bc4dc37f716c5a699092df1328e125287a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Message from {shop_name}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["mailThemesUrl"] ?? null), "html", null, true);
        echo "/classic/assets/email.css\">
    ";
        // line 8
        if (($context["languageIsRTL"] ?? null)) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["mailThemesUrl"] ?? null), "html", null, true);
            echo "/classic/assets/rtl.css\">";
        }
        // line 9
        echo "
    <style>
      /****** responsive ********/
      @media only screen and (max-width: 300px){
        body {
          width:218px !important;
          margin:auto !important;
        }
        .table {width:195px !important;margin:auto !important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}
        span.title{font-size:20px !important;line-height: 23px !important}
        span.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}
        td.box p{font-size: 12px !important;font-weight: bold !important;}
        .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr {
          display: block !important;
        }
        .table-recap{width: 200px!important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }

      @media only screen and (min-width: 301px) and (max-width: 500px) {
        body {width:308px!important;margin:auto!important;}
        .table {width:285px!important;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
        .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr {
          display: block !important;
        }
        .table-recap{width: 295px !important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}

      }

      @media only screen and (min-width: 501px) and (max-width: 768px) {
        body {width:478px!important;margin:auto!important;}
        .table {width:450px!important;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
      }


      /* Mobile */

      @media only screen and (max-device-width: 480px) {
        body {width:308px!important;margin:auto!important;}
        .table {width:285px;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}

        .table-recap{width: 295px!important;}
        .table-recap tr td, .conf_body td{text-align:center!important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }
    </style>
  </head>
  <body style=\"-webkit-text-size-adjust:none;\" ";
        // line 64
        if (((array_key_exists("languageIsRTL", $context)) ? (_twig_default_filter(($context["languageIsRTL"] ?? null), false)) : (false))) {
            echo "dir=\"rtl\"";
        }
        echo ">
    <table class=\"table table-mail\">
      <tr>
        <td id=\"header-left\" class=\"space\">&nbsp;</td>
        <td align=\"center\">
          <table class=\"table\" bgcolor=\"#ffffff\">
            ";
        // line 70
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "
            ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "
            ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "          </table>
        </td>
        <td id=\"footer-right\" class=\"space\">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
";
    }

    // line 70
    public function block_header($context, array $blocks = [])
    {
        // line 71
        echo "              ";
        $this->loadTemplate("@MailThemes/classic/components/header.html.twig", "@MailThemes/classic/components/layout.html.twig", 71)->display($context);
        // line 72
        echo "            ";
    }

    // line 74
    public function block_content($context, array $blocks = [])
    {
        // line 75
        echo "            ";
    }

    // line 77
    public function block_footer($context, array $blocks = [])
    {
        // line 78
        echo "              ";
        $this->loadTemplate("@MailThemes/classic/components/footer.html.twig", "@MailThemes/classic/components/layout.html.twig", 78)->display($context);
        // line 79
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/components/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 79,  165 => 78,  162 => 77,  158 => 75,  155 => 74,  151 => 72,  148 => 71,  145 => 70,  134 => 80,  132 => 77,  129 => 76,  127 => 74,  124 => 73,  122 => 70,  111 => 64,  54 => 9,  48 => 8,  44 => 7,  40 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/components/layout.html.twig", "/var/www/html/mails/themes/classic/components/layout.html.twig");
    }
}
