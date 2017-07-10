<?php

/* @CleverAgeEAVManagerLayout/base.html.twig */
class __TwigTemplate_0cea35d2cbcbc294e485c69a832a0a7602cfbb885e0e4bd65dc826e42b53c087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_class' => array($this, 'block_body_class'),
            'main_container' => array($this, 'block_main_container'),
            'main_content' => array($this, 'block_main_content'),
            'tg_left' => array($this, 'block_tg_left'),
            'main_menu_home_link' => array($this, 'block_main_menu_home_link'),
            'user_menu' => array($this, 'block_user_menu'),
            'main_menu_application' => array($this, 'block_main_menu_application'),
            'process_menu' => array($this, 'block_process_menu'),
            'user_manager_menu' => array($this, 'block_user_manager_menu'),
            'tg_center' => array($this, 'block_tg_center'),
            'tg_right' => array($this, 'block_tg_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'additionnal_javascript' => array($this, 'block_additionnal_javascript'),
            'error_template' => array($this, 'block_error_template'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "locale", array()), "html", null, true);
        echo "\">
<head>
    ";
        // line 13
        $context["utilities"] = $this->loadTemplate("CleverAgeEAVManagerLayoutBundle:Macros:utilities.html.twig", "@CleverAgeEAVManagerLayout/base.html.twig", 13);
        // line 14
        echo "    ";
        $this->displayBlock('metas', $context, $blocks);
        // line 19
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "</head>

<body class=\"";
        // line 33
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
";
        // line 34
        $this->displayBlock('main_container', $context, $blocks);
        // line 123
        echo "
