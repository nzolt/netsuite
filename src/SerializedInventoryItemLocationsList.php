<?php

namespace Nzolt\NetSuite;

class SerializedInventoryItemLocationsList
{

    /**
     * @var SerializedInventoryItemLocations[] $locations
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
     * @return SerializedInventoryItemLocations[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param SerializedInventoryItemLocations[] $locations
     * @return \Nzolt\NetSuite\SerializedInventoryItemLocationsList
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
     * @return \Nzolt\NetSuite\SerializedInventoryItemLocationsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
