<?php

/* ::frontend.html.twig */
class __TwigTemplate_d80eac6db3728116616df4f1ca71dc7f0b5daab44929e19560bfc09a641b6340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "::frontend.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/oferta/css/normalizar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/oferta/css/comun.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/oferta/css/frontend.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "\t";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t\t";
        $context["ciudadSeleccionada"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "ciudad", 1 => (isset($context["ciudad_por_defecto"]) ? $context["ciudad_por_defecto"] : $this->getContext($context, "ciudad_por_defecto"))), "method");
        // line 12
        echo "\t\t<header>
\t\t\t<h1><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_portada", array("ciudad" => (isset($context["ciudadSeleccionada"]) ? $context["ciudadSeleccionada"] : $this->getContext($context, "ciudadSeleccionada")))), "html", null, true);
        echo "\">CUPON</a></h1>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_portada");
        echo "\">Oferta del día</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ciudad_recientes", array("ciudad" => (isset($context["ciudadSeleccionada"]) ? $context["ciudadSeleccionada"] : $this->getContext($context, "ciudadSeleccionada")))), "html", null, true);
        echo "\">Ofertas recientes</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_compras");
        echo "\">Mis ofertas</a></li>
\t\t\t\t\t<li>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CiudadBundle:Default:listaCiudades", array("ciudad" => (isset($context["ciudadSeleccionada"]) ? $context["ciudadSeleccionada"] : $this->getContext($context, "ciudadSeleccionada")))));
        echo "</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
\t\t<article>
\t\t\t";
        // line 24
        $this->displayBlock('article', $context, $blocks);
        // line 26
        echo "\t\t</article>
\t\t\t<aside>
\t\t\t\t";
        // line 28
        $this->displayBlock('aside', $context, $blocks);
        // line 33
        echo "\t\t\t</aside>
\t";
    }

    // line 24
    public function block_article($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t";
    }

    // line 28
    public function block_aside($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t\t\t<section id=\"login\">
\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("UsuarioBundle:Default:cajaLogin"));
        echo "
\t\t\t\t\t</section>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  115 => 29,  112 => 28,  108 => 25,  105 => 24,  100 => 33,  98 => 28,  94 => 26,  92 => 24,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  53 => 9,  50 => 8,  44 => 6,  40 => 5,  35 => 4,  32 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/frontend.html.twig #}
{% extends '::base.html.twig' %}
\t{% block stylesheets %}
\t\t<link href=\"{{ asset('bundles/oferta/css/normalizar.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"{{ asset('bundles/oferta/css/comun.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"{{ asset('bundles/oferta/css/frontend.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
\t{% endblock %}
\t{% block javascripts %}
\t{% endblock %}
\t{% block body %}
\t\t{% set ciudadSeleccionada = app.request.attributes.get('ciudad', ciudad_por_defecto) %}
\t\t<header>
\t\t\t<h1><a href=\"{{ path('_portada', { 'ciudad': ciudadSeleccionada }) }}\">CUPON</a></h1>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"{{ path('_portada') }}\">Oferta del día</a></li>
\t\t\t\t\t<li><a href=\"{{ path('ciudad_recientes', { 'ciudad': ciudadSeleccionada }) }}\">Ofertas recientes</a></li>
\t\t\t\t\t<li><a href=\"{{ path('usuario_compras') }}\">Mis ofertas</a></li>
\t\t\t\t\t<li>{{ render(controller('CiudadBundle:Default:listaCiudades', {'ciudad': ciudadSeleccionada} ))}}</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
\t\t<article>
\t\t\t{% block article %}
\t\t\t{% endblock %}
\t\t</article>
\t\t\t<aside>
\t\t\t\t{% block aside %}
\t\t\t\t\t<section id=\"login\">
\t\t\t\t\t\t{{ render(controller('UsuarioBundle:Default:cajaLogin')) }}
\t\t\t\t\t</section>
\t\t\t\t{% endblock %}
\t\t\t</aside>
\t{% endblock %}", "::frontend.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\app/Resources\\views/frontend.html.twig");
    }
}
