<?php

/* CleverAgeEAVManagerLayoutBundle:Form:form.fields.html.twig */
class __TwigTemplate_bc864365b402bf46f061128b1a5a91efce8b407c02d5d7f0a2981d3cca6da4d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SidusEAVVariantBundle:Form:fields.html.twig", "CleverAgeEAVManagerLayoutBundle:Form:form.fields.html.twig", 1);
        $_trait_0 = $this->loadTemplate("@CleverAgeEAVManagerAdmin/Asset/partials/media.preview.html.twig", "CleverAgeEAVManagerLayoutBundle:Form:form.fields.html.twig", 104);
        // line 104
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@CleverAgeEAVManagerAdmin/Asset/partials/media.preview.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'sidus_variant_collection_widget' => array($this, 'block_sidus_variant_collection_widget'),
                'eavmanager_image_widget' => array($this, 'block_eavmanager_image_widget'),
                'form_errors' => array($this, 'block_form_errors'),
                'eavmanager_media_browser_widget' => array($this, 'block_eavmanager_media_browser_widget'),
                'role_hierarchy_widget' => array($this, 'block_role_hierarchy_widget'),
                'family_permission_widget' => array($this, 'block_family_permission_widget'),
                'sidus_simple_data_selector_widget' => array($this, 'block_sidus_simple_data_selector_widget'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "SidusEAVVariantBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_sidus_variant_collection_widget($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["target"] = ((array_key_exists("target", $context)) ? (($context["target"] ?? null)) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "target"), "method")));
        // line 6
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array())) {
            // line 9
            echo "                ";
            if ((twig_length_filter($this->env, ($context["variant_families"] ?? null)) == 1)) {
                // line 10
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array("variant", "create", twig_array_merge(($context["base_route_parameters"] ?? null), array("familyCode" => twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, ($context["variant_families"] ?? null)), "code", array()))))), "html", null, true);
                echo "\"
                       class=\"btn btn-primary\"
                       title=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.create.title"), "html", null, true);
                echo "\" data-target-element=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.create.label"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 16
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array("variant", "select", twig_array_merge(($context["base_route_parameters"] ?? null), array("familyCode" => twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, ($context["variant_families"] ?? null)), "code", array()))))), "html", null, true);
                echo "\"
                       class=\"btn btn-primary\"
                       title=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.select.title"), "html", null, true);
                echo "\" data-target-element=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.select.label"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 22
            echo "                &nbsp;
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.text.allowed_variants"), "html", null, true);
            echo "
                ";
            // line 24
            echo twig_escape_filter($this->env, twig_join_filter(($context["variant_families"] ?? null), ", "), "html", null, true);
            echo "
            ";
        } else {
            // line 26
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.text.create_first"), "html", null, true);
            echo "
            ";
        }
        // line 28
        echo "        </div>
        ";
        // line 29
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array())) {
            // line 30
            echo "            <ul class=\"list-group\">
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["variants"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                // line 32
                echo "                    <li class=\"list-group-item\">
                        ";
                // line 33
                echo twig_escape_filter($this->env, $context["variant"], "html", null, true);
                echo " <span class=\"text-muted\">(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["variant"], "family", array()), "html", null, true);
                echo ")</span>
                        <div class=\"btn-group pull-right\">
                            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_entity_path')->getCallable(), array("variant", $context["variant"], "edit", ($context["base_route_parameters"] ?? null))), "html", null, true);
                echo "\"
                               class=\"btn btn-default\" title=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.edit.title"), "html", null, true);
                echo "\"
                               data-target-element=\"";
                // line 37
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                                <i class=\"fa fa-edit\"></i>
                            </a>
                            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_entity_path')->getCallable(), array("variant", $context["variant"], "delete", ($context["base_route_parameters"] ?? null))), "html", null, true);
                echo "\"
                               class=\"btn btn-danger\" title=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.delete.title"), "html", null, true);
                echo "\"
                               data-target-element=\"";
                // line 42
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                                <i class=\"fa fa-trash\"></i>
                            </a>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </ul>
        ";
        }
        // line 50
        echo "    </div>
