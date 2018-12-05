<?php

namespace Nzolt\NetSuite;

class GetDeletedResponse
{

    /**
     * @var GetDeletedResult $getDeletedResult
     */
    protected $getDeletedResult = null;

    /**
     * @param GetDeletedResult $getDeletedResult
     */
    public function __construct($getDeletedResult)
    {
      $this->getDeletedResult = $getDeletedResult;
    }

    /**
     * @return GetDeletedResult
     */
    public function getGetDeletedResult()
    {
      return $this->getDeletedResult;
    }

    /**
     * @param GetDeletedResult $getDeletedResult
     * @return \Nzolt\NetSuite\GetDeletedResponse
     */
    public function setGetDeletedResult($getDeletedResult)
    {
      $this->getDeletedResult = $getDeletedResult;
      return $this;
    }

}
