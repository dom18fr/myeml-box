<?php

/* @CleverAgeEAVManagerAdmin/EAVData/partials/list.blocks.html.twig */
class __TwigTemplate_5fd00cad9b460d377469ae8a1e9dba40fd62379c3fa570e6695ad193e7c1b8ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'datagrid' => array($this, 'block_datagrid'),
            'list_title' => array($this, 'block_list_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('datagrid', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('list_title', $context, $blocks);
    }

    // line 1
    public function block_datagrid($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["DataGridHelper"] = $this->loadTemplate("SidusDataGridBundle:DataGrid:datagrid.html.twig", "@CleverAgeEAVManagerAdmin/EAVData/partials/list.blocks.html.twig", 2);
        // line 3
        echo "    ";
        echo $context["DataGridHelper"]->macro_render(($context["datagrid"] ?? null), array("family" => ($context["family"] ?? null), "admin" => ($context["admin"] ?? null)));
        echo "
";
    }

    // line 6
    public function block_list_title($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (($context["admin_trans_key"] ?? null) . ".title"), 1 => "admin.list_of"), array("%family%" => twig_trim_filter(($context["family"] ?? null)))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CleverAgeEAVManagerAdmin/EAVData/partials/list.blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  43 => 6,  36 => 3,  33 => 2,  30 => 1,  26 => 6,  23 => 5,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CleverAgeEAVManagerAdmin/EAVData/partials/list.blocks.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/AdminBundle/Resources/views/EAVData/partials/list.blocks.html.twig");
    }
}
