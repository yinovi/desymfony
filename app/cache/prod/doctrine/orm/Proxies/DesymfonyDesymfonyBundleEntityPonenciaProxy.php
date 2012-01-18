<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class DesymfonyDesymfonyBundleEntityPonenciaProxy extends \Desymfony\DesymfonyBundle\Entity\Ponencia implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setTitulo($titulo)
    {
        $this->__load();
        return parent::setTitulo($titulo);
    }

    public function getTitulo()
    {
        $this->__load();
        return parent::getTitulo();
    }

    public function setSlug($slug)
    {
        $this->__load();
        return parent::setSlug($slug);
    }

    public function getSlug()
    {
        $this->__load();
        return parent::getSlug();
    }

    public function setDescripcion($descripcion)
    {
        $this->__load();
        return parent::setDescripcion($descripcion);
    }

    public function getDescripcion()
    {
        $this->__load();
        return parent::getDescripcion();
    }

    public function setFecha($fecha)
    {
        $this->__load();
        return parent::setFecha($fecha);
    }

    public function getFecha()
    {
        $this->__load();
        return parent::getFecha();
    }

    public function setHora($hora)
    {
        $this->__load();
        return parent::setHora($hora);
    }

    public function getHora()
    {
        $this->__load();
        return parent::getHora();
    }

    public function getHoraFinalizacion()
    {
        $this->__load();
        return parent::getHoraFinalizacion();
    }

    public function setDuracion($duracion)
    {
        $this->__load();
        return parent::setDuracion($duracion);
    }

    public function getDuracion()
    {
        $this->__load();
        return parent::getDuracion();
    }

    public function setIdioma($idioma)
    {
        $this->__load();
        return parent::setIdioma($idioma);
    }

    public function getIdioma()
    {
        $this->__load();
        return parent::getIdioma();
    }

    public function setPonente(\Desymfony\DesymfonyBundle\Entity\Ponente $ponente)
    {
        $this->__load();
        return parent::setPonente($ponente);
    }

    public function getPonente()
    {
        $this->__load();
        return parent::getPonente();
    }

    public function addUsuarios(\Desymfony\DesymfonyBundle\Entity\Usuario $usuario)
    {
        $this->__load();
        return parent::addUsuarios($usuario);
    }

    public function hasUsuario(\Desymfony\DesymfonyBundle\Entity\Usuario $usuario)
    {
        $this->__load();
        return parent::hasUsuario($usuario);
    }

    public function getUsuarios()
    {
        $this->__load();
        return parent::getUsuarios();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'titulo', 'slug', 'descripcion', 'fecha', 'hora', 'duracion', 'idioma', 'ponente', 'usuarios');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}