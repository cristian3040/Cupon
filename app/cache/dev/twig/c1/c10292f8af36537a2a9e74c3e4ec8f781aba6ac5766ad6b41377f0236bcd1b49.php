<?php

/* OfertaBundle:Default:includes/minioferta.html.twig */
class __TwigTemplate_b4e4f44d369b883e942baeff5c4c67d884b0d0bcdf2809ea794a7b88f405e6ed extends Twig_Template
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
        $context["comprada"] = ((array_key_exists("comprada", $context)) ? (_twig_default_filter((isset($context["comprada"]) ? $context["comprada"] : $this->getContext($context, "comprada")), false)) : (false));
        // line 3
        echo "<section class=\"oferta mini\">
\t<div class=\"descripcion\">
\t\t<h2><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "ciudad", array()), "slug", array()), "slug" => $this->getAttribute(        // line 6
(isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
        echo "</a></h2>
\t\t\t";
        // line 7
        echo $this->env->getExtension('Cupon\OfertaBundle\Twig\Extension\CuponExtension')->mostrarComoLista($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descripcion", array()));
        echo "
\t\t\t";
        // line 8
        if (( !(isset($context["expirada"]) ? $context["expirada"] : $this->getContext($context, "expirada")) &&  !(isset($context["comprada"]) ? $context["comprada"] : $this->getContext($context, "comprada")))) {
            // line 9
            echo "\t\t\t\t<a class=\"boton\" href=\"#\">Comprar</a>
\t\t\t";
        }
        // line 11
        echo "\t\t\t<div class=\"estado ";
        echo (((isset($context["expirada"]) ? $context["expirada"] : $this->getContext($context, "expirada"))) ? ("expirada") : (""));
        echo " ";
        echo (((isset($context["comprada"]) ? $context["comprada"] : $this->getContext($context, "comprada"))) ? ("comprada") : (""));
        echo "\">
\t\t\t\t";
        // line 12
        if ((isset($context["comprada"]) ? $context["comprada"] : $this->getContext($context, "comprada"))) {
            // line 13
            echo "\t\t\t\t\tComprada el ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fechaCompra"]) ? $context["fechaCompra"] : $this->getContext($context, "fechaCompra")), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t";
        } elseif ( !        // line 14
(isset($context["expirada"]) ? $context["expirada"] : $this->getContext($context, "expirada"))) {
            // line 15
            echo "\t\t\t\t\t<strong>Faltan</strong>: ";
            echo $this->env->getExtension('Cupon\OfertaBundle\Twig\Extension\CuponExtension')->cuentaAtras($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array()));
            echo "
\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\tFinalizada el ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"galeria\">
\t\t\t<img alt=\"Fotografía de la oferta\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "rutaFoto", array()))), "html", null, true);
        echo "\">
\t\t\t<p class=\"precio\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Cupon\OfertaBundle\Twig\Extension\CuponExtension')->descuento($this->getAttribute(        // line 24
(isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descuento", array())), "html", null, true);
        echo "</span></p>
\t\t\t\t<p>Disfruta de esta oferta en <a href=\"#\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "nombre", array()), "html", null, true);
        echo "</a></p>
\t\t\t</div>
\t\t</section>";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:includes/minioferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  84 => 24,  81 => 23,  77 => 22,  72 => 19,  66 => 17,  60 => 15,  58 => 14,  53 => 13,  51 => 12,  44 => 11,  40 => 9,  38 => 8,  34 => 7,  28 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set expirada = oferta.fechaExpiracion|date('YmdHis') < 'now'|date('YmdHis') %}
{% set comprada = comprada | default(false) %}
<section class=\"oferta mini\">
\t<div class=\"descripcion\">
\t\t<h2><a href=\"{{ path('oferta', { 'ciudad': oferta.ciudad.slug, 'slug':
\t\t\toferta.slug }) }}\">{{ oferta.nombre }}</a></h2>
\t\t\t{{ oferta.descripcion | mostrar_como_lista }}
\t\t\t{% if not expirada and not comprada %}
\t\t\t\t<a class=\"boton\" href=\"#\">Comprar</a>
\t\t\t{% endif %}
\t\t\t<div class=\"estado {{ expirada ? 'expirada' : '' }} {{ comprada ? 'comprada':''}}\">
\t\t\t\t{% if comprada %}
\t\t\t\t\tComprada el {{ fechaCompra | date('d/m/Y') }}
\t\t\t\t{% elseif not expirada %}
\t\t\t\t\t<strong>Faltan</strong>: {{ oferta.fechaExpiracion | cuenta_atras }}
\t\t\t\t{% else %}
\t\t\t\t\tFinalizada el {{ oferta.fechaExpiracion | date('d/m/Y') }}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"galeria\">
\t\t\t<img alt=\"Fotografía de la oferta\" src=\"{{ asset('uploads/images/' ~oferta.rutaFoto) }}\">
\t\t\t<p class=\"precio\">{{ oferta.precio }} &euro; <span>{{
\t\t\t\tdescuento(oferta.precio, oferta.descuento) }}</span></p>
\t\t\t\t<p>Disfruta de esta oferta en <a href=\"#\">{{ oferta.tienda.nombre}}</a></p>
\t\t\t</div>
\t\t</section>", "OfertaBundle:Default:includes/minioferta.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\OfertaBundle/Resources/views/Default/includes/minioferta.html.twig");
    }
}
