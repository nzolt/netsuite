<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * PurchaseOrderExpense
 */
class PurchaseOrderExpense {

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $linkedOrderList;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

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
     * @var RecordRef
     */
    public $customer;

    /**
     * @access public
     * @var boolean
     */
    protected $isClosed;

    /**
     * @access public
     * @var boolean
     */
    protected $isBillable;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxCode;

    /**
     * @access public
     * @var float
     */
    protected $taxRate1;

    /**
     * @access public
     * @var float
     */
    protected $taxRate2;

    /**
     * @access public
     * @var float
     */
    protected $tax1Amt;

    /**
     * @access public
     * @var float
     */
    protected $grossAmt;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"line" => "integer",
    	"category" => "RecordRef",
    	"linkedOrderList" => "RecordRefList",
    	"account" => "RecordRef",
    	"amount" => "float",
    	"memo" => "string",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"customer" => "RecordRef",
    	"isClosed" => "boolean",
    	"isBillable" => "boolean",
    	"createdFrom" => "RecordRef",
    	"taxCode" => "RecordRef",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    	"tax1Amt" => "float",
    	"grossAmt" => "float",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return PurchaseOrderExpense
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
     * Set linkedOrderList
     *
     * @param RecordRefList $linkedOrderList
     * @return PurchaseOrderExpense
     */
    public function setLinkedOrderList(RecordRefList $linkedOrderList) {
        $this->linkedOrderList = $linkedOrderList;
        return $this;
    }

    /**
     * Get linkedOrderList
     *
     * @return RecordRefList
     */
    public function getLinkedOrderList() {
        return $this->linkedOrderList;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return PurchaseOrderExpense
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
     * @return PurchaseOrderExpense
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
     * Set isClosed
     *
     * @param boolean $isClosed
     * @return PurchaseOrderExpense
     */
    public function setIsClosed($isClosed) {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * Get isClosed
     *
     * @return boolean
     */
    public function getIsClosed() {
        return $this->isClosed;
    }


    /**
     * Set isBillable
     *
     * @param boolean $isBillable
     * @return PurchaseOrderExpense
     */
    public function setIsBillable($isBillable) {
        $this->isBillable = $isBillable;
        return $this;
    }

    /**
     * Get isBillable
     *
     * @return boolean
     */
    public function getIsBillable() {
        return $this->isBillable;
    }


    /**
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return PurchaseOrderExpense
     */
    public function setTaxRate1($taxRate1) {
        $this->taxRate1 = $taxRate1;
        return $this;
    }

    /**
     * Get taxRate1
     *
     * @return float
     */
    public function getTaxRate1() {
        return $this->taxRate1;
    }


    /**
     * Set taxRate2
     *
     * @param float $taxRate2
     * @return PurchaseOrderExpense
     */
    public function setTaxRate2($taxRate2) {
        $this->taxRate2 = $taxRate2;
        return $this;
    }

    /**
     * Get taxRate2
     *
     * @return float
     */
    public function getTaxRate2() {
        return $this->taxRate2;
    }


    /**
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return PurchaseOrderExpense
     */
    public function setTax1Amt($tax1Amt) {
        $this->tax1Amt = $tax1Amt;
        return $this;
    }

    /**
     * Get tax1Amt
     *
     * @return float
     */
    public function getTax1Amt() {
        return $this->tax1Amt;
    }


    /**
     * Set grossAmt
     *
     * @param float $grossAmt
     * @return PurchaseOrderExpense
     */
    public function setGrossAmt($grossAmt) {
        $this->grossAmt = $grossAmt;
        return $this;
    }

    /**
     * Get grossAmt
     *
     * @return float
     */
    public function getGrossAmt() {
        return $this->grossAmt;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return PurchaseOrderExpense
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