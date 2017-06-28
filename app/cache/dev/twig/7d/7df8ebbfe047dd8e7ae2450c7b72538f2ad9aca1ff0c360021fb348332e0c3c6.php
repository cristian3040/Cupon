<?php

/* OfertaBundle:Default:includes/oferta.html.twig */
class __TwigTemplate_3e5a8032f363bd24eba2484dc40529e63b43f90c88b289bd893ff09717f480a6 extends Twig_Template
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
        echo "
\t<section class=\"descripcion\">
\t\t\t\t<h1><a href=\"#\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
        echo "</a></h1>
\t\t\t\t";
        // line 4
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descripcion", array()), 100, true), "html", null, true);
        echo "
\t\t\t\t<a class=\"boton\" href=\"#\">Comprar</a>
\t\t\t</section>
\t\t\t<section class=\"galeria\">
\t\t\t\t<img alt=\"Fotografía de la oferta\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(        // line 9
(isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "rutaFoto", array()))), "html", null, true);
        echo "\">
\t\t\t\t<p class=\"precio\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descuento", array()), "html", null, true);
        // line 11
        echo "</span></p>
\t\t\t\t<p><strong>Condiciones:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "condiciones", array()), "html", null, true);
        echo "</p>
\t\t\t</section>
\t\t\t<section class=\"estado\">
\t\t\t\t<div class=\"tiempo\">
\t\t\t\t\t<strong>Faltan</strong>: ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array())), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"compras\">
\t\t\t\t\t<strong>Compras</strong>: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"faltan\">
\t\t\t\t\t";
        // line 22
        $context["faltan"] = ($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "umbral", array()) - $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "compras", array()));
        // line 23
        echo "\t\t\t\t\t\t";
        if (((isset($context["faltan"]) ? $context["faltan"] : $this->getContext($context, "faltan")) > 0)) {
            // line 24
            echo "\t\t\t\t\t\t\tFaltan <strong>";
            echo twig_escape_filter($this->env, (isset($context["faltan"]) ? $context["faltan"] : $this->getContext($context, "faltan")), "html", null, true);
            echo " compras</strong> <br/>
\t\t\t\t\t\t\tpara activar la oferta
\t\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t\t<strong>Oferta activada</strong> por superar las
\t\t\t\t\t\t\t<strong>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "umbral", array()), "html", null, true);
            echo "</strong> compras necesarias
\t\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"direccion\">
\t\t\t\t\t<h2>Disfruta de la oferta en</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"#\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "nombre", array()), "html", null, true);
        echo "</a>
\t\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "direccion", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t\t<section class=\"tienda\">
\t\t\t\t\t<h2>Sobre la tienda</h2>
\t\t\t\t\t";
        // line 41
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
        return array (  104 => 41,  96 => 36,  92 => 35,  85 => 30,  80 => 28,  77 => 27,  70 => 24,  67 => 23,  65 => 22,  59 => 19,  53 => 16,  46 => 12,  43 => 11,  39 => 10,  35 => 9,  34 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
\t<section class=\"descripcion\">
\t\t\t\t<h1><a href=\"#\">{{ oferta.nombre }}</a></h1>
\t\t\t\t{{ oferta.descripcion | truncate(100, true) }}
\t\t\t\t<a class=\"boton\" href=\"#\">Comprar</a>
\t\t\t</section>
\t\t\t<section class=\"galeria\">
\t\t\t\t<img alt=\"Fotografía de la oferta\" src=\"{{ asset('uploads/images/' ~
\t\t\t\toferta.rutaFoto) }}\">
\t\t\t\t<p class=\"precio\">{{ oferta.precio }} &euro; <span>{{ oferta.descuento
\t\t\t\t}}</span></p>
\t\t\t\t<p><strong>Condiciones:</strong> {{ oferta.condiciones }}</p>
\t\t\t</section>
\t\t\t<section class=\"estado\">
\t\t\t\t<div class=\"tiempo\">
\t\t\t\t\t<strong>Faltan</strong>: {{ oferta.fechaExpiracion | date() }}
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
\t\t\t\t</section>
\t\t\t\t<section class=\"direccion\">
\t\t\t\t\t<h2>Disfruta de la oferta en</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"#\">{{ oferta.tienda.nombre }}</a>
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
