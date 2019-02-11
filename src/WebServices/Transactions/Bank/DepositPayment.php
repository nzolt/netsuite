<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Bank;

/**
 * DepositPayment
 */
class DepositPayment {

    /**
     * @access public
     * @var boolean
     */
    protected $deposit;

    /**
     * @access public
     * @var integer
     */
    protected $id;

    /**
     * @access public
     * @var dateTime
     */
    protected $docDate;

    /**
     * @access public
     * @var string
     */
    protected $type;

    /**
     * @access public
     * @var string
     */
    protected $docNumber;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $paymentMethod;

    /**
     * @access public
     * @var string
     */
    protected $refNum;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $transactionAmount;

    /**
     * @access public
     * @var float
     */
    protected $paymentAmount;

    static $paramtypesmap = array(
    	"deposit" => "boolean",
    	"id" => "integer",
    	"docDate" => "dateTime",
    	"type" => "string",
    	"docNumber" => "string",
    	"memo" => "string",
    	"paymentMethod" => "RecordRef",
    	"refNum" => "string",
    	"entity" => "RecordRef",
    	"currency" => "RecordRef",
    	"transactionAmount" => "float",
    	"paymentAmount" => "float",
    );

    /**
     * Set deposit
     *
     * @param boolean $deposit
     * @return DepositPayment
     */
    public function setDeposit($deposit) {
        $this->deposit = $deposit;
        return $this;
    }

    /**
     * Get deposit
     *
     * @return boolean
     */
    public function getDeposit() {
        return $this->deposit;
    }


    /**
     * Set id
     *
     * @param integer $id
     * @return DepositPayment
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
     * Set docDate
     *
     * @param \DateTime $docDate
     * @return DepositPayment
     */
    public function setDocDate(\DateTime $docDate) {
        $this->docDate = $docDate->format('c');
        return $this;
    }

    /**
     * Get docDate
     *
     * @return \DateTime
     */
    public function getDocDate() {
        return new \DateTime($this->docDate);
    }


    /**
     * Set type
     *
     * @param string $type
     * @return DepositPayment
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
     * Set docNumber
     *
     * @param string $docNumber
     * @return DepositPayment
     */
    public function setDocNumber($docNumber) {
        $this->docNumber = $docNumber;
        return $this;
    }

    /**
     * Get docNumber
     *
     * @return string
     */
    public function getDocNumber() {
        return $this->docNumber;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return DepositPayment
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
     * Set refNum
     *
     * @param string $refNum
     * @return DepositPayment
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
     * Set transactionAmount
     *
     * @param float $transactionAmount
     * @return DepositPayment
     */
    public function setTransactionAmount($transactionAmount) {
        $this->transactionAmount = $transactionAmount;
        return $this;
    }

    /**
     * Get transactionAmount
     *
     * @return float
     */
    public function getTransactionAmount() {
        return $this->transactionAmount;
    }


    /**
     * Set paymentAmount
     *
     * @param float $paymentAmount
     * @return DepositPayment
     */
    public function setPaymentAmount($paymentAmount) {
        $this->paymentAmount = $paymentAmount;
        return $this;
    }

    /**
     * Get paymentAmount
     *
     * @return float
     */
    public function getPaymentAmount() {
        return $this->paymentAmount;
    }

}