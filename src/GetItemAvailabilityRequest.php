<?php

namespace Nzolt\NetSuite;

class GetItemAvailabilityRequest
{

    /**
     * @var ItemAvailabilityFilter $itemAvailabilityFilter
     */
    protected $itemAvailabilityFilter = null;

    /**
     * @param ItemAvailabilityFilter $itemAvailabilityFilter
     */
    public function __construct($itemAvailabilityFilter)
    {
      $this->itemAvailabilityFilter = $itemAvailabilityFilter;
    }

    /**
     * @return ItemAvailabilityFilter
     */
    public function getItemAvailabilityFilter()
    {
      return $this->itemAvailabilityFilter;
    }

    /**
     * @param ItemAvailabilityFilter $itemAvailabilityFilter
     * @return \Nzolt\NetSuite\GetItemAvailabilityRequest
     */
    public function setItemAvailabilityFilter($itemAvailabilityFilter)
    {
      $this->itemAvailabilityFilter = $itemAvailabilityFilter;
      return $this;
    }

}
