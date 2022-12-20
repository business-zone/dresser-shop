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

/* PrestaShopBundle:Admin/TwigTemplateForm:form_table_layout.html.twig */
class __TwigTemplate_a6218206c419ac8a5bfb048f94799513b54c9d6ebf969c5a8a6d6c32f7d2fb32 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_table_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 25, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'hidden_row' => [$this, 'block_hidden_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 39
        $this->displayBlock('button_row', $context, $blocks);
        // line 48
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 56
        $this->displayBlock('form_widget_compound', $context, $blocks);
    }

    // line 27
    public function block_form_row($context, array $blocks = [])
    {
        // line 28
        echo "<tr>
        <td>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 31
        echo "</td>
        <td>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 35
        echo "</td>
    </tr>";
    }

    // line 39
    public function block_button_row($context, array $blocks = [])
    {
        // line 40
        echo "<tr>
        <td></td>
        <td>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 44
        echo "</td>
    </tr>";
    }

    // line 48
    public function block_hidden_row($context, array $blocks = [])
    {
        // line 49
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 52
        echo "</td>
    </tr>";
    }

    // line 56
    public function block_form_widget_compound($context, array $blocks = [])
    {
        // line 57
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 58
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", [])) && (twig_length_filter($this->env, ($context["errors"] ?? null)) > 0))) {
            // line 59
            echo "<tr>
                <td colspan=\"2\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 62
            echo "</td>
            </tr>";
        }
        // line 65
        $this->displayBlock("form_rows", $context, $blocks);
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 67
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 67,  123 => 66,  121 => 65,  117 => 62,  115 => 61,  112 => 59,  110 => 58,  106 => 57,  103 => 56,  98 => 52,  96 => 51,  93 => 49,  90 => 48,  85 => 44,  83 => 43,  79 => 40,  76 => 39,  71 => 35,  69 => 34,  67 => 33,  64 => 31,  62 => 30,  59 => 28,  56 => 27,  52 => 56,  50 => 48,  48 => 39,  46 => 27,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/TwigTemplateForm:form_table_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_table_layout.html.twig");
    }
}
