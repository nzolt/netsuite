<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\CostCategoryItemCostType;

/**
 * CostCategory
 */
class CostCategory extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var CostCategoryItemCostType
     */
    protected $itemCostType;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

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
    	"name" => "string",
    	"account" => "RecordRef",
    	"itemCostType" => "CostCategoryItemCostType",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return CostCategory
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
     * Set itemCostType
     *
     * @param CostCategoryItemCostType $itemCostType
     * @return CostCategory
     */
    public function setItemCostType(CostCategoryItemCostType $itemCostType) {
        $this->itemCostType = $itemCostType;
        return $this;
    }

    /**
     * Get itemCostType
     *
     * @return CostCategoryItemCostType
     */
    public function getItemCostType() {
        return $this->itemCostType;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return CostCategory
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
     * Set internalId
     *
     * @param string $internalId
     * @return CostCategory
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
     * @return CostCategory
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