";
        // line 124
        $this->displayBlock('javascripts', $context, $blocks);
        // line 162
        $this->displayBlock('additionnal_javascript', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('error_template', $context, $blocks);
        // line 184
        echo "</body>
</html>
";
    }

    // line 14
    public function block_metas($context, array $blocks = array())
    {
        // line 15
        echo "        <meta charset=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "CleverAge/EAVManager";
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? ((" - " . ($context["title"] ?? null))) : ("")), "html", null, true);
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ae56577_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ae56577_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ae56577_select2_1.css");
            // line 28
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
        ";
            // asset "ae56577_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ae56577_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ae56577_bootstrap-datetimepicker.min_2.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
        ";
            // asset "ae56577_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ae56577_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ae56577_yeti_3.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
        ";
        } else {
            // asset "ae56577"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ae56577") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ae56577.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "    ";
    }

    // line 33
    public function block_body_class($context, array $blocks = array())
    {
    }

    // line 34
    public function block_main_container($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"container-fluid\">
        ";
        // line 36
        $this->displayBlock('main_content', $context, $blocks);
        // line 121
        echo "    </div>
";
    }

    // line 36
    public function block_main_content($context, array $blocks = array())
    {
        // line 37
        echo "            <div class=\"row\" id=\"main_content\">
                <div id=\"tg_left\" class=\"sidebar sidebar-inverse with-loader autoload\">";
        // line 39
        $this->displayBlock('tg_left', $context, $blocks);
        // line 113
        echo "</div>
                <div id=\"tg_center\" class=\"with-loader autoload\">
                    ";
        // line 115
        echo $context["utilities"]->macro_flash_messages();
        echo "
                    ";
        // line 116
        $this->displayBlock('tg_center', $context, $blocks);
        // line 117
        echo "                </div>
                <div id=\"tg_right\" class=\"with-loader autoload\">";
        // line 118
        $this->displayBlock('tg_right', $context, $blocks);
        echo "</div>
            </div>
        ";
    }

    // line 39
    public function block_tg_left($context, array $blocks = array())
    {
        // line 40
        echo "                        ";
        $this->displayBlock('main_menu_home_link', $context, $blocks);
        // line 43
        echo "                        <hr class=\"clear\">
                        ";
        // line 44
        $this->displayBlock('user_menu', $context, $blocks);
        // line 61
        echo "                        ";
        $this->displayBlock('main_menu_application', $context, $blocks);
        // line 112
        echo "                    ";
    }

    // line 40
    public function block_main_menu_home_link($context, array $blocks = array())
    {
        // line 41
        echo "                            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eavmanager_layout.dashboard");
        echo "\">CleverAge/EAVManager</a>
                        ";
    }

    // line 44
    public function block_user_menu($context, array $blocks = array())
    {
        // line 45
        echo "                            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())) {
            // line 46
            echo "                                <ul class=\"nav\">
                                    <li class=\"";
            // line 47
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "eavmanager_user.profile.edit")) {
                echo " active";
            }
            echo "\">
                                        <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eavmanager_user.profile.edit");
            echo "\">
                                            <i class=\"fa fa-user\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" title=\"logout\">
                                            <i class=\"fa fa-power-off\"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                                ";
            // line 58
            echo $context["utilities"]->macro_context_form();
            echo "
                            ";
        }
        // line 60
        echo "                        ";
    }

    // line 61
    public function block_main_menu_application($context, array $blocks = array())
    {
        // line 62
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DATA_MANAGER")) {
            // line 63
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('get_admins')->getCallable(), array()));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 64
                echo "                                    ";
                // line 65
                echo "                                    ";
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "option", array(0 => "hidden"), "method")) {
                    // line 66
                    echo "                                        ";
                    echo $context["utilities"]->macro_admin_family_nav($context["admin"], ((array_key_exists("family", $context)) ? (($context["family"] ?? null)) : ("")));
                    echo "
                                    ";
                }
                // line 68
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MEDIA_MANAGER")) {
                // line 70
                echo "                                    ";
                echo $context["utilities"]->macro_admin_family_nav($this->env->getExtension('Sidus\AdminBundle\Twig\AdminExtension')->getAdmin("media"), ((array_key_exists("family", $context)) ? (($context["family"] ?? null)) : ("")));
                echo "
                                ";
            }
            // line 72
            echo "                            ";
        }
        // line 73
        echo "                            ";
        $this->displayBlock('process_menu', $context, $blocks);
        // line 92
        echo "                            ";
        $this->displayBlock('user_manager_menu', $context, $blocks);
        // line 111
        echo "                        ";
    }

    // line 73
    public function block_process_menu($context, array $blocks = array())
    {
        // line 74
        echo "                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROCESS_MANAGER")) {
            // line 75
            echo "                                    ";
            $context["admin"] = $this->env->getExtension('Sidus\AdminBundle\Twig\AdminExtension')->getAdmin("process");
            // line 76
            echo "                                    <a class=\"admin-nav\" data-toggle=\"collapse\" href=\"#admin_process\">
                                        <h5>
                                            <i class=\"fa fa-tasks\"></i>
                                            ";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.process.title"), "html", null, true);
            echo "
                                            <span class=\"pull-right\"><span class=\"caret\"></span></span>
                                        </h5>
                                    </a>
                                    <div id=\"admin_process\"
                                         class=\"collapse";
            // line 84
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "method")) {
                echo " in";
            }
            echo "\">
                                        <ul class=\"nav nav-pills nav-stacked\">
                                            ";
            // line 86
            echo $context["utilities"]->macro_admin_menu_icon_link("process", null, "process", "list");
            echo "
                                            ";
            // line 87
            echo $context["utilities"]->macro_admin_menu_icon_link("task", null, "task", "list");
            echo "
                                        </ul>
                                    </div>
                                ";
        }
        // line 91
        echo "                            ";
    }

    // line 92
    public function block_user_manager_menu($context, array $blocks = array())
    {
        // line 93
        echo "                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_MANAGER")) {
            // line 94
            echo "                                    ";
            $context["admin"] = $this->env->getExtension('Sidus\AdminBundle\Twig\AdminExtension')->getAdmin("user");
            // line 95
            echo "                                    <a class=\"admin-nav\" data-toggle=\"collapse\" href=\"#admin_users\">
                                        <h5>
                                            <i class=\"fa fa-expeditedssl\"></i>
                                            ";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_groups.title"), "html", null, true);
            echo "
                                            <span class=\"pull-right\"><span class=\"caret\"></span></span>
                                        </h5>
                                    </a>
                                    <div id=\"admin_users\"
                                         class=\"collapse";
            // line 103
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasRoute", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "method")) {
                echo " in";
            }
            echo "\">
                                        <ul class=\"nav nav-pills nav-stacked\">
                                            ";
            // line 105
            echo $context["utilities"]->macro_admin_menu_icon_link("user", null, "user", "list");
            echo "
                                            ";
            // line 106
            echo $context["utilities"]->macro_admin_menu_icon_link("users", null, "group", "list");
            echo "
                                        </ul>
                                    </div>
                                ";
        }
        // line 110
        echo "                            ";
    }

    // line 116
    public function block_tg_center($context, array $blocks = array())
    {
    }

    // line 118
    public function block_tg_right($context, array $blocks = array())
    {
    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        // line 126
        echo "    ";
        // line 127
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "588500d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_jquery.min_1.js");
            // line 157
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_jquery-ui.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_router_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_bootstrap_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_mopabootstrap-subnav_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_bootstrap-datetimepicker_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_bootstrap-datetimepicker.fr_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_jquery.fileupload_8.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_jquery.fileupload-jquery-ui_9.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_jquery.iframe-transport_10.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_bootstrap.collection_11.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_sortable.collection_12.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_jquery.fileupload.sidus_13.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_select2.min_14.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_fr_15.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_autocomplete.selector_16.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_autocomplete.combo.selector_17.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_17") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_init.datepickers_18.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_18") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_edit.inline_19.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_19") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_automodal_20.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_20") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_input.picker_21.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_21") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_datagrid.updater_22.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_22") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_autoclose_23.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_23") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_ajax.navigation_24.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_24") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_navigation_25.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_25") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_init.document_26.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_26") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_navigation.lock_27.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "588500d_27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d_27") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d_media.browser_28.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "588500d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_588500d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/588500d.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 159
        echo "    <script src=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    ";
        // line 160
        echo $this->env->getExtension('Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension')->tinymceInit();
        echo "
