<?php

namespace Nzolt\NetSuite;

class ItemFulfillmentPackageUpsList
{

    /**
     * @var ItemFulfillmentPackageUps[] $packageUps
     */
    protected $packageUps = null;

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
     * @return ItemFulfillmentPackageUps[]
     */
    public function getPackageUps()
    {
      return $this->packageUps;
    }

    /**
     * @param ItemFulfillmentPackageUps[] $packageUps
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUpsList
     */
    public function setPackageUps(array $packageUps = null)
    {
      $this->packageUps = $packageUps;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentPackageUpsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
