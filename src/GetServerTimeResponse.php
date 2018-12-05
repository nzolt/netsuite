<?php

namespace Nzolt\NetSuite;

class GetServerTimeResponse
{

    /**
     * @var GetServerTimeResult $getServerTimeResult
     */
    protected $getServerTimeResult = null;

    /**
     * @param GetServerTimeResult $getServerTimeResult
     */
    public function __construct($getServerTimeResult)
    {
      $this->getServerTimeResult = $getServerTimeResult;
    }

    /**
     * @return GetServerTimeResult
     */
    public function getGetServerTimeResult()
    {
      return $this->getServerTimeResult;
    }

    /**
     * @param GetServerTimeResult $getServerTimeResult
     * @return \Nzolt\NetSuite\GetServerTimeResponse
     */
    public function setGetServerTimeResult($getServerTimeResult)
    {
      $this->getServerTimeResult = $getServerTimeResult;
      return $this;
    }

}
