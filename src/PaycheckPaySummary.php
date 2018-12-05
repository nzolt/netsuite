<?php

namespace Nzolt\NetSuite;

class PaycheckPaySummary
{

    /**
     * @var string $payItem
     */
    protected $payItem = null;

    /**
     * @var string $payItemType
     */
    protected $payItemType = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var float $ytdAmount
     */
    protected $ytdAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPayItem()
    {
      return $this->payItem;
    }

    /**
     * @param string $payItem
     * @return \Nzolt\NetSuite\PaycheckPaySummary
     */
    public function setPayItem($payItem)
    {
      $this->payItem = $payItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayItemType()
    {
      return $this->payItemType;
    }

    /**
     * @param string $payItemType
     * @return \Nzolt\NetSuite\PaycheckPaySummary
     */
    public function setPayItemType($payItemType)
    {
      $this->payItemType = $payItemType;
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
     * @return \Nzolt\NetSuite\PaycheckPaySummary
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getYtdAmount()
    {
      return $this->ytdAmount;
    }

    /**
     * @param float $ytdAmount
     * @return \Nzolt\NetSuite\PaycheckPaySummary
     */
    public function setYtdAmount($ytdAmount)
    {
      $this->ytdAmount = $ytdAmount;
      return $this;
    }

}
