<?php

namespace Nzolt\NetSuite;

class InventoryNumberLocationsList
{

    /**
     * @var InventoryNumberLocations[] $locations
     */
    protected $locations = null;

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
     * @return InventoryNumberLocations[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param InventoryNumberLocations[] $locations
     * @return \Nzolt\NetSuite\InventoryNumberLocationsList
     */
    public function setLocations(array $locations = null)
    {
      $this->locations = $locations;
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
     * @return \Nzolt\NetSuite\InventoryNumberLocationsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
