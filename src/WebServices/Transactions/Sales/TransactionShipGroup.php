<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

/**
 * TransactionShipGroup
 */
class TransactionShipGroup {

    /**
     * @access public
     * @var integer
     */
    protected $id;

    /**
     * @access public
     * @var boolean
     */
    protected $isFulfilled;

    /**
     * @access public
     * @var float
     */
    protected $weight;

    /**
     * @access public
     * @var RecordRef
     */
    public $sourceAddressRef;

    /**
     * @access public
     * @var string
     */
    protected $sourceAddress;

    /**
     * @access public
     * @var RecordRef
     */
    public $destinationAddressRef;

    /**
     * @access public
     * @var string
     */
    protected $destinationAddress;

    /**
     * @access public
     * @var RecordRef
     */
    public $shippingMethodRef;

    /**
     * @access public
     * @var string
     */
    protected $shippingMethod;

    /**
     * @access public
     * @var boolean
     */
    protected $isHandlingTaxable;

    /**
     * @access public
     * @var RecordRef
     */
    public $handlingTaxCode;

    /**
     * @access public
     * @var string
     */
    protected $handlingTaxRate;

    /**
     * @access public
     * @var string
     */
    protected $handlingTax2Rate;

    /**
     * @access public
     * @var float
     */
    protected $handlingRate;

    /**
     * @access public
     * @var float
     */
    protected $handlingTaxAmt;

    /**
     * @access public
     * @var float
     */
    protected $handlingTax2Amt;

    /**
     * @access public
     * @var boolean
     */
    protected $isShippingTaxable;

    /**
     * @access public
     * @var RecordRef
     */
    public $shippingTaxCode;

    /**
     * @access public
     * @var string
     */
    protected $shippingTaxRate;

    /**
     * @access public
     * @var string
     */
    protected $shippingTax2Rate;

    /**
     * @access public
     * @var float
     */
    protected $shippingRate;

    /**
     * @access public
     * @var float
     */
    protected $shippingTaxAmt;

    /**
     * @access public
     * @var float
     */
    protected $shippingTax2Amt;

    static $paramtypesmap = array(
    	"id" => "integer",
    	"isFulfilled" => "boolean",
    	"weight" => "float",
    	"sourceAddressRef" => "RecordRef",
    	"sourceAddress" => "string",
    	"destinationAddressRef" => "RecordRef",
    	"destinationAddress" => "string",
    	"shippingMethodRef" => "RecordRef",
    	"shippingMethod" => "string",
    	"isHandlingTaxable" => "boolean",
    	"handlingTaxCode" => "RecordRef",
    	"handlingTaxRate" => "string",
    	"handlingTax2Rate" => "string",
    	"handlingRate" => "float",
    	"handlingTaxAmt" => "float",
    	"handlingTax2Amt" => "float",
    	"isShippingTaxable" => "boolean",
    	"shippingTaxCode" => "RecordRef",
    	"shippingTaxRate" => "string",
    	"shippingTax2Rate" => "string",
    	"shippingRate" => "float",
    	"shippingTaxAmt" => "float",
    	"shippingTax2Amt" => "float",
    );

    /**
     * Set id
     *
     * @param integer $id
     * @return TransactionShipGroup
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set isFulfilled
     *
     * @param boolean $isFulfilled
     * @return TransactionShipGroup
     */
    public function setIsFulfilled($isFulfilled) {
        $this->isFulfilled = $isFulfilled;
        return $this;
    }

    /**
     * Get isFulfilled
     *
     * @return boolean
     */
    public function getIsFulfilled() {
        return $this->isFulfilled;
    }


    /**
     * Set weight
     *
     * @param float $weight
     * @return TransactionShipGroup
     */
    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight() {
        return $this->weight;
    }


    /**
     * Set sourceAddress
     *
     * @param string $sourceAddress
     * @return TransactionShipGroup
     */
    public function setSourceAddress($sourceAddress) {
        $this->sourceAddress = $sourceAddress;
        return $this;
    }

    /**
     * Get sourceAddress
     *
     * @return string
     */
    public function getSourceAddress() {
        return $this->sourceAddress;
    }


    /**
     * Set destinationAddress
     *
     * @param string $destinationAddress
     * @return TransactionShipGroup
     */
    public function setDestinationAddress($destinationAddress) {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }

    /**
     * Get destinationAddress
     *
     * @return string
     */
    public function getDestinationAddress() {
        return $this->destinationAddress;
    }


    /**
     * Set shippingMethod
     *
     * @param string $shippingMethod
     * @return TransactionShipGroup
     */
    public function setShippingMethod($shippingMethod) {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }

    /**
     * Get shippingMethod
     *
     * @return string
     */
    public function getShippingMethod() {
        return $this->shippingMethod;
    }


    /**
     * Set isHandlingTaxable
     *
     * @param boolean $isHandlingTaxable
     * @return TransactionShipGroup
     */
    public function setIsHandlingTaxable($isHandlingTaxable) {
        $this->isHandlingTaxable = $isHandlingTaxable;
        return $this;
    }

