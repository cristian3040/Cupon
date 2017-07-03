<?php

/* OfertaBundle:Default:includes/oferta.html.twig */
class __TwigTemplate_8cd03ed47776b1f098695bc9cfb5b8c3a5a562e8b1b92467995139279c822306 extends Twig_Template
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
        $context["expirada"] = (twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array()), "YmdHis") < twig_date_format_filter($this->env, "now", "YmdHis"));
        // line 2
        echo "\t<section class=\"descripcion\">
\t\t\t\t<h1><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "ciudad", array()), "slug", array()), "slug" => $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
        echo "</a></h1>
\t\t\t\t";
        // line 4
        echo $this->env->getExtension('Cupon\OfertaBundle\Twig\Extension\CuponExtension')->mostrarComoLista($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descripcion", array()));
        echo "
\t\t\t\t";
        // line 5
        if ( !(isset($context["expirada"]) ? $context["expirada"] : $this->getContext($context, "expirada"))) {
            // line 6
            echo "\t\t\t\t\t<a class=\"boton\" href=\"#\">Comprar</a>
\t\t\t\t";
        }
        // line 8
        echo "\t\t\t</section>
\t\t\t<section class=\"galeria\">
\t\t\t\t<img alt=\"Fotografía de la oferta\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(((isset($context["directorio_imagenes"]) ? $context["directorio_imagenes"] : $this->getContext($context, "directorio_imagenes")) . $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "rutaFoto", array()))), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"precio\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Cupon\OfertaBundle\Twig\Extension\CuponExtension')->descuento($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descuento", array())), "html", null, true);
        echo "</span></p>
\t\t\t\t<p><strong>Condiciones:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "condiciones", array()), "html", null, true);
        echo "</p>
\t\t\t</section>
\t\t\t<section class=\"estado ";
        // line 14
        echo (((isset($context["expirada"]) ? $context["expirada"] : $this->getContext($context, "expirada"))) ? ("expirada") : (""));
        echo "\">
\t\t\t";
        // line 15
        if ( !(isset($context["expirada"]) ? $context["expirada"] : $this->getContext($context, "expirada"))) {
            // line 16
            echo "\t\t\t\t<div class=\"tiempo\">
\t\t\t\t\t<strong>Faltan</strong>: ";
            // line 17
            echo $this->env->getExtension('Cupon\OfertaBundle\Twig\Extension\CuponExtension')->cuentaAtras($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array()), $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array()));
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"compras\">
\t\t\t\t\t<strong>Compras</strong>: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"faltan\">
\t\t\t\t\t";
            // line 23
            $context["faltan"] = ($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "umbral", array()) - $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()));
            // line 24
            echo "\t\t\t\t\t\t";
            if (((isset($context["faltan"]) ? $context["faltan"] : $this->getContext($context, "faltan")) > 0)) {
                // line 25
                echo "\t\t\t\t\t\t\tFaltan <strong>";
                echo twig_escape_filter($this->env, (isset($context["faltan"]) ? $context["faltan"] : $this->getContext($context, "faltan")), "html", null, true);
                echo " compras</strong> <br/>
\t\t\t\t\t\t\tpara activar la oferta
\t\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t\t\t<strong>Oferta activada</strong> por superar las
\t\t\t\t\t\t\t<strong>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "umbral", array()), "html", null, true);
                echo "</strong> compras necesarias
\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t</div>
\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t<div class=\"tiempo\">
\t\t\t\t\t<strong>Finalizada</strong> el ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array())), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"compras\">
\t\t\t\t\t<strong>Compras</strong>: ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 40
        echo "\t\t\t\t</section>
\t\t\t\t<section class=\"direccion\">
\t\t\t\t\t<h2>Disfruta de la oferta en</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tienda_portada", array("ciudad" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "ciudad", array()), "slug", array()), "tienda" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "nombre", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "direccion", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t\t<section class=\"tienda\">
\t\t\t\t\t<h2>Sobre la tienda</h2>
\t\t\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "descripcion", array()), "html", null, true);
        echo "
\t\t\t\t</section>
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:includes/oferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 50,  131 => 45,  125 => 44,  119 => 40,  113 => 37,  107 => 34,  104 => 33,  100 => 31,  95 => 29,  92 => 28,  85 => 25,  82 => 24,  80 => 23,  74 => 20,  68 => 17,  65 => 16,  63 => 15,  59 => 14,  54 => 12,  48 => 11,  44 => 10,  40 => 8,  36 => 6,  34 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set expirada=oferta.fechaExpiracion|date('YmdHis') < 'now'|date('YmdHis') %}
\t<section class=\"descripcion\">
\t\t\t\t<h1><a href=\"{{ path('oferta', { 'ciudad': oferta.ciudad.slug, 'slug' :oferta.slug }) }}\">{{ oferta.nombre }}</a></h1>
\t\t\t\t{{ oferta.descripcion | mostrar_como_lista }}
\t\t\t\t{% if not expirada %}
\t\t\t\t\t<a class=\"boton\" href=\"#\">Comprar</a>
\t\t\t\t{% endif %}
\t\t\t</section>
\t\t\t<section class=\"galeria\">
\t\t\t\t<img alt=\"Fotografía de la oferta\" src=\"{{ asset(directorio_imagenes~oferta.rutaFoto) }}\">
\t\t\t\t<p class=\"precio\">{{ oferta.precio }} &euro; <span>{{ descuento(oferta.precio, oferta.descuento) }}</span></p>
\t\t\t\t<p><strong>Condiciones:</strong> {{ oferta.condiciones }}</p>
\t\t\t</section>
\t\t\t<section class=\"estado {{ expirada ? 'expirada' : '' }}\">
\t\t\t{% if not expirada %}
\t\t\t\t<div class=\"tiempo\">
\t\t\t\t\t<strong>Faltan</strong>: {{ oferta.fechaExpiracion | cuenta_atras(oferta.fechaExpiracion) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"compras\">
\t\t\t\t\t<strong>Compras</strong>: {{ oferta.compras }}
\t\t\t\t</div>
\t\t\t\t<div class=\"faltan\">
\t\t\t\t\t{% set faltan = oferta.umbral - oferta.compras %}
\t\t\t\t\t\t{% if faltan > 0 %}
\t\t\t\t\t\t\tFaltan <strong>{{ faltan }} compras</strong> <br/>
\t\t\t\t\t\t\tpara activar la oferta
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<strong>Oferta activada</strong> por superar las
\t\t\t\t\t\t\t<strong>{{ oferta.umbral }}</strong> compras necesarias
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"tiempo\">
\t\t\t\t\t<strong>Finalizada</strong> el {{ oferta.fechaExpiracion | date() }}
\t\t\t\t</div>
\t\t\t\t<div class=\"compras\">
\t\t\t\t\t<strong>Compras</strong>: {{ oferta.compras }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t\t</section>
\t\t\t\t<section class=\"direccion\">
\t\t\t\t\t<h2>Disfruta de la oferta en</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"{{ path('tienda_portada', { 'ciudad': oferta.ciudad.slug, 'tienda': oferta.tienda.slug }) }}\">{{ oferta.tienda.nombre }}</a>
\t\t\t\t\t\t{{ oferta.tienda.direccion }}
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t\t<section class=\"tienda\">
\t\t\t\t\t<h2>Sobre la tienda</h2>
\t\t\t\t\t{{ oferta.tienda.descripcion }}
\t\t\t\t</section>
", "OfertaBundle:Default:includes/oferta.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\OfertaBundle/Resources/views/Default/includes/oferta.html.twig");
    }
}
