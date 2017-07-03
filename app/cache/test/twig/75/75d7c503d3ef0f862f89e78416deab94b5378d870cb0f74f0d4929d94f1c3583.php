<?php

/* ::base.html.twig */
class __TwigTemplate_3a06e3a2c2634614774f94bab23618b509d9e87eb55075da127d8d216553c2ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Cupon</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body id=\"";
        // line 8
        $this->displayBlock('id', $context, $blocks);
        echo "\">
        <div id=\"contenedor\">
            ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "                <footer>
                    &copy; ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Cupon
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_estatica", array("pagina" => "ayuda"));
        echo "\">Ayuda</a>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_estatica", array("pagina" => "contacto"));
        echo "\">Contacto</a>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_estatica", array("pagina" => "privacidad"));
        echo "\">Privacidad</a>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_estatica", array("pagina" => "sobre-nosotros"));
        // line 17
        echo "\">Sobre nosotros</a>
            </footer>
            ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 8
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  100 => 19,  95 => 10,  89 => 8,  84 => 6,  79 => 5,  73 => 21,  71 => 19,  67 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  46 => 11,  44 => 10,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>{% block title %}{% endblock %} | Cupon</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body id=\"{% block id '' %}\">
        <div id=\"contenedor\">
            {% block body %}{% endblock %}
                <footer>
                    &copy; {{ 'now' | date('Y') }} - Cupon
                    <a href=\"{{ path('pagina_estatica', { 'pagina': 'ayuda' }) }}\">Ayuda</a>
                    <a href=\"{{ path('pagina_estatica', { 'pagina': 'contacto' })}}\">Contacto</a>
                    <a href=\"{{ path('pagina_estatica', { 'pagina': 'privacidad' })}}\">Privacidad</a>
                    <a href=\"{{ path('pagina_estatica', { 'pagina': 'sobre-nosotros' })
                }}\">Sobre nosotros</a>
            </footer>
            {% block javascripts %}
            {% endblock %}
        </div>
    </body>
</html>", "::base.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\app/Resources\\views/base.html.twig");
    }
}
