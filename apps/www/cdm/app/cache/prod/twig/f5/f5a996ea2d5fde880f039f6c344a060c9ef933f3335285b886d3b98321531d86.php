<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_8c7357680c3c7bda7a0a0d683c1a837ba4e03bdb5cd0bd139c26a1e8fbe26d20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($context["include_jquery"] ?? null)) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
";
        }
        // line 4
        if (($context["tinymce_jquery"] ?? null)) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["base_url"] ?? null) . "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"), ($context["asset_package_name"] ?? null)), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["base_url"] ?? null) . "bundles/stfalcontinymce/js/init.jquery.js"), ($context["asset_package_name"] ?? null)), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["base_url"] ?? null) . "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), ($context["asset_package_name"] ?? null)), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["base_url"] ?? null) . "bundles/stfalcontinymce/js/ready.min.js"), ($context["asset_package_name"] ?? null)), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["base_url"] ?? null) . "bundles/stfalcontinymce/js/init.standard.js"), ($context["asset_package_name"] ?? null)), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
    //<![CDATA[
    stfalcon_tinymce_config = ";
        // line 14
        echo ($context["tinymce_config"] ?? null);
        echo ";
    initTinyMCE();
    //]]>
</script>
";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 12,  46 => 10,  42 => 9,  37 => 8,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "StfalconTinymceBundle:Script:init.html.twig", "/var/www/myeml/cdm/vendor/stfalcon/tinymce-bundle/Stfalcon/Bundle/TinymceBundle/Resources/views/Script/init.html.twig");
    }
}
