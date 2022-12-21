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

/* @MailThemes/classic/components/order_layout.html.twig */
class __TwigTemplate_2acd150f25d6e5518dd8460f9436173a6d83d01366e56fb1670e012780d92707 extends \Twig\Template
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
        thead, tbody{width: 100%}
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
        body {width:425px!important;margin:auto!important;}
        thead, tbody{width: 100%}
        .table {margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
        .table-recap{width: 295px !important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}
        .table-recap tr th{font-size: 10px !important}

      }

      @media only screen and (min-width: 501px) and (max-width: 768px) {
        body {width:478px!important;margin:auto!important;}
        thead, tbody{width: 100%}
        .table {margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
      }


      /* Mobile */

      @media only screen and (max-device-width: 480px) {
        body {width:340px!important;margin:auto!important;}
        thead, tbody{width: 100%}
        .table {margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}

        .table-recap{width: 295px!important;}
        .table-recap tr td, .conf_body td{text-align:center!important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }
    </style>
  </head>
  <body style=\"-webkit-text-size-adjust:none;\" ";
        // line 66
        if (((array_key_exists("languageIsRTL", $context)) ? (_twig_default_filter(($context["languageIsRTL"] ?? null), false)) : (false))) {
            echo "dir=\"rtl\"";
        }
        echo ">
  <table class=\"table table-mail\">
    <tr>
      <td class=\"space\">&nbsp;</td>
      <td align=\"center\">
        <table class=\"table\" bgcolor=\"#ffffff\">
          ";
        // line 72
        $this->displayBlock('header', $context, $blocks);
        // line 75
        echo "
          ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "
          ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "        </table>
      </td>
      <td id=\"footer-right\" class=\"space\">&nbsp;</td>
    </tr>
  </table>
  </body>
</html>
";
    }

    // line 72
    public function block_header($context, array $blocks = [])
    {
        // line 73
        echo "            ";
        $this->loadTemplate("@MailThemes/classic/components/header.html.twig", "@MailThemes/classic/components/order_layout.html.twig", 73)->display($context);
        // line 74
        echo "          ";
    }

    // line 76
    public function block_content($context, array $blocks = [])
    {
        // line 77
        echo "          ";
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        // line 80
        echo "            ";
        $this->loadTemplate("@MailThemes/classic/components/footer.html.twig", "@MailThemes/classic/components/order_layout.html.twig", 80)->display($context);
        // line 81
        echo "          ";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/components/order_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 81,  167 => 80,  164 => 79,  160 => 77,  157 => 76,  153 => 74,  150 => 73,  147 => 72,  136 => 82,  134 => 79,  131 => 78,  129 => 76,  126 => 75,  124 => 72,  113 => 66,  54 => 9,  48 => 8,  44 => 7,  40 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/components/order_layout.html.twig", "/var/www/html/mails/themes/classic/components/order_layout.html.twig");
    }
}
