<?php

namespace Nzolt\NetSuite;

class InvoiceItemCostList
{

    /**
     * @var InvoiceItemCost[] $itemCost
     */
    protected $itemCost = null;

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
     * @return InvoiceItemCost[]
     */
    public function getItemCost()
    {
      return $this->itemCost;
    }

    /**
     * @param InvoiceItemCost[] $itemCost
     * @return \Nzolt\NetSuite\InvoiceItemCostList
     */
    public function setItemCost(array $itemCost = null)
    {
      $this->itemCost = $itemCost;
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
     * @return \Nzolt\NetSuite\InvoiceItemCostList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
