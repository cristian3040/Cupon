<?php

/* ::extranet.html.twig */
class __TwigTemplate_5fc4d230b23b34b012824680db3ad8d04800e460dc15a1c3d119f8d874ec472b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::extranet.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/oferta/css/normalizar.css"), "html", null, true);
        echo "\"
\trel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/oferta/css/comun.css"), "html", null, true);
        echo "\"
\trel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/tienda/css/extranet.css"), "html", null, true);
        echo "\"
\trel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t<header>
\t\t<h1><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extranet_portada");
        echo "\">CUPON EXTRANET</a></h1>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extranet_portada");
        echo "\">Ofertas</a></li>
\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extranet_perfil");
        echo "\">Mis datos</a></li>
\t\t\t\t<li><a href=\"#\">Cerrar sesión</a></li>
\t\t\t</ul>
\t\t</nav>
\t\t<p>Teléfono de atención al cliente <strong>902 XXX XXX</strong></p>
\t</header>
\t<article>
\t\t";
        // line 23
        $this->displayBlock('article', $context, $blocks);
        // line 24
        echo "\t\t</article>
\t\t<aside>
\t\t\t";
        // line 26
        $this->displayBlock('aside', $context, $blocks);
        // line 41
        echo "\t\t\t</aside>
\t\t";
    }

    // line 23
    public function block_article($context, array $blocks = array())
    {
    }

    // line 26
    public function block_aside($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t\t<a class=\"boton\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extranet_oferta_nueva");
        echo "\">Añadir
\t\t\t\t\toferta</a>
\t\t\t\t\t<section id=\"faq\">
\t\t\t\t\t\t<h2>Preguntas frecuentes</h2>
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>¿Lorem ipsum dolor sit amet?</dt>
\t\t\t\t\t\t\t<dd>Consectetur adipisicing elit, sed do eiusmod tempor.</dd>
\t\t\t\t\t\t\t<dt>¿Ut enim ad minim veniam?</dt>
\t\t\t\t\t\t\t<dd>Quis nostrud exercitation ullamco laboris nisi.</dd>
\t\t\t\t\t\t\t<dt>¿Excepteur sint occaecat cupidatat non proident?</dt>
\t\t\t\t\t\t\t<dd>Sunt in culpa qui officia deserunt mollit anim laborum.</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</section>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::extranet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  96 => 26,  91 => 23,  86 => 41,  84 => 26,  80 => 24,  78 => 23,  68 => 16,  64 => 15,  58 => 12,  55 => 11,  52 => 10,  45 => 7,  40 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block stylesheets %}
\t<link href=\"{{ asset('bundles/oferta/css/normalizar.css') }}\"
\trel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('bundles/oferta/css/comun.css') }}\"
\trel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('bundles/tienda/css/extranet.css') }}\"
\trel=\"stylesheet\" type=\"text/css\" />
{% endblock %}
{% block body %}
\t<header>
\t\t<h1><a href=\"{{ path('extranet_portada') }}\">CUPON EXTRANET</a></h1>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"{{ path('extranet_portada') }}\">Ofertas</a></li>
\t\t\t\t<li><a href=\"{{ path('extranet_perfil') }}\">Mis datos</a></li>
\t\t\t\t<li><a href=\"#\">Cerrar sesión</a></li>
\t\t\t</ul>
\t\t</nav>
\t\t<p>Teléfono de atención al cliente <strong>902 XXX XXX</strong></p>
\t</header>
\t<article>
\t\t{% block article %}{% endblock %}
\t\t</article>
\t\t<aside>
\t\t\t{% block aside %}
\t\t\t\t<a class=\"boton\" href=\"{{ path('extranet_oferta_nueva') }}\">Añadir
\t\t\t\t\toferta</a>
\t\t\t\t\t<section id=\"faq\">
\t\t\t\t\t\t<h2>Preguntas frecuentes</h2>
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>¿Lorem ipsum dolor sit amet?</dt>
\t\t\t\t\t\t\t<dd>Consectetur adipisicing elit, sed do eiusmod tempor.</dd>
\t\t\t\t\t\t\t<dt>¿Ut enim ad minim veniam?</dt>
\t\t\t\t\t\t\t<dd>Quis nostrud exercitation ullamco laboris nisi.</dd>
\t\t\t\t\t\t\t<dt>¿Excepteur sint occaecat cupidatat non proident?</dt>
\t\t\t\t\t\t\t<dd>Sunt in culpa qui officia deserunt mollit anim laborum.</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</section>
\t\t\t\t{% endblock %}
\t\t\t</aside>
\t\t{% endblock %}", "::extranet.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\app/Resources\\views/extranet.html.twig");
    }
}
