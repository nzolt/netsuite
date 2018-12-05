<?php

namespace Nzolt\NetSuite;

class GetItemAvailabilityResponse
{

    /**
     * @var GetItemAvailabilityResult $getItemAvailabilityResult
     */
    protected $getItemAvailabilityResult = null;

    /**
     * @param GetItemAvailabilityResult $getItemAvailabilityResult
     */
    public function __construct($getItemAvailabilityResult)
    {
      $this->getItemAvailabilityResult = $getItemAvailabilityResult;
    }

    /**
     * @return GetItemAvailabilityResult
     */
    public function getGetItemAvailabilityResult()
    {
      return $this->getItemAvailabilityResult;
    }

    /**
     * @param GetItemAvailabilityResult $getItemAvailabilityResult
     * @return \Nzolt\NetSuite\GetItemAvailabilityResponse
     */
    public function setGetItemAvailabilityResult($getItemAvailabilityResult)
    {
      $this->getItemAvailabilityResult = $getItemAvailabilityResult;
      return $this;
    }

}
