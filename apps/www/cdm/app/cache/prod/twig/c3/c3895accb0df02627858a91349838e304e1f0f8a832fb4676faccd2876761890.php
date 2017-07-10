<?php

/* @CleverAgeEAVManagerAdmin/Base/partials/edit.blocks.html.twig */
class __TwigTemplate_d762ce3626e492dd0055b7895952dce84d88e033a6125e23581cb47b7706c224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit_form_class' => array($this, 'block_edit_form_class'),
            'form_actions' => array($this, 'block_form_actions'),
            'edit_standard' => array($this, 'block_edit_standard'),
            'edit_modal' => array($this, 'block_edit_modal'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'breadcrumb_index' => array($this, 'block_breadcrumb_index'),
            'breadcrumb_list' => array($this, 'block_breadcrumb_list'),
            'breadcrumb_data' => array($this, 'block_breadcrumb_data'),
            'breadcrumb_action' => array($this, 'block_breadcrumb_action'),
            'back_button' => array($this, 'block_back_button'),
            'submit_button' => array($this, 'block_submit_button'),
            'secondary_actions_button' => array($this, 'block_secondary_actions_button'),
            'secondary_actions' => array($this, 'block_secondary_actions'),
            'delete_link' => array($this, 'block_delete_link'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('edit_form_class', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_actions', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('edit_standard', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('edit_modal', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('breadcrumb_index', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('breadcrumb_list', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('breadcrumb_data', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('breadcrumb_action', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('back_button', $context, $blocks);
        // line 118
        echo "
";
        // line 119
        $this->displayBlock('submit_button', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('secondary_actions_button', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('secondary_actions', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('delete_link', $context, $blocks);
    }

    // line 3
    public function block_edit_form_class($context, array $blocks = array())
    {
    }

    // line 5
    public function block_form_actions($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["backAction"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "option", array(0 => "allow_back"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "option", array(0 => "allow_back"), "method"),  !($context["isAjax"] ?? null))) : ( !($context["isAjax"] ?? null)));
        // line 7
        echo "    <div class=\"btn-group pull-right\">
        ";
        // line 8
        $this->displayBlock("back_button", $context, $blocks);
        echo "
        ";
        // line 9
        $this->displayBlock("submit_button", $context, $blocks);
        echo "
        ";
        // line 10
        if (((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? null), false)) : (false))) {
            // line 11
            echo "            ";
            $this->displayBlock("secondary_actions_button", $context, $blocks);
            echo "
        ";
        }
        // line 13
        echo "    </div>
";
    }

    // line 16
    public function block_edit_standard($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"edit-form ";
        $this->displayBlock("edit_form_class", $context, $blocks);
        echo "\">
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 19
        $this->displayBlock("form_actions", $context, $blocks);
        echo "
        ";
        // line 20
        $this->displayBlock("breadcrumb", $context, $blocks);
        echo "
        <div class=\"clear\"></div>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 23
        $this->displayBlock("form_actions", $context, $blocks);
        echo "
        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    // line 28
    public function block_edit_modal($context, array $blocks = array())
    {
        // line 29
        echo "    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            ";
        // line 31
        $context["utilities"] = $this->loadTemplate("CleverAgeEAVManagerLayoutBundle:Macros:utilities.html.twig", "@CleverAgeEAVManagerAdmin/Base/partials/edit.blocks.html.twig", 31);
        // line 32
        echo "            ";
        echo $context["utilities"]->macro_flash_messages();
        echo "
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            <div class=\"modal-body\">
                <div class=\"edit-form ";
        // line 35
        $this->displayBlock("edit_form_class", $context, $blocks);
        echo "\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                </div>
            </div>
            <div class=\"modal-footer\">
                ";
        // line 40
        $this->displayBlock("form_actions", $context, $blocks);
        echo "
            </div>
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    // line 47
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 48
        echo "    <ol class=\"breadcrumb pull-left\">
        ";
        // line 49
        $this->displayBlock("breadcrumb_index", $context, $blocks);
        echo "
        ";
        // line 50
        $this->displayBlock("breadcrumb_list", $context, $blocks);
        echo "
        ";
        // line 51
        $this->displayBlock("breadcrumb_data", $context, $blocks);
        echo "
        ";
        // line 52
        $this->displayBlock("breadcrumb_action", $context, $blocks);
        echo "
    </ol>
";
    }

    // line 56
    public function block_breadcrumb_index($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasAction", array(0 => "index"), "method")) {
            // line 58
            echo "        <li>
            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array(($context["admin"] ?? null), "index")), "html", null, true);
            echo "\">
                ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (("admin." . twig_get_attribute($this->env, $this->getSourceContext(),             // line 61
($context["admin"] ?? null), "code", array())) . "index.title"), 1 => "admin.index.title"), array(), $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(twig_get_attribute($this->env, $this->getSourceContext(),             // line 63
($context["admin"] ?? null), "code", array()))), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
    }

    // line 69
    public function block_breadcrumb_list($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasAction", array(0 => "list"), "method")) {
            // line 71
            echo "        <li>
            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, (((array_key_exists("listPath", $context) && ($context["listPath"] ?? null))) ? (($context["listPath"] ?? null)) : (call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array(($context["admin"] ?? null), "list")))), "html", null, true);
            echo "\">
                ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (("admin." . twig_get_attribute($this->env, $this->getSourceContext(),             // line 74
($context["admin"] ?? null), "code", array())) . "list.title"), 1 => "admin.list.title"), array(), "List"), "html", null, true);
            // line 76
            echo "
            </a>
        </li>
    ";
        }
    }

    // line 82
    public function block_breadcrumb_data($context, array $blocks = array())
    {
        // line 83
        echo "    ";
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasAction", array(0 => "edit"), "method") && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "currentAction", array()) != "create")) && array_key_exists("data", $context)) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()))) {
            // line 84
            echo "        <li>
            <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_entity_path')->getCallable(), array(($context["admin"] ?? null), ($context["data"] ?? null), "edit")), "html", null, true);
            echo "\">
                ";
            // line 86
            echo twig_escape_filter($this->env, twig_trim_filter(($context["data"] ?? null)), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
    }

    // line 92
    public function block_breadcrumb_action($context, array $blocks = array())
    {
        // line 93
        echo "    <li class=\"active\">
        ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (        // line 95
($context["admin_trans_key"] ?? null) . ".title"), 1 => (("admin.action." . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 96
($context["admin"] ?? null), "currentAction", array()), "code", array())) . ".title")), array(), $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 97
($context["admin"] ?? null), "currentAction", array()), "code", array()))), "html", null, true);
        echo "
    </li>
