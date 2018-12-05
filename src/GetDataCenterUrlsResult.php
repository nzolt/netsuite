<?php

namespace Nzolt\NetSuite;

class GetDataCenterUrlsResult
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var DataCenterUrls $dataCenterUrls
     */
    protected $dataCenterUrls = null;

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
     * @return \Nzolt\NetSuite\GetDataCenterUrlsResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return DataCenterUrls
     */
    public function getDataCenterUrls()
    {
      return $this->dataCenterUrls;
    }

    /**
     * @param DataCenterUrls $dataCenterUrls
     * @return \Nzolt\NetSuite\GetDataCenterUrlsResult
     */
    public function setDataCenterUrls($dataCenterUrls)
    {
      $this->dataCenterUrls = $dataCenterUrls;
      return $this;
    }

}
