<?php

/* SidusFileUploadBundle:Form:fields.html.twig */
class __TwigTemplate_ad3d2eccdd990e325785ea2ed003164a89a931040c93b1e934d16578ba6918db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidus_resource_widget' => array($this, 'block_sidus_resource_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidus_resource_widget', $context, $blocks);
    }

    public function block_sidus_resource_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["file"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "data", array());
        // line 3
        echo "    <div class=\"fileupload-widget\">
        <input type=\"hidden\" ";
        // line 4
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
        <span class=\"btn btn-labeled btn-info fileupload-button";
        // line 5
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "disabled", array()) || ($context["file"] ?? null))) {
            echo " disabled";
        }
        echo "\">
            <span class=\"btn-label icon fa fa-plus\"></span>
            Upload a file
            ";
        // line 8
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "disabled", array())) {
            // line 9
            echo "                <input type=\"file\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oneup\UploaderBundle\Twig\Extension\UploaderExtension')->endpoint(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "endpoint", array())), "html", null, true);
            echo "\"
                       data-maxsize=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Oneup\UploaderBundle\Twig\Extension\UploaderExtension')->maxSize(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "endpoint", array())), "html", null, true);
            echo "\">
            ";
        }
        // line 12
        echo "        </span>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ((($context["file"] ?? null)) ? ($this->env->getExtension('Sidus\FileUploadBundle\Twig\UploadExtension')->getResourcePath(($context["file"] ?? null))) : ("")), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-default fileupload-file\"
           ";
        // line 14
        if ( !($context["file"] ?? null)) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "disabled", array())) {
            // line 16
            echo "                <button class=\"close\" type=\"button\">×</button>
            ";
        }
        // line 18
        echo "            <span class=\"fileupload-filename\">";
        echo twig_escape_filter($this->env, ((($context["file"] ?? null)) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["file"] ?? null), "originalFileName", array())) : ("")), "html", null, true);
        echo "</span>
        </a>
        <br>
        <div class=\"progress\" style=\"display: none; height:2px\">
            <div class=\"progress-bar\"></div>
        </div>
        <div class=\"alert alert-danger\" style=\"display:none;\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SidusFileUploadBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  77 => 16,  75 => 15,  69 => 14,  65 => 13,  62 => 12,  57 => 10,  52 => 9,  50 => 8,  42 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SidusFileUploadBundle:Form:fields.html.twig", "/var/www/myeml/cdm/vendor/sidus/file-upload-bundle/Resources/views/Form/fields.html.twig");
    }
}
