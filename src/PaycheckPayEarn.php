<?php

namespace Nzolt\NetSuite;

class PaycheckPayEarn
{

    /**
     * @var RecordRef $payItem
     */
    protected $payItem = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var float $count
     */
    protected $count = null;

    /**
     * @var string $rate
     */
    protected $rate = null;

    /**
     * @var RecordRef $serviceItem
     */
    protected $serviceItem = null;

    /**
     * @var float $grossAmount
     */
    protected $grossAmount = null;

    /**
     * @var boolean $manualEntry
     */
    protected $manualEntry = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getPayItem()
    {
      return $this->payItem;
    }

    /**
     * @param RecordRef $payItem
     * @return \Nzolt\NetSuite\PaycheckPayEarn
     */
    public function setPayItem($payItem)
    {
      $this->payItem = $payItem;
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
     * @return \Nzolt\NetSuite\PaycheckPayEarn
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return float
     */
    public function getCount()
    {
      return $this->count;
    }

    /**
     * @param float $count
     * @return \Nzolt\NetSuite\PaycheckPayEarn
     */
    public function setCount($count)
    {
      $this->count = $count;
      return $this;
    }

    /**
     * @return string
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param string $rate
     * @return \Nzolt\NetSuite\PaycheckPayEarn
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getServiceItem()
    {
      return $this->serviceItem;
    }

    /**
     * @param RecordRef $serviceItem
     * @return \Nzolt\NetSuite\PaycheckPayEarn
     */
    public function setServiceItem($serviceItem)
    {
      $this->serviceItem = $serviceItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getGrossAmount()
    {
      return $this->grossAmount;
    }

    /**
     * @param float $grossAmount
     * @return \Nzolt\NetSuite\PaycheckPayEarn
     */
    public function setGrossAmount($grossAmount)
    {
      $this->grossAmount = $grossAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getManualEntry()
    {
      return $this->manualEntry;
    }

    /**
     * @param boolean $manualEntry
     * @return \Nzolt\NetSuite\PaycheckPayEarn
     */
    public function setManualEntry($manualEntry)
    {
      $this->manualEntry = $manualEntry;
      return $this;
    }

}
