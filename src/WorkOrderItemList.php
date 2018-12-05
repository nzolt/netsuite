<?php

namespace Nzolt\NetSuite;

class WorkOrderItemList
{

    /**
     * @var WorkOrderItem[] $item
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
     * @return WorkOrderItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param WorkOrderItem[] $item
     * @return \Nzolt\NetSuite\WorkOrderItemList
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
     * @return \Nzolt\NetSuite\WorkOrderItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
