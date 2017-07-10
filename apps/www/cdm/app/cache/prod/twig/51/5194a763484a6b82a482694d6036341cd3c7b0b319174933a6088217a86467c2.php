<?php

/* CleverAgeEAVManagerLayoutBundle:Form:ajax_theme.html.twig */
class __TwigTemplate_4b3ac47163c2a534df1a0d93cea7db67e3af6ca55022305c5a9145c1f4f2eae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidus_wysiwyg_row' => array($this, 'block_sidus_wysiwyg_row'),
            'family_permission_widget' => array($this, 'block_family_permission_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidus_wysiwyg_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('family_permission_widget', $context, $blocks);
    }

    // line 1
    public function block_sidus_wysiwyg_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', array("horizontal_input_wrapper_class" => "col-lg-12"));
        echo "
";
    }

    // line 5
    public function block_family_permission_widget($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "family", array()), 'widget');
        echo "
        </div>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 11
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["permission"], "rendered", array())) {
                // line 12
                echo "                <div class=\"col-sm-4\">
                    ";
                // line 13
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["permission"], 'widget');
                echo "
                </div>
            ";
            }
            // line 16
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerLayoutBundle:Form:ajax_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  68 => 16,  62 => 13,  59 => 12,  56 => 11,  52 => 10,  47 => 8,  43 => 6,  40 => 5,  33 => 2,  30 => 1,  26 => 5,  23 => 4,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerLayoutBundle:Form:ajax_theme.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/LayoutBundle/Resources/views/Form/ajax_theme.html.twig");
    }
}
