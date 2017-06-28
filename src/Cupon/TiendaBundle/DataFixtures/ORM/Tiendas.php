<?php
// src/Cupon/CiudadBundle/DataFixtures/ORM/Ciudades.php
namespace Cupon\TiendaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\CiudadBundle\Entity\Ciudad;
use Cupon\TiendaBundle\Entity\Tienda;
class Tiendas extends AbstractFixture implements OrderedFixtureInterface
{
	public function getOrder()
    {
        return 20;
    }

	public function load(ObjectManager $manager)
	{
		$ciudades = $manager->getRepository('CiudadBundle:Ciudad')->findAll();
		foreach ($ciudades as $i => $ciudad) {
            $numeroTiendas = mt_rand(2, 5);
            for ($j = 1; $j <= $numeroTiendas; ++$j) {
                $tienda = new Tienda();
				$tienda->setNombre($this->getNombre());
                $tienda->setLogin('tienda'.$i);
                $tienda->setPassword('tienda'.$i);
				$tienda->setSalt('tienda'.$i);
                $tienda->setDescripcion($this->getDescripcion());
                $tienda->setDireccion($this->getDireccion($ciudad));
                $tienda->setCiudad($ciudad);
                $manager->persist($tienda);
            }
        }
        $manager->flush();
	}

	private function getNombre()
    {
        $prefijos = array('Restaurante', 'Cafetería', 'Bar', 'Pub', 'Pizza', 'Burger');
        $nombres = array(
            'Lorem ipsum', 'Sit amet', 'Consectetur', 'Adipiscing elit',
            'Nec sapien', 'Tincidunt', 'Facilisis', 'Nulla scelerisque',
            'Blandit ligula', 'Eget', 'Hendrerit', 'Malesuada', 'Enim sit',
        );

        return $prefijos[array_rand($prefijos)].' '.$nombres[array_rand($nombres)];
    }

    private function getDescripcion()
    {
        $frases = array_flip(array(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'Mauris ultricies nunc nec sapien tincidunt facilisis.',
            'Nulla scelerisque blandit ligula eget hendrerit.',
            'Sed malesuada, enim sit amet ultricies semper, elit leo lacinia massa, in tempus nisl ipsum quis libero.',
            'Aliquam molestie neque non augue molestie bibendum.',
            'Pellentesque ultricies erat ac lorem pharetra vulputate.',
            'Donec dapibus blandit odio, in auctor turpis commodo ut.',
            'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'Nam rhoncus lorem sed libero hendrerit accumsan.',
            'Maecenas non erat eu justo rutrum condimentum.',
            'Suspendisse leo tortor, tempus in lacinia sit amet, varius eu urna.',
            'Phasellus eu leo tellus, et accumsan libero.',
            'Pellentesque fringilla ipsum nec justo tempus elementum.',
            'Aliquam dapibus metus aliquam ante lacinia blandit.',
            'Donec ornare lacus vitae dolor imperdiet vitae ultricies nibh congue.',
        ));

        $numeroFrases = mt_rand(3, 6);

        return implode(' ', array_rand($frases, $numeroFrases));
    }

    private function getDireccion(Ciudad $ciudad)
    {
        $prefijos = array('Calle', 'Avenida', 'Plaza');
        $nombres = array(
            'Lorem', 'Ipsum', 'Sitamet', 'Consectetur', 'Adipiscing',
            'Necsapien', 'Tincidunt', 'Facilisis', 'Nulla', 'Scelerisque',
            'Blandit', 'Ligula', 'Eget', 'Hendrerit', 'Malesuada', 'Enimsit',
        );

        return $prefijos[array_rand($prefijos)].' '.$nombres[array_rand($nombres)].', '.mt_rand(1, 100)."\n"
               .$this->getCodigoPostal().' '.$ciudad->getNombre();
    }

    private function getCodigoPostal()
    {
        return sprintf('%02s%03s', mt_rand(1, 52), mt_rand(0, 999));
    }
}
