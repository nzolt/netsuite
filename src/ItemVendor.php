<?php

namespace Nzolt\NetSuite;

class ItemVendor
{

    /**
     * @var RecordRef $vendor
     */
    protected $vendor = null;

    /**
     * @var string $vendorCode
     */
    protected $vendorCode = null;

    /**
     * @var string $vendorCurrencyName
     */
    protected $vendorCurrencyName = null;

    /**
     * @var RecordRef $vendorCurrency
     */
    protected $vendorCurrency = null;

    /**
     * @var float $purchasePrice
     */
    protected $purchasePrice = null;

    /**
     * @var boolean $preferredVendor
     */
    protected $preferredVendor = null;

    /**
     * @var RecordRef $schedule
     */
    protected $schedule = null;

    /**
     * @var string $subsidiary
     */
    protected $subsidiary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param RecordRef $vendor
     * @return \Nzolt\NetSuite\ItemVendor
     */
    public function setVendor($vendor)
    {
      $this->vendor = $vendor;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorCode()
    {
      return $this->vendorCode;
    }

    /**
     * @param string $vendorCode
     * @return \Nzolt\NetSuite\ItemVendor
     */
    public function setVendorCode($vendorCode)
    {
      $this->vendorCode = $vendorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorCurrencyName()
    {
      return $this->vendorCurrencyName;
    }

    /**
     * @param string $vendorCurrencyName
     * @return \Nzolt\NetSuite\ItemVendor
     */
    public function setVendorCurrencyName($vendorCurrencyName)
    {
      $this->vendorCurrencyName = $vendorCurrencyName;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVendorCurrency()
    {
      return $this->vendorCurrency;
    }

    /**
     * @param RecordRef $vendorCurrency
     * @return \Nzolt\NetSuite\ItemVendor
     */
    public function setVendorCurrency($vendorCurrency)
    {
      $this->vendorCurrency = $vendorCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchasePrice()
    {
      return $this->purchasePrice;
    }

    /**
     * @param float $purchasePrice
     * @return \Nzolt\NetSuite\ItemVendor
     */
    public function setPurchasePrice($purchasePrice)
    {
      $this->purchasePrice = $purchasePrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferredVendor()
    {
      return $this->preferredVendor;
    }

    /**
     * @param boolean $preferredVendor
     * @return \Nzolt\NetSuite\ItemVendor
     */
    public function setPreferredVendor($preferredVendor)
    {
      $this->preferredVendor = $preferredVendor;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSchedule()
    {
      return $this->schedule;
    }

    /**
     * @param RecordRef $schedule
     * @return \Nzolt\NetSuite\ItemVendor
     */
    public function setSchedule($schedule)
    {
      $this->schedule = $schedule;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param string $subsidiary
     * @return \Nzolt\NetSuite\ItemVendor
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

}
