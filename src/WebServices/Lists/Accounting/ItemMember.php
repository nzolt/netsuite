<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeDeferral;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoePermitDiscount;

/**
 * ItemMember
 */
class ItemMember {

    /**
     * @access public
     * @var string
     */
    protected $memberDescr;

    /**
     * @access public
     * @var float
     */
    protected $componentYield;

    /**
     * @access public
     * @var float
     */
    protected $bomQuantity;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var string
     */
    protected $memberUnit;

    /**
     * @access public
     * @var VsoeDeferral
     */
    protected $vsoeDeferral;

    /**
     * @access public
     * @var VsoePermitDiscount
     */
    protected $vsoePermitDiscount;

    /**
     * @access public
     * @var boolean
     */
    protected $vsoeDelivered;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxSchedule;

    /**
     * @access public
     * @var string
     */
    protected $taxcode;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var float
     */
    protected $taxrate;

    /**
     * @access public
     * @var dateTime
     */
    protected $effectiveDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $obsoleteDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $effectiveRevision;

    /**
     * @access public
     * @var RecordRef
     */
    public $obsoleteRevision;

    /**
     * @access public
     * @var integer
     */
    protected $lineNumber;

    /**
     * @access public
     * @var string
     */
    protected $memberKey;

    static $paramtypesmap = array(
    	"memberDescr" => "string",
    	"componentYield" => "float",
    	"bomQuantity" => "float",
    	"quantity" => "float",
    	"memberUnit" => "string",
    	"vsoeDeferral" => "VsoeDeferral",
    	"vsoePermitDiscount" => "VsoePermitDiscount",
    	"vsoeDelivered" => "boolean",
    	"taxSchedule" => "RecordRef",
    	"taxcode" => "string",
    	"item" => "RecordRef",
    	"taxrate" => "float",
    	"effectiveDate" => "dateTime",
    	"obsoleteDate" => "dateTime",
    	"effectiveRevision" => "RecordRef",
    	"obsoleteRevision" => "RecordRef",
    	"lineNumber" => "integer",
    	"memberKey" => "string",
    );

    /**
     * Set memberDescr
     *
     * @param string $memberDescr
     * @return ItemMember
     */
    public function setMemberDescr($memberDescr) {
        $this->memberDescr = $memberDescr;
        return $this;
    }

    /**
     * Get memberDescr
     *
     * @return string
     */
    public function getMemberDescr() {
        return $this->memberDescr;
    }


    /**
     * Set componentYield
     *
     * @param float $componentYield
     * @return ItemMember
     */
    public function setComponentYield($componentYield) {
        $this->componentYield = $componentYield;
        return $this;
    }

    /**
     * Get componentYield
     *
     * @return float
     */
    public function getComponentYield() {
        return $this->componentYield;
    }


    /**
     * Set bomQuantity
     *
     * @param float $bomQuantity
     * @return ItemMember
     */
    public function setBomQuantity($bomQuantity) {
        $this->bomQuantity = $bomQuantity;
        return $this;
    }

    /**
     * Get bomQuantity
     *
     * @return float
     */
    public function getBomQuantity() {
        return $this->bomQuantity;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return ItemMember
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set memberUnit
     *
     * @param string $memberUnit
     * @return ItemMember
     */
    public function setMemberUnit($memberUnit) {
        $this->memberUnit = $memberUnit;
        return $this;
    }

    /**
     * Get memberUnit
     *
     * @return string
     */
    public function getMemberUnit() {
        return $this->memberUnit;
    }


    /**
     * Set vsoeDeferral
     *
     * @param VsoeDeferral $vsoeDeferral
     * @return ItemMember
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral) {
        $this->vsoeDeferral = $vsoeDeferral;
        return $this;
    }

    /**
     * Get vsoeDeferral
     *
     * @return VsoeDeferral
     */
    public function getVsoeDeferral() {
        return $this->vsoeDeferral;
    }


    /**
     * Set vsoePermitDiscount
     *
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return ItemMember
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount) {
        $this->vsoePermitDiscount = $vsoePermitDiscount;
        return $this;
    }

    /**
     * Get vsoePermitDiscount
     *
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount() {
        return $this->vsoePermitDiscount;
    }


    /**
     * Set vsoeDelivered
     *
     * @param boolean $vsoeDelivered
     * @return ItemMember
     */
    public function setVsoeDelivered($vsoeDelivered) {
        $this->vsoeDelivered = $vsoeDelivered;
        return $this;
    }

    /**
     * Get vsoeDelivered
     *
     * @return boolean
     */
    public function getVsoeDelivered() {
        return $this->vsoeDelivered;
    }


    /**
     * Set taxcode
     *
     * @param string $taxcode
     * @return ItemMember
     */
    public function setTaxcode($taxcode) {
        $this->taxcode = $taxcode;
        return $this;
    }

    /**
     * Get taxcode
     *
     * @return string
     */
    public function getTaxcode() {
        return $this->taxcode;
    }


    /**
     * Set taxrate
     *
     * @param float $taxrate
     * @return ItemMember
     */
    public function setTaxrate($taxrate) {
        $this->taxrate = $taxrate;
        return $this;
    }

    /**
     * Get taxrate
     *
     * @return float
     */
    public function getTaxrate() {
        return $this->taxrate;
    }


    /**
     * Set effectiveDate
     *
     * @param \DateTime $effectiveDate
     * @return ItemMember
     */
    public function setEffectiveDate(\DateTime $effectiveDate) {
        $this->effectiveDate = $effectiveDate->format('c');
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return \DateTime
     */
    public function getEffectiveDate() {
        return new \DateTime($this->effectiveDate);
    }


    /**
     * Set obsoleteDate
     *
     * @param \DateTime $obsoleteDate
     * @return ItemMember
     */
    public function setObsoleteDate(\DateTime $obsoleteDate) {
        $this->obsoleteDate = $obsoleteDate->format('c');
        return $this;
    }

    /**
     * Get obsoleteDate
     *
     * @return \DateTime
     */
    public function getObsoleteDate() {
        return new \DateTime($this->obsoleteDate);
    }


    /**
     * Set lineNumber
     *
     * @param integer $lineNumber
     * @return ItemMember
     */
    public function setLineNumber($lineNumber) {
        $this->lineNumber = $lineNumber;
        return $this;
    }

    /**
     * Get lineNumber
     *
     * @return integer
     */
    public function getLineNumber() {
        return $this->lineNumber;
    }


    /**
     * Set memberKey
     *
     * @param string $memberKey
     * @return ItemMember
     */
    public function setMemberKey($memberKey) {
        $this->memberKey = $memberKey;
        return $this;
    }

    /**
     * Get memberKey
     *
     * @return string
     */
    public function getMemberKey() {
        return $this->memberKey;
    }

}