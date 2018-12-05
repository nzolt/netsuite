<?php

namespace Nzolt\NetSuite;

class ItemVendorList
{

    /**
     * @var ItemVendor[] $itemVendor
     */
    protected $itemVendor = null;

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
     * @return ItemVendor[]
     */
    public function getItemVendor()
    {
      return $this->itemVendor;
    }

    /**
     * @param ItemVendor[] $itemVendor
     * @return \Nzolt\NetSuite\ItemVendorList
     */
    public function setItemVendor(array $itemVendor = null)
    {
      $this->itemVendor = $itemVendor;
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
     * @return \Nzolt\NetSuite\ItemVendorList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
