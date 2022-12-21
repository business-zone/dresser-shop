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

/* @Modules/ps_metrics/views/templates/admin/error.html.twig */
class __TwigTemplate_8f56991577347bafd9a2e6603b615b0f611fe60237ac90b55b0fc7f867c686f0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_metrics/views/templates/admin/error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_metrics/views/templates/admin/error.html.twig"));

        // line 19
        echo " 
 ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div id=\"error-loading-app-content\">
        <div id=\"error-loading-app-content-icon\"> ! </div>
        <h2> Oops, an error occured... </h2>
        <p> We are currently unable to display your KPI's. </p>
        <p> Please make sure you are using the latest version of PrestaShop Metrics. </p>
        <p> If the problem persist, please contact our support team: <b><a href=\"mailto:support-ps-metrics@prestashop.com\" target=\"_blank\">support-ps-metrics@prestashop.com</a></b>.</p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "    <style>
        #error-loading-app {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #error-loading-app-content{
            margin: 200px auto;
            display: flex;
            flex-direction: column;
            background-color: #FAFAFB;
            border-radius: 5px;
            padding: 50px;
            border: 2px solid #C8D7E4;
            text-align: center;
        }
        #error-loading-app-content-icon{
            font-size: 30px;
            text-align: center;
            color: #FFFFFF;
            background-color: #DADADA;
            border-radius: 50%;
            height: 45px;
            width: 45px;
            margin: auto;
            line-height: 1.4em;

        }
        #error-loading-app-content h2{
            margin: 10px 20px 20px;
            font-weight: bold;
            font-size: 20px;
            line-height: 30px;
        }
        #error-loading-app-content p{
            margin-bottom: 5px;
            font-size: 14px;
            line-height: 20px;
        }

        .hide {
            display: none !important;
        }

        .show {
            display: block;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    <script>
        (() => {
            let appIsLoaded = false;
            let currentRecursion = 0;
            let maxRecursion = 150;

            const checkAppIsloaded = () => {
                currentRecursion++;

                if (currentRecursion === maxRecursion) {
                // show error block and hide metrics
                document.getElementById('error-loading-app').classList.add('show');
                document.getElementById('error-loading-app').classList.remove('hide');

                document.getElementById('metrics-app').classList.add('hide');
                document.getElementById('metrics-app').classList.remove('show');
                return;
                }

                if (typeof(window.appIsLoaded) === 'undefined') {
                setTimeout(() => {
                    checkAppIsloaded();
                }, 100);
                }
            }

            checkAppIsloaded();
        })();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_metrics/views/templates/admin/error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 82,  155 => 81,  97 => 31,  88 => 30,  71 => 21,  62 => 20,  52 => 81,  49 => 80,  47 => 30,  44 => 29,  42 => 20,  39 => 19,);
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
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}
 
 {% block content %}
    <div id=\"error-loading-app-content\">
        <div id=\"error-loading-app-content-icon\"> ! </div>
        <h2> Oops, an error occured... </h2>
        <p> We are currently unable to display your KPI's. </p>
        <p> Please make sure you are using the latest version of PrestaShop Metrics. </p>
        <p> If the problem persist, please contact our support team: <b><a href=\"mailto:support-ps-metrics@prestashop.com\" target=\"_blank\">support-ps-metrics@prestashop.com</a></b>.</p>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        #error-loading-app {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #error-loading-app-content{
            margin: 200px auto;
            display: flex;
            flex-direction: column;
            background-color: #FAFAFB;
            border-radius: 5px;
            padding: 50px;
            border: 2px solid #C8D7E4;
            text-align: center;
        }
        #error-loading-app-content-icon{
            font-size: 30px;
            text-align: center;
            color: #FFFFFF;
            background-color: #DADADA;
            border-radius: 50%;
            height: 45px;
            width: 45px;
            margin: auto;
            line-height: 1.4em;

        }
        #error-loading-app-content h2{
            margin: 10px 20px 20px;
            font-weight: bold;
            font-size: 20px;
            line-height: 30px;
        }
        #error-loading-app-content p{
            margin-bottom: 5px;
            font-size: 14px;
            line-height: 20px;
        }

        .hide {
            display: none !important;
        }

        .show {
            display: block;
        }
    </style>
{% endblock %}

{% block javascripts %}
    <script>
        (() => {
            let appIsLoaded = false;
            let currentRecursion = 0;
            let maxRecursion = 150;

            const checkAppIsloaded = () => {
                currentRecursion++;

                if (currentRecursion === maxRecursion) {
                // show error block and hide metrics
                document.getElementById('error-loading-app').classList.add('show');
                document.getElementById('error-loading-app').classList.remove('hide');

                document.getElementById('metrics-app').classList.add('hide');
                document.getElementById('metrics-app').classList.remove('show');
                return;
                }

                if (typeof(window.appIsLoaded) === 'undefined') {
                setTimeout(() => {
                    checkAppIsloaded();
                }, 100);
                }
            }

            checkAppIsloaded();
        })();
    </script>
{% endblock %}
", "@Modules/ps_metrics/views/templates/admin/error.html.twig", "/var/www/html/modules/ps_metrics/views/templates/admin/error.html.twig");
    }
}
