<?php

namespace Nzolt\NetSuite;

class CashSaleExpCostList
{

    /**
     * @var CashSaleExpCost[] $expCost
     */
    protected $expCost = null;

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
     * @return CashSaleExpCost[]
     */
    public function getExpCost()
    {
      return $this->expCost;
    }

    /**
     * @param CashSaleExpCost[] $expCost
     * @return \Nzolt\NetSuite\CashSaleExpCostList
     */
    public function setExpCost(array $expCost = null)
    {
      $this->expCost = $expCost;
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
     * @return \Nzolt\NetSuite\CashSaleExpCostList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
