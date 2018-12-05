<?php

namespace Nzolt\NetSuite;

class AsyncStatusResponse
{

    /**
     * @var AsyncStatusResult $asyncStatusResult
     */
    protected $asyncStatusResult = null;

    /**
     * @param AsyncStatusResult $asyncStatusResult
     */
    public function __construct($asyncStatusResult)
    {
      $this->asyncStatusResult = $asyncStatusResult;
    }

    /**
     * @return AsyncStatusResult
     */
    public function getAsyncStatusResult()
    {
      return $this->asyncStatusResult;
    }

    /**
     * @param AsyncStatusResult $asyncStatusResult
     * @return \Nzolt\NetSuite\AsyncStatusResponse
     */
    public function setAsyncStatusResult($asyncStatusResult)
    {
      $this->asyncStatusResult = $asyncStatusResult;
      return $this;
    }

}
