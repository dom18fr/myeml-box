<?php

/* SidusDataGridBundle:DataGrid:datagrid.html.twig */
class __TwigTemplate_25787829f7637a5ef77dfad3388582f9c13577ebe3d2cfef8036b2e5357f58ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'datagrid_actions' => array($this, 'block_datagrid_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 33
        echo "
";
        // line 40
        echo "
";
        // line 53
        echo "
";
    }

    // line 22
    public function block_datagrid_actions($context, array $blocks = array())
    {
        // line 23
        echo "        ";
        echo $context["current"]->macro_actions(($context["datagrid"] ?? null), ($context["viewParameters"] ?? null));
        echo "
    ";
    }

    // line 1
    public function macro_render($__datagrid__ = null, $__viewParameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "datagrid" => $__datagrid__,
            "viewParameters" => $__viewParameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["current"] = $this;
            // line 3
            echo "    ";
            $context["form"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "formView", array());
            // line 4
            echo "
    ";
            // line 5
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "formTheme", array())));
            // line 6
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
    ";
            // line 7
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "filters", array())) > 0)) {
                // line 8
                echo "        <div class=\"datagrid-filters\">
            <div class=\"row\">
                ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "filters", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["subForm"]) {
                    // line 11
                    echo "                ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["subForm"], 'row');
                    echo "
                ";
                    // line 12
                    if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 3) == 0)) {
                        // line 13
                        echo "            </div>
            <div class=\"row\">
                ";
                    }
                    // line 16
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subForm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            </div>
            ";
                // line 18
                echo $context["current"]->macro_filter_actions(($context["datagrid"] ?? null), ($context["viewParameters"] ?? null));
                echo "
            <hr class=\"clear\">
        </div>
    ";
            }
            // line 22
            echo "    ";
            $this->displayBlock('datagrid_actions', $context, $blocks);
            // line 25
            echo "
    ";
            // line 26
            echo $context["current"]->macro_table(($context["datagrid"] ?? null), ($context["viewParameters"] ?? null));
            echo "

    ";
            // line 28
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "filterConfig", array()), "pager", array()), "count", array()) > 10)) {
                // line 29
                echo "        ";
                $this->displayBlock("datagrid_actions", $context, $blocks);
                echo "
    ";
            }
            // line 31
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 34
    public function macro_filter_actions($__datagrid__ = null, $__viewParameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "datagrid" => $__datagrid__,
            "viewParameters" => $__viewParameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "    <div class=\"datagrid-filters-actions btn-group pull-right\">
        ";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "formView", array()), "filterResetButton", array()), 'widget');
            echo "
        ";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "formView", array()), "filterSubmitButton", array()), 'widget');
            echo "
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 41
    public function macro_actions($__datagrid__ = null, $__viewParameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "datagrid" => $__datagrid__,
            "viewParameters" => $__viewParameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "    <div class=\"datagrid-actions\">
        <div class=\"pull-right\">
            ";
            // line 44
            echo $this->env->getExtension('WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension')->renderPagerfanta(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "filterConfig", array()), "pager", array()), "twitter_bootstrap3");
            echo "
        </div>
        <div class=\"btn-group\">
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "formView", array()), "actions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 48
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["action"], 'widget');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_table($__datagrid__ = null, $__viewParameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "datagrid" => $__datagrid__,
            "viewParameters" => $__viewParameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            echo "    ";
            $context["sort"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "formView", array()), "sortable", array());
            // line 56
            echo "    <table class=\"table table-striped\">
        <caption>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "filterConfig", array()), "pager", array()), "count", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sidus.datagrid.results.label"), "html", null, true);
            echo "</caption>
        <thead>
        <tr>
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "columns", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 61
                echo "                <th>
                    ";
                // line 62
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["column"], "label", array())), "html", null, true);
                echo "
                    ";
                // line 63
                if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["sort"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["column"], "sortColumn", array()), array(), "array", true, true)) {
                    // line 64
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["sort"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["column"], "sortColumn", array()), array(), "array"), 'widget');
                    echo "
                    ";
                }
                // line 66
                echo "                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "        </tr>
        </thead>
        <tbody>
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "results", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 72
                echo "            <tr class=\"datagrid-row\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "id", array(), "any", true, true)) {
                    echo " data-entity-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "id", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["datagrid"] ?? null), "columns", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 74
                    echo "                    <td>
                        ";
                    // line 75
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["column"], "template", array())) {
                        // line 76
                        echo "                            ";
                        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), $context["column"], "template", array()), "SidusDataGridBundle:DataGrid:datagrid.html.twig", 76)->display($context);
                        // line 77
                        echo "                        ";
                    } else {
                        // line 78
                        echo "                            ";
                        echo $this->env->getExtension('Sidus\DataGridBundle\Templating\TwigRenderer')->renderObjectValue($context["result"], $context["column"]);
                        echo "
                        ";
                    }
                    // line 80
                    echo "                    </td>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "            </tr>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "        </tbody>
    </table>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SidusDataGridBundle:DataGrid:datagrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 84,  372 => 82,  357 => 80,  351 => 78,  348 => 77,  345 => 76,  343 => 75,  340 => 74,  323 => 73,  314 => 72,  297 => 71,  292 => 68,  285 => 66,  279 => 64,  277 => 63,  273 => 62,  270 => 61,  266 => 60,  258 => 57,  255 => 56,  252 => 55,  239 => 54,  228 => 50,  219 => 48,  215 => 47,  209 => 44,  205 => 42,  192 => 41,  180 => 37,  176 => 36,  173 => 35,  160 => 34,  148 => 31,  142 => 29,  140 => 28,  135 => 26,  132 => 25,  129 => 22,  122 => 18,  119 => 17,  105 => 16,  100 => 13,  98 => 12,  93 => 11,  76 => 10,  72 => 8,  70 => 7,  65 => 6,  63 => 5,  60 => 4,  57 => 3,  54 => 2,  41 => 1,  34 => 23,  31 => 22,  26 => 53,  23 => 40,  20 => 33,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SidusDataGridBundle:DataGrid:datagrid.html.twig", "/var/www/myeml/cdm/vendor/sidus/datagrid-bundle/Resources/views/DataGrid/datagrid.html.twig");
    }
}
