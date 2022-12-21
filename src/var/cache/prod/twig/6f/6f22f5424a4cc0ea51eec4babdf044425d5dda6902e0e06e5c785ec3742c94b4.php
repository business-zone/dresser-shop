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

/* PrestaShopBundle:Admin/Helpers:range_slider.html.twig */
class __TwigTemplate_a0483efa0148d403606a15c37676db9a1fa6d1762e5e19cbd3541c1e6731abd0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Helpers:range_slider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Helpers:range_slider.html.twig"));

        // line 25
        echo "<script>
    \$(document).ready(function() {
        var sliderInput = \$('#";
        // line 27
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
            value = value.replace('BETWEEN ', '');
            value = value.replace(' AND ', ',');
            value = value.replace('<', '";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ",');
            value = value.replace('>', '";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "10")) : ("10")), "html", null, true);
        echo ",');
            value = value.split(',');
            value[0] = parseInt(value[0]);
            value[1] = parseInt(value[1]);
        } else {
            value = [";
        // line 40
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "10")) : ("10")), "html", null, true);
        echo "];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        sliderInput.bootstrapSlider({
            formatter: function(values) {
                if (typeof values[0] != 'undefined') {
                    var slider = \$('#";
        // line 49
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "');
                    if (values[0] == ";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo " && values[1] == ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "10")) : ("10")), "html", null, true);
        echo ") {
                        slider.attr('sql', '');
                        return \"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not filtered", [], "Admin.Global"), "html", null, true);
        echo "\";
                    }
                    if (values[0] == values[1]) {
                        slider.attr('sql', ''); //'='+values[0]);
                        return \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Equals", [], "Admin.Global"), "html", null, true);
        echo " \" + values[0];
                    }
                    if (values[0] == ";
        // line 58
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ") {
                        slider.attr('sql', '<'+values[1]);
                        return \"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Below", [], "Admin.Global"), "html", null, true);
        echo " \" + values[1];
                    }
                    if (values[1] == ";
        // line 62
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "10")) : ("10")), "html", null, true);
        echo ") {
                        slider.attr('sql', '>'+values[0]);
                        return \"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Above", [], "Admin.Global"), "html", null, true);
        echo " \" + values[0];
                    }
                    slider.attr('sql', 'BETWEEN '+values[0]+' AND '+values[1]);
                    return \"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inside range", [], "Admin.Global"), "html", null, true);
        echo " [\" + values[0] + \"~\" + values[1] + \"]\";
                }
            },
            min: ";
        // line 70
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ",
            max: ";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? $this->getContext($context, "max")), "10")) : ("10")), "html", null, true);
        echo ",
            step: ";
        // line 72
        echo twig_escape_filter($this->env, ((array_key_exists("step", $context)) ? (_twig_default_filter(($context["step"] ?? $this->getContext($context, "step")), "1")) : ("1")), "html", null, true);
        echo ",
            //tooltip: 'always',
            scale: '";
        // line 74
        echo twig_escape_filter($this->env, ((array_key_exists("scale", $context)) ? (_twig_default_filter(($context["scale"] ?? $this->getContext($context, "scale")), "linear")) : ("linear")), "html", null, true);
        echo "', // or 'logarithmic'
            value: value,
            id: '";
        // line 76
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "Slider'
        });
        ";
        // line 78
        if (array_key_exists("on_change_func_name", $context)) {
            // line 79
            echo "            sliderInput.on('slideStop', function() {
                ";
            // line 80
            echo ($context["on_change_func_name"] ?? $this->getContext($context, "on_change_func_name"));
            echo "
            });
        ";
        }
        // line 83
        echo "    });
</script>
<style>
    <!-- /* To remove once integrated in sass */
    #";
        // line 87
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "Slider .slider-selection {
        background: #aaaaaa;
    }
    #";
        // line 90
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "Slider .tooltip-inner {
        padding: 0.4em;
    }
    -->
</style>

<input type=\"text\" id=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["input_name"] ?? $this->getContext($context, "input_name")), "html", null, true);
        echo "\" value=\"\" sql=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Helpers:range_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 96,  172 => 90,  166 => 87,  160 => 83,  154 => 80,  151 => 79,  149 => 78,  144 => 76,  139 => 74,  134 => 72,  130 => 71,  126 => 70,  120 => 67,  114 => 64,  109 => 62,  104 => 60,  99 => 58,  94 => 56,  87 => 52,  80 => 50,  76 => 49,  62 => 40,  54 => 35,  50 => 34,  40 => 27,  36 => 25,);
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
<script>
    \$(document).ready(function() {
        var sliderInput = \$('#{{ input_name }}');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
            value = value.replace('BETWEEN ', '');
            value = value.replace(' AND ', ',');
            value = value.replace('<', '{{ min|default('0') }},');
            value = value.replace('>', '{{ max|default('10') }},');
            value = value.split(',');
            value[0] = parseInt(value[0]);
            value[1] = parseInt(value[1]);
        } else {
            value = [{{ min|default('0') }},{{ max|default('10') }}];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        sliderInput.bootstrapSlider({
            formatter: function(values) {
                if (typeof values[0] != 'undefined') {
                    var slider = \$('#{{ input_name }}');
                    if (values[0] == {{ min|default('0') }} && values[1] == {{ max|default('10') }}) {
                        slider.attr('sql', '');
                        return \"{{ 'Not filtered'|trans({}, 'Admin.Global') }}\";
                    }
                    if (values[0] == values[1]) {
                        slider.attr('sql', ''); //'='+values[0]);
                        return \"{{ 'Equals'|trans({}, 'Admin.Global') }} \" + values[0];
                    }
                    if (values[0] == {{ min|default('0') }}) {
                        slider.attr('sql', '<'+values[1]);
                        return \"{{ 'Below'|trans({}, 'Admin.Global') }} \" + values[1];
                    }
                    if (values[1] == {{ max|default('10') }}) {
                        slider.attr('sql', '>'+values[0]);
                        return \"{{ 'Above'|trans({}, 'Admin.Global') }} \" + values[0];
                    }
                    slider.attr('sql', 'BETWEEN '+values[0]+' AND '+values[1]);
                    return \"{{ 'Inside range'|trans({}, 'Admin.Global') }} [\" + values[0] + \"~\" + values[1] + \"]\";
                }
            },
            min: {{ min|default('0') }},
            max: {{ max|default('10') }},
            step: {{ step|default('1') }},
            //tooltip: 'always',
            scale: '{{ scale|default('linear') }}', // or 'logarithmic'
            value: value,
            id: '{{ input_name }}Slider'
        });
        {% if on_change_func_name is defined %}
            sliderInput.on('slideStop', function() {
                {{ on_change_func_name|raw }}
            });
        {% endif %}
    });
</script>
<style>
    <!-- /* To remove once integrated in sass */
    #{{ input_name }}Slider .slider-selection {
        background: #aaaaaa;
    }
    #{{ input_name }}Slider .tooltip-inner {
        padding: 0.4em;
    }
    -->
</style>

<input type=\"text\" id=\"{{ input_name }}\" name=\"{{ input_name }}\" value=\"\" sql=\"{{ value }}\" />
", "PrestaShopBundle:Admin/Helpers:range_slider.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Helpers/range_slider.html.twig");
    }
}
