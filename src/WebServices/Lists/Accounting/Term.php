<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * Term
 */
class Term extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var boolean
     */
    protected $dateDriven;

    /**
     * @access public
     * @var integer
     */
    protected $daysUntilNetDue;

    /**
     * @access public
     * @var float
     */
    protected $discountPercent;

    /**
     * @access public
     * @var integer
     */
    protected $daysUntilExpiry;

    /**
     * @access public
     * @var integer
     */
    protected $dayOfMonthNetDue;

    /**
     * @access public
     * @var integer
     */
    protected $dueNextMonthIfWithinDays;

    /**
     * @access public
     * @var float
     */
    protected $discountPercentDateDriven;

    /**
     * @access public
     * @var integer
     */
    protected $dayDiscountExpires;

    /**
     * @access public
     * @var boolean
     */
    protected $preferred;

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
    	"dateDriven" => "boolean",
    	"daysUntilNetDue" => "integer",
    	"discountPercent" => "float",
    	"daysUntilExpiry" => "integer",
    	"dayOfMonthNetDue" => "integer",
    	"dueNextMonthIfWithinDays" => "integer",
    	"discountPercentDateDriven" => "float",
    	"dayDiscountExpires" => "integer",
    	"preferred" => "boolean",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return Term
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
     * Set dateDriven
     *
     * @param boolean $dateDriven
     * @return Term
     */
    public function setDateDriven($dateDriven) {
        $this->dateDriven = $dateDriven;
        return $this;
    }

    /**
     * Get dateDriven
     *
     * @return boolean
     */
    public function getDateDriven() {
        return $this->dateDriven;
    }


    /**
     * Set daysUntilNetDue
     *
     * @param integer $daysUntilNetDue
     * @return Term
     */
    public function setDaysUntilNetDue($daysUntilNetDue) {
        $this->daysUntilNetDue = $daysUntilNetDue;
        return $this;
    }

    /**
     * Get daysUntilNetDue
     *
     * @return integer
     */
    public function getDaysUntilNetDue() {
        return $this->daysUntilNetDue;
    }


    /**
     * Set discountPercent
     *
     * @param float $discountPercent
     * @return Term
     */
    public function setDiscountPercent($discountPercent) {
        $this->discountPercent = $discountPercent;
        return $this;
    }

    /**
     * Get discountPercent
     *
     * @return float
     */
    public function getDiscountPercent() {
        return $this->discountPercent;
    }


    /**
     * Set daysUntilExpiry
     *
     * @param integer $daysUntilExpiry
     * @return Term
     */
    public function setDaysUntilExpiry($daysUntilExpiry) {
        $this->daysUntilExpiry = $daysUntilExpiry;
        return $this;
    }

    /**
     * Get daysUntilExpiry
     *
     * @return integer
     */
    public function getDaysUntilExpiry() {
        return $this->daysUntilExpiry;
    }


    /**
     * Set dayOfMonthNetDue
     *
     * @param integer $dayOfMonthNetDue
     * @return Term
     */
    public function setDayOfMonthNetDue($dayOfMonthNetDue) {
        $this->dayOfMonthNetDue = $dayOfMonthNetDue;
        return $this;
    }

    /**
     * Get dayOfMonthNetDue
     *
     * @return integer
     */
    public function getDayOfMonthNetDue() {
        return $this->dayOfMonthNetDue;
    }


    /**
     * Set dueNextMonthIfWithinDays
     *
     * @param integer $dueNextMonthIfWithinDays
     * @return Term
     */
    public function setDueNextMonthIfWithinDays($dueNextMonthIfWithinDays) {
        $this->dueNextMonthIfWithinDays = $dueNextMonthIfWithinDays;
        return $this;
    }

    /**
     * Get dueNextMonthIfWithinDays
     *
     * @return integer
     */
    public function getDueNextMonthIfWithinDays() {
        return $this->dueNextMonthIfWithinDays;
    }


    /**
     * Set discountPercentDateDriven
     *
     * @param float $discountPercentDateDriven
     * @return Term
     */
    public function setDiscountPercentDateDriven($discountPercentDateDriven) {
        $this->discountPercentDateDriven = $discountPercentDateDriven;
        return $this;
    }

    /**
     * Get discountPercentDateDriven
     *
     * @return float
     */
    public function getDiscountPercentDateDriven() {
        return $this->discountPercentDateDriven;
    }


    /**
     * Set dayDiscountExpires
     *
     * @param integer $dayDiscountExpires
     * @return Term
     */
    public function setDayDiscountExpires($dayDiscountExpires) {
        $this->dayDiscountExpires = $dayDiscountExpires;
        return $this;
    }

    /**
     * Get dayDiscountExpires
     *
     * @return integer
     */
    public function getDayDiscountExpires() {
        return $this->dayDiscountExpires;
    }


    /**
     * Set preferred
     *
     * @param boolean $preferred
     * @return Term
     */
    public function setPreferred($preferred) {
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * Get preferred
     *
     * @return boolean
     */
    public function getPreferred() {
        return $this->preferred;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Term
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
     * @return Term
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
     * @return Term
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