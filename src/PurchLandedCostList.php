<?php

namespace Nzolt\NetSuite;

class PurchLandedCostList
{

    /**
     * @var LandedCostSummary[] $landedCost
     */
    protected $landedCost = null;

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
     * @return LandedCostSummary[]
     */
    public function getLandedCost()
    {
      return $this->landedCost;
    }

    /**
     * @param LandedCostSummary[] $landedCost
     * @return \Nzolt\NetSuite\PurchLandedCostList
     */
    public function setLandedCost(array $landedCost = null)
    {
      $this->landedCost = $landedCost;
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
     * @return \Nzolt\NetSuite\PurchLandedCostList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
