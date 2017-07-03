<?php

/* TiendaBundle:Extranet:portada.html.twig */
class __TwigTemplate_b35bc72b84960202facfcecd79929e8e10f58b91a9c857cca73ecbc652657350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::extranet.html.twig", "TiendaBundle:Extranet:portada.html.twig", 1);
        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::extranet.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_id($context, array $blocks = array())
    {
        echo "portada";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Administración de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t<h1>Todas tus ofertas</h1>
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Revisada</th>
\t\t\t\t\t\t<th>Se publica</th>
\t\t\t\t\t\t<th>Finaliza</th>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Ventas</th>
\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas")));
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 19
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 20
            echo (($this->getAttribute($context["oferta"], "revisada", array())) ? ("si") : ("no"));
            echo "</td>
\t\t\t\t\t\t\t";
            // line 21
            if ($this->getAttribute($context["oferta"], "revisada", array())) {
                // line 22
                echo "\t\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["oferta"], "fechaPublicacion", array()), "medium", "short"), "html", null, true);
                // line 23
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 24
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["oferta"], "fechaExpiracion", array()), "medium", "short"), "html", null, true);
                // line 25
                echo "</td>
\t\t\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t\t\t<td colspan=\"2\">Pendiente de revisión</td>
\t\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "compras", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
            // line 33
            if (($this->getAttribute($context["oferta"], "compras", array()) > 0)) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extranet_oferta_ventas", array("id" => $this->getAttribute(                // line 36
$context["oferta"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\tLista de ventas
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["oferta"], "revisada", array())) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("extranet_oferta_editar", array("id" => $this->getAttribute(                // line 44
$context["oferta"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\tModificar
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "TiendaBundle:Extranet:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 53,  130 => 49,  122 => 44,  121 => 43,  118 => 42,  115 => 41,  107 => 36,  106 => 35,  103 => 34,  101 => 33,  95 => 30,  90 => 29,  86 => 27,  82 => 25,  80 => 24,  77 => 23,  74 => 22,  72 => 21,  68 => 20,  65 => 19,  61 => 18,  46 => 5,  43 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::extranet.html.twig' %}
{% block id 'portada' %}
\t{% block title %}Administración de {{ app.user.nombre }}{% endblock %}
\t\t{% block article %}
\t\t\t<h1>Todas tus ofertas</h1>
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Revisada</th>
\t\t\t\t\t\t<th>Se publica</th>
\t\t\t\t\t\t<th>Finaliza</th>
\t\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t\t<th>Ventas</th>
\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for oferta in ofertas %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ oferta.revisada ? 'si' : 'no' }}</td>
\t\t\t\t\t\t\t{% if oferta.revisada %}
\t\t\t\t\t\t\t\t<td>{{ oferta.fechaPublicacion | localizeddate('medium', 'short')
\t\t\t\t\t\t\t\t}}</td>
\t\t\t\t\t\t\t\t<td>{{ oferta.fechaExpiracion | localizeddate('medium', 'short')
\t\t\t\t\t\t\t\t}}</td>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<td colspan=\"2\">Pendiente de revisión</td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<td>{{ oferta.nombre }}</td>
\t\t\t\t\t\t\t<td>{{ oferta.compras }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t{% if oferta.compras > 0 %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('extranet_oferta_ventas',
\t\t\t\t\t\t\t\t\t\t\t{ 'id': oferta.id }) }}\">
\t\t\t\t\t\t\t\t\t\t\tLista de ventas
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if not oferta.revisada %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('extranet_oferta_editar',
\t\t\t\t\t\t\t\t\t\t{ 'id': oferta.id }) }}\">
\t\t\t\t\t\t\t\t\t\tModificar
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
{% endblock %}", "TiendaBundle:Extranet:portada.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\TiendaBundle/Resources/views/Extranet/portada.html.twig");
    }
}
