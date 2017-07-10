<?php

/* CleverAgeEAVManagerAdminBundle:EAVData:list.html.twig */
class __TwigTemplate_7f593e0960a0bd9622649243f1244e6cdeb3f2ff0412dfbdc5ea4b9443825218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CleverAgeEAVManagerAdminBundle:Base:list.html.twig", "CleverAgeEAVManagerAdminBundle:EAVData:list.html.twig", 1);
        $_trait_0 = $this->loadTemplate("@CleverAgeEAVManagerAdmin/Base/partials/list.blocks.html.twig", "CleverAgeEAVManagerAdminBundle:EAVData:list.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@CleverAgeEAVManagerAdmin/Base/partials/list.blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@CleverAgeEAVManagerAdmin/EAVData/partials/list.blocks.html.twig", "CleverAgeEAVManagerAdminBundle:EAVData:list.html.twig", 5);
        // line 5
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@CleverAgeEAVManagerAdmin/EAVData/partials/list.blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'tg_center' => array($this, 'block_tg_center'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "CleverAgeEAVManagerAdminBundle:Base:list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_tg_center($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        if (($context["isModal"] ?? null)) {
            // line 7
            echo "        ";
            $this->displayBlock("list_modal", $context, $blocks);
            echo "
    ";
        } else {
            // line 9
            echo "        <h3>";
            $this->displayBlock("list_title", $context, $blocks);
            echo "</h3>
        <hr>
        ";
            // line 11
            $this->displayBlock("datagrid", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerAdminBundle:EAVData:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  67 => 9,  61 => 7,  58 => 6,  56 => 5,  54 => 4,  51 => 3,  42 => 1,  21 => 5,  14 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerAdminBundle:EAVData:list.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/AdminBundle/Resources/views/EAVData/list.html.twig");
    }
}
