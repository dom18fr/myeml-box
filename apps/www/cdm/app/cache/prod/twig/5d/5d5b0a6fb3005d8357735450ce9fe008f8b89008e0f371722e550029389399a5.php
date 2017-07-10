<?php

/* CleverAgeEAVManagerUserBundle:Obsolete:browser_update.html.twig */
class __TwigTemplate_09e37015c7ccc6f5d1ab5078b92296a39b667f919f1fd75e54f22817714957f6 extends Twig_Template
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
        echo "<div class=\"alert alert-danger browser-update\">
    <h4>Votre navigateur n'est pas à jour</h4>
    <p>Cette application n'est pas compatible avec votre navigateur actuel. Veuillez utiliser l'un de ces navigateurs
        pour une utilisation optimisée de notre solution.</p>
    <table class=\"logos\">
        <tbody>
        <tr>
            <td>
                <a href=\"http://www.mozilla.com/firefox/\" target=\"_blank\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cleverageeavmanageruser/img/ff.png"), "html", null, true);
        echo "\" alt=\"\" width=\"64\" height=\"64\">
                    <span class=\"bro\">Firefox</span>
                    <span class=\"vendor\">Mozilla Foundation</span>
                </a>
            </td>
            <td>
                <a href=\"http://www.google.com/chrome?hl=fr\" target=\"_blank\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cleverageeavmanageruser/img/ch.png"), "html", null, true);
        echo "\" alt=\"\" width=\"64\" height=\"64\">
                    <span class=\"bro\">Chrome</span>
                    <span class=\"vendor\">Google</span>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerUserBundle:Obsolete:browser_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerUserBundle:Obsolete:browser_update.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/UserBundle/Resources/views/Obsolete/browser_update.html.twig");
    }
}
