<?php

namespace Nzolt\NetSuite;

class ItemFulfillmentItemList
{

    /**
     * @var ItemFulfillmentItem[] $item
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
     * @return ItemFulfillmentItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemFulfillmentItem[] $item
     * @return \Nzolt\NetSuite\ItemFulfillmentItemList
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
