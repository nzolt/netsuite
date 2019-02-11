<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

/**
 * DepositApplicationApply
 */
class DepositApplicationApply {

    /**
     * @access public
     * @var integer
     */
    protected $doc;

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var boolean
     */
    protected $apply;

    /**
     * @access public
     * @var dateTime
     */
    protected $applyDate;

    /**
     * @access public
     * @var string
     */
    protected $job;

    /**
     * @access public
     * @var string
     */
    protected $type;

    /**
     * @access public
     * @var string
     */
    protected $refNum;

    /**
     * @access public
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var float
     */
    protected $due;

    /**
     * @access public
     * @var string
     */
    protected $currency;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    static $paramtypesmap = array(
    	"doc" => "integer",
    	"line" => "integer",
    	"apply" => "boolean",
    	"applyDate" => "dateTime",
    	"job" => "string",
    	"type" => "string",
    	"refNum" => "string",
    	"total" => "float",
    	"due" => "float",
    	"currency" => "string",
    	"amount" => "float",
    );

    /**
     * Set doc
     *
     * @param integer $doc
     * @return DepositApplicationApply
     */
    public function setDoc($doc) {
        $this->doc = $doc;
        return $this;
    }

    /**
     * Get doc
     *
     * @return integer
     */
    public function getDoc() {
        return $this->doc;
    }


    /**
     * Set line
     *
     * @param integer $line
     * @return DepositApplicationApply
     */
    public function setLine($line) {
        $this->line = $line;
        return $this;
    }

    /**
     * Get line
     *
     * @return integer
     */
    public function getLine() {
        return $this->line;
    }


    /**
     * Set apply
     *
     * @param boolean $apply
     * @return DepositApplicationApply
     */
    public function setApply($apply) {
        $this->apply = $apply;
        return $this;
    }

    /**
     * Get apply
     *
     * @return boolean
     */
    public function getApply() {
        return $this->apply;
    }


    /**
     * Set applyDate
     *
     * @param \DateTime $applyDate
     * @return DepositApplicationApply
     */
    public function setApplyDate(\DateTime $applyDate) {
        $this->applyDate = $applyDate->format('c');
        return $this;
    }

    /**
     * Get applyDate
     *
     * @return \DateTime
     */
    public function getApplyDate() {
        return new \DateTime($this->applyDate);
    }


    /**
     * Set job
     *
     * @param string $job
     * @return DepositApplicationApply
     */
    public function setJob($job) {
        $this->job = $job;
        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob() {
        return $this->job;
    }


    /**
     * Set type
     *
     * @param string $type
     * @return DepositApplicationApply
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set refNum
     *
     * @param string $refNum
     * @return DepositApplicationApply
     */
    public function setRefNum($refNum) {
        $this->refNum = $refNum;
        return $this;
    }

    /**
     * Get refNum
     *
     * @return string
     */
    public function getRefNum() {
        return $this->refNum;
    }


    /**
     * Set total
     *
     * @param float $total
     * @return DepositApplicationApply
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal() {
        return $this->total;
    }


    /**
     * Set due
     *
     * @param float $due
     * @return DepositApplicationApply
     */
    public function setDue($due) {
        $this->due = $due;
        return $this;
    }

    /**
     * Get due
     *
     * @return float
     */
    public function getDue() {
        return $this->due;
    }


    /**
     * Set currency
     *
     * @param string $currency
     * @return DepositApplicationApply
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return DepositApplicationApply
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

}