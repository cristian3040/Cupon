<?php

/* OfertaBundle:Default:portada.html.twig */
class __TwigTemplate_2a061b045d1a850775495e0c950ca8a6b1d1b95fa0494bc7dd8aced75894f00c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "OfertaBundle:Default:portada.html.twig", 1);
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
        echo " Portada
";
        // line 3
        $this->displayBlock('id', $context, $blocks);
        echo " ";
    }

    public function block_id($context, array $blocks = array())
    {
        echo "portada";
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->loadTemplate("OfertaBundle:Default:includes/oferta.html.twig", "OfertaBundle:Default:portada.html.twig", 5)->display($context);
    }

    // line 7
    public function block_aside($context, array $blocks = array())
    {
        echo "  
\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oferta", array("slug" => $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "slug", array()), "ciudad" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "ciudad", array()), "slug", array()))), "html", null, true);
        echo "\">Oferta del día</a></li>
\t
";
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
        return array (  59 => 8,  54 => 7,  49 => 5,  46 => 4,  36 => 3,  31 => 2,  11 => 1,);
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
{% block title %} Portada
{% block id 'portada' %} {% endblock %}
{% block article %}
\t{% include 'OfertaBundle:Default:includes/oferta.html.twig' %}
{% endblock %}
{% block aside %}  
\t<a href=\"{{ path('oferta', { 'slug': oferta.slug, 'ciudad': oferta.ciudad.slug }) }}\">Oferta del día</a></li>
\t
{% endblock %}", "OfertaBundle:Default:portada.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\OfertaBundle/Resources/views/Default/portada.html.twig");
    }
}
