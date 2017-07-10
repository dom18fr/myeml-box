<?php

/* CleverAgeEAVManagerAdminBundle:EAVData:partials/list.row.actions.html.twig */
class __TwigTemplate_f57290950f9023b980317e31204c26ac5e754d76ba754415a0f533d1fc6a4049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'list_row_actions' => array($this, 'block_list_row_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "    ";
        $context["utilities"] = $this->loadTemplate("CleverAgeEAVManagerLayoutBundle:Macros:utilities.html.twig", "CleverAgeEAVManagerAdminBundle:EAVData:partials/list.row.actions.html.twig", 2);
        // line 3
        echo "    <div class=\"btn-group btn-group-xs btn-group-nowrap\">
        ";
        // line 4
        $context["admin"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["viewParameters"] ?? null), "admin", array());
        // line 5
        echo "        ";
        $this->displayBlock('list_row_actions', $context, $blocks);
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 5
    public function block_list_row_actions($context, array $blocks = array())
    {
        // line 6
        echo "            ";
        echo $context["utilities"]->macro_eav_action_button(($context["admin"] ?? null), ($context["result"] ?? null), "edit", array("class" => "btn btn-primary"));
        // line 8
        echo "
            ";
        // line 9
        echo $context["utilities"]->macro_eav_action_button(($context["admin"] ?? null), ($context["result"] ?? null), "clone", array("class" => "btn btn-default"));
        // line 11
        echo "
            ";
        // line 12
        echo $context["utilities"]->macro_eav_action_button(($context["admin"] ?? null), ($context["result"] ?? null), "delete", array("class" => "btn btn-danger", "icon" => "remove"));
        // line 15
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerAdminBundle:EAVData:partials/list.row.actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  53 => 12,  50 => 11,  48 => 9,  45 => 8,  42 => 6,  39 => 5,  33 => 17,  30 => 5,  28 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerAdminBundle:EAVData:partials/list.row.actions.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/AdminBundle/Resources/views/EAVData/partials/list.row.actions.html.twig");
    }
}
