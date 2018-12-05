<?php

namespace Nzolt\NetSuite;

class BillingScheduleRecurrence
{

    /**
     * @var int $recurrenceId
     */
    protected $recurrenceId = null;

    /**
     * @var int $count
     */
    protected $count = null;

    /**
     * @var BillingScheduleRecurrenceRecurrenceUnits $units
     */
    protected $units = null;

    /**
     * @var boolean $relativeToPrevious
     */
    protected $relativeToPrevious = null;

    /**
     * @var \DateTime $recurrenceDate
     */
    protected $recurrenceDate = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var RecordRef $paymentTerms
     */
    protected $paymentTerms = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getRecurrenceId()
    {
      return $this->recurrenceId;
    }

    /**
     * @param int $recurrenceId
     * @return \Nzolt\NetSuite\BillingScheduleRecurrence
     */
    public function setRecurrenceId($recurrenceId)
    {
      $this->recurrenceId = $recurrenceId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->count;
    }

    /**
     * @param int $count
     * @return \Nzolt\NetSuite\BillingScheduleRecurrence
     */
    public function setCount($count)
    {
      $this->count = $count;
      return $this;
    }

    /**
     * @return BillingScheduleRecurrenceRecurrenceUnits
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param BillingScheduleRecurrenceRecurrenceUnits $units
     * @return \Nzolt\NetSuite\BillingScheduleRecurrence
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRelativeToPrevious()
    {
      return $this->relativeToPrevious;
    }

    /**
     * @param boolean $relativeToPrevious
     * @return \Nzolt\NetSuite\BillingScheduleRecurrence
     */
    public function setRelativeToPrevious($relativeToPrevious)
    {
      $this->relativeToPrevious = $relativeToPrevious;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRecurrenceDate()
    {
      if ($this->recurrenceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->recurrenceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $recurrenceDate
     * @return \Nzolt\NetSuite\BillingScheduleRecurrence
     */
    public function setRecurrenceDate(\DateTime $recurrenceDate = null)
    {
      if ($recurrenceDate == null) {
       $this->recurrenceDate = null;
      } else {
        $this->recurrenceDate = $recurrenceDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\BillingScheduleRecurrence
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentTerms()
    {
      return $this->paymentTerms;
    }

    /**
     * @param RecordRef $paymentTerms
     * @return \Nzolt\NetSuite\BillingScheduleRecurrence
     */
    public function setPaymentTerms($paymentTerms)
    {
      $this->paymentTerms = $paymentTerms;
      return $this;
    }

}
