<?php
namespace Cupon\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class ExtranetController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TiendaBundle:Default:index.html.twig', array('name' => $name));
    }

    public function loginAction()
    {
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $error = $peticion->attributes->get(
            SecurityContext::AUTHENTICATION_ERROR,
            $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
            );
        return $this->render('TiendaBundle:Extranet:login.html.twig', array(
            'error' => $error
            ));
    }

    public function portadaAction($ciudad, $tienda)
    {
    	$em = $this->getDoctrine()->getManager();
    	$ciudad = $em->getRepository('CiudadBundle:Ciudad')->findOneBySlug($ciudad);
    	$tienda = $em->getRepository('TiendaBundle:Tienda')->findOneBy(array(
    		'slug' => $tienda,
    		'ciudad' => $ciudad->getId()
    		));
        if (!$tienda) {
            throw $this->createNotFoundException('No existe la tienda');
        }

    	if (!$tienda) {
    		throw $this->createNotFoundException('No existe esta tienda');
    	}

    	$ofertas = $em->getRepository('TiendaBundle:Tienda')->findUltimasOfertasPublicadas($tienda->getId());
    	$cercanas = $em->getRepository('TiendaBundle:Tienda')->findCercanas($tienda->getSlug(),$tienda->getCiudad()->getSlug());
    	return $this->render('TiendaBundle:Default:portada.html.twig', array(
    		'tienda' => $tienda,
    		'ofertas' => $ofertas,
    		'cercanas' => $cercanas
    		));
    }
}