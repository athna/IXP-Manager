<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PatchPanel extends \Entities\PatchPanel implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'id', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'name', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'colo_reference', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'cable_type', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'connector_type', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'installation_date', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'port_prefix', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'active', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'chargeable', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'patchPanelPorts', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'cabinet'];
        }

        return ['__isInitialized__', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'id', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'name', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'colo_reference', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'cable_type', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'connector_type', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'installation_date', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'port_prefix', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'active', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'chargeable', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'patchPanelPorts', '' . "\0" . 'Entities\\PatchPanel' . "\0" . 'cabinet'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PatchPanel $proxy) {
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
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getColoReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColoReference', []);

        return parent::getColoReference();
    }

    /**
     * {@inheritDoc}
     */
    public function getCableType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCableType', []);

        return parent::getCableType();
    }

    /**
     * {@inheritDoc}
     */
    public function getConnectorType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConnectorType', []);

        return parent::getConnectorType();
    }

    /**
     * {@inheritDoc}
     */
    public function getInstallationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstallationDate', []);

        return parent::getInstallationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getInstallationDateFormated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstallationDateFormated', []);

        return parent::getInstallationDateFormated();
    }

    /**
     * {@inheritDoc}
     */
    public function getPortPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortPrefix', []);

        return parent::getPortPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function getActiveText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActiveText', []);

        return parent::getActiveText();
    }

    /**
     * {@inheritDoc}
     */
    public function getChargeable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChargeable', []);

        return parent::getChargeable();
    }

    /**
     * {@inheritDoc}
     */
    public function getChargeableDefaultNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChargeableDefaultNo', []);

        return parent::getChargeableDefaultNo();
    }

    /**
     * {@inheritDoc}
     */
    public function getCabinet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCabinet', []);

        return parent::getCabinet();
    }

    /**
     * {@inheritDoc}
     */
    public function getPatchPanelPorts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatchPanelPorts', []);

        return parent::getPatchPanelPorts();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setColoReference($coloReference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColoReference', [$coloReference]);

        return parent::setColoReference($coloReference);
    }

    /**
     * {@inheritDoc}
     */
    public function setCableType($cableType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCableType', [$cableType]);

        return parent::setCableType($cableType);
    }

    /**
     * {@inheritDoc}
     */
    public function setConnectorType($connectorType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConnectorType', [$connectorType]);

        return parent::setConnectorType($connectorType);
    }

    /**
     * {@inheritDoc}
     */
    public function setInstallationDate($installationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstallationDate', [$installationDate]);

        return parent::setInstallationDate($installationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function setPortPrefix($port_prefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortPrefix', [$port_prefix]);

        return parent::setPortPrefix($port_prefix);
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function setChargeable($chargeable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChargeable', [$chargeable]);

        return parent::setChargeable($chargeable);
    }

    /**
     * {@inheritDoc}
     */
    public function setCabinet(\Entities\Cabinet $cabinet = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCabinet', [$cabinet]);

        return parent::setCabinet($cabinet);
    }

    /**
     * {@inheritDoc}
     */
    public function addPatchPanelPort(\Entities\PatchPanelPort $patchPanelPort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPatchPanelPort', [$patchPanelPort]);

        return parent::addPatchPanelPort($patchPanelPort);
    }

    /**
     * {@inheritDoc}
     */
    public function removePatchPanelPort(\Entities\PatchPanelPort $patchPanelPort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePatchPanelPort', [$patchPanelPort]);

        return parent::removePatchPanelPort($patchPanelPort);
    }

    /**
     * {@inheritDoc}
     */
    public function areAllPortsAvailable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'areAllPortsAvailable', []);

        return parent::areAllPortsAvailable();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveCableType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveCableType', []);

        return parent::resolveCableType();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveConnectorType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveConnectorType', []);

        return parent::resolveConnectorType();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveChargeable(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveChargeable', []);

        return parent::resolveChargeable();
    }

    /**
     * {@inheritDoc}
     */
    public function getPortCount(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortCount', []);

        return parent::getPortCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableForUsePortCount(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailableForUsePortCount', []);

        return parent::getAvailableForUsePortCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getCssClassPortCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCssClassPortCount', []);

        return parent::getCssClassPortCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableOnTotalPort($divide = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailableOnTotalPort', [$divide]);

        return parent::getAvailableOnTotalPort($divide);
    }

    /**
     * {@inheritDoc}
     */
    public function hasDuplexPort(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasDuplexPort', []);

        return parent::hasDuplexPort();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', []);

        return parent::toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function createPorts(int $n): \Entities\PatchPanel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createPorts', [$n]);

        return parent::createPorts($n);
    }

}
