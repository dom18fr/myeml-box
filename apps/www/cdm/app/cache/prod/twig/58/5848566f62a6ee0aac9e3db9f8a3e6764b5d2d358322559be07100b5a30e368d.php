<?php

/* @CleverAgeEAVManagerAdmin/Base/edit.html.twig */
class __TwigTemplate_8c2655e43325834f66943f3bf2d52b803f2f549d21fae2026b706f102c0f910e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("@CleverAgeEAVManagerAdmin/Base/partials/edit.blocks.html.twig", "@CleverAgeEAVManagerAdmin/Base/edit.html.twig", 18);
        // line 18
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@CleverAgeEAVManagerAdmin/Base/partials/edit.blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'flash_messages' => array($this, 'block_flash_messages'),
                'tg_center' => array($this, 'block_tg_center'),
                'additionnal_javascript' => array($this, 'block_additionnal_javascript'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((        // line 2
($context["isAjax"] ?? null)) ? ("CleverAgeEAVManagerLayoutBundle::empty_layout.html.twig") : (((        // line 3
array_key_exists("baseTemplate", $context)) ? (_twig_default_filter(($context["baseTemplate"] ?? null), "CleverAgeEAVManagerAdminBundle:Base:list.html.twig")) : ("CleverAgeEAVManagerAdminBundle:Base:list.html.twig")))), "@CleverAgeEAVManagerAdmin/Base/edit.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["baseTemplate"] = ((array_key_exists("baseTemplate", $context)) ? (_twig_default_filter(($context["baseTemplate"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "baseTemplate", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "baseTemplate", array())));
        // line 5
        $context["utilities"] = $this->loadTemplate("CleverAgeEAVManagerLayoutBundle:Macros:utilities.html.twig", "@CleverAgeEAVManagerAdmin/Base/edit.html.twig", 5);
        // line 7
        $context["admin_trans_key"] = (((("admin." . twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array())) . ".") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "currentAction", array()), "code", array())) . ".");
        // line 9
        if ((($context["isAjax"] ?? null) && array_key_exists("form", $context))) {
            // line 10
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => "CleverAgeEAVManagerLayoutBundle:Form:ajax_theme.html.twig"));
        }
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_flash_messages($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ( !($context["isModal"] ?? null)) {
            echo $context["utilities"]->macro_flash_messages();
        }
    }

    // line 17
    public function block_tg_center($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        if (($context["isModal"] ?? null)) {
            // line 20
            echo "        ";
            $this->displayBlock("edit_modal", $context, $blocks);
            echo "
    ";
        } else {
            // line 22
            echo "        ";
            $this->displayBlock("edit_standard", $context, $blocks);
            echo "
    ";
        }
    }

    // line 26
    public function block_additionnal_javascript($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->displayParentBlock("additionnal_javascript", $context, $blocks);
        echo "
    ";
        // line 28
        if ((array_key_exists("data", $context) && ($context["data"] ?? null))) {
            // line 29
            echo "        ";
            echo $context["utilities"]->macro_triggerDataEvent(($context["admin"] ?? null), ($context["data"] ?? null), ((($context["data"] ?? null)) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array())) : ("")), ($context["success"] ?? null), ($context["target"] ?? null));
            echo "
    ";
        }
        // line 31
        echo "    ";
        echo $context["utilities"]->macro_lock_form(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "attr", array()), "id", array()), ($context["target"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CleverAgeEAVManagerAdmin/Base/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  97 => 29,  95 => 28,  90 => 27,  87 => 26,  79 => 22,  73 => 20,  70 => 19,  68 => 18,  65 => 17,  58 => 14,  55 => 13,  51 => 3,  48 => 10,  46 => 9,  44 => 7,  42 => 5,  40 => 1,  34 => 3,  33 => 2,  32 => 3,  12 => 18,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CleverAgeEAVManagerAdmin/Base/edit.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/AdminBundle/Resources/views/Base/edit.html.twig");
    }
}
