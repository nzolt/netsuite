<?php

namespace Nzolt\NetSuite;

class Charge extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $salesOrder
     */
    protected $salesOrder = null;

    /**
     * @var RecordRef $billTo
     */
    protected $billTo = null;

    /**
     * @var RecordRef $billingAccount
     */
    protected $billingAccount = null;

    /**
     * @var ChargeStage $stage
     */
    protected $stage = null;

    /**
     * @var \DateTime $chargeDate
     */
    protected $chargeDate = null;

    /**
     * @var ChargeUse $use
     */
    protected $use = null;

    /**
     * @var RecordRef $chargeType
     */
    protected $chargeType = null;

    /**
     * @var RecordRef $projectTask
     */
    protected $projectTask = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var RecordRef $timeRecord
     */
    protected $timeRecord = null;

    /**
     * @var string $rate
     */
    protected $rate = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var RecordRef $billingItem
     */
    protected $billingItem = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $transaction
     */
    protected $transaction = null;

    /**
     * @var RecordRef $transactionLine
     */
    protected $transactionLine = null;

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
     * @var RecordRef $salesOrderLine
     */
    protected $salesOrderLine = null;

    /**
     * @var RecordRef $subscriptionLine
     */
    protected $subscriptionLine = null;

    /**
     * @var RecordRef $invoice
     */
    protected $invoice = null;

    /**
     * @var RecordRef $invoiceLine
     */
    protected $invoiceLine = null;

    /**
     * @var RecordRef $rule
     */
    protected $rule = null;

    /**
     * @var string $runId
     */
    protected $runId = null;

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
     * @return \Nzolt\NetSuite\Charge
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\Charge
     */
    public function setSalesOrder($salesOrder)
    {
      $this->salesOrder = $salesOrder;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillTo()
    {
      return $this->billTo;
    }

    /**
     * @param RecordRef $billTo
     * @return \Nzolt\NetSuite\Charge
     */
    public function setBillTo($billTo)
    {
      $this->billTo = $billTo;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingAccount()
    {
      return $this->billingAccount;
    }

    /**
     * @param RecordRef $billingAccount
     * @return \Nzolt\NetSuite\Charge
     */
    public function setBillingAccount($billingAccount)
    {
      $this->billingAccount = $billingAccount;
      return $this;
    }

    /**
     * @return ChargeStage
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param ChargeStage $stage
     * @return \Nzolt\NetSuite\Charge
     */
    public function setStage($stage)
    {
      $this->stage = $stage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getChargeDate()
    {
      if ($this->chargeDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->chargeDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $chargeDate
     * @return \Nzolt\NetSuite\Charge
     */
    public function setChargeDate(\DateTime $chargeDate = null)
    {
      if ($chargeDate == null) {
       $this->chargeDate = null;
      } else {
        $this->chargeDate = $chargeDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ChargeUse
     */
    public function getUse()
    {
      return $this->use;
    }

    /**
     * @param ChargeUse $use
     * @return \Nzolt\NetSuite\Charge
     */
    public function setUse($use)
    {
      $this->use = $use;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getChargeType()
    {
      return $this->chargeType;
    }

    /**
     * @param RecordRef $chargeType
     * @return \Nzolt\NetSuite\Charge
     */
    public function setChargeType($chargeType)
    {
      $this->chargeType = $chargeType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProjectTask()
    {
      return $this->projectTask;
    }

    /**
     * @param RecordRef $projectTask
     * @return \Nzolt\NetSuite\Charge
     */
    public function setProjectTask($projectTask)
    {
      $this->projectTask = $projectTask;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\Charge
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\Charge
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
     * @return RecordRef
     */
    public function getTimeRecord()
    {
      return $this->timeRecord;
    }

    /**
     * @param RecordRef $timeRecord
     * @return \Nzolt\NetSuite\Charge
     */
    public function setTimeRecord($timeRecord)
    {
      $this->timeRecord = $timeRecord;
      return $this;
    }

    /**
     * @return string
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param string $rate
     * @return \Nzolt\NetSuite\Charge
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return \Nzolt\NetSuite\Charge
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Nzolt\NetSuite\Charge
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingItem()
    {
      return $this->billingItem;
    }

    /**
     * @param RecordRef $billingItem
     * @return \Nzolt\NetSuite\Charge
     */
    public function setBillingItem($billingItem)
    {
      $this->billingItem = $billingItem;
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
     * @return \Nzolt\NetSuite\Charge
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param RecordRef $transaction
     * @return \Nzolt\NetSuite\Charge
     */
    public function setTransaction($transaction)
    {
      $this->transaction = $transaction;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransactionLine()
    {
      return $this->transactionLine;
    }

    /**
     * @param RecordRef $transactionLine
     * @return \Nzolt\NetSuite\Charge
     */
    public function setTransactionLine($transactionLine)
    {
      $this->transactionLine = $transactionLine;
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
     * @return \Nzolt\NetSuite\Charge
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
     * @return \Nzolt\NetSuite\Charge
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
     * @return \Nzolt\NetSuite\Charge
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesOrderLine()
    {
      return $this->salesOrderLine;
    }

    /**
     * @param RecordRef $salesOrderLine
     * @return \Nzolt\NetSuite\Charge
     */
    public function setSalesOrderLine($salesOrderLine)
    {
      $this->salesOrderLine = $salesOrderLine;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscriptionLine()
    {
      return $this->subscriptionLine;
    }

    /**
     * @param RecordRef $subscriptionLine
     * @return \Nzolt\NetSuite\Charge
     */
    public function setSubscriptionLine($subscriptionLine)
    {
      $this->subscriptionLine = $subscriptionLine;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInvoice()
    {
      return $this->invoice;
    }

    /**
     * @param RecordRef $invoice
     * @return \Nzolt\NetSuite\Charge
     */
    public function setInvoice($invoice)
    {
      $this->invoice = $invoice;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInvoiceLine()
    {
      return $this->invoiceLine;
    }

    /**
     * @param RecordRef $invoiceLine
     * @return \Nzolt\NetSuite\Charge
     */
    public function setInvoiceLine($invoiceLine)
    {
      $this->invoiceLine = $invoiceLine;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRule()
    {
      return $this->rule;
    }

    /**
     * @param RecordRef $rule
     * @return \Nzolt\NetSuite\Charge
     */
    public function setRule($rule)
    {
      $this->rule = $rule;
      return $this;
    }

    /**
     * @return string
     */
    public function getRunId()
    {
      return $this->runId;
    }

    /**
     * @param string $runId
     * @return \Nzolt\NetSuite\Charge
     */
    public function setRunId($runId)
    {
      $this->runId = $runId;
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
     * @return \Nzolt\NetSuite\Charge
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
     * @return \Nzolt\NetSuite\Charge
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
