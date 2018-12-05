<?php

namespace Nzolt\NetSuite;

class CalendarEventResource
{

    /**
     * @var RecordRef $resource
     */
    protected $resource = null;

    /**
     * @var string $location
     */
    protected $location = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getResource()
    {
      return $this->resource;
    }

    /**
     * @param RecordRef $resource
     * @return \Nzolt\NetSuite\CalendarEventResource
     */
    public function setResource($resource)
    {
      $this->resource = $resource;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param string $location
     * @return \Nzolt\NetSuite\CalendarEventResource
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

}
