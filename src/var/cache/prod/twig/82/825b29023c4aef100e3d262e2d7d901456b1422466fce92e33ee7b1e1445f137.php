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

/* PrestaShopBundle:Admin/Sell/Customer/Blocks/View:personal_information.html.twig */
class __TwigTemplate_1dceea1f4c8d0c5edd6313677173386de9639b5456ec7827807562400b53e162 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:personal_information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:personal_information.html.twig"));

        // line 25
        echo "

<div class=\"card customer-personal-informations-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "firstName", []), "html", null, true);
        echo "
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastName", []), "html", null, true);
        echo "
    ";
        // line 32
        echo twig_escape_filter($this->env, sprintf("[%06d]", $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", [])), "html", null, true);
        echo "
    -
    <a href=\"mailto:";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "email", []), "html", null, true);
        echo "\">
      ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "email", []), "html", null, true);
        echo "
    </a>

    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCustomers", true, ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", []), "updatecustomer" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", [])]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right edit-link\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Social Title", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"customer-social-title col-8\">
        ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "socialTitle", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Age", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-birthday\">
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "birthday", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registration Date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-registration-date\">
        ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "registrationDate", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Visit", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-last-visit-date\">
        ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastVisitDate", []), "html", null, true);
        echo "
      </div>
    </div>

    ";
        // line 85
        if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "rankBySales", [])) {
            // line 86
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Best Customer Rank", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8 customer-sales-rank\">
          ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "rankBySales", []), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 95
        echo "
    ";
        // line 96
        if (($context["isMultistoreEnabled"] ?? $this->getContext($context, "isMultistoreEnabled"))) {
            // line 97
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "Admin.Global"), "html", null, true);
            echo "
        </div>
        <div class=\"customer-shop-name col-8\">
          ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "shopName", []), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 106
        echo "
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-language-name\">
        ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "languageName", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registrations", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 121
        $context["isNewsletterSubscribed"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "subscriptions", []), "newsletterSubscribed", []);
        // line 122
        echo "        ";
        $context["isPartnerOffersSubscribed"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "subscriptions", []), "partnerOffersSubscribed", []);
        // line 123
        echo "
        <span class=\"customer-newsletter-subscription-status badge badge-";
        // line 124
        if (($context["isNewsletterSubscribed"] ?? $this->getContext($context, "isNewsletterSubscribed"))) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          <i class=\"material-icons\">";
        // line 125
        if (($context["isNewsletterSubscribed"] ?? $this->getContext($context, "isNewsletterSubscribed"))) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Newsletter", [], "Admin.Global"), "html", null, true);
        echo "
        </span>

        <span class=\"customer-partner-offers-status badge badge-";
        // line 129
        if (($context["isPartnerOffersSubscribed"] ?? $this->getContext($context, "isPartnerOffersSubscribed"))) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          <i class=\"material-icons\">";
        // line 130
        if (($context["isPartnerOffersSubscribed"] ?? $this->getContext($context, "isPartnerOffersSubscribed"))) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partner offers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Latest Update", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"customer-latest-update col-8\">
        ";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastUpdateDate", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 150
        $context["isCustomerActive"] = $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "active", []);
        // line 151
        echo "
        <span class=\"customer-status badge badge-";
        // line 152
        if (($context["isCustomerActive"] ?? $this->getContext($context, "isCustomerActive"))) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          ";
        // line 153
        if (($context["isCustomerActive"] ?? $this->getContext($context, "isCustomerActive"))) {
            // line 154
            echo "            <i class=\"material-icons\">check</i>
            ";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        } else {
            // line 157
            echo "            <i class=\"material-icons\">cancel</i>
            ";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inactive", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        }
        // line 160
        echo "        </span>
      </div>
    </div>

    ";
        // line 164
        if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "guest", [])) {
            // line 165
            echo "      ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["transferGuestAccountForm"] ?? $this->getContext($context, "transferGuestAccountForm")), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
            // line 166
            echo "
      <div class=\"customer-guest-status row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This customer is registered as a Guest.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">
          ";
            // line 172
            if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "generalInformation", []), "customerBySameEmailExists", [])) {
                // line 173
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A registered customer account using the defined email address already exists. ", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                echo "</p>
          ";
            } else {
                // line 175
                echo "            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? $this->getContext($context, "transferGuestAccountForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_transform_guest_to_customer", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", [])])]);
                echo "
            ";
                // line 176
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["transferGuestAccountForm"] ?? $this->getContext($context, "transferGuestAccountForm")), "transfer_guest_account", []), 'widget');
                echo "

            <p class=\"small-text\">
              ";
                // line 179
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This feature generates a random password before sending an email to your customer.", [], "Admin.Orderscustomers.Help"), "html", null, true);
                echo "
            </p>
            ";
                // line 181
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? $this->getContext($context, "transferGuestAccountForm")), 'form_end');
                echo "
          ";
            }
            // line 183
            echo "        </div>
      </div>
    ";
        }
        // line 186
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:personal_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 186,  369 => 183,  364 => 181,  359 => 179,  353 => 176,  348 => 175,  342 => 173,  340 => 172,  334 => 169,  329 => 166,  326 => 165,  324 => 164,  318 => 160,  313 => 158,  310 => 157,  305 => 155,  302 => 154,  300 => 153,  292 => 152,  289 => 151,  287 => 150,  281 => 147,  272 => 141,  266 => 138,  256 => 131,  248 => 130,  240 => 129,  234 => 126,  226 => 125,  218 => 124,  215 => 123,  212 => 122,  210 => 121,  204 => 118,  195 => 112,  189 => 109,  184 => 106,  177 => 102,  171 => 99,  167 => 97,  165 => 96,  162 => 95,  155 => 91,  149 => 88,  145 => 86,  143 => 85,  136 => 81,  130 => 78,  121 => 72,  115 => 69,  106 => 63,  100 => 60,  91 => 54,  85 => 51,  74 => 43,  66 => 38,  60 => 35,  56 => 34,  51 => 32,  47 => 31,  43 => 30,  36 => 25,);
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


