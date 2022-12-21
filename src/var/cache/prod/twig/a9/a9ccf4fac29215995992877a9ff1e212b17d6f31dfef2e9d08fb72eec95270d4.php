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

/* @MailThemes/modern/components/footer.html.twig */
class __TwigTemplate_7d1822c2f1ed4c7268bb0fcc1215a1b4d3564e11bdc5d75e00c600f72e1fb749 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/modern/components/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/modern/components/footer.html.twig"));

        // line 1
        echo "
              <!-- SHOP NAME BEGINING -->
              <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 8
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:20px 0;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:604px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 10
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:center;color:#363A41;\"><a href=\"{shop_url}\" style=\"color:#656565;font-size:16px;font-weight:600;\">{shop_name}</a></div>
                                </td>
                              </tr>
                              <tr>
                                <td align=\"center\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:12px;line-height:25px;text-align:center;color:#656565;\">Powered by <a href=\"https://www.prestashop.com/?utm_source=marchandprestashop&utm_medium=e-mail&utm_campaign=footer_1-7\" style=\"color:#656565;font-weight:400;\">PrestaShop</a></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table><![endif]-->
              <!-- SHOP NAME ENDING -->
              
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/modern/components/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  45 => 8,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
              <!-- SHOP NAME BEGINING -->
              <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:20px 0;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:604px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:center;color:#363A41;\"><a href=\"{shop_url}\" style=\"color:#656565;font-size:16px;font-weight:600;\">{shop_name}</a></div>
                                </td>
                              </tr>
                              <tr>
                                <td align=\"center\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:12px;line-height:25px;text-align:center;color:#656565;\">Powered by <a href=\"https://www.prestashop.com/?utm_source=marchandprestashop&utm_medium=e-mail&utm_campaign=footer_1-7\" style=\"color:#656565;font-weight:400;\">PrestaShop</a></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table><![endif]-->
              <!-- SHOP NAME ENDING -->
              
", "@MailThemes/modern/components/footer.html.twig", "/var/www/html/mails/themes/modern/components/footer.html.twig");
    }
}
