<?php

namespace Nzolt\NetSuite;

class BillingAccount extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $idNumber
     */
    protected $idNumber = null;

    /**
     * @var boolean $customerDefault
     */
    protected $customerDefault = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $inactive
     */
    protected $inactive = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var string $createdBy
     */
    protected $createdBy = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

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
     * @var RecordRef $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var BillingAccountFrequency $frequency
     */
    protected $frequency = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $lastBillDate
     */
    protected $lastBillDate = null;

    /**
     * @var \DateTime $lastBillCycleDate
     */
    protected $lastBillCycleDate = null;

    /**
     * @var \DateTime $nextBillCycleDate
     */
    protected $nextBillCycleDate = null;

    /**
     * @var RecordRef $invoiceForm
     */
    protected $invoiceForm = null;

    /**
     * @var RecordRef $cashSaleForm
     */
    protected $cashSaleForm = null;

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
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdNumber()
    {
      return $this->idNumber;
    }

    /**
     * @param string $idNumber
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setIdNumber($idNumber)
    {
      $this->idNumber = $idNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomerDefault()
    {
      return $this->customerDefault;
    }

    /**
     * @param boolean $customerDefault
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setCustomerDefault($customerDefault)
    {
      $this->customerDefault = $customerDefault;
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
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInactive()
    {
      return $this->inactive;
    }

    /**
     * @param boolean $inactive
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setInactive($inactive)
    {
      $this->inactive = $inactive;
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
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\BillingAccount
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
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setCreatedBy($createdBy)
    {
      $this->createdBy = $createdBy;
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
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\BillingAccount
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
     * @return \Nzolt\NetSuite\BillingAccount
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
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param RecordRef $billingSchedule
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return BillingAccountFrequency
     */
    public function getFrequency()
    {
      return $this->frequency;
    }

    /**
     * @param BillingAccountFrequency $frequency
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setFrequency($frequency)
    {
      $this->frequency = $frequency;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastBillDate()
    {
      if ($this->lastBillDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastBillDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastBillDate
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setLastBillDate(\DateTime $lastBillDate = null)
    {
      if ($lastBillDate == null) {
       $this->lastBillDate = null;
      } else {
        $this->lastBillDate = $lastBillDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastBillCycleDate()
    {
      if ($this->lastBillCycleDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastBillCycleDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastBillCycleDate
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setLastBillCycleDate(\DateTime $lastBillCycleDate = null)
    {
      if ($lastBillCycleDate == null) {
       $this->lastBillCycleDate = null;
      } else {
        $this->lastBillCycleDate = $lastBillCycleDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextBillCycleDate()
    {
      if ($this->nextBillCycleDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->nextBillCycleDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $nextBillCycleDate
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setNextBillCycleDate(\DateTime $nextBillCycleDate = null)
    {
      if ($nextBillCycleDate == null) {
       $this->nextBillCycleDate = null;
      } else {
        $this->nextBillCycleDate = $nextBillCycleDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInvoiceForm()
    {
      return $this->invoiceForm;
    }

    /**
     * @param RecordRef $invoiceForm
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setInvoiceForm($invoiceForm)
    {
      $this->invoiceForm = $invoiceForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCashSaleForm()
    {
      return $this->cashSaleForm;
    }

    /**
     * @param RecordRef $cashSaleForm
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setCashSaleForm($cashSaleForm)
    {
      $this->cashSaleForm = $cashSaleForm;
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
     * @return \Nzolt\NetSuite\BillingAccount
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
     * @return \Nzolt\NetSuite\BillingAccount
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
     * @return \Nzolt\NetSuite\BillingAccount
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
