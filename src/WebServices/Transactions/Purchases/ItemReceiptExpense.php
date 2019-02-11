<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ItemReceiptExpense
 */
class ItemReceiptExpense {

    /**
     * @access public
     * @var boolean
     */
    protected $markReceived;

    /**
     * @access public
     * @var integer
     */
    protected $orderLine;

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var string
     */
    protected $account;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"markReceived" => "boolean",
    	"orderLine" => "integer",
    	"line" => "integer",
    	"account" => "string",
    	"memo" => "string",
    	"amount" => "float",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set markReceived
     *
     * @param boolean $markReceived
     * @return ItemReceiptExpense
     */
    public function setMarkReceived($markReceived) {
        $this->markReceived = $markReceived;
        return $this;
    }

    /**
     * Get markReceived
     *
     * @return boolean
     */
    public function getMarkReceived() {
        return $this->markReceived;
    }


    /**
     * Set orderLine
     *
     * @param integer $orderLine
     * @return ItemReceiptExpense
     */
    public function setOrderLine($orderLine) {
        $this->orderLine = $orderLine;
        return $this;
    }

    /**
     * Get orderLine
     *
     * @return integer
     */
    public function getOrderLine() {
        return $this->orderLine;
    }


    /**
     * Set line
     *
     * @param integer $line
     * @return ItemReceiptExpense
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
     * Set account
     *
     * @param string $account
     * @return ItemReceiptExpense
     */
    public function setAccount($account) {
        $this->account = $account;
        return $this;
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount() {
        return $this->account;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return ItemReceiptExpense
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
     * Set amount
     *
     * @param float $amount
     * @return ItemReceiptExpense
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
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ItemReceiptExpense
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