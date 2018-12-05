<?php

namespace Nzolt\NetSuite;

class EmployeeSubscriptions
{

    /**
     * @var string $subscribed
     */
    protected $subscribed = null;

    /**
     * @var string $subscription
     */
    protected $subscription = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSubscribed()
    {
      return $this->subscribed;
    }

    /**
     * @param string $subscribed
     * @return \Nzolt\NetSuite\EmployeeSubscriptions
     */
    public function setSubscribed($subscribed)
    {
      $this->subscribed = $subscribed;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param string $subscription
     * @return \Nzolt\NetSuite\EmployeeSubscriptions
     */
    public function setSubscription($subscription)
    {
      $this->subscription = $subscription;
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
     * @return \Nzolt\NetSuite\EmployeeSubscriptions
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

}