    /**
     * Get isHandlingTaxable
     *
     * @return boolean
     */
    public function getIsHandlingTaxable() {
        return $this->isHandlingTaxable;
    }


    /**
     * Set handlingTaxRate
     *
     * @param string $handlingTaxRate
     * @return TransactionShipGroup
     */
    public function setHandlingTaxRate($handlingTaxRate) {
        $this->handlingTaxRate = $handlingTaxRate;
        return $this;
    }

    /**
     * Get handlingTaxRate
     *
     * @return string
     */
    public function getHandlingTaxRate() {
        return $this->handlingTaxRate;
    }


    /**
     * Set handlingTax2Rate
     *
     * @param string $handlingTax2Rate
     * @return TransactionShipGroup
     */
    public function setHandlingTax2Rate($handlingTax2Rate) {
        $this->handlingTax2Rate = $handlingTax2Rate;
        return $this;
    }

    /**
     * Get handlingTax2Rate
     *
     * @return string
     */
    public function getHandlingTax2Rate() {
        return $this->handlingTax2Rate;
    }


    /**
     * Set handlingRate
     *
     * @param float $handlingRate
     * @return TransactionShipGroup
     */
    public function setHandlingRate($handlingRate) {
        $this->handlingRate = $handlingRate;
        return $this;
    }

    /**
     * Get handlingRate
     *
     * @return float
     */
    public function getHandlingRate() {
        return $this->handlingRate;
    }


    /**
     * Set handlingTaxAmt
     *
     * @param float $handlingTaxAmt
     * @return TransactionShipGroup
     */
    public function setHandlingTaxAmt($handlingTaxAmt) {
        $this->handlingTaxAmt = $handlingTaxAmt;
        return $this;
    }

    /**
     * Get handlingTaxAmt
     *
     * @return float
     */
    public function getHandlingTaxAmt() {
        return $this->handlingTaxAmt;
    }


    /**
     * Set handlingTax2Amt
     *
     * @param float $handlingTax2Amt
     * @return TransactionShipGroup
     */
    public function setHandlingTax2Amt($handlingTax2Amt) {
        $this->handlingTax2Amt = $handlingTax2Amt;
        return $this;
    }

    /**
     * Get handlingTax2Amt
     *
     * @return float
     */
    public function getHandlingTax2Amt() {
        return $this->handlingTax2Amt;
    }


    /**
     * Set isShippingTaxable
     *
     * @param boolean $isShippingTaxable
     * @return TransactionShipGroup
     */
    public function setIsShippingTaxable($isShippingTaxable) {
        $this->isShippingTaxable = $isShippingTaxable;
        return $this;
    }

    /**
     * Get isShippingTaxable
     *
     * @return boolean
     */
    public function getIsShippingTaxable() {
        return $this->isShippingTaxable;
    }


    /**
     * Set shippingTaxRate
     *
     * @param string $shippingTaxRate
     * @return TransactionShipGroup
     */
    public function setShippingTaxRate($shippingTaxRate) {
        $this->shippingTaxRate = $shippingTaxRate;
        return $this;
    }

    /**
     * Get shippingTaxRate
     *
     * @return string
     */
    public function getShippingTaxRate() {
        return $this->shippingTaxRate;
    }


    /**
     * Set shippingTax2Rate
     *
     * @param string $shippingTax2Rate
     * @return TransactionShipGroup
     */
    public function setShippingTax2Rate($shippingTax2Rate) {
        $this->shippingTax2Rate = $shippingTax2Rate;
        return $this;
    }

    /**
     * Get shippingTax2Rate
     *
     * @return string
     */
    public function getShippingTax2Rate() {
        return $this->shippingTax2Rate;
    }


    /**
     * Set shippingRate
     *
     * @param float $shippingRate
     * @return TransactionShipGroup
     */
    public function setShippingRate($shippingRate) {
        $this->shippingRate = $shippingRate;
        return $this;
    }

    /**
     * Get shippingRate
     *
     * @return float
     */
    public function getShippingRate() {
        return $this->shippingRate;
    }


    /**
     * Set shippingTaxAmt
     *
     * @param float $shippingTaxAmt
     * @return TransactionShipGroup
     */
    public function setShippingTaxAmt($shippingTaxAmt) {
        $this->shippingTaxAmt = $shippingTaxAmt;
        return $this;
    }

    /**
     * Get shippingTaxAmt
     *
     * @return float
     */
    public function getShippingTaxAmt() {
        return $this->shippingTaxAmt;
    }


    /**
     * Set shippingTax2Amt
     *
     * @param float $shippingTax2Amt
     * @return TransactionShipGroup
     */
    public function setShippingTax2Amt($shippingTax2Amt) {
        $this->shippingTax2Amt = $shippingTax2Amt;
        return $this;
    }

    /**
     * Get shippingTax2Amt
     *
     * @return float
     */
    public function getShippingTax2Amt() {
        return $this->shippingTax2Amt;
    }

}