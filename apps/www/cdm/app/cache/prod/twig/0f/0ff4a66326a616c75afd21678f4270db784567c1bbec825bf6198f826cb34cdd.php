<?php

/* CleverAgeEAVManagerAdminBundle:Base:list.html.twig */
class __TwigTemplate_797425648c8c938d86248fa022fd8d4af06da627cf6c696d5361db805d1a1b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("@CleverAgeEAVManagerAdmin/Base/partials/list.blocks.html.twig", "CleverAgeEAVManagerAdminBundle:Base:list.html.twig", 8);
        // line 8
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@CleverAgeEAVManagerAdmin/Base/partials/list.blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'tg_center' => array($this, 'block_tg_center'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((        // line 2
($context["isAjax"] ?? null)) ? ("CleverAgeEAVManagerLayoutBundle::empty_layout.html.twig") : (((        // line 3
array_key_exists("baseTemplate", $context)) ? (_twig_default_filter(($context["baseTemplate"] ?? null), "CleverAgeEAVManagerLayoutBundle::layout.html.twig")) : ("CleverAgeEAVManagerLayoutBundle::layout.html.twig")))), "CleverAgeEAVManagerAdminBundle:Base:list.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["baseTemplate"] = ((array_key_exists("baseTemplate", $context)) ? (_twig_default_filter(($context["baseTemplate"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "baseTemplate", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "baseTemplate", array())));
        // line 5
        $context["admin_trans_key"] = (((("admin." . twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array())) . ".") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "currentAction", array()), "code", array())) . ".");
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_tg_center($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        if (($context["isModal"] ?? null)) {
            // line 10
            echo "        ";
            $this->displayBlock("list_modal", $context, $blocks);
            echo "
    ";
        } else {
            // line 12
            echo "        <h3>";
            $this->displayBlock("list_title", $context, $blocks);
            echo "</h3>
        <hr>
        ";
            // line 14
            $this->displayBlock("datagrid", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerAdminBundle:Base:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  60 => 12,  54 => 10,  51 => 9,  49 => 8,  46 => 7,  42 => 3,  40 => 5,  38 => 1,  32 => 3,  31 => 2,  30 => 3,  12 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerAdminBundle:Base:list.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/AdminBundle/Resources/views/Base/list.html.twig");
    }
}
