<?php

/* CiudadBundle:Default:recientes.html.twig */
class __TwigTemplate_fd1011f33003ee9dd68286706814bf7e179ab400dc9486e4996c9daa8b923caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "CiudadBundle:Default:recientes.html.twig", 1);
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
        echo "Ofertas recientes en ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "nombre", array()), "html", null, true);
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "recientes";
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t<h1>Ofertas recientes en <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "nombre", array()), "html", null, true);
        echo "</strong></h1>
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 7
            echo "\t\t\t\t";
            $this->loadTemplate("OfertaBundle:Default:includes/minioferta.html.twig", "CiudadBundle:Default:recientes.html.twig", 7)->display($context);
            // line 8
            echo "\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 9
            echo "\t\t\t\t<p>Esta ciudad todavía no ha publicado ninguna oferta</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t";
    }

    // line 12
    public function block_aside($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t";
        $this->displayParentBlock("aside", $context, $blocks);
        echo "
\t\t\t<section id=\"cercanas\">
\t\t\t\t<h2>Ofertas en otras ciudades</h2>
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cercanas"]) ? $context["cercanas"] : $this->getContext($context, "cercanas")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 18
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ciudad_recientes", array("ciudad" => $this->getAttribute($context["ciudad"], "slug", array()))), "html", null, true);
            // line 19
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</ul>
\t\t\t</section>
\t\t";
    }

    public function getTemplateName()
    {
        return "CiudadBundle:Default:recientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 21,  115 => 19,  112 => 18,  108 => 17,  100 => 13,  97 => 12,  93 => 11,  86 => 9,  73 => 8,  70 => 7,  52 => 6,  47 => 5,  44 => 4,  38 => 3,  31 => 2,  11 => 1,);
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
{% block title %}Ofertas recientes en {{ ciudad.nombre }}{% endblock %}
\t{% block id 'recientes' %}
\t\t{% block article %}
\t\t\t<h1>Ofertas recientes en <strong>{{ ciudad.nombre }}</strong></h1>
\t\t\t{% for oferta in ofertas %}
\t\t\t\t{% include 'OfertaBundle:Default:includes/minioferta.html.twig' %}
\t\t\t{% else %}
\t\t\t\t<p>Esta ciudad todavía no ha publicado ninguna oferta</p>
\t\t\t{% endfor %}
\t\t{% endblock %}
\t\t{% block aside %}
\t\t\t{{ parent() }}
\t\t\t<section id=\"cercanas\">
\t\t\t\t<h2>Ofertas en otras ciudades</h2>
\t\t\t\t<ul>
\t\t\t\t\t{% for ciudad in cercanas %}
\t\t\t\t\t\t<li><a href=\"{{ path('ciudad_recientes', { 'ciudad': ciudad.slug })
\t\t\t\t\t\t}}\">{{ ciudad.nombre }}</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</section>
\t\t{% endblock %}", "CiudadBundle:Default:recientes.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\CiudadBundle/Resources/views/Default/recientes.html.twig");
    }
}
