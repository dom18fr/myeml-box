<?php

/* @CleverAgeEAVManagerUser/base.html.twig */
class __TwigTemplate_27f3893d08a6a802845a0a7bf9d99b14db2bd524a86418d2a4970dd204dc1733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CleverAgeEAVManagerLayoutBundle::layout.html.twig", "@CleverAgeEAVManagerUser/base.html.twig", 1);
        $this->blocks = array(
            'main_content' => array($this, 'block_main_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CleverAgeEAVManagerLayoutBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["utilities"] = $this->loadTemplate("CleverAgeEAVManagerLayoutBundle:Macros:utilities.html.twig", "@CleverAgeEAVManagerUser/base.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
    ";
        // line 7
        echo $context["utilities"]->macro_flash_messages();
        echo "
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <!--[if lt IE 8]>
            ";
        // line 11
        $this->loadTemplate("CleverAgeEAVManagerUserBundle:Obsolete:browser_update.html.twig", "@CleverAgeEAVManagerUser/base.html.twig", 11)->display($context);
        // line 12
        echo "            <![endif]-->
            ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@CleverAgeEAVManagerUser/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 14,  52 => 13,  49 => 12,  47 => 11,  40 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CleverAgeEAVManagerUser/base.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/UserBundle/Resources/views/base.html.twig");
    }
}
