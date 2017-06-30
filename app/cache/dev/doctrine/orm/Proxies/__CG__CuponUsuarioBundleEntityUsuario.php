<?php

namespace Proxies\__CG__\Cupon\UsuarioBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \Cupon\UsuarioBundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'nombre', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'apellidos', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'email', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'password', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'salt', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'direccion', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'permiteEmail', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'fechaAlta', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'fechaNacimiento', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'dni', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'numeroTarjeta', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'ciudad'];
        }

        return ['__isInitialized__', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'nombre', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'apellidos', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'email', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'password', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'salt', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'direccion', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'permiteEmail', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'fechaAlta', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'fechaNacimiento', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'dni', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'numeroTarjeta', '' . "\0" . 'Cupon\\UsuarioBundle\\Entity\\Usuario' . "\0" . 'ciudad'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidos($apellidos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', [$apellidos]);

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', []);

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', [$salt]);

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', [$direccion]);

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', []);

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPermiteEmail($permiteEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPermiteEmail', [$permiteEmail]);

        return parent::setPermiteEmail($permiteEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getPermiteEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermiteEmail', []);

        return parent::getPermiteEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaAlta($fechaAlta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaAlta', [$fechaAlta]);

        return parent::setFechaAlta($fechaAlta);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaAlta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaAlta', []);

        return parent::getFechaAlta();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaNacimiento($fechaNacimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaNacimiento', [$fechaNacimiento]);

        return parent::setFechaNacimiento($fechaNacimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaNacimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaNacimiento', []);

        return parent::getFechaNacimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setDni($dni)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDni', [$dni]);

        return parent::setDni($dni);
    }

    /**
     * {@inheritDoc}
     */
    public function getDni()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDni', []);

        return parent::getDni();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroTarjeta($numeroTarjeta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroTarjeta', [$numeroTarjeta]);

        return parent::setNumeroTarjeta($numeroTarjeta);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroTarjeta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroTarjeta', []);

        return parent::getNumeroTarjeta();
    }

    /**
     * {@inheritDoc}
     */
    public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCiudad', [$ciudad]);

        return parent::setCiudad($ciudad);
    }

    /**
     * {@inheritDoc}
     */
    public function getCiudad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCiudad', []);

        return parent::getCiudad();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
