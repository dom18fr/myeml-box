<?php

/* MopaBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_3082a742e1479c1b3b7607e6484114800148d102ec08d1e359368991db8a0fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "MopaBootstrapBundle:Form:fields.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'button_attributes' => array($this, 'block_button_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'button_row' => array($this, 'block_button_row'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'form_tabs' => array($this, 'block_form_tabs'),
                'tabs_widget' => array($this, 'block_tabs_widget'),
                'form_tab' => array($this, 'block_form_tab'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'form_legend' => array($this, 'block_form_legend'),
                'form_label' => array($this, 'block_form_label'),
                'help_label' => array($this, 'block_help_label'),
                'help_label_tooltip' => array($this, 'block_help_label_tooltip'),
                'help_block_tooltip' => array($this, 'block_help_block_tooltip'),
                'help_label_popover' => array($this, 'block_help_label_popover'),
                'help_block_popover' => array($this, 'block_help_block_popover'),
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form_rows_visible' => array($this, 'block_form_rows_visible'),
                'form_row' => array($this, 'block_form_row'),
                'form_message' => array($this, 'block_form_message'),
                'form_help' => array($this, 'block_form_help'),
                'form_widget_add_btn' => array($this, 'block_form_widget_add_btn'),
                'form_widget_remove_btn' => array($this, 'block_form_widget_remove_btn'),
                'collection_button' => array($this, 'block_collection_button'),
                'label_asterisk' => array($this, 'block_label_asterisk'),
                'widget_addon' => array($this, 'block_widget_addon'),
                'widget_btns' => array($this, 'block_widget_btns'),
                'form_errors' => array($this, 'block_form_errors'),
                'error_type' => array($this, 'block_error_type'),
                'widget_form_group_start' => array($this, 'block_widget_form_group_start'),
                'help_widget_popover' => array($this, 'block_help_widget_popover'),
                'widget_form_group_end' => array($this, 'block_widget_form_group_end'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('button_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('button_row', $context, $blocks);
        // line 45
        echo "
";
        // line 47
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('form_tabs', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('tabs_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('form_tab', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 242
        echo "
";
        // line 243
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 287
        echo "
";
        // line 288
        $this->displayBlock('date_widget', $context, $blocks);
        // line 320
        echo "
";
        // line 321
        $this->displayBlock('time_widget', $context, $blocks);
        // line 355
        echo "
";
        // line 356
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 387
        echo "
";
        // line 388
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 394
        echo "
";
        // line 395
        $this->displayBlock('money_widget', $context, $blocks);
        // line 401
        echo "
";
        // line 402
        $this->displayBlock('file_widget', $context, $blocks);
        // line 418
        echo "
";
        // line 420
        echo "
";
        // line 421
        $this->displayBlock('form_legend', $context, $blocks);
        // line 436
        echo "
";
        // line 437
        $this->displayBlock('form_label', $context, $blocks);
        // line 485
        echo "
";
        // line 486
        $this->displayBlock('help_label', $context, $blocks);
        // line 489
        echo "
";
        // line 490
        $this->displayBlock('help_label_tooltip', $context, $blocks);
        // line 502
        echo "
";
        // line 503
        $this->displayBlock('help_block_tooltip', $context, $blocks);
        // line 507
        echo "
";
        // line 508
        $this->displayBlock('help_label_popover', $context, $blocks);
        // line 520
        echo "
";
        // line 521
        $this->displayBlock('help_block_popover', $context, $blocks);
        // line 525
        echo "
";
        // line 526
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 531
        echo "
";
        // line 533
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 536
        echo "
";
        // line 537
        $this->displayBlock('form_rows_visible', $context, $blocks);
        // line 551
        echo "
";
        // line 552
        $this->displayBlock('form_row', $context, $blocks);
        // line 587
        echo "
";
        // line 589
        echo "
";
        // line 590
        $this->displayBlock('form_message', $context, $blocks);
        // line 599
        echo "
";
        // line 601
        echo "
";
        // line 602
        $this->displayBlock('form_help', $context, $blocks);
        // line 613
        echo "
";
        // line 614
        $this->displayBlock('form_widget_add_btn', $context, $blocks);
        // line 623
        echo "
";
        // line 624
        $this->displayBlock('form_widget_remove_btn', $context, $blocks);
        // line 645
        echo "
";
        // line 646
        $this->displayBlock('collection_button', $context, $blocks);
        // line 657
        echo "
";
        // line 658
        $this->displayBlock('label_asterisk', $context, $blocks);
        // line 665
        echo "
";
        // line 666
        $this->displayBlock('widget_addon', $context, $blocks);
        // line 673
        echo "
";
        // line 674
        $this->displayBlock('widget_btns', $context, $blocks);
        // line 687
        echo "
";
        // line 689
        echo "
";
        // line 690
        $this->displayBlock('form_errors', $context, $blocks);
        // line 716
        echo "
";
        // line 718
        echo "
";
        // line 719
        $this->displayBlock('error_type', $context, $blocks);
        // line 730
        echo "
";
        // line 732
        echo "
";
        // line 733
        $this->displayBlock('widget_form_group_start', $context, $blocks);
        // line 770
        echo "
";
        // line 771
        $this->displayBlock('help_widget_popover', $context, $blocks);
        // line 778
        echo "
";
        // line 779
        $this->displayBlock('widget_form_group_end', $context, $blocks);
    }

    // line 4
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ("btn " . ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")))));
        // line 6
        echo "    ";
        $this->displayParentBlock("button_attributes", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_button_widget($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        echo "    ";
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 12
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                // line 13
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                 // line 14
($context["name"] ?? null), "%id%" =>                 // line 15
($context["id"] ?? null)));
            } else {
                // line 18
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 21
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 22
        if ( !twig_test_empty(($context["icon"] ?? null))) {
            // line 23
            echo "            ";
            echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, ($context["icon"] ?? null), ((array_key_exists("icon_inverted", $context)) ? (_twig_default_filter(($context["icon_inverted"] ?? null), false)) : (false)));
            echo "
    ";
        }
        // line 25
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 29
    public function block_button_row($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        ob_start();
        // line 31
        echo "        ";
        if ((array_key_exists("button_offset", $context) &&  !twig_test_empty(($context["button_offset"] ?? null)))) {
            // line 32
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("for" => ($context["id"] ?? null), "class" => ($context["button_offset"] ?? null)));
            // line 33
            echo "            <div class=\"form-group\">
                <div ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 39
            echo "            <div>
                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            </div>
        ";
        }
        // line 43
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 49
        echo "    ";
        if (((($context["type"] ?? null) != "hidden") && ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter(($context["widget_addon_prepend"] ?? null), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter(($context["widget_addon_append"] ?? null), null)) : (null)))))) {
            // line 50
            echo "    <div class=\"input-group\">
        ";
            // line 51
            if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter(($context["widget_addon_prepend"] ?? null), null)) : (null)))) {
                // line 52
                echo "            ";
                $context["widget_addon"] = ($context["widget_addon_prepend"] ?? null);
                // line 53
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 55
            echo "    ";
        }
        // line 56
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["widget_form_control_class"] ?? null))));
        // line 57
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 58
        if (((($context["type"] ?? null) != "hidden") && ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter(($context["widget_addon_prepend"] ?? null), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter(($context["widget_addon_append"] ?? null), null)) : (null)))))) {
            // line 59
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter(($context["widget_addon_append"] ?? null), null)) : (null)))) {
                // line 60
                echo "        ";
                $context["widget_addon"] = ($context["widget_addon_append"] ?? null);
                // line 61
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 63
            echo "    </div>
    ";
        }
    }

    // line 67
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 68
        ob_start();
        // line 69
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 70
        echo "    ";
        if (((($context["type"] ?? null) != "hidden") && ((( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter(($context["widget_addon_prepend"] ?? null), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter(($context["widget_addon_append"] ?? null), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter(($context["widget_btn_prepend"] ?? null), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter(($context["widget_btn_append"] ?? null), null)) : (null)))))) {
            // line 71
            echo "    <div class=\"input-group\">
        ";
            // line 72
            if ( !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter(($context["widget_btn_prepend"] ?? null), null)) : (null)))) {
                // line 73
                echo "            ";
                $context["widget_btns"] = ($context["widget_btn_prepend"] ?? null);
                // line 74
                echo "            ";
                $this->displayBlock("widget_btns", $context, $blocks);
                echo "
        ";
            }
            // line 76
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter(($context["widget_addon_prepend"] ?? null), null)) : (null)))) {
                // line 77
                echo "            ";
                $context["widget_addon"] = ($context["widget_addon_prepend"] ?? null);
                // line 78
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 80
            echo "    ";
        }
        // line 81
        echo "    ";
        if ( !((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter(($context["widget_remove_btn"] ?? null), null)) : (null))) {
            // line 82
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " not-removable")));
            // line 83
            echo "    ";
        }
        // line 84
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["widget_form_control_class"] ?? null)))));
        // line 85
        echo "    ";
        if ((($context["static_text"] ?? null) === true)) {
            // line 86
            echo "        <p class=\"form-control-static\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 88
            echo "        ";
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        // line 90
        echo "    ";
        if (((($context["type"] ?? null) != "hidden") && ((( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter(($context["widget_addon_prepend"] ?? null), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter(($context["widget_addon_append"] ?? null), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter(($context["widget_btn_prepend"] ?? null), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter(($context["widget_btn_append"] ?? null), null)) : (null)))))) {
            // line 91
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter(($context["widget_addon_append"] ?? null), null)) : (null)))) {
                // line 92
                echo "            ";
                $context["widget_addon"] = ($context["widget_addon_append"] ?? null);
                // line 93
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 95
            echo "        ";
            if ( !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter(($context["widget_btn_append"] ?? null), null)) : (null)))) {
                // line 96
                echo "            ";
                $context["widget_btns"] = ($context["widget_btn_append"] ?? null);
                // line 97
                echo "            ";
                $this->displayBlock("widget_btns", $context, $blocks);
                echo "
        ";
            }
            // line 99
            echo "    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 104
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 105
        ob_start();
        // line 106
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) == null)) {
            // line 107
            echo "        ";
            if (($context["render_fieldset"] ?? null)) {
                echo "<fieldset>";
            }
            // line 108
            echo "        ";
            if (($context["show_legend"] ?? null)) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 109
            echo "    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "tabbed", array())) {
            // line 112
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'tabs');
            echo "
        <div class=\"tab-content\">
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "

    ";
        // line 118
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "tabbed", array())) {
            // line 119
            echo "        </div>
    ";
        }
        // line 121
        echo "
    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

    ";
        // line 124
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) == null)) {
            // line 125
            echo "        ";
            if (($context["render_fieldset"] ?? null)) {
                echo "</fieldset>";
            }
            // line 126
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 130
    public function block_form_tabs($context, array $blocks = array())
    {
        // line 131
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "tabsView", array(), "any", true, true)) {
            // line 132
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "tabsView", array()), 'widget');
            echo "
";
        }
    }

    // line 136
    public function block_tabs_widget($context, array $blocks = array())
    {
        // line 137
        ob_start();
        // line 138
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "attr", array()), "class", array()), "html", null, true);
        echo "\">
    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "tabs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 140
            echo "        ";
            $context["class"] = twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "active", array())) ? ("active ") : ("")) . ((twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "disabled", array())) ? ("disabled") : (""))));
            // line 141
            echo "        <li";
            if ( !twig_test_empty(twig_trim_filter(($context["class"] ?? null)))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
            <a data-toggle=\"tab\" href=\"#";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "id", array()), "html", null, true);
            echo "\">
                ";
            // line 143
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "icon", array())) {
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "icon", array()));
            }
            // line 144
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), $context["tab"], "translation_domain", array())), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 152
    public function block_form_tab($context, array $blocks = array())
    {
        // line 153
        echo "    ";
        $context["tab_attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((("tab-pane" . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "tab_active", array())) ? (" active") : (""))) . " ") . ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")))), "id" => ($context["id"] ?? null)));
        // line 154
        echo "    <div";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tab_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 155
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 159
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 160
        ob_start();
        // line 161
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 162
            echo "        ";
            $context["prototype_markup"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row');
            // line 163
            echo "        ";
            $context["data_prototype_name"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array()), "__name__")) : ("__name__"));
            // line 164
            echo "        ";
            $context["data_prototype_label"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array()), "__name__label__")) : ("__name__label__"));
            // line 165
            echo "        ";
            $context["widget_form_group_attr"] = twig_array_merge(twig_array_merge(($context["widget_form_group_attr"] ?? null), array("data-prototype" =>             // line 166
($context["prototype_markup"] ?? null), "data-prototype-name" =>             // line 167
($context["data_prototype_name"] ?? null), "data-prototype-label" =>             // line 168
($context["data_prototype_label"] ?? null))),             // line 169
($context["attr"] ?? null));
            // line 170
            echo "    ";
        }
        // line 171
        echo "    ";
        // line 172
        echo "\t";
        if ((twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "block_prefixes", array())) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true))) {
            // line 173
            echo "\t\t";
            $context["widget_form_group_attr"] = twig_array_merge(($context["widget_form_group_attr"] ?? null), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_form_group_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_form_group_attr"] ?? null), "class", array()), "row")) : ("row")) . " ") . twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()))));
            // line 174
            echo "\t";
        }
        // line 175
        echo "    ";
        // line 176
        echo "    ";
        $context["widget_form_group_attr"] = twig_array_merge(($context["widget_form_group_attr"] ?? null), array("id" => (("collection" . ($context["id"] ?? null)) . "_form_group"), "class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_form_group_attr"] ?? null), "class", array()) . " collection-items ") . ($context["id"] ?? null)) . "_form_group")));
        // line 177
        echo "
    <div ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["widget_form_group_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    ";
        // line 180
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "value", array())) == 0) && array_key_exists("prototype", $context))) {
            // line 181
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prototype_names"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 182
                echo "            ";
                echo twig_replace_filter(($context["prototype_markup"] ?? null), array("__name__" => $context["name"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "    ";
        }
        // line 185
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 190
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 191
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["widget_form_control_class"] ?? null))));
        // line 192
        echo "    ";
        if ((($context["widget_type"] ?? null) == "inline-btn")) {
            // line 193
            echo "        ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
    ";
        } else {
            // line 195
            echo "        ";
            $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
    }

    // line 199
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 200
        echo "    ";
        ob_start();
        // line 201
        echo "        ";
        $context["tagName"] = "label";
        // line 202
        echo "        ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 203
        echo "        ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()) . " ") . (((($context["widget_type"] ?? null) != "")) ? (((((($context["multiple"] ?? null)) ? ("checkbox") : ("radio")) . "-") . ($context["widget_type"] ?? null))) : ("")))));
        // line 204
        echo "        ";
        if (($context["expanded"] ?? null)) {
            // line 205
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["horizontal_input_wrapper_class"] ?? null))));
            // line 206
            echo "        ";
        }
        // line 207
        echo "        ";
        if ((($context["widget_type"] ?? null) == "inline-btn")) {
            // line 208
            echo "            ";
            $context["tagName"] = "button";
            // line 209
            echo "            <div class=\"btn-group\" data-toggle=\"buttons\">
        ";
        }
        // line 211
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 212
            echo "            ";
            if (!twig_in_filter(($context["widget_type"] ?? null), array(0 => "inline", 1 => "inline-btn"))) {
                // line 213
                echo "                <div class=\"";
                echo ((($context["multiple"] ?? null)) ? ("checkbox") : ("radio"));
                echo "\"";
                // line 214
                if ((($context["widget_type"] ?? null) == "inline-btn")) {
                    echo " class=\"btn-group\" data-toggle=\"buttons\"";
                }
                echo ">
            ";
            }
            // line 216
            echo "            ";
            if ((($context["widget_type"] ?? null) == "inline-btn")) {
                // line 217
                echo "                ";
                $context["label_attr"] = twig_array_merge(((array_key_exists("label_attr", $context)) ? (_twig_default_filter(($context["label_attr"] ?? null), array())) : (array())), array("class" => ("btn " . ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
                // line 218
                echo "            ";
            }
            // line 219
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "vars", array()), "checked", array()) && (($context["widget_type"] ?? null) == "inline-btn"))) {
                // line 220
                echo "                ";
                $context["label_attr_copy"] = twig_array_merge(((array_key_exists("label_attr", $context)) ? (_twig_default_filter(($context["label_attr"] ?? null), array())) : (array())), array("class" => ("active " . ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
                // line 221
                echo "            ";
            } else {
                // line 222
                echo "                ";
                $context["label_attr_copy"] = ((array_key_exists("label_attr", $context)) ? (_twig_default_filter(($context["label_attr"] ?? null), array())) : (array()));
                // line 223
                echo "            ";
            }
            // line 224
            echo "            <";
            echo twig_escape_filter($this->env, ($context["tagName"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr_copy"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            if (($context["disabled"] ?? null)) {
                echo " disabled=\"disabled\"";
            }
            echo ">
            ";
            // line 226
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("horizontal_label_class" => ($context["horizontal_label_class"] ?? null), "horizontal_input_wrapper_class" => ($context["horizontal_input_wrapper_class"] ?? null), "attr" => array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 227
            if (((($context["widget_type"] ?? null) == "inline-btn") || (($context["widget_checkbox_label"] ?? null) == "widget"))) {
                // line 228
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "vars", array()), "label", array()), array(), ($context["translation_domain"] ?? null));
                echo "
            ";
            } else {
                // line 230
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "vars", array()), "label", array()), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                echo "
            ";
            }
            // line 232
            echo "            </";
            echo twig_escape_filter($this->env, ($context["tagName"] ?? null), "html", null, true);
            echo ">
            ";
            // line 233
            if (!twig_in_filter(($context["widget_type"] ?? null), array(0 => "inline", 1 => "inline-btn"))) {
                // line 234
                echo "                </div>
            ";
            }
            // line 236
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "        ";
        if ((($context["widget_type"] ?? null) == "inline-btn")) {
            // line 238
            echo "            </div>
        ";
        }
        // line 240
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 243
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 244
        echo "    ";
        ob_start();
        // line 245
        echo "        ";
        if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
            // line 246
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                // line 247
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                 // line 248
($context["name"] ?? null), "%id%" =>                 // line 249
($context["id"] ?? null)));
            } else {
                // line 252
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 255
        echo "        ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 256
            echo "            <div";
            // line 257
            if ((($context["widget_type"] ?? null) == "inline-btn")) {
                echo " class=\"btn-group\" data-toggle=\"buttons\"";
            } else {
                // line 258
                echo " class=\"checkbox\"";
            }
            // line 259
            echo ">
        ";
        }
        // line 261
        echo "        ";
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()), "vars", array()), "block_prefixes", array()))) && ($context["label_render"] ?? null))) {
            // line 262
            echo "            ";
            if ((($context["widget_type"] ?? null) == "inline-btn")) {
                // line 263
                echo "                ";
                $context["label_attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? null), array())) : (array()));
                // line 264
                echo "                ";
                if (($context["checked"] ?? null)) {
                    // line 265
                    echo "                    ";
                    $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => ("active " . ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")))));
                    // line 266
                    echo "                ";
                }
                // line 267
                echo "            ";
            }
            // line 268
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            if ( !($context["horizontal"] ?? null)) {
                echo " class=\"checkbox-inline\"";
            }
            echo ">
        ";
        }
        // line 271
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 272
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 273
            echo "            ";
            if (($context["label_render"] ?? null)) {
                // line 274
                echo "                ";
                if (twig_in_filter(($context["widget_checkbox_label"] ?? null), array(0 => "both", 1 => "widget"))) {
                    // line 275
                    echo "                    ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null));
                    echo "
                ";
                } else {
                    // line 277
                    echo "                    ";
                    $this->displayBlock("form_help", $context, $blocks);
                    echo "
                ";
                }
                // line 279
                echo "                </label>
            ";
            }
            // line 281
            echo "        ";
        }
        // line 282
        echo "        ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 283
            echo "            </div>
        ";
        }
        // line 285
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 288
    public function block_date_widget($context, array $blocks = array())
    {
        // line 289
        ob_start();
        // line 290
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 291
            echo "    ";
            if (array_key_exists("datepicker", $context)) {
                // line 292
                echo "        ";
                $context["widget_addon_icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon_append"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon_append"] ?? null), "icon", array())) : ("calendar"));
                // line 293
                echo "        <div ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["datepicker"] ?? null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["datepicker"] ?? null), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"datepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd\">
            <input type=\"hidden\" value=\"";
                // line 294
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            ";
                // line 295
                if ((array_key_exists("widget_reset_icon", $context) && (($context["widget_reset_icon"] ?? null) == true))) {
                    // line 296
                    echo "                <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, "remove");
                    echo "</span>
            ";
                }
                // line 298
                echo "            ";
                // line 299
                echo "            ";
                $context["id"] = (($context["id"] ?? null) . "_mopa_picker_display");
                // line 300
                echo "            ";
                $context["full_name"] = null;
                // line 301
                echo "            ";
                $context["type"] = "text";
                // line 302
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
            <span class=\"input-group-addon\">";
                // line 303
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, ($context["widget_addon_icon"] ?? null));
                echo "</span>
        </div>
    ";
            } else {
                // line 306
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 309
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "inline")) : ("inline"))));
            // line 310
            echo "    \t<div class=\"row\">
        ";
            // line 311
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" => (((("<div class=\"" . ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 312
($context["date_wrapper_class"] ?? null), "year", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["date_wrapper_class"] ?? null), "year", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "year", array()), 'widget', array("attr" => array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>"), "{{ month }}" => (((("<div class=\"" . ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 313
($context["date_wrapper_class"] ?? null), "month", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["date_wrapper_class"] ?? null), "month", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "month", array()), 'widget', array("attr" => array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>"), "{{ day }}" => (((("<div class=\"" . ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 314
($context["date_wrapper_class"] ?? null), "day", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["date_wrapper_class"] ?? null), "day", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "day", array()), 'widget', array("attr" => array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>")));
            // line 315
            echo "
        </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 321
    public function block_time_widget($context, array $blocks = array())
    {
        // line 322
        ob_start();
        // line 323
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 324
            echo "    ";
            if (array_key_exists("timepicker", $context)) {
                // line 325
                echo "        ";
                $context["widget_addon_icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon_append"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon_append"] ?? null), "icon", array())) : ("time"));
                // line 326
                echo "        <div ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["timepicker"] ?? null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["timepicker"] ?? null), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"timepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" data-link-format=\"hh:ii\">
            <input type=\"hidden\" value=\"";
                // line 327
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            ";
                // line 328
                if ((array_key_exists("widget_reset_icon", $context) && (($context["widget_reset_icon"] ?? null) == true))) {
                    // line 329
                    echo "                <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, "remove");
                    echo "</span>
            ";
                }
                // line 331
                echo "            ";
                // line 332
                echo "            ";
                $context["id"] = (($context["id"] ?? null) . "_mopa_picker_display");
                // line 333
                echo "            ";
                $context["full_name"] = null;
                // line 334
                echo "            ";
                $context["type"] = "text";
                // line 335
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
            <span class=\"input-group-addon\">";
                // line 336
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, ($context["widget_addon_icon"] ?? null));
                echo "</span>
        </div>
    ";
            } else {
                // line 339
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 342
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 343
            echo "    ";
            ob_start();
            // line 344
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "hour", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter(($context["horizontal_input_wrapper_class"] ?? null), "col-sm-2")) : ("col-sm-2"))));
            echo "
    ";
            // line 345
            if (($context["with_minutes"] ?? null)) {
                // line 346
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "minute", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter(($context["horizontal_input_wrapper_class"] ?? null), "col-sm-2")) : ("col-sm-2"))));
                echo "
    ";
            }
            // line 348
            echo "    ";
            if (($context["with_seconds"] ?? null)) {
                // line 349
                echo "        :";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "second", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter(($context["horizontal_input_wrapper_class"] ?? null), "col-sm-2")) : ("col-sm-2"))));
                echo "
    ";
            }
            // line 351
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 356
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 357
        ob_start();
        // line 358
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 359
            echo "        ";
            if (array_key_exists("datetimepicker", $context)) {
                // line 360
                echo "            ";
                $context["widget_addon_icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon_append"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon_append"] ?? null), "icon", array())) : ("th"));
                // line 361
                echo "            <div ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["datetimepicker"] ?? null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["datetimepicker"] ?? null), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"datetimepicker\" class=\"input-group date\" data-date=\"";
                if (($context["value"] ?? null)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd hh:ii\">
                <input type=\"hidden\" value=\"";
                // line 362
                if (($context["value"] ?? null)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
                ";
                // line 363
                if ((array_key_exists("widget_reset_icon", $context) && (($context["widget_reset_icon"] ?? null) == true))) {
                    // line 364
                    echo "                    <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, "remove");
                    echo "</span>
                ";
                }
                // line 366
                echo "                ";
                // line 367
                echo "                ";
                $context["id"] = (($context["id"] ?? null) . "_mopa_picker_display");
                // line 368
                echo "                ";
                $context["full_name"] = null;
                // line 369
                echo "                ";
                $context["type"] = "text";
                // line 370
                echo "                ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
                <span class=\"input-group-addon\">";
                // line 371
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, ($context["widget_addon_icon"] ?? null));
                echo "</span>
            </div>
        ";
            } else {
                // line 374
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
        ";
            }
            // line 376
            echo "    ";
        } else {
            // line 377
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 378
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 379
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array()), 'errors');
            echo "
                ";
            // line 380
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "time", array()), 'errors');
            echo "
                ";
            // line 381
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array()), 'widget', array("attr" => array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter(($context["horizontal_input_wrapper_class"] ?? null), "col-sm-3")) : ("col-sm-3"))));
            echo "
                ";
            // line 382
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "time", array()), 'widget', array("attr" => array("class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "widget_class", array()), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter(($context["horizontal_input_wrapper_class"] ?? null), "col-sm-2")) : ("col-sm-2"))));
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 388
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 389
        ob_start();
        // line 390
        echo "    ";
        $context["widget_addon_append"] = twig_array_merge(($context["widget_addon_append"] ?? null), array("text" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon_append"] ?? null), "text", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon_append"] ?? null), "text", array()), "%")) : ("%"))));
        // line 391
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 395
    public function block_money_widget($context, array $blocks = array())
    {
        // line 396
        ob_start();
        // line 397
        echo "    ";
        $context["widget_addon_prepend"] = (((((($context["widget_addon_prepend"] ?? null) != false) || (($context["widget_addon_prepend"] ?? null) == null)) && (($context["money_pattern"] ?? null) != "{{ widget }}"))) ? (array("text" => twig_trim_filter(twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => ""))))) : (((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter(($context["widget_addon_prepend"] ?? null), null)) : (null))));
        // line 398
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 402
    public function block_file_widget($context, array $blocks = array())
    {
        // line 403
        ob_start();
        // line 404
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
        // line 405
        echo "    ";
        if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter(($context["widget_addon_prepend"] ?? null), null)) : (null)))) {
            // line 406
            echo "        ";
            $context["widget_addon"] = ($context["widget_addon_prepend"] ?? null);
            // line 407
            echo "        ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
    ";
        }
        // line 409
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
";
        // line 410
        if (((($context["type"] ?? null) != "hidden") &&  !(null === ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "type", array()), null)) : (null))))) {
            // line 411
            echo "    ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter(($context["widget_addon_append"] ?? null), null)) : (null)))) {
                // line 412
                echo "        ";
                $context["widget_addon"] = ($context["widget_addon_append"] ?? null);
                // line 413
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 421
    public function block_form_legend($context, array $blocks = array())
    {
        // line 422
        ob_start();
        // line 423
        echo "    ";
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 424
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                // line 425
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                 // line 426
($context["name"] ?? null), "%id%" =>                 // line 427
($context["id"] ?? null)));
            } else {
                // line 430
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 433
        echo "    <";
        echo twig_escape_filter($this->env, ($context["legend_tag"] ?? null), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, ($context["legend_tag"] ?? null), "html", null, true);
        echo ">
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 437
    public function block_form_label($context, array $blocks = array())
    {
        // line 438
        if ((!twig_in_filter("checkbox", ($context["block_prefixes"] ?? null)) || twig_in_filter(($context["widget_checkbox_label"] ?? null), array(0 => "label", 1 => "both")))) {
            // line 439
            ob_start();
            // line 440
            echo "    ";
            if ( !(($context["label"] ?? null) === false)) {
                // line 441
                echo "        ";
                if (twig_test_empty(($context["label"] ?? null))) {
                    // line 442
                    if ((array_key_exists("label_format", $context) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                        // line 443
                        $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                         // line 444
($context["name"] ?? null), "%id%" =>                         // line 445
($context["id"] ?? null)));
                    } else {
                        // line 448
                        $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
                    }
                }
                // line 451
                echo "        ";
                if ( !($context["compound"] ?? null)) {
                    // line 452
                    echo "            ";
                    $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
                    // line 453
                    echo "        ";
                }
                // line 454
                echo "        ";
                $context["label_attr_class"] = "";
                // line 455
                echo "        ";
                if (($context["horizontal"] ?? null)) {
                    // line 456
                    echo "            ";
                    $context["label_attr_class"] = (("control-label " . ($context["label_attr_class"] ?? null)) . ($context["horizontal_label_class"] ?? null));
                    // line 457
                    echo "        ";
                }
                // line 458
                echo "        ";
                if (($context["horizontal_label_div_class"] ?? null)) {
                    // line 459
                    echo "        <div class=\"";
                    echo twig_escape_filter($this->env, ($context["horizontal_label_div_class"] ?? null), "html", null, true);
                    echo "\">
        ";
                }
                // line 461
                echo "        ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["label_attr_class"] ?? null)) . ((($context["required"] ?? null)) ? (" required") : (" optional"))))));
                // line 462
                echo "        <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
        ";
                // line 463
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                // line 464
                $this->displayBlock("label_asterisk", $context, $blocks);
                echo "
        ";
                // line 465
                if (((twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "block_prefixes", array())) && ((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter(($context["widget_add_btn"] ?? null), null)) : (null))) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "allow_add", array()) == true))) {
                    // line 466
                    echo "            &nbsp;";
                    $this->displayBlock("form_widget_add_btn", $context, $blocks);
                    echo "
        ";
                }
                // line 468
                echo "        ";
                if (($context["help_label"] ?? null)) {
                    // line 469
                    echo "            ";
                    $this->displayBlock("help_label", $context, $blocks);
                    echo "
        ";
                }
                // line 471
                echo "        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_tooltip"] ?? null), "title", array())) {
                    // line 472
                    echo "            ";
                    $this->displayBlock("help_label_tooltip", $context, $blocks);
                    echo "
        ";
                }
                // line 474
                echo "        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_popover"] ?? null), "title", array())) {
                    // line 475
                    echo "            ";
                    $this->displayBlock("help_label_popover", $context, $blocks);
                    echo "
        ";
                }
                // line 477
                echo "        </label>
        ";
                // line 478
                if (($context["horizontal_label_div_class"] ?? null)) {
                    // line 479
                    echo "        </div>
        ";
                }
                // line 481
                echo "    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    // line 486
    public function block_help_label($context, array $blocks = array())
    {
        // line 487
        echo "    <span class=\"help-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["help_label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "</span>
";
    }

    // line 490
    public function block_help_label_tooltip($context, array $blocks = array())
    {
        // line 491
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"";
        // line 492
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_tooltip"] ?? null), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_tooltip"] ?? null), "title", array()), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 493
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_tooltip"] ?? null), "icon", array()) === false)) {
            // line 494
            echo "                ";
            echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_tooltip"] ?? null), "icon", array()));
            echo "
            ";
        }
        // line 496
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_tooltip"] ?? null), "text", array()) === null)) {
            // line 497
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_tooltip"] ?? null), "text", array()), "html", null, true);
            echo "
            ";
        }
        // line 499
        echo "        </a>
    </span>
";
    }

    // line 503
    public function block_help_block_tooltip($context, array $blocks = array())
    {
        // line 504
        echo "    ";
        $context["help_label_tooltip"] = ($context["help_block_tooltip"] ?? null);
        // line 505
        echo "    ";
        $this->displayBlock("help_label_tooltip", $context, $blocks);
        echo "
";
    }

    // line 508
    public function block_help_label_popover($context, array $blocks = array())
    {
        // line 509
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"";
        // line 510
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_popover"] ?? null), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_popover"] ?? null), "title", array()), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_popover"] ?? null), "content", array()), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "\" data-html=\"true\">
            ";
        // line 511
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_popover"] ?? null), "icon", array()) === false)) {
            // line 512
            echo "                ";
            echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_popover"] ?? null), "icon", array()));
            echo "
            ";
        }
        // line 514
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_popover"] ?? null), "text", array()) === null)) {
            // line 515
            echo "                ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_label_popover"] ?? null), "text", array());
            echo "
            ";
        }
        // line 517
        echo "        </a>
    </span>
";
    }

    // line 521
    public function block_help_block_popover($context, array $blocks = array())
    {
        // line 522
        echo "    ";
        $context["help_label_popover"] = ($context["help_block_popover"] ?? null);
        // line 523
        echo "    ";
        $this->displayBlock("help_label_popover", $context, $blocks);
        echo "
";
    }

    // line 526
    public function block_form_actions_widget($context, array $blocks = array())
    {
        // line 527
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 528
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 529
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 533
    public function block_form_actions_row($context, array $blocks = array())
    {
        // line 534
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
    }

    // line 537
    public function block_form_rows_visible($context, array $blocks = array())
    {
        // line 538
        ob_start();
        // line 539
        echo "     ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 540
            echo "        <div class=\"symfony-form-errors\">
            ";
            // line 541
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
        </div>
    ";
        }
        // line 544
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 545
            echo "        ";
            if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "vars", array()), "block_prefixes", array()))) {
                echo " ";
                // line 546
                echo "            ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
        ";
            }
            // line 548
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 552
    public function block_form_row($context, array $blocks = array())
    {
        // line 553
        ob_start();
        // line 554
        echo "    ";
        if (twig_in_filter("tab", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "block_prefixes", array()))) {
            // line 555
            echo "        ";
            $this->displayBlock("form_tab", $context, $blocks);
            echo "
    ";
        } elseif ((        // line 556
($context["embed_form"] ?? null) === true)) {
            // line 557
            echo "        ";
            if ( !twig_test_empty(($context["widget_prefix"] ?? null))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["widget_prefix"] ?? null), array(), ($context["translation_domain"] ?? null));
            }
            echo " ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', $context);
            echo " ";
            if ( !twig_test_empty(($context["widget_suffix"] ?? null))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["widget_suffix"] ?? null), array(), ($context["translation_domain"] ?? null));
            }
            // line 558
            echo "    ";
        } else {
            // line 559
            echo "        ";
            $this->displayBlock("widget_form_group_start", $context, $blocks);
            echo "

        ";
            // line 561
            if ((($context["horizontal"] ?? null) &&  !($context["label_render"] ?? null))) {
                // line 562
                echo "            ";
                $context["horizontal_input_wrapper_class"] = ((($context["horizontal_input_wrapper_class"] ?? null) . " ") . ($context["horizontal_label_offset_class"] ?? null));
                // line 563
                echo "        ";
            }
            // line 564
            echo "
        ";
            // line 565
            if (($context["horizontal"] ?? null)) {
                // line 566
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, ($context["horizontal_input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
        ";
            }
            // line 568
            echo "
        ";
            // line 569
            if ( !twig_test_empty(($context["widget_prefix"] ?? null))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["widget_prefix"] ?? null), array(), ($context["translation_domain"] ?? null));
            }
            echo " ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', $context);
            echo " ";
            if ( !twig_test_empty(($context["widget_suffix"] ?? null))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["widget_suffix"] ?? null), array(), ($context["translation_domain"] ?? null));
            }
            // line 570
            echo "
        ";
            // line 571
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
            // line 572
            echo "        ";
            if ((($context["type"] ?? null) != "hidden")) {
                // line 573
                echo "        ";
                $this->displayBlock("form_message", $context, $blocks);
                echo "
        ";
            }
            // line 575
            echo "
        ";
            // line 576
            if (($context["horizontal"] ?? null)) {
                // line 577
                echo "        </div>
        ";
            }
            // line 579
            echo "
        ";
            // line 580
            if (((( !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array())) && twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()), "vars", array()), "block_prefixes", array()))) && ((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter(($context["widget_remove_btn"] ?? null), null)) : (null))) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false)))) {
                // line 581
                echo "            ";
                $this->displayBlock("form_widget_remove_btn", $context, $blocks);
                echo "
        ";
            }
            // line 583
            $this->displayBlock("widget_form_group_end", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 590
    public function block_form_message($context, array $blocks = array())
    {
        // line 591
        ob_start();
        // line 592
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

    ";
        // line 594
        if (((!twig_in_filter("checkbox", ($context["block_prefixes"] ?? null)) || (($context["widget_checkbox_label"] ?? null) != "label")) && ($context["help_block"] ?? null))) {
            // line 595
            echo "        ";
            $this->displayBlock("form_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 602
    public function block_form_help($context, array $blocks = array())
    {
        // line 603
        ob_start();
        // line 604
        echo "    ";
        if (($context["help_block"] ?? null)) {
            echo "<p class=\"help-block\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["help_block"] ?? null), array(), ($context["translation_domain"] ?? null));
            echo "</p>";
        }
        // line 605
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_block_tooltip"] ?? null), "title", array())) {
            // line 606
            echo "        &nbsp;";
            $this->displayBlock("help_block_tooltip", $context, $blocks);
            echo "
    ";
        }
        // line 608
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_block_popover"] ?? null), "title", array())) {
            // line 609
            echo "        &nbsp;";
            $this->displayBlock("help_block_popover", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 614
    public function block_form_widget_add_btn($context, array $blocks = array())
    {
        // line 615
        ob_start();
        // line 616
        echo "    ";
        if (((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter(($context["widget_add_btn"] ?? null), null)) : (null))) {
            // line 617
            echo "        ";
            $context["button_type"] = "add";
            // line 618
            echo "        ";
            $context["button_values"] = ($context["widget_add_btn"] ?? null);
            // line 619
            echo "        ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 624
    public function block_form_widget_remove_btn($context, array $blocks = array())
    {
        // line 625
        ob_start();
        // line 626
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_remove_btn"] ?? null), "wrapper_div", array(), "any", true, true) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_remove_btn"] ?? null), "wrapper_div", array()) === false))) {
            // line 627
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_remove_btn"] ?? null), "wrapper_div", array()), "class", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 629
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_remove_btn"] ?? null), "horizontal_wrapper_div", array(), "any", true, true) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_remove_btn"] ?? null), "horizontal_wrapper_div", array()) === false))) {
            // line 630
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_remove_btn"] ?? null), "horizontal_wrapper_div", array()), "class", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 632
        echo "    ";
        if (((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter(($context["widget_remove_btn"] ?? null), null)) : (null))) {
            // line 633
            echo "    ";
            $context["button_type"] = "remove";
            // line 634
            echo "    ";
            $context["button_values"] = ($context["widget_remove_btn"] ?? null);
            // line 635
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        // line 637
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_remove_btn"] ?? null), "horizontal_wrapper_div", array(), "any", true, true) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_remove_btn"] ?? null), "horizontal_wrapper_div", array()) === false))) {
            // line 638
            echo "        </div>
    ";
        }
        // line 640
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_remove_btn"] ?? null), "wrapper_div", array(), "any", true, true) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_remove_btn"] ?? null), "wrapper_div", array()) === false))) {
            // line 641
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 646
    public function block_collection_button($context, array $blocks = array())
    {
        // line 647
        echo "<a ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "attr", array()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " data-collection-";
        echo twig_escape_filter($this->env, ($context["button_type"] ?? null), "html", null, true);
        echo "-btn=\".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "_form_group\">
";
        // line 648
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "icon", array()))) {
            // line 649
            echo "    ";
            echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "icon", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "icon_inverted", array()), false)) : (false)));
            echo "
";
        }
        // line 651
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "label", array(), "any", true, true)) {
            // line 652
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["button_values"] ?? null), "translation_domain", array()), ($context["translation_domain"] ?? null))) : (($context["translation_domain"] ?? null)))), "html", null, true);
            echo "
";
        }
        // line 654
        echo "</a>

";
    }

    // line 658
    public function block_label_asterisk($context, array $blocks = array())
    {
        // line 659
        if (($context["required"] ?? null)) {
            // line 660
            if (($context["render_required_asterisk"] ?? null)) {
                echo "&nbsp;<span class=\"asterisk\">*</span>";
            }
        } else {
            // line 662
            if (($context["render_optional_text"] ?? null)) {
                echo "&nbsp;<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(optional)", array(), ($context["translation_domain"] ?? null)), "html", null, true);
                echo "</span>";
            }
        }
    }

    // line 666
    public function block_widget_addon($context, array $blocks = array())
    {
        // line 667
        ob_start();
        // line 668
        $context["widget_addon_icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "icon", array())) : (null));
        // line 669
        $context["widget_addon_icon_inverted"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "icon_inverted", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "icon_inverted", array())) : (false));
        // line 670
        echo "    <span class=\"input-group-addon\">";
        echo ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "text", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "text", array()), false)) : (false))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_addon"] ?? null), "text", array()), array(), ($context["translation_domain"] ?? null))) : ($this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, ($context["widget_addon_icon"] ?? null), ($context["widget_addon_icon_inverted"] ?? null))));
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 674
    public function block_widget_btns($context, array $blocks = array())
    {
        // line 675
        ob_start();
        // line 676
        echo "    <span class=\"input-group-btn\">
    ";
        // line 677
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["widget_btns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["widget_btn"]) {
            // line 678
            echo "        <button type=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["widget_btn"], "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["widget_btn"], "type", array()), "button")) : ("button")), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ("btn " . ((twig_get_attribute($this->env, $this->getSourceContext(), $context["widget_btn"], "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["widget_btn"], "class", array()), "btn-default")) : ("btn-default"))), "html", null, true);
            echo "\">
        ";
            // line 679
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["widget_btn"], "icon", array()))) {
                // line 680
                echo "                ";
                echo $this->env->getExtension('Mopa\Bundle\BootstrapBundle\Twig\IconExtension')->renderIcon($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["widget_btn"], "icon", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["widget_btn"], "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["widget_btn"], "icon_inverted", array()), false)) : (false)));
                echo "
        ";
            }
            // line 682
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), $context["widget_btn"], "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["widget_btn"], "label", array()), "")) : ("")), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget_btn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 684
        echo "    </span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 690
    public function block_form_errors($context, array $blocks = array())
    {
        // line 691
        ob_start();
        // line 692
        if (($context["error_delay"] ?? null)) {
            // line 693
            echo "    ";
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 694
                echo "        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) == 1)) {
                    // line 695
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "set", array(0 => "errors", 1 => ($context["errors"] ?? null)), "method")) {
                    }
                    // line 696
                    echo "        ";
                }
                // line 697
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 699
            echo "    ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 700
                echo "        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) == null)) {
                    // line 701
                    echo "            ";
                    $context["__internal_0e9c9c68fbcdad064edee0944d17a0cba9d4f3eb7fb3f60790ed5574a6b8a5df"] = $this->loadTemplate("MopaBootstrapBundle::flash.html.twig", "MopaBootstrapBundle:Form:fields.html.twig", 701);
                    // line 702
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 703
                        echo "                ";
                        echo $context["__internal_0e9c9c68fbcdad064edee0944d17a0cba9d4f3eb7fb3f60790ed5574a6b8a5df"]->macro_flash("danger", twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 705
                    echo "        ";
                } else {
                    // line 706
                    echo "            <span class=\"help-";
                    $this->displayBlock("error_type", $context, $blocks);
                    echo "\">
            ";
                    // line 707
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 708
                        echo "                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                        echo " <br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 710
                    echo "            </span>
        ";
                }
                // line 712
                echo "    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 719
    public function block_error_type($context, array $blocks = array())
    {
        // line 720
        ob_start();
        // line 721
        if (($context["error_type"] ?? null)) {
            // line 722
            echo "    ";
            echo twig_escape_filter($this->env, ($context["error_type"] ?? null), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 723
($context["form"] ?? null), "parent", array()) == null)) {
            // line 724
            echo "    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "error_type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "error_type", array()), "inline")) : ("inline")), "html", null, true);
            echo "
";
        } else {
            // line 726
            echo "    block
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 733
    public function block_widget_form_group_start($context, array $blocks = array())
    {
        // line 734
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter(($context["widget_form_group"] ?? null), false)) : (false)) || (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) == null))) {
            // line 735
            echo "    ";
            if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array())) && twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()), "vars", array()), "block_prefixes", array())))) {
                echo " ";
                // line 736
                echo "        ";
                if ( !($context["omit_collection_item"] ?? null)) {
                    // line 737
                    echo "            ";
                    // line 738
                    echo "        \t";
                    $context["widget_form_group_attr"] = twig_array_merge(($context["widget_form_group_attr"] ?? null), array("class" => "collection-item"));
                    // line 739
                    echo "        ";
                }
                // line 740
                echo "    ";
            }
            // line 741
            echo "    ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 742
                echo "\t    ";
                // line 743
                echo "\t    ";
                $context["widget_form_group_attr"] = twig_array_merge(($context["widget_form_group_attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_form_group_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["widget_form_group_attr"] ?? null), "class", array()), "")) : ("")) . " has-error")));
                // line 744
                echo "    ";
            }
            // line 745
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_widget_popover"] ?? null), "selector", array()) === null)) {
                // line 746
                echo "        ";
                $context["help_widget_popover"] = twig_array_merge(($context["help_widget_popover"] ?? null), array("selector" => ("#" . ($context["id"] ?? null))));
                // line 747
                echo "    ";
            }
            // line 748
            echo "    <div";
            if ( !(twig_get_attribute($this->env, $this->getSourceContext(), ($context["help_widget_popover"] ?? null), "title", array()) === null)) {
                $this->displayBlock("help_widget_popover", $context, $blocks);
            }
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["widget_form_group_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 750
            echo "    ";
            if (((((twig_length_filter($this->env, ($context["form"] ?? null)) > 0) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) != null)) && !twig_in_filter("field", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 751
($context["form"] ?? null), "vars", array()), "block_prefixes", array()))) && !twig_in_filter("date", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 752
($context["form"] ?? null), "vars", array()), "block_prefixes", array())))) {
                // line 753
                echo "        ";
                if (($context["show_child_legend"] ?? null)) {
                    // line 754
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif (                // line 755
($context["label_render"] ?? null)) {
                    // line 756
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                } else {
                    // line 758
                    echo "        ";
                }
                // line 759
                echo "    ";
            } else {
                // line 760
                echo "        ";
                if (($context["label_render"] ?? null)) {
                    // line 761
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 763
                echo "    ";
            }
        } else {
            // line 765
            echo "    ";
            if (($context["label_render"] ?? null)) {
                // line 766
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
    ";
            }
        }
    }

    // line 771
    public function block_help_widget_popover($context, array $blocks = array())
    {
        // line 772
        echo " ";
        ob_start();
        // line 773
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["help_widget_popover"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 774
            echo " data-";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter(($context["domain"] ?? null), "messages")) : ("messages"))), "html", null, true);
            echo "\"
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 776
        echo " ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 779
    public function block_widget_form_group_end($context, array $blocks = array())
    {
        // line 780
        ob_start();
        // line 781
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter(($context["widget_form_group"] ?? null), false)) : (false)) || (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) == null))) {
            // line 782
            echo "    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2501 => 782,  2499 => 781,  2497 => 780,  2494 => 779,  2489 => 776,  2478 => 774,  2473 => 773,  2470 => 772,  2467 => 771,  2458 => 766,  2455 => 765,  2451 => 763,  2445 => 761,  2442 => 760,  2439 => 759,  2436 => 758,  2430 => 756,  2428 => 755,  2423 => 754,  2420 => 753,  2418 => 752,  2417 => 751,  2415 => 750,  2395 => 748,  2392 => 747,  2389 => 746,  2386 => 745,  2383 => 744,  2380 => 743,  2378 => 742,  2375 => 741,  2372 => 740,  2369 => 739,  2366 => 738,  2364 => 737,  2361 => 736,  2357 => 735,  2355 => 734,  2352 => 733,  2345 => 726,  2339 => 724,  2337 => 723,  2332 => 722,  2330 => 721,  2328 => 720,  2325 => 719,  2318 => 712,  2314 => 710,  2305 => 708,  2301 => 707,  2296 => 706,  2293 => 705,  2284 => 703,  2279 => 702,  2276 => 701,  2273 => 700,  2270 => 699,  2255 => 697,  2252 => 696,  2248 => 695,  2245 => 694,  2227 => 693,  2225 => 692,  2223 => 691,  2220 => 690,  2214 => 684,  2205 => 682,  2199 => 680,  2197 => 679,  2190 => 678,  2186 => 677,  2183 => 676,  2181 => 675,  2178 => 674,  2170 => 670,  2168 => 669,  2166 => 668,  2164 => 667,  2161 => 666,  2152 => 662,  2147 => 660,  2145 => 659,  2142 => 658,  2136 => 654,  2130 => 652,  2128 => 651,  2122 => 649,  2120 => 648,  2100 => 647,  2097 => 646,  2090 => 641,  2087 => 640,  2083 => 638,  2080 => 637,  2074 => 635,  2071 => 634,  2068 => 633,  2065 => 632,  2059 => 630,  2056 => 629,  2050 => 627,  2047 => 626,  2045 => 625,  2042 => 624,  2033 => 619,  2030 => 618,  2027 => 617,  2024 => 616,  2022 => 615,  2019 => 614,  2010 => 609,  2007 => 608,  2001 => 606,  1998 => 605,  1991 => 604,  1989 => 603,  1986 => 602,  1977 => 595,  1975 => 594,  1969 => 592,  1967 => 591,  1964 => 590,  1956 => 583,  1950 => 581,  1948 => 580,  1945 => 579,  1941 => 577,  1939 => 576,  1936 => 575,  1930 => 573,  1927 => 572,  1925 => 571,  1922 => 570,  1912 => 569,  1909 => 568,  1903 => 566,  1901 => 565,  1898 => 564,  1895 => 563,  1892 => 562,  1890 => 561,  1884 => 559,  1881 => 558,  1870 => 557,  1868 => 556,  1863 => 555,  1860 => 554,  1858 => 553,  1855 => 552,  1846 => 548,  1840 => 546,  1836 => 545,  1831 => 544,  1825 => 541,  1822 => 540,  1819 => 539,  1817 => 538,  1814 => 537,  1807 => 534,  1804 => 533,  1796 => 529,  1792 => 528,  1787 => 527,  1784 => 526,  1777 => 523,  1774 => 522,  1771 => 521,  1765 => 517,  1759 => 515,  1756 => 514,  1750 => 512,  1748 => 511,  1740 => 510,  1737 => 509,  1734 => 508,  1727 => 505,  1724 => 504,  1721 => 503,  1715 => 499,  1709 => 497,  1706 => 496,  1700 => 494,  1698 => 493,  1692 => 492,  1689 => 491,  1686 => 490,  1679 => 487,  1676 => 486,  1669 => 481,  1665 => 479,  1663 => 478,  1660 => 477,  1654 => 475,  1651 => 474,  1645 => 472,  1642 => 471,  1636 => 469,  1633 => 468,  1627 => 466,  1625 => 465,  1621 => 464,  1619 => 463,  1603 => 462,  1600 => 461,  1594 => 459,  1591 => 458,  1588 => 457,  1585 => 456,  1582 => 455,  1579 => 454,  1576 => 453,  1573 => 452,  1570 => 451,  1566 => 448,  1563 => 445,  1562 => 444,  1561 => 443,  1559 => 442,  1556 => 441,  1553 => 440,  1551 => 439,  1549 => 438,  1546 => 437,  1534 => 433,  1530 => 430,  1527 => 427,  1526 => 426,  1525 => 425,  1523 => 424,  1520 => 423,  1518 => 422,  1515 => 421,  1505 => 413,  1502 => 412,  1499 => 411,  1497 => 410,  1490 => 409,  1484 => 407,  1481 => 406,  1478 => 405,  1476 => 404,  1474 => 403,  1471 => 402,  1463 => 398,  1460 => 397,  1458 => 396,  1455 => 395,  1447 => 391,  1444 => 390,  1442 => 389,  1439 => 388,  1430 => 382,  1426 => 381,  1422 => 380,  1418 => 379,  1413 => 378,  1410 => 377,  1407 => 376,  1401 => 374,  1395 => 371,  1390 => 370,  1387 => 369,  1384 => 368,  1381 => 367,  1379 => 366,  1373 => 364,  1371 => 363,  1363 => 362,  1340 => 361,  1337 => 360,  1334 => 359,  1331 => 358,  1329 => 357,  1326 => 356,  1319 => 351,  1313 => 349,  1310 => 348,  1304 => 346,  1302 => 345,  1297 => 344,  1294 => 343,  1291 => 342,  1284 => 339,  1278 => 336,  1273 => 335,  1270 => 334,  1267 => 333,  1264 => 332,  1262 => 331,  1256 => 329,  1254 => 328,  1248 => 327,  1227 => 326,  1224 => 325,  1221 => 324,  1219 => 323,  1217 => 322,  1214 => 321,  1206 => 315,  1204 => 314,  1203 => 313,  1202 => 312,  1201 => 311,  1198 => 310,  1195 => 309,  1188 => 306,  1182 => 303,  1177 => 302,  1174 => 301,  1171 => 300,  1168 => 299,  1166 => 298,  1160 => 296,  1158 => 295,  1152 => 294,  1131 => 293,  1128 => 292,  1125 => 291,  1123 => 290,  1121 => 289,  1118 => 288,  1113 => 285,  1109 => 283,  1106 => 282,  1103 => 281,  1099 => 279,  1093 => 277,  1087 => 275,  1084 => 274,  1081 => 273,  1079 => 272,  1066 => 271,  1059 => 269,  1045 => 268,  1042 => 267,  1039 => 266,  1036 => 265,  1033 => 264,  1030 => 263,  1027 => 262,  1024 => 261,  1020 => 259,  1017 => 258,  1013 => 257,  1011 => 256,  1008 => 255,  1004 => 252,  1001 => 249,  1000 => 248,  999 => 247,  997 => 246,  994 => 245,  991 => 244,  988 => 243,  983 => 240,  979 => 238,  976 => 237,  970 => 236,  966 => 234,  964 => 233,  959 => 232,  953 => 230,  947 => 228,  945 => 227,  941 => 226,  935 => 225,  920 => 224,  917 => 223,  914 => 222,  911 => 221,  908 => 220,  905 => 219,  902 => 218,  899 => 217,  896 => 216,  889 => 214,  885 => 213,  882 => 212,  877 => 211,  873 => 209,  870 => 208,  867 => 207,  864 => 206,  861 => 205,  858 => 204,  855 => 203,  852 => 202,  849 => 201,  846 => 200,  843 => 199,  835 => 195,  829 => 193,  826 => 192,  823 => 191,  820 => 190,  811 => 185,  808 => 184,  799 => 182,  794 => 181,  791 => 180,  776 => 178,  773 => 177,  770 => 176,  768 => 175,  765 => 174,  762 => 173,  759 => 172,  757 => 171,  754 => 170,  752 => 169,  751 => 168,  750 => 167,  749 => 166,  747 => 165,  744 => 164,  741 => 163,  738 => 162,  735 => 161,  733 => 160,  730 => 159,  723 => 155,  707 => 154,  704 => 153,  701 => 152,  695 => 148,  684 => 144,  680 => 143,  676 => 142,  667 => 141,  664 => 140,  660 => 139,  655 => 138,  653 => 137,  650 => 136,  643 => 132,  641 => 131,  638 => 130,  632 => 126,  627 => 125,  625 => 124,  620 => 122,  617 => 121,  613 => 119,  611 => 118,  606 => 116,  603 => 115,  596 => 112,  594 => 111,  591 => 110,  588 => 109,  583 => 108,  578 => 107,  575 => 106,  573 => 105,  570 => 104,  563 => 99,  557 => 97,  554 => 96,  551 => 95,  545 => 93,  542 => 92,  539 => 91,  536 => 90,  530 => 88,  524 => 86,  521 => 85,  518 => 84,  515 => 83,  512 => 82,  509 => 81,  506 => 80,  500 => 78,  497 => 77,  494 => 76,  488 => 74,  485 => 73,  483 => 72,  480 => 71,  477 => 70,  474 => 69,  472 => 68,  469 => 67,  463 => 63,  457 => 61,  454 => 60,  451 => 59,  449 => 58,  444 => 57,  441 => 56,  438 => 55,  432 => 53,  429 => 52,  427 => 51,  424 => 50,  421 => 49,  418 => 48,  415 => 47,  410 => 43,  404 => 40,  401 => 39,  394 => 35,  379 => 34,  376 => 33,  373 => 32,  370 => 31,  367 => 30,  364 => 29,  356 => 25,  350 => 23,  348 => 22,  341 => 21,  337 => 18,  334 => 15,  333 => 14,  332 => 13,  330 => 12,  327 => 11,  325 => 10,  322 => 9,  315 => 6,  312 => 5,  309 => 4,  305 => 779,  302 => 778,  300 => 771,  297 => 770,  295 => 733,  292 => 732,  289 => 730,  287 => 719,  284 => 718,  281 => 716,  279 => 690,  276 => 689,  273 => 687,  271 => 674,  268 => 673,  266 => 666,  263 => 665,  261 => 658,  258 => 657,  256 => 646,  253 => 645,  251 => 624,  248 => 623,  246 => 614,  243 => 613,  241 => 602,  238 => 601,  235 => 599,  233 => 590,  230 => 589,  227 => 587,  225 => 552,  222 => 551,  220 => 537,  217 => 536,  215 => 533,  212 => 531,  210 => 526,  207 => 525,  205 => 521,  202 => 520,  200 => 508,  197 => 507,  195 => 503,  192 => 502,  190 => 490,  187 => 489,  185 => 486,  182 => 485,  180 => 437,  177 => 436,  175 => 421,  172 => 420,  169 => 418,  167 => 402,  164 => 401,  162 => 395,  159 => 394,  157 => 388,  154 => 387,  152 => 356,  149 => 355,  147 => 321,  144 => 320,  142 => 288,  139 => 287,  137 => 243,  134 => 242,  132 => 199,  129 => 198,  127 => 190,  124 => 189,  122 => 159,  119 => 158,  117 => 152,  114 => 151,  112 => 136,  109 => 135,  107 => 130,  104 => 129,  102 => 104,  99 => 103,  97 => 67,  94 => 66,  92 => 47,  89 => 45,  87 => 29,  84 => 28,  82 => 9,  79 => 8,  77 => 4,  74 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MopaBootstrapBundle:Form:fields.html.twig", "/var/www/myeml/cdm/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/views/Form/fields.html.twig");
    }
}
