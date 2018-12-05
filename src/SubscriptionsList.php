<?php

namespace Nzolt\NetSuite;

class SubscriptionsList
{

    /**
     * @var Subscriptions[] $subscriptions
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
     * @return Subscriptions[]
     */
    public function getSubscriptions()
    {
      return $this->subscriptions;
    }

    /**
     * @param Subscriptions[] $subscriptions
     * @return \Nzolt\NetSuite\SubscriptionsList
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
     * @return \Nzolt\NetSuite\SubscriptionsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
