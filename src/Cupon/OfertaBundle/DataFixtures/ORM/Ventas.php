<?php
// src/Cupon/CiudadBundle/DataFixtures/ORM/Ciudades.php
namespace Cupon\VentaBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\UsuarioBundle\Entity\Usuario;
use Cupon\OfertaBundle\Entity\Oferta;
use Cupon\OfertaBundle\Entity\Venta;

class Ventas extends AbstractFixture implements OrderedFixtureInterface
{
	public function getOrder()
    {
        return 50;
    }

	public function load(ObjectManager $manager)
	{
		$usuarios = $manager->getRepository('UsuarioBundle:Usuario')->findAll();
		$ofertas = $manager->getRepository('OfertaBundle:Oferta')->findAll();

		foreach ($usuarios as $usuario) {
            $compras = mt_rand(0, 3);
            $comprado = array();

            for ($i = 0; $i < $compras; ++$i) {
                $venta = new Venta();

                $venta->setFecha(new \DateTime('now - '.mt_rand(0, 250).' hours'));
				$oferta = $ofertas[array_rand($ofertas)];
                while (in_array($oferta->getId(), $comprado)
                       || $oferta->getRevisada() === false
                       || $oferta->getFechaPublicacion() > new \DateTime('now')) {
                    $oferta = $ofertas[array_rand($ofertas)];
                }
                $comprado[] = $oferta->getId();

                $venta->setOferta($oferta);
                $venta->setUsuario($usuario);

                $manager->persist($venta);

                $oferta->setCompras($oferta->getCompras() + 1);
                $manager->persist($oferta);
            }

            unset($comprado);
        }
        $manager->flush();

		
	}
}