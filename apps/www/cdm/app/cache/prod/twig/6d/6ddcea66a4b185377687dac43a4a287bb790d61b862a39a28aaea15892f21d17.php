<?php

/* @MopaBootstrap/icons.html.twig */
class __TwigTemplate_1008b723571f5d14935c8437545ac68ca2b676a6beccb1d9ebee9af11bdb6bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fontawesome' => array($this, 'block_fontawesome'),
            'fontawesome4' => array($this, 'block_fontawesome4'),
            'glyphicons' => array($this, 'block_glyphicons'),
            'zmdi' => array($this, 'block_zmdi'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('fontawesome', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('fontawesome4', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('glyphicons', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('zmdi', $context, $blocks);
    }

    // line 5
    public function block_fontawesome($context, array $blocks = array())
    {
        // line 6
        echo "<i class=\"icon-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo ((($context["inverted"] ?? null)) ? (" inverted") : (""));
        echo "\"></i>";
    }

    // line 9
    public function block_fontawesome4($context, array $blocks = array())
    {
        // line 10
        echo "<i class=\"fa fa-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo ((($context["inverted"] ?? null)) ? (" fa-inverse") : (""));
        echo "\"></i>";
    }

    // line 13
    public function block_glyphicons($context, array $blocks = array())
    {
        // line 14
        echo "<span class=\"glyphicon glyphicon-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"";
        if (((array_key_exists("inverted", $context)) ? (_twig_default_filter(($context["inverted"] ?? null), false)) : (false))) {
            echo " style=\"color: white;\"";
        }
        echo "></span>";
    }

    // line 17
    public function block_zmdi($context, array $blocks = array())
    {
        // line 18
        echo "<span class=\"zmdi zmdi-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"";
        if (((array_key_exists("inverted", $context)) ? (_twig_default_filter(($context["inverted"] ?? null), false)) : (false))) {
            echo " style=\"color: white;\"";
        }
        echo "></span>";
    }

    // line 1
    public function macro_icon($__name__ = null, $__inverted__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "inverted" => $__inverted__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
            if (((array_key_exists("inverted", $context)) ? (_twig_default_filter(($context["inverted"] ?? null), false)) : (false))) {
                echo " style=\"color: white;\"";
            }
            echo "></span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@MopaBootstrap/icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 2,  91 => 1,  81 => 18,  78 => 17,  68 => 14,  65 => 13,  58 => 10,  55 => 9,  48 => 6,  45 => 5,  41 => 17,  38 => 16,  36 => 13,  33 => 12,  31 => 9,  28 => 8,  26 => 5,  23 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@MopaBootstrap/icons.html.twig", "/var/www/myeml/cdm/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/views/icons.html.twig");
    }
}
