<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * PriceLevel
 */
class PriceLevel extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var float
     */
    protected $discountpct;

    /**
     * @access public
     * @var boolean
     */
    protected $updateExistingPrices;

    /**
     * @access public
     * @var boolean
     */
    protected $isOnline;

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
    	"discountpct" => "float",
    	"updateExistingPrices" => "boolean",
    	"isOnline" => "boolean",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return PriceLevel
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
     * Set discountpct
     *
     * @param float $discountpct
     * @return PriceLevel
     */
    public function setDiscountpct($discountpct) {
        $this->discountpct = $discountpct;
        return $this;
    }

    /**
     * Get discountpct
     *
     * @return float
     */
    public function getDiscountpct() {
        return $this->discountpct;
    }


    /**
     * Set updateExistingPrices
     *
     * @param boolean $updateExistingPrices
     * @return PriceLevel
     */
    public function setUpdateExistingPrices($updateExistingPrices) {
        $this->updateExistingPrices = $updateExistingPrices;
        return $this;
    }

    /**
     * Get updateExistingPrices
     *
     * @return boolean
     */
    public function getUpdateExistingPrices() {
        return $this->updateExistingPrices;
    }


    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return PriceLevel
     */
    public function setIsOnline($isOnline) {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * Get isOnline
     *
     * @return boolean
     */
    public function getIsOnline() {
        return $this->isOnline;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return PriceLevel
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
     * @return PriceLevel
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
     * @return PriceLevel
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