<div class=\"card customer-personal-informations-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>
    {{ customerInformation.personalInformation.firstName }}
    {{ customerInformation.personalInformation.lastName }}
    {{ '[%06d]'|format(customerInformation.customerId.value) }}
    -
    <a href=\"mailto:{{ customerInformation.personalInformation.email }}\">
      {{ customerInformation.personalInformation.email }}
    </a>

    <a href=\"{{ getAdminLink('AdminCustomers', true, {'id_customer': customerInformation.customerId.value, 'updatecustomer': 1, 'back': app.request.uri}) }}\"
       class=\"tooltip-link float-right edit-link\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Social Title'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"customer-social-title col-8\">
        {{ customerInformation.personalInformation.socialTitle }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Age'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8 customer-birthday\">
        {{ customerInformation.personalInformation.birthday }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Registration Date'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8 customer-registration-date\">
        {{ customerInformation.personalInformation.registrationDate }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Last Visit'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8 customer-last-visit-date\">
        {{ customerInformation.personalInformation.lastVisitDate }}
      </div>
    </div>

    {% if customerInformation.personalInformation.rankBySales %}
      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          {{ 'Best Customer Rank'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </div>
        <div class=\"col-8 customer-sales-rank\">
          {{ customerInformation.personalInformation.rankBySales }}
        </div>
      </div>
    {% endif %}

    {% if isMultistoreEnabled %}
      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          {{ 'Shop'|trans({}, 'Admin.Global') }}
        </div>
        <div class=\"customer-shop-name col-8\">
          {{ customerInformation.personalInformation.shopName }}
        </div>
      </div>
    {% endif %}

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Language'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"col-8 customer-language-name\">
        {{ customerInformation.personalInformation.languageName }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Registrations'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8\">
        {% set isNewsletterSubscribed = customerInformation.personalInformation.subscriptions.newsletterSubscribed %}
        {% set isPartnerOffersSubscribed = customerInformation.personalInformation.subscriptions.partnerOffersSubscribed %}

        <span class=\"customer-newsletter-subscription-status badge badge-{% if isNewsletterSubscribed %}success{% else %}danger{% endif %} rounded\">
          <i class=\"material-icons\">{% if isNewsletterSubscribed %}check{% else %}cancel{% endif %}</i>
          {{ 'Newsletter'|trans({}, 'Admin.Global') }}
        </span>

        <span class=\"customer-partner-offers-status badge badge-{% if isPartnerOffersSubscribed %}success{% else %}danger{% endif %} rounded\">
          <i class=\"material-icons\">{% if isPartnerOffersSubscribed %}check{% else %}cancel{% endif %}</i>
          {{ 'Partner offers'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </span>
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Latest Update'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"customer-latest-update col-8\">
        {{ customerInformation.personalInformation.lastUpdateDate }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Status'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"col-8\">
        {% set isCustomerActive = customerInformation.personalInformation.active %}

        <span class=\"customer-status badge badge-{% if isCustomerActive %}success{% else %}danger{% endif %} rounded\">
          {% if isCustomerActive %}
            <i class=\"material-icons\">check</i>
            {{ 'Active'|trans({}, 'Admin.Global') }}
          {% else %}
            <i class=\"material-icons\">cancel</i>
            {{ 'Inactive'|trans({}, 'Admin.Global') }}
          {% endif %}
        </span>
      </div>
    </div>

    {% if customerInformation.personalInformation.guest %}
      {% form_theme transferGuestAccountForm 'PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig' %}

      <div class=\"customer-guest-status row mb-1\">
        <div class=\"col-4 text-right\">
          {{ 'This customer is registered as a Guest.'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </div>
        <div class=\"col-8\">
          {% if customerInformation.generalInformation.customerBySameEmailExists %}
            <p>{{ 'A registered customer account using the defined email address already exists. '|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
          {% else %}
            {{ form_start(transferGuestAccountForm, {'action': path('admin_customers_transform_guest_to_customer', {'customerId': customerInformation.customerId.value})}) }}
            {{ form_widget(transferGuestAccountForm.transfer_guest_account) }}

            <p class=\"small-text\">
              {{ 'This feature generates a random password before sending an email to your customer.'|trans({}, 'Admin.Orderscustomers.Help') }}
            </p>
            {{ form_end(transferGuestAccountForm) }}
          {% endif %}
        </div>
      </div>
    {% endif %}
  </div>
</div>
", "PrestaShopBundle:Admin/Sell/Customer/Blocks/View:personal_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/personal_information.html.twig");
    }
}
