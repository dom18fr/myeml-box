<?php

/* SidusEAVVariantBundle:Form:fields.html.twig */
class __TwigTemplate_c9c83fe2bae164823658da2894062b1463c6e21da8b645e627901b848f03675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SidusEAVBootstrapBundle:Form:fields.html.twig", "SidusEAVVariantBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'sidus_variant_collection_widget' => array($this, 'block_sidus_variant_collection_widget'),
            'sidus_axles_widget' => array($this, 'block_sidus_axles_widget'),
            'sidus_axles_row' => array($this, 'block_sidus_axles_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SidusEAVBootstrapBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidus_variant_collection_widget($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            ";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array())) {
            // line 7
            echo "                ";
            if ((twig_length_filter($this->env, ($context["variant_families"] ?? null)) == 1)) {
                // line 8
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["routes"] ?? null), "create", array()), twig_array_merge(($context["base_route_parameters"] ?? null), array("family" => twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, ($context["variant_families"] ?? null)), "code", array())))), "html", null, true);
                echo "\"
                       class=\"btn btn-primary\"
                       title=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.create.title"), "html", null, true);
                echo "\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.create.label"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 14
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["routes"] ?? null), "select", array()), ($context["base_route_parameters"] ?? null)), "html", null, true);
                echo "\" class=\"btn btn-primary\"
                       title=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.select.title"), "html", null, true);
                echo "\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.select.label"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 19
            echo "                &nbsp;
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.text.allowed_variants"), "html", null, true);
            echo "
                ";
            // line 21
            echo twig_escape_filter($this->env, twig_join_filter(($context["variant_families"] ?? null), ", "), "html", null, true);
            echo "
            ";
        } else {
            // line 23
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.text.create_first"), "html", null, true);
            echo "
            ";
        }
        // line 25
        echo "        </div>
        <ul class=\"list-group\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["variants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
            // line 28
            echo "                <li class=\"list-group-item\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $context["variant"], "html", null, true);
            echo " <span class=\"text-muted\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["variant"], "family", array()), "html", null, true);
            echo ")</span>
                    <div class=\"btn-group pull-right\">
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["routes"] ?? null), "edit", array()), twig_array_merge(($context["base_route_parameters"] ?? null), array("family" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["variant"], "family", array()), "code", array()), "id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["variant"], "id", array())))), "html", null, true);
            echo "\"
                           class=\"btn btn-default\" title=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.edit.title"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-edit\"></i>
                        </a>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["routes"] ?? null), "delete", array()), twig_array_merge(($context["base_route_parameters"] ?? null), array("family" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["variant"], "family", array()), "code", array()), "id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["variant"], "id", array())))), "html", null, true);
            echo "\"
                           class=\"btn btn-danger\" title=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.link.delete.title"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-trash\"></i>
                        </a>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </ul>
    </div>
";
    }

    // line 46
    public function block_sidus_axles_widget($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    // line 50
    public function block_sidus_axles_row($context, array $blocks = array())
    {
        // line 51
        echo "    <h4 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus_eav_variant.text.axles.title"), "html", null, true);
        echo "</h4>
    ";
        // line 52
        $this->displayBlock("sidus_axles_widget", $context, $blocks);
        echo "
    <hr>
";
    }

    public function getTemplateName()
    {
        return "SidusEAVVariantBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 52,  154 => 51,  151 => 50,  144 => 47,  141 => 46,  135 => 42,  123 => 36,  119 => 35,  113 => 32,  109 => 31,  102 => 29,  99 => 28,  95 => 27,  91 => 25,  85 => 23,  80 => 21,  76 => 20,  73 => 19,  67 => 16,  63 => 15,  58 => 14,  52 => 11,  48 => 10,  42 => 8,  39 => 7,  37 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SidusEAVVariantBundle:Form:fields.html.twig", "/var/www/myeml/cdm/vendor/sidus/eav-variant-bundle/Resources/views/Form/fields.html.twig");
    }
}
