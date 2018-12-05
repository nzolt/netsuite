<?php

namespace Nzolt\NetSuite;

class LandedCost extends Record
{

    /**
     * @var LandedCostDataList $landedCostDataList
     */
    protected $landedCostDataList = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LandedCostDataList
     */
    public function getLandedCostDataList()
    {
      return $this->landedCostDataList;
    }

    /**
     * @param LandedCostDataList $landedCostDataList
     * @return \Nzolt\NetSuite\LandedCost
     */
    public function setLandedCostDataList($landedCostDataList)
    {
      $this->landedCostDataList = $landedCostDataList;
      return $this;
    }

}
