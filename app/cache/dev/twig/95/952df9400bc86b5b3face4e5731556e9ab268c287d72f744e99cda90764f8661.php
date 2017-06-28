<?php

/* OfertaBundle:Default:detalle.html.twig */
class __TwigTemplate_b8b472be0055a6932b001c8dacad874e5448230d68eb6d289af24ba1f204245e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "OfertaBundle:Default:detalle.html.twig", 1);
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
        echo " Detalles de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "oferta";
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->loadTemplate("OfertaBundle:Default:includes/oferta.html.twig", "OfertaBundle:Default:detalle.html.twig", 5)->display($context);
    }

    // line 7
    public function block_aside($context, array $blocks = array())
    {
        echo "  
\t";
        // line 8
        $this->displayParentBlock("aside", $context, $blocks);
        echo "
\t<section id=\"relacionadas\">
\t\t<h2>Ofertas en otras ciudades</h2>
\t\t<ul>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relacionadas"]) ? $context["relacionadas"] : $this->getContext($context, "relacionadas")));
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 13
            echo "\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "ciudad", array()), "nombre", array()), "html", null, true);
            echo ": <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute(            // line 14
$context["oferta"], "ciudad", array()), "slug", array()), "slug" => $this->getAttribute($context["oferta"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "nombre", array()), "html", null, true);
            // line 15
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t</ul>
\t</section>
\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  57 => 8,  52 => 7,  47 => 5,  44 => 4,  38 => 3,  31 => 2,  11 => 1,);
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
{% block title %} Detalles de {{ oferta.nombre }}{% endblock %}
{% block id 'oferta' %} 
{% block article %}
\t{% include 'OfertaBundle:Default:includes/oferta.html.twig' %}
{% endblock %}
{% block aside %}  
\t{{ parent() }}
\t<section id=\"relacionadas\">
\t\t<h2>Ofertas en otras ciudades</h2>
\t\t<ul>
\t\t\t{% for oferta in relacionadas %}
\t\t\t\t<li>{{ oferta.ciudad.nombre }}: <a href=\"{{ path('oferta', {
\t\t\t\t\t'ciudad': oferta.ciudad.slug, 'slug': oferta.slug }) }}\">{{ oferta.nombre
\t\t\t\t}}</a></li>
\t\t\t{% endfor %}
\t\t</ul>
\t</section>
\t\t\t\t
{% endblock %}", "OfertaBundle:Default:detalle.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\OfertaBundle/Resources/views/Default/detalle.html.twig");
    }
}
