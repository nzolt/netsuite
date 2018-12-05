<?php

namespace Nzolt\NetSuite;

class VendorReturnAuthorizationItemList
{

    /**
     * @var VendorReturnAuthorizationItem[] $item
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
     * @return VendorReturnAuthorizationItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param VendorReturnAuthorizationItem[] $item
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItemList
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
