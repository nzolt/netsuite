<?php

namespace Nzolt\NetSuite;

class LocationBusinessHoursList
{

    /**
     * @var LocationBusinessHours[] $locationBusinessHours
     */
    protected $locationBusinessHours = null;

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
     * @return LocationBusinessHours[]
     */
    public function getLocationBusinessHours()
    {
      return $this->locationBusinessHours;
    }

    /**
     * @param LocationBusinessHours[] $locationBusinessHours
     * @return \Nzolt\NetSuite\LocationBusinessHoursList
     */
    public function setLocationBusinessHours(array $locationBusinessHours = null)
    {
      $this->locationBusinessHours = $locationBusinessHours;
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
     * @return \Nzolt\NetSuite\LocationBusinessHoursList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
