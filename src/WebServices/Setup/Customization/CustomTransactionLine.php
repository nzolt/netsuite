<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * CustomTransactionLine
 */
class CustomTransactionLine {

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var float
     */
    protected $debit;

    /**
     * @access public
     * @var float
     */
    protected $credit;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

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
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"account" => "RecordRef",
    	"line" => "integer",
    	"debit" => "float",
    	"credit" => "float",
    	"amount" => "float",
    	"memo" => "string",
    	"entity" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return CustomTransactionLine
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
     * Set debit
     *
     * @param float $debit
     * @return CustomTransactionLine
     */
    public function setDebit($debit) {
        $this->debit = $debit;
        return $this;
    }

    /**
     * Get debit
     *
     * @return float
     */
    public function getDebit() {
        return $this->debit;
    }


    /**
     * Set credit
     *
     * @param float $credit
     * @return CustomTransactionLine
     */
    public function setCredit($credit) {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Get credit
     *
     * @return float
     */
    public function getCredit() {
        return $this->credit;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return CustomTransactionLine
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
     * Set memo
     *
     * @param string $memo
     * @return CustomTransactionLine
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
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return CustomTransactionLine
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}