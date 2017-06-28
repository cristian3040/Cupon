<?php

/* UsuarioBundle:Default:compras.html.twig */
class __TwigTemplate_2fade8b8afac114643b2fb00fff73333c5a5de93301249f114c8c10f0a84bf65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "UsuarioBundle:Default:compras.html.twig", 1);
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
        echo "Últimas ofertas que has comprado";
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "compras";
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["compras"]) ? $context["compras"] : $this->getContext($context, "compras")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["compra"]) {
            // line 7
            echo "\t\t\t\t";
            $this->loadTemplate("OfertaBundle:Default:includes/minioferta.html.twig", "UsuarioBundle:Default:compras.html.twig", 7)->display(array_merge($context, array("oferta" => $this->getAttribute($context["compra"], "oferta", array()), "comprada" => true, "fechaCompra" => $this->getAttribute($context["compra"], "fecha", array()))));
            // line 8
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t";
    }

    // line 10
    public function block_aside($context, array $blocks = array())
    {
        // line 11
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:compras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 11,  89 => 10,  85 => 9,  71 => 8,  68 => 7,  51 => 6,  46 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
{% block title %}Últimas ofertas que has comprado{% endblock %}
\t{% block id 'compras' %}
\t\t{% block article %}
\t\t\t<h1>{{ block('title') }}</h1>
\t\t\t{% for compra in compras %}
\t\t\t\t{% include 'OfertaBundle:Default:includes/minioferta.html.twig' with { 'oferta': compra.oferta, 'comprada': true, 'fechaCompra': compra.fecha} %}
\t\t\t{% endfor %}
\t\t{% endblock %}
\t\t{% block aside %}
\t\t{% endblock %}", "UsuarioBundle:Default:compras.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\UsuarioBundle/Resources/views/Default/compras.html.twig");
    }
}
