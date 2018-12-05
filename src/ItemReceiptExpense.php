<?php

namespace Nzolt\NetSuite;

class ItemReceiptExpense
{

    /**
     * @var boolean $markReceived
     */
    protected $markReceived = null;

    /**
     * @var int $orderLine
     */
    protected $orderLine = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var string $account
     */
    protected $account = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getMarkReceived()
    {
      return $this->markReceived;
    }

    /**
     * @param boolean $markReceived
     * @return \Nzolt\NetSuite\ItemReceiptExpense
     */
    public function setMarkReceived($markReceived)
    {
      $this->markReceived = $markReceived;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderLine()
    {
      return $this->orderLine;
    }

    /**
     * @param int $orderLine
     * @return \Nzolt\NetSuite\ItemReceiptExpense
     */
    public function setOrderLine($orderLine)
    {
      $this->orderLine = $orderLine;
      return $this;
    }

    /**
     * @return int
     */
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param int $line
     * @return \Nzolt\NetSuite\ItemReceiptExpense
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param string $account
     * @return \Nzolt\NetSuite\ItemReceiptExpense
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\ItemReceiptExpense
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Nzolt\NetSuite\ItemReceiptExpense
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ItemReceiptExpense
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
