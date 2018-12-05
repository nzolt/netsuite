<?php

namespace Nzolt\NetSuite;

class CalendarEventResourceList
{

    /**
     * @var CalendarEventResource[] $resource
     */
    protected $resource = null;

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
     * @return CalendarEventResource[]
     */
    public function getResource()
    {
      return $this->resource;
    }

    /**
     * @param CalendarEventResource[] $resource
     * @return \Nzolt\NetSuite\CalendarEventResourceList
     */
    public function setResource(array $resource = null)
    {
      $this->resource = $resource;
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
     * @return \Nzolt\NetSuite\CalendarEventResourceList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
