<?php

/* CleverAgeEAVManagerLayoutBundle::empty_layout.html.twig */
class __TwigTemplate_34e478831d2fcaf52a68b5108b5fe80dc6e1b3a28f31567ea4d6a5ea4fce4ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tg_left' => array($this, 'block_tg_left'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'tg_center' => array($this, 'block_tg_center'),
            'tg_right' => array($this, 'block_tg_right'),
            'additionnal_javascript' => array($this, 'block_additionnal_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["utilities"] = $this->loadTemplate("CleverAgeEAVManagerLayoutBundle:Macros:utilities.html.twig", "CleverAgeEAVManagerLayoutBundle::empty_layout.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (        $this->hasBlock("title", $context, $blocks)) {
            // line 4
            echo "    ";
            $context["title"] =             $this->renderBlock("title", $context, $blocks);
        } else {
            // line 6
            echo "    ";
            $context["title"] =             $this->loadTemplate("CleverAgeEAVManagerLayoutBundle::layout.html.twig", "CleverAgeEAVManagerLayoutBundle::empty_layout.html.twig", 6)->renderBlock("title", $context);
        }
        // line 8
        echo "<h2 class=\"hidden ajax-title\">";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>

";
        // line 10
        $this->displayBlock('tg_left', $context, $blocks);
        // line 11
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 12
        $this->displayBlock('tg_center', $context, $blocks);
        // line 13
        $this->displayBlock('tg_right', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('additionnal_javascript', $context, $blocks);
    }

    // line 10
    public function block_tg_left($context, array $blocks = array())
    {
    }

    // line 11
    public function block_flash_messages($context, array $blocks = array())
    {
        echo $context["utilities"]->macro_flash_messages();
    }

    // line 12
    public function block_tg_center($context, array $blocks = array())
    {
    }

    // line 13
    public function block_tg_right($context, array $blocks = array())
    {
    }

    // line 15
    public function block_additionnal_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerLayoutBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  76 => 13,  71 => 12,  65 => 11,  60 => 10,  56 => 15,  53 => 14,  51 => 13,  49 => 12,  47 => 11,  45 => 10,  39 => 8,  35 => 6,  31 => 4,  29 => 3,  26 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerLayoutBundle::empty_layout.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/LayoutBundle/Resources/views/empty_layout.html.twig");
    }
}
