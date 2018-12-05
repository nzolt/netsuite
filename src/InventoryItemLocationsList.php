<?php

namespace Nzolt\NetSuite;

class InventoryItemLocationsList
{

    /**
     * @var InventoryItemLocations[] $locations
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
     * @return InventoryItemLocations[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param InventoryItemLocations[] $locations
     * @return \Nzolt\NetSuite\InventoryItemLocationsList
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
     * @return \Nzolt\NetSuite\InventoryItemLocationsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
