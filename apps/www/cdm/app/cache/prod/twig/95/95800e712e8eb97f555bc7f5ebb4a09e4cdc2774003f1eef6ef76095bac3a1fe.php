<?php

/* SidusEAVBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_728c2d62f97594012d9671374963ba8b369931f23cea9ce8e8eda8202048be85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidus_bootstrap_collection_widget' => array($this, 'block_sidus_bootstrap_collection_widget'),
            'sidus_bootstrap_collection_add_button' => array($this, 'block_sidus_bootstrap_collection_add_button'),
            'sidus_bootstrap_collection_item' => array($this, 'block_sidus_bootstrap_collection_item'),
            'sidus_bootstrap_collection_label' => array($this, 'block_sidus_bootstrap_collection_label'),
            'sidus_switch_widget' => array($this, 'block_sidus_switch_widget'),
            'sidus_wysiwyg_widget' => array($this, 'block_sidus_wysiwyg_widget'),
            'sidus_combo_data_selector_widget' => array($this, 'block_sidus_combo_data_selector_widget'),
            'tabs_widget' => array($this, 'block_tabs_widget'),
            'help_label' => array($this, 'block_help_label'),
            'sidus_tabbed_data_widget' => array($this, 'block_sidus_tabbed_data_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidus_bootstrap_collection_widget', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('sidus_bootstrap_collection_add_button', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('sidus_bootstrap_collection_item', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('sidus_bootstrap_collection_label', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('sidus_switch_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('sidus_wysiwyg_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('sidus_combo_data_selector_widget', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('tabs_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('help_label', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('sidus_tabbed_data_widget', $context, $blocks);
    }

    // line 1
    public function block_sidus_bootstrap_collection_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 4
            echo "            ";
            $context["prototype_vars"] = array();
            // line 5
            echo "            ";
            if (array_key_exists("style", $context)) {
                // line 6
                echo "                ";
                $context["prototype_vars"] = twig_array_merge(($context["prototype_vars"] ?? null), array("style" => ($context["style"] ?? null)));
                // line 7
                echo "            ";
            }
            // line 8
            echo "            ";
            $context["field"] = ($context["prototype"] ?? null);
            // line 9
            echo "            ";
            $context["prototype_html"] =             $this->renderBlock("sidus_bootstrap_collection_item", $context, $blocks);
            // line 10
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" => ($context["prototype_html"] ?? null)));
            // line 11
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype-name" => ($context["prototype_name"] ?? null)));
            // line 12
            echo "        ";
        }
        // line 13
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <ul class=\"bootstrap-collection ";
        // line 14
        echo ((($context["sortable"] ?? null)) ? ("sortable-collection") : (""));
        echo "\"
                ";
        // line 15
        if (array_key_exists("prototype", $context)) {
            echo "data-input-pattern=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["prototype"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
            echo "\"";
        }
        echo ">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 17
            echo "                    <li>";
            $this->displayBlock("sidus_bootstrap_collection_item", $context, $blocks);
            echo "</li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
            ";
        // line 20
        $this->displayBlock("sidus_bootstrap_collection_add_button", $context, $blocks);
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_sidus_bootstrap_collection_add_button($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "disabled", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "allow_add", array()))) {
            // line 27
            echo "        <a href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\"
           data-addfield=\"collection\" data-collection=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\"
           ";
            // line 29
            if (array_key_exists("prototype", $context)) {
                echo "data-prototype-name=\"";
                echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 30
            echo "           title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "add_button_text", array())), "html", null, true);
            echo "\">
            <i class=\"fa fa-plus\"></i>
        </a>
    ";
        }
    }

    // line 36
    public function block_sidus_bootstrap_collection_item($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "disabled", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "sortable", array()))) {
            // line 38
            echo "        <span class=\"btn btn-link position-handler\">
            <i class=\"fa fa-bars\"></i>
        </span>
    ";
        }
        // line 42
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field"] ?? null), 'widget');
        echo "
    ";
        // line 43
        if ((array_key_exists("prototype", $context) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["prototype"] ?? null), "children", array())) > 1))) {
            // line 44
            echo "        <hr class=\"embed-separator\"/>
    ";
        }
        // line 46
        echo "    ";
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "disabled", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "allow_delete", array()))) {
            // line 47
            echo "        <a href=\"#\" class=\"btn btn-danger pull-right remove-action\" data-removefield=\"collection\"
           data-field=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "delete_button_text", array())), "html", null, true);
            echo "\">
            <i class=\"fa fa-trash-o\"></i>
        </a>
    ";
        }
        // line 52
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field"] ?? null), 'errors');
        echo "
";
    }

    // line 55
    public function block_sidus_bootstrap_collection_label($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $context["widget_add_btn"] = false;
        // line 57
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 60
    public function block_sidus_switch_widget($context, array $blocks = array())
    {
        // line 61
        ob_start();
        // line 62
        echo "        <div class=\"sidus-switch\">
            <input type=\"checkbox\" ";
        // line 63
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
            <label for=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                <span class=\"slider\"></span>
            </label>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 71
    public function block_sidus_wysiwyg_widget($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "disabled", array())) {
            // line 73
            echo "        <div class=\"form-control form-disabled\" disabled=\"disabled\">";
            echo ($context["value"] ?? null);
            echo "</div>
    ";
        } else {
            // line 75
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
    ";
        }
    }

    // line 79
    public function block_sidus_combo_data_selector_widget($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        ob_start();
        // line 81
        echo "        <div class=\"row sidus-combo-selector\">
            <div class=\"col-md-5 col-xs-12\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "family", array()), 'widget');
        echo "
            </div>
            <div class=\"col-md-7 col-xs-12\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 87
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["widget"], 'widget');
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 94
    public function block_tabs_widget($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        ob_start();
        // line 96
        echo "        <ul class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "attr", array()), "class", array()), "html", null, true);
        echo "\">
            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "tabs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 98
            echo "                ";
            $context["class"] = (((twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "active", array())) ? ("active ") : ("")) . ((twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "disabled", array())) ? ("disabled") : ("")));
            // line 99
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "valid", array())) {
                // line 100
                echo "                    ";
                $context["class"] = (($context["class"] ?? null) . " tab-danger");
                // line 101
                echo "                ";
            }
            // line 102
            echo "                <li";
            if ( !twig_test_empty(twig_trim_filter(($context["class"] ?? null)))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
                    <a data-toggle=\"tab\" href=\"#";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 104
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "icon", array())) {
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "icon", array()));
            }
            // line 105
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "translation_domain", array())), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </ul>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 113
    public function block_help_label($context, array $blocks = array())
    {
        // line 114
        echo "    <span class=\"help-block\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["help_label"] ?? null), array(), ($context["translation_domain"] ?? null));
        echo "</span>
";
    }

    // line 117
    public function block_sidus_tabbed_data_widget($context, array $blocks = array())
    {
        // line 118
        echo "    ";
        ob_start();
        // line 119
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) == null)) {
            // line 120
            echo "            ";
            if (($context["render_fieldset"] ?? null)) {
                echo "<fieldset>";
            }
            // line 121
            echo "            ";
            if (($context["show_legend"] ?? null)) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 122
            echo "        ";
        }
        // line 123
        echo "
        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 125
            echo "            ";
            if (!twig_in_filter("__tab_", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "vars", array()), "name", array()))) {
                // line 126
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
            ";
            }
            // line 128
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
        ";
        // line 130
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "tabbed", array())) {
            // line 131
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'tabs');
            echo "
        <div class=\"tab-content\">
        ";
        }
        // line 134
        echo "
        ";
        // line 135
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "

        ";
        // line 137
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "tabbed", array())) {
            // line 138
            echo "        </div>
        ";
        }
        // line 140
        echo "
        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

        ";
        // line 143
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) == null)) {
            // line 144
            echo "            ";
            if (($context["render_fieldset"] ?? null)) {
                echo "</fieldset>";
            }
            // line 145
            echo "        ";
        }
        // line 146
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SidusEAVBootstrapBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  510 => 146,  507 => 145,  502 => 144,  500 => 143,  495 => 141,  492 => 140,  488 => 138,  486 => 137,  481 => 135,  478 => 134,  471 => 131,  469 => 130,  466 => 129,  460 => 128,  454 => 126,  451 => 125,  447 => 124,  444 => 123,  441 => 122,  436 => 121,  431 => 120,  428 => 119,  425 => 118,  422 => 117,  415 => 114,  412 => 113,  406 => 109,  395 => 105,  391 => 104,  387 => 103,  378 => 102,  375 => 101,  372 => 100,  369 => 99,  366 => 98,  362 => 97,  357 => 96,  354 => 95,  351 => 94,  344 => 89,  335 => 87,  331 => 86,  325 => 83,  321 => 81,  318 => 80,  315 => 79,  307 => 75,  301 => 73,  298 => 72,  295 => 71,  285 => 64,  273 => 63,  270 => 62,  268 => 61,  265 => 60,  258 => 57,  255 => 56,  252 => 55,  245 => 52,  236 => 48,  233 => 47,  230 => 46,  226 => 44,  224 => 43,  219 => 42,  213 => 38,  210 => 37,  207 => 36,  197 => 30,  191 => 29,  187 => 28,  182 => 27,  179 => 26,  176 => 25,  168 => 20,  165 => 19,  148 => 17,  131 => 16,  123 => 15,  119 => 14,  114 => 13,  111 => 12,  108 => 11,  105 => 10,  102 => 9,  99 => 8,  96 => 7,  93 => 6,  90 => 5,  87 => 4,  84 => 3,  81 => 2,  78 => 1,  74 => 117,  71 => 116,  69 => 113,  66 => 112,  64 => 94,  61 => 93,  59 => 79,  56 => 78,  54 => 71,  51 => 70,  49 => 60,  46 => 59,  44 => 55,  41 => 54,  39 => 36,  36 => 35,  34 => 25,  31 => 24,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SidusEAVBootstrapBundle:Form:fields.html.twig", "/var/www/myeml/cdm/vendor/sidus/eav-bootstrap-bundle/Resources/views/Form/fields.html.twig");
    }
}
