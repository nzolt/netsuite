<?php

namespace Nzolt\NetSuite;

class VendorCurrencyList
{

    /**
     * @var VendorCurrency[] $vendorCurrency
     */
    protected $vendorCurrency = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return VendorCurrency[]
     */
    public function getVendorCurrency()
    {
      return $this->vendorCurrency;
    }

    /**
     * @param VendorCurrency[] $vendorCurrency
     * @return \Nzolt\NetSuite\VendorCurrencyList
     */
    public function setVendorCurrency(array $vendorCurrency = null)
    {
      $this->vendorCurrency = $vendorCurrency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\VendorCurrencyList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
