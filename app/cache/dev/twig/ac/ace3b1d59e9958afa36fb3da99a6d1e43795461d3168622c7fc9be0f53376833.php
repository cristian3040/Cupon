<?php

/* CiudadBundle:Default:listaCiudades.html.twig */
class __TwigTemplate_0663f781f17114b26c8100cb275137ea0fbe1453dbc9b5fe4603cbf84ed2c780 extends Twig_Template
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
        echo "<select id=\"ciudadseleccionada\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ciudades"]) ? $context["ciudades"] : $this->getContext($context, "ciudades")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 3
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "slug", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ciudad_cambiar", array("ciudad" => $this->getAttribute($context["ciudad"], "slug", array()))), "html", null, true);
            echo "\"  ";
            echo ((((isset($context["ciudadActual"]) ? $context["ciudadActual"] : $this->getContext($context, "ciudadActual")) == $this->getAttribute($context["ciudad"], "slug", array()))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "nombre", array()), "html", null, true);
            echo "</option>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</select>
<script type=\"text/javascript\">
\tvar lista = document.getElementById('ciudadseleccionada');

\tlista.onchange = function(){
\t\tvar url = lista.options[lista.selectedIndex].getAttribute('data-url');
\t\twindow.location = url;
\t};
</script>";
    }

    public function getTemplateName()
    {
        return "CiudadBundle:Default:listaCiudades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<select id=\"ciudadseleccionada\">
\t{% for ciudad in ciudades %}
\t\t<option value=\"{{ ciudad.slug }}\" data-url=\"{{ url('ciudad_cambiar', {'ciudad': ciudad.slug }) }}\"  {{ ciudadActual == ciudad.slug ? 'selected=\"selected\"' : '' }}>{{ ciudad.nombre }}</option>
\t{% endfor %}
</select>
<script type=\"text/javascript\">
\tvar lista = document.getElementById('ciudadseleccionada');

\tlista.onchange = function(){
\t\tvar url = lista.options[lista.selectedIndex].getAttribute('data-url');
\t\twindow.location = url;
\t};
</script>", "CiudadBundle:Default:listaCiudades.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\CiudadBundle/Resources/views/Default/listaCiudades.html.twig");
    }
}
