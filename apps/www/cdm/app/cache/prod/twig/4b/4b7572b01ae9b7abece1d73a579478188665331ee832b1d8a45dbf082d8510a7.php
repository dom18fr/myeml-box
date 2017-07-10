<?php

/* CleverAgeEAVManagerLayoutBundle:Dashboard:dashboard.html.twig */
class __TwigTemplate_9d4780ce68563900dad9bc05ea3a059c31c5ac2dc7106904aba5c2a037e9a9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CleverAgeEAVManagerLayoutBundle::layout.html.twig", "CleverAgeEAVManagerLayoutBundle:Dashboard:dashboard.html.twig", 1);
        $this->blocks = array(
            'tg_center' => array($this, 'block_tg_center'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CleverAgeEAVManagerLayoutBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_tg_center($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Welcome !</h2>
";
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerLayoutBundle:Dashboard:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerLayoutBundle:Dashboard:dashboard.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/LayoutBundle/Resources/views/Dashboard/dashboard.html.twig");
    }
}
