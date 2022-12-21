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

/* @MailThemes/classic/core/guest_to_customer.html.twig */
class __TwigTemplate_5978ae7ecd9e1628957727ec1038067a5be2e28371debbf84aee449334236865 extends \Twig\Template
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
        // line 1
        return "@MailThemes/classic/components/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/core/guest_to_customer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/core/guest_to_customer.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/core/guest_to_customer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 21
        if ((($context["templateType"] ?? $this->getContext($context, "templateType")) == "html")) {
            // line 22
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your customer account creation", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
            echo "
              </p>

";
        }
        // line 28
        echo "            <span>
              ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your guest account for [1]{shop_name}[/1] has been transformed into a customer account.", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo " <br/><br/>
              <span><strong>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email address:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</strong></span> {email}<br/><br/>
              ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click on the following link to set up your password:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo " <br/> <a href=\"{url}\">{url}</a>
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please be careful when sharing these login details with others.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? $this->getContext($context, "languageDefaultFont")), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can access your customer account on our shop:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo " <strong>{shop_url}</strong>
      </span>
    </font>
  </td>
</tr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/core/guest_to_customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 56,  144 => 54,  134 => 47,  129 => 45,  112 => 31,  108 => 30,  104 => 29,  101 => 28,  94 => 24,  90 => 22,  88 => 21,  84 => 20,  68 => 7,  64 => 6,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/classic/components/layout.html.twig' %}

{% block content %}
<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">{{ 'Hi {firstname} {lastname},'|trans({}, 'Emails.Body', locale) }}</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Your customer account creation'|trans({}, 'Emails.Body', locale)|raw }}
              </p>

{% endif %}
            <span>
              {{ 'Your guest account for [1]{shop_name}[/1] has been transformed into a customer account.'|trans({'[1]': '<span><strong>', '[/1]': '</strong></span>'}, 'Emails.Body', locale)|raw }} <br/><br/>
              <span><strong>{{ 'Email address:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {email}<br/><br/>
              {{ 'Click on the following link to set up your password:'|trans({}, 'Emails.Body', locale)|raw }} <br/> <a href=\"{url}\">{url}</a>
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>
        {{ 'Please be careful when sharing these login details with others.'|trans({}, 'Emails.Body', locale)|raw }}
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>
        {{ 'You can access your customer account on our shop:'|trans({}, 'Emails.Body', locale)|raw }} <strong>{shop_url}</strong>
      </span>
    </font>
  </td>
</tr>
{% endblock %}
", "@MailThemes/classic/core/guest_to_customer.html.twig", "/var/www/html/mails/themes/classic/core/guest_to_customer.html.twig");
    }
}
