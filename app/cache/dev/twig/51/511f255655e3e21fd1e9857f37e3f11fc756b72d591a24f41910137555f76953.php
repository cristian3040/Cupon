<?php

/* TiendaBundle:Extranet:login.html.twig */
class __TwigTemplate_c6b5ab1cb4ab46deac915907075137b2ff180940aacd7d005da352be88a36d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "TiendaBundle:Extranet:login.html.twig", 1);
        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
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
    public function block_id($context, array $blocks = array())
    {
        echo "login";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Administra tu tienda";
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
\t\t\t";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "\t\t\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 9
        echo "\t\t\t<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extranet_login_check");
        echo "\" method=\"post\">
\t\t\t\t<div>
\t\t\t\t\t<label for=\"username\">Usuario:</label>
\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" />
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"password\">Contraseña:</label>
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t\t</div>
\t\t\t\t<input class=\"boton\" type=\"submit\" name=\"login\" value=\"Entrar\" />
\t\t\t</form>
\t\t";
    }

    // line 21
    public function block_aside($context, array $blocks = array())
    {
        // line 22
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "TiendaBundle:Extranet:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  76 => 21,  59 => 9,  53 => 7,  51 => 6,  46 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
{% block id 'login' %}
\t{% block title %}Administra tu tienda{% endblock %}
\t\t{% block article %}
\t\t\t<h1>{{ block('title') }}</h1>
\t\t\t{% if error %}
\t\t\t\t<div>{{ error.message }}</div>
\t\t\t{% endif %}
\t\t\t<form action=\"{{ path('extranet_login_check') }}\" method=\"post\">
\t\t\t\t<div>
\t\t\t\t\t<label for=\"username\">Usuario:</label>
\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" />
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"password\">Contraseña:</label>
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t\t</div>
\t\t\t\t<input class=\"boton\" type=\"submit\" name=\"login\" value=\"Entrar\" />
\t\t\t</form>
\t\t{% endblock %}
\t\t{% block aside %}
\t\t{% endblock %}", "TiendaBundle:Extranet:login.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\TiendaBundle/Resources/views/Extranet/login.html.twig");
    }
}
