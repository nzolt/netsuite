<?php

namespace Nzolt\NetSuite;

class ItemFulfillmentPackageUspsList
{

    /**
     * @var ItemFulfillmentPackageUsps[] $packageUsps
     */
    protected $packageUsps = null;

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
     * @return ItemFulfillmentPackageUsps[]
     */
    public function getPackageUsps()
    {
      return $this->packageUsps;
    }

    /**
     * @param ItemFulfillmentPackageUsps[] $packageUsps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUspsList
     */
    public function setPackageUsps(array $packageUsps = null)
    {
      $this->packageUsps = $packageUsps;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUspsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
