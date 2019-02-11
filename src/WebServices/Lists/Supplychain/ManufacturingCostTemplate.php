<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ManufacturingCostTemplate
 */
class ManufacturingCostTemplate extends Record {

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
    protected $isInactive;

    /**
     * @access public
     * @var ManufacturingCostDetailList
     */
    protected $costDetailList;

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
    	"name" => "string",
    	"memo" => "string",
    	"isInactive" => "boolean",
    	"costDetailList" => "ManufacturingCostDetailList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return ManufacturingCostTemplate
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
     * @return ManufacturingCostTemplate
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return ManufacturingCostTemplate
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
     * Set costDetailList
     *
     * @param ManufacturingCostDetailList $costDetailList
     * @return ManufacturingCostTemplate
     */
    public function setCostDetailList(ManufacturingCostDetailList $costDetailList) {
        $this->costDetailList = $costDetailList;
        return $this;
    }

    /**
     * Get costDetailList
     *
     * @return ManufacturingCostDetailList
     */
    public function getCostDetailList() {
        return $this->costDetailList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ManufacturingCostTemplate
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
     * @return ManufacturingCostTemplate
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
     * @return ManufacturingCostTemplate
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