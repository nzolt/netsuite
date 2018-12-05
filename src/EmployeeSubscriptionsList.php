<?php

namespace Nzolt\NetSuite;

class EmployeeSubscriptionsList
{

    /**
     * @var EmployeeSubscriptions[] $subscriptions
     */
    protected $subscriptions = null;

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
     * @return EmployeeSubscriptions[]
     */
    public function getSubscriptions()
    {
      return $this->subscriptions;
    }

    /**
     * @param EmployeeSubscriptions[] $subscriptions
     * @return \Nzolt\NetSuite\EmployeeSubscriptionsList
     */
    public function setSubscriptions(array $subscriptions = null)
    {
      $this->subscriptions = $subscriptions;
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
     * @return \Nzolt\NetSuite\EmployeeSubscriptionsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
