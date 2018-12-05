<?php

namespace Nzolt\NetSuite;

class GetAsyncResultResponse
{

    /**
     * @var AsyncResult $asyncResult
     */
    protected $asyncResult = null;

    /**
     * @param AsyncResult $asyncResult
     */
    public function __construct($asyncResult)
    {
      $this->asyncResult = $asyncResult;
    }

    /**
     * @return AsyncResult
     */
    public function getAsyncResult()
    {
      return $this->asyncResult;
    }

    /**
     * @param AsyncResult $asyncResult
     * @return \Nzolt\NetSuite\GetAsyncResultResponse
     */
    public function setAsyncResult($asyncResult)
    {
      $this->asyncResult = $asyncResult;
      return $this;
    }

}
