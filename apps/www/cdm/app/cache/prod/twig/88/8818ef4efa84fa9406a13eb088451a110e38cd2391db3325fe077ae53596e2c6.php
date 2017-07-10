<?php

/* CleverAgeEAVManagerLayoutBundle:Macros:utilities.html.twig */
class __TwigTemplate_fb153b843810c585cd630b51e62b1d3254f3b13b57805987381f55aeb98f2674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 28
        echo "
";
        // line 37
        echo "
";
        // line 48
        echo "
";
        // line 59
        echo "
";
        // line 88
        echo "
";
        // line 107
        echo "
";
        // line 127
        echo "
";
        // line 144
        echo "
";
        // line 169
        echo "

";
        // line 192
        echo "
";
        // line 205
        echo "
";
    }

    // line 4
    public function macro_flash_messages(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "error", 1 => "warning", 2 => "success", 3 => "info"));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 6
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => $context["name"]), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
                    // line 9
                    echo $context["message"];
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 18
    public function macro_menu_link($__title__ = null, $__route__ = null, $__routes__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "route" => $__route__,
            "routes" => $__routes__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "    ";
            if ((array_key_exists("routes", $context) && ($context["routes"] ?? null))) {
                // line 20
                echo "        ";
                $context["routes"] = twig_array_merge(($context["routes"] ?? null), array(0 => ($context["route"] ?? null)));
                // line 21
                echo "    ";
            } else {
                // line 22
                echo "        ";
                $context["routes"] = array(0 => ($context["route"] ?? null));
                // line 23
                echo "    ";
            }
            // line 24
            echo "    <li ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), ($context["routes"] ?? null))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), ((array_key_exists("parameters", $context)) ? (_twig_default_filter(($context["parameters"] ?? null), array())) : (array()))), "html", null, true);
            echo "\">";
            echo ($context["title"] ?? null);
            echo "</a>
    </li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_menu_icon_link($__icon__ = null, $__title__ = null, $__route__ = null, $__routes__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "title" => $__title__,
            "route" => $__route__,
            "routes" => $__routes__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    ";
            $context["current"] = $this;
            // line 34
            echo "    ";
            $context["title"] = ((("<i class=\"fa fa-" . ($context["icon"] ?? null)) . "\"></i> ") . ($context["title"] ?? null));
            // line 35
            echo "    ";
            echo $context["current"]->macro_menu_link(($context["title"] ?? null), ($context["route"] ?? null), ($context["routes"] ?? null), ($context["parameters"] ?? null));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 41
    public function macro_admin_menu_link($__title__ = null, $__admin__ = null, $__action__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "admin" => $__admin__,
            "action" => $__action__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "    ";
            $context["admin"] = $this->env->getExtension('Sidus\AdminBundle\Twig\AdminExtension')->getAdmin(($context["admin"] ?? null));
            // line 43
            echo "    ";
            $context["title"] = ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : ($this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (("admin." . twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array())) . ".title")), array(), $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array())))));
            // line 44
            echo "    <li ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "method")) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array(($context["admin"] ?? null), ($context["action"] ?? null), ((array_key_exists("parameters", $context)) ? (_twig_default_filter(($context["parameters"] ?? null), array())) : (array())))), "html", null, true);
            echo "\">";
            echo ($context["title"] ?? null);
            echo "</a>
    </li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_admin_menu_icon_link($__icon__ = null, $__title__ = null, $__admin__ = null, $__action__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "title" => $__title__,
            "admin" => $__admin__,
            "action" => $__action__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context["current"] = $this;
            // line 54
            echo "    ";
            $context["admin"] = $this->env->getExtension('Sidus\AdminBundle\Twig\AdminExtension')->getAdmin(($context["admin"] ?? null));
            // line 55
            echo "    ";
            $context["title"] = ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : ($this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (("admin." . twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array())) . ".title")), array(), $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array())))));
            // line 56
            echo "    ";
            $context["title"] = ((("<i class=\"fa fa-" . ($context["icon"] ?? null)) . "\"></i> ") . ($context["title"] ?? null));
            // line 57
            echo "    ";
            echo $context["current"]->macro_admin_menu_link(($context["title"] ?? null), ($context["admin"] ?? null), ($context["action"] ?? null), ($context["parameters"] ?? null));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 63
    public function macro_triggerDataEvent($__admin__ = null, $__data__ = null, $__id__ = null, $__success__ = null, $__target__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "data" => $__data__,
            "id" => $__id__,
            "success" => $__success__,
            "target" => $__target__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 64
            echo "    <script>
        ";
            // line 65
            $context["parameters"] = array("dataId" =>             // line 66
($context["id"] ?? null), "dataLabel" => twig_trim_filter(            // line 67
($context["data"] ?? null)), "admin" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 68
($context["admin"] ?? null), "code", array()), "action" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 69
($context["admin"] ?? null), "currentAction", array()), "code", array()), "success" =>             // line 70
($context["success"] ?? null));
            // line 72
            echo "        var event;
        if (typeof CustomEvent == 'function') {
            event = new Event('clever_admindata', {bubbles: true, cancelable: true});
        } else {
            event = document.createEvent('Event');
            event.initEvent('clever_admindata', true, true);
        }
        event.detail = ";
            // line 79
            echo json_encode(($context["parameters"] ?? null));
            echo ";
        var target = document.getElementById('";
            // line 80
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "'.replace('#', ''));
        if (target) {
            target.dispatchEvent(event);
        } else {
            document.dispatchEvent(event);
        }
    </script>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 92
    public function macro_lock_form($__inputId__ = null, $__target__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "inputId" => $__inputId__,
            "target" => $__target__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    <script>
        // Launched only on ajax calls when jQuery is already defined: lock
        if (typeof \$ != 'undefined') {
            ";
            // line 96
            if (($context["inputId"] ?? null)) {
                // line 97
                echo "            // Lock navigation if form is updated
            lockNavigationOnChange(
                    '#";
                // line 99
                echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
                echo "',
                    '";
                // line 100
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.abandon_changes.confirmation"), "js"), "html", null, true);
                echo "'
                    ";
                // line 101
                if (($context["target"] ?? null)) {
                    echo ", '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["target"] ?? null), "js"), "html", null, true);
                    echo "'";
                }
                // line 102
                echo "            );
            ";
            }
            // line 104
            echo "        }
    </script>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 111
    public function macro_family_menu($__admin__ = null, $__families__ = null, $__activeFamily__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "families" => $__families__,
            "activeFamily" => $__activeFamily__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 112
            echo "    ";
            $context["current"] = $this;
            // line 113
            echo "    ";
            if ((array_key_exists("families", $context) && (twig_length_filter($this->env, ($context["families"] ?? null)) > 0))) {
                // line 114
                echo "        <ul class=\"nav nav-pills nav-stacked\">
            ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["families"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    // line 116
                    echo "                ";
                    $context["f"] = ((twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "code", array(), "any", true, true)) ? ($context["f"]) : (call_user_func_array($this->env->getFunction('get_family')->getCallable(), array($context["f"]))));
                    // line 117
                    echo "                ";
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("list", $context["f"]) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DATA_ADMIN"))) {
                        // line 118
                        echo "                    <li ";
                        if ((($context["activeFamily"] ?? null) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["activeFamily"] ?? null), "code", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "code", array())))) {
                            echo "class=\"active\"";
                        }
                        echo ">
                        <a href=\"";
                        // line 119
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array(($context["admin"] ?? null), "list", array("familyCode" => twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "code", array())))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["f"], "html", null, true);
                        echo "</a>
                        ";
                        // line 121
                        echo "                    </li>
                ";
                    }
                    // line 123
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "        </ul>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 131
    public function macro_context_form(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 132
            echo "    ";
            $context["contextForm"] = $this->env->getExtension('CleverAge\EAVManager\EAVModelBundle\Twig\EAVContextExtension')->getContextForm();
            // line 133
            echo "    ";
            if (($context["contextForm"] ?? null)) {
                // line 134
                echo "        ";
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["contextForm"] ?? null), 'form_start', array("attr" => array("class" => "navbar-form navbar-right")));
                echo "
        ";
                // line 135
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["contextForm"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["subForm"]) {
                    // line 136
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["subForm"], 'widget');
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subForm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "&nbsp;
        <button type=\"submit\" class=\"btn btn-default btn-sm pull-right\">
            <i class=\"fa fa-language\"></i> ";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.change_context.label"), "html", null, true);
                echo "
        </button>
        ";
                // line 141
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["contextForm"] ?? null), 'form_end');
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 148
    public function macro_eav_action_button($__admin__ = null, $__entity__ = null, $__actionName__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "entity" => $__entity__,
            "actionName" => $__actionName__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 149
            echo "    ";
            // line 150
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasAction", array(0 => ($context["actionName"] ?? null)), "method")) {
                // line 151
                echo "        ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(($context["actionName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["entity"] ?? null), "family", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DATA_ADMIN"))) {
                    // line 152
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "title", array(), "any", true, true)) {
                        // line 153
                        echo "                ";
                        $context["title"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "title", array());
                        // line 154
                        echo "            ";
                    } else {
                        // line 155
                        echo "                ";
                        $context["title"] = $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => ((("admin.family." . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                         // line 156
($context["entity"] ?? null), "family", array()), "code", array())) . ($context["actionName"] ?? null)) . ".label"), 1 => ((("admin." . twig_get_attribute($this->env, $this->getSourceContext(),                         // line 157
($context["admin"] ?? null), "code", array())) . ($context["actionName"] ?? null)) . ".label"), 2 => (("admin.action." .                         // line 158
($context["actionName"] ?? null)) . ".label")), array(),                         // line 159
($context["actionName"] ?? null));
                        // line 160
                        echo "            ";
                    }
                    // line 161
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_entity_path')->getCallable(), array(($context["admin"] ?? null), ($context["entity"] ?? null), ($context["actionName"] ?? null))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
               class=\"";
                    // line 162
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "class", array()), "btn btn-default")) : ("btn btn-default")), "html", null, true);
                    echo "\"
               data-target-element=\"";
                    // line 163
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "target", array()), "#tg_right")) : ("#tg_right")), "html", null, true);
                    echo "\">
                <i class=\"fa fa-";
                    // line 164
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "icon", array())) : (($context["actionName"] ?? null))), "html", null, true);
                    echo "\"></i>
            </a>
        ";
                }
                // line 167
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 174
    public function macro_action_button($__admin__ = null, $__entity__ = null, $__actionName__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "entity" => $__entity__,
            "actionName" => $__actionName__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 175
            echo "    ";
            // line 176
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasAction", array(0 => ($context["actionName"] ?? null)), "method")) {
                // line 177
                echo "        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "title", array(), "any", true, true)) {
                    // line 178
                    echo "            ";
                    $context["title"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "title", array());
                    // line 179
                    echo "        ";
                } else {
                    // line 180
                    echo "            ";
                    $context["title"] = $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => ((("admin." . twig_get_attribute($this->env, $this->getSourceContext(),                     // line 181
($context["admin"] ?? null), "code", array())) . ($context["actionName"] ?? null)) . ".label"), 1 => (("admin.action." .                     // line 182
($context["actionName"] ?? null)) . ".label")), array(),                     // line 183
($context["actionName"] ?? null));
                    // line 184
                    echo "        ";
                }
                // line 185
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_entity_path')->getCallable(), array(($context["admin"] ?? null), ($context["entity"] ?? null), ($context["actionName"] ?? null))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "\"
           class=\"";
                // line 186
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "class", array()), "btn btn-default")) : ("btn btn-default")), "html", null, true);
                echo "\"
           data-target-element=\"";
                // line 187
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "target", array()), "#tg_right")) : ("#tg_right")), "html", null, true);
                echo "\">
            <i class=\"fa fa-";
                // line 188
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "icon", array())) : (($context["actionName"] ?? null))), "html", null, true);
                echo "\"></i>
        </a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 196
    public function macro_admin_title_nav($__admin__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 197
            echo "    <a class=\"admin-nav\" data-toggle=\"collapse\" href=\"#admin_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array()), "html", null, true);
            echo "\">
        <h5>
            <i class=\"fa fa-";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "option", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
            ";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (("admin." . twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array())) . ".title")), array(), $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array()))), "html", null, true);
            echo "
            <span class=\"pull-right\"><span class=\"caret\"></span></span>
        </h5>
    </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 209
    public function macro_admin_family_nav($__admin__ = null, $__family__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "family" => $__family__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 210
            echo "    ";
            $context["current"] = $this;
            // line 211
            echo "    ";
            echo $context["current"]->macro_admin_title_nav(($context["admin"] ?? null));
            echo "
    <div id=\"admin_";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array()), "html", null, true);
            echo "\"
         class=\"collapse";
            // line 213
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "method")) {
                echo " in";
            }
            echo "\">
        ";
            // line 214
            echo $context["current"]->macro_family_menu(($context["admin"] ?? null), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "option", array(0 => "families", 1 => array()), "method")), ($context["family"] ?? null));
            echo "
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerLayoutBundle:Macros:utilities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 214,  706 => 213,  702 => 212,  697 => 211,  694 => 210,  681 => 209,  667 => 200,  663 => 199,  657 => 197,  645 => 196,  632 => 188,  628 => 187,  624 => 186,  617 => 185,  614 => 184,  612 => 183,  611 => 182,  610 => 181,  608 => 180,  605 => 179,  602 => 178,  599 => 177,  596 => 176,  594 => 175,  579 => 174,  569 => 167,  563 => 164,  559 => 163,  555 => 162,  548 => 161,  545 => 160,  543 => 159,  542 => 158,  541 => 157,  540 => 156,  538 => 155,  535 => 154,  532 => 153,  529 => 152,  526 => 151,  523 => 150,  521 => 149,  506 => 148,  494 => 141,  489 => 139,  485 => 137,  476 => 136,  472 => 135,  467 => 134,  464 => 133,  461 => 132,  450 => 131,  439 => 124,  433 => 123,  429 => 121,  423 => 119,  416 => 118,  413 => 117,  410 => 116,  406 => 115,  403 => 114,  400 => 113,  397 => 112,  383 => 111,  372 => 104,  368 => 102,  362 => 101,  358 => 100,  354 => 99,  350 => 97,  348 => 96,  343 => 93,  330 => 92,  313 => 80,  309 => 79,  300 => 72,  298 => 70,  297 => 69,  296 => 68,  295 => 67,  294 => 66,  293 => 65,  290 => 64,  274 => 63,  262 => 57,  259 => 56,  256 => 55,  253 => 54,  250 => 53,  234 => 52,  220 => 45,  213 => 44,  210 => 43,  207 => 42,  192 => 41,  180 => 35,  177 => 34,  174 => 33,  158 => 32,  144 => 25,  137 => 24,  134 => 23,  131 => 22,  128 => 21,  125 => 20,  122 => 19,  107 => 18,  94 => 12,  85 => 9,  79 => 7,  74 => 6,  69 => 5,  58 => 4,  53 => 205,  50 => 192,  46 => 169,  43 => 144,  40 => 127,  37 => 107,  34 => 88,  31 => 59,  28 => 48,  25 => 37,  22 => 28,  19 => 14,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerLayoutBundle:Macros:utilities.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/LayoutBundle/Resources/views/Macros/utilities.html.twig");
    }
}
