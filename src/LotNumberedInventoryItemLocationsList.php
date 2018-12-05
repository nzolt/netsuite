<?php

namespace Nzolt\NetSuite;

class LotNumberedInventoryItemLocationsList
{

    /**
     * @var LotNumberedInventoryItemLocations[] $locations
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
     * @return LotNumberedInventoryItemLocations[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param LotNumberedInventoryItemLocations[] $locations
     * @return \Nzolt\NetSuite\LotNumberedInventoryItemLocationsList
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItemLocationsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
