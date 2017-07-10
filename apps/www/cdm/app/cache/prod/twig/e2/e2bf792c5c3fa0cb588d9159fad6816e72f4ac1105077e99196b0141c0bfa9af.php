<?php

/* @CleverAgeEAVManagerAdmin/Base/partials/list.blocks.html.twig */
class __TwigTemplate_d0e1d8baaf7aaa0d4992543ea2a48e858717b63bab942d0c3106ec8ba9e58c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'list_modal' => array($this, 'block_list_modal'),
            'datagrid' => array($this, 'block_datagrid'),
            'list_title' => array($this, 'block_list_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('list_modal', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('datagrid', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('list_title', $context, $blocks);
    }

    // line 1
    public function block_list_modal($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["utilities"] = $this->loadTemplate("CleverAgeEAVManagerLayoutBundle:Macros:utilities.html.twig", "@CleverAgeEAVManagerAdmin/Base/partials/list.blocks.html.twig", 2);
        // line 3
        echo "    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-close-target=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
        echo "\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\">";
        // line 9
        $this->displayBlock("list_title", $context, $blocks);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 12
        echo $context["utilities"]->macro_flash_messages();
        echo "
                ";
        // line 13
        $this->displayBlock("datagrid", $context, $blocks);
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-close-target=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
        echo "\">Close</button>
            </div>
        </div>
    </div>
";
    }

    // line 22
    public function block_datagrid($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["DataGridHelper"] = $this->loadTemplate("SidusDataGridBundle:DataGrid:datagrid.html.twig", "@CleverAgeEAVManagerAdmin/Base/partials/list.blocks.html.twig", 23);
        // line 24
        echo "    ";
        echo $context["DataGridHelper"]->macro_render(($context["datagrid"] ?? null), array("admin" => ($context["admin"] ?? null)));
        echo "
";
    }

    // line 27
    public function block_list_title($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Sidus\EAVModelBundle\Twig\SidusTwigExtension')->tryTrans(array(0 => (($context["admin_trans_key"] ?? null) . ".title"), 1 => "admin.list_of"), array("%family%" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CleverAgeEAVManagerAdmin/Base/partials/list.blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  91 => 27,  84 => 24,  81 => 23,  78 => 22,  69 => 16,  63 => 13,  59 => 12,  53 => 9,  47 => 6,  42 => 3,  39 => 2,  36 => 1,  32 => 27,  29 => 26,  27 => 22,  24 => 21,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CleverAgeEAVManagerAdmin/Base/partials/list.blocks.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/AdminBundle/Resources/views/Base/partials/list.blocks.html.twig");
    }
}
