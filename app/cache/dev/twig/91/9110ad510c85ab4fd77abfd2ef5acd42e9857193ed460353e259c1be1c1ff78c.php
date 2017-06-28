<?php

/* OfertaBundle:Default:portada.html.twig */
class __TwigTemplate_9b7165449bd20413b1a3c67b22a16cb1058da4877d8e1d78576f5dc14ff15fc0 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<title>Portada | Cupon</title>
</head>
<body id=\"portada\"><div id=\"contenedor\">
\t<header>
\t\t<h1><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada");
        echo "\">CUPON</a></h1>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("portada");
        echo "\">Oferta del día</a></li>
\t\t\t\t<li><a href=\"#\">Ofertas recientes</a></li>
\t\t\t\t<li><a href=\"#\">Mis ofertas</a></li>
\t\t\t</ul>
\t\t</nav>
\t</header>
\t<article class=\"oferta\">
\t\t<section class=\"descripcion\">
\t\t\t<h1><a href=\"#\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
        echo "</a></h1>
\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descripcion", array()), "html", null, true);
        echo "
\t\t\t<a class=\"boton\" href=\"#\">Comprar</a>
\t\t</section>
\t\t<section class=\"galeria\">
\t\t\t<img alt=\"Fotografía de la oferta\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(        // line 26
(isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "rutaFoto", array()))), "html", null, true);
        echo "\">
\t\t\t<p class=\"precio\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descuento", array()), "html", null, true);
        // line 28
        echo "</span></p>
\t\t\t<p><strong>Condiciones:</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "condiciones", array()), "html", null, true);
        echo "</p>
\t\t</section>
\t\t<section class=\"estado\">
\t\t\t<div class=\"tiempo\">
\t\t\t\t<strong>Faltan</strong>: ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array())), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"compras\">
\t\t\t\t<strong>Compras</strong>: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"faltan\">
\t\t\t\t";
        // line 39
        $context["faltan"] = ($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "umbral", array()) - $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()));
        // line 40
        echo "\t\t\t\t\t";
        if (((isset($context["faltan"]) ? $context["faltan"] : $this->getContext($context, "faltan")) > 0)) {
            // line 41
            echo "\t\t\t\t\t\tFaltan <strong>";
            echo twig_escape_filter($this->env, (isset($context["faltan"]) ? $context["faltan"] : $this->getContext($context, "faltan")), "html", null, true);
            echo " compras</strong> <br/>
\t\t\t\t\t\tpara activar la oferta
\t\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t\t<strong>Oferta activada</strong> por superar las
\t\t\t\t\t\t<strong>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "umbral", array()), "html", null, true);
            echo "</strong> compras necesarias
\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"direccion\">
\t\t\t\t<h2>Disfruta de la oferta en</h2>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"#\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "nombre", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "direccion", array()), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t</section>
\t\t\t<section class=\"tienda\">
\t\t\t\t<h2>Sobre la tienda</h2>
\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "descripcion", array()), "html", null, true);
        echo "
\t\t\t</section>
\t\t</article>
\t\t<aside>
\t\t\t## FORMULARIO DE LOGIN ##
\t\t\t<section id=\"nosotros\">
\t\t\t\t<h2>Sobre nosotros</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet...</p>
\t\t\t</section>
\t\t</aside>
\t\t<footer>
\t\t\t&copy; ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Cupon
\t\t\t<a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_estatica", array("pagina" => "ayuda"));
        echo "\">Ayuda</a>
\t\t\t<a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_estatica", array("pagina" => "contacto"));
        echo "\">Contacto</a>
\t\t\t<a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_estatica", array("pagina" => "privacidad"));
        echo "\">Privacidad</a>
\t\t\t<a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_estatica", array("pagina" => "sobre-nosotros"));
        echo "\">Sobre nosotros</a>
