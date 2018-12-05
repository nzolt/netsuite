<?php

namespace Nzolt\NetSuite;

class CustomerDeposit extends Record
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
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var RecordRef $salesOrder
     */
    protected $salesOrder = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var float $payment
     */
    protected $payment = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var RecordRef $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var boolean $ccIsPurchaseCardBin
     */
    protected $ccIsPurchaseCardBin = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var boolean $ccProcessAsPurchaseCard
     */
    protected $ccProcessAsPurchaseCard = null;

    /**
     * @var string $currencyName
     */
    protected $currencyName = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var string $checkNum
     */
    protected $checkNum = null;

    /**
     * @var RecordRef $creditCardProcessor
     */
    protected $creditCardProcessor = null;

    /**
     * @var RecordRef $creditCard
     */
    protected $creditCard = null;

    /**
     * @var string $ccSecurityCode
     */
    protected $ccSecurityCode = null;

    /**
     * @var string $ccNumber
     */
    protected $ccNumber = null;

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
     * @var \DateTime $ccExpireDate
     */
    protected $ccExpireDate = null;

    /**
     * @var string $debitCardIssueNo
     */
    protected $debitCardIssueNo = null;

    /**
     * @var \DateTime $validFrom
     */
    protected $validFrom = null;

    /**
     * @var string $ccName
     */
    protected $ccName = null;

    /**
     * @var string $ccStreet
     */
    protected $ccStreet = null;

    /**
     * @var string $ccZipCode
     */
    protected $ccZipCode = null;

    /**
     * @var boolean $chargeIt
     */
    protected $chargeIt = null;

    /**
     * @var boolean $ccApproved
     */
    protected $ccApproved = null;

    /**
     * @var string $pnRefNum
     */
    protected $pnRefNum = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @var AvsMatchCode $ccAvsStreetMatch
     */
    protected $ccAvsStreetMatch = null;

    /**
     * @var string $softDescriptor
     */
    protected $softDescriptor = null;

    /**
     * @var AvsMatchCode $ccAvsZipMatch
     */
    protected $ccAvsZipMatch = null;

    /**
     * @var boolean $isRecurringPayment
     */
    protected $isRecurringPayment = null;

    /**
     * @var AvsMatchCode $ccSecurityCodeMatch
     */
    protected $ccSecurityCodeMatch = null;

    /**
     * @var string $threeDStatusCode
     */
    protected $threeDStatusCode = null;

    /**
     * @var boolean $ignoreAvs
     */
    protected $ignoreAvs = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var boolean $undepFunds
     */
    protected $undepFunds = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var CustomerDepositApplyList $applyList
     */
    protected $applyList = null;

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
     * @return \Nzolt\NetSuite\CustomerDeposit
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
     * @return \Nzolt\NetSuite\CustomerDeposit
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
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param RecordRef $customer
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesOrder()
    {
      return $this->salesOrder;
    }

    /**
     * @param RecordRef $salesOrder
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setSalesOrder($salesOrder)
    {
      $this->salesOrder = $salesOrder;
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
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayment()
    {
      return $this->payment;
    }

    /**
     * @param float $payment
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setPayment($payment)
    {
      $this->payment = $payment;
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
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\CustomerDeposit
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
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param RecordRef $paymentMethod
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCcIsPurchaseCardBin()
    {
      return $this->ccIsPurchaseCardBin;
    }

    /**
     * @param boolean $ccIsPurchaseCardBin
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcIsPurchaseCardBin($ccIsPurchaseCardBin)
    {
      $this->ccIsPurchaseCardBin = $ccIsPurchaseCardBin;
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
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCcProcessAsPurchaseCard()
    {
      return $this->ccProcessAsPurchaseCard;
    }

    /**
     * @param boolean $ccProcessAsPurchaseCard
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcProcessAsPurchaseCard($ccProcessAsPurchaseCard)
    {
      $this->ccProcessAsPurchaseCard = $ccProcessAsPurchaseCard;
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
     * @return \Nzolt\NetSuite\CustomerDeposit
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
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckNum()
    {
      return $this->checkNum;
    }

    /**
     * @param string $checkNum
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCheckNum($checkNum)
    {
      $this->checkNum = $checkNum;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreditCardProcessor()
    {
      return $this->creditCardProcessor;
    }

    /**
     * @param RecordRef $creditCardProcessor
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCreditCardProcessor($creditCardProcessor)
    {
      $this->creditCardProcessor = $creditCardProcessor;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreditCard()
    {
      return $this->creditCard;
    }

    /**
     * @param RecordRef $creditCard
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCreditCard($creditCard)
    {
      $this->creditCard = $creditCard;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcSecurityCode()
    {
      return $this->ccSecurityCode;
    }

    /**
     * @param string $ccSecurityCode
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcSecurityCode($ccSecurityCode)
    {
      $this->ccSecurityCode = $ccSecurityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcNumber()
    {
      return $this->ccNumber;
    }

    /**
     * @param string $ccNumber
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcNumber($ccNumber)
    {
      $this->ccNumber = $ccNumber;
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
     * @return \Nzolt\NetSuite\CustomerDeposit
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
     * @return \Nzolt\NetSuite\CustomerDeposit
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
     * @return \Nzolt\NetSuite\CustomerDeposit
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
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCcExpireDate()
    {
      if ($this->ccExpireDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ccExpireDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ccExpireDate
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcExpireDate(\DateTime $ccExpireDate = null)
    {
      if ($ccExpireDate == null) {
       $this->ccExpireDate = null;
      } else {
        $this->ccExpireDate = $ccExpireDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitCardIssueNo()
    {
      return $this->debitCardIssueNo;
    }

    /**
     * @param string $debitCardIssueNo
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setDebitCardIssueNo($debitCardIssueNo)
    {
      $this->debitCardIssueNo = $debitCardIssueNo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
      if ($this->validFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->validFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $validFrom
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setValidFrom(\DateTime $validFrom = null)
    {
      if ($validFrom == null) {
       $this->validFrom = null;
      } else {
        $this->validFrom = $validFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCcName()
    {
      return $this->ccName;
    }

    /**
     * @param string $ccName
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcName($ccName)
    {
      $this->ccName = $ccName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcStreet()
    {
      return $this->ccStreet;
    }

    /**
     * @param string $ccStreet
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcStreet($ccStreet)
    {
      $this->ccStreet = $ccStreet;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcZipCode()
    {
      return $this->ccZipCode;
    }

    /**
     * @param string $ccZipCode
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcZipCode($ccZipCode)
    {
      $this->ccZipCode = $ccZipCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChargeIt()
    {
      return $this->chargeIt;
    }

    /**
     * @param boolean $chargeIt
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setChargeIt($chargeIt)
    {
      $this->chargeIt = $chargeIt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCcApproved()
    {
      return $this->ccApproved;
    }

    /**
     * @param boolean $ccApproved
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcApproved($ccApproved)
    {
      $this->ccApproved = $ccApproved;
      return $this;
    }

    /**
     * @return string
     */
    public function getPnRefNum()
    {
      return $this->pnRefNum;
    }

    /**
     * @param string $pnRefNum
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setPnRefNum($pnRefNum)
    {
      $this->pnRefNum = $pnRefNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
      return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setAuthCode($authCode)
    {
      $this->authCode = $authCode;
      return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcAvsStreetMatch()
    {
      return $this->ccAvsStreetMatch;
    }

    /**
     * @param AvsMatchCode $ccAvsStreetMatch
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcAvsStreetMatch($ccAvsStreetMatch)
    {
      $this->ccAvsStreetMatch = $ccAvsStreetMatch;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoftDescriptor()
    {
      return $this->softDescriptor;
    }

    /**
     * @param string $softDescriptor
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setSoftDescriptor($softDescriptor)
    {
      $this->softDescriptor = $softDescriptor;
      return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcAvsZipMatch()
    {
      return $this->ccAvsZipMatch;
    }

    /**
     * @param AvsMatchCode $ccAvsZipMatch
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcAvsZipMatch($ccAvsZipMatch)
    {
      $this->ccAvsZipMatch = $ccAvsZipMatch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRecurringPayment()
    {
      return $this->isRecurringPayment;
    }

    /**
     * @param boolean $isRecurringPayment
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setIsRecurringPayment($isRecurringPayment)
    {
      $this->isRecurringPayment = $isRecurringPayment;
      return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcSecurityCodeMatch()
    {
      return $this->ccSecurityCodeMatch;
    }

    /**
     * @param AvsMatchCode $ccSecurityCodeMatch
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setCcSecurityCodeMatch($ccSecurityCodeMatch)
    {
      $this->ccSecurityCodeMatch = $ccSecurityCodeMatch;
      return $this;
    }

    /**
     * @return string
     */
    public function getThreeDStatusCode()
    {
      return $this->threeDStatusCode;
    }

    /**
     * @param string $threeDStatusCode
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setThreeDStatusCode($threeDStatusCode)
    {
      $this->threeDStatusCode = $threeDStatusCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreAvs()
    {
      return $this->ignoreAvs;
    }

    /**
     * @param boolean $ignoreAvs
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setIgnoreAvs($ignoreAvs)
    {
      $this->ignoreAvs = $ignoreAvs;
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
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUndepFunds()
    {
      return $this->undepFunds;
    }

    /**
     * @param boolean $undepFunds
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setUndepFunds($undepFunds)
    {
      $this->undepFunds = $undepFunds;
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
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return CustomerDepositApplyList
     */
    public function getApplyList()
    {
      return $this->applyList;
    }

    /**
     * @param CustomerDepositApplyList $applyList
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setApplyList($applyList)
    {
      $this->applyList = $applyList;
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
     * @return \Nzolt\NetSuite\CustomerDeposit
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
     * @return \Nzolt\NetSuite\CustomerDeposit
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
     * @return \Nzolt\NetSuite\CustomerDeposit
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
     * @return \Nzolt\NetSuite\CustomerDeposit
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
