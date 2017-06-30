<?php

/* UsuarioBundle:Default:login.html.twig */
class __TwigTemplate_a7bc04e582869380c831a3c005ed9eabfec7d1efbe8ab5a914f24617252346e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Formulario de acceso";
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "usuario";
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "\t\t\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 8
        echo "\t\t\t<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_login_check");
        echo "\" method=\"post\">
\t\t\t\t<label for=\"username\">Usuario:</label>
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t\t\t\t<label for=\"password\">Contraseña:</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t\t<input type=\"submit\" name=\"login\" value=\"Acceder\" />
\t\t\t</form>
\t\t";
    }

    // line 16
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  61 => 10,  55 => 8,  49 => 6,  46 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::frontend.html.twig' %}
{% block title %}Formulario de acceso{% endblock %}
\t{% block id 'usuario' %}
\t\t{% block article %}
\t\t\t{% if error %}
\t\t\t\t<div>{{ error.message }}</div>
\t\t\t{% endif %}
\t\t\t<form action=\"{{ path('usuario_login_check') }}\" method=\"post\">
\t\t\t\t<label for=\"username\">Usuario:</label>
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
\t\t\t\t<label for=\"password\">Contraseña:</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t\t<input type=\"submit\" name=\"login\" value=\"Acceder\" />
\t\t\t</form>
\t\t{% endblock %}
\t\t{% block aside %}{% endblock %}", "UsuarioBundle:Default:login.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\UsuarioBundle/Resources/views/Default/login.html.twig");
    }
}
