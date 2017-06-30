<?php

/* UsuarioBundle:Default:cajaLogin.html.twig */
class __TwigTemplate_735b6940431e5c1526625b31ac0907abb4b19d64bad66f154ae454a6fa22f918 extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USUARIO")) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 3
                echo "\t\t<p class=\"info\">";
                echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
                echo "</p>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 5
            echo "\t<p>Conectado como ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array())), "html", null, true);
            echo "</p>
\t<a href=\"#\">Ver mi perfil</a>
\t<a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_logout");
            echo "\">Cerrar sesión</a>
";
        } else {
            // line 9
            echo "\t<a class=\"boton\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_registro");
            echo "\">Regístrate</a>
\t<h2>Accede a tu cuenta</h2>
\t<form action=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_login_check");
            echo "\" method=\"post\">
\t\t";
            // line 12
            if (array_key_exists("error", $context)) {
                // line 13
                echo "\t\t\t<div>";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "")) : ("")), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 15
            echo "\t\t<label for=\"login_user\">Email</label>
\t\t<input id=\"login_user\" type=\"text\" name=\"_username\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "")) : ("")), "html", null, true);
            echo "\" />
\t\t<label for=\"login_pass\">Contraseña</label>
\t\t<input id=\"login_pass\" type=\"password\" name=\"_password\" />
\t\t<input type=\"submit\" value=\"Entrar\" />
\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
\t\t<label for=\"remember_me\">No cerrar sesión</label>
\t</form>
";
        }
        // line 23
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:cajaLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  67 => 16,  64 => 15,  58 => 13,  56 => 12,  52 => 11,  46 => 9,  41 => 7,  35 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted('ROLE_USUARIO') %}
\t{% for mensaje in app.session.flashbag.get('info') %}
\t\t<p class=\"info\">{{ mensaje }}</p>
\t{% endfor %}
\t<p>Conectado como {{ app.user.nombre ~ ' ' ~ app.user.apellidos }}</p>
\t<a href=\"#\">Ver mi perfil</a>
\t<a href=\"{{ path('usuario_logout') }}\">Cerrar sesión</a>
{% else %}
\t<a class=\"boton\" href=\"{{ path('usuario_registro') }}\">Regístrate</a>
\t<h2>Accede a tu cuenta</h2>
\t<form action=\"{{ path('usuario_login_check') }}\" method=\"post\">
\t\t{% if error is defined %}
\t\t\t<div>{{ error.message|default('') }}</div>
\t\t{% endif %}
\t\t<label for=\"login_user\">Email</label>
\t\t<input id=\"login_user\" type=\"text\" name=\"_username\" value=\"{{ last_username | default('') }}\" />
\t\t<label for=\"login_pass\">Contraseña</label>
\t\t<input id=\"login_pass\" type=\"password\" name=\"_password\" />
\t\t<input type=\"submit\" value=\"Entrar\" />
\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
\t\t<label for=\"remember_me\">No cerrar sesión</label>
\t</form>
{% endif %}\t
", "UsuarioBundle:Default:cajaLogin.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\UsuarioBundle/Resources/views/Default/cajaLogin.html.twig");
    }
}
