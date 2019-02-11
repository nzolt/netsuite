<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

/**
 * CustomerRefundDeposit
 */
class CustomerRefundDeposit {

    /**
     * @access public
     * @var boolean
     */
    protected $apply;

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
     * @var dateTime
     */
    protected $depositDate;

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
    protected $remaining;

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
    	"apply" => "boolean",
    	"doc" => "integer",
    	"line" => "integer",
    	"depositDate" => "dateTime",
    	"refNum" => "string",
    	"total" => "float",
    	"remaining" => "float",
    	"currency" => "string",
    	"amount" => "float",
    );

    /**
     * Set apply
     *
     * @param boolean $apply
     * @return CustomerRefundDeposit
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
     * Set doc
     *
     * @param integer $doc
     * @return CustomerRefundDeposit
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
     * @return CustomerRefundDeposit
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
     * Set depositDate
     *
     * @param \DateTime $depositDate
     * @return CustomerRefundDeposit
     */
    public function setDepositDate(\DateTime $depositDate) {
        $this->depositDate = $depositDate->format('c');
        return $this;
    }

    /**
     * Get depositDate
     *
     * @return \DateTime
     */
    public function getDepositDate() {
        return new \DateTime($this->depositDate);
    }


    /**
     * Set refNum
     *
     * @param string $refNum
     * @return CustomerRefundDeposit
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
     * @return CustomerRefundDeposit
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
     * Set remaining
     *
     * @param float $remaining
     * @return CustomerRefundDeposit
     */
    public function setRemaining($remaining) {
        $this->remaining = $remaining;
        return $this;
    }

    /**
     * Get remaining
     *
     * @return float
     */
    public function getRemaining() {
        return $this->remaining;
    }


    /**
     * Set currency
     *
     * @param string $currency
     * @return CustomerRefundDeposit
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
     * @return CustomerRefundDeposit
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