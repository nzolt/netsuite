<?php

namespace Nzolt\NetSuite;

class VendorCurrency
{

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $balance
     */
    protected $balance = null;

    /**
     * @var float $unbilledOrders
     */
    protected $unbilledOrders = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param RecordRef $currency
     * @return \Nzolt\NetSuite\VendorCurrency
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
      return $this->balance;
    }

    /**
     * @param float $balance
     * @return \Nzolt\NetSuite\VendorCurrency
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnbilledOrders()
    {
      return $this->unbilledOrders;
    }

    /**
     * @param float $unbilledOrders
     * @return \Nzolt\NetSuite\VendorCurrency
     */
    public function setUnbilledOrders($unbilledOrders)
    {
      $this->unbilledOrders = $unbilledOrders;
      return $this;
    }

}
