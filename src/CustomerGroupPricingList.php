<?php

namespace Nzolt\NetSuite;

class CustomerGroupPricingList
{

    /**
     * @var CustomerGroupPricing[] $groupPricing
     */
    protected $groupPricing = null;

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
     * @return CustomerGroupPricing[]
     */
    public function getGroupPricing()
    {
      return $this->groupPricing;
    }

    /**
     * @param CustomerGroupPricing[] $groupPricing
     * @return \Nzolt\NetSuite\CustomerGroupPricingList
     */
    public function setGroupPricing(array $groupPricing = null)
    {
      $this->groupPricing = $groupPricing;
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
     * @return \Nzolt\NetSuite\CustomerGroupPricingList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
