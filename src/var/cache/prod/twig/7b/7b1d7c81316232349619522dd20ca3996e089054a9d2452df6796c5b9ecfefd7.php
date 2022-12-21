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

/* @MailThemes/modern/modules/ps_emailalerts/return_slip.html.twig */
class __TwigTemplate_1a21b6140e72fbb4f25661fe303f74a28dbe7a2d72551006403458f518005f66 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'styles' => [$this, 'block_styles'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MailThemes/modern/components/order_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/modern/modules/ps_emailalerts/return_slip.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/modern/modules/ps_emailalerts/return_slip.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/modern/components/order_layout.html.twig", "@MailThemes/modern/modules/ps_emailalerts/return_slip.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return Slip", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 11
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:0 25px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 13
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <!-- TITLE BEGINING -->
                                      <tr>
                                        <td align=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:20px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:20px;font-weight:600;line-height:25px;text-align:";
        // line 23
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi,", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</div>
                                        </td>
                                      </tr>
                                      <!-- TITLE ENDING -->
                                      <!-- H2 TITLE BEGINING -->
                                      <tr>
                                        <td align=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 30
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have received a new return request for {shop_name}.", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</div>
                                        </td>
                                      </tr>
                                      <!-- H2 TITLE ENDING -->
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 54
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:0 50px 40px;text-align:";
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:25px;\" ><![endif]-->
                        <div class=\"mj-column-px-25 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 56
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" class=\"left\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-right:0;padding-left:0;word-break:break-word;\">
                                  <p style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\">
                                  </p>
                                  <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\" role=\"presentation\" width=\"25px\" ><tr><td style=\"height:0;line-height:0;\"> &nbsp;
</td></tr></table><![endif]-->
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER ENDING -->
              <!-- SUBTITLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 84
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:0 25px 0;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 86
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:";
        // line 95
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return Details", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- SUBTITLE ENDING -->
              <!-- BOX BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 119
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:15px 50px 40px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 121
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"background-color:#fefefe;border:1px solid #DFDFDF;vertical-align:top;padding-top:10px;padding-bottom:10px;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"";
        // line 129
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 130
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\"><span class=\"label\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</span> {order_name} ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Placed on", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo " {date}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"";
        // line 134
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 135
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\"><span class=\"label\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</span> {firstname} {lastname}, ({email})</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BOX ENDING -->
              <!-- TABLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 159
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:20px 0;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:604px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 161
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"";
        // line 165
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" class=\"products-table mail-alert\" style=\"font-size:0px;padding:10px 25px;padding-right:50px;padding-left:50px;word-break:break-word;\">
                                  <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" style=\"color:#000000;font-family:Open sans, arial, sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;\">
                                    <colgroup>
                                      <col span=\"1\" style=\"width: 25%;\">
                                      <col span=\"1\" style=\"width: 50%;\">
                                      <col span=\"1\" style=\"width: 25%;\">
                                    </colgroup>
                                    <tr>
                                      <th bgcolor=\"#FDFDFD\">";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
                                      <th bgcolor=\"#FDFDFD\">";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
                                      <th bgcolor=\"#FDFDFD\">";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</th>
                                    </tr>
                                    <mj-raw> {items} </mj-raw>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- TABLE ENDING -->
              <!-- 2 COLUMNS BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 198
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:0 25px 0;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 200
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"";
        // line 204
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-bottom:40px;word-break:break-word;\">
                                  <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" style=\"color:#000000;font-family:Open sans, arial, sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;\">
                                    <tr>
                                      <td class=\"box\">
                                        <table class=\"table\" style=\"width:100%\">
                                          <tbody>
                                            <tr>
                                              <td>
                                                <p style=\"font-weight:600;\">
                                                  <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, ($context["mailThemesUrl"] ?? $this->getContext($context, "mailThemesUrl")), "html", null, true);
        echo "/modern/assets/baseline-location_on-24px.png\" style=\"width:15px;margin-";
        echo twig_escape_filter($this->env, ($context["align_right"] ?? $this->getContext($context, "align_right")), "html", null, true);
        echo ":10px\">
                                                  ";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
                                                </p>
                                                <p style=\"border: 1px solid #DFDFDF;background-color: #FEFEFE;padding:20px;font-size:14px\"> {delivery_block_html} </p>
                                              </td>
                                              <td width=\"10\" class=\"space\" style=\"padding:7px 0\"> </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                      <td class=\"box\">
                                        <table class=\"table\" style=\"width:100%\">
                                          <tbody>
                                            <tr>
                                              <td>
                                                <p style=\"font-weight:600;\">
                                                  <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, ($context["mailThemesUrl"] ?? $this->getContext($context, "mailThemesUrl")), "html", null, true);
        echo "/modern/assets/baseline-credit_card-24px.png\" style=\"width:25px;margin-";
        echo twig_escape_filter($this->env, ($context["align_right"] ?? $this->getContext($context, "align_right")), "html", null, true);
        echo ":10px\">
                                                  ";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "
                                                </p>
                                                <p style=\"border: 1px solid #DFDFDF;background-color: #FEFEFE;padding:20px;font-size:14px\"> {invoice_block_html} </p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- 2 COLUMNS ENDING -->
              <!-- SUBTITLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 259
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:0 50px 0;text-align:";
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 261
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"";
        // line 269
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:0;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:";
        // line 270
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer message:", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- SUBTITLE ENDING -->
              <!-- BOX BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 294
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:15px 50px 40px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 296
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"background-color:#f3f3f3;vertical-align:top;padding-top:10px;padding-bottom:10px;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"";
        // line 304
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 305
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\">{message}</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BOX ENDING -->
              

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 327
    public function block_styles($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 328
        echo "<style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <!--[if mso]>
        <noscript>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        </noscript>
        <![endif]-->
  <!--[if lte mso 11]>
        <style type=\"text/css\">
          .mj-outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->
  <!--[if !mso]><!-->
  <style type=\"text/css\">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700);
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i);
  </style>
  <!--<![endif]-->
  <style type=\"text/css\">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }

      .mj-column-px-25 {
        width: 25px !important;
        max-width: 25px;
      }
    }
  </style>
  <style media=\"screen and (min-width:480px)\">
    .moz-text-html .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }

    .moz-text-html .mj-column-px-25 {
      width: 25px !important;
      max-width: 25px;
    }
  </style>
  <style type=\"text/css\">
  </style>
  <style type=\"text/css\">
    .shadow {
      box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.1);
    }

    .label {
      font-weight: 700;
    }

    .warning {
      font-weight: 700;
      font-size: 16px;
    }

    a {
      color: #25B9D7;
      text-decoration: underline;
      font-weight: 600;
    }

    a.light {
      font-weight: 400;
    }

    span.strong {
      font-weight: 600;
    }

    .box {
      width: 244px;
    }

    .margin {
      margin-";
        // line 441
        echo twig_escape_filter($this->env, ($context["align_right"] ?? $this->getContext($context, "align_right")), "html", null, true);
        echo ": 16px
    }

    table {
      font-family: Open sans, Arial, sans-serif;
      font-size: 14px;
    }

    .products-table,
    .products-table th,
    .products-table td {
      font-family: Open sans, Arial, sans-serif;
      font-size: 12px;
      background-color: #FDFDFD;
      color: #353943;
    }

    .products-table th {
      font-weight: 600;
      padding: 10px 5px;
      border: 1px solid #DFDFDF;
    }

    .products-table .order_summary td {
      font-weight: 600;
      font-size: 14px;
      padding: 10px;
      border: 1px solid #DFDFDF;
    }

    .products-table.mail-alert td {
      border: 1px solid #DFDFDF;
    }

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }

      .box {
        display: block !important;
        width: 100%
      }

      .space {
        display: none !important
      }
    }
  </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/modern/modules/ps_emailalerts/return_slip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  688 => 441,  573 => 328,  564 => 327,  533 => 305,  529 => 304,  516 => 296,  511 => 294,  482 => 270,  478 => 269,  465 => 261,  458 => 259,  426 => 230,  420 => 229,  402 => 214,  396 => 213,  384 => 204,  375 => 200,  370 => 198,  344 => 175,  340 => 174,  336 => 173,  325 => 165,  316 => 161,  311 => 159,  282 => 135,  278 => 134,  267 => 130,  263 => 129,  250 => 121,  245 => 119,  216 => 95,  212 => 94,  199 => 86,  194 => 84,  161 => 56,  154 => 54,  125 => 30,  121 => 29,  110 => 23,  106 => 22,  92 => 13,  87 => 11,  80 => 6,  71 => 5,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/modern/components/order_layout.html.twig' %}
        
