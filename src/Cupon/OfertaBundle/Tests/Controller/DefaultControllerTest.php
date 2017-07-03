<?php
namespace Cupon\OfertaBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function laPortadaSimpleRedirigeAUnaCiudad()
    {
    	$client = static::createClient();
    	$client->request('GET', '/');
    	$this->assertEquals(302, $client->getResponse()->getStatusCode(),
    		'La portada redirige a la portada de una ciudad (status 302)'
    		);
    }

    /** @test */
    public function laPortadaSoloMuestraUnaOfertaActiva()
    {
    	$client = static::createClient();
    	$client->followRedirects(true);
    	$crawler = $client->request('GET', '/');
    	$ofertasActivas = $crawler->filter(
    		'article.oferta section.descripcion a:contains("Comprar")'
    		)->count();
    	$this->assertEquals(1, $ofertasActivas,
    		'La portada muestra una única oferta activa que se puede comprar'
    		);
    }

    /** @test */
    public function losUsuariosPuedenRegistrarseDesdeLaPortada()
    {
    	$client = static::createClient();
    	$client->request('GET', '/');
    	$crawler = $client->followRedirect();
    	$numeroEnlacesRegistrarse = $crawler->filter(
    		'html:contains("Regístrate ya")'
    		)->count();
    	$this->assertGreaterThan(0, $numeroEnlacesRegistrarse,
    		'La portada muestra al menos un enlace o botón para registrarse'
    		);
    }

    public function losUsuariosAnonimosVenLaCiudadPorDefecto()
    {
    	$client = static::createClient();
    	$client->followRedirects(true);
    	$crawler = $client->request('GET', '/');
    	$ciudadPorDefecto = $client->getContainer()->getParameter(
    		'cupon.ciudad_por_defecto'
    		);
    	$ciudadPortada = $crawler->filter(
    		'header nav select option[selected="selected"]'
    		)->attr('value');
    	$this->assertEquals($ciudadPorDefecto, $ciudadPortada,
    		'Los usuarios anónimos ven seleccionada la ciudad por defecto'
    		);
    }

    public function losUsuariosAnonimosDebenLoguearseParaPoderComprar()
    {
    	$client = static::createClient();
    	$client->request('GET', '/');
    	$crawler = $client->followRedirect();
    	$comprar = $crawler->selectLink('Comprar')->link();
    	$client->click($comprar);
    	$crawler = $client->followRedirect();
    	$this->assertRegExp(
    		'/.*\/usuario\/login_check/',
    		$crawler->filter('article form')->attr('action'),
    		'Después de pulsar el botón de comprar, el usuario anónimo
    		ve el formulario de login'
    		);
    }

}
