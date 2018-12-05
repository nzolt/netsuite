<?php

namespace Nzolt\NetSuite;

class UsageSearchRow extends SearchRow
{

    /**
     * @var UsageSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var ItemSearchRowBasic $subscriptionPlanJoin
     */
    protected $subscriptionPlanJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UsageSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param UsageSearchRowBasic $basic
     * @return \Nzolt\NetSuite\UsageSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return \Nzolt\NetSuite\UsageSearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return \Nzolt\NetSuite\UsageSearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getSubscriptionPlanJoin()
    {
      return $this->subscriptionPlanJoin;
    }

    /**
     * @param ItemSearchRowBasic $subscriptionPlanJoin
     * @return \Nzolt\NetSuite\UsageSearchRow
     */
    public function setSubscriptionPlanJoin($subscriptionPlanJoin)
    {
      $this->subscriptionPlanJoin = $subscriptionPlanJoin;
      return $this;
    }

}
