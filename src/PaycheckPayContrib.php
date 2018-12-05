<?php

namespace Nzolt\NetSuite;

class PaycheckPayContrib
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
     * @var float $wageBase
     */
    protected $wageBase = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

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
     * @return \Nzolt\NetSuite\PaycheckPayContrib
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
     * @return \Nzolt\NetSuite\PaycheckPayContrib
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return float
     */
    public function getWageBase()
    {
      return $this->wageBase;
    }

    /**
     * @param float $wageBase
     * @return \Nzolt\NetSuite\PaycheckPayContrib
     */
    public function setWageBase($wageBase)
    {
      $this->wageBase = $wageBase;
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
     * @return \Nzolt\NetSuite\PaycheckPayContrib
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Nzolt\NetSuite\PaycheckPayContrib
     */
    public function setManualEntry($manualEntry)
    {
      $this->manualEntry = $manualEntry;
      return $this;
    }

}
