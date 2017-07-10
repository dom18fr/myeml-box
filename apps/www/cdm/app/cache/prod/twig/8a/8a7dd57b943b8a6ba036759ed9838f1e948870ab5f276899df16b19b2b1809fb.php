<?php

/* SidusFilterBundle:Form:fields.html.twig */
class __TwigTemplate_ddddcc793cb70584431c31a74f68081bb903567ed42bfb33783260a5cde937e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidus_date_range_widget' => array($this, 'block_sidus_date_range_widget'),
            'sidus_order_button_widget' => array($this, 'block_sidus_order_button_widget'),
            'sidus_sort_config_widget' => array($this, 'block_sidus_sort_config_widget'),
            'sidus_sort_config_row' => array($this, 'block_sidus_sort_config_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidus_date_range_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('sidus_order_button_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('sidus_sort_config_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('sidus_sort_config_row', $context, $blocks);
    }

    // line 1
    public function block_sidus_date_range_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 4
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()))) {
            // line 5
            echo "                ";
            $this->displayBlock("global_form_errors", $context, $blocks);
            echo "
            ";
        }
        // line 7
        echo "            <div class=\"input-daterange input-group\" data-datepicker=\"range\">
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "startDate", array()), 'widget');
        echo "
                <span class=\"input-group-addon\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus.filter.date_range.to"), "html", null, true);
        echo "</span>
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "endDate", array()), 'widget');
        echo "
            </div>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "startDate", array()), 'errors');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "endDate", array()), 'errors');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_sidus_order_button_widget($context, array $blocks = array())
    {
        // line 20
        echo "    <button ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"><i
                class=\"fa fa-";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "icon", array()), "html", null, true);
        echo "\"></i></button>
";
    }

    // line 24
    public function block_sidus_sort_config_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        ob_start();
        // line 26
        echo "        ";
        // line 27
        echo "        ";
        $context["columnVars"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "column", array()), "vars", array());
        // line 28
        echo "        <input type=\"hidden\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["columnVars"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["columnVars"] ?? null), "full_name", array()), "html", null, true);
        echo "\"
               value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "data", array()), "column", array()), "html", null, true);
        echo "\">
        ";
        // line 30
        $context["directionVars"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "direction", array()), "vars", array());
        // line 31
        echo "        <input type=\"hidden\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["directionVars"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["directionVars"] ?? null), "full_name", array()), "html", null, true);
        echo "\"
               value=\"";
        // line 32
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "data", array()), "direction", array())) ? (1) : (0));
        echo "\">
        ";
        // line 33
        $context["pageVars"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "page", array()), "vars", array());
        // line 34
        echo "        <input type=\"hidden\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["pageVars"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["pageVars"] ?? null), "full_name", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "data", array()), "page", array()), "html", null, true);
        echo "\">
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 38
    public function block_sidus_sort_config_row($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $this->displayBlock("sidus_sort_config_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SidusFilterBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 39,  158 => 38,  146 => 34,  144 => 33,  140 => 32,  133 => 31,  131 => 30,  127 => 29,  120 => 28,  117 => 27,  115 => 26,  112 => 25,  109 => 24,  103 => 21,  96 => 20,  93 => 19,  85 => 14,  81 => 13,  77 => 12,  72 => 10,  68 => 9,  64 => 8,  61 => 7,  55 => 5,  53 => 4,  48 => 3,  45 => 2,  42 => 1,  38 => 38,  35 => 37,  33 => 24,  30 => 23,  28 => 19,  25 => 18,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SidusFilterBundle:Form:fields.html.twig", "/var/www/myeml/cdm/vendor/sidus/filter-bundle/Resources/views/Form/fields.html.twig");
    }
}
