<?php

namespace Nzolt\NetSuite;

class ItemFulfillmentPackageList
{

    /**
     * @var ItemFulfillmentPackage[] $package
     */
    protected $package = null;

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
     * @return ItemFulfillmentPackage[]
     */
    public function getPackage()
    {
      return $this->package;
    }

    /**
     * @param ItemFulfillmentPackage[] $package
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageList
     */
    public function setPackage(array $package = null)
    {
      $this->package = $package;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
