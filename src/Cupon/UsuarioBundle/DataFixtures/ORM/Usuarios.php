<?php
// src/Cupon/CiudadBundle/DataFixtures/ORM/Ciudades.php
namespace Cupon\UsuarioBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\CiudadBundle\Entity\Ciudad;
use Cupon\UsuarioBundle\Entity\Usuario;
class Usuarios extends AbstractFixture implements OrderedFixtureInterface
{
	const NUM_USUARIOS = 100;

	public function getOrder()
    {
        return 40;
    }

	public function load(ObjectManager $manager)
	{
		$ciudades = $manager->getRepository('CiudadBundle:Ciudad')->findAll();

		for ($i = 1; $i <= self::NUM_USUARIOS; ++$i) {
            $usuario = new Usuario();
			$usuario->setNombre($this->getNombre());
            $usuario->setApellidos($this->getApellidos());
            $usuario->setEmail('usuario'.$i.'@localhost');
            $usuario->setPassword('usuario'.$i);
			$usuario->setSalt(''); //Si la codificación es plaintext, salt debe estar a null para funcionar la autenticación.
            $usuario->setDni($this->getDni());
            $usuario->setNumeroTarjeta('1234567890123456');
            $usuario->setFechaAlta(new \DateTime('now - '.mt_rand(1, 150).' days'));
            $usuario->setFechaNacimiento(new \DateTime('now - '.mt_rand(7000, 20000).' days'));

            $ciudad = $ciudades[array_rand($ciudades)];
            $usuario->setDireccion($this->getDireccion($ciudad));
            $usuario->setCiudad($ciudad);

            // El 60% de los usuarios permite email
            $usuario->setPermiteEmail((mt_rand(1, 1000) % 10) < 6);
            $manager->persist($usuario);
            
        }
		$manager->flush();
	}

	private function getNombre()
    {
        // Los nombres más populares en España según el INE
        // Fuente: http://www.ine.es/daco/daco42/nombyapel/nombyapel.htm

        $hombres = array(
            'Antonio', 'José', 'Manuel', 'Francisco', 'Juan', 'David',
            'José Antonio', 'José Luis', 'Jesús', 'Javier', 'Francisco Javier',
            'Carlos', 'Daniel', 'Miguel', 'Rafael', 'Pedro', 'José Manuel',
            'Ángel', 'Alejandro', 'Miguel Ángel', 'José María', 'Fernando',
            'Luis', 'Sergio', 'Pablo', 'Jorge', 'Alberto',
        );
        $mujeres = array(
            'María Carmen', 'María', 'Carmen', 'Josefa', 'Isabel', 'Ana María',
            'María Dolores', 'María Pilar', 'María Teresa', 'Ana', 'Francisca',
            'Laura', 'Antonia', 'Dolores', 'María Angeles', 'Cristina', 'Marta',
            'María José', 'María Isabel', 'Pilar', 'María Luisa', 'Concepción',
            'Lucía', 'Mercedes', 'Manuela', 'Elena', 'Rosa María',
        );

        if (mt_rand() % 2) {
            return $hombres[array_rand($hombres)];
        } else {
            return $mujeres[array_rand($mujeres)];
        }
    }

    private function getApellidos()
    {
        // Los apellidos más populares en España según el INE
        // Fuente: http://www.ine.es/daco/daco42/nombyapel/nombyapel.htm

        $apellidos = array(
            'García', 'González', 'Rodríguez', 'Fernández', 'López', 'Martínez',
            'Sánchez', 'Pérez', 'Gómez', 'Martín', 'Jiménez', 'Ruiz',
            'Hernández', 'Díaz', 'Moreno', 'Álvarez', 'Muñoz', 'Romero',
            'Alonso', 'Gutiérrez', 'Navarro', 'Torres', 'Domínguez', 'Vázquez',
            'Ramos', 'Gil', 'Ramírez', 'Serrano', 'Blanco', 'Suárez', 'Molina',
            'Morales', 'Ortega', 'Delgado', 'Castro', 'Ortíz', 'Rubio', 'Marín',
            'Sanz', 'Iglesias', 'Nuñez', 'Medina', 'Garrido',
        );

        return $apellidos[array_rand($apellidos)].' '.$apellidos[array_rand($apellidos)];
    }

    private function getDni()
    {
        $numeroDni = substr(mt_rand(), 0, 8);
        $dni = $numeroDni.substr('TRWAGMYFPDXBNJZSQVHLCKE', strtr($numeroDni, 'XYZ', '012') % 23, 1);

        return $dni;
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

    /**
     * Generador aleatorio de códigos postales.
     *
     * @return string
     */
    private function getCodigoPostal()
    {
        return sprintf('%02s%03s', mt_rand(1, 52), mt_rand(0, 999));
    }
}
