<?php

namespace Nzolt\NetSuite;

class ItemFulfillmentPackageFedExList
{

    /**
     * @var ItemFulfillmentPackageFedEx[] $packageFedEx
     */
    protected $packageFedEx = null;

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
     * @return ItemFulfillmentPackageFedEx[]
     */
    public function getPackageFedEx()
    {
      return $this->packageFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedEx[] $packageFedEx
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedExList
     */
    public function setPackageFedEx(array $packageFedEx = null)
    {
      $this->packageFedEx = $packageFedEx;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageFedExList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
