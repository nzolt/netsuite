<?php

namespace Nzolt\NetSuite;

class InvoiceExpCostList
{

    /**
     * @var InvoiceExpCost[] $expCost
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
     * @return InvoiceExpCost[]
     */
    public function getExpCost()
    {
      return $this->expCost;
    }

    /**
     * @param InvoiceExpCost[] $expCost
     * @return \Nzolt\NetSuite\InvoiceExpCostList
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
     * @return \Nzolt\NetSuite\InvoiceExpCostList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
