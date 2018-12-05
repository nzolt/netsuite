<?php

namespace Nzolt\NetSuite;

class LocationRegions
{

    /**
     * @var RecordRef $region
     */
    protected $region = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getRegion()
    {
      return $this->region;
    }

    /**
     * @param RecordRef $region
     * @return \Nzolt\NetSuite\LocationRegions
     */
    public function setRegion($region)
    {
      $this->region = $region;
      return $this;
    }

}
