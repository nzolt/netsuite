<?php

namespace Nzolt\NetSuite;

class LocationRegionsList
{

    /**
     * @var LocationRegions[] $locationRegions
     */
    protected $locationRegions = null;

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
     * @return LocationRegions[]
     */
    public function getLocationRegions()
    {
      return $this->locationRegions;
    }

    /**
     * @param LocationRegions[] $locationRegions
     * @return \Nzolt\NetSuite\LocationRegionsList
     */
    public function setLocationRegions(array $locationRegions = null)
    {
      $this->locationRegions = $locationRegions;
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
     * @return \Nzolt\NetSuite\LocationRegionsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