{% block title %}{{ 'Return Slip'|trans({}, 'Emails.Body', locale) }}{% endblock %}

{% block content %}
<!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:0 25px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <!-- TITLE BEGINING -->
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:20px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:20px;font-weight:600;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'Hi,'|trans({}, 'Emails.Body', locale)|raw }}</div>
                                        </td>
                                      </tr>
                                      <!-- TITLE ENDING -->
                                      <!-- H2 TITLE BEGINING -->
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'You have received a new return request for {shop_name}.'|trans({}, 'Emails.Body', locale)|raw }}</div>
                                        </td>
                                      </tr>
                                      <!-- H2 TITLE ENDING -->
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:0 50px 40px;text-align:{{ align_left }};\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:25px;\" ><![endif]-->
                        <div class=\"mj-column-px-25 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" class=\"left\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-right:0;padding-left:0;word-break:break-word;\">
                                  <p style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\">
                                  </p>
                                  <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\" role=\"presentation\" width=\"25px\" ><tr><td style=\"height:0;line-height:0;\"> &nbsp;
</td></tr></table><![endif]-->
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER ENDING -->
              <!-- SUBTITLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:0 25px 0;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'Return Details'|trans({}, 'Emails.Body', locale)|raw }}</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- SUBTITLE ENDING -->
              <!-- BOX BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:15px 50px 40px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"background-color:#fefefe;border:1px solid #DFDFDF;vertical-align:top;padding-top:10px;padding-bottom:10px;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:{{ align_left }};color:#363A41;\"><span class=\"label\">{{ 'Order:'|trans({}, 'Emails.Body', locale)|raw }}</span> {order_name} {{ 'Placed on'|trans({}, 'Emails.Body', locale)|raw }} {date}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:{{ align_left }};color:#363A41;\"><span class=\"label\">{{ 'Customer:'|trans({}, 'Emails.Body', locale)|raw }}</span> {firstname} {lastname}, ({email})</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BOX ENDING -->
              <!-- TABLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
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
                                <td align=\"{{ align_left }}\" class=\"products-table mail-alert\" style=\"font-size:0px;padding:10px 25px;padding-right:50px;padding-left:50px;word-break:break-word;\">
                                  <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" style=\"color:#000000;font-family:Open sans, arial, sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;\">
                                    <colgroup>
                                      <col span=\"1\" style=\"width: 25%;\">
                                      <col span=\"1\" style=\"width: 50%;\">
                                      <col span=\"1\" style=\"width: 25%;\">
                                    </colgroup>
                                    <tr>
                                      <th bgcolor=\"#FDFDFD\">{{ 'Reference'|trans({}, 'Emails.Body', locale)|raw }}</th>
                                      <th bgcolor=\"#FDFDFD\">{{ 'Product'|trans({}, 'Emails.Body', locale)|raw }}</th>
                                      <th bgcolor=\"#FDFDFD\">{{ 'Quantity'|trans({}, 'Emails.Body', locale)|raw }}</th>
                                    </tr>
                                    <mj-raw> {items} </mj-raw>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- TABLE ENDING -->
              <!-- 2 COLUMNS BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:0 25px 0;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;padding-bottom:40px;word-break:break-word;\">
                                  <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" style=\"color:#000000;font-family:Open sans, arial, sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;\">
                                    <tr>
                                      <td class=\"box\">
                                        <table class=\"table\" style=\"width:100%\">
                                          <tbody>
                                            <tr>
                                              <td>
                                                <p style=\"font-weight:600;\">
                                                  <img src=\"{{ mailThemesUrl }}/modern/assets/baseline-location_on-24px.png\" style=\"width:15px;margin-{{ align_right }}:10px\">
                                                  {{ 'Delivery address'|trans({}, 'Emails.Body', locale)|raw }}
                                                </p>
                                                <p style=\"border: 1px solid #DFDFDF;background-color: #FEFEFE;padding:20px;font-size:14px\"> {delivery_block_html} </p>
                                              </td>
                                              <td width=\"10\" class=\"space\" style=\"padding:7px 0\"> </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                      <td class=\"box\">
                                        <table class=\"table\" style=\"width:100%\">
                                          <tbody>
                                            <tr>
                                              <td>
                                                <p style=\"font-weight:600;\">
                                                  <img src=\"{{ mailThemesUrl }}/modern/assets/baseline-credit_card-24px.png\" style=\"width:25px;margin-{{ align_right }}:10px\">
                                                  {{ 'Billing address'|trans({}, 'Emails.Body', locale)|raw }}
                                                </p>
                                                <p style=\"border: 1px solid #DFDFDF;background-color: #FEFEFE;padding:20px;font-size:14px\"> {invoice_block_html} </p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- 2 COLUMNS ENDING -->
              <!-- SUBTITLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:0 50px 0;text-align:{{ align_left }};\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:0;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'Customer message:'|trans({}, 'Emails.Body', locale)|raw }}</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- SUBTITLE ENDING -->
              <!-- BOX BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:15px 50px 40px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"background-color:#f3f3f3;vertical-align:top;padding-top:10px;padding-bottom:10px;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{message}</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
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
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BOX ENDING -->
              

