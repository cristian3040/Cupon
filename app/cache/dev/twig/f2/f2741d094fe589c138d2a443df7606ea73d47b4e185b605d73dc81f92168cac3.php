<?php

/* UsuarioBundle:Default:registro.html.twig */
class __TwigTemplate_c2e8873874d4a441e45f50a125beb98934d5a717101b876d6e58982c4ff2c97e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Default:registro.html.twig", 1);
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
        echo "usuario";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Regístrate gratis como usuario";
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
\t\t\t<form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_registro");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'widget');
        echo "
\t\t\t\t<input class=\"boton\" type=\"submit\" value=\"Registrarme\" />
\t\t\t</form>
\t";
    }

    // line 11
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  57 => 7,  51 => 6,  46 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
{% block id 'usuario' %}
\t{% block title %}Regístrate gratis como usuario{% endblock %}
\t\t{% block article %}
\t\t\t<h1>{{ block('title') }}</h1>
\t\t\t<form action=\"{{ path('usuario_registro') }}\" method=\"post\" {{ form_enctype(formulario) }}>
\t\t\t\t{{ form_widget(formulario) }}
\t\t\t\t<input class=\"boton\" type=\"submit\" value=\"Registrarme\" />
\t\t\t</form>
\t{% endblock %}
\t{% block aside %}{% endblock %}", "UsuarioBundle:Default:registro.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\UsuarioBundle/Resources/views/Default/registro.html.twig");
    }
}