";
    }

    // line 101
    public function block_back_button($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        if ((array_key_exists("listPath", $context) && ($context["listPath"] ?? null))) {
            // line 103
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["listPath"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-default\"
           ";
            // line 104
            if ( !($context["backAction"] ?? null)) {
                echo "data-close-target=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\"";
            } elseif (($context["isModal"] ?? null)) {
                // line 105
                echo "            data-target-element=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
            ";
            // line 106
            if (($context["backAction"] ?? null)) {
                // line 107
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (($context["admin_trans_key"] ?? null) . "back.label"), 1 => "admin.action.back.label"), array(), "Back"), "html", null, true);
                echo "
            ";
            } else {
                // line 109
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (($context["admin_trans_key"] ?? null) . "close.label"), 1 => "admin.action.close.label"), array(), "Close"), "html", null, true);
                echo "
            ";
            }
            // line 111
            echo "        </a>
    ";
        } elseif (        // line 112
($context["isAjax"] ?? null)) {
            // line 113
            echo "        <a href=\"#\" data-close-target=\"";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-default\">
            ";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (($context["admin_trans_key"] ?? null) . "close.label"), 1 => "admin.action.close.label"), array(), "Close"), "html", null, true);
            echo "
        </a>
    ";
        }
    }

    // line 119
    public function block_submit_button($context, array $blocks = array())
    {
        // line 120
        echo "    <button type=\"submit\" class=\"btn btn-primary\">
        ";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (($context["admin_trans_key"] ?? null) . "submit.label"), 1 => "admin.action.submit.label"), array(), "Submit"), "html", null, true);
        echo "
    </button>
";
    }

    // line 125
    public function block_secondary_actions_button($context, array $blocks = array())
    {
        // line 126
        echo "    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-wrench\"></i> <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\">
        ";
        // line 130
        $this->displayBlock("secondary_actions", $context, $blocks);
        echo "
    </ul>
";
    }

    // line 134
    public function block_secondary_actions($context, array $blocks = array())
    {
        // line 135
        echo "    ";
        $this->displayBlock("delete_link", $context, $blocks);
        echo "
";
    }

    // line 138
    public function block_delete_link($context, array $blocks = array())
    {
        // line 139
        echo "    ";
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasAction", array(0 => "delete"), "method") && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "currentAction", array()) != "create")) && array_key_exists("data", $context)) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()))) {
            // line 140
            echo "        <li class=\"bg-danger\">
            <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_entity_path')->getCallable(), array(($context["admin"] ?? null), ($context["data"] ?? null), "delete")), "html", null, true);
            echo "\">
                <i class=\"fa fa-trash\"></i>
                ";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (($context["admin_trans_key"] ?? null) . "delete.label"), 1 => "admin.action.delete.label"), array(), "Delete"), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CleverAgeEAVManagerAdmin/Base/partials/edit.blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  439 => 143,  434 => 141,  431 => 140,  428 => 139,  425 => 138,  418 => 135,  415 => 134,  408 => 130,  402 => 126,  399 => 125,  392 => 121,  389 => 120,  386 => 119,  378 => 114,  373 => 113,  371 => 112,  368 => 111,  362 => 109,  356 => 107,  354 => 106,  347 => 105,  341 => 104,  336 => 103,  333 => 102,  330 => 101,  323 => 97,  322 => 96,  321 => 95,  320 => 94,  317 => 93,  314 => 92,  305 => 86,  301 => 85,  298 => 84,  295 => 83,  292 => 82,  284 => 76,  282 => 74,  281 => 73,  277 => 72,  274 => 71,  271 => 70,  268 => 69,  259 => 63,  258 => 61,  257 => 60,  253 => 59,  250 => 58,  247 => 57,  244 => 56,  237 => 52,  233 => 51,  229 => 50,  225 => 49,  222 => 48,  219 => 47,  211 => 42,  206 => 40,  199 => 36,  195 => 35,  190 => 33,  185 => 32,  183 => 31,  179 => 29,  176 => 28,  169 => 24,  165 => 23,  161 => 22,  156 => 20,  152 => 19,  148 => 18,  143 => 17,  140 => 16,  135 => 13,  129 => 11,  127 => 10,  123 => 9,  119 => 8,  116 => 7,  113 => 6,  110 => 5,  105 => 3,  101 => 138,  98 => 137,  96 => 134,  93 => 133,  91 => 125,  88 => 124,  86 => 119,  83 => 118,  81 => 101,  78 => 100,  76 => 92,  73 => 91,  71 => 82,  68 => 81,  66 => 69,  63 => 68,  61 => 56,  58 => 55,  56 => 47,  53 => 46,  51 => 28,  48 => 27,  46 => 16,  43 => 15,  41 => 5,  38 => 4,  36 => 3,  33 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CleverAgeEAVManagerAdmin/Base/partials/edit.blocks.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/AdminBundle/Resources/views/Base/partials/edit.blocks.html.twig");
    }
}
