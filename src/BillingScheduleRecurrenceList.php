<?php

namespace Nzolt\NetSuite;

class BillingScheduleRecurrenceList
{

    /**
     * @var BillingScheduleRecurrence[] $billingScheduleRecurrence
     */
    protected $billingScheduleRecurrence = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return BillingScheduleRecurrence[]
     */
    public function getBillingScheduleRecurrence()
    {
      return $this->billingScheduleRecurrence;
    }

    /**
     * @param BillingScheduleRecurrence[] $billingScheduleRecurrence
     * @return \Nzolt\NetSuite\BillingScheduleRecurrenceList
     */
    public function setBillingScheduleRecurrence(array $billingScheduleRecurrence = null)
    {
      $this->billingScheduleRecurrence = $billingScheduleRecurrence;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\BillingScheduleRecurrenceList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