\t\t</footer>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 73,  153 => 72,  149 => 71,  145 => 70,  141 => 69,  127 => 58,  119 => 53,  115 => 52,  108 => 47,  103 => 45,  100 => 44,  93 => 41,  90 => 40,  88 => 39,  82 => 36,  76 => 33,  69 => 29,  66 => 28,  62 => 27,  58 => 26,  57 => 25,  50 => 21,  46 => 20,  35 => 12,  29 => 9,  19 => 1,);
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
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<title>Portada | Cupon</title>
</head>
<body id=\"portada\"><div id=\"contenedor\">
\t<header>
\t\t<h1><a href=\"{{ path('portada') }}\">CUPON</a></h1>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"{{ path('portada') }}\">Oferta del día</a></li>
\t\t\t\t<li><a href=\"#\">Ofertas recientes</a></li>
\t\t\t\t<li><a href=\"#\">Mis ofertas</a></li>
\t\t\t</ul>
\t\t</nav>
\t</header>
\t<article class=\"oferta\">
\t\t<section class=\"descripcion\">
\t\t\t<h1><a href=\"#\">{{ oferta.nombre }}</a></h1>
\t\t\t{{ oferta.descripcion }}
\t\t\t<a class=\"boton\" href=\"#\">Comprar</a>
\t\t</section>
\t\t<section class=\"galeria\">
\t\t\t<img alt=\"Fotografía de la oferta\" src=\"{{ asset('uploads/images/' ~
\t\t\toferta.rutaFoto) }}\">
\t\t\t<p class=\"precio\">{{ oferta.precio }} &euro; <span>{{ oferta.descuento
\t\t\t}}</span></p>
\t\t\t<p><strong>Condiciones:</strong> {{ oferta.condiciones }}</p>
\t\t</section>
\t\t<section class=\"estado\">
\t\t\t<div class=\"tiempo\">
\t\t\t\t<strong>Faltan</strong>: {{ oferta.fechaExpiracion | date() }}
\t\t\t</div>
\t\t\t<div class=\"compras\">
\t\t\t\t<strong>Compras</strong>: {{ oferta.compras }}
\t\t\t</div>
\t\t\t<div class=\"faltan\">
\t\t\t\t{% set faltan = oferta.umbral - oferta.compras %}
\t\t\t\t\t{% if faltan > 0 %}
\t\t\t\t\t\tFaltan <strong>{{ faltan }} compras</strong> <br/>
\t\t\t\t\t\tpara activar la oferta
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<strong>Oferta activada</strong> por superar las
\t\t\t\t\t\t<strong>{{ oferta.umbral }}</strong> compras necesarias
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"direccion\">
\t\t\t\t<h2>Disfruta de la oferta en</h2>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"#\">{{ oferta.tienda.nombre }}</a>
\t\t\t\t\t{{ oferta.tienda.direccion }}
\t\t\t\t</p>
\t\t\t</section>
\t\t\t<section class=\"tienda\">
\t\t\t\t<h2>Sobre la tienda</h2>
\t\t\t\t{{ oferta.tienda.descripcion }}
\t\t\t</section>
\t\t</article>
\t\t<aside>
\t\t\t## FORMULARIO DE LOGIN ##
\t\t\t<section id=\"nosotros\">
\t\t\t\t<h2>Sobre nosotros</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet...</p>
\t\t\t</section>
\t\t</aside>
\t\t<footer>
\t\t\t&copy; {{ 'now' | date('Y') }} - Cupon
\t\t\t<a href=\"{{ path('pagina_estatica', { 'pagina': 'ayuda' }) }}\">Ayuda</a>
\t\t\t<a href=\"{{ path('pagina_estatica', { 'pagina': 'contacto' }) }}\">Contacto</a>
\t\t\t<a href=\"{{ path('pagina_estatica', { 'pagina': 'privacidad' }) }}\">Privacidad</a>
\t\t\t<a href=\"{{ path('pagina_estatica', { 'pagina': 'sobre-nosotros' }) }}\">Sobre nosotros</a>
\t\t</footer>
\t</div>
</body>
</html>", "OfertaBundle:Default:portada.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\OfertaBundle/Resources/views/Default/portada.html.twig");
    }
}
