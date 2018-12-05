<?php

namespace Nzolt\NetSuite;

class UsageSearch extends SearchRecord
{

    /**
     * @var UsageSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var ItemSearchBasic $subscriptionPlanJoin
     */
    protected $subscriptionPlanJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UsageSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param UsageSearchBasic $basic
     * @return \Nzolt\NetSuite\UsageSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return \Nzolt\NetSuite\UsageSearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return \Nzolt\NetSuite\UsageSearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getSubscriptionPlanJoin()
    {
      return $this->subscriptionPlanJoin;
    }

    /**
     * @param ItemSearchBasic $subscriptionPlanJoin
     * @return \Nzolt\NetSuite\UsageSearch
     */
    public function setSubscriptionPlanJoin($subscriptionPlanJoin)
    {
      $this->subscriptionPlanJoin = $subscriptionPlanJoin;
      return $this;
    }

}
