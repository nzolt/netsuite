<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Transactions\Customers\Types\ChargeStage;
use Nzolt\NetSuite\WebServices\Transactions\Customers\Types\ChargeUse;

/**
 * Charge
 */
class Charge extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesOrder;

    /**
     * @access public
     * @var RecordRef
     */
    public $billTo;

    /**
     * @access public
     * @var ChargeStage
     */
    protected $stage;

    /**
     * @access public
     * @var dateTime
     */
    protected $chargeDate;

    /**
     * @access public
     * @var ChargeUse
     */
    protected $use;

    /**
     * @access public
     * @var RecordRef
     */
    public $chargeType;

    /**
     * @access public
     * @var RecordRef
     */
    public $projectTask;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $timeRecord;

    /**
     * @access public
     * @var string
     */
    protected $rate;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingItem;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $transaction;

    /**
     * @access public
     * @var RecordRef
     */
    public $transactionLine;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesOrderLine;

    /**
     * @access public
     * @var RecordRef
     */
    public $invoice;

    /**
     * @access public
     * @var RecordRef
     */
    public $invoiceLine;

    /**
     * @access public
     * @var RecordRef
     */
    public $rule;

    /**
     * @access public
     * @var string
     */
    protected $runId;

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
    	"salesOrder" => "RecordRef",
    	"billTo" => "RecordRef",
    	"stage" => "ChargeStage",
    	"chargeDate" => "dateTime",
    	"use" => "ChargeUse",
    	"chargeType" => "RecordRef",
    	"projectTask" => "RecordRef",
    	"description" => "string",
    	"createdDate" => "dateTime",
    	"timeRecord" => "RecordRef",
    	"rate" => "string",
    	"quantity" => "float",
    	"amount" => "float",
    	"billingItem" => "RecordRef",
    	"currency" => "RecordRef",
    	"transaction" => "RecordRef",
    	"transactionLine" => "RecordRef",
    	"class" => "RecordRef",
    	"department" => "RecordRef",
    	"location" => "RecordRef",
    	"salesOrderLine" => "RecordRef",
    	"invoice" => "RecordRef",
    	"invoiceLine" => "RecordRef",
    	"rule" => "RecordRef",
    	"runId" => "string",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set stage
     *
     * @param ChargeStage $stage
     * @return Charge
     */
    public function setStage(ChargeStage $stage) {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Get stage
     *
     * @return ChargeStage
     */
    public function getStage() {
        return $this->stage;
    }


    /**
     * Set chargeDate
     *
     * @param \DateTime $chargeDate
     * @return Charge
     */
    public function setChargeDate(\DateTime $chargeDate) {
        $this->chargeDate = $chargeDate->format('c');
        return $this;
    }

    /**
     * Get chargeDate
     *
     * @return \DateTime
     */
    public function getChargeDate() {
        return new \DateTime($this->chargeDate);
    }


    /**
     * Set use
     *
     * @param ChargeUse $use
     * @return Charge
     */
    public function setUse(ChargeUse $use) {
        $this->use = $use;
        return $this;
    }

    /**
     * Get use
     *
     * @return ChargeUse
     */
    public function getUse() {
        return $this->use;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return Charge
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Charge
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set rate
     *
     * @param string $rate
     * @return Charge
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return Charge
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
     * Set amount
     *
     * @param float $amount
     * @return Charge
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }


    /**
     * Set runId
     *
     * @param string $runId
     * @return Charge
     */
    public function setRunId($runId) {
        $this->runId = $runId;
        return $this;
    }

    /**
     * Get runId
     *
     * @return string
     */
    public function getRunId() {
        return $this->runId;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Charge
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
     * @return Charge
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