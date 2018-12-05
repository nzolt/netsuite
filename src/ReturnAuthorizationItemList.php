<?php

namespace Nzolt\NetSuite;

class ReturnAuthorizationItemList
{

    /**
     * @var ReturnAuthorizationItem[] $item
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
     * @return ReturnAuthorizationItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ReturnAuthorizationItem[] $item
     * @return \Nzolt\NetSuite\ReturnAuthorizationItemList
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
