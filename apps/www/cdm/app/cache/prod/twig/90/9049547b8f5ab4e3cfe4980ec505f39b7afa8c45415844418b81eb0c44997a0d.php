<?php

/* CleverAgeEAVManagerLayoutBundle::layout.html.twig */
class __TwigTemplate_4367169f2c91eaf08312d1cfb98d8d5bd040656b9e7c2dc6330b760d2de1dbeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CleverAgeEAVManagerLayout/base.html.twig", "CleverAgeEAVManagerLayoutBundle::layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CleverAgeEAVManagerLayout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerLayoutBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerLayoutBundle::layout.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/LayoutBundle/Resources/views/layout.html.twig");
    }
}
