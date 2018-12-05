<?php

namespace Nzolt\NetSuite;

class ItemReceiptItemList
{

    /**
     * @var ItemReceiptItem[] $item
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
     * @return ItemReceiptItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemReceiptItem[] $item
     * @return \Nzolt\NetSuite\ItemReceiptItemList
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
     * @return \Nzolt\NetSuite\ItemReceiptItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
