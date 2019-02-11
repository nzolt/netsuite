<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Bank;

/**
 * DepositOther
 */
class DepositOther {

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

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
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    static $paramtypesmap = array(
    	"entity" => "RecordRef",
    	"amount" => "float",
    	"account" => "RecordRef",
    	"paymentMethod" => "RecordRef",
    	"refNum" => "string",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"memo" => "string",
    );

    /**
     * Set amount
     *
     * @param float $amount
     * @return DepositOther
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
     * Set refNum
     *
     * @param string $refNum
     * @return DepositOther
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
     * Set memo
     *
     * @param string $memo
     * @return DepositOther
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

}