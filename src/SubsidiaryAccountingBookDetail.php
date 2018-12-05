<?php

namespace Nzolt\NetSuite;

class SubsidiaryAccountingBookDetail
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
     * @var AccountingBookStatus $bookStatus
     */
    protected $bookStatus = null;

    
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
     * @return \Nzolt\NetSuite\SubsidiaryAccountingBookDetail
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
     * @return \Nzolt\NetSuite\SubsidiaryAccountingBookDetail
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return AccountingBookStatus
     */
    public function getBookStatus()
    {
      return $this->bookStatus;
    }

    /**
     * @param AccountingBookStatus $bookStatus
     * @return \Nzolt\NetSuite\SubsidiaryAccountingBookDetail
     */
    public function setBookStatus($bookStatus)
    {
      $this->bookStatus = $bookStatus;
      return $this;
    }

}
