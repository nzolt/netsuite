<?php

namespace Nzolt\NetSuite;

class CustomerItemPricingList
{

    /**
     * @var CustomerItemPricing[] $itemPricing
     */
    protected $itemPricing = null;

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
     * @return CustomerItemPricing[]
     */
    public function getItemPricing()
    {
      return $this->itemPricing;
    }

    /**
     * @param CustomerItemPricing[] $itemPricing
     * @return \Nzolt\NetSuite\CustomerItemPricingList
     */
    public function setItemPricing(array $itemPricing = null)
    {
      $this->itemPricing = $itemPricing;
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
     * @return \Nzolt\NetSuite\CustomerItemPricingList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
