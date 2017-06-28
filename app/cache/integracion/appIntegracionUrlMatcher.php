<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appIntegracionUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appIntegracionUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/hello')) {
            // usuario_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_homepage')), array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::indexAction',));
            }

            // tienda_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tienda_homepage')), array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\DefaultController::indexAction',));
            }

            // oferta_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oferta_homepage')), array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // pagina_ayuda
        if (rtrim($pathinfo, '/') === '/ayuda') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pagina_ayuda');
            }

            return array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::ayudaAction',  '_route' => 'pagina_ayuda',);
        }

        // pagina_estatica
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<pagina>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pagina_estatica');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagina_estatica')), array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\PostController::verPaginaAction',));
        }

        // portada
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portada');
            }

            return array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::portadaAction',  '_route' => 'portada',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
