<?php

namespace Nzolt\NetSuite;

class DepositApplication extends Record
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
     * @var RecordRef $arAcct
     */
    protected $arAcct = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var RecordRef $deposit
     */
    protected $deposit = null;

    /**
     * @var \DateTime $depDate
     */
    protected $depDate = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var float $applied
     */
    protected $applied = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var float $unapplied
     */
    protected $unapplied = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var DepositApplicationApplyList $applyList
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
     * @return \Nzolt\NetSuite\DepositApplication
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
     * @return \Nzolt\NetSuite\DepositApplication
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
    public function getArAcct()
    {
      return $this->arAcct;
    }

    /**
     * @param RecordRef $arAcct
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setArAcct($arAcct)
    {
      $this->arAcct = $arAcct;
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
     * @return \Nzolt\NetSuite\DepositApplication
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\DepositApplication
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDeposit()
    {
      return $this->deposit;
    }

    /**
     * @param RecordRef $deposit
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setDeposit($deposit)
    {
      $this->deposit = $deposit;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepDate()
    {
      if ($this->depDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->depDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $depDate
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setDepDate(\DateTime $depDate = null)
    {
      if ($depDate == null) {
       $this->depDate = null;
      } else {
        $this->depDate = $depDate->format(\DateTime::ATOM);
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
     * @return \Nzolt\NetSuite\DepositApplication
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
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
     * @return \Nzolt\NetSuite\DepositApplication
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setApplied($applied)
    {
      $this->applied = $applied;
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setUnapplied($unapplied)
    {
      $this->unapplied = $unapplied;
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return DepositApplicationApplyList
     */
    public function getApplyList()
    {
      return $this->applyList;
    }

    /**
     * @param DepositApplicationApplyList $applyList
     * @return \Nzolt\NetSuite\DepositApplication
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
     * @return \Nzolt\NetSuite\DepositApplication
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
     * @return \Nzolt\NetSuite\DepositApplication
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
     * @return \Nzolt\NetSuite\DepositApplication
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
     * @return \Nzolt\NetSuite\DepositApplication
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
