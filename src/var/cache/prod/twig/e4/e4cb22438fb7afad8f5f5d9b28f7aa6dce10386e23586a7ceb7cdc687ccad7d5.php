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

/* @MailThemes/classic/assets/email.css */
class __TwigTemplate_4fee143ac38bb05ce04166ec36441e31e3f7424b4cb45dff87d7ad262771c332 extends \Twig\Template
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
        // line 1
        echo "body{
  background-color: #ffffff;
  width:650px;
  margin:auto;
  font-family: \"Open-sans\", sans-serif;
  color: #555454;
  font-size: 13px;
  line-height: 18px
}

table{width:100%;}

.table tbody > tr > td {
  padding:7px 0
}

td.space {width:20px;}
td.space_footer {padding:0 !important;}

table.table-mail{
  margin-top:10px;
  -moz-box-shadow: 0 0 5px #afafaf;
  -webkit-box-shadow: 0 0 5px #afafaf;
  -o-box-shadow: 0 0 5px #afafaf;
  box-shadow: 0 0 5px #afafaf;
  filter:progid:DXImageTransform.Microsoft.Shadow(color=#afafaf, Direction=134, Strength=5);
}

table.table-recap td{color:#777777;}
table.table-recap, table.table-recap .table {border-collapse: collapse;}
table.table-recap .table td{padding:0;}

.table .table-recap thead > tr > th{
  background-color: #fbfbfb;
  padding:10px;
  font-family: Arial;
  color:#333333;
  font-size: 13px
}

table.table-recap .conf_body td{color:#333333;}

table.table-recap .conf_body td.total{
  color:#555454;
  font-size:18px;
  font-weight:500;
  font-family: \"Open-sans\", sans-serif;
}

table.table-recap .conf_body td.total_amount{
  color:#333333;
  font-size: 21px;
  font-weight:500;
  font-family: \"Open-sans\", sans-serif;
}

a{color: #337ff1}

p{margin:3px 0 7px 0;}

span.title{
  font-weight: 500;
  font-size: 28px;
  text-transform: uppercase;
  line-height: 33px;
}
span.subtitle{
  font-weight: 500;
  font-size: 16px;
  text-transform: uppercase;
  line-height: 25px;
}

td.box{
  background-color: #f8f8f8;
}

td.box p{
  text-transform: uppercase;
  font-weight: 500;
  font-size: 18px;
  padding-bottom: 10px
}

td.box span{
  color:#777777;
}

td.box span span{
  color:#333333;
}

td.box ol{
  margin-bottom: 0
}
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/assets/email.css";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/assets/email.css", "/var/www/html/mails/themes/classic/assets/email.css");
    }
}
