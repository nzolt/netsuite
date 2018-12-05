<?php

namespace Nzolt\NetSuite;

class GetItemAvailabilityResult
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var ItemAvailabilityList $itemAvailabilityList
     */
    protected $itemAvailabilityList = null;

    /**
     * @param Status $status
     */
    public function __construct($status)
    {
      $this->status = $status;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param Status $status
     * @return \Nzolt\NetSuite\GetItemAvailabilityResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return ItemAvailabilityList
     */
    public function getItemAvailabilityList()
    {
      return $this->itemAvailabilityList;
    }

    /**
     * @param ItemAvailabilityList $itemAvailabilityList
     * @return \Nzolt\NetSuite\GetItemAvailabilityResult
     */
    public function setItemAvailabilityList($itemAvailabilityList)
    {
      $this->itemAvailabilityList = $itemAvailabilityList;
      return $this;
    }

}
