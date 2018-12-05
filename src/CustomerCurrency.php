<?php

namespace Nzolt\NetSuite;

class CustomerCurrency
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
     * @var float $consolBalance
     */
    protected $consolBalance = null;

    /**
     * @var float $depositBalance
     */
    protected $depositBalance = null;

    /**
     * @var float $consolDepositBalance
     */
    protected $consolDepositBalance = null;

    /**
     * @var float $overdueBalance
     */
    protected $overdueBalance = null;

    /**
     * @var float $consolOverdueBalance
     */
    protected $consolOverdueBalance = null;

    /**
     * @var float $unbilledOrders
     */
    protected $unbilledOrders = null;

    /**
     * @var float $consolUnbilledOrders
     */
    protected $consolUnbilledOrders = null;

    /**
     * @var boolean $overrideCurrencyFormat
     */
    protected $overrideCurrencyFormat = null;

    /**
     * @var string $displaySymbol
     */
    protected $displaySymbol = null;

    /**
     * @var CurrencySymbolPlacement $symbolPlacement
     */
    protected $symbolPlacement = null;

    
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
     * @return \Nzolt\NetSuite\CustomerCurrency
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
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolBalance()
    {
      return $this->consolBalance;
    }

    /**
     * @param float $consolBalance
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setConsolBalance($consolBalance)
    {
      $this->consolBalance = $consolBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getDepositBalance()
    {
      return $this->depositBalance;
    }

    /**
     * @param float $depositBalance
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setDepositBalance($depositBalance)
    {
      $this->depositBalance = $depositBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolDepositBalance()
    {
      return $this->consolDepositBalance;
    }

    /**
     * @param float $consolDepositBalance
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setConsolDepositBalance($consolDepositBalance)
    {
      $this->consolDepositBalance = $consolDepositBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getOverdueBalance()
    {
      return $this->overdueBalance;
    }

    /**
     * @param float $overdueBalance
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setOverdueBalance($overdueBalance)
    {
      $this->overdueBalance = $overdueBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolOverdueBalance()
    {
      return $this->consolOverdueBalance;
    }

    /**
     * @param float $consolOverdueBalance
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setConsolOverdueBalance($consolOverdueBalance)
    {
      $this->consolOverdueBalance = $consolOverdueBalance;
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
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setUnbilledOrders($unbilledOrders)
    {
      $this->unbilledOrders = $unbilledOrders;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolUnbilledOrders()
    {
      return $this->consolUnbilledOrders;
    }

    /**
     * @param float $consolUnbilledOrders
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setConsolUnbilledOrders($consolUnbilledOrders)
    {
      $this->consolUnbilledOrders = $consolUnbilledOrders;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideCurrencyFormat()
    {
      return $this->overrideCurrencyFormat;
    }

    /**
     * @param boolean $overrideCurrencyFormat
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setOverrideCurrencyFormat($overrideCurrencyFormat)
    {
      $this->overrideCurrencyFormat = $overrideCurrencyFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplaySymbol()
    {
      return $this->displaySymbol;
    }

    /**
     * @param string $displaySymbol
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setDisplaySymbol($displaySymbol)
    {
      $this->displaySymbol = $displaySymbol;
      return $this;
    }

    /**
     * @return CurrencySymbolPlacement
     */
    public function getSymbolPlacement()
    {
      return $this->symbolPlacement;
    }

    /**
     * @param CurrencySymbolPlacement $symbolPlacement
     * @return \Nzolt\NetSuite\CustomerCurrency
     */
    public function setSymbolPlacement($symbolPlacement)
    {
      $this->symbolPlacement = $symbolPlacement;
      return $this;
    }

}