";
    }

    // line 53
    public function block_eavmanager_image_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        if (($context["data"] ?? null)) {
            // line 56
            echo "        ";
            $context["image"] = ($context["data"] ?? null);
            // line 57
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()), "thumbnail"), "html", null, true);
            echo "\"
             class=\"pull-right img-thumbnail\" ";
            // line 58
            echo $this->env->getExtension('CleverAge\EAVManager\AssetBundle\Twig\MediaExtension')->getImageSizeAttrs(($context["image"] ?? null), "thumbnail");
            echo ">
    ";
        }
        // line 60
        echo "    <div class=\"well well-sm pull-left\">
        ";
        // line 61
        $this->displayBlock("sidus_resource_widget", $context, $blocks);
        echo "
        ";
        // line 62
        if ((array_key_exists("image", $context) && ($context["image"] ?? null))) {
            // line 63
            echo "            <hr class=\"hr-sm\">
            <dl class=\"no-margin-bottom\">
                <dt>Dernière modification :</dt>
                <dd>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "fileModifiedAt", array())), "html", null, true);
            echo "</dd>
                <dt>Taille du fichier :</dt>
                <dd>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('CleverAge\EAVManager\AssetBundle\Twig\MediaExtension')->formatFileSize(twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "fileSize", array())), "html", null, true);
            echo "</dd>
                <dt>Type de fichier :</dt>
                <dd>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "mimeType", array()), "html", null, true);
            echo "</dd>
            </dl>
        ";
        }
        // line 73
        echo "    </div>
