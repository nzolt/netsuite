<?php

namespace Nzolt\NetSuite;

class Paycheck extends Record
{

    /**
     * @var string $batchNumber
     */
    protected $batchNumber = null;

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
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $workplace
     */
    protected $workplace = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var float $userAmount
     */
    protected $userAmount = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var string $payFrequency
     */
    protected $payFrequency = null;

    /**
     * @var float $balance
     */
    protected $balance = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var \DateTime $periodEnding
     */
    protected $periodEnding = null;

    /**
     * @var PaycheckPayEarnList $payEarnList
     */
    protected $payEarnList = null;

    /**
     * @var PaycheckPayTimeList $payTimeList
     */
    protected $payTimeList = null;

    /**
     * @var PaycheckPayExpList $payExpList
     */
    protected $payExpList = null;

    /**
     * @var PaycheckPayPtoList $payPtoList
     */
    protected $payPtoList = null;

    /**
     * @var PaycheckPayDeductList $payDeductList
     */
    protected $payDeductList = null;

    /**
     * @var PaycheckPayContribList $payContribList
     */
    protected $payContribList = null;

    /**
     * @var PaycheckPayTaxList $payTaxList
     */
    protected $payTaxList = null;

    /**
     * @var PaycheckPaySummaryList $paySummaryList
     */
    protected $paySummaryList = null;

    /**
     * @var PaycheckPayDisburseList $payDisburseList
     */
    protected $payDisburseList = null;

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
     * @return string
     */
    public function getBatchNumber()
    {
      return $this->batchNumber;
    }

    /**
     * @param string $batchNumber
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setBatchNumber($batchNumber)
    {
      $this->batchNumber = $batchNumber;
      return $this;
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
     * @return \Nzolt\NetSuite\Paycheck
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
     * @return \Nzolt\NetSuite\Paycheck
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
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\Paycheck
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
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setAddress($address)
    {
      $this->address = $address;
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
     * @return \Nzolt\NetSuite\Paycheck
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
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkplace()
    {
      return $this->workplace;
    }

    /**
     * @param RecordRef $workplace
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setWorkplace($workplace)
    {
      $this->workplace = $workplace;
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
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return float
     */
    public function getUserAmount()
    {
      return $this->userAmount;
    }

    /**
     * @param float $userAmount
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setUserAmount($userAmount)
    {
      $this->userAmount = $userAmount;
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
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayFrequency()
    {
      return $this->payFrequency;
    }

    /**
     * @param string $payFrequency
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPayFrequency($payFrequency)
    {
      $this->payFrequency = $payFrequency;
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
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
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
     * @return \Nzolt\NetSuite\Paycheck
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
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodEnding()
    {
      if ($this->periodEnding == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->periodEnding);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $periodEnding
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPeriodEnding(\DateTime $periodEnding = null)
    {
      if ($periodEnding == null) {
       $this->periodEnding = null;
      } else {
        $this->periodEnding = $periodEnding->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PaycheckPayEarnList
     */
    public function getPayEarnList()
    {
      return $this->payEarnList;
    }

    /**
     * @param PaycheckPayEarnList $payEarnList
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPayEarnList($payEarnList)
    {
      $this->payEarnList = $payEarnList;
      return $this;
    }

    /**
     * @return PaycheckPayTimeList
     */
    public function getPayTimeList()
    {
      return $this->payTimeList;
    }

    /**
     * @param PaycheckPayTimeList $payTimeList
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPayTimeList($payTimeList)
    {
      $this->payTimeList = $payTimeList;
      return $this;
    }

    /**
     * @return PaycheckPayExpList
     */
    public function getPayExpList()
    {
      return $this->payExpList;
    }

    /**
     * @param PaycheckPayExpList $payExpList
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPayExpList($payExpList)
    {
      $this->payExpList = $payExpList;
      return $this;
    }

    /**
     * @return PaycheckPayPtoList
     */
    public function getPayPtoList()
    {
      return $this->payPtoList;
    }

    /**
     * @param PaycheckPayPtoList $payPtoList
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPayPtoList($payPtoList)
    {
      $this->payPtoList = $payPtoList;
      return $this;
    }

    /**
     * @return PaycheckPayDeductList
     */
    public function getPayDeductList()
    {
      return $this->payDeductList;
    }

    /**
     * @param PaycheckPayDeductList $payDeductList
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPayDeductList($payDeductList)
    {
      $this->payDeductList = $payDeductList;
      return $this;
    }

    /**
     * @return PaycheckPayContribList
     */
    public function getPayContribList()
    {
      return $this->payContribList;
    }

    /**
     * @param PaycheckPayContribList $payContribList
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPayContribList($payContribList)
    {
      $this->payContribList = $payContribList;
      return $this;
    }

    /**
     * @return PaycheckPayTaxList
     */
    public function getPayTaxList()
    {
      return $this->payTaxList;
    }

    /**
     * @param PaycheckPayTaxList $payTaxList
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPayTaxList($payTaxList)
    {
      $this->payTaxList = $payTaxList;
      return $this;
    }

    /**
     * @return PaycheckPaySummaryList
     */
    public function getPaySummaryList()
    {
      return $this->paySummaryList;
    }

    /**
     * @param PaycheckPaySummaryList $paySummaryList
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPaySummaryList($paySummaryList)
    {
      $this->paySummaryList = $paySummaryList;
      return $this;
    }

    /**
     * @return PaycheckPayDisburseList
     */
    public function getPayDisburseList()
    {
      return $this->payDisburseList;
    }

    /**
     * @param PaycheckPayDisburseList $payDisburseList
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setPayDisburseList($payDisburseList)
    {
      $this->payDisburseList = $payDisburseList;
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
     * @return \Nzolt\NetSuite\Paycheck
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
     * @return \Nzolt\NetSuite\Paycheck
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