";
    }

    // line 162
    public function block_additionnal_javascript($context, array $blocks = array())
    {
    }

    // line 164
    public function block_error_template($context, array $blocks = array())
    {
        // line 165
        echo "<div id=\"error-template\" class=\"hidden\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title text-danger\">
                    <i class=\"fa fa-exclamation-triangle\"></i> ";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("error.template.header"), "html", null, true);
        echo "
                </h4>
            </div>
            <div class=\"modal-body\">
                <h4>";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("error.template.title"), "html", null, true);
        echo "</h4>
                <p>";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("error.template.message");
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CleverAgeEAVManagerLayout/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 178,  634 => 177,  627 => 173,  617 => 165,  614 => 164,  609 => 162,  603 => 160,  598 => 159,  422 => 157,  417 => 127,  415 => 126,  413 => 125,  410 => 124,  405 => 118,  400 => 116,  396 => 110,  389 => 106,  385 => 105,  378 => 103,  370 => 98,  365 => 95,  362 => 94,  359 => 93,  356 => 92,  352 => 91,  345 => 87,  341 => 86,  334 => 84,  326 => 79,  321 => 76,  318 => 75,  315 => 74,  312 => 73,  308 => 111,  305 => 92,  302 => 73,  299 => 72,  293 => 70,  290 => 69,  284 => 68,  278 => 66,  275 => 65,  273 => 64,  268 => 63,  265 => 62,  262 => 61,  258 => 60,  253 => 58,  245 => 53,  238 => 49,  234 => 48,  228 => 47,  225 => 46,  222 => 45,  219 => 44,  212 => 41,  209 => 40,  205 => 112,  202 => 61,  200 => 44,  197 => 43,  194 => 40,  191 => 39,  184 => 118,  181 => 117,  179 => 116,  175 => 115,  171 => 113,  169 => 39,  166 => 37,  163 => 36,  158 => 121,  156 => 36,  153 => 35,  150 => 34,  145 => 33,  141 => 30,  115 => 28,  110 => 23,  108 => 22,  106 => 21,  103 => 20,  96 => 19,  87 => 15,  84 => 14,  78 => 184,  76 => 164,  73 => 163,  71 => 162,  69 => 124,  66 => 123,  64 => 34,  60 => 33,  56 => 31,  54 => 20,  49 => 19,  46 => 14,  44 => 13,  39 => 11,  36 => 10,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CleverAgeEAVManagerLayout/base.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/LayoutBundle/Resources/views/base.html.twig");
    }
}
