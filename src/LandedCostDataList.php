<?php

namespace Nzolt\NetSuite;

class LandedCostDataList
{

    /**
     * @var LandedCostData[] $landedCostData
     */
    protected $landedCostData = null;

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
     * @return LandedCostData[]
     */
    public function getLandedCostData()
    {
      return $this->landedCostData;
    }

    /**
     * @param LandedCostData[] $landedCostData
     * @return \Nzolt\NetSuite\LandedCostDataList
     */
    public function setLandedCostData(array $landedCostData = null)
    {
      $this->landedCostData = $landedCostData;
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
     * @return \Nzolt\NetSuite\LandedCostDataList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