{% endblock %}

{% block styles %}
<style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <!--[if mso]>
        <noscript>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        </noscript>
        <![endif]-->
  <!--[if lte mso 11]>
        <style type=\"text/css\">
          .mj-outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->
  <!--[if !mso]><!-->
  <style type=\"text/css\">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700);
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i);
  </style>
  <!--<![endif]-->
  <style type=\"text/css\">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }

      .mj-column-px-25 {
        width: 25px !important;
        max-width: 25px;
      }
    }
  </style>
  <style media=\"screen and (min-width:480px)\">
    .moz-text-html .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }

    .moz-text-html .mj-column-px-25 {
      width: 25px !important;
      max-width: 25px;
    }
  </style>
  <style type=\"text/css\">
  </style>
  <style type=\"text/css\">
    .shadow {
      box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.1);
    }

    .label {
      font-weight: 700;
    }

    .warning {
      font-weight: 700;
      font-size: 16px;
    }

    a {
      color: #25B9D7;
      text-decoration: underline;
      font-weight: 600;
    }

    a.light {
      font-weight: 400;
    }

    span.strong {
      font-weight: 600;
    }

    .box {
      width: 244px;
    }

    .margin {
      margin-{{ align_right }}: 16px
    }

    table {
      font-family: Open sans, Arial, sans-serif;
      font-size: 14px;
    }

    .products-table,
    .products-table th,
    .products-table td {
      font-family: Open sans, Arial, sans-serif;
      font-size: 12px;
      background-color: #FDFDFD;
      color: #353943;
    }

    .products-table th {
      font-weight: 600;
      padding: 10px 5px;
      border: 1px solid #DFDFDF;
    }

    .products-table .order_summary td {
      font-weight: 600;
      font-size: 14px;
      padding: 10px;
      border: 1px solid #DFDFDF;
    }

    .products-table.mail-alert td {
      border: 1px solid #DFDFDF;
    }

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }

      .box {
        display: block !important;
        width: 100%
      }

      .space {
        display: none !important
      }
    }
  </style>

{% endblock %}
", "@MailThemes/modern/modules/ps_emailalerts/return_slip.html.twig", "/var/www/html/mails/themes/modern/modules/ps_emailalerts/return_slip.html.twig");
    }
}
