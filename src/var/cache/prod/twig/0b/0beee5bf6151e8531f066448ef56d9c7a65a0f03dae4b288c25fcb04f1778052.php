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

/* @MailThemes/modern/core/refund.html.twig */
class __TwigTemplate_2bf71f36b9775618a7152d1bbbf5e636286dee33bff362d126035e2b48f4dbc3 extends \Twig\Template
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
        return "@MailThemes/modern/components/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/modern/core/refund.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/modern/core/refund.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/modern/components/layout.html.twig", "@MailThemes/modern/core/refund.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refund", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
        
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
        echo "</div>
                                        </td>
                                      </tr>
                                      <!-- TITLE ENDING -->
                                      <!-- SUBTITLE BEGINING -->
                                      <tr>
                                        <td align=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:20px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 30
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order ID {order_name}", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale"))), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refund processed", [], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</div>
                                        </td>
                                      </tr>
                                      <!-- SUBTITLE ENDING -->
                                      <!-- BORDER BEGINING -->
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
              <!--[if mso | IE]></td></tr></table></td></tr><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 53
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:0 50px 40px;text-align:";
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:25px;\" ><![endif]-->
                        <div class=\"mj-column-px-25 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 55
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
              <!-- BOX BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 83
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:15px 50px 40px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 85
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
        // line 93
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:";
        // line 94
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We have processed your refund for your order with the reference [1]{order_name}[/1] from [1]{shop_name}[/1].", ["[1]" => "<span class=\"label\">", "[/1]" => "</span>"], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
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
              <!-- BOX ENDING -->
              <!-- FIRST TEXT BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 118
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:0 25px 20px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 120
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"";
        // line 124
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:";
        // line 125
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Follow your order and download your invoice on our shop, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? $this->getContext($context, "locale")))], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</div>
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
              <!-- FIRST TEXT ENDING -->
              <!-- SECOND TEXT BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 145
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";font-size:0px;padding:0 25px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 147
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"";
        // line 151
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:";
        // line 152
        echo twig_escape_filter($this->env, ($context["align_left"] ?? $this->getContext($context, "align_left")), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.", ["%guest_tracking_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Guest Tracking", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? $this->getContext($context, "locale")))], "Emails.Body", ($context["locale"] ?? $this->getContext($context, "locale")));
        echo "</div>
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
              <!-- SECOND TEXT ENDING -->
              

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_styles($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 171
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

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }
    }
  </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/modern/core/refund.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 171,  336 => 170,  307 => 152,  303 => 151,  294 => 147,  289 => 145,  264 => 125,  260 => 124,  251 => 120,  246 => 118,  217 => 94,  213 => 93,  200 => 85,  195 => 83,  162 => 55,  155 => 53,  125 => 30,  121 => 29,  110 => 23,  106 => 22,  92 => 13,  87 => 11,  80 => 6,  71 => 5,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/modern/components/layout.html.twig' %}
        
{% block title %}{{ 'Refund'|trans({}, 'Emails.Body', locale) }}{% endblock %}

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
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:20px;font-weight:600;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'Hi {firstname} {lastname},'|trans({}, 'Emails.Body', locale) }}</div>
                                        </td>
                                      </tr>
                                      <!-- TITLE ENDING -->
                                      <!-- SUBTITLE BEGINING -->
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:20px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'Order ID {order_name}'|trans({}, 'Emails.Body', locale) }} - {{ 'Refund processed'|trans({}, 'Emails.Body', locale)|raw }}</div>
                                        </td>
                                      </tr>
                                      <!-- SUBTITLE ENDING -->
                                      <!-- BORDER BEGINING -->
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
              <!--[if mso | IE]></td></tr></table></td></tr><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
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
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'We have processed your refund for your order with the reference [1]{order_name}[/1] from [1]{shop_name}[/1].'|trans({'[1]': '<span class=\"label\">', '[/1]': '</span>'}, 'Emails.Body', locale)|raw }}</div>
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
              <!-- FIRST TEXT BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:0 25px 20px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'Follow your order and download your invoice on our shop, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.'|trans({'%order_history_label%': 'Order history and details'|trans({}, 'Shop.Theme.Customeraccount', locale)}, 'Emails.Body', locale)|raw }}</div>
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
              <!-- FIRST TEXT ENDING -->
              <!-- SECOND TEXT BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:0 25px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.'|trans({'%guest_tracking_label%': 'Guest Tracking'|trans({}, 'Shop.Theme.Customeraccount', locale)}, 'Emails.Body', locale)|raw }}</div>
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
              <!-- SECOND TEXT ENDING -->
              

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

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }
    }
  </style>

{% endblock %}
", "@MailThemes/modern/core/refund.html.twig", "/var/www/html/mails/themes/modern/core/refund.html.twig");
    }
}
