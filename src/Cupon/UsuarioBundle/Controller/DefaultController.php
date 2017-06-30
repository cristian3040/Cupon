<?php

namespace Cupon\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Cupon\UsuarioBundle\Entity\Usuario;
use Cupon\UsuarioBundle\Form\Frontend\UsuarioType;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UsuarioBundle:Default:index.html.twig', array('name' => $name));
    }

    public function comprasAction()
    {
    	$usuario_id = 11;
    	$em = $this->getDoctrine()->getManager();
    	$compras = $em->getRepository('UsuarioBundle:Usuario')->findTodasLasCompras($usuario_id);
    	return $this->render('UsuarioBundle:Default:compras.html.twig', array('compras' => $compras));
    }

    public function loginAction()
    {
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $error = $peticion->attributes->get(
            SecurityContext::AUTHENTICATION_ERROR,
            $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
            );
        return $this->render('UsuarioBundle:Default:login.html.twig', array(
            'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
            'error' => $error
            ));
    }

    public function cajaLoginAction()
    {
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $error = $peticion->attributes->get(
            SecurityContext::AUTHENTICATION_ERROR,
            $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
            );
        return $this->render('UsuarioBundle:Default:cajaLogin.html.twig', array(
            'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
            'error' => $error
            ));
    }

    public function registroAction()
    {
        $peticion = $this->getRequest();
        $usuario = new Usuario();
        $formulario = $this->createForm(new UsuarioType(), $usuario);

        $formulario->handleRequest($peticion);
        if ($formulario->isValid()) {
            $usuario->setSalt('');
            $usuario->setFechaAlta(new \DateTime('now - '.mt_rand(1, 150).' days'));    
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info','¡Enhorabuena! Te has registrado correctamente en Cupon');
            $token = new UsernamePasswordToken(
                $usuario,
                $usuario->getPassword(),
                'frontend',
                $usuario->getRoles()
                );
            $this->container->get('security.context')->setToken($token);
            return $this->redirect($this->generateUrl('portada', array('ciudad' => $usuario->getCiudad()->getSlug())));
        }
    return $this->render('UsuarioBundle:Default:registro.html.twig',
                            array('formulario' => $formulario->createView()));
    }

    public function perfilAction()
    {
        $usuario = $this->get('security.context')->getToken()->getUser();
        $formulario = $this->createForm(new UsuarioType(), $usuario);
        $peticion = $this->getRequest();
        $formulario->handleRequest($peticion);
        if ($formulario->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info',
                'Los datos de tu perfil se han actualizado correctamente'
                );
            return $this->redirect($this->generateUrl('usuario_perfil'));
        }
        return $this->render('UsuarioBundle:Default:perfil.html.twig', array(
            'usuario' => $usuario,
            'formulario' => $formulario->createView()
            ));
    }



}
