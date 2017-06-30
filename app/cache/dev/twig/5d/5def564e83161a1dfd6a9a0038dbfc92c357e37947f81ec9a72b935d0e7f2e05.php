<?php

/* UsuarioBundle:Default:perfil.html.twig */
class __TwigTemplate_56a0f61917319b17a6f38733213edee01ac6bdec0353058d2888bfe5a56b3a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Default:perfil.html.twig", 1);
        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
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
        echo "Ver / Modificar mis datos";
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_perfil");
        echo "\" method=\"post\"
\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
\t\t\t<div class=\"errors\">
\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre", array()), 'row');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'row');
        echo "
\t\t\t</div>
\t\t\t";
        // line 18
        echo "\t\t\t<div>
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "permite_email", array()), 'errors');
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "permite_email", array()), 'widget');
        echo "
\t\t\t\t<span>Me gustaría recibir el boletín de ofertas de Cupon</span>
\t\t\t</div>
\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
\t\t\t<input class=\"boton\" type=\"submit\" value=\"Guardar cambios\" />
\t\t</form>
\t";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  83 => 20,  79 => 19,  76 => 18,  71 => 15,  65 => 12,  59 => 9,  54 => 7,  50 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
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
\t{% block title %}Ver / Modificar mis datos{% endblock %}
\t\t{% block article %}
\t\t\t<h1>{{ block('title') }}</h1>
\t\t\t<form action=\"{{ path('usuario_perfil') }}\" method=\"post\"
\t\t\t{{ form_enctype(formulario) }}>
\t\t\t<div class=\"errors\">
\t\t\t\t{{ form_errors(formulario) }}
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{{ form_row(formulario.nombre) }}
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{{ form_row(formulario.apellidos) }}
\t\t\t</div>
\t\t\t{# ... #}
\t\t\t<div>
\t\t\t\t{{ form_errors(formulario.permite_email) }}
\t\t\t\t{{ form_widget(formulario.permite_email) }}
\t\t\t\t<span>Me gustaría recibir el boletín de ofertas de Cupon</span>
\t\t\t</div>
\t\t\t{{ form_rest(formulario) }}
\t\t\t<input class=\"boton\" type=\"submit\" value=\"Guardar cambios\" />
\t\t</form>
\t{% endblock %}", "UsuarioBundle:Default:perfil.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\UsuarioBundle/Resources/views/Default/perfil.html.twig");
    }
}
