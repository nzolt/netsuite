<?php

namespace Nzolt\NetSuite;

class PaycheckPayTax
{

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var boolean $apply
     */
    protected $apply = null;

    /**
     * @var string $payTax
     */
    protected $payTax = null;

    /**
     * @var int $payItem
     */
    protected $payItem = null;

    /**
     * @var float $taxableWageBase
     */
    protected $taxableWageBase = null;

    /**
     * @var float $taxedWageBase
     */
    protected $taxedWageBase = null;

    /**
     * @var float $reportableWageBase
     */
    protected $reportableWageBase = null;

    /**
     * @var boolean $isExempt
     */
    protected $isExempt = null;

    /**
     * @var boolean $isResidentTax
     */
    protected $isResidentTax = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\PaycheckPayTax
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApply()
    {
      return $this->apply;
    }

    /**
     * @param boolean $apply
     * @return \Nzolt\NetSuite\PaycheckPayTax
     */
    public function setApply($apply)
    {
      $this->apply = $apply;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayTax()
    {
      return $this->payTax;
    }

    /**
     * @param string $payTax
     * @return \Nzolt\NetSuite\PaycheckPayTax
     */
    public function setPayTax($payTax)
    {
      $this->payTax = $payTax;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayItem()
    {
      return $this->payItem;
    }

    /**
     * @param int $payItem
     * @return \Nzolt\NetSuite\PaycheckPayTax
     */
    public function setPayItem($payItem)
    {
      $this->payItem = $payItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxableWageBase()
    {
      return $this->taxableWageBase;
    }

    /**
     * @param float $taxableWageBase
     * @return \Nzolt\NetSuite\PaycheckPayTax
     */
    public function setTaxableWageBase($taxableWageBase)
    {
      $this->taxableWageBase = $taxableWageBase;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxedWageBase()
    {
      return $this->taxedWageBase;
    }

    /**
     * @param float $taxedWageBase
     * @return \Nzolt\NetSuite\PaycheckPayTax
     */
    public function setTaxedWageBase($taxedWageBase)
    {
      $this->taxedWageBase = $taxedWageBase;
      return $this;
    }

    /**
     * @return float
     */
    public function getReportableWageBase()
    {
      return $this->reportableWageBase;
    }

    /**
     * @param float $reportableWageBase
     * @return \Nzolt\NetSuite\PaycheckPayTax
     */
    public function setReportableWageBase($reportableWageBase)
    {
      $this->reportableWageBase = $reportableWageBase;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExempt()
    {
      return $this->isExempt;
    }

    /**
     * @param boolean $isExempt
     * @return \Nzolt\NetSuite\PaycheckPayTax
     */
    public function setIsExempt($isExempt)
    {
      $this->isExempt = $isExempt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsResidentTax()
    {
      return $this->isResidentTax;
    }

    /**
     * @param boolean $isResidentTax
     * @return \Nzolt\NetSuite\PaycheckPayTax
     */
    public function setIsResidentTax($isResidentTax)
    {
      $this->isResidentTax = $isResidentTax;
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
     * @return \Nzolt\NetSuite\PaycheckPayTax
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
