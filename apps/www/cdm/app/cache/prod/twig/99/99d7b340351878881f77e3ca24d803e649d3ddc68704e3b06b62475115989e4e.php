<?php

/* @CleverAgeEAVManagerAdmin/Asset/partials/media.preview.html.twig */
class __TwigTemplate_b82b5fce560b9f2bc692b1cd1a5ca833e325b0d7e37f2097295ea92ab4d9c5c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'media_preview' => array($this, 'block_media_preview'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('media_preview', $context, $blocks);
    }

    public function block_media_preview($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["result"] ?? null), "family", array()), "hasAttribute", array(0 => "imageFile"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), ($context["result"] ?? null), "imageFile", array()))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["result"] ?? null), "imageFile", array()), "large"), "html", null, true);
            echo "\" target=\"_blank\">
            <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["result"] ?? null), "imageFile", array()), "thumbnail"), "html", null, true);
            echo "\"
                 class=\"img-thumbnail pull-left\" ";
            // line 5
            echo $this->env->getExtension('CleverAge\EAVManager\AssetBundle\Twig\MediaExtension')->getImageSizeAttrs(twig_get_attribute($this->env, $this->getSourceContext(), ($context["result"] ?? null), "imageFile", array()), "thumbnail");
            echo ">
        </a>
    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 7
($context["result"] ?? null), "family", array()), "hasAttribute", array(0 => "documentFile"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), ($context["result"] ?? null), "documentFile", array()))) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["result"] ?? null), "documentFile", array()), "originalFileName", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 10
            echo "        <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("warning.missing.asset"), "html", null, true);
            echo "</span>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CleverAgeEAVManagerAdmin/Asset/partials/media.preview.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 8,  43 => 7,  38 => 5,  34 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CleverAgeEAVManagerAdmin/Asset/partials/media.preview.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/AdminBundle/Resources/views/Asset/partials/media.preview.html.twig");
    }
}
