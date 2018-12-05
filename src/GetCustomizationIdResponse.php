<?php

namespace Nzolt\NetSuite;

class GetCustomizationIdResponse
{

    /**
     * @var GetCustomizationIdResult $getCustomizationIdResult
     */
    protected $getCustomizationIdResult = null;

    /**
     * @param GetCustomizationIdResult $getCustomizationIdResult
     */
    public function __construct($getCustomizationIdResult)
    {
      $this->getCustomizationIdResult = $getCustomizationIdResult;
    }

    /**
     * @return GetCustomizationIdResult
     */
    public function getGetCustomizationIdResult()
    {
      return $this->getCustomizationIdResult;
    }

    /**
     * @param GetCustomizationIdResult $getCustomizationIdResult
     * @return \Nzolt\NetSuite\GetCustomizationIdResponse
     */
    public function setGetCustomizationIdResult($getCustomizationIdResult)
    {
      $this->getCustomizationIdResult = $getCustomizationIdResult;
      return $this;
    }

}
