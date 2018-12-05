<?php

namespace Nzolt\NetSuite;

class TransferOrderItemList
{

    /**
     * @var TransferOrderItem[] $item
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
     * @return TransferOrderItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param TransferOrderItem[] $item
     * @return \Nzolt\NetSuite\TransferOrderItemList
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
     * @return \Nzolt\NetSuite\TransferOrderItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
