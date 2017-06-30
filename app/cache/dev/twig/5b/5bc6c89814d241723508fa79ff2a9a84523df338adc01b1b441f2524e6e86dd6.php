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
        echo "<h2>Accede a tu cuenta</h2>
<form action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_login_check");
        echo "\" method=\"post\">
\t";
        // line 3
        if (array_key_exists("error", $context)) {
            // line 4
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 6
        echo "\t<label for=\"login_user\">Email</label>
\t<input id=\"login_user\" type=\"text\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t<label for=\"login_pass\">Contraseña</label>
\t<input id=\"login_pass\" type=\"password\" name=\"_password\" />
\t<input type=\"submit\" value=\"Entrar\" />
</form>";
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
        return array (  37 => 7,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Accede a tu cuenta</h2>
<form action=\"{{ path('usuario_login_check') }}\" method=\"post\">
\t{% if error is defined %}
\t\t<div>{{ error.message }}</div>
\t{% endif %}
\t<label for=\"login_user\">Email</label>
\t<input id=\"login_user\" type=\"text\" name=\"_username\" value=\"{{ last_username }}\" />
\t<label for=\"login_pass\">Contraseña</label>
\t<input id=\"login_pass\" type=\"password\" name=\"_password\" />
\t<input type=\"submit\" value=\"Entrar\" />
</form>", "UsuarioBundle:Default:cajaLogin.html.twig", "C:\\inetpub\\wwwroot\\Cupon1\\src\\Cupon\\UsuarioBundle/Resources/views/Default/cajaLogin.html.twig");
    }
}
