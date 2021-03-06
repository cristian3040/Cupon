<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // _portada
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_portada');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'portada',  'ciudad' => 'barcelona',  '_route' => '_portada',);
        }

        // portada
        if (preg_match('#^/(?P<ciudad>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'portada')), array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::portadaAction',));
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_homepage
            if (0 === strpos($pathinfo, '/usuario/hello') && preg_match('#^/usuario/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_homepage')), array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::indexAction',));
            }

            // usuario_compras
            if ($pathinfo === '/usuario/compras') {
                return array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::comprasAction',  '_route' => 'usuario_compras',);
            }

            if (0 === strpos($pathinfo, '/usuario/log')) {
                if (0 === strpos($pathinfo, '/usuario/login')) {
                    // usuario_login
                    if ($pathinfo === '/usuario/login') {
                        return array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::loginAction',  '_route' => 'usuario_login',);
                    }

                    // usuario_login_check
                    if ($pathinfo === '/usuario/login_check') {
                        return array('_route' => 'usuario_login_check');
                    }

                }

                // usuario_logout
                if ($pathinfo === '/usuario/logout') {
                    return array('_route' => 'usuario_logout');
                }

            }

            // usuario_registro
            if ($pathinfo === '/usuario/registro') {
                return array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::registroAction',  '_route' => 'usuario_registro',);
            }

            // usuario_perfil
            if ($pathinfo === '/usuario/perfil') {
                return array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::perfilAction',  '_route' => 'usuario_perfil',);
            }

        }

        // tienda_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tienda_homepage')), array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/extranet')) {
            if (0 === strpos($pathinfo, '/extranet/log')) {
                if (0 === strpos($pathinfo, '/extranet/login')) {
                    // extranet_login
                    if ($pathinfo === '/extranet/login') {
                        return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::loginAction',  '_route' => 'extranet_login',);
                    }

                    // extranet_login_check
                    if ($pathinfo === '/extranet/login_check') {
                        return array('_route' => 'extranet_login_check');
                    }

                }

                // extranet_logout
                if ($pathinfo === '/extranet/logout') {
                    return array('_route' => 'extranet_logout');
                }

            }

            // extranet_portada
            if (rtrim($pathinfo, '/') === '/extranet') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'extranet_portada');
                }

                return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::portadaAction',  '_route' => 'extranet_portada',);
            }

            if (0 === strpos($pathinfo, '/extranet/oferta')) {
                // extranet_oferta_nueva
                if ($pathinfo === '/extranet/oferta/nueva') {
                    return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaNuevaAction',  '_route' => 'extranet_oferta_nueva',);
                }

                // extranet_oferta_editar
                if (0 === strpos($pathinfo, '/extranet/oferta/editar') && preg_match('#^/extranet/oferta/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'extranet_oferta_editar')), array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaEditarAction',));
                }

                // extranet_oferta_ventas
                if (0 === strpos($pathinfo, '/extranet/oferta/ventas') && preg_match('#^/extranet/oferta/ventas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'extranet_oferta_ventas')), array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaVentasAction',));
                }

            }

            // extranet_perfil
            if ($pathinfo === '/extranet/perfil') {
                return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::perfilAction',  '_route' => 'extranet_perfil',);
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

        // ciudad_cambiar
        if (0 === strpos($pathinfo, '/ciudad/cambiar-a') && preg_match('#^/ciudad/cambiar\\-a\\-(?P<ciudad>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_cambiar')), array (  '_controller' => 'Cupon\\CiudadBundle\\Controller\\DefaultController::cambiarAction',));
        }

        // oferta
        if (preg_match('#^/(?P<ciudad>[^/]++)/ofertas/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oferta')), array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::ofertaAction',));
        }

        // ciudad_recientes
        if (preg_match('#^/(?P<ciudad>[^/]++)/recientes$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_recientes')), array (  '_controller' => 'Cupon\\CiudadBundle\\Controller\\DefaultController::recientesAction',));
        }

        // tienda_portada
        if (preg_match('#^/(?P<ciudad>[^/]++)/tiendas/(?P<tienda>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tienda_portada')), array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\DefaultController::portadaAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
