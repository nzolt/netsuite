<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ManufacturingRouting
 */
class ManufacturingRouting extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $locationList;

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var boolean
     */
    protected $isDefault;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $autoCalculateLag;

    /**
     * @access public
     * @var ManufacturingRoutingRoutingStepList
     */
    protected $routingStepList;

    /**
     * @access public
     * @var ManufacturingRoutingRoutingComponentList
     */
    protected $routingComponentList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"customForm" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"item" => "RecordRef",
    	"locationList" => "RecordRefList",
    	"name" => "string",
    	"memo" => "string",
    	"isDefault" => "boolean",
    	"isInactive" => "boolean",
    	"autoCalculateLag" => "boolean",
    	"routingStepList" => "ManufacturingRoutingRoutingStepList",
    	"routingComponentList" => "ManufacturingRoutingRoutingComponentList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set locationList
     *
     * @param RecordRefList $locationList
     * @return ManufacturingRouting
     */
    public function setLocationList(RecordRefList $locationList) {
        $this->locationList = $locationList;
        return $this;
    }

    /**
     * Get locationList
     *
     * @return RecordRefList
     */
    public function getLocationList() {
        return $this->locationList;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return ManufacturingRouting
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return ManufacturingRouting
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     * @return ManufacturingRouting
     */
    public function setIsDefault($isDefault) {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Get isDefault
     *
     * @return boolean
     */
    public function getIsDefault() {
        return $this->isDefault;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return ManufacturingRouting
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set autoCalculateLag
     *
     * @param boolean $autoCalculateLag
     * @return ManufacturingRouting
     */
    public function setAutoCalculateLag($autoCalculateLag) {
        $this->autoCalculateLag = $autoCalculateLag;
        return $this;
    }

    /**
     * Get autoCalculateLag
     *
     * @return boolean
     */
    public function getAutoCalculateLag() {
        return $this->autoCalculateLag;
    }


    /**
     * Set routingStepList
     *
     * @param ManufacturingRoutingRoutingStepList $routingStepList
     * @return ManufacturingRouting
     */
    public function setRoutingStepList(ManufacturingRoutingRoutingStepList $routingStepList) {
        $this->routingStepList = $routingStepList;
        return $this;
    }

    /**
     * Get routingStepList
     *
     * @return ManufacturingRoutingRoutingStepList
     */
    public function getRoutingStepList() {
        return $this->routingStepList;
    }


    /**
     * Set routingComponentList
     *
     * @param ManufacturingRoutingRoutingComponentList $routingComponentList
     * @return ManufacturingRouting
     */
    public function setRoutingComponentList(ManufacturingRoutingRoutingComponentList $routingComponentList) {
        $this->routingComponentList = $routingComponentList;
        return $this;
    }

    /**
     * Get routingComponentList
     *
     * @return ManufacturingRoutingRoutingComponentList
     */
    public function getRoutingComponentList() {
        return $this->routingComponentList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ManufacturingRouting
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return ManufacturingRouting
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return ManufacturingRouting
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}