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

    public function portadaAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $tienda = $this->get('security.context')->getToken()->getUser();
        $ofertas = $em->getRepository('TiendaBundle:Tienda')->findOfertasRecientes($tienda->getId());
        return $this->render('TiendaBundle:Extranet:portada.html.twig', array('ofertas' => $ofertas));
    }

    public function ofertaVentasAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ventas = $em->getRepository('OfertaBundle:Oferta')
        ->findVentasByOferta($id);
        return $this->render('TiendaBundle:Extranet:ventas.html.twig', array(
            'oferta' => $ventas[0]->getOferta(),
            'ventas' => $ventas
            ));
    }

    public function perfilAction(){
        $peticion = $this->getRequest();
        $tienda = $this->get('security.context')->getToken()->getUser();
        $formulario = $this->createForm(new TiendaType(), $tienda);
        $formulario->handleRequest($peticion);
        if ($formulario->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tienda);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info',
                'Los datos de tu perfil se han actualizado correctamente'
                );
            return $this->redirect(
                $this->generateUrl('extranet_portada')
                );
        }
        return $this->render('TiendaBundle:Extranet:perfil.html.twig', array(
            'tienda' => $tienda,
            'formulario' => $formulario->createView()
            ));
    }
}