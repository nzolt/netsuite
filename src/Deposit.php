<?php

namespace Nzolt\NetSuite;

class Deposit extends Record
{

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $currencyName
     */
    protected $currencyName = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var boolean $toBePrinted
     */
    protected $toBePrinted = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var DepositPaymentList $paymentList
     */
    protected $paymentList = null;

    /**
     * @var DepositOtherList $otherList
     */
    protected $otherList = null;

    /**
     * @var DepositCashBackList $cashBackList
     */
    protected $cashBackList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyName()
    {
      return $this->currencyName;
    }

    /**
     * @param string $currencyName
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setCurrencyName($currencyName)
    {
      $this->currencyName = $currencyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param string $tranId
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param RecordRef $account
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param float $total
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTranDate()
    {
      if ($this->tranDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->tranDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $tranDate
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setTranDate(\DateTime $tranDate = null)
    {
      if ($tranDate == null) {
       $this->tranDate = null;
      } else {
        $this->tranDate = $tranDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getToBePrinted()
    {
      return $this->toBePrinted;
    }

    /**
     * @param boolean $toBePrinted
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setToBePrinted($toBePrinted)
    {
      $this->toBePrinted = $toBePrinted;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return DepositPaymentList
     */
    public function getPaymentList()
    {
      return $this->paymentList;
    }

    /**
     * @param DepositPaymentList $paymentList
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setPaymentList($paymentList)
    {
      $this->paymentList = $paymentList;
      return $this;
    }

    /**
     * @return DepositOtherList
     */
    public function getOtherList()
    {
      return $this->otherList;
    }

    /**
     * @param DepositOtherList $otherList
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setOtherList($otherList)
    {
      $this->otherList = $otherList;
      return $this;
    }

    /**
     * @return DepositCashBackList
     */
    public function getCashBackList()
    {
      return $this->cashBackList;
    }

    /**
     * @param DepositCashBackList $cashBackList
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setCashBackList($cashBackList)
    {
      $this->cashBackList = $cashBackList;
      return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList()
    {
      return $this->accountingBookDetailList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\Deposit
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
