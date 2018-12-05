<?php

namespace Nzolt\NetSuite;

class GetDataCenterUrlsResponse
{

    /**
     * @var GetDataCenterUrlsResult $getDataCenterUrlsResult
     */
    protected $getDataCenterUrlsResult = null;

    /**
     * @param GetDataCenterUrlsResult $getDataCenterUrlsResult
     */
    public function __construct($getDataCenterUrlsResult)
    {
      $this->getDataCenterUrlsResult = $getDataCenterUrlsResult;
    }

    /**
     * @return GetDataCenterUrlsResult
     */
    public function getGetDataCenterUrlsResult()
    {
      return $this->getDataCenterUrlsResult;
    }

    /**
     * @param GetDataCenterUrlsResult $getDataCenterUrlsResult
     * @return \Nzolt\NetSuite\GetDataCenterUrlsResponse
     */
    public function setGetDataCenterUrlsResult($getDataCenterUrlsResult)
    {
      $this->getDataCenterUrlsResult = $getDataCenterUrlsResult;
      return $this;
    }

}
