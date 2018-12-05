<?php

namespace Nzolt\NetSuite;

class AccountLocalizations
{

    /**
     * @var RecordRef $accountingContext
     */
    protected $accountingContext = null;

    /**
     * @var string $acctNumber
     */
    protected $acctNumber = null;

    /**
     * @var string $acctName
     */
    protected $acctName = null;

    /**
     * @var string $legalName
     */
    protected $legalName = null;

    /**
     * @var Language $locale
     */
    protected $locale = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getAccountingContext()
    {
      return $this->accountingContext;
    }

    /**
     * @param RecordRef $accountingContext
     * @return \Nzolt\NetSuite\AccountLocalizations
     */
    public function setAccountingContext($accountingContext)
    {
      $this->accountingContext = $accountingContext;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcctNumber()
    {
      return $this->acctNumber;
    }

    /**
     * @param string $acctNumber
     * @return \Nzolt\NetSuite\AccountLocalizations
     */
    public function setAcctNumber($acctNumber)
    {
      $this->acctNumber = $acctNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcctName()
    {
      return $this->acctName;
    }

    /**
     * @param string $acctName
     * @return \Nzolt\NetSuite\AccountLocalizations
     */
    public function setAcctName($acctName)
    {
      $this->acctName = $acctName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegalName()
    {
      return $this->legalName;
    }

    /**
     * @param string $legalName
     * @return \Nzolt\NetSuite\AccountLocalizations
     */
    public function setLegalName($legalName)
    {
      $this->legalName = $legalName;
      return $this;
    }

    /**
     * @return Language
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param Language $locale
     * @return \Nzolt\NetSuite\AccountLocalizations
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

}