";
    }

    // line 77
    public function block_form_errors($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        ob_start();
        // line 79
        echo "        ";
        if (($context["error_delay"] ?? null)) {
            // line 80
            echo "            ";
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
                // line 81
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) == 1)) {
                    // line 82
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "set", array(0 => "errors", 1 => ($context["errors"] ?? null)), "method")) {
                    }
                    // line 83
                    echo "                ";
                }
                // line 84
                echo "            ";
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
            // line 85
            echo "        ";
        } else {
            // line 86
            echo "            ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 87
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()) == null)) {
                    // line 88
                    echo "                    ";
                    $context["__internal_b84fee1669a92dff43db825acf921e813de8fc43ef7d3210e044b209d28824e2"] = $this->loadTemplate("MopaBootstrapBundle::flash.html.twig", "CleverAgeEAVManagerLayoutBundle:Form:form.fields.html.twig", 88);
                    // line 89
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 90
                        echo "                        ";
                        echo $context["__internal_b84fee1669a92dff43db825acf921e813de8fc43ef7d3210e044b209d28824e2"]->macro_flash("danger", twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()));
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "                ";
                } else {
                    // line 93
                    echo "                    <span class=\"help-";
                    $this->displayBlock("error_type", $context, $blocks);
                    echo "\">
            ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 95
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array())), "html", null, true);
                        echo " <br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "            </span>
                ";
                }
                // line 99
                echo "            ";
            }
            // line 100
            echo "        ";
        }
        // line 101
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 105
    public function block_eavmanager_media_browser_widget($context, array $blocks = array())
    {
        // line 106
        echo "    <div class=\"media-browser\">
        <input type=\"hidden\" name=\"";
        // line 107
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"
               id=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" ";
        if ((array_key_exists("value", $context) && ($context["value"] ?? null))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 109
        if (($context["disabled"] ?? null)) {
            // line 110
            echo "            <div class=\"pull-left btn-group-vertical\">
                <span class=\"btn btn-default disabled\" title=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.media.select.disabled"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-image\"></i> ";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.media.select.disabled"), "html", null, true);
            echo "
                </span>
            </div>
        ";
        } else {
            // line 116
            echo "            <div class=\"pull-left btn-group-vertical\">
                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allowed_families"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["family"]) {
                // line 118
                echo "                    ";
                $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.media.select.label", array("%family%" => twig_get_attribute($this->env, $this->getSourceContext(), $context["family"], "label", array())));
                // line 119
                echo "                    <a data-href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array("media_browser", "list", array("familyCode" => twig_get_attribute($this->env, $this->getSourceContext(), $context["family"], "code", array())))), "html", null, true);
                echo "\"
                       type=\"button\" class=\"btn btn-primary\" title=\"";
                // line 120
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "\" data-auto-modal=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\"
                       data-media-input-id=\"";
                // line 121
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" data-target-element=\"#";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                        <i class=\"fa fa-image\"></i> ";
                // line 122
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['family'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                <a href=\"javascript:void(0)\" class=\"btn btn-warning media-detach\">
                    <i class=\"fa fa-close\"></i> ";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.media.detach.label"), "html", null, true);
            echo "
                </a>
            </div>
        ";
        }
        // line 130
        echo "        <div class=\"pull-left media-preview\">
            ";
        // line 131
        if (($context["eavData"] ?? null)) {
            // line 132
            echo "                ";
            $context["result"] = ($context["eavData"] ?? null);
            // line 133
            echo "                ";
            $this->displayBlock("media_preview", $context, $blocks);
            echo "
            ";
        }
        // line 135
        echo "        </div>
        <div class=\"clear\"></div>
    </div>
";
    }

    // line 140
    public function block_role_hierarchy_widget($context, array $blocks = array())
    {
        // line 141
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "hasRole", array(), "any", true, true)) {
            // line 142
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "hasRole", array()), 'widget');
            echo "
        <div class=\"col-lg-offset-1\">
            ";
            // line 144
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
        </div>
    ";
        } else {
            // line 147
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
    ";
        }
    }

    // line 151
    public function block_family_permission_widget($context, array $blocks = array())
    {
        // line 152
        echo "    <div class=\"row\">
        <div class=\"col-sm-3\">
            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "family", array()), 'widget');
        echo "
        </div>
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 157
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["permission"], "rendered", array())) {
                // line 158
                echo "                <div class=\"col-sm-1\">
                    ";
                // line 159
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["permission"], 'widget');
                echo "
                </div>
            ";
            }
            // line 162
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "    </div>
";
    }

    // line 166
    public function block_sidus_simple_data_selector_widget($context, array $blocks = array())
    {
        // line 167
        echo "    ";
        if ((($context["allow_add"] ?? null) || ($context["allow_edit"] ?? null))) {
            // line 168
            echo "        <div class=\"input-group\">
            ";
            // line 169
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            ";
            // line 170
            if (($context["allow_edit"] ?? null)) {
                // line 171
                echo "                ";
                // line 172
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array(($context["admin"] ?? null), "editInline", array("id" => "__ID__"))), "html", null, true);
                echo "\"
                   class=\"input-group-addon btn disabled\" data-target-element=\"#";
                // line 173
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\"
                   data-auto-modal=\"";
                // line 174
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\" data-input-id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" data-edit-in-place=\"";
                echo twig_escape_filter($this->env, ($context["admin"] ?? null), "html", null, true);
                echo "\">
                    <i class=\"fa fa-edit\"></i> ";
                // line 175
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.action.edit.label"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 178
            echo "            ";
            if (($context["allow_add"] ?? null)) {
                // line 179
                echo "                ";
                if ((twig_length_filter($this->env, ($context["allowed_families"] ?? null)) == 1)) {
                    // line 180
                    echo "                    ";
                    $context["family"] = twig_first($this->env, ($context["allowed_families"] ?? null));
                    // line 181
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array(($context["admin"] ?? null), ($context["action"] ?? null), array("familyCode" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["family"] ?? null), "code", array())))), "html", null, true);
                    echo "\"
                       class=\"input-group-addon btn\" data-target-element=\"#";
                    // line 182
                    echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                    echo "\"
                       data-auto-modal=\"";
                    // line 183
                    echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                    echo "\" data-input-id=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-plus\"></i> Create
                    </a>
                ";
                } else {
                    // line 187
                    echo "                    <div class=\"dropdown input-group-addon\">
                        <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-plus\"></i> ";
                    // line 189
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.action.create.label"), "html", null, true);
                    echo "
                        </button>
                        <ul class=\"dropdown-menu\">
                            ";
                    // line 192
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["allowed_families"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["family"]) {
                        // line 193
                        echo "                                <li>
                                    <a href=\"";
                        // line 194
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array(($context["admin"] ?? null), ($context["action"] ?? null), array("familyCode" => twig_get_attribute($this->env, $this->getSourceContext(), $context["family"], "code", array())))), "html", null, true);
                        echo "\"
                                       data-target-element=\"#";
                        // line 195
                        echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                        echo "\"
                                       data-auto-modal=\"";
                        // line 196
                        echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                        echo "\" data-input-id=\"";
                        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                        echo "\">
                                        ";
                        // line 197
                        echo twig_escape_filter($this->env, $context["family"], "html", null, true);
                        echo "
                                    </a>
                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['family'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 201
                    echo "                        </ul>
                    </div>
                ";
                }
                // line 204
                echo "            ";
            }
            // line 205
            echo "        </div>
    ";
        } else {
            // line 207
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerLayoutBundle:Form:form.fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 207,  634 => 205,  631 => 204,  626 => 201,  616 => 197,  610 => 196,  606 => 195,  602 => 194,  599 => 193,  595 => 192,  589 => 189,  585 => 187,  576 => 183,  572 => 182,  567 => 181,  564 => 180,  561 => 179,  558 => 178,  552 => 175,  544 => 174,  540 => 173,  535 => 172,  533 => 171,  531 => 170,  527 => 169,  524 => 168,  521 => 167,  518 => 166,  513 => 163,  507 => 162,  501 => 159,  498 => 158,  495 => 157,  491 => 156,  486 => 154,  482 => 152,  479 => 151,  471 => 147,  465 => 144,  459 => 142,  456 => 141,  453 => 140,  446 => 135,  440 => 133,  437 => 132,  435 => 131,  432 => 130,  425 => 126,  422 => 125,  413 => 122,  407 => 121,  401 => 120,  396 => 119,  393 => 118,  389 => 117,  386 => 116,  379 => 112,  375 => 111,  372 => 110,  370 => 109,  360 => 108,  356 => 107,  353 => 106,  350 => 105,  345 => 101,  342 => 100,  339 => 99,  335 => 97,  326 => 95,  322 => 94,  317 => 93,  314 => 92,  305 => 90,  300 => 89,  297 => 88,  294 => 87,  291 => 86,  288 => 85,  274 => 84,  271 => 83,  267 => 82,  264 => 81,  246 => 80,  243 => 79,  240 => 78,  237 => 77,  232 => 73,  226 => 70,  221 => 68,  216 => 66,  211 => 63,  209 => 62,  205 => 61,  202 => 60,  197 => 58,  192 => 57,  189 => 56,  186 => 55,  184 => 54,  181 => 53,  176 => 50,  172 => 48,  160 => 42,  156 => 41,  152 => 40,  146 => 37,  142 => 36,  138 => 35,  131 => 33,  128 => 32,  124 => 31,  121 => 30,  119 => 29,  116 => 28,  110 => 26,  105 => 24,  101 => 23,  98 => 22,  92 => 19,  86 => 18,  80 => 16,  74 => 13,  68 => 12,  62 => 10,  59 => 9,  57 => 8,  53 => 6,  50 => 5,  47 => 4,  38 => 1,  14 => 104,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerLayoutBundle:Form:form.fields.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/LayoutBundle/Resources/views/Form/form.fields.html.twig");
    }
}
