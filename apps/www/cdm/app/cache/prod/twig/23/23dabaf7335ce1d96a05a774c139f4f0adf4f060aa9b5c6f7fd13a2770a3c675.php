<?php

/* @CleverAgeEAVManagerAdmin/EAVData/partials/edit.blocks.html.twig */
class __TwigTemplate_dc0c4d165abf1d711fe93f7ad55db08a25ebf39e9ecd1c931fbe6a827399a811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@CleverAgeEAVManagerAdmin/Base/partials/edit.blocks.html.twig", "@CleverAgeEAVManagerAdmin/EAVData/partials/edit.blocks.html.twig", 11);
        // line 11
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@CleverAgeEAVManagerAdmin/Base/partials/edit.blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["breadcrumb_list"])) {
            throw new Twig_Error_Runtime(sprintf('Block "breadcrumb_list" is not defined in trait "@CleverAgeEAVManagerAdmin/Base/partials/edit.blocks.html.twig".'));
        }

        $_trait_0_blocks["parent_breadcrumb_list"] = $_trait_0_blocks["breadcrumb_list"]; unset($_trait_0_blocks["breadcrumb_list"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'breadcrumb_list' => array($this, 'block_breadcrumb_list'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('breadcrumb_list', $context, $blocks);
    }

    public function block_breadcrumb_list($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((array_key_exists("family", $context) && ($context["family"] ?? null))) {
            // line 3
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "hasAction", array(0 => "list"), "method")) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, (((array_key_exists("listPath", $context) && ($context["listPath"] ?? null))) ? (($context["listPath"] ?? null)) : (call_user_func_array($this->env->getFunction('admin_path')->getCallable(), array(($context["admin"] ?? null), "list", array("familyCode" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["family"] ?? null), "code", array())))))), "html", null, true);
                echo "\">
                    ";
                // line 6
                echo twig_escape_filter($this->env, ($context["family"] ?? null), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            // line 12
            echo "        ";
            $this->displayBlock("parent_breadcrumb_list", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CleverAgeEAVManagerAdmin/EAVData/partials/edit.blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  67 => 11,  64 => 10,  57 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  38 => 1,  14 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CleverAgeEAVManagerAdmin/EAVData/partials/edit.blocks.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/AdminBundle/Resources/views/EAVData/partials/edit.blocks.html.twig");
    }
}
