<?php

namespace Nzolt\NetSuite;

class VendorPayment extends Record
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
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var float $balance
     */
    protected $balance = null;

    /**
     * @var RecordRef $apAcct
     */
    protected $apAcct = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $voidJournal
     */
    protected $voidJournal = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var string $currencyName
     */
    protected $currencyName = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var boolean $toAch
     */
    protected $toAch = null;

    /**
     * @var boolean $toBePrinted
     */
    protected $toBePrinted = null;

    /**
     * @var boolean $printVoucher
     */
    protected $printVoucher = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $transactionNumber
     */
    protected $transactionNumber = null;

    /**
     * @var VendorPaymentApplyList $applyList
     */
    protected $applyList = null;

    /**
     * @var VendorPaymentCreditList $creditList
     */
    protected $creditList = null;

    /**
     * @var boolean $billPay
     */
    protected $billPay = null;

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
     * @return \Nzolt\NetSuite\VendorPayment
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
     * @return \Nzolt\NetSuite\VendorPayment
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setAccount($account)
    {
      $this->account = $account;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApAcct()
    {
      return $this->apAcct;
    }

    /**
     * @param RecordRef $apAcct
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setApAcct($apAcct)
    {
      $this->apAcct = $apAcct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param RecordRef $entity
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setAddress($address)
    {
      $this->address = $address;
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
     * @return \Nzolt\NetSuite\VendorPayment
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
    public function getVoidJournal()
    {
      return $this->voidJournal;
    }

    /**
     * @param RecordRef $voidJournal
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setVoidJournal($voidJournal)
    {
      $this->voidJournal = $voidJournal;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setCurrencyName($currencyName)
    {
      $this->currencyName = $currencyName;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getToAch()
    {
      return $this->toAch;
    }

    /**
     * @param boolean $toAch
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setToAch($toAch)
    {
      $this->toAch = $toAch;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setToBePrinted($toBePrinted)
    {
      $this->toBePrinted = $toBePrinted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrintVoucher()
    {
      return $this->printVoucher;
    }

    /**
     * @param boolean $printVoucher
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setPrintVoucher($printVoucher)
    {
      $this->printVoucher = $printVoucher;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\VendorPayment
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumber()
    {
      return $this->transactionNumber;
    }

    /**
     * @param string $transactionNumber
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setTransactionNumber($transactionNumber)
    {
      $this->transactionNumber = $transactionNumber;
      return $this;
    }

    /**
     * @return VendorPaymentApplyList
     */
    public function getApplyList()
    {
      return $this->applyList;
    }

    /**
     * @param VendorPaymentApplyList $applyList
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setApplyList($applyList)
    {
      $this->applyList = $applyList;
      return $this;
    }

    /**
     * @return VendorPaymentCreditList
     */
    public function getCreditList()
    {
      return $this->creditList;
    }

    /**
     * @param VendorPaymentCreditList $creditList
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setCreditList($creditList)
    {
      $this->creditList = $creditList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBillPay()
    {
      return $this->billPay;
    }

    /**
     * @param boolean $billPay
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setBillPay($billPay)
    {
      $this->billPay = $billPay;
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
     * @return \Nzolt\NetSuite\VendorPayment
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
     * @return \Nzolt\NetSuite\VendorPayment
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
     * @return \Nzolt\NetSuite\VendorPayment
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
     * @return \Nzolt\NetSuite\VendorPayment
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
