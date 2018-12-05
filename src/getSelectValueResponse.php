<?php

namespace Nzolt\NetSuite;

class getSelectValueResponse
{

    /**
     * @var GetSelectValueResult $getSelectValueResult
     */
    protected $getSelectValueResult = null;

    /**
     * @param GetSelectValueResult $getSelectValueResult
     */
    public function __construct($getSelectValueResult)
    {
      $this->getSelectValueResult = $getSelectValueResult;
    }

    /**
     * @return GetSelectValueResult
     */
    public function getGetSelectValueResult()
    {
      return $this->getSelectValueResult;
    }

    /**
     * @param GetSelectValueResult $getSelectValueResult
     * @return \Nzolt\NetSuite\getSelectValueResponse
     */
    public function setGetSelectValueResult($getSelectValueResult)
    {
      $this->getSelectValueResult = $getSelectValueResult;
      return $this;
    }

}
