<?php

namespace Nzolt\NetSuite;

class CustomerPayment extends Record
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
     * @var RecordRef $arAcct
     */
    protected $arAcct = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var float $balance
     */
    protected $balance = null;

    /**
     * @var float $pending
     */
    protected $pending = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $payment
     */
    protected $payment = null;

    /**
     * @var boolean $autoApply
     */
    protected $autoApply = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

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
     * @var string $checkNum
     */
    protected $checkNum = null;

    /**
     * @var string $currencyName
     */
    protected $currencyName = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var RecordRef $creditCard
     */
    protected $creditCard = null;

    /**
     * @var boolean $chargeIt
     */
    protected $chargeIt = null;

    /**
     * @var string $ccNumber
     */
    protected $ccNumber = null;

    /**
     * @var \DateTime $ccExpireDate
     */
    protected $ccExpireDate = null;

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
     * @var boolean $ccApproved
     */
    protected $ccApproved = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @var AvsMatchCode $ccAvsStreetMatch
     */
    protected $ccAvsStreetMatch = null;

    /**
     * @var AvsMatchCode $ccAvsZipMatch
     */
    protected $ccAvsZipMatch = null;

    /**
     * @var boolean $isRecurringPayment
     */
    protected $isRecurringPayment = null;

    /**
     * @var string $ccSecurityCode
     */
    protected $ccSecurityCode = null;

    /**
     * @var boolean $ignoreAvs
     */
    protected $ignoreAvs = null;

    /**
     * @var AvsMatchCode $ccSecurityCodeMatch
     */
    protected $ccSecurityCodeMatch = null;

    /**
     * @var string $threeDStatusCode
     */
    protected $threeDStatusCode = null;

    /**
     * @var string $pnRefNum
     */
    protected $pnRefNum = null;

    /**
     * @var RecordRef $creditCardProcessor
     */
    protected $creditCardProcessor = null;

    /**
     * @var string $debitCardIssueNo
     */
    protected $debitCardIssueNo = null;

    /**
     * @var \DateTime $validFrom
     */
    protected $validFrom = null;

    /**
     * @var boolean $undepFunds
     */
    protected $undepFunds = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var float $applied
     */
    protected $applied = null;

    /**
     * @var float $unapplied
     */
    protected $unapplied = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var CustomerPaymentApplyList $applyList
     */
    protected $applyList = null;

    /**
     * @var CustomerPaymentCreditList $creditList
     */
    protected $creditList = null;

    /**
     * @var CustomerPaymentDepositList $depositList
     */
    protected $depositList = null;

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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getArAcct()
    {
      return $this->arAcct;
    }

    /**
     * @param RecordRef $arAcct
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setArAcct($arAcct)
    {
      $this->arAcct = $arAcct;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

    /**
     * @return float
     */
    public function getPending()
    {
      return $this->pending;
    }

    /**
     * @param float $pending
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setPending($pending)
    {
      $this->pending = $pending;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setPayment($payment)
    {
      $this->payment = $payment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoApply()
    {
      return $this->autoApply;
    }

    /**
     * @param boolean $autoApply
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setAutoApply($autoApply)
    {
      $this->autoApply = $autoApply;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return string
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param string $tranId
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCcProcessAsPurchaseCard($ccProcessAsPurchaseCard)
    {
      $this->ccProcessAsPurchaseCard = $ccProcessAsPurchaseCard;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCheckNum($checkNum)
    {
      $this->checkNum = $checkNum;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCreditCard($creditCard)
    {
      $this->creditCard = $creditCard;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setChargeIt($chargeIt)
    {
      $this->chargeIt = $chargeIt;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCcNumber($ccNumber)
    {
      $this->ccNumber = $ccNumber;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
    public function getCcName()
    {
      return $this->ccName;
    }

    /**
     * @param string $ccName
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCcZipCode($ccZipCode)
    {
      $this->ccZipCode = $ccZipCode;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCcApproved($ccApproved)
    {
      $this->ccApproved = $ccApproved;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCcAvsStreetMatch($ccAvsStreetMatch)
    {
      $this->ccAvsStreetMatch = $ccAvsStreetMatch;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setIsRecurringPayment($isRecurringPayment)
    {
      $this->isRecurringPayment = $isRecurringPayment;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCcSecurityCode($ccSecurityCode)
    {
      $this->ccSecurityCode = $ccSecurityCode;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setIgnoreAvs($ignoreAvs)
    {
      $this->ignoreAvs = $ignoreAvs;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setThreeDStatusCode($threeDStatusCode)
    {
      $this->threeDStatusCode = $threeDStatusCode;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setPnRefNum($pnRefNum)
    {
      $this->pnRefNum = $pnRefNum;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCreditCardProcessor($creditCardProcessor)
    {
      $this->creditCardProcessor = $creditCardProcessor;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return boolean
     */
    public function getUndepFunds()
    {
      return $this->undepFunds;
    }

    /**
     * @param boolean $undepFunds
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setUndepFunds($undepFunds)
    {
      $this->undepFunds = $undepFunds;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return float
     */
    public function getApplied()
    {
      return $this->applied;
    }

    /**
     * @param float $applied
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setApplied($applied)
    {
      $this->applied = $applied;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnapplied()
    {
      return $this->unapplied;
    }

    /**
     * @param float $unapplied
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setUnapplied($unapplied)
    {
      $this->unapplied = $unapplied;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return CustomerPaymentApplyList
     */
    public function getApplyList()
    {
      return $this->applyList;
    }

    /**
     * @param CustomerPaymentApplyList $applyList
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setApplyList($applyList)
    {
      $this->applyList = $applyList;
      return $this;
    }

    /**
     * @return CustomerPaymentCreditList
     */
    public function getCreditList()
    {
      return $this->creditList;
    }

    /**
     * @param CustomerPaymentCreditList $creditList
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setCreditList($creditList)
    {
      $this->creditList = $creditList;
      return $this;
    }

    /**
     * @return CustomerPaymentDepositList
     */
    public function getDepositList()
    {
      return $this->depositList;
    }

    /**
     * @param CustomerPaymentDepositList $depositList
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setDepositList($depositList)
    {
      $this->depositList = $depositList;
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
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
     * @return \Nzolt\NetSuite\CustomerPayment
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
