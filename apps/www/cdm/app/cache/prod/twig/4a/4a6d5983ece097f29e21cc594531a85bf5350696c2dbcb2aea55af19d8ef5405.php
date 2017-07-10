<?php

/* CleverAgeEAVManagerUserBundle:Security:login.html.twig */
class __TwigTemplate_7f66d6fa7b0ded3f16c3390173d2b167dfd143bace6afd1cdd7fe233369639b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CleverAgeEAVManagerUser/base.html.twig", "CleverAgeEAVManagerUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CleverAgeEAVManagerUser/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.title"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\" accept-charset=\"UTF-8\" role=\"form\">
                <fieldset ";
        // line 10
        if (($context["error"] ?? null)) {
            echo "class=\"has-error\"";
        }
        echo ">
                    <div class=\"form-group\">
                        <input class=\"form-control\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username"), "html", null, true);
        echo "\"
                               name=\"_username\" type=\"text\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\">
                    </div>
                    <div class=\"form-group\">
                        <input class=\"form-control\" placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password"), "html", null, true);
        echo "\"
                               name=\"_password\" type=\"password\" value=\"\" required=\"required\">
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    ";
        // line 20
        if (($context["error"] ?? null)) {
            // line 21
            echo "                        <div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 23
        echo "                </fieldset>
                <fieldset>
                    <div class=\"row\">
                        <div class=\"checkbox col-md-6\">
                            <label>
                                <input name=\"_remember_me\" type=\"checkbox\"
                                       value=\"on\"> ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me"), "html", null, true);
        echo "
                            </label>
                        </div>
                        <div class=\"col-md-6 text-right\" style=\"margin-top:10px;\">
                            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lost_password");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.lost_password"), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                    <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\"
                           value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit"), "html", null, true);
        echo "\">
                </fieldset>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CleverAgeEAVManagerUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  95 => 33,  88 => 29,  80 => 23,  74 => 21,  72 => 20,  68 => 19,  62 => 16,  56 => 13,  52 => 12,  45 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CleverAgeEAVManagerUserBundle:Security:login.html.twig", "/var/www/myeml/cdm/vendor/cleverage/eav-manager/UserBundle/Resources/views/Security/login.html.twig");
    }
}
