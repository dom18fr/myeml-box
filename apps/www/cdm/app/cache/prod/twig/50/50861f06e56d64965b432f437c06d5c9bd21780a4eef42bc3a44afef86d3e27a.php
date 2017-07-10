<?php

/* SidusDataGridBundle:Form:fields.html.twig */
class __TwigTemplate_742c3202b902f6d83f79441d527ea97549d219e81896d9215fdd927685f96b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SidusFilterBundle:Form:fields.html.twig", "SidusDataGridBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'sidus_link_widget' => array($this, 'block_sidus_link_widget'),
            'sidus_link_row' => array($this, 'block_sidus_link_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SidusFilterBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidus_link_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 6
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                // line 7
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                 // line 8
($context["name"] ?? null), "%id%" =>                 // line 9
($context["id"] ?? null)));
            } else {
                // line 12
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 15
        echo "        ";
        if ( !($context["uri"] ?? null)) {
            // line 16
            echo "            ";
            $context["uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), ($context["route_parameters"] ?? null));
            // line 17
            echo "        ";
        }
        // line 18
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, ($context["uri"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
            ";
        // line 19
        if ( !twig_test_empty(($context["icon"] ?? null))) {
            // line 20
            echo "                <i class=\"fa fa-";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i>
            ";
        }
        // line 22
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "
        </a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_sidus_link_row($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayBlock("sidus_link_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SidusDataGridBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  82 => 27,  73 => 22,  67 => 20,  65 => 19,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  45 => 12,  42 => 9,  41 => 8,  40 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SidusDataGridBundle:Form:fields.html.twig", "/var/www/myeml/cdm/vendor/sidus/datagrid-bundle/Resources/views/Form/fields.html.twig");
    }
}
