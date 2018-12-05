<?php

namespace Nzolt\NetSuite;

class SubsidiaryNexus
{

    /**
     * @var RecordRef $nexusId
     */
    protected $nexusId = null;

    /**
     * @var string $country
     */
    protected $country = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getNexusId()
    {
      return $this->nexusId;
    }

    /**
     * @param RecordRef $nexusId
     * @return \Nzolt\NetSuite\SubsidiaryNexus
     */
    public function setNexusId($nexusId)
    {
      $this->nexusId = $nexusId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \Nzolt\NetSuite\SubsidiaryNexus
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

}
