<?php

namespace Nzolt\NetSuite;

class PurchaseOrderItemList
{

    /**
     * @var PurchaseOrderItem[] $item
     */
    protected $item = null;

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
     * @return PurchaseOrderItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PurchaseOrderItem[] $item
     * @return \Nzolt\NetSuite\PurchaseOrderItemList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
