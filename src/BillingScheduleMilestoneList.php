<?php

namespace Nzolt\NetSuite;

class BillingScheduleMilestoneList
{

    /**
     * @var BillingScheduleMilestone[] $billingScheduleMilestone
     */
    protected $billingScheduleMilestone = null;

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
     * @return BillingScheduleMilestone[]
     */
    public function getBillingScheduleMilestone()
    {
      return $this->billingScheduleMilestone;
    }

    /**
     * @param BillingScheduleMilestone[] $billingScheduleMilestone
     * @return \Nzolt\NetSuite\BillingScheduleMilestoneList
     */
    public function setBillingScheduleMilestone(array $billingScheduleMilestone = null)
    {
      $this->billingScheduleMilestone = $billingScheduleMilestone;
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
     * @return \Nzolt\NetSuite\BillingScheduleMilestoneList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
