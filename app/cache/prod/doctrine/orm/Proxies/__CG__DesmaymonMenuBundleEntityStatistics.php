<?php

namespace Proxies\__CG__\Desmay\monMenuBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Statistics extends \Desmay\monMenuBundle\Entity\Statistics implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\Statistics' . "\0" . 'idstatistics', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\Statistics' . "\0" . 'iduser', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\Statistics' . "\0" . 'nbreporting', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\Statistics' . "\0" . 'nbcreaterecipe', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\Statistics' . "\0" . 'nbvisit');
        }

        return array('__isInitialized__', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\Statistics' . "\0" . 'idstatistics', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\Statistics' . "\0" . 'iduser', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\Statistics' . "\0" . 'nbreporting', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\Statistics' . "\0" . 'nbcreaterecipe', '' . "\0" . 'Desmay\\monMenuBundle\\Entity\\Statistics' . "\0" . 'nbvisit');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Statistics $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getIdstatistics()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdstatistics();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdstatistics', array());

        return parent::getIdstatistics();
    }

    /**
     * {@inheritDoc}
     */
    public function setIduser($iduser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIduser', array($iduser));

        return parent::setIduser($iduser);
    }

    /**
     * {@inheritDoc}
     */
    public function getIduser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIduser', array());

        return parent::getIduser();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbreporting($nbreporting)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbreporting', array($nbreporting));

        return parent::setNbreporting($nbreporting);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbreporting()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbreporting', array());

        return parent::getNbreporting();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbcreaterecipe($nbcreaterecipe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbcreaterecipe', array($nbcreaterecipe));

        return parent::setNbcreaterecipe($nbcreaterecipe);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbcreaterecipe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbcreaterecipe', array());

        return parent::getNbcreaterecipe();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbvisit($nbvisit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbvisit', array($nbvisit));

        return parent::setNbvisit($nbvisit);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbvisit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbvisit', array());

        return parent::getNbvisit();
    }

}
