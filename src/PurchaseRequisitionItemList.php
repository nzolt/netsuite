<?php

namespace Nzolt\NetSuite;

class PurchaseRequisitionItemList
{

    /**
     * @var PurchaseRequisitionItem[] $purchaseRequisitionItem
     */
    protected $purchaseRequisitionItem = null;

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
     * @return PurchaseRequisitionItem[]
     */
    public function getPurchaseRequisitionItem()
    {
      return $this->purchaseRequisitionItem;
    }

    /**
     * @param PurchaseRequisitionItem[] $purchaseRequisitionItem
     * @return \Nzolt\NetSuite\PurchaseRequisitionItemList
     */
    public function setPurchaseRequisitionItem(array $purchaseRequisitionItem = null)
    {
      $this->purchaseRequisitionItem = $purchaseRequisitionItem;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
