<?php

namespace Nzolt\NetSuite;

class Check extends Record
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
     * @var string $status
     */
    protected $status = null;

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
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $voidJournal
     */
    protected $voidJournal = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var boolean $toBePrinted
     */
    protected $toBePrinted = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var float $taxTotal
     */
    protected $taxTotal = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var float $tax2Total
     */
    protected $tax2Total = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var float $userTotal
     */
    protected $userTotal = null;

    /**
     * @var LandedCostMethod $landedCostMethod
     */
    protected $landedCostMethod = null;

    /**
     * @var boolean $landedCostPerLine
     */
    protected $landedCostPerLine = null;

    /**
     * @var string $transactionNumber
     */
    protected $transactionNumber = null;

    /**
     * @var CheckExpenseList $expenseList
     */
    protected $expenseList = null;

    /**
     * @var CheckItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var CheckLandedCostList $landedCostsList
     */
    protected $landedCostsList = null;

    /**
     * @var boolean $billPay
     */
    protected $billPay = null;

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
     * @return \Nzolt\NetSuite\Check
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
     * @return \Nzolt\NetSuite\Check
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
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Nzolt\NetSuite\Check
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\Check
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
     * @return \Nzolt\NetSuite\Check
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
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
     * @return \Nzolt\NetSuite\Check
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setAddress($address)
    {
      $this->address = $address;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
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
     * @return \Nzolt\NetSuite\Check
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
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param RecordRef $currency
     * @return \Nzolt\NetSuite\Check
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setVoidJournal($voidJournal)
    {
      $this->voidJournal = $voidJournal;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setToBePrinted($toBePrinted)
    {
      $this->toBePrinted = $toBePrinted;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxTotal()
    {
      return $this->taxTotal;
    }

    /**
     * @param float $taxTotal
     * @return \Nzolt\NetSuite\Check
     */
    public function setTaxTotal($taxTotal)
    {
      $this->taxTotal = $taxTotal;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax2Total()
    {
      return $this->tax2Total;
    }

    /**
     * @param float $tax2Total
     * @return \Nzolt\NetSuite\Check
     */
    public function setTax2Total($tax2Total)
    {
      $this->tax2Total = $tax2Total;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return float
     */
    public function getUserTotal()
    {
      return $this->userTotal;
    }

    /**
     * @param float $userTotal
     * @return \Nzolt\NetSuite\Check
     */
    public function setUserTotal($userTotal)
    {
      $this->userTotal = $userTotal;
      return $this;
    }

    /**
     * @return LandedCostMethod
     */
    public function getLandedCostMethod()
    {
      return $this->landedCostMethod;
    }

    /**
     * @param LandedCostMethod $landedCostMethod
     * @return \Nzolt\NetSuite\Check
     */
    public function setLandedCostMethod($landedCostMethod)
    {
      $this->landedCostMethod = $landedCostMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLandedCostPerLine()
    {
      return $this->landedCostPerLine;
    }

    /**
     * @param boolean $landedCostPerLine
     * @return \Nzolt\NetSuite\Check
     */
    public function setLandedCostPerLine($landedCostPerLine)
    {
      $this->landedCostPerLine = $landedCostPerLine;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setTransactionNumber($transactionNumber)
    {
      $this->transactionNumber = $transactionNumber;
      return $this;
    }

    /**
     * @return CheckExpenseList
     */
    public function getExpenseList()
    {
      return $this->expenseList;
    }

    /**
     * @param CheckExpenseList $expenseList
     * @return \Nzolt\NetSuite\Check
     */
    public function setExpenseList($expenseList)
    {
      $this->expenseList = $expenseList;
      return $this;
    }

    /**
     * @return CheckItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param CheckItemList $itemList
     * @return \Nzolt\NetSuite\Check
     */
    public function setItemList($itemList)
    {
      $this->itemList = $itemList;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return CheckLandedCostList
     */
    public function getLandedCostsList()
    {
      return $this->landedCostsList;
    }

    /**
     * @param CheckLandedCostList $landedCostsList
     * @return \Nzolt\NetSuite\Check
     */
    public function setLandedCostsList($landedCostsList)
    {
      $this->landedCostsList = $landedCostsList;
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setBillPay($billPay)
    {
      $this->billPay = $billPay;
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
     * @return \Nzolt\NetSuite\Check
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
     * @return \Nzolt\NetSuite\Check
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
     * @return \Nzolt\NetSuite\Check
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
