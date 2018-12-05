<?php

namespace Nzolt\NetSuite;

class PricingMatrix
{

    /**
     * @var Pricing[] $pricing
     */
    protected $pricing = null;

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
     * @return Pricing[]
     */
    public function getPricing()
    {
      return $this->pricing;
    }

    /**
     * @param Pricing[] $pricing
     * @return \Nzolt\NetSuite\PricingMatrix
     */
    public function setPricing(array $pricing = null)
    {
      $this->pricing = $pricing;
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
     * @return \Nzolt\NetSuite\PricingMatrix
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
