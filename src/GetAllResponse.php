<?php

namespace Nzolt\NetSuite;

class GetAllResponse
{

    /**
     * @var GetAllResult $getAllResult
     */
    protected $getAllResult = null;

    /**
     * @param GetAllResult $getAllResult
     */
    public function __construct($getAllResult)
    {
      $this->getAllResult = $getAllResult;
    }

    /**
     * @return GetAllResult
     */
    public function getGetAllResult()
    {
      return $this->getAllResult;
    }

    /**
     * @param GetAllResult $getAllResult
     * @return \Nzolt\NetSuite\GetAllResponse
     */
    public function setGetAllResult($getAllResult)
    {
      $this->getAllResult = $getAllResult;
      return $this;
    }

}
