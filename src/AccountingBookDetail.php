<?php

namespace Nzolt\NetSuite;

class AccountingBookDetail
{

    /**
     * @var RecordRef $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param RecordRef $accountingBook
     * @return \Nzolt\NetSuite\AccountingBookDetail
     */
    public function setAccountingBook($accountingBook)
    {
      $this->accountingBook = $accountingBook;
      return $this;
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
     * @return \Nzolt\NetSuite\AccountingBookDetail
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param float $exchangeRate
     * @return \Nzolt\NetSuite\AccountingBookDetail
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

}
