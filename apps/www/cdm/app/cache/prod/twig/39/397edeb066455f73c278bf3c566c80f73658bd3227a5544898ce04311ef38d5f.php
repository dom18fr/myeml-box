<?php

/* CleverAgeEAVManagerAdminBundle:Base:partials/clickable.column.html.twig */
class __TwigTemplate_57cd90fc4169ef02b1adfe43e479cd1df7b9ade0413966c82cab8969d375ba54 extends Twig_Template
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
        $context["admin"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["viewParameters"] ?? null), "admin", array());
        // line 2
        echo "<a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_entity_path')->getCallable(), array(($context["admin"] ?? null), ($context["result"] ?? null), "edit")), "html", null, true);
        echo "\" data-target-element=\"#tg_right\"
   title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("admin." . twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "code", array())) . ".edit.title")), "html", null, true);
        echo "\">
    ";
        // line 4
        echo $this->env->getExtension('Sidus\DataGridBundle\Templating\TwigRenderer')->renderObjectValue(($context["result"] ?? null), ($context["column"] ?? null));
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerAdminBundle:Base:partials/clickable.column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerAdminBundle:Base:partials/clickable.column.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/AdminBundle/Resources/views/Base/partials/clickable.column.html.twig");
    }
}
