<?php

namespace Nzolt\NetSuite;

class Subscriptions
{

    /**
     * @var boolean $subscribed
     */
    protected $subscribed = null;

    /**
     * @var RecordRef $subscription
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
     * @return boolean
     */
    public function getSubscribed()
    {
      return $this->subscribed;
    }

    /**
     * @param boolean $subscribed
     * @return \Nzolt\NetSuite\Subscriptions
     */
    public function setSubscribed($subscribed)
    {
      $this->subscribed = $subscribed;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param RecordRef $subscription
     * @return \Nzolt\NetSuite\Subscriptions
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
     * @return \Nzolt\NetSuite\Subscriptions
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
